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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/Font/Adobe_Caslon Pro.ttf"), "html", null, true);
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
            font-size: 110%;
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
        <div class=\"container\" style=\"margin-top: 10px;\">
            <div class=\"flags\" style=\"position: relative; margin: -10px auto 0 auto; width: 57%;\">
                <a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\" style=\"margin-left: -40px;\">
                    <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/en.gif"), "html", null, true);
        echo "\" alt=\"eng\">
                </a>
                <a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">
                    <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/sl.jpg"), "html", null, true);
        echo "\" alt=\"slo\">
                </a>
                <a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">
                    <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/hr.gif"), "html", null, true);
        echo "\" alt=\"hr\">
                </a>
                <a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">
                    <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/rs.gif"), "html", null, true);
        echo "\" alt=\"srb\">
                </a>
                <a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">
                    <img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/bih.gif"), "html", null, true);
        echo "\" alt=\"bih\">
                </a>
                <a href=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">
                    <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/it.gif"), "html", null, true);
        echo "\" alt=\"ita\">
                </a>
                <a href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">
                    <img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/de.gif"), "html", null, true);
        echo "\" alt=\"nem\">
                </a>
                <a href=\"";
        // line 104
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">
                    <img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/es.gif"), "html", null, true);
        echo "\" alt=\"spa\">
                </a>
                <a href=\"";
        // line 107
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">
                    <img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/fr.gif"), "html", null, true);
        echo "\" alt=\"fr\">
                </a>
            </div>
            <img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/border-top-meni.jpg"), "html", null, true);
        echo "\" alt=\"slika\" style=\"margin-top: -22px;\"/>
            <ul class=\"nav nav2\" style=\"margin: -5px 0 0 30px;\">
              <li style=\"float: left; width: 150px; list-style-type: none; text-align: center;\">
                <a style=\"color: #c6c8c9;\" 
                   onmouseover=\"document.getElementById('div1').style.visibility = 'visible';
                   var audio = document.getElementById('mySoundClip');audio.load();audio.play();\"
                   onmouseout=\"document.getElementById('div1').style.visibility = 'hidden';
                   var audio = document.getElementById('mySoundClip');audio.pause();\"
               href=\"";
        // line 119
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\"><span class=\"main-menu-title title-color\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Domov", array(), "messages");
        echo "</span></a>
                <img id=\"div1\" class=\"image image-meni\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/krona.png"), "html", null, true);
        echo "\" alt=\"eng\">
              </li>
              <li style=\"float: left; width: 150px; list-style-type: none; text-align: center;\">
                  <a style=\"color: #c6c8c9;\"
                     onmouseover=\"document.getElementById('div2').style.visibility = 'visible';
                     var audio = document.getElementById('mySoundClip');audio.load();audio.play();\"
                     onmouseout=\"document.getElementById('div2').style.visibility = 'hidden';
                     var audio = document.getElementById('mySoundClip');audio.pause();\"
                 href=\"";
        // line 128
        echo $this->env->getExtension('routing')->getPath("_about");
        echo "\"><span class=\"main-menu-title title-color\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("O nas", array(), "messages");
        echo "</span></a>
                <img id=\"div2\" class=\"image image-meni\" src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/krona.png"), "html", null, true);
        echo "\" alt=\"eng\">
              </li>
              <li style=\"float: left; width: 150px; list-style-type: none; text-align: center;\">
                  <a style=\"color: #c6c8c9;\"
                     onmouseover=\"document.getElementById('div3').style.visibility = 'visible';
                     var audio = document.getElementById('mySoundClip');audio.load();audio.play();\"
                     onmouseout=\"document.getElementById('div3').style.visibility = 'hidden';
                     var audio = document.getElementById('mySoundClip');audio.pause();\"
                 href=\"";
        // line 137
        echo $this->env->getExtension('routing')->getPath("_news");
        echo "\"><span class=\"main-menu-title title-color\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Novice", array(), "messages");
        echo "</span></a>
                  <img id=\"div3\" class=\"image image-meni\" src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/krona.png"), "html", null, true);
        echo "\" alt=\"eng\">
              </li>
              <li style=\"float: left; width: 150px; list-style-type: none; text-align: center;\">
                  <a style=\"color: #c6c8c9;\"
                     onmouseover=\"document.getElementById('div4').style.visibility = 'visible';
                     var audio = document.getElementById('mySoundClip');audio.load();audio.play();\"
                     onmouseout=\"document.getElementById('div4').style.visibility = 'hidden';
                     var audio = document.getElementById('mySoundClip');audio.pause();\"
                 href=\"";
        // line 146
        echo $this->env->getExtension('routing')->getPath("_tours");
        echo "\"><span class=\"main-menu-title title-color\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Izleti", array(), "messages");
        echo "</span></a>
                  <img id=\"div4\" class=\"image image-meni\" src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/krona.png"), "html", null, true);
        echo "\" alt=\"eng\">
              </li>
              <li style=\"float: left; width: 150px; list-style-type: none; text-align: center;\">
                  <a style=\"color: #c6c8c9;\"
                     onmouseover=\"document.getElementById('div5').style.visibility = 'visible';
                     var audio = document.getElementById('mySoundClip');audio.load();audio.play();\"
                     onmouseout=\"document.getElementById('div5').style.visibility = 'hidden';
                     var audio = document.getElementById('mySoundClip');audio.pause();\"
                 href=\"";
        // line 155
        echo $this->env->getExtension('routing')->getPath("_inquiry");
        echo "\"><span class=\"main-menu-title title-color\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Povpraševanje", array(), "messages");
        echo "</span></a>
                  <img id=\"div5\" style=\"margin-left: 15px;\" class=\"image image-meni\" src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/krona.png"), "html", null, true);
        echo "\" alt=\"eng\">
              </li>
              <li class=\"dropdown\" id=\"div8\"
                  style=\"margin-left: 30px; background-color: transparent; float: left; width: 150px; list-style-type: none; text-align: center;\"  
                  onmouseover=\"document.getElementById('div6').style.visibility = 'visible';
                   var audio = document.getElementById('mySoundClip');audio.load();audio.play();\"
                   onmouseout=\"document.getElementById('div6').style.visibility = 'hidden';
                   var audio = document.getElementById('mySoundClip');audio.pause();\">
                <a style=\"color: #c6c8c9; background-color: none;\" class=\"dropdown-toggle\" id=\"dLabel\" role=\"button\" data-toggle=\"dropdown\" data-target=\"#\" href=\"#\">
                    <span class=\"main-menu-title title-color\">";
        // line 165
        echo $this->env->getExtension('translator')->getTranslator()->trans("Galerija", array(), "messages");
        echo "</span><b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu mydropdown\" role=\"menu\" aria-labelledby=\"dLabel\">
                  <li style=\"text-align: left;\">
                      <a style=\"color: #020202;\" href=\"";
        // line 168
        echo $this->env->getExtension('routing')->getPath("_galery");
        echo "\"><span class=\"main-menu-title title-color\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Galerija slik", array(), "messages");
        echo "</span></a>
                  </li>
                  <li style=\"text-align: left;\">
                      <a style=\"color: #020202;\" href=\"";
        // line 171
        echo $this->env->getExtension('routing')->getPath("_video_galery");
        echo "\"><span class=\"main-menu-title title-color\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Video galerija", array(), "messages");
        echo "</span></a>
                  </li>
                </ul>
                <img id=\"div6\" class=\"image image-meni\" src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/krona.png"), "html", null, true);
        echo "\" alt=\"eng\">
              </li>
              <li style=\"float: left; width: 150px; list-style-type: none; text-align: center; margin-left: -20px;\">
                  <a style=\"color: #c6c8c9;\"
                     onmouseover=\"document.getElementById('div7').style.visibility = 'visible';
                     var audio = document.getElementById('mySoundClip');audio.load();audio.play();\"
                     onmouseout=\"document.getElementById('div7').style.visibility = 'hidden';
                     var audio = document.getElementById('mySoundClip');audio.pause();\"
                 href=\"";
        // line 182
        echo $this->env->getExtension('routing')->getPath("_contact");
        echo "\"><span class=\"main-menu-title\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Kontakt", array(), "messages");
        echo "</span></a>
                  <img id=\"div7\"class=\"image image-meni\" src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/krona.png"), "html", null, true);
        echo "\" alt=\"eng\">
              </li>
            </ul>
        </div>
      </div>
    </div>
    <audio id=\"mySoundClip\">
        <source src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/Music/car.mp3"), "html", null, true);
        echo "\" type=\"audio/ogg\">
        <source src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/Music/car.mp3"), "html", null, true);
        echo "\" type=\"audio/mpeg\">
    </audio>
    <div class=\"container\">
      ";
        // line 194
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 195
            echo "          ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 196
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
            // line 198
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "      ";
        $this->displayBlock('content', $context, $blocks);
        // line 200
        echo "
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    ";
        // line 206
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "aa92e5b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa92e5b_0") : $this->env->getExtension('assets')->getAssetUrl("js/scripts_jquery-1.11.0.min_1.js");
            // line 211
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
        // line 213
        echo "
  </body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
    }

    // line 199
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
        return array (  472 => 199,  467 => 8,  461 => 213,  429 => 211,  425 => 206,  417 => 200,  414 => 199,  408 => 198,  397 => 196,  392 => 195,  388 => 194,  382 => 191,  378 => 190,  368 => 183,  362 => 182,  351 => 174,  343 => 171,  335 => 168,  329 => 165,  317 => 156,  311 => 155,  300 => 147,  294 => 146,  283 => 138,  277 => 137,  266 => 129,  260 => 128,  249 => 120,  243 => 119,  232 => 111,  226 => 108,  222 => 107,  217 => 105,  213 => 104,  208 => 102,  204 => 101,  199 => 99,  195 => 98,  190 => 96,  186 => 95,  181 => 93,  177 => 92,  172 => 90,  168 => 89,  163 => 87,  159 => 86,  154 => 84,  150 => 83,  107 => 49,  80 => 25,  73 => 20,  41 => 18,  37 => 12,  30 => 8,  21 => 1,  149 => 46,  145 => 45,  141 => 44,  134 => 41,  126 => 62,  120 => 59,  117 => 34,  114 => 33,  106 => 29,  99 => 28,  96 => 27,  93 => 26,  90 => 25,  88 => 24,  83 => 22,  76 => 20,  70 => 17,  65 => 16,  61 => 14,  57 => 12,  55 => 11,  51 => 9,  47 => 8,  43 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
