import './t-page.css';
import './t-page.js';
import drupalAttribute from 'drupal-attribute';
import { useEffect } from '@storybook/client-api';
import { basic as header } from '../../organisms/header/o-header.stories';
import { basic as footer } from '../../organisms/footer/o-footer.stories';
import { basic as vedioBanner } from '../../molecules/vedio-banner/m-vedio-banner.stories';
import { basic as bannerInfo } from '../../organisms/top-banner-info/o-top-banner-info.stories';
import { basic as products } from '../../organisms/products/o-products.stories';
import { basic as services } from '../../organisms/service-center/o-service-center.stories';
const template = require('./t-page.html.twig');
const data = require('./t-page.json');

export default {
  title: 'templates/Page',
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
  attributes.addClass('t-page');
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
  data.content.header = header();
  data.content.content = args.content;
  data.content.footer = footer();
  useEffect(() => {
    // Uncomment next line if you need javascript in your component.
    // Drupal.behaviors.storytheme_storybook_t_page.attach();
  }, [args]);
  return template(data)
};

export const basic = (args = {}) => {
  return basicRender(args);
};

export const homepage = (args = {}) => {
  args.content = `
  ${vedioBanner()}
  ${bannerInfo()}
  ${products()}
  ${services()}
  `;
  return basicRender(args);
}