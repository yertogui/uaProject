<?php

/* uaUCRuaProject2Bundle::ua_base2.html.twig */
class __TwigTemplate_15f6fef1e695554864af28817789b37e6fe358742a69db761a6a0d5050865d8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<head>
<title>BLOCK BUSTER!</title>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/uaucr_uaproyect2_app/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/uaucr_uaproyect2_app/css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js\"></script>
<script src=\"js/script.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/uaucr_uaproyect2_app/js/jquery-1.7.2.min.js"), "html", null, true);
        echo "\"></script> 
<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/uaucr_uaproyect2_app/js/nav.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/uaucr_uaproyect2_app/js/move-top.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/uaucr_uaproyect2_app/js/easing.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/uaucr_uaproyect2_app/js/nav-hover.js"), "html", null, true);
        echo "\"></script>
<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
<script type=\"text/javascript\">
  \$(document).ready(function(\$){
    \$('#dc_mega-menu-orange').dcMegaMenu({rowItems:'4',speed:'fast',effect:'fade'});
  });
</script>
</head>
<body>
  <div class=\"wrap\">
\t<div class=\"header\">
\t\t<div class=\"header_top\">
\t\t\t<div class=\"logo\">
\t\t\t\t<a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/uaucr_uaproyect2_app/images/logo.png"), "html", null, true);
        echo "\" alt=\"\" /></a>
\t\t\t</div>
\t\t       <div class=\"currency\">
                           <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_homepage");
        echo "\"><div class=\"search\"><div><button class=\"grey\">HOME</button></div></div></a>
\t\t       </div>
\t <div class=\"clear\"></div>
 </div>
         
            <!-- MENU -->
            
        ";
        // line 38
        $this->displayBlock('menu', $context, $blocks);
        // line 41
        echo "            
            
               <!-- end menu -->
\t\t
</div>

 <div class=\"main\">
     
";
        // line 49
        $this->displayBlock('content', $context, $blocks);
        // line 52
        echo " </div>
          
</div>
                   <!-- FOOTER--> 
 ";
        // line 56
        $this->displayBlock('footer', $context, $blocks);
        // line 97
        echo "    
    <!-- END FOOTER -->
    <script type=\"text/javascript\">
\t\t\$(document).ready(function() {
\t\t\t/*
\t\t\tvar defaults = {
\t  \t\t\tcontainerID: 'toTop', // fading element id
\t\t\t\tcontainerHoverID: 'toTopHover', // fading element hover id
\t\t\t\tscrollSpeed: 1200,
\t\t\t\teasingType: 'linear' 
\t \t\t};
\t\t\t*/
\t\t\t
\t\t\t\$().UItoTop({ easingType: 'easeOutQuart' });
\t\t\t
\t\t});
\t</script>
    <a href=\"#\" id=\"toTop\" style=\"display: block;\"><span id=\"toTopHover\" style=\"opacity: 1;\"></span></a>
    <link href=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/uaucr_uaproyect2_app/css/flexslider.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
\t\t\t\t\t\t\t  <script defer src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/uaucr_uaproyect2_app/js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t\t\t  <script type=\"text/javascript\">
\t\t\t\t\t\t\t\t\$(function(){
\t\t\t\t\t\t\t\t  SyntaxHighlighter.all();
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\$(window).load(function(){
\t\t\t\t\t\t\t\t  \$('.flexslider').flexslider({
\t\t\t\t\t\t\t\t\tanimation: \"slide\",
\t\t\t\t\t\t\t\t\tstart: function(slider){
\t\t\t\t\t\t\t\t\t  \$('body').removeClass('loading');
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t  });
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t  </script>
</body>
</html>



";
    }

    // line 38
    public function block_menu($context, array $blocks = array())
    {
        // line 39
        echo "   
        ";
    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
        // line 50
        echo "   
";
    }

    // line 56
    public function block_footer($context, array $blocks = array())
    {
        // line 57
        echo "              <div class=\"footer\">
                    <div class=\"wrapper\">\t
                        <div class=\"section group\">
                           <div class=\"col_1_of_4 span_1_of_4\">
                                <h4>Information</h4>
                                <ul>
                                    <li><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_about");
        echo "\">About Us</a></li>
                                    <li><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_contact");
        echo "\">Contact Us</a></li>
                                    <li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_faq");
        echo "\">FAQ</a></li>
                                    </ul>
                           </div>
                                
                             <div class=\"col_1_of_4 span_1_of_4\">
                                <h4>My Account</h4>
                                <ul>
                                    <li><a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("ua_ucr_ua_project2_customer_profile");
        echo "\">Edit Profile</a></li>
                                    <li><a href=\"";
        // line 73
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
        return "uaUCRuaProject2Bundle::ua_base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 73,  205 => 72,  195 => 65,  191 => 64,  187 => 63,  179 => 57,  176 => 56,  171 => 50,  168 => 49,  163 => 39,  160 => 38,  136 => 116,  132 => 115,  112 => 97,  110 => 56,  104 => 52,  102 => 49,  92 => 41,  90 => 38,  80 => 31,  72 => 28,  55 => 14,  51 => 13,  47 => 12,  39 => 10,  33 => 7,  29 => 6,  22 => 1,  310 => 268,  49 => 10,  43 => 11,  40 => 5,  35 => 3,  30 => 2,);
    }
}
