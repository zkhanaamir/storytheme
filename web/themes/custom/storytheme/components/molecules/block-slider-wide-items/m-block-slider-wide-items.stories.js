import './m-block-slider-wide-items.css';
import './m-block-slider-wide-items.js';
import drupalAttribute from 'drupal-attribute';
import { useEffect } from '@storybook/client-api';
import { basic as card } from '../card/m-card.stories';
const template = require('./m-block-slider-wide-items.html.twig');
const data = require('./m-block-slider-wide-items.json');

export default {
  title: 'molecules/Block slider wide items',
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
  attributes.addClass(['m-block-slider-wide-items']);
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
  data.items = [];
  const amount = args.amount ? args.amount : 1;
  for (let i = 0; i < amount; i++) {
    data.items.push({
      content: card(),
    });
  }
  data.attributes = attributes;
  useEffect(() => {
    // Uncomment next line if you need javascript in your component.
    Drupal.behaviors.storytheme_storybook_m_block_slider_wide_items.attach();
  }, [args]);
  return template(data)
};
export const oneItem = (args = {}) => {
  return basicRender(args);
};

export const multipleItems = (args = {}) => {
  args.amount = 4;
  return basicRender(args);
};
