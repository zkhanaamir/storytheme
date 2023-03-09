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

/* themes/custom/storytheme/components/organisms/footer/o-footer.html.twig */
class __TwigTemplate_a1588447f106ce5b1a1b6cfdbc906ec8 extends Template
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
        echo "<footer ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 1, $this->source), "html", null, true);
        echo ">
\t<div class=\"o-footer__content\">

    ";
        // line 4
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerSocialLinks", [], "any", false, false, true, 4))) {
            // line 5
            echo "      <div class=\"o-footer__social-links\">
        ";
            // line 6
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerSocialLinks", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 9
        echo "    ";
        if ((((($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerBrand", [], "any", false, false, true, 9)) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerMenuFirst", [], "any", false, false, true, 9))) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerMenuSecond", [], "any", false, false, true, 9))) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerMenuThird", [], "any", false, false, true, 9))) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerMenuFourth", [], "any", false, false, true, 9)))) {
            // line 10
            echo "\t\t\t";
            $context["menusAmount"] = 0;
            // line 11
            echo "\t\t\t";
            $context["readableMenusAmount"] = "no-menus";
            // line 12
            echo "\t\t\t";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerMenuFirst", [], "any", false, false, true, 12))) {
                // line 13
                echo "\t\t\t\t";
                $context["menusAmount"] = (($context["menusAmount"] ?? null) + 1);
                // line 14
                echo "\t\t\t";
            }
            // line 15
            echo "\t\t\t";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerMenuSecond", [], "any", false, false, true, 15))) {
                // line 16
                echo "\t\t\t\t";
                $context["menusAmount"] = (($context["menusAmount"] ?? null) + 1);
                // line 17
                echo "\t\t\t";
            }
            // line 18
            echo "\t\t\t";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerMenuThird", [], "any", false, false, true, 18))) {
                // line 19
                echo "\t\t\t\t";
                $context["menusAmount"] = (($context["menusAmount"] ?? null) + 1);
                // line 20
                echo "\t\t\t";
            }
            // line 21
            echo "\t\t\t";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerMenuFourth", [], "any", false, false, true, 21))) {
                // line 22
                echo "\t\t\t\t";
                $context["menusAmount"] = (($context["menusAmount"] ?? null) + 1);
                // line 23
                echo "\t\t\t";
            }
            // line 24
            echo "\t\t\t";
            if ((($context["menusAmount"] ?? null) == 1)) {
                // line 25
                echo "\t\t\t\t";
                $context["readableMenusAmount"] = "one-menu";
                // line 26
                echo "\t\t\t";
            }
            // line 27
            echo "\t\t\t";
            if ((($context["menusAmount"] ?? null) == 2)) {
                // line 28
                echo "\t\t\t\t";
                $context["readableMenusAmount"] = "two-menus";
                // line 29
                echo "\t\t\t";
            }
            // line 30
            echo "\t\t\t";
            if ((($context["menusAmount"] ?? null) == 3)) {
                // line 31
                echo "\t\t\t\t";
                $context["readableMenusAmount"] = "three-menus";
                // line 32
                echo "\t\t\t";
            }
            // line 33
            echo "\t\t\t";
            if ((($context["menusAmount"] ?? null) == 4)) {
                // line 34
                echo "\t\t\t\t";
                $context["readableMenusAmount"] = "four-menus";
                // line 35
                echo "\t\t\t";
            }
            // line 36
            echo "\t\t\t<div class=\"o-footer__first o-footer__first--";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["readableMenusAmount"] ?? null), 36, $this->source), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 37
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerBrand", [], "any", false, false, true, 37))) {
                // line 38
                echo "\t\t\t\t  <div class=\"o-footer__first-start\">
\t\t\t\t\t  ";
                // line 39
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerBrand", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                echo "
\t\t\t\t  </div>
\t\t\t\t";
            }
            // line 42
            echo "\t\t\t\t";
            if (((($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerMenuFirst", [], "any", false, false, true, 42)) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerMenuSecond", [], "any", false, false, true, 42))) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerMenuThird", [], "any", false, false, true, 42))) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerMenuFourth", [], "any", false, false, true, 42)))) {
                // line 43
                echo "\t\t\t\t\t<div class=\"o-footer__first-end o-footer__first-end--";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["readableMenusAmount"] ?? null), 43, $this->source), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
                // line 44
                if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerMenuFirst", [], "any", false, false, true, 44))) {
                    // line 45
                    echo "\t\t\t\t\t\t\t<div class=\"o-footer__menu\">
\t\t\t\t\t\t\t\t";
                    // line 46
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerMenuFirst", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                    echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 49
                echo "\t\t\t\t\t\t";
                if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerMenuSecond", [], "any", false, false, true, 49))) {
                    // line 50
                    echo "\t\t\t\t\t\t\t<div class=\"o-footer__menu\">
\t\t\t\t\t\t\t\t";
                    // line 51
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerMenuSecond", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
                    echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 54
                echo "\t\t\t\t\t\t";
                if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerMenuThird", [], "any", false, false, true, 54))) {
                    // line 55
                    echo "\t\t\t\t\t\t\t<div class=\"o-footer__menu\">
\t\t\t\t\t\t\t\t";
                    // line 56
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerMenuThird", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                    echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 59
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 61
            echo "\t\t\t</div>
