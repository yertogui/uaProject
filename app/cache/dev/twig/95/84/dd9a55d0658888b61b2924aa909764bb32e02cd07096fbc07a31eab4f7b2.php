<?php

/* uaUCRuaProject2Bundle:Default:ua_search_results.html.twig */
class __TwigTemplate_9584dd9a55d0658888b61b2924aa909764bb32e02cd07096fbc07a31eab4f7b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("uaUCRuaProject2Bundle::ua_base.html.twig");

        $this->blocks = array(
            'slider' => array($this, 'block_slider'),
            'header_bottom_left' => array($this, 'block_header_bottom_left'),
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
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "

    <div class=\"content\">
    \t<div class=\"content_top\">
    \t\t<div class=\"heading\">
    \t\t<h3>Movies</h3>
    \t\t</div>
                
    \t\t<div class=\"sort\">
    \t\t<p>Sort by:
    \t\t\t<select>
    \t\t\t\t<option>Lowest Price</option>
    \t\t\t\t<option>Highest Price</option>
    \t\t\t\t<option>Lowest Price</option>
    \t\t\t\t<option>Lowest Price</option>
    \t\t\t\t<option>Lowest Price</option>
    \t\t\t\t<option>In Stock</option>  \t\t\t\t   \t\t\t\t
    \t\t\t</select>
    \t\t</p>
    \t\t</div>
    \t\t<div class=\"show\">
    \t\t<p>Show:
                    <select name=\"showNumber\" id=\"showNumber\" onchange=\"changeShowNumber()\">
                        <option value=\"3\" onclick=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_movies", array("page" => 1, "moviesNum" => 3)), "html", null, true);
        echo "\">3</option>
                        <option value=\"6\" onclick=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_movies", array("page" => 1, "moviesNum" => 6)), "html", null, true);
        echo "\">6</option>
                        <option value=\"9\" onclick=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_movies", array("page" => 1, "moviesNum" => 9)), "html", null, true);
        echo "\">9</option>
                        <option value=\"12\" onclick=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_movies", array("page" => 1, "moviesNum" => 12)), "html", null, true);
        echo "\">12</option>
                    </select>
    \t\t</p>
                
    \t\t</div>
    \t\t<div class=\"page-no\">
    \t\t\t<p>Result Pages:<ul>
                           ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["totalPages"]) ? $context["totalPages"] : $this->getContext($context, "totalPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 42
            echo "                                <li class=\"active\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_movies", array("page" => (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "moviesNum" => (isset($context["moviesNumber"]) ? $context["moviesNumber"] : $this->getContext($context, "moviesNumber")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</a></li>
                           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                            
    \t\t\t\t
    \t\t\t\t<!--<li>[<a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_movies", array("page" => 1, "moviesNum" => 6)), "html", null, true);
        echo "\"> Next>>></a >]</li>  -->
    \t\t\t\t</ul></p>
    \t\t</div>
    \t\t<div class=\"clear\"></div>
    \t</div>
\t      <div class=\"section group\">
                   \t
                   ";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allMovies"]) ? $context["allMovies"] : $this->getContext($context, "allMovies")));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 54
            echo "\t\t\t\t<div class=\"grid_1_of_4 images_1_of_4\">
                                    <div class=\"listimg listimg_2_of_1\">
                                            <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_movie_details", array("codMovie" => $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getCodMovie", array(), "method"))), "html", null, true);
            echo "\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/uaucr_uaproyect2_app/images/movies/movie" . $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getCodMovie", array(), "method")) . ".jpg")), "html", null, true);
            echo "\" height=\"170\" width=\"150\" alt=\"\" /></a>
                                    </div>
\t\t\t\t\t 
\t\t\t\t\t <h2>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getTitle", array(), "method"), "html", null, true);
            echo " </h2>
\t\t\t\t\t
\t\t\t\t\t <p><span class=\"price\">\$";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getPrice", array(), "method"), "html", null, true);
            echo ".00</span></p>
\t\t\t\t\t  <div class=\"button\"><span><img src=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/uaucr_uaproyect2_app/images/cart.jpg"), "html", null, true);
            echo "\" alt=\"\" /><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_ucr_ua_project2_add_to_cart", array("codMovie" => $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getCodMovie", array(), "method"))), "html", null, true);
            echo "\" class=\"cart-button\">Add to Cart</a></span> </div>
\t\t\t\t     <div class=\"button\"><span><a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_movie_details", array("codMovie" => $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getCodMovie", array(), "method"))), "html", null, true);
            echo "\" class=\"details\">Details</a></span></div>
\t\t\t\t</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "\t
\t      </div>

            <div class=\"content_top\">
    \t\t<div class=\"heading\">
                    <h3>Actors</h3>
    \t\t</div>
                
    \t\t<div class=\"page-no\">
    \t\t\t<p>Result Pages:<ul>
                           ";
        // line 75
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["totalPages"]) ? $context["totalPages"] : $this->getContext($context, "totalPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 76
            echo "                                <li class=\"active\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_movies", array("page" => (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "moviesNum" => (isset($context["moviesNumber"]) ? $context["moviesNumber"] : $this->getContext($context, "moviesNumber")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</a></li>
                           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "      
    \t\t\t\t</ul></p>
    \t\t</div>
    \t\t<div class=\"clear\"></div>
    \t</div>

            <div class=\"section group\">
                   \t
                   ";
        // line 86
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allActors"]) ? $context["allActors"] : $this->getContext($context, "allActors")));
        foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
            // line 87
            echo "                        <div class=\"grid_1_of_4 images_1_of_4\">
                          
                            <h2><a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_actor_movies", array("idActor" => $this->getAttribute((isset($context["actor"]) ? $context["actor"] : $this->getContext($context, "actor")), "getId", array(), "method"), "page" => 1, "moviesNum" => 6)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["actor"]) ? $context["actor"] : $this->getContext($context, "actor")), "getName", array(), "method") . " ") . $this->getAttribute((isset($context["actor"]) ? $context["actor"] : $this->getContext($context, "actor")), "getLastname", array(), "method")), "html", null, true);
            echo "</a> </h2>

                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "\t
\t      </div>
<script type=\"text/javascript\">
        
        function changeShowNumber(){
            var selectedNumber = document.getElementById('showNumber').value;
            
            
        }
</script> 

";
    }

    public function getTemplateName()
    {
        return "uaUCRuaProject2Bundle:Default:ua_search_results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 92,  204 => 89,  200 => 87,  196 => 86,  186 => 78,  175 => 76,  171 => 75,  159 => 65,  150 => 63,  144 => 62,  140 => 61,  135 => 59,  127 => 56,  123 => 54,  119 => 53,  109 => 46,  105 => 44,  94 => 42,  90 => 41,  80 => 34,  76 => 33,  72 => 32,  68 => 31,  43 => 8,  40 => 7,  35 => 5,  30 => 4,);
    }
}
