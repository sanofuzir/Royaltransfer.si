<?php

/* StaticBundle:Default:singleTour.html.twig */
class __TwigTemplate_3608adabf1f7fe508f77962085333a64d41584be0a2aaa6a0d6a5e08ec12e758 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("StaticBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "StaticBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("Izleti", array(), "messages");
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1 class=\"title title-color\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Ponujamo izlet na naslednjo destinacijo", array(), "messages");
        echo ":</h1>
    <div class=\"border\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/border-top.jpg"), "html", null, true);
        echo "\" alt=\"slika\" width=300/></div>

    <table class=\"table\">
        <tr>
            ";
        // line 11
        if ((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "video")))) {
            // line 12
            echo "                <td style=\"width: 50%; padding-left: 45px;\">
            ";
        } else {
            // line 14
            echo "                <td style=\"width: 80%; padding-left: 45px;\">    
            ";
        }
        // line 16
        echo "                <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title"), "html", null, true);
        echo "</h2>
                ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "description"), "html", null, true);
        echo "
                <br />
                <p class=\"link\">
                    <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("_news");
        echo "\" >";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Nazaj", array(), "messages");
        echo " &raquo;</a>
                </p>
            </td>
            ";
        // line 23
        $context["counter"] = 0;
        // line 24
        echo "            ";
        if ((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path")))) {
            // line 25
            echo "            ";
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : null) + 1);
            // line 26
            echo "            <td>
                <a class=\"table-image\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tour/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path"), "html", null, true);
            echo "\"  data-lightbox=\"izleti-";
            echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : null), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tour/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path"), "html", null, true);
            echo "\" alt=\"slika\" width=150/>
                </a>
            </td>
            ";
        }
        // line 32
        echo "            ";
        if ((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "video")))) {
            // line 33
            echo "            <td style=\"padding-top: 60px;\">
                <iframe src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "video"), "html", null, true);
            echo "\" style=\"height: 220px; width: 250px;\"></iframe>
            </td>
            ";
        }
        // line 37
        echo "        </tr>
    </table>
    <div class=\"border\"><img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/border-bottom.jpg"), "html", null, true);
        echo "\" alt=\"slika\" width=300/></div>
";
    }

    public function getTemplateName()
    {
        return "StaticBundle:Default:singleTour.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 33,  160 => 50,  152 => 48,  145 => 45,  139 => 43,  124 => 36,  110 => 32,  100 => 28,  97 => 28,  65 => 17,  90 => 27,  84 => 25,  81 => 24,  52 => 12,  74 => 18,  70 => 20,  472 => 199,  467 => 8,  429 => 211,  425 => 206,  417 => 200,  414 => 199,  408 => 198,  397 => 196,  392 => 195,  388 => 194,  382 => 191,  378 => 190,  351 => 174,  343 => 171,  335 => 168,  329 => 165,  317 => 156,  311 => 155,  300 => 147,  277 => 137,  266 => 129,  260 => 128,  249 => 120,  232 => 111,  226 => 108,  222 => 107,  213 => 104,  195 => 98,  190 => 96,  186 => 95,  181 => 93,  172 => 90,  150 => 83,  126 => 62,  120 => 59,  37 => 12,  118 => 34,  83 => 23,  77 => 24,  58 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 213,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 183,  365 => 111,  362 => 182,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 146,  285 => 89,  283 => 138,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 92,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 34,  107 => 31,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 119,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 105,  208 => 102,  204 => 101,  179 => 69,  159 => 86,  143 => 56,  135 => 53,  131 => 52,  119 => 36,  108 => 33,  102 => 32,  71 => 20,  67 => 19,  63 => 15,  59 => 15,  47 => 8,  38 => 6,  94 => 26,  89 => 25,  85 => 28,  79 => 23,  75 => 17,  68 => 17,  56 => 14,  50 => 11,  29 => 3,  87 => 26,  72 => 15,  55 => 13,  21 => 1,  26 => 6,  98 => 24,  93 => 28,  88 => 6,  78 => 22,  46 => 7,  27 => 4,  40 => 8,  44 => 10,  35 => 5,  31 => 5,  43 => 7,  41 => 18,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 87,  158 => 67,  156 => 49,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 38,  121 => 39,  117 => 37,  115 => 43,  105 => 32,  101 => 32,  91 => 27,  69 => 17,  66 => 18,  62 => 12,  49 => 10,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 99,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 89,  164 => 59,  162 => 59,  154 => 84,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 39,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 29,  99 => 27,  95 => 28,  92 => 26,  86 => 24,  82 => 22,  80 => 21,  73 => 19,  64 => 16,  60 => 16,  57 => 11,  54 => 10,  51 => 11,  48 => 9,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 8,);
    }
}
