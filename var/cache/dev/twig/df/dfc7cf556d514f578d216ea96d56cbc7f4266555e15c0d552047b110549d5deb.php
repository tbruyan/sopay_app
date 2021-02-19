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

/* layout.html.twig */
class __TwigTemplate_24d2d232d31ae622f8dc586b2ccd766f5e8ee619b9dd95eec13fb5015bb26ca3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
      <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src=\"https://www.googletagmanager.com/gtag/js?id=G-7LCRVFFPN0\"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-7LCRVFFPN0');
  </script>
  <meta charset=\"utf-8\">
  
  <title>";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <meta content=\"payment online, agregator, api, e-commerce payment, sopay, soleaspay, paypal to om, bitcoin to om \" name=\"keywords\">
  <meta content=\"Sopay is an aggregating payment platform which is the most complete in the Cameroonian digital ecosystem first, then African thereafter. it also allow you to instantly buy and sell paypal usd througth orange money or mtn mobile\" name=\"description\">
  <meta name=\"author\" content=\"MYSOLEAS\">
  
  <!-- Favicons -->
  <link href=\"/sopay/public/assets/img/logo.png\" rel=\"icon\">
  <link href=\"/sopay/public/assets/img/logo.png\" rel=\"apple-touch-icon\">

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
        // line 51
        $this->displayBlock('header', $context, $blocks);
        // line 53
        echo "</head>
