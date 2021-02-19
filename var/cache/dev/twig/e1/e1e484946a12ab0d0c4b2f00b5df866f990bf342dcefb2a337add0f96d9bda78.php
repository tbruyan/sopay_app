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

/* user/index.html.twig */
class __TwigTemplate_ec90da17aac858b3d80dbc6074e6a049c28dca77cf1793212cf30b822d1d611a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'navigationSpace' => [$this, 'block_navigationSpace'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "user/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("user/layout.html.twig", "user/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_navigationSpace($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigationSpace"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigationSpace"));

        // line 6
        echo "<!-- Page Heading -->
<div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
    <h1 class=\"h3 mb-0 text-gray-800\">Dashboard</h1>
    <a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i
            class=\"fas fa-download fa-sm text-white-50\"></i> Generate Report</a>
</div>
<!-- Content Row -->
<div class=\"row\">

    <!-- Earnings (Monthly) Card Example -->
    <div class=\"col-xl-3 col-md-6 mb-4\">
        <div class=\"card border-left-primary shadow h-100 py-2\">
            <div class=\"card-body\">
                <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                        <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                            Balance </div>
                        <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 23, $this->source); })()), "balance", [], "any", false, false, false, 23), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 23, $this->source); })()), "default_currency", [], "any", false, false, false, 23), "code", [], "any", false, false, false, 23), "html", null, true);
        echo "</div>
                    </div>
                    <div class=\"col-auto\">
                        <i class=\"fas fa-calendar fa-2x text-gray-300\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class=\"col-xl-3 col-md-6 mb-4\">
        <div class=\"card border-left-success shadow h-100 py-2\">
            <div class=\"card-body\">
                <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                        <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
                            Rewards</div>
                        <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "rewards_balance", [], "any", false, false, false, 41), "html", null, true);
        echo " XPI</div>
                    </div>
                    <div class=\"col-auto\">
                        <i class=\"fas fa-calendar fa-2x text-gray-300\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 50
        if (((0 === twig_compare((isset($context["successOPeration"]) || array_key_exists("successOPeration", $context) ? $context["successOPeration"] : (function () { throw new RuntimeError('Variable "successOPeration" does not exist.', 50, $this->source); })()), 0)) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 50, $this->source); })()), "nb_trans", [], "any", false, false, false, 50), 0)))) {
            // line 51
            echo "    ";
            $context["percentageSuccess"] = 0;
            // line 52
            echo "    ";
        } else {
            // line 53
            echo "    ";
            $context["percentageSuccess"] = (((isset($context["successOPeration"]) || array_key_exists("successOPeration", $context) ? $context["successOPeration"] : (function () { throw new RuntimeError('Variable "successOPeration" does not exist.', 53, $this->source); })()) / twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 53, $this->source); })()), "nb_trans", [], "any", false, false, false, 53)) * 100);
            // line 54
            echo "    ";
        }
        // line 55
        echo "    <!-- Earnings (Monthly) Card Example -->
    <div class=\"col-xl-3 col-md-6 mb-4\">
        <div class=\"card border-left-info shadow h-100 py-2\">
            <div class=\"card-body\">
                <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                        <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">Complete Transaction
                        </div>
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col-auto\">
                                <div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">";
        // line 65
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["percentageSuccess"]) || array_key_exists("percentageSuccess", $context) ? $context["percentageSuccess"] : (function () { throw new RuntimeError('Variable "percentageSuccess" does not exist.', 65, $this->source); })()), 2), "html", null, true);
        echo "%</div>
                            </div>
                            <div class=\"col\">
                                <div class=\"progress progress-sm mr-2\">
                                    <div class=\"progress-bar bg-info\" role=\"progressbar\"
                                        style=\"width: ";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["percentageSuccess"]) || array_key_exists("percentageSuccess", $context) ? $context["percentageSuccess"] : (function () { throw new RuntimeError('Variable "percentageSuccess" does not exist.', 70, $this->source); })()), "html", null, true);
        echo "%\" aria-valuenow=\"";
        echo twig_escape_filter($this->env, (isset($context["percentageSuccess"]) || array_key_exists("percentageSuccess", $context) ? $context["percentageSuccess"] : (function () { throw new RuntimeError('Variable "percentageSuccess" does not exist.', 70, $this->source); })()), "html", null, true);
        echo "\" aria-valuemin=\"0\"
                                        aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-auto\">
                        <i class=\"fas fa-clipboard-list fa-2x text-gray-300\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class=\"col-xl-3 col-md-6 mb-4\">
        <div class=\"card border-left-warning shadow h-100 py-2\">
            <div class=\"card-body\">
                <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                        <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">
                            Total Requests</div>
                        <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 92, $this->source); })()), "nb_trans", [], "any", false, false, false, 92), "html", null, true);
        echo "</div>
                    </div>
                    <div class=\"col-auto\">
                        <i class=\"fas fa-comments fa-2x text-gray-300\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"row\">   
