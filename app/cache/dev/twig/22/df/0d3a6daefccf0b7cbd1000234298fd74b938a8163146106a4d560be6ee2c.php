<?php

/* SensioDistributionBundle:Configurator:check.html.twig */
class __TwigTemplate_22df0d3a6daefccf0b7cbd1000234298fd74b938a8163146106a4d560be6ee2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
            // line 5
            echo "        <h1>Major Problems that need to be fixed now</h1>
        <p>
            We have detected <strong>";
            // line 7
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors"))), "html", null, true);
            echo "</strong> major problems.
            You <em>must</em> fix them before continuing:
        </p>
        <ol>
            ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "                <li>";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ol>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (twig_length_filter($this->env, (isset($context["minors"]) ? $context["minors"] : $this->getContext($context, "minors")))) {
            // line 18
            echo "        <h1>Some Recommendations</h1>

        <p>
            ";
            // line 21
            if (twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
                // line 22
                echo "            Additionally, we
            ";
            } else {
                // line 24
                echo "            We
            ";
            }
            // line 26
            echo "            have detected some minor problems that we <em>recommend</em> you to fix to have a better Symfony
            experience:

            <ol>
                ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["minors"]) ? $context["minors"] : $this->getContext($context, "minors")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 31
                echo "                    <li>";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </ol>
        </p>

    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if ((!twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors"))))) {
            // line 39
            echo "        <ul class=\"symfony_list\">
            <li><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\">Configure your Symfony Application online</a></li>
        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 327,  308 => 287,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  649 => 462,  634 => 456,  625 => 453,  620 => 451,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  517 => 404,  389 => 160,  386 => 159,  371 => 156,  358 => 151,  345 => 147,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  307 => 128,  302 => 125,  296 => 121,  281 => 114,  276 => 111,  259 => 103,  253 => 100,  155 => 47,  363 => 153,  357 => 123,  332 => 116,  327 => 114,  324 => 113,  321 => 135,  318 => 111,  306 => 286,  291 => 102,  274 => 110,  265 => 105,  263 => 95,  255 => 101,  231 => 83,  202 => 94,  174 => 65,  672 => 345,  668 => 344,  664 => 342,  660 => 464,  651 => 337,  647 => 336,  644 => 335,  640 => 334,  631 => 327,  629 => 454,  626 => 325,  622 => 452,  613 => 320,  609 => 319,  606 => 449,  602 => 317,  593 => 310,  591 => 309,  588 => 308,  585 => 307,  581 => 305,  577 => 303,  569 => 300,  563 => 298,  559 => 296,  557 => 295,  552 => 293,  548 => 292,  545 => 291,  541 => 290,  533 => 284,  531 => 283,  527 => 408,  525 => 280,  522 => 406,  519 => 278,  515 => 276,  509 => 272,  505 => 270,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  479 => 256,  473 => 254,  471 => 253,  465 => 249,  463 => 248,  459 => 246,  454 => 244,  448 => 240,  438 => 236,  436 => 235,  428 => 230,  418 => 224,  412 => 222,  410 => 221,  400 => 214,  383 => 207,  376 => 205,  367 => 339,  353 => 328,  347 => 191,  313 => 183,  304 => 181,  297 => 104,  295 => 178,  288 => 118,  205 => 108,  188 => 90,  170 => 84,  161 => 63,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  422 => 226,  415 => 180,  401 => 172,  394 => 168,  380 => 158,  373 => 156,  361 => 152,  348 => 140,  342 => 137,  338 => 135,  325 => 129,  323 => 128,  320 => 127,  315 => 131,  303 => 106,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 97,  233 => 87,  216 => 79,  207 => 75,  200 => 72,  178 => 59,  165 => 83,  153 => 77,  134 => 39,  237 => 106,  212 => 78,  194 => 68,  191 => 67,  185 => 74,  175 => 58,  127 => 35,  34 => 5,  23 => 1,  114 => 40,  77 => 25,  20 => 1,  349 => 154,  344 => 119,  301 => 161,  293 => 120,  290 => 119,  284 => 153,  257 => 145,  234 => 131,  228 => 128,  210 => 77,  206 => 115,  197 => 69,  184 => 63,  180 => 79,  167 => 94,  137 => 42,  113 => 40,  160 => 74,  152 => 46,  124 => 36,  118 => 49,  110 => 38,  97 => 57,  65 => 17,  90 => 37,  84 => 27,  81 => 23,  53 => 17,  472 => 199,  467 => 8,  429 => 188,  425 => 206,  417 => 200,  414 => 199,  408 => 176,  397 => 213,  392 => 195,  388 => 194,  382 => 191,  378 => 157,  351 => 120,  343 => 146,  335 => 134,  329 => 188,  317 => 185,  311 => 155,  300 => 105,  277 => 137,  266 => 129,  260 => 128,  249 => 120,  232 => 88,  226 => 84,  222 => 83,  213 => 78,  195 => 98,  190 => 76,  186 => 95,  181 => 65,  172 => 57,  150 => 55,  126 => 62,  104 => 37,  100 => 36,  76 => 28,  70 => 26,  58 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 213,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 215,  398 => 129,  393 => 211,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 183,  365 => 197,  362 => 182,  360 => 109,  355 => 329,  341 => 118,  337 => 168,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 166,  298 => 120,  294 => 146,  285 => 175,  283 => 115,  278 => 98,  268 => 150,  264 => 149,  258 => 94,  252 => 80,  247 => 138,  241 => 93,  229 => 87,  220 => 81,  214 => 69,  177 => 92,  169 => 60,  140 => 58,  132 => 67,  128 => 49,  107 => 37,  61 => 23,  273 => 174,  269 => 107,  254 => 92,  243 => 92,  240 => 107,  238 => 85,  235 => 89,  230 => 103,  227 => 86,  224 => 81,  221 => 77,  219 => 99,  217 => 98,  208 => 76,  204 => 92,  179 => 98,  159 => 90,  143 => 51,  135 => 53,  119 => 40,  102 => 33,  71 => 23,  67 => 18,  63 => 21,  59 => 22,  38 => 7,  94 => 21,  89 => 30,  85 => 23,  75 => 28,  68 => 12,  56 => 16,  87 => 33,  21 => 2,  26 => 3,  93 => 38,  88 => 30,  78 => 24,  46 => 14,  27 => 7,  44 => 11,  31 => 4,  28 => 3,  201 => 106,  196 => 92,  183 => 82,  171 => 95,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 59,  138 => 54,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 34,  62 => 16,  49 => 12,  24 => 2,  25 => 3,  19 => 1,  79 => 29,  72 => 21,  69 => 26,  47 => 15,  40 => 11,  37 => 7,  22 => 2,  246 => 136,  157 => 89,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 40,  111 => 47,  108 => 47,  101 => 33,  98 => 34,  96 => 35,  83 => 30,  74 => 22,  66 => 25,  55 => 38,  52 => 12,  50 => 16,  43 => 12,  41 => 19,  35 => 5,  32 => 6,  29 => 3,  209 => 82,  203 => 73,  199 => 93,  193 => 108,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 51,  147 => 75,  144 => 42,  141 => 73,  133 => 47,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 39,  109 => 52,  106 => 51,  103 => 59,  99 => 23,  95 => 39,  92 => 31,  86 => 30,  82 => 26,  80 => 29,  73 => 23,  64 => 24,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 16,  45 => 11,  42 => 8,  39 => 10,  36 => 9,  33 => 6,  30 => 7,);
    }
}
