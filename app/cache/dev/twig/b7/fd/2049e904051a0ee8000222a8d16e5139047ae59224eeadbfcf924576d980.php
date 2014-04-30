<?php

/* StaticBundle:Default:about.html.twig */
class __TwigTemplate_b7fd2049e904051a0ee8000222a8d16e5139047ae59224eeadbfcf924576d980 extends Twig_Template
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("O nas", array(), "messages");
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h1 class=\"title title-color nov-class\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("O nas", array(), "messages");
        echo "</h1>
<div class=\"border\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/border-top.jpg"), "html", null, true);
        echo "\" alt=\"slika\" width=300/></div>
<div style=\"text-align: justify; padding: 10px 50px;\">
    <br />
    <p style=\"font-size: 120%;\">
        <b>";
        // line 11
        echo $this->env->getExtension('translator')->getTranslator()->trans("Dobrodošli na naši spletni strani", array(), "messages");
        echo "</b></p>
    
    <p class=\"about\">
        ";
        // line 14
        echo $this->env->getExtension('translator')->getTranslator()->trans("Smo podjetje, ki je specializirano za opravljanje prevozov v Sloveniji in v tujini. Vedno urejeni vozniki z urejenimi vozili Vam nudijo kvaliteto storitev. Prevozi, ki jih opravljamo so lahko na določene destinacije ali kamorkoli na Vašo željo.", array(), "messages");
        // line 15
        echo "    </p>
    
    <p class=\"about\">";
        // line 17
        echo $this->env->getExtension('translator')->getTranslator()->trans("Zagotavljamo hitro odzivnost glede na Vaše potrebe.", array(), "messages");
        // line 18
        echo "        ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Z našimi vozili bo vožnja vedno udobna in varna, saj vozila spadajo v višji cenovni razred, prav tako pa tudi v najvišji razred varnosti.", array(), "messages");
        // line 19
        echo "    </p>
    <p class=\"about\">
        ";
        // line 21
        echo $this->env->getExtension('translator')->getTranslator()->trans("Galerijo vozil si lahko ogledate na naši spletni strani. Nudimo tudi enodnevne ali večdnevne najeme vozil z urejenimi vozniki, kateri Vas popeljejo po raznih opravkih ali  sestankih, Vas tam počakajo in na koncu dneva poskrbijo, da prispete varno domov ali v hotel.", array(), "messages");
        // line 22
        echo "    </p>     
    <p class=\"about\">
        ";
        // line 24
        echo $this->env->getExtension('translator')->getTranslator()->trans("Organiziramo tudi izlete po raznih krajih v Sloveniji. Naš voznik Vas na kraju počaka in Vas varno pripelje tudi nazaj. Kraje in zanimive destinacije si lahko ogledate na naši spletni strani.", array(), "messages");
        // line 25
        echo "    </p>     
    <p class=\"about\">
        ";
        // line 27
        echo $this->env->getExtension('translator')->getTranslator()->trans("Za vse informacije nas lahko kontaktirate preko telefona ali elektronske pošte. V najkrajšem možnem času Vas bomo kontaktirali in Vam posredovali željene informacije.", array(), "messages");
        // line 28
        echo "    </p>
    <br />
    <p><b>";
        // line 30
        echo $this->env->getExtension('translator')->getTranslator()->trans("Zahvaljujemo se Vam za obisk naše spletne strani.", array(), "messages");
        echo "</b></p>
</div>
<div class=\"music-element\" style=\"
     width: 50px; 
     height: 30px; 
     position: absolute;
     margin-left: 490px;
     margin-right: auto;
     width:70%;
     \">
    <audio controls autoplay>
      <source src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/Music/music.mp3"), "html", null, true);
        echo "\" type=\"audio/mpeg\">
      <source src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/Music/music.mp3"), "html", null, true);
        echo "\" type=\"audio/ogg\">
      <embed height=\"50\" width=\"50\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/Music/music.mp3"), "html", null, true);
        echo "\">
    </audio>
</div>
    <p>&nbsp;</p>
<div class=\"border\"><img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/border-bottom.jpg"), "html", null, true);
        echo "\" alt=\"slika\" width=300/></div>
";
    }

    public function getTemplateName()
    {
        return "StaticBundle:Default:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 47,  111 => 43,  107 => 42,  103 => 41,  89 => 30,  85 => 28,  83 => 27,  79 => 25,  77 => 24,  73 => 22,  71 => 21,  67 => 19,  64 => 18,  62 => 17,  58 => 15,  56 => 14,  50 => 11,  43 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
