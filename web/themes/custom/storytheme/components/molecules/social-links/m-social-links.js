/**
 * @file
 * This is component script template.
 */
 (({ behaviors }) => {
  behaviors.storytheme_storybook_m_social_links = {
    attach: (context, settings) => {
      const customConfig =
        settings &&
        settings.behaviors &&
        settings.behaviors.storytheme_storybook_m_social_links &&
        settings.behaviors.storytheme_storybook_m_social_links.entries
          ? settings.behaviors.storytheme_storybook_m_social_links
              .entries
          : '';
      const config = {
        entries: [
          {
            className: 'm-social-links',
          },
          ...customConfig,
        ],
        processingName: 'm-social-links',
      };

      config.entries.forEach((entry) => {
        once(config.processingName, `.${entry.className}`, context).forEach(
          (el) => {
            behaviors.storytheme_storybook_m_social_links.handler(
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
