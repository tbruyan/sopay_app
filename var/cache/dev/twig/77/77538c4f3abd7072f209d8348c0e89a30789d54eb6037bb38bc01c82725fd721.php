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

/* @CsaGuzzle/Collector/guzzle.html.twig */
class __TwigTemplate_07315490ea805c8759eff9d21c3c3f1181c076bd5bb44897683b154b61181c03 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'head' => [$this, 'block_head'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CsaGuzzle/Collector/guzzle.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CsaGuzzle/Collector/guzzle.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@CsaGuzzle/Collector/guzzle.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["callCount"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 4, $this->source); })()), "calls", [], "any", false, false, false, 4));
        // line 5
        echo "    ";
        $context["errorCount"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 5, $this->source); })()), "errors", [], "any", false, false, false, 5));
        // line 6
        echo "
    ";
        // line 7
        $context["cacheHitCount"] = 0;
        // line 8
        echo "    ";
        $context["cacheMissCount"] = 0;
        // line 9
        echo "
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 10, $this->source); })()), "calls", [], "any", false, false, false, 10), function ($__call__) use ($context, $macros) { $context["call"] = $__call__; return (twig_get_attribute($this->env, $this->source, $context["call"], "cache", [], "any", true, true, false, 10) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["call"], "cache", [], "any", false, false, false, 10), "HIT"))); }));
        foreach ($context['_seq'] as $context["_key"] => $context["call"]) {
            // line 11
            echo "        ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["call"], "cache", [], "any", false, false, false, 11), "HIT"))) {
                // line 12
                echo "            ";
                $context["cacheHitCount"] = ((isset($context["cacheHitCount"]) || array_key_exists("cacheHitCount", $context) ? $context["cacheHitCount"] : (function () { throw new RuntimeError('Variable "cacheHitCount" does not exist.', 12, $this->source); })()) + 1);
                // line 13
                echo "        ";
            } else {
                // line 14
                echo "            ";
                $context["cacheMissCount"] = ((isset($context["cacheMissCount"]) || array_key_exists("cacheMissCount", $context) ? $context["cacheMissCount"] : (function () { throw new RuntimeError('Variable "cacheMissCount" does not exist.', 14, $this->source); })()) + 1);
                // line 15
                echo "        ";
            }
            // line 16
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['call'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
    ";
        // line 18
        $context["mockReplayCount"] = 0;
        // line 19
        echo "    ";
        $context["mockRecordCount"] = 0;
        // line 20
        echo "
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 21, $this->source); })()), "calls", [], "any", false, false, false, 21), function ($__call__) use ($context, $macros) { $context["call"] = $__call__; return twig_get_attribute($this->env, $this->source, $context["call"], "mock", [], "any", true, true, false, 21); }));
        foreach ($context['_seq'] as $context["_key"] => $context["call"]) {
            // line 22
            echo "        ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["call"], "mock", [], "any", false, false, false, 22), "REPLAY"))) {
                // line 23
                echo "            ";
                $context["mockReplayCount"] = ((isset($context["mockReplayCount"]) || array_key_exists("mockReplayCount", $context) ? $context["mockReplayCount"] : (function () { throw new RuntimeError('Variable "mockReplayCount" does not exist.', 23, $this->source); })()) + 1);
                // line 24
                echo "        ";
            } else {
                // line 25
                echo "            ";
                $context["mockRecordCount"] = ((isset($context["mockRecordCount"]) || array_key_exists("mockRecordCount", $context) ? $context["mockRecordCount"] : (function () { throw new RuntimeError('Variable "mockRecordCount" does not exist.', 25, $this->source); })()) + 1);
                // line 26
                echo "        ";
            }
            // line 27
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['call'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
    ";
        // line 29
        if ((0 === twig_compare((isset($context["callCount"]) || array_key_exists("callCount", $context) ? $context["callCount"] : (function () { throw new RuntimeError('Variable "callCount" does not exist.', 29, $this->source); })()), 0))) {
            // line 30
            echo "        ";
            $context["color_code"] = "";
            // line 31
            echo "    ";
        } elseif ((1 === twig_compare((isset($context["errorCount"]) || array_key_exists("errorCount", $context) ? $context["errorCount"] : (function () { throw new RuntimeError('Variable "errorCount" does not exist.', 31, $this->source); })()), 0))) {
            // line 32
            echo "        ";
            $context["color_code"] = "red";
            // line 33
            echo "    ";
        } else {
            // line 34
            echo "        ";
            $context["color_code"] = "green";
            // line 35
            echo "    ";
        }
        // line 36
        echo "
    ";
        // line 37
        ob_start();
        // line 38
        echo "        ";
        echo twig_include($this->env, $context, "@CsaGuzzle/Icon/guzzle.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["callCount"]) || array_key_exists("callCount", $context) ? $context["callCount"] : (function () { throw new RuntimeError('Variable "callCount" does not exist.', 39, $this->source); })()), "html", null, true);
        echo "</span>
        ";
        // line 40
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 40, $this->source); })()), "totalTime", [], "any", false, false, false, 40), 0))) {
            // line 41
            echo "            <span class=\"sf-toolbar-label\">
                in <span class=\"sf-toolbar-value\">";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Csa\Bundle\GuzzleBundle\Twig\Extension\GuzzleExtension']->formatDuration(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 42, $this->source); })()), "totalTime", [], "any", false, false, false, 42)), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 45
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        echo "
    ";
        // line 47
        ob_start();
        // line 48
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Success</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
        // line 50
        echo twig_escape_filter($this->env, ((isset($context["callCount"]) || array_key_exists("callCount", $context) ? $context["callCount"] : (function () { throw new RuntimeError('Variable "callCount" does not exist.', 50, $this->source); })()) - (isset($context["errorCount"]) || array_key_exists("errorCount", $context) ? $context["errorCount"] : (function () { throw new RuntimeError('Variable "errorCount" does not exist.', 50, $this->source); })())), "html", null, true);
        echo "</span>
        </div>
        ";
        // line 52
        if ((isset($context["cacheHitCount"]) || array_key_exists("cacheHitCount", $context) ? $context["cacheHitCount"] : (function () { throw new RuntimeError('Variable "cacheHitCount" does not exist.', 52, $this->source); })())) {
            // line 53
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Cache HIT</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
            // line 55
            echo twig_escape_filter($this->env, (isset($context["cacheHitCount"]) || array_key_exists("cacheHitCount", $context) ? $context["cacheHitCount"] : (function () { throw new RuntimeError('Variable "cacheHitCount" does not exist.', 55, $this->source); })()), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 58
        echo "        ";
        if ((isset($context["cacheMissCount"]) || array_key_exists("cacheMissCount", $context) ? $context["cacheMissCount"] : (function () { throw new RuntimeError('Variable "cacheMissCount" does not exist.', 58, $this->source); })())) {
            // line 59
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Cache MISS</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
            // line 61
            echo twig_escape_filter($this->env, (isset($context["cacheMissCount"]) || array_key_exists("cacheMissCount", $context) ? $context["cacheMissCount"] : (function () { throw new RuntimeError('Variable "cacheMissCount" does not exist.', 61, $this->source); })()), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 64
        echo "        ";
        if ((isset($context["mockReplayCount"]) || array_key_exists("mockReplayCount", $context) ? $context["mockReplayCount"] : (function () { throw new RuntimeError('Variable "mockReplayCount" does not exist.', 64, $this->source); })())) {
            // line 65
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Mocks (replayed)</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
            // line 67
            echo twig_escape_filter($this->env, (isset($context["mockReplayCount"]) || array_key_exists("mockReplayCount", $context) ? $context["mockReplayCount"] : (function () { throw new RuntimeError('Variable "mockReplayCount" does not exist.', 67, $this->source); })()), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 70
        echo "        ";
        if ((isset($context["mockRecordCount"]) || array_key_exists("mockRecordCount", $context) ? $context["mockRecordCount"] : (function () { throw new RuntimeError('Variable "mockRecordCount" does not exist.', 70, $this->source); })())) {
            // line 71
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Mocks (recorded)</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
            // line 73
            echo twig_escape_filter($this->env, (isset($context["mockRecordCount"]) || array_key_exists("mockRecordCount", $context) ? $context["mockRecordCount"] : (function () { throw new RuntimeError('Variable "mockRecordCount" does not exist.', 73, $this->source); })()), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 76
        echo "        ";
        if ((isset($context["errorCount"]) || array_key_exists("errorCount", $context) ? $context["errorCount"] : (function () { throw new RuntimeError('Variable "errorCount" does not exist.', 76, $this->source); })())) {
            // line 77
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-red\">";
            // line 79
            echo twig_escape_filter($this->env, (isset($context["errorCount"]) || array_key_exists("errorCount", $context) ? $context["errorCount"] : (function () { throw new RuntimeError('Variable "errorCount" does not exist.', 79, $this->source); })()), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 82
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 83
        echo "
    ";
        // line 84
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => "guzzle", "status" => (isset($context["color_code"]) || array_key_exists("color_code", $context) ? $context["color_code"] : (function () { throw new RuntimeError('Variable "color_code" does not exist.', 84, $this->source); })())]);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 88
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style>";
        // line 89
        echo twig_include($this->env, $context, "@CsaGuzzle/css/screen.min.css");
        echo "</style>
    <script>";
        // line 90
        echo twig_include($this->env, $context, "@CsaGuzzle/js/guzzle.min.js");
        echo "</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 93
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 94
        echo "    <span class=\"label ";
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 94, $this->source); })()), "errors", [], "any", false, false, false, 94)), 0))) {
            echo "label-status-error";
        }
        echo "\">
        <span class=\"icon\">
            ";
        // line 96
        echo twig_include($this->env, $context, "@CsaGuzzle/Icon/guzzle.svg");
        echo "

        </span>
        <strong>";
        // line 99
        echo twig_escape_filter($this->env, _twig_default_filter(twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 99, $this->source); })()), "name", [], "any", false, false, false, 99)), "HTTP calls"), "html", null, true);
        echo "</strong>
        ";
        // line 100
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 100, $this->source); })()), "calls", [], "any", false, false, false, 100))) {
            // line 101
            echo "            <span class=\"count\">
                <span>";
            // line 102
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 102, $this->source); })()), "calls", [], "any", false, false, false, 102)), "html", null, true);
            echo "</span>
                ";
            // line 103
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 103, $this->source); })()), "totalTime", [], "any", false, false, false, 103), 0))) {
                // line 104
                echo "                    <span>";
                echo twig_escape_filter($this->env, $this->extensions['Csa\Bundle\GuzzleBundle\Twig\Extension\GuzzleExtension']->formatDuration(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 104, $this->source); })()), "totalTime", [], "any", false, false, false, 104)), "html", null, true);
                echo "</span>
                ";
            }
            // line 106
            echo "            </span>
        ";
        }
        // line 108
        echo "    </span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 111
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 112
        echo "    <h2>";
        echo twig_escape_filter($this->env, _twig_default_filter(twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 112, $this->source); })()), "name", [], "any", false, false, false, 112)), "HTTP calls"), "html", null, true);
        echo "</h2>
    ";
        // line 113
        echo twig_include($this->env, $context, "@CsaGuzzle/Calls/list.html.twig", ["calls" => twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 113, $this->source); })()), "calls", [], "any", false, false, false, 113)]);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@CsaGuzzle/Collector/guzzle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 113,  397 => 112,  387 => 111,  376 => 108,  372 => 106,  366 => 104,  364 => 103,  360 => 102,  357 => 101,  355 => 100,  351 => 99,  345 => 96,  337 => 94,  327 => 93,  315 => 90,  311 => 89,  306 => 88,  296 => 87,  284 => 84,  281 => 83,  278 => 82,  272 => 79,  268 => 77,  265 => 76,  259 => 73,  255 => 71,  252 => 70,  246 => 67,  242 => 65,  239 => 64,  233 => 61,  229 => 59,  226 => 58,  220 => 55,  216 => 53,  214 => 52,  209 => 50,  205 => 48,  203 => 47,  200 => 46,  197 => 45,  191 => 42,  188 => 41,  186 => 40,  182 => 39,  177 => 38,  175 => 37,  172 => 36,  169 => 35,  166 => 34,  163 => 33,  160 => 32,  157 => 31,  154 => 30,  152 => 29,  149 => 28,  143 => 27,  140 => 26,  137 => 25,  134 => 24,  131 => 23,  128 => 22,  124 => 21,  121 => 20,  118 => 19,  116 => 18,  113 => 17,  107 => 16,  104 => 15,  101 => 14,  98 => 13,  95 => 12,  92 => 11,  88 => 10,  85 => 9,  82 => 8,  80 => 7,  77 => 6,  74 => 5,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set callCount = collector.calls|length %}
    {% set errorCount = collector.errors|length %}

    {% set cacheHitCount = 0 %}
    {% set cacheMissCount = 0 %}

    {% for call in collector.calls|filter(call => call.cache is defined and call.cache == 'HIT') %}
        {% if call.cache == 'HIT' %}
            {% set cacheHitCount = cacheHitCount + 1 %}
        {% else %}
            {% set cacheMissCount = cacheMissCount + 1 %}
        {% endif %}
    {% endfor %}

    {% set mockReplayCount = 0 %}
    {% set mockRecordCount = 0 %}

    {% for call in collector.calls|filter(call => call.mock is defined) %}
        {% if call.mock == 'REPLAY' %}
            {% set mockReplayCount = mockReplayCount + 1 %}
        {% else %}
            {% set mockRecordCount = mockRecordCount + 1 %}
        {% endif %}
    {% endfor %}

    {% if callCount == 0 %}
        {% set color_code = '' %}
    {% elseif errorCount > 0 %}
        {% set color_code = 'red' %}
    {% else %}
        {% set color_code = 'green' %}
    {% endif %}

    {% set icon %}
        {{ include('@CsaGuzzle/Icon/guzzle.svg') }}
        <span class=\"sf-toolbar-value\">{{ callCount }}</span>
        {% if collector.totalTime > 0 %}
            <span class=\"sf-toolbar-label\">
                in <span class=\"sf-toolbar-value\">{{ collector.totalTime|csa_guzzle_format_duration }}</span>
            </span>
        {% endif %}
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Success</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-green\">{{ callCount - errorCount }}</span>
        </div>
        {% if cacheHitCount %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Cache HIT</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-green\">{{ cacheHitCount }}</span>
            </div>
        {% endif %}
        {% if cacheMissCount %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Cache MISS</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">{{ cacheMissCount }}</span>
            </div>
        {% endif %}
        {% if mockReplayCount %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Mocks (replayed)</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-green\">{{ mockReplayCount }}</span>
            </div>
        {% endif %}
        {% if mockRecordCount %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Mocks (recorded)</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-green\">{{ mockRecordCount }}</span>
            </div>
        {% endif %}
        {% if errorCount %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-red\">{{ errorCount }}</span>
            </div>
        {% endif %}
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: 'guzzle', status: color_code }) }}
{% endblock %}

{% block head %}
    {{ parent() }}
    <style>{{ include('@CsaGuzzle/css/screen.min.css') }}</style>
    <script>{{ include('@CsaGuzzle/js/guzzle.min.js') }}</script>
{% endblock %}

{% block menu %}
    <span class=\"label {% if collector.errors|length > 0 %}label-status-error{% endif %}\">
        <span class=\"icon\">
            {{ include('@CsaGuzzle/Icon/guzzle.svg') }}

        </span>
        <strong>{{ collector.name|capitalize|default('HTTP calls') }}</strong>
        {% if collector.calls is not empty %}
            <span class=\"count\">
                <span>{{ collector.calls|length }}</span>
                {% if collector.totalTime > 0 %}
                    <span>{{ collector.totalTime|csa_guzzle_format_duration }}</span>
                {% endif %}
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>{{ (collector.name|capitalize)|default('HTTP calls') }}</h2>
    {{  include('@CsaGuzzle/Calls/list.html.twig', { calls: collector.calls }) }}
{% endblock %}
", "@CsaGuzzle/Collector/guzzle.html.twig", "/var/www/html/sopay/vendor/csa/guzzle-bundle/src/Resources/views/Collector/guzzle.html.twig");
    }
}
