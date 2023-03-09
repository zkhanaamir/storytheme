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

/* themes/custom/storytheme/templates/navigation/menu--quick-links.html.twig */
class __TwigTemplate_043b101739edb3c9c1e03ba85bd473f0 extends Template
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
        // line 21
        echo "    ";
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 22
        echo "    
    ";
        // line 27
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 27, $context, $this->getSourceContext()));
        echo "
    
    ";
        // line 46
        echo "    ";
    }

    // line 29
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 30
            echo "      ";
            $macros["menus"] = $this;
            // line 31
            echo "      ";
            if (($context["items"] ?? null)) {
                // line 32
                echo "          <ul class=\"m-footer-menu__list\">
            ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 34
                    echo "              <li class=\"m-footer-menu__item\">
               
                ";
                    // line 36
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 36), 36, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 36), 36, $this->source), ["class" => [0 => "a-text", 1 => "a-text--body-2-bold", 2 => "m-footer-menu__link"]]), "html", null, true);
                    // line 40
                    echo "
              </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "          </ul>
      ";
            }
            // line 45
            echo "    ";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/storytheme/templates/navigation/menu--quick-links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 45,  97 => 43,  89 => 40,  87 => 36,  83 => 34,  79 => 33,  76 => 32,  73 => 31,  70 => 30,  55 => 29,  51 => 46,  45 => 27,  42 => 22,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    /**
     * @file
     * Theme override to display a menu.
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
     */
    #}
    {% import _self as menus %}
    
    {#
    We call a macro which calls itself to render the full tree.
    @see https://twig.symfony.com/doc/1.x/tags/macro.html
    #}
    {{ menus.menu_links(items, attributes, 0) }}
    
    {% macro menu_links(items, attributes, menu_level) %}
      {% import _self as menus %}
      {% if items %}
          <ul class=\"m-footer-menu__list\">
            {% for item in items %}
              <li class=\"m-footer-menu__item\">
               
                {{ link(item.title, item.url, { 'class': [
                  'a-text',
                  'a-text--body-2-bold',
                  'm-footer-menu__link',
                ]}) }}
              </li>
            {% endfor %}
          </ul>
      {% endif %}
    {% endmacro %}
    ", "themes/custom/storytheme/templates/navigation/menu--quick-links.html.twig", "/app/web/themes/custom/storytheme/templates/navigation/menu--quick-links.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 21, "macro" => 29, "if" => 31, "for" => 33);
        static $filters = array("escape" => 36);
        static $functions = array("link" => 36);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for'],
                ['escape'],
                ['link']
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
