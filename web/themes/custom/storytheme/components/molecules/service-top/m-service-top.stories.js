import './m-service-top.css';
import './m-service-top.js';
import drupalAttribute from 'drupal-attribute';
import { useEffect } from '@storybook/client-api';
import { basic as text } from '../../atoms/text/a-text.stories';
const template = require('./m-service-top.html.twig');
const data = require('./m-service-top.json');

export default {
  title: 'molecules/service top',
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
  attributes.addClass(['m-service-top']);
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
  data.content.image = `<img src='https://placeimg.com/263/272/arch' />`
  data.content.title = text({
    content: args.title ? args.title : 'Wherever you are, we are here to meet your needs',
    tag: 'h5',
    modifier: 'header-5-bold',
    attributes: {
      class:['m-service-top__title']
    }
  });

  data.content.text = text({
    content: args.text ? args.text : 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium distinctio suscipit quam, libero corporis dolorum consequatur sunt officiis nesciunt quas!',
    tag: 'p',
    modifier: 'website-title',
    attributes: {
      class:['m-service-top__text']
    }
  });

  
  data.attributes = attributes;
  useEffect(() => {
    // Uncomment next line if you need javascript in your component.
    // Drupal.behaviors.storytheme_storybook_m_service_top.attach();
  }, [args]);
  return template(data)
};

export const basic = (args = {}) => {
  return basicRender(args);
};
