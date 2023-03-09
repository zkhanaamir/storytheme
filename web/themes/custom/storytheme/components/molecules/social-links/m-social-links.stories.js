import './m-social-links.css';
import './m-social-links.js';
import drupalAttribute from 'drupal-attribute';
import { useEffect } from '@storybook/client-api';
import { basic as text } from '../../atoms/text/a-text.stories';
const template = require('./m-social-links.html.twig');
const data = require('./m-social-links.json');

export default {
  title: 'molecules/Social links',
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
  attributes.addClass(['m-social-links']);
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
  data.content.title = text({
    content: 'Connect with us',
    modifier: 'body-2-light m-social-links__title--inner',
    tag: 'div',
  });
  data.content.items = [
    {
      content: 'facebook-footer',
    },
    {
      content: 'youtube-footer',
    },
    {
      content: 'linkedin-footer',
    },
    {
      content: 'instagram',
    },
  ];
  data.attributes = attributes;
  useEffect(() => {
    // Uncomment next line if you need javascript in your component.
    // Drupal.behaviors.storytheme_storybook_m_social_links.attach();
  }, [args]);
  return template(data)
};

export const basic = (args = {}) => {
  return basicRender(args);
};
