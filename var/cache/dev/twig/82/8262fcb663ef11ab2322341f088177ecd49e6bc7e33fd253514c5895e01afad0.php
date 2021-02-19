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

/* home-new-bootstrap.html.twig */
class __TwigTemplate_1a4d1aeeb95cd4a5ea7851a5ab8f632ab61c11ca90598d0ebf966dbd863e3048 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home-new-bootstrap.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home-new-bootstrap.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  
  <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <meta content=\"\" name=\"keywords\">
  <meta content=\"\" name=\"description\">

  <!-- Favicons -->
  <link href=\"/sopay/public/assets/img/logo.png\" rel=\"icon\">
  <link href=\"/sopay/public/assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900\" rel=\"stylesheet\">

  <!-- Bootstrap CSS File -->
  <link href=\"/sopay/public/assets/lib/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

  <!-- Libraries CSS Files -->
  <link href=\"/sopay/public/assets/lib/nivo-slider/css/nivo-slider.css\" rel=\"stylesheet\">
  <link href=\"/sopay/public/assets/lib/owlcarousel/owl.carousel.css\" rel=\"stylesheet\">
  <link href=\"/sopay/public/assets/lib/owlcarousel/owl.transitions.css\" rel=\"stylesheet\">
  <link href=\"/sopay/public/assets/lib/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">
  <link href=\"/sopay/public/assets/lib/animate/animate.min.css\" rel=\"stylesheet\">
  <link href=\"/sopay/public/assets/lib/venobox/venobox.css\" rel=\"stylesheet\">

  <!-- Nivo Slider Theme -->
  <link href=\"/sopay/public/assets/css/nivo-slider-theme.css\" rel=\"stylesheet\">

  <!-- Main Stylesheet File -->
  <link href=\"/sopay/public/assets/css/style.css\" rel=\"stylesheet\">

  <!-- Responsive Stylesheet File -->
  <link href=\"/sopay/public/assets/css/responsive.css\" rel=\"stylesheet\">

";
        // line 39
        $this->displayBlock('header', $context, $blocks);
        // line 41
        echo "</head>
<body data-spy=\"scroll\" data-target=\"#navbar-example\">

    <div id=\"preloader\"></div>
  
    <header>
      <!-- header-area start -->
      <div id=\"sticker\" class=\"header-area\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12 col-sm-12\">
  
              <!-- Navigation -->
              <nav class=\"navbar navbar-default navbar-light navbar-expand-sm d-sm-flex \" style=\"background-color: rgba(154,13,13,0);color: rgb(249,246,246);padding-top: 0px;padding-left: 0px;padding-right: 0px;\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                  <button type=\"button\" class=\"navbar-toggler collapsed\" data-toggle=\"collapse\" data-target=\"#navcol-1\" aria-expanded=\"false\">
                                          <span class=\"navbar-toggler-icon\" style=\"background-color: rgba(255,255,255,0.8);\"></span>
                                          <span class=\"icon-bar\"></span>
                                          <span class=\"icon-bar\"></span>
                                          <span class=\"icon-bar\"></span>
                                      </button>
                  <!-- Brand -->
                  <a class=\"navbar-brand page-scroll sticky-logo\" href=\"#\">
                    <!--<h1><span>So</span>Pay</h1>-->
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <img src=\"/sopay/public/assets/img/logo-bande.png\" style=\"max-width:100px; max-height:45px \" alt=\"soleas pay logo\" title=\"SoleasPay\">
                                  </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse main-menu shadow-sm \" id=\"navcol-1\" >
                  <ul class=\"nav navbar-nav navbar-right mr-auto main-nav\">
                    <li class=\"nav-item active\" role=\"presentation\">
                      <a class=\"page-scroll nav-link\" href=\"#home\">Home</a>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                      <a class=\"page-scroll nav-link\" href=\"#about\">About</a>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                      <a class=\"page-scroll nav-link\" href=\"#services\">Services</a>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                      <a class=\"page-scroll nav-link\" href=\"#portfolio\">Our Partner</a>
                    </li>
  
                    <!--<li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Drop Down<span navbar-example class=\"caret\"></span></a>
                      <ul class=\"dropdown-menu\" role=\"menu\">
                        <li><a href=# >Drop Down 1</a></li>
                        <li><a href=# >Drop Down 2</a></li>
                      </ul> 
                    </li>-->
  
                    <li class=\"nav-item\" role=\"presentation\">
                      <a class=\"page-scroll nav-link\" href=\"#blog\">Blog</a>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                      <a class=\"page-scroll nav-link\" href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_contact");
        echo "\">Contact</a>
                    </li>
                    ";
        // line 99
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 99), "get", [0 => "user"], "method", false, true, false, 99), "username", [], "any", true, true, false, 99)) {
            // line 100
            echo "                    <li class=\"nav-item\" role=\"presentation\">
                      <a class=\"page-scroll nav-link\" style=\"color: #0096ff;\" href=\"";
            // line 101
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_dashboard");
            echo "\">Dashboard</a>
                    </li>
                    ";
        } else {
            // line 104
            echo "                    <li class=\"nav-item\" role=\"presentation\">
                      <a class=\"page-scroll nav-link\" style=\"color:#0096ff;\" href=\"";
            // line 105
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_login");
            echo "\">Login</a>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                      <a class=\"page-scroll nav-link\" style=\"color:#ff7200;\" href=\"";
            // line 108
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_register");
            echo "\">Sign In</a>
                    </li>
                    ";
        }
        // line 111
        echo "                  </ul>
                </div>
                <!-- navbar-collapse -->
              </nav>
              <!-- END: Navigation -->
            </div>
          </div>
        </div>
      </div>
      <!-- header-area end -->
    </header>
    <!-- header end -->
