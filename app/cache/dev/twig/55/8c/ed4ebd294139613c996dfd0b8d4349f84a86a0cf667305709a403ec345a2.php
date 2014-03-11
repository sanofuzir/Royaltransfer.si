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
        echo " » Bookster</title>
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
  </head>

  <body>

    <div class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"navbar-inner\">
        <div class=\"container\">
          <button type=\"button\" class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"brand\" href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">Royaltransfer</a>
          <div class=\"nav-collapse collapse\">
            <ul class=\"nav\">
              <li class=\"active\"><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">Home</a></li>
              <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("_about");
        echo "\">About</a></li>
              <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("_tours");
        echo "\">Izleti</a></li>
              <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("_news");
        echo "\">Novice</a></li>
              <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("_galery");
        echo "\">Galerija slik</a></li>
              <li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("_video_galery");
        echo "\">Video galerija</a></li>
              <li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("_order");
        echo "\">Naročilo transporta</a></li>
              <li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("_contact");
        echo "\">Kontakt</a></li>
              <li class=\"dropdown\">
                <a class=\"dropdown-toggle\" id=\"dLabel\" role=\"button\" data-toggle=\"dropdown\" data-target=\"#\" href=\"#\">Šifranti <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dLabel\">
                  <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">Zvrsti</a></li>
                  <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">Spremljave</a></li>
                  <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">Zasedbe</a></li>
                  <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">Obdobja</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class=\"container\">
      ";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 60
            echo "          ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 61
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
            // line 63
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "      ";
        $this->displayBlock('content', $context, $blocks);
        // line 65
        echo "
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    ";
        // line 71
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7930e18_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7930e18_0") : $this->env->getExtension('assets')->getAssetUrl("js/scripts_jquery-1.9.1_1.js");
            // line 75
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
        // line 77
        echo "
  </body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
    }

    // line 64
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
        return array (  227 => 64,  222 => 8,  215 => 77,  189 => 75,  185 => 71,  177 => 65,  174 => 64,  168 => 63,  157 => 61,  152 => 60,  148 => 59,  135 => 49,  131 => 48,  127 => 47,  123 => 46,  116 => 42,  112 => 41,  104 => 39,  100 => 38,  96 => 37,  92 => 36,  88 => 35,  82 => 32,  67 => 19,  37 => 12,  30 => 8,  21 => 1,  118 => 43,  108 => 40,  102 => 37,  98 => 35,  90 => 31,  86 => 29,  84 => 28,  77 => 26,  72 => 24,  68 => 23,  64 => 22,  61 => 21,  57 => 20,  41 => 17,  38 => 6,  35 => 5,  29 => 3,);
    }
}
