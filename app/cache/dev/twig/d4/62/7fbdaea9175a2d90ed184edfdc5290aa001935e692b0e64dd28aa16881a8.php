<?php

/* uaUCRuaProject2Bundle:uaMovie:ua_movie_details.html.twig */
class __TwigTemplate_d4627fbdaea9175a2d90ed184edfdc5290aa001935e692b0e64dd28aa16881a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("uaUCRuaProject2Bundle::ua_base.html.twig");

        $this->blocks = array(
            'header_bottom_left' => array($this, 'block_header_bottom_left'),
            'header_bottom_right_images' => array($this, 'block_header_bottom_right_images'),
            'slider' => array($this, 'block_slider'),
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
    public function block_header_bottom_left($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"header_bottom\">
    <div class=\"header_bottom_left\">
        <div class=\"heading\">
            <br> 
            <h3>&nbsp&nbsp&nbsp&nbsp&nbsp";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getTitle", array(), "method"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getYear", array(), "method"), "html", null, true);
        echo ")</h3>
        </div>

        <div class=\"content_top\">

            <div class=\"content\">
                <div class=\"synopsis\">
                    <h2><b>Synopsis: </b></h2>
                    <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getDescription", array(), "method"), "html", null, true);
        echo "</h3><br>
                    <h2><b>Gender: ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getCodGender", array(), "method"), "getName", array(), "method"), "html", null, true);
        echo "</b></h2><br>
                    <h2><b>Actors:</b></h2>
                ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getIdactor", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
            // line 21
            echo "                    ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["actor"]) ? $context["actor"] : $this->getContext($context, "actor")), "getName", array(), "method") . " ") . $this->getAttribute((isset($context["actor"]) ? $context["actor"] : $this->getContext($context, "actor")), "getLastname", array(), "method")), "html", null, true);
            echo " <br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "<br>

                ";
        // line 24
        if (($this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getSubtitled", array(), "method") == 1)) {
            // line 25
            echo "                    <h2><b>Subtitled: YES  </b></h2><br>
                     ";
        } elseif (($this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getPremiere", array(), "method") == 0)) {
            // line 27
            echo "                    <h2><b>Subtitled: NO  </b></h2><br>
                     ";
        } else {
            // line 29
            echo "                ";
        }
        // line 30
        echo "
                ";
        // line 31
        if (($this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getPremiere", array(), "method") == 1)) {
            // line 32
            echo "                    <h2><b>Premiere: YES  </b></h2><br>
                     ";
        } elseif (($this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getPremiere", array(), "method") == 0)) {
            // line 34
            echo "                    <h2><b>Premiere: NO  </b></h2><br>
                     ";
        } else {
            // line 36
            echo "                ";
        }
        // line 37
        echo "
                    <h2><b>Running Time: ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getRunningTime", array(), "method"), "html", null, true);
        echo " min</b></h2><br>
                    <h2><b>Price: </b>\$";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getPrice", array(), "method"), "html", null, true);
        echo ".00</h2>


                </div>
                
                    <!--Calificacion de estrellas -->
                    <h2><b>Qualification: </h2>    
                    
                    <fieldset class=\"rating\" >
                        <input type=\"radio\" onclick=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_ucr_ua_project2_movie_qualification", array("codMovie" => $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getCodmovie", array(), "method"))), "html", null, true);
        echo "\" id=\"star5\" name=\"rating\" value=\"5\" /><label class = \"full\" for=\"star5\" title=\"Awesome - 5 stars\"></label>
                        <input type=\"radio\" id=\"star4\" name=\"rating\" value=\"4\" /><label class = \"full\" for=\"star4\" title=\"Pretty good - 4 stars\"></label>
                        <input type=\"radio\" id=\"star3\" name=\"rating\" value=\"3\" /><label class = \"full\" for=\"star3\" title=\"Meh - 3 stars\"></label>
                        <input type=\"radio\" id=\"star2\" name=\"rating\" value=\"2\" /><label class = \"full\" for=\"star2\" title=\"Kinda bad - 2 stars\"></label>
                        <input type=\"radio\" id=\"star1\" name=\"rating\" value=\"1\" /><label class = \"full\" for=\"star1\" title=\"Sucks big time - 1 star\"></label>
                    </fieldset>
               
               <br><br><br>
               
            </div>
            
        </div>
 
        <div class=\"clear\"></div>
    </div>
";
    }

    // line 65
    public function block_header_bottom_right_images($context, array $blocks = array())
    {
        // line 66
        echo "    <div class=\"header_bottom_right_images_2\" width=\"49%\">
        <!-- FlexSlider -->
                   ";
        // line 68
        $this->displayBlock('slider', $context, $blocks);
        // line 82
        echo "        <!-- FlexSlider -->
        <form>

</form>
    </div>
    <div class=\"clear\"></div>
</div>\t

";
    }

    // line 68
    public function block_slider($context, array $blocks = array())
    {
        // line 69
        echo "        <section class=\"slider\">
            <div class=\"flexslider\">
                <ul class=\"slides\">
                    <li><img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/uaucr_uaproyect2_app/images/movies/movie" . $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getCodMovie", array(), "method")) . ".jpg")), "html", null, true);
        echo "\" height=\"600\" width=\"280\" alt=\"\"/></li>
                </ul>

                <div class=\"grid_1_of_4 images_1_of_4\">
                    <div class=\"button\"><span><img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/uaucr_uaproyect2_app/images/cart.jpg"), "html", null, true);
        echo "\" alt=\"\" /><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_ucr_ua_project2_add_to_cart", array("codMovie" => $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getCodMovie", array(), "method"))), "html", null, true);
        echo "\" class=\"cart-button\">Add to Cart</a></span> </div>
                </div>

            </div>
        </section>
                   ";
    }

    // line 93
    public function block_content($context, array $blocks = array())
    {
        // line 94
        echo "
                <div class=\"content\">
                    <div class=\"content_top\">
                        <div class=\"heading\">
                            <h3>Comments</h3>
                        </div>

                        <div class=\"clear\"></div>
                    </div>
                    <div class=\"section group\">
                        <div class=\"search_box\">
                            <form action=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_ucr_ua_project2_insert_comment", array("codMovie" => $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getCodmovie", array(), "method"))), "html", null, true);
        echo "\" method=\"POST\">
                                <h2>Email: </h2>
                                <input type=\"text\" border=\"black\" name=\"txtEmail\" id=\"txtEmail\">
                                <h2>Comment: </h2>
                                <textarea name=\"txtComment\" id=\"txtComment\"></textarea>
                                <input type=\"submit\" name=\"btnSave\" id=\"btnSave\" value=\"SAVE\">
                                
                            </form>
                        </div>
                            
                        
                    </div>
                    <div class=\"content\">
                        ";
        // line 118
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 119
            echo "                            <h2>";
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "getAuthor", array(), "method") . " said: "), "html", null, true);
            echo "</h2> <br>
                            <h3>";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "getComment", array(), "method"), "html", null, true);
            echo "</h3>
                            ____________________________________________________
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "<br>
                    </div>
                </div>
            ";
    }

    public function getTemplateName()
    {
        return "uaUCRuaProject2Bundle:uaMovie:ua_movie_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 122,  236 => 120,  231 => 119,  227 => 118,  211 => 105,  198 => 94,  195 => 93,  183 => 76,  176 => 72,  171 => 69,  168 => 68,  156 => 82,  154 => 68,  150 => 66,  147 => 65,  127 => 48,  115 => 39,  111 => 38,  108 => 37,  105 => 36,  101 => 34,  97 => 32,  95 => 31,  92 => 30,  89 => 29,  85 => 27,  81 => 25,  79 => 24,  75 => 22,  66 => 21,  62 => 20,  57 => 18,  53 => 17,  40 => 9,  34 => 5,  31 => 4,);
    }
}
