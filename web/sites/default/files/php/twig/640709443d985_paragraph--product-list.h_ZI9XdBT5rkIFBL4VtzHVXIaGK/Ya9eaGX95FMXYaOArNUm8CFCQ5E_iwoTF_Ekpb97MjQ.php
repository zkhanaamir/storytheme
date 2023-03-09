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

/* themes/custom/storytheme/templates/paragraph/paragraph--product-list.html.twig */
class __TwigTemplate_02de165d90f2d1a36e06bdca7d6f1bab extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("storytheme/o-products"), "html", null, true);
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
        // line 70
        echo "




















    <div ";
        // line 91
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 91, $this->source), "html", null, true);
        echo ">
        
        <div class=\"o-products__content-container\">
          <ul class=\"o-products__items\">
            ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 96
            echo "              <li class=\"o-products__item\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "          </ul>
        </div>
      </div>
    ";
    }

    // line 50
    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "      <div class=\"o-products m-card-items--grid\">
        ";
        // line 52
        $this->displayBlock('content', $context, $blocks);
        // line 67
        echo "      </div>
      </div>
    ";
    }

    // line 52
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "        <div class=\"o-products__content-container\">
            ";
        // line 54
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_products_title", [], "any", false, false, true, 54))) {
            // line 55
            echo "            <div class=\"o-products__title-container\">
                <h3 class=\"a-text a-text--header-3 o-products__title\">
                    ";
            // line 57
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = (($__internal_compile_1 = (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_products_title", [], "any", false, false, true, 57)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["0"] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#context"] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["value"] ?? null) : null), 57, $this->source), "html", null, true);
            echo "
                </h3>
            </div>
            ";
        }
        // line 61
        echo "
            <ul class=\"o-products__items\">
                ";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_products", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo "
            </ul>
          
        ";
    }

    public function getTemplateName()
    {
        return "themes/custom/storytheme/templates/paragraph/paragraph--product-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 63,  139 => 61,  132 => 57,  128 => 55,  126 => 54,  123 => 53,  119 => 52,  113 => 67,  111 => 52,  108 => 51,  104 => 50,  97 => 98,  88 => 96,  84 => 95,  77 => 91,  54 => 70,  51 => 50,  49 => 47,  48 => 46,  47 => 45,  46 => 43,  41 => 41,);
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
    {{ attach_library('storytheme/o-products') }}
    {%
      set classes = [
        'paragraph',
        'paragraph--type--' ~ paragraph.bundle|clean_class,
        view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
        not paragraph.isPublished() ? 'paragraph--unpublished'
      ]
    %}
    {% block paragraph %}
      <div class=\"o-products m-card-items--grid\">
        {% block content %}
        <div class=\"o-products__content-container\">
            {% if content.field_products_title|render %}
            <div class=\"o-products__title-container\">
                <h3 class=\"a-text a-text--header-3 o-products__title\">
                    {{ content.field_products_title['0']['#context']['value'] }}
                </h3>
            </div>
            {% endif %}

            <ul class=\"o-products__items\">
                {{ content.field_products }}
            </ul>
          
        {% endblock %}
      </div>
      </div>
    {% endblock paragraph %}





















    <div {{ attributes }}>
        
        <div class=\"o-products__content-container\">
          <ul class=\"o-products__items\">
            {% for item in items %}
              <li class=\"o-products__item\">{{ item.content }}</li>
            {% endfor %}
          </ul>
        </div>
      </div>
    ", "themes/custom/storytheme/templates/paragraph/paragraph--product-list.html.twig", "/app/web/themes/custom/storytheme/templates/paragraph/paragraph--product-list.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 43, "block" => 50, "for" => 95, "if" => 54);
        static $filters = array("escape" => 41, "clean_class" => 45, "render" => 54);
        static $functions = array("attach_library" => 41);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'for', 'if'],
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
