<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/orkjern_theme/templates/page.html.twig */
class __TwigTemplate_e826c75065475e900e1dea69d7655cc2919ef84ac8326ebe70846ccbb1d9cb03 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 10];
        $filters = ["escape" => 12, "t" => 17];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 6
        echo "
<div id=\"page-wrapper\">

  <header id=\"header\">
   ";
        // line 10
        if (($context["secondary_menu"] ?? null)) {
            // line 11
            echo "      <nav id=\"secondary-menu\" class=\"navigation\" role=\"navigation\"  aria-labelledby=\"links__system_secondary_menu\">
        ";
            // line 12
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondary_menu"] ?? null)), "html", null, true);
            echo "
      </nav> <!-- /#secondary-menu -->
    ";
        }
        // line 15
        echo "
    <div class=\"logo-wrapper\">
       <a href=\"";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
        echo "\" title=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
        echo "\" rel=\"home\" id=\"logo\">
          <div class=\"svg-wrapper\">
             <svg version=\"1.1\" id=\"cloudLightningFill\" class=\"climacon climacon_cloudLightningFill\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"15 15 70 70\" enable-background=\"new 15 15 70 70\" xml:space=\"preserve\">
                <g class=\"climacon_iconWrap climacon_iconWrap-cloudLightningFill\">
                    <g class=\"climacon_componentWrap climacon_componentWrap_cloud\">
                        <path class=\"climacon_component climacon_component-fill climacon_component-fill_cloud\" fill=\"#FFFFFF\" d=\"M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z\"></path>
                    </g>
                    <g class=\"climacon_wrapperComponent climacon_wrapperComponent-lightning\">
                        <polygon fill=\"yellow\" class=\"climacon_component climacon_component-stroke climacon_component-stroke_lightning\" points=\"48.001,56.641 57.999,56.641 52,66.641 58.999,66.641 46.001,83.639 49.601,70.641 43.001,70.641 \"></polygon>
                    </g>
                </g>
            </svg>
          </div>
       </a>
       <div class=\"letters\">";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "title", [])), "html", null, true);
        echo "</div>
    </div>

    ";
        // line 34
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "

  </header> <!-- /#header-->

  ";
        // line 38
        if (($context["messages"] ?? null)) {
            // line 39
            echo "    <div id=\"messages\">
      ";
            // line 40
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null)), "html", null, true);
            echo "
    </div> <!-- /#messages -->
  ";
        }
        // line 43
        echo "
  <div id=\"main-wrapper\" class=\"clearfix\">
    <span data-property=\"is-server-rendered\"></span>

    <main id=\"content\" class=\"column\" role=\"main\"><section class=\"section\">
      <a id=\"main-content\" tabindex=\"-1\"></a>
      ";
        // line 49
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
        ";
        // line 50
        if ((($context["title"] ?? null) &&  !($context["node"] ?? null))) {
            // line 51
            echo "          <h1 class=\"title\" id=\"page-title\">
            ";
            // line 52
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "
          </h1>
        ";
        }
        // line 55
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
      ";
        // line 56
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
    </section></main> <!-- /.section, /#content -->

  </div><!-- /#main-wrapper -->

  <footer class=\"section\">

    ";
        // line 63
        if (((($this->getAttribute(($context["page"] ?? null), "footer_firstcolumn", []) || $this->getAttribute(($context["page"] ?? null), "footer_secondcolumn", [])) || $this->getAttribute(($context["page"] ?? null), "footer_thirdcolumn", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fourthcolumn", []))) {
            // line 64
            echo "      <div id=\"footer-columns\" class=\"clearfix\">
        ";
            // line 65
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_firstcolumn", [])), "html", null, true);
            echo "
        ";
            // line 66
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_secondcolumn", [])), "html", null, true);
            echo "
        ";
            // line 67
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_thirdcolumn", [])), "html", null, true);
            echo "
        ";
            // line 68
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fourthcolumn", [])), "html", null, true);
            echo "
      </div><!-- /#footer-columns -->
    ";
        }
        // line 71
        echo "
    ";
        // line 72
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 73
            echo "      <div id=\"footer\" role=\"contentinfo\" class=\"clearfix\">
        ";
            // line 74
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
      </div> <!-- /#footer -->
   ";
        }
        // line 77
        echo "
  </footer> <!-- /.section -->

</div> <!-- /#page-wrapper -->
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/orkjern_theme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 77,  188 => 74,  185 => 73,  183 => 72,  180 => 71,  174 => 68,  170 => 67,  166 => 66,  162 => 65,  159 => 64,  157 => 63,  147 => 56,  142 => 55,  136 => 52,  133 => 51,  131 => 50,  127 => 49,  119 => 43,  113 => 40,  110 => 39,  108 => 38,  101 => 34,  95 => 31,  76 => 17,  72 => 15,  66 => 12,  63 => 11,  61 => 10,  55 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/orkjern_theme/templates/page.html.twig", "/var/www/orkjern.com/web/themes/contrib/orkjern_theme/templates/page.html.twig");
    }
}
