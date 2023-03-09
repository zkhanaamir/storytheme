/**
 * @file
 * This is component script template.
 */
(({ behaviors }) => {
  behaviors.storytheme_storybook_m_main_menu = {
    attach: (context, settings) => {
      const customConfig =
        settings &&
        settings.behaviors &&
        settings.behaviors.storytheme_storybook_m_main_menu &&
        settings.behaviors.storytheme_storybook_m_main_menu.entries
          ? settings.behaviors.storytheme_storybook_m_main_menu.entries
          : '';
      const config = {
        entries: [
          {
            className: 'm-main-menu',
            headerNavigationClassName: 'o-header__navigation',
            hasMenuLinkClassName: 'm-main-menu__link--has-menu',
            previousLinkClassName: 'm-main-menu__link--previous',
            subSectionClassName: 'm-main-menu__sub-section',
            itemClassName: 'm-main-menu__item',
            firstLevelMenuLinkClassName: 'm-main-menu__link--1-level',
            firstLevelMenuClassName: 'm-main-menu__list--1-level',
            secondLevelMenuClassName: 'm-main-menu__list--2-level',
            secondLevelMenuItemName: 'm-main-menu__item--2-level',
            stateClassName: 'm-main-menu-sub-section-shown',
            breakpointToSwitch: 'l',
          },
          ...customConfig,
        ],
        processingName: 'm-main-menu',
      };

      config.entries.forEach((entry) => {
        once(config.processingName, `.${entry.className}`, context).forEach(
          (el) => {
            behaviors.storytheme_storybook_m_main_menu.handler(
              el,
              entry,
            );
          },
        );
      });
    },
    isBreakpointMatching: (breakpoint) => {
      return window.matchMedia(
        window.themeBreakpoints.storytheme[breakpoint],
      ).matches;
    },
   
    handler: (el, entry) => {
      const { body } = document;
      const hasMenuLinks = el.querySelectorAll(
        `.${entry.hasMenuLinkClassName}`,
      );
      const previousLinks = el.querySelectorAll(
        `.${entry.previousLinkClassName}`,
      );
      
      const subSections = el.querySelectorAll(`.${entry.subSectionClassName}`);
      const firstLevelMenuLinks = el.querySelectorAll(
        `.${entry.firstLevelMenuLinkClassName}`,
      );
      const breakpoint = entry.breakpointToSwitch;

      if (
        !behaviors.storytheme_storybook_m_main_menu.isBreakpointMatching(
          breakpoint,
        )
      ) {
        subSections.forEach((subSection) => {
          subSection
            .querySelectorAll('a[href], button')
            .forEach((interactiveEl) => {
              interactiveEl.setAttribute('tabindex', '-1');
            });
        });
        el.querySelectorAll(
          `a.${entry.firstLevelMenuLinkClassName}.${entry.hasMenuLinkClassName}[href]`,
        ).forEach((firstLevelLink) => {
          firstLevelLink.setAttribute(
            'data-original-href',
            firstLevelLink.getAttribute('href'),
          );
          // eslint-disable-next-line no-script-url
          firstLevelLink.href = 'javascript:void(0)';
        });
      }

      window
        .matchMedia(window.themeBreakpoints.storytheme[breakpoint])
        .addEventListener('change', (e) => {
          if (e.matches) {
            subSections.forEach((subSection) => {
              subSection
                .querySelectorAll('[tabindex="-1"]')
                .forEach((interactiveEl) => {
                  interactiveEl.removeAttribute('tabindex');
                });
            });
            el.querySelectorAll('a[data-original-href]').forEach(
              (firstLevelLink) => {
                firstLevelLink.href =
                  firstLevelLink.getAttribute('data-original-href');
                firstLevelLink.removeAttribute('data-original-href');
              },
            );
          } else {
            subSections.forEach((subSection) => {
              subSection
                .querySelectorAll('a[href], button')
                .forEach((interactiveEl) => {
                  interactiveEl.setAttribute('tabindex', '-1');
                });
            });
            el.querySelectorAll(
              `a.${entry.firstLevelMenuLinkClassName}.${entry.hasMenuLinkClassName}[href]`,
            ).forEach((firstLevelLink) => {
              firstLevelLink.setAttribute(
                'data-original-href',
                firstLevelLink.getAttribute('href'),
              );
              // eslint-disable-next-line no-script-url
              firstLevelLink.href = 'javascript:void(0)';
            });
          }
          if (body.classList.contains(entry.stateClassName)) {
            body.classList.remove(entry.stateClassName);
          }
        });

      hasMenuLinks.forEach((hasMenuLink) => {
        //const parentLnk = hasMenuLink.parentNode.querySelector(`.${entry.subSectionClassName}`);
        const parentLnk = hasMenuLink.parentNode;
        console.log(hasMenuLink.parentNode)
        const level2LinkItem = parentLnk.querySelectorAll('ul')[0].querySelectorAll('li.m-main-menu__item--2-level');        
        //parentLnk.querySelectorAll('ul')[0].classList.add(`col-${level2LinkItem.length}`)
        parentLnk.classList.add(`col-${level2LinkItem.length}`);

        const menuItem = hasMenuLink.closest(`.${entry.itemClassName}`);
        hasMenuLink.addEventListener('click', () => {
          if (
            !behaviors.storytheme_storybook_m_main_menu.isBreakpointMatching(
              breakpoint,
            )
          ) {
            const subSection = hasMenuLink.parentNode.querySelector(
              `.${entry.subSectionClassName}`,
            );

            if (subSection) {
              subSection
                .querySelectorAll('a[href], button')
                .forEach((interactiveEl) => {
                  interactiveEl.removeAttribute('tabindex');
                });
              firstLevelMenuLinks.forEach((firstLevelMenuLink) => {
                firstLevelMenuLink.setAttribute('tabindex', '-1');
              });
              const previousLink = subSection.querySelector(
                `.${entry.previousLinkClassName}`,
              );
              if (previousLink) {
                previousLink.focus();
              }
              body.classList.add(entry.stateClassName);
              subSection.classList.add(`${entry.subSectionClassName}--active`);

              const secondLevelMenu = subSection.querySelector(
                `.${entry.secondLevelMenuClassName}`,
              );

              if (secondLevelMenu) {
                window.clearAllBodyScrollLocks();
                window.disableBodyScroll(secondLevelMenu);
                
              }              console.log('test');

            }

            return false;
          }
          if (!window.matchMedia('(hover: hover)').matches) {
            if (
              !menuItem.classList.contains(`${entry.itemClassName}--active`)
            ) {
              const alreadyActiveMenuItem = el.querySelector(
                `.${entry.itemClassName}--active`,
              );
              if (alreadyActiveMenuItem) {
                alreadyActiveMenuItem.classList.remove(
                  `${entry.itemClassName}--active`,
                );
                alreadyActiveMenuItem
                  .querySelector(`.${entry.firstLevelMenuLinkClassName}`)
                  .setAttribute('aria-expanded', 'false');
              }
              hasMenuLink.setAttribute('aria-expanded', 'true');
              menuItem.classList.add(`${entry.itemClassName}--active`);
            } else {
              hasMenuLink.setAttribute('aria-expanded', 'false');
              menuItem.classList.remove(`${entry.itemClassName}--active`);
            }
          }
        });
        hasMenuLink.addEventListener('keydown', (e) => {
          if (
            behaviors.storytheme_storybook_m_main_menu.isBreakpointMatching(
              breakpoint,
            ) &&
            (e.code === 'Enter' || e.code === 'Space')
          ) {
            e.preventDefault();
            if (
              !menuItem.classList.contains(`${entry.itemClassName}--active`)
            ) {
              const alreadyActiveMenuItem = el.querySelector(
                `.${entry.itemClassName}--active`,
              );
              if (alreadyActiveMenuItem) {
                alreadyActiveMenuItem.classList.remove(
                  `${entry.itemClassName}--active`,
                );
                alreadyActiveMenuItem
                  .querySelector(`.${entry.firstLevelMenuLinkClassName}`)
                  .setAttribute('aria-expanded', 'false');
              }
              hasMenuLink.setAttribute('aria-expanded', 'true');
              menuItem.classList.add(`${entry.itemClassName}--active`);
            } else {
              hasMenuLink.setAttribute('aria-expanded', 'false');
              menuItem.classList.remove(`${entry.itemClassName}--active`);
            }
          }
        });
      });

      previousLinks.forEach((previousLink) => {
        previousLink.addEventListener('click', () => {
          if (
            !behaviors.storytheme_storybook_m_main_menu.isBreakpointMatching(
              breakpoint,
            )
          ) {
            const subSection = previousLink.closest(
              `.${entry.subSectionClassName}--active`,
            );

            if (subSection) {
              subSection
                .querySelectorAll('a[href], button')
                .forEach((interactiveEl) => {
                  interactiveEl.setAttribute('tabindex', '-1');
                });
              firstLevelMenuLinks.forEach((firstLevelMenuLink) => {
                firstLevelMenuLink.removeAttribute('tabindex');
              });
              previousLink
                .closest(`.${entry.firstLevelMenuClassName}`)
                .querySelector(`.${entry.firstLevelMenuLinkClassName}`)
                .focus();
              body.classList.remove(entry.stateClassName);
              subSection.classList.remove(
                `${entry.subSectionClassName}--active`,
              );

              const headerNavigation = body.querySelector(
                `.${entry.headerNavigationClassName}`,
              );

              window.clearAllBodyScrollLocks();
              if (headerNavigation) {
                window.disableBodyScroll(el);
              }
            }
          }
        });
      });
    },
  };
})(Drupal);
