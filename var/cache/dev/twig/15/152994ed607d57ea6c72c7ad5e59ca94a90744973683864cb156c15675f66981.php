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

/* register.html.twig */
class __TwigTemplate_3316d7944886db56c68543e2f4b2503d4ab22190e64bcbc8fe78df8947fa1aa8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "register.html.twig", 1);
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
        echo "    Register to ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 7
        echo "<style>
    /* The message box is shown when the user clicks on the password field */
#message, #confirmMessage {
    display:none;
    color: #000;
    position: relative;
    padding: 10px;
    margin-top: 10px;
  }
  
  #message p, #confirmMessage p {
    padding: 5px 20px;
    font-size: 14px;
  }
  
  /* Add a green text color and a checkmark when the requirements are right */
  .valid {
    color: green;
  }
  
  .valid:before {
    position: relative;
    left: -20px;
    content: \"\\02714\";
  }
  
  /* Add a red text color and an \"x\" icon when the requirements are wrong */
  .invalid {
    color: red;
  }
  
  .invalid:before {
    position: relative;
    left: -20px;
    content: \"\\02715\";
  }
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 46
        echo "<div class=\"about-area area-padding \" style=\"background-color: rgb(190, 215, 226);\">

    <div class=\"container\" style=\"margin-top: 25px;\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"section-headline text-center\">
                <h2>Create New <span>So</span>Pay Account !</h2>
              </div>
            </div>
          </div>
        <div class=\"card o-hidden border-0 shadow-lg my-5\">
            <div class=\"card-body p-0\">
                <!-- Nested Row within Card Body -->
                <div class=\"row\">
                    <div class=\"col-lg-3 d-none d-lg-block bg-register-image\"></div>
                    <div class=\"col-lg-6\">
                        <div class=\"p-5\">
                            <div class=\"text-center\">
                                <h1 class=\"h4 text-gray-900 mb-4\">Your ready</h1>
                                <h4 id=\"errorTag\" style=\"display: none;\"></h4>
                            </div>
                            <form class=\"user\" id=\"register\">
                                <div class=\"form-group\">
                                    <select class=\"form-control \" id=\"typeUser\">
                                    <option selected disabled>Select Account Type</option>
                                    <option name=\"typeUser\" value=\"PERSONNAL\" required>Personal Account</option>
                                    <option name=\"typeUser\" value=\"PROFESSIONAL\">Profesional Account</option>
                                    </select>
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        <input type=\"text\" class=\"form-control form-control-user\" id=\"username\"
                                            placeholder=\"Username\" required>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <input type=\"number\" class=\"form-control form-control-user\" id=\"contact\"
                                            placeholder=\"Contact\" required>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"email\" class=\"form-control form-control-user\" id=\"email\"
                                        placeholder=\"Email Address\" required>
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        <input type=\"password\" class=\"form-control form-control-user\"
                                            id=\"password\" pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{6,}\" title=\"Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters\" placeholder=\"Password\" required>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <input type=\"password\" class=\"form-control form-control-user\"
                                            id=\"passConfirm\" placeholder=\"Repeat Password\" pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{6,}\" required>
                                    </div>
                                </div>
                                <div class=\"form-group row \">
                                    <div style=\"width: 80%; margin-left:10%\" id=\"message\">
                                        <h5>Password must contain the following:</h5>
                                        <p id=\"letter\" class=\"invalid\">A <b>lowercase</b> letter</p>
                                        <p id=\"capital\" class=\"invalid\">A <b>capital (uppercase)</b> letter</p>
                                        <p id=\"number\" class=\"invalid\">A <b>number</b></p>
                                        <p id=\"length\" class=\"invalid\">Minimum <b>6 characters</b></p>
                                    </div>
                                    <div style=\"width: 80%; margin-left:10%\" id=\"confirmMessage\">
                                        <p id=\"confirmation\" class=\"invalid\"><span id=\"confirmationMessage\">Unmatch password</span></p>
                                    </div>
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary btn-user btn-block\">
                                    Register Account</button>
                                </a>
                                <hr>
                                <!--<a href=\"index.html\" class=\"btn btn-google btn-user btn-block\">
                                    <i class=\"fab fa-google fa-fw\"></i> Register with Google
                                </a>
                                <a href=\"index.html\" class=\"btn btn-facebook btn-user btn-block\">
                                    <i class=\"fab fa-facebook-f fa-fw\"></i> Register with Facebook
                                </a>-->
                            </form>
                            <hr>
                            <div class=\"text-center\">
                                <a class=\"small\" href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_forgot_password");
        echo "\">Forgot Password?</a>
                            </div>
                            <div class=\"text-center\">
                                <a class=\"small\" href=\"";
        // line 127
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 138
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 139
        echo "    <script>
        \$(document).ready(function(){
            \$('#register').on('submit', function(e){
                e.preventDefault();
                //verif if form contain an error
                if(\$('form').find('p').hasClass('invalid')){
                    \$('#errorTag').text('please feel a correct password').attr('style', 'border-color:red; color:red;').show();
                    return false;
                }
                let username = \$('#username').val();
                let email = \$('#email').val();
                let contact = \$('#contact').val();
                let password = \$('#password').val();
                let typeUser = \$('#typeUser').val();
                \$.ajax({
                    url: \"";
        // line 154
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_register");
        echo "\",
                    type: \"POST\",
                    dataType: \"JSON\",
                    data: {username: username,
                           password: password,
                            contact: contact,
                            email: email,
                            type: typeUser,
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
        // line 171
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_login");
        echo "\"; }, 5000);
                        }
                        console.log(data);
                    },
                   error: function(err){
                    console.log(err);
                   }
                 });
            });
        });
    </script>
    <script>
        var myInput = document.getElementById(\"password\");
        var confirmInput = document.getElementById(\"passConfirm\");
        var letter = document.getElementById(\"letter\");
        var capital = document.getElementById(\"capital\");
        var number = document.getElementById(\"number\");
        var length = document.getElementById(\"length\");
        var confirmation = document.getElementById(\"confirmation\");
        
        // When the user clicks on the password field, show the message box
        myInput.onfocus = function() {
          document.getElementById(\"message\").style.display = \"block\";
        }
        
        // When the user clicks outside of the password field, hide the message box
        myInput.onblur = function() {
          document.getElementById(\"message\").style.display = \"none\";
        }
        
        // When the user starts to type something inside the password field
        myInput.onkeyup = function() {
          // Validate lowercase letters
          var lowerCaseLetters = /[a-z]/g;
          if(myInput.value.match(lowerCaseLetters)) {
            letter.classList.remove(\"invalid\");
            letter.classList.add(\"valid\");
          } else {
            letter.classList.remove(\"valid\");
            letter.classList.add(\"invalid\");
        }
        
          // Validate capital letters
          var upperCaseLetters = /[A-Z]/g;
          if(myInput.value.match(upperCaseLetters)) {
            capital.classList.remove(\"invalid\");
            capital.classList.add(\"valid\");
          } else {
            capital.classList.remove(\"valid\");
            capital.classList.add(\"invalid\");
          }
        
          // Validate numbers
          var numbers = /[0-9]/g;
          if(myInput.value.match(numbers)) {
            number.classList.remove(\"invalid\");
            number.classList.add(\"valid\");
          } else {
            number.classList.remove(\"valid\");
            number.classList.add(\"invalid\");
          }
        
          // Validate length
          if(myInput.value.length >= 6) {
            length.classList.remove(\"invalid\");
            length.classList.add(\"valid\");
          } else {
            length.classList.remove(\"valid\");
            length.classList.add(\"invalid\");
          }
         
        }

          // When the user clicks on the confirmation password field, show the message box
          confirmInput.onfocus = function() {
            document.getElementById(\"confirmMessage\").style.display = \"block\";
          }
          
          // When the user clicks outside of the password field, hide the message box
          confirmInput.onblur = function() {
            document.getElementById(\"confirmMessage\").style.display = \"none\";
          }
          
          // When the user starts to type something inside the password field
          confirmInput.onkeyup = function() {
             // Validate confirmation
          if(myInput.value === confirmInput.value) {
            confirmation.classList.remove(\"invalid\");
            confirmation.classList.add(\"valid\");
            \$('#confirmationMessage').text('Valid Password');
          } else {
            confirmation.classList.remove(\"valid\");
            confirmation.classList.add(\"invalid\");
            \$('#confirmationMessage').text('Unmatch password');
          }
        }
        </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 171,  285 => 154,  268 => 139,  258 => 138,  237 => 127,  231 => 124,  151 => 46,  141 => 45,  94 => 7,  84 => 6,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

    {% block title %}
    Register to {{ parent() }}
    {% endblock %}
{% block header %}
<style>
    /* The message box is shown when the user clicks on the password field */
#message, #confirmMessage {
    display:none;
    color: #000;
    position: relative;
    padding: 10px;
    margin-top: 10px;
  }
  
  #message p, #confirmMessage p {
    padding: 5px 20px;
    font-size: 14px;
  }
  
  /* Add a green text color and a checkmark when the requirements are right */
  .valid {
    color: green;
  }
  
  .valid:before {
    position: relative;
    left: -20px;
    content: \"\\02714\";
  }
  
  /* Add a red text color and an \"x\" icon when the requirements are wrong */
  .invalid {
    color: red;
  }
  
  .invalid:before {
    position: relative;
    left: -20px;
    content: \"\\02715\";
  }
</style>
{% endblock %}
{% block content %}
<div class=\"about-area area-padding \" style=\"background-color: rgb(190, 215, 226);\">

    <div class=\"container\" style=\"margin-top: 25px;\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"section-headline text-center\">
                <h2>Create New <span>So</span>Pay Account !</h2>
              </div>
            </div>
          </div>
        <div class=\"card o-hidden border-0 shadow-lg my-5\">
            <div class=\"card-body p-0\">
                <!-- Nested Row within Card Body -->
                <div class=\"row\">
                    <div class=\"col-lg-3 d-none d-lg-block bg-register-image\"></div>
                    <div class=\"col-lg-6\">
                        <div class=\"p-5\">
                            <div class=\"text-center\">
                                <h1 class=\"h4 text-gray-900 mb-4\">Your ready</h1>
                                <h4 id=\"errorTag\" style=\"display: none;\"></h4>
                            </div>
                            <form class=\"user\" id=\"register\">
                                <div class=\"form-group\">
                                    <select class=\"form-control \" id=\"typeUser\">
                                    <option selected disabled>Select Account Type</option>
                                    <option name=\"typeUser\" value=\"PERSONNAL\" required>Personal Account</option>
                                    <option name=\"typeUser\" value=\"PROFESSIONAL\">Profesional Account</option>
                                    </select>
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        <input type=\"text\" class=\"form-control form-control-user\" id=\"username\"
                                            placeholder=\"Username\" required>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <input type=\"number\" class=\"form-control form-control-user\" id=\"contact\"
                                            placeholder=\"Contact\" required>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"email\" class=\"form-control form-control-user\" id=\"email\"
                                        placeholder=\"Email Address\" required>
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        <input type=\"password\" class=\"form-control form-control-user\"
                                            id=\"password\" pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{6,}\" title=\"Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters\" placeholder=\"Password\" required>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <input type=\"password\" class=\"form-control form-control-user\"
                                            id=\"passConfirm\" placeholder=\"Repeat Password\" pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{6,}\" required>
                                    </div>
                                </div>
                                <div class=\"form-group row \">
                                    <div style=\"width: 80%; margin-left:10%\" id=\"message\">
                                        <h5>Password must contain the following:</h5>
                                        <p id=\"letter\" class=\"invalid\">A <b>lowercase</b> letter</p>
                                        <p id=\"capital\" class=\"invalid\">A <b>capital (uppercase)</b> letter</p>
                                        <p id=\"number\" class=\"invalid\">A <b>number</b></p>
                                        <p id=\"length\" class=\"invalid\">Minimum <b>6 characters</b></p>
                                    </div>
                                    <div style=\"width: 80%; margin-left:10%\" id=\"confirmMessage\">
                                        <p id=\"confirmation\" class=\"invalid\"><span id=\"confirmationMessage\">Unmatch password</span></p>
                                    </div>
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary btn-user btn-block\">
                                    Register Account</button>
                                </a>
                                <hr>
                                <!--<a href=\"index.html\" class=\"btn btn-google btn-user btn-block\">
                                    <i class=\"fab fa-google fa-fw\"></i> Register with Google
                                </a>
                                <a href=\"index.html\" class=\"btn btn-facebook btn-user btn-block\">
                                    <i class=\"fab fa-facebook-f fa-fw\"></i> Register with Facebook
                                </a>-->
                            </form>
                            <hr>
                            <div class=\"text-center\">
                                <a class=\"small\" href=\"{{path('sopay_forgot_password')}}\">Forgot Password?</a>
                            </div>
                            <div class=\"text-center\">
                                <a class=\"small\" href=\"{{ path('sopay_login')}}\">Already have an account? Login!</a>
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
            \$('#register').on('submit', function(e){
                e.preventDefault();
                //verif if form contain an error
                if(\$('form').find('p').hasClass('invalid')){
                    \$('#errorTag').text('please feel a correct password').attr('style', 'border-color:red; color:red;').show();
                    return false;
                }
                let username = \$('#username').val();
                let email = \$('#email').val();
                let contact = \$('#contact').val();
                let password = \$('#password').val();
                let typeUser = \$('#typeUser').val();
                \$.ajax({
                    url: \"{{ path('sopay_register') }}\",
                    type: \"POST\",
                    dataType: \"JSON\",
                    data: {username: username,
                           password: password,
                            contact: contact,
                            email: email,
                            type: typeUser,
                            uuid: localStorage.uuid,
                            os: navigator.platform,
                            br: navigator.appCodeName
                          },
                    success:function(data)
                     {
                        \$('#errorTag').text(data.message).attr('style', 'border-color:red; color:red;').show();
                        if(data.success == true){
                            \$('#errorTag').attr('style', 'color:green;');
                            setTimeout(function(){ window.location.href = \"{{ path('sopay_login') }}\"; }, 5000);
                        }
                        console.log(data);
                    },
                   error: function(err){
                    console.log(err);
                   }
                 });
            });
        });
    </script>
    <script>
        var myInput = document.getElementById(\"password\");
        var confirmInput = document.getElementById(\"passConfirm\");
        var letter = document.getElementById(\"letter\");
        var capital = document.getElementById(\"capital\");
        var number = document.getElementById(\"number\");
        var length = document.getElementById(\"length\");
        var confirmation = document.getElementById(\"confirmation\");
        
        // When the user clicks on the password field, show the message box
        myInput.onfocus = function() {
          document.getElementById(\"message\").style.display = \"block\";
        }
        
        // When the user clicks outside of the password field, hide the message box
        myInput.onblur = function() {
          document.getElementById(\"message\").style.display = \"none\";
        }
        
        // When the user starts to type something inside the password field
        myInput.onkeyup = function() {
          // Validate lowercase letters
          var lowerCaseLetters = /[a-z]/g;
          if(myInput.value.match(lowerCaseLetters)) {
            letter.classList.remove(\"invalid\");
            letter.classList.add(\"valid\");
          } else {
            letter.classList.remove(\"valid\");
            letter.classList.add(\"invalid\");
        }
        
          // Validate capital letters
          var upperCaseLetters = /[A-Z]/g;
          if(myInput.value.match(upperCaseLetters)) {
            capital.classList.remove(\"invalid\");
            capital.classList.add(\"valid\");
          } else {
            capital.classList.remove(\"valid\");
            capital.classList.add(\"invalid\");
          }
        
          // Validate numbers
          var numbers = /[0-9]/g;
          if(myInput.value.match(numbers)) {
            number.classList.remove(\"invalid\");
            number.classList.add(\"valid\");
          } else {
            number.classList.remove(\"valid\");
            number.classList.add(\"invalid\");
          }
        
          // Validate length
          if(myInput.value.length >= 6) {
            length.classList.remove(\"invalid\");
            length.classList.add(\"valid\");
          } else {
            length.classList.remove(\"valid\");
            length.classList.add(\"invalid\");
          }
         
        }

          // When the user clicks on the confirmation password field, show the message box
          confirmInput.onfocus = function() {
            document.getElementById(\"confirmMessage\").style.display = \"block\";
          }
          
          // When the user clicks outside of the password field, hide the message box
          confirmInput.onblur = function() {
            document.getElementById(\"confirmMessage\").style.display = \"none\";
          }
          
          // When the user starts to type something inside the password field
          confirmInput.onkeyup = function() {
             // Validate confirmation
          if(myInput.value === confirmInput.value) {
            confirmation.classList.remove(\"invalid\");
            confirmation.classList.add(\"valid\");
            \$('#confirmationMessage').text('Valid Password');
          } else {
            confirmation.classList.remove(\"valid\");
            confirmation.classList.add(\"invalid\");
            \$('#confirmationMessage').text('Unmatch password');
          }
        }
        </script>
{% endblock %}
", "register.html.twig", "/var/www/html/sopay/templates/register.html.twig");
    }
}
