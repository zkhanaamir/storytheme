import './m-card-items.css';
import './m-card-items.js';
import drupalAttribute from 'drupal-attribute';
import { useEffect } from '@storybook/client-api';
import { basic as card } from '../card/m-card.stories';
const template = require('./m-card-items.html.twig');
const data = require('./m-card-items.json');

export default {
  title: 'molecules/Card items',
  parameters: {
    // Uncomment next line if you need fullscreen mode
    layout: 'fullscreen',
  },
  // See here what is argTypes https://storybook.js.org/docs/react/essentials/controls,
  // uncomment next line if you want to define it.
  // argTypes: {},
};

data.storythemeSvgSpritePath = window.storythemeSvgSpritePath;

const generateDefaultItems = (args) => {
  const imageType = 'card';
  let items = [];
  for (let i = 0; i < args.amount; i++) {
    items.push({
      content: card({
        title: 'This is a medium size news title',
        imageType,
      }),
    });
  }
  return items;
}

const basicRender = (args) => {
  const attributes = new drupalAttribute();
  attributes.addClass(['m-card-items']);
  if (args.type && args.type === 'grid') {
    attributes.addClass(['m-card-items--mobile-slider', 'm-card-items--grid']);
  }
  else {
    if (args.amount > 4) {
      attributes.addClass('m-card-items--slider');
    }
    else {
      attributes.addClass('m-card-items--mobile-slider');
    }
  }
  attributes.setAttribute('data-slides-amount', args.amount);
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
  data.type = args.type;
  data.items = args.items || generateDefaultItems(args);
  data.attributes = attributes;
  useEffect(() => {
    // Uncomment next line if you need javascript in your component.
     Drupal.behaviors.storytheme_storybook_m_card_items.attach();
  }, [args]);
  return template(data)
};


export const slider = (args = {}) => {
  args.amount = args.items ? args.items.length : 6;
  return basicRender(args);
};