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

/* themes/custom/storytheme/templates/paragraph/paragraph--service-center.html.twig */
class __TwigTemplate_f8265433794a9f6d19a7a34ff963bb89 extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("storytheme/m-service-top"), "html", null, true);
        echo "
    ";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("storytheme/o-service-center"), "html", null, true);
        echo " 
    ";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("storytheme/m-services-list"), "html", null, true);
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
        echo "    
      <div class=\"o-service-center\">
        ";
        // line 55
        $this->displayBlock('content', $context, $blocks);
        // line 103
        echo "      </div>
    ";
    }

    // line 55
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "        <div class=\"o-service-center__container\">
            ";
        // line 57
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 57))) {
            // line 58
            echo "            <div class=\"o-service-center__title-container\">
                <h3 class=\"a-text a-text--header-3 o-service-center__title\">";
            // line 59
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
            echo "</h3>
            </div>
            ";
        }
        // line 62
        echo "
            <div class=\"o-service-center__content-container\">
                <div class=\"o-service-center__text-container\">
                    <div class=\"m-service-top\">
                        <div class=\"m-service-top__container\">
                          ";
        // line 67
        if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_promo_title", [], "any", false, false, true, 67)) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_promo_description", [], "any", false, false, true, 67)))) {
            // line 68
            echo "                          <div class=\"m-service-top__left\">
                            ";
            // line 69
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_promo_title", [], "any", false, false, true, 69))) {
                // line 70
                echo "                            <div class=\"m-service-top__title-container\">
                              <h5 class=\"a-text a-text--header-5-bold m-service-top__title\">";
                // line 71
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_promo_title", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
                echo "</h5>
                            </div>
                            ";
            }
            // line 74
            echo "                            ";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_promo_description", [], "any", false, false, true, 74))) {
                // line 75
                echo "                            <div class=\"m-service-top__text-container\">
                              <p class=\"a-text a-text--website-title m-service-top__text\">";
                // line 76
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_promo_description", [], "any", false, false, true, 76)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["0"] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#text"] ?? null) : null), 76, $this->source)), "html", null, true);
                echo "</p>
                            </div>
                            ";
            }
            // line 79
            echo "                          </div>
                          ";
        }
        // line 81
        echo "                          <div class=\"m-service-top__right\">
                            ";
        // line 82
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_icon", [], "any", false, false, true, 82))) {
            // line 83
            echo "                            <div class=\"m-service-top__image-container\">
                              ";
            // line 84
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_icon", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
            echo "
                            </div>
                            ";
        }
        // line 87
        echo "                          </div>
                        </div>
                      </div>
                </div>
                ";
        // line 91
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_sc_faq", [], "any", false, false, true, 91))) {
            // line 92
            echo "                <div class=\"o-service-center__details-container\">
                  <div class=\"m-services-list\">
                    <div class=\"m-services-list__items\">
                        ";
            // line 95
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_sc_faq", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
            echo "
                    </div>
                  </div>
                </div>
                ";
        }
        // line 100
        echo "            </div>
        </div>
        ";
    }

    public function getTemplateName()
    {
        return "themes/custom/storytheme/templates/paragraph/paragraph--service-center.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 100,  162 => 95,  157 => 92,  155 => 91,  149 => 87,  143 => 84,  140 => 83,  138 => 82,  135 => 81,  131 => 79,  125 => 76,  122 => 75,  119 => 74,  113 => 71,  110 => 70,  108 => 69,  105 => 68,  103 => 67,  96 => 62,  90 => 59,  87 => 58,  85 => 57,  82 => 56,  78 => 55,  73 => 103,  71 => 55,  67 => 53,  59 => 52,  57 => 49,  56 => 48,  55 => 47,  54 => 45,  50 => 43,  46 => 42,  41 => 41,);
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
    {{ attach_library('storytheme/m-service-top') }}
    {{ attach_library('storytheme/o-service-center') }} 
    {{ attach_library('storytheme/m-services-list') }}   
    {%
      set classes = [
        'paragraph',
        'paragraph--type--' ~ paragraph.bundle|clean_class,
        view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
        not paragraph.isPublished() ? 'paragraph--unpublished'
      ]
    %}
    {% block paragraph %}
    
      <div class=\"o-service-center\">
        {% block content %}
        <div class=\"o-service-center__container\">
            {% if content.field_title|render %}
            <div class=\"o-service-center__title-container\">
                <h3 class=\"a-text a-text--header-3 o-service-center__title\">{{ content.field_title }}</h3>
            </div>
            {% endif %}

            <div class=\"o-service-center__content-container\">
                <div class=\"o-service-center__text-container\">
                    <div class=\"m-service-top\">
                        <div class=\"m-service-top__container\">
                          {% if content.field_promo_title|render or content.field_promo_description|render %}
                          <div class=\"m-service-top__left\">
                            {% if content.field_promo_title|render %}
                            <div class=\"m-service-top__title-container\">
                              <h5 class=\"a-text a-text--header-5-bold m-service-top__title\">{{ content.field_promo_title }}</h5>
                            </div>
                            {% endif %}
                            {% if content.field_promo_description|render %}
                            <div class=\"m-service-top__text-container\">
                              <p class=\"a-text a-text--website-title m-service-top__text\">{{ content.field_promo_description['0']['#text']|striptags }}</p>
                            </div>
                            {% endif %}
                          </div>
                          {% endif %}
                          <div class=\"m-service-top__right\">
                            {% if content.field_icon|render %}
                            <div class=\"m-service-top__image-container\">
                              {{ content.field_icon }}
                            </div>
                            {% endif %}
                          </div>
                        </div>
                      </div>
                </div>
                {% if content.field_sc_faq|render%}
                <div class=\"o-service-center__details-container\">
                  <div class=\"m-services-list\">
                    <div class=\"m-services-list__items\">
                        {{ content.field_sc_faq }}
                    </div>
                  </div>
                </div>
                {% endif %}
            </div>
        </div>
        {% endblock %}
      </div>
    {% endblock paragraph %}
", "themes/custom/storytheme/templates/paragraph/paragraph--service-center.html.twig", "/app/web/themes/custom/storytheme/templates/paragraph/paragraph--service-center.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 45, "block" => 52, "if" => 57);
        static $filters = array("escape" => 41, "clean_class" => 47, "render" => 57, "striptags" => 76);
        static $functions = array("attach_library" => 41);

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
