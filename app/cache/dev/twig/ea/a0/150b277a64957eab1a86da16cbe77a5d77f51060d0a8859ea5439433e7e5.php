<?php

/* uaUCRuaProject2Bundle:Default:ua_about.html.twig */
class __TwigTemplate_eaa0150b277a64957eab1a86da16cbe77a5d77f51060d0a8859ea5439433e7e5 extends Twig_Template
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

    // line 2
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 3
    public function block_header_bottom_left($context, array $blocks = array())
    {
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"content\">
    \t<div class=\"section group\">
\t\t\t\t<div class=\"col_1_of_3 span_1_of_3\">
\t\t\t\t\t<h3>Who We Are</h3>
\t\t\t\t\t<p>Blockbuster and formerly Blockbuster Video Entertainment, 
                                            Inc.was an American-based provider 
                                            of home movie and video game rental services 
                                            through video rental shops, DVD-by-mail, streaming,
                                            video on demand, and cinema theater.At its peak in 2004, 
                                            Blockbuster consisted of nearly 60,000 employees and over 9,000 stores.</div>
\t\t\t\t<div class=\"col_1_of_3 span_1_of_3\">
\t\t\t\t\t<h3>Our History</h3>
\t\t\t\t <div class=\"history-desc\">
\t\t\t\t\t<div class=\"year\"><p>1985–1987</p></div>
\t\t\t\t\t<p class=\"history\">
                                        The first Blockbuster store opened October 19, 1985, in Dallas, Texas.
                                        The founder of the company was David Cook, who grew the business and 
                                        brought it public.The innovation was derived from Cook's experience
                                        with managing huge databases.After the first few stores opened, 
                                        Cook built a \$6 million warehouse in Garland, Texas, that could pull 
                                        and package multiple stores in a day.[clarification needed] Key to 
                                        the early success of Blockbuster was their ability to customize a 
                                        store to its neighborhood, loading it up with films geared specifically 
                                        to demographic profiles in addition to the popular new releases, and 
                                        a sizable catalog of titles.
                                        </p>
                                  <div class=\"year\"><p>1987</p></div>
\t\t\t\t\t<p class=\"history\">
                                        In 1987, the company won a court case against Nintendo of America,
                                        Inc, which paved the way for the rental of video games.

                                        Scott Beck of Dallas approached John Melk, prior executive with 
                                        Waste Management, about buying a franchise. Melk brought the idea 
                                        to his friend and business associate, Wayne Huizenga, who agreed 
                                        to buy the company after overcoming initial concerns about the video industry.
                                        Huizenga and Melk used similar techniques in growing Waste Management, and soon,
                                        they were opening a store every 24 hours.They also bought every Blockbuster 
                                        franchise they could acquire. Huizenga spent the late 1980s acquiring several of
                                        Blockbuster's rivals, including Major Video.

                                        </p>
                                      
\t\t\t\t
\t\t\t</div>
    \t<div>
    </div>
 </div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "uaUCRuaProject2Bundle:Default:ua_about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 6,  40 => 5,  35 => 3,  30 => 2,);
    }
}
