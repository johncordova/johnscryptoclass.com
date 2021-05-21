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

/* themes/yg_glow/templates/page--front.html.twig */
class __TwigTemplate_b0b50e1bd3dae973f5b8cb2f3b8cb8de8bed35199d58186c0d5a1a53a57e02b7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 29, "autoescape" => 31];
        $filters = ["escape" => 3, "render" => 29, "raw" => 32];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'autoescape'],
                ['escape', 'render', 'raw'],
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
        echo "<div id=\"fh5co-wrapper\">
   <div id=\"fh5co-page\">
    ";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "tabs", [])), "html", null, true);
        echo "
      <!-- Header -->
      <div id=\"fh5co-header\">
         <header id=\"fh5co-header-section\">
            <div class=\"container\">
               <div class=\"nav-header\">
                  <a href=\"#\" class=\"js-fh5co-nav-toggle fh5co-nav-toggle\"><i></i></a>
                  ";
        // line 10
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "site_branding", [])), "html", null, true);
        echo "
                  <!-- START #fh5co-menu-wrap -->
                   ";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
        echo "
               </div>
            </div>
         </header>
      </div>
      <!-- Header End -->

      <!-- Content -->
         ";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
      <!-- Content End -->
      
      <!-- Footer --> 
      <footer>
         <div id=\"footer\">
            <div class=\"container\">
               <div class=\"row\">
                  <div class=\"col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0\">
                     <h3>";
        // line 29
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["about_title"] ?? null)))) {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["about_title"] ?? null)), "html", null, true);
        }
        echo "</h3>
                     ";
        // line 30
        if (($context["about_desc"] ?? null)) {
            // line 31
            echo "                       ";
            // line 32
            echo "                         ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["about_desc"] ?? null)));
            echo "
                       ";
            // line 34
            echo "                     ";
        }
        // line 35
        echo "                  </div>
                  <div class=\"col-md-3 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0\">
                     ";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "latest_blog", [])), "html", null, true);
        echo "
                  </div>
                  <div class=\"col-md-3 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0\">
                     ";
        // line 40
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_menu", [])), "html", null, true);
        echo "
                  </div>
                  <div class=\"col-md-2 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0\">
                     <h3>";
        // line 43
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["social_title"] ?? null)))) {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_title"] ?? null)), "html", null, true);
        }
        echo "</h3>
                     <ul class=\"fh5co-social\">
                        ";
        // line 45
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["twitter_url"] ?? null)))) {
            // line 46
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"icon-twitter2\"></i> Twitter</a></li>
                        ";
        }
        // line 48
        echo "                        ";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["facebook_url"] ?? null)))) {
            // line 49
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"icon-facebook2\"></i> Facebook</a></li>
                        ";
        }
        // line 51
        echo "                        ";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["google_plus_url"] ?? null)))) {
            // line 52
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"icon-google-plus2\"></i> Google Plus</a></li>
                        ";
        }
        // line 54
        echo "                        ";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["instagram_url"] ?? null)))) {
            // line 55
            echo "                         <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"icon-instagram2\"></i> Instagram</a></li>
                        ";
        }
        // line 57
        echo "                     </ul>
                  </div>
               </div>
            </div>
            <div class=\"fh5co-copyright text-center\">
               <p><span> &copy; 2018 <i>YG Glow</i> All Rights Reserved. Designed with <i class=\"icon-heart\"></i> by <a href=\"http://freehtml5.co\" target=\"_blank\">FREEHTML5.co</a><br> Theme By<a href=\"https://www.drupaldevelopersstudio.com\" target=\"_blank\"> Drupal Developers Studio</a>, A Division of <a href=\"http://www.youngglobes.com\" target=\"_blank\">Young Globes</a></span></p>
            </div>
         </div>
      </footer>
     <!-- Footer End --> 

   </div>
   <!-- END fh5co-page -->

</div>
<!-- END fh5co-wrapper -->
";
    }

    public function getTemplateName()
    {
        return "themes/yg_glow/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 57,  167 => 55,  164 => 54,  158 => 52,  155 => 51,  149 => 49,  146 => 48,  140 => 46,  138 => 45,  131 => 43,  125 => 40,  119 => 37,  115 => 35,  112 => 34,  107 => 32,  105 => 31,  103 => 30,  97 => 29,  85 => 20,  74 => 12,  69 => 10,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/yg_glow/templates/page--front.html.twig", "/var/www/johnscryptoclass.com/drupal-8.9.15/themes/yg_glow/templates/page--front.html.twig");
    }
}
