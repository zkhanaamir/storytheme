import './m-main-menu.css';
import './m-main-menu.js';
import drupalAttribute from 'drupal-attribute';
import { useEffect } from '@storybook/client-api';
import { basic as text } from '../../atoms/text/a-text.stories';
const template = require('./m-main-menu.html.twig');
const data = require('./m-main-menu.json');

export default {
  title: 'molecules/Main menu',
  parameters: {
    // Uncomment next line if you need fullscreen mode
    // layout: 'fullscreen',
  },
  // See here what is argTypes https://storybook.js.org/docs/react/essentials/controls,
  // uncomment next line if you want to define it.
  // argTypes: {},
};

data.storythemeSvgSpritePath = window.storythemeSvgSpritePath;
const generatePreviousLink = (link) => text({
  content: `
    <span class="m-main-menu__link-content">
      <svg class="m-main-menu__icon" aria-hidden="true">
        <use xlink:href="${window.storythemeSvgSpritePath}#svg-chevron-left"></use>
      </svg>
      ${link}
    </span>
  `,
  modifier: 'header-navigation',
  tag: 'button',
  attributes: {
    class: ['m-main-menu__link', 'm-main-menu__link--previous'],
    'aria-expanded': 'true',
  },
});

const generateFirstLevelLink = (link, hasChild = false) => {
  const content = !hasChild ? `<span class="m-main-menu__link-content">${link}</span>` : `
    <span class="m-main-menu__link-content">
      ${link}
      <svg class="m-main-menu__icon" aria-hidden="true">
        <use xlink:href="${window.storythemeSvgSpritePath}#svg-chevron-right"></use>
      </svg>
    </span>
  `;
  const classes = ['m-main-menu__link', 'm-main-menu__link--1-level'];
  if (hasChild) {
    classes.push('m-main-menu__link--has-menu');
  }
  const attributes = {
    class: classes,
  };
  if (hasChild) {
    attributes['aria-label'] = `Expand ${link} sub menu`;
    attributes['aria-expanded'] = 'false';
  }
  return text({
    content: content,
    modifier: 'header-navigation',
    tag: hasChild ? 'button': 'a',
    attributes,
  });
}

const generateSecondLevelLink = (link) => text({
  content: link,
  modifier: 'header-navigation',
  tag: 'a',
  attributes: {
    class: ['m-main-menu__link', 'm-main-menu__link--2-level'],
  },
});

const generateThirdLevelLink = (link, isBig = false) => text({
  content: link,
  modifier: isBig ? 'header-navigation' : 'body-2-regular',
  tag: 'a',
  attributes: {
    class: ['m-main-menu__link', 'm-main-menu__link--3-level'],
  },
});

