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
        return array (  58 => 16,  34 => 7,  23 => 4,  77 => 26,  84 => 27,  81 => 26,  76 => 25,  20 => 1,  291 => 119,  286 => 8,  279 => 132,  253 => 130,  249 => 126,  216 => 115,  212 => 114,  205 => 110,  53 => 11,  110 => 31,  97 => 35,  70 => 16,  65 => 16,  280 => 8,  232 => 118,  226 => 115,  215 => 113,  210 => 112,  206 => 111,  195 => 103,  191 => 102,  170 => 90,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 116,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 127,  241 => 120,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 67,  128 => 66,  107 => 39,  61 => 21,  273 => 129,  269 => 94,  254 => 92,  243 => 123,  240 => 86,  238 => 119,  235 => 117,  230 => 82,  227 => 81,  224 => 71,  221 => 116,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 60,  102 => 52,  71 => 23,  67 => 20,  63 => 21,  59 => 14,  38 => 8,  94 => 31,  89 => 29,  85 => 25,  75 => 24,  68 => 23,  56 => 19,  87 => 25,  21 => 1,  26 => 12,  93 => 31,  88 => 29,  78 => 21,  46 => 11,  27 => 5,  44 => 9,  31 => 4,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 81,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 35,  105 => 40,  91 => 27,  62 => 23,  49 => 11,  24 => 7,  25 => 3,  19 => 2,  79 => 26,  72 => 24,  69 => 25,  47 => 8,  40 => 9,  37 => 7,  22 => 3,  246 => 90,  157 => 56,  145 => 74,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 59,  111 => 37,  108 => 36,  101 => 28,  98 => 31,  96 => 31,  83 => 22,  74 => 24,  66 => 15,  55 => 15,  52 => 12,  50 => 10,  43 => 12,  41 => 9,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 96,  176 => 93,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 80,  149 => 51,  147 => 58,  144 => 49,  141 => 73,  133 => 55,  130 => 41,  125 => 44,  122 => 37,  116 => 41,  112 => 42,  109 => 34,  106 => 53,  103 => 35,  99 => 33,  95 => 28,  92 => 33,  86 => 30,  82 => 22,  80 => 26,  73 => 17,  64 => 22,  60 => 20,  57 => 20,  54 => 11,  51 => 12,  48 => 12,  45 => 8,  42 => 9,  39 => 7,  36 => 7,  33 => 6,  30 => 2,);
    }
}
