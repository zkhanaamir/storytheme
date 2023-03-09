import './m-key-info-with-icon.css';
import './m-key-info-with-icon.js';
import drupalAttribute from 'drupal-attribute';
import { useEffect } from '@storybook/client-api';
import { basic as text } from '../../atoms/text/a-text.stories';
const template = require('./m-key-info-with-icon.html.twig');
const data = require('./m-key-info-with-icon.json');

export default {
  title: 'molecules/Key info with icon',
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
  attributes.addClass(['m-key-info-with-icon']);
  if (args.modifier) {
    attributes.addClass(`m-key-info-with-icon--${args.modifier}`);
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
  data.attributes = attributes;
  data.content = {};
  
  data.content.heading = text({
    content: args.heading ? args.heading : 'Find a safety data sheet',
    tag: 'p',
    modifier: 'body-1-bold',
    isTextFormatted: true,
  });
  
  data.content.icon = `
    <svg class="m-key-info-with-icon__icon" aria-hidden="true">
      <use xlink:href="${window.storythemeSvgSpritePath}#svg-${args.icon ? args.icon : 'sds finder'}"></use>
    </svg>
  `;
  data.content.arrowIcon = `
    <svg class="m-key-info-with-icon__arrowIcon" aria-hidden="true">
      <use xlink:href="${window.storythemeSvgSpritePath}#svg-${args.arrowIcon ? args.arrowIcon : 'chevron-right'}"></use>
    </svg>
  `;
  data.storythemeSvgSpritePath = window.storythemeSvgSpritePath;
  useEffect(() => {
    // Uncomment next line if you need javascript in your component.
    // Drupal.behaviors.storytheme_storybook_m_key_info_with_icon.attach();
  }, [args]);
  return template(data)
};

export const basic = (args = {}) => {
  args.modifier = 'second';
  return basicRender(args);
};
