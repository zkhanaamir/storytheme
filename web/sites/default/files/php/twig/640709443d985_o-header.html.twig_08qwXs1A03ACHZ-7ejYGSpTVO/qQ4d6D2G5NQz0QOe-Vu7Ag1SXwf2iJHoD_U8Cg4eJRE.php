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

/* themes/custom/storytheme/components/organisms/header/o-header.html.twig */
class __TwigTemplate_f91bcabeb9f862688c77fb3ed26f7603 extends Template
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
        // line 1
        echo "<header ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 1, $this->source), "html", null, true);
        echo ">
  <div class=\"o-header__content\">
    ";
        // line 3
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "headerLogo", [], "any", false, false, true, 3))) {
            // line 4
            echo "      <div class=\"o-header__start\">
        ";
            // line 5
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "headerLogo", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 8
        echo "    <div class=\"o-header__end\">
      <div class=\"o-header__static\">
        ";
        // line 10
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "headerNavigation", [], "any", false, false, true, 10))) {
            // line 11
            echo "          <div class=\"o-header__dropdown-controls\">
            <button class=\"o-header__iconic-button o-header__iconic-button--show\" type=\"button\" aria-expanded=\"false\" aria-label=\"";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Expand main navigation"));
            echo "\">
              <svg class=\"o-header__icon o-header__icon--menu\" aria-hidden=\"true\">
                <use xlink:href=\"";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["storythemeSvgSpritePath"] ?? null), 14, $this->source), "html", null, true);
            echo "#svg-menu\"></use>
              </svg>
            </button>
            <button class=\"o-header__iconic-button o-header__iconic-button--hide\" type=\"button\" aria-expanded=\"true\" aria-label=\"";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Collapse main navigation"));
            echo "\">
              <svg class=\"o-header__icon o-header__icon--close\" aria-hidden=\"true\">
                <use xlink:href=\"";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["storythemeSvgSpritePath"] ?? null), 19, $this->source), "html", null, true);
            echo "#svg-close\"></use>
              </svg>
            </button>
          </div>
        ";
        }
        // line 24
        echo "      </div>
      ";
        // line 25
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "headerNavigation", [], "any", false, false, true, 25))) {
            // line 26
            echo "        <div class=\"o-header__dropdown\">
          ";
            // line 27
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "headerNavigation", [], "any", false, false, true, 27))) {
                // line 28
                echo "            <div class=\"o-header__navigation\">
              ";
                // line 29
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "headerNavigation", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 32
            echo "        </div>
      ";
        }
        // line 34
        echo "    </div>
  </div>
</header>
<div class=\"o-header-shadow\"></div>
<div class=\"o-header-overlay\"></div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/storytheme/components/organisms/header/o-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 34,  108 => 32,  102 => 29,  99 => 28,  97 => 27,  94 => 26,  92 => 25,  89 => 24,  81 => 19,  76 => 17,  70 => 14,  65 => 12,  62 => 11,  60 => 10,  56 => 8,  50 => 5,  47 => 4,  45 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header {{ attributes }}>
  <div class=\"o-header__content\">
    {% if page.headerLogo|render %}
      <div class=\"o-header__start\">
        {{ page.headerLogo }}
      </div>
    {% endif %}
    <div class=\"o-header__end\">
      <div class=\"o-header__static\">
        {% if page.headerNavigation|render %}
          <div class=\"o-header__dropdown-controls\">
            <button class=\"o-header__iconic-button o-header__iconic-button--show\" type=\"button\" aria-expanded=\"false\" aria-label=\"{{ 'Expand main navigation'|t }}\">
              <svg class=\"o-header__icon o-header__icon--menu\" aria-hidden=\"true\">
                <use xlink:href=\"{{ storythemeSvgSpritePath }}#svg-menu\"></use>
              </svg>
            </button>
            <button class=\"o-header__iconic-button o-header__iconic-button--hide\" type=\"button\" aria-expanded=\"true\" aria-label=\"{{ 'Collapse main navigation'|t }}\">
              <svg class=\"o-header__icon o-header__icon--close\" aria-hidden=\"true\">
                <use xlink:href=\"{{ storythemeSvgSpritePath }}#svg-close\"></use>
              </svg>
            </button>
          </div>
        {% endif %}
      </div>
      {% if page.headerNavigation|render %}
        <div class=\"o-header__dropdown\">
          {% if page.headerNavigation|render %}
            <div class=\"o-header__navigation\">
              {{ page.headerNavigation }}
            </div>
          {% endif %}
        </div>
      {% endif %}
    </div>
  </div>
</header>
<div class=\"o-header-shadow\"></div>
<div class=\"o-header-overlay\"></div>", "themes/custom/storytheme/components/organisms/header/o-header.html.twig", "/app/web/themes/custom/storytheme/components/organisms/header/o-header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3);
        static $filters = array("escape" => 1, "render" => 3, "t" => 12);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'render', 't'],
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
