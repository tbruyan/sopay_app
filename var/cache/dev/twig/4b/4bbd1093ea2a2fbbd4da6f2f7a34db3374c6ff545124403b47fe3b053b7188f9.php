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

/* user/layout.html.twig */
class __TwigTemplate_7a4b4ad552bc1c6a133a81504ca40f42dfffe5381088cd75358679dc2fc70b71 extends Template
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
            'content' => [$this, 'block_content'],
            'navigationSpace' => [$this, 'block_navigationSpace'],
            'parentScripts' => [$this, 'block_parentScripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
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
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta content=\"payment online, agregator, api, e-commerce payment, sopay, soleaspay, paypal to om, bitcoin to om \" name=\"keywords\">
    <meta content=\"Sopay allow you to instantly buy and sell btc or paypal usd througth orange money or mtn mobile\" name=\"description\">
    <meta name=\"author\" content=\"MYSOLEAS\">
    
    <title>";
        // line 21
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    
    <!-- Custom fonts for this template-->
    <link href=\"/sopay/public/assets/vendor/fontawesome-free/css/all.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link
        href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
        rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"/sopay/public/assets/css/sb-admin-2.min.css\" rel=\"stylesheet\">
    <!-- Favicons -->
  <link href=\"/sopay/public/assets/img/logo.png\" rel=\"icon\">
  <link href=\"/sopay/public/assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

</head>

<body id=\"page-top\">

    <!-- Page Wrapper -->
    <div id=\"wrapper\">

        <!-- Sidebar -->
        <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled\" id=\"accordionSidebar\">

            <!-- Sidebar - Brand -->
            <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_home");
        echo "\">
                <div class=\"sidebar-brand-icon rotate-n-15\">
                    <i class=\"fas fa-laugh-wink\"></i>
                </div>
                <div class=\"sidebar-brand-text mx-3\">SoleasPay</div>
            </a>

            <!-- Divider -->
            <hr class=\"sidebar-divider my-0\">

            <!-- Nav Item - Dashboard -->
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_dashboard");
        echo "\">
                    <i class=\"fas fa-fw fa-tachometer-alt\"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class=\"sidebar-divider\">

            <!-- Heading -
            <div class=\"sidebar-heading\">
                Transaction
            </div -->

            <!-- Nav Item - Pages Collapse Menu -->
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo\"
                    aria-expanded=\"true\" aria-controls=\"collapseTwo\">
                    <i class=\"fas fa-fw fa-cog\"></i>
                    <span>Transactions</span>
                </a>
                <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                    <div class=\"bg-white py-2 collapse-inner rounded\">
                        <h6 class=\"collapse-header\">Authorize operations</h6>
                        <a class=\"collapse-item\" href=\"#\" id=\"deposit\">Recharge Account</a>
                        <a class=\"collapse-item dropdown-toggle\" href=\"#\" id=\"paymentDropdown\"
                                data-toggle=\"dropdown\">Payment</a>
                          <ul class=\"dropdown-menu\" style=\"margin-left: 10px;\">
                            <li><a href=\"#\" id=\"sPayment\">Proceed to pay</a></li>
                            <li><a href=\"#\" id=\"rPayment\">Receive Payment</a></li>
                          </ul>
                        
                        <a class=\"collapse-item\" href=\"#\" id=\"withdraw\" readonly>Withdraw</a>
                        <a class=\"collapse-item\" href=\"#\" id=\"changes\">Changes</a>
                        <a class=\"collapse-item\" href=\"#\" id=\"transfert\">Transfert</a>
                        <a class=\"collapse-item\" href=\"#\" id=\"withdrawRewards\">Withdraw Rewards</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class=\"sidebar-divider\">

            <!-- Heading 
            <div class=\"sidebar-heading\">
                Setting
            </div>-->

            <!-- Nav Item - Pages Collapse Menu -->
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapsePages\"
                    aria-expanded=\"true\" aria-controls=\"collapsePages\">
                    <i class=\"fas fa-fw fa-wrench\"></i>
                    <span>Setting</span>
                </a>
                <div id=\"collapsePages\" class=\"collapse\" aria-labelledby=\"headingPages\" data-parent=\"#accordionSidebar\">
                    <div class=\"bg-white py-2 collapse-inner rounded\">
                        <h6 class=\"collapse-header\">Profile</h6>
                        <a class=\"collapse-item\" href=\"#Edit-profile\" id=\"profile\">Edit Profile</a>
                        <a class=\"collapse-item\" href=\"#\" data-target=\"#currencyModal\" data-toggle=\"modal\">Default Currency</a>
                        <a class=\"collapse-item\" data-target=\"#persoLink\" data-toggle=\"modal\"  href=\"#\"><i class=\"fa fa-gear\"></i>&nbsp;";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate Link"), "html", null, true);
        echo "</a>
                        <a class=\"collapse-item\" href=\"#\">Languages</a>
                        </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class=\"sidebar-divider d-none d-md-block\">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class=\"text-center d-none d-md-inline\">
                <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
            </div>

            <!-- Sidebar Message -->
            <div class=\"sidebar-card\">
                <img class=\"sidebar-card-illustration mb-2\" src=\"/sopay/public/assets/img/logo.png\" alt=\"\">
                <p class=\"text-center mb-2\">Witch <strong>Sopay</strong>, Easy integrate digital payment on your project</p>
                <a class=\"btn btn-success btn-sm\" href=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_home");
        echo "\">home</a>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id=\"content-wrapper\" class=\"d-flex flex-column\">

            <!-- Main Content -->
            <div id=\"content\">

                <!-- Topbar -->
                <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
                        <i class=\"fa fa-bars\"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\"
                                aria-label=\"Search\" aria-describedby=\"basic-addon2\">
                            <div class=\"input-group-append\">
                                <button class=\"btn btn-primary\" type=\"button\">
                                    <i class=\"fas fa-search fa-sm\"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class=\"navbar-nav ml-auto\">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class=\"nav-item dropdown no-arrow d-sm-none\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-search fa-fw\"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\"
                                aria-labelledby=\"searchDropdown\">
                                <form class=\"form-inline mr-auto w-100 navbar-search\">
                                    <div class=\"input-group\">
                                        <input type=\"text\" class=\"form-control bg-light border-0 small\"
                                            placeholder=\"Search for...\" aria-label=\"Search\"
                                            aria-describedby=\"basic-addon2\">
                                        <div class=\"input-group-append\">
                                            <button class=\"btn btn-primary\" type=\"button\">
                                                <i class=\"fas fa-search fa-sm\"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class=\"nav-item dropdown no-arrow mx-1\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-bell fa-fw\"></i>
                                <!-- Counter - Alerts -->
                                <span class=\"badge badge-danger badge-counter\">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                aria-labelledby=\"alertsDropdown\">
                                <h6 class=\"dropdown-header\">
                                    Alerts Center
                                </h6>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"mr-3\">
                                        <div class=\"icon-circle bg-primary\">
                                            <i class=\"fas fa-file-alt text-white\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"small text-gray-500\">December 12, 2019</div>
                                        <span class=\"font-weight-bold\">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"mr-3\">
                                        <div class=\"icon-circle bg-success\">
                                            <i class=\"fas fa-donate text-white\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"small text-gray-500\">December 7, 2019</div>
                                        \$290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"mr-3\">
                                        <div class=\"icon-circle bg-warning\">
                                            <i class=\"fas fa-exclamation-triangle text-white\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"small text-gray-500\">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class=\"nav-item dropdown no-arrow mx-1\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-envelope fa-fw\"></i>
                                <!-- Counter - Messages -->
                                <span class=\"badge badge-danger badge-counter\">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                aria-labelledby=\"messagesDropdown\">
                                <h6 class=\"dropdown-header\">
                                    Message Center
                                </h6>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"/sopay/public/assets/img/undraw_profile_1.svg\"
                                            alt=\"\">
                                        <div class=\"status-indicator bg-success\"></div>
                                    </div>
                                    <div class=\"font-weight-bold\">
                                        <div class=\"text-truncate\">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class=\"small text-gray-500\">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"/sopay/public/assets/img/undraw_profile_2.svg\"
                                            alt=\"\">
                                        <div class=\"status-indicator\"></div>
                                    </div>
                                    <div>
                                        <div class=\"text-truncate\">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class=\"small text-gray-500\">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"/sopay/public/assets/img/undraw_profile_3.svg\"
                                            alt=\"\">
                                        <div class=\"status-indicator bg-warning\"></div>
                                    </div>
                                    <div>
                                        <div class=\"text-truncate\">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class=\"small text-gray-500\">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"https://source.unsplash.com/Mv9hjnEUHR4/60x60\"
                                            alt=\"\">
                                        <div class=\"status-indicator bg-success\"></div>
                                    </div>
                                    <div>
                                        <div class=\"text-truncate\">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class=\"small text-gray-500\">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Read More Messages</a>
                            </div>
                        </li>

                        <div class=\"topbar-divider d-none d-sm-block\"></div>

                        <!-- Nav Item - User Information -->
                        <li class=\"nav-item dropdown no-arrow\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">";
        // line 319
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 319, $this->source); })()), "username", [], "any", false, false, false, 319), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 319, $this->source); })()), "matricule", [], "any", false, false, false, 319), "html", null, true);
        echo "</span>
                                <img class=\"img-profile rounded-circle\"
                                    src=\"/sopay/public/assets/img/undraw_profile.svg\">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                aria-labelledby=\"userDropdown\">
                                <a class=\"dropdown-item\" href=\"#\">
                                    <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Profile
                                </a>
                                <a class=\"dropdown-item\" href=\"#\">
                                    <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Settings
                                </a>
                                <a class=\"dropdown-item\" href=\"#\" data-target=\"#currencyModal\" data-toggle=\"modal\">
                                    <i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Default Currency
                                </a>
                                <a class=\"dropdown-item\" data-target=\"#persoLink\" data-toggle=\"modal\" role=\"presentation\" href=\"#\"><i class=\"fa fa-gear\"></i>&nbsp;";
        // line 338
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate Link"), "html", null, true);
        echo "</a>
                                    
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class=\"container-fluid\">
                    ";
        // line 355
        $this->displayBlock('content', $context, $blocks);
        // line 419
        echo "                     <!-- Start Blog Area -->
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
              <caption class=\"text-center bg-primary\" style=\"font-size: x-large; caption-side:top\">Sopay Live Exchange Rates</caption>
              <tr>
                <th>Currencies/values</th>
                <th><img style=\"max-height: 36px;\" src=\"/sopay/public/assets/img/xaf.svg\"> XAF</th>
                <th><img style=\"max-height: 36px;\" src=\"/sopay/public/assets/img/usd.svg\"> USD</th>
                <th><img style=\"max-height: 36px;\" src=\"/sopay/public/assets/img/eur.svg\"> EUR</th>
                <th><img style=\"max-height: 36px;\" src=\"/sopay/public/assets/img/xbt.svg\"> BTC</th>
                <th><img style=\"max-height: 36px;\" src=\"/sopay/public/assets/img/logo.png\">XPI</th>
            </tr>
            <tr>
              <td class=\"table-danger\">1 XAF</td>
              <td class=\"table-warning\"> 1 </td>
              <td><span id=\"xaf_usd\">USD</span></td>
              <td><span id=\"xaf_eur\">EUR</span></td>
              <td><span id=\"xaf_btc\">BTC</span></td>
              <td><span id=\"xaf_xpi\">XPI</span></td>
              </tr>
              <tr>
                <td class=\"table-info\">1 USD</td>
                <td><span id=\"usd_xaf\">XAF</span></td>
                <td class=\"table-warning\">1</td>
                <td><span id=\"usd_eur\">EUR></span></td>
                <td><span id=\"usd_btc\">BTC</span></td>
                <td><span id=\"usd_xpi\">XPI</span></td>
              </tr>
              <tr>
                <td class=\"table-warning\">1 EUR</td>
                <td><span id=\"eur_xaf\">XAF</span></td>
                <td><span id=\"eur_usd\">USD<span</td>
                <td class=\"table-warning\">1</td>
                <td><span id=\"eur_btc\">BTC</span></td>
                <td><span id=\"eur_xpi\">XPI<span</td>
            </tr>
              <tr>
                <td class=\"table-success\">1 BTC</td>
                <td><span id=\"btc_xaf\">XAF</span></td>
                <td><span id=\"btc_usd\">USD</span></td>
                <td><span id=\"btc_eur\">EUR</span></td>
                <td class=\"table-warning\">1</td>
                <td><span id=\"btc_xpi\">XPI</span></td>
            </tr>
              <tr>
                <td class=\"table-active\">1 XPI</td>
                <td><span id=\"xpi_xaf\">XAF</span></td>
                <td><span id=\"xpi_usd\">USD</span></td>
                <td><span id=\"xpi_eur\">EUR</span></td>
                <td><span id=\"xpi_btc\">BTC</span></td>
                <td class=\"table-warning\">1</td>
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
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            
            <!-- Footer -->
            <footer class=\"sticky-footer bg-white\">
                <div class=\"container my-auto\">
                    <div class=\"copyright text-center my-auto\">
                        <span><strong>Copyright &copy; MYSOLEAS 2020</strong>. All Rights Reserved</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class=\"scroll-to-top rounded\" href=\"#page-top\">
        <i class=\"fas fa-angle-up\"></i>
    </a>

    <!-- Logout Modal-->
    <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
        aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
                    <a class=\"btn btn-primary\" href=\"";
        // line 534
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_logout");
        echo "\">Logout</a>
                </div>
            </div>
        </div>
    </div>

      <!-- currency Modal-->
      <div class=\"modal fade\" id=\"currencyModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"DefaultCurrency\"
      aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
          <div class=\"modal-content\">
              <div class=\"modal-header\">
                  <h5 class=\"modal-title\" id=\"DefaultCurrency\">Select the default currency for your account</h5>
                  <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                      <span aria-hidden=\"true\">×</span>
                  </button>
              </div>
              <div class=\"modal-body d-flex justify-content-between\" style=\"margin: 20px;\">
                  ";
        // line 552
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["currencies"]) || array_key_exists("currencies", $context) ? $context["currencies"] : (function () { throw new RuntimeError('Variable "currencies" does not exist.', 552, $this->source); })()), "data", [], "any", false, false, false, 552));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            echo " 
                    ";
            // line 553
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 553), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 553, $this->source); })()), "default_currency", [], "any", false, false, false, 553), "code", [], "any", false, false, false, 553)))) {
                // line 554
                echo "                        <label class=\"d-inline\"> <input class=\"form-check-input\" type=\"radio\" name=\"defCurrency\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 554), "html", null, true);
                echo "\" checked>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 554), "html", null, true);
                echo "</label>
                    ";
            } else {
                // line 556
                echo "                    <label class=\"d-inline\"> <input class=\"form-check-input\" type=\"radio\" name=\"defCurrency\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 556), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 556), "html", null, true);
                echo "</label>
                    ";
            }
            // line 558
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 559
        echo "              </div>
              <div class=\"modal-footer\">
                  <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
                  <a class=\"btn btn-primary\" href=\"#\" id=\"changeCurrency\">proceed</a>
              </div>
          </div>
      </div>
  </div>
  <div class=\"modal fade\" role=\"dialog\" tabindex=\"-1\" id=\"blockDetailTransaction\" style=\"color:#000\">
    <div class=\"modal-dialog  modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h3 class=\"modal-title\" >";
        // line 571
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Transaction Detail"), "html", null, true);
        echo "</h3><button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button></div>
            <div class=\"modal-body\" id=\"detailTransaction\"></div>
          </div>
  </div>
