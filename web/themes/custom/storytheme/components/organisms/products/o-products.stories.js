import './o-products.css';
import './o-products.js';
import drupalAttribute from 'drupal-attribute';
import { useEffect } from '@storybook/client-api';
import { basic as text } from '../../atoms/text/a-text.stories';
import { basic as product } from '../../molecules/product/m-product.stories';
const template = require('./o-products.html.twig');
const data = require('./o-products.json');

export default {
  title: 'organisms/Products',
  parameters: {
    // Uncomment next line if you need fullscreen mode
    // layout: 'fullscreen',
  },
  // See here what is argTypes https://storybook.js.org/docs/react/essentials/controls,
  // uncomment next line if you want to define it.
  // argTypes: {},
};

data.storythemeSvgSpritePath = window.storythemeSvgSpritePath;

const generateDefaultItems = (args) => {
  const amount = args.amount > 3 ? 'product' : 'product';
  let items = [];
  for (let i = 0; i < args.amount; i++) { 
    items.push({
      content: product(),
    });
  }
  return items;
}

const basicRender = (args) => {
  const attributes = new drupalAttribute();
  attributes.addClass(['o-products']);
  if (args.type && args.type === 'grid') {
    attributes.addClass(['m-card-items--grid']);
  }
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
  data.content = {};
  
  if(args.withText){
    data.content.heading = text({
      content: 'Heading',
      tag: 'h2',
      modifier: 'header-2',
      attributes: {
        class : ['m-products__heading']
      }
    });
  }
  
  data.type = args.type;
  data.items = args.items || generateDefaultItems(args);
  data.attributes = attributes;

  useEffect(() => {
    // Uncomment next line if you need javascript in your component.
    // Drupal.behaviors.storytheme_storybook_o_products.attach();
  }, [args]);
  return template(data)
};

export const basic = (args = {}) => {
  args.type = 'grid';
  args.amount = args.items ? args.items.length : 6;
  return basicRender(args);
};

export const withText = (args = {}) => {
  args.withText = true;
  args.content = args.content || data.content.heading;
  args.type = 'grid';
  args.amount = args.items ? args.items.length : 6;
  return basicRender(args);
};
