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

/* modules/contrib/paragraphs/templates/paragraphs-actions.html.twig */
class __TwigTemplate_e043f5f2d223007a4957e103a52f76e7 extends Template
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
        // line 15
        echo "<div class=\"paragraphs-actions\">
  ";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["actions"] ?? null), 16, $this->source), "html", null, true);
        echo "
  ";
        // line 20
        echo "  ";
        $context["dropdown_actions_output"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["dropdown_actions"] ?? null), 20, $this->source));
        // line 21
        echo "  ";
        if (($context["dropdown_actions_output"] ?? null)) {
            // line 22
            echo "    <div class=\"paragraphs-dropdown\">
      <button class=\"paragraphs-dropdown-toggle\"><span class=\"visually-hidden\">";
            // line 23
            echo t("Toggle Actions", array());
            echo "</span></button>
      <div class=\"paragraphs-dropdown-actions\">
        ";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["dropdown_actions_output"] ?? null), 25, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 29
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/paragraphs/templates/paragraphs-actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 29,  60 => 25,  55 => 23,  52 => 22,  49 => 21,  46 => 20,  42 => 16,  39 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for a paragraphs actions component.
 *
 * Available variables:
 * - actions - default actions, always visible and not in dropdown.
 * - dropdown_actions - actions for dropdown subcomponent.
 *
 * @see template_preprocess()
 *
 * @ingroup themeable
 */
#}
<div class=\"paragraphs-actions\">
  {{ actions }}
  {# We are still using access attribute on some places to disable dropdown
     actions and that is why we will first render dropdown_actions and then
     render dropdown subcomoponent if needed. #}
  {% set dropdown_actions_output = render_var(dropdown_actions) %}
  {% if dropdown_actions_output %}
    <div class=\"paragraphs-dropdown\">
      <button class=\"paragraphs-dropdown-toggle\"><span class=\"visually-hidden\">{% trans %}Toggle Actions{% endtrans %}</span></button>
      <div class=\"paragraphs-dropdown-actions\">
        {{ dropdown_actions_output }}
      </div>
    </div>
  {% endif %}
</div>
", "modules/contrib/paragraphs/templates/paragraphs-actions.html.twig", "/app/web/modules/contrib/paragraphs/templates/paragraphs-actions.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 20, "if" => 21, "trans" => 23);
        static $filters = array("escape" => 16);
        static $functions = array("render_var" => 20);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['escape'],
                ['render_var']
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
