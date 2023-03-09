import './m-product.css';
import './m-product.js';
import drupalAttribute from 'drupal-attribute';
import { useEffect } from '@storybook/client-api';
import { basic as text } from '../../atoms/text/a-text.stories';
import { basic as button } from '../../atoms/button/a-button.stories';
const template = require('./m-product.html.twig');
const data = require('./m-product.json');

export default {
  title: 'molecules/Product',
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
  attributes.addClass(['m-product'])
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
  
  data.content.img = args.image ? args.image : `<img src="https://www.farecla.com/wp-content/uploads/2023/02/automotive-polishing-solutions.jpg" />`;

  data.content.title = text({
    content: args.title ? args.title : `AUTOMOTIVE <span> POLISHING SOLUTIONS </span>`,
    tag: 'h3',
    modifier: 'header-3',
    attributes: {
      class: ['m-product__title'],
    },
  });
  data.content.cta = button({
    content: args.cta ? args.cta : 'Read more',
    tag: 'a',
    modifier: 'default',
    iconAfter: 'chevron-right',
    attributes: {
      class: ['m-product__cta']
    },
  })
  useEffect(() => {
    // Uncomment next line if you need javascript in your component.
    // Drupal.behaviors.storytheme_storybook_m_product.attach();
  }, [args]);
  return template(data)
};

export const basic = (args = {}) => {
  return basicRender(args);
};
