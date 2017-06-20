<?php

/* uaUCRuaProject2Bundle:Default:index.html.twig */
class __TwigTemplate_7b6732467a58af021b7f0839fd0d219443935c008f9402bffbeb922f3ab00bab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("uaUCRuaProject2Bundle::ua_base.html.twig");

        $this->blocks = array(
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

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"menu\">
    <ul id=\"dc_mega-menu-orange\" class=\"dc_mm-orange\">
        <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_homepage");
        echo "\">Home</a></li>
        <li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_movies", array("page" => 1, "moviesNum" => 6)), "html", null, true);
        echo "\">Movies</a></li>
        <li><a href=\"\">Genders</a>
            <ul>
                ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allGenders"]) ? $context["allGenders"] : $this->getContext($context, "allGenders")));
        foreach ($context['_seq'] as $context["_key"] => $context["gender"]) {
            // line 12
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
        // line 14
        echo "            </ul>
        </li>
        
        <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_about");
        echo "\">About</a></li>
        <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_contact");
        echo "\">Contact</a> </li>
        <div class=\"clear\"></div>
    </ul>
</div>
        ";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        echo " 
<div class=\"content\">

    <br><br><br><br>
</div>
";
    }

    public function getTemplateName()
    {
        return "uaUCRuaProject2Bundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  71 => 18,  67 => 17,  62 => 14,  51 => 12,  47 => 11,  41 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
