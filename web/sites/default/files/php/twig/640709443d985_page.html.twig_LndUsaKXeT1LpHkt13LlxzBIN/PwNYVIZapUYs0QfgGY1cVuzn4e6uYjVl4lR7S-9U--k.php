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

/* themes/custom/storytheme/templates/page.html.twig */
class __TwigTemplate_9288581d162b03154b715b56ffaad2a8 extends Template
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
        // line 48
        echo "    
    ";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("storytheme/o-header"), "html", null, true);
        echo "
    ";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("storytheme/t-page"), "html", null, true);
        echo "
    ";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("storytheme/o-footer"), "html", null, true);
        echo "
    ";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("storytheme/m-footer-menu"), "html", null, true);
        echo "

    <div class=\"t-page\">
      <div class=\"t-page__container\">
        <div class=\"t-page__header\">
          ";
        // line 57
        $this->loadTemplate("themes/custom/storytheme/components/organisms/header/o-header.html.twig", "themes/custom/storytheme/templates/page.html.twig", 57)->display(twig_array_merge($context, ["attributes" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(), "addClass", [0 => "o-header"], "method", false, false, true, 58), "setAttribute", [0 => "role", 1 => "banner"], "method", false, false, true, 58)]));
        // line 60
        echo "        </div>
        <div class=\"t-page__below-header\">
          <main id=\"main-content\" class=\"t-page__content\" role=\"main\">
            ";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo "
          </main>
          <div class=\"t-page__footer\">
            ";
        // line 66
        $this->loadTemplate("themes/custom/storytheme/components/organisms/footer/o-footer.html.twig", "themes/custom/storytheme/templates/page.html.twig", 66)->display(twig_array_merge($context, ["attributes" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(), "addClass", [0 => "o-footer"], "method", false, false, true, 67), "setAttribute", [0 => "role", 1 => "contentinfo"], "method", false, false, true, 67)]));
        // line 69
        echo "          </div>
        </div>
      </div>
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/storytheme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 69,  75 => 66,  69 => 63,  64 => 60,  62 => 57,  54 => 52,  50 => 51,  46 => 50,  42 => 49,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    /**
     * @file
     * Default theme implementation to display a single page.
     *
     * The doctype, html, head and body tags are not in this template. Instead they
     * can be found in the html.html.twig template in this directory.
     *
     * Available variables:
     *
     * General utility variables:
     * - base_path: The base URL path of the Drupal installation. Will usually be
     *   \"/\" unless you have installed Drupal in a sub-directory.
     * - is_front: A flag indicating if the current page is the front page.
     * - logged_in: A flag indicating if the user is registered and signed in.
     * - is_admin: A flag indicating if the user has permission to access
     *   administration pages.
     *
     * Site identity:
     * - front_page: The URL of the front page. Use this instead of base_path when
     *   linking to the front page. This includes the language domain or prefix.
     *
     * Page content (in order of occurrence in the default page.html.twig):
     * - messages: Status and error messages. Should be displayed prominently.
     * - node: Fully loaded node, if there is an automatically-loaded node
     *   associated with the page and the node ID is the second argument in the
     *   page's path (e.g. node/12345 and node/12345/revisions, but not
     *   comment/reply/12345).
     *
     * Regions:
     * - page.header: Items for the header region.
     * - page.primary_menu: Items for the primary menu region.
     * - page.secondary_menu: Items for the secondary menu region.
     * - page.highlighted: Items for the highlighted content region.
     * - page.help: Dynamic help text, mostly for admin pages.
     * - page.content: The main content of the current page.
     * - page.sidebar_first: Items for the first sidebar.
     * - page.sidebar_second: Items for the second sidebar.
     * - page.footer: Items for the footer region.
     * - page.breadcrumb: Items for the breadcrumb region.
     *
     * @see template_preprocess_page()
     * @see html.html.twig
     *
     * @ingroup themeable
     */
    #}
    
    {{ attach_library('storytheme/o-header') }}
    {{ attach_library('storytheme/t-page') }}
    {{ attach_library('storytheme/o-footer') }}
    {{ attach_library('storytheme/m-footer-menu') }}

    <div class=\"t-page\">
      <div class=\"t-page__container\">
        <div class=\"t-page__header\">
          {% include 'themes/custom/storytheme/components/organisms/header/o-header.html.twig' with {
            attributes: create_attribute().addClass('o-header').setAttribute('role', 'banner'),
          }%}
        </div>
        <div class=\"t-page__below-header\">
          <main id=\"main-content\" class=\"t-page__content\" role=\"main\">
            {{ page.content }}
          </main>
          <div class=\"t-page__footer\">
            {% include 'themes/custom/storytheme/components/organisms/footer/o-footer.html.twig' with {
              attributes: create_attribute().addClass('o-footer').setAttribute('role', 'contentinfo'),
            } %}
          </div>
        </div>
      </div>
    </div>
    ", "themes/custom/storytheme/templates/page.html.twig", "/app/web/themes/custom/storytheme/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 57);
        static $filters = array("escape" => 49);
        static $functions = array("attach_library" => 49, "create_attribute" => 58);

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['escape'],
                ['attach_library', 'create_attribute']
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
