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

/* /user/withdraw.html.twig */
class __TwigTemplate_a8c1ba579185080c28c0a66b04cda3013e4ff910aab411f2cc1eaf82fecce25a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/user/withdraw.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/user/withdraw.html.twig"));

        // line 1
        echo "<div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
  <h1 class=\"h3 mb-0 text-gray-800\">";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Withdraw funds"), "html", null, true);
        echo "</h1>
  <a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i
    class=\"fas fa-download fa-sm text-white-50\"></i> <span id='rate'></span></a>
  </div>
  <div class=\"row justify-content-center\"> 
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select withdrawal service"), "html", null, true);
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
        </div>
        <div class=\"d-block d-md-flex justify-content-between\">
          <div class=\"form-check\" style=\"height: 150px; width:150px\">
              <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"service\" value=\"momo\"  required=\"required\"><img class=\"img-fluid\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/momo.jpg"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></label>
            </div>
            <div class=\"form-check\" style=\"height: 150px; width:150px\">
            <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"service\" value=\"paypal\" ><img class=\"img-fluid\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/paypal.png"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></label></div>
            <div class=\"form-check\" style=\"height: 150px; width:150px\">
              <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"service\" value=\"bitcoin\" ><img class=\"img-fluid\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/btc.png"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></label></div>  
            </div>
            </div>
        <div class=\"d-flex justify-content-center\" ><button class=\"btn btn-primary btn-block\" type=\"button\" id='next'>";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Next"), "html", null, true);
        echo "</button></div>          
    </div>
    <div id=\"processPay\" style=\"display: none ; \" class=\"justify-content-center\">
        <div class=\"justify-content-between\" id=\"processOm\" style=\"display: none\">
            <div style=\"margin-bottom: 20px; max-height: 100px; max-width:100px\"><img class=\"img-fluid\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/om.jpg"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></div>
            <div><span style=\"font-size: 1.2em; margin-top: 10px; margin-bottom: 30px\">";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feel your orange money wallet"), "html", null, true);
        echo "</span></div>
            
        </div>
        <div class=\"justify-content-between\" id=\"processEum\" style=\"display: none\">
          <div style=\"margin-bottom: 20px; max-height: 100px; max-width:100px\"><img class=\"img-fluid\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/om.jpg"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></div>
            <div><span style=\"font-size: 1.2em; margin-top: 10px; margin-bottom: 30px\">";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feel your Express union mobile money wallet"), "html", null, true);
        echo "</span></div>
          </div>
        <div class=\"justify-content-between\" id=\"processMomo\" style=\"display: none\">
          <div style=\"margin-bottom: 20px; max-height: 100px; max-width:100px\"><img class=\"img-fluid\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/momo.jpg"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></div>
            <div><span style=\"font-size: 1.2em; margin-top: 10px; margin-bottom: 30px\">";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feel your Mobile Money wallet"), "html", null, true);
        echo "</span></div>
          </div>
        <div class=\"justify-content-between\" id=\"processPaypal\" style=\"display: none\">
          <div style=\"margin-bottom: 20px; max-height: 100px; max-width:100px\"><img class=\"img-fluid\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/paypal.png"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></div>
          <div class='form-group' id=\"blocPaypal\"><span style=\"font-size: 1.2em; margin-top: 10px; margin-bottom: 30px\">";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Just feel the deposit amount in USD"), "html", null, true);
        echo "</span>
            </div>
          </div>
         <div class=\"justify-content-between\" id=\"processBtc\" style=\"display: none\">
            <div style=\"margin-bottom: 20px; max-height: 100px; max-width:100px\"><img class=\"img-fluid\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/btc.png"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></div>
            <div class='form-group' id=\"blocBtc\"><span style=\"font-size: 1.2em; margin-top: 10px; margin-bottom: 30px\">";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Just feel the deposit amount in USD"), "html", null, true);
        echo "</span>
            </div>
      </div>
    </div>

    <div id='confirmation' style=\"display: none\" class=\"justify-content-center\">
        <h2 style=\"text-align: center; margin-bottom: 20px\">";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("confirm Withdrawal"), "html", null, true);
        echo "</h2>
        <div id=\"blockConfirm\" class=\"justify-content-center\">
          <h3>";
        // line 67
        echo "withdrawal Detail";
        echo "</h3>
          
        </div>
        <div class='form-group'><button class='btn btn-primary btn-block' type='button' id='confirmWithdraw'>";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Confirm Withdraw"), "html", null, true);
        echo "</button></div>
      <div class=\"form-group d-none\" id=\"loader\"><button class=\"btn btn-primary btn-block\" type=\"button\" style=\"background-image :url('";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/loading.gif"), "html", null, true);
        echo "'); background-repeat :no-repeat; background-position:center;height: 46px\"></button>
      </div>
    </div>

  </form>
