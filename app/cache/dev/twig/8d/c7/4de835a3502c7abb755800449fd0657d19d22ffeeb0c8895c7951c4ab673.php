<?php

/* StaticBundle:Default:videos.html.twig */
class __TwigTemplate_8dc74de835a3502c7abb755800449fd0657d19d22ffeeb0c8895c7951c4ab673 extends Twig_Template
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
        echo "Video galerija";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h1 class=\"title\">Video galerija</h1>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) ? $context["videos"] : $this->getContext($context, "videos")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "    <div style=\"border: 10px ridge #707F8E; margin: 5px 5px; padding: 0 5px; width: 46%; float: left; min-height: 150px;\">
        <p style=\"text-align: center;\">
            <iframe width=\"400\" height=\"300\" src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "link"), "html", null, true);
            echo "\" style=\"margin-top: 10px;\"></iframe><br />
            <span style=\"text-align: center\"><strong>";
            // line 11
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "title")) > 50)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "title"), 0, 450) . "...")) : ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "title"))), "html", null, true);
            echo "</strong></span><br />
            <span style=\"text-align: center\">";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "created"), "d.m.Y"), "html", null, true);
            echo "</span>
        </p>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "StaticBundle:Default:videos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  97 => 27,  70 => 16,  65 => 16,  215 => 8,  178 => 79,  170 => 73,  167 => 72,  161 => 71,  150 => 69,  114 => 52,  110 => 31,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 72,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 85,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 49,  71 => 19,  67 => 19,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 11,  87 => 25,  21 => 1,  26 => 6,  93 => 28,  88 => 24,  78 => 21,  46 => 9,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 56,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 10,  24 => 4,  25 => 3,  19 => 1,  79 => 21,  72 => 16,  69 => 25,  47 => 8,  40 => 8,  37 => 12,  22 => 2,  246 => 90,  157 => 56,  145 => 68,  139 => 45,  131 => 60,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 28,  98 => 48,  96 => 31,  83 => 22,  74 => 19,  66 => 15,  55 => 15,  52 => 10,  50 => 10,  43 => 9,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 83,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 67,  133 => 55,  130 => 41,  125 => 57,  122 => 43,  116 => 34,  112 => 42,  109 => 34,  106 => 30,  103 => 32,  99 => 31,  95 => 28,  92 => 25,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 14,  60 => 13,  57 => 12,  54 => 11,  51 => 14,  48 => 9,  45 => 8,  42 => 8,  39 => 9,  36 => 5,  33 => 4,  30 => 8,);
    }
}