<body data-spy=\"scroll\" data-target=\"#navbar-example\">

    <div id=\"preloader\"></div>
  
    <header>
      <!-- header-area start -->
      <div id=\"sticker\" class=\"header-area\" style=\"background-color: black;\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12 col-sm-12\">
  
              <!-- Navigation -->
              <nav class=\"navbar navbar-default\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                  <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\".bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                                          <span class=\"sr-only\">Toggle navigation</span>
                                          <span class=\"icon-bar\"></span>
                                          <span class=\"icon-bar\"></span>
                                          <span class=\"icon-bar\"></span>
                                      </button>
                  <!-- Brand -->
                  <a class=\"navbar-brand page-scroll sticky-logo\" href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_home");
        echo "#home\">
                    <img src=\"/sopay/public/assets/img/logo-bande.png\" style=\"max-width:100px; max-height:45px \" alt=\"soleas pay logo\" title=\"SoleasPay\">
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!--<img src=\"/sopay/public/assets/img/logo.jpg\" alt=\"\" title=\"\">-->
                                  </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse main-menu bs-example-navbar-collapse-1\" id=\"navbar-example\">
                  <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                      <a class=\"page-scroll\" href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_home");
        echo "#home\">Home</a>
                    </li>
                    <li>
                      <a class=\"page-scroll\" href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_home");
        echo "#about\">About</a>
                    </li>
                    <li>
                      <a class=\"page-scroll\" href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_home");
        echo "#services\">Services</a>
                    </li>
                    <!--<li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Drop Down<span class=\"caret\"></span></a>
                      <ul class=\"dropdown-menu\" role=\"menu\">
                        <li><a href=# >Drop Down 1</a></li>
                        <li><a href=# >Drop Down 2</a></li>
                      </ul> 
                    </li>-->
  
                    <li>
                      <a class=\"page-scroll\" href=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_home");
        echo "#Exchange\">Exchange</a>
                    </li>
                    <li>
                      <a class=\"page-scroll\" href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_home");
        echo "#portfolio\">Our Partner</a>
                    </li>
                    <li>
                      <a class=\"page-scroll\" href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_contact");
        echo "\">Contact</a>
                    </li>
                    ";
        // line 110
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 110), "get", [0 => "user"], "method", false, true, false, 110), "username", [], "any", true, true, false, 110)) {
            // line 111
            echo "                    <li>
                      <a class=\"page-scroll\" style=\"color: #0096ff;\" href=\"";
            // line 112
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_dashboard");
            echo "\">Dashboard</a>
                    </li>
                    ";
        } else {
            // line 115
            echo "                    <li>
                      <a class=\"page-scroll\" style=\"color:#0096ff;\" href=\"";
            // line 116
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_login");
            echo "\">Sign In</a>
                    </li>
                    <li>
                      <a class=\"page-scroll\" style=\"color: #ff7200;\" href=\"";
            // line 119
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_register");
            echo "\">Sign Up</a>
                    </li>
                    ";
        }
        // line 122
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
        // line 135
        $this->displayBlock('content', $context, $blocks);
        // line 137
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
                      <a href=\"https://www.facebook.com/mysoleas\"><i class=\"fa fa-facebook\"></i></a>
                    </li>
                    <li>
                      <a href=\"https://twitter.com/mysoleas\"><i class=\"fa fa-twitter\"></i></a>
                    </li>
                    <li>
                      <a href=\"https://www.instagram.com/mysoleas\"><i class=\"fa fa-instagram\"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
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
                  <p><span>Online support:</span> 24/7</p>
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
          <!-- end single footer --></div>
      </div>
    </div>
    <div class=\"footer-area-bottom\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"copyright text-center\">
              <p>
                <strong>Copyright &copy; <a href=\"https://mysoleas.com\">MYSOLEAS 2020</a></strong>. All Rights Reserved
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
  <script>
    function initFingerprintJS() {
      FingerprintJS.load().then(fp => {
        // The FingerprintJS agent is ready.
        // Get a visitor identifier when you'd like to.
        fp.get().then(result => {
          // This is the visitor identifier:
          //const visitorId = result.visitorId;
          localStorage.setItem('uuid', result.visitorId);
          //\$('#uuid').val(visitorId);
          //console.log(visitorId);
        });
      });
    }
  </script>
  <script
    async
    src=\"//cdn.jsdelivr.net/npm/@fingerprintjs/fingerprintjs@3/dist/fp.min.js\"
    onload=\"initFingerprintJS()\"
  ></script>
  ";
        // line 255
        $this->displayBlock('script', $context, $blocks);
        // line 257
        echo "</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Sopay, my partner digital wallet";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 51
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

    // line 135
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 136
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 255
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 256
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  429 => 256,  419 => 255,  409 => 136,  399 => 135,  381 => 51,  362 => 15,  349 => 257,  347 => 255,  227 => 137,  225 => 135,  210 => 122,  204 => 119,  198 => 116,  195 => 115,  189 => 112,  186 => 111,  184 => 110,  179 => 108,  173 => 105,  167 => 102,  154 => 92,  148 => 89,  142 => 86,  129 => 76,  104 => 53,  102 => 51,  63 => 15,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
      <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src=\"https://www.googletagmanager.com/gtag/js?id=G-7LCRVFFPN0\"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-7LCRVFFPN0');
  </script>
  <meta charset=\"utf-8\">
  
  <title>{% block title %}Sopay, my partner digital wallet{% endblock %}</title>
  
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <meta content=\"payment online, agregator, api, e-commerce payment, sopay, soleaspay, paypal to om, bitcoin to om \" name=\"keywords\">
  <meta content=\"Sopay is an aggregating payment platform which is the most complete in the Cameroonian digital ecosystem first, then African thereafter. it also allow you to instantly buy and sell paypal usd througth orange money or mtn mobile\" name=\"description\">
  <meta name=\"author\" content=\"MYSOLEAS\">
  
  <!-- Favicons -->
  <link href=\"/sopay/public/assets/img/logo.png\" rel=\"icon\">
  <link href=\"/sopay/public/assets/img/logo.png\" rel=\"apple-touch-icon\">

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
      <div id=\"sticker\" class=\"header-area\" style=\"background-color: black;\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12 col-sm-12\">
  
              <!-- Navigation -->
              <nav class=\"navbar navbar-default\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                  <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\".bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                                          <span class=\"sr-only\">Toggle navigation</span>
                                          <span class=\"icon-bar\"></span>
                                          <span class=\"icon-bar\"></span>
                                          <span class=\"icon-bar\"></span>
                                      </button>
                  <!-- Brand -->
                  <a class=\"navbar-brand page-scroll sticky-logo\" href=\"{{path('sopay_home')}}#home\">
                    <img src=\"/sopay/public/assets/img/logo-bande.png\" style=\"max-width:100px; max-height:45px \" alt=\"soleas pay logo\" title=\"SoleasPay\">
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!--<img src=\"/sopay/public/assets/img/logo.jpg\" alt=\"\" title=\"\">-->
                                  </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse main-menu bs-example-navbar-collapse-1\" id=\"navbar-example\">
                  <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                      <a class=\"page-scroll\" href=\"{{path('sopay_home')}}#home\">Home</a>
                    </li>
                    <li>
                      <a class=\"page-scroll\" href=\"{{path('sopay_home')}}#about\">About</a>
                    </li>
                    <li>
                      <a class=\"page-scroll\" href=\"{{path('sopay_home')}}#services\">Services</a>
                    </li>
                    <!--<li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Drop Down<span class=\"caret\"></span></a>
                      <ul class=\"dropdown-menu\" role=\"menu\">
                        <li><a href=# >Drop Down 1</a></li>
                        <li><a href=# >Drop Down 2</a></li>
                      </ul> 
                    </li>-->
  
                    <li>
                      <a class=\"page-scroll\" href=\"{{path('sopay_home')}}#Exchange\">Exchange</a>
                    </li>
                    <li>
                      <a class=\"page-scroll\" href=\"{{path('sopay_home')}}#portfolio\">Our Partner</a>
                    </li>
                    <li>
                      <a class=\"page-scroll\" href=\"{{path('sopay_contact')}}\">Contact</a>
                    </li>
                    {% if app.session.get('user').username is defined %}
                    <li>
                      <a class=\"page-scroll\" style=\"color: #0096ff;\" href=\"{{ path('sopay_dashboard') }}\">Dashboard</a>
                    </li>
                    {% else %}
                    <li>
                      <a class=\"page-scroll\" style=\"color:#0096ff;\" href=\"{{ path('sopay_login')}}\">Sign In</a>
                    </li>
                    <li>
                      <a class=\"page-scroll\" style=\"color: #ff7200;\" href=\"{{path('sopay_register')}}\">Sign Up</a>
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
                      <a href=\"https://www.facebook.com/mysoleas\"><i class=\"fa fa-facebook\"></i></a>
                    </li>
                    <li>
                      <a href=\"https://twitter.com/mysoleas\"><i class=\"fa fa-twitter\"></i></a>
                    </li>
                    <li>
                      <a href=\"https://www.instagram.com/mysoleas\"><i class=\"fa fa-instagram\"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
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
                  <p><span>Online support:</span> 24/7</p>
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
          <!-- end single footer --></div>
      </div>
    </div>
    <div class=\"footer-area-bottom\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"copyright text-center\">
              <p>
                <strong>Copyright &copy; <a href=\"https://mysoleas.com\">MYSOLEAS 2020</a></strong>. All Rights Reserved
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
  <script>
    function initFingerprintJS() {
      FingerprintJS.load().then(fp => {
        // The FingerprintJS agent is ready.
        // Get a visitor identifier when you'd like to.
        fp.get().then(result => {
          // This is the visitor identifier:
          //const visitorId = result.visitorId;
          localStorage.setItem('uuid', result.visitorId);
          //\$('#uuid').val(visitorId);
          //console.log(visitorId);
        });
      });
    }
  </script>
  <script
    async
    src=\"//cdn.jsdelivr.net/npm/@fingerprintjs/fingerprintjs@3/dist/fp.min.js\"
    onload=\"initFingerprintJS()\"
  ></script>
  {% block script %}
  {% endblock %}
</body>

</html>
", "layout.html.twig", "/var/www/html/sopay/templates/layout.html.twig");
    }
}
