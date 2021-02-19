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

/* user/transfert.html.twig */
class __TwigTemplate_7865c84fad8dc537bd2045ee817b622b3164843c3ffb4161633245a3574dce1b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/transfert.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/transfert.html.twig"));

        // line 1
        echo "<div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
    <h1 class=\"h3 mb-0 text-gray-800\">";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Transfert Funds"), "html", null, true);
        echo "</h1>
    <a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i
      class=\"fas fa-download fa-sm text-white-50\"></i> <span id='rate'></span></a>
    </div>
    <div class=\"row justify-content-center\"> 
      <div class=\"d-block d-md-flex col-lg-4\">
    <form method=\"post\" class=\"align-items-center\" style=\"min-height:300px; margin:50px\">
      <div id='transfert'>
        ";
        // line 10
        if (array_key_exists("error", $context)) {
            // line 11
            echo "              <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 11, $this->source); })()), "messageKey", [], "any", false, false, false, 11), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 11, $this->source); })()), "messageData", [], "any", false, false, false, 11), "security"), "html", null, true);
            echo "</div>
              ";
        }
        // line 13
        echo "        
      <h3 style=\"text-align: center; margin-bottom: 20px\">";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your allready"), "html", null, true);
        echo "</h3>
      
      <div class='form-group'><input class='form-control' type='receiver' name='receiver' id=\"receiver\" placeholder=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Receiver Matricule"), "html", null, true);
        echo "\" ></div>
      <div class='form-group'><input class='form-control' type='number' name='credit' id='amount' placeholder='";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Amount in "), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "default_currency", [], "any", false, false, false, 17), "code", [], "any", false, false, false, 17), "html", null, true);
        echo "' required autofocus></div>
      <div class=\"form-group\" ><button class=\"btn btn-primary btn-block\" type=\"submit\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Send"), "html", null, true);
        echo "</button>
      </div>
      </div>
  
    </form>
    </div>
    <div class='d-block d-md-flex col-lg-4'>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover text-center\" id=\"listReferral\">
          <caption class=\"text-center bg-primary\" style=\"font-size: x-large; caption-side:top; color:black\">";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your referal team"), "html", null, true);
        echo "</caption>
          <tr>
            <th>Account</th>
            <th>Username</th>
            <th>Contact</th>
            <th>Last Operation</th>
          </tr>
        </table>
        <!-- Start single blog -->
      </div>
    </div>
    </div>
  <script type=\"text/javascript\">
  \$(document).ready(function(){
  window.history.pushState(\"\", \"\", '#transfert-funds');
  //CONTACT API PAIEMENT
  var receiver;
  var amount;
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
  
  \$('form').on('submit', function(e){
      e.preventDefault();
      amount = \$('#amount').val();
      receiver = \$('#receiver').val();
     
       \$.ajax({
       url: \"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_transfert");
        echo "\",
       type: \"POST\",
       dataType: \"JSON\",
       data: {amount: amount,
              receiver: receiver},
       success:function(data)
        { 
            alert(data.message);
            location.reload();
        }
    });
  });
  var referrals = JSON.parse(";
        // line 78
        echo json_encode((isset($context["referrals"]) || array_key_exists("referrals", $context) ? $context["referrals"] : (function () { throw new RuntimeError('Variable "referrals" does not exist.', 78, $this->source); })()));
        echo ").data;
  for (let i=0; i<referrals.length; i++){
    \$('#listReferral').append('<tr><td class=\"table-success\">'+referrals[i].matricule+'</td><td>'+referrals[i].username+'</td><td>'+referrals[i].contact+'</td><td>'+referrals[i].last_operation+'</td></tr>');
  }
  });
  </script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/transfert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 78,  137 => 66,  95 => 27,  83 => 18,  77 => 17,  73 => 16,  68 => 14,  65 => 13,  59 => 11,  57 => 10,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
    <h1 class=\"h3 mb-0 text-gray-800\">{{'Transfert Funds'|trans}}</h1>
    <a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i
      class=\"fas fa-download fa-sm text-white-50\"></i> <span id='rate'></span></a>
    </div>
    <div class=\"row justify-content-center\"> 
      <div class=\"d-block d-md-flex col-lg-4\">
    <form method=\"post\" class=\"align-items-center\" style=\"min-height:300px; margin:50px\">
      <div id='transfert'>
        {% if error is defined %}
              <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
              {% endif %}
        
      <h3 style=\"text-align: center; margin-bottom: 20px\">{{'Your allready'|trans}}</h3>
      
      <div class='form-group'><input class='form-control' type='receiver' name='receiver' id=\"receiver\" placeholder=\"{{'Receiver Matricule'|trans}}\" ></div>
      <div class='form-group'><input class='form-control' type='number' name='credit' id='amount' placeholder='{{'Amount in '|trans}} {{ user.default_currency.code}}' required autofocus></div>
      <div class=\"form-group\" ><button class=\"btn btn-primary btn-block\" type=\"submit\">{{'Send'|trans}}</button>
      </div>
      </div>
  
    </form>
    </div>
    <div class='d-block d-md-flex col-lg-4'>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover text-center\" id=\"listReferral\">
          <caption class=\"text-center bg-primary\" style=\"font-size: x-large; caption-side:top; color:black\">{{'Your referal team'|trans}}</caption>
          <tr>
            <th>Account</th>
            <th>Username</th>
            <th>Contact</th>
            <th>Last Operation</th>
          </tr>
        </table>
        <!-- Start single blog -->
      </div>
    </div>
    </div>
  <script type=\"text/javascript\">
  \$(document).ready(function(){
  window.history.pushState(\"\", \"\", '#transfert-funds');
  //CONTACT API PAIEMENT
  var receiver;
  var amount;
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
  
  \$('form').on('submit', function(e){
      e.preventDefault();
      amount = \$('#amount').val();
      receiver = \$('#receiver').val();
     
       \$.ajax({
       url: \"{{ path('sopay_transfert') }}\",
       type: \"POST\",
       dataType: \"JSON\",
       data: {amount: amount,
              receiver: receiver},
       success:function(data)
        { 
            alert(data.message);
            location.reload();
        }
    });
  });
  var referrals = JSON.parse({{(referrals|json_encode|raw)}}).data;
  for (let i=0; i<referrals.length; i++){
    \$('#listReferral').append('<tr><td class=\"table-success\">'+referrals[i].matricule+'</td><td>'+referrals[i].username+'</td><td>'+referrals[i].contact+'</td><td>'+referrals[i].last_operation+'</td></tr>');
  }
  });
  </script>", "user/transfert.html.twig", "/var/www/html/sopay/templates/user/transfert.html.twig");
    }
}
