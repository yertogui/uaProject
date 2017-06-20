<?php

/* uaUCRuaProject2Bundle:uaMovie:ua_insert_movie.html.twig */
class __TwigTemplate_91d4369e7ed110349aab89768f3c84ff0d8dc3b66a9c44fc067d96573cd8c9bb extends Twig_Template
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
    
    <h2>Insert Movie</h2>
    
   <form name=\"form1\" id=\"form1\" action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("ua_ucr_ua_project2_insert_movie");
        echo "\"enctype=\"multipart/form-data\" method=\"post\" onsubmit=\"return sendNumber();\">
        <table>
            <tr>
                <td> Title: </td>
                <td> 
                    <input type =\"text\" name =\"txtTitle\" id=\"txtTitle\"> </input>                                    
                </td> 
                <td><div id=\"msgErrorTitle\" style=\"color: red\">*</div></td>

            </tr>
            <tr>
                <td> Quantity:</td>
                <td> 
                    <input type=\"number\" name=\"txtQuantity\" id=\"txtQuantity\"min=\"0\"/>                                    
                </td> 

            </tr>
            <tr>
                <td> Year:</td>
                <td> 
                    <input type=\"number\" name=\"txtYear\" id=\"txtYear\"min=\"1800\" max=\"2016\"/>                                    
                </td> 

            </tr>
            <tr>
                <td> Running Time:</td>
                <td> 
                    <input type=\"number\" name=\"txtRunningTime\" id=\"txtRunningTime\"min=\"0\"/>                                    
                </td> 

            </tr>
            <tr>
                <td> Price:</td>
                <td> 
                    <label>\$</label>
                    <input type=\"number\" name=\"txtPrice\" id=\"txtPrice\"min=\"1\"/>                                    
                </td> 

            </tr>
            <tr>
                <td> Description:</td>
                <td> 
                    <textarea type=\"text\" name=\"txtDescription\" id=\"txtDescription\"></textarea>

                </td> 

            </tr>
            <tr>
                <td> Gender:</td>
                <td> 
                    <select name=\"selGender\" id=\"selGender\">
                        ";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allGenders"]) ? $context["allGenders"] : $this->getContext($context, "allGenders")));
        foreach ($context['_seq'] as $context["_key"] => $context["gender"]) {
            // line 65
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
        // line 67
        echo "                        </select>                                     
                    </td>    

                </tr>



                <tr>
                    <td> Subtitled:</td>
                    <td> 
                        <select name=\"selSubtitled\" id=\"selSubtitled\">
                            <option value=\"1\"> Yes </option>
                            <option value=\"0\"> No </option>
                        </select>                                 
                    </td>    

                </tr>

                <tr>
                    <td> Premiere:</td>
                    <td> 
                        <select name=\"selPremiere\" id=\"selPremiere\">
                            <option value=\"1\"> Yes </option>
                            <option value=\"0\"> No </option>
                        </select>                             
                    </td>    

                </tr>

                <tr>
                    <td><table title=\"ActorTable\" id=\"ActorTable\">
                            <!-- Aqui se crean las cajas dinamicas-->
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>Movie image:</td>
                    <td><input type=\"file\" REQUIRED name=\"image\"id=\"image\" value=\"Select a picture\"/></td>
                </tr>
                
                 <tr>
                    <td>
                        <input type=\"submit\" onclick=\" return insertActorFields();\" value=\"Add Actor\" name=\"btnAddActor\" id=\"btnAddActor\"/> </input>                                    

                        <input type=\"submit\" onclick=\"return validateIM();\" value=\"Insert Movie\" name=\"btnInsertM\" id=\"btnInsertM\"/> </input>                                    
                    </td>    
                </tr>
            </table>
            <input type=\"hidden\" name=\"hdnNumberActor\" id=\"hdnNumberActor\" value= \"\" />
        </form>

    
    
<!--CODIGO JAVASCRIPT  -->
<script type=\"text/javascript\">

  
    //para ocultar los * al principio 
    document.getElementById('msgErrorTitle').style.visibility = \"hidden\"; 

    function insertActorFields(){
        
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
       td1.appendChild(document.createTextNode(\" Actor Name \" + numberActor));
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
    
    function validateIM(){
    
        var title = document.getElementById('txtTitle');
        
        var emptyTitle = false;

        if(title.value.length < 2){
            document.getElementById('msgErrorTitle').style.visibility = 'visible';
            emptyTitle = true;
        }else{
            document.getElementById('msgErrorTitle').style.visibility = 'hidden';
        }//end if/else

        
        if(emptyTitle === true){
            return false;
        }else{
            return true;
        }//end if/else
    }//end validateIM
    
    //Metodo para enviar el numero de actores al form
    function sendNumber(){
        var form = document.getElementById(\"form1\");
        
        form.hdnNumberActor.value = numberActor;
    }//end sendNumber
</script>
";
    }

    public function getTemplateName()
    {
        return "uaUCRuaProject2Bundle:uaMovie:ua_insert_movie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 67,  115 => 65,  111 => 64,  57 => 13,  49 => 7,  46 => 6,  41 => 4,  36 => 3,  31 => 2,);
    }
}
