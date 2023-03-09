/**
 * @file
 * This is component script template.
 */
 (({ behaviors }) => {
  behaviors.storytheme_storybook_o_footer = {
    attach: (context, settings) => {
      const customConfig =
        settings &&
        settings.behaviors &&
        settings.behaviors.storytheme_storybook_o_footer &&
        settings.behaviors.storytheme_storybook_o_footer.entries
          ? settings.behaviors.storytheme_storybook_o_footer.entries
          : '';
      const config = {
        entries: [
          {
            className: 'o-footer',
          },
          ...customConfig,
        ],
        processingName: 'o-footer',
      };

      config.entries.forEach((entry) => {
        once(config.processingName, `.${entry.className}`, context).forEach(
          (el) => {
            behaviors.storytheme_storybook_o_footer.handler(el, entry);
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
