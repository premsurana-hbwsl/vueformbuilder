const path = require('path')

module.exports = {
  entry: './src/index.js',
  output: {
    path: path.resolve(__dirname, './dist'),
    filename: 'vfb-main.js'
  },
  resolve: {
    alias: {                
      vue: "vue/dist/vue.esm-bundler.js"
    }
  },
  mode: 'development',
  module: {
    rules: [
    ]
  },
  watch: true,
}