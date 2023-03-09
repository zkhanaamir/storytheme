import './m-brand.css';
import './m-brand.js';
import drupalAttribute from 'drupal-attribute';
import { useEffect } from '@storybook/client-api';
import { basic as text } from '../../atoms/text/a-text.stories';
import { basic as button } from '../../atoms/button/a-button.stories';
const template = require('./m-brand.html.twig');
const data = require('./m-brand.json');

export default {
  title: 'molecules/Brand',
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
  attributes.addClass(['m-brand']);
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
  data.content.label = text({
    content: 'ABOUT US',
    tag: 'h5',
    modifier: 'header-5-bold',
    isTextFormatted: true,
  });
  data.content.text = text({
    content: 'Norton has been delivering abrasive solutions to our customers for 130 years and counting. We care to deliver right choices that matter to your market and application...',
    tag: 'p',
    modifier: 'header-navigation',
    isTextFormatted: true,
  });
  data.content.read = text({
    content: args.read || 'Read More',
    tag: 'a',
    modifier: 'body-1-regular',
    isTextFormatted: true,
  });
  useEffect(() => {
    // Uncomment next line if you need javascript in your component.
    // Drupal.behaviors.storytheme_storybook_m_brand.attach();
  }, [args]);
  return template(data)
};

export const basic = (args = {}) => {
  return basicRender(args);
};
