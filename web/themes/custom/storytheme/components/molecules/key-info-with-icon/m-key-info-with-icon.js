/**
 * @file
 * This is component script template.
 */
(({ behaviors }) => {
  behaviors.storytheme_storybook_m_key_info_with_icon = {
    defaultEntry: () => {
      return {
        className: 'm-key-info-with-icon',
        processingName: 'storybook-m-key-info-with-icon',
      };
    },
    customEntry: () => {
      // If you need a custom entry (in case if for example in drupal
      // you have other classnames than in components) - you can create
      // a new .js file in src/js folder, and put into it the following
      // construction:
      //     (({ behaviors }) => {
      //       behaviors.storytheme_storybook_m_key_info_with_icon.customEntry = () => {
      //         return [
      //           {
      //             ...your configuration,
      //           },
      //           ...etc
      //         ];
      //       };
      //     })(Drupal);
      //
      // Then, you have to attach compiled version of your newly created
      // js file to drupal. Be sure you have attached it before original
      // component's js file -> because only in this case component's
      // js can catch your custom entry.
    },
    entries: () => {
      let entries = [behaviors.storytheme_storybook_m_key_info_with_icon.defaultEntry()];
      if (behaviors.storytheme_storybook_m_key_info_with_icon.customEntry()) {
        entries.push(...behaviors.storytheme_storybook_m_key_info_with_icon.customEntry());
      }
      return entries;
    },
    attach: (context) => {
      behaviors.storytheme_storybook_m_key_info_with_icon.entries().forEach((entry) => {
        once(
          entry.processingName,
          `.${entry.className}`,
          context,
        ).forEach((el) => {
          behaviors.storytheme_storybook_m_key_info_with_icon.handler({ el, entry });
        });
      });
    },
    handler: (obj) => {
      // eslint-disable-next-line no-console
      console.log(obj.el);
    },
  };
})(Drupal);