";
        // line 123
        $this->displayBlock('content', $context, $blocks);
        // line 956
        echo "  
  <!-- Start Footer bottom Area -->
    <footer>
      <div class=\"footer-area\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-4 col-sm-4 col-xs-12\">
              <div class=\"footer-content\">
                <div class=\"footer-head\">
                  <div class=\"footer-logo\">
                    <h2><span>So</span>Pay</h2>
                    
                  </div>
  
                  <p>Sopay offers businesses and financial institutions a suite of multi-channel digital solutions that facilitate the issuance and receipt of payments on a website or mobile application as well as the collection and disbursement of mass payments.</p>
                  <div class=\"footer-icons\">
                    <ul>
                      <li>
                        <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                      </li>
                      <li>
                        <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                      </li>
                      <li>
                        <a href=\"#\"><i class=\"fa fa-google\"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- end single footer -->
            <div class=\"col-md-4 col-sm-4 col-xs-12\">
              <div class=\"footer-content\">
                <div class=\"footer-head\">
                  <h4>Contacts</h4>
                  <p>
                    Feel free to contact us.
                  </p>
                  <div class=\"footer-contacts\">
                    <p><span>Tel:</span> +237 698 479 723</p>
                    <p><span>Email:</span> support@soleaspay.com</p>
                    <p><span>Working Hours:</span> 8am-6pm</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- end single footer -->
            <div class=\"col-md-4 col-sm-4 col-xs-12\">
              <div class=\"footer-content\">
                <div class=\"footer-head\">
                  <h4>Other Pages</h4>
                  
                  <div class=\"footer-contacts\">
                    <p>  <a  href=\"#\" >Privacy</a> </p>
                    <p>  <a  href=\"#\" >Terms</a> </p>
                    <p>  <a  href=\"#\" >Fees</a> </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- end single footer -->
          </div>
        </div>
      </div>
      <div class=\"footer-area-bottom\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"copyright text-center\">
                <p>
                  <strong>Copyright &copy; MYSOLEAS 2020</strong>. All Rights Reserved
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  
    <a href=\"#\" class=\"back-to-top\"><i class=\"fa fa-chevron-up\"></i></a>
  
    <!-- JavaScript Libraries -->
    <script src=\"/sopay/public/assets/lib/jquery/jquery.min.js\"></script>
    <script src=\"/sopay/public/assets/lib/bootstrap/js/bootstrap.min.js\"></script>
    <script src=\"/sopay/public/assets/lib/owlcarousel/owl.carousel.min.js\"></script>
    <script src=\"/sopay/public/assets/lib/venobox/venobox.min.js\"></script>
    <script src=\"/sopay/public/assets/lib/knob/jquery.knob.js\"></script>
    <script src=\"/sopay/public/assets/lib/wow/wow.min.js\"></script>
    <script src=\"/sopay/public/assets/lib/parallax/parallax.js\"></script>
    <script src=\"/sopay/public/assets/lib/easing/easing.min.js\"></script>
    <script src=\"/sopay/public/assets/lib/nivo-slider/js/jquery.nivo.slider.js\" type=\"text/javascript\"></script>
    <script src=\"/sopay/public/assets/lib/appear/jquery.appear.js\"></script>
    <script src=\"/sopay/public/assets/lib/isotope/isotope.pkgd.min.js\"></script>
  
    <!-- Contact Form JavaScript File -->
    <script src=\"/sopay/public/assets/contactform/contactform.js\"></script>
  
    <script src=\"/sopay/public/assets/js/main.js\"></script>
    ";
        // line 1055
        $this->displayBlock('script', $context, $blocks);
        // line 1057
        echo "  </body>
  
  </html>
  ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "SoPay your wallet partner for life";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 123
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 124
        echo "  <!-- Start Slider Area -->
  <div id=\"home\" class=\"slider-area\">
    <div class=\"bend niceties preview-2\">
      <div id=\"ensign-nivoslider\" class=\"slides\">
        <img src=\"/sopay/public/assets/img/slider/slider1.jpg\" alt=\"\" title=\"#slider-direction-1\" />
        <img src=\"/sopay/public/assets/img/slider/slider2.jpg\" alt=\"\" title=\"#slider-direction-2\" />
        <img src=\"/sopay/public/assets/img/slider/slider3.jpg\" alt=\"\" title=\"#slider-direction-3\" />
      </div>

      <!-- direction 1 -->
      <div id=\"slider-direction-1\" class=\"slider-direction slider-one\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"slider-content\">
                <!-- layer 1 -->
                <div class=\"layer-1-1 hidden-xs wow slideInDown\" data-wow-duration=\"4s\" data-wow-delay=\".4s\">
                  <h2 class=\"title1\">The Best Business Information </h2>
                </div>
                <!-- layer 2 -->
                <div class=\"layer-1-2 wow slideInUp\" data-wow-duration=\"4s\" data-wow-delay=\".2s\">
                  <h1 class=\"title2\">We're In The Business Of Helping You Start Your Business</h1>
                </div>
                <!-- layer 3 -->
                <div class=\"layer-1-3 hidden-xs wow slideInUp\" data-wow-duration=\"4s\" data-wow-delay=\".4s\">
                  ";
        // line 149
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 149), "get", [0 => "user"], "method", false, true, false, 149), "username", [], "any", true, true, false, 149)) {
            // line 150
            echo "                     <a class=\"ready-btn right-btn page-scroll\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_dashboard");
            echo "\">Dashboard</a>
                   ";
        } else {
            // line 152
            echo "                  <a class=\"ready-btn right-btn page-scroll\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_login");
            echo "\">Login</a>
                  <a class=\"ready-btn page-scroll\" href=\"";
            // line 153
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_register");
            echo "\">Sign In</a>
                  ";
        }
        // line 155
        echo "                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 2 -->
      <div id=\"slider-direction-2\" class=\"slider-direction slider-two\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"slider-content text-center\">
                <!-- layer 1 -->
                <div class=\"layer-1-1 hidden-xs wow slideInUp\" data-wow-duration=\"4s\" data-wow-delay=\".4s\">
                  <h2 class=\"title1\">The Best Business Information </h2>
                </div>
                <!-- layer 2 -->
                <div class=\"layer-1-2 wow slideInUp\" data-wow-duration=\"4s\" data-wow-delay=\".2s\">
                  <h1 class=\"title2\">We're In The Business Of Get Quality Business Service</h1>
                </div>
                <!-- layer 3 -->
                <div class=\"layer-1-3 hidden-xs wow slideInUp\" data-wow-duration=\"4s\" data-wow-delay=\".4s\">
                  ";
        // line 178
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 178), "get", [0 => "user"], "method", false, true, false, 178), "username", [], "any", true, true, false, 178)) {
            // line 179
            echo "                      <a class=\"ready-btn right-btn page-scroll\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_dashboard");
            echo "\">Dashboard</a>
                    ";
        } else {
            // line 181
            echo "                  <a class=\"ready-btn right-btn page-scroll\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_login");
            echo "\">Login</a>
                  <a class=\"ready-btn page-scroll\" href=\"";
            // line 182
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_register");
            echo "\">Sign In</a>
                  ";
        }
        // line 184
        echo "                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 3 -->
      <div id=\"slider-direction-3\" class=\"slider-direction slider-two\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"slider-content\">
                <!-- layer 1 -->
                <div class=\"layer-1-1 hidden-xs wow slideInUp\" data-wow-duration=\"2s\" data-wow-delay=\".2s\">
                  <h2 class=\"title1\">The Best business Information </h2>
                </div>
                <!-- layer 2 -->
                <div class=\"layer-1-2 wow slideInUp\" data-wow-duration=\"2s\" data-wow-delay=\".1s\">
                  <h1 class=\"title2\">Helping Business Security  & Peace of Mind for Your Family</h1>
                </div>
                <!-- layer 3 -->
                <div class=\"layer-1-3 hidden-xs wow slideInUp\" data-wow-duration=\"2s\" data-wow-delay=\".2s\">
                  ";
        // line 207
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 207), "get", [0 => "user"], "method", false, true, false, 207), "username", [], "any", true, true, false, 207)) {
            // line 208
            echo "                      <a class=\"ready-btn right-btn page-scroll\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_dashboard");
            echo "\">Dashboard</a>
                    ";
        } else {
            // line 210
            echo "                  <a class=\"ready-btn right-btn page-scroll\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_login");
            echo "\">Login</a>
                  <a class=\"ready-btn page-scroll\" href=\"";
            // line 211
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_register");
            echo "\">Sign In</a>
                  ";
        }
        // line 213
        echo "                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Slider Area -->
  <div class=\"d-block d-md-none col-md-12 col-sm-12 col-xs-12\">
    <div class=\"section-headline text-center\">
        ";
        // line 224
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 224), "get", [0 => "user"], "method", false, true, false, 224), "username", [], "any", true, true, false, 224)) {
            // line 225
            echo "            <a class=\"ready-btn right-btn page-scroll\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_dashboard");
            echo "\">Dashboard</a>
          ";
        } else {
            // line 227
            echo "        <a class=\"ready-btn right-btn page-scroll\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_login");
            echo "\">Login</a>
        <a class=\"ready-btn page-scroll\" href=\"";
            // line 228
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_register");
            echo "\">Sign In</a>
        ";
        }
        // line 230
        echo "    </div>
  </div>
  <!-- Start About area -->
  <div id=\"about\" class=\"about-area area-padding\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
          <div class=\"section-headline text-center\">
            <h2>About SoleasPay</h2>
          </div>
        </div>
      </div>
      <div class=\"row\">
        <!-- single-well start-->
        <div class=\"col-md-6 col-sm-6 col-xs-12\">
          <div class=\"well-left\">
            <div class=\"single-well\">
              <a href=\"#\">
\t\t\t\t\t\t\t\t  <img src=\"/sopay/public/assets/img/btcbg.jpeg\" alt=\"\">
\t\t\t\t\t\t\t\t</a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class=\"col-md-6 col-sm-6 col-xs-12\">
          <div class=\"well-middle\">
            <div class=\"single-well\">
              <a href=\"#\">
                <h4 class=\"sec-head\">Payment Aggregator</h4>
              </a>
              <p>
                Sopay provides businesses and financial institutions with a suite of digital solutions to sell, issue or receive payments and ensure better business management</p>
              <ul>
                <li>
                  <i class=\"fa fa-check\"></i> Receive Paiement
                </li>
                <li>
                  <i class=\"fa fa-check\"></i> Sell
                </li>
                <li>
                  <i class=\"fa fa-check\"></i> Buy Serices/Customer 
                </li>
                <li>
                  <i class=\"fa fa-check\"></i> International Opening
                </li>
                <li>
                  <i class=\"fa fa-check\"></i> Accept New Digital Currencies
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
    <div class=\"container\" style=\"margin-top: 25px;\">
      <div class=\"row\">
        <!-- single-well end-->
        <div class=\"col-md-6 col-sm-6 col-xs-12\">
          <div class=\"well-middle\">
            <div class=\"single-well\">
              <a href=\"#\">
                <h4 class=\"sec-head\">An interface that follows you daily </h4>
              </a>
              <p>
                Witch a web and mobile interface, simple and intuitive, connect to your SoPay account at any time to.
              </p>
              <ul>
                <li>
                  <i class=\"fa fa-check\"></i> Monitor your transactions
                </li>
                <li>
                  <i class=\"fa fa-check\"></i> Manage your transactions
                </li>
                <li>
                  <i class=\"fa fa-check\"></i> <a href=\"#\">Download Mobile Apps</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- single-well start-->
        <div class=\"col-md-6 col-sm-6 col-xs-12\">
          <div class=\"well-left\">
            <div class=\"single-well\">
              <a href=\"#\">
