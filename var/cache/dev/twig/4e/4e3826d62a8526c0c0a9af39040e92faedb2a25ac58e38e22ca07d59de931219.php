<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /user/deposit.html.twig */
class __TwigTemplate_a4b5b8472a0a7c91725876e31d1811bc791bd14ef3a49bc7c7d88e280adefed6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/user/deposit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/user/deposit.html.twig"));

        // line 1
        echo "<div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
  <h1 class=\"h3 mb-0 text-gray-800\">";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Credit your Account"), "html", null, true);
        echo "</h1>
  <a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i
    class=\"fas fa-download fa-sm text-white-50\"></i> <span id='rate'></span></a>
  </div>
  <div class=\"row justify-content-center\" id=\"content\"> 
  <form method=\"post\" class=\"align-items-center justify-content-center\" style=\"min-height:300px; margin:50px\">
    <div id='paymentMethods'>
      ";
        // line 9
        if (array_key_exists("error", $context)) {
            // line 10
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 10, $this->source); })()), "messageKey", [], "any", false, false, false, 10), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 10, $this->source); })()), "messageData", [], "any", false, false, false, 10), "security"), "html", null, true);
            echo "</div>
            ";
        }
        // line 12
        echo "        <div><span class=\"d-flex d-sm-flex justify-content-center justify-content-sm-center\" style=\"font-size: 18px; margin-bottom: 10px\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select payment methods"), "html", null, true);
        echo " ?</span></div>
        
        <div class=\"d-block d-md-flex flex-column justify-content-center\" style=\"min-height: 300px; margin-top:20px\">
          <div class=\"d-block d-md-flex  justify-content-between\">  
          <div class=\"form-check\" style=\"height: 150px; width:150px\">
              <label class=\"form-check-label\"> <input class=\"form-check-input\" type=\"radio\" name=\"service\" value=\"om\" ><img class=\"img-fluid\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/om.jpg"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></label>
            </div>
            <div class=\"form-check\" style=\"height: 150px; width:150px\">
            <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"service\" value=\"eum\"><img class=\"img-fluid\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/eu.png"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></label>
          </div>
          <div class=\"form-check\" style=\"height: 150px; width:150px\">
            <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"service\" value=\"pm\"><img class=\"img-fluid\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/pm.jpeg"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></label>
          </div>
          <div class=\"form-check\" style=\"height: 150px; width:150px\">
            <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"service\" value=\"etherum\"  required=\"required\"><img class=\"img-fluid\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/ether.png"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></label>
          </div>
        </div>
            <div class=\"d-block d-md-flex justify-content-between\">
              <div class=\"form-check\" style=\"height: 150px; width:150px\">
                <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"service\" value=\"litecoin\" ><img class=\"img-fluid\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/litecoin.png"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></label></div>  
              <div class=\"form-check\" style=\"height: 150px; width:150px\">
                <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"service\" value=\"ripple\"  required=\"required\"><img class=\"img-fluid\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/ripple2.jpg"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></label>
              </div>
                <div class=\"form-check\" style=\"height: 150px; width:150px\">
                <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"service\" value=\"doge\" ><img class=\"img-fluid\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/doge.png"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></label></div>
                </div>
                <div class=\"d-block d-md-flex justify-content-between\">
                  <div class=\"form-check\" style=\"height: 150px; width:150px\">
                      <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"service\" value=\"momo\"  required=\"required\"><img class=\"img-fluid\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/momo.jpg"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></label>
                    </div>
                    <div class=\"form-check\" style=\"height: 150px; width:150px\">
                    <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"service\" value=\"paypal\" ><img class=\"img-fluid\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/paypal.png"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></label></div>
                    <div class=\"form-check\" style=\"height: 150px; width:150px\">
                      <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"service\" value=\"bitcoin\" ><img class=\"img-fluid\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/btc.png"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></label></div>  
                    </div>
          </div>
        <div class=\"d-flex justify-content-center\" ><button class=\"btn btn-primary btn-block\" type=\"button\" id='next'>";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Next"), "html", null, true);
        echo "</button></div> 
                   
    </div>

      <div id=\"otherMethods\" style=\"display: none\">
      <div><span class=\"d-flex d-sm-flex justify-content-center justify-content-sm-center\" style=\"font-size: 18px; margin-bottom: 10px\">";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose one of other payment methods"), "html", null, true);
        echo " ?</span></div>
        <div style=\"margin-bottom: 20px\" ><button class=\"btn btn-light btn-block\" id=\"btc\" type=\"submit\" style=\"background-size: cover;  background-repeat :no-repeat; background-position:center; height: 50px; margin-bottom: 10px;background-image: url()\"></button></div>
      </div>
    

    <div id=\"processPay\" style=\"display: none ; \" class=\"justify-content-center\">
        <div class=\"justify-content-between\" id=\"processOm\" style=\"display: none\">
            <div style=\"margin-bottom: 20px; max-height: 100px; max-width:100px\"><img class=\"img-fluid\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/om.jpg"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></div>
            <div><span style=\"font-size: 1.2em; margin-top: 10px; margin-bottom: 30px\">";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feel your Orange money wallet"), "html", null, true);
        echo "</span></div>
        </div>
        <div class=\"justify-content-between\" id=\"processEum\" style=\"display: none\">
          <div style=\"margin-bottom: 20px; max-height: 100px; max-width:100px\"><img class=\"img-fluid\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/eu.jpg"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></div>
            <div><span style=\"font-size: 1.2em; margin-top: 10px; margin-bottom: 30px\">";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feel your Express Union mobile money wallet"), "html", null, true);
        echo "</span></div>
        </div>
        <div class=\"justify-content-between\" id=\"processMomo\" style=\"display: none\">
          <div style=\"margin-bottom: 20px; max-height: 100px; max-width:100px\"><img class=\"img-fluid\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/momo.jpg"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></div>
            <div><span style=\"font-size: 1.2em; margin-top: 10px; margin-bottom: 30px\">";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feel your MTN mobile money wallet"), "html", null, true);
        echo "</span></div>
        </div>
        <div class=\"justify-content-between\" id=\"processPaypal\" style=\"display: none\">
          <div style=\"margin-bottom: 20px; max-height: 100px; max-width:100px\"><img class=\"img-fluid\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/paypal.png"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></div>
          <div id=\"blocPaypal\"><span style=\"font-size: 1.2em; margin-top: 10px; margin-bottom: 30px\">";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Just feel the deposit amount in USD"), "html", null, true);
        echo "</span></div>
          <div class=\"col justify-content-between\" id=\"ppal\">
          </div>
        </div>
        <div class=\"justify-content-between\" id=\"processPm\" style=\"display: none\">
          <div style=\"margin-bottom: 20px; max-height: 100px; max-width:100px\"><img class=\"img-fluid\" src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/pm.jpeg"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></div>
          <div><span style=\"font-size: 1.2em; margin-top: 10px; margin-bottom: 30px\">";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Just feel the deposit amount in USD"), "html", null, true);
        echo "</span></div>
          
        </div>
        </div>
          <div class=\"justify-content-between\" id=\"processBtc\" style=\"display: none\">
            <div style=\"margin-bottom: 20px; max-height: 100px; max-width:100px\"><img class=\"img-fluid\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/btc.png"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></div>
            <div id=\"blocBtc\"><span style=\"font-size: 1.2em; margin-top: 10px; margin-bottom: 30px\">";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Just feel the deposit amount in USD"), "html", null, true);
        echo "</span></div>
      </div>
    

    <div id='askConfirmation' style=\"display: none\">
        <h3 style=\"text-align: center; margin-bottom: 20px\">";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("confirm credit"), "html", null, true);
        echo "</h3>
        <div id=\"localService\">
          <div>
              <span>";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pease check your phone to confirm transaction through :"), "html", null, true);
        echo "</span>
          </div>
          <div class=\"col d-none justify-content-between\" id=\"momo\">
            <div class=\"form-check\" style=\"padding: 5px; height: 150px; width:150px;\" >
              <img class=\"img-fluid\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/momo.jpg"), "html", null, true);
        echo "\" style=\"cursor:pointer\">
            </div>
              <span style=\"font-size: 1.2em; margin-top: 15px\">*126#</span>
          </div>
          <div class=\"col d-none justify-content-between\" id=\"om\">
          <div class=\"form-check\" style=\"padding: 5px; height: 150px; width:150px;\" >
              <img class=\"img-fluid\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/om.jpg"), "html", null, true);
        echo "\" style=\"cursor:pointer\">
              </div>
              <span style=\"font-size: 1.2em; margin-top: 30px\">#150*50#</span>
          </div>
          <div class=\"col d-none justify-content-between\" id=\"eum\">
            <div class=\"form-check\" style=\"padding: 5px; height: 150px; width:150px;\" >
                <img class=\"img-fluid\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/eu.jpg"), "html", null, true);
        echo "\" style=\"cursor:pointer\">
                </div>
                <span style=\"font-size: 1.2em; margin-top: 30px\">#150*50#</span>
            </div>
        </div>
        <div class=\"col d-none flex-column justify-content-between\" id=\"bitcoin\">
        <div class=\"col d-none justify-content-between\" id=\"checkWallet\">
        <div class=\"form-check\" style=\"padding: 5px; height: 150px; width:150px;\" >
            <img class=\"img-fluid\" src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bitcoin.jpg"), "html", null, true);
        echo "\" style=\"cursor:pointer\">
            </div>
            <span style=\"font-size: 1.2em; margin-top: 30px\">";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("please wait..."), "html", null, true);
        echo "</span>
        </div>
        <div class=\"d-none\" id=\"resultWallet\" style=\"margin-left: -20px\">
            <h6 style=\"font-size: 1.1em; text-align: center;\">";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MAKE TRANSFERT TO THIS WALLET"), "html", null, true);
        echo "</h6>
            <div style=\"text-align: center;\"><img id=\"qrCodeBtc\"/></div>
            <div>
              <span id=\"wallet\" style=\"font-size: 0.8em\"></span>
            </div>
            <div>
              <span >";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Amount to send in BTC :"), "html", null, true);
        echo " </span><span id=\"btcValue\" style=\"color: rgb(255,0,0); text-decoration: underline;\"></span><br />
              <span >";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Value in XPI :"), "html", null, true);
        echo " </span><span id=\"xpiValue\" style=\"color: rgb(255,0,0); text-decoration: underline;\"></span>
            </div>
        </div>
      </div>
      
      <div class=\"form-group\" id=\"loader\"><button class=\"btn btn-primary btn-block\" type=\"button\" style=\"background-image :url('";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/loading.gif"), "html", null, true);
        echo "'); background-repeat :no-repeat; background-position:center;height: 46px\"></button>
      </div>
    </div>
    <div id='confirmSms' style='display: none'>
    <h3 style=\"text-align: center; margin-bottom: 20px\">";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("confirm credit"), "html", null, true);
        echo "</h3>
    <div id=\"localService2\">
    <div>
        <span>";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Feel the security code you receive through SMS by DOHONE"), "html", null, true);
        echo "</span>
    </div>
    </div>
    <div class='form-group'><input class='form-control' type='text' name='smsCode' id=\"smsCode\" placeholder=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Confirmation code"), "html", null, true);
        echo "\" ></div>
    <div class=\"form-group\" ><button class=\"btn btn-primary btn-block\" id=\"submitSms\" type=\"button\">";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Send"), "html", null, true);
        echo "</button>
      <button class=\"btn btn-primary btn-block\" id=\"loader2\" type=\"button\" style=\"display: none; background-image :url('";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/loading.gif"), "html", null, true);
        echo "'); background-repeat :no-repeat; background-position:center;height: 46px\"></button>
    </div>
    </div>

  </form>
