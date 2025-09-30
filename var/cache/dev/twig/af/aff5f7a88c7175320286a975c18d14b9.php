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

/* default/jewels.html.twig */
class __TwigTemplate_6676b093871bfe2ff66c18d3ded17b03 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'description' => [$this, 'block_description'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/jewels.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/jewels.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "I prodotti";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_description(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        yield "\t<section>
\t\t<div class=\"page-title page-title-parallax parallax scroll-detect py-lg-6\">
\t\t\t<img src=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shop.jpg"), "html", null, true);
        yield "\" class=\"parallax-bg\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"page-title-row py-5\">
\t\t\t\t\t<div class=\"page-title-content mw-xs\">
\t\t\t\t\t\t<h1>Products</h1>
\t\t\t\t\t\t<p class=\"color text-larger mt-4 mb-0\">Dynamic ways to display under-the-fold Media Uniquely aggregate cross-media expertise.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"container my-4\">
\t\t\t<ul class=\"nav canvas-alt-tabs tabs-alt tabs-bb nav-tabs justify-content-center gap-3 mb-5 border-bottom-0\" role=\"tablist\">
\t\t\t\t<li class=\"nav-item mx-md-3\" role=\"presentation\">
\t\t\t\t\t<button class=\"nav-link d-flex align-items-center flex-md-column active\" data-bs-toggle=\"pill\" data-bs-target=\"#tab-portachiavi\" type=\"button\" role=\"tab\" aria-selected=\"true\">
\t\t\t\t\t\t<span class=\"d-block ms-3 ms-md-0 mt-3\">Portachiavi</span>
\t\t\t\t\t</button>
\t\t\t\t</li>

\t\t\t\t<li class=\"nav-item mx-md-3\" role=\"presentation\">
\t\t\t\t\t<button class=\"nav-link d-flex align-items-center flex-md-column\" data-bs-toggle=\"pill\" data-bs-target=\"#tab-bracciali\" type=\"button\" role=\"tab\" aria-selected=\"false\">
\t\t\t\t\t\t<span class=\"d-block ms-3 ms-md-0 mt-3\">Bracciali</span>
\t\t\t\t\t</button>
\t\t\t\t</li>

\t\t\t\t<li class=\"nav-item mx-md-3\" role=\"presentation\">
\t\t\t\t\t<button class=\"nav-link d-flex align-items-center flex-md-column\" data-bs-toggle=\"pill\" data-bs-target=\"#tab-collane\" type=\"button\" role=\"tab\" aria-selected=\"false\">
\t\t\t\t\t\t<span class=\"d-block ms-3 ms-md-0 mt-3\">Collane</span>
\t\t\t\t\t</button>
\t\t\t\t</li>
\t\t\t</ul>

\t\t\t<div class=\"tab-content mt-4\">
\t\t\t\t<!-- Portachiavi -->
\t\t\t\t<div class=\"tab-pane fade show active\" id=\"tab-portachiavi\" role=\"tabpanel\">
\t\t\t\t\t<div class=\"shop row text-center g-5\">
\t\t\t\t\t\t";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["jewels"]) || array_key_exists("jewels", $context) ? $context["jewels"] : (function () { throw new RuntimeError('Variable "jewels" does not exist.', 45, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
            // line 46
            yield "\t\t\t\t\t\t\t";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["j"], "category", [], "any", false, false, false, 46), "value", [], "any", false, false, false, 46) == "Portachiavi")) {
                // line 47
                yield "\t\t\t\t\t\t\t\t";
                yield from $this->load("components/card_shop.html.twig", 47)->unwrap()->yield($context);
                // line 48
                yield "\t\t\t\t\t\t\t";
            }
            // line 49
            yield "\t\t\t\t\t\t";
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
        unset($context['_seq'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Bracciali -->
\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-bracciali\" role=\"tabpanel\">
\t\t\t\t\t<div class=\"shop row text-center g-5\">
\t\t\t\t\t\t";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["jewels"]) || array_key_exists("jewels", $context) ? $context["jewels"] : (function () { throw new RuntimeError('Variable "jewels" does not exist.', 56, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
            // line 57
            yield "\t\t\t\t\t\t\t";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["j"], "category", [], "any", false, false, false, 57), "value", [], "any", false, false, false, 57) == "Bracciali")) {
                // line 58
                yield "\t\t\t\t\t\t\t\t";
                yield from $this->load("components/card_shop.html.twig", 58)->unwrap()->yield($context);
                // line 59
                yield "\t\t\t\t\t\t\t";
            }
            // line 60
            yield "\t\t\t\t\t\t";
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
        unset($context['_seq'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Collane -->
\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-collane\" role=\"tabpanel\">
\t\t\t\t\t<div class=\"shop row text-center g-5\">
\t\t\t\t\t\t";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["jewels"]) || array_key_exists("jewels", $context) ? $context["jewels"] : (function () { throw new RuntimeError('Variable "jewels" does not exist.', 67, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
            // line 68
            yield "\t\t\t\t\t\t\t";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["j"], "category", [], "any", false, false, false, 68), "value", [], "any", false, false, false, 68) == "Collane")) {
                // line 69
                yield "\t\t\t\t\t\t\t\t";
                yield from $this->load("components/card_shop.html.twig", 69)->unwrap()->yield($context);
                // line 70
                yield "\t\t\t\t\t\t\t";
            }
            // line 71
            yield "\t\t\t\t\t\t";
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
        unset($context['_seq'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/jewels.html.twig";
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
        return array (  302 => 72,  288 => 71,  285 => 70,  282 => 69,  279 => 68,  262 => 67,  254 => 61,  240 => 60,  237 => 59,  234 => 58,  231 => 57,  214 => 56,  206 => 50,  192 => 49,  189 => 48,  186 => 47,  183 => 46,  166 => 45,  127 => 9,  123 => 7,  110 => 6,  88 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}I prodotti{% endblock %}
{% block description %}{% endblock %}

{% block content %}
\t<section>
\t\t<div class=\"page-title page-title-parallax parallax scroll-detect py-lg-6\">
\t\t\t<img src=\"{{ asset ('images/shop.jpg')}}\" class=\"parallax-bg\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"page-title-row py-5\">
\t\t\t\t\t<div class=\"page-title-content mw-xs\">
\t\t\t\t\t\t<h1>Products</h1>
\t\t\t\t\t\t<p class=\"color text-larger mt-4 mb-0\">Dynamic ways to display under-the-fold Media Uniquely aggregate cross-media expertise.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"container my-4\">
\t\t\t<ul class=\"nav canvas-alt-tabs tabs-alt tabs-bb nav-tabs justify-content-center gap-3 mb-5 border-bottom-0\" role=\"tablist\">
\t\t\t\t<li class=\"nav-item mx-md-3\" role=\"presentation\">
\t\t\t\t\t<button class=\"nav-link d-flex align-items-center flex-md-column active\" data-bs-toggle=\"pill\" data-bs-target=\"#tab-portachiavi\" type=\"button\" role=\"tab\" aria-selected=\"true\">
\t\t\t\t\t\t<span class=\"d-block ms-3 ms-md-0 mt-3\">Portachiavi</span>
\t\t\t\t\t</button>
\t\t\t\t</li>

\t\t\t\t<li class=\"nav-item mx-md-3\" role=\"presentation\">
\t\t\t\t\t<button class=\"nav-link d-flex align-items-center flex-md-column\" data-bs-toggle=\"pill\" data-bs-target=\"#tab-bracciali\" type=\"button\" role=\"tab\" aria-selected=\"false\">
\t\t\t\t\t\t<span class=\"d-block ms-3 ms-md-0 mt-3\">Bracciali</span>
\t\t\t\t\t</button>
\t\t\t\t</li>

\t\t\t\t<li class=\"nav-item mx-md-3\" role=\"presentation\">
\t\t\t\t\t<button class=\"nav-link d-flex align-items-center flex-md-column\" data-bs-toggle=\"pill\" data-bs-target=\"#tab-collane\" type=\"button\" role=\"tab\" aria-selected=\"false\">
\t\t\t\t\t\t<span class=\"d-block ms-3 ms-md-0 mt-3\">Collane</span>
\t\t\t\t\t</button>
\t\t\t\t</li>
\t\t\t</ul>

\t\t\t<div class=\"tab-content mt-4\">
\t\t\t\t<!-- Portachiavi -->
\t\t\t\t<div class=\"tab-pane fade show active\" id=\"tab-portachiavi\" role=\"tabpanel\">
\t\t\t\t\t<div class=\"shop row text-center g-5\">
\t\t\t\t\t\t{% for j in jewels %}
\t\t\t\t\t\t\t{% if j.category.value == 'Portachiavi' %}
\t\t\t\t\t\t\t\t{% include 'components/card_shop.html.twig' %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Bracciali -->
\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-bracciali\" role=\"tabpanel\">
\t\t\t\t\t<div class=\"shop row text-center g-5\">
\t\t\t\t\t\t{% for j in jewels %}
\t\t\t\t\t\t\t{% if j.category.value == 'Bracciali' %}
\t\t\t\t\t\t\t\t{% include 'components/card_shop.html.twig' %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Collane -->
\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-collane\" role=\"tabpanel\">
\t\t\t\t\t<div class=\"shop row text-center g-5\">
\t\t\t\t\t\t{% for j in jewels %}
\t\t\t\t\t\t\t{% if j.category.value == 'Collane'%}
\t\t\t\t\t\t\t\t{% include 'components/card_shop.html.twig' %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
{% endblock %}
", "default/jewels.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/Kajmvvv/templates/default/jewels.html.twig");
    }
}
