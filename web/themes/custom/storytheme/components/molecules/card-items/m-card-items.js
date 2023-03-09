/**
 * @file
 * This is component script template.
 */

(({ behaviors }) => {
  behaviors.storytheme_storybook_m_card_items = {
    attach: (context, settings) => {
      const customConfig =
        settings &&
        settings.behaviors &&
        settings.behaviors.storytheme_storybook_m_card_items &&
        settings.behaviors.storytheme_storybook_m_card_items.entries
          ? settings.behaviors.storytheme_storybook_m_card_items.entries
          : '';
      const config = {
        entries: [
          {
            className: 'm-card-items',
            mobileSliderClassName: 'm-card-items--mobile-slider',
            sliderClassName: 'm-card-items--slider',
            sliderElementClassName: 'splide',
          },
          ...customConfig,
        ],
        processingName: 'm-card-items',
      };

      config.entries.forEach((entry) => {
        once(config.processingName, `.${entry.className}`, context).forEach(
          (el) => {
            behaviors.storytheme_storybook_m_card_items.handler(
              el,
              entry,
            );
          },
        );
      });
    },
    handler: (el, entry) => {
      const mobileSliderEl =
        el.classList.contains(`${entry.mobileSliderClassName}`) &&
        el.querySelector(`.${entry.sliderElementClassName}`);
      const sliderEl =
        el.classList.contains(`${entry.sliderClassName}`) &&
        el.querySelector(`.${entry.sliderElementClassName}`);
      if (mobileSliderEl) {
        behaviors.storytheme_storybook_m_card_items.mobileSliderHandler(
          mobileSliderEl,
        );
      }
      if (sliderEl) {
        behaviors.storytheme_storybook_m_card_items.sliderHandler(
          sliderEl,
        );
      }
    },
    mobileSliderHandler: (sliderEl) => {
      // eslint-disable-next-line new-cap
      const slider = new window.splide(sliderEl, {
        arrows: false,
        pagination: false,
        mediaQuery: 'min',
        gap: '1.5rem',
        focusableNodes: '',
        padding: {
          left: '1rem',
          right: '3.5rem',
        },
        breakpoints: {
          481: {
            padding: {
              right: '10rem',
            },
          },
          769: {
            perPage: 2,
            padding: {
              right: '3.5rem',
            },
          },
          1025: {
            destroy: true,
          },
        },
      });
      slider.mount();
    },
    sliderHandler: (sliderEl) => {
      // eslint-disable-next-line new-cap
      const slider = new window.splide(sliderEl, {
        pagination: false,
        mediaQuery: 'min',
        gap: '1.5rem',
        focusableNodes: false,
        perMove: 1,
        padding: {
          left: '1rem',
          right: '3.5rem',
        },
        breakpoints: {
          481: {
            padding: {
              right: '10rem',
            },
          },
          769: {
            perPage: 2,
            padding: {
              right: '3.5rem',
            },
          },
          1025: {
            perPage: 1,
            gap: '1.875rem',
            padding: {
              right: 'var(--layout-horizontal-gap)',
              left: 'var(--layout-horizontal-gap)',
            },
          },
        },
      });
      slider.mount();
    },
  };
})(Drupal);
