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
        echo "About";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h1 class=\"title\">O nas</h1>
<div style=\"text-align: justify;\">
    <br />
    <p style=\"font-size: 120%;\"><b>Dobrodošli na naši spletni strani</b></p>
    
    <p class=\"about\">Smo podjetje, ki je specializirano za opravljanje prevozov v Sloveniji in v tujini. 
        Vedno urejeni vozniki z urejenimi vozili Vam nudijo kvaliteto storitev. 
        Prevozi, ki jih opravljamo so lahko na določene destinacije ali kamorkoli na Vašo željo.</p>
    
    <p class=\"about\">Zagotavljamo hitro odzivnost glede na Vaše potrebe. 
        Z našimi vozili bo vožnja vedno udobna in varna, saj vozila spadajo v višji cenovni razred, 
        prav tako pa tudi v najvišji razred varnosti.
    </p>
    <p class=\"about\">
        Galerijo vozil si lahko ogledate na naši spletni strani. 
        Nudimo tudi enodnevne ali večdnevne najeme vozil z urejenimi vozniki, 
        kateri Vas popeljejo po raznih opravkih ali  sestankih, Vas tam počakajo in na koncu dneva poskrbijo, 
        da prispete varno domov ali v hotel.
    </p>     
    <p class=\"about\">
        Organiziramo tudi izlete po raznih krajih v Sloveniji. 
        Naš voznik Vas na kraju počaka in Vas varno pripelje tudi nazaj. 
        Kraje in zanimive destinacije si lahko ogledate na naši spletni strani.
    </p>     
    <p class=\"about\">
        Za vse informacije nas lahko kontaktirate preko telefona ali elektronske pošte. 
        V najkrajšem možnem času Vas bomo kontaktirali in Vam posredovali željene informacije.
    </p>
    <br />
    <p><b>Zahvaljujemo se Vam za obisk naše spletne strani.</b></p>
</div>
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
        return array (  38 => 6,  35 => 5,  29 => 3,);
    }
}
