/**
 * @file
 * This is component script template.
 */
 (({ behaviors }) => {
  behaviors.storytheme_storybook_m_brand = {
    attach: (context, settings) => {
      const customConfig =
        settings &&
        settings.behaviors &&
        settings.behaviors.storytheme_storybook_m_brand &&
        settings.behaviors.storytheme_storybook_m_brand.entries
          ? settings.behaviors.storytheme_storybook_m_brand.entries
          : '';
      const config = {
        entries: [
          {
            className: 'm-brand',
          },
          ...customConfig,
        ],
        processingName: 'm-brand',
      };

      config.entries.forEach((entry) => {
        once(config.processingName, `.${entry.className}`, context).forEach(
          (el) => {
            behaviors.storytheme_storybook_m_brand.handler(el, entry);
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
