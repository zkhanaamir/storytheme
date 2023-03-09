import './o-service-center.css';
import './o-service-center.js';
import drupalAttribute from 'drupal-attribute';
import { useEffect } from '@storybook/client-api';
import { basic as text } from '../../atoms/text/a-text.stories';
import { basic as serviceText } from '../../molecules/service-top/m-service-top.stories';
import { basic as serviceDetails } from '../../molecules/services-list/m-services-list.stories';
const template = require('./o-service-center.html.twig');
const data = require('./o-service-center.json');

export default {
  title: 'organisms/Service center',
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
  attributes.addClass(['o-service-center'])
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
    content: 'Find your local service center',
    tag: 'h3',
    modifier: 'header-3',
    attributes: {
      class: ['o-service-center__title'],
    }
  });
  data.content.serviceText = serviceText();
  data.content.serviceDetails = serviceDetails();
  
  data.attributes = attributes;
  useEffect(() => {
    // Uncomment next line if you need javascript in your component.
    // Drupal.behaviors.storytheme_storybook_o_service_center.attach();
  }, [args]);
  return template(data)
};

export const basic = (args = {}) => {
  return basicRender(args);
};
