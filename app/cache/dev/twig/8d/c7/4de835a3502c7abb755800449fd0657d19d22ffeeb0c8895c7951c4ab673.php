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
<table style=\"background-color: #F9D49E;\" class=\"table table-condensed table-hover\">
  <thead>
    <tr>
      <th>Id</th>
      <th>Naslov</th>
      <th>Datum vnosa</th>
      <th>Povezava</th>
      <th>Video</th>
      <th>&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) ? $context["videos"] : $this->getContext($context, "videos")));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 20
            echo "    <tr>
      <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "id"), "html", null, true);
            echo "</td>
      <td>";
            // line 22
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "title")) > 30)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "title"), 0, 30) . "...")) : ($this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "title"))), "html", null, true);
            echo "</td>
      <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "created"), "d.m.Y H:i:s"), "html", null, true);
            echo "</td>
      <td>
          <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "link"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "link")) > 20)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "link"), 0, 20) . "...")) : ($this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "link"))), "html", null, true);
            echo "</a>
      </td>
      <td>
          <iframe width=\"400\" height=\"300\"
            src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "link"), "html", null, true);
            echo "\">
          </iframe>
      </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "  </tbody>
</table>
";
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
        return array (  53 => 19,  65 => 23,  58 => 21,  77 => 25,  222 => 8,  215 => 77,  185 => 71,  174 => 64,  152 => 60,  148 => 59,  127 => 47,  104 => 39,  100 => 38,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 64,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 49,  119 => 42,  102 => 32,  71 => 26,  67 => 25,  63 => 24,  59 => 20,  38 => 6,  94 => 28,  89 => 30,  85 => 25,  75 => 27,  68 => 23,  56 => 22,  87 => 25,  21 => 1,  26 => 6,  93 => 34,  88 => 31,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 28,  72 => 24,  69 => 24,  47 => 9,  40 => 8,  37 => 12,  22 => 2,  246 => 90,  157 => 61,  145 => 46,  139 => 45,  131 => 48,  123 => 46,  120 => 40,  115 => 43,  111 => 37,  108 => 40,  101 => 32,  98 => 31,  96 => 37,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 18,  50 => 10,  43 => 8,  41 => 17,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 75,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 63,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 42,  112 => 41,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 36,  86 => 28,  82 => 29,  80 => 19,  73 => 25,  64 => 22,  60 => 21,  57 => 20,  54 => 20,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 8,);
    }
}
