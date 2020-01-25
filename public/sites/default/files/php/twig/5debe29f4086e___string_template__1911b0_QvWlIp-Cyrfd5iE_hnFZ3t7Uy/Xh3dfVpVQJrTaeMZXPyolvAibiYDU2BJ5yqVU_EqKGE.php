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

/* __string_template__1911b0ad62c26a997d937e3241b7690112c4ee78bf7e38261a7ed4d2d35cc2cc */
class __TwigTemplate_5716c24841cf9143d8b6f47925331abf484af4525c684e394ca25d8af0874bfe extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
        // line 1
        echo "<script>var orkjernTags = JSON.parse('{\"1\":\"planet drupal\",\"2\":\"drupal 8\",\"3\":\"iot\",\"4\":\"twig\",\"5\":\"javascript\",\"6\":\"varnish\",\"7\":\"front-end performace\",\"8\":\"security\",\"9\":\"apache\",\"10\":\"development\",\"11\":\"drush\",\"12\":\"mysql\",\"13\":\"database dump\",\"14\":\"workflow\",\"15\":\"drupal 7\",\"16\":\"http requests\",\"17\":\"git\",\"18\":\"settings.php\",\"19\":\"performance\",\"20\":\"experiment\",\"21\":\"caching\",\"22\":\"webform\",\"23\":\"module development\",\"24\":\"localhost\",\"25\":\"virtual host\",\"26\":\"fun\",\"27\":\"apps\",\"28\":\"phonegap\",\"29\":\"services\",\"30\":\"debug\",\"31\":\"drupal\",\"32\":\"rewrite\",\"33\":\"enable comments\",\"34\":\"bulk operations\",\"35\":\"multiple nodes\",\"36\":\"field language\",\"37\":\"jquery\",\"38\":\"theming\",\"39\":\"menu\",\"40\":\"block\",\"41\":\"navigation\",\"42\":\"menu block\",\"43\":\"node object\",\"44\":\"module\",\"45\":\"developing\",\"46\":\"drupal camp\",\"47\":\"Oslo\",\"48\":\"conferences\",\"49\":\"composer\",\"50\":\"routing\",\"51\":\"symfony\",\"52\":\"dependencies\",\"53\":\"service container\",\"54\":\"migrate\",\"55\":\"layout builder\",\"56\":\"panels\",\"57\":\"automation\",\"58\":\"violinist\",\"59\":\"driesnote\"}');</script>";
    }

    public function getTemplateName()
    {
        return "__string_template__1911b0ad62c26a997d937e3241b7690112c4ee78bf7e38261a7ed4d2d35cc2cc";
    }

    public function getDebugInfo()
    {
        return array (  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__1911b0ad62c26a997d937e3241b7690112c4ee78bf7e38261a7ed4d2d35cc2cc", "");
    }
}
