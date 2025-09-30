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

/* default/index.html.twig */
class __TwigTemplate_a04514020ba82366467d41793d709250 extends Template
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
            'slider' => [$this, 'block_slider'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        yield "Gioielli in Resina di Alice
";
        
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

        yield "Hai un’idea? Alice la trasforma in un gioiello unico.
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_slider(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slider"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slider"));

        // line 8
        yield "\t<section id=\"slider\" class=\"slider-element min-vh-md-100 min-vh-75 include-header\">
\t\t<div class=\"slider-inner\" style=\"background-image: url('";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/section.webp"), "html", null, true);
        yield "');background-position: 50% 50%;\" data-0-top=\"background-size: 100%\" data-top-bottom=\"background-size: 120%\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"vertical-middle\">
\t\t\t\t\t<div class=\"row mt-6\">
\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t<div class=\"before-title text-uppercase ls-3 mb-5 text-dark text-smaller\">By Alice Jewellery</div>
\t\t\t\t\t\t\t<h2 class=\"display-4 fw-light ls-1 lh-sm\">
\t\t\t\t\t\t\t\tCelebra i tuoi momenti più
\t\t\t\t\t\t\t\t<span class=\"fw-normal\">preziosi</span><br>
\t\t\t\t\t\t\t\tcon gioielli unici in resina.
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t<a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jewels");
        yield "\" class=\"canvas-button mt-5\">
\t\t\t\t\t\t\t\t<span>Scopri i prodotti</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 32
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

        // line 33
        yield "\t<section id=\"content\">
\t\t<div class=\"content-wrap pb-0\">
\t\t\t<!-- Parallax Section - #1 -->
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row justify-content-between align-items-center\">
\t\t\t\t\t<!-- Immagini sinistra -->
\t\t\t\t\t<div class=\"col-md-4 d-none d-md-block\">
\t\t\t\t\t\t<div class=\"cascading-images\">
\t\t\t\t\t\t\t<div class=\"cascading-images-inner\">
\t\t\t\t\t\t\t\t<div class=\"cascading-image p-5\">
\t\t\t\t\t\t\t\t\t<div data-bottom-top=\"transform: translate(-20%, -35%)\" data-top-bottom=\"transform: translate(-20%, -15%)\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cascading/1.jpg"), "html", null, true);
        yield "\" alt=\"Gioiello in resina\" data-animate=\"zoomIn faster\" class=\"rounded-5 shadow-lg\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"cascading-image\">
\t\t\t\t\t\t\t\t\t<div data-bottom-top=\"transform: translate(30%, 0%)\" data-top-bottom=\"transform: translate(30%, -45%)\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cascading/2.jpg"), "html", null, true);
        yield "\" alt=\"Dettaglio collezione Alice\" data-animate=\"zoomIn faster\" data-delay=\"300\" class=\"rounded-5 shadow-lg\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Testo centrale -->
\t\t\t\t\t<div class=\"col-md-4 text-center px-lg-5\">
\t\t\t\t\t\t<div class=\"before-title text-uppercase ls-3 mb-3 text-dark text-smaller op-06\">Le Collezioni</div>
\t\t\t\t\t\t<h2 class=\"ls-1 lh-base h1 mb-5 fw-normal\">Scopri la magia delle creazioni di Alice.</h2>
\t\t\t\t\t\t<p>Ogni gioiello racconta una storia. Disegnati con amore e realizzati con cura artigianale, i nostri pezzi sono pensati per accompagnarti nei tuoi momenti più preziosi.</p>
\t\t\t\t\t\t<a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jewels");
        yield "\" class=\"canvas-button canvas-button-sm py-3 px-5 mt-4\">
