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

/* themes/contrib/charity_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_cc54513fea5fab9a5340db3371d229fccdac770c72be1ce7709e09f76284e0c3 extends \Twig\Template
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
        // line 60
        echo "
<!-- <div class=\"top-nav\">
  <div class=\"container\">
    <div class=\"row\">
      
      ";
        // line 65
        if (($context["show_social_icon"] ?? null)) {
            // line 66
            echo "        <div class=\"col-md-6\">
          <p class=\"social-media\">
            Follow us 
            ";
            // line 69
            if (($context["facebook_url"] ?? null)) {
                // line 70
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 70, $this->source), "html", null, true);
                echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
            ";
            }
            // line 72
            echo "            ";
            if (($context["google_plus_url"] ?? null)) {
                // line 73
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null), 73, $this->source), "html", null, true);
                echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fab fa-google-plus-g\"></i></a>
            ";
            }
            // line 75
            echo "            ";
            if (($context["twitter_url"] ?? null)) {
                // line 76
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 76, $this->source), "html", null, true);
                echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
            ";
            }
            // line 78
            echo "            ";
            if (($context["linkedin_url"] ?? null)) {
                // line 79
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 79, $this->source), "html", null, true);
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
            ";
            }
            // line 81
            echo "            ";
            if (($context["pinterest_url"] ?? null)) {
                // line 82
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null), 82, $this->source), "html", null, true);
                echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fab fa-pinterest-p\"></i></a>
            ";
            }
            // line 84
            echo "            ";
            if (($context["rss_url"] ?? null)) {
                // line 85
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 85, $this->source), "html", null, true);
                echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            ";
            }
            // line 87
            echo "          </p>
        </div>
      ";
        }
        // line 90
        echo "     
    </div>
  </div>
</div> -->

<div class=\"header-wrap\">

  <div class=\"header\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Header -->

        <div class=\"navbar-header col-md-3\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
            <i class=\"fas fa-bars\"></i>
          </button>
          ";
        // line 107
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 107)) {
            // line 108
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 110
        echo "        </div>

        <!-- End: Header -->

        ";
        // line 114
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 114) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 114))) {
            // line 115
            echo "          <div class=\"col-md-9\">

            ";
            // line 117
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 117)) {
                // line 118
                echo "              ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
                echo "
            ";
            }
            // line 120
            echo "
            ";
            // line 121
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 121)) {
                // line 122
                echo "              ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
                echo "
            ";
            }
            // line 124
            echo "            
          </div>
        ";
        }
        // line 127
        echo "
      </div>
    </div>
  </div>

  ";
        // line 132
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 133
            echo "    
      <div class=\"flexslider\">
        <ul class=\"slides\">
          ";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 137
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 137, $this->source));
                echo "
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "        </ul>
      </div>
    
  ";
        }
        // line 143
        echo "
</div>


<!-- Start: Top widget -->

";
        // line 149
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 149) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 149)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 149))) {
            // line 150
            echo "  <div class=\"topwidget\" id=\"topwidget\">

    <div class=\"container\">

      ";
            // line 154
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_title", [], "any", false, false, true, 154)) {
                // line 155
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 156
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_title", [], "any", false, false, true, 156), 156, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 159
            echo "
        <div class=\"row topwidget-list clearfix\">

          <!-- Start: Top widget first -->          
          ";
            // line 163
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 163)) {
                // line 164
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 164, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 164), 164, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 165
            echo "          
          <!-- End: Top widget first --> 

          <!-- Start: Top widget second -->          
          ";
            // line 169
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 169)) {
                // line 170
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 170, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 170), 170, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 171
            echo "          
          <!-- End: Top widget second --> 
          
          <!-- Start: Top widget third -->         
          ";
            // line 175
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 175)) {
                // line 176
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 176, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 176), 176, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 177
            echo "          
          <!-- End: Top widget third -->

        </div>
    </div>
  </div>
";
        }
        // line 184
        echo "
<!--End: Top widget -->

    
<!--Start: Highlighted -->

";
        // line 190
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 190)) {
            // line 191
            echo "  <div class=\"highlighted\">
    <div class=\"container\">
      ";
            // line 193
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 193), 193, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 197
        echo "
<!--End: Highlighted -->


<!--Start: Top Message -->

";
        // line 203
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topmessage", [], "any", false, false, true, 203)) {
            // line 204
            echo "  <div class=\"top-message\">
    <div class=\"container\">
      ";
            // line 206
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topmessage", [], "any", false, false, true, 206), 206, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 210
        echo "
<!--End: Top Message -->


<!--Start: Title -->
";
        // line 215
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 215) &&  !($context["is_front"] ?? null))) {
            // line 216
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 219
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 219), 219, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 224
        echo "<!--End: Title -->

<div class=\"main-content\">
  <div class=\"container\">
    <div class=\"\">

      <!--Start: Breadcrumb -->

      ";
        // line 232
        if ( !($context["is_front"] ?? null)) {
            // line 233
            echo "        <div class=\"row\">
          <div class=\"col-md-12\">";
            // line 234
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 234), 234, $this->source), "html", null, true);
            echo "</div>
        </div>
      ";
        }
        // line 237
        echo "
      <!--End: Breadcrumb -->

      <div class=\"row layout\">

        <!--- Start: Left SideBar -->
        ";
        // line 243
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 243)) {
            // line 244
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 244, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 246
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 246), 246, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 250
        echo "        <!-- End Left SideBar -->

        <!--- Start Content -->
        ";
        // line 253
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 253)) {
            // line 254
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 254, $this->source), "html", null, true);
            echo ">
            <div class=\"content_layout\">
              ";
            // line 256
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 256), 256, $this->source), "html", null, true);
            echo "
            </div>              
          </div>
        ";
        }
        // line 260
        echo "        <!-- End: Content -->

        <!-- Start: Right SideBar -->
        ";
        // line 263
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 263)) {
            // line 264
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 264, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 266
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 266), 266, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 270
        echo "        <!-- End: Right SideBar -->
        
      </div>
    
    </div>
  </div>
</div>

<!-- End: Main content -->


<!-- Start: Clients -->
";
        // line 282
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients", [], "any", false, false, true, 282)) {
            echo " 

  <div class=\"clients\" id=\"clients\">

    ";
            // line 286
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients_title", [], "any", false, false, true, 286)) {
                // line 287
                echo "      <h2 class=\"custom-block-title\" >
        ";
                // line 288
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients_title", [], "any", false, false, true, 288), 288, $this->source), "html", null, true);
                echo "
      </h2>
    ";
            }
            // line 291
            echo "
    <div class=\"container\">
      ";
            // line 293
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients", [], "any", false, false, true, 293), 293, $this->source), "html", null, true);
            echo "
    </div>
  </div>

";
        }
        // line 298
        echo "<!--End: Clients -->


<!-- Start: Features -->
";
        // line 302
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 302) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 302)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 302))) {
            // line 303
            echo "
  <div class=\"features\">
    <div class=\"container\">

      ";
            // line 307
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 307)) {
                // line 308
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 309
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 309), 309, $this->source), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 312
            echo "
      <div class=\"row\">

        <!-- Start: Features First -->
        ";
            // line 316
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 316)) {
                // line 317
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_first_class"] ?? null), 317, $this->source), "html", null, true);
                echo ">
            ";
                // line 318
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 318), 318, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 321
            echo "        <!-- End: Features First -->

        <!-- Start :Features Second -->
        ";
            // line 324
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 324)) {
                // line 325
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 325, $this->source), "html", null, true);
                echo ">
            ";
                // line 326
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 326), 326, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 329
            echo "        <!-- End: Features Second -->

        <!-- Start: Features third -->
        ";
            // line 332
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 332)) {
                // line 333
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 333, $this->source), "html", null, true);
                echo ">
            ";
                // line 334
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 334), 334, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 337
            echo "        <!-- End: Features Third -->

      </div>
    </div>
  </div>

";
        }
        // line 344
        echo "<!--End: Features -->


<!-- Start: Services widgets -->
";
        // line 348
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_first", [], "any", false, false, true, 348) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_second", [], "any", false, false, true, 348)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_third", [], "any", false, false, true, 348))) {
            // line 349
            echo "
  <div class=\"services\" id=\"services\">    
    <div class=\"container\">

      ";
            // line 353
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_title", [], "any", false, false, true, 353)) {
                // line 354
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 355
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_title", [], "any", false, false, true, 355), 355, $this->source), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 358
            echo "
      <div class=\"row services-list\">

        <!-- Start: Bottom First -->          
        ";
            // line 362
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_first", [], "any", false, false, true, 362)) {
                // line 363
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null), 363, $this->source), "html", null, true);
                echo ">
            ";
                // line 364
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_first", [], "any", false, false, true, 364), 364, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 366
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 370
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_second", [], "any", false, false, true, 370)) {
                // line 371
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null), 371, $this->source), "html", null, true);
                echo ">
            ";
                // line 372
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_second", [], "any", false, false, true, 372), 372, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 374
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 378
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_third", [], "any", false, false, true, 378)) {
                // line 379
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null), 379, $this->source), "html", null, true);
                echo ">
            ";
                // line 380
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_third", [], "any", false, false, true, 380), 380, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 382
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom third -->          
        ";
            // line 386
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_forth", [], "any", false, false, true, 386)) {
                // line 387
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null), 387, $this->source), "html", null, true);
                echo ">
            ";
                // line 388
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_forth", [], "any", false, false, true, 388), 388, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 390
            echo "          
        <!-- End: Bottom Third -->

      </div>
    </div>
  </div>

";
        }
        // line 398
        echo "<!--End: Price table widgets -->


<!-- Start: Bottom widgets -->
";
        // line 402
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 402) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 402)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 402)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 402))) {
            // line 403
            echo "
  <div class=\"bottom-widget\" id=\"bottom-widget\">    
    <div class=\"container\">

      ";
            // line 407
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 407)) {
                // line 408
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 409
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 409), 409, $this->source), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 412
            echo "
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 416
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 416)) {
                // line 417
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 417, $this->source), "html", null, true);
                echo ">
            ";
                // line 418
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 418), 418, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 420
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 424
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 424)) {
                // line 425
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 425, $this->source), "html", null, true);
                echo ">
            ";
                // line 426
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 426), 426, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 428
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 432
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 432)) {
                // line 433
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 433, $this->source), "html", null, true);
                echo ">
            ";
                // line 434
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 434), 434, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 436
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        ";
            // line 440
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 440)) {
                // line 441
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 441, $this->source), "html", null, true);
                echo ">
            ";
                // line 442
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 442), 442, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 445
            echo "        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>

";
        }
        // line 452
        echo "<!--End: Bottom widgets -->


<!-- Start: Updates widgets -->
";
        // line 456
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 456) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 456)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 456)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_forth", [], "any", false, false, true, 456))) {
            // line 457
            echo "
  <div class=\"updates\" id=\"updates\">    
    <div class=\"container\">

      ";
            // line 461
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_title", [], "any", false, false, true, 461)) {
                // line 462
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 463
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_title", [], "any", false, false, true, 463), 463, $this->source), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 466
            echo "

      <div class=\"row updates-list\">

        <!-- Start: Bottom First -->          
        ";
            // line 471
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 471)) {
                // line 472
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 472, $this->source), "html", null, true);
                echo ">
            ";
                // line 473
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 473), 473, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 475
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 479
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 479)) {
                // line 480
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 480, $this->source), "html", null, true);
                echo ">
            ";
                // line 481
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 481), 481, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 483
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 487
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 487)) {
                // line 488
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 488, $this->source), "html", null, true);
                echo ">
            ";
                // line 489
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 489), 489, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 491
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        ";
            // line 495
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_forth", [], "any", false, false, true, 495)) {
                // line 496
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 496, $this->source), "html", null, true);
                echo ">
            ";
                // line 497
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_forth", [], "any", false, false, true, 497), 497, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 500
            echo "        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>

";
        }
        // line 507
        echo "<!--End: Team widgets -->


<!-- Start: Footer widgets -->
";
        // line 511
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 511) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 511)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 511))) {
            // line 512
            echo "
  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">

      ";
            // line 516
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 516)) {
                // line 517
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 518
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 518), 518, $this->source), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 521
            echo "
      <div class=\"row\">

        <!-- Start: Footer First -->
        ";
            // line 525
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 525)) {
                // line 526
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 526, $this->source), "html", null, true);
                echo ">
            ";
                // line 527
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 527), 527, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 530
            echo "        <!-- End: Footer First -->

        <!-- Start :Footer Second -->
        ";
            // line 533
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 533)) {
                // line 534
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 534, $this->source), "html", null, true);
                echo ">
            ";
                // line 535
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 535), 535, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 538
            echo "        <!-- End: Footer Second -->

        <!-- Start: Footer third -->
        ";
            // line 541
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 541)) {
                // line 542
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 542, $this->source), "html", null, true);
                echo ">
            ";
                // line 543
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 543), 543, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 546
            echo "        <!-- End: Footer Third -->

      </div>
    </div>
  </div>

";
        }
        // line 553
        echo "<!--End: Footer widgets -->

<!-- Start: Copyright -->
<div class=\"copyright\">

    <div class=\"container\">

      <span>Copyright © ";
        // line 560
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</span>

      ";
        // line 562
        if (($context["show_credit_link"] ?? null)) {
            // line 563
            echo "        <span class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></span>
      ";
        }
        // line 565
        echo "
      <p class=\"social-media\">
        ";
        // line 567
        if (($context["facebook_url"] ?? null)) {
            // line 568
            echo "          <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 568, $this->source), "html", null, true);
            echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
        ";
        }
        // line 570
        echo "        ";
        if (($context["google_plus_url"] ?? null)) {
            // line 571
            echo "          <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null), 571, $this->source), "html", null, true);
            echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fab fa-google-plus-g\"></i></a>
        ";
        }
        // line 573
        echo "        ";
        if (($context["twitter_url"] ?? null)) {
            // line 574
            echo "          <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 574, $this->source), "html", null, true);
            echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
        ";
        }
        // line 576
        echo "        ";
        if (($context["linkedin_url"] ?? null)) {
            // line 577
            echo "          <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 577, $this->source), "html", null, true);
            echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
        ";
        }
        // line 579
        echo "        ";
        if (($context["pinterest_url"] ?? null)) {
            // line 580
            echo "          <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null), 580, $this->source), "html", null, true);
            echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fab fa-pinterest-p\"></i></a>
        ";
        }
        // line 582
        echo "        ";
        if (($context["rss_url"] ?? null)) {
            // line 583
            echo "          <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 583, $this->source), "html", null, true);
            echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
        ";
        }
        // line 585
        echo "      </p>

  </div>
</div>
<!-- End: Copyright -->





";
    }

    public function getTemplateName()
    {
        return "themes/contrib/charity_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1070 => 585,  1064 => 583,  1061 => 582,  1055 => 580,  1052 => 579,  1046 => 577,  1043 => 576,  1037 => 574,  1034 => 573,  1028 => 571,  1025 => 570,  1019 => 568,  1017 => 567,  1013 => 565,  1009 => 563,  1007 => 562,  1002 => 560,  993 => 553,  984 => 546,  978 => 543,  973 => 542,  971 => 541,  966 => 538,  960 => 535,  955 => 534,  953 => 533,  948 => 530,  942 => 527,  937 => 526,  935 => 525,  929 => 521,  923 => 518,  920 => 517,  918 => 516,  912 => 512,  910 => 511,  904 => 507,  895 => 500,  889 => 497,  884 => 496,  882 => 495,  876 => 491,  870 => 489,  865 => 488,  863 => 487,  857 => 483,  851 => 481,  846 => 480,  844 => 479,  838 => 475,  832 => 473,  827 => 472,  825 => 471,  818 => 466,  812 => 463,  809 => 462,  807 => 461,  801 => 457,  799 => 456,  793 => 452,  784 => 445,  778 => 442,  773 => 441,  771 => 440,  765 => 436,  759 => 434,  754 => 433,  752 => 432,  746 => 428,  740 => 426,  735 => 425,  733 => 424,  727 => 420,  721 => 418,  716 => 417,  714 => 416,  708 => 412,  702 => 409,  699 => 408,  697 => 407,  691 => 403,  689 => 402,  683 => 398,  673 => 390,  667 => 388,  662 => 387,  660 => 386,  654 => 382,  648 => 380,  643 => 379,  641 => 378,  635 => 374,  629 => 372,  624 => 371,  622 => 370,  616 => 366,  610 => 364,  605 => 363,  603 => 362,  597 => 358,  591 => 355,  588 => 354,  586 => 353,  580 => 349,  578 => 348,  572 => 344,  563 => 337,  557 => 334,  552 => 333,  550 => 332,  545 => 329,  539 => 326,  534 => 325,  532 => 324,  527 => 321,  521 => 318,  516 => 317,  514 => 316,  508 => 312,  502 => 309,  499 => 308,  497 => 307,  491 => 303,  489 => 302,  483 => 298,  475 => 293,  471 => 291,  465 => 288,  462 => 287,  460 => 286,  453 => 282,  439 => 270,  432 => 266,  426 => 264,  424 => 263,  419 => 260,  412 => 256,  406 => 254,  404 => 253,  399 => 250,  392 => 246,  386 => 244,  384 => 243,  376 => 237,  370 => 234,  367 => 233,  365 => 232,  355 => 224,  347 => 219,  342 => 216,  340 => 215,  333 => 210,  326 => 206,  322 => 204,  320 => 203,  312 => 197,  305 => 193,  301 => 191,  299 => 190,  291 => 184,  282 => 177,  274 => 176,  272 => 175,  266 => 171,  258 => 170,  256 => 169,  250 => 165,  242 => 164,  240 => 163,  234 => 159,  228 => 156,  225 => 155,  223 => 154,  217 => 150,  215 => 149,  207 => 143,  201 => 139,  192 => 137,  188 => 136,  183 => 133,  181 => 132,  174 => 127,  169 => 124,  163 => 122,  161 => 121,  158 => 120,  152 => 118,  150 => 117,  146 => 115,  144 => 114,  138 => 110,  132 => 108,  130 => 107,  111 => 90,  106 => 87,  100 => 85,  97 => 84,  91 => 82,  88 => 81,  82 => 79,  79 => 78,  73 => 76,  70 => 75,  64 => 73,  61 => 72,  55 => 70,  53 => 69,  48 => 66,  46 => 65,  39 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/charity_zymphonies_theme/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\drupal\\custom-project\\web\\themes\\contrib\\charity_zymphonies_theme\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 65, "for" => 136);
        static $filters = array("escape" => 70, "raw" => 137, "date" => 560);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
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
