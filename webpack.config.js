const path = require('path')
const glob = require("glob")
const config = require("./config")
const settings = config.settings

const root = settings.root;

const isProduction = process.env.NODE_ENV == 'production'
const entries = {}

if(settings.scripts.ts){
  glob.sync("./assets/ts/**/*.ts", {
    ignore: "./assets/ts/**/_*.ts",
  }).map((file) => {
    const key = file.replace("assets/ts/", "").replace(/\.[^.]+$/, '')
    entries[key] = file
  })

  module.exports = {
    mode: isProduction ? 'production' : 'development',
    entry: entries,
    output: {
      path: path.resolve(__dirname, 'assets/js/'),
      filename: '[name].js',
    },
    module: {
      rules: [
        {
          test: /\.ts$/,
          use: 'ts-loader',
          exclude: /node_modules/
        },
        {
          test: /\.css$/i,
          use: ["style-loader", "css-loader"],
        },
      ],
    },
    resolve: {
      extensions: ['.ts','.tsx', '.js','.json'],
    },
  }
}else{
  glob.sync("./assets/js/**/*.js", {
    ignore: "./assets/js/**/_*.js",
  }).map((file) => {
    const key = file.replace("assets/js/", "").replace(/\.[^.]+$/, '')
    entries[key] = file
  })

  module.exports = {
    mode: isProduction ? 'production' : 'development',
    entry: entries,
    output: {
      path: path.resolve(__dirname, 'assets/js/'),
      filename: '[name].js',
    },
    module: {
      rules: [
        {
          test: /\.js$/,
          use: 'babel-loader',
          exclude: /node_modules/
        },
        {
          test: /\.css$/i,
          use: ["style-loader", "css-loader"],
        },
      ],
    },
    resolve: {
      extensions: ['.js','.json'],
    },
    devtool: !isProduction && 'source-map',
  }
}

