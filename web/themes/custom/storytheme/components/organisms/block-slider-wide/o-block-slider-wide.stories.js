import './o-block-slider-wide.css';
import './o-block-slider-wide.js';
import drupalAttribute from 'drupal-attribute';
import { useEffect } from '@storybook/client-api';
import { basic as text } from '../../atoms/text/a-text.stories';
import * as blockSliderWideItems from '../../molecules/block-slider-wide-items/m-block-slider-wide-items.stories';
const template = require('./o-block-slider-wide.html.twig');
const data = require('./o-block-slider-wide.json');

export default {
  title: 'organisms/Block slider wide',
  parameters: {
    // Uncomment next line if you need fullscreen mode
    layout: 'fullscreen',
  },
  // See here what is argTypes https://storybook.js.org/docs/react/essentials/controls,
  // uncomment next line if you want to define it.
  // argTypes: {},
};

data.storythemeSvgSpritePath = window.storythemeSvgSpritePath;

const basicRender = (args) => {
  const attributes = new drupalAttribute();
  attributes.addClass(['o-block-slider-wide']);
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
  if (!args.noTitle) {
    data.content.title = text({
      content: args.title || 'Use case & testimonials',
      tag: 'h2',
      modifier: 'header-2',
      hasUnderline: true,
    });
  }
  data.content.content = args.content;
  data.attributes = attributes;
  useEffect(() => {
    // Uncomment next line if you need javascript in your component.
    // Drupal.behaviors.storytheme_storybook_o_block_slider_wide.attach();
  }, [args]);
  return template(data)
};

export const oneItem = (args = {}) => {
  args.content = args.content || blockSliderWideItems.oneItem();
  return basicRender(args);
};

export const multipleItems = (args = {}) => {
  args.content = args.content || blockSliderWideItems.multipleItems();
  return basicRender(args);
};

export const noTitle = (args = {}) => {
  args.content = args.content || blockSliderWideItems.multipleItems();
  args.noTitle = true;
  return basicRender(args);
};