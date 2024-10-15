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

/* themes/contrib/ui_suite_bootstrap/templates/patterns/nav_item/pattern-nav-item.html.twig */
class __TwigTemplate_de9ccc32d1d98a4301e87a45cbc1658d extends Template
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
        yield "<li";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["nav-item"], "method", false, false, true, 1), 1, $this->source), "html", null, true);
        yield ">
  ";
        // line 2
        $context["link"] = ((($context["active"] ?? null)) ? ($this->extensions['Drupal\ui_patterns\Template\TwigExtension']->addClass($this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 2, $this->source), "active")) : (($context["link"] ?? null)));
        // line 3
        yield "  ";
        $context["link"] = ((($context["disabled"] ?? null)) ? ($this->extensions['Drupal\ui_patterns\Template\TwigExtension']->addClass($this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 3, $this->source), "disabled")) : (($context["link"] ?? null)));
        // line 4
        yield "  ";
        $context["link"] = ((($context["toggle"] ?? null)) ? ($this->extensions['Drupal\ui_patterns\Template\TwigExtension']->setAttribute($this->extensions['Drupal\ui_patterns\Template\TwigExtension']->setAttribute($this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 4, $this->source), "role", "tab"), "data-bs-toggle", "tab")) : (($context["link"] ?? null)));
        // line 5
        yield "  ";
        $context["link"] = ((($context["toggle"] ?? null)) ? ($this->extensions['Drupal\ui_patterns\Template\TwigExtension']->setAttribute($this->extensions['Drupal\ui_patterns\Template\TwigExtension']->setAttribute($this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 5, $this->source), "aria-controls", $this->sandbox->ensureToStringAllowed(($context["toggle"] ?? null), 5, $this->source)), "data-bs-target", ("#" . $this->sandbox->ensureToStringAllowed(($context["toggle"] ?? null), 5, $this->source)))) : (($context["link"] ?? null)));
        // line 6
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\ui_patterns\Template\TwigExtension']->addClass($this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 6, $this->source), "nav-link"), "html", null, true);
        yield "
</li>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "active", "disabled", "toggle"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/ui_suite_bootstrap/templates/patterns/nav_item/pattern-nav-item.html.twig";
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
        return array (  60 => 6,  57 => 5,  54 => 4,  51 => 3,  49 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/ui_suite_bootstrap/templates/patterns/nav_item/pattern-nav-item.html.twig", "/var/www/html/web/themes/contrib/ui_suite_bootstrap/templates/patterns/nav_item/pattern-nav-item.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2);
        static $filters = array("escape" => 1, "add_class" => 2, "set_attribute" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape', 'add_class', 'set_attribute'],
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
