<?php

/* uaUCRuaProject2Bundle:Default:ua_login.html.twig */
class __TwigTemplate_cde31ccb22cb708c8b03128aa24e0d170ecd65fd858936ad0ec5a743c1d36ab8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("uaUCRuaProject2Bundle::ua_base2.html.twig");

        $this->blocks = array(
            'slider' => array($this, 'block_slider'),
            'header_bottom_left' => array($this, 'block_header_bottom_left'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "uaUCRuaProject2Bundle::ua_base2.html.twig";
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
        echo "
<div class=\"content\" >
    <div class=\"register_account\">
        
        <form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("ua_uc_rua_project2_create_account");
        echo "\" method=\"POST\">
            <h3>Register New Account</h3>
            <p>Account Type: </p>
            <div><select id=\"selAccountType\" name=\"selAccountType\"  class=\"frm-field required\">
                 <option value=\"null\">Select account type</option>   
                 <option value=\"admin\">Administrator</option>   
                 <option value=\"customer\">Customer</option>   
             </select></div>\t
            <table>
                <tbody>
                    <tr>
                        <td>
                            <div>
                                <p>Full Name: </p>
                                <input type=\"text\" id=\"txtName\" name=\"txtName\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {
                                this.value = 'Name';
                            }\" ></div>
                                <div>
                                    <p>E-mail: </p>
                                    <input type=\"text\" id=\"txtEmail\" name=\"txtEmail\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {
                                    this.value = 'E-Mail';
                                }\"></div>
                                    <div>
                                        <p>Password: </p>
                                        <input type=\"password\" id=\"txtPassword\" name=\"txtPassword\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {
                                        this.value = 'password';
                                    }\"></div>
                                        
                                       <div> 
                                           <p>Country: </p>
                                           <select id=\"selCountry\" name=\"selCountry\" onchange=\"change_country(this.value)\" class=\"frm-field required\">
                                            <option value=\"null\">Select a Country</option>         
                                            <option value=\"AX\">Åland Islands</option>
                                            <option value=\"AF\">Afghanistan</option>
                                            <option value=\"AL\">Albania</option>
                                            <option value=\"DZ\">Algeria</option>
                                            <option value=\"AS\">American Samoa</option>
                                            <option value=\"AD\">Andorra</option>
                                            <option value=\"AO\">Angola</option>
                                            <option value=\"AI\">Anguilla</option>
                                            <option value=\"AQ\">Antarctica</option>
                                            <option value=\"AG\">Antigua And Barbuda</option>
                                            <option value=\"AR\">Argentina</option>
                                            <option value=\"AM\">Armenia</option>
                                            <option value=\"AW\">Aruba</option>
                                            <option value=\"AU\">Australia</option>
                                            <option value=\"AT\">Austria</option>
                                            <option value=\"AZ\">Azerbaijan</option>
                                            <option value=\"BS\">Bahamas</option>
                                            <option value=\"BH\">Bahrain</option>
                                            <option value=\"BD\">Bangladesh</option>
                                            <option value=\"BB\">Barbados</option>
                                            <option value=\"BY\">Belarus</option>
                                            <option value=\"BE\">Belgium</option>
                                            <option value=\"BZ\">Belize</option>
                                            <option value=\"BJ\">Benin</option>
                                            <option value=\"BM\">Bermuda</option>
                                            <option value=\"BT\">Bhutan</option>
                                            <option value=\"BO\">Bolivia</option>
                                            <option value=\"BA\">Bosnia and Herzegovina</option>
                                            <option value=\"BW\">Botswana</option>
                                            <option value=\"BV\">Bouvet Island</option>
                                            <option value=\"BR\">Brazil</option>
                                            <option value=\"IO\">British Indian Ocean Territory</option>
                                            <option value=\"BN\">Brunei</option>
                                            <option value=\"BG\">Bulgaria</option>
                                            <option value=\"BF\">Burkina Faso</option>
                                            <option value=\"BI\">Burundi</option>
                                            <option value=\"KH\">Cambodia</option>
                                            <option value=\"CM\">Cameroon</option>
                                            <option value=\"CA\">Canada</option>
                                            <option value=\"CV\">Cape Verde</option>
                                            <option value=\"KY\">Cayman Islands</option>
                                            <option value=\"CF\">Central African Republic</option>
                                            <option value=\"TD\">Chad</option>
                                            <option value=\"CL\">Chile</option>
                                            <option value=\"CN\">China</option>
                                            <option value=\"CX\">Christmas Island</option>
                                            <option value=\"CC\">Cocos (Keeling) Islands</option>
                                            <option value=\"CO\">Colombia</option>
                                            <option value=\"KM\">Comoros</option>
                                            <option value=\"CG\">Congo</option>
                                            <option value=\"CD\">Congo, Democractic Republic</option>
                                            <option value=\"CK\">Cook Islands</option>
                                            <option value=\"CR\">Costa Rica</option>
                                            <option value=\"CI\">Cote D'Ivoire (Ivory Coast)</option>
                                            <option value=\"HR\">Croatia (Hrvatska)</option>
                                            <option value=\"CU\">Cuba</option>
                                            <option value=\"CY\">Cyprus</option>
                                            <option value=\"CZ\">Czech Republic</option>
                                            <option value=\"DK\">Denmark</option>
                                            <option value=\"DJ\">Djibouti</option>
                                            <option value=\"DM\">Dominica</option>
                                            <option value=\"DO\">Dominican Republic</option>
                                            <option value=\"TP\">East Timor</option>
                                            <option value=\"EC\">Ecuador</option>
                                            <option value=\"EG\">Egypt</option>
                                            <option value=\"SV\">El Salvador</option>
                                            <option value=\"GQ\">Equatorial Guinea</option>
                                            <option value=\"ER\">Eritrea</option>
                                            <option value=\"EE\">Estonia</option>
                                            <option value=\"ET\">Ethiopia</option>
                                            <option value=\"FK\">Falkland Islands (Islas Malvinas)</option>
                                            <option value=\"FO\">Faroe Islands</option>
                                            <option value=\"FJ\">Fiji Islands</option>
                                            <option value=\"FI\">Finland</option>
                                            <option value=\"FR\">France</option>
                                            <option value=\"FX\">France, Metropolitan</option>
                                            <option value=\"GF\">French Guiana</option>
                                            <option value=\"PF\">French Polynesia</option>
                                            <option value=\"TF\">French Southern Territories</option>
                                            <option value=\"GA\">Gabon</option>
                                            <option value=\"GM\">Gambia, The</option>
                                            <option value=\"GE\">Georgia</option>
                                            <option value=\"DE\">Germany</option>
                                            <option value=\"GH\">Ghana</option>
                                            <option value=\"GI\">Gibraltar</option>
                                            <option value=\"GR\">Greece</option>
                                            <option value=\"GL\">Greenland</option>
                                            <option value=\"GD\">Grenada</option>
                                            <option value=\"GP\">Guadeloupe</option>
                                            <option value=\"GU\">Guam</option>
                                            <option value=\"GT\">Guatemala</option>
                                            <option value=\"GG\">Guernsey</option>
                                            <option value=\"GN\">Guinea</option>
                                            <option value=\"GW\">Guinea-Bissau</option>
                                            <option value=\"GY\">Guyana</option>
                                            <option value=\"HT\">Haiti</option>
                                            <option value=\"HM\">Heard and McDonald Islands</option>
                                            <option value=\"HN\">Honduras</option>
                                            <option value=\"HK\">Hong Kong S.A.R.</option>
                                            <option value=\"HU\">Hungary</option>
                                            <option value=\"IS\">Iceland</option>
                                            <option value=\"IN\">India</option>
                                            <option value=\"ID\">Indonesia</option>
                                            <option value=\"IR\">Iran</option>
                                            <option value=\"IQ\">Iraq</option>
                                            <option value=\"IE\">Ireland</option>
                                            <option value=\"IM\">Isle of Man</option>
                                            <option value=\"IL\">Israel</option>
                                            <option value=\"IT\">Italy</option>
                                            <option value=\"JM\">Jamaica</option>
                                            <option value=\"JP\">Japan</option>
                                            <option value=\"JE\">Jersey</option>
                                            <option value=\"JO\">Jordan</option>
                                            <option value=\"KZ\">Kazakhstan</option>
                                            <option value=\"KE\">Kenya</option>
                                            <option value=\"KI\">Kiribati</option>
                                            <option value=\"KR\">Korea</option>
                                            <option value=\"KP\">Korea, North</option>
                                            <option value=\"KW\">Kuwait</option>
                                            <option value=\"KG\">Kyrgyzstan</option>
                                            <option value=\"LA\">Laos</option>
                                            <option value=\"LV\">Latvia</option>
                                            <option value=\"LB\">Lebanon</option>
                                            <option value=\"LS\">Lesotho</option>
                                            <option value=\"LR\">Liberia</option>
                                            <option value=\"LY\">Libya</option>
                                            <option value=\"LI\">Liechtenstein</option>
                                            <option value=\"LT\">Lithuania</option>
                                            <option value=\"LU\">Luxembourg</option>
                                            <option value=\"MO\">Macau S.A.R.</option>
                                            <option value=\"MK\">Macedonia</option>
                                            <option value=\"MG\">Madagascar</option>
                                            <option value=\"MW\">Malawi</option>
                                            <option value=\"MY\">Malaysia</option>
                                            <option value=\"MV\">Maldives</option>
                                            <option value=\"ML\">Mali</option>
                                            <option value=\"MT\">Malta</option>
                                            <option value=\"MH\">Marshall Islands</option>
                                            <option value=\"MQ\">Martinique</option>
                                            <option value=\"MR\">Mauritania</option>
                                            <option value=\"MU\">Mauritius</option>
                                            <option value=\"YT\">Mayotte</option>
                                            <option value=\"MX\">Mexico</option>
                                            <option value=\"FM\">Micronesia</option>
                                            <option value=\"MD\">Moldova</option>
                                            <option value=\"MC\">Monaco</option>
                                            <option value=\"MN\">Mongolia</option>
                                            <option value=\"ME\">Montenegro</option>
                                            <option value=\"MS\">Montserrat</option>
                                            <option value=\"MA\">Morocco</option>
                                            <option value=\"MZ\">Mozambique</option>
                                            <option value=\"MM\">Myanmar</option>
                                            <option value=\"NA\">Namibia</option>
                                            <option value=\"NR\">Nauru</option>
                                            <option value=\"NP\">Nepal</option>
                                            <option value=\"NL\">Netherlands</option>
                                            <option value=\"AN\">Netherlands Antilles</option>
                                            <option value=\"NC\">New Caledonia</option>
                                            <option value=\"NZ\">New Zealand</option>
                                            <option value=\"NI\">Nicaragua</option>
                                            <option value=\"NE\">Niger</option>
                                            <option value=\"NG\">Nigeria</option>
                                            <option value=\"NU\">Niue</option>
                                            <option value=\"NF\">Norfolk Island</option>
                                            <option value=\"MP\">Northern Mariana Islands</option>
                                            <option value=\"NO\">Norway</option>
                                            <option value=\"OM\">Oman</option>
                                            <option value=\"PK\">Pakistan</option>
                                            <option value=\"PW\">Palau</option>
                                            <option value=\"PS\">Palestinian Territory, Occupied</option>
                                            <option value=\"PA\">Panama</option>
                                            <option value=\"PG\">Papua new Guinea</option>
                                            <option value=\"PY\">Paraguay</option>
                                            <option value=\"PE\">Peru</option>
                                            <option value=\"PH\">Philippines</option>
                                            <option value=\"PN\">Pitcairn Island</option>
                                            <option value=\"PL\">Poland</option>
                                            <option value=\"PT\">Portugal</option>
                                            <option value=\"PR\">Puerto Rico</option>
                                            <option value=\"QA\">Qatar</option>
                                            <option value=\"RE\">Reunion</option>
                                            <option value=\"RO\">Romania</option>
                                            <option value=\"RU\">Russia</option>
                                            <option value=\"RW\">Rwanda</option>
                                            <option value=\"SH\">Saint Helena</option>
                                            <option value=\"KN\">Saint Kitts And Nevis</option>
                                            <option value=\"LC\">Saint Lucia</option>
                                            <option value=\"PM\">Saint Pierre and Miquelon</option>
                                            <option value=\"VC\">Saint Vincent And The Grenadines</option>
                                            <option value=\"WS\">Samoa</option>
                                            <option value=\"SM\">San Marino</option>
                                            <option value=\"ST\">Sao Tome and Principe</option>
                                            <option value=\"SA\">Saudi Arabia</option>
                                            <option value=\"SN\">Senegal</option>
                                       </select></div>\t\t        
                                        <div>
                                            <p>Address: </p>
                                            <input type=\"text\"  id=\"txtAddress\" name=\"txtAddress\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {
                                        this.value = 'Address';
                                    }\"></div>
                                        <div>
                                            <p>Phone Number:</p>
                                            <input type=\"text\" id=\"txtPhone\" name=\"txtPhone\" value=\"\" class=\"number\">
                                            
                                        </div>
                                        <h2>Pay</h2>
                                        <div>
                                            <p>Credit Card Number:</p>
                                            <input type=\"text\" id=\"txtCard\" name=\"txtCard\"  class=\"number\"> 
                                            
                                        </div>
                        </tbody></table> 
                    <div class=\"search\"><div><button id=\"btnCreate\" name=\"btnCreate\" class=\"grey\">Create Account</button></div></div>
                    <p class=\"terms\">By clicking 'Create Account' you agree to the <a href=\"#\">Terms &amp; Conditions</a>.</p>
                    <div class=\"clear\"></div>
                    
                    
                </form>

        </div>
                
                
    <div class=\"register_account\">

        <h3>Log in</h3>
        <p>E-mail</p>
        <form action=\"";
        // line 268
        echo $this->env->getExtension('routing')->getPath("ua_ucr_ua_project2_login");
        echo "\" method=\"POST\">
            <input type=\"text\" name=\"txtEmail\" id=\"txtEmail\" class=\"field\"/>
            <p>Password</p>
           <input name=\"txtPassword\" id=\"txtPassword\" type=\"password\"class=\"field\">
           <div class=\"buttons\"><div><button class=\"grey\">Sign In</button></div></div>
        </form>
        
        <p class=\"note\">If you forgot your password just enter your email and click <a href=\"#\">here</a></p>
          
     </div>
     <div class=\"clear\"></div>
 </div>
  ";
    }

    public function getTemplateName()
    {
        return "uaUCRuaProject2Bundle:Default:ua_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 268,  49 => 10,  43 => 6,  40 => 5,  35 => 3,  30 => 2,);
    }
}
