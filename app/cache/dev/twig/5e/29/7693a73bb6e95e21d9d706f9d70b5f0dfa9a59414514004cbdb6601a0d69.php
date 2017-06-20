<?php

/* uaUCRuaProject2Bundle::ua_base.html.twig */
class __TwigTemplate_5e297693a73bb6e95e21d9d706f9d70b5f0dfa9a59414514004cbdb6601a0d69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'header_bottom_left' => array($this, 'block_header_bottom_left'),
            'header_bottom_right_images' => array($this, 'block_header_bottom_right_images'),
            'slider' => array($this, 'block_slider'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE HTML>
<head>
    <title>BLOCK BUSTER</title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/uaucr_uaproyect2_app/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/uaucr_uaproyect2_app/css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js\"></script>
    <script src=\"js/script.js\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/uaucr_uaproyect2_app/js/jquery-1.7.2.min.js"), "html", null, true);
        echo "\"></script> 
    <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/uaucr_uaproyect2_app/js/nav.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/uaucr_uaproyect2_app/js/move-top.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/uaucr_uaproyect2_app/js/easing.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/uaucr_uaproyect2_app/js/nav-hover.js"), "html", null, true);
        echo "\"></script>
    <link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
    <script type=\"text/javascript\">
        \$(document).ready(function(\$) {
            \$('#dc_mega-menu-orange').dcMegaMenu({rowItems: '4', speed: 'fast', effect: 'fade'});
        });
        </script>
    </head>
    <body>
        <div class=\"wrap\">
            <div class=\"header\">
                <div class=\"header_top\">
                    <div class=\"logo\">
                        <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/uaucr_uaproyect2_app/images/logo.png"), "html", null, true);
        echo "\" height=\"100\"  alt=\"\" /></a>
                    </div>
                    <div class=\"header_top_right\">
                     
                        <div class=\"shopping_cart\">
                            <div class=\"cart\">
                                <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("ua_ucr_ua_project2_shopping_cart");
        echo "\" title=\"View my shopping cart\" rel=\"nofollow\">
                                    <strong class=\"opencart\"> </strong>
                                    <span class=\"cart_title\">Cart</span>
                                    
                                </a>
                            </div>
                        </div>
                        
                        <!-- Boton de Log in -->
                        <div class=\"login\">
                            <span><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_show_login_form");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/uaucr_uaproyect2_app/images/login.png"), "html", null, true);
        echo "\" alt=\"\" title=\"login\"/></a></span>
                        </div>
                        
                        <div class=\"search_box\">
                            <form action=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_ucr_ua_project2_search", array("page" => 1, "moviesNum" => 6)), "html", null, true);
        echo "\" method=\"POST\">
                                <input type=\"text\" value=\"Find Movies, Actors and more...\" name=\"txtKeyword\" id=\"txtKeyword\" onfocus=\"this.value=''\" placeholder=\"Find Movies, Actors and more...\">
                                <input type=\"submit\" value=\"SEARCH\">
                            </form>
                        </div>
                        
                        <!--LOG OUT-->
                        <div>
                            <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_log_out");
        echo "\"><h2> &nbsp;&nbsp;LOG OUT</h2></a>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                    <div class=\"clear\"></div>
                </div>
                        <!-- MENU -->
                ";
        // line 64
        $this->displayBlock('menu', $context, $blocks);
        // line 67
        echo "                        <!-- end menu -->

                        <div class=\"header_bottom\">

            ";
        // line 71
        $this->displayBlock('header_bottom_left', $context, $blocks);
        // line 74
        echo "
                ";
        // line 75
        $this->displayBlock('header_bottom_right_images', $context, $blocks);
        // line 96
        echo "                            <div class=\"clear\"></div>
                        </div>\t
                    </div>

                    <div class=\"main\">

";
        // line 102
        $this->displayBlock('content', $context, $blocks);
        // line 105
        echo "                    </div>

                </div>
                <!-- FOOTER--> 
 ";
        // line 109
        $this->displayBlock('footer', $context, $blocks);
        // line 150
        echo "
                <!-- END FOOTER -->
                <script type=\"text/javascript\">
                    \$(document).ready(function() {
                        /*
                         var defaults = {
                         containerID: 'toTop', // fading element id
                         containerHoverID: 'toTopHover', // fading element hover id
                         scrollSpeed: 1200,
                         easingType: 'linear' 
                         };
                         */

                        \$().UItoTop({easingType: 'easeOutQuart'});

                    });
                    </script>
                    <a href=\"#\" id=\"toTop\" style=\"display: block;\"><span id=\"toTopHover\" style=\"opacity: 1;\"></span></a>
                    <link href=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/uaucr_uaproyect2_app/css/flexslider.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
                    <script defer src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/uaucr_uaproyect2_app/js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\">
                    \$(function() {
                        SyntaxHighlighter.all();
                    });
                    \$(window).load(function() {
                        \$('.flexslider').flexslider({
                            animation: \"slide\",
                            start: function(slider) {
                                \$('body').removeClass('loading');
                            }
                        });
                    });
                        </script>
                    </body>
                </html>