</div>
<script type=\"text/javascript\">
\$(document).ready(function(){
  window.history.pushState(\"\", \"\", '#withdraw-funds');
//CONTACT API PAIEMENT
var service;
var usdValue;
var xafValue ;
var wallet;
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
  \$('#paymentMethods').fadeOut();
  if(service == null){
    alert('select one payment method');
    \$('#paymentMethods').fadeIn();
  }
  if(service == 'paypal'){
    \$('#processPay').fadeIn();
    \$('#processPaypal').fadeIn();
    \$('#blocPaypal').append(\"<input class='form-control' type='email' name='walet' id='wallet' placeholder='";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Feel your PayPay Account"), "html", null, true);
        echo "' required autofocus><input class='form-control' type='number' name='credit' id='amount' placeholder='";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Amount in USD"), "html", null, true);
        echo "' required>\");
  }else if(service == 'bitcoin'){
    \$('#processPay').fadeIn();
    \$('#processBtc').fadeIn();
    \$('#blocBtc').append(\"<input class='form-control' type='text' name='wallet' id='wallet' placeholder='";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Feel your Bitcoin wallet"), "html", null, true);
        echo "' required autofocus><input class='form-control' type='number' name='credit' id='amount' placeholder='";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Amount in USD"), "html", null, true);
        echo "' required>\");
  }else if(service == 'om'){
    \$('#processPay').fadeIn();
    \$('#processOm').fadeIn();
    \$('#processOm').append(\"<div class='form-group'><input class='form-control' type='number'  id='wallet' placeholder='";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Phone number"), "html", null, true);
        echo "' pattern = '6{1}[0-9]{8}' title = '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("9 number on format 6xxxxxxxx"), "html", null, true);
        echo "' required autofocus><input class='form-control' type='number' name='credit' id='amount' placeholder='";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Amount in FCFA"), "html", null, true);
        echo "' required></div>\");
  }else if(service == 'momo'){
    \$('#processPay').fadeIn();
    \$('#processMomo').fadeIn();
    \$('#processMomo').append(\"<div class='form-group'><input class='form-control' type='number'  id='wallet' placeholder='";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Phone number"), "html", null, true);
        echo "' pattern = '6{1}[0-9]{8}' title = '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("9 number on format 6xxxxxxxx"), "html", null, true);
        echo "' required autofocus><input class='form-control' type='number' name='credit' id='amount' placeholder='";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Amount in FCFA"), "html", null, true);
        echo "' required></div>\");
   }else if(service == 'eum'){
    \$('#processPay').fadeIn();
    \$('#processEum').fadeIn();
    \$('#processEum').append(\"<div class='form-group'><input class='form-control' type='number'  id='wallet' placeholder='";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Phone number"), "html", null, true);
        echo "' pattern = '6{1}[0-9]{8}' title = '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("9 number on format 6xxxxxxxx"), "html", null, true);
        echo "' required autofocus><input class='form-control' type='number' name='credit' id='amount' placeholder='";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Amount in FCFA"), "html", null, true);
        echo "' required></div>\");
  }
  \$('#processPay').append(\"<div class='form-group'><button class='btn btn-primary btn-block' type='submit'>";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Next"), "html", null, true);
        echo "</button></div>\");
});


\$('form').on('submit', function(e){
    e.preventDefault();
    amount = \$('#amount').val();
    wallet = \$('#wallet').val();
    \$('#processPay').fadeOut();
    \$('#confirmation').fadeIn();
    \$('#blockConfirm').addClass('d-flex flex-column');
    \$('#blockConfirm').append('<span>Service : '+ service+'</span><span>Receiver wallet : '+wallet+'</span><span>Receiver Amount : '+amount+'</span>');
  });
    
  \$('#confirmWithdraw').on('click', function(){
    \$('#paymentMethods').fadeOut();
    \$('#processPay').fadeOut();
    if(service=='om'){
        service = 2;
     }else if(service=='momo'){
        service = 1;
     }else if(service=='bitcoin'){
        service = 3;
    }else if(service=='paypal'){
        service = 4;
     }else if(service=='eum'){
        service = 5;
      }
     \$.ajax({
     url: \"";
        // line 163
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_withdraw");
        echo "\",
     type: \"POST\",
     dataType: \"JSON\",
     data: {amount: amount,
            wallet: wallet,
            service: service},
     success:function(data)
      { 
        \$('#blockConfirm').removeClass('d-flex flex-column');
        \$('#confirmation').fadeOut();
        \$('#paymentMethods').fadeIn();
        alert(data.message);
      }
    });
  });
});
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/user/withdraw.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 163,  284 => 134,  275 => 132,  264 => 128,  253 => 124,  244 => 120,  235 => 116,  187 => 71,  183 => 70,  177 => 67,  172 => 65,  163 => 59,  159 => 58,  152 => 54,  148 => 53,  142 => 50,  138 => 49,  132 => 46,  128 => 45,  121 => 41,  117 => 40,  110 => 36,  104 => 33,  99 => 31,  93 => 28,  85 => 23,  79 => 20,  73 => 17,  64 => 12,  58 => 10,  56 => 9,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
  <h1 class=\"h3 mb-0 text-gray-800\">{{'Withdraw funds'|trans}}</h1>
  <a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i
    class=\"fas fa-download fa-sm text-white-50\"></i> <span id='rate'></span></a>
  </div>
  <div class=\"row justify-content-center\"> 
  <form method=\"post\" class=\"align-items-center justify-content-center\" style=\"min-height:300px; margin:50px\">
    <div id='paymentMethods'>
      {% if error is defined %}
            <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
            {% endif %}
        <div><span class=\"d-flex d-sm-flex justify-content-center justify-content-sm-center\" style=\"font-size: 18px; margin-bottom: 10px\">{{'Select withdrawal service'|trans}} ?</span></div>
        
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
    <div id=\"processPay\" style=\"display: none ; \" class=\"justify-content-center\">
        <div class=\"justify-content-between\" id=\"processOm\" style=\"display: none\">
            <div style=\"margin-bottom: 20px; max-height: 100px; max-width:100px\"><img class=\"img-fluid\" src=\"{{ asset('assets/img/om.jpg') }}\" style=\"cursor:pointer\"></div>
            <div><span style=\"font-size: 1.2em; margin-top: 10px; margin-bottom: 30px\">{{'feel your orange money wallet'|trans }}</span></div>
            
        </div>
        <div class=\"justify-content-between\" id=\"processEum\" style=\"display: none\">
          <div style=\"margin-bottom: 20px; max-height: 100px; max-width:100px\"><img class=\"img-fluid\" src=\"{{ asset('assets/img/om.jpg') }}\" style=\"cursor:pointer\"></div>
            <div><span style=\"font-size: 1.2em; margin-top: 10px; margin-bottom: 30px\">{{'feel your Express union mobile money wallet'|trans }}</span></div>
          </div>
        <div class=\"justify-content-between\" id=\"processMomo\" style=\"display: none\">
          <div style=\"margin-bottom: 20px; max-height: 100px; max-width:100px\"><img class=\"img-fluid\" src=\"{{ asset('assets/img/momo.jpg') }}\" style=\"cursor:pointer\"></div>
            <div><span style=\"font-size: 1.2em; margin-top: 10px; margin-bottom: 30px\">{{'feel your Mobile Money wallet'|trans }}</span></div>
          </div>
        <div class=\"justify-content-between\" id=\"processPaypal\" style=\"display: none\">
          <div style=\"margin-bottom: 20px; max-height: 100px; max-width:100px\"><img class=\"img-fluid\" src=\"{{ asset('assets/img/paypal.png') }}\" style=\"cursor:pointer\"></div>
          <div class='form-group' id=\"blocPaypal\"><span style=\"font-size: 1.2em; margin-top: 10px; margin-bottom: 30px\">{{'Just feel the deposit amount in USD'|trans }}</span>
            </div>
          </div>
         <div class=\"justify-content-between\" id=\"processBtc\" style=\"display: none\">
            <div style=\"margin-bottom: 20px; max-height: 100px; max-width:100px\"><img class=\"img-fluid\" src=\"{{ asset('assets/img/btc.png') }}\" style=\"cursor:pointer\"></div>
            <div class='form-group' id=\"blocBtc\"><span style=\"font-size: 1.2em; margin-top: 10px; margin-bottom: 30px\">{{'Just feel the deposit amount in USD'|trans }}</span>
            </div>
      </div>
    </div>

    <div id='confirmation' style=\"display: none\" class=\"justify-content-center\">
        <h2 style=\"text-align: center; margin-bottom: 20px\">{{'confirm Withdrawal'|trans}}</h2>
        <div id=\"blockConfirm\" class=\"justify-content-center\">
          <h3>{{'withdrawal Detail'}}</h3>
          
        </div>
        <div class='form-group'><button class='btn btn-primary btn-block' type='button' id='confirmWithdraw'>{{'Confirm Withdraw'|trans}}</button></div>
      <div class=\"form-group d-none\" id=\"loader\"><button class=\"btn btn-primary btn-block\" type=\"button\" style=\"background-image :url('{{ asset(\"assets/img/loading.gif\") }}'); background-repeat :no-repeat; background-position:center;height: 46px\"></button>
      </div>
    </div>

  </form>
</div>
<script type=\"text/javascript\">
\$(document).ready(function(){
  window.history.pushState(\"\", \"\", '#withdraw-funds');
//CONTACT API PAIEMENT
var service;
var usdValue;
var xafValue ;
var wallet;
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
  \$('#paymentMethods').fadeOut();
  if(service == null){
    alert('select one payment method');
    \$('#paymentMethods').fadeIn();
  }
  if(service == 'paypal'){
    \$('#processPay').fadeIn();
    \$('#processPaypal').fadeIn();
    \$('#blocPaypal').append(\"<input class='form-control' type='email' name='walet' id='wallet' placeholder='{{'Feel your PayPay Account'|trans}}' required autofocus><input class='form-control' type='number' name='credit' id='amount' placeholder='{{'Amount in USD'|trans}}' required>\");
  }else if(service == 'bitcoin'){
    \$('#processPay').fadeIn();
    \$('#processBtc').fadeIn();
    \$('#blocBtc').append(\"<input class='form-control' type='text' name='wallet' id='wallet' placeholder='{{'Feel your Bitcoin wallet'|trans}}' required autofocus><input class='form-control' type='number' name='credit' id='amount' placeholder='{{'Amount in USD'|trans}}' required>\");
  }else if(service == 'om'){
    \$('#processPay').fadeIn();
    \$('#processOm').fadeIn();
    \$('#processOm').append(\"<div class='form-group'><input class='form-control' type='number'  id='wallet' placeholder='{{'Phone number'|trans}}' pattern = '6{1}[0-9]{8}' title = '{{'9 number on format 6xxxxxxxx'|trans}}' required autofocus><input class='form-control' type='number' name='credit' id='amount' placeholder='{{'Amount in FCFA'|trans}}' required></div>\");
  }else if(service == 'momo'){
    \$('#processPay').fadeIn();
    \$('#processMomo').fadeIn();
    \$('#processMomo').append(\"<div class='form-group'><input class='form-control' type='number'  id='wallet' placeholder='{{'Phone number'|trans}}' pattern = '6{1}[0-9]{8}' title = '{{'9 number on format 6xxxxxxxx'|trans}}' required autofocus><input class='form-control' type='number' name='credit' id='amount' placeholder='{{'Amount in FCFA'|trans}}' required></div>\");
   }else if(service == 'eum'){
    \$('#processPay').fadeIn();
    \$('#processEum').fadeIn();
    \$('#processEum').append(\"<div class='form-group'><input class='form-control' type='number'  id='wallet' placeholder='{{'Phone number'|trans}}' pattern = '6{1}[0-9]{8}' title = '{{'9 number on format 6xxxxxxxx'|trans}}' required autofocus><input class='form-control' type='number' name='credit' id='amount' placeholder='{{'Amount in FCFA'|trans}}' required></div>\");
  }
  \$('#processPay').append(\"<div class='form-group'><button class='btn btn-primary btn-block' type='submit'>{{'Next'|trans}}</button></div>\");
});


\$('form').on('submit', function(e){
    e.preventDefault();
    amount = \$('#amount').val();
    wallet = \$('#wallet').val();
    \$('#processPay').fadeOut();
    \$('#confirmation').fadeIn();
    \$('#blockConfirm').addClass('d-flex flex-column');
    \$('#blockConfirm').append('<span>Service : '+ service+'</span><span>Receiver wallet : '+wallet+'</span><span>Receiver Amount : '+amount+'</span>');
  });
    
  \$('#confirmWithdraw').on('click', function(){
    \$('#paymentMethods').fadeOut();
    \$('#processPay').fadeOut();
    if(service=='om'){
        service = 2;
     }else if(service=='momo'){
        service = 1;
     }else if(service=='bitcoin'){
        service = 3;
    }else if(service=='paypal'){
        service = 4;
     }else if(service=='eum'){
        service = 5;
      }
     \$.ajax({
     url: \"{{ path('sopay_withdraw') }}\",
     type: \"POST\",
     dataType: \"JSON\",
     data: {amount: amount,
            wallet: wallet,
            service: service},
     success:function(data)
      { 
        \$('#blockConfirm').removeClass('d-flex flex-column');
        \$('#confirmation').fadeOut();
        \$('#paymentMethods').fadeIn();
        alert(data.message);
      }
    });
  });
});
</script>", "/user/withdraw.html.twig", "/var/www/html/sopay/templates/user/withdraw.html.twig");
    }
}
