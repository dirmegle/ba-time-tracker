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

/* themes/contrib/ui_suite_bootstrap/templates/patterns/table/pattern-table.html.twig */
class __TwigTemplate_91c820cf04945a983b0412f25406b14d extends Template
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
        // line 2
        $context["thead_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
        // line 3
        $context["tbody_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
        // line 4
        $context["tfoot_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
        // line 5
        yield "
";
        // line 6
        $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["table"], "method", false, false, true, 6);
        // line 7
        if ((($context["variant"] ?? null) && (Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["variant"] ?? null)) != "default"))) {
            // line 8
            yield "  ";
            $context["variants"] = Twig\Extension\CoreExtension::map($this->env, Twig\Extension\CoreExtension::split($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["variant"] ?? null), 8, $this->source), "__"), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["v"] ?? null), 8, $this->source)), [($context["v"] ?? null) => ("table-" . $this->sandbox->ensureToStringAllowed(($context["v"] ?? null), 8, $this->source))]), ["_" => "-"]); });
            // line 9
            yield "  ";
            $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["variants"] ?? null)], "method", false, false, true, 9);
        }
        // line 11
        yield "
";
        // line 12
        if (($context["stripes"] ?? null)) {
            // line 13
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["stripes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["stripe"]) {
                // line 14
                yield "    ";
                $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [("table-" . Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed($context["stripe"], 14, $this->source)), ["_" => "-"]))], "method", false, false, true, 14);
                // line 15
                yield "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['stripe'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 17
        yield "
";
        // line 18
        $context["attributes"] = ((($context["borders"] ?? null)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [("table-" . Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["borders"] ?? null), 18, $this->source)), ["_" => "-"]))], "method", false, false, true, 18)) : (($context["attributes"] ?? null)));
        // line 19
        $context["attributes"] = ((($context["hover"] ?? null)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["table-hover"], "method", false, false, true, 19)) : (($context["attributes"] ?? null)));
        // line 20
        $context["attributes"] = ((($context["caption_top"] ?? null)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["caption-top"], "method", false, false, true, 20)) : (($context["attributes"] ?? null)));
        // line 21
        yield "
";
        // line 22
        if (($context["header_color"] ?? null)) {
            // line 23
            yield "  ";
            $context["thead_attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["thead_attributes"] ?? null), "addClass", [("table-" . Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["header_color"] ?? null), 23, $this->source)), ["_" => "-"]))], "method", false, false, true, 23);
        }
        // line 25
        if (($context["footer_color"] ?? null)) {
            // line 26
            yield "  ";
            $context["tfoot_attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["tfoot_attributes"] ?? null), "addClass", [("table-" . Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["footer_color"] ?? null), 26, $this->source)), ["_" => "-"]))], "method", false, false, true, 26);
        }
        // line 28
        yield "
";
        // line 29
        $context["header_length"] = ((($context["header"] ?? null)) ? (Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 29, $this->source))) : (0));
        // line 30
        $context["header_columns"] = ((array_key_exists("header_columns", $context)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(($context["header_columns"] ?? null), 30, $this->source), $this->sandbox->ensureToStringAllowed(($context["header_length"] ?? null), 30, $this->source))) : (($context["header_length"] ?? null)));
        // line 31
        yield "
