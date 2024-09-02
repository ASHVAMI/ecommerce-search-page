module.exports = {
    devServer: {
      proxy: {
        '/api': {
          target: 'http://localhost:8000', // Laravel backend URL
          changeOrigin: true,
          secure: false,
          pathRewrite: { '^/api': '/api' },
        },
      },
    },
    css: {
      loaderOptions: {
        css: {
          // This is an option to pass options to css-loader
        },
        postcss: {
          // These options are passed to postcss-loader
          plugins: [
            require('tailwindcss'),
            require('autoprefixer'),
          ],
        },
      },
    },
    configureWebpack: {
      resolve: {
        alias: {
          '@': require('path').resolve(__dirname, 'src'),
        },
      },
    },
  };
  