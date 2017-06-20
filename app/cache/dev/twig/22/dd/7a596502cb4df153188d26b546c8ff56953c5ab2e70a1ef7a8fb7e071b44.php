<?php

/* uaUCRuaProject2Bundle:Default:ua_blockbuster.html.twig */
class __TwigTemplate_22dd7a596502cb4df153188d26b546c8ff56953c5ab2e70a1ef7a8fb7e071b44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("uaUCRuaProject2Bundle::ua_base_admin.html.twig");

        $this->blocks = array(
            'menuAdmin' => array($this, 'block_menuAdmin'),
            'banner' => array($this, 'block_banner'),
            'rightBar' => array($this, 'block_rightBar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "uaUCRuaProject2Bundle::ua_base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_menuAdmin($context, array $blocks = array())
    {
    }

    // line 3
    public function block_banner($context, array $blocks = array())
    {
    }

    // line 4
    public function block_rightBar($context, array $blocks = array())
    {
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
 <h2>Update Block Buster Information</h2>
    
    <form name=\"form1\" id=\"form1\" action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("ua_ucr_ua_project2_update_information");
        echo " \" method=\"post\">
        <table>
         
            ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["telephones"]) ? $context["telephones"] : $this->getContext($context, "telephones")));
        foreach ($context['_seq'] as $context["_key"] => $context["telephone"]) {
            // line 14
            echo "            <tr>
                <td> Telephone: </td>
                <td> 
                    <input type =\"text\" name =\"txtTel\" id=\"txtTel\"value=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "getTelephone", array(), "method"), "html", null, true);
            echo "\"> </input>
                <div id=\"msgErrorTele\" style=\"color: red\"  >*</div>                                   
                </td> 
                
            </tr>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['telephone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["emails"]) ? $context["emails"] : $this->getContext($context, "emails")));
        foreach ($context['_seq'] as $context["_key"] => $context["email"]) {
            // line 24
            echo "            <tr>
                <td> Email: </td>
                <td> 
                    <input type =\"email\" name =\"txtEmail\" id=\"txtImail";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "getEmail", array(), "method"), "html", null, true);
            echo "\"value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "getEmail", array(), "method"), "html", null, true);
            echo "\"> </input>
                <div id=\"msgErrorEmail\" style=\"color: red\"  >*</div>                                   
                </td> 
                
            </tr>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['email'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "              <tr>
                <td>
                   
                   <input type=\"submit\"value=\"Update\" name=\"btnUpdateI\" id=\"btnUpdateI\"/> </input>                                    
                </td>    
            </tr>
            </table>
        </form>
 <script>
    function validateIM(){
    
        var title = document.getElementById('txtCode');
        
        var emptyGender = false;

        if(title.value.length < 2){
            document.getElementById('msgErrorGender').style.visibility = 'visible';
            emptyGender = true;
        }else{
            document.getElementById('msgErrorGender').style.visibility = 'hidden';
        }//end if/else

        
        if(emptyGender=== true){
            return false;
        }else{
            return true;
        }//end if/else
    }//end validateIM
    </script>
";
    }

    public function getTemplateName()
    {
        return "uaUCRuaProject2Bundle:Default:ua_blockbuster.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 23,  323 => 126,  319 => 125,  301 => 116,  293 => 110,  290 => 109,  282 => 102,  265 => 86,  261 => 85,  257 => 84,  253 => 83,  249 => 82,  244 => 79,  233 => 78,  226 => 75,  218 => 71,  213 => 65,  210 => 64,  161 => 109,  155 => 105,  153 => 102,  100 => 45,  76 => 29,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 118,  305 => 117,  298 => 91,  294 => 90,  285 => 103,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 78,  229 => 76,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 74,  132 => 67,  128 => 49,  107 => 36,  61 => 13,  273 => 88,  269 => 87,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 93,  230 => 82,  227 => 81,  224 => 71,  221 => 72,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 75,  135 => 53,  119 => 42,  102 => 32,  71 => 18,  67 => 17,  63 => 15,  59 => 15,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 35,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 6,  27 => 4,  44 => 12,  31 => 2,  28 => 3,  201 => 92,  196 => 90,  183 => 168,  171 => 61,  166 => 71,  163 => 150,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 71,  136 => 56,  121 => 46,  117 => 44,  105 => 33,  91 => 27,  62 => 14,  49 => 7,  24 => 4,  25 => 1,  19 => 1,  79 => 18,  72 => 16,  69 => 17,  47 => 12,  40 => 5,  37 => 8,  22 => 2,  246 => 90,  157 => 56,  145 => 96,  139 => 45,  131 => 52,  123 => 47,  120 => 57,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 14,  52 => 21,  50 => 10,  43 => 6,  41 => 4,  35 => 3,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 169,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 64,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 49,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 24,  82 => 22,  80 => 24,  73 => 19,  64 => 14,  60 => 13,  57 => 11,  54 => 10,  51 => 13,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 3,  33 => 7,  30 => 2,);
    }
}
