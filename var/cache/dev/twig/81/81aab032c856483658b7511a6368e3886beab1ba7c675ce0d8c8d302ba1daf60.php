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

/* user/home.html.twig */
class __TwigTemplate_653926ab8a294b6def701e0aa9c3baba0aa2434bc0101ecac59a161967d1a6a2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/home.html.twig"));

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
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <meta content=\"payment online, agregator, api, e-commerce payment, sopay, soleaspay, paypal to om, bitcoin to om \" name=\"keywords\">
  <meta content=\"Sopay allow you to instantly buy and sell btc or paypal usd througth orange money or mtn mobile\" name=\"description\">
  <meta name=\"author\" content=\"MYSOLEAS\">
    
  <!-- Favicons -->
  <link href=\"/assets/img/logo.png\" rel=\"icon\">
  <link href=\"/assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900\" rel=\"stylesheet\">

  <!-- Bootstrap CSS File -->
  <link href=\"/assets/lib/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

  <!-- Libraries CSS Files -->
  <link href=\"/assets/lib/nivo-slider/css/nivo-slider.css\" rel=\"stylesheet\">
  <link href=\"/assets/lib/owlcarousel/owl.carousel.css\" rel=\"stylesheet\">
  <link href=\"/assets/lib/owlcarousel/owl.transitions.css\" rel=\"stylesheet\">
  <link href=\"/assets/lib/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">
  <link href=\"/assets/lib/animate/animate.min.css\" rel=\"stylesheet\">
  <link href=\"/assets/lib/venobox/venobox.css\" rel=\"stylesheet\">

  <!-- Nivo Slider Theme -->
  <link href=\"/assets/css/nivo-slider-theme.css\" rel=\"stylesheet\">

  <!-- Main Stylesheet File -->
  <link href=\"/assets/css/style.css\" rel=\"stylesheet\">

  <!-- Responsive Stylesheet File -->
  <link href=\"/assets/css/responsive.css\" rel=\"stylesheet\">

