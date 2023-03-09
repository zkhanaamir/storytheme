import './m-footer-logo.css';
import './m-footer-logo.js';
import drupalAttribute from 'drupal-attribute';
import { useEffect } from '@storybook/client-api';
import footerLogoPath from '../../../footer-logo.svg'
const template = require('./m-footer-logo.html.twig');
const data = require('./m-footer-logo.json');

export default {
  title: 'molecules/Footer logo',
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
  attributes.addClass(['m-footer-logo']);
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
  data.footerLogoPath = footerLogoPath;
  data.width = args.width ? args.width : 92;
  data.height = args.height ? args.height : 38;
  useEffect(() => {
    // Uncomment next line if you need javascript in your component.
    // Drupal.behaviors.storytheme_storybook_m_footer_logo.attach();
  }, [args]);
  return template(data)
};

export const basic = (args = {}) => {
  return basicRender(args);
};