\t\t\t\t\t\t\t<span>Scopri ora
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-arrow-right ms-2\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Immagini destra -->
\t\t\t\t\t<div class=\"col-md-4 d-none d-md-block\">
\t\t\t\t\t\t<div class=\"cascading-images\">
\t\t\t\t\t\t\t<div class=\"cascading-images-inner\">
\t\t\t\t\t\t\t\t<div class=\"cascading-image\">
\t\t\t\t\t\t\t\t\t<div data-bottom-top=\"transform: translate(-20%, -40px)\" data-top-center=\"transform: translate(-20%, 5px)\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cascading/3.jpg"), "html", null, true);
        yield "\" alt=\"Anello in resina artigianale\" data-animate=\"zoomIn faster\" class=\"rounded-5 shadow-lg\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"cascading-image\">
\t\t\t\t\t\t\t\t\t<div data-bottom-top=\"transform: translate(50%, -60%)\" data-top-bottom=\"transform: translate(50%, 60%)\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cascading/4.jpg"), "html", null, true);
        yield "\" alt=\"Collezione esclusiva Alice\" data-animate=\"zoomIn faster\" data-delay=\"300\" class=\"rounded-5 shadow-lg\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Video Section - #2 -->
\t\t\t<div class=\"section bg-transparent mt-6 mb-0\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"d-flex min-vh-75 align-items-center justify-content-center dark\">
\t\t\t\t\t\t<h2 class=\"display-4 mb-3 fw-normal\" data-animate=\"fadeInUp\">Celebra i tuoi momenti speciali</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"video-wrap no-placeholder\" data-bottom-top=\"transform: translate(0%, -30%)\" data-top-bottom=\"transform: translate(0%, 30%)\">
\t\t\t\t\t<video poster=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/video-poster.jpg"), "html", null, true);
        yield "\" preload=\"auto\" loop autoplay muted playsinline aria-label=\"Video presentazione gioielli Alice\">
\t\t\t\t\t\t<source src=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/video.mp4"), "html", null, true);
        yield "\" type=\"video/mp4\">
