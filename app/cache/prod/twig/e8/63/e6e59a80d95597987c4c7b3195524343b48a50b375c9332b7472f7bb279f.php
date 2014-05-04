<?php

/* ::base.html.twig */
class __TwigTemplate_e863e6e59a80d95597987c4c7b3195524343b48a50b375c9332b7472f7bb279f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 106,  212 => 95,  194 => 85,  191 => 84,  185 => 81,  175 => 76,  127 => 64,  34 => 7,  23 => 1,  114 => 40,  104 => 34,  76 => 5,  96 => 31,  20 => 1,  349 => 154,  344 => 8,  301 => 161,  293 => 155,  290 => 154,  284 => 153,  257 => 145,  234 => 131,  228 => 128,  210 => 116,  206 => 115,  197 => 109,  184 => 102,  180 => 79,  167 => 94,  53 => 5,  137 => 42,  113 => 37,  160 => 74,  152 => 48,  145 => 45,  139 => 43,  124 => 36,  110 => 32,  100 => 58,  97 => 57,  65 => 22,  90 => 31,  84 => 29,  81 => 20,  52 => 10,  74 => 24,  70 => 25,  472 => 199,  467 => 8,  429 => 211,  425 => 206,  417 => 200,  414 => 199,  408 => 198,  397 => 196,  392 => 195,  388 => 194,  382 => 191,  378 => 190,  351 => 174,  343 => 171,  335 => 168,  329 => 165,  317 => 156,  311 => 155,  300 => 147,  277 => 137,  266 => 129,  260 => 128,  249 => 120,  232 => 104,  226 => 108,  222 => 100,  213 => 104,  195 => 98,  190 => 96,  186 => 95,  181 => 93,  172 => 90,  150 => 47,  126 => 62,  120 => 59,  37 => 7,  118 => 41,  83 => 23,  77 => 26,  58 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 213,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 183,  365 => 111,  362 => 182,  360 => 109,  355 => 106,  341 => 105,  337 => 168,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 166,  298 => 91,  294 => 146,  285 => 89,  283 => 138,  278 => 86,  268 => 150,  264 => 149,  258 => 81,  252 => 80,  247 => 138,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 92,  169 => 60,  140 => 55,  132 => 67,  128 => 49,  111 => 39,  107 => 39,  61 => 21,  273 => 151,  269 => 94,  254 => 92,  246 => 90,  243 => 137,  240 => 107,  238 => 85,  235 => 105,  230 => 103,  227 => 102,  224 => 101,  221 => 77,  219 => 99,  217 => 98,  208 => 102,  204 => 92,  179 => 69,  159 => 86,  143 => 44,  135 => 53,  131 => 52,  119 => 35,  108 => 61,  102 => 32,  71 => 27,  67 => 20,  63 => 21,  59 => 6,  47 => 12,  38 => 8,  94 => 32,  89 => 28,  85 => 21,  79 => 26,  75 => 26,  68 => 23,  56 => 19,  50 => 10,  29 => 5,  87 => 21,  72 => 24,  55 => 11,  21 => 1,  26 => 12,  98 => 33,  93 => 28,  88 => 6,  78 => 22,  46 => 11,  27 => 5,  40 => 8,  44 => 11,  35 => 7,  31 => 4,  43 => 12,  41 => 8,  28 => 4,  201 => 92,  196 => 86,  183 => 82,  171 => 95,  166 => 71,  163 => 87,  158 => 88,  156 => 73,  151 => 70,  142 => 59,  138 => 54,  136 => 68,  123 => 43,  121 => 39,  117 => 37,  115 => 43,  105 => 29,  101 => 35,  91 => 53,  69 => 11,  66 => 22,  62 => 12,  49 => 14,  24 => 7,  32 => 4,  25 => 3,  22 => 3,  19 => 2,  209 => 82,  203 => 78,  199 => 99,  193 => 108,  189 => 71,  187 => 84,  182 => 80,  176 => 64,  173 => 65,  168 => 89,  164 => 59,  162 => 59,  154 => 87,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 47,  130 => 39,  125 => 38,  122 => 43,  116 => 34,  112 => 62,  109 => 34,  106 => 33,  103 => 59,  99 => 34,  95 => 25,  92 => 24,  86 => 30,  82 => 9,  80 => 25,  73 => 26,  64 => 10,  60 => 22,  57 => 20,  54 => 15,  51 => 15,  48 => 12,  45 => 9,  42 => 10,  39 => 7,  36 => 7,  33 => 6,  30 => 2,);
    }
}
