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

/* user/withdraw_rewards.html.twig */
class __TwigTemplate_1a1529efba406b7136e0f2b2e1f089cb75d2ca1dbafaff3e1d22d2fb511cdb4d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/withdraw_rewards.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/withdraw_rewards.html.twig"));

        // line 1
        echo "<div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
    <h1 class=\"h3 mb-0 text-gray-800\">";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Withdraw Rewards"), "html", null, true);
        echo "</h1>
    <a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i
      class=\"fas fa-download fa-sm text-white-50\"></i> <span id='rate'></span></a>
    </div>
    <div class=\"row justify-content-center\"> 
    <form method=\"post\" class=\"align-items-center\" style=\"min-height:300px; margin:50px\">
      <div id='withdraw_rewards'>
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
        echo "        
      <h3 style=\"text-align: center; margin-bottom: 20px\">";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Minimum withdrawal is 10 XPI"), "html", null, true);
        echo "</h3>
      
      <div class='form-group'><input class='form-control' type='number' name='credit' id='amount' placeholder='";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Amount in XPI"), "html", null, true);
        echo "' required autofocus></div>
      <div class=\"form-group\" ><button class=\"btn btn-primary btn-block\" type=\"submit\">";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Send"), "html", null, true);
        echo "</button>
      </div>
      </div>
  
    </form>
    </div>
  <script type=\"text/javascript\">
  \$(document).ready(function(){
  window.history.pushState(\"\", \"\", '#withdraw-rewards');
  //CONTACT API PAIEMENT
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
      
       \$.ajax({
       url: \"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_withdraw_rewards");
        echo "\",
       type: \"POST\",
       dataType: \"JSON\",
       data: {amount: amount},
       success:function(data)
        { 
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
        return "user/withdraw_rewards.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 47,  76 => 16,  72 => 15,  67 => 13,  64 => 12,  58 => 10,  56 => 9,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
    <h1 class=\"h3 mb-0 text-gray-800\">{{'Withdraw Rewards'|trans}}</h1>
    <a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i
      class=\"fas fa-download fa-sm text-white-50\"></i> <span id='rate'></span></a>
    </div>
    <div class=\"row justify-content-center\"> 
    <form method=\"post\" class=\"align-items-center\" style=\"min-height:300px; margin:50px\">
      <div id='withdraw_rewards'>
        {% if error is defined %}
              <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
              {% endif %}
        
      <h3 style=\"text-align: center; margin-bottom: 20px\">{{'Minimum withdrawal is 10 XPI'|trans}}</h3>
      
      <div class='form-group'><input class='form-control' type='number' name='credit' id='amount' placeholder='{{'Amount in XPI'|trans}}' required autofocus></div>
      <div class=\"form-group\" ><button class=\"btn btn-primary btn-block\" type=\"submit\">{{'Send'|trans}}</button>
      </div>
      </div>
  
    </form>
    </div>
  <script type=\"text/javascript\">
  \$(document).ready(function(){
  window.history.pushState(\"\", \"\", '#withdraw-rewards');
  //CONTACT API PAIEMENT
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
      
       \$.ajax({
       url: \"{{ path('sopay_withdraw_rewards') }}\",
       type: \"POST\",
       dataType: \"JSON\",
       data: {amount: amount},
       success:function(data)
        { 
            alert(data.message);
        }
    });
  });
  });
  </script>", "user/withdraw_rewards.html.twig", "/var/www/html/sopay/templates/user/withdraw_rewards.html.twig");
    }
}
