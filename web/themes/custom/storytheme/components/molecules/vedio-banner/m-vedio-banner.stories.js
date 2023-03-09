import './m-vedio-banner.css';
import './m-vedio-banner.js';
import drupalAttribute from 'drupal-attribute';
import { useEffect } from '@storybook/client-api';
import { basic as text } from '../../atoms/text/a-text.stories';
import { basic as button } from '../../atoms/button/a-button.stories';
import vedioPath from './video.mp4';
const template = require('./m-vedio-banner.html.twig');
const data = require('./m-vedio-banner.json');

export default {
  title: 'molecules/Vedio banner',
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
  attributes.addClass(['m-vedio-banner']);
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
  //<video width="100%" height="240 controls">
  //<source src="https://www.nortonabrasives.com/sites/sga.na.com/files/Home_Homepage_Header_Video_V2.mp4" type="video/mp4">
  //Your browser does not support the video tag
  //</video>
  data.content = {}
  data.content.vedio = `
    <video width="100%" height="240 controls">
    <source src="${vedioPath}" type="video/mp4">
    Your browser does not support the video tag
    </video>
  `;

  data.content.title = text({
    content: args.title ? args.title : 'Welcome',
    tag: 'h3',
    modifier: 'website-title',
    attributes: {
      class: ['m-vedio-banner__title'],
    },
  });
  data.content.heading = text({
    content: args.heading ? args.heading : 'Norton',
    tag: 'h1',
    modifier: 'header-1',
    attributes: {
      class: ['m-vedio-banner__heading'],
    },
  });
  data.content.subTitle = text({
    content: args.subTitle ? args.subTitle : 'An industry leader in abrasives for 130 years and counting.',
    tag: 'p',
    modifier: 'reference-brands',
    attributes: {
      class: ['m-vedio-banner__sub-title'],
    },
  });
  data.content.cta = button({
    content: args.cta ? args.cta : 'Learn more',
    tag: 'a',
    modifier: 'second',
    attributes: {
      class: ['m-vedio-banner__cta '],
      'data-h-entity-fake-link-target': '',
    },
  });
  useEffect(() => {
    // Uncomment next line if you need javascript in your component.
    // Drupal.behaviors.storytheme_storybook_m_vedio_banner.attach();
  }, [args]);
  return template(data)
};

export const basic = (args = {}) => {
  return basicRender(args);
};
