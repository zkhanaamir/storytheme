/**
 * @file
 * This is component script template.
 */
 (({ behaviors }) => {
  behaviors.storytheme_storybook_m_footer_menu = {
    attach: (context, settings) => {
      const customConfig =
        settings &&
        settings.behaviors &&
        settings.behaviors.storytheme_storybook_m_footer_menu &&
        settings.behaviors.storytheme_storybook_m_footer_menu.entries
          ? settings.behaviors.storytheme_storybook_m_footer_menu
              .entries
          : '';
      const config = {
        entries: [
          {
            className: 'm-footer-menu',
          },
          ...customConfig,
        ],
        processingName: 'm-footer-menu',
      };

      config.entries.forEach((entry) => {
        once(config.processingName, `.${entry.className}`, context).forEach(
          (el) => {
            behaviors.storytheme_storybook_m_footer_menu.handler(
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
