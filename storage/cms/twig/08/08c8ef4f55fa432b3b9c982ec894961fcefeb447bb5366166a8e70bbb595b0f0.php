<?php

/* C:\xampp\htdocs\october-basic/themes/Basic/partials/site/header.htm */
class __TwigTemplate_2b2ade4061b7db6ec3bb2c3c07f8f8b445478d4676219f117d0f4b7673ee112e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!-- Nav -->
<!-- Header -->
<header class=\"header\">
\t<div class=\"row\">
\t\t<div class=\"column large-9\">
\t\t\t<div class=\"header__navigation\">
\t\t\t\t<h1><a href=\"index.html\">Markus Morley</a></h1>
\t\t\t\t<nav class=\"header__links\">
\t\t\t\t\t<ul class=\"header__nav\">
\t\t\t\t\t\t<li><a class=\"";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) == "home")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Basic concepts</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a class=\"";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) == "ajax")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ajax");
        echo "\">AJAX framework</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a class=\"";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) == "plugins")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("plugins");
        echo "\">Plugin
\t\t\t\t\t\t\t\tcomponents</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a class=\"";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, ($context["staticPage"] ?? null), "title", []) == "root")) {
            echo "active";
        }
        echo "\" href=\"";
        echo RainLab\Pages\Classes\Page::url("root");
        echo "\">root</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t</div>

\t\t</div>
\t\t<div class=\"column large-3\">
\t\t\t<nav class=\"header__main\">
\t\t\t\t<ul>
\t\t\t\t\t<li class=\"search\">
\t\t\t\t\t\t<button class=\"fa-search js-search-button\">Search</button>
\t\t\t\t\t\t<form class=\"search__form\" method=\"get\" action=\"#\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"query\" placeholder=\"Search\" />
\t\t\t\t\t\t</form>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"menu\">
\t\t\t\t\t\t<button class=\"js-menu-panel\" href=\"#menu\">Menu</button>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>
\t</div>
</header>

<!-- Menu -->
<section id=\"menu\">
\t<button class=\"js-menu-panel-close\"></button>

\t<!-- Search -->
\t<section>
\t\t<form class=\"search\" method=\"get\" action=\"#\">
\t\t\t<input type=\"text\" name=\"query\" placeholder=\"Search\" />
\t\t</form>
\t</section>

\t<!-- Links -->
\t<section>
\t\t<ul class=\"links\">
\t\t\t<li>
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<h3>Lorem ipsum</h3>
\t\t\t\t\t<p>Feugiat tempus veroeros dolor</p>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<h3>Dolor sit amet</h3>
\t\t\t\t\t<p>Sed vitae justo condimentum</p>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<h3>Feugiat veroeros</h3>
\t\t\t\t\t<p>Phasellus sed ultricies mi congue</p>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<h3>Etiam sed consequat</h3>
\t\t\t\t\t<p>Porta lectus amet ultricies</p>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t</section>

\t<!-- Actions -->
\t<section>
\t\t<ul class=\"actions stacked\">
\t\t\t<li><a href=\"#\" class=\"button large fit\">Log In</a></li>
\t\t</ul>
\t</section>

</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october-basic/themes/Basic/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  52 => 14,  43 => 12,  34 => 10,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Nav -->
<!-- Header -->
<header class=\"header\">
\t<div class=\"row\">
\t\t<div class=\"column large-9\">
\t\t\t<div class=\"header__navigation\">
\t\t\t\t<h1><a href=\"index.html\">Markus Morley</a></h1>
\t\t\t\t<nav class=\"header__links\">
\t\t\t\t\t<ul class=\"header__nav\">
\t\t\t\t\t\t<li><a class=\"{% if this.page.id == 'home' %}active{% endif %}\" href=\"{{ 'home'|page }}\">Basic concepts</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a class=\"{% if this.page.id == 'ajax' %}active{% endif %}\" href=\"{{ 'ajax'|page }}\">AJAX framework</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a class=\"{% if this.page.id == 'plugins' %}active{% endif %}\" href=\"{{ 'plugins'|page }}\">Plugin
\t\t\t\t\t\t\t\tcomponents</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a class=\"{% if staticPage.title == 'root' %}active{% endif %}\" href=\"{{ 'root'|staticPage }}\">root</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t</div>

\t\t</div>
\t\t<div class=\"column large-3\">
\t\t\t<nav class=\"header__main\">
\t\t\t\t<ul>
\t\t\t\t\t<li class=\"search\">
\t\t\t\t\t\t<button class=\"fa-search js-search-button\">Search</button>
\t\t\t\t\t\t<form class=\"search__form\" method=\"get\" action=\"#\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"query\" placeholder=\"Search\" />
\t\t\t\t\t\t</form>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"menu\">
\t\t\t\t\t\t<button class=\"js-menu-panel\" href=\"#menu\">Menu</button>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>
\t</div>
</header>

<!-- Menu -->
<section id=\"menu\">
\t<button class=\"js-menu-panel-close\"></button>

\t<!-- Search -->
\t<section>
\t\t<form class=\"search\" method=\"get\" action=\"#\">
\t\t\t<input type=\"text\" name=\"query\" placeholder=\"Search\" />
\t\t</form>
\t</section>

\t<!-- Links -->
\t<section>
\t\t<ul class=\"links\">
\t\t\t<li>
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<h3>Lorem ipsum</h3>
\t\t\t\t\t<p>Feugiat tempus veroeros dolor</p>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<h3>Dolor sit amet</h3>
\t\t\t\t\t<p>Sed vitae justo condimentum</p>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<h3>Feugiat veroeros</h3>
\t\t\t\t\t<p>Phasellus sed ultricies mi congue</p>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<h3>Etiam sed consequat</h3>
\t\t\t\t\t<p>Porta lectus amet ultricies</p>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t</section>

\t<!-- Actions -->
\t<section>
\t\t<ul class=\"actions stacked\">
\t\t\t<li><a href=\"#\" class=\"button large fit\">Log In</a></li>
\t\t</ul>
\t</section>

</section>", "C:\\xampp\\htdocs\\october-basic/themes/Basic/partials/site/header.htm", "");
    }
}
