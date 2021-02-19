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

/* /user/changes.html.twig */
class __TwigTemplate_400c646e748ad781a16a3d02f21f8ebda38924f961c3800f44eee358e6126cc0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/user/changes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/user/changes.html.twig"));

        // line 1
        echo "<div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
    <h1 class=\"h3 mb-0 text-gray-800\">";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Instant Changes"), "html", null, true);
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
            echo "              <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 10, $this->source); })()), "messageKey", [], "any", false, false, false, 10), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 10, $this->source); })()), "messageData", [], "any", false, false, false, 10), "security"), "html", null, true);
            echo "</div>
              ";
        }
        // line 12
        echo "          <div><span class=\"d-flex d-sm-flex justify-content-center justify-content-sm-center\" style=\"font-size: 18px; margin-bottom: 10px\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select entrance service"), "html", null, true);
        echo " ?</span></div>
          
          <div class=\"d-block d-md-flex flex-column justify-content-center\" style=\"min-height: 300px; margin-top:20px\">
            <div class=\"d-block d-md-flex  justify-content-between\">  
            <div class=\"form-check\" style=\"height: 150px; width:150px\">
                <label class=\"form-check-label\"> <input class=\"form-check-input\" type=\"radio\" name=\"inService\" value=\"om\" ><img class=\"img-fluid\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/om.jpg"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></label>
              </div>
              <div class=\"form-check\" style=\"height: 150px; width:150px\">
              <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"inService\" value=\"eum\"><img class=\"img-fluid\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/eu.png"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></label>
            </div>
            <div class=\"form-check\" style=\"height: 150px; width:150px\">
              <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"inService\" value=\"pm\"><img class=\"img-fluid\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/pm.jpeg"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></label>
            </div>
          </div>
          <div class=\"d-block d-md-flex justify-content-between\">
            <div class=\"form-check\" style=\"height: 150px; width:150px\">
                <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"inService\" value=\"etherum\"  required=\"required\"><img class=\"img-fluid\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/ether.png"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></label>
              </div>
              <div class=\"form-check\" style=\"height: 150px; width:150px\">
              <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"inService\" value=\"doge\" ><img class=\"img-fluid\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/doge.png"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></label></div>
              <div class=\"form-check\" style=\"height: 150px; width:150px\">
                <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"inService\" value=\"litecoin\" ><img class=\"img-fluid\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/litecoin.png"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></label></div>  
              </div>
          <div class=\"d-block d-md-flex justify-content-between\">
            <div class=\"form-check\" style=\"height: 150px; width:150px\">
                <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"inService\" value=\"momo\"  required=\"required\"><img class=\"img-fluid\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/momo.jpg"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></label>
              </div>
              <div class=\"form-check\" style=\"height: 150px; width:150px\">
              <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"inService\" value=\"paypal\" ><img class=\"img-fluid\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/paypal.png"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></label></div>
              <div class=\"form-check\" style=\"height: 150px; width:150px\">
                <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"inService\" value=\"bitcoin\" ><img class=\"img-fluid\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/btc.png"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></label></div>  
              </div>
              </div>
          <div class=\"d-flex justify-content-center\" ><button class=\"btn btn-primary btn-block\" type=\"button\" id='next'>";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Next"), "html", null, true);
        echo "</button></div>          
      </div>
      <div id='receiveMethods' style=\"display: none;\">
        ";
        // line 48
        if (array_key_exists("error", $context)) {
            // line 49
            echo "              <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 49, $this->source); })()), "messageKey", [], "any", false, false, false, 49), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 49, $this->source); })()), "messageData", [], "any", false, false, false, 49), "security"), "html", null, true);
            echo "</div>
              ";
        }
        // line 51
        echo "          <div><span class=\"d-flex d-sm-flex justify-content-center justify-content-sm-center\" style=\"font-size: 18px; margin-bottom: 10px\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select exit service"), "html", null, true);
        echo " ?</span></div>
          
          <div class=\"d-block d-md-flex flex-column justify-content-center\" style=\"min-height: 300px; margin-top:20px\">
            <div class=\"d-block d-md-flex  justify-content-between\">  
            <div class=\"form-check\" style=\"height: 150px; width:150px\">
                <label class=\"form-check-label\"> <input class=\"form-check-input\" type=\"radio\" name=\"outService\" value=\"om\" ><img class=\"img-fluid\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/om.jpg"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></label>
              </div>
              <div class=\"form-check\" style=\"height: 150px; width:150px\">
              <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"outService\" value=\"eum\"><img class=\"img-fluid\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/eu.png"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></label>
            </div>
            <div class=\"form-check\" style=\"height: 150px; width:150px\">
              <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"outService\" value=\"pm\"><img class=\"img-fluid\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/pm.jpeg"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></label>
            </div>
          </div>
          <div class=\"d-block d-md-flex justify-content-between\">
            <div class=\"form-check\" style=\"height: 150px; width:150px\">
                <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"outService\" value=\"momo\"  required=\"required\"><img class=\"img-fluid\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/momo.jpg"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></label>
              </div>
              <div class=\"form-check\" style=\"height: 150px; width:150px\">
              <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"outService\" value=\"paypal\" ><img class=\"img-fluid\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/paypal.png"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></label></div>
              <div class=\"form-check\" style=\"height: 150px; width:150px\">
                <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"outService\" value=\"bitcoin\" ><img class=\"img-fluid\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/btc.png"), "html", null, true);
        echo "\" style=\"cursor:pointer\"></label></div>  
              </div>
              </div>
              <div class='form-group'><button class='btn btn-primary btn-block' type='button' id='next2'>";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Next"), "html", null, true);
        echo "</button></div>        
      </div>

      <div id=\"processPay\" style=\"display: none ; \" class=\"justify-content-center\">
          <div class=\"form-group\">
              <p>From : <span class=\"processInService\"></span> To : <span class=\"processOutService\"></span></p>
          </div>
          <div class=\"form-group\" id=\"inInfos\">
            <input class='form-control' type='number' name='inAmount' id='inAmount' required>
          </div>
          <div class=\"form-group\" id=\"outInfos\">
            <input class='form-control' type='text' name='outAmount' id='outAmount' placeholder=\"Amount you receive\" readonly>
          </div> 
      </div>
  
      <div id='confirmation' style=\"display: none\" class=\"justify-content-center\">
          <h2 style=\"text-align: center; margin-bottom: 20px\">";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("confirm Your transaction"), "html", null, true);
        echo "</h2>
          <div id=\"blockConfirm\" class=\"justify-content-center\">
            <h3>";
        // line 93
        echo "Changes Details";
        echo "</h3>
            <div class=\"form-group\">
              <p>From : <span class=\"processInService\"></span> To : <span class=\"processOutService\"></span></p>
          </div>
          
          </div>
          <div class=\"col justify-content-between\" id=\"ppal\"></div>
          <div class='form-group'><button class='btn btn-primary btn-block' type='button' id='confirmChanges'>";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Confirm Changes"), "html", null, true);
        echo "</button></div>
        <div class=\"form-group d-none\" id=\"loader\"><button class=\"btn btn-primary btn-block\" type=\"button\" style=\"background-image :url('";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/loading.gif"), "html", null, true);
        echo "'); background-repeat :no-repeat; background-position:center;height: 46px\"></button>
        </div>
      </div>
      
      <div class=\"d-none\" id=\"resultWallet\" class=\"justify-content-center\">
        <h6 style=\"font-size: 1.1em; text-align: center;\">";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MAKE TRANSFERT TO THIS WALLET"), "html", null, true);
        echo "</h6>
        <div style=\"text-align: center;\"><img id=\"qrCodeBtc\"/></div>
        <div>
          <span id=\"wallet\" style=\"font-size: 0.8em\"></span>
        </div>
        <div>
          <span >";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Amount to send in BTC :"), "html", null, true);
        echo " </span><span id=\"btcValue\" style=\"color: rgb(255,0,0); text-decoration: underline;\"></span><br />
          <span >";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Value in XPI :"), "html", null, true);
        echo " </span><span id=\"xpiValue\" style=\"color: rgb(255,0,0); text-decoration: underline;\"></span>
        </div>
    </div>
  
    </form>
  </div>





  <script type=\"text/javascript\">
  \$(document).ready(function(){
    window.history.pushState(\"\", \"\", '#instant-changes');
  //CONTACT API PAIEMENT
  var inService;
  var outService;
  var usdValue;
  var xafValue ;
  var inWallet;
  var outWallet;
  var inAmount;
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
             xafValue = parseInt(data.data.XAF);
          usdValue = data.data.USD;
          \$('#rate').text('1 XPI = '+xafValue+' FCFA');
        }
    });
    
  \$(\"input[name='inService']\").on('click', function(){
      inService = this.value;
  });
  \$(\"input[name='outService']\").on('click', function(){
    outService = this.value;
  });

    \$('#next').on('click', function(){
        \$('#paymentMethods').fadeOut();
        if(inService == null){
        alert('select one payment method');
        \$('#paymentMethods').fadeIn();
        }
        var selectedService = \$('#receiveMethods').find('input[value='+inService+'].form-check-input');
        \$('#receiveMethods').find('input[value='+inService+']').attr('disabled', 'disabled');
        //\$('#receiveMethods').append(\"<div class='form-group'><button class='btn btn-primary btn-block' type='button' id='next2'>";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Next"), "html", null, true);
        echo "</button></div>\");
        \$('#receiveMethods').fadeIn();
    });

    \$('#next2').on('click', function(){
        \$('#receiveMethods').fadeOut();
        if(outService == null){
        alert('select one destination service');
        \$('#receiveMethods').fadeIn();
        }
        \$('.processInService').text(inService);
        \$('.processOutService').text(outService);
        //construction du formulaire
        if((inService == 'om' || inService == 'momo' || inService == 'eum') && (outService == 'om' || outService == 'momo' || outService == 'eum')){
            \$('#inAmount').attr('placeholder', \"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Amount in FCFA"), "html", null, true);
        echo "\")
            \$('#inInfos').prepend(\"<input class='form-control' type= 'number' id='inWallet' placeholder='\"+inService+\" ";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Phone number"), "html", null, true);
        echo "' pattern='6{1}[0-9]{8}' title = '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("9 number on format 6xxxxxxxx"), "html", null, true);
        echo "' required autofocus>\");
            \$('#outInfos').prepend(\"<input class='form-control' type='number' id='outWallet' placeholder='\"+outService+\" ";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Phone number"), "html", null, true);
        echo "' pattern='6{1}[0-9]{8}' title = '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("9 number on format 6xxxxxxxx"), "html", null, true);
        echo "' required autofocus></div>\");
        }else if((inService == 'om' || inService == 'momo' || inService == 'eum') && outService == 'paypal'){
            \$('#inAmount').attr('placeholder', \"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Amount in FCFA"), "html", null, true);
        echo "\")
            \$('#inInfos').prepend(\"<input class='form-control' type= 'number' id='inWallet' placeholder='\"+inService+\" ";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Phone number"), "html", null, true);
        echo "' pattern='6{1}[0-9]{8}' title = '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("9 number on format 6xxxxxxxx"), "html", null, true);
        echo "' required autofocus>\");
            \$('#outInfos').prepend(\"<input class='form-control' type='email' id='outWallet' placeholder='\"+outService+\" : ";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Feel your PayPal Account"), "html", null, true);
        echo "'  required autofocus>\");
        }else if((inService == 'om' || inService == 'momo' || inService == 'eum') && outService == 'bitcoin'){
            \$('#inAmount').attr('placeholder', \"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Amount in FCFA"), "html", null, true);
        echo "\")
            \$('#inInfos').prepend(\"<input class='form-control' type= 'number' id='inWallet' placeholder='\"+inService+\" ";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Phone number"), "html", null, true);
        echo "' pattern='6{1}[0-9]{8}' title = '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("9 number on format 6xxxxxxxx"), "html", null, true);
        echo "' required autofocus>\");
            \$('#outInfos').prepend(\"<input class='form-control' type='text' id='outWallet' placeholder='\"+outService+\" : ";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Feel your Bitcoin wallet"), "html", null, true);
        echo "' required autofocus>\");
        }else if((inService == 'om' || inService == 'momo' || inService == 'eum') && outService == 'pm'){
          \$('#inAmount').attr('placeholder', \"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Amount in FCFA"), "html", null, true);
        echo "\")
          \$('#inInfos').prepend(\"<input class='form-control' type= 'number' id='inWallet' placeholder='\"+inService+\" ";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Phone number"), "html", null, true);
        echo "' pattern='6{1}[0-9]{8}' title = '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("9 number on format 6xxxxxxxx"), "html", null, true);
        echo "' required autofocus>\");
          \$('#outInfos').prepend(\"<input class='form-control' type='text' id='outWallet' placeholder='\"+outService+\" : ";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Feel your Perfect Money wallet"), "html", null, true);
        echo "' required autofocus>\");
        }else if((inService == 'paypal' || inService == 'bitcoin' || inService == 'pm') && (outService == 'om' || outService == 'momo' || outService == 'eum')){
            \$('#inAmount').attr('placeholder', \"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Amount in USD"), "html", null, true);
        echo "\")
            \$('#outInfos').prepend(\"<input class='form-control' type= 'number' id='outWallet' placeholder='\"+outService+\" ";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Phone number"), "html", null, true);
        echo "' pattern='6{1}[0-9]{8}' title = '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("9 number on format 6xxxxxxxx"), "html", null, true);
        echo "' required>\");
        }else if((inService == 'paypal' || inService == 'bitcoin' || inService == 'pm') && outService == 'paypal'){
            \$('#inAmount').attr('placeholder', \"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Amount in USD"), "html", null, true);
        echo "\")
            \$('#outInfos').prepend(\"<input class='form-control' type='email' id='outWallet' placeholder='\"+outService+\" : ";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Feel your PayPal Account"), "html", null, true);
        echo "' required>\");
        }else if((inService == 'paypal' || inService == 'bitcoin' || inService == 'pm') && outService == 'bitcoin'){
            \$('#inAmount').attr('placeholder', \"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Amount in USD"), "html", null, true);
        echo "\")
            \$('#outInfos').prepend(\"<input class='form-control' type='text' id='outWallet' placeholder='\"+outService+\" : ";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Feel your Bitcoin wallet"), "html", null, true);
        echo "' required>\");
        }else if((inService == 'paypal' || inService == 'bitcoin' || inService == 'pm') && outService == 'pm'){
          \$('#inAmount').attr('placeholder', \"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Amount in USD"), "html", null, true);
        echo "\")
          \$('#outInfos').prepend(\"<input class='form-control' type='text' id='outWallet' placeholder='\"+outService+\" : ";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Feel your Perfect Money wallet"), "html", null, true);
        echo "' required>\");
        }
        \$('#processPay').append(\"<div class='form-group'><button class='btn btn-primary btn-block' type='submit'>";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Next"), "html", null, true);
        echo "</button></div>\");
        \$('#processPay').fadeIn();
        //initialisation des service
        if(inService == 'momo'){
            inService = 1;
        }else if(inService == 'om'){
            inService = 2;
        }else if(inService == 'bitcoin'){
            inService = 3;
        }else if(inService == 'paypal'){
            inService = 4
        }else if(inService == 'eum'){
            inService = 5
        }else if(inService == 'pm'){
          inService = 8
        }
        if(outService == 'momo'){
            outService = 1;
        }else if(outService == 'om'){
            outService = 2;
        }else if(outService == 'bitcoin'){
            outService = 3;
        }else if(outService == 'paypal'){
            outService = 4
        }else if(outService == 'eum'){
            outService = 5
        }else if(outService == 'pm'){
          outService = 8
        }
    });
  
    \$('#inAmount').on('keyup', function(){
        value = \$(this).val();
        if(value > 0){
          \$.ajax({
              url: \"";
        // line 244
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_get_amount");
        echo "\",
              type: \"POST\",
              dataType: \"JSON\",
              data: {value: value,
                    inService: inService,
                    outService: outService},
              success:function(data)
              { 
                  \$('#outAmount').val(data.data.amount+' '+data.data.devise);
              }
          });
        }
    });
  
  \$('form').on('submit', function(e){
      e.preventDefault();
      inAmount = \$('#inAmount').val();
      outAmount = \$('#outAmount').val();
      inWallet = \$('#inWallet').val();
      outWallet = \$('#outWallet').val();
      
      \$('#processPay').fadeOut();
      \$('#confirmation').fadeIn();
      \$('#blockConfirm').addClass('d-flex flex-column');
      \$('#blockConfirm').append('<span>Sender Wallet : '+ inWallet+'</span><span>Receive wallet : '+ outWallet+'</span><span>Amount to send : '+inAmount+'</span><span>Receiver Amount : '+outAmount+'</span>');
      if(inService == 4){
        \$('#ppal').fadeIn();
        \$('#confirmChanges').fadeOut();
      }else{
        \$('#ppal').fadeOut();
        \$('#confirmChanges').fadeIn();
      }
    });
      
    \$('#confirmChanges').on('click', function(){
      \$('#paymentMethods').fadeOut();
      \$('#processPay').fadeOut();
      
       \$.ajax({
       url: \"";
        // line 283
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_changes");
        echo "\",
       type: \"POST\",
       dataType: \"JSON\",
       data: {inAmount: inAmount,
              inService: inService,
              outService: outService,
              inWallet: inWallet,
              outWallet: outWallet},
       success:function(data)
        { 
          \$('#blockConfirm').removeClass('d-flex flex-column');
          \$('#confirmation').fadeOut();
          if(inService==3){
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
               data: {amount: inAmount,
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
          
          }else if(inService==8){
            window.open('https://app.soleaspay.com/pm-payment?amount='+inAmount+'&ref='+data.data.payId, 'newwindow', 'width=900, height=800');
            alert('VEILLEZ POURSUIVRE LE TRANSFERT DANS LA NOUVELLE PAGE');
            setTimeout(function(){ location.reload(); }, 1000);
          
          }else {
            \$('#paymentMethods').fadeIn();
            alert(data.message);
            location.reload();
          }
        }
      });
    });

    paypal.Buttons({
      createOrder: function(data, actions){
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: inAmount
            }
          }]
        });
      },
      onApprove: function(data, actions){
        return actions.order.capture().then(function(details){
          \$('#paymentMethods').fadeOut();
          \$('#processPay').fadeOut();
          \$('#blockConfirm').removeClass('d-flex flex-column');
          \$('#confirmation').fadeOut();    
          \$.ajax({
             url: \"";
        // line 351
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_changes");
        echo "\",
             type: \"POST\",
             dataType: \"JSON\",
             data: {inAmount: inAmount,
                    inService: inService,
                    outService: outService,
                    inWallet: inWallet,
                    outWallet: outWallet,
                    otp: details.payer.name.given_name},
             success:function(data)
              {
                \$('#paymentMethods').fadeIn();
                alert(data.message);
                //alert('transaction succeed '+ details.payer.name.given_name + ' amount : ' + data['amount']);
                setTimeout(function(){ location.reload(); }, 3000);
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
        return "/user/changes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  572 => 351,  501 => 283,  459 => 244,  421 => 209,  416 => 207,  412 => 206,  407 => 204,  403 => 203,  398 => 201,  394 => 200,  387 => 198,  383 => 197,  378 => 195,  372 => 194,  368 => 193,  363 => 191,  357 => 190,  353 => 189,  348 => 187,  342 => 186,  338 => 185,  331 => 183,  325 => 182,  321 => 181,  304 => 167,  247 => 113,  243 => 112,  234 => 106,  226 => 101,  222 => 100,  212 => 93,  207 => 91,  188 => 75,  182 => 72,  177 => 70,  171 => 67,  163 => 62,  157 => 59,  151 => 56,  142 => 51,  136 => 49,  134 => 48,  128 => 45,  122 => 42,  117 => 40,  111 => 37,  104 => 33,  99 => 31,  93 => 28,  85 => 23,  79 => 20,  73 => 17,  64 => 12,  58 => 10,  56 => 9,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
    <h1 class=\"h3 mb-0 text-gray-800\">{{'Instant Changes'|trans}}</h1>
    <a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i
      class=\"fas fa-download fa-sm text-white-50\"></i> <span id='rate'></span></a>
    </div>
    <div class=\"row justify-content-center\"> 
    <form method=\"post\" class=\"align-items-center justify-content-center\" style=\"min-height:300px; margin:50px\">
      <div id='paymentMethods'>
        {% if error is defined %}
              <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
              {% endif %}
          <div><span class=\"d-flex d-sm-flex justify-content-center justify-content-sm-center\" style=\"font-size: 18px; margin-bottom: 10px\">{{'Select entrance service'|trans}} ?</span></div>
          
          <div class=\"d-block d-md-flex flex-column justify-content-center\" style=\"min-height: 300px; margin-top:20px\">
            <div class=\"d-block d-md-flex  justify-content-between\">  
            <div class=\"form-check\" style=\"height: 150px; width:150px\">
                <label class=\"form-check-label\"> <input class=\"form-check-input\" type=\"radio\" name=\"inService\" value=\"om\" ><img class=\"img-fluid\" src=\"{{ asset('assets/img/om.jpg') }}\" style=\"cursor:pointer\"></label>
              </div>
              <div class=\"form-check\" style=\"height: 150px; width:150px\">
              <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"inService\" value=\"eum\"><img class=\"img-fluid\" src=\"{{ asset('assets/img/eu.png') }}\" style=\"cursor:pointer\"></label>
            </div>
            <div class=\"form-check\" style=\"height: 150px; width:150px\">
              <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"inService\" value=\"pm\"><img class=\"img-fluid\" src=\"{{ asset('assets/img/pm.jpeg') }}\" style=\"cursor:pointer\"></label>
            </div>
          </div>
          <div class=\"d-block d-md-flex justify-content-between\">
            <div class=\"form-check\" style=\"height: 150px; width:150px\">
                <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"inService\" value=\"etherum\"  required=\"required\"><img class=\"img-fluid\" src=\"{{ asset('assets/img/ether.png') }}\" style=\"cursor:pointer\"></label>
              </div>
              <div class=\"form-check\" style=\"height: 150px; width:150px\">
              <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"inService\" value=\"doge\" ><img class=\"img-fluid\" src=\"{{ asset('assets/img/doge.png') }}\" style=\"cursor:pointer\"></label></div>
              <div class=\"form-check\" style=\"height: 150px; width:150px\">
                <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"inService\" value=\"litecoin\" ><img class=\"img-fluid\" src=\"{{ asset('assets/img/litecoin.png') }}\" style=\"cursor:pointer\"></label></div>  
              </div>
          <div class=\"d-block d-md-flex justify-content-between\">
            <div class=\"form-check\" style=\"height: 150px; width:150px\">
                <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"inService\" value=\"momo\"  required=\"required\"><img class=\"img-fluid\" src=\"{{ asset('assets/img/momo.jpg') }}\" style=\"cursor:pointer\"></label>
              </div>
              <div class=\"form-check\" style=\"height: 150px; width:150px\">
              <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"inService\" value=\"paypal\" ><img class=\"img-fluid\" src=\"{{ asset('assets/img/paypal.png') }}\" style=\"cursor:pointer\"></label></div>
              <div class=\"form-check\" style=\"height: 150px; width:150px\">
                <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"inService\" value=\"bitcoin\" ><img class=\"img-fluid\" src=\"{{ asset('assets/img/btc.png') }}\" style=\"cursor:pointer\"></label></div>  
              </div>
              </div>
          <div class=\"d-flex justify-content-center\" ><button class=\"btn btn-primary btn-block\" type=\"button\" id='next'>{{'Next'|trans}}</button></div>          
      </div>
      <div id='receiveMethods' style=\"display: none;\">
        {% if error is defined %}
              <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
              {% endif %}
          <div><span class=\"d-flex d-sm-flex justify-content-center justify-content-sm-center\" style=\"font-size: 18px; margin-bottom: 10px\">{{'Select exit service'|trans}} ?</span></div>
          
          <div class=\"d-block d-md-flex flex-column justify-content-center\" style=\"min-height: 300px; margin-top:20px\">
            <div class=\"d-block d-md-flex  justify-content-between\">  
            <div class=\"form-check\" style=\"height: 150px; width:150px\">
                <label class=\"form-check-label\"> <input class=\"form-check-input\" type=\"radio\" name=\"outService\" value=\"om\" ><img class=\"img-fluid\" src=\"{{ asset('assets/img/om.jpg') }}\" style=\"cursor:pointer\"></label>
              </div>
              <div class=\"form-check\" style=\"height: 150px; width:150px\">
              <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"outService\" value=\"eum\"><img class=\"img-fluid\" src=\"{{ asset('assets/img/eu.png') }}\" style=\"cursor:pointer\"></label>
            </div>
            <div class=\"form-check\" style=\"height: 150px; width:150px\">
              <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"outService\" value=\"pm\"><img class=\"img-fluid\" src=\"{{ asset('assets/img/pm.jpeg') }}\" style=\"cursor:pointer\"></label>
            </div>
          </div>
          <div class=\"d-block d-md-flex justify-content-between\">
            <div class=\"form-check\" style=\"height: 150px; width:150px\">
                <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"outService\" value=\"momo\"  required=\"required\"><img class=\"img-fluid\" src=\"{{ asset('assets/img/momo.jpg') }}\" style=\"cursor:pointer\"></label>
              </div>
              <div class=\"form-check\" style=\"height: 150px; width:150px\">
              <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"outService\" value=\"paypal\" ><img class=\"img-fluid\" src=\"{{ asset('assets/img/paypal.png') }}\" style=\"cursor:pointer\"></label></div>
              <div class=\"form-check\" style=\"height: 150px; width:150px\">
                <label class=\"form-check-label\"><input class=\"form-check-input\" type=\"radio\" name=\"outService\" value=\"bitcoin\" ><img class=\"img-fluid\" src=\"{{ asset('assets/img/btc.png') }}\" style=\"cursor:pointer\"></label></div>  
              </div>
              </div>
              <div class='form-group'><button class='btn btn-primary btn-block' type='button' id='next2'>{{'Next'|trans}}</button></div>        
      </div>

      <div id=\"processPay\" style=\"display: none ; \" class=\"justify-content-center\">
          <div class=\"form-group\">
              <p>From : <span class=\"processInService\"></span> To : <span class=\"processOutService\"></span></p>
          </div>
          <div class=\"form-group\" id=\"inInfos\">
            <input class='form-control' type='number' name='inAmount' id='inAmount' required>
          </div>
          <div class=\"form-group\" id=\"outInfos\">
            <input class='form-control' type='text' name='outAmount' id='outAmount' placeholder=\"Amount you receive\" readonly>
          </div> 
      </div>
  
      <div id='confirmation' style=\"display: none\" class=\"justify-content-center\">
          <h2 style=\"text-align: center; margin-bottom: 20px\">{{'confirm Your transaction'|trans}}</h2>
          <div id=\"blockConfirm\" class=\"justify-content-center\">
            <h3>{{'Changes Details'}}</h3>
            <div class=\"form-group\">
              <p>From : <span class=\"processInService\"></span> To : <span class=\"processOutService\"></span></p>
          </div>
          
          </div>
          <div class=\"col justify-content-between\" id=\"ppal\"></div>
          <div class='form-group'><button class='btn btn-primary btn-block' type='button' id='confirmChanges'>{{'Confirm Changes'|trans}}</button></div>
        <div class=\"form-group d-none\" id=\"loader\"><button class=\"btn btn-primary btn-block\" type=\"button\" style=\"background-image :url('{{ asset(\"assets/img/loading.gif\") }}'); background-repeat :no-repeat; background-position:center;height: 46px\"></button>
        </div>
      </div>
      
      <div class=\"d-none\" id=\"resultWallet\" class=\"justify-content-center\">
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
  
    </form>
  </div>





  <script type=\"text/javascript\">
  \$(document).ready(function(){
    window.history.pushState(\"\", \"\", '#instant-changes');
  //CONTACT API PAIEMENT
  var inService;
  var outService;
  var usdValue;
  var xafValue ;
  var inWallet;
  var outWallet;
  var inAmount;
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
             xafValue = parseInt(data.data.XAF);
          usdValue = data.data.USD;
          \$('#rate').text('1 XPI = '+xafValue+' FCFA');
        }
    });
    
  \$(\"input[name='inService']\").on('click', function(){
      inService = this.value;
  });
  \$(\"input[name='outService']\").on('click', function(){
    outService = this.value;
  });

    \$('#next').on('click', function(){
        \$('#paymentMethods').fadeOut();
        if(inService == null){
        alert('select one payment method');
        \$('#paymentMethods').fadeIn();
        }
        var selectedService = \$('#receiveMethods').find('input[value='+inService+'].form-check-input');
        \$('#receiveMethods').find('input[value='+inService+']').attr('disabled', 'disabled');
        //\$('#receiveMethods').append(\"<div class='form-group'><button class='btn btn-primary btn-block' type='button' id='next2'>{{'Next'|trans}}</button></div>\");
        \$('#receiveMethods').fadeIn();
    });

    \$('#next2').on('click', function(){
        \$('#receiveMethods').fadeOut();
        if(outService == null){
        alert('select one destination service');
        \$('#receiveMethods').fadeIn();
        }
        \$('.processInService').text(inService);
        \$('.processOutService').text(outService);
        //construction du formulaire
        if((inService == 'om' || inService == 'momo' || inService == 'eum') && (outService == 'om' || outService == 'momo' || outService == 'eum')){
            \$('#inAmount').attr('placeholder', \"{{'Amount in FCFA'|trans}}\")
            \$('#inInfos').prepend(\"<input class='form-control' type= 'number' id='inWallet' placeholder='\"+inService+\" {{'Phone number'|trans}}' pattern='6{1}[0-9]{8}' title = '{{'9 number on format 6xxxxxxxx'|trans}}' required autofocus>\");
            \$('#outInfos').prepend(\"<input class='form-control' type='number' id='outWallet' placeholder='\"+outService+\" {{'Phone number'|trans}}' pattern='6{1}[0-9]{8}' title = '{{'9 number on format 6xxxxxxxx'|trans}}' required autofocus></div>\");
        }else if((inService == 'om' || inService == 'momo' || inService == 'eum') && outService == 'paypal'){
            \$('#inAmount').attr('placeholder', \"{{'Amount in FCFA'|trans}}\")
            \$('#inInfos').prepend(\"<input class='form-control' type= 'number' id='inWallet' placeholder='\"+inService+\" {{'Phone number'|trans}}' pattern='6{1}[0-9]{8}' title = '{{'9 number on format 6xxxxxxxx'|trans}}' required autofocus>\");
            \$('#outInfos').prepend(\"<input class='form-control' type='email' id='outWallet' placeholder='\"+outService+\" : {{'Feel your PayPal Account'|trans}}'  required autofocus>\");
        }else if((inService == 'om' || inService == 'momo' || inService == 'eum') && outService == 'bitcoin'){
            \$('#inAmount').attr('placeholder', \"{{'Amount in FCFA'|trans}}\")
            \$('#inInfos').prepend(\"<input class='form-control' type= 'number' id='inWallet' placeholder='\"+inService+\" {{'Phone number'|trans}}' pattern='6{1}[0-9]{8}' title = '{{'9 number on format 6xxxxxxxx'|trans}}' required autofocus>\");
            \$('#outInfos').prepend(\"<input class='form-control' type='text' id='outWallet' placeholder='\"+outService+\" : {{'Feel your Bitcoin wallet'|trans}}' required autofocus>\");
        }else if((inService == 'om' || inService == 'momo' || inService == 'eum') && outService == 'pm'){
          \$('#inAmount').attr('placeholder', \"{{'Amount in FCFA'|trans}}\")
          \$('#inInfos').prepend(\"<input class='form-control' type= 'number' id='inWallet' placeholder='\"+inService+\" {{'Phone number'|trans}}' pattern='6{1}[0-9]{8}' title = '{{'9 number on format 6xxxxxxxx'|trans}}' required autofocus>\");
          \$('#outInfos').prepend(\"<input class='form-control' type='text' id='outWallet' placeholder='\"+outService+\" : {{'Feel your Perfect Money wallet'|trans}}' required autofocus>\");
        }else if((inService == 'paypal' || inService == 'bitcoin' || inService == 'pm') && (outService == 'om' || outService == 'momo' || outService == 'eum')){
            \$('#inAmount').attr('placeholder', \"{{'Amount in USD'|trans}}\")
            \$('#outInfos').prepend(\"<input class='form-control' type= 'number' id='outWallet' placeholder='\"+outService+\" {{'Phone number'|trans}}' pattern='6{1}[0-9]{8}' title = '{{'9 number on format 6xxxxxxxx'|trans}}' required>\");
        }else if((inService == 'paypal' || inService == 'bitcoin' || inService == 'pm') && outService == 'paypal'){
            \$('#inAmount').attr('placeholder', \"{{'Amount in USD'|trans}}\")
            \$('#outInfos').prepend(\"<input class='form-control' type='email' id='outWallet' placeholder='\"+outService+\" : {{'Feel your PayPal Account'|trans}}' required>\");
        }else if((inService == 'paypal' || inService == 'bitcoin' || inService == 'pm') && outService == 'bitcoin'){
            \$('#inAmount').attr('placeholder', \"{{'Amount in USD'|trans}}\")
            \$('#outInfos').prepend(\"<input class='form-control' type='text' id='outWallet' placeholder='\"+outService+\" : {{'Feel your Bitcoin wallet'|trans}}' required>\");
        }else if((inService == 'paypal' || inService == 'bitcoin' || inService == 'pm') && outService == 'pm'){
          \$('#inAmount').attr('placeholder', \"{{'Amount in USD'|trans}}\")
          \$('#outInfos').prepend(\"<input class='form-control' type='text' id='outWallet' placeholder='\"+outService+\" : {{'Feel your Perfect Money wallet'|trans}}' required>\");
        }
        \$('#processPay').append(\"<div class='form-group'><button class='btn btn-primary btn-block' type='submit'>{{'Next'|trans}}</button></div>\");
        \$('#processPay').fadeIn();
        //initialisation des service
        if(inService == 'momo'){
            inService = 1;
        }else if(inService == 'om'){
            inService = 2;
        }else if(inService == 'bitcoin'){
            inService = 3;
        }else if(inService == 'paypal'){
            inService = 4
        }else if(inService == 'eum'){
            inService = 5
        }else if(inService == 'pm'){
          inService = 8
        }
        if(outService == 'momo'){
            outService = 1;
        }else if(outService == 'om'){
            outService = 2;
        }else if(outService == 'bitcoin'){
            outService = 3;
        }else if(outService == 'paypal'){
            outService = 4
        }else if(outService == 'eum'){
            outService = 5
        }else if(outService == 'pm'){
          outService = 8
        }
    });
  
    \$('#inAmount').on('keyup', function(){
        value = \$(this).val();
        if(value > 0){
          \$.ajax({
              url: \"{{ path('sopay_get_amount') }}\",
              type: \"POST\",
              dataType: \"JSON\",
              data: {value: value,
                    inService: inService,
                    outService: outService},
              success:function(data)
              { 
                  \$('#outAmount').val(data.data.amount+' '+data.data.devise);
              }
          });
        }
    });
  
  \$('form').on('submit', function(e){
      e.preventDefault();
      inAmount = \$('#inAmount').val();
      outAmount = \$('#outAmount').val();
      inWallet = \$('#inWallet').val();
      outWallet = \$('#outWallet').val();
      
      \$('#processPay').fadeOut();
      \$('#confirmation').fadeIn();
      \$('#blockConfirm').addClass('d-flex flex-column');
      \$('#blockConfirm').append('<span>Sender Wallet : '+ inWallet+'</span><span>Receive wallet : '+ outWallet+'</span><span>Amount to send : '+inAmount+'</span><span>Receiver Amount : '+outAmount+'</span>');
      if(inService == 4){
        \$('#ppal').fadeIn();
        \$('#confirmChanges').fadeOut();
      }else{
        \$('#ppal').fadeOut();
        \$('#confirmChanges').fadeIn();
      }
    });
      
    \$('#confirmChanges').on('click', function(){
      \$('#paymentMethods').fadeOut();
      \$('#processPay').fadeOut();
      
       \$.ajax({
       url: \"{{ path('sopay_changes') }}\",
       type: \"POST\",
       dataType: \"JSON\",
       data: {inAmount: inAmount,
              inService: inService,
              outService: outService,
              inWallet: inWallet,
              outWallet: outWallet},
       success:function(data)
        { 
          \$('#blockConfirm').removeClass('d-flex flex-column');
          \$('#confirmation').fadeOut();
          if(inService==3){
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
               data: {amount: inAmount,
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
          
          }else if(inService==8){
            window.open('https://app.soleaspay.com/pm-payment?amount='+inAmount+'&ref='+data.data.payId, 'newwindow', 'width=900, height=800');
            alert('VEILLEZ POURSUIVRE LE TRANSFERT DANS LA NOUVELLE PAGE');
            setTimeout(function(){ location.reload(); }, 1000);
          
          }else {
            \$('#paymentMethods').fadeIn();
            alert(data.message);
            location.reload();
          }
        }
      });
    });

    paypal.Buttons({
      createOrder: function(data, actions){
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: inAmount
            }
          }]
        });
      },
      onApprove: function(data, actions){
        return actions.order.capture().then(function(details){
          \$('#paymentMethods').fadeOut();
          \$('#processPay').fadeOut();
          \$('#blockConfirm').removeClass('d-flex flex-column');
          \$('#confirmation').fadeOut();    
          \$.ajax({
             url: \"{{ path('sopay_changes') }}\",
             type: \"POST\",
             dataType: \"JSON\",
             data: {inAmount: inAmount,
                    inService: inService,
                    outService: outService,
                    inWallet: inWallet,
                    outWallet: outWallet,
                    otp: details.payer.name.given_name},
             success:function(data)
              {
                \$('#paymentMethods').fadeIn();
                alert(data.message);
                //alert('transaction succeed '+ details.payer.name.given_name + ' amount : ' + data['amount']);
                setTimeout(function(){ location.reload(); }, 3000);
              }
          }); 
        });
      }
    }).render('#ppal');
  });
</script>", "/user/changes.html.twig", "/var/www/html/sopay/templates/user/changes.html.twig");
    }
}
