<?php

/* StaticBundle:Default:tours.html.twig */
class __TwigTemplate_71007bd3983e2d01c95716e3760a7f13fe4ddebf14f9c6d7bdaf8173ba12094c extends Twig_Template
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
        echo "Izleti";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h1 class=\"title\">Izleti</h1>
<div>
    <p>Ponujamo izlete na naslednje destinacije:</p>

<table style=\"background-color: #F9D49E;\" class=\"table table-condensed table-hover\">
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
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tours"]) ? $context["tours"] : $this->getContext($context, "tours")));
        foreach ($context['_seq'] as $context["_key"] => $context["tour"]) {
            // line 23
            echo "    <tr>
      <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "id"), "html", null, true);
            echo "</td>
      <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "title"), "html", null, true);
            echo "</td>
      <td>";
            // line 26
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "description")) > 50)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "description"), 0, 50) . "...")) : ($this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "description"))), "html", null, true);
            echo "</td>
      <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "date"), "d.m.Y"), "html", null, true);
            echo "</td>
      <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "created"), "d.m.Y H:i:s"), "html", null, true);
            echo "</td>
      <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_edit_tour", array("id" => $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "id"))), "html", null, true);
            echo "\" title=\"Uredi izlet\">
              <i class=\"icon-edit\"></i>Uredi</a>&nbsp;
              <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_delete_tour", array("id" => $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "id"))), "html", null, true);
            echo "\" class=\"confirmation\" title=\"Odstrani izlet\" data-confirmation=\"Ali si prepričan?\">
                  <i class=\"icon-trash\">Izbriši</i></a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "  </tbody>
</table>
</div>
";
    }

    public function getTemplateName()
    {
        return "StaticBundle:Default:tours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 35,  88 => 31,  83 => 29,  79 => 28,  75 => 27,  71 => 26,  67 => 25,  63 => 24,  60 => 23,  56 => 22,  38 => 6,  35 => 5,  29 => 3,);
    }
}
