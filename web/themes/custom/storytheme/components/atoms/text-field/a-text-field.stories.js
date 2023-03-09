import './a-text-field.css';
import './a-text-field.js';
import drupalAttribute from 'drupal-attribute';
import { useEffect } from '@storybook/client-api';
import { basic as text } from '../text/a-text.stories';
const template = require('./a-text-field.html.twig');
const data = require('./a-text-field.json');

export default {
  title: 'atoms/Text field',
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
  const elementAttributes = new drupalAttribute();
  attributes.addClass(['a-text-field']);

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
  data.throbber = '';
  if (args.type === 'autocomplete') {
    data.throbber = true;
    args.type = 'search';
  }
  attributes.addClass((args.type ? `a-text-field--${args.type}` : `a-text-field--${data.types[0]}`));
  const id = args.id ? args.id : 'a-text-field-id';
  elementAttributes.setAttribute('id', id);
  elementAttributes.addClass('a-text-field__element');
  elementAttributes.setAttribute('type', (args.type ? args.type : data.types[0]));
  if (args.elementAttributes) {
    for (const [attrName, attrValue] of Object.entries(args.elementAttributes)) {
      if (attrName === 'class') {
        elementAttributes.addClass(attrValue);
      }
      else {
        elementAttributes.setAttribute(attrName, attrValue);
      }
    }

    delete args.elementAttributes;
  }
  data.type = args.type;
  if (args.type === 'select') {
    data.selectOptions = args.selectOptions ? args.selectOptions : [
      {
        value: '',
        label: `${data.defaultContent.content} default${args.isRequired ? ' *' : ''}`,
      },
      {
        value: 'a_text_field_1',
        label: `${data.defaultContent.content} 1`,
      },
      {
        value: 'a_text_field_2',
        label: `${data.defaultContent.content} 2`,
      },
    ];
  }
  else {
    if (args.placeholder) {
      elementAttributes.setAttribute('placeholder', args.isRequired ? `${args.placeholder} *` : args.placeholder)
    }
    if (args.value) {
      elementAttributes.setAttribute('value', args.value)
    }
    if (!args.placeholder && !args.value && !args.noPlaceholder) {
      elementAttributes.setAttribute('placeholder', args.isRequired ? `${data.defaultContent.content} *` : data.defaultContent.content);
    }
  }
  if (args.elementAttributes) {
    for (const [attrName, attrValue] of Object.entries(args.elementAttributes)) {
      if (attrName === 'class') {
        elementAttributes.addClass(attrValue);
      }
      else {
        elementAttributes.setAttribute(attrName, attrValue);
      }
    }

    delete args.elementAttributes;
  }
  data.error = '';
  if (args.error) {
    elementAttributes.addClass('error');
    data.error = text({
      content: args.errorText || 'Field is required',
      tag: 'div',
      modifier: 'body-1-regular',
    });
  }
  data.attributes = attributes;
  data.elementAttributes = elementAttributes;
  useEffect(() => {
    // Uncomment next line if you need javascript in your component.
    // Drupal.behaviors.storytheme_storybook_a_text_field.attach();
  }, [args]);
  return template(data)
};

export const basic = (args = {}) => {
  return basicRender(args);
};
