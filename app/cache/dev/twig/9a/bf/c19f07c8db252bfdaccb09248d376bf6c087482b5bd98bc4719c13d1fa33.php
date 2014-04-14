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
      <th style=\"text-align: center;\">Naslov</th>
      <th style=\"text-align: center;\">opis</th>
      <th style=\"text-align: center;\">Slika</th>
      <th style=\"text-align: center;\">Video</th>
      <th style=\"text-align: center;\">Datum vnosa</th>
      <th>&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 21
        $context["counter"] = 0;
        // line 22
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tours"]) ? $context["tours"] : $this->getContext($context, "tours")));
        foreach ($context['_seq'] as $context["_key"] => $context["tour"]) {
            // line 23
            echo "    ";
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
            // line 24
            echo "    <tr>
      <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "id"), "html", null, true);
            echo "</td>
      <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "title"), "html", null, true);
            echo "</td>
      <td>";
            // line 27
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "description")) > 50)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "description"), 0, 50) . "...")) : ($this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "description"))), "html", null, true);
            echo "</td>
      <td>
          <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tour/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "path"), "html", null, true);
            echo "\" data-lightbox=\"Izleti-";
            echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
            echo "\">
            <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tour/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "path"), "html", null, true);
            echo "\" alt=\"slika\" style=\"width: 50px; height: 50px;\"/>
          </a>
      </td>
      <td>
          ";
            // line 34
            if ((!twig_test_empty($this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "video")))) {
                // line 35
                echo "          <iframe src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "video"), "html", null, true);
                echo "\" style=\"height: 80px; width: 100px;\"></iframe>
          ";
            } else {
                // line 37
                echo "          <p style=\"text-align: center;\">Ni videa!</p>
          ";
            }
            // line 39
            echo "      </td>
      <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "created"), "d.m.Y H:i:s"), "html", null, true);
            echo "</td>
      <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_edit_tour", array("id" => $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "id"))), "html", null, true);
            echo "\" title=\"Uredi izlet\">
              <i class=\"icon-edit\"></i>Uredi</a>&nbsp;
              <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_delete_tour", array("id" => $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "id"))), "html", null, true);
            echo "\" class=\"confirmation\" title=\"Odstrani izlet\" data-confirmation=\"Ali si prepričan?\">
                  <i class=\"icon-trash\">Izbriši</i></a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
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
        return array (  133 => 47,  123 => 43,  118 => 41,  114 => 40,  111 => 39,  107 => 37,  101 => 35,  99 => 34,  91 => 30,  84 => 29,  79 => 27,  75 => 26,  71 => 25,  68 => 24,  65 => 23,  60 => 22,  58 => 21,  41 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
