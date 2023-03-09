/**
 * @file
 * This is component script template.
 */
 (({ behaviors }) => {
  behaviors.storytheme_storybook_m_vedio_banner = {
    attach: (context, settings) => {
      const customConfig =
        settings &&
        settings.behaviors &&
        settings.behaviors.storytheme_storybook_m_vedio_banner &&
        settings.behaviors.storytheme_storybook_m_vedio_banner.entries
          ? settings.behaviors.storytheme_storybook_m_vedio_banner.entries
          : '';
      const config = {
        entries: [
          {
            className: 'm-vedio-banner',
          },
          ...customConfig,
        ],
        processingName: 'm-vedio-banner',
      };

      config.entries.forEach((entry) => {
        once(config.processingName, `.${entry.className}`, context).forEach(
          (el) => {
            behaviors.storytheme_storybook_m_vedio_banner.handler(el, entry);
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
