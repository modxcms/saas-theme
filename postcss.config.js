module.exports = {
    parser: 'postcss-scss',
    plugins: [
        require('autoprefixer'),
        require('postcss-nested'),
        require('postcss-utilities'),
        require('postcss-import'),
    ]
}
