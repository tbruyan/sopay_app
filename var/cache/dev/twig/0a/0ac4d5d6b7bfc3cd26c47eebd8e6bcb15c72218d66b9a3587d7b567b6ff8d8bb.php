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

/* user/profile.html.twig */
class __TwigTemplate_7e987c605b88a794c653704c4f60d60f35132900c0825962b2e466875d56370b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        // line 1
        echo "<div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
    <h1 class=\"h3 mb-0 text-gray-800\">";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Profile"), "html", null, true);
        echo " !</h1>
    <a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i
      class=\"fas fa-download fa-sm text-white-50\"></i> <span id='rate'></span></a>
    </div>
      
    <div class=\"container\" style=\"margin-top: 25px;\">
        
        <div class=\"card o-hidden border-0 shadow-lg my-5\">
            <div class=\"card-body p-0\">
                <!-- Nested Row within Card Body -->
                <div class=\"row\">
                    <div class=\"col-lg-5 d-none d-lg-block bg-register-image\"></div>
                    <div class=\"col-lg-7\">
                        <div class=\"p-5\">
                            <div class=\"text-center\">
                                <h1 class=\"h4 text-gray-900 mb-4\">Personal Infomation</h1>
                            </div>
                            <form class=\"user\">
                                <div class=\"form-group\">
                                    
                                    <p>Account Grade: ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "signup_mode", [], "any", false, false, false, 22), "html", null, true);
        echo "</p>
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        <input type=\"text\" class=\"form-control form-control-user\" id=\"username\"
                                            placeholder=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "username", [], "any", false, false, false, 27), "html", null, true);
        echo "\">
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" class=\"form-control form-control-user\" id=\"contact\"
                                            placeholder=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "contact", [], "any", false, false, false, 31), "html", null, true);
        echo "\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"email\" class=\"form-control form-control-user\" id=\"email\"
                                        placeholder=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "email", [], "any", false, false, false, 36), "html", null, true);
        echo "\" readonly>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control form-control-user\" id=\"fullname\"
                                        placeholder=\"Enter your fullname\">
                                </div>
                                ";
        // line 42
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "signup_mode", [], "any", false, false, false, 42), "USER"))) {
            // line 43
            echo "                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control form-control-user\" id=\"callback\"
                                        placeholder=\"Enter your Callback\">
                                </div>
                                ";
        }
        // line 48
        echo "                                <button type=\"submit\" class=\"btn btn-primary btn-user btn-block\" id=\"register\">
                                    Submit</button>
                                </a>
                                <hr>
                                <!--<a href=\"index.html\" class=\"btn btn-google btn-user btn-block\">
                                    <i class=\"fab fa-google fa-fw\"></i> Register with Google
                                </a>
                                <a href=\"index.html\" class=\"btn btn-facebook btn-user btn-block\">
                                    <i class=\"fab fa-facebook-f fa-fw\"></i> Register with Facebook
                                </a>-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        \$(document).ready(function(){
            window.history.pushState(\"\", \"\", '#edit-profile');  
            \$('#register').on('click', function(e){
                e.preventDefault();
                let username = \$('#username').val();
                let email = \$('#email').val();
                let contact = \$('#contact').val();
                let fullname = \$('#fullname').val();
                let callback = \$('#callback').val();
                \$.ajax({
                    url: \"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_profile");
        echo "\",
                    type: \"POST\",
                    dataType: \"JSON\",
                    data: {username: username,
                            fullname: fullname,
                            contact: contact,
                            email: email},
                    success:function(data)
                     {
                        alert('profile update succesfully');
                    },
                   error: function(err){
                    console.log(err);
                   }
                 });
            });
        });
    </script>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 77,  110 => 48,  103 => 43,  101 => 42,  92 => 36,  84 => 31,  77 => 27,  69 => 22,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
    <h1 class=\"h3 mb-0 text-gray-800\">{{'Edit Profile'|trans}} !</h1>
    <a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i
      class=\"fas fa-download fa-sm text-white-50\"></i> <span id='rate'></span></a>
    </div>
      
    <div class=\"container\" style=\"margin-top: 25px;\">
        
        <div class=\"card o-hidden border-0 shadow-lg my-5\">
            <div class=\"card-body p-0\">
                <!-- Nested Row within Card Body -->
                <div class=\"row\">
                    <div class=\"col-lg-5 d-none d-lg-block bg-register-image\"></div>
                    <div class=\"col-lg-7\">
                        <div class=\"p-5\">
                            <div class=\"text-center\">
                                <h1 class=\"h4 text-gray-900 mb-4\">Personal Infomation</h1>
                            </div>
                            <form class=\"user\">
                                <div class=\"form-group\">
                                    
                                    <p>Account Grade: {{user.signup_mode}}</p>
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        <input type=\"text\" class=\"form-control form-control-user\" id=\"username\"
                                            placeholder=\"{{user.username}}\">
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" class=\"form-control form-control-user\" id=\"contact\"
                                            placeholder=\"{{user.contact}}\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"email\" class=\"form-control form-control-user\" id=\"email\"
                                        placeholder=\"{{user.email}}\" readonly>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control form-control-user\" id=\"fullname\"
                                        placeholder=\"Enter your fullname\">
                                </div>
                                {% if user.signup_mode != 'USER'%}
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control form-control-user\" id=\"callback\"
                                        placeholder=\"Enter your Callback\">
                                </div>
                                {% endif %}
                                <button type=\"submit\" class=\"btn btn-primary btn-user btn-block\" id=\"register\">
                                    Submit</button>
                                </a>
                                <hr>
                                <!--<a href=\"index.html\" class=\"btn btn-google btn-user btn-block\">
                                    <i class=\"fab fa-google fa-fw\"></i> Register with Google
                                </a>
                                <a href=\"index.html\" class=\"btn btn-facebook btn-user btn-block\">
                                    <i class=\"fab fa-facebook-f fa-fw\"></i> Register with Facebook
                                </a>-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        \$(document).ready(function(){
            window.history.pushState(\"\", \"\", '#edit-profile');  
            \$('#register').on('click', function(e){
                e.preventDefault();
                let username = \$('#username').val();
                let email = \$('#email').val();
                let contact = \$('#contact').val();
                let fullname = \$('#fullname').val();
                let callback = \$('#callback').val();
                \$.ajax({
                    url: \"{{ path('sopay_profile') }}\",
                    type: \"POST\",
                    dataType: \"JSON\",
                    data: {username: username,
                            fullname: fullname,
                            contact: contact,
                            email: email},
                    success:function(data)
                     {
                        alert('profile update succesfully');
                    },
                   error: function(err){
                    console.log(err);
                   }
                 });
            });
        });
    </script>

", "user/profile.html.twig", "/var/www/html/sopay/templates/user/profile.html.twig");
    }
}
