<?php

/* StaticBundle:Default:tours.html.twig */
class __TwigTemplate_71007bd3983e2d01c95716e3760a7f13fe4ddebf14f9c6d7bdaf8173ba12094c extends Twig_Template
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("Izleti", array(), "messages");
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1 class=\"title title-color\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Ponujamo izlet na naslednjo destinacijo", array(), "messages");
        echo ":</h1>
    <div class=\"border\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/border-top.jpg"), "html", null, true);
        echo "\" alt=\"slika\" width=300/></div>
";
        // line 8
        if ((!twig_test_empty((isset($context["tours"]) ? $context["tours"] : $this->getContext($context, "tours"))))) {
            // line 9
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tours"]) ? $context["tours"] : $this->getContext($context, "tours")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 10
                echo "        <table class=\"table\">
            <tr>
                ";
                // line 12
                if ((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "video")))) {
                    // line 13
                    echo "                    <td style=\"width: 50%; padding-left: 45px;\">
                ";
                } else {
                    // line 15
                    echo "                    <td style=\"width: 80%; padding-left: 45px;\">    
                ";
                }
                // line 17
                echo "                    <h2>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "title"), "html", null, true);
                echo "</h2>
                    ";
                // line 18
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "description")) > 450)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "description"), 0, 450) . "...")) : ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "description"))), "html", null, true);
                echo "
                    <br />
                    <p class=\"link\">
                        <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_single_tour", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
                echo "\" >";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Več", array(), "messages");
                echo "...&raquo;</a>
                    </p>
                </td>
                ";
                // line 24
                $context["counter"] = 0;
                // line 25
                echo "                ";
                if ((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path")))) {
                    // line 26
                    echo "                ";
                    $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
                    // line 27
                    echo "                <td>
                    <a class=\"table-image\" href=\"";
                    // line 28
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tour/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path"), "html", null, true);
                    echo "\"  data-lightbox=\"izleti-";
                    echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
                    echo "\">
                        <img src=\"";
                    // line 29
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tour/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path"), "html", null, true);
                    echo "\" alt=\"slika\" width=150/>
                    </a>
                </td>
                ";
                }
                // line 33
                echo "                ";
                if ((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "video")))) {
                    // line 34
                    echo "                <td style=\"padding-top: 60px;\">
                    <iframe src=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "video"), "html", null, true);
                    echo "\" style=\"height: 220px; width: 250px;\"></iframe>
                </td>
                ";
                }
                // line 38
                echo "            </tr>
        </table>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo " 
";
        } else {
            // line 42
            echo "    <p style=\"padding: 30px 0px 0px 100px; margin-bottom: 400px;\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Izleti so v izdelavi", array(), "messages");
            echo "</p>
";
        }
        // line 44
        echo "    <div class=\"border\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/border-bottom.jpg"), "html", null, true);
        echo "\" alt=\"slika\" width=300/></div>
    <div class=\"music-element\" style=\"margin: 550px 0px 0px 500px; width: 50px; height: 30px; position: absolute;\">
        <audio controls autoplay>
          <source src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/Music/music.mp3"), "html", null, true);
        echo "\" type=\"audio/mpeg\">
          <source src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/Music/music.mp3"), "html", null, true);
        echo "\" type=\"audio/ogg\">
          <embed height=\"50\" width=\"50\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/Music/music.mp3"), "html", null, true);
        echo "\">
        </audio>
    </div>
";
    }

    public function getTemplateName()
    {
        return "StaticBundle:Default:tours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 42,  113 => 33,  160 => 50,  152 => 48,  124 => 36,  118 => 34,  110 => 32,  97 => 28,  65 => 17,  90 => 27,  84 => 25,  81 => 24,  53 => 13,  472 => 199,  467 => 8,  429 => 211,  425 => 206,  417 => 200,  414 => 199,  408 => 198,  397 => 196,  392 => 195,  388 => 194,  382 => 191,  378 => 190,  351 => 174,  343 => 171,  335 => 168,  329 => 165,  317 => 156,  311 => 155,  300 => 147,  277 => 137,  266 => 129,  260 => 128,  249 => 120,  232 => 111,  226 => 108,  222 => 107,  213 => 104,  195 => 98,  190 => 96,  186 => 95,  181 => 93,  172 => 90,  150 => 47,  126 => 62,  104 => 41,  100 => 28,  76 => 24,  70 => 20,  58 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 213,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 183,  365 => 111,  362 => 182,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 146,  285 => 89,  283 => 138,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 92,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 31,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 119,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 105,  208 => 102,  204 => 101,  179 => 69,  159 => 86,  143 => 44,  135 => 53,  119 => 35,  102 => 32,  71 => 20,  67 => 15,  63 => 15,  59 => 15,  38 => 6,  94 => 26,  89 => 25,  85 => 25,  75 => 17,  68 => 17,  56 => 14,  87 => 24,  21 => 1,  26 => 6,  93 => 28,  88 => 6,  78 => 22,  46 => 7,  27 => 4,  44 => 10,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 87,  158 => 49,  156 => 49,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 39,  117 => 37,  105 => 29,  91 => 27,  62 => 12,  49 => 9,  24 => 4,  25 => 3,  19 => 1,  79 => 21,  72 => 15,  69 => 17,  47 => 8,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 45,  139 => 43,  131 => 52,  123 => 38,  120 => 59,  115 => 46,  111 => 34,  108 => 33,  101 => 32,  98 => 28,  96 => 31,  83 => 23,  74 => 18,  66 => 18,  55 => 13,  52 => 12,  50 => 11,  43 => 7,  41 => 18,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 99,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 89,  164 => 59,  162 => 57,  154 => 48,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 40,  130 => 39,  125 => 38,  122 => 43,  116 => 34,  112 => 42,  109 => 34,  106 => 36,  103 => 29,  99 => 27,  95 => 27,  92 => 26,  86 => 24,  82 => 27,  80 => 21,  73 => 18,  64 => 15,  60 => 13,  57 => 11,  54 => 10,  51 => 11,  48 => 9,  45 => 17,  42 => 8,  39 => 9,  36 => 5,  33 => 4,  30 => 8,);
    }
}
