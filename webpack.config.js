const path = require('path');

module.exports = [{
    entry: {
        main: './src/index.js',
    },
    output: {
        path: path.resolve(__dirname, 'dist/'),
        filename: 'vfb-[name].js'
    },
    mode: 'development',
    resolve: {
		alias: {
			'vue': '@vue/runtime-dom'
		}
    },
    module: {
        rules: [
            {
                test: /\.css$/,
                use: ['style-loader', 'css-loader']
            }
        ]
    },
	watch: true
}];