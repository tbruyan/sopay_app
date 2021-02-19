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

/* @CsaGuzzle/Calls/list.html.twig */
class __TwigTemplate_ffc9ff2273f15e2544bb063fd099618babc693c03cbe3de4cb05b56b8daa7ab6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CsaGuzzle/Calls/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CsaGuzzle/Calls/list.html.twig"));

        // line 1
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@CsaGuzzle/Calls/macros.html.twig", "@CsaGuzzle/Calls/list.html.twig", 1)->unwrap();
        // line 2
        echo "
<div class=\"accordion\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["calls"]) || array_key_exists("calls", $context) ? $context["calls"] : (function () { throw new RuntimeError('Variable "calls" does not exist.', 4, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["call"]) {
            // line 5
            echo "        <section class=\"call\">
            <header class=\"accordion-header ";
            // line 6
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["call"], "request", [], "any", false, false, false, 6), "method", [], "any", false, false, false, 6)), "html", null, true);
            echo "\">
                <span class=\"method-name\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["call"], "request", [], "any", false, false, false, 7), "method", [], "any", false, false, false, 7), "html", null, true);
            echo "</span>
                ";
            // line 8
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["call"], "request", [], "any", false, false, false, 8), "method", [], "any", false, false, false, 8), "GET"))) {
                // line 9
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["call"], "uri", [], "any", false, false, false, 9), "html", null, true);
                echo "\" target=\"_blank\" class=\"path\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["call"], "uri", [], "any", false, false, false, 9), "html", null, true);
                echo "</a>
                ";
            } else {
                // line 11
                echo "                    <span class=\"path\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["call"], "uri", [], "any", false, false, false, 11), "html", null, true);
                echo "</span>
                ";
            }
            // line 13
            echo "                ";
            $context["statusCode"] = twig_get_attribute($this->env, $this->source, $context["call"], "httpCode", [], "any", false, false, false, 13);
            // line 14
            echo "                <span class=\"badge status-code ";
            echo twig_escape_filter($this->env, $this->extensions['Csa\Bundle\GuzzleBundle\Twig\Extension\GuzzleExtension']->statusCodeClass((isset($context["statusCode"]) || array_key_exists("statusCode", $context) ? $context["statusCode"] : (function () { throw new RuntimeError('Variable "statusCode" does not exist.', 14, $this->source); })())), "html", null, true);
            echo "\">
                    ";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["statusCode"]) || array_key_exists("statusCode", $context) ? $context["statusCode"] : (function () { throw new RuntimeError('Variable "statusCode" does not exist.', 15, $this->source); })()), "html", null, true);
            echo " - ";
            ((twig_get_attribute($this->env, $this->source, $context["call"], "response", [], "any", true, true, false, 15)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["call"], "response", [], "any", false, false, false, 15), "reasonPhrase", [], "any", false, false, false, 15), "html", null, true))) : (print ("Unknown error")));
            echo "
                </span>
                ";
            // line 17
            if (twig_get_attribute($this->env, $this->source, $context["call"], "cache", [], "any", true, true, false, 17)) {
                echo "<span class=\"badge cache ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["call"], "cache", [], "any", false, false, false, 17)), "html", null, true);
                echo "\">Cache ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["call"], "cache", [], "any", false, false, false, 17), "html", null, true);
                echo "</span>";
            }
            // line 18
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["call"], "mock", [], "any", true, true, false, 18)) {
                echo "<span class=\"badge mock ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["call"], "mock", [], "any", false, false, false, 18)), "html", null, true);
                echo "\">Mock ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["call"], "mock", [], "any", false, false, false, 18), "html", null, true);
                echo "</span>";
            }
            // line 19
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["call"], "info", [], "any", false, false, false, 19)) {
                // line 20
                echo "                    ";
                if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["call"], "info", [], "any", false, false, false, 20), "total_time", [], "any", false, false, false, 20), 1))) {
                    // line 21
                    echo "                        ";
                    $context["duration_color"] = "error";
                    // line 22
                    echo "                    ";
                } elseif ((-1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["call"], "info", [], "any", false, false, false, 22), "total_time", [], "any", false, false, false, 22), 0.2))) {
                    // line 23
                    echo "                        ";
                    $context["duration_color"] = "success";
                    // line 24
                    echo "                    ";
                } else {
                    // line 25
                    echo "                        ";
                    $context["duration_color"] = "warning";
                    // line 26
                    echo "                    ";
                }
                // line 27
                echo "                    <span class=\"badge duration ";
                echo twig_escape_filter($this->env, (isset($context["duration_color"]) || array_key_exists("duration_color", $context) ? $context["duration_color"] : (function () { throw new RuntimeError('Variable "duration_color" does not exist.', 27, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Csa\Bundle\GuzzleBundle\Twig\Extension\GuzzleExtension']->formatDuration(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["call"], "info", [], "any", false, false, false, 27), "total_time", [], "any", false, false, false, 27)), "html", null, true);
                echo "</span>
                ";
            }
            // line 29
            echo "            </header>

            <div class=\"accordion-content";
            // line 31
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 31)) ? (" expanded") : (""));
            echo "\">
                <div class=\"sf-tabs\">
                    <div class=\"tab\">
                        <h3 class=\"tab-title\">Request</h3>
                        <div class=\"tab-content\">
                            ";
            // line 36
            echo twig_call_macro($macros["macros"], "macro_render_infos", [twig_get_attribute($this->env, $this->source, $context["call"], "info", [], "any", false, false, false, 36)], 36, $context, $this->getSourceContext());
            echo "
                            ";
            // line 37
            echo twig_call_macro($macros["macros"], "macro_render_headers", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["call"], "request", [], "any", false, false, false, 37), "headers", [], "any", false, false, false, 37), twig_get_attribute($this->env, $this->source, $context["call"], "uri", [], "any", false, false, false, 37)], 37, $context, $this->getSourceContext());
            echo "
                            ";
            // line 38
            echo twig_call_macro($macros["macros"], "macro_render_body", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["call"], "request", [], "any", false, false, false, 38), "body", [], "any", false, false, false, 38)], 38, $context, $this->getSourceContext());
            echo "
                            ";
            // line 39
            if (twig_get_attribute($this->env, $this->source, $context["call"], "curl", [], "any", true, true, false, 39)) {
                // line 40
                echo "                                ";
                echo twig_call_macro($macros["macros"], "macro_render_curl", [twig_get_attribute($this->env, $this->source, $context["call"], "curl", [], "any", false, false, false, 40)], 40, $context, $this->getSourceContext());
                echo "
                            ";
            }
            // line 42
            echo "                        </div>
                    </div>
                    ";
            // line 44
            if (twig_get_attribute($this->env, $this->source, $context["call"], "response", [], "any", true, true, false, 44)) {
                // line 45
                echo "                        <div class=\"tab\">
                            <h3 class=\"tab-title\">Response</h3>
                            <div class=\"tab-content\">
                                ";
                // line 48
                echo twig_call_macro($macros["macros"], "macro_render_headers", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["call"], "response", [], "any", false, false, false, 48), "headers", [], "any", false, false, false, 48), twig_get_attribute($this->env, $this->source, $context["call"], "uri", [], "any", false, false, false, 48)], 48, $context, $this->getSourceContext());
                echo "
                                ";
                // line 49
                echo twig_call_macro($macros["macros"], "macro_render_body", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["call"], "response", [], "any", false, false, false, 49), "body", [], "any", false, false, false, 49)], 49, $context, $this->getSourceContext());
                echo "
                            </div>
                        </div>
                    ";
            }
            // line 53
            echo "                    ";
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["call"], "error", [], "any", false, false, false, 53))) {
                // line 54
                echo "                        <div class=\"tab\">
                            <h3 class=\"tab-title\">Error</h3>
                            <div class=\"tab-content\">
                                ";
                // line 57
                echo twig_call_macro($macros["macros"], "macro_render_error", [twig_get_attribute($this->env, $this->source, $context["call"], "error", [], "any", false, false, false, 57)], 57, $context, $this->getSourceContext());
                echo "
                            </div>
                        </div>
                    ";
            }
            // line 61
            echo "                </div>
            </div>
        </section>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['call'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@CsaGuzzle/Calls/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 65,  226 => 61,  219 => 57,  214 => 54,  211 => 53,  204 => 49,  200 => 48,  195 => 45,  193 => 44,  189 => 42,  183 => 40,  181 => 39,  177 => 38,  173 => 37,  169 => 36,  161 => 31,  157 => 29,  149 => 27,  146 => 26,  143 => 25,  140 => 24,  137 => 23,  134 => 22,  131 => 21,  128 => 20,  125 => 19,  116 => 18,  108 => 17,  101 => 15,  96 => 14,  93 => 13,  87 => 11,  79 => 9,  77 => 8,  73 => 7,  69 => 6,  66 => 5,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@CsaGuzzle/Calls/macros.html.twig' as macros %}

<div class=\"accordion\">
    {% for call in calls %}
        <section class=\"call\">
            <header class=\"accordion-header {{ call.request.method|lower }}\">
                <span class=\"method-name\">{{ call.request.method }}</span>
                {% if call.request.method == 'GET' %}
                    <a href=\"{{ call.uri }}\" target=\"_blank\" class=\"path\">{{ call.uri }}</a>
                {% else %}
                    <span class=\"path\">{{ call.uri }}</span>
                {% endif %}
                {% set statusCode = call.httpCode %}
                <span class=\"badge status-code {{ statusCode|csa_guzzle_status_code_class }}\">
                    {{ statusCode }} - {{ call.response is defined ? call.response.reasonPhrase : 'Unknown error' }}
                </span>
                {% if call.cache is defined %}<span class=\"badge cache {{ call.cache|lower }}\">Cache {{ call.cache }}</span>{% endif %}
                {% if call.mock is defined %}<span class=\"badge mock {{ call.mock|lower }}\">Mock {{ call.mock }}</span>{% endif %}
                {% if call.info %}
                    {% if call.info.total_time > 1 %}
                        {% set duration_color = 'error' %}
                    {% elseif call.info.total_time < 0.2 %}
                        {% set duration_color = 'success' %}
                    {% else %}
                        {% set duration_color = 'warning' %}
                    {% endif %}
                    <span class=\"badge duration {{ duration_color }}\">{{ call.info.total_time|csa_guzzle_format_duration }}</span>
                {% endif %}
            </header>

            <div class=\"accordion-content{{ loop.first ? ' expanded': '' }}\">
                <div class=\"sf-tabs\">
                    <div class=\"tab\">
                        <h3 class=\"tab-title\">Request</h3>
                        <div class=\"tab-content\">
                            {{ macros.render_infos(call.info) }}
                            {{ macros.render_headers(call.request.headers, call.uri) }}
                            {{ macros.render_body(call.request.body) }}
                            {% if call.curl is defined %}
                                {{ macros.render_curl(call.curl) }}
                            {% endif %}
                        </div>
                    </div>
                    {% if call.response is defined %}
                        <div class=\"tab\">
                            <h3 class=\"tab-title\">Response</h3>
                            <div class=\"tab-content\">
                                {{ macros.render_headers(call.response.headers, call.uri) }}
                                {{ macros.render_body(call.response.body) }}
                            </div>
                        </div>
                    {% endif %}
                    {% if call.error is not null %}
                        <div class=\"tab\">
                            <h3 class=\"tab-title\">Error</h3>
                            <div class=\"tab-content\">
                                {{ macros.render_error(call.error) }}
                            </div>
                        </div>
                    {% endif %}
                </div>
            </div>
        </section>
    {% endfor %}
</div>
", "@CsaGuzzle/Calls/list.html.twig", "/var/www/html/sopay/vendor/csa/guzzle-bundle/src/Resources/views/Calls/list.html.twig");
    }
}
