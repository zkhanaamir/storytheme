/**
 * @file
 * This is component script template.
 */
 (({ behaviors }) => {
  behaviors.storytheme_storybook_m_card = {
    attach: (context, settings) => {
      const customConfig =
        settings &&
        settings.behaviors &&
        settings.behaviors.storytheme_storybook_m_card &&
        settings.behaviors.storytheme_storybook_m_card.entries
          ? settings.behaviors.storytheme_storybook_m_card.entries
          : '';
      const config = {
        entries: [
          {
            className: 'm-banner-text',
          },
          ...customConfig,
        ],
        processingName: 'm-banner-text',
      };

      config.entries.forEach((entry) => {
        once(config.processingName, `.${entry.className}`, context).forEach(
          (el) => {
            behaviors.storytheme_storybook_m_card.handler(el, entry);
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
