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

/* home.html.twig */
class __TwigTemplate_391dba4a9486de8269efcb523024242eaa116580bf8a4b223e4add7d8074539f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

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
                    <img src=\"/sopay/public/assets/img/logo-bande.png\" style=\"max-width:100px; max-height:45px \" alt=\"soleas pay logo\" title=\"SoleasPay\">
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
                    <!--<li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Drop Down<span class=\"caret\"></span></a>
                      <ul class=\"dropdown-menu\" role=\"menu\">
                        <li><a href=# >Drop Down 1</a></li>
                        <li><a href=# >Drop Down 2</a></li>
                      </ul> 
                    </li>-->
  
                    <li>
                      <a class=\"page-scroll\" href=\"#Exchange\">Exchange</a>
                    </li>
                    <li>
                      <a class=\"page-scroll\" href=\"#portfolio\">Our Partner</a>
                    </li>
                    <li>
                      <a class=\"page-scroll\" href=\"";
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_contact");
        echo "\">Contact</a>
                    </li>
                    ";
        // line 108
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 108), "get", [0 => "user"], "method", false, true, false, 108), "username", [], "any", true, true, false, 108)) {
            // line 109
            echo "                    <li>
                      <a class=\"page-scroll\" style=\"color: #0096ff;\" href=\"";
            // line 110
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_dashboard");
            echo "\">Dashboard</a>
                    </li>
                    ";
        } else {
            // line 113
            echo "                    <li>
                      <a class=\"page-scroll\" style=\"color:#0096ff;\" href=\"";
            // line 114
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_login");
            echo "\">Sign In</a>
                    </li>
                    <li>
                      <a class=\"page-scroll\" style=\"color:#ff7200;\" href=\"";
            // line 117
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_register");
            echo "\">Sign Up</a>
                    </li>
                    ";
        }
        // line 120
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
        // line 132
        $this->displayBlock('content', $context, $blocks);
        // line 1116
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
                    <p>  <a  href=\"#\" >Terms & Conditions</a> </p>
                    <p>  <a  href=\"#\" >Our Fees</a> </p>
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
    ";
        // line 1216
        $this->displayBlock('script', $context, $blocks);
        // line 1218
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
                \$('#xaf_eth').text(data.data.ETH);
                \$('#xaf_xrp').text(data.data.XRP);
                \$('#xaf_ltc').text(data.data.LTC);
                \$('#xaf_doge').text(data.data.DOGE);
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
               \$('#usd_eth').text(data.data.ETH);
               \$('#usd_xrp').text(data.data.XRP);
               \$('#usd_ltc').text(data.data.LTC);
               \$('#usd_doge').text(data.data.DOGE);
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
              \$('#eur_eth').text(data.data.ETH);
              \$('#eur_xrp').text(data.data.XRP);
              \$('#eur_ltc').text(data.data.LTC);
              \$('#eur_doge').text(data.data.DOGE);
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
            \$('#btc_eth').text(data.data.ETH);
            \$('#btc_xrp').text(data.data.XRP);
            \$('#btc_ltc').text(data.data.LTC);
            \$('#btc_doge').text(data.data.DOGE);
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
          \$('#xpi_eth').text(data.data.ETH);
          \$('#xpi_xrp').text(data.data.XRP);
          \$('#xpi_ltc').text(data.data.LTC);
          \$('#xpi_doge').text(data.data.DOGE);
        }
      });
      \$.ajax({
        url: \"https://soleaspay.com/convert\",
        type: \"GET\",
        dataType: \"JSON\",
        data: {amount: 1,
              devise: 'ETH'},
        success:function(data)
        {
          \$('#eth_eur').text(data.data.EUR);
          \$('#eth_xaf').text(data.data.XAF);
          \$('#eth_usd').text(data.data.USD);
          \$('#eth_btc').text(data.data.BTC);
          \$('#eth_xpi').text(data.data.XPI);
          \$('#eth_xrp').text(data.data.XRP);
          \$('#eth_ltc').text(data.data.LTC);
          \$('#eth_doge').text(data.data.DOGE);
        }
      });
      \$.ajax({
        url: \"https://soleaspay.com/convert\",
        type: \"GET\",
        dataType: \"JSON\",
        data: {amount: 1,
              devise: 'XRP'},
        success:function(data)
        {
          \$('#xrp_eur').text(data.data.EUR);
          \$('#xrp_xaf').text(data.data.XAF);
          \$('#xrp_usd').text(data.data.USD);
          \$('#xrp_btc').text(data.data.BTC);
          \$('#xrp_eth').text(data.data.ETH);
          \$('#xrp_xpi').text(data.data.XPI);
          \$('#xrp_ltc').text(data.data.LTC);
          \$('#xrp_doge').text(data.data.DOGE);
        }
      });
      \$.ajax({
        url: \"https://soleaspay.com/convert\",
        type: \"GET\",
        dataType: \"JSON\",
        data: {amount: 1,
              devise: 'LTC'},
        success:function(data)
        {
          \$('#ltc_eur').text(data.data.EUR);
          \$('#ltc_xaf').text(data.data.XAF);
          \$('#ltc_usd').text(data.data.USD);
          \$('#ltc_btc').text(data.data.BTC);
          \$('#ltc_eth').text(data.data.ETH);
          \$('#ltc_xrp').text(data.data.XRP);
          \$('#ltc_xpi').text(data.data.XPI);
          \$('#ltc_doge').text(data.data.DOGE);
        }
      });
      \$.ajax({
        url: \"https://soleaspay.com/convert\",
        type: \"GET\",
        dataType: \"JSON\",
        data: {amount: 1,
              devise: 'DOGE'},
        success:function(data)
        {
          \$('#doge_eur').text(data.data.EUR);
          \$('#doge_xaf').text(data.data.XAF);
          \$('#doge_usd').text(data.data.USD);
          \$('#doge_btc').text(data.data.BTC);
          \$('#doge_eth').text(data.data.ETH);
          \$('#doge_xrp').text(data.data.XRP);
          \$('#doge_ltc').text(data.data.LTC);
          \$('#doge_xpi').text(data.data.XPI);
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

        echo "Sopay, my partner digital wallet";
        
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

    // line 132
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 133
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
                  <h2 class=\"title1\">Reliable and Flexible Aggregator </h2>
                </div>
                <!-- layer 2 -->
                <div class=\"layer-1-2 wow slideInUp\" data-wow-duration=\"4s\" data-wow-delay=\".2s\">
                  <h1 class=\"title2\">We're providing the best technology for better financial purpose</h1>
                </div>
                <!-- layer 3 -->
                <div class=\"layer-1-3 hidden-xs wow slideInUp\" data-wow-duration=\"4s\" data-wow-delay=\".4s\">
                  ";
        // line 158
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 158), "get", [0 => "user"], "method", false, true, false, 158), "username", [], "any", true, true, false, 158)) {
            // line 159
            echo "                     <a class=\"ready-btn right-btn page-scroll\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_dashboard");
            echo "\">Dashboard</a>
                   ";
        } else {
            // line 161
            echo "                  <a class=\"ready-btn right-btn page-scroll\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_login");
            echo "\">Sign In</a>
                  <a class=\"ready-btn page-scroll\" href=\"";
            // line 162
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_register");
            echo "\">Sign Up</a>
                  ";
        }
        // line 164
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
                  <h2 class=\"title1\">Your money closer to you</h2>
                </div>
                <!-- layer 2 -->
                <div class=\"layer-1-2 wow slideInUp\" data-wow-duration=\"4s\" data-wow-delay=\".2s\">
                  <h1 class=\"title2\">No more barrier between you and your money</h1>
                </div>
                <!-- layer 3 -->
                <div class=\"layer-1-3 hidden-xs wow slideInUp\" data-wow-duration=\"4s\" data-wow-delay=\".4s\">
                  ";
        // line 187
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 187), "get", [0 => "user"], "method", false, true, false, 187), "username", [], "any", true, true, false, 187)) {
            // line 188
            echo "                      <a class=\"ready-btn right-btn page-scroll\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_dashboard");
            echo "\">Dashboard</a>
                    ";
        } else {
            // line 190
            echo "                  <a class=\"ready-btn right-btn page-scroll\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_login");
            echo "\">Sign In</a>
                  <a class=\"ready-btn page-scroll\" href=\"";
            // line 191
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_register");
            echo "\">Sign Up</a>
                  ";
        }
        // line 193
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
                  <h2 class=\"title1\">An account for all your transactions </h2>
                </div>
                <!-- layer 2 -->
                <div class=\"layer-1-2 wow slideInUp\" data-wow-duration=\"2s\" data-wow-delay=\".1s\">
                  <h1 class=\"title2\">Helping Business Security  & Peace of Mind for Your Family</h1>
                </div>
                <!-- layer 3 -->
                <div class=\"layer-1-3 hidden-xs wow slideInUp\" data-wow-duration=\"2s\" data-wow-delay=\".2s\">
                  ";
        // line 216
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 216), "get", [0 => "user"], "method", false, true, false, 216), "username", [], "any", true, true, false, 216)) {
            // line 217
            echo "                      <a class=\"ready-btn right-btn page-scroll\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_dashboard");
            echo "\">Dashboard</a>
                    ";
        } else {
            // line 219
            echo "                  <a class=\"ready-btn right-btn page-scroll\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_login");
            echo "\">Sign In</a>
                  <a class=\"ready-btn page-scroll\" href=\"";
            // line 220
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_register");
            echo "\">Sign Up</a>
                  ";
        }
        // line 222
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
        // line 233
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 233), "get", [0 => "user"], "method", false, true, false, 233), "username", [], "any", true, true, false, 233)) {
            // line 234
            echo "            <a class=\"ready-btn right-btn page-scroll\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_dashboard");
            echo "\">Dashboard</a>
          ";
        } else {
            // line 236
            echo "        <a class=\"ready-btn right-btn page-scroll\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_login");
            echo "\">Sign In</a>
        <a class=\"ready-btn page-scroll\" style=\"background-color:#ff7200;\"  href=\"";
            // line 237
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_register");
            echo "\">Sign Up</a>
        ";
        }
        // line 239
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
                  <i class=\"fa fa-check\"></i> Buy Services/Customer 
                </li>
                <li>
                  <i class=\"fa fa-check\"></i> International Opening
                </li>
                <li>
                  <i class=\"fa fa-check\"></i> Accept New Digital Currencies
                </li>
              </ul><br />
              <a href=\"#\">
                <h4 class=\"sec-head\">Digital Wallet</h4>
              </a>
              <p>
                At SoPay, we are working to centralize various payment and currency systems in order to offer user, the possibility of managing all of them via his only SoPay wallet
              </p>
              
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
                  <i class=\"fa fa-check\"></i> transactions live history
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
                    whether you are an online store, a web merchant or a simple consumer, you can send and receive payments instantly on SoPay.
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
                  <h4>exChange</h4>
                  <p>
                    Swap money between your personal account <br />
                    Move your money from one of your personal accounts to another quickly with the lowest exchange rates on the market.
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
                    Transfert between SoPay account <br />
                    Free transfer money from your account to another SoPay account with security parameters defined by you (direct or subject to a condition).
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
                    On SoPay <br />
                    Instantly credit your uba prepayer card from your sopay account.
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
                    By transact on SoPay, you can earn rewards for all operation that require fees. You also earn rewards from all transactions of your referal SoPay accounts. 
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
                    SoPay allows you to accept international payments through legal channels (Visa, Paypal, etc.) to facilitate the sale of your services online and promote the reputation of your product internationally. 
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
                    For personalized solutions, integrate easily and quickly (just once) all payment methods supported by sopay in your project.
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
                    Benefit from a real-time history of all transactions carried out from or to your account.
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
                    A technical team is available in real time to assist you step by step 24/7.
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
                  <input type=\"text\" class=\"knob\" value=\"0\" data-rel=\"95\" data-linecap=\"round\" data-width=\"150\" data-bgcolor=\"#fff\" data-fgcolor=\"#ff7200\" data-thickness=\".20\" data-readonly=\"true\" disabled>
                  <h3 class=\"progress-h4\">Security</h3>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
            <!-- single-skill start -->
            <div class=\"col-xs-12 col-sm-3 col-md-3 text-center\">
              <div class=\"single-skill\">
                <div class=\"progress-circular\">
                  <input type=\"text\" class=\"knob\" value=\"0\" data-rel=\"90\" data-linecap=\"round\" data-width=\"150\" data-bgcolor=\"#fff\" data-fgcolor=\"#ff7200\" data-thickness=\".20\" data-readonly=\"true\" disabled>
                  <h3 class=\"progress-h4\">Low Cost</h3>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
            <!-- single-skill start -->
            <div class=\"col-xs-12 col-sm-3 col-md-3 text-center\">
              <div class=\"single-skill\">
                <div class=\"progress-circular\">
                  <input type=\"text\" class=\"knob\" value=\"0\" data-rel=\"80\" data-linecap=\"round\" data-width=\"150\" data-bgcolor=\"#fff\" data-fgcolor=\"#ff7200\" data-thickness=\".20\" data-readonly=\"true\" disabled>
                  <h3 class=\"progress-h4\">Transactions speed</h3>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
            <!-- single-skill start -->
            <div class=\"col-xs-12 col-sm-3 col-md-3 text-center\">
              <div class=\"single-skill\">
                <div class=\"progress-circular\">
                  <input type=\"text\" class=\"knob\" value=\"0\" data-rel=\"55\" data-linecap=\"round\" data-width=\"150\" data-bgcolor=\"#fff\" data-fgcolor=\"#ff7200\" data-thickness=\".20\" data-readonly=\"true\" disabled>
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
                                                <span class=\"acc-icons\"></span>Who can use SoPay ?.
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</h4>
                </div>
                <div id=\"check1\" class=\"panel-collapse collapse in\">
                  <div class=\"panel-body\">
                    <p>
                      Sopay can be used both by a third party or a company to facilitate its exchanges.
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
                                                <span class=\"acc-icons\"></span> Are my personal information secure when I carry out an operation on Sopay ?
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</h4>
                </div>
                <div id=\"check2\" class=\"panel-collapse collapse\">
                  <div class=\"panel-body\">
                    <p>
                      all information collected by soapy is kept on our secure servers which benefit from a \$ 100,000 guarantee in case of violations. and all exchanges are end-to-end encrypted.
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
                                                <span class=\"acc-icons\"></span>how long does a transaction take ?
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</h4>
                </div>
                <div id=\"check3\" class=\"panel-collapse collapse \">
                  <div class=\"panel-body\">
                    <p>
                      all transactions are instantaneous, any time and independent of our will there may be a latency time not exceeding 15 min.
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
                                                <span class=\"acc-icons\"></span>how to earn rewards on sopay
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</h4>
                </div>
                <div id=\"check4\" class=\"panel-collapse collapse\">
                  <div class=\"panel-body\">
                    <p>
                      our sponsorship program is very simple, once you have shared your personal link, you will benefit from 50% of the commissions for each transaction carried out by any user registered through it.
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
                <a href=\"#p-view-1\" role=\"tab\" data-toggle=\"tab\">Sign Up</a>
              </li>
              <li>
                <a href=\"#p-view-2\" role=\"tab\" data-toggle=\"tab\">Sign In</a>
              </li>
              <li>
                <a href=\"#p-view-3\" role=\"tab\" data-toggle=\"tab\">Verify Account</a>
              </li>
              <li>
                <a href=\"#p-view-4\" role=\"tab\" data-toggle=\"tab\">Transact</a>
              </li>
            </ul>
          </div>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"p-view-1\">
              <div class=\"tab-inner\">
                <div class=\"event-content head-team\">
                  <h4>Sign Up</h4>
                  <p>
                    first, to use the Sopay platform, you must create your account by following the following process :
                  </p>
                  <ul>
                    <li>read our full privacy policy</li>
                    <li>read the terms of use</li>
                    <li>read our anti-money laundering policy</li>
                    <li>complete the registration form at: <a href=\"";
        // line 696
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_register");
        echo "\"> Create new account</a></li>
                  </ul>
                  </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"p-view-2\">
              <div class=\"tab-inner\">
                <div class=\"event-content head-team\">
                  <h4>Sign In</h4>
                  <p>
                    after registering, you can log into your sopay account
                  </p>
                  <p>
                  just follow this link to access your Dashboard <a href=\"";
        // line 709
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_login");
        echo "\">Login to SoPay</a>
                  </p>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"p-view-3\">
              <div class=\"tab-inner\">
                <div class=\"event-content head-team\">
                  <h4>Verify Account</h4>
                  <p>
                    the verification process is done in 4 steps
                  </p>
                  <ul>
                    <li>verification of the email address provided during registration</li>
                    <li>verification of the telephone number linked to your account</li>
                    <li>updating all profile information</li>
                    <li>uploading of supporting documents (identity document and invoice for a service)</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"p-view-4\">
              <div class=\"tab-inner\">
                <div class=\"event-content head-team\">
                  <h4>Transact</h4>
                  <p>
                    Congratulations.</p>
                  <p>
                    once your account is verified, you can carry out all transactions offered by sopay without restriction
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
        // line 761
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
                      I integrated the SoPay solution on my e-commerce site and my customers are satisfied with the variety of payment methods it offers.<br> thank you SoPay.
                    </p>
                    <h6>Stephane (webmaster)</h6>
                  </div>
                </div>
                <!-- End single item -->
                <div class=\"single-testi\">
                  <div class=\"testi-text\">
                    <p>
                      I use bitcoin for international operations, with SoPay I can now take possession of my money anywhere and in the wallet of my choice.
                    </p>
                    <h6>Nolan</h6>
                  </div>
                </div>
                <!-- End single item -->
                <div class=\"single-testi\">
                  <div class=\"testi-text\">
                    <p>
                      After multiple searches on the web in order to be able to credit my paypal account, I came across SoPay and in a while I was able to do it via my orange money account and that with a really good cost.
                    </p>
                    <h6>Lydie </h6>
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
  <div id=\"Exchange\" class=\"blog-area\">
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
            <tr>
                <th class=\"text-center\">Currencies/values</th>
                <th class=\"text-center\"><img style=\"max-height: 36px;\" src=\"/sopay/public/assets/img/xaf.svg\"> XAF</th>
                <th class=\"text-center\"><img style=\"max-height: 36px;\" src=\"/sopay/public/assets/img/usd.svg\"> USD</th>
                <th class=\"text-center\"><img style=\"max-height: 36px;\" src=\"/sopay/public/assets/img/eur.svg\"> EUR</th>
                <th class=\"text-center\"><img style=\"max-height: 36px;\" src=\"/sopay/public/assets/img/xbt.svg\"> BTC</th>
                <th class=\"text-center\"><img style=\"max-height: 36px;\" src=\"/sopay/public/assets/img/xbt.svg\"> ETH</th>
                <th class=\"text-center\"><img style=\"max-height: 36px;\" src=\"/sopay/public/assets/img/xbt.svg\"> XRP</th>
                <th class=\"text-center\"><img style=\"max-height: 36px;\" src=\"/sopay/public/assets/img/xbt.svg\"> LTC</th>
                <th class=\"text-center\"><img style=\"max-height: 36px;\" src=\"/sopay/public/assets/img/xbt.svg\"> DOGE</th>
                <th class=\"text-center\"><img style=\"max-height: 36px;\" src=\"/sopay/public/assets/img/logo.png\">XPI</th>
            </tr>
            <tr>
              <td class=\"danger\">1 XAF</td>
              <td class=\"warning\"> 1 </td>
              <td><span id=\"xaf_usd\">USD</span></td>
              <td><span id=\"xaf_eur\">EUR</span></td>
              <td><span id=\"xaf_btc\">BTC</span></td>
              <td><span id=\"xaf_eth\">ETH</span></td>
              <td><span id=\"xaf_xrp\">XRP</span></td>
              <td><span id=\"xaf_ltc\">LTC</span></td>
              <td><span id=\"xaf_doge\">DOGE</span></td>
              <td><span id=\"xaf_xpi\">XPI</span></td>
              </tr>
              <tr>
                <td class=\"info\">1 USD</td>
                <td><span id=\"usd_xaf\">XAF</span></td>
                <td class=\"warning\">1</td>
                <td><span id=\"usd_eur\">EUR></span></td>
                <td><span id=\"usd_btc\">BTC</span></td>
                <td><span id=\"usd_eth\">ETH</span></td>
                <td><span id=\"usd_xrp\">XRP</span></td>
                <td><span id=\"usd_ltc\">LTC</span></td>
                <td><span id=\"usd_doge\">DOGE</span></td>
                <td><span id=\"usd_xpi\">XPI</span></td>
              </tr>
              <tr>
                <td class=\"warning\">1 EUR</td>
                <td><span id=\"eur_xaf\">XAF</span></td>
                <td><span id=\"eur_usd\">USD</span></td>
                <td class=\"warning\">1</td>
                <td><span id=\"eur_btc\">BTC</span></td>
                <td><span id=\"eur_eth\">ETH</span></td>
                <td><span id=\"eur_xrp\">XRP</span></td>
                <td><span id=\"eur_ltc\">LTC</span></td>
                <td><span id=\"eur_doge\">DOGE</span></td>
                <td><span id=\"eur_xpi\">XPI<span</td>
            </tr>
              <tr>
                <td class=\"success\">1 BTC</td>
                <td><span id=\"btc_xaf\">XAF</span></td>
                <td><span id=\"btc_usd\">USD</span></td>
                <td><span id=\"btc_eur\">EUR</span></td>
                <td class=\"warning\">1</td>
                <td><span id=\"btc_eth\">ETH</span></td>
                <td><span id=\"btc_xrp\">XRP</span></td>
                <td><span id=\"btc_ltc\">LTC</span></td>
                <td><span id=\"btc_doge\">DOGE</span></td>
                <td><span id=\"btc_xpi\">XPI</span></td>
            </tr>
            <tr>
              <td class=\"active\">1 ETH</td>
              <td><span id=\"eth_xaf\">XAF</span></td>
              <td><span id=\"eth_usd\">USD</span></td>
              <td><span id=\"eth_eur\">EUR</span></td>
              <td><span id=\"eth_btc\">BTC</span></td>
              <td class=\"warning\">1</td>
              <td><span id=\"eth_xrp\">XRP</span></td>
              <td><span id=\"eth_ltc\">LTC</span></td>
              <td><span id=\"eth_doge\">DOGE</span></td>
              <td><span id=\"eth_xpi\">XPI</span></td>
            </tr>
            <tr>
              <td class=\"danger\">1 XRP</td>
              <td><span id=\"xrp_xaf\">XAF</span></td>
              <td><span id=\"xrp_usd\">USD</span></td>
              <td><span id=\"xrp_eur\">EUR</span></td>
              <td><span id=\"xrp_btc\">BTC</span></td>
              <td><span id=\"xrp_eth\">ETH</span></td>
              <td class=\"warning\">1</td>
              <td><span id=\"xrp_ltc\">LTC</span></td>
              <td><span id=\"xrp_doge\">DOGE</span></td>
              <td><span id=\"xrp_xpi\">XPI</span></td>
            </tr>
            <tr>
              <td class=\"info\">1 LTC</td>
              <td><span id=\"ltc_xaf\">XAF</span></td>
              <td><span id=\"ltc_usd\">USD</span></td>
              <td><span id=\"ltc_eur\">EUR</span></td>
              <td><span id=\"ltc_btc\">BTC</span></td>
              <td><span id=\"ltc_eth\">ETH</span></td>
              <td><span id=\"ltc_xrp\">XRP</span></td>
              <td class=\"warning\">1</td>
              <td><span id=\"ltc_doge\">DOGE</span></td>
              <td><span id=\"ltc_xpi\">XPI</span></td>
            </tr>
            <tr>
              <td class=\"warning\">1 DOGE</td>
              <td><span id=\"doge_xaf\">XAF</span></td>
              <td><span id=\"doge_usd\">USD</span></td>
              <td><span id=\"doge_eur\">EUR</span></td>
              <td><span id=\"doge_btc\">BTC</span></td>
              <td><span id=\"doge_eth\">ETH</span></td>
              <td><span id=\"doge_xrp\">XRP</span></td>
              <td><span id=\"doge_ltc\">LTC</span></td>
              <td class=\"warning\">1</td>
              <td><span id=\"doge_xpi\">XPI</td>
            </tr>
              <tr>
                <td class=\"success\">1 XPI</td>
                <td><span id=\"xpi_xaf\">XAF</span></td>
                <td><span id=\"xpi_usd\">USD</span></td>
                <td><span id=\"xpi_eur\">EUR</span></td>
                <td><span id=\"xpi_btc\">BTC</span></td>
                <td><span id=\"xpi_eth\">ETH</span></td>
                <td><span id=\"xpi_xrp\">XRP</span></td>
                <td><span id=\"xpi_ltc\">LTC</span></td>
                <td><span id=\"xpi_doge\">DOGE</span></td>
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
                    <a href=\"#\" data-filter=\".financial\">Financial institutions</a>
                  </li>
                  <li>
                    <a href=\"#\" data-filter=\".customer\">Customer</a>
                  </li>
                  <li>
                    <a href=\"#\" data-filter=\".other\">Other</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"awesome-project-content text-center\">
            <!-- single-awesome-project start -->
            <div class=\"col-md-4 col-sm-4 col-xs-12 financial\">
              <div class=\"single-awesome-project\">
                <div class=\"awesome-img\">
                  <a href=\"#\" style=\"height: 300px; \"><img src=\"/sopay/public/assets/img/portfolio/om.png\" alt=\"\" /></a>
                  <div class=\"add-actions text-center\">
                    <div class=\"project-dec\">
                      <a class=\"venobox\" data-gall=\"myGallery\" href=\"/sopay/public/assets/img/portfolio/om.png\">
                        <h4>Orange Money</h4>
                        <span>Orange Cameroun</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- single-awesome-project end -->
            <!-- single-awesome-project start -->
            <div class=\"col-md-4 col-sm-4 col-xs-12 financial\">
              <div class=\"single-awesome-project\">
                <div class=\"awesome-img\">
                  <a href=\"#\" style=\"height: 300px;\"><img src=\"/sopay/public/assets/img/portfolio/paypal.png\" alt=\"\" /></a>
                  <div class=\"add-actions text-center\">
                    <div class=\"project-dec\">
                      <a class=\"venobox\" data-gall=\"myGallery\" href=\"/sopay/public/assets/img/portfolio/paypal.png\">
                        <h4>PayPal</h4>
                        <span>PayPal Business</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- single-awesome-project end -->
            <!-- single-awesome-project start -->
            <div class=\"col-md-4 col-sm-4 col-xs-12 financial\">
              <div class=\"single-awesome-project\">
                <div class=\"awesome-img\">
                  <a href=\"#\" style=\"height: 300px;\"><img src=\"/sopay/public/assets/img/portfolio/momo.jpg\" alt=\"\" /></a>
                  <div class=\"add-actions text-center\">
                    <div class=\"project-dec\">
                      <a class=\"venobox\" data-gall=\"myGallery\" href=\"/sopay/public/assets/img/portfolio/momo.jpg\">
                        <h4>Mtn Mobile Money</h4>
                        <span>MTN Cameroun</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- single-awesome-project end -->
            <!-- single-awesome-project start -->
            <div class=\"col-md-4 col-sm-4 col-xs-12 financial\">
              <div class=\"single-awesome-project\">
                <div class=\"awesome-img\">
                  <a href=\"#\" style=\"height: 300px;\"><img src=\"/sopay/public/assets/img/portfolio/eu.png\" alt=\"\" /></a>
                  <div class=\"add-actions text-center\">
                    <div class=\"project-dec\">
                      <a class=\"venobox\" data-gall=\"myGallery\" href=\"/sopay/public/assets/img/portfolio/eu.png\">
                        <h4>Express union mobile money</h4>
                        <span>Express Union SA</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- single-awesome-project end -->
            <!-- single-awesome-project start -->
            <div class=\"col-md-4 col-sm-4 col-xs-12 financial\">
              <div class=\"single-awesome-project\">
                <div class=\"awesome-img\">
                  <a href=\"#\" style=\"height: 300px;\"><img src=\"/sopay/public/assets/img/portfolio/cca.png\" alt=\"\" /></a>
                  <div class=\"add-actions text-center text-center\">
                    <div class=\"project-dec\">
                      <a class=\"venobox\" data-gall=\"myGallery\" href=\"/sopay/public/assets/img/portfolio/cca.png\">
                        <h4>CCA Bank</h4>
                        <span>CCA Cameroun</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- single-awesome-project end -->
            <!-- single-awesome-project start -->
            <div class=\"col-md-4 col-sm-4 col-xs-12 financial\">
              <div class=\"single-awesome-project\">
                <div class=\"awesome-img\">
                  <a href=\"#\" style=\"height: 300px;\"><img src=\"/sopay/public/assets/img/portfolio/bitcoin.png\" alt=\"\" /></a>
                  <div class=\"add-actions text-center\">
                    <div class=\"project-dec\">
                      <a class=\"venobox\" data-gall=\"myGallery\" href=\"/sopay/public/assets/img/portfolio/bitcoin.png\">
                        <h4>Bitcoin</h4>
                        <span>Bitcoin</span>
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

    // line 1216
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 1217
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1608 => 1217,  1598 => 1216,  1233 => 761,  1178 => 709,  1162 => 696,  703 => 239,  698 => 237,  693 => 236,  687 => 234,  685 => 233,  672 => 222,  667 => 220,  662 => 219,  656 => 217,  654 => 216,  629 => 193,  624 => 191,  619 => 190,  613 => 188,  611 => 187,  586 => 164,  581 => 162,  576 => 161,  570 => 159,  568 => 158,  541 => 133,  531 => 132,  513 => 49,  494 => 15,  310 => 1218,  308 => 1216,  206 => 1116,  204 => 132,  190 => 120,  184 => 117,  178 => 114,  175 => 113,  169 => 110,  166 => 109,  164 => 108,  159 => 106,  102 => 51,  100 => 49,  63 => 15,  47 => 1,);
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
                    <img src=\"/sopay/public/assets/img/logo-bande.png\" style=\"max-width:100px; max-height:45px \" alt=\"soleas pay logo\" title=\"SoleasPay\">
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
                    <!--<li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Drop Down<span class=\"caret\"></span></a>
                      <ul class=\"dropdown-menu\" role=\"menu\">
                        <li><a href=# >Drop Down 1</a></li>
                        <li><a href=# >Drop Down 2</a></li>
                      </ul> 
                    </li>-->
  
                    <li>
                      <a class=\"page-scroll\" href=\"#Exchange\">Exchange</a>
                    </li>
                    <li>
                      <a class=\"page-scroll\" href=\"#portfolio\">Our Partner</a>
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
                      <a class=\"page-scroll\" style=\"color:#ff7200;\" href=\"{{path('sopay_register')}}\">Sign Up</a>
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
                  <h2 class=\"title1\">Reliable and Flexible Aggregator </h2>
                </div>
                <!-- layer 2 -->
                <div class=\"layer-1-2 wow slideInUp\" data-wow-duration=\"4s\" data-wow-delay=\".2s\">
                  <h1 class=\"title2\">We're providing the best technology for better financial purpose</h1>
                </div>
                <!-- layer 3 -->
                <div class=\"layer-1-3 hidden-xs wow slideInUp\" data-wow-duration=\"4s\" data-wow-delay=\".4s\">
                  {% if app.session.get('user').username is defined %}
                     <a class=\"ready-btn right-btn page-scroll\" href=\"{{ path('sopay_dashboard') }}\">Dashboard</a>
                   {% else %}
                  <a class=\"ready-btn right-btn page-scroll\" href=\"{{path('sopay_login')}}\">Sign In</a>
                  <a class=\"ready-btn page-scroll\" href=\"{{path('sopay_register')}}\">Sign Up</a>
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
                  <h2 class=\"title1\">Your money closer to you</h2>
                </div>
                <!-- layer 2 -->
                <div class=\"layer-1-2 wow slideInUp\" data-wow-duration=\"4s\" data-wow-delay=\".2s\">
                  <h1 class=\"title2\">No more barrier between you and your money</h1>
                </div>
                <!-- layer 3 -->
                <div class=\"layer-1-3 hidden-xs wow slideInUp\" data-wow-duration=\"4s\" data-wow-delay=\".4s\">
                  {% if app.session.get('user').username is defined %}
                      <a class=\"ready-btn right-btn page-scroll\" href=\"{{ path('sopay_dashboard') }}\">Dashboard</a>
                    {% else %}
                  <a class=\"ready-btn right-btn page-scroll\" href=\"{{path('sopay_login')}}\">Sign In</a>
                  <a class=\"ready-btn page-scroll\" href=\"{{path('sopay_register')}}\">Sign Up</a>
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
                  <h2 class=\"title1\">An account for all your transactions </h2>
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
                  <a class=\"ready-btn right-btn page-scroll\" href=\"{{path('sopay_login')}}\">Sign In</a>
                  <a class=\"ready-btn page-scroll\" href=\"{{path('sopay_register')}}\">Sign Up</a>
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
        <a class=\"ready-btn right-btn page-scroll\" href=\"{{path('sopay_login')}}\">Sign In</a>
        <a class=\"ready-btn page-scroll\" style=\"background-color:#ff7200;\"  href=\"{{path('sopay_register')}}\">Sign Up</a>
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
                  <i class=\"fa fa-check\"></i> Buy Services/Customer 
                </li>
                <li>
                  <i class=\"fa fa-check\"></i> International Opening
                </li>
                <li>
                  <i class=\"fa fa-check\"></i> Accept New Digital Currencies
                </li>
              </ul><br />
              <a href=\"#\">
                <h4 class=\"sec-head\">Digital Wallet</h4>
              </a>
              <p>
                At SoPay, we are working to centralize various payment and currency systems in order to offer user, the possibility of managing all of them via his only SoPay wallet
              </p>
              
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
                  <i class=\"fa fa-check\"></i> transactions live history
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
                    whether you are an online store, a web merchant or a simple consumer, you can send and receive payments instantly on SoPay.
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
                  <h4>exChange</h4>
                  <p>
                    Swap money between your personal account <br />
                    Move your money from one of your personal accounts to another quickly with the lowest exchange rates on the market.
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
                    Transfert between SoPay account <br />
                    Free transfer money from your account to another SoPay account with security parameters defined by you (direct or subject to a condition).
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
                    On SoPay <br />
                    Instantly credit your uba prepayer card from your sopay account.
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
                    By transact on SoPay, you can earn rewards for all operation that require fees. You also earn rewards from all transactions of your referal SoPay accounts. 
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
                    SoPay allows you to accept international payments through legal channels (Visa, Paypal, etc.) to facilitate the sale of your services online and promote the reputation of your product internationally. 
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
                    For personalized solutions, integrate easily and quickly (just once) all payment methods supported by sopay in your project.
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
                    Benefit from a real-time history of all transactions carried out from or to your account.
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
                    A technical team is available in real time to assist you step by step 24/7.
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
                  <input type=\"text\" class=\"knob\" value=\"0\" data-rel=\"95\" data-linecap=\"round\" data-width=\"150\" data-bgcolor=\"#fff\" data-fgcolor=\"#ff7200\" data-thickness=\".20\" data-readonly=\"true\" disabled>
                  <h3 class=\"progress-h4\">Security</h3>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
            <!-- single-skill start -->
            <div class=\"col-xs-12 col-sm-3 col-md-3 text-center\">
              <div class=\"single-skill\">
                <div class=\"progress-circular\">
                  <input type=\"text\" class=\"knob\" value=\"0\" data-rel=\"90\" data-linecap=\"round\" data-width=\"150\" data-bgcolor=\"#fff\" data-fgcolor=\"#ff7200\" data-thickness=\".20\" data-readonly=\"true\" disabled>
                  <h3 class=\"progress-h4\">Low Cost</h3>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
            <!-- single-skill start -->
            <div class=\"col-xs-12 col-sm-3 col-md-3 text-center\">
              <div class=\"single-skill\">
                <div class=\"progress-circular\">
                  <input type=\"text\" class=\"knob\" value=\"0\" data-rel=\"80\" data-linecap=\"round\" data-width=\"150\" data-bgcolor=\"#fff\" data-fgcolor=\"#ff7200\" data-thickness=\".20\" data-readonly=\"true\" disabled>
                  <h3 class=\"progress-h4\">Transactions speed</h3>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
            <!-- single-skill start -->
            <div class=\"col-xs-12 col-sm-3 col-md-3 text-center\">
              <div class=\"single-skill\">
                <div class=\"progress-circular\">
                  <input type=\"text\" class=\"knob\" value=\"0\" data-rel=\"55\" data-linecap=\"round\" data-width=\"150\" data-bgcolor=\"#fff\" data-fgcolor=\"#ff7200\" data-thickness=\".20\" data-readonly=\"true\" disabled>
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
                                                <span class=\"acc-icons\"></span>Who can use SoPay ?.
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</h4>
                </div>
                <div id=\"check1\" class=\"panel-collapse collapse in\">
                  <div class=\"panel-body\">
                    <p>
                      Sopay can be used both by a third party or a company to facilitate its exchanges.
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
                                                <span class=\"acc-icons\"></span> Are my personal information secure when I carry out an operation on Sopay ?
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</h4>
                </div>
                <div id=\"check2\" class=\"panel-collapse collapse\">
                  <div class=\"panel-body\">
                    <p>
                      all information collected by soapy is kept on our secure servers which benefit from a \$ 100,000 guarantee in case of violations. and all exchanges are end-to-end encrypted.
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
                                                <span class=\"acc-icons\"></span>how long does a transaction take ?
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</h4>
                </div>
                <div id=\"check3\" class=\"panel-collapse collapse \">
                  <div class=\"panel-body\">
                    <p>
                      all transactions are instantaneous, any time and independent of our will there may be a latency time not exceeding 15 min.
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
                                                <span class=\"acc-icons\"></span>how to earn rewards on sopay
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</h4>
                </div>
                <div id=\"check4\" class=\"panel-collapse collapse\">
                  <div class=\"panel-body\">
                    <p>
                      our sponsorship program is very simple, once you have shared your personal link, you will benefit from 50% of the commissions for each transaction carried out by any user registered through it.
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
                <a href=\"#p-view-1\" role=\"tab\" data-toggle=\"tab\">Sign Up</a>
              </li>
              <li>
                <a href=\"#p-view-2\" role=\"tab\" data-toggle=\"tab\">Sign In</a>
              </li>
              <li>
                <a href=\"#p-view-3\" role=\"tab\" data-toggle=\"tab\">Verify Account</a>
              </li>
              <li>
                <a href=\"#p-view-4\" role=\"tab\" data-toggle=\"tab\">Transact</a>
              </li>
            </ul>
          </div>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"p-view-1\">
              <div class=\"tab-inner\">
                <div class=\"event-content head-team\">
                  <h4>Sign Up</h4>
                  <p>
                    first, to use the Sopay platform, you must create your account by following the following process :
                  </p>
                  <ul>
                    <li>read our full privacy policy</li>
                    <li>read the terms of use</li>
                    <li>read our anti-money laundering policy</li>
                    <li>complete the registration form at: <a href=\"{{path('sopay_register')}}\"> Create new account</a></li>
                  </ul>
                  </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"p-view-2\">
              <div class=\"tab-inner\">
                <div class=\"event-content head-team\">
                  <h4>Sign In</h4>
                  <p>
                    after registering, you can log into your sopay account
                  </p>
                  <p>
                  just follow this link to access your Dashboard <a href=\"{{path('sopay_login')}}\">Login to SoPay</a>
                  </p>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"p-view-3\">
              <div class=\"tab-inner\">
                <div class=\"event-content head-team\">
                  <h4>Verify Account</h4>
                  <p>
                    the verification process is done in 4 steps
                  </p>
                  <ul>
                    <li>verification of the email address provided during registration</li>
                    <li>verification of the telephone number linked to your account</li>
                    <li>updating all profile information</li>
                    <li>uploading of supporting documents (identity document and invoice for a service)</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"p-view-4\">
              <div class=\"tab-inner\">
                <div class=\"event-content head-team\">
                  <h4>Transact</h4>
                  <p>
                    Congratulations.</p>
                  <p>
                    once your account is verified, you can carry out all transactions offered by sopay without restriction
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
                      I integrated the SoPay solution on my e-commerce site and my customers are satisfied with the variety of payment methods it offers.<br> thank you SoPay.
                    </p>
                    <h6>Stephane (webmaster)</h6>
                  </div>
                </div>
                <!-- End single item -->
                <div class=\"single-testi\">
                  <div class=\"testi-text\">
                    <p>
                      I use bitcoin for international operations, with SoPay I can now take possession of my money anywhere and in the wallet of my choice.
                    </p>
                    <h6>Nolan</h6>
                  </div>
                </div>
                <!-- End single item -->
                <div class=\"single-testi\">
                  <div class=\"testi-text\">
                    <p>
                      After multiple searches on the web in order to be able to credit my paypal account, I came across SoPay and in a while I was able to do it via my orange money account and that with a really good cost.
                    </p>
                    <h6>Lydie </h6>
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
  <div id=\"Exchange\" class=\"blog-area\">
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
            <tr>
                <th class=\"text-center\">Currencies/values</th>
                <th class=\"text-center\"><img style=\"max-height: 36px;\" src=\"/sopay/public/assets/img/xaf.svg\"> XAF</th>
                <th class=\"text-center\"><img style=\"max-height: 36px;\" src=\"/sopay/public/assets/img/usd.svg\"> USD</th>
                <th class=\"text-center\"><img style=\"max-height: 36px;\" src=\"/sopay/public/assets/img/eur.svg\"> EUR</th>
                <th class=\"text-center\"><img style=\"max-height: 36px;\" src=\"/sopay/public/assets/img/xbt.svg\"> BTC</th>
                <th class=\"text-center\"><img style=\"max-height: 36px;\" src=\"/sopay/public/assets/img/xbt.svg\"> ETH</th>
                <th class=\"text-center\"><img style=\"max-height: 36px;\" src=\"/sopay/public/assets/img/xbt.svg\"> XRP</th>
                <th class=\"text-center\"><img style=\"max-height: 36px;\" src=\"/sopay/public/assets/img/xbt.svg\"> LTC</th>
                <th class=\"text-center\"><img style=\"max-height: 36px;\" src=\"/sopay/public/assets/img/xbt.svg\"> DOGE</th>
                <th class=\"text-center\"><img style=\"max-height: 36px;\" src=\"/sopay/public/assets/img/logo.png\">XPI</th>
            </tr>
            <tr>
              <td class=\"danger\">1 XAF</td>
              <td class=\"warning\"> 1 </td>
              <td><span id=\"xaf_usd\">USD</span></td>
              <td><span id=\"xaf_eur\">EUR</span></td>
              <td><span id=\"xaf_btc\">BTC</span></td>
              <td><span id=\"xaf_eth\">ETH</span></td>
              <td><span id=\"xaf_xrp\">XRP</span></td>
              <td><span id=\"xaf_ltc\">LTC</span></td>
              <td><span id=\"xaf_doge\">DOGE</span></td>
              <td><span id=\"xaf_xpi\">XPI</span></td>
              </tr>
              <tr>
                <td class=\"info\">1 USD</td>
                <td><span id=\"usd_xaf\">XAF</span></td>
                <td class=\"warning\">1</td>
                <td><span id=\"usd_eur\">EUR></span></td>
                <td><span id=\"usd_btc\">BTC</span></td>
                <td><span id=\"usd_eth\">ETH</span></td>
                <td><span id=\"usd_xrp\">XRP</span></td>
                <td><span id=\"usd_ltc\">LTC</span></td>
                <td><span id=\"usd_doge\">DOGE</span></td>
                <td><span id=\"usd_xpi\">XPI</span></td>
              </tr>
              <tr>
                <td class=\"warning\">1 EUR</td>
                <td><span id=\"eur_xaf\">XAF</span></td>
                <td><span id=\"eur_usd\">USD</span></td>
                <td class=\"warning\">1</td>
                <td><span id=\"eur_btc\">BTC</span></td>
                <td><span id=\"eur_eth\">ETH</span></td>
                <td><span id=\"eur_xrp\">XRP</span></td>
                <td><span id=\"eur_ltc\">LTC</span></td>
                <td><span id=\"eur_doge\">DOGE</span></td>
                <td><span id=\"eur_xpi\">XPI<span</td>
            </tr>
              <tr>
                <td class=\"success\">1 BTC</td>
                <td><span id=\"btc_xaf\">XAF</span></td>
                <td><span id=\"btc_usd\">USD</span></td>
                <td><span id=\"btc_eur\">EUR</span></td>
                <td class=\"warning\">1</td>
                <td><span id=\"btc_eth\">ETH</span></td>
                <td><span id=\"btc_xrp\">XRP</span></td>
                <td><span id=\"btc_ltc\">LTC</span></td>
                <td><span id=\"btc_doge\">DOGE</span></td>
                <td><span id=\"btc_xpi\">XPI</span></td>
            </tr>
            <tr>
              <td class=\"active\">1 ETH</td>
              <td><span id=\"eth_xaf\">XAF</span></td>
              <td><span id=\"eth_usd\">USD</span></td>
              <td><span id=\"eth_eur\">EUR</span></td>
              <td><span id=\"eth_btc\">BTC</span></td>
              <td class=\"warning\">1</td>
              <td><span id=\"eth_xrp\">XRP</span></td>
              <td><span id=\"eth_ltc\">LTC</span></td>
              <td><span id=\"eth_doge\">DOGE</span></td>
              <td><span id=\"eth_xpi\">XPI</span></td>
            </tr>
            <tr>
              <td class=\"danger\">1 XRP</td>
              <td><span id=\"xrp_xaf\">XAF</span></td>
              <td><span id=\"xrp_usd\">USD</span></td>
              <td><span id=\"xrp_eur\">EUR</span></td>
              <td><span id=\"xrp_btc\">BTC</span></td>
              <td><span id=\"xrp_eth\">ETH</span></td>
              <td class=\"warning\">1</td>
              <td><span id=\"xrp_ltc\">LTC</span></td>
              <td><span id=\"xrp_doge\">DOGE</span></td>
              <td><span id=\"xrp_xpi\">XPI</span></td>
            </tr>
            <tr>
              <td class=\"info\">1 LTC</td>
              <td><span id=\"ltc_xaf\">XAF</span></td>
              <td><span id=\"ltc_usd\">USD</span></td>
              <td><span id=\"ltc_eur\">EUR</span></td>
              <td><span id=\"ltc_btc\">BTC</span></td>
              <td><span id=\"ltc_eth\">ETH</span></td>
              <td><span id=\"ltc_xrp\">XRP</span></td>
              <td class=\"warning\">1</td>
              <td><span id=\"ltc_doge\">DOGE</span></td>
              <td><span id=\"ltc_xpi\">XPI</span></td>
            </tr>
            <tr>
              <td class=\"warning\">1 DOGE</td>
              <td><span id=\"doge_xaf\">XAF</span></td>
              <td><span id=\"doge_usd\">USD</span></td>
              <td><span id=\"doge_eur\">EUR</span></td>
              <td><span id=\"doge_btc\">BTC</span></td>
              <td><span id=\"doge_eth\">ETH</span></td>
              <td><span id=\"doge_xrp\">XRP</span></td>
              <td><span id=\"doge_ltc\">LTC</span></td>
              <td class=\"warning\">1</td>
              <td><span id=\"doge_xpi\">XPI</td>
            </tr>
              <tr>
                <td class=\"success\">1 XPI</td>
                <td><span id=\"xpi_xaf\">XAF</span></td>
                <td><span id=\"xpi_usd\">USD</span></td>
                <td><span id=\"xpi_eur\">EUR</span></td>
                <td><span id=\"xpi_btc\">BTC</span></td>
                <td><span id=\"xpi_eth\">ETH</span></td>
                <td><span id=\"xpi_xrp\">XRP</span></td>
                <td><span id=\"xpi_ltc\">LTC</span></td>
                <td><span id=\"xpi_doge\">DOGE</span></td>
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
                    <a href=\"#\" data-filter=\".financial\">Financial institutions</a>
                  </li>
                  <li>
                    <a href=\"#\" data-filter=\".customer\">Customer</a>
                  </li>
                  <li>
                    <a href=\"#\" data-filter=\".other\">Other</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"awesome-project-content text-center\">
            <!-- single-awesome-project start -->
            <div class=\"col-md-4 col-sm-4 col-xs-12 financial\">
              <div class=\"single-awesome-project\">
                <div class=\"awesome-img\">
                  <a href=\"#\" style=\"height: 300px; \"><img src=\"/sopay/public/assets/img/portfolio/om.png\" alt=\"\" /></a>
                  <div class=\"add-actions text-center\">
                    <div class=\"project-dec\">
                      <a class=\"venobox\" data-gall=\"myGallery\" href=\"/sopay/public/assets/img/portfolio/om.png\">
                        <h4>Orange Money</h4>
                        <span>Orange Cameroun</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- single-awesome-project end -->
            <!-- single-awesome-project start -->
            <div class=\"col-md-4 col-sm-4 col-xs-12 financial\">
              <div class=\"single-awesome-project\">
                <div class=\"awesome-img\">
                  <a href=\"#\" style=\"height: 300px;\"><img src=\"/sopay/public/assets/img/portfolio/paypal.png\" alt=\"\" /></a>
                  <div class=\"add-actions text-center\">
                    <div class=\"project-dec\">
                      <a class=\"venobox\" data-gall=\"myGallery\" href=\"/sopay/public/assets/img/portfolio/paypal.png\">
                        <h4>PayPal</h4>
                        <span>PayPal Business</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- single-awesome-project end -->
            <!-- single-awesome-project start -->
            <div class=\"col-md-4 col-sm-4 col-xs-12 financial\">
              <div class=\"single-awesome-project\">
                <div class=\"awesome-img\">
                  <a href=\"#\" style=\"height: 300px;\"><img src=\"/sopay/public/assets/img/portfolio/momo.jpg\" alt=\"\" /></a>
                  <div class=\"add-actions text-center\">
                    <div class=\"project-dec\">
                      <a class=\"venobox\" data-gall=\"myGallery\" href=\"/sopay/public/assets/img/portfolio/momo.jpg\">
                        <h4>Mtn Mobile Money</h4>
                        <span>MTN Cameroun</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- single-awesome-project end -->
            <!-- single-awesome-project start -->
            <div class=\"col-md-4 col-sm-4 col-xs-12 financial\">
              <div class=\"single-awesome-project\">
                <div class=\"awesome-img\">
                  <a href=\"#\" style=\"height: 300px;\"><img src=\"/sopay/public/assets/img/portfolio/eu.png\" alt=\"\" /></a>
                  <div class=\"add-actions text-center\">
                    <div class=\"project-dec\">
                      <a class=\"venobox\" data-gall=\"myGallery\" href=\"/sopay/public/assets/img/portfolio/eu.png\">
                        <h4>Express union mobile money</h4>
                        <span>Express Union SA</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- single-awesome-project end -->
            <!-- single-awesome-project start -->
            <div class=\"col-md-4 col-sm-4 col-xs-12 financial\">
              <div class=\"single-awesome-project\">
                <div class=\"awesome-img\">
                  <a href=\"#\" style=\"height: 300px;\"><img src=\"/sopay/public/assets/img/portfolio/cca.png\" alt=\"\" /></a>
                  <div class=\"add-actions text-center text-center\">
                    <div class=\"project-dec\">
                      <a class=\"venobox\" data-gall=\"myGallery\" href=\"/sopay/public/assets/img/portfolio/cca.png\">
                        <h4>CCA Bank</h4>
                        <span>CCA Cameroun</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- single-awesome-project end -->
            <!-- single-awesome-project start -->
            <div class=\"col-md-4 col-sm-4 col-xs-12 financial\">
              <div class=\"single-awesome-project\">
                <div class=\"awesome-img\">
                  <a href=\"#\" style=\"height: 300px;\"><img src=\"/sopay/public/assets/img/portfolio/bitcoin.png\" alt=\"\" /></a>
                  <div class=\"add-actions text-center\">
                    <div class=\"project-dec\">
                      <a class=\"venobox\" data-gall=\"myGallery\" href=\"/sopay/public/assets/img/portfolio/bitcoin.png\">
                        <h4>Bitcoin</h4>
                        <span>Bitcoin</span>
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
                    <p>  <a  href=\"#\" >Terms & Conditions</a> </p>
                    <p>  <a  href=\"#\" >Our Fees</a> </p>
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
                \$('#xaf_eth').text(data.data.ETH);
                \$('#xaf_xrp').text(data.data.XRP);
                \$('#xaf_ltc').text(data.data.LTC);
                \$('#xaf_doge').text(data.data.DOGE);
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
               \$('#usd_eth').text(data.data.ETH);
               \$('#usd_xrp').text(data.data.XRP);
               \$('#usd_ltc').text(data.data.LTC);
               \$('#usd_doge').text(data.data.DOGE);
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
              \$('#eur_eth').text(data.data.ETH);
              \$('#eur_xrp').text(data.data.XRP);
              \$('#eur_ltc').text(data.data.LTC);
              \$('#eur_doge').text(data.data.DOGE);
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
            \$('#btc_eth').text(data.data.ETH);
            \$('#btc_xrp').text(data.data.XRP);
            \$('#btc_ltc').text(data.data.LTC);
            \$('#btc_doge').text(data.data.DOGE);
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
          \$('#xpi_eth').text(data.data.ETH);
          \$('#xpi_xrp').text(data.data.XRP);
          \$('#xpi_ltc').text(data.data.LTC);
          \$('#xpi_doge').text(data.data.DOGE);
        }
      });
      \$.ajax({
        url: \"https://soleaspay.com/convert\",
        type: \"GET\",
        dataType: \"JSON\",
        data: {amount: 1,
              devise: 'ETH'},
        success:function(data)
        {
          \$('#eth_eur').text(data.data.EUR);
          \$('#eth_xaf').text(data.data.XAF);
          \$('#eth_usd').text(data.data.USD);
          \$('#eth_btc').text(data.data.BTC);
          \$('#eth_xpi').text(data.data.XPI);
          \$('#eth_xrp').text(data.data.XRP);
          \$('#eth_ltc').text(data.data.LTC);
          \$('#eth_doge').text(data.data.DOGE);
        }
      });
      \$.ajax({
        url: \"https://soleaspay.com/convert\",
        type: \"GET\",
        dataType: \"JSON\",
        data: {amount: 1,
              devise: 'XRP'},
        success:function(data)
        {
          \$('#xrp_eur').text(data.data.EUR);
          \$('#xrp_xaf').text(data.data.XAF);
          \$('#xrp_usd').text(data.data.USD);
          \$('#xrp_btc').text(data.data.BTC);
          \$('#xrp_eth').text(data.data.ETH);
          \$('#xrp_xpi').text(data.data.XPI);
          \$('#xrp_ltc').text(data.data.LTC);
          \$('#xrp_doge').text(data.data.DOGE);
        }
      });
      \$.ajax({
        url: \"https://soleaspay.com/convert\",
        type: \"GET\",
        dataType: \"JSON\",
        data: {amount: 1,
              devise: 'LTC'},
        success:function(data)
        {
          \$('#ltc_eur').text(data.data.EUR);
          \$('#ltc_xaf').text(data.data.XAF);
          \$('#ltc_usd').text(data.data.USD);
          \$('#ltc_btc').text(data.data.BTC);
          \$('#ltc_eth').text(data.data.ETH);
          \$('#ltc_xrp').text(data.data.XRP);
          \$('#ltc_xpi').text(data.data.XPI);
          \$('#ltc_doge').text(data.data.DOGE);
        }
      });
      \$.ajax({
        url: \"https://soleaspay.com/convert\",
        type: \"GET\",
        dataType: \"JSON\",
        data: {amount: 1,
              devise: 'DOGE'},
        success:function(data)
        {
          \$('#doge_eur').text(data.data.EUR);
          \$('#doge_xaf').text(data.data.XAF);
          \$('#doge_usd').text(data.data.USD);
          \$('#doge_btc').text(data.data.BTC);
          \$('#doge_eth').text(data.data.ETH);
          \$('#doge_xrp').text(data.data.XRP);
          \$('#doge_ltc').text(data.data.LTC);
          \$('#doge_xpi').text(data.data.XPI);
        }
      });
    });
    </script>
  </body>
  
  </html>
  ", "home.html.twig", "/var/www/html/sopay/templates/home.html.twig");
    }
}
