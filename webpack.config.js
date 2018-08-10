// webpack 4

const path = require('path');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const HtmlWebpackPlugin = require('html-webpack-plugin');

module.exports = {
    entry: { main: './resources/assets/js/index.js'},
    output: {
        path: path.resolve(__dirname, "web/assets/js/"),
        filename: "main.js"
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: "babel-loader"
                }
            },
            {
                test: /\.scss$/,
                use: ExtractTextPlugin.extract(
                    {
                        fallback: "style-loader",
                        use: ["css-loader", "sass-loader"]
                    })
            }
        ]
    },
    plugins: [
        new ExtractTextPlugin({filename: "../css/style.css"}
        ),
        new HtmlWebpackPlugin({
            inject: false,
            hash: true,
            template: './resources/index.php',
            filename: '../../index.php'
        })
    ]
};