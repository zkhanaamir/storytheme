import './m-footer-menu.css';
import './m-footer-menu.js';
import drupalAttribute from 'drupal-attribute';
import { useEffect } from '@storybook/client-api';
import { basic as text } from '../../atoms/text/a-text.stories';
import { basic as footerLogo } from '../../molecules/footer-logo/m-footer-logo.stories';
const template = require('./m-footer-menu.html.twig');
const data = require('./m-footer-menu.json');

export default {
  title: 'molecules/Footer menu',
  parameters: {
    // Uncomment next line if you need fullscreen mode
    // layout: 'fullscreen',
  },
  // See here what is argTypes https://storybook.js.org/docs/react/essentials/controls,
  // uncomment next line if you want to define it.
  //argTypes: {},
};

data.storythemeSvgSpritePath = window.storythemeSvgSpritePath;
const getMenuLinkItem = (link) => text({
  content: link,
  modifier: 'body-2-bold',
  tag: 'a',
  attributes: {
    class: ['m-footer-menu__link'],
  },
});

const basicRender = (args) => {
  const attributes = new drupalAttribute();
  attributes.addClass(['m-footer-menu']);
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
  data.attributes = attributes;
  data.content = {};
  
  data.content.title = text({
    content: args.title || 'QUICK LINKS',
    tag: 'h5',
    modifier: 'header-5-bold',
    attributes: {
      class: ['m-footer-menu__title'],
    },
  });

  if (args.withText) {
  data.content.text = text({
    content: args.text || 'February 13 2023',
    tag: 'span',
    modifier: 'cta-label with-text',
    isTextFormatted: true,
  });
  }

  if (args.withFooterLogo) {
  data.content.footerLogo = footerLogo({
    width: 160,
    height: 67,
  });
  }

  attributes.setAttribute('role', 'navigation');
  const links = args.links ? args.links : data.defaultContent.links;
  data.items = [];
  links.forEach((link) => {
    data.items.push(getMenuLinkItem(link));
  });

  //data.content.content = args.content;
  useEffect(() => {
    // Uncomment next line if you need javascript in your component.
    // Drupal.behaviors.storytheme_storybook_m_footer_menu.attach();
  }, [args]);
  return template(data)
};

export const basic = (args = {}) => {
  return basicRender(args);
};

export const withText = (args = {}) => {
  args.withText = true;
  args.content = args.content || data.content.text;
  return basicRender(args);
};

export const withFooterLogo = (args = {}) => {
  args.withFooterLogo = true;
  args.content = args.content || data.content.footerLogo;
  return basicRender(args);
};