</div>
<div class=\"modal fade\" role=\"dialog\" tabindex=\"-1\" id=\"persoLink\" style=\"color:#000\">
  <div class=\"modal-dialog  modal-dialog-centered\" role=\"document\">
          <div class=\"modal-content\">
              <div class=\"modal-header\">
                  <h3 class=\"modal-title\" >";
        // line 580
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate your personal link"), "html", null, true);
        echo " </h3><button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button></div>
              <div class=\"modal-body d-flex flex-column d-sm-flex justify-content-center justify-content-sm-center\">
                <p> ";
        // line 582
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate and share your personal link to earn 10% commissions on all purchases made by your prospects on this site", [], "messages");
        echo " </p>
              <div><a class=\"btn btn-primary btn-sm\" role=\"button\" href=\"#\" onclick=\"\$.fn.GenerateLink('";
        // line 583
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 583, $this->source); })()), "matricule", [], "any", false, false, false, 583), "html", null, true);
        echo "')\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Click here to proceed"), "html", null, true);
        echo "</a></div>
              <div style=\"display: none; margin-top:10px\"> 
      <a class=\"d-block\" id=\"blockLink\" style=\"word-wrap: break-word;\" href=\"#\" target=\"_blank\"></a> <button type=\"button\" class=\"btn-sm btn-light\" id=\"copyLink\">Copy</button>
      <div><span>";
        // line 586
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("share by"), "html", null, true);
        echo " : </span> <div class=\"d-flex justify-content-center align-items-center\"><a target=\"_blank\" style=\"margin-right:30px\" id=\"shareWhatsapp\" title=\"Share link by whatsapp\"><i class=\"fa fa-whatsapp\" style=\"color: rgb(53,235,60);font-size: 25px;\"></i></a><a href=\"\" id=\"shareSms\" title=\"share link by sms\"><i class=\"fa fa-commenting\" style=\"font-size: 25px;\"></i></a> <button class=\"d-none\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("copy link to share it"), "html", null, true);
        echo "\" onclick=\"\$.fn.CopyLink('#blockLink')\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Copy"), "html", null, true);
        echo "</button></div></div></div>
                  
          </div>
      </div>
  </div>
