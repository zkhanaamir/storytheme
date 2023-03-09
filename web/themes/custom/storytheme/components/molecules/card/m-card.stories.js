import './m-card.css';
import './m-card.js';
import drupalAttribute from 'drupal-attribute';
import { useEffect } from '@storybook/client-api';
import { basic as text } from '../../atoms/text/a-text.stories';
import { basic as button } from '../../atoms/button/a-button.stories';
const template = require('./m-card.html.twig');
const data = require('./m-card.json');

export default {
  title: 'molecules/Card',
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
  attributes.addClass(['m-card']);
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
  data.content.image = `<img src='https://placeimg.com/263/272/arch' />`;
  data.content.title = text({
    content: args.title ? args.title : 'Range of products 1',
    tag: 'h3',
    modifier: 'header-3',
    attributes: {
      class: ['m-card__title'],
    },
  })  
  data.content.subTitle = text({
    content: args.subTitle ? args.subTitle : 'Small description paragraph is right here. Feel free to edit it.',
    tag: 'p',
    modifier: 'body-2-bold',
    attributes: {
      class: ['m-card__sub-title'],
    },
  })
  data.content.cta = button({
    content: args.cta ? args.cta : 'Show more',
    tag: 'a',
    modifier: 'third',
    attributes: {
      class: ['m-card__cta'],
      'data-h-entity-fake-link-target': '',
    },
  });
  useEffect(() => {
    // Uncomment next line if you need javascript in your component.
    // Drupal.behaviors.storytheme_storybook_m_card.attach();
    Drupal.behaviors.kaizen_core_h_entity_fake_link.attach();
  }, [args]);
  return template(data)
};

export const basic = (args = {}) => {
  return basicRender(args);
};
