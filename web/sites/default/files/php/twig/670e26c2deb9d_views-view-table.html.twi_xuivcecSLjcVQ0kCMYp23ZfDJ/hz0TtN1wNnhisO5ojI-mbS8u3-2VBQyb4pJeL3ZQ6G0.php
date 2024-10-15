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

/* themes/contrib/ui_suite_bootstrap/templates/overrides/views/views-view-table.html.twig */
class __TwigTemplate_bfe7ce80c1d1415b0d1060e00f75a223 extends Template
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
        // line 38
        $context["responsive"] = ((($context["responsive"] ?? null)) ? ("responsive") : (""));
        // line 39
        $context["stripes"] = ((($context["stripes"] ?? null)) ? (($context["stripes"] ?? null)) : ([]));
        // line 40
        $context["borders"] = ((($context["borders"] ?? null)) ? (($context["borders"] ?? null)) : ([]));
        // line 41
        $context["hover"] = ((($context["hover"] ?? null)) ? (($context["hover"] ?? null)) : ("false"));
        // line 42
        $context["divider"] = ((($context["divider"] ?? null)) ? (($context["divider"] ?? null)) : (["tbody"]));
        // line 43
        $context["caption_top"] = ((($context["caption_top"] ?? null)) ? (($context["caption_top"] ?? null)) : ("false"));
        // line 44
        $context["header_color"] = ((($context["header_color"] ?? null)) ? (($context["header_color"] ?? null)) : (""));
        // line 45
        yield "
";
        // line 48
        $context["classes"] = [("cols-" . Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(        // line 49
($context["header"] ?? null), 49, $this->source))), ((        // line 50
($context["responsive"] ?? null)) ? ("responsive-enabled") : ("")), ((        // line 51
($context["sticky"] ?? null)) ? ("sticky-enabled sticky-header") : (""))];
        // line 54
        yield "
";
        // line 56
        if ( !($context["caption"] ?? null)) {
            // line 57
            yield "  ";
            $context["caption"] = ($context["title"] ?? null);
        }
        // line 59
        yield "
";
        // line 60
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["summary_element"] ?? null))) {
            // line 61
            yield "  ";
            $context["caption"] = [((            // line 62
($context["caption"] ?? null)) ? (($context["caption"] ?? null)) : ([])),             // line 63
($context["summary_element"] ?? null)];
        }
        // line 66
        yield "
";
        // line 67
        if ( !($context["caption_needed"] ?? null)) {
            // line 68
            yield "  ";
            $context["caption"] = "";
        }
        // line 70
        yield "
";
        // line 72
        $context["prepared_header"] = [];
        // line 73
        if (($context["header"] ?? null)) {
            // line 74
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["header"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 75
                yield "    ";
                $context["active"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["column"], "active_table_sort", [], "any", false, false, true, 75)) ?: (false));
                // line 76
                yield "    ";
                $context["active"] = ((($context["active"] ?? null)) ?: (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 76), "hasClass", ["is-active"], "method", false, false, true, 76)));
                // line 77
                yield "
    ";
                // line 78
                $context["column_classes"] = [];
                // line 79
                yield "    ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "default_classes", [], "any", false, false, true, 79)) {
                    // line 80
                    yield "      ";
                    // line 81
                    $context["column_classes"] = ["views-field", ("views-field-" . $this->sandbox->ensureToStringAllowed((($__internal_compile_0 =                     // line 83
($context["fields"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? null) : null), 83, $this->source))];
                    // line 86
                    yield "      ";
                    $context["active"] = ((($context["active"] ?? null)) ?: (CoreExtension::inFilter("is-active", (($__internal_compile_1 = ($context["fields"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["key"]] ?? null) : null))));
                    // line 87
                    yield "    ";
                }
                // line 88
                yield "
    ";
                // line 89
                $context["column_content"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 90
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 90)) {
                        // line 91
                        yield "<";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
                        yield ">";
                        // line 92
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 92)) {
                            // line 93
                            yield "<a href=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
                            yield "\" title=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
                            yield "\" rel=\"nofollow\">";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
                            yield "</a>";
                        } else {
                            // line 95
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
                        }
                        // line 97
                        yield "</";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
                        yield ">";
                    } else {
                        // line 99
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 99)) {
                            // line 100
                            yield "<a href=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
                            yield "\" title=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
                            yield "\" rel=\"nofollow\">";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
                            yield "</a>";
                        } else {
                            // line 102
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
                        }
                    }
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 106
                yield "
    ";
                // line 107
                $context["prepared_header"] = Twig\Extension\CoreExtension::merge($this->sandbox->ensureToStringAllowed(($context["prepared_header"] ?? null), 107, $this->source), [$this->extensions['Drupal\ui_patterns\Template\TwigExtension']->renderPattern("table_cell", ["attributes" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 109
$context["column"], "attributes", [], "any", false, false, true, 109), "addClass", [($context["column_classes"] ?? null)], "method", false, false, true, 109), "setAttribute", ["scope", "col"], "method", false, false, true, 109), "tag" => "th", "content" =>                 // line 111
($context["column_content"] ?? null), "active" =>                 // line 112
($context["active"] ?? null)])]);
                // line 115
                yield "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['column'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 117
        yield "
