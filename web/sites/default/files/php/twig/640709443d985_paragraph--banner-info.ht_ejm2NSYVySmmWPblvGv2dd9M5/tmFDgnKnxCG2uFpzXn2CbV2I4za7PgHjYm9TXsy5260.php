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

/* themes/custom/storytheme/templates/paragraph/paragraph--banner-info.html.twig */
class __TwigTemplate_13a36cd78ad70093e77cf76465467f48 extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("storytheme/o-top-banner-info"), "html", null, true);
        echo "
    ";
        // line 43
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 45
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 45), 45, $this->source))), 2 => ((        // line 46
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 46, $this->source)))) : ("")), 3 => (( !twig_get_attribute($this->env, $this->source,         // line 47
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 47)) ? ("paragraph--unpublished") : (""))];
        // line 50
        echo "    ";
        $this->displayBlock('paragraph', $context, $blocks);
        // line 83
        echo "
    
  ";
    }

    // line 50
    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "    <div class=\"o-top-banner-info\">
        ";
        // line 52
        $this->displayBlock('content', $context, $blocks);
        // line 82
        echo "    ";
    }

    // line 52
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "        <div class=\"o-top-banner-info_container\">
            ";
        // line 54
        if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_banner_text", [], "any", false, false, true, 54)) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_banner_link", [], "any", false, false, true, 54)))) {
            // line 55
            echo "            <div class=\"o-top-banner-info__content\">
              <div class=\"m-banner-text\">
                <div class=\"m-banner-text__container\">
                  ";
            // line 58
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_banner_text", [], "any", false, false, true, 58))) {
                // line 59
                echo "                    <p class=\"a-text a-text--website-title m-banner-text__text\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = (($__internal_compile_1 = (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_banner_text", [], "any", false, false, true, 59)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["0"] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#context"] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["value"] ?? null) : null), 59, $this->source), "html", null, true);
                echo "</p>
                  ";
            }
            // line 61
            echo "                  ";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_banner_link", [], "any", false, false, true, 61))) {
                // line 62
                echo "                    <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_banner_link", [], "any", false, false, true, 62)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["0"] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#url"] ?? null) : null), 62, $this->source), "html", null, true);
                echo "\" class=\"a-text a-text--link-text m-banner-text__link\">
                      ";
                // line 63
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_5 = (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_banner_link", [], "any", false, false, true, 63)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["0"] ?? null) : null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#title"] ?? null) : null), 63, $this->source), "html", null, true);
                echo "
                    </a>
                  ";
            }
            // line 66
            echo "                </div>
              </div>  
            </div>
            ";
        }
        // line 70
        echo "            <div class=\"o-top-banner-info__content\">
              <div class=\"m-banner-links\">
                ";
        // line 72
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_banner_icon_links", [], "any", false, false, true, 72)) {
            // line 73
            echo "                <ul class=\"m-banner-links__list\">
                    ";
            // line 74
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_banner_icon_links", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
            echo "
                </ul>
                ";
        }
        // line 77
        echo "              </div>
            </div>
            </div>
        </div>
      ";
    }

    public function getTemplateName()
    {
        return "themes/custom/storytheme/templates/paragraph/paragraph--banner-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 77,  124 => 74,  121 => 73,  119 => 72,  115 => 70,  109 => 66,  103 => 63,  98 => 62,  95 => 61,  89 => 59,  87 => 58,  82 => 55,  80 => 54,  77 => 53,  73 => 52,  69 => 82,  67 => 52,  64 => 51,  60 => 50,  54 => 83,  51 => 50,  49 => 47,  48 => 46,  47 => 45,  46 => 43,  41 => 41,);
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
    {{ attach_library('storytheme/o-top-banner-info') }}
    {%
      set classes = [
        'paragraph',
        'paragraph--type--' ~ paragraph.bundle|clean_class,
        view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
        not paragraph.isPublished() ? 'paragraph--unpublished'
      ]
    %}
    {% block paragraph %}
    <div class=\"o-top-banner-info\">
        {% block content %}
        <div class=\"o-top-banner-info_container\">
            {% if content.field_banner_text|render or content.field_banner_link|render %}
            <div class=\"o-top-banner-info__content\">
              <div class=\"m-banner-text\">
                <div class=\"m-banner-text__container\">
                  {% if content.field_banner_text|render %}
                    <p class=\"a-text a-text--website-title m-banner-text__text\">{{ content.field_banner_text['0']['#context']['value'] }}</p>
                  {% endif %}
                  {% if content.field_banner_link|render %}
                    <a href=\"{{ content.field_banner_link['0']['#url'] }}\" class=\"a-text a-text--link-text m-banner-text__link\">
                      {{ content.field_banner_link['0']['#title'] }}
                    </a>
                  {% endif %}
                </div>
              </div>  
            </div>
            {% endif %}
            <div class=\"o-top-banner-info__content\">
              <div class=\"m-banner-links\">
                {% if content.field_banner_icon_links %}
                <ul class=\"m-banner-links__list\">
                    {{ content.field_banner_icon_links }}
                </ul>
                {% endif %}
              </div>
            </div>
            </div>
        </div>
      {% endblock %}
    {% endblock paragraph %}

    
  ", "themes/custom/storytheme/templates/paragraph/paragraph--banner-info.html.twig", "/app/web/themes/custom/storytheme/templates/paragraph/paragraph--banner-info.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 43, "block" => 50, "if" => 54);
        static $filters = array("escape" => 41, "clean_class" => 45, "render" => 54);
        static $functions = array("attach_library" => 41);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['escape', 'clean_class', 'render'],
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
