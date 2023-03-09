import '@skilld/kaizen-core/helpers/focus-visible/h-focus-visible';
import '@skilld/kaizen-core/helpers/root-variables/h-root-variables';
import config from '../../storytheme.breakpoints.yml';

window.themeBreakpoints = config;

(({ behaviors }) => {
  behaviors.storythemeSvgSpritePath = {
    attach: (context, settings) => {
      window.storythemeSvgSpritePath = settings.storythemeSvgSpritePath;
    },
  };
})(Drupal);