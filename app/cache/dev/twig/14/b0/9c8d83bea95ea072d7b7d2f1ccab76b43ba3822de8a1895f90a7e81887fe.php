<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_14b09c8d83bea95ea072d7b7d2f1ccab76b43ba3822de8a1895f90a7e81887fe extends Twig_Template
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
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_change_password\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 35,  84 => 27,  81 => 26,  76 => 25,  20 => 1,  53 => 19,  65 => 23,  58 => 21,  77 => 26,  222 => 8,  215 => 77,  185 => 71,  174 => 64,  152 => 60,  148 => 59,  127 => 47,  104 => 39,  100 => 38,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 39,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 64,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 49,  119 => 42,  102 => 32,  71 => 23,  67 => 22,  63 => 21,  59 => 20,  38 => 6,  94 => 31,  89 => 29,  85 => 25,  75 => 24,  68 => 23,  56 => 19,  87 => 25,  21 => 1,  26 => 2,  93 => 31,  88 => 29,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 4,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 2,  79 => 25,  72 => 24,  69 => 24,  47 => 8,  40 => 8,  37 => 6,  22 => 3,  246 => 90,  157 => 61,  145 => 46,  139 => 45,  131 => 48,  123 => 46,  120 => 40,  115 => 43,  111 => 37,  108 => 40,  101 => 32,  98 => 31,  96 => 37,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 18,  50 => 13,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 75,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 63,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 42,  112 => 41,  109 => 34,  106 => 36,  103 => 35,  99 => 33,  95 => 28,  92 => 33,  86 => 30,  82 => 29,  80 => 26,  73 => 25,  64 => 22,  60 => 20,  57 => 20,  54 => 20,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 6,  30 => 8,);
    }
}
