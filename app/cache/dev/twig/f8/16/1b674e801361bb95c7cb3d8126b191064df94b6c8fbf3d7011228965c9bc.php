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
      ";
            // line 28
            if ((!twig_test_empty($this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "path")))) {
                // line 29
                echo "      <td>
          <video width=\"320\" height=\"240\" controls>
            <source src=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("video/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "path"), "html", null, true);
                echo "\" type=\"video/mp4\">
          </video>
      </td>
      ";
            } else {
                // line 35
                echo "      <td>&nbsp;</td>
      ";
            }
            // line 37
            echo "      <td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_edit_video", array("id" => $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "id"))), "html", null, true);
            echo "\" title=\"Uredi video\">
              <i class=\"icon-edit\"></i>Uredi</a>&nbsp;
              <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_delete_video", array("id" => $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "id"))), "html", null, true);
            echo "\" class=\"confirmation\" title=\"Odstrani video\" data-confirmation=\"Ali si prepričan?\">
                  <i class=\"icon-trash\">Izbriši</i></a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
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
        return array (  118 => 43,  108 => 39,  102 => 37,  98 => 35,  90 => 31,  86 => 29,  84 => 28,  77 => 26,  72 => 24,  68 => 23,  64 => 22,  61 => 21,  57 => 20,  41 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
