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

/* themes/custom/storytheme/templates/field/footer-brand/field.html.twig */
class __TwigTemplate_7c433f0509fe4387f0032372a5b105c9 extends Template
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
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
                    echo "
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "      ";
            } else {
                // line 52
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 53
                    echo "          ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                    echo "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "      ";
            }
            // line 56
            echo "    ";
        } else {
            // line 57
            echo "      
        ";
            // line 58
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 58, $this->source), "html", null, true);
            echo "
        ";
            // line 59
            if (($context["multiple"] ?? null)) {
                // line 60
                echo "          
        ";
            }
            // line 62
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 63
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "        ";
            if (($context["multiple"] ?? null)) {
                // line 66
                echo "          
        ";
            }
            // line 68
            echo "      
    ";
        }
        // line 70
        echo "    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/storytheme/templates/field/footer-brand/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 70,  121 => 68,  117 => 66,  114 => 65,  105 => 63,  100 => 62,  96 => 60,  94 => 59,  90 => 58,  87 => 57,  84 => 56,  81 => 55,  72 => 53,  67 => 52,  64 => 51,  52 => 49,  49 => 48,  47 => 47,  44 => 46,  42 => 43,  41 => 42,  39 => 41,);
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
          {% for item in items %}{{ item.content }}
          {% endfor %}
      {% else %}
        {% for item in items %}
          {{ item.content }}
        {% endfor %}
      {% endif %}
    {% else %}
      
        {{ label }}
        {% if multiple %}
          
        {% endif %}
        {% for item in items %}
        {{ item.content }}
        {% endfor %}
        {% if multiple %}
          
        {% endif %}
      
    {% endif %}
    ", "themes/custom/storytheme/templates/field/footer-brand/field.html.twig", "/app/web/themes/custom/storytheme/templates/field/footer-brand/field.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 42, "if" => 47, "for" => 49);
        static $filters = array("escape" => 49);
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
