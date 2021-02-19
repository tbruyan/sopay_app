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

/* @CsaGuzzle/Calls/macros.html.twig */
class __TwigTemplate_8a213768720654831fc52e24822cc26e00d65d5035bc277f0ff715a30962e3b4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CsaGuzzle/Calls/macros.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CsaGuzzle/Calls/macros.html.twig"));

        // line 32
        echo "
";
        // line 42
        echo "
";
        // line 91
        echo "
";
        // line 102
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function macro_render_headers($__headers__ = null, $__uri__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "headers" => $__headers__,
            "uri" => $__uri__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_headers"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_headers"));

            // line 2
            echo "    <h4>Headers</h4>
    <table>
        <thead>
            <tr>
                <th scope=\"col\" class=\"key\">Header</th>
                <th scope=\"col\">Value</th>
            </tr>
        </thead>
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 10, $this->source); })()));
            foreach ($context['_seq'] as $context["header"] => $context["values"]) {
                // line 11
                echo "            <tr>
                <td>";
                // line 12
                echo twig_escape_filter($this->env, $context["header"], "html", null, true);
                echo "</td>
                <td>
                    ";
                // line 14
                if ((1 === twig_compare(twig_length_filter($this->env, $context["values"]), 1))) {
                    // line 15
                    echo "                    <ul>
                        ";
                    // line 16
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["values"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                        // line 17
                        echo "                            <li>";
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "</li>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 19
                    echo "                    </ul>
                    ";
                } else {
                    // line 21
                    echo "                        ";
                    if ((0 === twig_compare($context["header"], "X-Debug-Token-Link"))) {
                        // line 22
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["values"], 0, [], "any", false, false, false, 22), "html", null, true);
                        echo "\" target=\"_blank\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["values"], 0, [], "any", false, false, false, 22), "html", null, true);
                        echo "</a>
                        ";
                    } else {
                        // line 24
                        echo "                            ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["values"], 0, [], "any", false, false, false, 24), "html", null, true);
                        echo "
                        ";
                    }
                    // line 26
                    echo "                    ";
                }
                // line 27
                echo "                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['header'], $context['values'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    </table>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 33
    public function macro_render_body($__body__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "body" => $__body__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_body"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_body"));

            // line 34
            echo "    ";
            if ( !twig_test_empty((isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 34, $this->source); })()))) {
                // line 35
                echo "        <h4>Content</h4>

        ";
                // line 37
                $context["lang"] = $this->extensions['Csa\Bundle\GuzzleBundle\Twig\Extension\GuzzleExtension']->detectLang((isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 37, $this->source); })()));
                // line 38
                echo "
        <pre><code class=\"language-";
                // line 39
                echo twig_escape_filter($this->env, (isset($context["lang"]) || array_key_exists("lang", $context) ? $context["lang"] : (function () { throw new RuntimeError('Variable "lang" does not exist.', 39, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Csa\Bundle\GuzzleBundle\Twig\Extension\GuzzleExtension']->prettyPrint((isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 39, $this->source); })()), (isset($context["lang"]) || array_key_exists("lang", $context) ? $context["lang"] : (function () { throw new RuntimeError('Variable "lang" does not exist.', 39, $this->source); })())), "html", null, true);
                echo "</code></pre>
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 43
    public function macro_render_infos($__info__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "info" => $__info__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_infos"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_infos"));

            // line 44
            echo "    ";
            if (((isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 44, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 44, $this->source); })()), "total_time", [], "any", false, false, false, 44))) {
                // line 45
                echo "        <h4>Time</h4>

        ";
                // line 47
                $context["wait_time"] = ((twig_get_attribute($this->env, $this->source, (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 47, $this->source); })()), "namelookup_time", [], "any", false, false, false, 47) + twig_get_attribute($this->env, $this->source, (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 47, $this->source); })()), "connect_time", [], "any", false, false, false, 47)) + twig_get_attribute($this->env, $this->source, (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 47, $this->source); })()), "redirect_time", [], "any", false, false, false, 47));
                // line 48
                echo "        ";
                $context["process_time"] = (twig_get_attribute($this->env, $this->source, (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 48, $this->source); })()), "total_time", [], "any", false, false, false, 48) - (isset($context["wait_time"]) || array_key_exists("wait_time", $context) ? $context["wait_time"] : (function () { throw new RuntimeError('Variable "wait_time" does not exist.', 48, $this->source); })()));
                // line 49
                echo "
        <table>
            <thead>
                <tr>
                    <th>Measure</th>
                    <th>Duration</th>
                </tr>
            </thead>
            <tr>
                <td>Total</td>
                <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->extensions['Csa\Bundle\GuzzleBundle\Twig\Extension\GuzzleExtension']->formatDuration(twig_get_attribute($this->env, $this->source, (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 59, $this->source); })()), "total_time", [], "any", false, false, false, 59)), "html", null, true);
                echo "</td>
            </tr>
            <tr>
                <td>Name lookup</td>
                <td>";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Csa\Bundle\GuzzleBundle\Twig\Extension\GuzzleExtension']->formatDuration(twig_get_attribute($this->env, $this->source, (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 63, $this->source); })()), "namelookup_time", [], "any", false, false, false, 63)), "html", null, true);
                echo "</td>
            </tr>
            <tr>
                <td>Connection</td>
                <td>";
                // line 67
                echo twig_escape_filter($this->env, $this->extensions['Csa\Bundle\GuzzleBundle\Twig\Extension\GuzzleExtension']->formatDuration(twig_get_attribute($this->env, $this->source, (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 67, $this->source); })()), "connect_time", [], "any", false, false, false, 67)), "html", null, true);
                echo "</td>
            </tr>
            ";
                // line 69
                if (twig_get_attribute($this->env, $this->source, (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 69, $this->source); })()), "redirect_time", [], "any", false, false, false, 69)) {
                    // line 70
                    echo "                <tr>
                    <td>Redirect</td>
                    <td>";
                    // line 72
                    echo twig_escape_filter($this->env, $this->extensions['Csa\Bundle\GuzzleBundle\Twig\Extension\GuzzleExtension']->formatDuration(twig_get_attribute($this->env, $this->source, (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 72, $this->source); })()), "redirect_time", [], "any", false, false, false, 72)), "html", null, true);
                    echo "</td>
                </tr>
            ";
                }
                // line 75
                echo "            <tr>
                <td>Process</td>
                <td>";
                // line 77
                echo twig_escape_filter($this->env, $this->extensions['Csa\Bundle\GuzzleBundle\Twig\Extension\GuzzleExtension']->formatDuration((isset($context["process_time"]) || array_key_exists("process_time", $context) ? $context["process_time"] : (function () { throw new RuntimeError('Variable "process_time" does not exist.', 77, $this->source); })())), "html", null, true);
                echo "</td>
            </tr>
        </table>

        <div class=\"progress\">
            <div class=\"progress-bar progress-bar-warning\" style=\"width: ";
                // line 82
                echo twig_escape_filter($this->env, (((isset($context["wait_time"]) || array_key_exists("wait_time", $context) ? $context["wait_time"] : (function () { throw new RuntimeError('Variable "wait_time" does not exist.', 82, $this->source); })()) / twig_get_attribute($this->env, $this->source, (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 82, $this->source); })()), "total_time", [], "any", false, false, false, 82)) * 100), "html", null, true);
                echo "%\">
                <span class=\"sr-only\">Wait</span>
            </div>
            <div class=\"progress-bar progress-bar-success\" style=\"width: ";
                // line 85
                echo twig_escape_filter($this->env, (((isset($context["process_time"]) || array_key_exists("process_time", $context) ? $context["process_time"] : (function () { throw new RuntimeError('Variable "process_time" does not exist.', 85, $this->source); })()) / twig_get_attribute($this->env, $this->source, (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 85, $this->source); })()), "total_time", [], "any", false, false, false, 85)) * 100), "html", null, true);
                echo "%\">
                <span class=\"sr-only\">Process</span>
            </div>
        </div>
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 92
    public function macro_render_error($__error__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "error" => $__error__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_error"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_error"));

            // line 93
            echo "    <h4>Message</h4>
    <p><pre>";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 94, $this->source); })()), "message", [], "any", false, false, false, 94), "html", null, true);
            echo "</pre></p>

    <h4>Origin</h4>
    <p><pre>";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 97, $this->source); })()), "file", [], "any", false, false, false, 97), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 97, $this->source); })()), "line", [], "any", false, false, false, 97), "html", null, true);
            echo ")</pre></p>

    <h4>Stack trace</h4>
    <pre><code class=\"language-text\">";
            // line 100
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 100, $this->source); })()), "trace", [], "any", false, false, false, 100), "html", null, true));
            echo "</code></pre>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 103
    public function macro_render_curl($__curl__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "curl" => $__curl__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_curl"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_curl"));

            // line 104
            echo "    <h4>cURL</h4>

    <pre><code>";
            // line 106
            echo twig_escape_filter($this->env, (isset($context["curl"]) || array_key_exists("curl", $context) ? $context["curl"] : (function () { throw new RuntimeError('Variable "curl" does not exist.', 106, $this->source); })()), "html", null, true);
            echo "</code></pre>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@CsaGuzzle/Calls/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 106,  407 => 104,  388 => 103,  371 => 100,  363 => 97,  357 => 94,  354 => 93,  335 => 92,  314 => 85,  308 => 82,  300 => 77,  296 => 75,  290 => 72,  286 => 70,  284 => 69,  279 => 67,  272 => 63,  265 => 59,  253 => 49,  250 => 48,  248 => 47,  244 => 45,  241 => 44,  222 => 43,  202 => 39,  199 => 38,  197 => 37,  193 => 35,  190 => 34,  171 => 33,  155 => 30,  147 => 27,  144 => 26,  138 => 24,  130 => 22,  127 => 21,  123 => 19,  114 => 17,  110 => 16,  107 => 15,  105 => 14,  100 => 12,  97 => 11,  93 => 10,  83 => 2,  63 => 1,  52 => 102,  49 => 91,  46 => 42,  43 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro render_headers(headers, uri) %}
    <h4>Headers</h4>
    <table>
        <thead>
            <tr>
                <th scope=\"col\" class=\"key\">Header</th>
                <th scope=\"col\">Value</th>
            </tr>
        </thead>
        {% for header, values in headers %}
            <tr>
                <td>{{ header }}</td>
                <td>
                    {% if values|length > 1 %}
                    <ul>
                        {% for value in values %}
                            <li>{{ value }}</li>
                        {% endfor %}
                    </ul>
                    {% else %}
                        {% if header == 'X-Debug-Token-Link' %}
                            <a href=\"{{ values.0 }}\" target=\"_blank\">{{ values.0 }}</a>
                        {% else %}
                            {{ values.0 }}
                        {% endif %}
                    {% endif %}
                </td>
            </tr>
        {% endfor %}
    </table>
{% endmacro %}

