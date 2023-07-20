const path = require("path");
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");
const webpack = require('webpack');

var dotenv = require('dotenv').config({path: __dirname + '/.env'});

module.exports = {
  mode: 'development',

  entry: './src/app.js',

  output: {
    filename: "output.js",
    path: path.resolve( __dirname, 'dist' )
  },

  module: {
    rules: [
      {
        test: /\.css$/i,
        use: ["style-loader", "css-loader", "postcss-loader"],
      },
    ],
  },

  plugins: [
    new BrowserSyncPlugin({
      proxy: (dotenv.parsed.HAS_SSL === 'true' ? 'https://' : 'http://') + dotenv.parsed.BASE_URL + '/',
      host: dotenv.parsed.BASE_URL,
      // port: 8080,
      injectChanges: true,
      files: [
        '**/*.php',
        'src/*'
      ],
      reloadDelay: 0,
      notify: false
    }, { reload: false })
  ]
}
