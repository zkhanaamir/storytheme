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

/* themes/custom/storytheme/templates/paragraph/paragraph--products.html.twig */
class __TwigTemplate_5c4013588aee4c7f8e272a6b544012ea extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("storytheme/m-product"), "html", null, true);
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
    }

    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "   
        ";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 86
        echo "    ";
    }

    // line 51
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "    
          
            <li class=\"o-products__item\">
                <div class=\"m-product\">
                    ";
        // line 55
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_product_image", [], "any", false, false, true, 55))) {
            // line 56
            echo "                    <div class=\"m-product__img-container\">
                        ";
            // line 57
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_product_image", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
            echo "
                    </div>
                    ";
        }
        // line 60
        echo "                    ";
        if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_product_title", [], "any", false, false, true, 60)) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_product_cta", [], "any", false, false, true, 60)))) {
            // line 61
            echo "                    <div class=\"m-product__content-container\">
                        ";
            // line 62
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_product_title", [], "any", false, false, true, 62))) {
                // line 63
                echo "                        <div class=\"m-product__title-container\">
                            <h3 class=\"a-text a-text--header-3 m-product__title\">
                                ";
                // line 65
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = (($__internal_compile_2 = (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_product_title", [], "any", false, false, true, 65)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["0"] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#context"] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["value"] ?? null) : null), 65, $this->source), " ")) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), 65, $this->source), "html", null, true);
                echo "
                                <span>
                                    ";
                // line 67
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_5 = (($__internal_compile_6 = (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_product_title", [], "any", false, false, true, 67)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["0"] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#context"] ?? null) : null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["value"] ?? null) : null), 67, $this->source), " ")) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[1] ?? null) : null), 67, $this->source), "html", null, true);
                echo "
                                    ";
                // line 68
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_8 = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_9 = (($__internal_compile_10 = (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_product_title", [], "any", false, false, true, 68)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["0"] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["#context"] ?? null) : null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["value"] ?? null) : null), 68, $this->source), " ")) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[2] ?? null) : null), 68, $this->source), "html", null, true);
                echo "
                                </span>
                            </h3>
                        </div>
                        ";
            }
            // line 73
            echo "                        ";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_product_cta", [], "any", false, false, true, 73))) {
                // line 74
                echo "                        <div class=\"m-product__cta-container\">
                            <a href=\"";
                // line 75
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_12 = (($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_product_cta", [], "any", false, false, true, 75)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["0"] ?? null) : null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["#url"] ?? null) : null), 75, $this->source), "html", null, true);
                echo "\" class=\"a-button m-product__cta a-button--icon-after\">
                                <span class=\"a-button__text\">";
                // line 76
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_14 = (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_product_cta", [], "any", false, false, true, 76)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["0"] ?? null) : null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["#title"] ?? null) : null), 76, $this->source), "html", null, true);
                echo "</span>
                                <img src=\"/themes/custom/storytheme/assets/images/svg/chevron-right.svg\" class=\"a-button__icon a-button__icon--end\"></img>
                            </a>
                        </div>
                        ";
            }
            // line 81
            echo "                    </div>
                    ";
        }
        // line 83
        echo "                </div>
            </li>
        ";
    }

    public function getTemplateName()
    {
        return "themes/custom/storytheme/templates/paragraph/paragraph--products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 83,  134 => 81,  126 => 76,  122 => 75,  119 => 74,  116 => 73,  108 => 68,  104 => 67,  99 => 65,  95 => 63,  93 => 62,  90 => 61,  87 => 60,  81 => 57,  78 => 56,  76 => 55,  67 => 51,  63 => 86,  61 => 51,  51 => 50,  49 => 47,  48 => 46,  47 => 45,  46 => 43,  41 => 41,);
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
    {{ attach_library('storytheme/m-product') }}
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
          
            <li class=\"o-products__item\">
                <div class=\"m-product\">
                    {% if content.field_product_image|render %}
                    <div class=\"m-product__img-container\">
                        {{ content.field_product_image }}
                    </div>
                    {% endif %}
                    {% if content.field_product_title|render or content.field_product_cta|render %}
                    <div class=\"m-product__content-container\">
                        {% if content.field_product_title|render %}
                        <div class=\"m-product__title-container\">
                            <h3 class=\"a-text a-text--header-3 m-product__title\">
                                {{ content.field_product_title['0']['#context']['value']| split(' ')[0] }}
                                <span>
                                    {{ content.field_product_title['0']['#context']['value']| split(' ')[1] }}
                                    {{ content.field_product_title['0']['#context']['value']| split(' ')[2] }}
                                </span>
                            </h3>
                        </div>
                        {% endif %}
                        {% if content.field_product_cta|render %}
                        <div class=\"m-product__cta-container\">
                            <a href=\"{{ content.field_product_cta['0']['#url'] }}\" class=\"a-button m-product__cta a-button--icon-after\">
                                <span class=\"a-button__text\">{{ content.field_product_cta['0']['#title'] }}</span>
                                <img src=\"/themes/custom/storytheme/assets/images/svg/chevron-right.svg\" class=\"a-button__icon a-button__icon--end\"></img>
                            </a>
                        </div>
                        {% endif %}
                    </div>
                    {% endif %}
                </div>
            </li>
        {% endblock %}
    {% endblock paragraph %}", "themes/custom/storytheme/templates/paragraph/paragraph--products.html.twig", "/app/web/themes/custom/storytheme/templates/paragraph/paragraph--products.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 43, "block" => 50, "if" => 55);
        static $filters = array("escape" => 41, "clean_class" => 45, "render" => 55, "split" => 65);
        static $functions = array("attach_library" => 41);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['escape', 'clean_class', 'render', 'split'],
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
