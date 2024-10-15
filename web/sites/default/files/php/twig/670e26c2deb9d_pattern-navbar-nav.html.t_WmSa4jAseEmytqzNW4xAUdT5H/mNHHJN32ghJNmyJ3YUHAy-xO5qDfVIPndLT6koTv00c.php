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

/* themes/contrib/ui_suite_bootstrap/templates/patterns/navbar_nav/pattern-navbar-nav.html.twig */
class __TwigTemplate_e10169ae2102b6ac52da6656fdba12e6 extends Template
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
            $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [("navbar-nav-" . Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["variant"] ?? null), 2, $this->source)), ["_" => "-"]))], "method", false, false, true, 2);
        }
        // line 4
        yield "
";
        // line 5
        $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["navbar-nav"], "method", false, false, true, 5);
        // line 6
        $context["list_opened"] = false;
        // line 7
        yield "
";
        // line 8
        if (($context["items"] ?? null)) {
            // line 9
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 10
                yield "    ";
                // line 14
                yield "    ";
                $context["item_is_link"] = false;
                // line 15
                yield "    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 15) || CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 15))) {
                    // line 16
                    yield "      ";
                    $context["item_is_link"] = true;
                    // line 17
                    yield "    ";
                }
                // line 18
                yield "
    ";
                // line 19
                if ((($context["item_is_link"] ?? null) &&  !($context["list_opened"] ?? null))) {
                    // line 20
                    yield "      ";
                    $context["list_opened"] = true;
                    // line 21
                    yield "      <ul";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 21, $this->source), "html", null, true);
                    yield ">
    ";
                } elseif (( !                // line 22
($context["item_is_link"] ?? null) && ($context["list_opened"] ?? null))) {
                    // line 23
                    yield "      ";
                    $context["list_opened"] = false;
                    // line 24
                    yield "      </ul>
    ";
                }
                // line 26
                yield "
    ";
                // line 27
                $context["item_attributes"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", true, true, true, 27)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 27), 27, $this->source), $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute())) : ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
                // line 28
                yield "    ";
                $context["link_attributes"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link_attributes", [], "any", true, true, true, 28)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link_attributes", [], "any", false, false, true, 28), 28, $this->source), $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute())) : ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
                // line 29
                yield "    ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 29)) {
                    // line 30
                    yield "      ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\ui_patterns\Template\TwigExtension']->renderPattern("dropdown", ["title" => CoreExtension::getAttribute($this->env, $this->source,                     // line 31
$context["item"], "title", [], "any", false, false, true, 31), "content" => CoreExtension::getAttribute($this->env, $this->source,                     // line 32
$context["item"], "below", [], "any", false, false, true, 32), "dropdown_id" => ((((                    // line 33
array_key_exists("dropdown_id", $context)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(($context["dropdown_id"] ?? null), 33, $this->source), ("dropdown-" . Twig\Extension\CoreExtension::random($this->env->getCharset())))) : (("dropdown-" . Twig\Extension\CoreExtension::random($this->env->getCharset())))) . "-") . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 33), 33, $this->source)), "auto_close" => "true", "dropdown_navbar" => true, "attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["class" => ["nav-item"]]), "button_attributes" =>                     // line 39
($context["link_attributes"] ?? null)], "dropdown"), "html", null, true);
                    // line 40
                    yield "
    ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source,                 // line 41
$context["item"], "url", [], "any", false, false, true, 41)) {
                    // line 42
                    yield "      <li";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["item_attributes"] ?? null), "addClass", ["nav-item"], "method", false, false, true, 42), 42, $this->source), "html", null, true);
                    yield ">
        <a";
                    // line 43
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["link_attributes"] ?? null), "setAttribute", ["href", CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 43)], "method", false, false, true, 43), "addClass", ["nav-link"], "method", false, false, true, 43), 43, $this->source), "html", null, true);
                    yield ">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                    yield "</a>
      </li>
    ";
                } else {
                    // line 46
                    yield "      <span";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["link_attributes"] ?? null), "addClass", ["navbar-text"], "method", false, false, true, 46), 46, $this->source), "html", null, true);
                    yield ">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                    yield "</span>
    ";
                }
                // line 48
                yield "
    ";
                // line 49
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 49) && ($context["list_opened"] ?? null))) {
                    // line 50
                    yield "      </ul>
    ";
                }
                // line 52
                yield "  ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["variant", "items", "dropdown_id", "loop"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/ui_suite_bootstrap/templates/patterns/navbar_nav/pattern-navbar-nav.html.twig";
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
        return array (  169 => 52,  165 => 50,  163 => 49,  160 => 48,  152 => 46,  144 => 43,  139 => 42,  137 => 41,  134 => 40,  132 => 39,  131 => 33,  130 => 32,  129 => 31,  127 => 30,  124 => 29,  121 => 28,  119 => 27,  116 => 26,  112 => 24,  109 => 23,  107 => 22,  102 => 21,  99 => 20,  97 => 19,  94 => 18,  91 => 17,  88 => 16,  85 => 15,  82 => 14,  80 => 10,  62 => 9,  60 => 8,  57 => 7,  55 => 6,  53 => 5,  50 => 4,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/ui_suite_bootstrap/templates/patterns/navbar_nav/pattern-navbar-nav.html.twig", "/var/www/html/web/themes/contrib/ui_suite_bootstrap/templates/patterns/navbar_nav/pattern-navbar-nav.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 2, "for" => 9);
        static $filters = array("lower" => 1, "replace" => 2, "escape" => 21, "default" => 27);
        static $functions = array("create_attribute" => 27, "pattern" => 30, "random" => 33);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['lower', 'replace', 'escape', 'default'],
                ['create_attribute', 'pattern', 'random'],
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
