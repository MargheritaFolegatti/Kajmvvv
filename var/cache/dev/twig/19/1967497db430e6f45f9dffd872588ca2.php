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

/* base.html.twig */
class __TwigTemplate_ca9a64cecda76065d40cf9775c734495 extends Template
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
            'description' => [$this, 'block_description'],
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'slider' => [$this, 'block_slider'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"it\">
<head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"content-language\" content=\"it\">
    <meta name=\"description\" content=\"";
        // line 6
        yield from $this->unwrap()->yieldBlock('description', $context, $blocks);
        yield "\">
    <meta name=\"author\" content=\"Margherita\" />
    <meta name=\"copyright\" content=\"Kajmvvv\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>Kajmvvv | ";
        // line 12
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

    ";
        // line 14
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 42
        yield "
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        yield "\" />
</head>

<body class=\"stretched\">
    <div id=\"wrapper\">
        ";
        // line 48
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 95
        yield "
        ";
        // line 96
        yield from $this->unwrap()->yieldBlock('slider', $context, $blocks);
        // line 97
        yield "        ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 98
        yield "
        ";
        // line 99
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 136
        yield "    </div>

    <div id=\"gotoTop\" class=\"fa-solid fa-angle-up\"></div>

    ";
        // line 140
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 172
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

    // line 12
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        yield "\t\t<!-- fontawesome -->
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">

\t\t<!-- Bootstrap CSS -->
\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-...\" crossorigin=\"anonymous\">

\t\t<!-- Font Imports -->
\t\t<link rel=\"stylesheet\" href=\"https://use.typekit.net/vgf0rfn.css\">

\t\t<!-- Core Style -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\">

\t\t<!-- Font Icons -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-icons.css"), "html", null, true);
        yield "\">

\t\t<!-- Niche Demos -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jewellery-boutique.css"), "html", null, true);
        yield "\">

\t\t<!-- Custom CSS -->
\t\t<link rel=\"stylesheet\" href=\"css/custom.css\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t\t<link rel=\"stylesheet\" href=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/personal/classes.css"), "html", null, true);
        yield "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/personal/custom.css"), "html", null, true);
        yield "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/personal/themeOverride.css"), "html", null, true);
        yield "\">

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 48
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 49
        yield "\t\t\t<header id=\"header\" class=\"header-size-md\" data-sticky-class=\"not-dark\">
\t\t\t\t<div id=\"header-wrap\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"header-row\">
\t\t\t\t\t\t\t<!-- Logo -->
\t\t\t\t\t\t\t<div id=\"logo\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        yield "\">
\t\t\t\t\t\t\t\t\t<img class=\"logo-default\" srcset=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"Canvas Logo\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"header-misc\">
\t\t\t\t\t\t\t\t<a href=\"#\" target=\"_blank\" class=\"btn btn-outline-dark\">
\t\t\t\t\t\t\t\t\t@Kajmvvv
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"primary-menu-trigger ms-1\">
\t\t\t\t\t\t\t\t<button class=\"cnvs-hamburger\" type=\"button\" title=\"Open Mobile Menu\">
\t\t\t\t\t\t\t\t\t<span class=\"cnvs-hamburger-box\"><span class=\"cnvs-hamburger-inner\"></span></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Primary Navigation -->
\t\t\t\t\t\t\t<nav class=\"primary-menu me-lg-auto not-dark\">
\t\t\t\t\t\t\t\t<ul class=\"menu-container\">
\t\t\t\t\t\t\t\t\t<li class=\"menu-item mega-menu mega-menu-full\">
\t\t\t\t\t\t\t\t\t\t<a class=\"menu-link\" href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        yield "\"><div>Home</div></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item mega-menu mega-menu-full\">
\t\t\t\t\t\t\t\t\t\t<a class=\"menu-link\" href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jewels");
        yield "\"><div>I prodotti</div></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item mega-menu mega-menu-full\">
\t\t\t\t\t\t\t\t\t\t<a class=\"menu-link\" href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("who");
        yield "\"><div>Chi siamo</div></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"menu-link\" href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        yield "\"><div>Contatti</div></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"header-wrap-clone\"></div>
\t\t\t</header>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 96
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 97
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 99
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 100
        yield "\t\t\t<footer id=\"footer\">
\t\t\t\t<div id=\"copyrights\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row col-mb-30\">
\t\t\t\t\t\t\t<div class=\"col-md-6 text-center text-md-start\">
\t\t\t\t\t\t\t\tCopyrights © ";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " All Rights Reserved by Kajmvvv.<br>
\t\t\t\t\t\t\t\t<div class=\"copyright-links\"><a class=\"color_bl\" href=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("privacy");
        yield "\">Privacy Policy</a></div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-md-6 text-center text-md-end\">
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center justify-content-md-end mb-2\">

