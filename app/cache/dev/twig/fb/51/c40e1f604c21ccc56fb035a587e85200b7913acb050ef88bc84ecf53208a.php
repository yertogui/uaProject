<?php

/* uaUCRuaProject2Bundle:uaMovie:ua_movies_by_years.html.twig */
class __TwigTemplate_fb51c40e1f604c21ccc56fb035a587e85200b7913acb050ef88bc84ecf53208a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("uaUCRuaProject2Bundle::ua_base.html.twig");

        $this->blocks = array(
            'slider' => array($this, 'block_slider'),
            'header_bottom_left' => array($this, 'block_header_bottom_left'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "uaUCRuaProject2Bundle::ua_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 5
    public function block_header_bottom_left($context, array $blocks = array())
    {
    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"menu\">
    <ul id=\"dc_mega-menu-orange\" class=\"dc_mm-orange\">
        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_homepage");
        echo "\">Home</a></li>
        <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_movies", array("page" => 1, "moviesNum" => 6)), "html", null, true);
        echo "\">Movies</a></li>
        <li><a>Genders</a>
            <ul>
                ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allGenders"]) ? $context["allGenders"] : $this->getContext($context, "allGenders")));
        foreach ($context['_seq'] as $context["_key"] => $context["gender"]) {
            // line 16
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_gender_movies", array("codGender" => $this->getAttribute((isset($context["gender"]) ? $context["gender"] : $this->getContext($context, "gender")), "getCode", array(), "method"), "page" => 1, "moviesNum" => 6)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gender"]) ? $context["gender"] : $this->getContext($context, "gender")), "getName", array(), "method"), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gender'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            </ul>
        </li>
        
        <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_about");
        echo "\">About</a></li>
        <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_contact");
        echo "\">Contact</a> </li>
        <div class=\"clear\"></div>
    </ul>
</div>
        ";
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        // line 29
        echo "
               
    <div class=\"content\">
    \t<div class=\"content_top\">
    \t\t<div class=\"heading\">
    \t\t<h3>";
        // line 34
        echo twig_escape_filter($this->env, (((isset($context["yearIni"]) ? $context["yearIni"] : $this->getContext($context, "yearIni")) . " - ") . (isset($context["yearEnd"]) ? $context["yearEnd"] : $this->getContext($context, "yearEnd"))), "html", null, true);
        echo "</h3>
    \t\t</div>
                
    \t\t<div class=\"sort\">
                    
                    <form action=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_range_movies_by_years", array("page" => 1, "moviesNum" => 6)), "html", null, true);
        echo "\" method=\"POST\">
                        <p>Year:
                            <input type=\"number\" name=\"txtYearIni\" id=\"txtYearIni\"min=\"1800\" max=\"2016\"/>
                            <br> &nbsp;&nbsp;&nbsp; to: 
                            <input type=\"number\" name=\"txtYearEnd\" id=\"txtYearEnd\"min=\"1800\" max=\"2016\"/>
                            <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type=\"submit\" value=\"Search\" name=\"btnYearsRange\" id=\"btnYearsRange\" onclick=\"return checkYears();\"/>
                            <div id=\"msgErrorIni\" style=\"color:red\">*</div>
                        </p>
                    </form>
                   
    \t\t</div>
                
                <div class=\"sort\">
                    <form action=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_range_movies_by_price", array("page" => 1, "moviesNum" => 6)), "html", null, true);
        echo "\" method=\"POST\">
                        <p>Price: \$
                            <input type=\"number\" name=\"txtPriceIni\" id=\"txtPriceIni\"min=\"1\" max=\"20\"/>
                            <br> &nbsp;&nbsp;&nbsp;&nbsp; to: \$
                            <input type=\"number\" name=\"txtPriceEnd\" id=\"txtPriceEnd\"min=\"1\" max=\"20\"/>
                            <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type=\"submit\" value=\"Search\" name=\"btnPriceRange\" id=\"btnPriceRange\"/>
                             <div id=\"msgErrorPrice\" style=\"color:red\">*</div>
                        </p>
                    </form>
    \t\t</div>
    \t\t<div class=\"show\">
    \t\t<p>Show:
                    <select name=\"showNumber\" id=\"showNumber\" onchange=\"changeShowNumber()\">
                        <option value=\"3\" >3</option>
                        <option value=\"6\" >6</option>
                        <option value=\"9\" >9</option>
                        <option value=\"12\" >12</option>
                    </select>
    \t\t</p>
                
    \t\t</div>
    \t\t<div class=\"page-no\">
    \t\t\t<p>Result Pages:<ul>
                           ";
        // line 77
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["totalPages"]) ? $context["totalPages"] : $this->getContext($context, "totalPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo " 
                                <li class=\"active\"><a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_range_movies_by_years", array("page" => 1, "moviesNum" => 6)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</a></li>
                           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                            
    \t\t\t\t
    \t\t\t\t<!--<li>[<a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_movies", array("page" => 1, "moviesNum" => 6)), "html", null, true);
        echo "\"> Next>>></a >]</li>  -->
    \t\t\t\t</ul></p>
    \t\t</div>
    \t\t<div class=\"clear\"></div>
    \t</div>
\t      <div class=\"section group\">
                   \t
                   ";
        // line 89
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allMovies"]) ? $context["allMovies"] : $this->getContext($context, "allMovies")));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 90
            echo "\t\t\t\t<div class=\"grid_1_of_4 images_1_of_4\">
                                    <div class=\"listimg listimg_2_of_1\">
                                            <a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_movie_details", array("codMovie" => $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getCodMovie", array(), "method"))), "html", null, true);
            echo "\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/uaucr_uaproyect2_app/images/movies/movie" . $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getCodMovie", array(), "method")) . ".jpg")), "html", null, true);
            echo "\" height=\"170\" width=\"150\" alt=\"\" /></a>
                                    </div>