</div>
    <div class=\"d-none\" id=\"ppal\"></div>
    <!-- Bootstrap core JavaScript-->
    <script src=\"/sopay/public/assets/vendor/jquery/jquery.min.js\"></script>
    <script src=\"/sopay/public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

    <!-- Core plugin JavaScript-->
    <script src=\"/sopay/public/assets/vendor/jquery-easing/jquery.easing.min.js\"></script>

    <!-- Custom scripts for all pages-->
    <script src=\"/sopay/public/assets/js/sb-admin-2.min.js\"></script>

    <!-- Page level plugins -->
    <script src=\"/sopay/public/assets/vendor/chart.js/Chart.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://www.paypal.com/sdk/js?client-id=AbqHyc7vUhKt-OXaqglCQ2jahzVaSbHNOOKWKhlAVkCeIOSVRm52L3TCqhZmEsFxrmdbl1XYQtthRbBr\"></script>
    <script>
        \$(document).ready(function(){
            var defCurrency;
            if (\$(window).width() > 480 ) {
                \$(\"#accordionSidebar\").removeClass(\"toggled\");
              };
              function addToggled(){
                if (\$(window).width() < 480 ) {
                    \$(\"#accordionSidebar\").addClass(\"toggled\");
                  };
              }
              
              // pass historie array to js and remove &quot;
            
              \$.fn.GenerateLink = function(code){
                if(navigator.browserLanguage){
                var language = navigator.browserLanguage;
            }else{
                var language = navigator.language;
            }
            if(language.indexOf('en') > -1){
              var prefix = 'https://app.soleaspay.com/en/register?r=';
            }else if(language.indexOf('fr') > -1){
              var prefix = 'https://app.soleaspay.com/fr/register?r=';
            }else{
              var prefix = 'https://app.soleaspay.com/register?r=';
            } 
             var link = prefix+code;
             var linkShareWhatsapp = 'https://wa.me/?text=Viens me rejoindre sur SoPay en suivant le lien : '+link;
             var linkShareSms = 'sms:;?&body=Viens me rejoindre sur SoPay en suivant le lien : '+link; 
             \$('#blockLink').text(link).parent('div').show();
             \$('#shareWhatsapp').attr('href', linkShareWhatsapp);
             \$('#shareSms').attr('href', linkShareSms);
            }

            \$('#deposit').on('click', function(e){
                e.preventDefault();
                \$('#navigationSpace').html('');
                \$('#navigationSpace').prepend('<div id=\"newpage\"> </div>');
                \$.ajax({
                    url: \"";
        // line 646
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_deposit");
        echo "\",
                    type: \"GET\",
                    dataType: \"HTML\",
                     success:function(data)
                     {
                       \$('#newpage').append(data);
                       addToggled();
                     },
                   error: function(err){
                    console.log(err);
                   }
                 });
            });

            \$('#withdraw').on('click', function(e){
                e.preventDefault();
                \$('#navigationSpace').html('');
                \$('#navigationSpace').prepend('<div id=\"newpage\"> </div>');
                \$.ajax({
                    url: \"";
        // line 665
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_withdraw");
        echo "\",
                    type: \"GET\",
                    dataType: \"HTML\",
                     success:function(data)
                     {
                       \$('#newpage').append(data);
                       addToggled();
                     },
                   error: function(err){
                    console.log(err);
                   }
                 });
            });

            \$('#changes').on('click', function(e){
                e.preventDefault();
                \$('#navigationSpace').html('');
                \$('#navigationSpace').prepend('<div id=\"newpage\"> </div>');
                \$.ajax({
                    url: \"";
        // line 684
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_changes");
        echo "\",
                    type: \"GET\",
                    dataType: \"HTML\",
                     success:function(data)
                     {
                       \$('#newpage').append(data);
                       addToggled();
                     },
                   error: function(err){
                    console.log(err);
                   }
                 });
            });

            \$('#transfert').on('click', function(e){
                e.preventDefault();
                \$('#navigationSpace').html('');
                \$('#navigationSpace').prepend('<div id=\"newpage\"> </div>');
                \$.ajax({
                    url: \"";
        // line 703
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_transfert");
        echo "\",
                    type: \"GET\",
                    dataType: \"HTML\",
                     success:function(data)
                     {
                       \$('#newpage').append(data);
                       addToggled();
                     },
                   error: function(err){
                    console.log(err);
                   }
                 });
            });
            \$('#sPayment').on('click', function(e){
              e.preventDefault();
              \$('#navigationSpace').html('');
              \$('#navigationSpace').prepend('<div id=\"newpage\"> </div>');
              \$.ajax({
                  url: \"";
        // line 721
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_transfert");
        echo "\",
                  type: \"GET\",
                  dataType: \"HTML\",
                   success:function(data)
                   {
                     \$('#newpage').append(data);
                     addToggled();
                   },
                 error: function(err){
                  console.log(err);
                 }
               });
            });
            \$('#rPayment').on('click', function(e){
              e.preventDefault();
              \$('#navigationSpace').html('');
              \$('#navigationSpace').prepend('<div id=\"newpage\"> </div>');
              \$.ajax({
                  url: \"";
        // line 739
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_transfert");
        echo "\",
                  type: \"GET\",
                  dataType: \"HTML\",
                   success:function(data)
                   {
                     \$('#newpage').append(data);
                     addToggled();
                   },
                 error: function(err){
                  console.log(err);
                 }
               });
            });
            \$('#withdrawRewards').on('click', function(e){
                e.preventDefault();
                \$('#navigationSpace').html('');
                \$('#navigationSpace').prepend('<div id=\"newpage\"> </div>');
                \$.ajax({
                    url: \"";
        // line 757
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_withdraw_rewards");
        echo "\",
                    type: \"GET\",
                    dataType: \"HTML\",
                     success:function(data)
                     {
                       \$('#newpage').append(data);
                       addToggled();
                     },
                   error: function(err){
                    console.log(err);
                   }
                 });
            });

            \$('#profile').on('click', function(e){
                e.preventDefault();
                \$('#navigationSpace').html('');
                \$('#navigationSpace').prepend('<div id=\"newpage\"> </div>');
                \$.ajax({
                    url: \"";
        // line 776
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_profile");
        echo "\",
                    type: \"GET\",
                    dataType: \"HTML\",
                     success:function(data)
                     {
                       \$('#newpage').append(data);
                       addToggled();
                     },
                   error: function(err){
                    console.log(err);
                   }
                 });
            });

            \$(\"input[name='defCurrency']\").on('click', function(){
                defCurrency = this.value;
            });

            \$('#changeCurrency').on('click', function(e){
                e.preventDefault();
                \$.ajax({
                    url: \"";
        // line 797
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_change_currency");
        echo "\",
                    type: \"GET\",
                    dataType: \"JSON\",
                    data: {currency: defCurrency },
                     success:function(data)
                     {
                       alert(data.message);
                       location.reload();
                     },
                   error: function(err){
                    console.log(err);
                   }
                 });
            });

            \$.fn.viewDetail = function(document){
                let detailTransaction = \$('#detailTransaction');
                \$('#blockDetailTransaction').modal('toggle');
                 \$.ajax({
                     url: \"";
        // line 816
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_detail_transaction");
        echo "\",
                     type: \"POST\",
                     dataType: \"html\",
                     data: {document: document},
                     success:function(data)
                      {
                        detailTransaction.html('');
                        detailTransaction.html(data).show();
                      },
                    error: function(err){
                      console.log(err);
                    }
                    }); 
                    
              };
              \$.fn.convertValue = function(value, id){
                var destCell = \$('#'+id);
                 \$.ajax({
                    url: \"https://soleaspay.com/convert\",
                    type: \"GET\",
                    dataType: \"JSON\",
                    data: {amount: value,
                          devise: 'XPI',
                          out: '";
        // line 839
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 839, $this->source); })()), "default_currency", [], "any", false, false, false, 839), "code", [], "any", false, false, false, 839), "html", null, true);
        echo "'},
                    success:function(data)
                    {
                      destCell.html('');
                      destCell.append('<span>'+data.data.value+' '+ data.data.devise+'</span>');
                     },
                    error: function(err){
                      console.log(err);
                    }
                    }); 
                    
              };
        });

