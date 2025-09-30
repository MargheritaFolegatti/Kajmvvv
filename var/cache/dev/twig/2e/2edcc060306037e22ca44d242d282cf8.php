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

/* default/who.html.twig */
class __TwigTemplate_ba4ced1f54fb1118b876d5e406d8c080 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/who.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/who.html.twig"));

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

        yield "Chi siamo
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

    // line 7
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

        // line 8
        yield "\t<section>
\t\t<div class=\"page-title page-title-parallax parallax scroll-detect py-5 py-lg-6\">
\t\t\t<img src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shop.jpg"), "html", null, true);
        yield "\" class=\"parallax-bg\" alt=\"Shop Background\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"page-title-row py-4 py-lg-5\">
\t\t\t\t\t<div class=\"page-title-content mw-xs\">
\t\t\t\t\t\t<h1>Chi siamo</h1>
\t\t\t\t\t\t<p class=\"text-muted fs-5 mt-3 mb-0\">
\t\t\t\t\t\t\tDynamic ways to display under-the-fold Media Uniquely aggregate cross-media expertise.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- chi sono -->

\t\t<div class=\"container my-5\">
\t\t\t<div class=\"block-hero-22 p-5 p-md-6 rounded-6\">

\t\t\t\t<!-- Immagine e introduzione -->
\t\t\t\t<div class=\"row justify-content-between align-items-center mb-6\">
\t\t\t\t\t<div class=\"col-lg-6 mb-5 mb-lg-0\">
\t\t\t\t\t\t<img src=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slider.jpg"), "html", null, true);
        yield "\" alt=\"Alice\" class=\"shadow-lg rounded\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<h2>Chi è Alice</h2>
\t\t\t\t\t\t<p>Alice realizza gioielli unici con personalizzazione completa secondo le tue idee. Utilizza resina certificata, materiali di qualità e una vasta gamma di colori per creare creazioni esclusive che raccontano la tua storia.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Punti chiave in griglia -->
\t\t\t\t<div class=\"row justify-content-between col-mb-30\">
\t\t\t\t\t<div class=\"col-sm-6 col-lg-4\">
\t\t\t\t\t\t<div class=\"feature-box fbox-center fbox-bg fbox-border\">
\t\t\t\t\t\t\t<div class=\"fbox-icon\">
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"i-alt\">1</i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"fbox-content\">
\t\t\t\t\t\t\t\t<h3>Personalizzazione Totale<span class=\"subtitle\">Ogni gioiello è creato seguendo le tue idee e preferenze personali.</span></h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-sm-6 col-lg-4\">
\t\t\t\t\t\t<div class=\"feature-box fbox-center fbox-bg fbox-border\">
\t\t\t\t\t\t\t<div class=\"fbox-icon\">
\t\t\t\t\t\t\t\t<a href=\"#\"><i>2</i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"fbox-content\">
\t\t\t\t\t\t\t\t<h3>Colori e Design<span class=\"subtitle\">Ampia scelta di colori per adattarsi al tuo stile unico.</span></h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-sm-6 col-lg-4\">
\t\t\t\t\t\t<div class=\"feature-box fbox-center fbox-bg fbox-border\">
\t\t\t\t\t\t\t<div class=\"fbox-icon\">
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"i-alt\">3</i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"fbox-content\">
\t\t\t\t\t\t\t\t<h3>Materiali di Qualità<span class=\"subtitle\">Solo materiali per garantire bellezza e durata nel tempo.</span></h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- blog -->

\t\t\t<div class=\"container my-5\">
\t\t\t\t<div class=\"text-center mb-5\">
\t\t\t\t\t<h2 class=\"mb-3\">Dal nostro blog</h2>
\t\t\t\t\t<p class=\"mb-4 text-center\">Alice condivide con te ispirazioni, consigli di stile e curiosità dal mondo dei gioielli. Ogni articolo è un viaggio nel cuore della creatività.</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"row g-4\">
\t\t\t\t\t";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 85, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            // line 86
            yield "\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"blog-card text-center h-100\">
\t\t\t\t\t\t\t\t<div class=\"blog-image mb-3\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("images/blog/" . CoreExtension::getAttribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 89)) . "/main.jpg")), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["b"], "title", [], "any", false, false, false, 89), "html", null, true);
            yield "\" class=\"img-fluid rounded\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"blog-desc\">