\t\t\t\t\t\t\t\t\t<!-- Instagram -->
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"social-icon border-transparent si-small h-bg-instagram me-2\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-instagram\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-instagram\"></i>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<!-- YouTube -->
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"social-icon border-transparent si-small h-bg-youtube\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-youtube\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-youtube\"></i>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-location-pin me-2\"></i> Gallarate (VA) <span class=\"middot\">·</span> <i class=\"fa-solid fa-envelope me-2\"></i>info@kajmvvv.com 
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 140
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 141
        yield "        <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/functions.bundle.js"), "html", null, true);
        yield "\"></script>

        <script>
            ";
        // line 145
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 145, $this->source); })()), "session", [], "any", false, false, false, 145), "get", ["section"], "method", false, false, false, 145) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 145, $this->source); })()), "session", [], "any", false, false, false, 145), "get", ["section"], "method", false, false, false, 145) != "slider"))) {
            // line 146
            yield "                jQuery(document).ready(function () {
                    setTimeout(function () {
                        const btn = document.getElementById(\"btn_";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 148, $this->source); })()), "session", [], "any", false, false, false, 148), "get", ["section"], "method", false, false, false, 148), "html", null, true);
            yield "\");
                        if (btn) btn.click();
                    }, 1000);
                });
                ";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 152, $this->source); })()), "session", [], "any", false, false, false, 152), "remove", ["section"], "method", false, false, false, 152), "html", null, true);
            yield "
            ";
        }
        // line 154
        yield "        </script>

\t\t<!-- Parallax Script
\t\t============================================= -->
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js\"></script>
\t\t<script>!SEMICOLON.Mobile.any() && skrollr.init({forceHeight: false});</script>

\t\t<!-- Hover Image Animate -->
\t\t<script src=\"";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/hover-img-animate.js"), "html", null, true);
        yield "\"></script>

\t\t<!-- Circle Rotate JS -->
\t\t<script src=\"https://cdn.jsdelivr.net/npm/circletype@2.3.0/dist/circletype.min.js\"></script>

