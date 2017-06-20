<?php

/* KnpPaginatorBundle:Pagination:sliding.html.twig */
class __TwigTemplate_52b947959efd658f91d14c0e34746d9649d56e79eeec80aa169ac824a6134fde extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > 1)) {
            // line 4
            echo "<div class=\"pagination\">
    ";
            // line 5
            if ((array_key_exists("first", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))) {
                // line 6
                echo "        <span class=\"first\">
            <a href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))), "html", null, true);
                echo "\">&lt;&lt;</a>
        </span>
    ";
            }
            // line 10
            echo "
    ";
            // line 11
            if (array_key_exists("previous", $context)) {
                // line 12
                echo "        <span class=\"previous\">
            <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
                echo "\">&lt;</a>
        </span>
    ";
            }
            // line 16
            echo "
    ";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 18
                echo "        ";
                if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) != (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")))) {
                    // line 19
                    echo "            <span class=\"page\">
                <a href=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "</a>
            </span>
        ";
                } else {
                    // line 23
                    echo "            <span class=\"current\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "</span>
        ";
                }
                // line 25
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "
    ";
            // line 28
            if (array_key_exists("next", $context)) {
                // line 29
                echo "        <span class=\"next\">
            <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
                echo "\">&gt;</a>
        </span>
    ";
            }
            // line 33
            echo "
    ";
            // line 34
            if ((array_key_exists("last", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))) {
                // line 35
                echo "        <span class=\"last\">
            <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))), "html", null, true);
                echo "\">&gt;&gt;</a>
        </span>
    ";
            }
            // line 39
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sliding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 39,  181 => 87,  124 => 64,  212 => 108,  206 => 105,  178 => 91,  231 => 119,  97 => 53,  174 => 85,  245 => 122,  192 => 93,  137 => 60,  211 => 105,  207 => 99,  190 => 92,  172 => 84,  129 => 66,  234 => 100,  225 => 98,  215 => 99,  202 => 104,  198 => 102,  194 => 101,  165 => 76,  126 => 67,  65 => 20,  70 => 15,  302 => 247,  77 => 31,  84 => 49,  216 => 92,  186 => 91,  175 => 76,  150 => 66,  127 => 65,  310 => 268,  205 => 97,  195 => 93,  191 => 64,  160 => 78,  110 => 39,  90 => 41,  277 => 131,  274 => 130,  266 => 123,  255 => 116,  239 => 99,  236 => 120,  200 => 95,  188 => 91,  184 => 89,  180 => 79,  170 => 80,  148 => 74,  134 => 30,  104 => 36,  58 => 11,  53 => 9,  34 => 5,  81 => 48,  323 => 126,  319 => 125,  301 => 116,  293 => 241,  290 => 109,  282 => 102,  265 => 86,  261 => 85,  257 => 84,  253 => 83,  249 => 82,  244 => 79,  233 => 78,  226 => 103,  218 => 111,  213 => 98,  210 => 94,  161 => 80,  155 => 78,  153 => 102,  100 => 33,  76 => 33,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 256,  312 => 98,  309 => 118,  305 => 117,  298 => 91,  294 => 90,  285 => 236,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 117,  252 => 80,  247 => 78,  241 => 78,  229 => 116,  220 => 70,  214 => 69,  177 => 86,  169 => 83,  140 => 61,  132 => 67,  128 => 63,  107 => 36,  61 => 12,  273 => 88,  269 => 124,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 93,  230 => 104,  227 => 118,  224 => 101,  221 => 101,  219 => 97,  217 => 101,  208 => 67,  204 => 89,  179 => 57,  159 => 65,  143 => 66,  135 => 68,  119 => 53,  102 => 34,  71 => 16,  67 => 17,  63 => 16,  59 => 18,  38 => 10,  94 => 30,  89 => 28,  85 => 32,  75 => 44,  68 => 14,  56 => 36,  87 => 50,  21 => 2,  26 => 6,  93 => 98,  88 => 6,  78 => 28,  46 => 13,  27 => 5,  44 => 30,  31 => 2,  28 => 3,  201 => 92,  196 => 86,  183 => 94,  171 => 69,  166 => 82,  163 => 39,  158 => 79,  156 => 76,  151 => 68,  142 => 59,  138 => 71,  136 => 116,  121 => 46,  117 => 62,  105 => 35,  91 => 29,  62 => 19,  49 => 7,  24 => 4,  25 => 3,  19 => 2,  79 => 25,  72 => 32,  69 => 41,  47 => 12,  40 => 28,  37 => 8,  22 => 3,  246 => 104,  157 => 56,  145 => 96,  139 => 45,  131 => 52,  123 => 54,  120 => 46,  115 => 39,  111 => 59,  108 => 36,  101 => 54,  98 => 31,  96 => 31,  83 => 22,  74 => 18,  66 => 40,  55 => 17,  52 => 16,  50 => 10,  43 => 12,  41 => 11,  35 => 3,  32 => 7,  29 => 6,  209 => 98,  203 => 78,  199 => 97,  193 => 73,  189 => 71,  187 => 63,  182 => 85,  176 => 90,  173 => 65,  168 => 68,  164 => 59,  162 => 76,  154 => 75,  149 => 51,  147 => 65,  144 => 73,  141 => 72,  133 => 55,  130 => 64,  125 => 51,  122 => 43,  116 => 54,  112 => 41,  109 => 38,  106 => 47,  103 => 34,  99 => 31,  95 => 39,  92 => 30,  86 => 27,  82 => 21,  80 => 34,  73 => 23,  64 => 39,  60 => 13,  57 => 18,  54 => 35,  51 => 34,  48 => 7,  45 => 13,  42 => 7,  39 => 10,  36 => 3,  33 => 5,  30 => 2,);
    }
}
