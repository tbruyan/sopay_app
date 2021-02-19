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

/* login.html.twig */
class __TwigTemplate_fdde9ce482c438b5d4f842d446d33483e50929dde8604f0a1ec8a96f482b2171 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "login.html.twig", 1);
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
        echo "Login to ";
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
                <h2>Login on <span>So</span>Pay !</h2>
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
                            <div class=\"col-lg-3 d-none d-lg-block\"></div>
                            <div class=\"col-lg-6\">
                                <div class=\"p-5\">
                                    <div class=\"text-center\">
                                        <h1 class=\"h4 text-gray-900 mb-4\">Welcome Back!</h1>
                                        <h4 id=\"errorTag\" style=\"display: none;\"></h4>
                                    </div>
                                    <form class=\"user form\" id=\"login\">
                                        <div class=\"form-group\">
                                            <input type=\"email\" class=\"form-control form-control-user\"
                                                id=\"email\" aria-describedby=\"emailHelp\"
                                                placeholder=\"Enter your Email address...\" required>
                                        </div>
                                        <div class=\"form-group\">
                                            <input type=\"password\" class=\"form-control form-control-user\"
                                                id=\"password\" placeholder=\"Password\" required>
                                        </div>
                                        <div class=\"form-group\">
                                            <div class=\"checkbox\">
                                                <input type=\"checkbox\" id=\"customCheck\">
                                                <label class=\"custom-control-label\" for=\"customCheck\">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button type=\"submit\" class=\"btn btn-primary btn-block\" >Login</button>
                                          
                                        <hr>
                                        <!--<a href=\"index.html\" class=\"btn btn-google btn-user btn-block\">
                                            <i class=\"fab fa-google fa-fw\"></i> Login with Google
                                        </a>
                                        <a href=\"index.html\" class=\"btn btn-facebook btn-user btn-block\">
                                            <i class=\"fab fa-facebook-f fa-fw\"></i> Login with Facebook
                                        </a>-->
                                    </form>
                                    <hr>
                                    <div class=\"text-center\">
                                        <a class=\"small\" href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_forgot_password");
        echo "\">Forgot Password?</a>
                                    </div>
                                    <div class=\"text-center\">
                                        <a class=\"small\" href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_register");
        echo "\">Create an Account!</a>
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

    // line 80
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 81
        echo "   <script>
        \$(document).ready(function(){
            
            \$('#login').on('submit', function(e){
                e.preventDefault();
                let email = \$('#email').val();
                let password = \$('#password').val();
                \$.ajax({
                    url: \"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_login");
        echo "\",
                    type: \"POST\",
                    dataType: \"JSON\",
                    data: {email: email,
                           password: password,
                            uuid: localStorage.uuid,
                            os: navigator.platform,
                            br: navigator.appCodeName
                          },
                    success:function(data)
                     {
                        \$('#errorTag').text(data.message).attr('style', 'border-color:red; color:red;').show();
                        if(data.success == true){
                            \$('#errorTag').attr('style', 'color:green;');
                            setTimeout(function(){ window.location.href = \"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_dashboard");
        echo "\"; }, 1000);
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
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 103,  200 => 89,  190 => 81,  180 => 80,  155 => 65,  149 => 62,  93 => 8,  83 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}
Login to {{ parent() }}
{% endblock %}

{% block content %}
<div class=\"about-area area-padding\" style=\"background-color: rgb(190, 215, 226);\">
    <div class=\"container\" style=\"margin-top: 25px;\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"section-headline text-center\">
                <h2>Login on <span>So</span>Pay !</h2>
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
                            <div class=\"col-lg-3 d-none d-lg-block\"></div>
                            <div class=\"col-lg-6\">
                                <div class=\"p-5\">
                                    <div class=\"text-center\">
                                        <h1 class=\"h4 text-gray-900 mb-4\">Welcome Back!</h1>
                                        <h4 id=\"errorTag\" style=\"display: none;\"></h4>
                                    </div>
                                    <form class=\"user form\" id=\"login\">
                                        <div class=\"form-group\">
                                            <input type=\"email\" class=\"form-control form-control-user\"
                                                id=\"email\" aria-describedby=\"emailHelp\"
                                                placeholder=\"Enter your Email address...\" required>
                                        </div>
                                        <div class=\"form-group\">
                                            <input type=\"password\" class=\"form-control form-control-user\"
                                                id=\"password\" placeholder=\"Password\" required>
                                        </div>
                                        <div class=\"form-group\">
                                            <div class=\"checkbox\">
                                                <input type=\"checkbox\" id=\"customCheck\">
                                                <label class=\"custom-control-label\" for=\"customCheck\">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button type=\"submit\" class=\"btn btn-primary btn-block\" >Login</button>
                                          
                                        <hr>
                                        <!--<a href=\"index.html\" class=\"btn btn-google btn-user btn-block\">
                                            <i class=\"fab fa-google fa-fw\"></i> Login with Google
                                        </a>
                                        <a href=\"index.html\" class=\"btn btn-facebook btn-user btn-block\">
                                            <i class=\"fab fa-facebook-f fa-fw\"></i> Login with Facebook
                                        </a>-->
                                    </form>
                                    <hr>
                                    <div class=\"text-center\">
                                        <a class=\"small\" href=\"{{ path('sopay_forgot_password') }}\">Forgot Password?</a>
                                    </div>
                                    <div class=\"text-center\">
                                        <a class=\"small\" href=\"{{ path('sopay_register')}}\">Create an Account!</a>
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
            
            \$('#login').on('submit', function(e){
                e.preventDefault();
                let email = \$('#email').val();
                let password = \$('#password').val();
                \$.ajax({
                    url: \"{{ path('sopay_login') }}\",
                    type: \"POST\",
                    dataType: \"JSON\",
                    data: {email: email,
                           password: password,
                            uuid: localStorage.uuid,
                            os: navigator.platform,
                            br: navigator.appCodeName
                          },
                    success:function(data)
                     {
                        \$('#errorTag').text(data.message).attr('style', 'border-color:red; color:red;').show();
                        if(data.success == true){
                            \$('#errorTag').attr('style', 'color:green;');
                            setTimeout(function(){ window.location.href = \"{{ path('sopay_dashboard') }}\"; }, 1000);
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
", "login.html.twig", "/var/www/html/sopay/templates/login.html.twig");
    }
}
