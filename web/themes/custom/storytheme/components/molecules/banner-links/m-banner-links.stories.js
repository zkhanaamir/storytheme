import './m-banner-links.css';
import './m-banner-links.js';
import drupalAttribute from 'drupal-attribute';
import { useEffect } from '@storybook/client-api';
const template = require('./m-banner-links.html.twig');
const data = require('./m-banner-links.json');

export default {
  title: 'molecules/Banner links',
  parameters: {
    // Uncomment next line if you need fullscreen mode
    // layout: 'fullscreen',
  },
  // See here what is argTypes https://storybook.js.org/docs/react/essentials/controls,
  // uncomment next line if you want to define it.
  // argTypes: {},
};

data.storythemeSvgSpritePath = window.storythemeSvgSpritePath;

const basicRender = (args) => {
  const attributes = new drupalAttribute();
  attributes.addClass(['m-banner-links']);
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
  data.content = {}
  data.items = []
  data.content.items = [
    {
      content: 'sds finder'
    },
    {
      content: 'our catalogs'
    },
    {
      content: 'get in touch'
    },
    {
      content: 'where to buy'
    }
  ];
  useEffect(() => {
    // Uncomment next line if you need javascript in your component.
    // Drupal.behaviors.storytheme_storybook_m_banner_links.attach();
  }, [args]);
  return template(data)
};

export const basic = (args = {}) => {
  return basicRender(args);
};
