import './m-logo.css';
import './m-logo.js';
import drupalAttribute from 'drupal-attribute';
import { useEffect } from '@storybook/client-api';
import logoPath from '../../../logo.svg';
const template = require('./m-logo.html.twig');
const data = require('./m-logo.json');

export default {
  title: 'molecules/Logo',
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
  attributes.addClass(['m-logo']);
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
  data.storythemeSvgSpritePath = window.storythemeSvgSpritePath;
  data.logoPath = logoPath;
  data.width = args.width ? args.width : 92;
  data.height = args.height ? args.height : 38;
  useEffect(() => {
    // Uncomment next line if you need javascript in your component.
    // Drupal.behaviors.storytheme_storybook_m_logo.attach();
  }, [args]);
  return template(data)
};

export const basic = (args = {}) => {
  return basicRender(args);
};
