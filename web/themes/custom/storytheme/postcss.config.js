const autoprefixer = require('autoprefixer');
const postcssExtendRule = require('postcss-extend-rule');
const postcssImport = require('postcss-import');
const postCssDrupalBreakpoints = require('@skilld/kaizen-breakpoints/postcss-plugin');
const postcssNested = require('postcss-nested');
const postcssDiscardEmpty = require('postcss-discard-empty');
const pxtorem = require('postcss-pxtorem');
const postcssUrl = require('postcss-url');
const stylelint = require('stylelint');

module.exports = () => ({
  map: false,
  plugins: [
    postcssImport(),
    postcssUrl([
      {
        url: 'inline',
        filter: (asset) => {
          return ['png', 'jpg', 'jpeg', 'svg', 'gif', 'webp', 'avif'].includes(asset.url.split('.').pop());
        },
      },
      {
        url: 'rebase',
        filter: (asset) => {
          return !['png', 'jpg', 'jpeg', 'svg', 'gif', 'webp', 'avif'].includes(asset.url.split('.').pop());
        },
      },
    ]),
    postCssDrupalBreakpoints({
      importFrom: './storytheme.breakpoints.yml',
      themeName: 'storytheme',
    }),
    postcssNested(),
    postcssExtendRule(),
    autoprefixer({
      cascade: false,
    }),
    postcssDiscardEmpty(),
    pxtorem({
      propList: [
        '*',
      ]
    }),
    stylelint({
      configFile: './.stylelintrc',
      fix: true
    }),
  ],
});
