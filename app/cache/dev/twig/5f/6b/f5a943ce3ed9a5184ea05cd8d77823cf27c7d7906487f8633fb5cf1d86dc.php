<?php

/* uaUCRuaProject2Bundle:uaMovie:ua_movies_by_actor.html.twig */
class __TwigTemplate_5f6bf5a943ce3ed9a5184ea05cd8d77823cf27c7d7906487f8633fb5cf1d86dc extends Twig_Template
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
        // line 36
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["actor"]) ? $context["actor"] : $this->getContext($context, "actor")), "getName", array(), "method") . " ") . $this->getAttribute((isset($context["actor"]) ? $context["actor"] : $this->getContext($context, "actor")), "getLastname", array(), "method")), "html", null, true);
        echo "</h3>
    \t\t</div>
                
    \t\t<div class=\"sort\">
                    
                    <form action=\"";
        // line 41
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
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_range_movies_by_price", array("page" => 1, "moviesNum" => 6)), "html", null, true);
        echo "\" method=\"POST\">
                        <p>Price: \$
                            <input type=\"number\" name=\"txtPriceIni\" id=\"txtPriceIni\"min=\"1\" max=\"20\"/>
                            <br> &nbsp;&nbsp;&nbsp;&nbsp; to: \$
                            <input type=\"number\" name=\"txtPriceEnd\" id=\"txtPriceEnd\"min=\"1\" max=\"20\"/>
                            <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type=\"submit\" value=\"Search\" name=\"btnPriceRange\" id=\"btnPriceRange\" onclick=\"return checkPrice();\"/>
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
        // line 79
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["totalPages"]) ? $context["totalPages"] : $this->getContext($context, "totalPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo " 
                                <li class=\"active\"><a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_actor_movies", array("idActor" => $this->getAttribute((isset($context["actor"]) ? $context["actor"] : $this->getContext($context, "actor")), "getId"), "page" => (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "moviesNum" => (isset($context["moviesNumber"]) ? $context["moviesNumber"] : $this->getContext($context, "moviesNumber")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</a></li>
                           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                            
    \t\t\t\t
    \t\t\t\t<!--<li>[<a href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_movies", array("page" => 1, "moviesNum" => 6)), "html", null, true);
        echo "\"> Next>>></a >]</li>  -->
    \t\t\t\t</ul></p>
    \t\t</div>
    \t\t<div class=\"clear\"></div>
    \t</div>
\t      <div class=\"section group\">
                   \t
                   ";
        // line 91
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allMovies"]) ? $context["allMovies"] : $this->getContext($context, "allMovies")));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 92
            echo "\t\t\t\t<div class=\"grid_1_of_4 images_1_of_4\">
                                    <div class=\"listimg listimg_2_of_1\">
                                            <a href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_movie_details", array("codMovie" => $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getCodMovie", array(), "method"))), "html", null, true);
            echo "\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/uaucr_uaproyect2_app/images/movies/movie" . $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getCodMovie", array(), "method")) . ".jpg")), "html", null, true);
            echo "\" height=\"170\" width=\"150\" alt=\"\" /></a>
                                    </div>
\t\t\t\t\t 
\t\t\t\t\t <h2>";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getTitle", array(), "method"), "html", null, true);
            echo " </h2>
\t\t\t\t\t
\t\t\t\t\t <p><span class=\"price\">\$";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getPrice", array(), "method"), "html", null, true);
            echo ".00</span></p>
\t\t\t\t\t  <div class=\"button\"><span><img src=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/uaucr_uaproyect2_app/images/cart.jpg"), "html", null, true);
            echo "\" alt=\"\" /><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_ucr_ua_project2_add_to_cart", array("codMovie" => $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getCodMovie", array(), "method"))), "html", null, true);
            echo "\" class=\"cart-button\">Add to Cart</a></span> </div>
\t\t\t\t     <div class=\"button\"><span><a href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_movie_details", array("codMovie" => $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getCodMovie", array(), "method"))), "html", null, true);
            echo "\" class=\"details\">Details</a></span></div>
\t\t\t\t</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
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
        return "uaUCRuaProject2Bundle:uaMovie:ua_movies_by_actor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 103,  217 => 101,  211 => 100,  207 => 99,  202 => 97,  194 => 94,  190 => 92,  186 => 91,  176 => 84,  172 => 82,  162 => 80,  156 => 79,  129 => 55,  112 => 41,  104 => 36,  95 => 29,  92 => 28,  83 => 22,  79 => 21,  74 => 18,  63 => 16,  59 => 15,  53 => 12,  49 => 11,  44 => 8,  41 => 7,  36 => 5,  31 => 4,);
    }
}
