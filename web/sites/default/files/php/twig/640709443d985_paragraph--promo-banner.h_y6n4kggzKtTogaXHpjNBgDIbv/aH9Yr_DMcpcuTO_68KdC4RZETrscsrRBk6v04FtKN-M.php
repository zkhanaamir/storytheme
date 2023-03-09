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

/* themes/custom/storytheme/templates/paragraph/paragraph--promo-banner.html.twig */
class __TwigTemplate_f8e57852499893ee8b82df71a54bff95 extends Template
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
        echo "
  ";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("storytheme/m-vedio-banner"), "html", null, true);
        echo "
  ";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("storytheme/a-button"), "html", null, true);
        echo "
  ";
        // line 45
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 47
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 47), 47, $this->source))), 2 => ((        // line 48
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 48, $this->source)))) : ("")), 3 => (( !twig_get_attribute($this->env, $this->source,         // line 49
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 49)) ? ("paragraph--unpublished") : (""))];
        // line 52
        echo "  ";
        $this->displayBlock('paragraph', $context, $blocks);
        // line 96
        echo "  
  ";
    }

    // line 52
    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
  <div class=\"m-vedio-banner\">
      ";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 94
        echo "    </div>
  ";
    }

    // line 54
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "          
          ";
        // line 56
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_promo_vedio", [], "any", false, false, true, 56))) {
            // line 57
            echo "          <div class=\"m-vedio-banner__vedio-container\">
              ";
            // line 58
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_promo_vedio", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
            echo "
          </div>
          ";
        }
        // line 61
        echo "          ";
        if (((($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_promo_title", [], "any", false, false, true, 61)) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_promo_heading", [], "any", false, false, true, 61))) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_promo_description", [], "any", false, false, true, 61))) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_promo_cta", [], "any", false, false, true, 61)))) {
            // line 62
            echo "          <div class=\"m-vedio-banner__content\">
            ";
            // line 63
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_promo_title", [], "any", false, false, true, 63))) {
                // line 64
                echo "            <div class=\"m-vedio-banner__title-container\">
              <h3 class=\"a-text a-text--website-title m-vedio-banner__title\">";
                // line 65
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = (($__internal_compile_1 = (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_promo_title", [], "any", false, false, true, 65)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["0"] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#context"] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["value"] ?? null) : null), 65, $this->source), "html", null, true);
                echo "</h3>
            </div>
            ";
            }
            // line 68
            echo "            ";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_promo_heading", [], "any", false, false, true, 68))) {
                // line 69
                echo "            <div class=\"m-vedio-banner__heading-container\">
              <h1 class=\"a-text a-text--header-1 m-vedio-banner__heading\">";
                // line 70
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = (($__internal_compile_4 = (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_promo_heading", [], "any", false, false, true, 70)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["0"] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#context"] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["value"] ?? null) : null), 70, $this->source), "html", null, true);
                echo "</h1>
            </div>
            ";
            }
            // line 73
            echo "            ";
            if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_promo_description", [], "any", false, false, true, 73)) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_promo_cta", [], "any", false, false, true, 73)))) {
                // line 74
                echo "                <div class=\"m-vedio-banner__text-container\">
                  <div class=\"m-vedio-banner__text-subcontainer\">
                    ";
                // line 76
                if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_promo_description", [], "any", false, false, true, 76))) {
                    // line 77
                    echo "                      <div class=\"m-vedio-banner__subtitle-container\">
                        <p class=\"a-text a-text--reference-brands m-vedio-banner__sub-title\">";
                    // line 78
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_6 = (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_promo_description", [], "any", false, false, true, 78)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["0"] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#text"] ?? null) : null), 78, $this->source)), "html", null, true);
                    echo "</p>
                      </div>
                    ";
                }
                // line 81
                echo "                    ";
                if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_promo_cta", [], "any", false, false, true, 81))) {
                    // line 82
                    echo "                      <div class=\"m-vedio-banner__cta-container\">
                        <a class=\"a-button a-button--second m-vedio-banner__cta\" href=\"";
                    // line 83
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_8 = (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_promo_cta", [], "any", false, false, true, 83)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["0"] ?? null) : null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#url"] ?? null) : null), 83, $this->source), "html", null, true);
                    echo "\">
                          <span class=\"a-button__text\">";
                    // line 84
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_10 = (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_promo_cta", [], "any", false, false, true, 84)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["0"] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["#title"] ?? null) : null), 84, $this->source), "html", null, true);
                    echo "</span>
                      </a>                             
                      </div>
                    ";
                }
                // line 88
                echo "                  </div>
                </div>
              ";
            }
            // line 91
            echo "          </div>
          ";
        }
        // line 92
        echo "          
      ";
    }

    public function getTemplateName()
    {
        return "themes/custom/storytheme/templates/paragraph/paragraph--promo-banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 92,  166 => 91,  161 => 88,  154 => 84,  150 => 83,  147 => 82,  144 => 81,  138 => 78,  135 => 77,  133 => 76,  129 => 74,  126 => 73,  120 => 70,  117 => 69,  114 => 68,  108 => 65,  105 => 64,  103 => 63,  100 => 62,  97 => 61,  91 => 58,  88 => 57,  86 => 56,  83 => 55,  79 => 54,  74 => 94,  72 => 54,  65 => 52,  60 => 96,  57 => 52,  55 => 49,  54 => 48,  53 => 47,  52 => 45,  48 => 43,  44 => 42,  41 => 41,);
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

  {{ attach_library('storytheme/m-vedio-banner') }}
  {{ attach_library('storytheme/a-button') }}
  {%
    set classes = [
      'paragraph',
      'paragraph--type--' ~ paragraph.bundle|clean_class,
      view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
      not paragraph.isPublished() ? 'paragraph--unpublished'
    ]
  %}
  {% block paragraph %} 
  <div class=\"m-vedio-banner\">
      {% block content %}
          
          {% if content.field_promo_vedio|render %}
          <div class=\"m-vedio-banner__vedio-container\">
              {{ content.field_promo_vedio }}
          </div>
          {% endif %}
          {% if content.field_promo_title|render or content.field_promo_heading|render or content.field_promo_description|render or content.field_promo_cta|render %}
          <div class=\"m-vedio-banner__content\">
            {% if content.field_promo_title|render %}
            <div class=\"m-vedio-banner__title-container\">
              <h3 class=\"a-text a-text--website-title m-vedio-banner__title\">{{ content.field_promo_title['0']['#context']['value'] }}</h3>
            </div>
            {% endif %}
            {% if content.field_promo_heading|render %}
            <div class=\"m-vedio-banner__heading-container\">
              <h1 class=\"a-text a-text--header-1 m-vedio-banner__heading\">{{ content.field_promo_heading['0']['#context']['value'] }}</h1>
            </div>
            {% endif %}
            {% if content.field_promo_description|render or content.field_promo_cta|render %}
                <div class=\"m-vedio-banner__text-container\">
                  <div class=\"m-vedio-banner__text-subcontainer\">
                    {% if content.field_promo_description|render %}
                      <div class=\"m-vedio-banner__subtitle-container\">
                        <p class=\"a-text a-text--reference-brands m-vedio-banner__sub-title\">{{ content.field_promo_description['0']['#text']|striptags }}</p>
                      </div>
                    {% endif %}
                    {% if content.field_promo_cta|render %}
                      <div class=\"m-vedio-banner__cta-container\">
                        <a class=\"a-button a-button--second m-vedio-banner__cta\" href=\"{{ content.field_promo_cta['0']['#url'] }}\">
                          <span class=\"a-button__text\">{{ content.field_promo_cta['0']['#title'] }}</span>
                      </a>                             
                      </div>
                    {% endif %}
                  </div>
                </div>
              {% endif %}
          </div>
          {% endif %}          
      {% endblock %}
    </div>
  {% endblock paragraph %}
  
  ", "themes/custom/storytheme/templates/paragraph/paragraph--promo-banner.html.twig", "/app/web/themes/custom/storytheme/templates/paragraph/paragraph--promo-banner.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 45, "block" => 52, "if" => 56);
        static $filters = array("escape" => 42, "clean_class" => 47, "render" => 56, "striptags" => 78);
        static $functions = array("attach_library" => 42);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['escape', 'clean_class', 'render', 'striptags'],
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
