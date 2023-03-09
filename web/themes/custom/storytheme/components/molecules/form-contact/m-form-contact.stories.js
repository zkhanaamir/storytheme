import './m-form-contact.css';
import './m-form-contact.js';
import drupalAttribute from 'drupal-attribute';
import { useEffect } from '@storybook/client-api';
import { basic as textField } from '../../atoms/text-field/a-text-field.stories';
import { basic as button } from '../../atoms/button/a-button.stories';
import { basic as text } from "../../atoms/text/a-text.stories";
const template = require('./m-form-contact.html.twig');
const data = require('./m-form-contact.json');

export default {
  title: 'molecules/Form contact',
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
  attributes.addClass(['m-form-contact']);
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
  data.content.top = [
    textField({
      error: args.error,
      isRequired: true,
      placeholder: 'First name',
    }),
    textField({
      error: args.error,
      isRequired: true,
      placeholder: 'Last name',
    }),
    textField({
      error: args.error,
      type: 'email',
      isRequired: true,
      placeholder: 'Email Address',
    }),
    textField({
      type: 'tel',
      placeholder: 'Telephone',
    }),
    textField({
      placeholder: 'Company Name',
    }),
    textField({
      placeholder: 'Address',
    }),
    textField({
      placeholder: 'City/Town',
    }),
    textField({
      type: 'select',
      selectOptions: [
        {
          value: '',
          label: 'State',
        },
        {
          value: 'o_webforms_State_select_1',
          label: `State #1`,
        },
        {
          value: 'o_webforms_State_select_2',
          label: `State #2`,
        },
        {
          value: 'o_webforms_State_select_3',
          label: `State #3`,
        },
      ],
    }),
    textField({
      error: args.error,
      isRequired: true,
      placeholder: 'Zip/Postal Code',
    }),
    textField({
      type: 'select',
      selectOptions: [
        {
          value: '',
          label: 'Country',
        },
        {
          value: 'o_webforms_Country_select_1',
          label: `Country #1`,
        },
        {
          value: 'o_webforms_Country_select_2',
          label: `Country #2`,
        },
        {
          value: 'o_webforms_Country_select_3',
          label: `Country #3`,
        },
      ],
    }),
  ];
  data.content.middle = [
    textField({
      type: 'textarea',
      placeholder: 'How can we help you?',
    }),
  ];
  data.content.action = button({
    content: 'Submit',
  });
  data.content.caption = text({
    content: '* Please fill in the required fields before sending your message.',
    tag: 'div',
    modifier: 'body-1-regular',
  });
  data.attributes = attributes;
  useEffect(() => {
    // Uncomment next line if you need javascript in your component.
    // Drupal.behaviors.storytheme_storybook_m_form_contact.attach();
  }, [args]);
  return template(data)
};

export const basic = (args = {}) => {
  return basicRender(args);
};
