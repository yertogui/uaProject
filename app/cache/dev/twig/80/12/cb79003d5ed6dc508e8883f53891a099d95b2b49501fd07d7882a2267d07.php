<?php

/* uaUCRuaProject2Bundle::ua_base_admin.html.twig */
class __TwigTemplate_8012cb79003d5ed6dc508e8883f53891a099d95b2b49501fd07d7882a2267d07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'tittlePage' => array($this, 'block_tittlePage'),
            'menuAdmin' => array($this, 'block_menuAdmin'),
            'banner' => array($this, 'block_banner'),
            'content' => array($this, 'block_content'),
            'rightBar' => array($this, 'block_rightBar'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>BLOCK BUSTER ADMINISTRATIVE TASK</title>


        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ua_ucr_admin_app/css/reset.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ua_ucr_admin_app/css/styles.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\">


        <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ua_ucr_admin_app/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ua_ucr_admin_app/js/slider.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ua_ucr_admin_app/js/superfish.js"), "html", null, true);
        echo "\"></script>

        <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ua_ucr_admin_app/js/custom.js"), "html", null, true);
        echo "\"></script>

        <meta name=\"viewport\" content=\"width=device-width, minimum-scale=1.0, maximum-scale=1.0\" />

    </head>
    <body>
        <div id=\"container\" class=\"width\">

            <header> 
                <div class=\"width\">
";
        // line 27
        $this->displayBlock('tittlePage', $context, $blocks);
        // line 32
        echo "                    <nav>
";
        // line 33
        $this->displayBlock('menuAdmin', $context, $blocks);
        // line 85
        echo "                        <div class=\"clear\"></div>
                    </nav>
                </div>

                <div class=\"clear\"></div>


            </header>


            <div id=\"intro\">

                <div class=\"width\">
";
        // line 98
        $this->displayBlock('banner', $context, $blocks);
        // line 109
        echo "                </div>


            </div>

            <div id=\"body\" class=\"width\">

";
        // line 116
        $this->displayBlock('content', $context, $blocks);
        // line 122
        echo "                <aside class=\"sidebar big-sidebar right-sidebar\">
";
        // line 123
        $this->displayBlock('rightBar', $context, $blocks);
        // line 126
        echo "                </aside>
                <div class=\"clear\"></div>
            </div>

    ";
        // line 130
        $this->displayBlock('footer', $context, $blocks);
        // line 166
        echo "        </div>
    </body>
</html>";
    }

    // line 27
    public function block_tittlePage($context, array $blocks = array())
    {
        // line 28
        echo "                    <h1><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_ucr_ua_project2_index_admin", array("email" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "email"), "method"))), "html", null, true);
        echo "\">Block<strong>Buster</strong></a></h1>

                    <h1><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_ucr_ua_project2_index_admin", array("email" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "email"), "method"))), "html", null, true);
        echo "\">Administrative<strong>Taks</strong></a></h1>
