<?php

/* uaUCRuaProject2Bundle:uaActor:ua_delete_actor_page.html.twig */
class __TwigTemplate_aa85f05fa9742543a9907ae1d2cfcd5e91c5a5912e0659bfab9f1974c780f517 extends Twig_Template
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
        echo "<h1> Are you sure to remove this actor?</h1>
<div class=\"section group\"><form name=\"form1\" id=\"form1\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_ucr_ua_project2_delete_actor", array("codActor" => $this->getAttribute((isset($context["allActors"]) ? $context["allActors"] : $this->getContext($context, "allActors")), "getId", array(), "method"))), "html", null, true);
        echo " \" method=\"post\" >
        <div class=\"grid_1_of_4 images_1_of_4\">
            <h3>Name: </h3>
            <h5>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["allActors"]) ? $context["allActors"] : $this->getContext($context, "allActors")), "getName", array(), "method"), "html", null, true);
        echo "</h5>
            <h3>Last name: </h3>
            <h5>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["allActors"]) ? $context["allActors"] : $this->getContext($context, "allActors")), "getLastname", array(), "method"), "html", null, true);
        echo "</h5>
            <input type=\"submit\" value=\"Delete Actor\" name=\"btnDeleteA\" id=\"btnDeleteA\"/> </input>                                    


       </div>
    </form>
</div>
 <script>
    function validateIM(){
    
        var title = document.getElementById('txtGender');
        
        var emptyGender = false;

        if(title.value.length < 2){
            document.getElementById('msgErrorGender').style.visibility = 'visible';
            emptyGender = true;
        }else{
            document.getElementById('msgErrorGender').style.visibility = 'hidden';
        }//end if/else

        
        if(emptyGender=== true){
            return false;
        }else{
            return true;
        }//end if/else
    }//end validateIM
    </script>
";
    }

    public function getTemplateName()
    {
        return "uaUCRuaProject2Bundle:uaActor:ua_delete_actor_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 92,  186 => 78,  175 => 76,  150 => 63,  127 => 56,  310 => 268,  205 => 72,  195 => 65,  191 => 64,  160 => 38,  110 => 56,  90 => 41,  277 => 131,  274 => 130,  266 => 123,  255 => 116,  239 => 99,  236 => 98,  200 => 87,  188 => 56,  184 => 55,  180 => 54,  170 => 47,  148 => 37,  134 => 30,  104 => 52,  58 => 11,  53 => 15,  34 => 8,  81 => 23,  323 => 126,  319 => 125,  301 => 116,  293 => 110,  290 => 109,  282 => 102,  265 => 86,  261 => 85,  257 => 84,  253 => 83,  249 => 82,  244 => 79,  233 => 78,  226 => 79,  218 => 74,  213 => 65,  210 => 64,  161 => 109,  155 => 105,  153 => 102,  100 => 45,  76 => 33,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 118,  305 => 117,  298 => 91,  294 => 90,  285 => 103,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 117,  252 => 80,  247 => 78,  241 => 78,  229 => 76,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 61,  132 => 115,  128 => 28,  107 => 36,  61 => 13,  273 => 88,  269 => 124,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 93,  230 => 82,  227 => 81,  224 => 71,  221 => 72,  219 => 76,  217 => 75,  208 => 67,  204 => 89,  179 => 57,  159 => 65,  143 => 34,  135 => 59,  119 => 53,  102 => 49,  71 => 27,  67 => 17,  63 => 13,  59 => 15,  38 => 9,  94 => 42,  89 => 20,  85 => 25,  75 => 17,  68 => 31,  56 => 9,  87 => 35,  21 => 2,  26 => 6,  93 => 98,  88 => 6,  78 => 85,  46 => 6,  27 => 4,  44 => 12,  31 => 2,  28 => 3,  201 => 92,  196 => 86,  183 => 168,  171 => 75,  166 => 46,  163 => 39,  158 => 44,  156 => 66,  151 => 63,  142 => 59,  138 => 71,  136 => 116,  121 => 46,  117 => 130,  105 => 44,  91 => 27,  62 => 14,  49 => 7,  24 => 4,  25 => 1,  19 => 1,  79 => 18,  72 => 32,  69 => 17,  47 => 12,  40 => 7,  37 => 8,  22 => 1,  246 => 104,  157 => 56,  145 => 96,  139 => 45,  131 => 52,  123 => 54,  120 => 57,  115 => 43,  111 => 126,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 14,  52 => 8,  50 => 10,  43 => 8,  41 => 4,  35 => 5,  32 => 4,  29 => 6,  209 => 73,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 63,  182 => 66,  176 => 56,  173 => 65,  168 => 49,  164 => 59,  162 => 45,  154 => 58,  149 => 51,  147 => 58,  144 => 62,  141 => 48,  133 => 55,  130 => 64,  125 => 27,  122 => 43,  116 => 41,  112 => 97,  109 => 46,  106 => 122,  103 => 32,  99 => 31,  95 => 109,  92 => 41,  86 => 24,  82 => 22,  80 => 34,  73 => 32,  64 => 14,  60 => 13,  57 => 11,  54 => 10,  51 => 13,  48 => 13,  45 => 13,  42 => 7,  39 => 10,  36 => 3,  33 => 7,  30 => 4,);
    }
}
