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
        echo "    <h1 class=\"title\">Ponujamo izlete na naslednje destinacije:</h1>
    <div class=\"border\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/border-top.jpg"), "html", null, true);
        echo "\" alt=\"slika\" width=300/></div>
";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tours"]) ? $context["tours"] : $this->getContext($context, "tours")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "    <table class=\"table\">
        <tr>
            ";
            // line 11
            if ((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "video")))) {
                // line 12
                echo "                <td style=\"width: 50%; padding-left: 45px;\">
            ";
            } else {
                // line 14
                echo "                <td style=\"width: 80%; padding-left: 45px;\">    
            ";
            }
            // line 16
            echo "                <h2>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "title"), "html", null, true);
            echo "</h2>
                ";
            // line 17
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "description")) > 450)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "description"), 0, 450) . "...")) : ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "description"))), "html", null, true);
            echo "
            </td>
            ";
            // line 19
            $context["counter"] = 0;
            // line 20
            echo "            ";
            if ((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path")))) {
                // line 21
                echo "            ";
                $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
                // line 22
                echo "            <td>
                <a class=\"table-image\" href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tour/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path"), "html", null, true);
                echo "\"  data-lightbox=\"izleti-";
                echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
                echo "\">
                    <img src=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tour/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path"), "html", null, true);
                echo "\" alt=\"slika\" width=150/>
                </a>
            </td>
            ";
            }
            // line 28
            echo "            ";
            if ((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "video")))) {
                // line 29
                echo "            <td style=\"padding-top: 60px;\">
                <iframe src=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "video"), "html", null, true);
                echo "\" style=\"height: 220px; width: 250px;\"></iframe>
            </td>
            ";
            }
            // line 33
            echo "        </tr>
    </table>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo " 
    <div class=\"border\"><img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/border-bottom.jpg"), "html", null, true);
        echo "\" alt=\"slika\" width=300/></div>
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
        return array (  122 => 36,  119 => 35,  111 => 33,  105 => 30,  102 => 29,  99 => 28,  91 => 24,  84 => 23,  81 => 22,  78 => 21,  75 => 20,  73 => 19,  68 => 17,  63 => 16,  59 => 14,  55 => 12,  53 => 11,  49 => 9,  45 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
