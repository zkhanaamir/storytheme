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

/* themes/custom/storytheme/templates/paragraph/field--paragraph--field-socials--social-links.html.twig */
class __TwigTemplate_5f598811367b02aa5a1795a9c2f43407 extends Template
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
        // line 41
        echo "    ";
        // line 42
        $context["title_classes"] = [0 => (((        // line 43
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 46
        echo "    
    ";
        // line 47
        if (($context["label_hidden"] ?? null)) {
            // line 48
            echo "      ";
            if (($context["multiple"] ?? null)) {
                // line 49
                echo "        
        <ul class=\"m-social-links__list\">
          ";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 52
                    echo "            <li class=\"m-social-links__item\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "        </ul>
      ";
            } else {
                // line 56
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 57
                    echo "          <div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 57, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                    echo "</div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "      ";
            }
            // line 60
            echo "    ";
        } else {
            // line 61
            echo "      <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 61, $this->source), "html", null, true);
            echo ">
        <div";
            // line 62
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 62), 62, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 62, $this->source), "html", null, true);
            echo "</div>
        ";
            // line 63
            if (($context["multiple"] ?? null)) {
                // line 64
                echo "          <div>
        ";
            }
            // line 66
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 67
                echo "          <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
                echo "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "        ";
            if (($context["multiple"] ?? null)) {
                // line 70
                echo "          </div>
        ";
            }
            // line 72
            echo "      </div>
    ";
        }
        // line 74
        echo "    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/storytheme/templates/paragraph/field--paragraph--field-socials--social-links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 74,  135 => 72,  131 => 70,  128 => 69,  117 => 67,  112 => 66,  108 => 64,  106 => 63,  100 => 62,  95 => 61,  92 => 60,  89 => 59,  78 => 57,  73 => 56,  69 => 54,  60 => 52,  56 => 51,  52 => 49,  49 => 48,  47 => 47,  44 => 46,  42 => 43,  41 => 42,  39 => 41,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    /**
     * @file
     * Default theme implementation for a field.
     *
     * To override output, copy the \"field.html.twig\" from the templates directory
     * to your theme's directory and customize it, just like customizing other
     * Drupal templates such as page.html.twig or node.html.twig.
     *
     * Instead of overriding the theming for all fields, you can also just override
     * theming for a subset of fields using
     * @link themeable Theme hook suggestions. @endlink For example,
     * here are some theme hook suggestions that can be used for a field_foo field
     * on an article node type:
     * - field--node--field-foo--article.html.twig
     * - field--node--field-foo.html.twig
     * - field--node--article.html.twig
     * - field--field-foo.html.twig
     * - field--text-with-summary.html.twig
     * - field.html.twig
     *
     * Available variables:
     * - attributes: HTML attributes for the containing element.
     * - label_hidden: Whether to show the field label or not.
     * - title_attributes: HTML attributes for the title.
     * - label: The label for the field.
     * - multiple: TRUE if a field can contain multiple items.
     * - items: List of all the field items. Each item contains:
     *   - attributes: List of HTML attributes for each item.
     *   - content: The field item's content.
     * - entity_type: The entity type to which the field belongs.
     * - field_name: The name of the field.
     * - field_type: The type of the field.
     * - label_display: The display settings for the label.
     *
     * @see template_preprocess_field()
     *
     * @ingroup themeable
     */
    #}
    {%
      set title_classes = [
        label_display == 'visually_hidden' ? 'visually-hidden',
      ]
    %}
    
    {% if label_hidden %}
      {% if multiple %}
        
        <ul class=\"m-social-links__list\">
          {% for item in items %}
            <li class=\"m-social-links__item\">{{ item.content }}</li>
          {% endfor %}
        </ul>
      {% else %}
        {% for item in items %}
          <div{{ attributes }}>{{ item.content }}</div>
        {% endfor %}
      {% endif %}
    {% else %}
      <div{{ attributes }}>
        <div{{ title_attributes.addClass(title_classes) }}>{{ label }}</div>
        {% if multiple %}
          <div>
        {% endif %}
        {% for item in items %}
          <div{{ item.attributes }}>{{ item.content }}</div>
        {% endfor %}
        {% if multiple %}
          </div>
        {% endif %}
      </div>
    {% endif %}
    ", "themes/custom/storytheme/templates/paragraph/field--paragraph--field-socials--social-links.html.twig", "/app/web/themes/custom/storytheme/templates/paragraph/field--paragraph--field-socials--social-links.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 42, "if" => 47, "for" => 51);
        static $filters = array("escape" => 52);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape'],
                []
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
