<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_eb9d7d57ad08bec996228bdced652b8b55919b4f8d3aa84d46e9031fa62a9ab1 extends Twig_Template
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
        echo "Login";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 9
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 11
        echo "    <form class=\"form-signin\" action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
        <h2 class=\"form-signin-heading\" style=\"margin-top: 30px;\">Login</h2>
        <p>
            <span>Username:</span>
            <input type=\"text\" class=\"input-block-level\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Username", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
        </p>
        <p>
            <span>Password:</span>
            <input type=\"password\" class=\"input-block-level\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Password", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
        </p>
        
        <label for=\"remember_me\" class=\"checkbox\">
          <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"> ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Remember me", array(), "FOSUserBundle"), "html", null, true);
        echo "
        </label>
        <input class=\"btn btn-large btn-primary\"  type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </form>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  23 => 4,  114 => 40,  77 => 26,  20 => 1,  349 => 154,  344 => 8,  301 => 161,  293 => 155,  290 => 154,  284 => 153,  257 => 145,  234 => 131,  228 => 128,  210 => 116,  206 => 115,  197 => 109,  184 => 102,  180 => 101,  167 => 94,  137 => 42,  113 => 37,  160 => 50,  152 => 48,  124 => 36,  118 => 41,  110 => 32,  97 => 35,  65 => 23,  90 => 31,  84 => 29,  81 => 20,  53 => 13,  472 => 199,  467 => 8,  429 => 211,  425 => 206,  417 => 200,  414 => 199,  408 => 198,  397 => 196,  392 => 195,  388 => 194,  382 => 191,  378 => 190,  351 => 174,  343 => 171,  335 => 168,  329 => 165,  317 => 156,  311 => 155,  300 => 147,  277 => 137,  266 => 129,  260 => 128,  249 => 120,  232 => 111,  226 => 108,  222 => 125,  213 => 104,  195 => 98,  190 => 96,  186 => 95,  181 => 93,  172 => 90,  150 => 47,  126 => 62,  104 => 34,  100 => 28,  76 => 27,  70 => 25,  58 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 213,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 183,  365 => 111,  362 => 182,  360 => 109,  355 => 106,  341 => 105,  337 => 168,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 166,  298 => 91,  294 => 146,  285 => 89,  283 => 138,  278 => 86,  268 => 150,  264 => 149,  258 => 81,  252 => 80,  247 => 138,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 92,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 39,  61 => 21,  273 => 151,  269 => 94,  254 => 92,  243 => 137,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 105,  208 => 102,  204 => 101,  179 => 69,  159 => 86,  143 => 44,  135 => 53,  119 => 35,  102 => 32,  71 => 25,  67 => 20,  63 => 21,  59 => 12,  38 => 8,  94 => 32,  89 => 28,  85 => 21,  75 => 26,  68 => 23,  56 => 19,  87 => 24,  21 => 1,  26 => 12,  93 => 28,  88 => 6,  78 => 22,  46 => 11,  27 => 5,  44 => 9,  31 => 4,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 95,  166 => 71,  163 => 87,  158 => 88,  156 => 49,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 39,  117 => 37,  105 => 29,  91 => 30,  62 => 12,  49 => 11,  24 => 7,  25 => 3,  19 => 2,  79 => 26,  72 => 24,  69 => 23,  47 => 8,  40 => 9,  37 => 7,  22 => 3,  246 => 90,  157 => 56,  145 => 45,  139 => 43,  131 => 52,  123 => 43,  120 => 59,  115 => 46,  111 => 39,  108 => 35,  101 => 35,  98 => 33,  96 => 31,  83 => 23,  74 => 24,  66 => 22,  55 => 11,  52 => 10,  50 => 10,  43 => 12,  41 => 9,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 99,  193 => 108,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 89,  164 => 59,  162 => 57,  154 => 87,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 47,  130 => 39,  125 => 38,  122 => 43,  116 => 34,  112 => 42,  109 => 34,  106 => 36,  103 => 29,  99 => 34,  95 => 27,  92 => 33,  86 => 30,  82 => 29,  80 => 25,  73 => 26,  64 => 22,  60 => 22,  57 => 20,  54 => 20,  51 => 12,  48 => 12,  45 => 8,  42 => 9,  39 => 7,  36 => 7,  33 => 6,  30 => 2,);
    }
}
