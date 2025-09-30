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

/* components/card_shop.html.twig */
class __TwigTemplate_b640a7f53ca97b6593fa6bf335716821 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/card_shop.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/card_shop.html.twig"));

        // line 1
        yield "<div class=\"col-md-3 col-sm-6\">
\t<div class=\"product text-center\">
\t\t<div class=\"product-image\">
\t\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 4, $this->source); })()), "photoNumber", [], "any", false, false, false, 4)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 5
            yield "\t\t\t\t<a href=\"#\">
\t\t\t\t\t<img src=\"";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((((("images/products/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6)) . "/") . $context["i"]) . ".jpg")), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6), "html", null, true);
            yield "\">
\t\t\t\t</a>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        yield "\t\t</div>
\t\t<div class=\"product-desc mt-2\">
\t\t\t<div class=\"product-title\">
\t\t\t\t<div class=\"text-uppercase ls-1\">
\t\t\t\t\t<i class=\"fa-regular fa-folder-open\"></i>
\t\t\t\t\t";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 14, $this->source); })()), "category", [], "any", false, false, false, 14), "value", [], "any", false, false, false, 14), "html", null, true);
        yield "</div>
\t\t\t\t<h3 class=\"mt-1 mb-0 h5\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15), "html", null, true);
        yield "</h3>
\t\t\t</div>
\t\t\t<div class=\"product-price fw-light mt-2 color_bl\">€
\t\t\t\t";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 18, $this->source); })()), "price", [], "any", false, false, false, 18), "html", null, true);
        yield "</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/card_shop.html.twig";
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
        return array (  88 => 18,  82 => 15,  78 => 14,  71 => 9,  60 => 6,  57 => 5,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"col-md-3 col-sm-6\">
\t<div class=\"product text-center\">
\t\t<div class=\"product-image\">
\t\t\t{% for i in 1..j.photoNumber %}
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<img src=\"{{ asset('images/products/' ~ j.id ~ '/' ~ i ~ '.jpg') }}\" alt=\"{{ j.title }}\">
\t\t\t\t</a>
\t\t\t{% endfor %}
\t\t</div>
\t\t<div class=\"product-desc mt-2\">
\t\t\t<div class=\"product-title\">
\t\t\t\t<div class=\"text-uppercase ls-1\">
\t\t\t\t\t<i class=\"fa-regular fa-folder-open\"></i>
\t\t\t\t\t{{ j.category.value }}</div>
\t\t\t\t<h3 class=\"mt-1 mb-0 h5\">{{ j.title }}</h3>
\t\t\t</div>
\t\t\t<div class=\"product-price fw-light mt-2 color_bl\">€
\t\t\t\t{{ j.price }}</div>
\t\t</div>
\t</div>
</div>
", "components/card_shop.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/Kajmvvv/templates/components/card_shop.html.twig");
    }
}
