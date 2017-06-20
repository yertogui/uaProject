<?php

/* uaUCRuaProject2Bundle:Default:ua_faq.html.twig */
class __TwigTemplate_4e8ff65cdaef957c678637c4fcb96f002ce6dfda526065a5bf3466b9dfb93695 extends Twig_Template
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
        echo "<div class=\"content\">
        <h2>Frequently Asked Questions</h2>
        <br>
        <h2>Why did DISH acquire BLOCKBUSTER if it closed its stores and By Mail service?</h2>
        <h3>DISH Network acquired the assets of BLOCKBUSTER in April 2011 through a bankruptcy 
            auction. We recognized that the entertainment landscape was changing, and we believe
            that Blockbuster will continue to evolve its online delivery. As such, the 
            BLOCKBUSTER@Home and BLOCKBUSTER On Demand services are available today. 
            These two products provide virtually all the services former members 
            received through BLOCKBUSTER retail stores and By Mail service.</h3>
         <br>
        <h2>Are BLOCKBUSTER Stores remaining open?</h2>
        <h3>BLOCKBUSTER corporate store locations closed on January 12, 2014 however 
            approximately 50 franchise BLOCKBUSTER store locations remain open.</h3>
         <br>
        <h2>Why has Blockbuster discontinued the DVD By Mail service?</h2>
        <h3>While this was a difficult decision, we recognized that consumer 
            demand has moved away from the disc rental business to video-on-demand 
            and the digital distribution of video entertainment. 
            Last year DISH Network introduced BLOCKBUSTER@Home which 
            we believe is the most comprehensive movie service available 
            including 15 movie channels, new releases on demand, over 20,000 
            movies and TV shows available on line and streamed to your devices.</h3>
         <br>
        <h2>Is BLOCKBUSTER going completely out of business?</h2>
        <h3>No. BLOCKBSTER has phased out of the physical retail and rental business. 
            The BLOCKBUSTER@Home and BLOCKBUSTER On Demand services will remain available
            to customers. These two products provide virtually all services previously 
            received through BLOCKBUSTER retail stores and by mail. </h3>

        </div>
";
    }

    public function getTemplateName()
    {
        return "uaUCRuaProject2Bundle:Default:ua_faq.html.twig";
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
