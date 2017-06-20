<?php

/* uaUCRuaProject2Bundle:uaActor:ua_insert_actor.html.twig */
class __TwigTemplate_9e8ab87307a24215a13a492a5ac48e979d47be3899d86e251d014214d3ca90e2 extends Twig_Template
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
        echo "<h2>Insert Actor</h2>
<form name=\"form1\" id=\"form1\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("ua_ucr_ua_project2_insert_actor");
        echo "\" method=\"post\">
        <table>
            <tr>
                <td> Name: </td>
                <td> 
                    <input type =\"text\" name =\"txtName\" id=\"txtName\"> </input>
                <div id=\"msgErrorName\" style=\"color: red\"  >*</div>                                   
                </td> 
                
            </tr>
            <tr>
                <td>Last name: </td>
                <td> 
                    <input type =\"text\" name =\"txtLastName\" id=\"txtLastName\"> </input>
                <div id=\"msgErrorlastName\" style=\"color: red\"  >*</div>                                   
                </td> 
                
            </tr>
            
              <tr>
                <td>
                    
                   <input type=\"submit\"value=\"Insert Actor\" name=\"btnInsertM\" id=\"btnInsertM\"/> </input>                                    
                </td>    
            </tr>
            </table>
        </form>
 <script>
    function validateIM(){
    
        var name = document.getElementById('txtName');
        var last = document.getElementById('txtLastName');
        
        var emptyName = false;
        var emptyLast = false;

        if(name.value.length < 2){
            document.getElementById('msgErrorName').style.visibility = 'visible';
            emptyName = true;
        }else{
            document.getElementById('msgErrorName').style.visibility = 'hidden';
        }//end if/else

        
        if(last.value.length < 2){
            document.getElementById('msgErrorlastName').style.visibility = 'visible';
            emptyLast = true;
        }else{
            document.getElementById('msgErrorlastName').style.visibility = 'hidden';
        }//end if/else

        
        if(emptyName=== true){
            return false;
        }else{
            return true;
        }//end if/else
        if(emptyLast=== true){
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
        return "uaUCRuaProject2Bundle:uaActor:ua_insert_actor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  49 => 7,  46 => 6,  41 => 4,  36 => 3,  31 => 2,);
    }
}