var dateStart = '";
        // line 853
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 853, $this->source); })()), "date_start", [], "any", false, false, false, 853), "html", null, true);
        echo "',
    startMonth = dateStart.split('-')[1]-1,
    //A travailler efficassement
    months = [\"Oct\", \"Nov\", \"Dec\",\"Jan\", \"Feb\", \"Mar\", \"Apr\", \"May\", \"Jun\", \"Jul\", \"Aug\", \"Sep\"],
    histories = JSON.parse(";
        // line 857
        echo json_encode((isset($context["histories"]) || array_key_exists("histories", $context) ? $context["histories"] : (function () { throw new RuntimeError('Variable "histories" does not exist.', 857, $this->source); })()));
        echo ");
    var totalPurchase = JSON.parse(";
        // line 858
        echo json_encode((isset($context["totalPurchase"]) || array_key_exists("totalPurchase", $context) ? $context["totalPurchase"] : (function () { throw new RuntimeError('Variable "totalPurchase" does not exist.', 858, $this->source); })()));
        echo ");
    var totalTransfert = JSON.parse(";
        // line 859
        echo json_encode((isset($context["totalTransfert"]) || array_key_exists("totalTransfert", $context) ? $context["totalTransfert"] : (function () { throw new RuntimeError('Variable "totalTransfert" does not exist.', 859, $this->source); })()));
        echo ");
    var totalRewards = '";
        // line 860
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 860, $this->source); })()), "total_income_rewards", [], "any", false, false, false, 860), "html", null, true);
        echo "';
    var dataTransact = [totalPurchase.value, totalTransfert.value, totalRewards];
    var dataMonths = [0,0,0,0,0,0,0,0,0,0,0,0];
    for (var i = 0; i < histories.length; i++) {
        var actualMonthPosition = histories[i].month.split('-')[1]-10;
        dataMonths[actualMonthPosition] = histories[i].value;
    }
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,\"Segoe UI\",Roboto,\"Helvetica Neue\",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

function number_format(number, decimals, dec_point, thousands_sep) {
  // *     example: number_format(1234.56, 2, ',', ' ');
  // *     return: '1 234,56'
  number = (number + '').replace(',', '').replace(' ', '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + Math.round(n * k) / k;
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\\B(?=(?:\\d{3})+(?!\\d))/g, sep);
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1).join('0');
  }
  return s.join(dec);
}
// Area Chart Example
var ctx = document.getElementById(\"myAreaChart\");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: [\"Oct\", \"Nov\", \"Dec\",\"Jan\", \"Feb\", \"Mar\", \"Apr\", \"May\", \"Jun\", \"Jul\", \"Aug\", \"Sep\"],
    datasets: [{
      label: \"Amount\",
      lineTension: 0.3,
      backgroundColor: \"rgba(78, 115, 223, 0.05)\",
      borderColor: \"rgba(78, 115, 223, 1)\",
      pointRadius: 3,
      pointBackgroundColor: \"rgba(78, 115, 223, 1)\",
      pointBorderColor: \"rgba(78, 115, 223, 1)\",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: \"rgba(78, 115, 223, 1)\",
      pointHoverBorderColor: \"rgba(78, 115, 223, 1)\",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      data: dataMonths,
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return number_format(value)+' ";
        // line 946
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 946, $this->source); })()), "default_currency", [], "any", false, false, false, 946), "code", [], "any", false, false, false, 946), "html", null, true);
        echo "';
          }
        },
        gridLines: {
          color: \"rgb(234, 236, 244)\",
          zeroLineColor: \"rgb(234, 236, 244)\",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      backgroundColor: \"rgb(255,255,255)\",
      bodyFontColor: \"#858796\",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ': ' + number_format(tooltipItem.yLabel)+' ";
        // line 978
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 978, $this->source); })()), "default_currency", [], "any", false, false, false, 978), "code", [], "any", false, false, false, 978), "html", null, true);
        echo "';
        }
      }
    }
  }
});

// Pie Chart Example
var ctx = document.getElementById(\"myPieChart\");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: [\"E-commerce\", \"Transfert\", \"Referral\"],
    datasets: [{
      data: dataTransact,
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
      hoverBorderColor: \"rgba(234, 236, 244, 1)\",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: \"rgb(255,255,255)\",
      bodyFontColor: \"#858796\",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});

</script>

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
  
    ";
        // line 1099
        $this->displayBlock('parentScripts', $context, $blocks);
        // line 1101
        echo "</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Soleas Pay";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 355
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 356
        echo "                    <!-- Content Row -->

                    <div id=\"navigationSpace\">
                        ";
        // line 359
        $this->displayBlock('navigationSpace', $context, $blocks);
        // line 362
        echo "                    </div>
                    <!-- Content Row -->
                    <div class=\"row\">

                        <!-- Content Column -->
                        <div class=\"col-lg-6 mb-4\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-hover text-center\">
                                  <caption class=\"text-center bg-primary\" style=\"font-size: x-large; caption-side:top\">Last Transactions</caption>
                                  <tr>
                                    <th scope=\"col\">Ref</th>
                                    <th scope=\"col\">Operation</th>
                                    <th scope=\"col\">Status</th>
                                    <th scope=\"col\">Date</th>
                                    <th scope=\"col\">Transaction Amount</th>
                                  </tr>
                                  ";
        // line 378
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lastOperations"]) || array_key_exists("lastOperations", $context) ? $context["lastOperations"] : (function () { throw new RuntimeError('Variable "lastOperations" does not exist.', 378, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lastOperation"]) {
            // line 379
            echo "                                    ";
            $context["dateFormat"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lastOperation"], "date", [], "any", false, false, false, 379), "T");
            // line 380
            echo "                                       <tr> 
                                           <th scope=\"row\"><a href=\"#\" onclick=\"\$.fn.viewDetail('";
            // line 381
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lastOperation"], "document", [], "any", false, false, false, 381), "html", null, true);
            echo "')\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lastOperation"], "document", [], "any", false, false, false, 381), "html", null, true);
            echo "</a></th> 
                                           <td>";
            // line 382
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lastOperation"], "operation", [], "any", false, false, false, 382), "name", [], "any", false, false, false, 382), "html", null, true);
            echo "</td>
                                           ";
            // line 383
            if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["lastOperation"], "status", [], "any", false, false, false, 383), "SUCCESS")) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["lastOperation"], "status", [], "any", false, false, false, 383), "RECEIVED")))) {
                // line 384
                echo "                                           <td class=\"table-success\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lastOperation"], "status", [], "any", false, false, false, 384), "html", null, true);
                echo "</td>
                                           ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 385
