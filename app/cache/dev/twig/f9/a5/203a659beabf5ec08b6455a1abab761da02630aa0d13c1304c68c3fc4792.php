<?php

/* StaticBundle:Default:singleNews.html.twig */
class __TwigTemplate_f9a5203a659beabf5ec08b6455a1abab761da02630aa0d13c1304c68c3fc4792 extends Twig_Template
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("Novice", array(), "messages");
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h1 class=\"title title-color\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Novice", array(), "messages");
        echo "</h1>
    <div class=\"border\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/border-top.jpg"), "html", null, true);
        echo "\" alt=\"slika\" width=300/></div>
        <table class=\"table\">
            <tr>
                ";
        // line 10
        if ((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "video")))) {
            // line 11
            echo "                    <td style=\"width: 50%; padding-left: 45px;\">
                ";
        } else {
            // line 13
            echo "                    <td style=\"width: 80%; padding-left: 45px;\">    
                ";
        }
        // line 15
        echo "                    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
        echo "</h2>
                    ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text"), "html", null, true);
        echo "
                    <p style=\"text-align: right;\"><strong>";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "created"), "d.m.Y"), "html", null, true);
        echo "</strong></p>
                    <p class=\"link\">
                        <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("_news");
        echo "\" >";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Nazaj", array(), "messages");
        echo " &raquo;</a>
                    </p>
                </td>
                ";
        // line 22
        $context["counter"] = 0;
        // line 23
        echo "                ";
        if ((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path")))) {
            // line 24
            echo "                ";
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
            // line 25
            echo "                <td>
                    <a class=\"table-image\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("news/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path"), "html", null, true);
            echo "\" data-lightbox=\"Novice-";
            echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("news/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path"), "html", null, true);
            echo "\" alt=\"slika\" width=150/>
                    </a>
                </td>
                ";
        }
        // line 31
        echo "                ";
        if ((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "video")))) {
            // line 32
            echo "                <td style=\"padding-top: 60px;\">
                    <iframe src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "video"), "html", null, true);
            echo "\" style=\"height: 220px; width: 250px;\"></iframe>
                </td>
                ";
        }
        // line 36
        echo "            </tr>
        </table>
    <div class=\"border\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/border-bottom.jpg"), "html", null, true);
        echo "\" alt=\"slika\" width=300/></div>
";
    }

    public function getTemplateName()
    {
        return "StaticBundle:Default:singleNews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 38,  119 => 36,  113 => 33,  110 => 32,  107 => 31,  99 => 27,  92 => 26,  89 => 25,  86 => 24,  83 => 23,  81 => 22,  73 => 19,  68 => 17,  64 => 16,  59 => 15,  55 => 13,  51 => 11,  49 => 10,  43 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
