import './o-cards.css';
import './o-cards.js';
import drupalAttribute from 'drupal-attribute';
import { useEffect } from '@storybook/client-api';
const template = require('./o-cards.html.twig');
const data = require('./o-cards.json');

export default {
  title: 'organisms/Cards',
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
    // Drupal.behaviors.storytheme_storybook_o_cards.attach();
  }, [args]);
  return template(data)
};

export const basic = (args = {}) => {
  return basicRender(args);
};
