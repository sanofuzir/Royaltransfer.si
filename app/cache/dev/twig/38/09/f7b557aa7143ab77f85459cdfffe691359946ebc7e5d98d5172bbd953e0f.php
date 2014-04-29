<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_3809f7b557aa7143ab77f85459cdfffe691359946ebc7e5d98d5172bbd953e0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  161 => 63,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  422 => 184,  415 => 180,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  348 => 140,  342 => 137,  338 => 135,  325 => 129,  323 => 128,  320 => 127,  315 => 125,  303 => 122,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 94,  233 => 87,  216 => 79,  207 => 75,  200 => 72,  178 => 66,  165 => 60,  153 => 56,  134 => 54,  237 => 106,  212 => 95,  194 => 70,  191 => 67,  185 => 66,  175 => 65,  127 => 64,  34 => 7,  23 => 1,  114 => 40,  77 => 26,  20 => 1,  349 => 154,  344 => 8,  301 => 161,  293 => 155,  290 => 154,  284 => 153,  257 => 145,  234 => 131,  228 => 128,  210 => 116,  206 => 115,  197 => 71,  184 => 102,  180 => 79,  167 => 94,  137 => 42,  113 => 48,  160 => 74,  152 => 48,  124 => 36,  118 => 49,  110 => 32,  97 => 57,  65 => 22,  90 => 27,  84 => 24,  81 => 23,  53 => 12,  472 => 199,  467 => 8,  429 => 188,  425 => 206,  417 => 200,  414 => 199,  408 => 176,  397 => 196,  392 => 195,  388 => 194,  382 => 191,  378 => 190,  351 => 141,  343 => 171,  335 => 134,  329 => 131,  317 => 156,  311 => 155,  300 => 121,  277 => 137,  266 => 129,  260 => 128,  249 => 120,  232 => 104,  226 => 84,  222 => 100,  213 => 78,  195 => 98,  190 => 96,  186 => 95,  181 => 65,  172 => 64,  150 => 55,  126 => 62,  104 => 34,  100 => 39,  76 => 31,  70 => 19,  58 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 213,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 183,  365 => 111,  362 => 182,  360 => 109,  355 => 143,  341 => 105,  337 => 168,  322 => 101,  314 => 99,  312 => 124,  309 => 97,  305 => 166,  298 => 120,  294 => 146,  285 => 89,  283 => 138,  278 => 106,  268 => 150,  264 => 149,  258 => 81,  252 => 80,  247 => 138,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 92,  169 => 60,  140 => 58,  132 => 67,  128 => 49,  107 => 39,  61 => 21,  273 => 151,  269 => 94,  254 => 92,  243 => 137,  240 => 107,  238 => 85,  235 => 105,  230 => 103,  227 => 102,  224 => 101,  221 => 77,  219 => 99,  217 => 98,  208 => 102,  204 => 92,  179 => 69,  159 => 86,  143 => 44,  135 => 53,  119 => 40,  102 => 40,  71 => 27,  67 => 24,  63 => 21,  59 => 14,  38 => 6,  94 => 32,  89 => 28,  85 => 21,  75 => 26,  68 => 23,  56 => 19,  87 => 34,  21 => 1,  26 => 12,  93 => 28,  88 => 6,  78 => 22,  46 => 13,  27 => 3,  44 => 9,  31 => 4,  28 => 4,  201 => 92,  196 => 86,  183 => 82,  171 => 95,  166 => 71,  163 => 87,  158 => 62,  156 => 58,  151 => 59,  142 => 59,  138 => 54,  136 => 68,  121 => 50,  117 => 37,  105 => 34,  91 => 53,  62 => 12,  49 => 14,  24 => 7,  25 => 3,  19 => 1,  79 => 26,  72 => 24,  69 => 24,  47 => 10,  40 => 8,  37 => 7,  22 => 3,  246 => 93,  157 => 56,  145 => 45,  139 => 43,  131 => 52,  123 => 42,  120 => 59,  115 => 46,  111 => 47,  108 => 61,  101 => 35,  98 => 33,  96 => 37,  83 => 33,  74 => 24,  66 => 22,  55 => 16,  52 => 10,  50 => 10,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 73,  199 => 99,  193 => 108,  189 => 71,  187 => 84,  182 => 80,  176 => 63,  173 => 65,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 51,  147 => 54,  144 => 49,  141 => 51,  133 => 47,  130 => 46,  125 => 51,  122 => 43,  116 => 39,  112 => 62,  109 => 34,  106 => 36,  103 => 59,  99 => 31,  95 => 25,  92 => 24,  86 => 30,  82 => 9,  80 => 32,  73 => 20,  64 => 23,  60 => 22,  57 => 20,  54 => 15,  51 => 15,  48 => 12,  45 => 10,  42 => 9,  39 => 7,  36 => 7,  33 => 4,  30 => 3,);
    }
}