{% macro render_body(body) %}
    {% if body is not empty %}
        <h4>Content</h4>

        {% set lang = csa_guzzle_detect_lang(body) %}

        <pre><code class=\"language-{{ lang }}\">{{ body|csa_guzzle_pretty_print(lang) }}</code></pre>
    {% endif %}
{% endmacro %}

{% macro render_infos(info) %}
    {% if info and info.total_time %}
        <h4>Time</h4>

        {% set wait_time = info.namelookup_time + info.connect_time + info.redirect_time %}
        {% set process_time = info.total_time - wait_time %}

        <table>
            <thead>
                <tr>
                    <th>Measure</th>
                    <th>Duration</th>
                </tr>
            </thead>
            <tr>
                <td>Total</td>
                <td>{{ info.total_time|csa_guzzle_format_duration }}</td>
            </tr>
            <tr>
                <td>Name lookup</td>
                <td>{{ info.namelookup_time|csa_guzzle_format_duration }}</td>
            </tr>
            <tr>
                <td>Connection</td>
                <td>{{ info.connect_time|csa_guzzle_format_duration }}</td>
            </tr>
            {% if info.redirect_time %}
                <tr>
                    <td>Redirect</td>
                    <td>{{ info.redirect_time|csa_guzzle_format_duration }}</td>
                </tr>
            {% endif %}
            <tr>
                <td>Process</td>
                <td>{{ process_time | csa_guzzle_format_duration }}</td>
            </tr>
        </table>

        <div class=\"progress\">
            <div class=\"progress-bar progress-bar-warning\" style=\"width: {{ wait_time/info.total_time * 100 }}%\">
                <span class=\"sr-only\">Wait</span>
            </div>
            <div class=\"progress-bar progress-bar-success\" style=\"width: {{ process_time/info.total_time * 100 }}%\">
                <span class=\"sr-only\">Process</span>
            </div>
        </div>
    {% endif %}
{% endmacro %}

{% macro render_error(error) %}
    <h4>Message</h4>
    <p><pre>{{ error.message }}</pre></p>

    <h4>Origin</h4>
    <p><pre>{{ error.file }}({{ error.line }})</pre></p>

    <h4>Stack trace</h4>
    <pre><code class=\"language-text\">{{error.trace|nl2br}}</code></pre>
{% endmacro %}

{% macro render_curl(curl) %}
    <h4>cURL</h4>

    <pre><code>{{ curl }}</code></pre>
{% endmacro %}
", "@CsaGuzzle/Calls/macros.html.twig", "/var/www/html/sopay/vendor/csa/guzzle-bundle/src/Resources/views/Calls/macros.html.twig");
    }
}
