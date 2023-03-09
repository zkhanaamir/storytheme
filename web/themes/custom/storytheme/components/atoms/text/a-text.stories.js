import './a-text.css';
import { useEffect } from '@storybook/client-api';
import drupalAttribute from 'drupal-attribute';
import './a-text.js';

const template = require('./a-text.html.twig');
const data = require('./a-text.json');

export default {
  title: `atoms/Text`,
  argTypes: {
    content: {
      name: 'Enter text',
      defaultValue: data.content.content,
      control: { type: 'text' },
    },
    hasUnderline: {
      name: 'Add underline',
      defaultValue: false,
      control: { type: 'boolean' },
    },
    modifier: {
      name: 'Pick modifier',
      defaultValue: data.variables.modifiers[0],
      options: data.variables.modifiers,
      control: { type: 'radio' },
    },
    tag: {
      name: 'Select HTML tag',
      defaultValue: data.variables.tag[0],
      options: data.variables.tag,
      control: { type: 'radio' },
    },
  },
};

export const basic = (args = {}) => {
  const attributes = new drupalAttribute();
  attributes.addClass(['a-text']);
  if (args.modifier) {
    attributes.addClass(`a-text--${args.modifier}`);
  }
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
  if (args.tag && args.tag === 'a') {
    attributes.setAttribute('href', args.href ? args.href : '#');
  }
  if (args.hasUnderline) {
    attributes.addClass('a-text--underline');
  }
  if (args.isTextFormatted) {
    attributes.addClass('h-text-formatted');
  }
  useEffect(() => {
    // Uncomment next line if you need javascript in your component.
    // Drupal.behaviors.storytheme_storybook_a_text.attach();
  }, []);
  return template({
    attributes,
    tag: args.tag,
    content: args.content,
  });
};
