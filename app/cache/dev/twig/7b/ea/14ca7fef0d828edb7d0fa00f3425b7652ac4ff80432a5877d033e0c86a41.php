<?php

/* AdminBundle:Default:index.html.twig */
class __TwigTemplate_7bea14ca7fef0d828edb7d0fa00f3425b7652ac4ff80432a5877d033e0c86a41 extends Twig_Template
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
        echo "Admin";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h2 class=\"title\">Admin Control panel</h2>

<section>
    <div class=\"border admin-panel\">
        <div class=\"admin-panel-category\">
            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("_admin_news");
        echo "\">Seznam novic in urejanje</a>
            <br /><br />
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("_admin_tours");
        echo "\">Seznam izletov in urejanje</a>
        </div>
        <div class=\"admin-panel-category\">
            <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("_admin_images");
        echo "\">Urejanje galerije slik</a>
            <br /><br />
            <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("_admin_videos");
        echo "\">Urejanje video galerije</a>
        </div>
        <div class=\"admin-panel-category\">
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("_admin_inquirys");
        echo "\">Pregled naročil in urejanje</a>
            <br /><br /><br />
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
        return array (  67 => 21,  61 => 18,  56 => 16,  50 => 13,  45 => 11,  38 => 6,  35 => 5,  29 => 3,);
    }
}