\t\t<!-- Custom Scripts - Jewellery boutique related
\t\t============================================= -->
\t\t<script src=\"";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        yield "\"></script>

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
        return "base.html.twig";
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
        return array (  498 => 169,  488 => 162,  478 => 154,  473 => 152,  466 => 148,  462 => 146,  460 => 145,  454 => 142,  449 => 141,  436 => 140,  395 => 106,  391 => 105,  384 => 100,  371 => 99,  349 => 97,  327 => 96,  306 => 85,  300 => 82,  294 => 79,  288 => 76,  263 => 56,  259 => 55,  251 => 49,  238 => 48,  224 => 39,  220 => 38,  216 => 37,  207 => 31,  201 => 28,  195 => 25,  183 => 15,  170 => 14,  148 => 12,  126 => 6,  113 => 172,  111 => 140,  105 => 136,  103 => 99,  100 => 98,  97 => 97,  95 => 96,  92 => 95,  90 => 48,  82 => 43,  79 => 42,  77 => 14,  72 => 12,  63 => 6,  56 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"it\">
<head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"content-language\" content=\"it\">
    <meta name=\"description\" content=\"{% block description %}{% endblock %}\">
    <meta name=\"author\" content=\"Margherita\" />
    <meta name=\"copyright\" content=\"Kajmvvv\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>Kajmvvv | {% block title %}{% endblock %}</title>

    {% block stylesheets %}
\t\t<!-- fontawesome -->
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">

\t\t<!-- Bootstrap CSS -->
\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-...\" crossorigin=\"anonymous\">

\t\t<!-- Font Imports -->
\t\t<link rel=\"stylesheet\" href=\"https://use.typekit.net/vgf0rfn.css\">

\t\t<!-- Core Style -->
\t\t<link rel=\"stylesheet\" href=\"{{ asset ('css/style.css')}}\">

\t\t<!-- Font Icons -->
\t\t<link rel=\"stylesheet\" href=\"{{ asset ('css/font-icons.css')}}\">

\t\t<!-- Niche Demos -->
\t\t<link rel=\"stylesheet\" href=\"{{ asset ('css/jewellery-boutique.css')}}\">

\t\t<!-- Custom CSS -->
\t\t<link rel=\"stylesheet\" href=\"css/custom.css\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t\t<link rel=\"stylesheet\" href=\"{{ asset ('css/personal/classes.css')}}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset ('css/personal/custom.css')}}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset ('css/personal/themeOverride.css')}}\">

    {% endblock %}

    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>

<body class=\"stretched\">
    <div id=\"wrapper\">
        {% block header %}
\t\t\t<header id=\"header\" class=\"header-size-md\" data-sticky-class=\"not-dark\">
\t\t\t\t<div id=\"header-wrap\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"header-row\">
\t\t\t\t\t\t\t<!-- Logo -->
\t\t\t\t\t\t\t<div id=\"logo\">
\t\t\t\t\t\t\t\t<a href=\"{{path ('homepage')}}\">
\t\t\t\t\t\t\t\t\t<img class=\"logo-default\" srcset=\"{{asset ('images/logo.png')}}\" src=\"{{asset ('images/logo.png')}}\" alt=\"Canvas Logo\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"header-misc\">
\t\t\t\t\t\t\t\t<a href=\"#\" target=\"_blank\" class=\"btn btn-outline-dark\">
\t\t\t\t\t\t\t\t\t@Kajmvvv
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"primary-menu-trigger ms-1\">
\t\t\t\t\t\t\t\t<button class=\"cnvs-hamburger\" type=\"button\" title=\"Open Mobile Menu\">
\t\t\t\t\t\t\t\t\t<span class=\"cnvs-hamburger-box\"><span class=\"cnvs-hamburger-inner\"></span></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Primary Navigation -->
\t\t\t\t\t\t\t<nav class=\"primary-menu me-lg-auto not-dark\">
\t\t\t\t\t\t\t\t<ul class=\"menu-container\">
\t\t\t\t\t\t\t\t\t<li class=\"menu-item mega-menu mega-menu-full\">
\t\t\t\t\t\t\t\t\t\t<a class=\"menu-link\" href=\"{{ path ('homepage')}}\"><div>Home</div></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item mega-menu mega-menu-full\">
\t\t\t\t\t\t\t\t\t\t<a class=\"menu-link\" href=\"{{ path ('jewels')}}\"><div>I prodotti</div></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item mega-menu mega-menu-full\">
\t\t\t\t\t\t\t\t\t\t<a class=\"menu-link\" href=\"{{path ('who')}}\"><div>Chi siamo</div></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"menu-link\" href=\"{{path ('contact')}}\"><div>Contatti</div></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"header-wrap-clone\"></div>
\t\t\t</header>
        {% endblock %}

        {% block slider %}{% endblock %}
        {% block content %}{% endblock %}

        {% block footer %}
\t\t\t<footer id=\"footer\">
\t\t\t\t<div id=\"copyrights\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row col-mb-30\">
\t\t\t\t\t\t\t<div class=\"col-md-6 text-center text-md-start\">
\t\t\t\t\t\t\t\tCopyrights © {{ \"now\"|date(\"Y\") }} All Rights Reserved by Kajmvvv.<br>
\t\t\t\t\t\t\t\t<div class=\"copyright-links\"><a class=\"color_bl\" href=\"{{path ('privacy')}}\">Privacy Policy</a></div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-md-6 text-center text-md-end\">
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center justify-content-md-end mb-2\">

\t\t\t\t\t\t\t\t\t<!-- Instagram -->
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"social-icon border-transparent si-small h-bg-instagram me-2\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-instagram\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-instagram\"></i>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<!-- YouTube -->
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"social-icon border-transparent si-small h-bg-youtube\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-youtube\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-youtube\"></i>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-location-pin me-2\"></i> Gallarate (VA) <span class=\"middot\">·</span> <i class=\"fa-solid fa-envelope me-2\"></i>info@kajmvvv.com 
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>
        {% endblock %}
    </div>

    <div id=\"gotoTop\" class=\"fa-solid fa-angle-up\"></div>

    {% block javascripts %}
        <script src=\"{{ asset('js/plugins.min.js') }}\"></script>
        <script src=\"{{ asset('js/functions.bundle.js') }}\"></script>

        <script>
            {% if app.session.get('section') and app.session.get('section') != \"slider\" %}
                jQuery(document).ready(function () {
                    setTimeout(function () {
                        const btn = document.getElementById(\"btn_{{ app.session.get('section') }}\");
                        if (btn) btn.click();
                    }, 1000);
                });
                {{ app.session.remove('section') }}
            {% endif %}
        </script>

\t\t<!-- Parallax Script
\t\t============================================= -->
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js\"></script>
\t\t<script>!SEMICOLON.Mobile.any() && skrollr.init({forceHeight: false});</script>

\t\t<!-- Hover Image Animate -->
\t\t<script src=\"{{ asset ('js/hover-img-animate.js')}}\"></script>

\t\t<!-- Circle Rotate JS -->
\t\t<script src=\"https://cdn.jsdelivr.net/npm/circletype@2.3.0/dist/circletype.min.js\"></script>

\t\t<!-- Custom Scripts - Jewellery boutique related
\t\t============================================= -->
\t\t<script src=\"{{ asset ('js/custom.js')}}\"></script>

    {% endblock %}
</body>
</html>
", "base.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/Kajmvvv/templates/base.html.twig");
    }
}
