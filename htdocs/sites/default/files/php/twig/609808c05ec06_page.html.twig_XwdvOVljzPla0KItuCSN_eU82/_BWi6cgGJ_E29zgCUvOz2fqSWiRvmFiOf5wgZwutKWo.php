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

/* themes/startupgrowth_lite/templates/page.html.twig */
class __TwigTemplate_67082c7fb889910ea22e750e1c06dceebcac55d2648785f9b5a50d9c1615aa48 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 73];
        $filters = ["escape" => 80];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
        // line 69
        echo "
";
        // line 71
        echo "<div id=\"page-container\" class=\"page-container\">

  ";
        // line 73
        if (((((($context["header_top"] ?? null) || $this->getAttribute(($context["page"] ?? null), "header_first", [])) || $this->getAttribute(($context["page"] ?? null), "header", [])) || $this->getAttribute(($context["page"] ?? null), "search_area", [])) || $this->getAttribute(($context["page"] ?? null), "navigation", []))) {
            // line 74
            echo "    ";
            // line 75
            echo "    <div id=\"header-container\" class=\"header-container white-region\">

      ";
            // line 77
            if ($this->getAttribute(($context["page"] ?? null), "header_top", [])) {
                // line 78
                echo "        ";
                // line 79
                echo "        <div id=\"header-top\" class=\"clearfix header-top\">
          <div class=\"";
                // line 80
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container"] ?? null)), "html", null, true);
                echo "\">
            ";
                // line 82
                echo "            <div id=\"header-top-inside\" class=\"clearfix header-top-inside\">
              <div class=\"row\">
                <div class=\"col-md-12\">
                  <div class=\"header-top-area\">
                    ";
                // line 86
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top", [])), "html", null, true);
                echo "
                  </div>
                </div>
              </div>
            </div>
            ";
                // line 92
                echo "          </div>
        </div>
        ";
                // line 95
                echo "      ";
            }
            // line 96
            echo "
      ";
            // line 97
            if (((($this->getAttribute(($context["page"] ?? null), "header_first", []) || $this->getAttribute(($context["page"] ?? null), "header", [])) || $this->getAttribute(($context["page"] ?? null), "search_area", [])) || $this->getAttribute(($context["page"] ?? null), "navigation", []))) {
                // line 98
                echo "        ";
                // line 99
                echo "        <header id=\"header\" role=\"banner\" class=\"clearfix header ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container_class"] ?? null)), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_columns_class"] ?? null)), "html", null, true);
                echo "\">
          <div class=\"";
                // line 100
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container"] ?? null)), "html", null, true);
                echo "\">
            ";
                // line 102
                echo "            <div id=\"header-inside\" class=\"clearfix header-inside\">
              <div class=\"row\">
                ";
                // line 104
                if ($this->getAttribute(($context["page"] ?? null), "header_first", [])) {
                    // line 105
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_first_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    <div class=\"header-area\">
                      ";
                    // line 108
                    echo "                      <div id=\"header-inside-first\" class=\"clearfix header-inside-first\">
                        ";
                    // line 109
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_first", [])), "html", null, true);
                    echo "
                      </div>
                      ";
                    // line 112
                    echo "                    </div>
                  </div>
                ";
                }
                // line 115
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
                    // line 116
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_second_grid_class"] ?? null)), "html", null, true);
                    echo " ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_second_offset_class"] ?? null)), "html", null, true);
                    echo "\">
                    <div class=\"header-area\">
                      ";
                    // line 119
                    echo "                      <div id=\"header-inside-second\" class=\"clearfix header-inside-second\">
                        ";
                    // line 120
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
                    echo "
                      </div>
                      ";
                    // line 123
                    echo "                    </div>
                  </div>
                ";
                }
                // line 126
                echo "                ";
                if (($this->getAttribute(($context["page"] ?? null), "search_area", []) || $this->getAttribute(($context["page"] ?? null), "navigation", []))) {
                    // line 127
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_third_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    <div class=\"header-area\">
                      ";
                    // line 130
                    echo "                      <div id=\"header-inside-third\" class=\"clearfix header-inside-third\">
                        ";
                    // line 131
                    if ($this->getAttribute(($context["page"] ?? null), "search_area", [])) {
                        // line 132
                        echo "                          <div id=\"search-area\" class=\"clearfix search-area\">
                            ";
                        // line 133
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search_area", [])), "html", null, true);
                        echo "
                          </div>
                        ";
                    }
                    // line 136
                    echo "                        ";
                    if ($this->getAttribute(($context["page"] ?? null), "navigation", [])) {
                        // line 137
                        echo "                          ";
                        // line 138
                        echo "                          <div id=\"main-navigation\" class=\"clearfix main-navigation ";
                        if ($this->getAttribute(($context["page"] ?? null), "search_area", [])) {
                            echo " with-search-bar ";
                        }
                        echo "\">
                            <nav role=\"navigation\">
                              ";
                        // line 140
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
                        echo "
                            </nav>
                          </div>
                          ";
                        // line 144
                        echo "                        ";
                    }
                    // line 145
                    echo "                      </div>
                      ";
                    // line 147
                    echo "                    </div>
                  </div>
                ";
                }
                // line 150
                echo "              </div>
            </div>
            ";
                // line 153
                echo "          </div>
        </header>
        ";
                // line 156
                echo "      ";
            }
            // line 157
            echo "
    </div>
    ";
            // line 160
            echo "  ";
        }
        // line 161
        echo "
  ";
        // line 162
        if ($this->getAttribute(($context["page"] ?? null), "banner", [])) {
            // line 163
            echo "    ";
            // line 164
            echo "    <div id=\"banner\" class=\"clearfix banner\">
      <div class=\"container-fluid\">

        ";
            // line 168
            echo "        <div id=\"banner-inside\" class=\"clearfix banner-inside\">
          <div class=\"banner-area\">
              <div class=\"row\">
                <div class=\"col-md-12\">
                  ";
            // line 172
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "banner", [])), "html", null, true);
            echo "
                </div>
              </div>
          </div>
        </div>
        ";
            // line 178
            echo "
      </div>
    </div>
    ";
            // line 182
            echo "  ";
        }
        // line 183
        echo "
  ";
        // line 185
        echo "  <div id=\"page-start\" class=\"clearfix\"></div>

  ";
        // line 188
        echo "  <div id=\"page\" class=\"clearfix page\">

    ";
        // line 190
        if ($this->getAttribute(($context["page"] ?? null), "system_messages", [])) {
            // line 191
            echo "      <div class=\"system-messages\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
            // line 195
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "system_messages", [])), "html", null, true);
            echo "
            </div>
          </div>
        </div>
      </div>
    ";
        }
        // line 201
        echo "
    ";
        // line 202
        if ($this->getAttribute(($context["page"] ?? null), "content_top", [])) {
            // line 203
            echo "      ";
            // line 204
            echo "      <div id=\"content-top\" class=\"clearfix content-top ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_background_color"] ?? null)), "html", null, true);
            echo "\">
        <div class=\"";
            // line 205
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_layout_container"] ?? null)), "html", null, true);
            echo "\">
          ";
            // line 207
            echo "          <div id=\"content-top-inside\" class=\"clearfix content-top-inside";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_top_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
            ";
            // line 208
            if ((($context["content_top_animations"] ?? null) == "enabled")) {
                // line 209
                echo "              data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_animation_effect"] ?? null)), "html", null, true);
                echo "\"
            ";
            }
            // line 210
            echo ">
            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"content-top-area\">
                  ";
            // line 214
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top", [])), "html", null, true);
            echo "
                </div>
              </div>
            </div>
          </div>
          ";
            // line 220
            echo "        </div>
      </div>
      ";
            // line 223
            echo "    ";
        }
        // line 224
        echo "
    ";
        // line 225
        if ($this->getAttribute(($context["page"] ?? null), "content_top_highlighted", [])) {
            // line 226
            echo "      ";
            // line 227
            echo "      <div id=\"content-top-highlighted\" class=\"clearfix content-top-highlighted ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_background_color"] ?? null)), "html", null, true);
            echo "\">
        <div class=\"";
            // line 228
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_layout_container"] ?? null)), "html", null, true);
            echo "\">
          ";
            // line 230
            echo "          <div id=\"content-top-highlighted-inside\" class=\"clearfix content-top-highlighted-inside";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_top_highlighted_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
            ";
            // line 231
            if ((($context["content_top_highlighted_animations"] ?? null) == "enabled")) {
                // line 232
                echo "              data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_animation_effect"] ?? null)), "html", null, true);
                echo "\"
            ";
            }
            // line 233
            echo ">
            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"content-top-highlighted-area\">
                  ";
            // line 237
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top_highlighted", [])), "html", null, true);
            echo "
                </div>
              </div>
            </div>
          </div>
          ";
            // line 243
            echo "        </div>
      </div>
      ";
            // line 246
            echo "    ";
        }
        // line 247
        echo "
    ";
        // line 249
        echo "    <div id=\"main-content\" class=\"clearfix main-content white-region\">
      <div class=\"container\">
        <div class=\"row\">
          <section class=\"";
        // line 252
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_grid_class"] ?? null)), "html", null, true);
        echo "\">
            ";
        // line 254
        echo "            <div id=\"main\" class=\"clearfix main main-area";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["main_content_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
        echo "\"
              ";
        // line 255
        if ((($context["main_content_animations"] ?? null) == "enabled")) {
            // line 256
            echo "                data-animate-effect=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_animation_effect"] ?? null)), "html", null, true);
            echo "\"
              ";
        }
        // line 257
        echo ">
              ";
        // line 258
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 259
            echo "                ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
              ";
        }
        // line 261
        echo "            </div>
            ";
        // line 263
        echo "          </section>
          ";
        // line 264
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 265
            echo "            <aside class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_grid_class"] ?? null)), "html", null, true);
            echo "\">
              ";
            // line 267
            echo "              <section id=\"sidebar-first\" class=\"sidebar sidebar-first clearfix";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sidebar_first_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
                ";
            // line 268
            if ((($context["sidebar_first_animations"] ?? null) == "enabled")) {
                // line 269
                echo "                  data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_animation_effect"] ?? null)), "html", null, true);
                echo "\"
                ";
            }
            // line 270
            echo ">
                ";
            // line 271
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
              </section>
              ";
            // line 274
            echo "            </aside>
          ";
        }
        // line 276
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 277
            echo "            <aside class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_grid_class"] ?? null)), "html", null, true);
            echo "\">
              ";
            // line 279
            echo "              <section id=\"sidebar-second\" class=\"sidebar sidebar-second clearfix";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sidebar_second_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
                ";
            // line 280
            if ((($context["sidebar_second_animations"] ?? null) == "enabled")) {
                // line 281
                echo "                  data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_animation_effect"] ?? null)), "html", null, true);
                echo "\"
                ";
            }
            // line 282
            echo ">
                ";
            // line 283
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
              </section>
              ";
            // line 286
            echo "            </aside>
          ";
        }
        // line 288
        echo "        </div>
      </div>
    </div>
    ";
        // line 292
        echo "
    ";
        // line 293
        if (($this->getAttribute(($context["page"] ?? null), "content_bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "content_bottom_second", []))) {
            // line 294
            echo "      ";
            // line 295
            echo "      <div id=\"content-bottom\" class=\"clearfix content-bottom ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_background_color"] ?? null)), "html", null, true);
            echo "\">
        <div class=\"container\">
          ";
            // line 298
            echo "          <div id=\"content-bottom-inside\" class=\"clearfix content-bottom-inside";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_bottom_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
            ";
            // line 299
            if ((($context["content_bottom_animations"] ?? null) == "enabled")) {
                // line 300
                echo "              data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_animation_effect"] ?? null)), "html", null, true);
                echo "\"
            ";
            }
            // line 301
            echo ">
            <div class=\"row\">
              ";
            // line 303
            if ($this->getAttribute(($context["page"] ?? null), "content_bottom_first", [])) {
                // line 304
                echo "                <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                  <div id=\"content-bottom-first\" class=\"content-bottom-first\">
                    <div class=\"content-bottom-area clearfix\">
                      ";
                // line 307
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_bottom_first", [])), "html", null, true);
                echo "
                    </div>
                  </div>
                </div>
              ";
            }
            // line 312
            echo "              ";
            if ($this->getAttribute(($context["page"] ?? null), "content_bottom_second", [])) {
                // line 313
                echo "                <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                  <div id=\"content-bottom-second\" class=\"content-bottom-second\">
                    <div class=\"content-bottom-area clearfix\">
                      ";
                // line 316
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_bottom_second", [])), "html", null, true);
                echo "
                    </div>
                  </div>
                </div>
              ";
            }
            // line 321
            echo "            </div>
          </div>
          ";
            // line 324
            echo "        </div>
      </div>
      ";
            // line 327
            echo "    ";
        }
        // line 328
        echo "
    ";
        // line 329
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 330
            echo "      ";
            // line 331
            echo "      <div id=\"highlighted\" class=\"clearfix highlighted ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_background_color"] ?? null)), "html", null, true);
            echo "\">
        <div class=\"";
            // line 332
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_layout_container"] ?? null)), "html", null, true);
            echo "\">
          ";
            // line 334
            echo "          <div id=\"highlighted-inside\" class=\"clearfix highlighted-inside";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["highlighted_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
            ";
            // line 335
            if ((($context["highlighted_animations"] ?? null) == "enabled")) {
                // line 336
                echo "              data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_animation_effect"] ?? null)), "html", null, true);
                echo "\"
            ";
            }
            // line 337
            echo ">
            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"highlighted-area\">
                  ";
            // line 341
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
                </div>
              </div>
            </div>
          </div>
          ";
            // line 347
            echo "        </div>
      </div>
      ";
            // line 350
            echo "    ";
        }
        // line 351
        echo "
    ";
        // line 352
        if (($this->getAttribute(($context["page"] ?? null), "highlighted_bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "highlighted_bottom_second", []))) {
            // line 353
            echo "      ";
            // line 354
            echo "      <div id=\"highlighted-bottom\" class=\"clearfix highlighted-bottom ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_bottom_background_color"] ?? null)), "html", null, true);
            echo "\">
        <div id=\"highlighted-bottom-transparent-bg\" class=\"highlighted-bottom-transparent-bg\"></div>
        <div class=\"";
            // line 356
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_bottom_layout_container"] ?? null)), "html", null, true);
            echo "\">
          ";
            // line 358
            echo "          <div id=\"highlighted-bottom-inside\" class=\"clearfix highlighted-bottom-inside";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["highlighted_bottom_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
            ";
            // line 359
            if ((($context["highlighted_bottom_animations"] ?? null) == "enabled")) {
                // line 360
                echo "              data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_bottom_animation_effect"] ?? null)), "html", null, true);
                echo "\"
            ";
            }
            // line 361
            echo ">
            <div class=\"row\">
              ";
            // line 363
            if ($this->getAttribute(($context["page"] ?? null), "highlighted_bottom_first", [])) {
                // line 364
                echo "                <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_bottom_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                  <div id=\"highlighted-bottom-first\" class=\"highlighted-bottom-first\">
                    <div class=\"highlighted-bottom-area clearfix\">
                      ";
                // line 367
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted_bottom_first", [])), "html", null, true);
                echo "
                    </div>
                  </div>
                </div>
              ";
            }
            // line 372
            echo "              ";
            if ($this->getAttribute(($context["page"] ?? null), "highlighted_bottom_second", [])) {
                // line 373
                echo "                <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_bottom_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                  <div id=\"highlighted-bottom-second\" class=\"highlighted-bottom-second\">
                    <div class=\"highlighted-bottom-area clearfix\">
                      ";
                // line 376
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted_bottom_second", [])), "html", null, true);
                echo "
                    </div>
                  </div>
                </div>
              ";
            }
            // line 381
            echo "            </div>
          </div>
          ";
            // line 384
            echo "        </div>
      </div>
      ";
            // line 387
            echo "    ";
        }
        // line 388
        echo "
    ";
        // line 389
        if ($this->getAttribute(($context["page"] ?? null), "featured_top", [])) {
            // line 390
            echo "      ";
            // line 391
            echo "      <div id=\"featured-top\" class=\"clearfix featured-top ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_background_color"] ?? null)), "html", null, true);
            echo "\">
        <div class=\"";
            // line 392
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_layout_container"] ?? null)), "html", null, true);
            echo "\">
          ";
            // line 394
            echo "          <div id=\"featured-top-inside\" class=\"clearfix featured-top-inside";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_top_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
            ";
            // line 395
            if ((($context["featured_top_animations"] ?? null) == "enabled")) {
                // line 396
                echo "              data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_animation_effect"] ?? null)), "html", null, true);
                echo "\"
            ";
            }
            // line 397
            echo ">
            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"featured-top-area\">
                  ";
            // line 401
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_top", [])), "html", null, true);
            echo "
                </div>
              </div>
            </div>
          </div>
          ";
            // line 407
            echo "        </div>
      </div>
      ";
            // line 410
            echo "    ";
        }
        // line 411
        echo "
    ";
        // line 412
        if ($this->getAttribute(($context["page"] ?? null), "featured", [])) {
            // line 413
            echo "      ";
            // line 414
            echo "      <div id=\"featured\" class=\"clearfix featured ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_background_color"] ?? null)), "html", null, true);
            echo "\">
        <div class=\"";
            // line 415
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_layout_container"] ?? null)), "html", null, true);
            echo "\">
          ";
            // line 417
            echo "          <div id=\"featured-inside\" class=\"clearfix featured-inside";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
            ";
            // line 418
            if ((($context["featured_animations"] ?? null) == "enabled")) {
                // line 419
                echo "              data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_animation_effect"] ?? null)), "html", null, true);
                echo "\"
            ";
            }
            // line 420
            echo ">
            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"featured-area\">
                  ";
            // line 424
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured", [])), "html", null, true);
            echo "
                </div>
              </div>
            </div>
          </div>
          ";
            // line 430
            echo "        </div>
      </div>
      ";
            // line 433
            echo "    ";
        }
        // line 434
        echo "
    ";
        // line 435
        if ($this->getAttribute(($context["page"] ?? null), "featured_bottom", [])) {
            // line 436
            echo "      ";
            // line 437
            echo "      <div id=\"featured-bottom\" class=\"clearfix featured-bottom ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_background_color"] ?? null)), "html", null, true);
            echo "\">
        <div class=\"";
            // line 438
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_layout_container"] ?? null)), "html", null, true);
            echo "\">
          ";
            // line 440
            echo "          <div id=\"featured-bottom-inside\" class=\"clearfix featured-bottom-inside";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_bottom_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
            ";
            // line 441
            if ((($context["featured_bottom_animations"] ?? null) == "enabled")) {
                // line 442
                echo "              data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_animation_effect"] ?? null)), "html", null, true);
                echo "\"
            ";
            }
            // line 443
            echo ">
            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"featured-bottom-area\">
                  ";
            // line 447
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_bottom", [])), "html", null, true);
            echo "
                </div>
              </div>
            </div>
          </div>
          ";
            // line 453
            echo "        </div>
      </div>
      ";
            // line 456
            echo "    ";
        }
        // line 457
        echo "
  </div>
  ";
        // line 460
        echo "
  ";
        // line 461
        if (($this->getAttribute(($context["page"] ?? null), "footer_top_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_top_second", []))) {
            // line 462
            echo "    ";
            // line 463
            echo "    <div id=\"footer-top\" class=\"clearfix footer-top ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_regions"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_background_color"] ?? null)), "html", null, true);
            echo "\">
      <div class=\"container\">
        ";
            // line 466
            echo "        <div id=\"footer-top-inside\" class=\"clearfix footer-top-inside";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_top_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 467
            if ((($context["footer_top_animations"] ?? null) == "enabled")) {
                // line 468
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 469
            echo ">
          <div class=\"row\">
            ";
            // line 471
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_first", [])) {
                // line 472
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 474
                echo "                <div id=\"footer-top-first\" class=\"clearfix footer-top-first\">
                  <div class=\"footer-top-area\">
                    ";
                // line 476
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_first", [])), "html", null, true);
                echo "
                  </div>
                </div>
                ";
                // line 480
                echo "              </div>
            ";
            }
            // line 482
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_second", [])) {
                // line 483
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 485
                echo "                <div id=\"footer-top-second\" class=\"clearfix footer-top-second\">
                  <div class=\"footer-top-area\">
                    ";
                // line 487
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_second", [])), "html", null, true);
                echo "
                  </div>
                </div>
                ";
                // line 491
                echo "              </div>
            ";
            }
            // line 493
            echo "          </div>
        </div>
        ";
            // line 496
            echo "      </div>
    </div>
    ";
            // line 499
            echo "  ";
        }
        // line 500
        echo "
  ";
        // line 501
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", []))) {
            // line 502
            echo "    ";
            // line 503
            echo "    <footer id=\"footer\" class=\"clearfix footer ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_background_color"] ?? null)), "html", null, true);
            echo "\">
      <div class=\"";
            // line 504
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_layout_container"] ?? null)), "html", null, true);
            echo "\">
        <div class=\"row\">
          ";
            // line 506
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 507
                echo "            <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_grid_class"] ?? null)), "html", null, true);
                echo "\">
              <div class=\"footer-area";
                // line 508
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                echo "\"
                ";
                // line 509
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 510
                    echo "                  data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                ";
                }
                // line 511
                echo ">
                ";
                // line 512
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
              </div>
            </div>
          ";
            }
            // line 516
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 517
                echo "            <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_grid_class"] ?? null)), "html", null, true);
                echo "\">
              <div class=\"footer-area";
                // line 518
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                echo "\"
                ";
                // line 519
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 520
                    echo "                  data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                ";
                }
                // line 521
                echo ">
                ";
                // line 522
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
              </div>
            </div>
          ";
            }
            // line 526
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 527
                echo "            <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_grid_class"] ?? null)), "html", null, true);
                echo "\">
              <div class=\"footer-area";
                // line 528
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                echo "\"
                ";
                // line 529
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 530
                    echo "                  data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                ";
                }
                // line 531
                echo ">
                ";
                // line 532
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
              </div>
            </div>
          ";
            }
            // line 536
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])) {
                // line 537
                echo "            <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_grid_class"] ?? null)), "html", null, true);
                echo "\">
              <div class=\"footer-area";
                // line 538
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                echo "\"
                ";
                // line 539
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 540
                    echo "                  data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                ";
                }
                // line 541
                echo ">
                ";
                // line 542
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])), "html", null, true);
                echo "
              </div>
            </div>
          ";
            }
            // line 546
            echo "        </div>
      </div>
    </footer>
    ";
            // line 550
            echo "  ";
        }
        // line 551
        echo "
  ";
        // line 552
        if (($this->getAttribute(($context["page"] ?? null), "sub_footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer", []))) {
            // line 553
            echo "    <div id=\"subfooter\" class=\"clearfix subfooter ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_background_color"] ?? null)), "html", null, true);
            echo "\">
      <div class=\"";
            // line 554
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 556
            echo "        <div id=\"subfooter-inside\" class=\"clearfix subfooter-inside\">
          <div class=\"row\">
            ";
            // line 559
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "sub_footer_first", [])) {
                // line 560
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                <div class=\"subfooter-area first\">
                  ";
                // line 562
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sub_footer_first", [])), "html", null, true);
                echo "
                </div>
              </div>
            ";
            }
            // line 566
            echo "            ";
            // line 567
            echo "            ";
            // line 568
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
                // line 569
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                <div class=\"subfooter-area second\">
                  ";
                // line 571
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
                echo "
                </div>
              </div>
            ";
            }
            // line 575
            echo "            ";
            // line 576
            echo "          </div>
        </div>
        ";
            // line 579
            echo "      </div>
    </div>
    ";
            // line 582
            echo "  ";
        }
        // line 583
        echo "
  ";
        // line 584
        if (($context["scroll_to_top"] ?? null)) {
            // line 585
            echo "  ";
            // line 586
            echo "    <div id=\"toTop\" class=\"to-top\"><i class=\"fa ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scroll_to_top_icon"] ?? null)), "html", null, true);
            echo "\"></i></div>
  ";
            // line 588
            echo "  ";
        }
        // line 589
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/startupgrowth_lite/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1186 => 589,  1183 => 588,  1178 => 586,  1176 => 585,  1174 => 584,  1171 => 583,  1168 => 582,  1164 => 579,  1160 => 576,  1158 => 575,  1151 => 571,  1145 => 569,  1142 => 568,  1140 => 567,  1138 => 566,  1131 => 562,  1125 => 560,  1122 => 559,  1118 => 556,  1114 => 554,  1109 => 553,  1107 => 552,  1104 => 551,  1101 => 550,  1096 => 546,  1089 => 542,  1086 => 541,  1080 => 540,  1078 => 539,  1074 => 538,  1069 => 537,  1066 => 536,  1059 => 532,  1056 => 531,  1050 => 530,  1048 => 529,  1044 => 528,  1039 => 527,  1036 => 526,  1029 => 522,  1026 => 521,  1020 => 520,  1018 => 519,  1014 => 518,  1009 => 517,  1006 => 516,  999 => 512,  996 => 511,  990 => 510,  988 => 509,  984 => 508,  979 => 507,  977 => 506,  972 => 504,  967 => 503,  965 => 502,  963 => 501,  960 => 500,  957 => 499,  953 => 496,  949 => 493,  945 => 491,  939 => 487,  935 => 485,  930 => 483,  927 => 482,  923 => 480,  917 => 476,  913 => 474,  908 => 472,  906 => 471,  902 => 469,  896 => 468,  894 => 467,  889 => 466,  881 => 463,  879 => 462,  877 => 461,  874 => 460,  870 => 457,  867 => 456,  863 => 453,  855 => 447,  849 => 443,  843 => 442,  841 => 441,  836 => 440,  832 => 438,  827 => 437,  825 => 436,  823 => 435,  820 => 434,  817 => 433,  813 => 430,  805 => 424,  799 => 420,  793 => 419,  791 => 418,  786 => 417,  782 => 415,  777 => 414,  775 => 413,  773 => 412,  770 => 411,  767 => 410,  763 => 407,  755 => 401,  749 => 397,  743 => 396,  741 => 395,  736 => 394,  732 => 392,  727 => 391,  725 => 390,  723 => 389,  720 => 388,  717 => 387,  713 => 384,  709 => 381,  701 => 376,  694 => 373,  691 => 372,  683 => 367,  676 => 364,  674 => 363,  670 => 361,  664 => 360,  662 => 359,  657 => 358,  653 => 356,  647 => 354,  645 => 353,  643 => 352,  640 => 351,  637 => 350,  633 => 347,  625 => 341,  619 => 337,  613 => 336,  611 => 335,  606 => 334,  602 => 332,  597 => 331,  595 => 330,  593 => 329,  590 => 328,  587 => 327,  583 => 324,  579 => 321,  571 => 316,  564 => 313,  561 => 312,  553 => 307,  546 => 304,  544 => 303,  540 => 301,  534 => 300,  532 => 299,  527 => 298,  521 => 295,  519 => 294,  517 => 293,  514 => 292,  509 => 288,  505 => 286,  500 => 283,  497 => 282,  491 => 281,  489 => 280,  484 => 279,  479 => 277,  476 => 276,  472 => 274,  467 => 271,  464 => 270,  458 => 269,  456 => 268,  451 => 267,  446 => 265,  444 => 264,  441 => 263,  438 => 261,  432 => 259,  430 => 258,  427 => 257,  421 => 256,  419 => 255,  414 => 254,  410 => 252,  405 => 249,  402 => 247,  399 => 246,  395 => 243,  387 => 237,  381 => 233,  375 => 232,  373 => 231,  368 => 230,  364 => 228,  359 => 227,  357 => 226,  355 => 225,  352 => 224,  349 => 223,  345 => 220,  337 => 214,  331 => 210,  325 => 209,  323 => 208,  318 => 207,  314 => 205,  309 => 204,  307 => 203,  305 => 202,  302 => 201,  293 => 195,  287 => 191,  285 => 190,  281 => 188,  277 => 185,  274 => 183,  271 => 182,  266 => 178,  258 => 172,  252 => 168,  247 => 164,  245 => 163,  243 => 162,  240 => 161,  237 => 160,  233 => 157,  230 => 156,  226 => 153,  222 => 150,  217 => 147,  214 => 145,  211 => 144,  205 => 140,  197 => 138,  195 => 137,  192 => 136,  186 => 133,  183 => 132,  181 => 131,  178 => 130,  172 => 127,  169 => 126,  164 => 123,  159 => 120,  156 => 119,  148 => 116,  145 => 115,  140 => 112,  135 => 109,  132 => 108,  126 => 105,  124 => 104,  120 => 102,  116 => 100,  109 => 99,  107 => 98,  105 => 97,  102 => 96,  99 => 95,  95 => 92,  87 => 86,  81 => 82,  77 => 80,  74 => 79,  72 => 78,  70 => 77,  66 => 75,  64 => 74,  62 => 73,  58 => 71,  55 => 69,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/startupgrowth_lite/templates/page.html.twig", "/var/www/johnscryptoclass.com/drupal-8.9.15/themes/startupgrowth_lite/templates/page.html.twig");
    }
}