\t\t\t\t\t\t\t\t  <img src=\"/sopay/public/assets/img/undraw_posting_photo.svg\" alt=\"\">
\t\t\t\t\t\t\t\t</a>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- End About area -->

  <!-- Start Service area -->
  <div id=\"services\" class=\"services-area area-padding\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
          <div class=\"section-headline services-head text-center\">
            <h2>Our Services</h2>
          </div>
        </div>
      </div>
      <div class=\"row text-center\">
        <div class=\"services-contents\">
          <!-- Start Left services -->
          <div class=\"col-md-4 col-sm-4 col-xs-12\">
            <div class=\"about-move\">
              <div class=\"services-details\">
                <div class=\"single-services\">
                  <a class=\"services-icon\" href=\"#\" style=\"max-height: 36px;\">
                    <img src=\"/sopay/public/assets/img/check_Pay.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
                  <h4>Payments</h4>
                  <p>
                    Make and receive payments <br />
                    whether you are an online store, a web merchant or a simple consumer, you can send and receive payments instantly on sopay.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class=\"col-md-4 col-sm-4 col-xs-12\">
            <!-- end col-md-4 -->
            <div class=\" about-move\">
              <div class=\"services-details\">
                <div class=\"single-services\">
                  <a class=\"services-icon\" href=\"#\">
                    <i class=\"fa fa-recycle\"></i>
                  </a>
                  <h4>Changes </h4>
                  <p>
                    Move money between your diverse personal account
                    move your money from one of your personal accounts to another quickly with the lowest exchange rates on the market.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class=\"col-md-4 col-sm-4 col-xs-12\">
            <!-- end col-md-4 -->
            <div class=\" about-move\">
              <div class=\"services-details\">
                <div class=\"single-services\">
                  <a class=\"services-icon\" href=\"#\">
                    <i class=\"fa fa-refresh\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
                  <h4>Transfert</h4>
                  <p>
                    Transfert between sopay account
                    free transfer money from your account to another sopay account with security parameters defined by you (direct or subject to a condition).
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class=\"col-md-4 col-sm-4 col-xs-12\">
            <div class=\"about-move\">
              <div class=\"services-details\">
                <div class=\"single-services\">
                  <a class=\"services-icon\" href=\"#\">
                    <i class=\"fa fa-credit-card\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
                  <h4>Prepaid Card Credit</h4>
                  <p>
                    On sopay <br />
                    instantly credit your uba prepayer card from your sopay account.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class=\"col-md-4 col-sm-4 col-xs-12\">
            <div class=\"about-move\">
              <div class=\"services-details\">
                <div class=\"single-services\">
                  <a class=\"services-icon\" href=\"#\" style=\"max-height: 36px;\">
                    <img src=\"/sopay/public/assets/img/rewards.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
                  <h4>Rewards</h4>
                  <p>
                    Earn rewards <br />
                    By transact on soapy, you can earn rewards for all operation that require fees. You also earn rewards from all transactions of your referal sopay accounts. 
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class=\"col-md-4 col-sm-4 col-xs-12\">
            <div class=\"about-move\">
              <div class=\"services-details\">
                <div class=\"single-services\">
                  <a class=\"services-icon\" href=\"#\" style=\"max-height: 36px;\">
                    <img src=\"/sopay/public/assets/img/receiveP.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
                  <h4>International payments</h4>
                  <p>
                    Receive International payments <br />
                    sopay allows you to accept international payments through legal channels (Btc, Paypal, etc.) to facilitate the sale of your services online and promote the reputation of your product internationally. 
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class=\"col-md-4 col-sm-4 col-xs-12\">
            <div class=\"about-move\">
              <div class=\"services-details\">
                <div class=\"single-services\">
                  <a class=\"services-icon\" href=\"#\">
                    <i class=\"fa fa-arrow-down\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
                  <h4>API Integration</h4>
                  <p>
                    E-commerce and mobile Apps integration <br />
                    for personalized solutions, integrate easily and quickly (just once) all payment methods supported by sopay in your project.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class=\"col-md-4 col-sm-4 col-xs-12\">
            <!-- end col-md-4 -->
            <div class=\" about-move\">
              <div class=\"services-details\">
                <div class=\"single-services\">
                  <a class=\"services-icon\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bar-chart\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
                  <h4>Live history</h4>
                  <p>
                    benefit from a real-time history of all transactions carried out from or to your account.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class=\"col-md-4 col-sm-4 col-xs-12\">
            <!-- end col-md-4 -->
            <div class=\" about-move\">
              <div class=\"services-details\">
                <div class=\"single-services\">
                  <a class=\"services-icon\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-ticket\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
                  <h4>24/7 Support</h4>
                  <p>
                    a technical team is available in real time to assist you step by step 24/7.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Service area -->

  <!-- our-skill-area start -->
  <div class=\"our-skill-area fix hidden-sm\">
    <div class=\"test-overly\"></div>
    <div class=\"skill-bg area-padding-2\">
      <div class=\"container\">
        <!-- section-heading end -->
        <div class=\"row\">
          <div class=\"skill-text\">
            <!-- single-skill start -->
            <div class=\"col-xs-12 col-sm-3 col-md-3 text-center\">
              <div class=\"single-skill\">
                <div class=\"progress-circular\">
                  <input type=\"text\" class=\"knob\" value=\"0\" data-rel=\"95\" data-linecap=\"round\" data-width=\"175\" data-bgcolor=\"#fff\" data-fgcolor=\"#ff7200\" data-thickness=\".20\" data-readonly=\"true\" disabled>
                  <h3 class=\"progress-h4\">Security</h3>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
            <!-- single-skill start -->
            <div class=\"col-xs-12 col-sm-3 col-md-3 text-center\">
              <div class=\"single-skill\">
                <div class=\"progress-circular\">
                  <input type=\"text\" class=\"knob\" value=\"0\" data-rel=\"85\" data-linecap=\"round\" data-width=\"175\" data-bgcolor=\"#fff\" data-fgcolor=\"#ff7200\" data-thickness=\".20\" data-readonly=\"true\" disabled>
                  <h3 class=\"progress-h4\">Satifiability</h3>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
            <!-- single-skill start -->
            <div class=\"col-xs-12 col-sm-3 col-md-3 text-center\">
              <div class=\"single-skill\">
                <div class=\"progress-circular\">
                  <input type=\"text\" class=\"knob\" value=\"0\" data-rel=\"75\" data-linecap=\"round\" data-width=\"175\" data-bgcolor=\"#fff\" data-fgcolor=\"#ff7200\" data-thickness=\".20\" data-readonly=\"true\" disabled>
                  <h3 class=\"progress-h4\">LTs</h3>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
            <!-- single-skill start -->
            <div class=\"col-xs-12 col-sm-3 col-md-3 text-center\">
              <div class=\"single-skill\">
                <div class=\"progress-circular\">
                  <input type=\"text\" class=\"knob\" value=\"0\" data-rel=\"65\" data-linecap=\"round\" data-width=\"175\" data-bgcolor=\"#fff\" data-fgcolor=\"#ff7200\" data-thickness=\".20\" data-readonly=\"true\" disabled>
                  <h3 class=\"progress-h4\">Coverage</h3>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- our-skill-area end -->

  <!-- Faq area start -->
  <div class=\"faq-area area-padding\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
          <div class=\"section-headline text-center\">
            <h2>Faq Question</h2>
          </div>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-md-6 col-sm-6 col-xs-12\">
          <div class=\"faq-details\">
            <div class=\"panel-group\" id=\"accordion\">
              <!-- Panel Default -->
              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h4 class=\"check-title\">
\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" class=\"active\" data-parent=\"#accordion\" href=\"#check1\">
                                                <span class=\"acc-icons\"></span>Consectetur adipisicing elit.
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</h4>
                </div>
                <div id=\"check1\" class=\"panel-collapse collapse in\">
                  <div class=\"panel-body\">
                    <p>
                      Redug Lefes dolor sit amet, consectetur adipisicing elit. Aspernatur, tempore, commodi quas mollitia dolore magnam quidem repellat, culpa voluptates laboriosam maiores alias accusamus recusandae vero
                    </p>
                  </div>
                </div>
              </div>
              <!-- End Panel Default -->
              <!-- Panel Default -->
              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h4 class=\"check-title\">
\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#check2\">
                                                <span class=\"acc-icons\"></span> Dolore magnam quidem repellat.
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</h4>
                </div>
                <div id=\"check2\" class=\"panel-collapse collapse\">
                  <div class=\"panel-body\">
                    <p>
                      Redug Lefes dolor sit amet, consectetur adipisicing elit. Aspernatur, tempore, commodi quas mollitia dolore magnam quidem repellat, culpa voluptates laboriosam maiores alias accusamus recusandae vero aperiam sint nulla beatae eos.
                    </p>
                  </div>
                </div>
              </div>
              <!-- End Panel Default -->
              <!-- Panel Default -->
              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h4 class=\"check-title\">
\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#check3\">
                                                <span class=\"acc-icons\"></span>Redug Lefes dolor sit.
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</h4>
                </div>
                <div id=\"check3\" class=\"panel-collapse collapse \">
                  <div class=\"panel-body\">
                    <p>
                      Redug Lefes dolor sit amet, consectetur adipisicing elit. Aspernatur, tempore, commodi quas mollitia dolore magnam quidem repellat, culpa voluptates laboriosam maiores alias accusamus recusandae vero aperiam sint nulla beatae eos.
                    </p>
                  </div>
                </div>
              </div>
              <!-- End Panel Default -->
              <!-- Panel Default -->
              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h4 class=\"check-title\">
