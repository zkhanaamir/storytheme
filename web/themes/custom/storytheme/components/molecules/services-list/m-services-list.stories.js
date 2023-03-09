import './m-services-list.css';
import './m-services-list.js';
import drupalAttribute from 'drupal-attribute';
import { useEffect } from '@storybook/client-api';
import { basic as services } from '../services/m-services.stories';
const template = require('./m-services-list.html.twig');
const data = require('./m-services-list.json');

export default {
  title: 'molecules/services list',
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
  attributes.addClass(['m-services-list']);
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
  data.items = args.items || [
    {
      content: services({
        title: 'North America'
      }),
    },
    {
      content: services({
        title: 'Asia'
      }),
    },
    {
      content: services({
        title: 'North and south east asia'
      }),
    },
    {
      content: services({
        title: 'australia'
      }),
    },
    {
      content: services({
        title: 'europe'
      }),
    },
    {
      content: services({
        title: 'middle east'
      }),
    },
  ];
  data.attributes = attributes;
  useEffect(() => {
    // Uncomment next line if you need javascript in your component.
    // Drupal.behaviors.storytheme_storybook_m_services_list.attach();
  }, [args]);
  return template(data)
};

export const basic = (args = {}) => {
  return basicRender(args);
};
