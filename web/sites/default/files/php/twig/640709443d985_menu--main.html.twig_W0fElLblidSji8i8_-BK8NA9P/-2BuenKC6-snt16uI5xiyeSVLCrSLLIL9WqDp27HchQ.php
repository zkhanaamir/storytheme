<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/storytheme/templates/navigation/menu--main.html.twig */
class __TwigTemplate_7c58d41ea31a93055453529c7cbaa290 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "  ";
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 24
        echo "  
  ";
        // line 29
        echo "  
  ";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("storytheme/m-main-menu"), "html", null, true);
        echo "
  
  ";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 1, ($context["storythemeSvgSpritePath"] ?? null), ""], 32, $context, $this->getSourceContext()));
        echo "
  
  ";
        // line 124
        echo "  ";
    }

    // line 34
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__storythemeSvgSpritePath__ = null, $__prevLevelTitle__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "storythemeSvgSpritePath" => $__storythemeSvgSpritePath__,
            "prevLevelTitle" => $__prevLevelTitle__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 35
            echo "    ";
            $macros["menus"] = $this;
            // line 36
            echo "    ";
            if ((($context["menu_level"] ?? null) == 2)) {
                // line 37
                echo "      <div class=\"m-main-menu__sub-section\">
        <div class=\"m-main-menu__selected-item\">
          <button class=\"a-text a-text--header-navigation m-main-menu__link m-main-menu__link--previous\" aria-expanded=\"true\">
            <span class=\"m-main-menu__link-content\">
              <svg class=\"m-main-menu__icon\" aria-hidden=\"true\">
                <use xlink:href=\"";
                // line 42
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["storythemeSvgSpritePath"] ?? null), 42, $this->source), "html", null, true);
                echo "#svg-chevron-left\"></use>
              </svg>
              ";
                // line 44
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prevLevelTitle"] ?? null), 44, $this->source), "html", null, true);
                echo "
            </span>
          </button>
        </div>
    ";
            }
            // line 49
            echo "    ";
            if (($context["items"] ?? null)) {
                // line 50
                echo "      ";
                if ((($context["menu_level"] ?? null) == 2)) {
                    // line 51
                    echo "        ";
                    $context["has_sub_menus_somewhere"] = "no";
                    // line 52
                    echo "        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 53
                        echo "          ";
                        if ((twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 53) && (($context["has_sub_menus_somewhere"] ?? null) == "no"))) {
                            // line 54
                            echo "            ";
                            $context["has_sub_menus_somewhere"] = "yes";
                            // line 55
                            echo "          ";
                        }
                        // line 56
                        echo "        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 57
                    echo "      ";
                }
                // line 58
                echo "      ";
                $context["ul_classes"] = [0 => "m-main-menu__list", 1 => (("m-main-menu__list--" . $this->sandbox->ensureToStringAllowed(                // line 60
($context["menu_level"] ?? null), 60, $this->source)) . "-level"), 2 => ((((                // line 61
($context["menu_level"] ?? null) == 2) && (($context["has_sub_menus_somewhere"] ?? null) == "no"))) ? ("m-main-menu__list--one-column") : (""))];
                // line 63
                echo "      <ul ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(), "addClass", [0 => ($context["ul_classes"] ?? null)], "method", false, false, true, 63), 63, $this->source), "html", null, true);
                echo ">
      ";
                // line 64
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 65
                    echo "        ";
                    $context["itemClasses"] = [0 => "m-main-menu__item", 1 => (("m-main-menu__item--" . $this->sandbox->ensureToStringAllowed(                    // line 67
($context["menu_level"] ?? null), 67, $this->source)) . "-level"), 2 => ((twig_get_attribute($this->env, $this->source,                     // line 68
$context["item"], "below", [], "any", false, false, true, 68)) ? ("m-main-menu__item--has-menu") : (""))];
                    // line 70
                    echo "        <li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 70), "addClass", [0 => ($context["itemClasses"] ?? null)], "method", false, false, true, 70), 70, $this->source), "html", null, true);
                    echo ">
          ";
                    // line 71
                    if ((($context["menu_level"] ?? null) == 1)) {
                        // line 72
                        echo "            ";
                        $context["link_attributes"] = ["class" => [0 => "a-text", 1 => "a-text--header-navigation", 2 => "m-main-menu__link", 3 => (("m-main-menu__link--" . $this->sandbox->ensureToStringAllowed(                        // line 77
($context["menu_level"] ?? null), 77, $this->source)) . "-level"), 4 => ((twig_get_attribute($this->env, $this->source,                         // line 78
$context["item"], "below", [], "any", false, false, true, 78)) ? ("m-main-menu__link--has-menu") : (""))]];
                        // line 81
                        echo "            ";
                        ob_start();
                        // line 82
                        echo "              <span class=\"m-main-menu__link-content\">
                ";
                        // line 83
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                        echo "
                ";
                        // line 84
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 84)) {
                            // line 85
                            echo "                  ";
                            $context["link_attributes"] = ["class" => [0 => "a-text", 1 => "a-text--header-navigation", 2 => "m-main-menu__link", 3 => (("m-main-menu__link--" . $this->sandbox->ensureToStringAllowed(                            // line 90
($context["menu_level"] ?? null), 90, $this->source)) . "-level"), 4 => ((twig_get_attribute($this->env, $this->source,                             // line 91
$context["item"], "below", [], "any", false, false, true, 91)) ? ("m-main-menu__link--has-menu") : (""))], "aria-label" => (("Expand " . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                             // line 93
$context["item"], "title", [], "any", false, false, true, 93), 93, $this->source)) . t(" sub menu")), "aria-expanded" => "false"];
                            // line 96
                            echo "                  <svg class=\"m-main-menu__icon\" aria-hidden=\"true\">
                    <use xlink:href=\"";
                            // line 97
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["storythemeSvgSpritePath"] ?? null), 97, $this->source), "html", null, true);
                            echo "#svg-chevron-right\"></use>
                  </svg>
                ";
                        }
                        // line 100
                        echo "              </span>
            ";
                        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 102
                        echo "            ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 102, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 102), 102, $this->source), $this->sandbox->ensureToStringAllowed(($context["link_attributes"] ?? null), 102, $this->source)), "html", null, true);
                        echo "
            ";
                        // line 103
                        $context["prevLevelTitle"] = twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 103);
                        // line 104
                        echo "            <div class=\"m-main-menu__delimiter\"></div>
          ";
                    } else {
                        // line 106
                        echo "            ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 106), 106, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 106), 106, $this->source), ["class" => [0 => "a-text", 1 => (((                        // line 108
($context["menu_level"] ?? null) == 2)) ? ("a-text--header-navigation") : ("a-text--body-2-regular")), 2 => "m-main-menu__link", 3 => (("m-main-menu__link--" . $this->sandbox->ensureToStringAllowed(                        // line 110
($context["menu_level"] ?? null), 110, $this->source)) . "-level")]]), "html", null, true);
                        // line 111
                        echo "
          ";
                    }
                    // line 113
                    echo "          ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 113)) {
                        // line 114
                        echo "            ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 114), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), ($context["storythemeSvgSpritePath"] ?? null), ($context["prevLevelTitle"] ?? null)], 114, $context, $this->getSourceContext()));
                        echo "
          ";
                    }
                    // line 116
                    echo "        </li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 118
                echo "    </ul>
    ";
            }
            // line 120
            echo "    ";
            if ((($context["menu_level"] ?? null) == 2)) {
                // line 121
                echo "      </div>
    ";
            }
            // line 123
            echo "  ";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/storytheme/templates/navigation/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 123,  242 => 121,  239 => 120,  235 => 118,  228 => 116,  222 => 114,  219 => 113,  215 => 111,  213 => 110,  212 => 108,  210 => 106,  206 => 104,  204 => 103,  199 => 102,  195 => 100,  189 => 97,  186 => 96,  184 => 93,  183 => 91,  182 => 90,  180 => 85,  178 => 84,  174 => 83,  171 => 82,  168 => 81,  166 => 78,  165 => 77,  163 => 72,  161 => 71,  156 => 70,  154 => 68,  153 => 67,  151 => 65,  147 => 64,  142 => 63,  140 => 61,  139 => 60,  137 => 58,  134 => 57,  128 => 56,  125 => 55,  122 => 54,  119 => 53,  114 => 52,  111 => 51,  108 => 50,  105 => 49,  97 => 44,  92 => 42,  85 => 37,  82 => 36,  79 => 35,  62 => 34,  58 => 124,  53 => 32,  48 => 30,  45 => 29,  42 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("{#
  /**
   * @file
   * Default theme implementation to display a menu.
   *
   * Available variables:
   * - menu_name: The machine name of the menu.
   * - items: A nested list of menu items. Each menu item contains:
   *   - attributes: HTML attributes for the menu item.
   *   - below: The menu item child items.
   *   - title: The menu link title.
   *   - url: The menu link url, instance of \\Drupal\\Core\\Url
   *   - localized_options: Menu link localized options.
   *   - is_expanded: TRUE if the link has visible children within the current
   *     menu tree.
   *   - is_collapsed: TRUE if the link has children within the current menu tree
   *     that are not currently visible.
   *   - in_active_trail: TRUE if the link is in the active trail.
   *
   * @ingroup themeable
   */
  #}
  {% import _self as menus %}
  
  {#
  We call a macro which calls itself to render the full tree.
  @see https://twig.symfony.com/doc/1.x/tags/macro.html
  #}
  
  {{ attach_library('storytheme/m-main-menu') }}
  
  {{ menus.menu_links(items, attributes, 1, storythemeSvgSpritePath, '') }}
  
  {% macro menu_links(items, attributes, menu_level, storythemeSvgSpritePath, prevLevelTitle) %}
    {% import _self as menus %}
    {% if menu_level == 2 %}
      <div class=\"m-main-menu__sub-section\">
        <div class=\"m-main-menu__selected-item\">
          <button class=\"a-text a-text--header-navigation m-main-menu__link m-main-menu__link--previous\" aria-expanded=\"true\">
            <span class=\"m-main-menu__link-content\">
              <svg class=\"m-main-menu__icon\" aria-hidden=\"true\">
                <use xlink:href=\"{{ storythemeSvgSpritePath }}#svg-chevron-left\"></use>
              </svg>
              {{ prevLevelTitle }}
            </span>
          </button>
        </div>
    {% endif %}
    {% if items %}
      {% if menu_level == 2 %}
        {% set has_sub_menus_somewhere = 'no' %}
        {% for item in items %}
          {% if item.below and has_sub_menus_somewhere == 'no' %}
            {% set has_sub_menus_somewhere = 'yes' %}
          {% endif %}
        {% endfor %}
      {% endif %}
      {% set ul_classes = [
        'm-main-menu__list',
        'm-main-menu__list--' ~ menu_level ~ '-level',
        menu_level == 2 and has_sub_menus_somewhere == 'no' ? 'm-main-menu__list--one-column',
      ] %}
      <ul {{ create_attribute().addClass(ul_classes) }}>
      {% for item in items %}
        {% set itemClasses = [
          'm-main-menu__item',
          'm-main-menu__item--' ~ menu_level ~ '-level',
          item.below ? 'm-main-menu__item--has-menu',
        ] %}
        <li{{ item.attributes.addClass(itemClasses) }}>
          {% if menu_level == 1 %}
            {% set link_attributes = {
              'class': [
                'a-text',
                'a-text--header-navigation',
                'm-main-menu__link',
                'm-main-menu__link--' ~ menu_level ~ '-level',
                item.below ? 'm-main-menu__link--has-menu',
              ]
            } %}
            {% set title %}
              <span class=\"m-main-menu__link-content\">
                {{ item.title }}
                {% if item.below %}
                  {% set link_attributes = {
                    'class': [
                      'a-text',
                      'a-text--header-navigation',
                      'm-main-menu__link',
                      'm-main-menu__link--' ~ menu_level ~ '-level',
                      item.below ? 'm-main-menu__link--has-menu',
                    ],
                    'aria-label': 'Expand ' ~ item.title ~ ' sub menu'|t,
                    'aria-expanded': 'false',
                  } %}
                  <svg class=\"m-main-menu__icon\" aria-hidden=\"true\">
                    <use xlink:href=\"{{ storythemeSvgSpritePath }}#svg-chevron-right\"></use>
                  </svg>
                {% endif %}
              </span>
            {% endset %}
            {{ link(title, item.url, link_attributes) }}
            {% set prevLevelTitle = item.title %}
            <div class=\"m-main-menu__delimiter\"></div>
          {% else %}
            {{ link(item.title, item.url, { 'class': [
              'a-text',
              menu_level == 2 ? 'a-text--header-navigation' : 'a-text--body-2-regular',
              'm-main-menu__link',
              'm-main-menu__link--' ~ menu_level ~ '-level',
            ] }) }}
          {% endif %}
          {% if item.below %}
            {{ menus.menu_links(item.below, attributes, menu_level + 1, storythemeSvgSpritePath, prevLevelTitle) }}
          {% endif %}
        </li>
      {% endfor %}
    </ul>
    {% endif %}
    {% if menu_level == 2 %}
      </div>
    {% endif %}
  {% endmacro %}
  ", "themes/custom/storytheme/templates/navigation/menu--main.html.twig", "/app/web/themes/custom/storytheme/templates/navigation/menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 23, "macro" => 34, "if" => 36, "set" => 51, "for" => 52);
        static $filters = array("escape" => 30, "t" => 93);
        static $functions = array("attach_library" => 30, "create_attribute" => 63, "link" => 102);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'set', 'for'],
                ['escape', 't'],
                ['attach_library', 'create_attribute', 'link']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