";
        // line 119
        $context["prepared_rows"] = [];
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 121
            yield "  ";
            $context["prepared_columns"] = [];
            // line 122
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "columns", [], "any", false, false, true, 122));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 123
                yield "    ";
                $context["active"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["column"], "active_table_sort", [], "any", false, false, true, 123)) ?: (false));
                // line 124
                yield "    ";
                $context["active"] = ((($context["active"] ?? null)) ?: (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 124), "hasClass", ["is-active"], "method", false, false, true, 124)));
                // line 125
                yield "
    ";
                // line 126
                $context["column_classes"] = [];
                // line 127
                yield "    ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "default_classes", [], "any", false, false, true, 127)) {
                    // line 128
                    yield "      ";
                    // line 129
                    $context["column_classes"] = ["views-field"];
                    // line 133
                    yield "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "fields", [], "any", false, false, true, 133));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 134
                        yield "        ";
                        $context["column_classes"] = Twig\Extension\CoreExtension::merge($this->sandbox->ensureToStringAllowed(($context["column_classes"] ?? null), 134, $this->source), [("views-field-" . $this->sandbox->ensureToStringAllowed($context["field"], 134, $this->source))]);
                        // line 135
                        yield "        ";
                        $context["active"] = ((($context["active"] ?? null)) ?: (CoreExtension::inFilter("is-active", $context["field"])));
                        // line 136
                        yield "      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 137
                    yield "    ";
                }
                // line 138
                yield "
    ";
                // line 139
                $context["column_content"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 140
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 140)) {
                        // line 141
                        yield "<";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 141), 141, $this->source), "html", null, true);
                        yield ">
        ";
                        // line 142
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 142));
                        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                            // line 143
                            yield "          ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["content"], "separator", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["content"], "field_output", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
                            yield "
        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['content'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 145
                        yield "        </";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 145), 145, $this->source), "html", null, true);
                        yield ">";
                    } else {
                        // line 147
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 147));
                        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                            // line 148
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["content"], "separator", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["content"], "field_output", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['content'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    }
                    // line 151
                    yield "    ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 152
                yield "
    ";
                // line 153
                $context["prepared_columns"] = Twig\Extension\CoreExtension::merge($this->sandbox->ensureToStringAllowed(($context["prepared_columns"] ?? null), 153, $this->source), [$this->extensions['Drupal\ui_patterns\Template\TwigExtension']->renderPattern("table_cell", ["attributes" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 155
$context["column"], "attributes", [], "any", false, false, true, 155), "addClass", [($context["column_classes"] ?? null)], "method", false, false, true, 155), "content" =>                 // line 156
($context["column_content"] ?? null), "active" =>                 // line 157
($context["active"] ?? null)])]);
                // line 160
                yield "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['column'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            yield "
  ";
            // line 162
            $context["prepared_rows"] = Twig\Extension\CoreExtension::merge($this->sandbox->ensureToStringAllowed(($context["prepared_rows"] ?? null), 162, $this->source), [$this->extensions['Drupal\ui_patterns\Template\TwigExtension']->renderPattern("table_row", ["attributes" => CoreExtension::getAttribute($this->env, $this->source,             // line 164
$context["row"], "attributes", [], "any", false, false, true, 164), "cells" =>             // line 165
($context["prepared_columns"] ?? null)])]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        yield "
";
        // line 170
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\ui_patterns\Template\TwigExtension']->renderPattern("table", ["attributes" => CoreExtension::getAttribute($this->env, $this->source,         // line 171
($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 171), "variant" => "default", "header_color" =>         // line 173
($context["header_color"] ?? null), "stripes" =>         // line 174
($context["stripes"] ?? null), "borders" =>         // line 175
($context["borders"] ?? null), "hover" =>         // line 176
($context["hover"] ?? null), "responsive" =>         // line 177
($context["responsive"] ?? null), "divider" =>         // line 178
($context["divider"] ?? null), "caption" =>         // line 179
($context["caption"] ?? null), "caption_top" =>         // line 180
($context["caption_top"] ?? null), "header" =>         // line 181
($context["prepared_header"] ?? null), "header_columns" => Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(        // line 182
($context["header"] ?? null), 182, $this->source)), "rows" =>         // line 183
($context["prepared_rows"] ?? null)]), "html", null, true);
        // line 184
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["header", "sticky", "caption", "title", "summary_element", "caption_needed", "fields", "rows", "attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/ui_suite_bootstrap/templates/overrides/views/views-view-table.html.twig";
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
        return array (  342 => 184,  340 => 183,  339 => 182,  338 => 181,  337 => 180,  336 => 179,  335 => 178,  334 => 177,  333 => 176,  332 => 175,  331 => 174,  330 => 173,  329 => 171,  328 => 170,  325 => 169,  319 => 165,  318 => 164,  317 => 162,  314 => 161,  308 => 160,  306 => 157,  305 => 156,  304 => 155,  303 => 153,  300 => 152,  296 => 151,  288 => 148,  284 => 147,  279 => 145,  269 => 143,  265 => 142,  260 => 141,  258 => 140,  256 => 139,  253 => 138,  250 => 137,  244 => 136,  241 => 135,  238 => 134,  233 => 133,  231 => 129,  229 => 128,  226 => 127,  224 => 126,  221 => 125,  218 => 124,  215 => 123,  210 => 122,  207 => 121,  203 => 120,  201 => 119,  198 => 117,  191 => 115,  189 => 112,  188 => 111,  187 => 109,  186 => 107,  183 => 106,  176 => 102,  166 => 100,  164 => 99,  159 => 97,  155 => 95,  145 => 93,  143 => 92,  139 => 91,  137 => 90,  135 => 89,  132 => 88,  129 => 87,  126 => 86,  124 => 83,  123 => 81,  121 => 80,  118 => 79,  116 => 78,  113 => 77,  110 => 76,  107 => 75,  102 => 74,  100 => 73,  98 => 72,  95 => 70,  91 => 68,  89 => 67,  86 => 66,  83 => 63,  82 => 62,  80 => 61,  78 => 60,  75 => 59,  71 => 57,  69 => 56,  66 => 54,  64 => 51,  63 => 50,  62 => 49,  61 => 48,  58 => 45,  56 => 44,  54 => 43,  52 => 42,  50 => 41,  48 => 40,  46 => 39,  44 => 38,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/ui_suite_bootstrap/templates/overrides/views/views-view-table.html.twig", "/var/www/html/web/themes/contrib/ui_suite_bootstrap/templates/overrides/views/views-view-table.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 38, "if" => 56, "for" => 74);
        static $filters = array("length" => 49, "escape" => 91, "merge" => 107);
        static $functions = array("pattern" => 108);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['length', 'escape', 'merge'],
                ['pattern'],
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