\t\t";
        }
        // line 63
        echo "
    <div class=\"o-footer__second\">
      ";
        // line 65
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerCopyright", [], "any", false, false, true, 65))) {
            // line 66
            echo "      <div class=\"o-footer__second-start\">
        ";
            // line 67
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerCopyright", [], "any", false, false, true, 67)) {
                // line 68
                echo "          <div class=\"o-footer__copyright\">
            ";
                // line 69
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerCopyright", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 72
            echo "      </div>
      ";
        }
        // line 74
        echo "    </div>
  </div>
  </footer>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/storytheme/components/organisms/footer/o-footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 74,  225 => 72,  219 => 69,  216 => 68,  214 => 67,  211 => 66,  209 => 65,  205 => 63,  201 => 61,  197 => 59,  191 => 56,  188 => 55,  185 => 54,  179 => 51,  176 => 50,  173 => 49,  167 => 46,  164 => 45,  162 => 44,  157 => 43,  154 => 42,  148 => 39,  145 => 38,  143 => 37,  138 => 36,  135 => 35,  132 => 34,  129 => 33,  126 => 32,  123 => 31,  120 => 30,  117 => 29,  114 => 28,  111 => 27,  108 => 26,  105 => 25,  102 => 24,  99 => 23,  96 => 22,  93 => 21,  90 => 20,  87 => 19,  84 => 18,  81 => 17,  78 => 16,  75 => 15,  72 => 14,  69 => 13,  66 => 12,  63 => 11,  60 => 10,  57 => 9,  51 => 6,  48 => 5,  46 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer {{ attributes }}>
\t<div class=\"o-footer__content\">

    {% if page.footerSocialLinks|render %}
      <div class=\"o-footer__social-links\">
        {{ page.footerSocialLinks }}
      </div>
    {% endif %}
    {% if page.footerBrand|render or page.footerMenuFirst|render or page.footerMenuSecond|render or page.footerMenuThird|render or page.footerMenuFourth|render %}
\t\t\t{% set menusAmount = 0 %}
\t\t\t{% set readableMenusAmount = 'no-menus' %}
\t\t\t{% if page.footerMenuFirst|render %}
\t\t\t\t{% set menusAmount = menusAmount + 1 %}
\t\t\t{% endif %}
\t\t\t{% if page.footerMenuSecond|render %}
\t\t\t\t{% set menusAmount = menusAmount + 1 %}
\t\t\t{% endif %}
\t\t\t{% if page.footerMenuThird|render %}
\t\t\t\t{% set menusAmount = menusAmount + 1 %}
\t\t\t{% endif %}
\t\t\t{% if page.footerMenuFourth|render %}
\t\t\t\t{% set menusAmount = menusAmount + 1 %}
\t\t\t{% endif %}
\t\t\t{% if menusAmount == 1 %}
\t\t\t\t{% set readableMenusAmount = 'one-menu' %}
\t\t\t{% endif %}
\t\t\t{% if menusAmount == 2 %}
\t\t\t\t{% set readableMenusAmount = 'two-menus' %}
\t\t\t{% endif %}
\t\t\t{% if menusAmount == 3 %}
\t\t\t\t{% set readableMenusAmount = 'three-menus' %}
\t\t\t{% endif %}
\t\t\t{% if menusAmount == 4 %}
\t\t\t\t{% set readableMenusAmount = 'four-menus' %}
\t\t\t{% endif %}
\t\t\t<div class=\"o-footer__first o-footer__first--{{ readableMenusAmount }}\">
\t\t\t\t{% if page.footerBrand|render %}
\t\t\t\t  <div class=\"o-footer__first-start\">
\t\t\t\t\t  {{ page.footerBrand }}
\t\t\t\t  </div>
\t\t\t\t{% endif %}
\t\t\t\t{% if page.footerMenuFirst|render or page.footerMenuSecond|render or page.footerMenuThird|render or page.footerMenuFourth|render %}
\t\t\t\t\t<div class=\"o-footer__first-end o-footer__first-end--{{ readableMenusAmount }}\">
\t\t\t\t\t\t{% if page.footerMenuFirst|render %}
\t\t\t\t\t\t\t<div class=\"o-footer__menu\">
\t\t\t\t\t\t\t\t{{ page.footerMenuFirst }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if page.footerMenuSecond|render %}
\t\t\t\t\t\t\t<div class=\"o-footer__menu\">
\t\t\t\t\t\t\t\t{{ page.footerMenuSecond }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if page.footerMenuThird|render %}
\t\t\t\t\t\t\t<div class=\"o-footer__menu\">
\t\t\t\t\t\t\t\t{{ page.footerMenuThird }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t{% endif %}

    <div class=\"o-footer__second\">
      {% if page.footerCopyright|render %}
      <div class=\"o-footer__second-start\">
        {% if page.footerCopyright %}
          <div class=\"o-footer__copyright\">
            {{ page.footerCopyright }}
          </div>
        {% endif %}
      </div>
      {% endif %}
    </div>
  </div>
  </footer>
", "themes/custom/storytheme/components/organisms/footer/o-footer.html.twig", "/app/web/themes/custom/storytheme/components/organisms/footer/o-footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4, "set" => 10);
        static $filters = array("escape" => 1, "render" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'render'],
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