\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#check4\">
                                                <span class=\"acc-icons\"></span>Maiores alias accusamus
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</h4>
                </div>
                <div id=\"check4\" class=\"panel-collapse collapse\">
                  <div class=\"panel-body\">
                    <p>
                      Redug Lefes dolor sit amet, consectetur adipisicing elit. Aspernatur, tempore, commodi quas mollitia dolore magnam quidem repellat, culpa voluptates laboriosam maiores alias accusamus recusandae vero aperiam sint nulla beatae eos.
                    </p>
                  </div>
                </div>
              </div>
              <!-- End Panel Default -->
            </div>
          </div>
        </div>
        <div class=\"col-md-6 col-sm-6 col-xs-12\">
          <div class=\"tab-menu\">
            <!-- Nav tabs -->
            <ul class=\"nav nav-tabs\" role=\"tablist\">
              <li class=\"active\">
                <a href=\"#p-view-1\" role=\"tab\" data-toggle=\"tab\">Project</a>
              </li>
              <li>
                <a href=\"#p-view-2\" role=\"tab\" data-toggle=\"tab\">Planning</a>
              </li>
              <li>
                <a href=\"#p-view-3\" role=\"tab\" data-toggle=\"tab\">Success</a>
              </li>
            </ul>
          </div>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"p-view-1\">
              <div class=\"tab-inner\">
                <div class=\"event-content head-team\">
                  <h4>Project</h4>
                  <p>
                    Redug Lares dolor sit amet, consectetur adipisicing elit. Animi vero excepturi magnam ducimus adipisci voluptas, praesentium maxime necessitatibus in dolor dolores unde ab, libero quo. Aut, laborum sequi.
                  </p>
                  <p>
                    voluptas, praesentium maxime cum fugiat,magnam ducimus adipisci voluptas, praesentium architecto ducimus, doloribus fuga itaque omnis placeat.
                  </p>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"p-view-2\">
              <div class=\"tab-inner\">
                <div class=\"event-content head-team\">
                  <h4>Planning</h4>
                  <p>
                    voluptas, praesentium maxime cum fugiat,magnam ducimus adipisci voluptas, praesentium architecto ducimus, doloribus fuga itaque omnis.
                  </p>
                  <p>
                    Redug Lares dolor sit amet, consectetur adipisicing elit. Animi vero excepturi magnam ducimus adipisci voluptas, praesentium maxime necessitatibus in dolor dolores unde ab, libero quo. Aut.
                  </p>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"p-view-3\">
              <div class=\"tab-inner\">
                <div class=\"event-content head-team\">
                  <h4>Success</h4>
                  <p>
                    voluptas, praesentium maxime cum fugiat,magnam ducimus adipisci voluptas, praesentium architecto ducimus, doloribus fuga itaque omnis placeat.
                  </p>
                  <p>
                    voluptas, praesentium maxime cum fugiat,magnam ducimus adipisci voluptas, praesentium architecto ducimus, doloribus fuga itaque omnis.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end Row -->
    </div>
  </div>
  <!-- End Faq Area -->

  <!-- Start reviews Area -->
  <div class=\"reviews-area hidden-xs\">
    <div class=\"work-us\">
      <div class=\"work-left-text\">
        <a href=\"#\">
\t\t\t\t\t\t<img src=\"/sopay/public/assets/img/about/5.jpg\" alt=\"\">
\t\t\t\t\t</a>
      </div>
      <div class=\"work-right-text text-center\">
        <h2>working with us</h2>
        <h5>Become our patners .</h5>
        <a href=\"";
        // line 721
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_contact");
        echo "\" class=\"ready-btn\">Contact us</a>
      </div>
    </div>
  </div>
  <!-- End reviews Area -->
  <!-- Start Testimonials -->
  <div class=\"testimonials-area\">
    <div class=\"testi-inner area-padding\">
      <div class=\"testi-overly\"></div>
      <div class=\"container \">
        <div class=\"row\">
          <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <!-- Start testimonials Start -->
            <div class=\"testimonial-content text-center\">
              <a class=\"quate\" href=\"#\"><i class=\"fa fa-quote-right\"></i></a>
              <!-- start testimonial carousel -->
              <div class=\"testimonial-carousel\">
                <div class=\"single-testi\">
                  <div class=\"testi-text\">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.<br>consectetur adipiscing elit. Sed pulvinar luctus est eget congue.
                    </p>
                    <h6>Boby</h6>
                  </div>
                </div>
                <!-- End single item -->
                <div class=\"single-testi\">
                  <div class=\"testi-text\">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.<br>consectetur adipiscing elit. Sed pulvinar luctus est eget congue.
                    </p>
                    <h6>Jhon</h6>
                  </div>
                </div>
                <!-- End single item -->
                <div class=\"single-testi\">
                  <div class=\"testi-text\">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.<br>consectetur adipiscing elit. Sed pulvinar luctus est eget congue.
                    </p>
                    <h6>Fleming</h6>
                  </div>
                </div>
                <!-- End single item -->
              </div>
            </div>
            <!-- End testimonials end -->
          </div>
          <!-- End Right Feature -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Testimonials -->
  <!-- Start Blog Area -->
  <div id=\"blog\" class=\"blog-area\">
    <div class=\"blog-inner area-padding\">
      <div class=\"blog-overly\"></div>
      <div class=\"container \">
        <div class=\"row\">
          <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"section-headline text-center\">
              <h2>Currencies Rate</h2>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <!-- Start Left Blog -->
          <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"d-flex\">
              <a href=\"#\"></a>
            </div>
            <!-- Start single blog -->
          </div>
          <!-- End Left Blog-->
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog -->
  <!-- Start Suscrive Area -->
  <div class=\"suscribe-area\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs=12\">
          <div class=\"suscribe-text text-center\">
            <h3>We Have The Best Market Rate</h3>
            <a class=\"sus-btn\" href=\"#\" data-target=\"#fees\" data-toggle=\"modal\">Our Fees</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Suscrive Area -->
    <!-- Start portfolio Area -->
    <div id=\"portfolio\" class=\"portfolio-area area-padding fix\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <div class=\"section-headline text-center\">
              <h2>Our Partners</h2>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <!-- Start Portfolio -page -->
          <div class=\"awesome-project-1 fix\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
              <div class=\"awesome-menu \">
                <ul class=\"project-menu\">
                  <li>
                    <a href=\"#\" class=\"active\" data-filter=\"*\">All</a>
                  </li>
                  <li>
                    <a href=\"#\" data-filter=\".development\">Development</a>
                  </li>
                  <li>
                    <a href=\"#\" data-filter=\".design\">Design</a>
                  </li>
                  <li>
                    <a href=\"#\" data-filter=\".photo\">Photoshop</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"awesome-project-content\">
            <!-- single-awesome-project start -->
            <div class=\"col-md-4 col-sm-4 col-xs-12 design development\">
              <div class=\"single-awesome-project\">
                <div class=\"awesome-img\">
                  <a href=\"#\"><img src=\"img/portfolio/1.jpg\" alt=\"\" /></a>
                  <div class=\"add-actions text-center\">
                    <div class=\"project-dec\">
                      <a class=\"venobox\" data-gall=\"myGallery\" href=\"img/portfolio/1.jpg\">
                        <h4>Business City</h4>
                        <span>Web Development</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- single-awesome-project end -->
            <!-- single-awesome-project start -->
            <div class=\"col-md-4 col-sm-4 col-xs-12 photo\">
              <div class=\"single-awesome-project\">
                <div class=\"awesome-img\">
                  <a href=\"#\"><img src=\"img/portfolio/2.jpg\" alt=\"\" /></a>
                  <div class=\"add-actions text-center\">
                    <div class=\"project-dec\">
                      <a class=\"venobox\" data-gall=\"myGallery\" href=\"img/portfolio/2.jpg\">
                        <h4>Blue Sea</h4>
                        <span>Photosho</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- single-awesome-project end -->
            <!-- single-awesome-project start -->
            <div class=\"col-md-4 col-sm-4 col-xs-12 design\">
              <div class=\"single-awesome-project\">
                <div class=\"awesome-img\">
                  <a href=\"#\"><img src=\"img/portfolio/3.jpg\" alt=\"\" /></a>
                  <div class=\"add-actions text-center\">
                    <div class=\"project-dec\">
                      <a class=\"venobox\" data-gall=\"myGallery\" href=\"img/portfolio/3.jpg\">
                        <h4>Beautiful Nature</h4>
                        <span>Web Design</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- single-awesome-project end -->
            <!-- single-awesome-project start -->
            <div class=\"col-md-4 col-sm-4 col-xs-12 photo development\">
              <div class=\"single-awesome-project\">
                <div class=\"awesome-img\">
                  <a href=\"#\"><img src=\"img/portfolio/4.jpg\" alt=\"\" /></a>
                  <div class=\"add-actions text-center\">
                    <div class=\"project-dec\">
                      <a class=\"venobox\" data-gall=\"myGallery\" href=\"img/portfolio/4.jpg\">
                        <h4>Creative Team</h4>
                        <span>Web design</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- single-awesome-project end -->
            <!-- single-awesome-project start -->
            <div class=\"col-md-4 col-sm-4 col-xs-12 development\">
              <div class=\"single-awesome-project\">
                <div class=\"awesome-img\">
                  <a href=\"#\"><img src=\"img/portfolio/5.jpg\" alt=\"\" /></a>
                  <div class=\"add-actions text-center text-center\">
                    <div class=\"project-dec\">
                      <a class=\"venobox\" data-gall=\"myGallery\" href=\"img/portfolio/5.jpg\">
                        <h4>Beautiful Flower</h4>
                        <span>Web Development</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- single-awesome-project end -->
            <!-- single-awesome-project start -->
            <div class=\"col-md-4 col-sm-4 col-xs-12 design photo\">
              <div class=\"single-awesome-project\">
                <div class=\"awesome-img\">
                  <a href=\"#\"><img src=\"img/portfolio/6.jpg\" alt=\"\" /></a>
                  <div class=\"add-actions text-center\">
                    <div class=\"project-dec\">
                      <a class=\"venobox\" data-gall=\"myGallery\" href=\"img/portfolio/6.jpg\">
                        <h4>Night Hill</h4>
                        <span>Photoshop</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- single-awesome-project end -->
          </div>
        </div>
      </div>
    </div>
    <!-- awesome-portfolio end -->
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1055
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 1056
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home-new-bootstrap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1270 => 1056,  1260 => 1055,  1015 => 721,  522 => 230,  517 => 228,  512 => 227,  506 => 225,  504 => 224,  491 => 213,  486 => 211,  481 => 210,  475 => 208,  473 => 207,  448 => 184,  443 => 182,  438 => 181,  432 => 179,  430 => 178,  405 => 155,  400 => 153,  395 => 152,  389 => 150,  387 => 149,  360 => 124,  350 => 123,  332 => 39,  313 => 6,  300 => 1057,  298 => 1055,  197 => 956,  195 => 123,  181 => 111,  175 => 108,  169 => 105,  166 => 104,  160 => 101,  157 => 100,  155 => 99,  150 => 97,  92 => 41,  90 => 39,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  
  <title>{% block title %}SoPay your wallet partner for life{% endblock %}</title>
  
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <meta content=\"\" name=\"keywords\">
  <meta content=\"\" name=\"description\">

  <!-- Favicons -->
  <link href=\"/sopay/public/assets/img/logo.png\" rel=\"icon\">
  <link href=\"/sopay/public/assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900\" rel=\"stylesheet\">

  <!-- Bootstrap CSS File -->
  <link href=\"/sopay/public/assets/lib/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

  <!-- Libraries CSS Files -->
  <link href=\"/sopay/public/assets/lib/nivo-slider/css/nivo-slider.css\" rel=\"stylesheet\">
  <link href=\"/sopay/public/assets/lib/owlcarousel/owl.carousel.css\" rel=\"stylesheet\">
  <link href=\"/sopay/public/assets/lib/owlcarousel/owl.transitions.css\" rel=\"stylesheet\">
  <link href=\"/sopay/public/assets/lib/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">
  <link href=\"/sopay/public/assets/lib/animate/animate.min.css\" rel=\"stylesheet\">
  <link href=\"/sopay/public/assets/lib/venobox/venobox.css\" rel=\"stylesheet\">

  <!-- Nivo Slider Theme -->
  <link href=\"/sopay/public/assets/css/nivo-slider-theme.css\" rel=\"stylesheet\">

  <!-- Main Stylesheet File -->
  <link href=\"/sopay/public/assets/css/style.css\" rel=\"stylesheet\">

  <!-- Responsive Stylesheet File -->
  <link href=\"/sopay/public/assets/css/responsive.css\" rel=\"stylesheet\">

