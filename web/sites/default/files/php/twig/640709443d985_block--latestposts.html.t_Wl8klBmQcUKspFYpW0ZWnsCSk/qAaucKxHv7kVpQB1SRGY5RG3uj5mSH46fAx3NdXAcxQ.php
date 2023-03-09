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

/* themes/custom/storytheme/templates/navigation/block--latestposts.html.twig */
class __TwigTemplate_8991cd0cd8cc09c21e125f0147f40ad8 extends Template
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
        // line 37
        echo "    ";
        $context["heading_id"] = ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", false, false, true, 37), 37, $this->source) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 38
        echo "    <div class=\"m-footer-menu latest-posts-menu\" role=\"navigation\">
      <nav class=\"m-footer-menu__nav\" role=\"navigation\" aria-labelledby=\"";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 39, $this->source), "html", null, true);
        echo "\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 39, $this->source), "role", "aria-labelledby"), "html", null, true);
        echo ">
        ";
        // line 41
        echo "        ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "label_display", [], "any", false, false, true, 41)) {
            // line 42
            echo "          ";
            $context["title_attributes"] = twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "visually-hidden"], "method", false, false, true, 42);
            // line 43
            echo "        ";
        }
        // line 44
        echo "        <div class=\"m-footer-menu__title\">
          ";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 45, $this->source), "html", null, true);
        echo "
            <h5";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "setAttribute", [0 => "id", 1 => ($context["heading_id"] ?? null)], "method", false, false, true, 46), 46, $this->source), "html", null, true);
        echo " class=\"a-text a-text--header-5-bold m-footer-menu__title\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "label", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
        echo "</h5>
          ";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 47, $this->source), "html", null, true);
        echo "
        </div>  
        ";
        // line 50
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 53
        echo "      </nav>
    </div>
    
    ";
    }

    // line 50
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "          ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 51, $this->source), "html", null, true);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "themes/custom/storytheme/templates/navigation/block--latestposts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 51,  89 => 50,  82 => 53,  79 => 50,  74 => 47,  68 => 46,  64 => 45,  61 => 44,  58 => 43,  55 => 42,  52 => 41,  46 => 39,  43 => 38,  40 => 37,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    /**
     * @file
     * Default theme implementation for a menu block.
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
     * - attributes: HTML attributes for the containing element.
     *   - id: A valid HTML ID and guaranteed unique.
     * - title_attributes: HTML attributes for the title element.
     * - content_attributes: HTML attributes for the content element.
     * - title_prefix: Additional output populated by modules, intended to be
     *   displayed in front of the main title tag that appears in the template.
     * - title_suffix: Additional output populated by modules, intended to be
     *   displayed after the main title tag that appears in the template.
     *
     * Headings should be used on navigation menus that consistently appear on
     * multiple pages. When this menu block's label is configured to not be
     * displayed, it is automatically made invisible using the 'visually-hidden' CSS
     * class, which still keeps it visible for screen-readers and assistive
     * technology. Headings allow screen-reader and keyboard only users to navigate
     * to or skip the links.
     * See http://juicystudio.com/article/screen-readers-display-none.php and
     * http://www.w3.org/TR/WCAG-TECHS/H42.html for more information.
     *
     * @ingroup themeable
     */
    #}
    {% set heading_id = attributes.id ~ '-menu'|clean_id %}
    <div class=\"m-footer-menu latest-posts-menu\" role=\"navigation\">
      <nav class=\"m-footer-menu__nav\" role=\"navigation\" aria-labelledby=\"{{ heading_id }}\"{{ attributes|without('role', 'aria-labelledby') }}>
        {# Label. If not displayed, we still provide it for screen readers. #}
        {% if not configuration.label_display %}
          {% set title_attributes = title_attributes.addClass('visually-hidden') %}
        {% endif %}
        <div class=\"m-footer-menu__title\">
          {{ title_prefix }}
            <h5{{ title_attributes.setAttribute('id', heading_id) }} class=\"a-text a-text--header-5-bold m-footer-menu__title\">{{ configuration.label }}</h5>
          {{ title_suffix }}
        </div>  
        {# Menu. #}
        {% block content %}
          {{ content }}
        {% endblock %}
      </nav>
    </div>
    
    ", "themes/custom/storytheme/templates/navigation/block--latestposts.html.twig", "/app/web/themes/custom/storytheme/templates/navigation/block--latestposts.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 37, "if" => 41, "block" => 50);
        static $filters = array("clean_id" => 37, "escape" => 39, "without" => 39);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_id', 'escape', 'without'],
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
