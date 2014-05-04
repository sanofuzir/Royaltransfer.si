<?php

/* JMSTranslationBundle:Translate:index.html.twig */
class __TwigTemplate_05fffade73d22355947fcdeb7df2918b6d5b757d8a3946fbbe507a5c1d8ac76d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JMSTranslationBundle::base.html.twig");

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JMSTranslationBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script language=\"javascript\" type=\"text/javascript\">
        \$(document).ready(function() {
            var updateMessagePath = ";
        // line 8
        echo twig_jsonencode_filter($this->env->getExtension('routing')->getPath("jms_translation_update_message", array("config" => (isset($context["selectedConfig"]) ? $context["selectedConfig"] : null), "domain" => (isset($context["selectedDomain"]) ? $context["selectedDomain"] : null), "locale" => (isset($context["selectedLocale"]) ? $context["selectedLocale"] : null))));
        echo ";
        
            \$('#config select').change(function() {
                \$(this).parent().submit();
            });
            
            ";
        // line 14
        if (((isset($context["isWriteable"]) ? $context["isWriteable"] : null) === true)) {
            // line 15
            echo "            \$('textarea')
                .blur(function() {
                    var self = this;
                    \$.ajax(updateMessagePath + '?id=' + encodeURIComponent(\$(this).data('id')), {
                        type: 'POST',
                        headers: {'X-HTTP-METHOD-OVERRIDE': 'PUT'},
                        data: {'_method': 'PUT', 'message': \$(this).val()},
                        beforeSend: function() {
                            \$(self).parent().closest('td').prev('td').children('.alert-message').remove();
                        },
                        error: function() {
                            \$(self).parent().closest('td').prev('td').append('<span class=\"alert-message label error\">Could not be saved.</span>');
                        },
                        success: function() {
                            \$(self).parent().closest('td').prev('td').append('<span class=\"alert-message label success\">Translation was saved.</span>');
                        },
                        complete: function() {
                            var parent = \$(self).parent();
                            \$(self).data('timeoutId', setTimeout(function() {
                                \$(self).data('timeoutId', undefined);
                                parent.closest('td').prev('td').children('.alert-message').fadeOut(300, function() { \$(this).remove(); });
                            }, 10000));
                        }
                    });
                })
                .focus(function() {
                    this.select();
                    
                    var timeoutId = \$(this).data('timeoutId');
                    if (timeoutId) {
                        clearTimeout(timeoutId);
                        \$(this).data('timeoutId', undefined);
                    }
                    
                    \$(this).parent().children('.alert-message').remove();
                })
            ;
            ";
        }
        // line 53
        echo "        });
    </script>
";
    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        // line 58
        echo "
    <form id=\"config\" action=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("jms_translation_index");
        echo "\" method=\"get\">
        <select name=\"config\" class=\"span3\">
            ";
        // line 61
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["configs"]) ? $context["configs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["config"]) {
            // line 62
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["config"]) ? $context["config"] : null), "html", null, true);
            echo "\"";
            if (((isset($context["config"]) ? $context["config"] : null) == (isset($context["selectedConfig"]) ? $context["selectedConfig"] : null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["config"]) ? $context["config"] : null), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "        </select>
    
        <select name=\"domain\" class=\"span3\">
            ";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["domains"]) ? $context["domains"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 68
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["domain"]) ? $context["domain"] : null), "html", null, true);
            echo "\"";
            if (((isset($context["domain"]) ? $context["domain"] : null) == (isset($context["selectedDomain"]) ? $context["selectedDomain"] : null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["domain"]) ? $context["domain"] : null), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        </select>
        
        <select name=\"locale\" class=\"span2\">
            ";
        // line 73
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) ? $context["locales"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 74
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : null), "html", null, true);
            echo "\"";
            if (((isset($context["locale"]) ? $context["locale"] : null) == (isset($context["selectedLocale"]) ? $context["selectedLocale"] : null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : null), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "        </select>
    </form>
    
    ";
        // line 79
        if (((isset($context["isWriteable"]) ? $context["isWriteable"] : null) === false)) {
            // line 80
            echo "    <div class=\"alert-message error\">
        The translation file \"<strong>";
            // line 81
            echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : null), "html", null, true);
            echo "</strong>\" is not writable.
    </div>
    ";
        }
        // line 84
        echo "    
    ";
        // line 85
        if (("xliff" != (isset($context["format"]) ? $context["format"] : null))) {
            // line 86
            echo "    <div class=\"alert-message warning\">
        Due to limitations of the different loaders/dumpers, some features are unfortunately limited to the XLIFF format. 
        
        <br /><br />
        
        However, you can easily convert your existing translation files to the XLIFF format by running:<br />
        <code>php app/console translation:extract ";
            // line 92
            echo twig_escape_filter($this->env, (isset($context["selectedLocale"]) ? $context["selectedLocale"] : null), "html", null, true);
            echo " --config=";
            echo twig_escape_filter($this->env, (isset($context["selectedConfig"]) ? $context["selectedConfig"] : null), "html", null, true);
            echo " --output-format=xliff</code>
    </div>
    ";
        }
        // line 95
        echo "
    <h2>Available Messages</h2>
    
    ";
        // line 98
        if ((!twig_test_empty((isset($context["newMessages"]) ? $context["newMessages"] : null)))) {
            // line 99
            echo "    <h3>New Messages</h3>
    ";
            // line 100
            $this->env->loadTemplate("JMSTranslationBundle:Translate:messages.html.twig")->display(array_merge($context, array("messages" => (isset($context["newMessages"]) ? $context["newMessages"] : null))));
            // line 101
            echo "    ";
        }
        // line 102
        echo "    
    ";
        // line 103
        if ((!twig_test_empty((isset($context["existingMessages"]) ? $context["existingMessages"] : null)))) {
            // line 104
            echo "    <h3>Existing Messages</h3>
    ";
            // line 105
            $this->env->loadTemplate("JMSTranslationBundle:Translate:messages.html.twig")->display(array_merge($context, array("messages" => (isset($context["existingMessages"]) ? $context["existingMessages"] : null))));
            // line 106
            echo "    ";
        }
        // line 107
        echo "
