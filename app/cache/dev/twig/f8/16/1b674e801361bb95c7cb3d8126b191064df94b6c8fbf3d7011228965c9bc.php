<?php

/* AdminBundle:Video:videos.html.twig */
class __TwigTemplate_f8161b674e801361bb95c7cb3d8126b191064df94b6c8fbf3d7011228965c9bc extends Twig_Template
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
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) ? $context["videos"] : $this->getContext($context, "videos")));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 21
            echo "    <tr>
      <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "id"), "html", null, true);
            echo "</td>
      <td>";
            // line 23
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "title")) > 30)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "title"), 0, 30) . "...")) : ($this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "title"))), "html", null, true);
            echo "</td>
      <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "created"), "d.m.Y H:i:s"), "html", null, true);
            echo "</td>
      <td>
          <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "link"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "link")) > 20)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "link"), 0, 20) . "...")) : ($this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "link"))), "html", null, true);
            echo "</a>
      </td>
      <td>
          <iframe width=\"100\" height=\"80\"
            src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "link"), "html", null, true);
            echo "\">
          </iframe>
      </td>
      <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_edit_video", array("id" => $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "id"))), "html", null, true);
            echo "\" title=\"Uredi video\">
              <i class=\"icon-edit\"></i>Uredi</a>&nbsp;
              <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_delete_video", array("id" => $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "id"))), "html", null, true);
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
        return array (  77 => 26,  84 => 27,  81 => 26,  76 => 25,  20 => 1,  53 => 11,  97 => 35,  70 => 16,  65 => 16,  215 => 8,  178 => 79,  170 => 73,  167 => 72,  161 => 71,  150 => 69,  114 => 52,  110 => 31,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 72,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 39,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 85,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 49,  71 => 23,  67 => 22,  63 => 21,  59 => 14,  38 => 6,  94 => 31,  89 => 29,  85 => 25,  75 => 24,  68 => 23,  56 => 19,  87 => 25,  21 => 1,  26 => 2,  93 => 31,  88 => 29,  78 => 21,  46 => 9,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 56,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 10,  24 => 4,  25 => 3,  19 => 1,  79 => 25,  72 => 24,  69 => 25,  47 => 8,  40 => 8,  37 => 6,  22 => 2,  246 => 90,  157 => 56,  145 => 68,  139 => 45,  131 => 60,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 28,  98 => 48,  96 => 31,  83 => 22,  74 => 19,  66 => 15,  55 => 15,  52 => 10,  50 => 13,  43 => 9,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 83,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 67,  133 => 55,  130 => 41,  125 => 57,  122 => 43,  116 => 34,  112 => 42,  109 => 34,  106 => 30,  103 => 35,  99 => 33,  95 => 28,  92 => 33,  86 => 30,  82 => 22,  80 => 26,  73 => 19,  64 => 22,  60 => 20,  57 => 20,  54 => 11,  51 => 14,  48 => 9,  45 => 8,  42 => 8,  39 => 9,  36 => 5,  33 => 5,  30 => 8,);
    }
}
