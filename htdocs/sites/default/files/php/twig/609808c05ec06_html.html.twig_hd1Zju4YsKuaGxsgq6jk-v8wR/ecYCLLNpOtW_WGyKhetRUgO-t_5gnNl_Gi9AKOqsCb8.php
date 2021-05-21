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

/* themes/yg_glow/templates/html.html.twig */
class __TwigTemplate_af41369951951dcdf9f5b8f6c3cebce65df23673977c65f5c47f0f8e563e6aa2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 29, "if" => 46];
        $filters = ["clean_class" => 31, "escape" => 37, "raw" => 40, "safe_join" => 41, "t" => 57];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'raw', 'safe_join', 't'],
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
        // line 28
        echo "  ";
        // line 29
        $context["body_classes"] = [0 => ((        // line 30
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 31
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null)))))), 2 => (($this->getAttribute(        // line 32
($context["path_info"] ?? null), "args", [])) ? (("path-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["path_info"] ?? null), "args", [])))) : ("")), 3 => ((        // line 33
($context["db_offline"] ?? null)) ? ("db-offline") : (""))];
        // line 36
        echo "<!DOCTYPE html>
<html";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null)), "html", null, true);
        echo ">
  <head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1\">
    <head-placeholder token=\"";
        // line 40
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
    <title>";
        // line 41
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null)), " | "));
        echo "</title>
    <css-placeholder token=\"";
        // line 42
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
    <js-placeholder token=\"";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
  </head>
  <body ";
        // line 45
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method")), "html", null, true);
        echo ">
    ";
        // line 46
        if ( !twig_test_empty(($context["preloader"] ?? null))) {
            // line 47
            echo "    <!-- Preloader -->
  <div class=\"preloader\">
    <div class=\"clear-loading loading-effect-2\">
      <span></span>
    </div>
        <div class=\"preloader-toppart\"></div>
        <div class=\"preloader-bottompart\"></div>
  </div>
  ";
        }
        // line 56
        echo "    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 59
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null)), "html", null, true);
        echo "
    ";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null)), "html", null, true);
        echo "
    ";
        // line 61
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null)), "html", null, true);
        echo "
    <js-bottom-placeholder token=\"";
        // line 62
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
  ";
        // line 63
        if (($context["goto"] ?? null)) {
            // line 64
            echo "  ";
        }
        // line 65
        echo "  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "themes/yg_glow/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 65,  132 => 64,  130 => 63,  126 => 62,  122 => 61,  118 => 60,  114 => 59,  109 => 57,  106 => 56,  95 => 47,  93 => 46,  89 => 45,  84 => 43,  80 => 42,  76 => 41,  72 => 40,  66 => 37,  63 => 36,  61 => 33,  60 => 32,  59 => 31,  58 => 30,  57 => 29,  55 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/yg_glow/templates/html.html.twig", "/var/www/johnscryptoclass.com/drupal-8.9.15/themes/yg_glow/templates/html.html.twig");
    }
}
