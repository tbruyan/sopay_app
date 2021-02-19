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

/* user/detailTrans.html.twig */
class __TwigTemplate_cf3ee35a52e02ea9efc643ae01c6422d0508f89b1053a7c6768983754e4d9d3a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/detailTrans.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/detailTrans.html.twig"));

        // line 1
        echo "<div>
    ";
        // line 2
        $context["dateFormat"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 2, $this->source); })()), "proceed_at", [], "any", false, false, false, 2), "T");
        // line 3
        echo "    <ul>
        <li>Type : ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 4, $this->source); })()), "operation", [], "any", false, false, false, 4), "name", [], "any", false, false, false, 4), "html", null, true);
        echo "</li>
        <li>Proceed At : ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dateFormat"]) || array_key_exists("dateFormat", $context) ? $context["dateFormat"] : (function () { throw new RuntimeError('Variable "dateFormat" does not exist.', 5, $this->source); })()), 1, [], "array", false, false, false, 5), "-"), 0, [], "array", false, false, false, 5), "html", null, true);
        echo " on ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dateFormat"]) || array_key_exists("dateFormat", $context) ? $context["dateFormat"] : (function () { throw new RuntimeError('Variable "dateFormat" does not exist.', 5, $this->source); })()), 0, [], "array", false, false, false, 5), "-"), 2, [], "array", false, false, false, 5), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dateFormat"]) || array_key_exists("dateFormat", $context) ? $context["dateFormat"] : (function () { throw new RuntimeError('Variable "dateFormat" does not exist.', 5, $this->source); })()), 0, [], "array", false, false, false, 5), "-"), 1, [], "array", false, false, false, 5), "html", null, true);
        echo "</li>
        <li> Document No : ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 6, $this->source); })()), "ext_id", [], "any", false, false, false, 6), "html", null, true);
        echo "</li>
        ";
        // line 7
        if ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 7, $this->source); })()), "operation", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7), "DEPOSIT")) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 7, $this->source); })()), "operation", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7), "WITHDRAW"))) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 7, $this->source); })()), "operation", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7), "PURCHASE")))) {
            // line 8
            echo "        <li> Service : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 8, $this->source); })()), "service", [], "any", false, false, false, 8), "name", [], "any", false, false, false, 8), "html", null, true);
            echo "</li>
        <li> Wallet : ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 9, $this->source); })()), "wallet", [], "any", false, false, false, 9), "html", null, true);
            echo "</li>
        <li> Amount : ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 10, $this->source); })()), "amount", [], "any", false, false, false, 10), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 10, $this->source); })()), "currency", [], "any", false, false, false, 10), "html", null, true);
            echo "</li>
        ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 11
(isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 11, $this->source); })()), "operation", [], "any", false, false, false, 11), "name", [], "any", false, false, false, 11), "CHANGES"))) {
            // line 12
            echo "        <li> From : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 12, $this->source); })()), "in_service", [], "any", false, false, false, 12), "name", [], "any", false, false, false, 12), "html", null, true);
            echo "</li>
        <li> To : ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 13, $this->source); })()), "out_service", [], "any", false, false, false, 13), "name", [], "any", false, false, false, 13), "html", null, true);
            echo "</li>
        <li>Sender Wallet : ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 14, $this->source); })()), "in_wallet", [], "any", false, false, false, 14), "html", null, true);
            echo "</li>
        <li>Out Wallet : ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 15, $this->source); })()), "out_wallet", [], "any", false, false, false, 15), "html", null, true);
            echo "</li>
        ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 16, $this->source); })()), "operation", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16), "TRANSFERT"))) {
            // line 17
            echo "            ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "matricule", [], "any", false, false, false, 17), twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "matricule", [], "any", false, false, false, 17)))) {
                // line 18
                echo "            <li> to : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 18, $this->source); })()), "receiver", [], "any", false, false, false, 18), "matricule", [], "any", false, false, false, 18), "html", null, true);
                echo "</li>
            ";
            } else {
                // line 20
                echo "            <li> From : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "matricule", [], "any", false, false, false, 20), "html", null, true);
                echo "</li>
            ";
            }
            // line 22
            echo "            <li> Amount : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 22, $this->source); })()), "amount", [], "any", false, false, false, 22), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 22, $this->source); })()), "currency", [], "any", false, false, false, 22), "html", null, true);
            echo "</li>
        ";
        }
        // line 24
        echo "        <li> Status : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 24, $this->source); })()), "status", [], "any", false, false, false, 24), "html", null, true);
        echo "</li>
        
    </ul>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/detailTrans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 24,  120 => 22,  114 => 20,  108 => 18,  105 => 17,  103 => 16,  99 => 15,  95 => 14,  91 => 13,  86 => 12,  84 => 11,  78 => 10,  74 => 9,  69 => 8,  67 => 7,  63 => 6,  55 => 5,  51 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div>
    {% set dateFormat = transaction.proceed_at|split('T') %}
    <ul>
        <li>Type : {{ transaction.operation.name }}</li>
        <li>Proceed At : {{ dateFormat[1]|split('-')[0] }} on {{dateFormat[0]|split('-')[2]}}-{{dateFormat[0]|split('-')[1]}}</li>
        <li> Document No : {{transaction.ext_id}}</li>
        {% if transaction.operation.name == 'DEPOSIT' or transaction.operation.name == 'WITHDRAW' or transaction.operation.name == 'PURCHASE' %}
        <li> Service : {{transaction.service.name}}</li>
        <li> Wallet : {{transaction.wallet}}</li>
        <li> Amount : {{transaction.amount}} {{transaction.currency}}</li>
        {% elseif transaction.operation.name == 'CHANGES' %}
        <li> From : {{transaction.in_service.name}}</li>
        <li> To : {{transaction.out_service.name}}</li>
        <li>Sender Wallet : {{transaction.in_wallet}}</li>
        <li>Out Wallet : {{transaction.out_wallet}}</li>
        {% elseif transaction.operation.name == 'TRANSFERT' %}
            {% if transaction.user.matricule == user.matricule %}
            <li> to : {{transaction.receiver.matricule}}</li>
            {% else %}
            <li> From : {{transaction.user.matricule}}</li>
            {% endif %}
            <li> Amount : {{transaction.amount}} {{transaction.currency}}</li>
        {% endif %}
        <li> Status : {{transaction.status}}</li>
        
    </ul>
</div>", "user/detailTrans.html.twig", "/var/www/html/sopay/templates/user/detailTrans.html.twig");
    }
}
