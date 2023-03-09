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

/* themes/custom/storytheme/templates/block/block--footerbrandblock.html.twig */
class __TwigTemplate_8d385c227b8ba81581878ec53bdf6bee extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("storytheme/m-brand"), "html", null, true);
        echo "
";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("storytheme/a-text"), "html", null, true);
        echo "

<div class=\"m-brand\">
  ";
        // line 35
        $this->displayBlock('content', $context, $blocks);
        // line 52
        echo "</div>";
    }

    // line 35
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "  ";
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_footer_brand_title", [], "any", false, false, true, 36))) {
            // line 37
            echo "    <div class=\"m-brand__label\">
      ";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_footer_brand_title", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 41
        echo "  ";
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_footer_brand_body", [], "any", false, false, true, 41))) {
            // line 42
            echo "    <div class=\"m-brand__text\">
      ";
            // line 43
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_footer_brand_body", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 46
        echo "  ";
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_footer_brand_cta", [], "any", false, false, true, 46))) {
            // line 47
            echo "    <div class=\"m-brand__read\">
      ";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_footer_brand_cta", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 51
        echo "  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/storytheme/templates/block/block--footerbrandblock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 51,  90 => 48,  87 => 47,  84 => 46,  78 => 43,  75 => 42,  72 => 41,  66 => 38,  63 => 37,  60 => 36,  56 => 35,  52 => 52,  50 => 35,  44 => 32,  40 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - in_preview: Whether the plugin is being rendered in preview mode.
 * - content: The content of this block.
 * - attributes: array of HTML attributes populated by modules, intended to
 *   be added to the main container tag of this template.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @see template_preprocess_block()
 *
 * @ingroup themeable
 */
#}
{{ attach_library('storytheme/m-brand') }}
{{ attach_library('storytheme/a-text') }}

<div class=\"m-brand\">
  {% block content %}
  {% if content.field_footer_brand_title|render %}
    <div class=\"m-brand__label\">
      {{ content.field_footer_brand_title }}
    </div>
  {% endif %}
  {% if content.field_footer_brand_body|render %}
    <div class=\"m-brand__text\">
      {{ content.field_footer_brand_body }}
    </div>
  {% endif %}
  {% if content.field_footer_brand_cta|render %}
    <div class=\"m-brand__read\">
      {{ content.field_footer_brand_cta }}
    </div>
  {% endif %}
  {% endblock %}
</div>", "themes/custom/storytheme/templates/block/block--footerbrandblock.html.twig", "/app/web/themes/custom/storytheme/templates/block/block--footerbrandblock.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 35, "if" => 36);
        static $filters = array("escape" => 31, "render" => 36);
        static $functions = array("attach_library" => 31);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['escape', 'render'],
                ['attach_library']
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
