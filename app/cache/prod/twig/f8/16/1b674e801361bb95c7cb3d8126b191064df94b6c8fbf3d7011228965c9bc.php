<?php

/* AdminBundle:Video:videos.html.twig */
class __TwigTemplate_f8161b674e801361bb95c7cb3d8126b191064df94b6c8fbf3d7011228965c9bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UserBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Videos";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h2>Video posnetki</h2>
<a class=\"btn btn-small pull-right\" href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("_admin_add_video");
        echo "\"><i class=\"icon-plus\"></i> Dodaj Video</a>
<table class=\"table table-condensed table-hover border mytable\">
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
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) ? $context["videos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 21
            echo "    <tr>
      <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "id"), "html", null, true);
            echo "</td>
      <td>";
            // line 23
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "title")) > 30)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "title"), 0, 30) . "...")) : ($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "title"))), "html", null, true);
            echo "</td>
      <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "created"), "d.m.Y H:i:s"), "html", null, true);
            echo "</td>
      <td>
          <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "link"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "link")) > 20)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "link"), 0, 20) . "...")) : ($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "link"))), "html", null, true);
            echo "</a>
      </td>
      <td>
          <iframe width=\"100\" height=\"80\"
            src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "link"), "html", null, true);
            echo "\">
          </iframe>
      </td>
      <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_edit_video", array("id" => $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "id"))), "html", null, true);
            echo "\" title=\"Uredi video\">
              <i class=\"icon-edit\"></i>Uredi</a>&nbsp;
              <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_delete_video", array("id" => $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "id"))), "html", null, true);
            echo "\" class=\"confirmation\" title=\"Odstrani video\" data-confirmation=\"Ali si prepričan?\">
                  <i class=\"icon-trash\">Izbriši</i></a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "  </tbody>
</table>

";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Video:videos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 40,  104 => 34,  76 => 27,  96 => 31,  20 => 1,  349 => 154,  344 => 8,  301 => 161,  293 => 155,  290 => 154,  284 => 153,  257 => 145,  234 => 131,  228 => 128,  210 => 116,  206 => 115,  197 => 109,  184 => 102,  180 => 101,  167 => 94,  53 => 13,  137 => 42,  113 => 37,  160 => 50,  152 => 48,  145 => 45,  139 => 43,  124 => 36,  110 => 32,  100 => 28,  97 => 35,  65 => 23,  90 => 31,  84 => 29,  81 => 20,  52 => 10,  74 => 18,  70 => 25,  472 => 199,  467 => 8,  429 => 211,  425 => 206,  417 => 200,  414 => 199,  408 => 198,  397 => 196,  392 => 195,  388 => 194,  382 => 191,  378 => 190,  351 => 174,  343 => 171,  335 => 168,  329 => 165,  317 => 156,  311 => 155,  300 => 147,  277 => 137,  266 => 129,  260 => 128,  249 => 120,  232 => 111,  226 => 108,  222 => 125,  213 => 104,  195 => 98,  190 => 96,  186 => 95,  181 => 93,  172 => 90,  150 => 47,  126 => 62,  120 => 59,  37 => 6,  118 => 41,  83 => 23,  77 => 26,  58 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 213,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 183,  365 => 111,  362 => 182,  360 => 109,  355 => 106,  341 => 105,  337 => 168,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 166,  298 => 91,  294 => 146,  285 => 89,  283 => 138,  278 => 86,  268 => 150,  264 => 149,  258 => 81,  252 => 80,  247 => 138,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 92,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 39,  107 => 39,  61 => 21,  273 => 151,  269 => 94,  254 => 92,  246 => 90,  243 => 137,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 105,  208 => 102,  204 => 101,  179 => 69,  159 => 86,  143 => 44,  135 => 53,  131 => 52,  119 => 35,  108 => 35,  102 => 32,  71 => 25,  67 => 24,  63 => 21,  59 => 12,  47 => 8,  38 => 6,  94 => 32,  89 => 28,  85 => 21,  79 => 27,  75 => 26,  68 => 23,  56 => 19,  50 => 13,  29 => 3,  87 => 24,  72 => 24,  55 => 11,  21 => 1,  26 => 2,  98 => 33,  93 => 28,  88 => 6,  78 => 22,  46 => 7,  27 => 4,  40 => 8,  44 => 10,  35 => 5,  31 => 5,  43 => 7,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 95,  166 => 71,  163 => 87,  158 => 88,  156 => 49,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 43,  121 => 39,  117 => 37,  115 => 43,  105 => 29,  101 => 35,  91 => 30,  69 => 23,  66 => 22,  62 => 12,  49 => 9,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 99,  193 => 108,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 89,  164 => 59,  162 => 59,  154 => 87,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 47,  130 => 39,  125 => 38,  122 => 43,  116 => 34,  112 => 42,  109 => 34,  106 => 33,  103 => 29,  99 => 34,  95 => 27,  92 => 33,  86 => 30,  82 => 29,  80 => 25,  73 => 26,  64 => 22,  60 => 22,  57 => 20,  54 => 20,  51 => 11,  48 => 9,  45 => 8,  42 => 8,  39 => 9,  36 => 5,  33 => 5,  30 => 8,);
    }
}
