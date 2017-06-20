<?php

/* uaUCRuaProject2Bundle:uaCustomer:ua_customer_profile.html.twig */
class __TwigTemplate_5ca78f18d4e8dc9953b45aaae9a94992629ee427f301f5aa2adfc191ee339c60 extends Twig_Template
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

    // line 4
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 5
    public function block_header_bottom_left($context, array $blocks = array())
    {
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"content\" >
    <div class=\"register_account\">
        
        <form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("ua_ucr_ua_project2_edit_profile");
        echo "\" method=\"POST\">
            <h3>Edit Profile</h3>
            
            <table>
                <tbody>
                    <tr>
                        <td>
                            <div>
                                <p>Full Name: </p>
                                <input type=\"text\" id=\"txtName\" name=\"txtName\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "getName", array(), "method"), "html", null, true);
        echo "\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {
                                this.value = 'Name';
                            }\" ></div>
                                <div>
                                    <p>E-mail: </p>
                                    <input type=\"text\" id=\"txtEmail\" name=\"txtEmail\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "getEmail", array(), "method"), "html", null, true);
        echo "\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {
                                    this.value = 'E-Mail';
                                }\"></div>
                                    <div>
                                        <p>Password: </p>
                                        <input type=\"password\" id=\"txtPassword\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "getPassword", array(), "method"), "html", null, true);
        echo "\" name=\"txtPassword\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {
                                        this.value = 'password';
                                    }\"></div>
                                        
                                       <div> 
                                           <p>Country: </p>
                                           <select id=\"selCountry\" name=\"selCountry\"  onchange=\"change_country(this.value)\" class=\"frm-field required\">
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
                                            <input type=\"text\"  id=\"txtAddress\" name=\"txtAddress\" value=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "getAddress", array(), "method"), "html", null, true);
        echo "\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {
                                        this.value = 'Address';
                                    }\"></div>
                                        <div>
                                            <p>Phone Number:</p>
                                            <input type=\"text\" id=\"txtPhone\" name=\"txtPhone\" value=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "getTelephone", array(), "method"), "html", null, true);
        echo "\" class=\"number\">
                                            
                                        </div>
                                        <h2>Pay</h2>
                                        <div>
                                            <p>Credit Card Number:</p>
                                            <input type=\"text\" id=\"txtCard\" name=\"txtCard\" value=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "getCard", array(), "method"), "html", null, true);
        echo "\" class=\"number\"> 
                                            
                                        </div>
                        </tbody></table> 
                    <div class=\"search\"><div><button id=\"btnUpdate\" name=\"btnUpdate\" class=\"grey\">Update</button></div></div> 
                    
                    <div class=\"clear\"></div>
                    
                </form>
            <form action=\"";
        // line 256
        echo $this->env->getExtension('routing')->getPath("ua_ucr_ua_project2_delete_profile");
        echo "\" method=\"POST\">
                <div class=\"search\"><div><button id=\"btnDelete\" name=\"btnDelete\" class=\"grey\" >Delete Profile</button></div></div>
            </form>
    </div>
    
     <div class=\"clear\"></div>
 </div>


";
    }

    public function getTemplateName()
    {
        return "uaUCRuaProject2Bundle:uaCustomer:ua_customer_profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 247,  77 => 31,  84 => 21,  216 => 92,  186 => 78,  175 => 76,  150 => 63,  127 => 56,  310 => 268,  205 => 72,  195 => 65,  191 => 64,  160 => 38,  110 => 56,  90 => 41,  277 => 131,  274 => 130,  266 => 123,  255 => 116,  239 => 99,  236 => 98,  200 => 87,  188 => 56,  184 => 55,  180 => 54,  170 => 47,  148 => 37,  134 => 30,  104 => 52,  58 => 11,  53 => 9,  34 => 8,  81 => 23,  323 => 126,  319 => 125,  301 => 116,  293 => 241,  290 => 109,  282 => 102,  265 => 86,  261 => 85,  257 => 84,  253 => 83,  249 => 82,  244 => 79,  233 => 78,  226 => 79,  218 => 74,  213 => 65,  210 => 64,  161 => 109,  155 => 105,  153 => 102,  100 => 45,  76 => 33,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 256,  312 => 98,  309 => 118,  305 => 117,  298 => 91,  294 => 90,  285 => 236,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 117,  252 => 80,  247 => 78,  241 => 78,  229 => 76,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 61,  132 => 115,  128 => 28,  107 => 36,  61 => 21,  273 => 88,  269 => 124,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 93,  230 => 82,  227 => 81,  224 => 71,  221 => 72,  219 => 76,  217 => 75,  208 => 67,  204 => 89,  179 => 57,  159 => 65,  143 => 34,  135 => 59,  119 => 53,  102 => 49,  71 => 27,  67 => 17,  63 => 13,  59 => 15,  38 => 9,  94 => 42,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 35,  21 => 2,  26 => 6,  93 => 98,  88 => 6,  78 => 85,  46 => 6,  27 => 4,  44 => 12,  31 => 2,  28 => 3,  201 => 92,  196 => 86,  183 => 168,  171 => 75,  166 => 46,  163 => 39,  158 => 44,  156 => 66,  151 => 63,  142 => 59,  138 => 71,  136 => 116,  121 => 46,  117 => 130,  105 => 44,  91 => 27,  62 => 15,  49 => 12,  24 => 4,  25 => 1,  19 => 1,  79 => 18,  72 => 32,  69 => 26,  47 => 12,  40 => 7,  37 => 8,  22 => 1,  246 => 104,  157 => 56,  145 => 96,  139 => 45,  131 => 52,  123 => 54,  120 => 57,  115 => 43,  111 => 126,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 24,  66 => 15,  55 => 14,  52 => 8,  50 => 10,  43 => 8,  41 => 4,  35 => 5,  32 => 4,  29 => 6,  209 => 73,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 63,  182 => 66,  176 => 56,  173 => 65,  168 => 49,  164 => 59,  162 => 45,  154 => 58,  149 => 51,  147 => 58,  144 => 62,  141 => 48,  133 => 55,  130 => 64,  125 => 27,  122 => 43,  116 => 41,  112 => 97,  109 => 46,  106 => 122,  103 => 32,  99 => 31,  95 => 109,  92 => 41,  86 => 24,  82 => 22,  80 => 34,  73 => 32,  64 => 14,  60 => 13,  57 => 11,  54 => 10,  51 => 13,  48 => 13,  45 => 13,  42 => 7,  39 => 10,  36 => 3,  33 => 7,  30 => 4,);
    }
}
