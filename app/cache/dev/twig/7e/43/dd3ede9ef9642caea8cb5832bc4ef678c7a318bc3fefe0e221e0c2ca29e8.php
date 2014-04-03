<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_7e43dd3ede9ef9642caea8cb5832bc4ef678c7a318bc3fefe0e221e0c2ca29e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  222 => 8,  185 => 71,  174 => 64,  152 => 60,  148 => 59,  127 => 47,  104 => 39,  100 => 38,  34 => 7,  23 => 4,  77 => 26,  84 => 27,  81 => 26,  76 => 25,  20 => 1,  53 => 11,  97 => 35,  70 => 16,  65 => 16,  215 => 77,  178 => 79,  170 => 73,  167 => 72,  161 => 71,  150 => 69,  114 => 52,  110 => 31,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 72,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 39,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 64,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 85,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 49,  119 => 42,  102 => 49,  71 => 23,  67 => 19,  63 => 21,  59 => 14,  38 => 8,  94 => 31,  89 => 29,  85 => 25,  75 => 24,  68 => 23,  56 => 19,  87 => 25,  21 => 1,  26 => 12,  93 => 31,  88 => 35,  78 => 21,  46 => 9,  27 => 4,  44 => 9,  31 => 6,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 56,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 11,  24 => 7,  25 => 3,  19 => 2,  79 => 25,  72 => 24,  69 => 25,  47 => 8,  40 => 8,  37 => 12,  22 => 2,  246 => 90,  157 => 61,  145 => 68,  139 => 45,  131 => 48,  123 => 46,  120 => 40,  115 => 43,  111 => 37,  108 => 40,  101 => 28,  98 => 48,  96 => 37,  83 => 22,  74 => 19,  66 => 15,  55 => 15,  52 => 10,  50 => 10,  43 => 9,  41 => 17,  35 => 5,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 75,  187 => 84,  182 => 83,  176 => 64,  173 => 65,  168 => 63,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 67,  133 => 55,  130 => 41,  125 => 57,  122 => 43,  116 => 42,  112 => 41,  109 => 34,  106 => 30,  103 => 35,  99 => 33,  95 => 28,  92 => 36,  86 => 30,  82 => 32,  80 => 26,  73 => 19,  64 => 22,  60 => 20,  57 => 20,  54 => 11,  51 => 14,  48 => 12,  45 => 8,  42 => 9,  39 => 7,  36 => 7,  33 => 4,  30 => 2,);
    }
}
