/**
 * @file
 * This is component script template.
 */
(({ behaviors }) => {
  behaviors.storytheme_storybook_a_button = {
    defaultEntry: () => {
      return {
        className: 'a-button',
        processingName: 'storybook-a-button',
      };
    },
    customEntry: () => {
      // If you need a custom entry (in case if for example in drupal
      // you have other classnames than in components) - you can create
      // a new .js file in src/js folder, and put into it the following
      // construction:
      //     (({ behaviors }) => {
      //       behaviors.storytheme_storybook_a_button.customEntry = () => {
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
      let entries = [behaviors.storytheme_storybook_a_button.defaultEntry()];
      if (behaviors.storytheme_storybook_a_button.customEntry()) {
        entries.push(...behaviors.storytheme_storybook_a_button.customEntry());
      }
      return entries;
    },
    attach: (context) => {
      behaviors.storytheme_storybook_a_button.entries().forEach((entry) => {
        once(
          entry.processingName,
          `.${entry.className}`,
          context,
        ).forEach((el) => {
          behaviors.storytheme_storybook_a_button.handler({ el, entry });
        });
      });
    },
    handler: (obj) => {
      // eslint-disable-next-line no-console
      console.log(obj.el);
    },
  };
})(Drupal);