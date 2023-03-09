/**
 * @file
 * This is component script template.
 */
 (({ behaviors }) => {
  behaviors.storytheme_storybook_a_copyright = {
    attach: (context, settings) => {
      const customConfig =
        settings &&
        settings.behaviors &&
        settings.behaviors.storytheme_storybook_a_copyright &&
        settings.behaviors.storytheme_storybook_a_copyright.entries
          ? settings.behaviors.storytheme_storybook_a_copyright.entries
          : '';
      const config = {
        entries: [
          {
            className: 'a-copyright',
          },
          ...customConfig,
        ],
        processingName: 'a-copyright',
      };

      config.entries.forEach((entry) => {
        once(config.processingName, `.${entry.className}`, context).forEach(
          (el) => {
            behaviors.storytheme_storybook_a_copyright.handler(
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
