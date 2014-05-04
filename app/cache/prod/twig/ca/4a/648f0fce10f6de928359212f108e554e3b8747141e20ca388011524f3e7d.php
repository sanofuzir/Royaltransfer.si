<?php

/* StaticBundle:Email:email.html.twig */
class __TwigTemplate_ca4a648f0fce10f6de928359212f108e554e3b8747141e20ca388011524f3e7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h2>Prejeli ste povpraševanje od osebe ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "name"), "html", null, true);
        echo "</h2>

<p><b>Ime:</b>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "name"), "html", null, true);
        echo "</p>
";
        // line 4
        if ((!twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "company")))) {
            // line 5
            echo "    <p><b>Podjetje:</b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "company"), "html", null, true);
            echo "</p>
";
        }
        // line 7
        echo "<p><b>Telefon:</b>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "telephone"), "html", null, true);
        echo "</p>
<p><b>Email:</b>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "email"), "html", null, true);
        echo "</p>
<p><b>Vsebina:</b></p>
<p>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "name"), "html", null, true);
        echo "</p>

<p><b>Odgovori:</b>&nbsp;
    <a href=\"mailto:";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "email"), "html", null, true);
        echo "\">info@royaltransfer.com</a>
</p>";
    }

    public function getTemplateName()
    {
        return "StaticBundle:Email:email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  137 => 42,  113 => 33,  160 => 50,  152 => 48,  145 => 45,  139 => 43,  124 => 36,  110 => 32,  100 => 28,  97 => 28,  65 => 17,  90 => 27,  84 => 25,  81 => 20,  52 => 10,  74 => 18,  70 => 20,  472 => 199,  467 => 8,  429 => 211,  425 => 206,  417 => 200,  414 => 199,  408 => 198,  397 => 196,  392 => 195,  388 => 194,  382 => 191,  378 => 190,  351 => 174,  343 => 171,  335 => 168,  329 => 165,  317 => 156,  311 => 155,  300 => 147,  277 => 137,  266 => 129,  260 => 128,  249 => 120,  232 => 111,  226 => 108,  222 => 107,  213 => 104,  195 => 98,  190 => 96,  186 => 95,  181 => 93,  172 => 90,  150 => 47,  126 => 62,  120 => 59,  37 => 7,  118 => 34,  83 => 23,  77 => 24,  58 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 213,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 183,  365 => 111,  362 => 182,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 146,  285 => 89,  283 => 138,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 92,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 34,  107 => 31,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 119,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 105,  208 => 102,  204 => 101,  179 => 69,  159 => 86,  143 => 44,  135 => 53,  131 => 52,  119 => 35,  108 => 33,  102 => 32,  71 => 20,  67 => 19,  63 => 13,  59 => 12,  47 => 10,  38 => 6,  94 => 26,  89 => 22,  85 => 21,  79 => 21,  75 => 17,  68 => 17,  56 => 14,  50 => 11,  29 => 4,  87 => 24,  72 => 16,  55 => 11,  21 => 1,  26 => 6,  98 => 28,  93 => 28,  88 => 6,  78 => 22,  46 => 7,  27 => 4,  40 => 8,  44 => 10,  35 => 5,  31 => 5,  43 => 7,  41 => 18,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 87,  158 => 49,  156 => 49,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 38,  121 => 39,  117 => 37,  115 => 43,  105 => 29,  101 => 32,  91 => 27,  69 => 17,  66 => 18,  62 => 12,  49 => 9,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 99,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 89,  164 => 59,  162 => 59,  154 => 48,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 40,  130 => 39,  125 => 38,  122 => 43,  116 => 34,  112 => 42,  109 => 34,  106 => 33,  103 => 29,  99 => 27,  95 => 27,  92 => 26,  86 => 24,  82 => 22,  80 => 21,  73 => 18,  64 => 15,  60 => 13,  57 => 11,  54 => 10,  51 => 11,  48 => 9,  45 => 8,  42 => 8,  39 => 9,  36 => 5,  33 => 4,  30 => 8,);
    }
}