$context["lastOperation"], "status", [], "any", false, false, false, 385), "PENDING"))) {
                echo " 
                                           <td class=\"table-warning\">";
                // line 386
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lastOperation"], "status", [], "any", false, false, false, 386), "html", null, true);
                echo "</td>
                                           ";
            } else {
                // line 388
                echo "                                           <td class=\"table-danger\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lastOperation"], "status", [], "any", false, false, false, 388), "html", null, true);
                echo "</td>
                                           ";
            }
            // line 390
            echo "                                           <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dateFormat"]) || array_key_exists("dateFormat", $context) ? $context["dateFormat"] : (function () { throw new RuntimeError('Variable "dateFormat" does not exist.', 390, $this->source); })()), 0, [], "array", false, false, false, 390), "-"), 2, [], "array", false, false, false, 390), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dateFormat"]) || array_key_exists("dateFormat", $context) ? $context["dateFormat"] : (function () { throw new RuntimeError('Variable "dateFormat" does not exist.', 390, $this->source); })()), 0, [], "array", false, false, false, 390), "-"), 1, [], "array", false, false, false, 390), "html", null, true);
            echo " At ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dateFormat"]) || array_key_exists("dateFormat", $context) ? $context["dateFormat"] : (function () { throw new RuntimeError('Variable "dateFormat" does not exist.', 390, $this->source); })()), 1, [], "array", false, false, false, 390), "-"), 0, [], "array", false, false, false, 390), "html", null, true);
            echo "</td>
                                           <td id=\"";
            // line 391
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lastOperation"], "document", [], "any", false, false, false, 391), "html", null, true);
            echo "\" onclick=\"\$.fn.convertValue('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lastOperation"], "value", [], "any", false, false, false, 391), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lastOperation"], "document", [], "any", false, false, false, 391), "html", null, true);
            echo "')\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lastOperation"], "value", [], "any", false, false, false, 391), "html", null, true);
            echo " XPI</td>
                                        </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lastOperation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 394
        echo "                                </table>
                            </div>
                        
                        </div>
                        
                        <div class=\"col-lg-6 mb-4\">

                            <!-- Illustrations -->
                            <div class=\"card shadow mb-4\">
                                <div class=\"card-header py-3\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Sopay Interfaces</h6>
                                </div>
                                <div class=\"card-body\">
                                    <div class=\"text-center\">
                                        <img class=\"img-fluid px-3 px-sm-4 mt-3 mb-4\" style=\"width: 25rem;\"
                                            src=\"/sopay/public/assets/img/undraw_posting_photo.svg\" alt=\"\">
                                    </div>
                                    <p>Witch a web and mobile interface, simple and intuitive, connect to your SoPay account at any time to Monitor/Manage your transactions</p>
                                    <a target=\"_blank\" rel=\"nofollow\" href=\"#\">Download Mobile Apps &rarr;</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 359
    public function block_navigationSpace($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigationSpace"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigationSpace"));

        // line 360
        echo "
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1099
    public function block_parentScripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "parentScripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "parentScripts"));

        // line 1100
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1412 => 1100,  1402 => 1099,  1391 => 360,  1381 => 359,  1347 => 394,  1332 => 391,  1323 => 390,  1317 => 388,  1312 => 386,  1308 => 385,  1303 => 384,  1301 => 383,  1297 => 382,  1291 => 381,  1288 => 380,  1285 => 379,  1281 => 378,  1263 => 362,  1261 => 359,  1256 => 356,  1246 => 355,  1227 => 21,  1215 => 1101,  1213 => 1099,  1089 => 978,  1054 => 946,  965 => 860,  961 => 859,  957 => 858,  953 => 857,  946 => 853,  929 => 839,  903 => 816,  881 => 797,  857 => 776,  835 => 757,  814 => 739,  793 => 721,  772 => 703,  750 => 684,  728 => 665,  706 => 646,  639 => 586,  631 => 583,  627 => 582,  622 => 580,  610 => 571,  596 => 559,  590 => 558,  582 => 556,  574 => 554,  572 => 553,  566 => 552,  545 => 534,  428 => 419,  426 => 355,  406 => 338,  382 => 319,  195 => 135,  174 => 117,  112 => 58,  97 => 46,  69 => 21,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
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
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta content=\"payment online, agregator, api, e-commerce payment, sopay, soleaspay, paypal to om, bitcoin to om \" name=\"keywords\">
    <meta content=\"Sopay allow you to instantly buy and sell btc or paypal usd througth orange money or mtn mobile\" name=\"description\">
    <meta name=\"author\" content=\"MYSOLEAS\">
    
    <title>{% block title %}Soleas Pay{% endblock %}</title>
    
    <!-- Custom fonts for this template-->
    <link href=\"/sopay/public/assets/vendor/fontawesome-free/css/all.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link
        href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
        rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"/sopay/public/assets/css/sb-admin-2.min.css\" rel=\"stylesheet\">
    <!-- Favicons -->
  <link href=\"/sopay/public/assets/img/logo.png\" rel=\"icon\">
  <link href=\"/sopay/public/assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

</head>

