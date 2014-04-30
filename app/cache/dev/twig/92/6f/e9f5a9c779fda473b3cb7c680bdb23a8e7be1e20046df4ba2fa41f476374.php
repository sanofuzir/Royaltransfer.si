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
        echo $this->env->getExtension('translator')->getTranslator()->trans("Kontakt", array(), "messages");
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h1 class=\"title title-color\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Kontakt", array(), "messages");
        echo "</h1>
<div class=\"border\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/border-top.jpg"), "html", null, true);
        echo "\" alt=\"slika\" width=300/></div>

<div class=\"border\" style=\"width: 40%; padding: 30px;\">
    <p><b>";
        // line 10
        echo $this->env->getExtension('translator')->getTranslator()->trans("Telefon", array(), "messages");
        echo ":</b>&nbsp;+386 70 66 57 18</p>
    <br />
    <p class=\"email\"><b>";
        // line 12
        echo $this->env->getExtension('translator')->getTranslator()->trans("Elektronska pošta", array(), "messages");
        echo ":</b>&nbsp;<a href=\"mailto:info@royaltransfer.com\">info@royaltransfer.com</a></p>
</div>

<div style=\"margin-top: 300px;\" class=\"border\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/border-bottom.jpg"), "html", null, true);
        echo "\" alt=\"slika\" width=300/></div>
<div class=\"music-element\" style=\"margin: 550px 0px 0px 500px; width: 50px; height: 30px; position: absolute;\">
    <audio controls autoplay>
      <source src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/Music/music.mp3"), "html", null, true);
        echo "\" type=\"audio/mpeg\">
      <source src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/Music/music.mp3"), "html", null, true);
        echo "\" type=\"audio/ogg\">
      <embed height=\"50\" width=\"50\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/Music/music.mp3"), "html", null, true);
        echo "\">
    </audio>
</div>
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
        return array (  74 => 20,  70 => 19,  66 => 18,  60 => 15,  54 => 12,  49 => 10,  43 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
