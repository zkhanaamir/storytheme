/**
 * @file
 * This is component script template.
 */
 (({ behaviors }) => {
  behaviors.storytheme_storybook_m_logo = {
    attach: (context, settings) => {
      const customConfig =
        settings &&
        settings.behaviors &&
        settings.behaviors.storytheme_storybook_m_logo &&
        settings.behaviors.storytheme_storybook_m_logo.entries
          ? settings.behaviors.storytheme_storybook_m_logo.entries
          : '';
      const config = {
        entries: [
          {
            className: 'm-logo',
          },
          ...customConfig,
        ],
        processingName: 'm-logo',
      };

      config.entries.forEach((entry) => {
        once(config.processingName, `.${entry.className}`, context).forEach(
          (el) => {
            behaviors.storytheme_storybook_m_logo.handler(el, entry);
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