<body id=\"page-top\">

    <!-- Page Wrapper -->
    <div id=\"wrapper\">

        <!-- Sidebar -->
        <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled\" id=\"accordionSidebar\">

            <!-- Sidebar - Brand -->
            <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"{{path('sopay_home')}}\">
                <div class=\"sidebar-brand-icon rotate-n-15\">
                    <i class=\"fas fa-laugh-wink\"></i>
                </div>
                <div class=\"sidebar-brand-text mx-3\">SoleasPay</div>
            </a>

            <!-- Divider -->
            <hr class=\"sidebar-divider my-0\">

            <!-- Nav Item - Dashboard -->
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"{{path('sopay_dashboard')}}\">
                    <i class=\"fas fa-fw fa-tachometer-alt\"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class=\"sidebar-divider\">

            <!-- Heading -
            <div class=\"sidebar-heading\">
                Transaction
            </div -->

            <!-- Nav Item - Pages Collapse Menu -->
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo\"
                    aria-expanded=\"true\" aria-controls=\"collapseTwo\">
                    <i class=\"fas fa-fw fa-cog\"></i>
                    <span>Transactions</span>
                </a>
                <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                    <div class=\"bg-white py-2 collapse-inner rounded\">
                        <h6 class=\"collapse-header\">Authorize operations</h6>
                        <a class=\"collapse-item\" href=\"#\" id=\"deposit\">Recharge Account</a>
                        <a class=\"collapse-item dropdown-toggle\" href=\"#\" id=\"paymentDropdown\"
                                data-toggle=\"dropdown\">Payment</a>
                          <ul class=\"dropdown-menu\" style=\"margin-left: 10px;\">
                            <li><a href=\"#\" id=\"sPayment\">Proceed to pay</a></li>
                            <li><a href=\"#\" id=\"rPayment\">Receive Payment</a></li>
                          </ul>
                        
                        <a class=\"collapse-item\" href=\"#\" id=\"withdraw\" readonly>Withdraw</a>
                        <a class=\"collapse-item\" href=\"#\" id=\"changes\">Changes</a>
                        <a class=\"collapse-item\" href=\"#\" id=\"transfert\">Transfert</a>
                        <a class=\"collapse-item\" href=\"#\" id=\"withdrawRewards\">Withdraw Rewards</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class=\"sidebar-divider\">

            <!-- Heading 
            <div class=\"sidebar-heading\">
                Setting
            </div>-->

            <!-- Nav Item - Pages Collapse Menu -->
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapsePages\"
                    aria-expanded=\"true\" aria-controls=\"collapsePages\">
                    <i class=\"fas fa-fw fa-wrench\"></i>
                    <span>Setting</span>
                </a>
                <div id=\"collapsePages\" class=\"collapse\" aria-labelledby=\"headingPages\" data-parent=\"#accordionSidebar\">
                    <div class=\"bg-white py-2 collapse-inner rounded\">
                        <h6 class=\"collapse-header\">Profile</h6>
                        <a class=\"collapse-item\" href=\"#Edit-profile\" id=\"profile\">Edit Profile</a>
                        <a class=\"collapse-item\" href=\"#\" data-target=\"#currencyModal\" data-toggle=\"modal\">Default Currency</a>
                        <a class=\"collapse-item\" data-target=\"#persoLink\" data-toggle=\"modal\"  href=\"#\"><i class=\"fa fa-gear\"></i>&nbsp;{{ 'Generate Link'|trans }}</a>
                        <a class=\"collapse-item\" href=\"#\">Languages</a>
                        </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class=\"sidebar-divider d-none d-md-block\">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class=\"text-center d-none d-md-inline\">
                <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
            </div>

            <!-- Sidebar Message -->
            <div class=\"sidebar-card\">
                <img class=\"sidebar-card-illustration mb-2\" src=\"/sopay/public/assets/img/logo.png\" alt=\"\">
                <p class=\"text-center mb-2\">Witch <strong>Sopay</strong>, Easy integrate digital payment on your project</p>
                <a class=\"btn btn-success btn-sm\" href=\"{{path('sopay_home')}}\">home</a>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id=\"content-wrapper\" class=\"d-flex flex-column\">

            <!-- Main Content -->
            <div id=\"content\">

                <!-- Topbar -->
                <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
                        <i class=\"fa fa-bars\"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\"
                                aria-label=\"Search\" aria-describedby=\"basic-addon2\">
                            <div class=\"input-group-append\">
                                <button class=\"btn btn-primary\" type=\"button\">
                                    <i class=\"fas fa-search fa-sm\"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class=\"navbar-nav ml-auto\">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class=\"nav-item dropdown no-arrow d-sm-none\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-search fa-fw\"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\"
                                aria-labelledby=\"searchDropdown\">
                                <form class=\"form-inline mr-auto w-100 navbar-search\">
                                    <div class=\"input-group\">
                                        <input type=\"text\" class=\"form-control bg-light border-0 small\"
                                            placeholder=\"Search for...\" aria-label=\"Search\"
                                            aria-describedby=\"basic-addon2\">
                                        <div class=\"input-group-append\">
                                            <button class=\"btn btn-primary\" type=\"button\">
                                                <i class=\"fas fa-search fa-sm\"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class=\"nav-item dropdown no-arrow mx-1\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-bell fa-fw\"></i>
                                <!-- Counter - Alerts -->
                                <span class=\"badge badge-danger badge-counter\">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                aria-labelledby=\"alertsDropdown\">
                                <h6 class=\"dropdown-header\">
                                    Alerts Center
                                </h6>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"mr-3\">
                                        <div class=\"icon-circle bg-primary\">
                                            <i class=\"fas fa-file-alt text-white\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"small text-gray-500\">December 12, 2019</div>
                                        <span class=\"font-weight-bold\">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"mr-3\">
                                        <div class=\"icon-circle bg-success\">
                                            <i class=\"fas fa-donate text-white\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"small text-gray-500\">December 7, 2019</div>
                                        \$290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"mr-3\">
                                        <div class=\"icon-circle bg-warning\">
                                            <i class=\"fas fa-exclamation-triangle text-white\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"small text-gray-500\">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class=\"nav-item dropdown no-arrow mx-1\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-envelope fa-fw\"></i>
                                <!-- Counter - Messages -->
                                <span class=\"badge badge-danger badge-counter\">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                aria-labelledby=\"messagesDropdown\">
                                <h6 class=\"dropdown-header\">
                                    Message Center
                                </h6>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"/sopay/public/assets/img/undraw_profile_1.svg\"
                                            alt=\"\">
                                        <div class=\"status-indicator bg-success\"></div>
                                    </div>
                                    <div class=\"font-weight-bold\">
                                        <div class=\"text-truncate\">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class=\"small text-gray-500\">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"/sopay/public/assets/img/undraw_profile_2.svg\"
                                            alt=\"\">
                                        <div class=\"status-indicator\"></div>
                                    </div>
                                    <div>
                                        <div class=\"text-truncate\">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class=\"small text-gray-500\">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"/sopay/public/assets/img/undraw_profile_3.svg\"
                                            alt=\"\">
                                        <div class=\"status-indicator bg-warning\"></div>
                                    </div>
                                    <div>
                                        <div class=\"text-truncate\">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class=\"small text-gray-500\">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"https://source.unsplash.com/Mv9hjnEUHR4/60x60\"
                                            alt=\"\">
                                        <div class=\"status-indicator bg-success\"></div>
                                    </div>
                                    <div>
                                        <div class=\"text-truncate\">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class=\"small text-gray-500\">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Read More Messages</a>
                            </div>
                        </li>

                        <div class=\"topbar-divider d-none d-sm-block\"></div>

                        <!-- Nav Item - User Information -->
                        <li class=\"nav-item dropdown no-arrow\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">{{user.username}} - {{ user.matricule}}</span>
                                <img class=\"img-profile rounded-circle\"
                                    src=\"/sopay/public/assets/img/undraw_profile.svg\">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                aria-labelledby=\"userDropdown\">
                                <a class=\"dropdown-item\" href=\"#\">
                                    <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Profile
                                </a>
                                <a class=\"dropdown-item\" href=\"#\">
                                    <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Settings
                                </a>
                                <a class=\"dropdown-item\" href=\"#\" data-target=\"#currencyModal\" data-toggle=\"modal\">
                                    <i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Default Currency
                                </a>
                                <a class=\"dropdown-item\" data-target=\"#persoLink\" data-toggle=\"modal\" role=\"presentation\" href=\"#\"><i class=\"fa fa-gear\"></i>&nbsp;{{ 'Generate Link'|trans }}</a>
                                    
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class=\"container-fluid\">
                    {% block content %}
                    <!-- Content Row -->

                    <div id=\"navigationSpace\">
                        {% block navigationSpace %}

                        {% endblock navigationSpace %}
                    </div>
                    <!-- Content Row -->
                    <div class=\"row\">

                        <!-- Content Column -->
                        <div class=\"col-lg-6 mb-4\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-hover text-center\">
                                  <caption class=\"text-center bg-primary\" style=\"font-size: x-large; caption-side:top\">Last Transactions</caption>
                                  <tr>
                                    <th scope=\"col\">Ref</th>
                                    <th scope=\"col\">Operation</th>
                                    <th scope=\"col\">Status</th>
                                    <th scope=\"col\">Date</th>
                                    <th scope=\"col\">Transaction Amount</th>
                                  </tr>
                                  {% for lastOperation in lastOperations %}
                                    {% set dateFormat = lastOperation.date|split('T') %}
                                       <tr> 
                                           <th scope=\"row\"><a href=\"#\" onclick=\"\$.fn.viewDetail('{{ lastOperation.document }}')\">{{lastOperation.document}}</a></th> 
                                           <td>{{lastOperation.operation.name}}</td>
                                           {% if lastOperation.status == 'SUCCESS' or  lastOperation.status == 'RECEIVED'%}
                                           <td class=\"table-success\">{{lastOperation.status}}</td>
                                           {% elseif lastOperation.status == 'PENDING' %} 
                                           <td class=\"table-warning\">{{lastOperation.status}}</td>
                                           {% else %}
                                           <td class=\"table-danger\">{{lastOperation.status}}</td>
                                           {% endif %}
                                           <td>{{dateFormat[0]|split('-')[2]}}-{{dateFormat[0]|split('-')[1]}} At {{ dateFormat[1]|split('-')[0] }}</td>
                                           <td id=\"{{lastOperation.document}}\" onclick=\"\$.fn.convertValue('{{ lastOperation.value }}','{{ lastOperation.document }}')\">{{lastOperation.value}} XPI</td>
                                        </tr>
                                        {% endfor %}
                                </table>
                            </div>
                        
                        </div>
                        
                        <div class=\"col-lg-6 mb-4\">

                            <!-- Illustrations -->
                            <div class=\"card shadow mb-4\">
                                <div class=\"card-header py-3\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Sopay Interfaces</h6>
                                </div>
                                <div class=\"card-body\">
                                    <div class=\"text-center\">
                                        <img class=\"img-fluid px-3 px-sm-4 mt-3 mb-4\" style=\"width: 25rem;\"
                                            src=\"/sopay/public/assets/img/undraw_posting_photo.svg\" alt=\"\">
                                    </div>
                                    <p>Witch a web and mobile interface, simple and intuitive, connect to your SoPay account at any time to Monitor/Manage your transactions</p>
                                    <a target=\"_blank\" rel=\"nofollow\" href=\"#\">Download Mobile Apps &rarr;</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    {% endblock %}
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
              <caption class=\"text-center bg-primary\" style=\"font-size: x-large; caption-side:top\">Sopay Live Exchange Rates</caption>
              <tr>
                <th>Currencies/values</th>
                <th><img style=\"max-height: 36px;\" src=\"/sopay/public/assets/img/xaf.svg\"> XAF</th>
                <th><img style=\"max-height: 36px;\" src=\"/sopay/public/assets/img/usd.svg\"> USD</th>
                <th><img style=\"max-height: 36px;\" src=\"/sopay/public/assets/img/eur.svg\"> EUR</th>
                <th><img style=\"max-height: 36px;\" src=\"/sopay/public/assets/img/xbt.svg\"> BTC</th>
                <th><img style=\"max-height: 36px;\" src=\"/sopay/public/assets/img/logo.png\">XPI</th>
            </tr>
            <tr>
              <td class=\"table-danger\">1 XAF</td>
              <td class=\"table-warning\"> 1 </td>
              <td><span id=\"xaf_usd\">USD</span></td>
              <td><span id=\"xaf_eur\">EUR</span></td>
              <td><span id=\"xaf_btc\">BTC</span></td>
              <td><span id=\"xaf_xpi\">XPI</span></td>
              </tr>
              <tr>
                <td class=\"table-info\">1 USD</td>
                <td><span id=\"usd_xaf\">XAF</span></td>
                <td class=\"table-warning\">1</td>
                <td><span id=\"usd_eur\">EUR></span></td>
                <td><span id=\"usd_btc\">BTC</span></td>
                <td><span id=\"usd_xpi\">XPI</span></td>
              </tr>
              <tr>
                <td class=\"table-warning\">1 EUR</td>
                <td><span id=\"eur_xaf\">XAF</span></td>
                <td><span id=\"eur_usd\">USD<span</td>
                <td class=\"table-warning\">1</td>
                <td><span id=\"eur_btc\">BTC</span></td>
                <td><span id=\"eur_xpi\">XPI<span</td>
            </tr>
              <tr>
                <td class=\"table-success\">1 BTC</td>
                <td><span id=\"btc_xaf\">XAF</span></td>
                <td><span id=\"btc_usd\">USD</span></td>
                <td><span id=\"btc_eur\">EUR</span></td>
                <td class=\"table-warning\">1</td>
                <td><span id=\"btc_xpi\">XPI</span></td>
            </tr>
              <tr>
                <td class=\"table-active\">1 XPI</td>
                <td><span id=\"xpi_xaf\">XAF</span></td>
                <td><span id=\"xpi_usd\">USD</span></td>
                <td><span id=\"xpi_eur\">EUR</span></td>
                <td><span id=\"xpi_btc\">BTC</span></td>
                <td class=\"table-warning\">1</td>
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
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            
            <!-- Footer -->
            <footer class=\"sticky-footer bg-white\">
                <div class=\"container my-auto\">
                    <div class=\"copyright text-center my-auto\">
                        <span><strong>Copyright &copy; MYSOLEAS 2020</strong>. All Rights Reserved</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class=\"scroll-to-top rounded\" href=\"#page-top\">
        <i class=\"fas fa-angle-up\"></i>
    </a>

    <!-- Logout Modal-->
    <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
        aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
                    <a class=\"btn btn-primary\" href=\"{{ path('sopay_logout')}}\">Logout</a>
                </div>
            </div>
        </div>
    </div>

      <!-- currency Modal-->
      <div class=\"modal fade\" id=\"currencyModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"DefaultCurrency\"
      aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
          <div class=\"modal-content\">
              <div class=\"modal-header\">
                  <h5 class=\"modal-title\" id=\"DefaultCurrency\">Select the default currency for your account</h5>
                  <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                      <span aria-hidden=\"true\">×</span>
                  </button>
              </div>
              <div class=\"modal-body d-flex justify-content-between\" style=\"margin: 20px;\">
                  {% for currency in currencies.data %} 
                    {% if currency.code == user.default_currency.code %}
                        <label class=\"d-inline\"> <input class=\"form-check-input\" type=\"radio\" name=\"defCurrency\" value=\"{{currency.code}}\" checked>{{currency.code}}</label>
                    {% else %}
                    <label class=\"d-inline\"> <input class=\"form-check-input\" type=\"radio\" name=\"defCurrency\" value=\"{{currency.code}}\">{{currency.code}}</label>
                    {% endif %}
                  {% endfor %}
              </div>
              <div class=\"modal-footer\">
                  <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
                  <a class=\"btn btn-primary\" href=\"#\" id=\"changeCurrency\">proceed</a>
              </div>
          </div>
      </div>
  </div>
  <div class=\"modal fade\" role=\"dialog\" tabindex=\"-1\" id=\"blockDetailTransaction\" style=\"color:#000\">
    <div class=\"modal-dialog  modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h3 class=\"modal-title\" >{{ 'Transaction Detail'|trans }}</h3><button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button></div>
            <div class=\"modal-body\" id=\"detailTransaction\"></div>
          </div>
  </div>
