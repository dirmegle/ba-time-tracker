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

/* themes/contrib/ui_suite_bootstrap/templates/overrides/input/form-element.html.twig */
class __TwigTemplate_09a056e8e1cc413436fd8a529cbbadeb extends Template
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
        // line 51
        $context["classes"] = ["form-item", "js-form-item", ("form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 54
($context["type"] ?? null), 54, $this->source))), ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 55
($context["type"] ?? null), 55, $this->source))), ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 56
($context["name"] ?? null), 56, $this->source))), ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 57
($context["name"] ?? null), 57, $this->source))), ((!CoreExtension::inFilter(        // line 58
($context["title_display"] ?? null), ["after", "before", "inline"])) ? ("form-no-label") : ("")), (((        // line 59
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), ((        // line 60
($context["errors"] ?? null)) ? ("form-item--error") : (""))];
        // line 64
        $context["description_classes"] = ["description", "form-text", (((        // line 67
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 70
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 70), 70, $this->source), "html", null, true);
        yield ">
  ";
        // line 71
        if (CoreExtension::inFilter(($context["label_display"] ?? null), ["before", "invisible", "inline"])) {
            // line 72
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 72, $this->source), "html", null, true);
            yield "
  ";
        }
        // line 74
        yield "
  ";
        // line 75
        if (($context["inner_wrapper"] ?? null)) {
            // line 76
            yield "    <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["inner_wrapper_attributes"] ?? null), 76, $this->source), "html", null, true);
            yield ">
  ";
        }
        // line 78
        yield "
  ";
        // line 79
        if (($context["prefix"] ?? null)) {
            // line 80
            yield "    <span class=\"field-prefix\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 80, $this->source), "html", null, true);
            yield "</span>
  ";
        }
        // line 82
        yield "
  ";
        // line 83
        if (((($context["description_display"] ?? null) == "before") && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 83))) {
            // line 84
            yield "    <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 84), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 84), 84, $this->source), "html", null, true);
            yield ">
      ";
            // line 85
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 88
        yield "
  ";
        // line 89
        if (($context["input_group"] ?? null)) {
            // line 90
            yield "    <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["input_group_attributes"] ?? null), 90, $this->source), "html", null, true);
            yield ">
  ";
        }
        // line 92
        yield "
  ";
        // line 93
        if (($context["input_group_before"] ?? null)) {
            // line 94
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["input_group_before"] ?? null), 94, $this->source), "html", null, true);
            yield "
  ";
        }
        // line 96
        yield "
  ";
        // line 97
        if ((($context["label_display"] ?? null) == "floating")) {
            // line 98
            yield "    <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["floating_label_attributes"] ?? null), 98, $this->source), "html", null, true);
            yield ">
  ";
        }
        // line 100
        yield "
  ";
        // line 101
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 101, $this->source), "html", null, true);
        yield "

  ";
        // line 103
        if ((($context["label_display"] ?? null) == "floating")) {
            // line 104
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 104, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 107
        yield "
  ";
        // line 108
        if (($context["input_group_after"] ?? null)) {
            // line 109
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["input_group_after"] ?? null), 109, $this->source), "html", null, true);
            yield "
  ";
        }
        // line 111
        yield "
  ";
        // line 112
        if (($context["input_group"] ?? null)) {
            // line 113
            yield "    ";
            if (($context["errors"] ?? null)) {
                // line 114
                yield "      <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors_attributes"] ?? null), 114, $this->source), "html", null, true);
                yield ">
        ";
                // line 115
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 115, $this->source), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 118
            yield "    </div>
  ";
        }
        // line 120
        yield "
  ";
        // line 121
        if (($context["suffix"] ?? null)) {
            // line 122
            yield "    <span class=\"field-suffix\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 122, $this->source), "html", null, true);
            yield "</span>
  ";
        }
        // line 124
        yield "
  ";
        // line 125
        if ((($context["label_display"] ?? null) == "after")) {
            // line 126
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 126, $this->source), "html", null, true);
            yield "
  ";
        }
        // line 128
        yield "
  ";
        // line 129
        if (( !($context["input_group"] ?? null) && ($context["errors"] ?? null))) {
            // line 130
            yield "    <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors_attributes"] ?? null), 130, $this->source), "html", null, true);
            yield ">
      ";
            // line 131
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 131, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 134
        yield "
  ";
        // line 135
        if ((CoreExtension::inFilter(($context["description_display"] ?? null), ["after", "invisible"]) && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 135))) {
            // line 136
            yield "    <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 136), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 136), 136, $this->source), "html", null, true);
            yield ">
      ";
            // line 137
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 140
        yield "
  ";
        // line 141
        if (($context["inner_wrapper"] ?? null)) {
            // line 142
            yield "    </div>
  ";
        }
        // line 144
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["type", "name", "title_display", "disabled", "errors", "description_display", "attributes", "label_display", "label", "inner_wrapper", "inner_wrapper_attributes", "prefix", "description", "input_group", "input_group_attributes", "input_group_before", "floating_label_attributes", "children", "input_group_after", "errors_attributes", "suffix"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/ui_suite_bootstrap/templates/overrides/input/form-element.html.twig";
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
        return array (  254 => 144,  250 => 142,  248 => 141,  245 => 140,  239 => 137,  234 => 136,  232 => 135,  229 => 134,  223 => 131,  218 => 130,  216 => 129,  213 => 128,  207 => 126,  205 => 125,  202 => 124,  196 => 122,  194 => 121,  191 => 120,  187 => 118,  181 => 115,  176 => 114,  173 => 113,  171 => 112,  168 => 111,  162 => 109,  160 => 108,  157 => 107,  150 => 104,  148 => 103,  143 => 101,  140 => 100,  134 => 98,  132 => 97,  129 => 96,  123 => 94,  121 => 93,  118 => 92,  112 => 90,  110 => 89,  107 => 88,  101 => 85,  96 => 84,  94 => 83,  91 => 82,  85 => 80,  83 => 79,  80 => 78,  74 => 76,  72 => 75,  69 => 74,  63 => 72,  61 => 71,  56 => 70,  54 => 67,  53 => 64,  51 => 60,  50 => 59,  49 => 58,  48 => 57,  47 => 56,  46 => 55,  45 => 54,  44 => 51,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/ui_suite_bootstrap/templates/overrides/input/form-element.html.twig", "/var/www/html/web/themes/contrib/ui_suite_bootstrap/templates/overrides/input/form-element.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 51, "if" => 71);
        static $filters = array("clean_class" => 54, "escape" => 70);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
                [],
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
