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

/* reset-password.html.twig */
class __TwigTemplate_c58a7566ea38000e26e401f254732d0746d07477a4b014930dca86782df5e23a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset-password.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset-password.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "reset-password.html.twig", 1);
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
        echo "Reset Your password on ";
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
        echo "<div class=\"about-area area-padding\" style=\"background-color: rgb(190, 215, 226);\">
    <div class=\"container\" style=\"margin-top: 25px;\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"section-headline text-center\">
                <h2>Reset Your <span>So</span>Pay Password !</h2>
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
                                        <p class=\"mb-4\">Feel your new password in the space below!</p>
                                            <h4 id=\"errorTag\" style=\"display: none;\"></h4>
                                    </div>
                                    <form class=\"user\" id=\"resetPass\">
                                        <div class=\"form-group\">
                                            <input type=\"password\" class=\"form-control form-control-user\"
                                            id=\"password\" placeholder=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New Password"), "html", null, true);
        echo "\" pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{6,}\" title=\"Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters\" required autofocus>
                                        </div>
                                        <div class=\"form-group\">
                                            <input type=\"password\" class=\"form-control form-control-user\"
                                            id=\"passConfirm\" placeholder=\"Repeat Password\" pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{6,}\" required>
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
                                        <input type=\"hidden\" id=\"token\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "request", [], "any", false, false, false, 92), "query", [], "any", false, false, false, 92), "get", [0 => "token"], "method", false, false, false, 92), "html", null, true);
        echo "\" />
                                        <button type=\"submit\" class=\"btn btn-primary btn-block\" >";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update Password"), "html", null, true);
        echo "</button>
                                        
                                    </form>
                                    <hr>
                                    <div class=\"text-center\">
                                        <a class=\"small\" href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_register");
        echo "\">Create an Account!</a>
                                    </div>
                                    <div class=\"text-center\">
                                        <a class=\"small\" href=\"";
        // line 101
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

    // line 116
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 117
        echo "   <script>
        \$(document).ready(function(){
            let token = \$('#token').val();
            if(!token){
                \$('#errorTag').text('Token Expired').attr('style', 'border-color:red; color:red;').show();
                \$('#errorTag').append('<br /> Return to <a href=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_forgot_password");
        echo "\" >forgotten password page</a>');
                \$('#resetPass').find(':input').attr('disabled', 'disabled');
            }
            
            \$('#resetPass').on('submit', function(e){
                e.preventDefault();
                if(\$('form').find('p').hasClass('invalid')){
                    \$('#errorTag').text('please feel a correct password').attr('style', 'border-color:red; color:red;').show();
                    return false;
                }
                let password = \$('#password').val();
                \$.ajax({
                    url: \"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_reset_password");
        echo "\",
                    type: \"POST\",
                    dataType: \"JSON\",
                    data: {password: password,
                            token: token},
                    success:function(data)
                     {
                        \$('#errorTag').text(data.message).attr('style', 'border-color:red; color:red;').show();
                        if(data.success == true){
                            \$('#errorTag').attr('style', 'color:green;');
                            setTimeout(function(){ window.location.href = \"";
        // line 144
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
        return "reset-password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 144,  277 => 134,  262 => 122,  255 => 117,  245 => 116,  220 => 101,  214 => 98,  206 => 93,  202 => 92,  181 => 74,  151 => 46,  141 => 45,  94 => 7,  84 => 6,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}
Reset Your password on {{ parent() }}
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
<div class=\"about-area area-padding\" style=\"background-color: rgb(190, 215, 226);\">
    <div class=\"container\" style=\"margin-top: 25px;\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"section-headline text-center\">
                <h2>Reset Your <span>So</span>Pay Password !</h2>
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
                                        <p class=\"mb-4\">Feel your new password in the space below!</p>
                                            <h4 id=\"errorTag\" style=\"display: none;\"></h4>
                                    </div>
                                    <form class=\"user\" id=\"resetPass\">
                                        <div class=\"form-group\">
                                            <input type=\"password\" class=\"form-control form-control-user\"
                                            id=\"password\" placeholder=\"{{'New Password'|trans}}\" pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{6,}\" title=\"Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters\" required autofocus>
                                        </div>
                                        <div class=\"form-group\">
                                            <input type=\"password\" class=\"form-control form-control-user\"
                                            id=\"passConfirm\" placeholder=\"Repeat Password\" pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{6,}\" required>
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
                                        <input type=\"hidden\" id=\"token\" value=\"{{ app.request.query.get('token') }}\" />
                                        <button type=\"submit\" class=\"btn btn-primary btn-block\" >{{'Update Password'|trans}}</button>
                                        
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
            let token = \$('#token').val();
            if(!token){
                \$('#errorTag').text('Token Expired').attr('style', 'border-color:red; color:red;').show();
                \$('#errorTag').append('<br /> Return to <a href=\"{{path(\"sopay_forgot_password\")}}\" >forgotten password page</a>');
                \$('#resetPass').find(':input').attr('disabled', 'disabled');
            }
            
            \$('#resetPass').on('submit', function(e){
                e.preventDefault();
                if(\$('form').find('p').hasClass('invalid')){
                    \$('#errorTag').text('please feel a correct password').attr('style', 'border-color:red; color:red;').show();
                    return false;
                }
                let password = \$('#password').val();
                \$.ajax({
                    url: \"{{ path('sopay_reset_password') }}\",
                    type: \"POST\",
                    dataType: \"JSON\",
                    data: {password: password,
                            token: token},
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
", "reset-password.html.twig", "/var/www/html/sopay/templates/reset-password.html.twig");
    }
}
