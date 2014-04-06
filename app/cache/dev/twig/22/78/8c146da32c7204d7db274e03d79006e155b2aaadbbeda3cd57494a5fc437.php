<?php

/* StaticBundle:Default:index.html.twig */
class __TwigTemplate_22788c146da32c7204d7db274e03d79006e155b2aaadbbeda3cd57494a5fc437 extends Twig_Template
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
        echo "Index";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"center\">
    <div class=\"flags\" style=\"position: relative; margin-top: 15px;>
        <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">
            <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/eng.png"), "html", null, true);
        echo "\" alt=\"eng\">
        </a>
        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">
            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/slo.gif"), "html", null, true);
        echo "\" alt=\"slo\">
        </a>
        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">
            <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/hr.jpg"), "html", null, true);
        echo "\" alt=\"hr\">
        </a>
        <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">
            <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/srb.jpg"), "html", null, true);
        echo "\" alt=\"srb\">
        </a>
        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">
            <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/bih.gif"), "html", null, true);
        echo "\" alt=\"bih\">
        </a>
        <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">
            <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/ita.jpg"), "html", null, true);
        echo "\" alt=\"ita\">
        </a>
        <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">
            <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/nem.jpg"), "html", null, true);
        echo "\" alt=\"nem\">
        </a>
        <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">
            <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/spa.jpg"), "html", null, true);
        echo "\" alt=\"spa\">
        </a>
    </div>
    <div class=\"rotate\" style=\"padding-top: 250px;\">
        <img style=\"margin-top: 10px;\" class=\"image\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/krona.png"), "html", null, true);
        echo "\" alt=\"index\">
    </div>
    <img style=\"width: 100%; margin-top: -300px;\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/index.jpg"), "html", null, true);
        echo "\" alt=\"index\">
</div>
";
    }

    public function getTemplateName()
    {
        return "StaticBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 37,  117 => 35,  110 => 31,  106 => 30,  101 => 28,  97 => 27,  92 => 25,  88 => 24,  83 => 22,  79 => 21,  74 => 19,  70 => 18,  65 => 16,  61 => 15,  56 => 13,  52 => 12,  47 => 10,  43 => 9,  38 => 6,  35 => 5,  29 => 3,);
    }
}
