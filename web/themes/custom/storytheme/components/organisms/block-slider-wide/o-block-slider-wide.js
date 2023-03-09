/**
 * @file
 * This is component script template.
 */
 (({ behaviors }) => {
  behaviors.storytheme_storybook_o_block_slider_wide = {
    attach: (context, settings) => {
      const customConfig =
        settings &&
        settings.behaviors &&
        settings.behaviors.storytheme_storybook_o_block_slider_wide &&
        settings.behaviors.storytheme_storybook_o_block_slider_wide
          .entries
          ? settings.behaviors.storytheme_storybook_o_block_slider_wide
              .entries
          : '';
      const config = {
        entries: [
          {
            className: 'o-block-slider-wide',
          },
          ...customConfig,
        ],
        processingName: 'o-block-slider-wide',
      };

      config.entries.forEach((entry) => {
        once(config.processingName, `.${entry.className}`, context).forEach(
          (el) => {
            behaviors.storytheme_storybook_o_block_slider_wide.handler(
              el,
              entry,
            );
          },
        );
      });
    },
    handler: (el, entry) => {
      // eslint-disable-next-line no-console
      console.log(el, entry);
    },
  };
})(Drupal);
