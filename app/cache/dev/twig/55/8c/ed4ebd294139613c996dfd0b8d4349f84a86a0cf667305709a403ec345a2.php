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
        
     </style>
  </head>

  <body>

    <div class=\"navbar navbar-inverse navbar-fixed-top\" style=\"height: 60px;\">
      <div class=\"navbar-inner\">
        <div class=\"container\">
            <ul class=\"nav nav2\" style=\"margin-top: -55px;\">
              <li style=\"float: left; width: 150px; list-style-type: none; text-align: center;\"><a style=\"color: #c6c8c9;\" href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">Domov</a></li>
              <li style=\"float: left; width: 150px; list-style-type: none; text-align: center;\"><a style=\"color: #c6c8c9;\" href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("_about");
        echo "\">O nas</a></li>
              <li style=\"float: left; width: 150px; list-style-type: none; text-align: center;\"><a style=\"color: #c6c8c9;\" href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("_news");
        echo "\">Novice</a></li>
              <li style=\"float: left; width: 150px; list-style-type: none; text-align: center;\"><a style=\"color: #c6c8c9;\" href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("_tours");
        echo "\">Izleti</a></li>
              <li style=\"float: left; width: 150px; list-style-type: none; text-align: center;\"><a style=\"color: #c6c8c9;\" href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("_inquiry");
        echo "\">Povpraševanje</a></li>
              <li class=\"dropdown\" style=\"background-color: transparent; float: left; width: 150px; list-style-type: none; text-align: center;\"  text-align: center;>
                <a style=\"color: #c6c8c9; background-color: none;\" class=\"dropdown-toggle\" id=\"dLabel\" role=\"button\" data-toggle=\"dropdown\" data-target=\"#\" href=\"#\">Galerija <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dLabel\">
                  <li style=\"text-align: left;\"><a style=\"color: #020202;\" href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("_galery");
        echo "\">Galerija slik</a></li>
                  <li style=\"text-align: left;\"><a style=\"color: #020202;\" href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("_video_galery");
        echo "\">Video galerija</a></li>
                </ul>
              </li>
              <li style=\"float: left; width: 150px; list-style-type: none; text-align: center;\"><a style=\"color: #c6c8c9;\" href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("_contact");
        echo "\">Kontakt</a></li>
            </ul>
        </div>
      </div>
    </div>

    <div class=\"container\">
      ";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 68
            echo "          ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 69
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
            // line 71
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "      ";
        $this->displayBlock('content', $context, $blocks);
        // line 73
        echo "
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    ";
        // line 79
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7930e18_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7930e18_0") : $this->env->getExtension('assets')->getAssetUrl("js/scripts_jquery-1.9.1_1.js");
            // line 83
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
        // line 85
        echo "
  </body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
    }

    // line 72
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
        return array (  220 => 72,  215 => 8,  208 => 85,  182 => 83,  178 => 79,  170 => 73,  167 => 72,  161 => 71,  150 => 69,  145 => 68,  141 => 67,  131 => 60,  125 => 57,  121 => 56,  114 => 52,  110 => 51,  106 => 50,  102 => 49,  98 => 48,  67 => 19,  41 => 17,  37 => 12,  30 => 8,  21 => 1,  70 => 16,  61 => 13,  57 => 12,  53 => 11,  49 => 10,  46 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 3,);
    }
}