</div>
<script type=\"text/javascript\">
\$(document).ready(function(){
  window.history.pushState(\"\", \"\", '#credit-account');
//CONTACT API PAIEMENT
var service;
var usdValue;
var xafValue ;
var number;
var amount;
var payId;
var ref;
//VALEUR ACTUELLE DU JETON XPI
\$.ajax({
     url: \"https://soleaspay.com/convert\",
     type: \"GET\",
     dataType: \"JSON\",
     data: {amount: '1',
            devise: 'XPI'},
     success:function(data)
      {
       \txafValue = parseInt(data.data.XAF);
        usdValue = data.data.USD;
        \$('#rate').text('1 XPI = '+xafValue+' FCFA');
      }
  });
  
\$(\"input[name='service']\").on('click', function(){
    service = this.value;
});

\$('#next').on('click', function(){
  if(service == null){
    alert('select one payment method');
  }else if(service == 'other'){
    \$('#rate').text('1 XPI = '+usdValue+' USD');
    service =  'bitcoin';
    \$('#paymentMethods').fadeOut();
    //\$('#ppal').attr('class', 'd-flex');
    \$('#otherMethods').fadeIn();
  }else if(service == 'paypal'){
    \$('#paymentMethods').fadeOut();
    //\$('#ppal2').html('');
    //\$('#ppal').removeAttr('class');
    //let buttonPapal = \$('#ppal').html();
    //\$('#ppal2').html(buttonPapal);
    \$('#ppal').attr('class', 'd-flex');
    //\$('#ppal2').attr('class', 'd-flex col justify-content-between');
    \$('#processPay').fadeIn();
    \$('#processPaypal').fadeIn();
    \$('#blocPaypal').append(\"<div class='form-group'><input class='form-control' type='number' name='credit' id='amount' placeholder='";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Amount in USD"), "html", null, true);
        echo "' required autofocus></div>\");
    
  }else if(service == 'bitcoin'){
    \$('#paymentMethods').fadeOut();
    \$('#processPay').fadeIn();
    \$('#processBtc').fadeIn();
    \$('#blocBtc').append(\"<div class='form-group'><input class='form-control' type='number' name='credit' id='amount' placeholder='";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Amount in USD"), "html", null, true);
        echo "' required autofocus></div>\");
    \$('#blocBtc').append(\"<div class='form-group' id='btc'><button class='btn btn-primary btn-block' type='submit'>";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit"), "html", null, true);
        echo "</button></div>\");
  }else if(service == 'om'){
    \$('#paymentMethods').fadeOut();
    \$('#processPay').fadeIn();
    \$('#processOm').fadeIn();
    \$('#processOm').append(\"<input class='form-control' type='number'  id='number' placeholder='";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Phone number"), "html", null, true);
        echo "' pattern = '6{1}[0-9]{8}' title = '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("9 number on format 6xxxxxxxx"), "html", null, true);
        echo "' required autofocus>\");
    \$('#processOm').append(\"<div class='form-group'><input class='form-control' type='number' name='credit' id='amount' placeholder='";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Amount in FCFA"), "html", null, true);
        echo "' required></div>\");
  //  \$('#processOm').append(\"<div class='form-group'><input class='form-control' type='number' name='otp' id='otp' placeholder='";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("OTP you receive through message"), "html", null, true);
        echo "' required></div>\");
    \$('#processOm').append(\"<div class='form-group'><button class='btn btn-primary btn-block' type='submit'>";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit"), "html", null, true);
        echo "</button></div>\");
  }else if(service == 'momo'){
    \$('#paymentMethods').fadeOut();
    \$('#processPay').fadeIn();
    \$('#processMomo').fadeIn();
    \$('#processMomo').append(\"<input class='form-control' type='number'  id='number' placeholder='";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Phone number"), "html", null, true);
        echo "' pattern = '6{1}[0-9]{8}' title = '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("9 number on format 6xxxxxxxx"), "html", null, true);
        echo "' required autofocus>\");
    \$('#processMomo').append(\"<div class='form-group'><input class='form-control' type='number' name='credit' id='amount' placeholder='";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Amount in FCFA"), "html", null, true);
        echo "' required></div>\");
    \$('#processMomo').append(\"<div class='form-group'><button class='btn btn-primary btn-block' type='submit'>";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit"), "html", null, true);
        echo "</button></div>\");
  }else if(service == 'eum'){
    \$('#paymentMethods').fadeOut();
    \$('#processPay').fadeIn();
    \$('#processEum').fadeIn();
    \$('#processEum').append(\"<input class='form-control' type='number'  id='number' placeholder='";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Phone number"), "html", null, true);
        echo "' pattern = '6{1}[0-9]{8}' title = '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("9 number on format 6xxxxxxxx"), "html", null, true);
        echo "' required autofocus>\");
    \$('#processEum').append(\"<div class='form-group'><input class='form-control' type='number' name='credit' id='amount' placeholder='";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Amount in FCFA"), "html", null, true);
        echo "' required></div>\");
    \$('#processEum').append(\"<div class='form-group'><button class='btn btn-primary btn-block' type='submit'>";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit"), "html", null, true);
        echo "</button></div>\");
  }else if(service == 'pm'){
    \$('#paymentMethods').fadeOut();
    \$('#processPay').fadeIn();
    \$('#processPm').fadeIn();
    \$('#processPm').append(\"<div class='form-group'><input class='form-control' type='number' name='credit' id='amount' placeholder='";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Amount in USD"), "html", null, true);
        echo "' required autofocus></div>\");
    \$('#processPm').append(\"<div class='form-group'><button class='btn btn-primary btn-block' type='submit'>";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit"), "html", null, true);
        echo "</button></div>\");
  }
  
});


/*\$('#btc').on('click', function(){
  service =  'bitcoin';
  \$('#amount').attr('placeholder', \"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Number of XPI to be credited"), "html", null, true);
        echo "\").val('');
  \$('#blocBtc').append(\"<div class='form-group'><button class='btn btn-primary btn-block' type='submit'>";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit"), "html", null, true);
        echo "</button></div>\");
});*/

\$('form').on('submit', function(e){
    e.preventDefault();
    amount = \$('#amount').val();
    number = \$('#number').val();
    var otp = \$('#otp').val();
    \$('#paymentMethods').fadeOut();
    \$('#otherMethods').fadeOut();
    \$('#processPay').fadeOut();
    \$('#askConfirmation').fadeIn();
     if(service=='om'){
        service = 2;
        \$('#om').attr('class', 'd-flex').fadeIn();
     }else if(service=='momo'){
        service = 1;
        \$('#momo').attr('class', 'd-flex').fadeIn();
     }else if(service=='bitcoin'){
        service = 3;
        number = 1111;
        \$('#localService').fadeOut();
        \$('#bitcoin').attr('class', 'd-flex').fadeIn();
        \$('#checkWallet').attr('class', 'd-flex').fadeIn();
     }else if(service=='eum'){
        service = 5;
        \$('#eum').attr('class', 'd-flex').fadeIn();
      }else if(service=='pm'){
        service = 8;
        \$('#localService').fadeOut();
        \$('#pm').attr('class', 'd-flex').fadeIn();
      }
     \$.ajax({
     url: \"";
        // line 278
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_deposit");
        echo "\",
     type: \"POST\",
     dataType: \"JSON\",
     data: {amount: amount,
            wallet: number,
            service: service,
            otp: otp},
     success:function(data)
      { 
        if(service==3){
          let wallet = data.data.wallet;
          let value = data.data.value;
          payId = data.data.payId;
          let xpiValue;
          \$('#wallet').text(wallet);
          \$('#btcValue').text(value);
          \$.ajax({
             url: \"https://soleaspay.com/convert\",
             type: \"GET\",
             dataType: \"JSON\",
             data: {amount: amount,
                    devise: 'USD'},
             success:function(data)
              {
                xpiValue = data.data.value;
                \$('#xpiValue').text(xpiValue);
              }
          });
          //\$('#qrCodeBtc').attr('src', 'https://chart.googleapis.com/chart?chs=250x250&cht=qr&ch1='+wallet+'&choe=UTF-8');
          \$('#qrCodeBtc').attr('src', 'https://blockchain.info/qr?data='+wallet+'&size=225');
          \$('#checkWallet').attr('class', 'd-none').fadeOut();
          \$('#resultWallet').attr('class', 'd-flex flex-column').fadeIn();
          \$('#loader').fadeOut();
        
        }else if(service==8){
          //\$('#pmAmount').val(amount);
          //\$('#payId').val(data.data.payId);
          window.open('https://app.soleaspay.com/pm-payment?amount='+amount+'&ref='+data.data.payId, 'newwindow', 'width=900, height=800');
          alert('VEILLEZ POURSUIVRE LE TRANSFERT DANS LA NOUVELLE PAGE');
          setTimeout(function(){ location.reload(); }, 1000);
        
        }else if(service==1 || service==2 || service==5){
          if(data.success == true){
            if(data.message == 'Confirm new user with receive sms code'){
              \$('#askConfirmation').fadeOut();
              \$('#confirmSms').fadeIn();
            }else{
            \$('#askConfirmation').fadeOut();
            \$('#paymentMethods').fadeIn();
            \$.ajax({
               url: \"";
        // line 328
        echo "\",
               type: \"POST\",
               dataType: \"JSON\",
               success:function(data){
               //\$('.balance').text(data);
               }
              });
              alert(data.message);
              setTimeout(function(){ location.reload(); }, 1000);
                        
              
            }
           }else{
        \t\t  alert('error during transaction');
        \t\t    \$('#askConfirmation').fadeOut();
        \t\t\t\$('#paymentMethods').fadeIn();
              }
            }
          
      }
  });
});

\$('#submitSms').on('click', function(){
  \$('#submitSms').fadeOut();
  \$('#loader2').fadeIn();
  var smsCode = \$('#smsCode').val();
  if(smsCode == ''){
    alert('please feel the correct code');
  }else{
    \$.ajax({
     url: \"";
        // line 359
        echo "\",
     type: \"POST\",
     dataType: \"JSON\",
     data: {smsCode: smsCode,
            number: number,
            amount: amount
            },
     success:function(data){
      if(data.status == \"credit success\")
      {
        //ref = data.ref;
        //verifPay(payId, amount, ref);
        alert('Credit success');
        \$('#confirmSms').fadeOut();
        \$('#paymentMethods').fadeIn();
        \$.ajax({
           url: \"";
        // line 375
        echo "\",
           type: \"POST\",
           dataType: \"JSON\",
           success:function(data){
           \$('.balance').text(data);
           }
        });
        location,reload();
      }else{
        alert('error during transaction');
        \$('#askConfirmation').fadeOut();
        \$('#paymentMethods').fadeIn();
      }
      \$('#loader2').fadeOut();
      }
  });
  }
});
function verifPay(payId, amount, ref)
{
  \$.ajax({
     url: \"";
        // line 396
        echo "\",
     type: \"POST\",
     dataType: \"JSON\",
     data: {payId: payId,
            amount: amount,
            ref: ref
            },
     success:function(data){
        \$('#confirmSms').fadeOut();
        \$('#paymentMethods').fadeIn();
      if(data === 'OK'){
        alert('account credit successfully');
      }else{
        alert('payment not submited');
      }
      }
  });
}

paypal.Buttons({
  createOrder: function(data, actions){
    return actions.order.create({
      purchase_units: [{
        amount: {
          value: \$('#amount').val()
        }
      }]
    });
  },
  onApprove: function(data, actions){
    return actions.order.capture().then(function(details){
      \$.ajax({
         url: \"";
        // line 428
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_deposit");
        echo "\",
         type: \"POST\",
         dataType: \"JSON\",
         data: {amount: amount,
                wallet: number,
                service: service,
                otp: details.payer.name.given_name},
         success:function(data)
          {
            //alert('transaction succeed '+ details.payer.name.given_name + ' amount : ' + data['amount']);
            alert(data.message);
          }
      }); 
    });
  }
}).render('#ppal');
});
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/user/deposit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  672 => 428,  638 => 396,  615 => 375,  597 => 359,  564 => 328,  511 => 278,  475 => 245,  471 => 244,  460 => 236,  456 => 235,  448 => 230,  444 => 229,  438 => 228,  430 => 223,  426 => 222,  420 => 221,  412 => 216,  408 => 215,  404 => 214,  398 => 213,  390 => 208,  386 => 207,  377 => 201,  319 => 146,  315 => 145,  311 => 144,  305 => 141,  299 => 138,  292 => 134,  284 => 129,  280 => 128,  271 => 122,  265 => 119,  260 => 117,  249 => 109,  240 => 103,  231 => 97,  224 => 93,  218 => 90,  210 => 85,  206 => 84,  198 => 79,  194 => 78,  186 => 73,  182 => 72,  176 => 69,  172 => 68,  166 => 65,  162 => 64,  156 => 61,  152 => 60,  142 => 53,  134 => 48,  128 => 45,  123 => 43,  117 => 40,  110 => 36,  104 => 33,  99 => 31,  91 => 26,  85 => 23,  79 => 20,  73 => 17,  64 => 12,  58 => 10,  56 => 9,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
  <h1 class=\"h3 mb-0 text-gray-800\">{{'Credit your Account'|trans}}</h1>
  <a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i
    class=\"fas fa-download fa-sm text-white-50\"></i> <span id='rate'></span></a>
  </div>
  <div class=\"row justify-content-center\" id=\"content\"> 
  <form method=\"post\" class=\"align-items-center justify-content-center\" style=\"min-height:300px; margin:50px\">
    <div id='paymentMethods'>
      {% if error is defined %}
            <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
            {% endif %}
        <div><span class=\"d-flex d-sm-flex justify-content-center justify-content-sm-center\" style=\"font-size: 18px; margin-bottom: 10px\">{{'Select payment methods'|trans}} ?</span></div>
        
        <div class=\"d-block d-md-flex flex-column justify-content-center\" style=\"min-height: 300px; margin-top:20px\">
          <div class=\"d-block d-md-flex  justify-content-between\">  
          <div class=\"form-check\" style=\"height: 150px; width:150px\">
              <label class=\"form-check-label\"> <input class=\"form-check-input\" type=\"radio\" name=\"service\" value=\"om\" ><img class=\"img-fluid\" src=\"{{ asset('assets/img/om.jpg') }}\" style=\"cursor:pointer\"></label>
            </div>
            <div class=\"form-check\" style=\"height: 150px; width:150px\">
            <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"service\" value=\"eum\"><img class=\"img-fluid\" src=\"{{ asset('assets/img/eu.png') }}\" style=\"cursor:pointer\"></label>
          </div>
          <div class=\"form-check\" style=\"height: 150px; width:150px\">
            <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"service\" value=\"pm\"><img class=\"img-fluid\" src=\"{{ asset('assets/img/pm.jpeg') }}\" style=\"cursor:pointer\"></label>
          </div>
          <div class=\"form-check\" style=\"height: 150px; width:150px\">
            <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"service\" value=\"etherum\"  required=\"required\"><img class=\"img-fluid\" src=\"{{ asset('assets/img/ether.png') }}\" style=\"cursor:pointer\"></label>
          </div>
        </div>
            <div class=\"d-block d-md-flex justify-content-between\">
              <div class=\"form-check\" style=\"height: 150px; width:150px\">
                <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"service\" value=\"litecoin\" ><img class=\"img-fluid\" src=\"{{ asset('assets/img/litecoin.png') }}\" style=\"cursor:pointer\"></label></div>  
              <div class=\"form-check\" style=\"height: 150px; width:150px\">
                <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"service\" value=\"ripple\"  required=\"required\"><img class=\"img-fluid\" src=\"{{ asset('assets/img/ripple2.jpg') }}\" style=\"cursor:pointer\"></label>
              </div>
                <div class=\"form-check\" style=\"height: 150px; width:150px\">
                <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"service\" value=\"doge\" ><img class=\"img-fluid\" src=\"{{ asset('assets/img/doge.png') }}\" style=\"cursor:pointer\"></label></div>
                </div>
                <div class=\"d-block d-md-flex justify-content-between\">
                  <div class=\"form-check\" style=\"height: 150px; width:150px\">
                      <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"service\" value=\"momo\"  required=\"required\"><img class=\"img-fluid\" src=\"{{ asset('assets/img/momo.jpg') }}\" style=\"cursor:pointer\"></label>
                    </div>
                    <div class=\"form-check\" style=\"height: 150px; width:150px\">
                    <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"service\" value=\"paypal\" ><img class=\"img-fluid\" src=\"{{ asset('assets/img/paypal.png') }}\" style=\"cursor:pointer\"></label></div>
                    <div class=\"form-check\" style=\"height: 150px; width:150px\">
                      <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"service\" value=\"bitcoin\" ><img class=\"img-fluid\" src=\"{{ asset('assets/img/btc.png') }}\" style=\"cursor:pointer\"></label></div>  
                    </div>
          </div>
        <div class=\"d-flex justify-content-center\" ><button class=\"btn btn-primary btn-block\" type=\"button\" id='next'>{{'Next'|trans}}</button></div> 
                   
    </div>

      <div id=\"otherMethods\" style=\"display: none\">
      <div><span class=\"d-flex d-sm-flex justify-content-center justify-content-sm-center\" style=\"font-size: 18px; margin-bottom: 10px\">{{'Choose one of other payment methods'|trans}} ?</span></div>
        <div style=\"margin-bottom: 20px\" ><button class=\"btn btn-light btn-block\" id=\"btc\" type=\"submit\" style=\"background-size: cover;  background-repeat :no-repeat; background-position:center; height: 50px; margin-bottom: 10px;background-image: url()\"></button></div>
      </div>
    

    <div id=\"processPay\" style=\"display: none ; \" class=\"justify-content-center\">
        <div class=\"justify-content-between\" id=\"processOm\" style=\"display: none\">
            <div style=\"margin-bottom: 20px; max-height: 100px; max-width:100px\"><img class=\"img-fluid\" src=\"{{ asset('assets/img/om.jpg') }}\" style=\"cursor:pointer\"></div>
            <div><span style=\"font-size: 1.2em; margin-top: 10px; margin-bottom: 30px\">{{'feel your Orange money wallet'|trans }}</span></div>
        </div>
        <div class=\"justify-content-between\" id=\"processEum\" style=\"display: none\">
          <div style=\"margin-bottom: 20px; max-height: 100px; max-width:100px\"><img class=\"img-fluid\" src=\"{{ asset('assets/img/eu.jpg') }}\" style=\"cursor:pointer\"></div>
            <div><span style=\"font-size: 1.2em; margin-top: 10px; margin-bottom: 30px\">{{'feel your Express Union mobile money wallet'|trans }}</span></div>
        </div>
        <div class=\"justify-content-between\" id=\"processMomo\" style=\"display: none\">
          <div style=\"margin-bottom: 20px; max-height: 100px; max-width:100px\"><img class=\"img-fluid\" src=\"{{ asset('assets/img/momo.jpg') }}\" style=\"cursor:pointer\"></div>
            <div><span style=\"font-size: 1.2em; margin-top: 10px; margin-bottom: 30px\">{{'feel your MTN mobile money wallet'|trans }}</span></div>
        </div>
        <div class=\"justify-content-between\" id=\"processPaypal\" style=\"display: none\">
          <div style=\"margin-bottom: 20px; max-height: 100px; max-width:100px\"><img class=\"img-fluid\" src=\"{{ asset('assets/img/paypal.png') }}\" style=\"cursor:pointer\"></div>
          <div id=\"blocPaypal\"><span style=\"font-size: 1.2em; margin-top: 10px; margin-bottom: 30px\">{{'Just feel the deposit amount in USD'|trans }}</span></div>
          <div class=\"col justify-content-between\" id=\"ppal\">
          </div>
        </div>
        <div class=\"justify-content-between\" id=\"processPm\" style=\"display: none\">
          <div style=\"margin-bottom: 20px; max-height: 100px; max-width:100px\"><img class=\"img-fluid\" src=\"{{ asset('assets/img/pm.jpeg') }}\" style=\"cursor:pointer\"></div>
          <div><span style=\"font-size: 1.2em; margin-top: 10px; margin-bottom: 30px\">{{'Just feel the deposit amount in USD'|trans }}</span></div>
          
        </div>
        </div>
          <div class=\"justify-content-between\" id=\"processBtc\" style=\"display: none\">
            <div style=\"margin-bottom: 20px; max-height: 100px; max-width:100px\"><img class=\"img-fluid\" src=\"{{ asset('assets/img/btc.png') }}\" style=\"cursor:pointer\"></div>
            <div id=\"blocBtc\"><span style=\"font-size: 1.2em; margin-top: 10px; margin-bottom: 30px\">{{'Just feel the deposit amount in USD'|trans }}</span></div>
      </div>
    

    <div id='askConfirmation' style=\"display: none\">
        <h3 style=\"text-align: center; margin-bottom: 20px\">{{'confirm credit'|trans}}</h3>
        <div id=\"localService\">
          <div>
              <span>{{'Pease check your phone to confirm transaction through :'|trans}}</span>
          </div>
          <div class=\"col d-none justify-content-between\" id=\"momo\">
            <div class=\"form-check\" style=\"padding: 5px; height: 150px; width:150px;\" >
              <img class=\"img-fluid\" src=\"{{ asset('assets/img/momo.jpg') }}\" style=\"cursor:pointer\">
            </div>
              <span style=\"font-size: 1.2em; margin-top: 15px\">*126#</span>
          </div>
          <div class=\"col d-none justify-content-between\" id=\"om\">
          <div class=\"form-check\" style=\"padding: 5px; height: 150px; width:150px;\" >
              <img class=\"img-fluid\" src=\"{{ asset('assets/img/om.jpg') }}\" style=\"cursor:pointer\">
              </div>
              <span style=\"font-size: 1.2em; margin-top: 30px\">#150*50#</span>
          </div>
          <div class=\"col d-none justify-content-between\" id=\"eum\">
            <div class=\"form-check\" style=\"padding: 5px; height: 150px; width:150px;\" >
                <img class=\"img-fluid\" src=\"{{ asset('assets/img/eu.jpg') }}\" style=\"cursor:pointer\">
                </div>
                <span style=\"font-size: 1.2em; margin-top: 30px\">#150*50#</span>
            </div>
        </div>
        <div class=\"col d-none flex-column justify-content-between\" id=\"bitcoin\">
        <div class=\"col d-none justify-content-between\" id=\"checkWallet\">
        <div class=\"form-check\" style=\"padding: 5px; height: 150px; width:150px;\" >
            <img class=\"img-fluid\" src=\"{{ asset('assets/img/bitcoin.jpg') }}\" style=\"cursor:pointer\">
            </div>
            <span style=\"font-size: 1.2em; margin-top: 30px\">{{'please wait...'|trans}}</span>
        </div>
        <div class=\"d-none\" id=\"resultWallet\" style=\"margin-left: -20px\">
            <h6 style=\"font-size: 1.1em; text-align: center;\">{{'MAKE TRANSFERT TO THIS WALLET'|trans}}</h6>
            <div style=\"text-align: center;\"><img id=\"qrCodeBtc\"/></div>
            <div>
              <span id=\"wallet\" style=\"font-size: 0.8em\"></span>
            </div>
            <div>
              <span >{{'Amount to send in BTC :'|trans}} </span><span id=\"btcValue\" style=\"color: rgb(255,0,0); text-decoration: underline;\"></span><br />
              <span >{{'Value in XPI :'|trans}} </span><span id=\"xpiValue\" style=\"color: rgb(255,0,0); text-decoration: underline;\"></span>
            </div>
        </div>
      </div>
      
      <div class=\"form-group\" id=\"loader\"><button class=\"btn btn-primary btn-block\" type=\"button\" style=\"background-image :url('{{ asset(\"assets/img/loading.gif\") }}'); background-repeat :no-repeat; background-position:center;height: 46px\"></button>
      </div>
    </div>
    <div id='confirmSms' style='display: none'>
    <h3 style=\"text-align: center; margin-bottom: 20px\">{{'confirm credit'|trans}}</h3>
    <div id=\"localService2\">
    <div>
        <span>{{'Feel the security code you receive through SMS by DOHONE'|trans}}</span>
    </div>
    </div>
    <div class='form-group'><input class='form-control' type='text' name='smsCode' id=\"smsCode\" placeholder=\"{{'Confirmation code'|trans}}\" ></div>
    <div class=\"form-group\" ><button class=\"btn btn-primary btn-block\" id=\"submitSms\" type=\"button\">{{'Send'|trans}}</button>
      <button class=\"btn btn-primary btn-block\" id=\"loader2\" type=\"button\" style=\"display: none; background-image :url('{{ asset(\"assets/img/loading.gif\") }}'); background-repeat :no-repeat; background-position:center;height: 46px\"></button>
    </div>
    </div>

  </form>
</div>
<script type=\"text/javascript\">
\$(document).ready(function(){
  window.history.pushState(\"\", \"\", '#credit-account');
//CONTACT API PAIEMENT
var service;
var usdValue;
var xafValue ;
var number;
var amount;
var payId;
var ref;
//VALEUR ACTUELLE DU JETON XPI
\$.ajax({
     url: \"https://soleaspay.com/convert\",
     type: \"GET\",
     dataType: \"JSON\",
     data: {amount: '1',
            devise: 'XPI'},
     success:function(data)
      {
       \txafValue = parseInt(data.data.XAF);
        usdValue = data.data.USD;
        \$('#rate').text('1 XPI = '+xafValue+' FCFA');
      }
  });
  
\$(\"input[name='service']\").on('click', function(){
    service = this.value;
});

\$('#next').on('click', function(){
  if(service == null){
    alert('select one payment method');
  }else if(service == 'other'){
    \$('#rate').text('1 XPI = '+usdValue+' USD');
    service =  'bitcoin';
    \$('#paymentMethods').fadeOut();
    //\$('#ppal').attr('class', 'd-flex');
    \$('#otherMethods').fadeIn();
  }else if(service == 'paypal'){
    \$('#paymentMethods').fadeOut();
    //\$('#ppal2').html('');
    //\$('#ppal').removeAttr('class');
    //let buttonPapal = \$('#ppal').html();
    //\$('#ppal2').html(buttonPapal);
    \$('#ppal').attr('class', 'd-flex');
    //\$('#ppal2').attr('class', 'd-flex col justify-content-between');
    \$('#processPay').fadeIn();
    \$('#processPaypal').fadeIn();
    \$('#blocPaypal').append(\"<div class='form-group'><input class='form-control' type='number' name='credit' id='amount' placeholder='{{'Amount in USD'|trans}}' required autofocus></div>\");
    
  }else if(service == 'bitcoin'){
    \$('#paymentMethods').fadeOut();
    \$('#processPay').fadeIn();
    \$('#processBtc').fadeIn();
    \$('#blocBtc').append(\"<div class='form-group'><input class='form-control' type='number' name='credit' id='amount' placeholder='{{'Amount in USD'|trans}}' required autofocus></div>\");
    \$('#blocBtc').append(\"<div class='form-group' id='btc'><button class='btn btn-primary btn-block' type='submit'>{{'Submit'|trans}}</button></div>\");
  }else if(service == 'om'){
    \$('#paymentMethods').fadeOut();
    \$('#processPay').fadeIn();
    \$('#processOm').fadeIn();
    \$('#processOm').append(\"<input class='form-control' type='number'  id='number' placeholder='{{'Phone number'|trans}}' pattern = '6{1}[0-9]{8}' title = '{{'9 number on format 6xxxxxxxx'|trans}}' required autofocus>\");
    \$('#processOm').append(\"<div class='form-group'><input class='form-control' type='number' name='credit' id='amount' placeholder='{{'Amount in FCFA'|trans}}' required></div>\");
  //  \$('#processOm').append(\"<div class='form-group'><input class='form-control' type='number' name='otp' id='otp' placeholder='{{'OTP you receive through message'|trans}}' required></div>\");
    \$('#processOm').append(\"<div class='form-group'><button class='btn btn-primary btn-block' type='submit'>{{'Submit'|trans}}</button></div>\");
  }else if(service == 'momo'){
    \$('#paymentMethods').fadeOut();
    \$('#processPay').fadeIn();
    \$('#processMomo').fadeIn();
    \$('#processMomo').append(\"<input class='form-control' type='number'  id='number' placeholder='{{'Phone number'|trans}}' pattern = '6{1}[0-9]{8}' title = '{{'9 number on format 6xxxxxxxx'|trans}}' required autofocus>\");
    \$('#processMomo').append(\"<div class='form-group'><input class='form-control' type='number' name='credit' id='amount' placeholder='{{'Amount in FCFA'|trans}}' required></div>\");
    \$('#processMomo').append(\"<div class='form-group'><button class='btn btn-primary btn-block' type='submit'>{{'Submit'|trans}}</button></div>\");
  }else if(service == 'eum'){
    \$('#paymentMethods').fadeOut();
    \$('#processPay').fadeIn();
    \$('#processEum').fadeIn();
    \$('#processEum').append(\"<input class='form-control' type='number'  id='number' placeholder='{{'Phone number'|trans}}' pattern = '6{1}[0-9]{8}' title = '{{'9 number on format 6xxxxxxxx'|trans}}' required autofocus>\");
    \$('#processEum').append(\"<div class='form-group'><input class='form-control' type='number' name='credit' id='amount' placeholder='{{'Amount in FCFA'|trans}}' required></div>\");
    \$('#processEum').append(\"<div class='form-group'><button class='btn btn-primary btn-block' type='submit'>{{'Submit'|trans}}</button></div>\");
  }else if(service == 'pm'){
    \$('#paymentMethods').fadeOut();
    \$('#processPay').fadeIn();
    \$('#processPm').fadeIn();
    \$('#processPm').append(\"<div class='form-group'><input class='form-control' type='number' name='credit' id='amount' placeholder='{{'Amount in USD'|trans}}' required autofocus></div>\");
    \$('#processPm').append(\"<div class='form-group'><button class='btn btn-primary btn-block' type='submit'>{{'Submit'|trans}}</button></div>\");
  }
  
});


/*\$('#btc').on('click', function(){
  service =  'bitcoin';
  \$('#amount').attr('placeholder', \"{{'Number of XPI to be credited'|trans}}\").val('');
  \$('#blocBtc').append(\"<div class='form-group'><button class='btn btn-primary btn-block' type='submit'>{{'Submit'|trans}}</button></div>\");
});*/

\$('form').on('submit', function(e){
    e.preventDefault();
    amount = \$('#amount').val();
    number = \$('#number').val();
    var otp = \$('#otp').val();
    \$('#paymentMethods').fadeOut();
    \$('#otherMethods').fadeOut();
    \$('#processPay').fadeOut();
    \$('#askConfirmation').fadeIn();
     if(service=='om'){
        service = 2;
        \$('#om').attr('class', 'd-flex').fadeIn();
     }else if(service=='momo'){
        service = 1;
        \$('#momo').attr('class', 'd-flex').fadeIn();
     }else if(service=='bitcoin'){
        service = 3;
        number = 1111;
        \$('#localService').fadeOut();
        \$('#bitcoin').attr('class', 'd-flex').fadeIn();
        \$('#checkWallet').attr('class', 'd-flex').fadeIn();
     }else if(service=='eum'){
        service = 5;
        \$('#eum').attr('class', 'd-flex').fadeIn();
      }else if(service=='pm'){
        service = 8;
        \$('#localService').fadeOut();
        \$('#pm').attr('class', 'd-flex').fadeIn();
      }
     \$.ajax({
     url: \"{{ path('sopay_deposit') }}\",
     type: \"POST\",
     dataType: \"JSON\",
     data: {amount: amount,
            wallet: number,
            service: service,
            otp: otp},
     success:function(data)
      { 
        if(service==3){
          let wallet = data.data.wallet;
          let value = data.data.value;
          payId = data.data.payId;
          let xpiValue;
          \$('#wallet').text(wallet);
          \$('#btcValue').text(value);
          \$.ajax({
             url: \"https://soleaspay.com/convert\",
             type: \"GET\",
             dataType: \"JSON\",
             data: {amount: amount,
                    devise: 'USD'},
             success:function(data)
              {
                xpiValue = data.data.value;
                \$('#xpiValue').text(xpiValue);
              }
          });
          //\$('#qrCodeBtc').attr('src', 'https://chart.googleapis.com/chart?chs=250x250&cht=qr&ch1='+wallet+'&choe=UTF-8');
          \$('#qrCodeBtc').attr('src', 'https://blockchain.info/qr?data='+wallet+'&size=225');
          \$('#checkWallet').attr('class', 'd-none').fadeOut();
          \$('#resultWallet').attr('class', 'd-flex flex-column').fadeIn();
          \$('#loader').fadeOut();
        
        }else if(service==8){
          //\$('#pmAmount').val(amount);
          //\$('#payId').val(data.data.payId);
          window.open('https://app.soleaspay.com/pm-payment?amount='+amount+'&ref='+data.data.payId, 'newwindow', 'width=900, height=800');
          alert('VEILLEZ POURSUIVRE LE TRANSFERT DANS LA NOUVELLE PAGE');
          setTimeout(function(){ location.reload(); }, 1000);
        
        }else if(service==1 || service==2 || service==5){
          if(data.success == true){
            if(data.message == 'Confirm new user with receive sms code'){
              \$('#askConfirmation').fadeOut();
              \$('#confirmSms').fadeIn();
            }else{
            \$('#askConfirmation').fadeOut();
            \$('#paymentMethods').fadeIn();
            \$.ajax({
               url: \"{#{ path('xpiment_get_balance') }#}\",
               type: \"POST\",
               dataType: \"JSON\",
               success:function(data){
               //\$('.balance').text(data);
               }
              });
              alert(data.message);
              setTimeout(function(){ location.reload(); }, 1000);
                        
              
            }
           }else{
        \t\t  alert('error during transaction');
        \t\t    \$('#askConfirmation').fadeOut();
        \t\t\t\$('#paymentMethods').fadeIn();
              }
            }
          
      }
  });
});

\$('#submitSms').on('click', function(){
  \$('#submitSms').fadeOut();
  \$('#loader2').fadeIn();
  var smsCode = \$('#smsCode').val();
  if(smsCode == ''){
    alert('please feel the correct code');
  }else{
    \$.ajax({
     url: \"{#{ path('xpiment_confirm_sms') }#}\",
     type: \"POST\",
     dataType: \"JSON\",
     data: {smsCode: smsCode,
            number: number,
            amount: amount
            },
     success:function(data){
      if(data.status == \"credit success\")
      {
        //ref = data.ref;
        //verifPay(payId, amount, ref);
        alert('Credit success');
        \$('#confirmSms').fadeOut();
        \$('#paymentMethods').fadeIn();
        \$.ajax({
           url: \"{#{ path('xpiment_get_balance') }#}\",
           type: \"POST\",
           dataType: \"JSON\",
           success:function(data){
           \$('.balance').text(data);
           }
        });
        location,reload();
      }else{
        alert('error during transaction');
        \$('#askConfirmation').fadeOut();
        \$('#paymentMethods').fadeIn();
      }
      \$('#loader2').fadeOut();
      }
  });
  }
});
function verifPay(payId, amount, ref)
{
  \$.ajax({
     url: \"{#{ path('xpiment_verif_pay') }#}\",
     type: \"POST\",
     dataType: \"JSON\",
     data: {payId: payId,
            amount: amount,
            ref: ref
            },
     success:function(data){
        \$('#confirmSms').fadeOut();
        \$('#paymentMethods').fadeIn();
      if(data === 'OK'){
        alert('account credit successfully');
      }else{
        alert('payment not submited');
      }
      }
  });
}

paypal.Buttons({
  createOrder: function(data, actions){
    return actions.order.create({
      purchase_units: [{
        amount: {
          value: \$('#amount').val()
        }
      }]
    });
  },
  onApprove: function(data, actions){
    return actions.order.capture().then(function(details){
      \$.ajax({
         url: \"{{ path('sopay_deposit') }}\",
         type: \"POST\",
         dataType: \"JSON\",
         data: {amount: amount,
                wallet: number,
                service: service,
                otp: details.payer.name.given_name},
         success:function(data)
          {
            //alert('transaction succeed '+ details.payer.name.given_name + ' amount : ' + data['amount']);
            alert(data.message);
          }
      }); 
    });
  }
}).render('#ppal');
});
</script>", "/user/deposit.html.twig", "/var/www/html/sopay/templates/user/deposit.html.twig");
    }
}
