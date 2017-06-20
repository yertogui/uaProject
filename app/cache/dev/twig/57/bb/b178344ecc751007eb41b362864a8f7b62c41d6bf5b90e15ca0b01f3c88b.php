<?php

/* uaUCRuaProject2Bundle:uaMovie:ua_update_movie.html.twig */
class __TwigTemplate_57bbb178344ecc751007eb41b362864a8f7b62c41d6bf5b90e15ca0b01f3c88b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("uaUCRuaProject2Bundle::ua_base_admin.html.twig");

        $this->blocks = array(
            'menuAdmin' => array($this, 'block_menuAdmin'),
            'banner' => array($this, 'block_banner'),
            'rightBar' => array($this, 'block_rightBar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "uaUCRuaProject2Bundle::ua_base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_menuAdmin($context, array $blocks = array())
    {
    }

    // line 3
    public function block_banner($context, array $blocks = array())
    {
    }

    // line 4
    public function block_rightBar($context, array $blocks = array())
    {
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
<div class=\"section group\">
  ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allMovies"]) ? $context["allMovies"] : $this->getContext($context, "allMovies")));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            echo "  
    <div class=\"grid_1_of_4 images_1_of_4\">
      <h5>Tittle: </h5>
      <h3>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getTitle", array(), "method"), "html", null, true);
            echo "</h4>
      <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_ucr_ua_project2_update_movie_page", array("codMovie" => $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getCodmovie", array(), "method"))), "html", null, true);
            echo "\"><input type=\"button\"value=\"Update\" name=\"btnInsertA\" id=\"btnInsertA\"/></a>
      <br>
      <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_ucr_ua_project2_delete_movie_page", array("codMovie" => $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getCodmovie", array(), "method"))), "html", null, true);
            echo "\"><input type=\"button\"value=\"Delete\" name=\"btnInsertA\" id=\"btnInsertA\" /></a>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</div>







</div>

";
    }

    public function getTemplateName()
    {
        return "uaUCRuaProject2Bundle:uaMovie:ua_update_movie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 119,  97 => 32,  174 => 82,  245 => 122,  192 => 92,  137 => 60,  211 => 105,  207 => 99,  190 => 92,  172 => 82,  129 => 55,  234 => 100,  225 => 98,  215 => 99,  202 => 97,  198 => 94,  194 => 94,  165 => 76,  126 => 67,  65 => 13,  70 => 15,  302 => 247,  77 => 31,  84 => 20,  216 => 92,  186 => 91,  175 => 76,  150 => 66,  127 => 48,  310 => 268,  205 => 97,  195 => 93,  191 => 64,  160 => 78,  110 => 39,  90 => 41,  277 => 131,  274 => 130,  266 => 123,  255 => 116,  239 => 99,  236 => 120,  200 => 95,  188 => 90,  184 => 89,  180 => 79,  170 => 80,  148 => 37,  134 => 30,  104 => 36,  58 => 11,  53 => 9,  34 => 5,  81 => 25,  323 => 126,  319 => 125,  301 => 116,  293 => 241,  290 => 109,  282 => 102,  265 => 86,  261 => 85,  257 => 84,  253 => 83,  249 => 82,  244 => 79,  233 => 78,  226 => 103,  218 => 74,  213 => 98,  210 => 94,  161 => 109,  155 => 69,  153 => 102,  100 => 35,  76 => 33,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 256,  312 => 98,  309 => 118,  305 => 117,  298 => 91,  294 => 90,  285 => 236,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 117,  252 => 80,  247 => 78,  241 => 78,  229 => 76,  220 => 70,  214 => 69,  177 => 65,  169 => 77,  140 => 61,  132 => 115,  128 => 28,  107 => 36,  61 => 12,  273 => 88,  269 => 124,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 93,  230 => 104,  227 => 118,  224 => 101,  221 => 101,  219 => 97,  217 => 101,  208 => 67,  204 => 89,  179 => 57,  159 => 65,  143 => 66,  135 => 59,  119 => 53,  102 => 34,  71 => 16,  67 => 17,  63 => 16,  59 => 15,  38 => 9,  94 => 42,  89 => 29,  85 => 27,  75 => 22,  68 => 14,  56 => 9,  87 => 35,  21 => 2,  26 => 6,  93 => 98,  88 => 6,  78 => 28,  46 => 6,  27 => 4,  44 => 8,  31 => 2,  28 => 3,  201 => 92,  196 => 86,  183 => 76,  171 => 69,  166 => 77,  163 => 39,  158 => 75,  156 => 82,  151 => 68,  142 => 59,  138 => 71,  136 => 116,  121 => 46,  117 => 130,  105 => 36,  91 => 27,  62 => 20,  49 => 7,  24 => 4,  25 => 1,  19 => 1,  79 => 18,  72 => 32,  69 => 17,  47 => 12,  40 => 5,  37 => 8,  22 => 1,  246 => 104,  157 => 56,  145 => 96,  139 => 45,  131 => 52,  123 => 54,  120 => 46,  115 => 39,  111 => 38,  108 => 37,  101 => 34,  98 => 31,  96 => 31,  83 => 22,  74 => 18,  66 => 21,  55 => 14,  52 => 8,  50 => 10,  43 => 6,  41 => 4,  35 => 3,  32 => 4,  29 => 6,  209 => 98,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 63,  182 => 85,  176 => 72,  173 => 65,  168 => 68,  164 => 59,  162 => 76,  154 => 68,  149 => 51,  147 => 65,  144 => 62,  141 => 48,  133 => 55,  130 => 64,  125 => 51,  122 => 43,  116 => 41,  112 => 41,  109 => 38,  106 => 38,  103 => 32,  99 => 31,  95 => 31,  92 => 30,  86 => 30,  82 => 21,  80 => 34,  73 => 18,  64 => 15,  60 => 13,  57 => 18,  54 => 10,  51 => 13,  48 => 13,  45 => 13,  42 => 7,  39 => 10,  36 => 3,  33 => 7,  30 => 2,);
    }
}
