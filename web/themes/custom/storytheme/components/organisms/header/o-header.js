/**
 * @file
 * This is component script template.
 */
 (({ behaviors }) => {
  behaviors.storytheme_storybook_o_header = {
    attach: (context, settings) => {
      const customConfig =
        settings &&
        settings.behaviors &&
        settings.behaviors.storytheme_storybook_o_header &&
        settings.behaviors.storytheme_storybook_o_header.entries
          ? settings.behaviors.storytheme_storybook_o_header.entries
          : '';
      const config = {
        entries: [
          {
            containerFocusAboveClassName: 't-page__above-header',
            containerFocusBelowClassName: 't-page__below-header',
            className: 'o-header',
            navigationClassName: 'o-header__navigation',
            showBtnClassName: 'o-header__iconic-button--show',
            hideBtnClassName: 'o-header__iconic-button--hide',
            dropdownClassName: 'o-header__dropdown',
            dropdownBottomClassName: 'o-header__dropdown-bottom',
            stateClassName: 'o-header-dropdown-shown',
            mainMenuClassName: 'm-main-menu',
            firstLevelMenuLinkClassName: 'm-main-menu__link--1-level',
            activeSubSectionClassName: 'm-main-menu__sub-section--active',
            stateSubSectionShownClassName: 'm-main-menu-sub-section-shown',
            breakpointToSwitch: 'l',
          },
          ...customConfig,
        ],
        processingName: 'o-header',
      };

      config.entries.forEach((entry) => {
        once(config.processingName, `.${entry.className}`, context).forEach(
          (el) => {
            behaviors.storytheme_storybook_o_header.handler(el, entry);
          },
        );
      });
    },
    calculateNavigationHeight: (navigation) => {
      if (navigation) {
        document.documentElement.style.setProperty(
          '--o-header-navigation-height',
          `${navigation.offsetHeight}px`,
        );
      }
    },
    isBreakpointMatching: (breakpoint) => {
      return window.matchMedia(
        window.themeBreakpoints.storytheme[breakpoint],
      ).matches;
    },
    handler: (el, entry) => {
      const { body } = document;
      const showBtn = el.querySelector(`.${entry.showBtnClassName}`);
      const hideBtn = el.querySelector(`.${entry.hideBtnClassName}`);
      const navigation = el.querySelector(`.${entry.navigationClassName}`);
      const mainMenu = el.querySelector(`.${entry.mainMenuClassName}`);
      const dropdown = el.querySelector(`.${entry.dropdownClassName}`);
      const breakpoint = entry.breakpointToSwitch;
      let isAnimating = false;
      behaviors.storytheme_storybook_o_header.calculateNavigationHeight(
        navigation,
      );
      window.addEventListener('resize', () => {
        behaviors.storytheme_storybook_o_header.calculateNavigationHeight(
          navigation,
        );
      });
      const focusedSelectorsArr = [
        'button:not([disabled])',
        'a[href]',
        'select:not([disabled])',
        'input:not([disabled])',
      ];
      const focusedSelectorsString = focusedSelectorsArr.join(', ');
      const interactiveElements = document.querySelectorAll(
        focusedSelectorsString,
      );
      interactiveElements.forEach((interactiveElement) => {
        interactiveElement.addEventListener('focus', () => {
          if (
            body.classList.contains(`${entry.stateClassName}`) &&
            !interactiveElement.closest(`.${entry.className}`)
          ) {
            if (
              interactiveElement.closest(
                `.${entry.containerFocusBelowClassName}`,
              )
            ) {
              el.querySelector(focusedSelectorsString).focus();
            } else if (
              interactiveElement.closest(
                `.${entry.containerFocusAboveClassName}`,
              )
            ) {
              el.querySelectorAll(focusedSelectorsString)[
                el.querySelectorAll(focusedSelectorsString).length - 1
              ].focus();
            }
          }
        });
      });
      if (
        dropdown &&
        !behaviors.storytheme_storybook_o_header.isBreakpointMatching(
          breakpoint,
        )
      ) {
        dropdown
          .querySelectorAll(focusedSelectorsString)
          .forEach((interactiveElement) => {
            interactiveElement.setAttribute('tabindex', '-1');
          });
      }

      window
        .matchMedia(window.themeBreakpoints.storytheme[breakpoint])
        .addEventListener('change', (e) => {
          if (e.matches) {
            el.querySelectorAll(focusedSelectorsString).forEach(
              (interactiveElement) => {
                if (interactiveElement.hasAttribute('tabindex')) {
                  interactiveElement.removeAttribute('tabindex');
                }
              },
            );

            if (body.classList.contains(entry.stateClassName)) {
              body.classList.remove(entry.stateClassName);
              const activeSubSection = el.querySelector(
                `.${entry.activeSubSectionClassName}`,
              );
              if (activeSubSection) {
                activeSubSection.classList.remove(
                  entry.activeSubSectionClassName,
                );
              }
              if (
                body.classList.contains(entry.stateSubSectionShownClassName)
              ) {
                body.classList.remove(entry.stateSubSectionShownClassName);
              }
            }
            window.clearAllBodyScrollLocks();
          }
        });

      if (showBtn && hideBtn) {
        showBtn.addEventListener('click', () => {
          if (isAnimating === false) {
            if (!body.classList.contains(entry.stateClassName)) {
              body.classList.add(entry.stateClassName);
              hideBtn.focus();

              if (dropdown) {
                const dropdownBottom = dropdown.querySelector(
                  `.${entry.dropdownBottomClassName}`,
                );
                if (dropdownBottom) {
                  dropdownBottom
                    .querySelectorAll(focusedSelectorsString)
                    .forEach((interactiveElement) => {
                      interactiveElement.removeAttribute('tabindex');
                    });
                }
              }

              if (mainMenu) {
                window.disableBodyScroll(mainMenu);

                mainMenu
                  .querySelectorAll(`.${entry.firstLevelMenuLinkClassName}`)
                  .forEach((firstLevelMenuLink) => {
                    firstLevelMenuLink.removeAttribute('tabindex');
                  });
              }

              isAnimating = true;
              setTimeout(() => {
                isAnimating = false;
              }, 350);
            }
          }
        });

        hideBtn.addEventListener('click', () => {
          if (isAnimating === false) {
            if (body.classList.contains(entry.stateClassName)) {
              body.classList.remove(entry.stateClassName);
              showBtn.focus();
              window.clearAllBodyScrollLocks();
              if (dropdown) {
                dropdown
                  .querySelectorAll(focusedSelectorsString)
                  .forEach((interactiveElement) => {
                    interactiveElement.setAttribute('tabindex', '-1');
                  });
              }
              isAnimating = true;
              setTimeout(() => {
                if (mainMenu) {
                  const activeSubSection = mainMenu.querySelector(
                    `.${entry.activeSubSectionClassName}`,
                  );

                  if (activeSubSection) {
                    activeSubSection.classList.remove(
                      entry.activeSubSectionClassName,
                    );
                    body.classList.remove(entry.stateSubSectionShownClassName);
                  }
                }
                isAnimating = false;
              }, 350);
            }
          }
        });
      }
    },
  };
})(Drupal);
