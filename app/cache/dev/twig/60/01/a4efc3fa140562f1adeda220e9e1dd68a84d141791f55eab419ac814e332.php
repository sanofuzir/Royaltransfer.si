<?php

/* RoyaltransferCoreBundle:Default:index.html.twig */
class __TwigTemplate_6001a4efc3fa140562f1adeda220e9e1dd68a84d141791f55eab419ac814e332 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("RoyaltransferCoreBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RoyaltransferCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Title";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h2>Vsebina</h2>
<h2>Vsebina</h2>
<h2>Vsebina</h2>
<h2>Vsebina</h2>
<h2>Vsebina</h2>
";
    }

    public function getTemplateName()
    {
        return "RoyaltransferCoreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,);
    }
}
