<?php

/* AdminBundle:Form:form_royaltransfer_type.html.twig */
class __TwigTemplate_692a8a1c6c9fa627aace6482ecbd70284c65026ec6d5a685e4b756cf8cc40dd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'dateTimePicker_widget' => array($this, 'block_dateTimePicker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('dateTimePicker_widget', $context, $blocks);
    }

    public function block_dateTimePicker_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " acmeDateTimePicker"))));
        // line 3
        echo "    

        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'errors');
        echo "
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time"), 'errors');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'widget', array("id" => ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_date")));
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time"), 'widget', array("id" => ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_time")));
        echo "
    

";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Form:form_royaltransfer_type.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  291 => 119,  286 => 8,  279 => 132,  253 => 130,  249 => 126,  216 => 115,  212 => 114,  205 => 110,  53 => 11,  110 => 31,  97 => 27,  70 => 16,  65 => 16,  280 => 8,  232 => 118,  226 => 115,  215 => 113,  210 => 112,  206 => 111,  195 => 103,  191 => 102,  170 => 90,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 116,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 127,  241 => 120,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 67,  128 => 66,  107 => 36,  61 => 18,  273 => 129,  269 => 94,  254 => 92,  243 => 123,  240 => 86,  238 => 119,  235 => 117,  230 => 82,  227 => 81,  224 => 71,  221 => 116,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 60,  102 => 52,  71 => 19,  67 => 19,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 16,  87 => 25,  21 => 1,  26 => 2,  93 => 28,  88 => 24,  78 => 21,  46 => 9,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 81,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 35,  105 => 40,  91 => 27,  62 => 23,  49 => 10,  24 => 4,  25 => 3,  19 => 1,  79 => 21,  72 => 16,  69 => 25,  47 => 10,  40 => 8,  37 => 6,  22 => 2,  246 => 90,  157 => 56,  145 => 74,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 59,  111 => 37,  108 => 36,  101 => 28,  98 => 31,  96 => 31,  83 => 22,  74 => 19,  66 => 15,  55 => 15,  52 => 12,  50 => 13,  43 => 9,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 96,  176 => 93,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 80,  149 => 51,  147 => 58,  144 => 49,  141 => 73,  133 => 55,  130 => 41,  125 => 44,  122 => 37,  116 => 41,  112 => 42,  109 => 34,  106 => 53,  103 => 32,  99 => 31,  95 => 28,  92 => 25,  86 => 28,  82 => 22,  80 => 19,  73 => 17,  64 => 14,  60 => 13,  57 => 12,  54 => 11,  51 => 14,  48 => 9,  45 => 8,  42 => 8,  39 => 9,  36 => 5,  33 => 5,  30 => 8,);
    }
}
