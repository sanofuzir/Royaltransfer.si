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
            // asset "7797d03_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7797d03_0") : $this->env->getExtension('assets')->getAssetUrl("css/style_bootstrap_1.css");
            // line 18
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "7797d03_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7797d03_1") : $this->env->getExtension('assets')->getAssetUrl("css/style_bootstrap-theme_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "7797d03_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7797d03_2") : $this->env->getExtension('assets')->getAssetUrl("css/style_style_3.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "7797d03_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7797d03_3") : $this->env->getExtension('assets')->getAssetUrl("css/style_lightbox_4.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "7797d03"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7797d03") : $this->env->getExtension('assets')->getAssetUrl("css/style.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 20
        echo "    <!--script src=\"js/vendor/modernizr-2.6.2.min.js\"></script-->
    <style>
        @font-face
        {
            font-family: Adobe;
            src: url('";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/font/Adobe_Caslon Pro.ttf"), "html", null, true);
        echo "');
        }
        body, h2, .title {
        font-family: Adobe;
        }
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
            color: #c6c8c9;
            font-size: 120%;
            background-color: transparent;
        }
        #color a:link, #color a:visited{
            color: #c6c8c9;
        }
        .table {
            width: 100%;
            background-image:url('";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/polje.jpg"), "html", null, true);
        echo "');
            background-color: black;
            margin: 10px 0px;
            height: 350px;
        }
        .galery {
            height: 100%;
        }
        .galery-item {
            width: 31%;
            border-image: url('";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/border.jpg"), "html", null, true);
        echo "') 20 10 repeat;
            border-image-width: 10px;
            height: 300px;
            background-image:url('";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/polje-small.png"), "html", null, true);
        echo "');
            background-color: black;
            margin-left: 20px;
            margin-bottom: 20px;
            float: left;
            text-align: center;
        }
        .galery-item img {
            padding: 30px;
            display: inline;
            width: 250px;
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
        // line 87
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Domov</a>
                <img id=\"div1\" class=\"image image-meni\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/krona.png"), "html", null, true);
        echo "\" alt=\"eng\">
              </li>
              <li style=\"float: left; width: 150px; list-style-type: none; text-align: center;\">
                  <a style=\"color: #c6c8c9;\"
                     onmouseover=\"document.getElementById('div2').style.visibility = 'visible';\"
                     onmouseout=\"document.getElementById('div2').style.visibility = 'hidden';\"
                     href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("_about");
        echo "\">O nas</a>
                <img id=\"div2\" class=\"image image-meni\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/krona.png"), "html", null, true);
        echo "\" alt=\"eng\">
              </li>
              <li style=\"float: left; width: 150px; list-style-type: none; text-align: center;\">
                  <a style=\"color: #c6c8c9;\"
                     onmouseover=\"document.getElementById('div3').style.visibility = 'visible';\"
                     onmouseout=\"document.getElementById('div3').style.visibility = 'hidden';\"
                     href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("_news");
        echo "\">Novice</a>
                  <img id=\"div3\" class=\"image image-meni\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/krona.png"), "html", null, true);
        echo "\" alt=\"eng\">
              </li>
              <li style=\"float: left; width: 150px; list-style-type: none; text-align: center;\">
                  <a style=\"color: #c6c8c9;\"
                     onmouseover=\"document.getElementById('div4').style.visibility = 'visible';\"
                     onmouseout=\"document.getElementById('div4').style.visibility = 'hidden';\"
                     href=\"";
        // line 108
        echo $this->env->getExtension('routing')->getPath("_tours");
        echo "\">Izleti</a>
                  <img id=\"div4\" class=\"image image-meni\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/krona.png"), "html", null, true);
        echo "\" alt=\"eng\">
              </li>
              <li style=\"float: left; width: 150px; list-style-type: none; text-align: center;\">
                  <a style=\"color: #c6c8c9;\"
                     onmouseover=\"document.getElementById('div5').style.visibility = 'visible';\"
                     onmouseout=\"document.getElementById('div5').style.visibility = 'hidden';\"
                     href=\"";
        // line 115
        echo $this->env->getExtension('routing')->getPath("_inquiry");
        echo "\">Povpraševanje</a>
                  <img id=\"div5\" class=\"image image-meni\" src=\"";
        // line 116
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
        // line 125
        echo $this->env->getExtension('routing')->getPath("_galery");
        echo "\">Galerija slik</a>
                  </li>
                  <li style=\"text-align: left;\">
                      <a style=\"color: #020202;\" href=\"";
        // line 128
        echo $this->env->getExtension('routing')->getPath("_video_galery");
        echo "\">Video galerija</a>
                  </li>
                </ul>
                <img id=\"div6\" class=\"image image-meni\" src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/krona.png"), "html", null, true);
        echo "\" alt=\"eng\">
              </li>
              <li style=\"float: left; width: 150px; list-style-type: none; text-align: center;\">
                  <a style=\"color: #c6c8c9;\"
                     onmouseover=\"document.getElementById('div7').style.visibility = 'visible';\"
                     onmouseout=\"document.getElementById('div7').style.visibility = 'hidden';\"
                     href=\"";
        // line 137
        echo $this->env->getExtension('routing')->getPath("_contact");
        echo "\">Kontakt</a>
                  <img id=\"div7\"class=\"image image-meni\" src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/krona.png"), "html", null, true);
        echo "\" alt=\"eng\">
              </li>
            </ul>
        </div>
      </div>
    </div>
      <div style=\"margin-top: 100px; font-size: 130%; margin-left: 80px; margin-bottom: -50px;\" class=\"control-panel\">
          <a href=\"";
        // line 145
        echo $this->env->getExtension('routing')->getPath("_admin");
        echo "\">Nadzorna Plošča</a>
      </div>
      
    <div class=\"container\">
      ";
        // line 149
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 150
            echo "          ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 151
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
            // line 153
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "      ";
        $this->displayBlock('content', $context, $blocks);
        // line 155
        echo "
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    ";
        // line 161
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "aa92e5b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa92e5b_0") : $this->env->getExtension('assets')->getAssetUrl("js/scripts_jquery-1.11.0.min_1.js");
            // line 166
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "aa92e5b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa92e5b_1") : $this->env->getExtension('assets')->getAssetUrl("js/scripts_lightbox.min_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "aa92e5b_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa92e5b_2") : $this->env->getExtension('assets')->getAssetUrl("js/scripts_bootstrap_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "aa92e5b_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa92e5b_3") : $this->env->getExtension('assets')->getAssetUrl("js/scripts_part_4_script_1.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "aa92e5b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa92e5b") : $this->env->getExtension('assets')->getAssetUrl("js/scripts.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 168
        echo "
  </body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
    }

    // line 154
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
        return array (  349 => 154,  344 => 8,  337 => 168,  305 => 166,  301 => 161,  293 => 155,  290 => 154,  284 => 153,  273 => 151,  268 => 150,  264 => 149,  257 => 145,  247 => 138,  243 => 137,  234 => 131,  228 => 128,  222 => 125,  210 => 116,  206 => 115,  197 => 109,  193 => 108,  184 => 102,  180 => 101,  171 => 95,  167 => 94,  158 => 88,  154 => 87,  126 => 62,  120 => 59,  107 => 49,  80 => 25,  73 => 20,  41 => 18,  37 => 12,  30 => 8,  21 => 1,  79 => 26,  74 => 24,  67 => 20,  58 => 16,  51 => 12,  46 => 11,  40 => 9,  38 => 8,  35 => 7,  29 => 3,);
    }
}
