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

/* contact.html.twig */
class __TwigTemplate_bccf33e850eb09b4982770c4076fb8debbbfb27fc9343c1a2dca614b55141491 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Contact ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        echo "    
    <!-- Start contact Area -->
    <div id=\"contact\" class=\"contact-area\">
        <div class=\"contact-inner area-padding\">
          <div class=\"contact-overly\"></div>
          <div class=\"container \">
            <div class=\"row\">
              <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"section-headline text-center\">
                  <h2>Contact us</h2>
                </div>
              </div>
            </div>
            <div class=\"row\">
              <!-- Start contact icon column -->
              <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"contact-icon text-center\">
                  <div class=\"single-icon\">
                    <i class=\"fa fa-mobile\"></i>
                    <p>
                      Call: +237 698 479 723<br>
                      <span>Monday-Friday (8am-6pm)</span>
                    </p>
                  </div>
                </div>
              </div>
              <!-- Start contact icon column -->
              <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"contact-icon text-center\">
                  <div class=\"single-icon\">
                    <i class=\"fa fa-envelope-o\"></i>
                    <p>
                      Email: support@soleaspay.com<br>
                      <span>Web: www.soleaspay.com</span>
                    </p>
                  </div>
                </div>
              </div>
              <!-- Start contact icon column -->
              <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"contact-icon text-center\">
                  <div class=\"single-icon\">
                    <i class=\"fa fa-map-marker\"></i>
                    <p>
                      Location: Logpom Douala<br>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"row\">
    
              <!-- Start Google Map -->
              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <!-- Start Map --
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sDouala%2C+NY%2C+CMR!5e0!3m2!1sen!2sbg!4v1540447494452\" width=\"100%\" height=\"380\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
                -->
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.6989600701127!2d9.769842655206446!3d4.081590528990455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10610dccd8d795cd%3A0xa863d7654efb7752!2sLogpom%2C%20Douala!5e0!3m2!1sen!2scm!4v1605710343940!5m2!1sen!2scm\" width=\"100%\" height=\"380\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
                <!-- End Map -->
              </div>
              <!-- End Google Map -->
    
              <!-- Start  contact -->
              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <div class=\"form contact-form\">
                  <div id=\"sendmessage\">Your message has been sent. Thank you!</div>
                  <div id=\"errormessage\"></div>
                  <form action=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sopay_contact");
        echo "\" method=\"post\" role=\"form\" class=\"contactForm\">
                    <div class=\"form-group\">
                      <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 4 chars\" />
                      <div class=\"validation\"></div>
                    </div>
                    <div class=\"form-group\">
                      <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Your Email\" data-rule=\"email\" data-msg=\"Please enter a valid email\" />
                      <div class=\"validation\"></div>
                    </div>
                    <div class=\"form-group\">
                      <input type=\"text\" class=\"form-control\" name=\"subject\" id=\"subject\" placeholder=\"Subject\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 8 chars of subject\" />
                      <div class=\"validation\"></div>
                    </div>
                    <div class=\"form-group\">
                      <textarea class=\"form-control\" name=\"message\" rows=\"5\" data-rule=\"required\" data-msg=\"Please write something for us\" placeholder=\"Message\"></textarea>
                      <div class=\"validation\"></div>
                    </div>
                    <div class=\"text-center\"><button type=\"submit\">Send Message</button></div>
                  </form>
                </div>
              </div>
              <!-- End Left contact -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Contact Area -->
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 75,  82 => 8,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}


    {% block title %}
    Contact {{ parent() }}
    {% endblock %}
    
{% block content %}    
    <!-- Start contact Area -->
    <div id=\"contact\" class=\"contact-area\">
        <div class=\"contact-inner area-padding\">
          <div class=\"contact-overly\"></div>
          <div class=\"container \">
            <div class=\"row\">
              <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"section-headline text-center\">
                  <h2>Contact us</h2>
                </div>
              </div>
            </div>
            <div class=\"row\">
              <!-- Start contact icon column -->
              <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"contact-icon text-center\">
                  <div class=\"single-icon\">
                    <i class=\"fa fa-mobile\"></i>
                    <p>
                      Call: +237 698 479 723<br>
                      <span>Monday-Friday (8am-6pm)</span>
                    </p>
                  </div>
                </div>
              </div>
              <!-- Start contact icon column -->
              <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"contact-icon text-center\">
                  <div class=\"single-icon\">
                    <i class=\"fa fa-envelope-o\"></i>
                    <p>
                      Email: support@soleaspay.com<br>
                      <span>Web: www.soleaspay.com</span>
                    </p>
                  </div>
                </div>
              </div>
              <!-- Start contact icon column -->
              <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"contact-icon text-center\">
                  <div class=\"single-icon\">
                    <i class=\"fa fa-map-marker\"></i>
                    <p>
                      Location: Logpom Douala<br>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"row\">
    
              <!-- Start Google Map -->
              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <!-- Start Map --
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sDouala%2C+NY%2C+CMR!5e0!3m2!1sen!2sbg!4v1540447494452\" width=\"100%\" height=\"380\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
                -->
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.6989600701127!2d9.769842655206446!3d4.081590528990455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10610dccd8d795cd%3A0xa863d7654efb7752!2sLogpom%2C%20Douala!5e0!3m2!1sen!2scm!4v1605710343940!5m2!1sen!2scm\" width=\"100%\" height=\"380\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
                <!-- End Map -->
              </div>
              <!-- End Google Map -->
    
              <!-- Start  contact -->
              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <div class=\"form contact-form\">
                  <div id=\"sendmessage\">Your message has been sent. Thank you!</div>
                  <div id=\"errormessage\"></div>
                  <form action=\"{{path('sopay_contact')}}\" method=\"post\" role=\"form\" class=\"contactForm\">
                    <div class=\"form-group\">
                      <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 4 chars\" />
                      <div class=\"validation\"></div>
                    </div>
                    <div class=\"form-group\">
                      <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Your Email\" data-rule=\"email\" data-msg=\"Please enter a valid email\" />
                      <div class=\"validation\"></div>
                    </div>
                    <div class=\"form-group\">
                      <input type=\"text\" class=\"form-control\" name=\"subject\" id=\"subject\" placeholder=\"Subject\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 8 chars of subject\" />
                      <div class=\"validation\"></div>
                    </div>
                    <div class=\"form-group\">
                      <textarea class=\"form-control\" name=\"message\" rows=\"5\" data-rule=\"required\" data-msg=\"Please write something for us\" placeholder=\"Message\"></textarea>
                      <div class=\"validation\"></div>
                    </div>
                    <div class=\"text-center\"><button type=\"submit\">Send Message</button></div>
                  </form>
                </div>
              </div>
              <!-- End Left contact -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Contact Area -->
      {% endblock %}", "contact.html.twig", "/var/www/html/sopay/templates/contact.html.twig");
    }
}
