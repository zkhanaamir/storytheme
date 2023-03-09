import './m-banner-text.css';
import './m-banner-text.js';
import drupalAttribute from 'drupal-attribute';
import { useEffect } from '@storybook/client-api';
import { basic as text } from '../../atoms/text/a-text.stories';
const template = require('./m-banner-text.html.twig');
const data = require('./m-banner-text.json');

export default {
  title: 'molecules/Banner text',
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
  attributes.addClass(['m-banner-text'])
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
  data.content.text = text({
    content: args.text ? args.text : 'The NEW Quantum Prime grain technology is changing the market.',
    tag: 'p',
    modifier: 'website-title',
    attributes: {
      class: ['m-banner-text__text'],
    },
  });
  data.content.link = text({
    content: args.link ? args.link : 'Learn How >>',
    tag: 'a',
    modifier: 'link-text',
    attributes: {
      class: ['m-banner-text__link'],
    },
  })
  useEffect(() => {
    // Uncomment next line if you need javascript in your component.
    // Drupal.behaviors.storytheme_storybook_m_banner_text.attach();
  }, [args]);
  return template(data)
};

export const basic = (args = {}) => {
  return basicRender(args);
};