";
        // line 49
        $this->displayBlock('header', $context, $blocks);
        // line 51
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
                  <a class=\"navbar-brand page-scroll sticky-logo\" href=\"#\">
                    <!--<h1><span>So</span>Pay</h1>-->
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <img src=\"/assets/img/logo-bande.png\" style=\"max-width:100px; max-height:45px \" alt=\"soleas pay logo\" title=\"SoleasPay\">
                                  </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse main-menu bs-example-navbar-collapse-1 border\" id=\"navbar-example\">
                  <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"active\">
                      <a class=\"page-scroll\" href=\"#home\">Home</a>
                    </li>
                    <li>
                      <a class=\"page-scroll\" href=\"#about\">About</a>
                    </li>
                    <li>
                      <a class=\"page-scroll\" href=\"#services\">Services</a>
                    </li>
                    <li>
                      <a class=\"page-scroll\" href=\"#portfolio\">Our Partner</a>
                    </li>
  
                    <!--<li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Drop Down<span class=\"caret\"></span></a>
                      <ul class=\"dropdown-menu\" role=\"menu\">
                        <li><a href=# >Drop Down 1</a></li>
                        <li><a href=# >Drop Down 2</a></li>
                      </ul> 
                    </li>-->
  
                    <li>
                      <a class=\"page-scroll\" href=\"#blog\">Blog</a>
                    </li>
                    <li>
                      <a class=\"page-scroll\" href=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_contact");
        echo "\">Contact</a>
                    </li>
                    ";
        // line 109
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 109), "get", [0 => "user"], "method", false, true, false, 109), "username", [], "any", true, true, false, 109)) {
            // line 110
            echo "                    <li>
                      <a class=\"page-scroll\" style=\"color: #0096ff;\" href=\"";
            // line 111
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_dashboard");
            echo "\">Dashboard</a>
                    </li>
                    ";
        } else {
            // line 114
            echo "                    <li>
                      <a class=\"page-scroll\" style=\"color:#0096ff;\" href=\"";
            // line 115
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_login");
            echo "\">Login</a>
                    </li>
                    <li>
                      <a class=\"page-scroll\" style=\"color:#ff7200;\" href=\"";
            // line 118
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_register");
            echo "\">Sign In</a>
                    </li>
                    ";
        }
        // line 121
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
        // line 133
        $this->displayBlock('content', $context, $blocks);
        // line 1014
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
    <script src=\"/assets/lib/jquery/jquery.min.js\"></script>
    <script src=\"/assets/lib/bootstrap/js/bootstrap.min.js\"></script>
    <script src=\"/assets/lib/owlcarousel/owl.carousel.min.js\"></script>
    <script src=\"/assets/lib/venobox/venobox.min.js\"></script>
    <script src=\"/assets/lib/knob/jquery.knob.js\"></script>
    <script src=\"/assets/lib/wow/wow.min.js\"></script>
    <script src=\"/assets/lib/parallax/parallax.js\"></script>
    <script src=\"/assets/lib/easing/easing.min.js\"></script>
    <script src=\"/assets/lib/nivo-slider/js/jquery.nivo.slider.js\" type=\"text/javascript\"></script>
    <script src=\"/assets/lib/appear/jquery.appear.js\"></script>
    <script src=\"/assets/lib/isotope/isotope.pkgd.min.js\"></script>
  
    <!-- Contact Form JavaScript File -->
    <script src=\"/assets/contactform/contactform.js\"></script>
  
    <script src=\"/assets/js/main.js\"></script>
    ";
        // line 1114
        $this->displayBlock('script', $context, $blocks);
        // line 1116
        echo "    <script>
      \$(document).ready(function(){
      //contact convert api for cureency rate
          \$.ajax({
             url: \"https://soleaspay.com/convert\",
             type: \"GET\",
             dataType: \"JSON\",
             data: {amount: 1,
                    devise: 'XAF',
                    out: 'ALL'},
             success:function(data)
              {
                \$('#xaf_eur').text(data.data.EUR);
                \$('#xaf_usd').text(data.data.USD);
                \$('#xaf_xpi').text(data.data.XPI);
                \$('#xaf_btc').text(data.data.BTC);
                console.log(data.data.EUR);
              }
          });
          \$.ajax({
            url: \"https://soleaspay.com/convert\",
            type: \"GET\",
            dataType: \"JSON\",
            data: {amount: 1,
                   devise: 'USD',
                   out: 'ALL'},
            success:function(data)
             {
               \$('#usd_eur').text(data.data.EUR);
               \$('#usd_xaf').text(data.data.XAF);
               \$('#usd_xpi').text(data.data.XPI);
               \$('#usd_btc').text(data.data.BTC);
             }
         });
         \$.ajax({
          url: \"https://soleaspay.com/convert\",
          type: \"GET\",
          dataType: \"JSON\",
          data: {amount: 1,
                 devise: 'EUR',
                 out: 'ALL'},
          success:function(data)
           {
             \$('#eur_usd').text(data.data.USD);
             \$('#eur_xaf').text(data.data.XAF);
             \$('#eur_xpi').text(data.data.XPI);
             \$('#eur_btc').text(data.data.BTC);
           }
       });
       \$.ajax({
        url: \"https://soleaspay.com/convert\",
        type: \"GET\",
        dataType: \"JSON\",
        data: {amount: 1,
               devise: 'BTC',
               out: 'ALL'},
        success:function(data)
         {
           \$('#btc_eur').text(data.data.EUR);
           \$('#btc_xaf').text(data.data.XAF);
           \$('#btc_xpi').text(data.data.XPI);
           \$('#btc_usd').text(data.data.USD);
         }
     });
     \$.ajax({
      url: \"https://soleaspay.com/convert\",
      type: \"GET\",
      dataType: \"JSON\",
      data: {amount: 1,
             devise: 'XPI'},
      success:function(data)
       {
         \$('#xpi_eur').text(data.data.EUR);
         \$('#xpi_xaf').text(data.data.XAF);
         \$('#xpi_usd').text(data.data.USD);
         \$('#xpi_btc').text(data.data.BTC);
       }
   });
        });
    </script>
  </body>
  
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

        echo "SoPay your wallet partner for life";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 49
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

    // line 133
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 134
        echo "  <!-- Start Slider Area -->
  <div id=\"home\" class=\"slider-area\">
    <div class=\"bend niceties preview-2\">
      <div id=\"ensign-nivoslider\" class=\"slides\">
        <img src=\"/assets/img/slider/slider1.jpg\" alt=\"\" title=\"#slider-direction-1\" />
        <img src=\"/assets/img/slider/slider2.jpg\" alt=\"\" title=\"#slider-direction-2\" />
        <img src=\"/assets/img/slider/slider3.jpg\" alt=\"\" title=\"#slider-direction-3\" />
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
        // line 159
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 159), "get", [0 => "user"], "method", false, true, false, 159), "username", [], "any", true, true, false, 159)) {
            // line 160
            echo "                     <a class=\"ready-btn right-btn page-scroll\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_dashboard");
            echo "\">Dashboard</a>
                   ";
        } else {
            // line 162
            echo "                  <a class=\"ready-btn right-btn page-scroll\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_login");
            echo "\">Login</a>
                  <a class=\"ready-btn page-scroll\" href=\"";
            // line 163
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_register");
            echo "\">Sign In</a>
                  ";
        }
        // line 165
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
        // line 188
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 188), "get", [0 => "user"], "method", false, true, false, 188), "username", [], "any", true, true, false, 188)) {
            // line 189
            echo "                      <a class=\"ready-btn right-btn page-scroll\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_dashboard");
            echo "\">Dashboard</a>
                    ";
        } else {
            // line 191
            echo "                  <a class=\"ready-btn right-btn page-scroll\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_login");
            echo "\">Login</a>
                  <a class=\"ready-btn page-scroll\" href=\"";
            // line 192
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_register");
            echo "\">Sign In</a>
                  ";
        }
        // line 194
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
        // line 217
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 217), "get", [0 => "user"], "method", false, true, false, 217), "username", [], "any", true, true, false, 217)) {
            // line 218
            echo "                      <a class=\"ready-btn right-btn page-scroll\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_dashboard");
            echo "\">Dashboard</a>
                    ";
        } else {
            // line 220
            echo "                  <a class=\"ready-btn right-btn page-scroll\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_login");
            echo "\">Login</a>
                  <a class=\"ready-btn page-scroll\" href=\"";
            // line 221
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_register");
            echo "\">Sign In</a>
                  ";
        }
        // line 223
        echo "                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Slider Area -->
  <div class=\"visible-xs col-md-12 col-sm-12 col-xs-12\">
    <div class=\"section-headline text-center\">
        ";
        // line 234
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 234), "get", [0 => "user"], "method", false, true, false, 234), "username", [], "any", true, true, false, 234)) {
            // line 235
            echo "            <a class=\"ready-btn right-btn page-scroll\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_dashboard");
            echo "\">Dashboard</a>
          ";
        } else {
            // line 237
            echo "        <a class=\"ready-btn right-btn page-scroll\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_login");
            echo "\">Login</a>
        <a class=\"ready-btn page-scroll\" style=\"background-color:#ff7200;\"  href=\"";
            // line 238
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_register");
            echo "\">Sign In</a>
        ";
        }
        // line 240
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
\t\t\t\t\t\t\t\t  <img src=\"/assets/img/btcbg.jpeg\" alt=\"\">
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
\t\t\t\t\t\t\t\t  <img src=\"/assets/img/undraw_posting_photo.svg\" alt=\"\">
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
                    <img src=\"/assets/img/check_Pay.svg\" alt=\"\">
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
                    <img src=\"/assets/img/rewards.svg\" alt=\"\">
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
                    <img src=\"/assets/img/receiveP.svg\" alt=\"\">
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
\t\t\t\t\t\t<img src=\"/assets/img/about/5.jpg\" alt=\"\">
\t\t\t\t\t</a>
      </div>
      <div class=\"work-right-text text-center\">
        <h2>working with us</h2>
        <h5>Become our patners .</h5>
        <a href=\"";
        // line 731
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
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover text-center\">
              <caption class=\"text-center bg-primary\" style=\"font-size: x-large;\">Sopay Live Exchange Rates</caption>
              <tr class=\"text-center\">
                <th>Currencies/values</th>
                <th><img style=\"max-height: 36px;\" src=\"/assets/img/xaf.svg\"> XAF</th>
                <th><img style=\"max-height: 36px;\" src=\"/assets/img/usd.svg\"> USD</th>
                <th><img style=\"max-height: 36px;\" src=\"/assets/img/eur.svg\"> EUR</th>
                <th><img style=\"max-height: 36px;\" src=\"/assets/img/xbt.svg\"> BTC</th>
                <th><img style=\"max-height: 36px;\" src=\"/assets/img/logo.png\">XPI</th>
            </tr>
            <tr>
              <td class=\"danger\">1 XAF</td>
              <td class=\"warning\"> 1 </td>
              <td><span id=\"xaf_usd\">USD</span></td>
              <td><span id=\"xaf_eur\">EUR</span></td>
              <td><span id=\"xaf_btc\">BTC</span></td>
              <td><span id=\"xaf_xpi\">XPI</span></td>
              </tr>
              <tr>
                <td class=\"info\">1 USD</td>
                <td><span id=\"usd_xaf\">XAF</span></td>
                <td class=\"warning\">1</td>
                <td><span id=\"usd_eur\">EUR></span></td>
                <td><span id=\"usd_btc\">BTC</span></td>
                <td><span id=\"usd_xpi\">XPI</span></td>
              </tr>
              <tr>
                <td class=\"warning\">1 EUR</td>
                <td><span id=\"eur_xaf\">XAF</span></td>
                <td><span id=\"eur_usd\">USD<span</td>
                <td class=\"warning\">1</td>
                <td><span id=\"eur_btc\">BTC</span></td>
                <td><span id=\"eur_xpi\">XPI<span</td>
            </tr>
              <tr>
                <td class=\"success\">1 BTC</td>
                <td><span id=\"btc_xaf\">XAF</span></td>
                <td><span id=\"btc_usd\">USD</span></td>
                <td><span id=\"btc_eur\">EUR</span></td>
                <td class=\"warning\">1</td>
                <td><span id=\"btc_xpi\">XPI</span></td>
            </tr>
              <tr>
                <td class=\"active\">1 XPI</td>
                <td><span id=\"xpi_xaf\">XAF</span></td>
                <td><span id=\"xpi_usd\">USD</span></td>
                <td><span id=\"xpi_eur\">EUR</span></td>
                <td><span id=\"xpi_btc\">BTC</span></td>
                <td class=\"warning\">1</td>
            </tr>
            </table>
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

    // line 1114
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 1115
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1409 => 1115,  1399 => 1114,  1106 => 731,  613 => 240,  608 => 238,  603 => 237,  597 => 235,  595 => 234,  582 => 223,  577 => 221,  572 => 220,  566 => 218,  564 => 217,  539 => 194,  534 => 192,  529 => 191,  523 => 189,  521 => 188,  496 => 165,  491 => 163,  486 => 162,  480 => 160,  478 => 159,  451 => 134,  441 => 133,  423 => 49,  404 => 15,  311 => 1116,  309 => 1114,  207 => 1014,  205 => 133,  191 => 121,  185 => 118,  179 => 115,  176 => 114,  170 => 111,  167 => 110,  165 => 109,  160 => 107,  102 => 51,  100 => 49,  63 => 15,  47 => 1,);
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
  
  <title>{% block title %}SoPay your wallet partner for life{% endblock %}</title>
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <meta content=\"payment online, agregator, api, e-commerce payment, sopay, soleaspay, paypal to om, bitcoin to om \" name=\"keywords\">
  <meta content=\"Sopay allow you to instantly buy and sell btc or paypal usd througth orange money or mtn mobile\" name=\"description\">
  <meta name=\"author\" content=\"MYSOLEAS\">
    
  <!-- Favicons -->
  <link href=\"/assets/img/logo.png\" rel=\"icon\">
  <link href=\"/assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900\" rel=\"stylesheet\">

  <!-- Bootstrap CSS File -->
  <link href=\"/assets/lib/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

  <!-- Libraries CSS Files -->
  <link href=\"/assets/lib/nivo-slider/css/nivo-slider.css\" rel=\"stylesheet\">
  <link href=\"/assets/lib/owlcarousel/owl.carousel.css\" rel=\"stylesheet\">
  <link href=\"/assets/lib/owlcarousel/owl.transitions.css\" rel=\"stylesheet\">
  <link href=\"/assets/lib/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">
  <link href=\"/assets/lib/animate/animate.min.css\" rel=\"stylesheet\">
  <link href=\"/assets/lib/venobox/venobox.css\" rel=\"stylesheet\">

  <!-- Nivo Slider Theme -->
  <link href=\"/assets/css/nivo-slider-theme.css\" rel=\"stylesheet\">

  <!-- Main Stylesheet File -->
  <link href=\"/assets/css/style.css\" rel=\"stylesheet\">

  <!-- Responsive Stylesheet File -->
  <link href=\"/assets/css/responsive.css\" rel=\"stylesheet\">

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
                  <a class=\"navbar-brand page-scroll sticky-logo\" href=\"#\">
                    <!--<h1><span>So</span>Pay</h1>-->
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <img src=\"/assets/img/logo-bande.png\" style=\"max-width:100px; max-height:45px \" alt=\"soleas pay logo\" title=\"SoleasPay\">
                                  </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse main-menu bs-example-navbar-collapse-1 border\" id=\"navbar-example\">
                  <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"active\">
                      <a class=\"page-scroll\" href=\"#home\">Home</a>
                    </li>
                    <li>
                      <a class=\"page-scroll\" href=\"#about\">About</a>
                    </li>
                    <li>
                      <a class=\"page-scroll\" href=\"#services\">Services</a>
                    </li>
                    <li>
                      <a class=\"page-scroll\" href=\"#portfolio\">Our Partner</a>
                    </li>
  
                    <!--<li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Drop Down<span class=\"caret\"></span></a>
                      <ul class=\"dropdown-menu\" role=\"menu\">
                        <li><a href=# >Drop Down 1</a></li>
                        <li><a href=# >Drop Down 2</a></li>
                      </ul> 
                    </li>-->
  
                    <li>
                      <a class=\"page-scroll\" href=\"#blog\">Blog</a>
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
                      <a class=\"page-scroll\" style=\"color:#0096ff;\" href=\"{{ path('sopay_login')}}\">Login</a>
                    </li>
                    <li>
                      <a class=\"page-scroll\" style=\"color:#ff7200;\" href=\"{{path('sopay_register')}}\">Sign In</a>
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
        <img src=\"/assets/img/slider/slider1.jpg\" alt=\"\" title=\"#slider-direction-1\" />
        <img src=\"/assets/img/slider/slider2.jpg\" alt=\"\" title=\"#slider-direction-2\" />
        <img src=\"/assets/img/slider/slider3.jpg\" alt=\"\" title=\"#slider-direction-3\" />
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
  <div class=\"visible-xs col-md-12 col-sm-12 col-xs-12\">
    <div class=\"section-headline text-center\">
        {% if app.session.get('user').username is defined %}
            <a class=\"ready-btn right-btn page-scroll\" href=\"{{ path('sopay_dashboard') }}\">Dashboard</a>
          {% else %}
        <a class=\"ready-btn right-btn page-scroll\" href=\"{{path('sopay_login')}}\">Login</a>
        <a class=\"ready-btn page-scroll\" style=\"background-color:#ff7200;\"  href=\"{{path('sopay_register')}}\">Sign In</a>
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
\t\t\t\t\t\t\t\t  <img src=\"/assets/img/btcbg.jpeg\" alt=\"\">
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
\t\t\t\t\t\t\t\t  <img src=\"/assets/img/undraw_posting_photo.svg\" alt=\"\">
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
                    <img src=\"/assets/img/check_Pay.svg\" alt=\"\">
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
                    <img src=\"/assets/img/rewards.svg\" alt=\"\">
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
                    <img src=\"/assets/img/receiveP.svg\" alt=\"\">
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
\t\t\t\t\t\t<img src=\"/assets/img/about/5.jpg\" alt=\"\">
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
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover text-center\">
              <caption class=\"text-center bg-primary\" style=\"font-size: x-large;\">Sopay Live Exchange Rates</caption>
              <tr class=\"text-center\">
                <th>Currencies/values</th>
                <th><img style=\"max-height: 36px;\" src=\"/assets/img/xaf.svg\"> XAF</th>
                <th><img style=\"max-height: 36px;\" src=\"/assets/img/usd.svg\"> USD</th>
                <th><img style=\"max-height: 36px;\" src=\"/assets/img/eur.svg\"> EUR</th>
                <th><img style=\"max-height: 36px;\" src=\"/assets/img/xbt.svg\"> BTC</th>
                <th><img style=\"max-height: 36px;\" src=\"/assets/img/logo.png\">XPI</th>
            </tr>
            <tr>
              <td class=\"danger\">1 XAF</td>
              <td class=\"warning\"> 1 </td>
              <td><span id=\"xaf_usd\">USD</span></td>
              <td><span id=\"xaf_eur\">EUR</span></td>
              <td><span id=\"xaf_btc\">BTC</span></td>
              <td><span id=\"xaf_xpi\">XPI</span></td>
              </tr>
              <tr>
                <td class=\"info\">1 USD</td>
                <td><span id=\"usd_xaf\">XAF</span></td>
                <td class=\"warning\">1</td>
                <td><span id=\"usd_eur\">EUR></span></td>
                <td><span id=\"usd_btc\">BTC</span></td>
                <td><span id=\"usd_xpi\">XPI</span></td>
              </tr>
              <tr>
                <td class=\"warning\">1 EUR</td>
                <td><span id=\"eur_xaf\">XAF</span></td>
                <td><span id=\"eur_usd\">USD<span</td>
                <td class=\"warning\">1</td>
                <td><span id=\"eur_btc\">BTC</span></td>
                <td><span id=\"eur_xpi\">XPI<span</td>
            </tr>
              <tr>
                <td class=\"success\">1 BTC</td>
                <td><span id=\"btc_xaf\">XAF</span></td>
                <td><span id=\"btc_usd\">USD</span></td>
                <td><span id=\"btc_eur\">EUR</span></td>
                <td class=\"warning\">1</td>
                <td><span id=\"btc_xpi\">XPI</span></td>
            </tr>
              <tr>
                <td class=\"active\">1 XPI</td>
                <td><span id=\"xpi_xaf\">XAF</span></td>
                <td><span id=\"xpi_usd\">USD</span></td>
                <td><span id=\"xpi_eur\">EUR</span></td>
                <td><span id=\"xpi_btc\">BTC</span></td>
                <td class=\"warning\">1</td>
            </tr>
            </table>
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
    <script src=\"/assets/lib/jquery/jquery.min.js\"></script>
    <script src=\"/assets/lib/bootstrap/js/bootstrap.min.js\"></script>
    <script src=\"/assets/lib/owlcarousel/owl.carousel.min.js\"></script>
    <script src=\"/assets/lib/venobox/venobox.min.js\"></script>
    <script src=\"/assets/lib/knob/jquery.knob.js\"></script>
    <script src=\"/assets/lib/wow/wow.min.js\"></script>
    <script src=\"/assets/lib/parallax/parallax.js\"></script>
    <script src=\"/assets/lib/easing/easing.min.js\"></script>
    <script src=\"/assets/lib/nivo-slider/js/jquery.nivo.slider.js\" type=\"text/javascript\"></script>
    <script src=\"/assets/lib/appear/jquery.appear.js\"></script>
    <script src=\"/assets/lib/isotope/isotope.pkgd.min.js\"></script>
  
    <!-- Contact Form JavaScript File -->
    <script src=\"/assets/contactform/contactform.js\"></script>
  
    <script src=\"/assets/js/main.js\"></script>
    {% block script %}
    {% endblock %}
    <script>
      \$(document).ready(function(){
      //contact convert api for cureency rate
          \$.ajax({
             url: \"https://soleaspay.com/convert\",
             type: \"GET\",
             dataType: \"JSON\",
             data: {amount: 1,
                    devise: 'XAF',
                    out: 'ALL'},
             success:function(data)
              {
                \$('#xaf_eur').text(data.data.EUR);
                \$('#xaf_usd').text(data.data.USD);
                \$('#xaf_xpi').text(data.data.XPI);
                \$('#xaf_btc').text(data.data.BTC);
                console.log(data.data.EUR);
              }
          });
          \$.ajax({
            url: \"https://soleaspay.com/convert\",
            type: \"GET\",
            dataType: \"JSON\",
            data: {amount: 1,
                   devise: 'USD',
                   out: 'ALL'},
            success:function(data)
             {
               \$('#usd_eur').text(data.data.EUR);
               \$('#usd_xaf').text(data.data.XAF);
               \$('#usd_xpi').text(data.data.XPI);
               \$('#usd_btc').text(data.data.BTC);
             }
         });
         \$.ajax({
          url: \"https://soleaspay.com/convert\",
          type: \"GET\",
          dataType: \"JSON\",
          data: {amount: 1,
                 devise: 'EUR',
                 out: 'ALL'},
          success:function(data)
           {
             \$('#eur_usd').text(data.data.USD);
             \$('#eur_xaf').text(data.data.XAF);
             \$('#eur_xpi').text(data.data.XPI);
             \$('#eur_btc').text(data.data.BTC);
           }
       });
       \$.ajax({
        url: \"https://soleaspay.com/convert\",
        type: \"GET\",
        dataType: \"JSON\",
        data: {amount: 1,
               devise: 'BTC',
               out: 'ALL'},
        success:function(data)
         {
           \$('#btc_eur').text(data.data.EUR);
           \$('#btc_xaf').text(data.data.XAF);
           \$('#btc_xpi').text(data.data.XPI);
           \$('#btc_usd').text(data.data.USD);
         }
     });
     \$.ajax({
      url: \"https://soleaspay.com/convert\",
      type: \"GET\",
      dataType: \"JSON\",
      data: {amount: 1,
             devise: 'XPI'},
      success:function(data)
       {
         \$('#xpi_eur').text(data.data.EUR);
         \$('#xpi_xaf').text(data.data.XAF);
         \$('#xpi_usd').text(data.data.USD);
         \$('#xpi_btc').text(data.data.BTC);
       }
   });
        });
    </script>
  </body>
  
  </html>
  ", "user/home.html.twig", "/var/www/html/sopay/templates/user/home.html.twig");
    }
}
