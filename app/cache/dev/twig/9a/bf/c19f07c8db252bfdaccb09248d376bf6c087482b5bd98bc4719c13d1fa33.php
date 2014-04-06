<?php

/* AdminBundle:Tour:tours.html.twig */
class __TwigTemplate_9abfc19f07c8db252bfdaccb09248d376bf6c087482b5bd98bc4719c13d1fa33 extends Twig_Template
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
        echo "Izleti";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h2>Izleti</h2>
<a class=\"btn btn-small pull-right\" href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("_admin_add_tour");
        echo "\"><i class=\"icon-plus\"></i> Dodaj Izlet</a>
<table class=\"table table-condensed table-hover border mytable\">
  <thead>
    <tr>
      <th>Id</th>
      <th>Naslov</th>
      <th>opis</th>
      <th>Datum</th>
      <th>Datum vnosa</th>
      <th>&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tours"]) ? $context["tours"] : $this->getContext($context, "tours")));
        foreach ($context['_seq'] as $context["_key"] => $context["tour"]) {
            // line 21
            echo "    <tr>
      <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "id"), "html", null, true);
            echo "</td>
      <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "title"), "html", null, true);
            echo "</td>
      <td>";
            // line 24
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "description")) > 50)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "description"), 0, 50) . "...")) : ($this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "description"))), "html", null, true);
            echo "</td>
      <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "date"), "d.m.Y"), "html", null, true);
            echo "</td>
      <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "created"), "d.m.Y H:i:s"), "html", null, true);
            echo "</td>
      <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_edit_tour", array("id" => $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "id"))), "html", null, true);
            echo "\" title=\"Uredi izlet\">
              <i class=\"icon-edit\"></i>Uredi</a>&nbsp;
              <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_delete_tour", array("id" => $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "id"))), "html", null, true);
            echo "\" class=\"confirmation\" title=\"Odstrani izlet\" data-confirmation=\"Ali si prepričan?\">
                  <i class=\"icon-trash\">Izbriši</i></a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "  </tbody>
</table>

";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Tour:tours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 27,  81 => 26,  76 => 25,  20 => 1,  291 => 119,  286 => 8,  279 => 132,  253 => 130,  249 => 126,  216 => 115,  212 => 114,  205 => 110,  53 => 11,  110 => 31,  97 => 27,  70 => 16,  65 => 16,  280 => 8,  232 => 118,  226 => 115,  215 => 113,  210 => 112,  206 => 111,  195 => 103,  191 => 102,  170 => 90,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 116,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 127,  241 => 120,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 67,  128 => 66,  107 => 36,  61 => 21,  273 => 129,  269 => 94,  254 => 92,  243 => 123,  240 => 86,  238 => 119,  235 => 117,  230 => 82,  227 => 81,  224 => 71,  221 => 116,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 60,  102 => 52,  71 => 23,  67 => 22,  63 => 21,  59 => 14,  38 => 6,  94 => 31,  89 => 29,  85 => 25,  75 => 24,  68 => 23,  56 => 19,  87 => 25,  21 => 1,  26 => 2,  93 => 31,  88 => 29,  78 => 21,  46 => 9,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 81,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 35,  105 => 40,  91 => 27,  62 => 23,  49 => 10,  24 => 4,  25 => 3,  19 => 1,  79 => 25,  72 => 24,  69 => 25,  47 => 8,  40 => 8,  37 => 6,  22 => 2,  246 => 90,  157 => 56,  145 => 74,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 59,  111 => 37,  108 => 36,  101 => 28,  98 => 31,  96 => 31,  83 => 22,  74 => 19,  66 => 15,  55 => 15,  52 => 12,  50 => 13,  43 => 9,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 96,  176 => 93,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 80,  149 => 51,  147 => 58,  144 => 49,  141 => 73,  133 => 55,  130 => 41,  125 => 44,  122 => 37,  116 => 41,  112 => 42,  109 => 34,  106 => 53,  103 => 35,  99 => 33,  95 => 28,  92 => 25,  86 => 28,  82 => 22,  80 => 26,  73 => 17,  64 => 22,  60 => 20,  57 => 20,  54 => 11,  51 => 14,  48 => 9,  45 => 8,  42 => 8,  39 => 9,  36 => 5,  33 => 5,  30 => 8,);
    }
}
