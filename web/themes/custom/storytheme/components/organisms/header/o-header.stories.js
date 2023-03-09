import './o-header.css';
import './o-header.js';
import '../../helpers/custom/h-custom.stories';
import drupalAttribute from 'drupal-attribute';
import { useEffect } from '@storybook/client-api';
import { basic as mainNavigation } from '../../molecules/main-menu/m-main-menu.stories';
import { basic as logo } from '../../molecules/logo/m-logo.stories';
const template = require('./o-header.html.twig');
const data = require('./o-header.json');

export default {
  title: 'organisms/Header',
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
  attributes.addClass(['o-header']);
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
  attributes.setAttribute('role', 'banner');
  data.page = {};
  data.page.headerLogo = logo();
  data.page.headerNavigation = mainNavigation();
  data.attributes = attributes;
  useEffect(() => {
    // Uncomment next line if you need javascript in your component.
    Drupal.behaviors.storytheme_storybook_o_header.attach();
  }, [args]);
  return template(data)
};

export const basic = (args = {}) => {
  return basicRender(args);
};
