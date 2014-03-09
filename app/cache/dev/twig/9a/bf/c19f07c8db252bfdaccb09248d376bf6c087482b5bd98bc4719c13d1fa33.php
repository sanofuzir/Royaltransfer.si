<?php

/* AdminBundle:Tour:tours.html.twig */
class __TwigTemplate_9abfc19f07c8db252bfdaccb09248d376bf6c087482b5bd98bc4719c13d1fa33 extends Twig_Template
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
        echo "<h2>Izleti</h2>
<a class=\"btn btn-small pull-right\" href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("_admin_add_tour");
        echo "\"><i class=\"icon-plus\"></i> Dodaj Izlet</a>
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
        return array (  99 => 33,  89 => 29,  84 => 27,  80 => 26,  76 => 25,  72 => 24,  68 => 23,  64 => 22,  61 => 21,  57 => 20,  41 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