{% block header %}
{% endblock %}
</head>
<body data-spy=\"scroll\" data-target=\"#navbar-example\">

    <div id=\"preloader\"></div>
  
    <header>
      <!-- header-area start -->
      <div id=\"sticker\" class=\"header-area\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12 col-sm-12\">
  
              <!-- Navigation -->
              <nav class=\"navbar navbar-default navbar-light navbar-expand-sm d-sm-flex \" style=\"background-color: rgba(154,13,13,0);color: rgb(249,246,246);padding-top: 0px;padding-left: 0px;padding-right: 0px;\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                  <button type=\"button\" class=\"navbar-toggler collapsed\" data-toggle=\"collapse\" data-target=\"#navcol-1\" aria-expanded=\"false\">
                                          <span class=\"navbar-toggler-icon\" style=\"background-color: rgba(255,255,255,0.8);\"></span>
                                          <span class=\"icon-bar\"></span>
                                          <span class=\"icon-bar\"></span>
                                          <span class=\"icon-bar\"></span>
                                      </button>
                  <!-- Brand -->
                  <a class=\"navbar-brand page-scroll sticky-logo\" href=\"#\">
                    <!--<h1><span>So</span>Pay</h1>-->
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <img src=\"/sopay/public/assets/img/logo-bande.png\" style=\"max-width:100px; max-height:45px \" alt=\"soleas pay logo\" title=\"SoleasPay\">
                                  </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse main-menu shadow-sm \" id=\"navcol-1\" >
                  <ul class=\"nav navbar-nav navbar-right mr-auto main-nav\">
                    <li class=\"nav-item active\" role=\"presentation\">
                      <a class=\"page-scroll nav-link\" href=\"#home\">Home</a>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                      <a class=\"page-scroll nav-link\" href=\"#about\">About</a>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                      <a class=\"page-scroll nav-link\" href=\"#services\">Services</a>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                      <a class=\"page-scroll nav-link\" href=\"#portfolio\">Our Partner</a>
                    </li>
  
                    <!--<li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Drop Down<span navbar-example class=\"caret\"></span></a>
                      <ul class=\"dropdown-menu\" role=\"menu\">
                        <li><a href=# >Drop Down 1</a></li>
                        <li><a href=# >Drop Down 2</a></li>
                      </ul> 
                    </li>-->
  
                    <li class=\"nav-item\" role=\"presentation\">
                      <a class=\"page-scroll nav-link\" href=\"#blog\">Blog</a>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                      <a class=\"page-scroll nav-link\" href=\"{{path('sopay_contact')}}\">Contact</a>
                    </li>
                    {% if app.session.get('user').username is defined %}
                    <li class=\"nav-item\" role=\"presentation\">
                      <a class=\"page-scroll nav-link\" style=\"color: #0096ff;\" href=\"{{ path('sopay_dashboard') }}\">Dashboard</a>
                    </li>
                    {% else %}
                    <li class=\"nav-item\" role=\"presentation\">
                      <a class=\"page-scroll nav-link\" style=\"color:#0096ff;\" href=\"{{ path('sopay_login')}}\">Login</a>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                      <a class=\"page-scroll nav-link\" style=\"color:#ff7200;\" href=\"{{path('sopay_register')}}\">Sign In</a>
                    </li>
                    {% endif %}
                  </ul>
                </div>
                <!-- navbar-collapse -->
              </nav>
              <!-- END: Navigation -->
            </div>
          </div>
        </div>
      </div>
      <!-- header-area end -->
    </header>
    <!-- header end -->
{% block content %}
  <!-- Start Slider Area -->
  <div id=\"home\" class=\"slider-area\">
    <div class=\"bend niceties preview-2\">
      <div id=\"ensign-nivoslider\" class=\"slides\">
        <img src=\"/sopay/public/assets/img/slider/slider1.jpg\" alt=\"\" title=\"#slider-direction-1\" />
        <img src=\"/sopay/public/assets/img/slider/slider2.jpg\" alt=\"\" title=\"#slider-direction-2\" />
        <img src=\"/sopay/public/assets/img/slider/slider3.jpg\" alt=\"\" title=\"#slider-direction-3\" />
      </div>

      <!-- direction 1 -->
      <div id=\"slider-direction-1\" class=\"slider-direction slider-one\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"slider-content\">
                <!-- layer 1 -->
                <div class=\"layer-1-1 hidden-xs wow slideInDown\" data-wow-duration=\"4s\" data-wow-delay=\".4s\">
                  <h2 class=\"title1\">The Best Business Information </h2>
                </div>
                <!-- layer 2 -->
                <div class=\"layer-1-2 wow slideInUp\" data-wow-duration=\"4s\" data-wow-delay=\".2s\">
                  <h1 class=\"title2\">We're In The Business Of Helping You Start Your Business</h1>
                </div>
                <!-- layer 3 -->
                <div class=\"layer-1-3 hidden-xs wow slideInUp\" data-wow-duration=\"4s\" data-wow-delay=\".4s\">
                  {% if app.session.get('user').username is defined %}
                     <a class=\"ready-btn right-btn page-scroll\" href=\"{{ path('sopay_dashboard') }}\">Dashboard</a>
                   {% else %}
                  <a class=\"ready-btn right-btn page-scroll\" href=\"{{path('sopay_login')}}\">Login</a>
                  <a class=\"ready-btn page-scroll\" href=\"{{path('sopay_register')}}\">Sign In</a>
                  {% endif %}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 2 -->
      <div id=\"slider-direction-2\" class=\"slider-direction slider-two\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"slider-content text-center\">
                <!-- layer 1 -->
                <div class=\"layer-1-1 hidden-xs wow slideInUp\" data-wow-duration=\"4s\" data-wow-delay=\".4s\">
                  <h2 class=\"title1\">The Best Business Information </h2>
                </div>
                <!-- layer 2 -->
                <div class=\"layer-1-2 wow slideInUp\" data-wow-duration=\"4s\" data-wow-delay=\".2s\">
                  <h1 class=\"title2\">We're In The Business Of Get Quality Business Service</h1>
                </div>
                <!-- layer 3 -->
                <div class=\"layer-1-3 hidden-xs wow slideInUp\" data-wow-duration=\"4s\" data-wow-delay=\".4s\">
                  {% if app.session.get('user').username is defined %}
                      <a class=\"ready-btn right-btn page-scroll\" href=\"{{ path('sopay_dashboard') }}\">Dashboard</a>
                    {% else %}
                  <a class=\"ready-btn right-btn page-scroll\" href=\"{{path('sopay_login')}}\">Login</a>
                  <a class=\"ready-btn page-scroll\" href=\"{{path('sopay_register')}}\">Sign In</a>
                  {% endif %}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 3 -->
      <div id=\"slider-direction-3\" class=\"slider-direction slider-two\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"slider-content\">
                <!-- layer 1 -->
                <div class=\"layer-1-1 hidden-xs wow slideInUp\" data-wow-duration=\"2s\" data-wow-delay=\".2s\">
                  <h2 class=\"title1\">The Best business Information </h2>
                </div>
                <!-- layer 2 -->
                <div class=\"layer-1-2 wow slideInUp\" data-wow-duration=\"2s\" data-wow-delay=\".1s\">
                  <h1 class=\"title2\">Helping Business Security  & Peace of Mind for Your Family</h1>
                </div>
                <!-- layer 3 -->
                <div class=\"layer-1-3 hidden-xs wow slideInUp\" data-wow-duration=\"2s\" data-wow-delay=\".2s\">
                  {% if app.session.get('user').username is defined %}
                      <a class=\"ready-btn right-btn page-scroll\" href=\"{{ path('sopay_dashboard') }}\">Dashboard</a>
                    {% else %}
                  <a class=\"ready-btn right-btn page-scroll\" href=\"{{path('sopay_login')}}\">Login</a>
                  <a class=\"ready-btn page-scroll\" href=\"{{path('sopay_register')}}\">Sign In</a>
                  {% endif %}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Slider Area -->
  <div class=\"d-block d-md-none col-md-12 col-sm-12 col-xs-12\">
    <div class=\"section-headline text-center\">
        {% if app.session.get('user').username is defined %}
            <a class=\"ready-btn right-btn page-scroll\" href=\"{{ path('sopay_dashboard') }}\">Dashboard</a>
          {% else %}
        <a class=\"ready-btn right-btn page-scroll\" href=\"{{path('sopay_login')}}\">Login</a>
        <a class=\"ready-btn page-scroll\" href=\"{{path('sopay_register')}}\">Sign In</a>
        {% endif %}
    </div>
  </div>
  <!-- Start About area -->
  <div id=\"about\" class=\"about-area area-padding\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
          <div class=\"section-headline text-center\">
            <h2>About SoleasPay</h2>
          </div>
        </div>
      </div>
      <div class=\"row\">
        <!-- single-well start-->
        <div class=\"col-md-6 col-sm-6 col-xs-12\">
          <div class=\"well-left\">
            <div class=\"single-well\">
              <a href=\"#\">
