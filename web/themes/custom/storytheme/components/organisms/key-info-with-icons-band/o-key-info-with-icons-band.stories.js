import './o-key-info-with-icons-band.css';
import './o-key-info-with-icons-band.js';
import drupalAttribute from 'drupal-attribute';
import { useEffect } from '@storybook/client-api';
import { basic as keyInfo } from '../../molecules/key-info-with-icon/m-key-info-with-icon.stories'; 
const template = require('./o-key-info-with-icons-band.html.twig');
const data = require('./o-key-info-with-icons-band.json');

export default {
  title: 'organisms/Key info with icons band',
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
  attributes.addClass(['o-key-info-with-icons-band']);
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
  if (!args.items) {
    data.content.items = [];
    let amountOfItems = args.amountOfItems ? args.amountOfItems : 4;
    for (let i = 1; i <= amountOfItems; i++) {
      switch (i) {
        case 1:
          data.content.items.push({
            content: keyInfo(),
          });
          break;
        case 2:
          data.content.items.push({
            content: keyInfo({
              icon: 'our catalogs',
              heading: 'Browse product catalogs',
            }),
          });
          break;
        case 3:
          data.content.items.push({
            content: keyInfo({
              icon: 'where to buy',
              heading: `Locate <br> where to buy`,
            }),
          });
          break;
      }
    }
  }
  else {
    data.content.items = args.items;
  }
  data.attributes = attributes;
  useEffect(() => {
    // Uncomment next line if you need javascript in your component.
    // Drupal.behaviors.storytheme_storybook_o_key_info_with_icons_band.attach();
  }, [args]);
  return template(data)
};

export const basic = (args = {}) => {
  args.amountOfItems = 3;
  return basicRender(args);
};
