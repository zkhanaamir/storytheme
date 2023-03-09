/**
 * @file
 * This is component script template.
 */
 (({ behaviors }) => {
  behaviors.storytheme_storybook_a_text = {
    attach: (context, settings) => {
      const customConfig =
        settings &&
        settings.behaviors &&
        settings.behaviors.storytheme_storybook_a_text &&
        settings.behaviors.storytheme_storybook_a_text.entries
          ? settings.behaviors.storytheme_storybook_a_text.entries
          : '';
      const config = {
        entries: [
          {
            className: 'a-text',
          },
          ...customConfig,
        ],
        processingName: 'a-text',
      };

      config.entries.forEach((entry) => {
        once(config.processingName, `.${entry.className}`, context).forEach(
          (el) => {
            behaviors.storytheme_storybook_a_text.handler(el, entry);
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
