<?php

/* AcmeDemoBundle:Demo:index.html.twig */
class __TwigTemplate_37cf66afaf8a638b29a11b9e852b150b2d1b10872a9f5cddad6e8b87e6bdb691 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Demos";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <h1 class=\"title\">Available demos</h1>
    <ul id=\"demo-list\">
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("_demo_hello", array("name" => "World"));
        echo "\">Hello World</a></li>
        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("_demo_secured_hello", array("name" => "World"));
        echo "\">Access the secured area</a> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_login");
        echo "\">Go to the login page</a></li>
        ";
        // line 13
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 76,  113 => 55,  152 => 74,  114 => 59,  181 => 81,  124 => 62,  212 => 108,  206 => 105,  178 => 80,  231 => 119,  97 => 52,  174 => 85,  245 => 122,  192 => 93,  137 => 65,  211 => 105,  207 => 99,  190 => 92,  172 => 84,  129 => 64,  234 => 100,  225 => 98,  215 => 99,  202 => 104,  198 => 102,  194 => 101,  165 => 75,  126 => 63,  65 => 35,  70 => 15,  302 => 247,  77 => 31,  84 => 29,  216 => 92,  186 => 91,  175 => 76,  150 => 66,  127 => 28,  310 => 268,  205 => 97,  195 => 93,  191 => 64,  160 => 78,  110 => 22,  90 => 32,  277 => 131,  274 => 130,  266 => 123,  255 => 116,  239 => 99,  236 => 120,  200 => 95,  188 => 88,  184 => 89,  180 => 79,  170 => 77,  148 => 69,  134 => 30,  104 => 51,  58 => 32,  53 => 11,  34 => 26,  81 => 47,  323 => 126,  319 => 125,  301 => 116,  293 => 241,  290 => 109,  282 => 102,  265 => 86,  261 => 85,  257 => 84,  253 => 83,  249 => 82,  244 => 79,  233 => 78,  226 => 103,  218 => 111,  213 => 98,  210 => 94,  161 => 80,  155 => 75,  153 => 102,  100 => 33,  76 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 256,  312 => 98,  309 => 118,  305 => 117,  298 => 91,  294 => 90,  285 => 236,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 117,  252 => 80,  247 => 78,  241 => 78,  229 => 116,  220 => 70,  214 => 69,  177 => 86,  169 => 83,  140 => 66,  132 => 65,  128 => 60,  107 => 52,  61 => 12,  273 => 88,  269 => 124,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 93,  230 => 104,  227 => 118,  224 => 101,  221 => 101,  219 => 97,  217 => 101,  208 => 67,  204 => 89,  179 => 84,  159 => 65,  143 => 66,  135 => 68,  119 => 53,  102 => 17,  71 => 16,  67 => 17,  63 => 34,  59 => 13,  38 => 6,  94 => 34,  89 => 28,  85 => 32,  75 => 43,  68 => 36,  56 => 11,  87 => 49,  21 => 2,  26 => 9,  93 => 47,  88 => 31,  78 => 26,  46 => 13,  27 => 5,  44 => 26,  31 => 3,  28 => 20,  201 => 92,  196 => 86,  183 => 94,  171 => 81,  166 => 79,  163 => 78,  158 => 79,  156 => 76,  151 => 70,  142 => 59,  138 => 69,  136 => 116,  121 => 61,  117 => 19,  105 => 18,  91 => 50,  62 => 19,  49 => 10,  24 => 18,  25 => 3,  19 => 16,  79 => 25,  72 => 32,  69 => 40,  47 => 8,  40 => 6,  37 => 5,  22 => 17,  246 => 104,  157 => 56,  145 => 96,  139 => 45,  131 => 61,  123 => 58,  120 => 20,  115 => 39,  111 => 59,  108 => 19,  101 => 54,  98 => 31,  96 => 48,  83 => 44,  74 => 39,  66 => 39,  55 => 31,  52 => 10,  50 => 29,  43 => 7,  41 => 5,  35 => 5,  32 => 7,  29 => 3,  209 => 98,  203 => 78,  199 => 97,  193 => 73,  189 => 71,  187 => 84,  182 => 85,  176 => 90,  173 => 65,  168 => 80,  164 => 59,  162 => 74,  154 => 71,  149 => 73,  147 => 65,  144 => 73,  141 => 70,  133 => 55,  130 => 64,  125 => 59,  122 => 43,  116 => 54,  112 => 41,  109 => 38,  106 => 47,  103 => 34,  99 => 31,  95 => 39,  92 => 30,  86 => 45,  82 => 28,  80 => 43,  73 => 16,  64 => 13,  60 => 13,  57 => 12,  54 => 34,  51 => 33,  48 => 9,  45 => 8,  42 => 7,  39 => 10,  36 => 5,  33 => 3,  30 => 3,);
    }
}
