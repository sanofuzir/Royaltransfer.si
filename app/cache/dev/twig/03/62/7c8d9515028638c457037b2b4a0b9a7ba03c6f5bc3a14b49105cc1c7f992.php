<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_03627c8d9515028638c457037b2b4a0b9a7ba03c6f5bc3a14b49105cc1c7f992 extends Twig_Template
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
        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 4,  77 => 26,  84 => 27,  81 => 26,  76 => 25,  20 => 1,  53 => 11,  97 => 35,  70 => 16,  65 => 16,  215 => 8,  178 => 79,  170 => 73,  167 => 72,  161 => 71,  150 => 69,  114 => 52,  110 => 31,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 72,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 39,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 85,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 49,  71 => 23,  67 => 22,  63 => 21,  59 => 14,  38 => 6,  94 => 31,  89 => 29,  85 => 25,  75 => 24,  68 => 23,  56 => 19,  87 => 25,  21 => 1,  26 => 2,  93 => 31,  88 => 29,  78 => 21,  46 => 9,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 56,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 10,  24 => 4,  25 => 3,  19 => 2,  79 => 25,  72 => 24,  69 => 25,  47 => 8,  40 => 8,  37 => 6,  22 => 3,  246 => 90,  157 => 56,  145 => 68,  139 => 45,  131 => 60,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 28,  98 => 48,  96 => 31,  83 => 22,  74 => 19,  66 => 15,  55 => 15,  52 => 10,  50 => 13,  43 => 9,  41 => 7,  35 => 5,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 83,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 67,  133 => 55,  130 => 41,  125 => 57,  122 => 43,  116 => 34,  112 => 42,  109 => 34,  106 => 30,  103 => 35,  99 => 33,  95 => 28,  92 => 33,  86 => 30,  82 => 22,  80 => 26,  73 => 19,  64 => 22,  60 => 20,  57 => 20,  54 => 11,  51 => 14,  48 => 9,  45 => 8,  42 => 8,  39 => 9,  36 => 5,  33 => 6,  30 => 8,);
    }
}
