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
    <div style=\"margin: 50px 0px 0px 30px; width: 50px; height: 30px;\">
        <audio controls>
          <source src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/Music/music.mp3"), "html", null, true);
        echo "\" type=\"audio/mpeg\">
          <source src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/Music/music.mp3"), "html", null, true);
        echo "\" type=\"audio/ogg\">
          <embed height=\"50\" width=\"50\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/Music/music.mp3"), "html", null, true);
        echo "\">
        </audio>
    </div>
    <div class=\"flags\" style=\"position: relative; margin-top: -30px;\">
        <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">
            <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/eng.png"), "html", null, true);
        echo "\" alt=\"eng\">
        </a>
        <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">
            <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/slo.gif"), "html", null, true);
        echo "\" alt=\"slo\">
        </a>
        <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">
            <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/hr.jpg"), "html", null, true);
        echo "\" alt=\"hr\">
        </a>
        <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">
            <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/srb.jpg"), "html", null, true);
        echo "\" alt=\"srb\">
        </a>
        <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">
            <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/bih.gif"), "html", null, true);
        echo "\" alt=\"bih\">
        </a>
        <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">
            <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/ita.jpg"), "html", null, true);
        echo "\" alt=\"ita\">
        </a>
        <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">
            <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/nem.jpg"), "html", null, true);
        echo "\" alt=\"nem\">
        </a>
        <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">
            <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/spa.jpg"), "html", null, true);
        echo "\" alt=\"spa\">
        </a>
    </div>
    <div class=\"rotate\" style=\"padding-top: 250px;\">
        <img style=\"margin-top: 10px;\" class=\"image\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/krona.png"), "html", null, true);
        echo "\" alt=\"index\">
    </div>
    <img style=\"width: 100%; margin-top: -300px;\" src=\"";
        // line 44
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
        return array (  138 => 44,  133 => 42,  126 => 38,  122 => 37,  117 => 35,  113 => 34,  108 => 32,  104 => 31,  99 => 29,  95 => 28,  90 => 26,  86 => 25,  81 => 23,  77 => 22,  72 => 20,  68 => 19,  63 => 17,  59 => 16,  52 => 12,  48 => 11,  44 => 10,  38 => 6,  35 => 5,  29 => 3,);
    }
}
