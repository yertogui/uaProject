<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_9b99678fe0914689bb0682f797e8cca8ecd934b5bca0a2a7ec6a1a83a62f4be0 extends Twig_Template
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
        return array (  118 => 49,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  320 => 127,  315 => 125,  303 => 122,  300 => 121,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 94,  197 => 71,  185 => 75,  167 => 71,  113 => 48,  152 => 74,  114 => 59,  181 => 65,  124 => 62,  212 => 108,  206 => 105,  178 => 64,  231 => 119,  97 => 41,  174 => 74,  245 => 122,  192 => 93,  137 => 65,  211 => 105,  207 => 75,  190 => 92,  172 => 62,  129 => 64,  234 => 100,  225 => 98,  215 => 99,  202 => 104,  198 => 102,  194 => 70,  165 => 60,  126 => 63,  65 => 35,  70 => 19,  302 => 247,  77 => 31,  84 => 24,  216 => 79,  186 => 91,  175 => 76,  150 => 55,  127 => 60,  310 => 268,  205 => 97,  195 => 93,  191 => 77,  160 => 78,  110 => 22,  90 => 27,  277 => 131,  274 => 130,  266 => 123,  255 => 116,  239 => 99,  236 => 120,  200 => 72,  188 => 76,  184 => 89,  180 => 79,  170 => 77,  148 => 69,  134 => 54,  104 => 42,  58 => 17,  53 => 12,  34 => 26,  81 => 23,  323 => 128,  319 => 125,  301 => 116,  293 => 241,  290 => 109,  282 => 102,  265 => 86,  261 => 85,  257 => 84,  253 => 83,  249 => 82,  244 => 79,  233 => 87,  226 => 84,  218 => 111,  213 => 78,  210 => 94,  161 => 80,  155 => 75,  153 => 69,  100 => 33,  76 => 31,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 256,  312 => 124,  309 => 118,  305 => 117,  298 => 120,  294 => 90,  285 => 236,  283 => 88,  278 => 106,  268 => 85,  264 => 84,  258 => 117,  252 => 80,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 86,  169 => 83,  140 => 66,  132 => 65,  128 => 60,  107 => 52,  61 => 12,  273 => 88,  269 => 124,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 93,  230 => 104,  227 => 118,  224 => 101,  221 => 101,  219 => 97,  217 => 101,  208 => 67,  204 => 78,  179 => 84,  159 => 65,  143 => 66,  135 => 62,  119 => 40,  102 => 41,  71 => 16,  67 => 24,  63 => 19,  59 => 14,  38 => 6,  94 => 34,  89 => 28,  85 => 32,  75 => 43,  68 => 36,  56 => 11,  87 => 34,  21 => 2,  26 => 9,  93 => 47,  88 => 31,  78 => 26,  46 => 13,  27 => 3,  44 => 26,  31 => 3,  28 => 3,  201 => 92,  196 => 86,  183 => 94,  171 => 73,  166 => 79,  163 => 78,  158 => 79,  156 => 58,  151 => 70,  142 => 59,  138 => 56,  136 => 116,  121 => 50,  117 => 19,  105 => 34,  91 => 50,  62 => 19,  49 => 14,  24 => 18,  25 => 35,  19 => 1,  79 => 25,  72 => 32,  69 => 40,  47 => 8,  40 => 6,  37 => 5,  22 => 17,  246 => 93,  157 => 56,  145 => 96,  139 => 63,  131 => 61,  123 => 42,  120 => 20,  115 => 39,  111 => 47,  108 => 19,  101 => 43,  98 => 31,  96 => 37,  83 => 33,  74 => 27,  66 => 39,  55 => 16,  52 => 14,  50 => 29,  43 => 12,  41 => 10,  35 => 6,  32 => 5,  29 => 3,  209 => 98,  203 => 73,  199 => 97,  193 => 73,  189 => 71,  187 => 84,  182 => 85,  176 => 63,  173 => 65,  168 => 61,  164 => 70,  162 => 59,  154 => 71,  149 => 73,  147 => 54,  144 => 73,  141 => 51,  133 => 55,  130 => 46,  125 => 51,  122 => 43,  116 => 39,  112 => 41,  109 => 38,  106 => 45,  103 => 34,  99 => 31,  95 => 39,  92 => 30,  86 => 45,  82 => 28,  80 => 32,  73 => 20,  64 => 23,  60 => 13,  57 => 12,  54 => 34,  51 => 33,  48 => 9,  45 => 10,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
