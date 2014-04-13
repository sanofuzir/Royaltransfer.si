<?php

/* StaticBundle::layout.html.twig */
class __TwigTemplate_558ced4ebd294139613c996dfd0b8d4349f84a86a0cf667305709a403ec345a2 extends Twig_Template
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
        .border {
           /* border: 10px ridge #c6c8c9;
            -webkit-border-image:url(";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/krona.png"), "html", null, true);
        echo ") 30 30 stretch; /* Safari 5 */
          /*  -o-border-image:url(";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/krona.png"), "html", null, true);
        echo ") 30 30 stretch; /* Opera */
          /*  border-image:url(";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/krom-2.png"), "html", null, true);
        echo ") 30 30 stretch; */
            margin: 25px 0; 
            padding: 10px 30px;
            border: 15px solid transparent;
            border-image: url('";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/krom-2.png"), "html", null, true);
        echo "');
            border-image-slice: 20;
            border-image-width: 1 2 1 2;
            border-image-outset: 0;
            border-image-repeat: repeat;
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
        // line 65
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">Domov</a>
                <img id=\"div1\" class=\"image image-meni\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/krona.png"), "html", null, true);
        echo "\" alt=\"eng\">
              </li>
              <li style=\"float: left; width: 150px; list-style-type: none; text-align: center;\">
                  <a style=\"color: #c6c8c9;\"
                     onmouseover=\"document.getElementById('div2').style.visibility = 'visible';\"
                     onmouseout=\"document.getElementById('div2').style.visibility = 'hidden';\"
                     href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("_about");
        echo "\">O nas</a>
                <img id=\"div2\" class=\"image image-meni\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/krona.png"), "html", null, true);
        echo "\" alt=\"eng\">
              </li>
              <li style=\"float: left; width: 150px; list-style-type: none; text-align: center;\">
                  <a style=\"color: #c6c8c9;\"
                     onmouseover=\"document.getElementById('div3').style.visibility = 'visible';\"
                     onmouseout=\"document.getElementById('div3').style.visibility = 'hidden';\"
                     href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("_news");
        echo "\">Novice</a>
                  <img id=\"div3\" class=\"image image-meni\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/krona.png"), "html", null, true);
        echo "\" alt=\"eng\">
              </li>
              <li style=\"float: left; width: 150px; list-style-type: none; text-align: center;\">
                  <a style=\"color: #c6c8c9;\"
                     onmouseover=\"document.getElementById('div4').style.visibility = 'visible';\"
                     onmouseout=\"document.getElementById('div4').style.visibility = 'hidden';\"
                     href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("_tours");
        echo "\">Izleti</a>
                  <img id=\"div4\" class=\"image image-meni\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/krona.png"), "html", null, true);
        echo "\" alt=\"eng\">
              </li>
              <li style=\"float: left; width: 150px; list-style-type: none; text-align: center;\">
                  <a style=\"color: #c6c8c9;\"
                     onmouseover=\"document.getElementById('div5').style.visibility = 'visible';\"
                     onmouseout=\"document.getElementById('div5').style.visibility = 'hidden';\"
                     href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("_inquiry");
        echo "\">Povpraševanje</a>
                  <img id=\"div5\" class=\"image image-meni\" src=\"";
        // line 94
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
        // line 103
        echo $this->env->getExtension('routing')->getPath("_galery");
        echo "\">Galerija slik</a>
                  </li>
                  <li style=\"text-align: left;\">
                      <a style=\"color: #020202;\" href=\"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("_video_galery");
        echo "\">Video galerija</a>
                  </li>
                </ul>
                <img id=\"div6\" class=\"image image-meni\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/krona.png"), "html", null, true);
        echo "\" alt=\"eng\">
              </li>
              <li style=\"float: left; width: 150px; list-style-type: none; text-align: center;\">
                  <a style=\"color: #c6c8c9;\"
                     onmouseover=\"document.getElementById('div7').style.visibility = 'visible';\"
                     onmouseout=\"document.getElementById('div7').style.visibility = 'hidden';\"
                     href=\"";
        // line 115
        echo $this->env->getExtension('routing')->getPath("_contact");
        echo "\">Kontakt</a>
                  <img id=\"div7\"class=\"image image-meni\" src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/krona.png"), "html", null, true);
        echo "\" alt=\"eng\">
              </li>
            </ul>
        </div>
      </div>
    </div>

    <div class=\"container\">
      ";
        // line 124
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 125
            echo "          ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 126
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
            // line 128
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "      ";
        $this->displayBlock('content', $context, $blocks);
        // line 130
        echo "
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    ";
        // line 136
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7930e18_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7930e18_0") : $this->env->getExtension('assets')->getAssetUrl("js/scripts_jquery-1.9.1_1.js");
            // line 140
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
        // line 142
        echo "
  </body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
    }

    // line 129
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "StaticBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 129,  305 => 8,  298 => 142,  272 => 140,  268 => 136,  260 => 130,  257 => 129,  251 => 128,  240 => 126,  235 => 125,  231 => 124,  220 => 116,  216 => 115,  207 => 109,  201 => 106,  195 => 103,  183 => 94,  179 => 93,  170 => 87,  166 => 86,  157 => 80,  153 => 79,  144 => 73,  140 => 72,  131 => 66,  127 => 65,  105 => 46,  98 => 42,  94 => 41,  90 => 40,  67 => 19,  41 => 17,  37 => 12,  30 => 8,  21 => 1,);
    }
}
