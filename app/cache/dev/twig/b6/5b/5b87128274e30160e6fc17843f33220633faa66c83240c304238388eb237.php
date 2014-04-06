<?php

/* StaticBundle:Default:inquiry.html.twig */
class __TwigTemplate_b65b5b87128274e30160e6fc17843f33220633faa66c83240c304238388eb237 extends Twig_Template
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
        echo "Povpraševanje";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h1 class=\"title\">Povpraševanje</h1>
<div class=\"border\">
    <form class=\"order_form\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("_add_inquiry");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " novalidate>
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <!--div class=\"form-actions\"-->
            <br />
            <input type=\"submit\" name=\"naroči\" value=\"Pošlji\" class=\"btn btn-primary\">
        <!--/div-->
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "StaticBundle:Default:inquiry.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 3,);
    }
}