";
    }

    // line 33
    public function block_menuAdmin($context, array $blocks = array())
    {
        // line 34
        echo "                        <ul class=\"sf-menu dropdown\">


                            <li class=\"selected\"><a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_ucr_ua_project2_index_admin", array("email" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "email"), "method"))), "html", null, true);
        echo "\"><i class=\"fa fa-home\"></i> Home</a></li>

                            <li>

                                <a href=\"examples.html\"><i class=\"fa fa-code\"></i> Insert</a>

                                <ul>
                                    <li><a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_ucr_ua_project2_insert_actor_form", array("email" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "email"), "method"))), "html", null, true);
        echo "\">Actor</a></li>
                                    <li><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_ucr_ua_project2_insert_adm_form", array("email" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "email"), "method"))), "html", null, true);
        echo "\">Administrator</a></li>
                                    <li><a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_ucr_ua_project2_insert_gender_form", array("email" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "email"), "method"))), "html", null, true);
        echo "\">Gender</a></li>
                                    <li><a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_ucr_ua_project2_insert_movie_form", array("email" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "email"), "method"))), "html", null, true);
        echo "\">Movie</a></li>
                                </ul>

                            </li>

                            <li><a href=\"..\"><i class=\"fa fa-briefcase\"></i> Update</a>
                            <ul>
                                    <li><a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_ucr_ua_project2_update_actor_form", array("email" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "email"), "method"))), "html", null, true);
        echo "\">Actor</a></li>
                                    <li><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_ucr_ua_project2_update_gender_form", array("email" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "email"), "method"))), "html", null, true);
        echo "\">Gender</a></li>
                                    <li><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_ucr_ua_project2_update_movie_form", array("email" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "email"), "method"))), "html", null, true);
        echo "\">Movie</a></li>
                                                                       
                                </ul>
                            </li>
                            <li>

                                <a href=\"..\"><i class=\"fa fa-database\"></i> Delete</a>

                                <ul>
                                    <li><a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_ucr_ua_project2_update_actor_form", array("email" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "email"), "method"))), "html", null, true);
        echo "\">Actor</a></li>
                                    <li><a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_ucr_ua_project2_update_gender_form", array("email" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "email"), "method"))), "html", null, true);
        echo "\">Gender</a></li>
                                    <li><a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_ucr_ua_project2_update_movie_form", array("email" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "email"), "method"))), "html", null, true);
        echo "\">Movie</a></li>
                                   </ul>

                            </li>

                            <li><a href=\"..\"><i class=\"fa fa-code\"></i> Reports</a>
                            <ul>
                                    <li><a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_ucr_ua_project2_sale_movies_years_form", array("email" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "email"), "method"))), "html", null, true);
        echo "\">Sale Movies per year</a></li>
                                      </ul>
                             </li>
                            <li><a href=\"#\"><i class=\"fa fa-phone\"></i>Block Buster</a>
                            <ul>
                                <li><a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_ucr_ua_project2_update_information_form", array("email" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "email"), "method"))), "html", null, true);
        echo "\">Edit Information</a></li>
                            </ul>
                            </li>
                        </ul>

";
    }

    // line 98
    public function block_banner($context, array $blocks = array())
    {
        // line 99
        echo "                    <div class=\"intro-content\">

                        <h2>Block Buster </h2>
                        <p></p>

                        <p><a href=\"";
        // line 104
        echo $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_log_out");
        echo "\" class=\"button button-slider\"><i class=\"fa fa-gbp\"></i>Log Out</a>
                            

                    </div>
";
    }

    // line 116
    public function block_content($context, array $blocks = array())
    {
        // line 117
        echo "
                <section id=\"content\" class=\"two-column with-right-sidebar\">

                </section>
";
    }

    // line 123
    public function block_rightBar($context, array $blocks = array())
    {
        // line 124
        echo "
";
    }

    // line 130
    public function block_footer($context, array $blocks = array())
    {
        // line 131
        echo "            <footer>
                <div class=\"footer-content width\">
                   
                <h4>Block Buster </h4></li>
                <h5>Copyright 2016º</h5>
                <h6>Cartago,Costa Rica</h6>
                    

                   
                    <ul class=\"endfooter\">
                        
                        <li><br /><br />
                          <h6>Contact us</h6>
                            <div class=\"social-icons\">

                                <a href=\"#\"><i class=\"fa fa-facebook fa-2x\"></i></a>

                                <a href=\"#\"><i class=\"fa fa-twitter fa-2x\"></i></a>

                                <a href=\"#\"><i class=\"fa fa-youtube fa-2x\"></i></a>

                                <a href=\"#\"><i class=\"fa fa-instagram fa-2x\"></i></a>

                            </div>

                        </li>
                    </ul>

                    <div class=\"clear\"></div>
                </div>
                <div class=\"footer-bottom\">
                    <p>&copy; Block Buster Administrative taks.</p>
                </div>
            </footer>
    ";
    }

    public function getTemplateName()
    {
        return "uaUCRuaProject2Bundle::ua_base_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 131,  274 => 130,  269 => 124,  266 => 123,  258 => 117,  255 => 116,  246 => 104,  239 => 99,  236 => 98,  226 => 79,  218 => 74,  208 => 67,  204 => 66,  200 => 65,  188 => 56,  184 => 55,  180 => 54,  170 => 47,  166 => 46,  162 => 45,  158 => 44,  148 => 37,  143 => 34,  140 => 33,  134 => 30,  128 => 28,  125 => 27,  119 => 166,  117 => 130,  111 => 126,  109 => 123,  106 => 122,  104 => 116,  95 => 109,  93 => 98,  78 => 85,  76 => 33,  73 => 32,  71 => 27,  58 => 17,  53 => 15,  49 => 14,  45 => 13,  38 => 9,  34 => 8,  25 => 1,);
    }
}
