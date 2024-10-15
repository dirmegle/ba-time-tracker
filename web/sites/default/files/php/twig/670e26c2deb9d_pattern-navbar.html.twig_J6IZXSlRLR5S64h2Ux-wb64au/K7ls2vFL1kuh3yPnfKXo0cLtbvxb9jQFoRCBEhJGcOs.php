<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/contrib/ui_suite_bootstrap/templates/patterns/navbar/pattern-navbar.html.twig */
class __TwigTemplate_70601b84aa6a0f5e248d68cb5798eef2 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        if ((($context["variant"] ?? null) && (Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["variant"] ?? null)) != "default"))) {
            // line 2
            yield "  ";
            $context["variants"] = Twig\Extension\CoreExtension::map($this->env, Twig\Extension\CoreExtension::split($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["variant"] ?? null), 2, $this->source), "__"), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["v"] ?? null), 2, $this->source)), [($context["v"] ?? null) => ("navbar-" . $this->sandbox->ensureToStringAllowed(($context["v"] ?? null), 2, $this->source))]), ["_" => "-"]); });
            // line 3
            yield "  ";
            $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["variants"] ?? null)], "method", false, false, true, 3);
        }
        // line 5
        yield "
";
        // line 6
        $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["navbar"], "method", false, false, true, 6);
        // line 7
        $context["attributes"] = ((CoreExtension::inFilter("dark", Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["variant"] ?? null), 7, $this->source)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", ["data-bs-theme", "dark"], "method", false, false, true, 7)) : (($context["attributes"] ?? null)));
        // line 8
        yield "
";
        // line 9
        $context["navbar_id"] = ((array_key_exists("navbar_id", $context)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(($context["navbar_id"] ?? null), 9, $this->source), ("navbar-" . Twig\Extension\CoreExtension::random($this->env->getCharset())))) : (("navbar-" . Twig\Extension\CoreExtension::random($this->env->getCharset()))));
        // line 10
        $context["placement"] = ((array_key_exists("placement", $context)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(($context["placement"] ?? null), 10, $this->source), "default")) : ("default"));
        // line 11
        $context["toggler_position"] = ((array_key_exists("toggler_position", $context)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(($context["toggler_position"] ?? null), 11, $this->source), "start")) : ("start"));
        // line 12
        $context["toggle_action"] = ((array_key_exists("toggle_action", $context)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(($context["toggle_action"] ?? null), 12, $this->source), "collapse")) : ("collapse"));
        // line 13
        $context["offcanvas_position"] = ((array_key_exists("offcanvas_position", $context)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(($context["offcanvas_position"] ?? null), 13, $this->source), "end")) : ("end"));
        // line 14
        $context["attributes"] = (((($context["placement"] ?? null) != "default")) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["placement"] ?? null)], "method", false, false, true, 14)) : (($context["attributes"] ?? null)));
        // line 15
        yield "
";
        // line 16
        $context["toggler"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 17
            yield "  <button class=\"navbar-toggler\"
          type=\"button\"
          data-bs-toggle=\"";
            // line 19
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["toggle_action"] ?? null), 19, $this->source), "html", null, true);
            yield "\"
          data-bs-target=\"#";
            // line 20
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_id"] ?? null), 20, $this->source), "html", null, true);
            yield "\"
          aria-controls=\"";
            // line 21
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_id"] ?? null), 21, $this->source), "html", null, true);
            yield "\"
          aria-expanded=\"false\"
          aria-label=\"";
            // line 23
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle navigation"));
            yield "\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 27
        yield "
<nav";
        // line 28
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 28, $this->source), "html", null, true);
        yield ">
  <div class=\"container-fluid\">
    ";
        // line 30
        if ((($context["navigation_collapsible"] ?? null) && (($context["toggler_position"] ?? null) == "start"))) {
            // line 31
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["toggler"] ?? null), 31, $this->source), "html", null, true);
            yield "
    ";
        }
        // line 33
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\ui_patterns\Template\TwigExtension']->addClass($this->sandbox->ensureToStringAllowed(($context["brand"] ?? null), 33, $this->source), "navbar-brand"), "html", null, true);
        yield "
    ";
        // line 34
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navigation"] ?? null), 34, $this->source), "html", null, true);
        yield "
    ";
        // line 35
        if ((($context["navigation_collapsible"] ?? null) && (($context["toggler_position"] ?? null) == "end"))) {
            // line 36
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["toggler"] ?? null), 36, $this->source), "html", null, true);
            yield "
    ";
        }
        // line 38
        yield "
    ";
        // line 39
        if (($context["navigation_collapsible"] ?? null)) {
            // line 40
            yield "      ";
            if ((($context["toggle_action"] ?? null) == "offcanvas")) {
                // line 41
                yield "        ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\ui_patterns\Template\TwigExtension']->renderPattern("offcanvas", ["variant" =>                 // line 42
($context["offcanvas_position"] ?? null), "offcanvas_id" =>                 // line 43
($context["navbar_id"] ?? null), "title" => ((                // line 44
array_key_exists("offcanvas_label", $context)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(($context["offcanvas_label"] ?? null), 44, $this->source), t("Navigation"))) : (t("Navigation"))), "body" =>                 // line 45
($context["navigation_collapsible"] ?? null)]), "html", null, true);
                // line 46
                yield "
      ";
            } else {
                // line 48
                yield "        <div class=\"collapse navbar-collapse\" id=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_id"] ?? null), 48, $this->source), "html", null, true);
                yield "\">
          ";
                // line 49
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navigation_collapsible"] ?? null), 49, $this->source), "html", null, true);
                yield "
        </div>
      ";
            }
            // line 52
            yield "    ";
        }
        // line 53
        yield "  </div>
</nav>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["variant", "v", "navigation_collapsible", "brand", "navigation", "offcanvas_label"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/ui_suite_bootstrap/templates/patterns/navbar/pattern-navbar.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  171 => 53,  168 => 52,  162 => 49,  157 => 48,  153 => 46,  151 => 45,  150 => 44,  149 => 43,  148 => 42,  146 => 41,  143 => 40,  141 => 39,  138 => 38,  132 => 36,  130 => 35,  126 => 34,  121 => 33,  115 => 31,  113 => 30,  108 => 28,  105 => 27,  97 => 23,  92 => 21,  88 => 20,  84 => 19,  80 => 17,  78 => 16,  75 => 15,  73 => 14,  71 => 13,  69 => 12,  67 => 11,  65 => 10,  63 => 9,  60 => 8,  58 => 7,  56 => 6,  53 => 5,  49 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/ui_suite_bootstrap/templates/patterns/navbar/pattern-navbar.html.twig", "/var/www/html/web/themes/contrib/ui_suite_bootstrap/templates/patterns/navbar/pattern-navbar.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 2);
        static $filters = array("lower" => 1, "map" => 2, "split" => 2, "replace" => 2, "default" => 9, "escape" => 19, "t" => 23, "add_class" => 33);
        static $functions = array("random" => 9, "pattern" => 41);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['lower', 'map', 'split', 'replace', 'default', 'escape', 't', 'add_class'],
                ['random', 'pattern'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
