<?php

/* StaticBundle:Default/Email:email.html.twig */
class __TwigTemplate_05a7dc871298ce8567789549c691408e67f47911d5d807dbe7569744ade54361 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "name"), "html", null, true);
        echo "</h2>

<p><b>Ime:</b>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "name"), "html", null, true);
        echo "</p>
";
        // line 4
        if ((!twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "company")))) {
            // line 5
            echo "    <p><b>Podjetje:</b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "company"), "html", null, true);
            echo "</p>
";
        }
        // line 7
        echo "<p><b>Telefon:</b>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "telephone"), "html", null, true);
        echo "</p>
<p><b>Email:</b>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "email"), "html", null, true);
        echo "</p>
<p><b>Vsebina:</b></p>
<p>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "name"), "html", null, true);
        echo "</p>

<p><b>Odgovori:</b>&nbsp;
    <a href=\"mailto:";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "email"), "html", null, true);
        echo "\">info@royaltransfer.com</a>
</p>";
    }

    public function getTemplateName()
    {
        return "StaticBundle:Default/Email:email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  472 => 199,  467 => 8,  429 => 211,  425 => 206,  417 => 200,  414 => 199,  408 => 198,  397 => 196,  392 => 195,  388 => 194,  382 => 191,  378 => 190,  351 => 174,  343 => 171,  335 => 168,  329 => 165,  317 => 156,  311 => 155,  300 => 147,  277 => 137,  266 => 129,  260 => 128,  249 => 120,  232 => 111,  226 => 108,  222 => 107,  213 => 104,  195 => 98,  190 => 96,  186 => 95,  181 => 93,  172 => 90,  150 => 83,  126 => 62,  104 => 41,  100 => 40,  76 => 24,  70 => 19,  58 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 213,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 183,  365 => 111,  362 => 182,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 146,  285 => 89,  283 => 138,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 92,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 49,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 119,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 105,  208 => 102,  204 => 101,  179 => 69,  159 => 86,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 20,  56 => 14,  87 => 25,  21 => 1,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 87,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 17,  49 => 8,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 10,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 59,  115 => 46,  111 => 37,  108 => 42,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 20,  66 => 18,  55 => 11,  52 => 21,  50 => 11,  43 => 7,  41 => 18,  35 => 5,  32 => 4,  29 => 4,  209 => 82,  203 => 78,  199 => 99,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 89,  164 => 59,  162 => 57,  154 => 84,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 29,  82 => 27,  80 => 25,  73 => 20,  64 => 18,  60 => 15,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 8,  39 => 9,  36 => 5,  33 => 4,  30 => 8,);
    }
}
