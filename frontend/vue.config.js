
   const { defineConfig } = require('@vue/cli-service')

module.exports = {
  devServer: {
      allowedHosts: 'all',
    proxy: {
      '^/api': {
        target: 'https://api.flaviomartil.tech',
        ws: true,
        changeOrigin: true
      }
    }
  }
}