\t\t\t\t\t\t\t\t  <img src=\"/sopay/public/assets/img/btcbg.jpeg\" alt=\"\">
\t\t\t\t\t\t\t\t</a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class=\"col-md-6 col-sm-6 col-xs-12\">
          <div class=\"well-middle\">
            <div class=\"single-well\">
              <a href=\"#\">
                <h4 class=\"sec-head\">Payment Aggregator</h4>
              </a>
              <p>
                Sopay provides businesses and financial institutions with a suite of digital solutions to sell, issue or receive payments and ensure better business management</p>
              <ul>
                <li>
                  <i class=\"fa fa-check\"></i> Receive Paiement
                </li>
                <li>
                  <i class=\"fa fa-check\"></i> Sell
                </li>
                <li>
                  <i class=\"fa fa-check\"></i> Buy Serices/Customer 
                </li>
                <li>
                  <i class=\"fa fa-check\"></i> International Opening
                </li>
                <li>
                  <i class=\"fa fa-check\"></i> Accept New Digital Currencies
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
    <div class=\"container\" style=\"margin-top: 25px;\">
      <div class=\"row\">
        <!-- single-well end-->
        <div class=\"col-md-6 col-sm-6 col-xs-12\">
          <div class=\"well-middle\">
            <div class=\"single-well\">
              <a href=\"#\">
                <h4 class=\"sec-head\">An interface that follows you daily </h4>
              </a>
              <p>
                Witch a web and mobile interface, simple and intuitive, connect to your SoPay account at any time to.
              </p>
              <ul>
                <li>
                  <i class=\"fa fa-check\"></i> Monitor your transactions
                </li>
                <li>
                  <i class=\"fa fa-check\"></i> Manage your transactions
                </li>
                <li>
                  <i class=\"fa fa-check\"></i> <a href=\"#\">Download Mobile Apps</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- single-well start-->
        <div class=\"col-md-6 col-sm-6 col-xs-12\">
          <div class=\"well-left\">
            <div class=\"single-well\">
              <a href=\"#\">
\t\t\t\t\t\t\t\t  <img src=\"/sopay/public/assets/img/undraw_posting_photo.svg\" alt=\"\">
\t\t\t\t\t\t\t\t</a>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- End About area -->

  <!-- Start Service area -->
  <div id=\"services\" class=\"services-area area-padding\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
          <div class=\"section-headline services-head text-center\">
            <h2>Our Services</h2>
          </div>
        </div>
      </div>
      <div class=\"row text-center\">
        <div class=\"services-contents\">
          <!-- Start Left services -->
          <div class=\"col-md-4 col-sm-4 col-xs-12\">
            <div class=\"about-move\">
              <div class=\"services-details\">
                <div class=\"single-services\">
                  <a class=\"services-icon\" href=\"#\" style=\"max-height: 36px;\">
                    <img src=\"/sopay/public/assets/img/check_Pay.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
                  <h4>Payments</h4>
                  <p>
                    Make and receive payments <br />
                    whether you are an online store, a web merchant or a simple consumer, you can send and receive payments instantly on sopay.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class=\"col-md-4 col-sm-4 col-xs-12\">
            <!-- end col-md-4 -->
            <div class=\" about-move\">
              <div class=\"services-details\">
                <div class=\"single-services\">
                  <a class=\"services-icon\" href=\"#\">
                    <i class=\"fa fa-recycle\"></i>
                  </a>
                  <h4>Changes </h4>
                  <p>
                    Move money between your diverse personal account
                    move your money from one of your personal accounts to another quickly with the lowest exchange rates on the market.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class=\"col-md-4 col-sm-4 col-xs-12\">
            <!-- end col-md-4 -->
            <div class=\" about-move\">
              <div class=\"services-details\">
                <div class=\"single-services\">
                  <a class=\"services-icon\" href=\"#\">
                    <i class=\"fa fa-refresh\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
                  <h4>Transfert</h4>
                  <p>
                    Transfert between sopay account
                    free transfer money from your account to another sopay account with security parameters defined by you (direct or subject to a condition).
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class=\"col-md-4 col-sm-4 col-xs-12\">
            <div class=\"about-move\">
              <div class=\"services-details\">
                <div class=\"single-services\">
                  <a class=\"services-icon\" href=\"#\">
                    <i class=\"fa fa-credit-card\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
                  <h4>Prepaid Card Credit</h4>
                  <p>
                    On sopay <br />
                    instantly credit your uba prepayer card from your sopay account.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class=\"col-md-4 col-sm-4 col-xs-12\">
            <div class=\"about-move\">
              <div class=\"services-details\">
                <div class=\"single-services\">
                  <a class=\"services-icon\" href=\"#\" style=\"max-height: 36px;\">
                    <img src=\"/sopay/public/assets/img/rewards.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
                  <h4>Rewards</h4>
                  <p>
                    Earn rewards <br />
                    By transact on soapy, you can earn rewards for all operation that require fees. You also earn rewards from all transactions of your referal sopay accounts. 
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class=\"col-md-4 col-sm-4 col-xs-12\">
            <div class=\"about-move\">
              <div class=\"services-details\">
                <div class=\"single-services\">
                  <a class=\"services-icon\" href=\"#\" style=\"max-height: 36px;\">
                    <img src=\"/sopay/public/assets/img/receiveP.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
                  <h4>International payments</h4>
                  <p>
                    Receive International payments <br />
                    sopay allows you to accept international payments through legal channels (Btc, Paypal, etc.) to facilitate the sale of your services online and promote the reputation of your product internationally. 
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class=\"col-md-4 col-sm-4 col-xs-12\">
            <div class=\"about-move\">
              <div class=\"services-details\">
                <div class=\"single-services\">
                  <a class=\"services-icon\" href=\"#\">
                    <i class=\"fa fa-arrow-down\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
                  <h4>API Integration</h4>
                  <p>
                    E-commerce and mobile Apps integration <br />
                    for personalized solutions, integrate easily and quickly (just once) all payment methods supported by sopay in your project.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class=\"col-md-4 col-sm-4 col-xs-12\">
            <!-- end col-md-4 -->
            <div class=\" about-move\">
              <div class=\"services-details\">
                <div class=\"single-services\">
                  <a class=\"services-icon\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bar-chart\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
                  <h4>Live history</h4>
                  <p>
                    benefit from a real-time history of all transactions carried out from or to your account.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class=\"col-md-4 col-sm-4 col-xs-12\">
            <!-- end col-md-4 -->
            <div class=\" about-move\">
              <div class=\"services-details\">
                <div class=\"single-services\">
                  <a class=\"services-icon\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-ticket\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
                  <h4>24/7 Support</h4>
                  <p>
                    a technical team is available in real time to assist you step by step 24/7.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Service area -->

  <!-- our-skill-area start -->
  <div class=\"our-skill-area fix hidden-sm\">
    <div class=\"test-overly\"></div>
    <div class=\"skill-bg area-padding-2\">
      <div class=\"container\">
        <!-- section-heading end -->
        <div class=\"row\">
          <div class=\"skill-text\">
            <!-- single-skill start -->
            <div class=\"col-xs-12 col-sm-3 col-md-3 text-center\">
              <div class=\"single-skill\">
                <div class=\"progress-circular\">
                  <input type=\"text\" class=\"knob\" value=\"0\" data-rel=\"95\" data-linecap=\"round\" data-width=\"175\" data-bgcolor=\"#fff\" data-fgcolor=\"#ff7200\" data-thickness=\".20\" data-readonly=\"true\" disabled>
                  <h3 class=\"progress-h4\">Security</h3>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
            <!-- single-skill start -->
            <div class=\"col-xs-12 col-sm-3 col-md-3 text-center\">
              <div class=\"single-skill\">
                <div class=\"progress-circular\">
                  <input type=\"text\" class=\"knob\" value=\"0\" data-rel=\"85\" data-linecap=\"round\" data-width=\"175\" data-bgcolor=\"#fff\" data-fgcolor=\"#ff7200\" data-thickness=\".20\" data-readonly=\"true\" disabled>
                  <h3 class=\"progress-h4\">Satifiability</h3>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
            <!-- single-skill start -->
            <div class=\"col-xs-12 col-sm-3 col-md-3 text-center\">
              <div class=\"single-skill\">
                <div class=\"progress-circular\">
                  <input type=\"text\" class=\"knob\" value=\"0\" data-rel=\"75\" data-linecap=\"round\" data-width=\"175\" data-bgcolor=\"#fff\" data-fgcolor=\"#ff7200\" data-thickness=\".20\" data-readonly=\"true\" disabled>
                  <h3 class=\"progress-h4\">LTs</h3>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
            <!-- single-skill start -->
            <div class=\"col-xs-12 col-sm-3 col-md-3 text-center\">
              <div class=\"single-skill\">
                <div class=\"progress-circular\">
                  <input type=\"text\" class=\"knob\" value=\"0\" data-rel=\"65\" data-linecap=\"round\" data-width=\"175\" data-bgcolor=\"#fff\" data-fgcolor=\"#ff7200\" data-thickness=\".20\" data-readonly=\"true\" disabled>
                  <h3 class=\"progress-h4\">Coverage</h3>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- our-skill-area end -->

  <!-- Faq area start -->
  <div class=\"faq-area area-padding\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
          <div class=\"section-headline text-center\">
            <h2>Faq Question</h2>
          </div>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-md-6 col-sm-6 col-xs-12\">
          <div class=\"faq-details\">
            <div class=\"panel-group\" id=\"accordion\">
              <!-- Panel Default -->
              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h4 class=\"check-title\">