";
    }

    public function getTemplateName()
    {
        return "JMSTranslationBundle:Translate:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 106,  212 => 95,  194 => 85,  191 => 84,  185 => 81,  175 => 76,  127 => 64,  34 => 7,  23 => 1,  114 => 40,  104 => 34,  76 => 5,  96 => 31,  20 => 1,  349 => 154,  344 => 8,  301 => 161,  293 => 155,  290 => 154,  284 => 153,  257 => 145,  234 => 131,  228 => 128,  210 => 116,  206 => 115,  197 => 109,  184 => 102,  180 => 79,  167 => 94,  53 => 13,  137 => 42,  113 => 37,  160 => 74,  152 => 48,  145 => 45,  139 => 43,  124 => 36,  110 => 32,  100 => 58,  97 => 57,  65 => 22,  90 => 31,  84 => 29,  81 => 20,  52 => 10,  74 => 24,  70 => 25,  472 => 199,  467 => 8,  429 => 211,  425 => 206,  417 => 200,  414 => 199,  408 => 198,  397 => 196,  392 => 195,  388 => 194,  382 => 191,  378 => 190,  351 => 174,  343 => 171,  335 => 168,  329 => 165,  317 => 156,  311 => 155,  300 => 147,  277 => 137,  266 => 129,  260 => 128,  249 => 120,  232 => 104,  226 => 108,  222 => 100,  213 => 104,  195 => 98,  190 => 96,  186 => 95,  181 => 93,  172 => 90,  150 => 47,  126 => 62,  120 => 59,  37 => 7,  118 => 41,  83 => 23,  77 => 26,  58 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 213,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 183,  365 => 111,  362 => 182,  360 => 109,  355 => 106,  341 => 105,  337 => 168,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 166,  298 => 91,  294 => 146,  285 => 89,  283 => 138,  278 => 86,  268 => 150,  264 => 149,  258 => 81,  252 => 80,  247 => 138,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 92,  169 => 60,  140 => 55,  132 => 67,  128 => 49,  111 => 39,  107 => 39,  61 => 21,  273 => 151,  269 => 94,  254 => 92,  246 => 90,  243 => 137,  240 => 107,  238 => 85,  235 => 105,  230 => 103,  227 => 102,  224 => 101,  221 => 77,  219 => 99,  217 => 98,  208 => 102,  204 => 92,  179 => 69,  159 => 86,  143 => 44,  135 => 53,  131 => 52,  119 => 35,  108 => 61,  102 => 32,  71 => 27,  67 => 20,  63 => 21,  59 => 12,  47 => 10,  38 => 8,  94 => 32,  89 => 28,  85 => 21,  79 => 26,  75 => 26,  68 => 23,  56 => 19,  50 => 10,  29 => 3,  87 => 21,  72 => 24,  55 => 11,  21 => 1,  26 => 12,  98 => 33,  93 => 28,  88 => 6,  78 => 22,  46 => 11,  27 => 5,  40 => 8,  44 => 9,  35 => 7,  31 => 4,  43 => 12,  41 => 8,  28 => 4,  201 => 92,  196 => 86,  183 => 82,  171 => 95,  166 => 71,  163 => 87,  158 => 88,  156 => 73,  151 => 70,  142 => 59,  138 => 54,  136 => 68,  123 => 43,  121 => 39,  117 => 37,  115 => 43,  105 => 29,  101 => 35,  91 => 53,  69 => 24,  66 => 22,  62 => 12,  49 => 14,  24 => 7,  32 => 4,  25 => 3,  22 => 3,  19 => 2,  209 => 82,  203 => 78,  199 => 99,  193 => 108,  189 => 71,  187 => 84,  182 => 80,  176 => 64,  173 => 65,  168 => 89,  164 => 59,  162 => 59,  154 => 87,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 47,  130 => 39,  125 => 38,  122 => 43,  116 => 34,  112 => 62,  109 => 34,  106 => 33,  103 => 59,  99 => 34,  95 => 25,  92 => 24,  86 => 30,  82 => 9,  80 => 25,  73 => 26,  64 => 22,  60 => 22,  57 => 20,  54 => 15,  51 => 15,  48 => 12,  45 => 9,  42 => 9,  39 => 7,  36 => 7,  33 => 6,  30 => 2,);
    }
}
