<?php

/* StaticBundle:Default:contact.html.twig */
class __TwigTemplate_926fe9f5a9c779fda473b3cb7c680bdb23a8e7be1e20046df4ba2fa41f476374 extends Twig_Template
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
        echo "Kontakt";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h1 class=\"title\">Kontakt</h1>
<div class=\"border\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/border-top.jpg"), "html", null, true);
        echo "\" alt=\"slika\" width=300/></div>

<div class=\"border\" style=\"width: 40%; padding: 30px;\">
    <p><b>Telefon:</b>&nbsp;+386 70 66 57 18</p>
    <br />
    <p class=\"email\"><b>Email:</b>&nbsp;<a href=\"mailto:info@royaltransfer.com\">info@royaltransfer.com</a></p>
</div>

<div style=\"margin-top: 300px;\" class=\"border\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/border-bottom.jpg"), "html", null, true);
        echo "\" alt=\"slika\" width=300/></div>
";
    }

    public function getTemplateName()
    {
        return "StaticBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 15,  41 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