\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" class=\"active\" data-parent=\"#accordion\" href=\"#check1\">
                                                <span class=\"acc-icons\"></span>Consectetur adipisicing elit.
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</h4>
                </div>
                <div id=\"check1\" class=\"panel-collapse collapse in\">
                  <div class=\"panel-body\">
                    <p>
                      Redug Lefes dolor sit amet, consectetur adipisicing elit. Aspernatur, tempore, commodi quas mollitia dolore magnam quidem repellat, culpa voluptates laboriosam maiores alias accusamus recusandae vero
                    </p>
                  </div>
                </div>
              </div>
              <!-- End Panel Default -->
              <!-- Panel Default -->
              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h4 class=\"check-title\">
\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#check2\">
                                                <span class=\"acc-icons\"></span> Dolore magnam quidem repellat.
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</h4>
                </div>
                <div id=\"check2\" class=\"panel-collapse collapse\">
                  <div class=\"panel-body\">
                    <p>
                      Redug Lefes dolor sit amet, consectetur adipisicing elit. Aspernatur, tempore, commodi quas mollitia dolore magnam quidem repellat, culpa voluptates laboriosam maiores alias accusamus recusandae vero aperiam sint nulla beatae eos.
                    </p>
                  </div>
                </div>
              </div>
              <!-- End Panel Default -->
              <!-- Panel Default -->
              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h4 class=\"check-title\">
\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#check3\">
                                                <span class=\"acc-icons\"></span>Redug Lefes dolor sit.
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</h4>
                </div>
                <div id=\"check3\" class=\"panel-collapse collapse \">
                  <div class=\"panel-body\">
                    <p>
                      Redug Lefes dolor sit amet, consectetur adipisicing elit. Aspernatur, tempore, commodi quas mollitia dolore magnam quidem repellat, culpa voluptates laboriosam maiores alias accusamus recusandae vero aperiam sint nulla beatae eos.
                    </p>
                  </div>
                </div>
              </div>
              <!-- End Panel Default -->
              <!-- Panel Default -->
              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h4 class=\"check-title\">
\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#check4\">
                                                <span class=\"acc-icons\"></span>Maiores alias accusamus
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</h4>
                </div>
                <div id=\"check4\" class=\"panel-collapse collapse\">
                  <div class=\"panel-body\">
                    <p>
                      Redug Lefes dolor sit amet, consectetur adipisicing elit. Aspernatur, tempore, commodi quas mollitia dolore magnam quidem repellat, culpa voluptates laboriosam maiores alias accusamus recusandae vero aperiam sint nulla beatae eos.
                    </p>
                  </div>
                </div>
              </div>
              <!-- End Panel Default -->
            </div>
          </div>
        </div>
        <div class=\"col-md-6 col-sm-6 col-xs-12\">
          <div class=\"tab-menu\">
            <!-- Nav tabs -->
            <ul class=\"nav nav-tabs\" role=\"tablist\">
              <li class=\"active\">
                <a href=\"#p-view-1\" role=\"tab\" data-toggle=\"tab\">Project</a>
              </li>
              <li>
                <a href=\"#p-view-2\" role=\"tab\" data-toggle=\"tab\">Planning</a>
              </li>
              <li>
                <a href=\"#p-view-3\" role=\"tab\" data-toggle=\"tab\">Success</a>
              </li>
            </ul>
          </div>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"p-view-1\">
              <div class=\"tab-inner\">
                <div class=\"event-content head-team\">
                  <h4>Project</h4>
                  <p>
                    Redug Lares dolor sit amet, consectetur adipisicing elit. Animi vero excepturi magnam ducimus adipisci voluptas, praesentium maxime necessitatibus in dolor dolores unde ab, libero quo. Aut, laborum sequi.
                  </p>
                  <p>
                    voluptas, praesentium maxime cum fugiat,magnam ducimus adipisci voluptas, praesentium architecto ducimus, doloribus fuga itaque omnis placeat.
                  </p>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"p-view-2\">
              <div class=\"tab-inner\">
                <div class=\"event-content head-team\">
                  <h4>Planning</h4>
                  <p>
                    voluptas, praesentium maxime cum fugiat,magnam ducimus adipisci voluptas, praesentium architecto ducimus, doloribus fuga itaque omnis.
                  </p>
                  <p>
                    Redug Lares dolor sit amet, consectetur adipisicing elit. Animi vero excepturi magnam ducimus adipisci voluptas, praesentium maxime necessitatibus in dolor dolores unde ab, libero quo. Aut.
                  </p>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"p-view-3\">
              <div class=\"tab-inner\">
                <div class=\"event-content head-team\">
                  <h4>Success</h4>
                  <p>
                    voluptas, praesentium maxime cum fugiat,magnam ducimus adipisci voluptas, praesentium architecto ducimus, doloribus fuga itaque omnis placeat.
                  </p>
                  <p>
                    voluptas, praesentium maxime cum fugiat,magnam ducimus adipisci voluptas, praesentium architecto ducimus, doloribus fuga itaque omnis.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end Row -->
    </div>
  </div>
  <!-- End Faq Area -->

  <!-- Start reviews Area -->
  <div class=\"reviews-area hidden-xs\">
    <div class=\"work-us\">
      <div class=\"work-left-text\">
        <a href=\"#\">