const basicRender = (args) => {
  const attributes = new drupalAttribute();
  attributes.addClass(['m-main-menu']);
  if (args.attributes) {
    for (const [attrName, attrValue] of Object.entries(args.attributes)) {
      if (attrName === 'class') {
        attributes.addClass(attrValue);
      }
      else {
        attributes.setAttribute(attrName, attrValue);
      }
    }

    delete args.attributes;
  }
  attributes.setAttribute('role', 'navigation');
  data.items = [
    {
      link: generateFirstLevelLink('Our products', true),
      previousLink: generatePreviousLink('Our products'),
      items: [
        {
          link: generateSecondLevelLink(''),
          items: [
            {
              link: generateThirdLevelLink('Precision Grinding Wheels'),
            },
            {
              link: generateThirdLevelLink('Metal Fab Grinding & Cutting Wheels'),
            },
            {
              link: generateThirdLevelLink('Product 3'),
            },
            {
              link: generateThirdLevelLink('Product 4'),
            },
            {
              link: generateThirdLevelLink('Product 5'),
            },
            {
              link: generateThirdLevelLink('Product 6'),
            },
            {
              link: generateThirdLevelLink('Product 7'),
            },
            {
              link: generateThirdLevelLink('Product 8'),
            },
          ],
        },
        {
          link: generateSecondLevelLink(''),
          items: [
            {
              link: generateThirdLevelLink('Product 1'),
            },
            {
              link: generateThirdLevelLink('Product 2'),
            },
            {
              link: generateThirdLevelLink('Product 3'),
            },
            {
              link: generateThirdLevelLink('Product 4'),
            },
            {
              link: generateThirdLevelLink('Product 5'),
            },
            {
              link: generateThirdLevelLink('Product 6'),
            },
            {
              link: generateThirdLevelLink('Product 7'),
            },
            {
              link: generateThirdLevelLink('Product 8'),
            },
            {
              link: generateThirdLevelLink('Product 9'),
            },
            {
              link: generateThirdLevelLink('Product 10'),
            },
          ],
        },
        {
          link: generateSecondLevelLink(''),
          items: [
            {
              link: generateThirdLevelLink('Product 1'),
            },
            {
              link: generateThirdLevelLink('Product 2'),
            },
            {
              link: generateThirdLevelLink('Product 3'),
            },
            {
              link: generateThirdLevelLink('Product 4'),
            },
            {
              link: generateThirdLevelLink('Product 5'),
            },
            {
              link: generateThirdLevelLink('Product 6'),
            },
            {
              link: generateThirdLevelLink('Product 7'),
            },
            {
              link: generateThirdLevelLink('Product 8'),
            },
          ],
        },
        {
          link: generateSecondLevelLink(''),
          items: [
            {
              link: generateThirdLevelLink('Product 1'),
            },
            {
              link: generateThirdLevelLink('Product 2'),
            },
            {
              link: generateThirdLevelLink('Product 3'),
            },
            {
              link: generateThirdLevelLink('Product 4'),
            },
            {
              link: generateThirdLevelLink('Product 5'),
            },
            {
              link: generateThirdLevelLink('Product 6'),
            },
            {
              link: generateThirdLevelLink('Product 7'),
            },
            {
              link: generateThirdLevelLink('Product 8'),
            },
            {
              link: generateThirdLevelLink('Product 9'),
            },
            {
              link: generateThirdLevelLink('Product 10'),
            },
          ],
        },
      ],
    },
    {
      link: generateFirstLevelLink('Industries', true),
      previousLink: generatePreviousLink('Industries'),
      items: [
        {
          link: generateSecondLevelLink(''),
          items: [
            {
              link: generateThirdLevelLink('Product 1'),
            },
            {
              link: generateThirdLevelLink('Product 2'),
            },
            {
              link: generateThirdLevelLink('Product 3'),
            },
            {
              link: generateThirdLevelLink('Product 4'),
            },
            {
              link: generateThirdLevelLink('Product 5'),
            },
            {
              link: generateThirdLevelLink('Product 6'),
            },
            {
              link: generateThirdLevelLink('Product 7'),
            },
            {
              link: generateThirdLevelLink('Product 8'),
            },
            {
              link: generateThirdLevelLink('Product 9'),
            },
            {
              link: generateThirdLevelLink('Product 10'),
            },
          ],
        },
        {
          link: generateSecondLevelLink(''),
          items: [
            {
              link: generateThirdLevelLink('Product 1'),
            },
            {
              link: generateThirdLevelLink('Product 2'),
            },
            {
              link: generateThirdLevelLink('Product 3'),
            },
            {
              link: generateThirdLevelLink('Product 4'),
            },
            {
              link: generateThirdLevelLink('Product 5'),
            },
            {
              link: generateThirdLevelLink('Product 6'),
            },
            {
              link: generateThirdLevelLink('Product 7'),
            },
            {
              link: generateThirdLevelLink('Product 8'),
            },
            {
              link: generateThirdLevelLink('Product 9'),
            },
            {
              link: generateThirdLevelLink('Product 10'),
            },
          ],
        },
        {
          link: generateSecondLevelLink(''),
          items: [
            {
              link: generateThirdLevelLink('Product 1'),
            },
            {
              link: generateThirdLevelLink('Product 2'),
            },
            {
              link: generateThirdLevelLink('Product 3'),
            },
            {
              link: generateThirdLevelLink('Product 4'),
            },
            {
              link: generateThirdLevelLink('Product 5'),
            },
            {
              link: generateThirdLevelLink('Product 6'),
            },
            {
              link: generateThirdLevelLink('Product 7'),
            },
            {
              link: generateThirdLevelLink('Product 8'),
            },
            {
              link: generateThirdLevelLink('Product 9'),
            },
            {
              link: generateThirdLevelLink('Product 10'),
            },
          ],
        },
      ],
    },
    {
      link: generateFirstLevelLink('Partnership', true),
      previousLink: generatePreviousLink('Resources'),
      items: [
        {
          link: generateSecondLevelLink(''),
          items: [
            {
              link: generateThirdLevelLink('Product 1'),
            },
            {
              link: generateThirdLevelLink('Product 2'),
            },
            {
              link: generateThirdLevelLink('Product 3'),
            },
            {
              link: generateThirdLevelLink('Product 4'),
            },
            {
              link: generateThirdLevelLink('Product 5'),
            },
            {
              link: generateThirdLevelLink('Product 6'),
            },
            {
              link: generateThirdLevelLink('Product 7'),
            },
            {
              link: generateThirdLevelLink('Product 8'),
            },
            {
              link: generateThirdLevelLink('Product 9'),
            },
            {
              link: generateThirdLevelLink('Product 10'),
            },
          ],
        },
        {
          link: generateSecondLevelLink(''),
          items: [
            {
              link: generateThirdLevelLink('Product 1'),
            },
            {
              link: generateThirdLevelLink('Product 2'),
            },
            {
              link: generateThirdLevelLink('Product 3'),
            },
            {
              link: generateThirdLevelLink('Product 4'),
            },
            {
              link: generateThirdLevelLink('Product 5'),
            },
            {
              link: generateThirdLevelLink('Product 6'),
            },
            {
              link: generateThirdLevelLink('Product 7'),
            },
            {
              link: generateThirdLevelLink('Product 8'),
            },
            {
              link: generateThirdLevelLink('Product 9'),
            },
            {
              link: generateThirdLevelLink('Product 10'),
            },
          ],
        },
      ],
    },
    {
      link: generateFirstLevelLink('Resources', true),
      previousLink: generatePreviousLink('Resources'),
      items: [
        {
          link: generateSecondLevelLink(''),
          items: [
            {
              link: generateThirdLevelLink('Product 1'),
            },
            {
              link: generateThirdLevelLink('Product 2'),
            },
            {
              link: generateThirdLevelLink('Product 3'),
            },
            {
              link: generateThirdLevelLink('Product 4'),
            },
            {
              link: generateThirdLevelLink('Product 5'),
            },
          ],
        },
      ],
    },
    {
      link: generateFirstLevelLink('About Us', true),
      previousLink: generatePreviousLink('About Us'),
      items: [
        {
          link: generateSecondLevelLink(''),
          items: [
            {
              link: generateThirdLevelLink('Product 1'),
            },
            {
              link: generateThirdLevelLink('Product 2'),
            },
            {
              link: generateThirdLevelLink('Product 3'),
            },
            {
              link: generateThirdLevelLink('Product 4'),
            },
            {
              link: generateThirdLevelLink('Product 5'),
            },
          ],
        },
      ],
    },
    {
      link: generateFirstLevelLink('Contact Us'),
    },
    {
      link: generateFirstLevelLink('Whrere to Buy'),
    },
  ]
  data.attributes = attributes;
  useEffect(() => {
    // Uncomment next line if you need javascript in your component.
     Drupal.behaviors.storytheme_storybook_m_main_menu.attach();
  }, [args]);
  return template(data)
};

export const basic = (args = {}) => {
  return basicRender(args);
};
