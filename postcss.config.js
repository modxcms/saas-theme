const cssnanoPlugin = require("cssnano");
const autoprefixer = require("autoprefixer");
const advancedPreset = require("cssnano-preset-advanced");
const postcssImport = require("postcss-import");
const postcssNested = require("postcss-nested");
const postcssExtendRule = require("postcss-extend-rule");

const preset = advancedPreset({
    discardUnused: true,
    discardDuplicates: true,
    discardOverridden: true,
    discardEmpty: true,
    discardComments: true,
    reduceIdents: true,
    mergeIdents: true,
    mergeRules: true,
});

module.exports = {
    modules: true,
    plugins: [
        postcssImport({
            path: [
                "node_modules",
                "_build/src/css",
            ],
            addModulesDirectories: ["node_modules"],
        }),
        postcssNested,
        postcssExtendRule,
        autoprefixer,
        cssnanoPlugin({ preset }),
    ]
}