\t\t\t\t\t\t<img src=\"/sopay/public/assets/img/about/5.jpg\" alt=\"\">
\t\t\t\t\t</a>
      </div>
      <div class=\"work-right-text text-center\">
        <h2>working with us</h2>
        <h5>Become our patners .</h5>
        <a href=\"{{path('sopay_contact')}}\" class=\"ready-btn\">Contact us</a>
      </div>
    </div>
  </div>
  <!-- End reviews Area -->
  <!-- Start Testimonials -->
  <div class=\"testimonials-area\">
    <div class=\"testi-inner area-padding\">
      <div class=\"testi-overly\"></div>
      <div class=\"container \">
        <div class=\"row\">
          <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <!-- Start testimonials Start -->
            <div class=\"testimonial-content text-center\">
              <a class=\"quate\" href=\"#\"><i class=\"fa fa-quote-right\"></i></a>
              <!-- start testimonial carousel -->
              <div class=\"testimonial-carousel\">
                <div class=\"single-testi\">
                  <div class=\"testi-text\">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.<br>consectetur adipiscing elit. Sed pulvinar luctus est eget congue.
                    </p>
                    <h6>Boby</h6>
                  </div>
                </div>
                <!-- End single item -->
                <div class=\"single-testi\">
                  <div class=\"testi-text\">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.<br>consectetur adipiscing elit. Sed pulvinar luctus est eget congue.
                    </p>
                    <h6>Jhon</h6>
                  </div>
                </div>
                <!-- End single item -->
                <div class=\"single-testi\">
                  <div class=\"testi-text\">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.<br>consectetur adipiscing elit. Sed pulvinar luctus est eget congue.
                    </p>
                    <h6>Fleming</h6>
                  </div>
                </div>
                <!-- End single item -->
              </div>
            </div>
            <!-- End testimonials end -->
          </div>
          <!-- End Right Feature -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Testimonials -->
  <!-- Start Blog Area -->
  <div id=\"blog\" class=\"blog-area\">
    <div class=\"blog-inner area-padding\">
      <div class=\"blog-overly\"></div>
      <div class=\"container \">
        <div class=\"row\">
          <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"section-headline text-center\">
              <h2>Currencies Rate</h2>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <!-- Start Left Blog -->
          <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"d-flex\">
              <a href=\"#\"></a>
            </div>
            <!-- Start single blog -->
          </div>
          <!-- End Left Blog-->
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog -->
  <!-- Start Suscrive Area -->
  <div class=\"suscribe-area\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs=12\">
          <div class=\"suscribe-text text-center\">
            <h3>We Have The Best Market Rate</h3>
            <a class=\"sus-btn\" href=\"#\" data-target=\"#fees\" data-toggle=\"modal\">Our Fees</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Suscrive Area -->
    <!-- Start portfolio Area -->
    <div id=\"portfolio\" class=\"portfolio-area area-padding fix\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <div class=\"section-headline text-center\">
              <h2>Our Partners</h2>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <!-- Start Portfolio -page -->
          <div class=\"awesome-project-1 fix\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
              <div class=\"awesome-menu \">
                <ul class=\"project-menu\">
                  <li>
                    <a href=\"#\" class=\"active\" data-filter=\"*\">All</a>
                  </li>
                  <li>
                    <a href=\"#\" data-filter=\".development\">Development</a>
                  </li>
                  <li>
                    <a href=\"#\" data-filter=\".design\">Design</a>
                  </li>
                  <li>
                    <a href=\"#\" data-filter=\".photo\">Photoshop</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"awesome-project-content\">
            <!-- single-awesome-project start -->
            <div class=\"col-md-4 col-sm-4 col-xs-12 design development\">
              <div class=\"single-awesome-project\">
                <div class=\"awesome-img\">
                  <a href=\"#\"><img src=\"img/portfolio/1.jpg\" alt=\"\" /></a>
                  <div class=\"add-actions text-center\">
                    <div class=\"project-dec\">
                      <a class=\"venobox\" data-gall=\"myGallery\" href=\"img/portfolio/1.jpg\">
                        <h4>Business City</h4>
                        <span>Web Development</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- single-awesome-project end -->
            <!-- single-awesome-project start -->
            <div class=\"col-md-4 col-sm-4 col-xs-12 photo\">
              <div class=\"single-awesome-project\">
                <div class=\"awesome-img\">
                  <a href=\"#\"><img src=\"img/portfolio/2.jpg\" alt=\"\" /></a>
                  <div class=\"add-actions text-center\">
                    <div class=\"project-dec\">
                      <a class=\"venobox\" data-gall=\"myGallery\" href=\"img/portfolio/2.jpg\">
                        <h4>Blue Sea</h4>
                        <span>Photosho</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- single-awesome-project end -->
            <!-- single-awesome-project start -->
            <div class=\"col-md-4 col-sm-4 col-xs-12 design\">
              <div class=\"single-awesome-project\">
                <div class=\"awesome-img\">
                  <a href=\"#\"><img src=\"img/portfolio/3.jpg\" alt=\"\" /></a>
                  <div class=\"add-actions text-center\">
                    <div class=\"project-dec\">
                      <a class=\"venobox\" data-gall=\"myGallery\" href=\"img/portfolio/3.jpg\">
                        <h4>Beautiful Nature</h4>
                        <span>Web Design</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- single-awesome-project end -->
            <!-- single-awesome-project start -->
            <div class=\"col-md-4 col-sm-4 col-xs-12 photo development\">
              <div class=\"single-awesome-project\">
                <div class=\"awesome-img\">
                  <a href=\"#\"><img src=\"img/portfolio/4.jpg\" alt=\"\" /></a>
                  <div class=\"add-actions text-center\">
                    <div class=\"project-dec\">
                      <a class=\"venobox\" data-gall=\"myGallery\" href=\"img/portfolio/4.jpg\">
                        <h4>Creative Team</h4>
                        <span>Web design</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- single-awesome-project end -->
            <!-- single-awesome-project start -->
            <div class=\"col-md-4 col-sm-4 col-xs-12 development\">
              <div class=\"single-awesome-project\">
                <div class=\"awesome-img\">
                  <a href=\"#\"><img src=\"img/portfolio/5.jpg\" alt=\"\" /></a>
                  <div class=\"add-actions text-center text-center\">
                    <div class=\"project-dec\">
                      <a class=\"venobox\" data-gall=\"myGallery\" href=\"img/portfolio/5.jpg\">
                        <h4>Beautiful Flower</h4>
                        <span>Web Development</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- single-awesome-project end -->
            <!-- single-awesome-project start -->
            <div class=\"col-md-4 col-sm-4 col-xs-12 design photo\">
              <div class=\"single-awesome-project\">
                <div class=\"awesome-img\">
                  <a href=\"#\"><img src=\"img/portfolio/6.jpg\" alt=\"\" /></a>
                  <div class=\"add-actions text-center\">
                    <div class=\"project-dec\">
                      <a class=\"venobox\" data-gall=\"myGallery\" href=\"img/portfolio/6.jpg\">
                        <h4>Night Hill</h4>
                        <span>Photoshop</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- single-awesome-project end -->
          </div>
        </div>
      </div>
    </div>
    <!-- awesome-portfolio end -->
  {% endblock %}
  
  <!-- Start Footer bottom Area -->
    <footer>
      <div class=\"footer-area\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-4 col-sm-4 col-xs-12\">
              <div class=\"footer-content\">
                <div class=\"footer-head\">
                  <div class=\"footer-logo\">
                    <h2><span>So</span>Pay</h2>
                    
                  </div>
  
                  <p>Sopay offers businesses and financial institutions a suite of multi-channel digital solutions that facilitate the issuance and receipt of payments on a website or mobile application as well as the collection and disbursement of mass payments.</p>
                  <div class=\"footer-icons\">
                    <ul>
                      <li>
                        <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                      </li>
                      <li>
                        <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                      </li>
                      <li>
                        <a href=\"#\"><i class=\"fa fa-google\"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- end single footer -->
            <div class=\"col-md-4 col-sm-4 col-xs-12\">
              <div class=\"footer-content\">
                <div class=\"footer-head\">
                  <h4>Contacts</h4>
                  <p>
                    Feel free to contact us.
                  </p>
                  <div class=\"footer-contacts\">
                    <p><span>Tel:</span> +237 698 479 723</p>
                    <p><span>Email:</span> support@soleaspay.com</p>
                    <p><span>Working Hours:</span> 8am-6pm</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- end single footer -->
            <div class=\"col-md-4 col-sm-4 col-xs-12\">
              <div class=\"footer-content\">
                <div class=\"footer-head\">
                  <h4>Other Pages</h4>
                  
                  <div class=\"footer-contacts\">
                    <p>  <a  href=\"#\" >Privacy</a> </p>
                    <p>  <a  href=\"#\" >Terms</a> </p>
                    <p>  <a  href=\"#\" >Fees</a> </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- end single footer -->
          </div>
        </div>
      </div>
      <div class=\"footer-area-bottom\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"copyright text-center\">
                <p>
                  <strong>Copyright &copy; MYSOLEAS 2020</strong>. All Rights Reserved
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  
    <a href=\"#\" class=\"back-to-top\"><i class=\"fa fa-chevron-up\"></i></a>
  
    <!-- JavaScript Libraries -->
    <script src=\"/sopay/public/assets/lib/jquery/jquery.min.js\"></script>
    <script src=\"/sopay/public/assets/lib/bootstrap/js/bootstrap.min.js\"></script>
    <script src=\"/sopay/public/assets/lib/owlcarousel/owl.carousel.min.js\"></script>
    <script src=\"/sopay/public/assets/lib/venobox/venobox.min.js\"></script>
    <script src=\"/sopay/public/assets/lib/knob/jquery.knob.js\"></script>
    <script src=\"/sopay/public/assets/lib/wow/wow.min.js\"></script>
    <script src=\"/sopay/public/assets/lib/parallax/parallax.js\"></script>
    <script src=\"/sopay/public/assets/lib/easing/easing.min.js\"></script>
    <script src=\"/sopay/public/assets/lib/nivo-slider/js/jquery.nivo.slider.js\" type=\"text/javascript\"></script>
    <script src=\"/sopay/public/assets/lib/appear/jquery.appear.js\"></script>
    <script src=\"/sopay/public/assets/lib/isotope/isotope.pkgd.min.js\"></script>
  
    <!-- Contact Form JavaScript File -->
    <script src=\"/sopay/public/assets/contactform/contactform.js\"></script>
  
    <script src=\"/sopay/public/assets/js/main.js\"></script>
    {% block script %}
    {% endblock %}
  </body>
  
  </html>
  ", "home-new-bootstrap.html.twig", "/var/www/html/sopay/templates/home-new-bootstrap.html.twig");
    }
}