<!-- Area Chart -->
    <div class=\"col-xl-8 col-lg-7\">
        <div class=\"card shadow mb-4\">
            <!-- Card Header - Dropdown -->
            <div
                class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Transactions Overview</h6>
                <div class=\"dropdown no-arrow\">
                    <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\"
                        data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\"
                        aria-labelledby=\"dropdownMenuLink\">
                        <div class=\"dropdown-header\">Dropdown Header:</div>
                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class=\"card-body\">
                <div class=\"chart-area\">
                    <canvas id=\"myAreaChart\"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie Chart -->
    <div class=\"col-xl-4 col-lg-5\">
        <div class=\"card shadow mb-4\">
            <!-- Card Header - Dropdown -->
            <div
                class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Revenue Sources</h6>
                <div class=\"dropdown no-arrow\">
                    <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\"
                        data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                    </a>
                </div>
            </div>
            <!-- Card Body -->
            <div class=\"card-body\">
                <div class=\"chart-pie pt-4 pb-2\">
                    <canvas id=\"myPieChart\"></canvas>
                </div>
                <div class=\"mt-4 text-center small\">
                    <span class=\"mr-2\">
                        <i class=\"fas fa-circle text-primary\"></i> E-commerce
                    </span>
                    <span class=\"mr-2\">
                        <i class=\"fas fa-circle text-success\"></i> Transfert
                    </span>
                    <span class=\"mr-2\">
                        <i class=\"fas fa-circle text-info\"></i> Referral
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 92,  178 => 70,  170 => 65,  158 => 55,  155 => 54,  152 => 53,  149 => 52,  146 => 51,  144 => 50,  132 => 41,  109 => 23,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'user/layout.html.twig' %}

{% block title %}Dashboard - {{ parent() }} {% endblock %}

{% block navigationSpace %}
<!-- Page Heading -->
<div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
    <h1 class=\"h3 mb-0 text-gray-800\">Dashboard</h1>
    <a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i
            class=\"fas fa-download fa-sm text-white-50\"></i> Generate Report</a>
</div>
<!-- Content Row -->
<div class=\"row\">

    <!-- Earnings (Monthly) Card Example -->
    <div class=\"col-xl-3 col-md-6 mb-4\">
        <div class=\"card border-left-primary shadow h-100 py-2\">
            <div class=\"card-body\">
                <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                        <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                            Balance </div>
                        <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{user.balance}} {{user.default_currency.code}}</div>
                    </div>
                    <div class=\"col-auto\">
                        <i class=\"fas fa-calendar fa-2x text-gray-300\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class=\"col-xl-3 col-md-6 mb-4\">
        <div class=\"card border-left-success shadow h-100 py-2\">
            <div class=\"card-body\">
                <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                        <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
                            Rewards</div>
                        <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{user.rewards_balance}} XPI</div>
                    </div>
                    <div class=\"col-auto\">
                        <i class=\"fas fa-calendar fa-2x text-gray-300\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {% if successOPeration == 0 or user.nb_trans == 0 %}
    {% set percentageSuccess = 0 %}
    {% else %}
    {% set percentageSuccess = successOPeration/user.nb_trans*100 %}
    {% endif %}
    <!-- Earnings (Monthly) Card Example -->
    <div class=\"col-xl-3 col-md-6 mb-4\">
        <div class=\"card border-left-info shadow h-100 py-2\">
            <div class=\"card-body\">
                <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                        <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">Complete Transaction
                        </div>
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col-auto\">
                                <div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">{{ percentageSuccess|number_format(2) }}%</div>
                            </div>
                            <div class=\"col\">
                                <div class=\"progress progress-sm mr-2\">
                                    <div class=\"progress-bar bg-info\" role=\"progressbar\"
                                        style=\"width: {{percentageSuccess}}%\" aria-valuenow=\"{{percentageSuccess}}\" aria-valuemin=\"0\"
                                        aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-auto\">
                        <i class=\"fas fa-clipboard-list fa-2x text-gray-300\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class=\"col-xl-3 col-md-6 mb-4\">
        <div class=\"card border-left-warning shadow h-100 py-2\">
            <div class=\"card-body\">
                <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                        <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">
                            Total Requests</div>
                        <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{user.nb_trans}}</div>
                    </div>
                    <div class=\"col-auto\">
                        <i class=\"fas fa-comments fa-2x text-gray-300\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"row\">   
<!-- Area Chart -->
    <div class=\"col-xl-8 col-lg-7\">
        <div class=\"card shadow mb-4\">
            <!-- Card Header - Dropdown -->
            <div
                class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Transactions Overview</h6>
                <div class=\"dropdown no-arrow\">
                    <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\"
                        data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\"
                        aria-labelledby=\"dropdownMenuLink\">
                        <div class=\"dropdown-header\">Dropdown Header:</div>
                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class=\"card-body\">
                <div class=\"chart-area\">
                    <canvas id=\"myAreaChart\"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie Chart -->
    <div class=\"col-xl-4 col-lg-5\">
        <div class=\"card shadow mb-4\">
            <!-- Card Header - Dropdown -->
            <div
                class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Revenue Sources</h6>
                <div class=\"dropdown no-arrow\">
                    <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\"
                        data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                    </a>
                </div>
            </div>
            <!-- Card Body -->
            <div class=\"card-body\">
                <div class=\"chart-pie pt-4 pb-2\">
                    <canvas id=\"myPieChart\"></canvas>
                </div>
                <div class=\"mt-4 text-center small\">
                    <span class=\"mr-2\">
                        <i class=\"fas fa-circle text-primary\"></i> E-commerce
                    </span>
                    <span class=\"mr-2\">
                        <i class=\"fas fa-circle text-success\"></i> Transfert
                    </span>
                    <span class=\"mr-2\">
                        <i class=\"fas fa-circle text-info\"></i> Referral
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

", "user/index.html.twig", "/var/www/html/sopay/templates/user/index.html.twig");
    }
}
