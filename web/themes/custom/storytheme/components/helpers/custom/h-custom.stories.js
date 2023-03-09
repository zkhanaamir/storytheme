import './h-custom.css';
import './h-custom.js';
import drupalAttribute from 'drupal-attribute';
import { useEffect } from '@storybook/client-api';
const template = require('./h-custom.html.twig');
const data = require('./h-custom.json');

export default {
  title: 'helpers/Custom',
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
  useEffect(() => {
    // Uncomment next line if you need javascript in your component.
    // Drupal.behaviors.storytheme_storybook_h_custom.attach();
  }, [args]);
  return template(data)
};

export const basic = (args = {}) => {
  return basicRender(args);
};