";
    }

    // line 64
    public function block_menu($context, array $blocks = array())
    {
        // line 65
        echo "
                ";
    }

    // line 71
    public function block_header_bottom_left($context, array $blocks = array())
    {
        // line 72
        echo "                           
                ";
    }

    // line 75
    public function block_header_bottom_right_images($context, array $blocks = array())
    {
        // line 76
        echo "                            <div class=\"header_bottom_right_images\">
                                <!-- FlexSlider -->
                   ";
        // line 78
        $this->displayBlock('slider', $context, $blocks);
        // line 93
        echo "                                <!-- FlexSlider -->
                            </div>
                ";
    }

    // line 78
    public function block_slider($context, array $blocks = array())
    {
        // line 79
        echo "                                <section class=\"slider\">
                                    <div class=\"flexslider\">
                                        <ul class=\"slides\">
                                            <li><img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/uaucr_uaproyect2_app/images/movieB1.jpg"), "html", null, true);
        echo "\" height=\"500\" alt=\"\"/></li>
                                            <li><img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/uaucr_uaproyect2_app/images/pulp.jpg"), "html", null, true);
        echo "\" height=\"500\" alt=\"\"/></li>
                                            <li><img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/uaucr_uaproyect2_app/images/movieB3.jpg"), "html", null, true);
        echo "\" height=\"500\" alt=\"\"/></li>
                                            <li><img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/uaucr_uaproyect2_app/images/movieB4.jpg"), "html", null, true);
        echo "\" height=\"500\" alt=\"\"/></li>
                                            <li><img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/uaucr_uaproyect2_app/images/movieB5.jpg"), "html", null, true);
        echo "\" height=\"500\" alt=\"\"/></li>
                                            <li><img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/uaucr_uaproyect2_app/images/movieB6.jpg"), "html", null, true);
        echo "\" height=\"500\" alt=\"\"/></li>
                                            <li><img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/uaucr_uaproyect2_app/images/movieB7.jpg"), "html", null, true);
        echo "\" height=\"500\" alt=\"\"/></li>
                                        </ul>
                                    </div>
                                </section>
                   ";
    }

    // line 102
    public function block_content($context, array $blocks = array())
    {
        // line 103
        echo "
";
    }

    // line 109
    public function block_footer($context, array $blocks = array())
    {
        // line 110
        echo "              <div class=\"footer\">
                    <div class=\"wrapper\">\t
                        <div class=\"section group\">
                           <div class=\"col_1_of_4 span_1_of_4\">
                                <h4>Information</h4>
                                <ul>
                                    <li><a href=\"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_about");
        echo "\">About Us</a></li>
                                    <li><a href=\"";
        // line 117
        echo $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_contact");
        echo "\">Contact Us</a></li>
                                    <li><a href=\"";
        // line 118
        echo $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_faq");
        echo "\">FAQ</a></li>
                                    </ul>
                           </div>
                                
                             <div class=\"col_1_of_4 span_1_of_4\">
                                <h4>My Account</h4>
                                <ul>
                                    <li><a href=\"";
        // line 125
        echo $this->env->getExtension('routing')->getPath("ua_ucr_ua_project2_customer_profile");
        echo "\">Edit Profile</a></li>
                                    <li><a href=\"";
        // line 126
        echo $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_log_out");
        echo "\">Log out</a></li>
                                </ul>
                           </div>
                                
                          <div class=\"col_1_of_4 span_1_of_4\">
                           <div class=\"social-icons\">
                                    <h4>Follow Us</h4>
                                    <ul>
                                        <li class=\"facebook\"><a href=\"#\" target=\"_blank\"> </a></li>
                                        <li class=\"twitter\"><a href=\"#\" target=\"_blank\"> </a></li>
                                        <li class=\"googleplus\"><a href=\"#\" target=\"_blank\"> </a></li>
                                        <li class=\"contact\"><a href=\"#\" target=\"_blank\"> </a></li>
                                        <div class=\"clear\"></div>
                                    </ul>
                                </div>
                           
                        </div>
                        </div>
                        <div class=\"copy_right\">
                            <p>Block Buster © All rights Reseverd</p>
                        </div>
                    </div>
                </div>
";
    }

    public function getTemplateName()
    {
        return "uaUCRuaProject2Bundle::ua_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 126,  319 => 125,  309 => 118,  305 => 117,  301 => 116,  293 => 110,  290 => 109,  285 => 103,  282 => 102,  273 => 88,  269 => 87,  265 => 86,  261 => 85,  257 => 84,  253 => 83,  249 => 82,  244 => 79,  241 => 78,  235 => 93,  233 => 78,  229 => 76,  226 => 75,  221 => 72,  218 => 71,  213 => 65,  187 => 169,  183 => 168,  163 => 150,  161 => 109,  153 => 102,  145 => 96,  140 => 74,  138 => 71,  132 => 67,  130 => 64,  120 => 57,  100 => 45,  87 => 35,  76 => 29,  55 => 14,  51 => 13,  47 => 12,  43 => 11,  37 => 8,  33 => 7,  25 => 1,  234 => 100,  225 => 98,  219 => 97,  215 => 96,  210 => 64,  202 => 91,  198 => 89,  194 => 88,  184 => 81,  180 => 79,  169 => 77,  165 => 76,  155 => 105,  151 => 68,  147 => 67,  143 => 75,  125 => 51,  109 => 49,  102 => 34,  95 => 29,  92 => 28,  83 => 22,  79 => 21,  74 => 18,  63 => 16,  59 => 15,  53 => 12,  49 => 11,  44 => 8,  41 => 7,  36 => 5,  31 => 4,);
    }
}
