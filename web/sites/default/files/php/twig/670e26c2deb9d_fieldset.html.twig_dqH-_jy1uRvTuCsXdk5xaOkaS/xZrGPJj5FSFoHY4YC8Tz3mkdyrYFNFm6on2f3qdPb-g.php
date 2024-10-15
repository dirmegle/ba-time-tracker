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

/* themes/contrib/ui_suite_bootstrap/templates/overrides/system/fieldset.html.twig */
class __TwigTemplate_101b6a6c4bd9365afa4fe04e650b3653 extends Template
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
        // line 32
        $context["classes"] = ["js-form-item", "form-item", "js-form-wrapper", "form-wrapper"];
        // line 40
        $context["legend_span_classes"] = ["fieldset-legend", ((        // line 42
($context["required"] ?? null)) ? ("js-form-required") : ("")), ((        // line 43
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 47
        $context["inner_wrapper_classes"] = ["fieldset-wrapper"];
        // line 52
        $context["description_classes"] = ["description", "form-text"];
        // line 57
        $context["inner_wrapper_attributes"] = ((array_key_exists("inner_wrapper_attributes", $context)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(($context["inner_wrapper_attributes"] ?? null), 57, $this->source), $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute())) : ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 58
        yield "
<fieldset";
        // line 59
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 59), 59, $this->source), "html", null, true);
        yield ">
  ";
        // line 61
        yield "  <legend";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["legend"] ?? null), "attributes", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
        yield ">
    <span";
        // line 62
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["legend_span"] ?? null), "attributes", [], "any", false, false, true, 62), "addClass", [($context["legend_span_classes"] ?? null)], "method", false, false, true, 62), 62, $this->source), "html", null, true);
        yield ">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["legend"] ?? null), "title", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        yield "</span>
  </legend>

  <div";
        // line 65
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["inner_wrapper_attributes"] ?? null), "addClass", [($context["inner_wrapper_classes"] ?? null)], "method", false, false, true, 65), 65, $this->source), "html", null, true);
        yield ">
    ";
        // line 66
        if (((($context["description_display"] ?? null) == "before") && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 66))) {
            // line 67
            yield "      <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 67), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 67), 67, $this->source), "html", null, true);
            yield ">
        ";
            // line 68
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 71
        yield "
    ";
        // line 72
        if (($context["prefix"] ?? null)) {
            // line 73
            yield "      <span class=\"field-prefix\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 73, $this->source), "html", null, true);
            yield "</span>
    ";
        }
        // line 75
        yield "
    ";
        // line 76
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 76, $this->source), "html", null, true);
        yield "

    ";
        // line 78
        if (($context["errors"] ?? null)) {
            // line 79
            yield "      ";
            // line 84
            yield "      <div class=\"is-invalid\"></div>
      <div";
            // line 85
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors_attributes"] ?? null), 85, $this->source), "html", null, true);
            yield ">
        ";
            // line 86
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 86, $this->source), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 89
        yield "
    ";
        // line 90
        if (($context["suffix"] ?? null)) {
            // line 91
            yield "      <span class=\"field-suffix\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 91, $this->source), "html", null, true);
            yield "</span>
    ";
        }
        // line 93
        yield "
    ";
        // line 94
        if ((CoreExtension::inFilter(($context["description_display"] ?? null), ["after", "invisible"]) && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 94))) {
            // line 95
            yield "      <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 95), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 95), 95, $this->source), "html", null, true);
            yield ">
        ";
            // line 96
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 99
        yield "  </div>
</fieldset>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["required", "attributes", "legend", "legend_span", "description_display", "description", "prefix", "children", "errors", "errors_attributes", "suffix"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/ui_suite_bootstrap/templates/overrides/system/fieldset.html.twig";
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
        return array (  156 => 99,  150 => 96,  145 => 95,  143 => 94,  140 => 93,  134 => 91,  132 => 90,  129 => 89,  123 => 86,  119 => 85,  116 => 84,  114 => 79,  112 => 78,  107 => 76,  104 => 75,  98 => 73,  96 => 72,  93 => 71,  87 => 68,  82 => 67,  80 => 66,  76 => 65,  68 => 62,  63 => 61,  59 => 59,  56 => 58,  54 => 57,  52 => 52,  50 => 47,  48 => 43,  47 => 42,  46 => 40,  44 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/ui_suite_bootstrap/templates/overrides/system/fieldset.html.twig", "/var/www/html/web/themes/contrib/ui_suite_bootstrap/templates/overrides/system/fieldset.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 32, "if" => 66);
        static $filters = array("default" => 57, "escape" => 59);
        static $functions = array("create_attribute" => 57);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['default', 'escape'],
                ['create_attribute'],
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
