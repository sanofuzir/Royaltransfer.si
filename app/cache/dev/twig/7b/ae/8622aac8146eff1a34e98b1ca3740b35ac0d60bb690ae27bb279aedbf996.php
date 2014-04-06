<?php

/* UserBundle::layout.html.twig */
class __TwigTemplate_7bae8622aac8146eff1a34e98b1ca3740b35ac0d60bb690ae27bb279aedbf996 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
  <head>
    <meta charset=\"utf-8\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo " » Royaltransfer</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width\">

    ";
        // line 12
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "759cdea_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_759cdea_0") : $this->env->getExtension('assets')->getAssetUrl("css/style_bootstrap_1.css");
            // line 17
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "759cdea_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_759cdea_1") : $this->env->getExtension('assets')->getAssetUrl("css/style_bootstrap-theme_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "759cdea_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_759cdea_2") : $this->env->getExtension('assets')->getAssetUrl("css/style_style_3.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "759cdea"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_759cdea") : $this->env->getExtension('assets')->getAssetUrl("css/style.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 19
        echo "    <!--script src=\"js/vendor/modernizr-2.6.2.min.js\"></script-->
    <style>
        .nav li {
            margin-left: 5px;
        }
        .nav {
            margin-left: -10px;
        }
        .color a:link, color a:visited {
            color: #c6c8c9;
        }
        .nav2 li a:hover {
            color #c6c8c9;
            font-size: 120%;
            background-color: transparent;
        }
        #color a:link, #color a:visited;{
            color: #c6c8c9;
        }
        
     </style>
  </head>

  <body>

    <div class=\"navbar navbar-fixed-top\" style=\"height: 60px; background-color: black;\">
      <div class=\"navbar-inner\">
        <div class=\"container\">
            <ul class=\"nav nav2\" style=\"margin-top: -55px;\">
              <li style=\"float: left; width: 150px; list-style-type: none; text-align: center;\">
                <a style=\"color: #c6c8c9;\" 
                   onmouseover=\"document.getElementById('div1').style.visibility = 'visible';\"
                   onmouseout=\"document.getElementById('div1').style.visibility = 'hidden';\"
                   href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">Domov</a>
                <img id=\"div1\" class=\"image image-meni\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/krona.png"), "html", null, true);
        echo "\" alt=\"eng\">
              </li>
              <li style=\"float: left; width: 150px; list-style-type: none; text-align: center;\">
                  <a style=\"color: #c6c8c9;\"
                     onmouseover=\"document.getElementById('div2').style.visibility = 'visible';\"
                     onmouseout=\"document.getElementById('div2').style.visibility = 'hidden';\"
                     href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("_about");
        echo "\">O nas</a>
                <img id=\"div2\" class=\"image image-meni\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/krona.png"), "html", null, true);
        echo "\" alt=\"eng\">
              </li>
              <li style=\"float: left; width: 150px; list-style-type: none; text-align: center;\">
                  <a style=\"color: #c6c8c9;\"
                     onmouseover=\"document.getElementById('div3').style.visibility = 'visible';\"
                     onmouseout=\"document.getElementById('div3').style.visibility = 'hidden';\"
                     href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("_news");
        echo "\">Novice</a>
                  <img id=\"div3\" class=\"image image-meni\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/krona.png"), "html", null, true);
        echo "\" alt=\"eng\">
              </li>
              <li style=\"float: left; width: 150px; list-style-type: none; text-align: center;\">
                  <a style=\"color: #c6c8c9;\"
                     onmouseover=\"document.getElementById('div4').style.visibility = 'visible';\"
                     onmouseout=\"document.getElementById('div4').style.visibility = 'hidden';\"
                     href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("_tours");
        echo "\">Izleti</a>
                  <img id=\"div4\" class=\"image image-meni\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/krona.png"), "html", null, true);
        echo "\" alt=\"eng\">
              </li>
              <li style=\"float: left; width: 150px; list-style-type: none; text-align: center;\">
                  <a style=\"color: #c6c8c9;\"
                     onmouseover=\"document.getElementById('div5').style.visibility = 'visible';\"
                     onmouseout=\"document.getElementById('div5').style.visibility = 'hidden';\"
                     href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("_inquiry");
        echo "\">Povpraševanje</a>
                  <img id=\"div5\" class=\"image image-meni\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/krona.png"), "html", null, true);
        echo "\" alt=\"eng\">
              </li>
              <li class=\"dropdown\" id=\"div8\"
                  style=\"background-color: transparent; float: left; width: 150px; list-style-type: none; text-align: center;\"  
                  onmouseover=\"document.getElementById('div6').style.visibility = 'visible';\"
                  onmouseout=\"document.getElementById('div6').style.visibility = 'hidden';\">
                <a style=\"color: #c6c8c9; background-color: none;\" class=\"dropdown-toggle\" id=\"dLabel\" role=\"button\" data-toggle=\"dropdown\" data-target=\"#\" href=\"#\">Galerija <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu mydropdown\" role=\"menu\" aria-labelledby=\"dLabel\">
                  <li style=\"text-align: left;\">
                      <a style=\"color: #020202;\" href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("_galery");
        echo "\">Galerija slik</a>
                  </li>
                  <li style=\"text-align: left;\">
                      <a style=\"color: #020202;\" href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("_video_galery");
        echo "\">Video galerija</a>
                  </li>
                </ul>
                <img id=\"div6\" class=\"image image-meni\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/krona.png"), "html", null, true);
        echo "\" alt=\"eng\">
              </li>
              <li style=\"float: left; width: 150px; list-style-type: none; text-align: center;\">
                  <a style=\"color: #c6c8c9;\"
                     onmouseover=\"document.getElementById('div7').style.visibility = 'visible';\"
                     onmouseout=\"document.getElementById('div7').style.visibility = 'hidden';\"
                     href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("_contact");
        echo "\">Kontakt</a>
                  <img id=\"div7\"class=\"image image-meni\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/krona.png"), "html", null, true);
        echo "\" alt=\"eng\">
              </li>
            </ul>
        </div>
      </div>
    </div>
      <div style=\"margin-top: 100px; font-size: 130%; margin-left: 80px; margin-bottom: -50px;\" class=\"control-panel\">
          <a href=\"";
        // line 110
        echo $this->env->getExtension('routing')->getPath("_admin");
        echo "\">Nadzorna Plošča</a>
      </div>
      
    <div class=\"container\">
      ";
        // line 114
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 115
            echo "          ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 116
                echo "              <div class=\"alert alert-";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
                echo " fade in\" data-alert=\"alert\"><a class=\"close\" data-dismiss=\"alert\" href=\"#\">&times;</a><div class=\"alert-heading\">";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</div></div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "      ";
        $this->displayBlock('content', $context, $blocks);
        // line 120
        echo "
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    ";
        // line 126
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7930e18_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7930e18_0") : $this->env->getExtension('assets')->getAssetUrl("js/scripts_jquery-1.9.1_1.js");
            // line 130
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "7930e18_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7930e18_1") : $this->env->getExtension('assets')->getAssetUrl("js/scripts_bootstrap_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "7930e18_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7930e18_2") : $this->env->getExtension('assets')->getAssetUrl("js/scripts_part_3_script_1.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "7930e18"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7930e18") : $this->env->getExtension('assets')->getAssetUrl("js/scripts.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 132
        echo "
  </body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
    }

    // line 119
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "UserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 119,  286 => 8,  279 => 132,  253 => 130,  249 => 126,  241 => 120,  238 => 119,  232 => 118,  221 => 116,  216 => 115,  212 => 114,  205 => 110,  195 => 103,  191 => 102,  182 => 96,  176 => 93,  170 => 90,  158 => 81,  154 => 80,  145 => 74,  141 => 73,  132 => 67,  128 => 66,  119 => 60,  115 => 59,  106 => 53,  102 => 52,  37 => 12,  30 => 8,  21 => 1,  103 => 35,  93 => 31,  88 => 29,  81 => 26,  76 => 25,  71 => 23,  67 => 19,  63 => 21,  60 => 20,  56 => 19,  41 => 17,  38 => 6,  35 => 5,  29 => 3,);
    }
}
