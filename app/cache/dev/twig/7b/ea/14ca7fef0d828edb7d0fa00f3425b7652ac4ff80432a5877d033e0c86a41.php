<?php

/* AdminBundle:Default:index.html.twig */
class __TwigTemplate_7bea14ca7fef0d828edb7d0fa00f3425b7652ac4ff80432a5877d033e0c86a41 extends Twig_Template
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
        echo "Admin";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h2 class=\"title\">Admin Control panel</h2>

<section>
    <div class=\"admin-panel\">
        <div class=\"admin-panel-category\">
            <a href=\"#\">Seznam novic in urejanje</a>
            <br /><br />
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("_admin_tours");
        echo "\">Seznam izletov in urejanje</a>
        </div>
        <div class=\"admin-panel-category\">
            <a href=\"#\">Urejanje galerije slik</a>
            <br /><br />
            <a href=\"#\">Urejanje video galerije</a>
        </div>
        <div class=\"admin-panel-category\">
            <a href=\"#\">Pregled naročil in urejanje</a>
            <br /><br />
            <a href=\"#\">Seznam povezav in urejanje</a>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 13,  38 => 6,  35 => 5,  29 => 3,);
    }
}
