<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_ff64798bbf74580398085c171a7d383d6d318a29933128e50de2847a89a79b09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UserBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 6
        echo "
<form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " method=\"POST\" class=\"form-signin\">
    <h2 class=\"form-signin-heading\" style=\"margin-top: 30px;\">User register</h2>
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    <div>
        <input type=\"submit\" class=\"btn btn-large btn-primary\"  value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Registration", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  23 => 4,  114 => 40,  104 => 34,  76 => 27,  96 => 31,  20 => 1,  349 => 154,  344 => 8,  301 => 161,  293 => 155,  290 => 154,  284 => 153,  257 => 145,  234 => 131,  228 => 128,  210 => 116,  206 => 115,  197 => 109,  184 => 102,  180 => 101,  167 => 94,  53 => 13,  137 => 42,  113 => 37,  160 => 50,  152 => 48,  145 => 45,  139 => 43,  124 => 36,  110 => 32,  100 => 28,  97 => 35,  65 => 23,  90 => 31,  84 => 29,  81 => 20,  52 => 10,  74 => 18,  70 => 25,  472 => 199,  467 => 8,  429 => 211,  425 => 206,  417 => 200,  414 => 199,  408 => 198,  397 => 196,  392 => 195,  388 => 194,  382 => 191,  378 => 190,  351 => 174,  343 => 171,  335 => 168,  329 => 165,  317 => 156,  311 => 155,  300 => 147,  277 => 137,  266 => 129,  260 => 128,  249 => 120,  232 => 111,  226 => 108,  222 => 125,  213 => 104,  195 => 98,  190 => 96,  186 => 95,  181 => 93,  172 => 90,  150 => 47,  126 => 62,  120 => 59,  37 => 7,  118 => 41,  83 => 23,  77 => 26,  58 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 213,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 183,  365 => 111,  362 => 182,  360 => 109,  355 => 106,  341 => 105,  337 => 168,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 166,  298 => 91,  294 => 146,  285 => 89,  283 => 138,  278 => 86,  268 => 150,  264 => 149,  258 => 81,  252 => 80,  247 => 138,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 92,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 39,  107 => 39,  61 => 21,  273 => 151,  269 => 94,  254 => 92,  246 => 90,  243 => 137,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 105,  208 => 102,  204 => 101,  179 => 69,  159 => 86,  143 => 44,  135 => 53,  131 => 52,  119 => 35,  108 => 35,  102 => 32,  71 => 25,  67 => 24,  63 => 21,  59 => 12,  47 => 8,  38 => 8,  94 => 32,  89 => 28,  85 => 21,  79 => 27,  75 => 26,  68 => 23,  56 => 19,  50 => 10,  29 => 5,  87 => 24,  72 => 24,  55 => 11,  21 => 1,  26 => 12,  98 => 33,  93 => 28,  88 => 6,  78 => 22,  46 => 7,  27 => 4,  40 => 8,  44 => 9,  35 => 5,  31 => 4,  43 => 7,  41 => 9,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 95,  166 => 71,  163 => 87,  158 => 88,  156 => 49,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 43,  121 => 39,  117 => 37,  115 => 43,  105 => 29,  101 => 35,  91 => 30,  69 => 23,  66 => 22,  62 => 12,  49 => 11,  24 => 7,  32 => 4,  25 => 3,  22 => 2,  19 => 2,  209 => 82,  203 => 78,  199 => 99,  193 => 108,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 89,  164 => 59,  162 => 59,  154 => 87,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 47,  130 => 39,  125 => 38,  122 => 43,  116 => 34,  112 => 42,  109 => 34,  106 => 33,  103 => 29,  99 => 34,  95 => 27,  92 => 33,  86 => 30,  82 => 29,  80 => 25,  73 => 26,  64 => 22,  60 => 22,  57 => 20,  54 => 20,  51 => 11,  48 => 12,  45 => 8,  42 => 9,  39 => 7,  36 => 7,  33 => 4,  30 => 2,);
    }
}
