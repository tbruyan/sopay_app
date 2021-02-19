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

/* /user/pm.html.twig */
class __TwigTemplate_631af7db91257ee324cecf34b9ac989d219748dcedcc150c4f07481de3beb508 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/user/pm.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/user/pm.html.twig"));

        // line 1
        echo "<html>
    <head>
        <title>SoPay Perfect money confirmation</title>
    </head>
<body style=\"display: flex; justify-content:center; margin-top:100px; min-width:70%\">
    <div style=\"display: flex; flex-direction:column; justify-content:space-between; margin:auto \">       

    <div >
        <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/pm.jpeg"), "html", null, true);
        echo "\" style=\"cursor:pointer;margin-left:30%; height: 150px; width:150px;\">
        </div>
    <div>
        <h3 style=\"font-size: 1.2em;\">Sopay Perfect Money payment confirmation</h3>
        
        </div>
   <div>
        <form action=\"https://perfectmoney.com/api/step1.asp\" method=\"POST\">
          <input type=\"hidden\" name=\"PAYEE_ACCOUNT\" value=\"U13612927\">
          <input type=\"hidden\" name=\"PAYEE_NAME\" value=\"MYSOLEAS\">
          <input type=\"hidden\" name=\"PAYMENT_ID\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["ref"]) || array_key_exists("ref", $context) ? $context["ref"] : (function () { throw new RuntimeError('Variable "ref" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "\">
          <input type=\"hidden\" name=\"PAYMENT_AMOUNT\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["amount"]) || array_key_exists("amount", $context) ? $context["amount"] : (function () { throw new RuntimeError('Variable "amount" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\">
          <input type=\"hidden\" name=\"PAYMENT_UNITS\" value=\"USD\">
          <input type=\"hidden\" name=\"STATUS_URL\" value=\"https://soleaspay.com/receive-pm\">
          <input type=\"hidden\" name=\"PAYMENT_URL\" value=\"https://app.soleaspay.com/dashboard\">
          <input type=\"hidden\" name=\"PAYMENT_URL_METHOD\" value=\"GET\">
          <input type=\"hidden\" name=\"NOPAYMENT_URL\" value=\"https://app.soleaspay.com/dashboard\">
          <input type=\"hidden\" name=\"NOPAYMENT_URL_METHOD\" value=\"GET\">
          <input type=\"hidden\" name=\"SUGGESTED_MEMO\" value=\"SoPay Payment\">
          <input type=\"hidden\" name=\"BAGGAGE_FIELDS\" value=\"\">
          <input type=\"submit\" name=\"PAYMENT_METHOD\" value=\"Clic here to Proceed Pay!\" style=\"cursor:pointer; height:50px; width:100%; background-color:#0096ff; border-radius:10px \">
          </form>
</div>
</div>
</body>    
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/user/pm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 20,  66 => 19,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
    <head>
        <title>SoPay Perfect money confirmation</title>
    </head>
<body style=\"display: flex; justify-content:center; margin-top:100px; min-width:70%\">
    <div style=\"display: flex; flex-direction:column; justify-content:space-between; margin:auto \">       

    <div >
        <img src=\"{{ asset('assets/img/pm.jpeg') }}\" style=\"cursor:pointer;margin-left:30%; height: 150px; width:150px;\">
        </div>
    <div>
        <h3 style=\"font-size: 1.2em;\">Sopay Perfect Money payment confirmation</h3>
        
        </div>
   <div>
        <form action=\"https://perfectmoney.com/api/step1.asp\" method=\"POST\">
          <input type=\"hidden\" name=\"PAYEE_ACCOUNT\" value=\"U13612927\">
          <input type=\"hidden\" name=\"PAYEE_NAME\" value=\"MYSOLEAS\">
          <input type=\"hidden\" name=\"PAYMENT_ID\" value=\"{{ref}}\">
          <input type=\"hidden\" name=\"PAYMENT_AMOUNT\" value=\"{{amount}}\">
          <input type=\"hidden\" name=\"PAYMENT_UNITS\" value=\"USD\">
          <input type=\"hidden\" name=\"STATUS_URL\" value=\"https://soleaspay.com/receive-pm\">
          <input type=\"hidden\" name=\"PAYMENT_URL\" value=\"https://app.soleaspay.com/dashboard\">
          <input type=\"hidden\" name=\"PAYMENT_URL_METHOD\" value=\"GET\">
          <input type=\"hidden\" name=\"NOPAYMENT_URL\" value=\"https://app.soleaspay.com/dashboard\">
          <input type=\"hidden\" name=\"NOPAYMENT_URL_METHOD\" value=\"GET\">
          <input type=\"hidden\" name=\"SUGGESTED_MEMO\" value=\"SoPay Payment\">
          <input type=\"hidden\" name=\"BAGGAGE_FIELDS\" value=\"\">
          <input type=\"submit\" name=\"PAYMENT_METHOD\" value=\"Clic here to Proceed Pay!\" style=\"cursor:pointer; height:50px; width:100%; background-color:#0096ff; border-radius:10px \">
          </form>
</div>
</div>
</body>    
</html>", "/user/pm.html.twig", "/var/www/html/sopay/templates/user/pm.html.twig");
    }
}