\t\t\t\t\t 
\t\t\t\t\t <h2>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getTitle", array(), "method"), "html", null, true);
            echo " </h2>
\t\t\t\t\t
\t\t\t\t\t <p><span class=\"price\">\$";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getPrice", array(), "method"), "html", null, true);
            echo ".00</span></p>
\t\t\t\t\t  <div class=\"button\"><span><img src=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/uaucr_uaproyect2_app/images/cart.jpg"), "html", null, true);
            echo "\" alt=\"\" /><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_ucr_ua_project2_add_to_cart", array("codMovie" => $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getCodMovie", array(), "method"))), "html", null, true);
            echo "\" class=\"cart-button\">Add to Cart</a></span> </div>
\t\t\t\t     <div class=\"button\"><span><a href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_movie_details", array("codMovie" => $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getCodMovie", array(), "method"))), "html", null, true);
            echo "\" class=\"details\">Details</a></span></div>
\t\t\t\t</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "\t
\t      </div>


<script type=\"text/javascript\">
        
        //ocultar los *
        document.getElementById('msgErrorIni').style.visibility = \"hidden\";
        document.getElementById('msgErrorPrice').style.visibility = \"hidden\";
        
        function checkYears(){
            var yearIni = document.getElementById('txtYearIni');
            var yearEnd = document.getElementById('txtYearEnd');
            var emptyYearI, emptyYearE;
            
            if(yearIni.value.length < 4){
                emptyYearI = true;
                document.getElementById('msgErrorIni').style.visibility = \"visible\";
            }
            
            if(yearEnd.value.length < 4){
                emptyYearE = true;
                document.getElementById('msgErrorIni').style.visibility = \"visible\";
            }
            
            if(emptyYearE || emptyYearI){
                return false;
            }else{
                return true;
            }
            
        }//end checkYears
        
        function checkPrice(){
            var priceIni = document.getElementById('txtPriceIni');
            var priceEnd = document.getElementById('txtPriceEnd');
            var emptyPriceI, emptyPriceE;
            
            if(priceIni.value.length < 4){
                emptyPriceI = true;
                document.getElementById('msgErrorPrice').style.visibility = \"visible\";
            }
            
            if(priceEnd.value.length < 4){
                emptyPriceE = true;
                document.getElementById('msgErrorPrice').style.visibility = \"visible\";
            }
            
            if(emptyPriceE || emptyPriceI){
                return false;
            }else{
                return true;
            }
        }//end checkPrice
</script> 

";
    }

    public function getTemplateName()
    {
        return "uaUCRuaProject2Bundle:uaMovie:ua_movies_by_years.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 82,  245 => 107,  192 => 92,  137 => 60,  211 => 100,  207 => 99,  190 => 92,  172 => 82,  129 => 55,  234 => 100,  225 => 98,  215 => 99,  202 => 97,  198 => 89,  194 => 94,  165 => 76,  126 => 67,  65 => 13,  70 => 27,  302 => 247,  77 => 31,  84 => 20,  216 => 92,  186 => 91,  175 => 76,  150 => 63,  127 => 53,  310 => 268,  205 => 97,  195 => 88,  191 => 64,  160 => 78,  110 => 39,  90 => 41,  277 => 131,  274 => 130,  266 => 123,  255 => 116,  239 => 99,  236 => 105,  200 => 95,  188 => 90,  184 => 89,  180 => 79,  170 => 80,  148 => 37,  134 => 30,  104 => 36,  58 => 11,  53 => 12,  34 => 8,  81 => 35,  323 => 126,  319 => 125,  301 => 116,  293 => 241,  290 => 109,  282 => 102,  265 => 86,  261 => 85,  257 => 84,  253 => 83,  249 => 82,  244 => 79,  233 => 78,  226 => 103,  218 => 74,  213 => 98,  210 => 94,  161 => 109,  155 => 69,  153 => 102,  100 => 35,  76 => 33,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 256,  312 => 98,  309 => 118,  305 => 117,  298 => 91,  294 => 90,  285 => 236,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 117,  252 => 80,  247 => 78,  241 => 78,  229 => 76,  220 => 70,  214 => 69,  177 => 65,  169 => 77,  140 => 61,  132 => 115,  128 => 28,  107 => 36,  61 => 12,  273 => 88,  269 => 124,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 93,  230 => 104,  227 => 81,  224 => 101,  221 => 101,  219 => 97,  217 => 101,  208 => 67,  204 => 89,  179 => 57,  159 => 65,  143 => 66,  135 => 59,  119 => 53,  102 => 34,  71 => 16,  67 => 17,  63 => 16,  59 => 15,  38 => 9,  94 => 42,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 35,  21 => 2,  26 => 6,  93 => 98,  88 => 6,  78 => 28,  46 => 6,  27 => 4,  44 => 8,  31 => 4,  28 => 3,  201 => 92,  196 => 86,  183 => 168,  171 => 75,  166 => 77,  163 => 39,  158 => 75,  156 => 79,  151 => 68,  142 => 59,  138 => 71,  136 => 116,  121 => 46,  117 => 130,  105 => 44,  91 => 27,  62 => 15,  49 => 11,  24 => 4,  25 => 1,  19 => 1,  79 => 21,  72 => 32,  69 => 17,  47 => 12,  40 => 7,  37 => 8,  22 => 1,  246 => 104,  157 => 56,  145 => 96,  139 => 45,  131 => 52,  123 => 54,  120 => 46,  115 => 65,  111 => 64,  108 => 36,  101 => 33,  98 => 31,  96 => 31,  83 => 22,  74 => 18,  66 => 15,  55 => 14,  52 => 8,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 6,  209 => 98,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 63,  182 => 85,  176 => 84,  173 => 65,  168 => 49,  164 => 59,  162 => 76,  154 => 77,  149 => 51,  147 => 67,  144 => 62,  141 => 48,  133 => 55,  130 => 64,  125 => 51,  122 => 43,  116 => 41,  112 => 41,  109 => 38,  106 => 38,  103 => 32,  99 => 31,  95 => 29,  92 => 28,  86 => 30,  82 => 21,  80 => 34,  73 => 18,  64 => 15,  60 => 13,  57 => 13,  54 => 10,  51 => 13,  48 => 13,  45 => 13,  42 => 7,  39 => 10,  36 => 5,  33 => 7,  30 => 4,);
    }
}