\t\t\t\t\t\t\t\t\t<div class=\"blog-title mb-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"text-uppercase text-muted fs-7\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["b"], "date", [], "any", false, false, false, 95), "d/m/Y"), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"h5 mt-1 mb-0\">";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["b"], "title", [], "any", false, false, false, 97), "html", null, true);
            yield "</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p class=\"fw-light\">";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["b"], "description", [], "any", false, false, false, 99), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['b'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        yield "\t\t\t\t</div>
\t\t\t</div>


\t\t</section>

\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/who.html.twig";
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
        return array (  250 => 104,  239 => 99,  234 => 97,  229 => 95,  218 => 89,  213 => 86,  209 => 85,  152 => 31,  128 => 10,  124 => 8,  111 => 7,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Chi siamo
{% endblock %}
{% block description %}{% endblock %}

{% block content %}
\t<section>
\t\t<div class=\"page-title page-title-parallax parallax scroll-detect py-5 py-lg-6\">
\t\t\t<img src=\"{{ asset('images/shop.jpg') }}\" class=\"parallax-bg\" alt=\"Shop Background\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"page-title-row py-4 py-lg-5\">
\t\t\t\t\t<div class=\"page-title-content mw-xs\">
\t\t\t\t\t\t<h1>Chi siamo</h1>
\t\t\t\t\t\t<p class=\"text-muted fs-5 mt-3 mb-0\">
\t\t\t\t\t\t\tDynamic ways to display under-the-fold Media Uniquely aggregate cross-media expertise.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- chi sono -->

\t\t<div class=\"container my-5\">
\t\t\t<div class=\"block-hero-22 p-5 p-md-6 rounded-6\">

\t\t\t\t<!-- Immagine e introduzione -->
\t\t\t\t<div class=\"row justify-content-between align-items-center mb-6\">
\t\t\t\t\t<div class=\"col-lg-6 mb-5 mb-lg-0\">
\t\t\t\t\t\t<img src=\"{{ asset('images/slider.jpg') }}\" alt=\"Alice\" class=\"shadow-lg rounded\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<h2>Chi è Alice</h2>
\t\t\t\t\t\t<p>Alice realizza gioielli unici con personalizzazione completa secondo le tue idee. Utilizza resina certificata, materiali di qualità e una vasta gamma di colori per creare creazioni esclusive che raccontano la tua storia.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Punti chiave in griglia -->
\t\t\t\t<div class=\"row justify-content-between col-mb-30\">
\t\t\t\t\t<div class=\"col-sm-6 col-lg-4\">
\t\t\t\t\t\t<div class=\"feature-box fbox-center fbox-bg fbox-border\">
\t\t\t\t\t\t\t<div class=\"fbox-icon\">
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"i-alt\">1</i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"fbox-content\">
\t\t\t\t\t\t\t\t<h3>Personalizzazione Totale<span class=\"subtitle\">Ogni gioiello è creato seguendo le tue idee e preferenze personali.</span></h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-sm-6 col-lg-4\">
\t\t\t\t\t\t<div class=\"feature-box fbox-center fbox-bg fbox-border\">
\t\t\t\t\t\t\t<div class=\"fbox-icon\">
\t\t\t\t\t\t\t\t<a href=\"#\"><i>2</i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"fbox-content\">
\t\t\t\t\t\t\t\t<h3>Colori e Design<span class=\"subtitle\">Ampia scelta di colori per adattarsi al tuo stile unico.</span></h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-sm-6 col-lg-4\">
\t\t\t\t\t\t<div class=\"feature-box fbox-center fbox-bg fbox-border\">
\t\t\t\t\t\t\t<div class=\"fbox-icon\">
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"i-alt\">3</i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"fbox-content\">
\t\t\t\t\t\t\t\t<h3>Materiali di Qualità<span class=\"subtitle\">Solo materiali per garantire bellezza e durata nel tempo.</span></h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- blog -->

\t\t\t<div class=\"container my-5\">
\t\t\t\t<div class=\"text-center mb-5\">
\t\t\t\t\t<h2 class=\"mb-3\">Dal nostro blog</h2>
\t\t\t\t\t<p class=\"mb-4 text-center\">Alice condivide con te ispirazioni, consigli di stile e curiosità dal mondo dei gioielli. Ogni articolo è un viaggio nel cuore della creatività.</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"row g-4\">
\t\t\t\t\t{% for b in blog %}
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"blog-card text-center h-100\">
\t\t\t\t\t\t\t\t<div class=\"blog-image mb-3\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/blog/' ~ b.id ~ '/main.jpg') }}\" alt=\"{{ b.title }}\" class=\"img-fluid rounded\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"blog-desc\">
\t\t\t\t\t\t\t\t\t<div class=\"blog-title mb-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"text-uppercase text-muted fs-7\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t{{ b.date|date(\"d/m/Y\") }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"h5 mt-1 mb-0\">{{ b.title }}</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p class=\"fw-light\">{{ b.description }}</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>


\t\t</section>

\t{% endblock %}
", "default/who.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/Kajmvvv/templates/default/who.html.twig");
    }
}
