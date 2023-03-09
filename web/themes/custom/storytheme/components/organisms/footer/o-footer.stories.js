import './o-footer.css';
import './o-footer.js';
import drupalAttribute from 'drupal-attribute';
import { useEffect } from '@storybook/client-api';
import { basic as socialLinks } from '../../molecules/social-links/m-social-links.stories';
import { basic as copyright } from '../../atoms/copyright/a-copyright.stories';
import { basic as brand } from '../../molecules/brand/m-brand.stories';
import { basic as menu } from '../../molecules/footer-menu/m-footer-menu.stories';
import { withText as withTextMenu } from '../../molecules/footer-menu/m-footer-menu.stories';
import { withFooterLogo as withFooterLogoMenu } from '../../molecules/footer-menu/m-footer-menu.stories';
import { basic as footerLogo } from '../../molecules/footer-logo/m-footer-logo.stories';
const template = require('./o-footer.html.twig');
const data = require('./o-footer.json');

export default {
  title: 'organisms/Footer',
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
  attributes.addClass(['o-footer']);
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
  attributes.setAttribute('role', 'contentinfo');
  data.page = {};
  data.page.footerSocialLinks = socialLinks();
  data.page.footerCopyright = copyright();
  data.page.footerBrand = brand();
  data.page.footerMenuFirst = !args.noMenuFirst && withTextMenu({
    title: 'latest posts',
    links: [
      'Boost Productivity with Norton Vortex Rapid Prep Flap Discs',
      '2023 Precision Customer Seminar Dates',
      'Easily Cut and Grind Aluminum with New Norton Wheels',
      'New Contaminant Eliminator Products',
      'New Additions to the Norton SuperFlexible Film Line'
    ],
    attributes: {
      class: ['latest-posts-menu'],
    },
  });
  data.page.footerMenuSecond = !args.noMenuSecond && menu({
    title: 'quick links',
    links: [
      'Our Products',
      'Newsroom',
      'Resources',
      'Careers',
      'Product Safety',
      'UAMA',
      'CATSCA Compliance',
      'CA Cleaning RTK Act',
      'Legal'
    ],
    attributes: {
      class: ['quick-links-menu'],
    },
  });
  data.page.footerMenuThird = !args.noMenuThird && withFooterLogoMenu({
    title: '',
    links: [
      'One New Bond St. Worcester, MA 01606',
      '508-795-5000',
    ],
    attributes: {
      class: ['contact-menu'],
    },
  });
  data.page.footerLogo = footerLogo({
    width: 260,
    height: 67,
  });
  useEffect(() => {
    // Uncomment next line if you need javascript in your component.
    // Drupal.behaviors.storytheme_storybook_o_footer.attach();
  }, [args]);
  return template(data)
};

export const basic = (args = {}) => {
  return basicRender(args);
};