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
        return array (  118 => 47,  83 => 27,  77 => 24,  58 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 43,  107 => 42,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 21,  67 => 19,  63 => 15,  59 => 14,  47 => 9,  38 => 6,  94 => 28,  89 => 30,  85 => 28,  79 => 25,  75 => 17,  68 => 14,  56 => 14,  50 => 11,  29 => 3,  87 => 25,  72 => 16,  55 => 15,  21 => 2,  26 => 6,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  40 => 8,  44 => 12,  35 => 5,  31 => 5,  43 => 7,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 25,  66 => 15,  62 => 17,  49 => 19,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 41,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 22,  64 => 18,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