";
        // line 38
        if (($context["divider"] ?? null)) {
            // line 39
            yield "  ";
            if (CoreExtension::inFilter("thead", ($context["divider"] ?? null))) {
                // line 40
                yield "    ";
                $context["thead_attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["thead_attributes"] ?? null), "addClass", ["table-group-divider"], "method", false, false, true, 40);
                // line 41
                yield "  ";
            }
            // line 42
            yield "  ";
            if (CoreExtension::inFilter("tbody", ($context["divider"] ?? null))) {
                // line 43
                yield "    ";
                $context["tbody_attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["tbody_attributes"] ?? null), "addClass", ["table-group-divider"], "method", false, false, true, 43);
                // line 44
                yield "  ";
            }
            // line 45
            yield "  ";
            if (CoreExtension::inFilter("tfoot", ($context["divider"] ?? null))) {
                // line 46
                yield "    ";
                $context["tfoot_attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["tfoot_attributes"] ?? null), "addClass", ["table-group-divider"], "method", false, false, true, 46);
                // line 47
                yield "  ";
            }
        }
        // line 49
        yield "
";
        // line 50
        if (($context["responsive"] ?? null)) {
            // line 51
            yield "<div class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ("table-" . Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["responsive"] ?? null), 51, $this->source)), ["_" => "-"])), "html", null, true);
            yield "\">
";
        }
        // line 53
        yield "
<table";
        // line 54
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 54, $this->source), "html", null, true);
        yield ">
  ";
        // line 55
        if (($context["caption"] ?? null)) {
            // line 56
            yield "    <caption>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["caption"] ?? null), 56, $this->source), "html", null, true);
            yield "</caption>
  ";
        }
        // line 58
        yield "
  ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["colgroups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["colgroup"]) {
            // line 60
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["colgroup"], "cols", [], "any", false, false, true, 60)) {
                // line 61
                yield "      <colgroup";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["colgroup"], "attributes", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                yield ">
        ";
                // line 62
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["colgroup"], "cols", [], "any", false, false, true, 62));
                foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                    // line 63
                    yield "          <col";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["col"], "attributes", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
                    yield " />
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['col'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                yield "      </colgroup>
    ";
            } else {
                // line 67
                yield "      <colgroup";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["colgroup"], "attributes", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
                yield " />
    ";
            }
            // line 69
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['colgroup'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        yield "
  ";
        // line 71
        if (($context["header"] ?? null)) {
            // line 72
            yield "    <thead";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["thead_attributes"] ?? null), 72, $this->source), "html", null, true);
            yield ">
      ";
            // line 73
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\ui_patterns\Template\TwigExtension']->renderPattern("table_row", ["cells" =>             // line 74
($context["header"] ?? null)]), "html", null, true);
            // line 75
            yield "
    </thead>
  ";
        }
        // line 78
        yield "
  ";
        // line 79
        if (($context["rows"] ?? null)) {
            // line 80
            yield "    <tbody";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tbody_attributes"] ?? null), 80, $this->source), "html", null, true);
            yield ">
      ";
            // line 81
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 81, $this->source), "html", null, true);
            yield "
    </tbody>
  ";
        } elseif (        // line 83
($context["empty"] ?? null)) {
            // line 84
            yield "    <tbody";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tbody_attributes"] ?? null), 84, $this->source), "html", null, true);
            yield ">
      ";
            // line 85
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\ui_patterns\Template\TwigExtension']->renderPattern("table_row", ["cells" => $this->extensions['Drupal\ui_patterns\Template\TwigExtension']->renderPattern("table_cell", ["attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["colspan" =>             // line 88
($context["header_columns"] ?? null)]), "content" =>             // line 90
($context["empty"] ?? null)])]), "html", null, true);
            // line 92
            yield "
    </tbody>
  ";
        }
        // line 95
        yield "
  ";
        // line 96
        if (($context["footer"] ?? null)) {
            // line 97
            yield "    <tfoot";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tfoot_attributes"] ?? null), 97, $this->source), "html", null, true);
            yield ">
      ";
            // line 98
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 98, $this->source), "html", null, true);
            yield "
    </tfoot>
  ";
        }
        // line 101
        yield "</table>

";
        // line 103
        if (($context["responsive"] ?? null)) {
            // line 104
            yield "</div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["variant", "v", "stripes", "borders", "hover", "caption_top", "header_color", "footer_color", "header", "divider", "responsive", "caption", "colgroups", "rows", "empty", "footer"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/ui_suite_bootstrap/templates/patterns/table/pattern-table.html.twig";
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
        return array (  289 => 104,  287 => 103,  283 => 101,  277 => 98,  272 => 97,  270 => 96,  267 => 95,  262 => 92,  260 => 90,  259 => 88,  258 => 85,  253 => 84,  251 => 83,  246 => 81,  241 => 80,  239 => 79,  236 => 78,  231 => 75,  229 => 74,  228 => 73,  223 => 72,  221 => 71,  218 => 70,  212 => 69,  206 => 67,  202 => 65,  193 => 63,  189 => 62,  184 => 61,  181 => 60,  177 => 59,  174 => 58,  168 => 56,  166 => 55,  162 => 54,  159 => 53,  153 => 51,  151 => 50,  148 => 49,  144 => 47,  141 => 46,  138 => 45,  135 => 44,  132 => 43,  129 => 42,  126 => 41,  123 => 40,  120 => 39,  118 => 38,  115 => 31,  113 => 30,  111 => 29,  108 => 28,  104 => 26,  102 => 25,  98 => 23,  96 => 22,  93 => 21,  91 => 20,  89 => 19,  87 => 18,  84 => 17,  77 => 15,  74 => 14,  69 => 13,  67 => 12,  64 => 11,  60 => 9,  57 => 8,  55 => 7,  53 => 6,  50 => 5,  48 => 4,  46 => 3,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/ui_suite_bootstrap/templates/patterns/table/pattern-table.html.twig", "/var/www/html/web/themes/contrib/ui_suite_bootstrap/templates/patterns/table/pattern-table.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 7, "for" => 13);
        static $filters = array("lower" => 7, "map" => 8, "split" => 8, "replace" => 8, "length" => 29, "default" => 30, "escape" => 51);
        static $functions = array("create_attribute" => 2, "pattern" => 73);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['lower', 'map', 'split', 'replace', 'length', 'default', 'escape'],
                ['create_attribute', 'pattern'],
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
