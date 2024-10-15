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

/* themes/contrib/ui_suite_bootstrap/templates/overrides/system/page.html.twig */
class __TwigTemplate_bc8869a5f28aa41d5851b24b128664ef extends Template
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
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 48
        $context["container"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 48), "fluid_container", [], "any", false, false, true, 48)) ? ("container-fluid") : ("container"));
        // line 50
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 50) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 50))) {
            // line 51
            yield "  ";
            yield from $this->unwrap()->yieldBlock('navbar', $context, $blocks);
        }
        // line 63
        yield "
";
        // line 65
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        // line 130
        yield "
";
        // line 131
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 131)) {
            // line 132
            yield "  ";
            yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "page", "content_attributes"]);        yield from [];
    }

    // line 51
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 52
        yield "    <div class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 52, $this->source), "html", null, true);
        yield " bg-light\">
      ";
        // line 53
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\ui_patterns\Template\TwigExtension']->renderPattern("navbar", ["placement" => "default", "toggler_position" => "end", "toggle_action" => "collapse", "navigation" => CoreExtension::getAttribute($this->env, $this->source,         // line 57
($context["page"] ?? null), "navigation", [], "any", false, false, true, 57), "navigation_collapsible" => CoreExtension::getAttribute($this->env, $this->source,         // line 58
($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 58)], "expand_lg"), "html", null, true);
        // line 59
        yield "
    </div>
  ";
        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 66
        yield "  <div role=\"main\" class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 66, $this->source), "html", null, true);
        yield "\">
    <div class=\"row\">

      ";
        // line 70
        yield "      ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 70)) {
            // line 71
            yield "        ";
            yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
            // line 76
            yield "      ";
        }
        // line 77
        yield "
      ";
        // line 79
        yield "      ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 79)) {
            // line 80
            yield "        ";
            yield from $this->unwrap()->yieldBlock('sidebar_first', $context, $blocks);
            // line 85
            yield "      ";
        }
        // line 86
        yield "
      ";
        // line 88
        yield "      ";
        // line 89
        $context["content_classes"] = [(((CoreExtension::getAttribute($this->env, $this->source,         // line 90
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 90) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 90))) ? ("col col-12 col-sm-6") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 91
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 91) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 91)))) ? ("col col-12 col-sm-9") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 92
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 92) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 92)))) ? ("col col-12 col-sm-9") : ("")), (((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source,         // line 93
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 93)) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 93)))) ? ("col col-12") : (""))];
        // line 96
        yield "      <section";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [($context["content_classes"] ?? null)], "method", false, false, true, 96), 96, $this->source), "html", null, true);
        yield ">

        ";
        // line 99
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 99)) {
            // line 100
            yield "          ";
            yield from $this->unwrap()->yieldBlock('highlighted', $context, $blocks);
            // line 103
            yield "        ";
        }
        // line 104
        yield "
        ";
        // line 106
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 106)) {
            // line 107
            yield "          ";
            yield from $this->unwrap()->yieldBlock('help', $context, $blocks);
            // line 110
            yield "        ";
        }
        // line 111
        yield "
        ";
        // line 113
        yield "        ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 117
        yield "      </section>

      ";
        // line 120
        yield "      ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 120)) {
            // line 121
            yield "        ";
            yield from $this->unwrap()->yieldBlock('sidebar_second', $context, $blocks);
            // line 126
            yield "      ";
        }
        // line 127
        yield "    </div>
  </div>
";
        yield from [];
    }

    // line 71
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 72
        yield "          <div class=\"col col-12 border-bottom mb-4 pb-1\">
            ";
        // line 73
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
        yield "
          </div>
        ";
        yield from [];
    }

    // line 80
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_first(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 81
        yield "          <aside class=\"col col-12 col-sm-3 gx-0\" role=\"complementary\">
            ";
        // line 82
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
        yield "
          </aside>
        ";
        yield from [];
    }

    // line 100
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_highlighted(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 101
        yield "            <div class=\"highlighted\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
        yield "</div>
          ";
        yield from [];
    }

    // line 107
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_help(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 108
        yield "            ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
        yield "
          ";
        yield from [];
    }

    // line 113
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 114
        yield "          <div id=\"main-content\"></div>
          ";
        // line 115
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
        yield "
        ";
        yield from [];
    }

    // line 121
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_second(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 122
        yield "          <aside class=\"col col-12 col-sm-3 gx-0\" role=\"complementary\">
            ";
        // line 123
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
        yield "
          </aside>
        ";
        yield from [];
    }

    // line 132
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 133
        yield "    <footer class=\"footer border-top mt-3 pt-3 ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 133, $this->source), "html", null, true);
        yield "\" role=\"contentinfo\">
      ";
        // line 134
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
        yield "
    </footer>
  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/ui_suite_bootstrap/templates/overrides/system/page.html.twig";
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
        return array (  314 => 134,  309 => 133,  302 => 132,  294 => 123,  291 => 122,  284 => 121,  277 => 115,  274 => 114,  267 => 113,  259 => 108,  252 => 107,  244 => 101,  237 => 100,  229 => 82,  226 => 81,  219 => 80,  211 => 73,  208 => 72,  201 => 71,  194 => 127,  191 => 126,  188 => 121,  185 => 120,  181 => 117,  178 => 113,  175 => 111,  172 => 110,  169 => 107,  166 => 106,  163 => 104,  160 => 103,  157 => 100,  154 => 99,  148 => 96,  146 => 93,  145 => 92,  144 => 91,  143 => 90,  142 => 89,  140 => 88,  137 => 86,  134 => 85,  131 => 80,  128 => 79,  125 => 77,  122 => 76,  119 => 71,  116 => 70,  109 => 66,  102 => 65,  95 => 59,  93 => 58,  92 => 57,  91 => 53,  86 => 52,  79 => 51,  71 => 132,  69 => 131,  66 => 130,  64 => 65,  61 => 63,  57 => 51,  55 => 50,  53 => 48,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/ui_suite_bootstrap/templates/overrides/system/page.html.twig", "/var/www/html/web/themes/contrib/ui_suite_bootstrap/templates/overrides/system/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 48, "if" => 50, "block" => 51);
        static $filters = array("escape" => 52);
        static $functions = array("pattern" => 53);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['escape'],
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
