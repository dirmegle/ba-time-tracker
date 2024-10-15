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

/* themes/contrib/ui_suite_bootstrap/templates/patterns/pagination/pattern-pagination.html.twig */
class __TwigTemplate_fa1ea5d515a9fa296aa32e3572318254 extends Template
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
            $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [("pagination-" . Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["variant"] ?? null), 2, $this->source)), ["_" => "-"]))], "method", false, false, true, 2);
        }
        // line 4
        yield "
";
        // line 5
        if (($context["items"] ?? null)) {
            // line 6
            yield "<nav aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            yield "\">
  <ul";
            // line 7
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["pagination"], "method", false, false, true, 7), 7, $this->source), "html", null, true);
            yield ">
  ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 9
                yield "    ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 9)) {
                    // line 10
                    yield "    <li class=\"page-item\">
      ";
                    // line 11
                    $context["item_attributes"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", true, true, true, 11)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 11), 11, $this->source), $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute())) : ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
                    // line 12
                    yield "      <a";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item_attributes"] ?? null), "addClass", ["page-link"], "method", false, false, true, 12), "setAttribute", ["href", CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 12)], "method", false, false, true, 12), 12, $this->source), "html", null, true);
                    yield ">
        ";
                    // line 13
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["item_attributes"] ?? null), "hasAttribute", ["aria-label"], "method", false, false, true, 13)) {
                        // line 14
                        yield "          <span aria-hidden=\"true\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                        yield "</span>
        ";
                    } else {
                        // line 16
                        yield "          ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                        yield "
        ";
                    }
                    // line 18
                    yield "      </a>
    </li>
    ";
                } else {
                    // line 21
                    yield "    <li class=\"page-item active\" aria-current=\"page\">
      <span class=\"page-link\">
        <span class=\"visually-hidden\">";
                    // line 23
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Current page"));
                    yield "</span>";
                    // line 24
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", true, true, true, 24)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 24), 24, $this->source), t("Current page"))) : (t("Current page"))), "html", null, true);
                    // line 25
                    yield "</span>
    </li>
    ";
                }
                // line 28
                yield "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            yield "  </ul>
</nav>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["variant", "items"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/ui_suite_bootstrap/templates/patterns/pagination/pattern-pagination.html.twig";
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
        return array (  120 => 29,  114 => 28,  109 => 25,  107 => 24,  104 => 23,  100 => 21,  95 => 18,  89 => 16,  83 => 14,  81 => 13,  76 => 12,  74 => 11,  71 => 10,  68 => 9,  64 => 8,  60 => 7,  55 => 6,  53 => 5,  50 => 4,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/ui_suite_bootstrap/templates/patterns/pagination/pattern-pagination.html.twig", "/var/www/html/web/themes/contrib/ui_suite_bootstrap/templates/patterns/pagination/pattern-pagination.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 2, "for" => 8);
        static $filters = array("lower" => 1, "replace" => 2, "t" => 6, "escape" => 7, "default" => 11);
        static $functions = array("create_attribute" => 11);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['lower', 'replace', 't', 'escape', 'default'],
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
