const purgecss = require('@fullhuman/postcss-purgecss')
const autoprefixer = require('autoprefixer')
module.exports = {
  plugins: [
    purgecss({
      content: ['./**/*.blade.php']
    }),
    autoprefixer(),
  ]
}
