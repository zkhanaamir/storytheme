import './o-webforms.css';
import './o-webforms.js';
import drupalAttribute from 'drupal-attribute';
import { useEffect } from '@storybook/client-api';
import { basic as form, error as formError } from '../../molecules/form-contact/m-form-contact.stories';
import { basic as text } from '../../atoms/text/a-text.stories';
import * as keyInfo from '../key-info-with-icons-band/o-key-info-with-icons-band.stories';
const template = require('./o-webforms.html.twig');
const data = require('./o-webforms.json');

export default {
  title: 'organisms/Webforms',
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
  attributes.addClass(['o-webforms']);
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
    content: 'Contact Us',
    tag: 'h3',
    modifier: 'header-3',
  });
  data.content.subtitle = text({
    content: 'Find resources and support or reach out for questions and comments. We look forward to servicing your abrasives needs.',
    tag: 'h5',
    modifier: 'a-text a-text--header-5-bold',
  });
  if (!args.noInfos) {
    const amount = args.amount || 4;
    switch (amount) {
      case 4:
        data.content.infos = keyInfo.basic();
        break;
      case 3:
        data.content.infos = keyInfo.basic();
        break;
      case 2:
        data.content.infos = keyInfo.basic();
        break;
      case 1:
        data.content.infos = keyInfo.oneItem();
        break;
    }
  }
  data.content.forms = args.error ? formError() : form();
  data.attributes = attributes;
  useEffect(() => {
    // Uncomment next line if you need javascript in your component.
    // Drupal.behaviors.storytheme_storybook_o_webforms.attach();
  }, [args]);
  return template(data)
};

export const basic = (args = {}) => {
  args.amount = 3;
  return basicRender(args);
};
