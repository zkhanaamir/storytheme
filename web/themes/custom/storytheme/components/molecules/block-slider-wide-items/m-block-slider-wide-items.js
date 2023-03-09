/**
 * @file
 * This is component script template.
 */
 (({ behaviors }) => {
  behaviors.storytheme_storybook_m_block_slider_wide_items = {
    attach: (context, settings) => {
      const customConfig =
        settings &&
        settings.behaviors &&
        settings.behaviors
          .storytheme_storybook_m_block_slider_wide_items &&
        settings.behaviors
          .storytheme_storybook_m_block_slider_wide_items.entries
          ? settings.behaviors
              .storytheme_storybook_m_block_slider_wide_items.entries
          : '';
      const config = {
        entries: [
          {
            className: 'm-block-slider-wide-items',
            sliderClassName: 'm-block-slider-wide-items__slider',
            itemClassName: 'm-block-slider-wide-items__item',
          },
          ...customConfig,
        ],
        processingName: 'm-block-slider-wide-items',
      };

      config.entries.forEach((entry) => {
        once(config.processingName, `.${entry.className}`, context).forEach(
          (el) => {
            behaviors.storytheme_storybook_m_block_slider_wide_items.handler(
              el,
              entry,
            );
          },
        );
      });
    },
    handler: (el, entry) => {
      const sliderEl = el.querySelector(`.${entry.sliderClassName}`);
      if (sliderEl) {
        const slides = sliderEl.querySelectorAll(`.${entry.itemClassName}`);
        // eslint-disable-next-line new-cap
        const slider = new window.splide(sliderEl, {
          type: slides && slides.length > 1 ? 'loop' : 'slide',
          arrows: slides && slides.length > 1,
          pagination: false,
          mediaQuery: 'min',
          gap: '1rem',
          drag: slides && slides.length > 1,
          focusableNodes: false,
          updateOnMove: true,
          width: '100%',
          padding: {
            left: '2.25rem',
            right: '2.25rem',
          },
          breakpoints: {
            1025: {
              gap: 'var(--layout-horizontal-gap)',
              speed: 600,
              padding: {
                left: 'var(--layout-horizontal-gap)',
                right: 'var(--layout-horizontal-gap)',
              },
            },
          },
        });
        slider.mount();
      }
    },
  };
})(Drupal);
