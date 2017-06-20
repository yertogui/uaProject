<?php

/* uaUCRuaProject2Bundle:uaMovie:ua_update_movie_page.html.twig */
class __TwigTemplate_2e7ffc38e4d2fdfb4841f41c472a4f6043a2d45a84d8fc196daa4870f0eaba60 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
    var numberActor = 0;
    </script> 
    <h2>Update Movie</h2>

    <form name=\"form1\" id=\"form1\" action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ua_ucr_ua_project2_update_movie", array("codMovie" => $this->getAttribute((isset($context["allMovies"]) ? $context["allMovies"] : $this->getContext($context, "allMovies")), "getCodmovie", array(), "method"))), "html", null, true);
        echo " \" method=\"post\" onsubmit=\"return sendNumber();\">
        <table>
            <tr>
                <td> Title: </td>
                <td> 
                    <input type =\"text\" name =\"txtTitle\" id=\"txtTitle\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["allMovies"]) ? $context["allMovies"] : $this->getContext($context, "allMovies")), "getTitle", array(), "method"), "html", null, true);
        echo " \"></input>                                    
                </td> 
                <td><div id=\"msgErrorTitle\" style=\"color: red\">*</div></td>

            </tr>
            <tr>
                <td> Quantity:</td>
                <td> 
                    <input type=\"number\" name=\"txtQuantity\" id=\"txtQuantity\"min=\"0\"value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["allMovies"]) ? $context["allMovies"] : $this->getContext($context, "allMovies")), "getQuantity", array(), "method"), "html", null, true);
        echo "\"/>                                    
                </td> 

            </tr>
            <tr>
                <td> Year:</td>
                <td> 
                    <input type=\"number\" name=\"txtYear\" id=\"txtYear\"min=\"1800\" max=\"2016\"value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["allMovies"]) ? $context["allMovies"] : $this->getContext($context, "allMovies")), "getYear", array(), "method"), "html", null, true);
        echo "\"/>                                    
                </td> 

            </tr>
            <tr>
                <td> Running Time:</td>
                <td> 
                    <input type=\"number\" name=\"txtRunningTime\" id=\"txtRunningTime\"min=\"0\"value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["allMovies"]) ? $context["allMovies"] : $this->getContext($context, "allMovies")), "getQuantity", array(), "method"), "html", null, true);
        echo "\"/>                                    
                </td> 

            </tr>
            <tr>
                <td> Price:</td>
                <td> 
                    <label>\$</label>
                    <input type=\"number\" name=\"txtPrice\" id=\"txtPrice\"min=\"1\"value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["allMovies"]) ? $context["allMovies"] : $this->getContext($context, "allMovies")), "getPrice", array(), "method"), "html", null, true);
        echo "\"/>                                    
                </td> 

            </tr>
            <tr>
                <td> Description:</td>
                <td> 
                    <textarea type=\"text\" name=\"txtDescription\" id=\"txtDescription\"> ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["allMovies"]) ? $context["allMovies"] : $this->getContext($context, "allMovies")), "getDescription", array(), "method"), "html", null, true);
        echo "</textarea>

                </td> 

            </tr>
            <tr>
                <td> Gender:</td>
                <td> 
                    <select name=\"selGender\" id=\"selGender\">
                        ";
        // line 63
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allGenders"]) ? $context["allGenders"] : $this->getContext($context, "allGenders")));
        foreach ($context['_seq'] as $context["_key"] => $context["gender"]) {
            // line 64
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gender"]) ? $context["gender"] : $this->getContext($context, "gender")), "getCode", array(), "method"), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gender"]) ? $context["gender"] : $this->getContext($context, "gender")), "getName", array(), "method"), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gender'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                        </select>                                     
                    </td>    

                </tr>

                <tr>
                    <td> Subtitled:</td>
                    <td> 
                        <select name=\"selSubtitled\" id=\"selSubtitled\">
                       ";
        // line 75
        if (($this->getAttribute((isset($context["allMovies"]) ? $context["allMovies"] : $this->getContext($context, "allMovies")), "getSubtitled", array(), "method") == 1)) {
            // line 76
            echo "                                <option value=\"1\"> Yes </option>
                                <option value=\"0\"> No </option>
                        ";
        } else {
            // line 79
            echo "                                <option value=\"0\"> No </option>
                                <option value=\"1\"> Yes </option>
                        ";
        }
        // line 82
        echo "                            </select>                                 
                        </td>    
                    </tr>

                    <tr>
                        <td> Premiere:</td>
                        <td> 
                            <select name=\"selPremiere\" id=\"selPremiere\" >
                        ";
        // line 90
        if (($this->getAttribute((isset($context["allMovies"]) ? $context["allMovies"] : $this->getContext($context, "allMovies")), "getPremiere", array(), "method") == 1)) {
            // line 91
            echo "                                    <option value=\"1\"> Yes </option>
                                    <option value=\"0\"> No </option>
                        ";
        } else {
            // line 94
            echo "                                    <option value=\"0\"> No </option>
                                    <option value=\"1\"> Yes </option>
                        ";
        }
        // line 97
        echo "                                </select>                             
                            </td>    

                        </tr>
            ";
        // line 101
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allActors"]) ? $context["allActors"] : $this->getContext($context, "allActors")));
        foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
            // line 102
            echo "                        <tr>
                            <td>
                                <input type=\"radio\"id=\"rbUpdate";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actor"]) ? $context["actor"] : $this->getContext($context, "actor")), "getId", array(), "method"), "html", null, true);
            echo "\" 
                                       name=\"rbUpdate";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actor"]) ? $context["actor"] : $this->getContext($context, "actor")), "getId", array(), "method"), "html", null, true);
            echo "\"> Delete </input>
                            </td>
                            <td>
                                <input type=\"text\"value=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actor"]) ? $context["actor"] : $this->getContext($context, "actor")), "getName", array(), "method"), "html", null, true);
            echo "\" name=\"txtNameActor\" id=\"txtNameActor\"disabled=\"true\">
                            </td>
                            <td>
                                <input type=\"text\" value=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actor"]) ? $context["actor"] : $this->getContext($context, "actor")), "getLastname", array(), "method"), "html", null, true);
            echo "\" name=\"txtLastNameActor\" id=\"txtLastNameActor\"disabled=\"true\">
                            </td>
                        </tr>
                        
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "                        
                        <tr>
                            <td><table title=\"ActorTable\" id=\"ActorTable\">
                                    <!-- Aqui se crean las cajas dinamicas-->
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type=\"submit\" onclick=\" return insertActorFields();\" value=\"Add Actor\" name=\"btnAddActor\" id=\"btnAddActor\"/> </input>                                    

                                <input type=\"submit\" onclick=\"return validateIM();\" value=\"Update Movie\" name=\"btnDeleteM\" id=\"btnDeleteM\"/> </input>                                    
                            </td>    
                        </tr>
                    </table>
                    <input type=\"hidden\" name=\"hdnNumberActor\" id=\"hdnNumberActor\" value= \"\" />

                </form>
                <!--CODIGO JAVASCRIPT  -->
                <script type=\"text/javascript\">

    //para ocultar los * al principio 
    document.getElementById('msgErrorGender').style.visibility = \"hidden\";

    function insertActorFields() {

        //aumentar la variable 
        numberActor++;

        var table = document.getElementById('ActorTable');
        var rowActor = document.createElement(\"tr\");
        var rowLastName = document.createElement(\"tr\");
        var td1 = document.createElement(\"td\");
        var td2 = document.createElement(\"td\");
        var td3 = document.createElement(\"td\");
        var td4 = document.createElement(\"td\");
        var td6 = document.createElement(\"td\");
        var td7 = document.createElement(\"td\");
        td1.appendChild(document.createTextNode(\"Name Actor \" + numberActor));
        td3.appendChild(document.createTextNode(\"Last Name:\"));

        //textfield para el nombre del actor
        var inputActor = document.createElement(\"input\");
        inputActor.type = \"text\";
        inputActor.name = \"txtActor\" + numberActor;
        inputActor.id = \"txtActor\" + numberActor;
        console.log(inputActor.id);
        td2.appendChild(inputActor);

        //textfield para el salario
        var inputLastName = document.createElement(\"input\");
        inputLastName.type = \"text\";
        inputLastName.name = \"txtLastName\" + numberActor;
        inputLastName.id = \"txtLastName\" + numberActor;

        var errorActor = document.createTextNode(\"*\");
        errorActor.id = \"msgErrorActor\" + numberActor;
        errorActor.name = \"msgErrorActor\" + numberActor;
        errorActor.style = \"color: red\";
        //document.getElementById(\"msgErrorActor\" + numberActor).style.visibility = \"hidden\"; 
        td6.appendChild(errorActor);

        var errorLastName = document.createTextNode(\"*\");
        errorLastName.id = \"msgErrorLastName\" + numberActor;
        errorLastName.name = \"msgErrorLastName\" + numberActor;
        errorLastName.style = \"color: red\";
        //document.getElementById('msgErrorSalary' + numberActor).style.visibility = \"hidden\";
        td7.appendChild(errorLastName);

        td4.appendChild(inputLastName);

        rowActor.appendChild(td1);
        rowActor.appendChild(td2);
        rowActor.appendChild(td6);
        rowLastName.appendChild(td3);
        rowLastName.appendChild(td4);
        rowLastName.appendChild(td7);

        table.appendChild(rowActor);
        table.appendChild(rowLastName);

        return false;

    }//end insert

    function validateIM() {

        var title = document.getElementById('txtTitle');

        var emptyTitle = false;

        if (title.value.length < 2) {
            document.getElementById('msgErrorTitle').style.visibility = 'visible';
            emptyTitle = true;
        } else {
            document.getElementById('msgErrorTitle').style.visibility = 'hidden';
        }//end if/else


        if (emptyTitle === true) {
            return false;
        } else {
            return true;
        }//end if/else
    }//end validateIM

    function enableUpdate(numberActor) {
        document.getElementById(\"txtActor\" + numberActor).disabled = false;
        document.getElementById(\"txtLastName\" + numberActor).disabled = false;
        return false;
    }//end enableUpdate
    function disenableUpdate(numberActor) {
        document.getElementById(\"txtActor\" + numberActor).disabled = true;
        document.getElementById(\"txtLastName\" + numberActor).disabled = true;
        return false;
    }//end enableUpdate

    //Metodo para enviar el numero de actores al form
    function sendNumber() {
        var form = document.getElementById(\"form1\");

        form.hdnNumberActor.value = numberActor;
    }//end sendNumber
                    </script>
";
    }

    public function getTemplateName()
    {
        return "uaUCRuaProject2Bundle:uaMovie:ua_update_movie_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 108,  206 => 105,  178 => 91,  231 => 119,  97 => 32,  174 => 82,  245 => 122,  192 => 92,  137 => 60,  211 => 105,  207 => 99,  190 => 92,  172 => 82,  129 => 55,  234 => 100,  225 => 98,  215 => 99,  202 => 104,  198 => 102,  194 => 101,  165 => 76,  126 => 67,  65 => 13,  70 => 15,  302 => 247,  77 => 31,  84 => 20,  216 => 92,  186 => 91,  175 => 76,  150 => 66,  127 => 48,  310 => 268,  205 => 97,  195 => 93,  191 => 64,  160 => 78,  110 => 39,  90 => 41,  277 => 131,  274 => 130,  266 => 123,  255 => 116,  239 => 99,  236 => 120,  200 => 95,  188 => 97,  184 => 89,  180 => 79,  170 => 80,  148 => 37,  134 => 30,  104 => 36,  58 => 11,  53 => 9,  34 => 5,  81 => 25,  323 => 126,  319 => 125,  301 => 116,  293 => 241,  290 => 109,  282 => 102,  265 => 86,  261 => 85,  257 => 84,  253 => 83,  249 => 82,  244 => 79,  233 => 78,  226 => 103,  218 => 111,  213 => 98,  210 => 94,  161 => 79,  155 => 69,  153 => 102,  100 => 35,  76 => 33,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 256,  312 => 98,  309 => 118,  305 => 117,  298 => 91,  294 => 90,  285 => 236,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 117,  252 => 80,  247 => 78,  241 => 78,  229 => 116,  220 => 70,  214 => 69,  177 => 65,  169 => 77,  140 => 61,  132 => 64,  128 => 63,  107 => 36,  61 => 12,  273 => 88,  269 => 124,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 93,  230 => 104,  227 => 118,  224 => 101,  221 => 101,  219 => 97,  217 => 101,  208 => 67,  204 => 89,  179 => 57,  159 => 65,  143 => 66,  135 => 59,  119 => 53,  102 => 34,  71 => 16,  67 => 17,  63 => 16,  59 => 15,  38 => 9,  94 => 42,  89 => 29,  85 => 32,  75 => 25,  68 => 14,  56 => 12,  87 => 35,  21 => 2,  26 => 6,  93 => 98,  88 => 6,  78 => 28,  46 => 6,  27 => 4,  44 => 8,  31 => 2,  28 => 3,  201 => 92,  196 => 86,  183 => 94,  171 => 69,  166 => 82,  163 => 39,  158 => 75,  156 => 76,  151 => 68,  142 => 59,  138 => 71,  136 => 116,  121 => 46,  117 => 130,  105 => 36,  91 => 27,  62 => 20,  49 => 7,  24 => 4,  25 => 1,  19 => 1,  79 => 18,  72 => 32,  69 => 17,  47 => 12,  40 => 5,  37 => 8,  22 => 1,  246 => 104,  157 => 56,  145 => 96,  139 => 45,  131 => 52,  123 => 54,  120 => 46,  115 => 39,  111 => 38,  108 => 37,  101 => 34,  98 => 31,  96 => 31,  83 => 22,  74 => 18,  66 => 21,  55 => 14,  52 => 8,  50 => 10,  43 => 6,  41 => 4,  35 => 3,  32 => 4,  29 => 6,  209 => 98,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 63,  182 => 85,  176 => 90,  173 => 65,  168 => 68,  164 => 59,  162 => 76,  154 => 75,  149 => 51,  147 => 65,  144 => 62,  141 => 48,  133 => 55,  130 => 64,  125 => 51,  122 => 43,  116 => 54,  112 => 41,  109 => 38,  106 => 47,  103 => 32,  99 => 31,  95 => 39,  92 => 30,  86 => 30,  82 => 21,  80 => 34,  73 => 18,  64 => 17,  60 => 13,  57 => 18,  54 => 10,  51 => 13,  48 => 13,  45 => 13,  42 => 7,  39 => 10,  36 => 3,  33 => 7,  30 => 2,);
    }
}
