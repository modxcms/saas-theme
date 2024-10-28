const path = require("path");
const globSync = require("glob").sync;
const HtmlWebpackPlugin = require("html-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const { CleanWebpackPlugin } = require("clean-webpack-plugin");
const webpack = require("webpack");
const Dotenv = require("dotenv-webpack");

module.exports = (env, options) => {
  const isProd = options.mode === "production";

  return {
    mode: options.mode,
    devtool: isProd ? false : "source-map",

    entry: [
      "./_build/src/css/theme.css",
      "./_build/src/index.ts",
    ],
    devServer: {
      compress: false,
      watchFiles: {
        paths: ["./_build/src/**/*.(html|scss|ts)"],
      },
      liveReload: true,
      client: {
        overlay: true,
      },
    },

    output: {
      path: path.resolve(__dirname, "./assets/components/saas/web"),
      clean: isProd,
      library: {
        name: "SaaS",
        type: "umd",
      },
      filename: "saas.min.js",
      assetModuleFilename: "static/[name][ext][query]",
    },

    module: {
      rules: [
        {
          test: /\.ts$/,
          use: "ts-loader",
          exclude: /node_modules/,
        },
        {
          test: /\.js$/,
          exclude: /(node_modules)/,
          use: {
            loader: "babel-loader",
          },
        },
        {
          test: /\.css$/,
          use: [
            {
              loader: MiniCssExtractPlugin.loader,
            },
            {
              loader: "css-loader",
              options: {
                importLoaders: 1,
                sourceMap: true
              },
            },
            {
              loader: "postcss-loader",
              options: {
                sourceMap: true,
              },
            },
          ],
        },
        {
          test: /\.(jpg|jpeg|png|gif|svg|webp|ico)$/i,
          type: "asset/resource",
          generator: {
            filename: (pathData) => {
              return pathData.filename.replace("_build/src/", "");
            },
          },
        },
        {
          test: /\.(woff(2)?|ttf|eot)(\?v=\d+\.\d+\.\d+)?$/,
          type: "asset/resource",
          generator: {
            filename: (pathData) => {
              return pathData.filename.replace("_build/src/", "");
            },
          },
        },
        {
          test: /\.(html)$/,
          loader: "html-loader",
        },
      ],
    },

    resolve: {
      extensions: [".ts", ".js"],
    },

    plugins: [
      new Dotenv(),
      new CleanWebpackPlugin({
        cleanOnceBeforeBuildPatterns: ["!.gitignore"],
        cleanAfterEveryBuildPatterns: ["!.gitignore"],
      }),
      new MiniCssExtractPlugin({
        filename: "saas.css",
      }),
      ...globSync("./_build/src/**/*.html").map((fileName) => {
        return new HtmlWebpackPlugin({
          template: fileName,
          inject: "body",
          filename: fileName.replace("_build/src/", ""),
          minify: false,
        });
      }),
      new webpack.ProvidePlugin({}),
    ],
    optimization: {
    },
  };
};
