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

/* forgot-password.html.twig */
class __TwigTemplate_5621e499ebedcacb79f431bc98897b9ffccc3dea8921acd159aec9c3d2a9e802 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forgot-password.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forgot-password.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "forgot-password.html.twig", 1);
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

        // line 4
        echo "Forgot Your password on ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "<div class=\"about-area area-padding\" style=\"background-color: rgb(190, 215, 226);\">
    <div class=\"container\" style=\"margin-top: 25px;\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"section-headline text-center\">
                <h2>Forgot Your <span>So</span>Pay Password ?</h2>
              </div>
            </div>
          </div>
        <!-- Outer Row -->
        <div class=\"row justify-content-center\">

            <div class=\"col-xl-10 col-lg-12 col-md-9\">

                <div class=\"card o-hidden border-0 shadow-lg my-5\">
                    <div class=\"card-body p-0\">
                        <!-- Nested Row within Card Body -->
                        <div class=\"row\">
                            <div class=\"col-lg-3\"></div>
                            <div class=\"col-lg-6\">
                                <div class=\"p-5\">
                                    <div class=\"text-center\">
                                        <p class=\"mb-4\">We get it, stuff happens. Just enter your email address below
                                            and we'll send you a link to reset your password!</p>
                                            <h4 id=\"errorTag\" style=\"display: none;\"></h4>
                                    </div>
                                    <form class=\"user\" id=\"resetPass\">
                                        <div class=\"form-group\">
                                            <input type=\"email\" class=\"form-control form-control-user\"
                                                id=\"email\" aria-describedby=\"emailHelp\"
                                                placeholder=\"Enter Email Address...\" required>
                                        </div>
                                        <button type=\"submit\" class=\"btn btn-primary btn-block\" >Reset Password</button>
                                        
                                    </form>
                                    <hr>
                                    <div class=\"text-center\">
                                        <a class=\"small\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_register");
        echo "\">Create an Account!</a>
                                    </div>
                                    <div class=\"text-center\">
                                        <a class=\"small\" href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_login");
        echo "\">Already have an account? Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 63
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 64
        echo "   <script>
        \$(document).ready(function(){
            
            \$('#resetPass').on('submit', function(e){
                e.preventDefault();
                let email = \$('#email').val();
                \$.ajax({
                    url: \"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_forgot_password");
        echo "\",
                    type: \"POST\",
                    dataType: \"JSON\",
                    data: {email: email},
                    success:function(data)
                     {
                        \$('#errorTag').text(data.message).attr('style', 'border-color:red; color:red;').show();
                        if(data.success == true){
                            \$('#errorTag').attr('style', 'color:green;');
                            setTimeout(function(){ window.location.href = \"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_login");
        echo "\"; }, 2000);
                        }
                     },
                   error: function(err){
                    console.log(err);
                   }
                 });
            });
        });
    </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "forgot-password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 80,  182 => 71,  173 => 64,  163 => 63,  138 => 48,  132 => 45,  93 => 8,  83 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}
Forgot Your password on {{ parent() }}
{% endblock %}

{% block content %}
<div class=\"about-area area-padding\" style=\"background-color: rgb(190, 215, 226);\">
    <div class=\"container\" style=\"margin-top: 25px;\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"section-headline text-center\">
                <h2>Forgot Your <span>So</span>Pay Password ?</h2>
              </div>
            </div>
          </div>
        <!-- Outer Row -->
        <div class=\"row justify-content-center\">

            <div class=\"col-xl-10 col-lg-12 col-md-9\">

                <div class=\"card o-hidden border-0 shadow-lg my-5\">
                    <div class=\"card-body p-0\">
                        <!-- Nested Row within Card Body -->
                        <div class=\"row\">
                            <div class=\"col-lg-3\"></div>
                            <div class=\"col-lg-6\">
                                <div class=\"p-5\">
                                    <div class=\"text-center\">
                                        <p class=\"mb-4\">We get it, stuff happens. Just enter your email address below
                                            and we'll send you a link to reset your password!</p>
                                            <h4 id=\"errorTag\" style=\"display: none;\"></h4>
                                    </div>
                                    <form class=\"user\" id=\"resetPass\">
                                        <div class=\"form-group\">
                                            <input type=\"email\" class=\"form-control form-control-user\"
                                                id=\"email\" aria-describedby=\"emailHelp\"
                                                placeholder=\"Enter Email Address...\" required>
                                        </div>
                                        <button type=\"submit\" class=\"btn btn-primary btn-block\" >Reset Password</button>
                                        
                                    </form>
                                    <hr>
                                    <div class=\"text-center\">
                                        <a class=\"small\" href=\"{{path('sopay_register')}}\">Create an Account!</a>
                                    </div>
                                    <div class=\"text-center\">
                                        <a class=\"small\" href=\"{{path('sopay_login')}}\">Already have an account? Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
    {% endblock %}
    {% block script %}
   <script>
        \$(document).ready(function(){
            
            \$('#resetPass').on('submit', function(e){
                e.preventDefault();
                let email = \$('#email').val();
                \$.ajax({
                    url: \"{{ path('sopay_forgot_password') }}\",
                    type: \"POST\",
                    dataType: \"JSON\",
                    data: {email: email},
                    success:function(data)
                     {
                        \$('#errorTag').text(data.message).attr('style', 'border-color:red; color:red;').show();
                        if(data.success == true){
                            \$('#errorTag').attr('style', 'color:green;');
                            setTimeout(function(){ window.location.href = \"{{ path('sopay_login') }}\"; }, 2000);
                        }
                     },
                   error: function(err){
                    console.log(err);
                   }
                 });
            });
        });
    </script>
    {% endblock %}
", "forgot-password.html.twig", "/var/www/html/sopay/templates/forgot-password.html.twig");
    }
}