</div>
<div class=\"modal fade\" role=\"dialog\" tabindex=\"-1\" id=\"persoLink\" style=\"color:#000\">
  <div class=\"modal-dialog  modal-dialog-centered\" role=\"document\">
          <div class=\"modal-content\">
              <div class=\"modal-header\">
                  <h3 class=\"modal-title\" >{{ 'Generate your personal link'|trans }} </h3><button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button></div>
              <div class=\"modal-body d-flex flex-column d-sm-flex justify-content-center justify-content-sm-center\">
                <p> {% trans %}Generate and share your personal link to earn 10% commissions on all purchases made by your prospects on this site{% endtrans %} </p>
              <div><a class=\"btn btn-primary btn-sm\" role=\"button\" href=\"#\" onclick=\"\$.fn.GenerateLink('{{ user.matricule }}')\">{{ 'Click here to proceed'|trans }}</a></div>
              <div style=\"display: none; margin-top:10px\"> 
      <a class=\"d-block\" id=\"blockLink\" style=\"word-wrap: break-word;\" href=\"#\" target=\"_blank\"></a> <button type=\"button\" class=\"btn-sm btn-light\" id=\"copyLink\">Copy</button>
      <div><span>{{'share by'|trans}} : </span> <div class=\"d-flex justify-content-center align-items-center\"><a target=\"_blank\" style=\"margin-right:30px\" id=\"shareWhatsapp\" title=\"Share link by whatsapp\"><i class=\"fa fa-whatsapp\" style=\"color: rgb(53,235,60);font-size: 25px;\"></i></a><a href=\"\" id=\"shareSms\" title=\"share link by sms\"><i class=\"fa fa-commenting\" style=\"font-size: 25px;\"></i></a> <button class=\"d-none\" title=\"{{ 'copy link to share it'|trans }}\" onclick=\"\$.fn.CopyLink('#blockLink')\">{{ 'Copy'|trans }}</button></div></div></div>
                  
          </div>
      </div>
  </div>