\t\t\t\t\t</video>
\t\t\t\t\t<div class=\"video-overlay\" style=\"background: rgba(0,0,0,.1);\"></div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Product Carousel Section - #3 -->
\t\t\t<div class=\"section bg-transparent mt-0 mt-lg-5\">
\t\t\t\t<div class=\"row gy-3\">
\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t<div class=\"product ps-5 pt-lg-5\">
\t\t\t\t\t\t\t<h2>Le nostre creazioni</h2>
\t\t\t\t\t\t\t<p>Tutto nasce da un’idea, da un’emozione che si trasforma in un gioiello unico. Scopri la collezione e trova il pezzo che parla di te.</p>
\t\t\t\t\t\t\t<a href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jewels");
        yield "\" class=\"btn btn-outline-dark fs-5 mt-lg-6 d-block\">Scopri di più
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-arrow-right ms-2\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-9 ps-4 pe-4\">
\t\t\t\t\t\t<div class=\"reveal-content position-relative\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["jewels"]) || array_key_exists("jewels", $context) ? $context["jewels"] : (function () { throw new RuntimeError('Variable "jewels" does not exist.', 119, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
            // line 120
            yield "\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product text-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, $context["j"], "photoNumber", [], "any", false, false, false, 123)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 124
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 125
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((((("images/products/" . CoreExtension::getAttribute($this->env, $this->source, $context["j"], "id", [], "any", false, false, false, 125)) . "/") . $context["i"]) . ".jpg")), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["j"], "title", [], "any", false, false, false, 125), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            yield "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-desc mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-uppercase ls-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-folder-open\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["j"], "category", [], "any", false, false, false, 133), "value", [], "any", false, false, false, 133), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"mt-1 mb-0 h5\">";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["j"], "title", [], "any", false, false, false, 134), "html", null, true);
            yield "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-price fw-light mt-2 color_bl\">€
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["j"], "price", [], "any", false, false, false, 137), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['j'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Instagram Section - #4 -->
\t\t\t<div class=\"section my-0\" style=\"background-color: var(--cnvs-color-secondary)\">
\t\t\t\t<div class=\"container py-lg-5\">
\t\t\t\t\t<div class=\"row justify-content-center align-items-center\">
\t\t\t\t\t\t<div class=\"col-md-5 text-center\">
\t\t\t\t\t\t\t<div class=\"text-uppercase mb-4 text-dark h1 color\">
\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-instagram\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h3 class=\"ls-1 lh-base h2 mb-5 fw-light\">Seguici su Instagram
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<a href=\"#\" target=\"_blank\" class=\"fst-italic color fw-normal\">@Kajmvvv</a>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12 mb-sm-5\">
\t\t\t\t\t\t\t<div class=\"position-relative row g-lg-0 row-cols-3 row-cols-sm-5 justify-content-md-center align-items-center\">
\t\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/p/DC4zSucCMIn/?igsh=bHlvM3RhZGxhdW4=\" data-bottom-top=\"transform: translate(0px, -30px)\" data-top-center=\"transform: translate(0px, -140px)\">
\t\t\t\t\t\t\t\t\t<img class=\"w-100\" src=\"";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/1.png"), "html", null, true);
        yield "\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"bg-overlay-content dark\" data-hover-animate=\"fadeIn\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-trigger-icon bg-light text-dark\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-instagram\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"bg-overlay-bg dark\" data-hover-animate=\"fadeIn\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/p/DB6fHvHCFJZ/?igsh=ZzdlcjBzaWNhOTh3\" data-bottom-top=\"transform: translate(20px, 70px)\" data-top-center=\"transform: translate(20px, -100px)\"><img class=\"w-100\" src=\"";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/2.png"), "html", null, true);
        yield "\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"bg-overlay-content dark\" data-hover-animate=\"fadeIn\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-trigger-icon bg-light text-dark\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-instagram\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"bg-overlay-bg dark\" data-hover-animate=\"fadeIn\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/p/DBzpKKQC4yk/?igsh=NnFneGp5YzMyNjF3\" data-bottom-top=\"transform: translate(40px, 90px)\" data-top-center=\"transform: translate(40px, 10px)\"><img class=\"w-100\" src=\"";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/3.png"), "html", null, true);
        yield "\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"bg-overlay-content dark\" data-hover-animate=\"fadeIn\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-trigger-icon bg-light text-dark\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-instagram\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"bg-overlay-bg dark\" data-hover-animate=\"fadeIn\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/p/DBta40GCqUv/?igsh=ZzhnanN4dWt1dWp0\" data-bottom-top=\"transform: translate(60px, 130px)\" data-top-center=\"transform: translate(60px, 100px)\"><img class=\"w-100\" src=\"";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/4.png"), "html", null, true);
        yield "\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"bg-overlay-content dark\" data-hover-animate=\"fadeIn\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-trigger-icon bg-light text-dark\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-instagram\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"bg-overlay-bg dark\" data-hover-animate=\"fadeIn\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/p/DBrudqvCHxl/?igsh=MXM1bG1uazJ3emhjMA==\" data-bottom-top=\"transform: translate(-30px, 80px)\" data-top-center=\"transform: translate(-30px, -100px)\"><img class=\"w-100\" src=\"";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/5.png"), "html", null, true);
        yield "\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"bg-overlay-content dark\" data-hover-animate=\"fadeIn\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-trigger-icon bg-light text-dark\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-instagram\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"bg-overlay-bg dark\" data-hover-animate=\"fadeIn\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Blog Section - #5 -->
\t\t\t";
        // line 259
        yield "\t\t</div>
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
        return "default/index.html.twig";
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
        return array (  441 => 259,  421 => 204,  408 => 194,  395 => 184,  382 => 174,  369 => 164,  345 => 142,  334 => 137,  328 => 134,  324 => 133,  317 => 128,  306 => 125,  303 => 124,  299 => 123,  294 => 120,  290 => 119,  278 => 110,  262 => 97,  258 => 96,  238 => 79,  230 => 74,  214 => 61,  199 => 49,  191 => 44,  178 => 33,  165 => 32,  144 => 20,  130 => 9,  127 => 8,  114 => 7,  90 => 4,  66 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Gioielli in Resina di Alice
{% endblock %}
{% block description %}Hai un’idea? Alice la trasforma in un gioiello unico.
{% endblock %}

{% block slider %}
\t<section id=\"slider\" class=\"slider-element min-vh-md-100 min-vh-75 include-header\">
\t\t<div class=\"slider-inner\" style=\"background-image: url('{{asset ('images/section.webp')}}');background-position: 50% 50%;\" data-0-top=\"background-size: 100%\" data-top-bottom=\"background-size: 120%\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"vertical-middle\">
\t\t\t\t\t<div class=\"row mt-6\">
\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t<div class=\"before-title text-uppercase ls-3 mb-5 text-dark text-smaller\">By Alice Jewellery</div>
\t\t\t\t\t\t\t<h2 class=\"display-4 fw-light ls-1 lh-sm\">
\t\t\t\t\t\t\t\tCelebra i tuoi momenti più
\t\t\t\t\t\t\t\t<span class=\"fw-normal\">preziosi</span><br>
\t\t\t\t\t\t\t\tcon gioielli unici in resina.
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t<a href=\"{{ path('jewels') }}\" class=\"canvas-button mt-5\">
\t\t\t\t\t\t\t\t<span>Scopri i prodotti</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
{% endblock %}


{% block content %}
\t<section id=\"content\">
\t\t<div class=\"content-wrap pb-0\">
\t\t\t<!-- Parallax Section - #1 -->
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row justify-content-between align-items-center\">
\t\t\t\t\t<!-- Immagini sinistra -->
\t\t\t\t\t<div class=\"col-md-4 d-none d-md-block\">
\t\t\t\t\t\t<div class=\"cascading-images\">
\t\t\t\t\t\t\t<div class=\"cascading-images-inner\">
\t\t\t\t\t\t\t\t<div class=\"cascading-image p-5\">
\t\t\t\t\t\t\t\t\t<div data-bottom-top=\"transform: translate(-20%, -35%)\" data-top-bottom=\"transform: translate(-20%, -15%)\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/cascading/1.jpg') }}\" alt=\"Gioiello in resina\" data-animate=\"zoomIn faster\" class=\"rounded-5 shadow-lg\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"cascading-image\">
\t\t\t\t\t\t\t\t\t<div data-bottom-top=\"transform: translate(30%, 0%)\" data-top-bottom=\"transform: translate(30%, -45%)\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/cascading/2.jpg') }}\" alt=\"Dettaglio collezione Alice\" data-animate=\"zoomIn faster\" data-delay=\"300\" class=\"rounded-5 shadow-lg\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Testo centrale -->
\t\t\t\t\t<div class=\"col-md-4 text-center px-lg-5\">
\t\t\t\t\t\t<div class=\"before-title text-uppercase ls-3 mb-3 text-dark text-smaller op-06\">Le Collezioni</div>
\t\t\t\t\t\t<h2 class=\"ls-1 lh-base h1 mb-5 fw-normal\">Scopri la magia delle creazioni di Alice.</h2>
\t\t\t\t\t\t<p>Ogni gioiello racconta una storia. Disegnati con amore e realizzati con cura artigianale, i nostri pezzi sono pensati per accompagnarti nei tuoi momenti più preziosi.</p>
\t\t\t\t\t\t<a href=\"{{ path('jewels') }}\" class=\"canvas-button canvas-button-sm py-3 px-5 mt-4\">
\t\t\t\t\t\t\t<span>Scopri ora
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-arrow-right ms-2\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Immagini destra -->
\t\t\t\t\t<div class=\"col-md-4 d-none d-md-block\">
\t\t\t\t\t\t<div class=\"cascading-images\">
\t\t\t\t\t\t\t<div class=\"cascading-images-inner\">
\t\t\t\t\t\t\t\t<div class=\"cascading-image\">
\t\t\t\t\t\t\t\t\t<div data-bottom-top=\"transform: translate(-20%, -40px)\" data-top-center=\"transform: translate(-20%, 5px)\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/cascading/3.jpg') }}\" alt=\"Anello in resina artigianale\" data-animate=\"zoomIn faster\" class=\"rounded-5 shadow-lg\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"cascading-image\">
\t\t\t\t\t\t\t\t\t<div data-bottom-top=\"transform: translate(50%, -60%)\" data-top-bottom=\"transform: translate(50%, 60%)\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/cascading/4.jpg') }}\" alt=\"Collezione esclusiva Alice\" data-animate=\"zoomIn faster\" data-delay=\"300\" class=\"rounded-5 shadow-lg\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Video Section - #2 -->
\t\t\t<div class=\"section bg-transparent mt-6 mb-0\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"d-flex min-vh-75 align-items-center justify-content-center dark\">
\t\t\t\t\t\t<h2 class=\"display-4 mb-3 fw-normal\" data-animate=\"fadeInUp\">Celebra i tuoi momenti speciali</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"video-wrap no-placeholder\" data-bottom-top=\"transform: translate(0%, -30%)\" data-top-bottom=\"transform: translate(0%, 30%)\">
\t\t\t\t\t<video poster=\"{{ asset('images/video-poster.jpg') }}\" preload=\"auto\" loop autoplay muted playsinline aria-label=\"Video presentazione gioielli Alice\">
\t\t\t\t\t\t<source src=\"{{ asset('images/video.mp4') }}\" type=\"video/mp4\">
\t\t\t\t\t</video>
\t\t\t\t\t<div class=\"video-overlay\" style=\"background: rgba(0,0,0,.1);\"></div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Product Carousel Section - #3 -->
\t\t\t<div class=\"section bg-transparent mt-0 mt-lg-5\">
\t\t\t\t<div class=\"row gy-3\">
\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t<div class=\"product ps-5 pt-lg-5\">
\t\t\t\t\t\t\t<h2>Le nostre creazioni</h2>
\t\t\t\t\t\t\t<p>Tutto nasce da un’idea, da un’emozione che si trasforma in un gioiello unico. Scopri la collezione e trova il pezzo che parla di te.</p>
\t\t\t\t\t\t\t<a href=\"{{ path('jewels') }}\" class=\"btn btn-outline-dark fs-5 mt-lg-6 d-block\">Scopri di più
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-arrow-right ms-2\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-9 ps-4 pe-4\">
\t\t\t\t\t\t<div class=\"reveal-content position-relative\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t{% for j in jewels %}
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product text-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t{% for i in 1..j.photoNumber %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/products/' ~ j.id ~ '/' ~ i ~ '.jpg') }}\" alt=\"{{ j.title }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-desc mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-uppercase ls-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-folder-open\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ j.category.value }}</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"mt-1 mb-0 h5\">{{ j.title }}</h3>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-price fw-light mt-2 color_bl\">€
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ j.price }}</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Instagram Section - #4 -->
\t\t\t<div class=\"section my-0\" style=\"background-color: var(--cnvs-color-secondary)\">
\t\t\t\t<div class=\"container py-lg-5\">
\t\t\t\t\t<div class=\"row justify-content-center align-items-center\">
\t\t\t\t\t\t<div class=\"col-md-5 text-center\">
\t\t\t\t\t\t\t<div class=\"text-uppercase mb-4 text-dark h1 color\">
\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-instagram\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h3 class=\"ls-1 lh-base h2 mb-5 fw-light\">Seguici su Instagram
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<a href=\"#\" target=\"_blank\" class=\"fst-italic color fw-normal\">@Kajmvvv</a>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12 mb-sm-5\">
\t\t\t\t\t\t\t<div class=\"position-relative row g-lg-0 row-cols-3 row-cols-sm-5 justify-content-md-center align-items-center\">
\t\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/p/DC4zSucCMIn/?igsh=bHlvM3RhZGxhdW4=\" data-bottom-top=\"transform: translate(0px, -30px)\" data-top-center=\"transform: translate(0px, -140px)\">
\t\t\t\t\t\t\t\t\t<img class=\"w-100\" src=\"{{ asset ('images/1.png')}}\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"bg-overlay-content dark\" data-hover-animate=\"fadeIn\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-trigger-icon bg-light text-dark\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-instagram\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"bg-overlay-bg dark\" data-hover-animate=\"fadeIn\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/p/DB6fHvHCFJZ/?igsh=ZzdlcjBzaWNhOTh3\" data-bottom-top=\"transform: translate(20px, 70px)\" data-top-center=\"transform: translate(20px, -100px)\"><img class=\"w-100\" src=\"{{ asset ('images/2.png')}}\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"bg-overlay-content dark\" data-hover-animate=\"fadeIn\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-trigger-icon bg-light text-dark\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-instagram\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"bg-overlay-bg dark\" data-hover-animate=\"fadeIn\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/p/DBzpKKQC4yk/?igsh=NnFneGp5YzMyNjF3\" data-bottom-top=\"transform: translate(40px, 90px)\" data-top-center=\"transform: translate(40px, 10px)\"><img class=\"w-100\" src=\"{{ asset ('images/3.png')}}\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"bg-overlay-content dark\" data-hover-animate=\"fadeIn\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-trigger-icon bg-light text-dark\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-instagram\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"bg-overlay-bg dark\" data-hover-animate=\"fadeIn\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/p/DBta40GCqUv/?igsh=ZzhnanN4dWt1dWp0\" data-bottom-top=\"transform: translate(60px, 130px)\" data-top-center=\"transform: translate(60px, 100px)\"><img class=\"w-100\" src=\"{{ asset ('images/4.png')}}\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"bg-overlay-content dark\" data-hover-animate=\"fadeIn\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-trigger-icon bg-light text-dark\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-instagram\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"bg-overlay-bg dark\" data-hover-animate=\"fadeIn\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/p/DBrudqvCHxl/?igsh=MXM1bG1uazJ3emhjMA==\" data-bottom-top=\"transform: translate(-30px, 80px)\" data-top-center=\"transform: translate(-30px, -100px)\"><img class=\"w-100\" src=\"{{ asset ('images/5.png')}}\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"bg-overlay-content dark\" data-hover-animate=\"fadeIn\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-trigger-icon bg-light text-dark\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-instagram\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"bg-overlay-bg dark\" data-hover-animate=\"fadeIn\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Blog Section - #5 -->
\t\t\t{#<div class=\"section bg-transparent mt-0 mt-lg-5\">
\t\t\t\t<div class=\"row gy-3\">
\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t<div class=\"ps-5 pt-lg-5\">
\t\t\t\t\t\t\t<h2>Dal nostro blog</h2>
\t\t\t\t\t\t\t<p>Alice condivide con te ispirazioni, consigli di stile e curiosità dal mondo dei gioielli. Ogni articolo è un viaggio nel cuore della creatività.</p>
\t\t\t\t\t\t\t<a href=\"{{ path('homepage') }}\" class=\"btn btn-outline-dark fs-5 mt-lg-6 d-block\">Scopri di più
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-arrow-right ms-2\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-9 ps-4 pe-4\">
\t\t\t\t\t\t<div class=\"reveal-content position-relative\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t{% for b in blog %}
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-card text-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/blog/' ~ b.id ~ '/main.jpg') }}\" alt=\"{{ b.title }}\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog-desc mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-uppercase ls-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ b.date|date(\"d/m/Y\") }}</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mt-1 mb-0\">{{ b.title }}</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-light mt-2\">{{ b.description }}</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>#}
\t\t</div>
\t</section>

{% endblock %}
", "default/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/Kajmvvv/templates/default/index.html.twig");
    }
}
