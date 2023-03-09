import './a-button.css';
import { useEffect } from '@storybook/client-api';
import drupalAttribute from 'drupal-attribute';
import './a-button.js';
const template = require('./a-button.html.twig');
const data = require('./a-button.json');

export default {
  title: `atoms/Button`,
  argTypes: {
    content: {
      defaultValue: data.content.content,
      control: 'text',
    },
    isDisabled: {
      name: 'Disable',
      defaultValue: false,
      control: {
        type: 'boolean',
      },
    },
    isAjax: {
      name: 'Ajax',
      defaultValue: false,
      control: {
        type: 'boolean',
      },
    },
    modifier: {
      name: 'Select modifier',
      defaultValue: data.variables.modifiers[0],
      options: data.variables.modifiers,
      control: { type: 'radio' },
    },
    tag: {
      name: 'Select html tag',
      defaultValue: data.variables.tag[0],
      options: data.variables.tag,
      control: { type: 'radio' },
    },
    iconBefore: {
      name: 'Select icon before',
      defaultValue: data.variables.iconBefore[0],
      options: data.variables.iconBefore,
      control: { type: 'radio' },
    },
    iconAfter: {
      name: 'Select icon after',
      defaultValue: data.variables.iconAfter[0],
      options: data.variables.iconAfter,
      control: { type: 'radio' },
    },
    iconSize: {
      name: 'Select icon size',
      defaultValue: data.variables.iconSize[0],
      options: data.variables.iconSize,
      control: { type: 'radio' },
    },
  },
};

export const basic = (args = {}) => {
  const attributes = new drupalAttribute();
  attributes.addClass(['a-button']);
  if (args.modifier && args.modifier !== 'default') {
    attributes.addClass(`a-button--${args.modifier}`);
  }
  if (args.iconSize && args.iconSize !== 'default') {
    attributes.addClass(`a-button--icon-size-${args.iconSize}`);
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
  if (args.tag === 'a') {
    attributes.setAttribute('href', args.href || '#');
  }
  if (args.isDisabled || args.isAjax) {
    if (args.tag === 'button') {
      attributes.setAttribute('disabled', '');
    }
    else {
      attributes.addClass('is-disabled');
    }
  }
  if (args.iconBefore && args.iconBefore !== 'none' && args.iconAfter && args.iconAfter !== 'none') {
    attributes.addClass('a-button--icon-both');
  }
  else {
    if (args.iconBefore && args.iconBefore !== 'none') {
      attributes.addClass('a-button--icon-before');
    }
    if (args.iconAfter && args.iconAfter !== 'none') {
      attributes.addClass('a-button--icon-after');
    }
  }
  useEffect(() => {
    // Uncomment next line if you need javascript in your component.
    // Drupal.behaviors.storytheme_storybook_a_button.attach();
  }, [args]);
  return template({
    isAjax: args.isAjax,
    storythemeSvgSpritePath: window.storythemeSvgSpritePath,
    attributes,
    content: args.content ? args.content : data.content.content,
    tag: args.tag ? args.tag : data.variables.tag[0],
    textClasses: args.textClasses ? args.textClasses : '',
    iconBefore: args.iconBefore !== 'none' ? args.iconBefore : '',
    iconAfter: args.iconAfter !== 'none' ? args.iconAfter : '',
  });
};
