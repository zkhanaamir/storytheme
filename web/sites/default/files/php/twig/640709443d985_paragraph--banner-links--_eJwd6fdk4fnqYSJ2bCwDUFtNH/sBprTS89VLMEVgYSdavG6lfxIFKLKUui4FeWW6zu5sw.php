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

/* themes/custom/storytheme/templates/paragraph/paragraph--banner-links--default.html.twig */
class __TwigTemplate_407c52d1eb807bc9f5a61ad0d552bf6c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("storytheme/m-banner-links"), "html", null, true);
        echo "
    ";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("storytheme/m-banner-text"), "html", null, true);
        echo "
    ";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("storytheme/m-social-links"), "html", null, true);
        echo "
    ";
        // line 45
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 47
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 47), 47, $this->source))), 2 => ((        // line 48
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 48, $this->source)))) : ("")), 3 => (( !twig_get_attribute($this->env, $this->source,         // line 49
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 49)) ? ("paragraph--unpublished") : (""))];
        // line 52
        echo "    ";
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 65
        echo "    ";
    }

    // line 53
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "            <li class=\"m-banner-links__container\">
                <div class=\"m-banner-links__icon-container\"> 
                    ";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_banner_icon", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        echo "
                </div>
                <div class=\"m-banner-links__link-container\">
                    <a href=\"/\" class=\"m-banner-links__link\">
                        ";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_banner_icon_link", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "
                    </a>
                </div>
            </li>
        ";
    }

    public function getTemplateName()
    {
        return "themes/custom/storytheme/templates/paragraph/paragraph--banner-links--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 60,  82 => 56,  78 => 54,  74 => 53,  70 => 65,  67 => 53,  59 => 52,  57 => 49,  56 => 48,  55 => 47,  54 => 45,  50 => 43,  46 => 42,  41 => 41,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    /**
     * @file
     * Default theme implementation to display a paragraph.
     *
     * Available variables:
     * - paragraph: Full paragraph entity.
     *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
     *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
     *   - paragraph.getCreatedTime() will return the paragraph creation timestamp.
     *   - paragraph.id(): The paragraph ID.
     *   - paragraph.bundle(): The type of the paragraph, for example, \"image\" or \"text\".
     *   - paragraph.getOwnerId(): The user ID of the paragraph author.
     *   See Drupal\\paragraphs\\Entity\\Paragraph for a full list of public properties
     *   and methods for the paragraph object.
     * - content: All paragraph items. Use {{ content }} to print them all,
     *   or print a subset such as {{ content.field_example }}. Use
     *   {{ content|without('field_example') }} to temporarily suppress the printing
     *   of a given child element.
     * - attributes: HTML attributes for the containing element.
     *   The attributes.class element may contain one or more of the following
     *   classes:
     *   - paragraphs: The current template type (also known as a \"theming hook\").
     *   - paragraphs--type-[type]: The current paragraphs type. For example, if the paragraph is an
     *     \"Image\" it would result in \"paragraphs--type--image\". Note that the machine
     *     name will often be in a short form of the human readable label.
     *   - paragraphs--view-mode--[view_mode]: The View Mode of the paragraph; for example, a
     *     preview would result in: \"paragraphs--view-mode--preview\", and
     *     default: \"paragraphs--view-mode--default\".
     * - view_mode: View mode; for example, \"preview\" or \"full\".
     * - logged_in: Flag for authenticated user status. Will be true when the
     *   current user is a logged-in member.
     * - is_admin: Flag for admin user status. Will be true when the current user
     *   is an administrator.
     *
     * @see template_preprocess_paragraph()
     *
     * @ingroup themeable
     */
    #}
    {{ attach_library('storytheme/m-banner-links') }}
    {{ attach_library('storytheme/m-banner-text') }}
    {{ attach_library('storytheme/m-social-links') }}
    {%
      set classes = [
        'paragraph',
        'paragraph--type--' ~ paragraph.bundle|clean_class,
        view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
        not paragraph.isPublished() ? 'paragraph--unpublished'
      ]
    %}
    {% block paragraph %}
        {% block content %}
            <li class=\"m-banner-links__container\">
                <div class=\"m-banner-links__icon-container\"> 
                    {{ content.field_banner_icon }}
                </div>
                <div class=\"m-banner-links__link-container\">
                    <a href=\"/\" class=\"m-banner-links__link\">
                        {{ content.field_banner_icon_link }}
                    </a>
                </div>
            </li>
        {% endblock %}
    {% endblock paragraph %}", "themes/custom/storytheme/templates/paragraph/paragraph--banner-links--default.html.twig", "/app/web/themes/custom/storytheme/templates/paragraph/paragraph--banner-links--default.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 45, "block" => 52);
        static $filters = array("escape" => 41, "clean_class" => 47);
        static $functions = array("attach_library" => 41);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
                ['escape', 'clean_class'],
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