</div>
    <div class=\"d-none\" id=\"ppal\"></div>
    <!-- Bootstrap core JavaScript-->
    <script src=\"/sopay/public/assets/vendor/jquery/jquery.min.js\"></script>
    <script src=\"/sopay/public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

    <!-- Core plugin JavaScript-->
    <script src=\"/sopay/public/assets/vendor/jquery-easing/jquery.easing.min.js\"></script>

    <!-- Custom scripts for all pages-->
    <script src=\"/sopay/public/assets/js/sb-admin-2.min.js\"></script>

    <!-- Page level plugins -->
    <script src=\"/sopay/public/assets/vendor/chart.js/Chart.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://www.paypal.com/sdk/js?client-id=AbqHyc7vUhKt-OXaqglCQ2jahzVaSbHNOOKWKhlAVkCeIOSVRm52L3TCqhZmEsFxrmdbl1XYQtthRbBr\"></script>
    <script>
        \$(document).ready(function(){
            var defCurrency;
            if (\$(window).width() > 480 ) {
                \$(\"#accordionSidebar\").removeClass(\"toggled\");
              };
              function addToggled(){
                if (\$(window).width() < 480 ) {
                    \$(\"#accordionSidebar\").addClass(\"toggled\");
                  };
              }
              
              // pass historie array to js and remove &quot;
            
              \$.fn.GenerateLink = function(code){
                if(navigator.browserLanguage){
                var language = navigator.browserLanguage;
            }else{
                var language = navigator.language;
            }
            if(language.indexOf('en') > -1){
              var prefix = 'https://app.soleaspay.com/en/register?r=';
            }else if(language.indexOf('fr') > -1){
              var prefix = 'https://app.soleaspay.com/fr/register?r=';
            }else{
              var prefix = 'https://app.soleaspay.com/register?r=';
            } 
             var link = prefix+code;
             var linkShareWhatsapp = 'https://wa.me/?text=Viens me rejoindre sur SoPay en suivant le lien : '+link;
             var linkShareSms = 'sms:;?&body=Viens me rejoindre sur SoPay en suivant le lien : '+link; 
             \$('#blockLink').text(link).parent('div').show();
             \$('#shareWhatsapp').attr('href', linkShareWhatsapp);
             \$('#shareSms').attr('href', linkShareSms);
            }

            \$('#deposit').on('click', function(e){
                e.preventDefault();
                \$('#navigationSpace').html('');
                \$('#navigationSpace').prepend('<div id=\"newpage\"> </div>');
                \$.ajax({
                    url: \"{{ path('sopay_deposit') }}\",
                    type: \"GET\",
                    dataType: \"HTML\",
                     success:function(data)
                     {
                       \$('#newpage').append(data);
                       addToggled();
                     },
                   error: function(err){
                    console.log(err);
                   }
                 });
            });

            \$('#withdraw').on('click', function(e){
                e.preventDefault();
                \$('#navigationSpace').html('');
                \$('#navigationSpace').prepend('<div id=\"newpage\"> </div>');
                \$.ajax({
                    url: \"{{ path('sopay_withdraw') }}\",
                    type: \"GET\",
                    dataType: \"HTML\",
                     success:function(data)
                     {
                       \$('#newpage').append(data);
                       addToggled();
                     },
                   error: function(err){
                    console.log(err);
                   }
                 });
            });

            \$('#changes').on('click', function(e){
                e.preventDefault();
                \$('#navigationSpace').html('');
                \$('#navigationSpace').prepend('<div id=\"newpage\"> </div>');
                \$.ajax({
                    url: \"{{ path('sopay_changes') }}\",
                    type: \"GET\",
                    dataType: \"HTML\",
                     success:function(data)
                     {
                       \$('#newpage').append(data);
                       addToggled();
                     },
                   error: function(err){
                    console.log(err);
                   }
                 });
            });

            \$('#transfert').on('click', function(e){
                e.preventDefault();
                \$('#navigationSpace').html('');
                \$('#navigationSpace').prepend('<div id=\"newpage\"> </div>');
                \$.ajax({
                    url: \"{{ path('sopay_transfert') }}\",
                    type: \"GET\",
                    dataType: \"HTML\",
                     success:function(data)
                     {
                       \$('#newpage').append(data);
                       addToggled();
                     },
                   error: function(err){
                    console.log(err);
                   }
                 });
            });
            \$('#sPayment').on('click', function(e){
              e.preventDefault();
              \$('#navigationSpace').html('');
              \$('#navigationSpace').prepend('<div id=\"newpage\"> </div>');
              \$.ajax({
                  url: \"{{ path('sopay_transfert') }}\",
                  type: \"GET\",
                  dataType: \"HTML\",
                   success:function(data)
                   {
                     \$('#newpage').append(data);
                     addToggled();
                   },
                 error: function(err){
                  console.log(err);
                 }
               });
            });
            \$('#rPayment').on('click', function(e){
              e.preventDefault();
              \$('#navigationSpace').html('');
              \$('#navigationSpace').prepend('<div id=\"newpage\"> </div>');
              \$.ajax({
                  url: \"{{ path('sopay_transfert') }}\",
                  type: \"GET\",
                  dataType: \"HTML\",
                   success:function(data)
                   {
                     \$('#newpage').append(data);
                     addToggled();
                   },
                 error: function(err){
                  console.log(err);
                 }
               });
            });
            \$('#withdrawRewards').on('click', function(e){
                e.preventDefault();
                \$('#navigationSpace').html('');
                \$('#navigationSpace').prepend('<div id=\"newpage\"> </div>');
                \$.ajax({
                    url: \"{{ path('sopay_withdraw_rewards') }}\",
                    type: \"GET\",
                    dataType: \"HTML\",
                     success:function(data)
                     {
                       \$('#newpage').append(data);
                       addToggled();
                     },
                   error: function(err){
                    console.log(err);
                   }
                 });
            });

            \$('#profile').on('click', function(e){
                e.preventDefault();
                \$('#navigationSpace').html('');
                \$('#navigationSpace').prepend('<div id=\"newpage\"> </div>');
                \$.ajax({
                    url: \"{{ path('sopay_profile') }}\",
                    type: \"GET\",
                    dataType: \"HTML\",
                     success:function(data)
                     {
                       \$('#newpage').append(data);
                       addToggled();
                     },
                   error: function(err){
                    console.log(err);
                   }
                 });
            });

            \$(\"input[name='defCurrency']\").on('click', function(){
                defCurrency = this.value;
            });

            \$('#changeCurrency').on('click', function(e){
                e.preventDefault();
                \$.ajax({
                    url: \"{{ path('sopay_change_currency') }}\",
                    type: \"GET\",
                    dataType: \"JSON\",
                    data: {currency: defCurrency },
                     success:function(data)
                     {
                       alert(data.message);
                       location.reload();
                     },
                   error: function(err){
                    console.log(err);
                   }
                 });
            });

            \$.fn.viewDetail = function(document){
                let detailTransaction = \$('#detailTransaction');
                \$('#blockDetailTransaction').modal('toggle');
                 \$.ajax({
                     url: \"{{ path('sopay_detail_transaction') }}\",
                     type: \"POST\",
                     dataType: \"html\",
                     data: {document: document},
                     success:function(data)
                      {
                        detailTransaction.html('');
                        detailTransaction.html(data).show();
                      },
                    error: function(err){
                      console.log(err);
                    }
                    }); 
                    
              };
              \$.fn.convertValue = function(value, id){
                var destCell = \$('#'+id);
                 \$.ajax({
                    url: \"https://soleaspay.com/convert\",
                    type: \"GET\",
                    dataType: \"JSON\",
                    data: {amount: value,
                          devise: 'XPI',
                          out: '{{user.default_currency.code}}'},
                    success:function(data)
                    {
                      destCell.html('');
                      destCell.append('<span>'+data.data.value+' '+ data.data.devise+'</span>');
                     },
                    error: function(err){
                      console.log(err);
                    }
                    }); 
                    
              };
        });

var dateStart = '{{user.date_start}}',
    startMonth = dateStart.split('-')[1]-1,
    //A travailler efficassement
    months = [\"Oct\", \"Nov\", \"Dec\",\"Jan\", \"Feb\", \"Mar\", \"Apr\", \"May\", \"Jun\", \"Jul\", \"Aug\", \"Sep\"],
    histories = JSON.parse({{(histories|json_encode|raw)}});
    var totalPurchase = JSON.parse({{(totalPurchase|json_encode|raw)}});
    var totalTransfert = JSON.parse({{(totalTransfert|json_encode|raw)}});
    var totalRewards = '{{user.total_income_rewards}}';
    var dataTransact = [totalPurchase.value, totalTransfert.value, totalRewards];
    var dataMonths = [0,0,0,0,0,0,0,0,0,0,0,0];
    for (var i = 0; i < histories.length; i++) {
        var actualMonthPosition = histories[i].month.split('-')[1]-10;
        dataMonths[actualMonthPosition] = histories[i].value;
    }
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,\"Segoe UI\",Roboto,\"Helvetica Neue\",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

function number_format(number, decimals, dec_point, thousands_sep) {
  // *     example: number_format(1234.56, 2, ',', ' ');
  // *     return: '1 234,56'
  number = (number + '').replace(',', '').replace(' ', '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + Math.round(n * k) / k;
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\\B(?=(?:\\d{3})+(?!\\d))/g, sep);
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1).join('0');
  }
  return s.join(dec);
}
// Area Chart Example
var ctx = document.getElementById(\"myAreaChart\");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: [\"Oct\", \"Nov\", \"Dec\",\"Jan\", \"Feb\", \"Mar\", \"Apr\", \"May\", \"Jun\", \"Jul\", \"Aug\", \"Sep\"],
    datasets: [{
      label: \"Amount\",
      lineTension: 0.3,
      backgroundColor: \"rgba(78, 115, 223, 0.05)\",
      borderColor: \"rgba(78, 115, 223, 1)\",
      pointRadius: 3,
      pointBackgroundColor: \"rgba(78, 115, 223, 1)\",
      pointBorderColor: \"rgba(78, 115, 223, 1)\",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: \"rgba(78, 115, 223, 1)\",
      pointHoverBorderColor: \"rgba(78, 115, 223, 1)\",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      data: dataMonths,
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return number_format(value)+' {{user.default_currency.code}}';
          }
        },
        gridLines: {
          color: \"rgb(234, 236, 244)\",
          zeroLineColor: \"rgb(234, 236, 244)\",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      backgroundColor: \"rgb(255,255,255)\",
      bodyFontColor: \"#858796\",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ': ' + number_format(tooltipItem.yLabel)+' {{user.default_currency.code}}';
        }
      }
    }
  }
});

// Pie Chart Example
var ctx = document.getElementById(\"myPieChart\");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: [\"E-commerce\", \"Transfert\", \"Referral\"],
    datasets: [{
      data: dataTransact,
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
      hoverBorderColor: \"rgba(234, 236, 244, 1)\",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: \"rgb(255,255,255)\",
      bodyFontColor: \"#858796\",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});

</script>

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
  
    {% block parentScripts %}
    {% endblock %}
</body>

</html>", "user/layout.html.twig", "/var/www/html/sopay/templates/user/layout.html.twig");
    }
}
