<?php

/* C:\xampp\htdocs\october-basic/themes/Basic/partials/site/intro.htm */
class __TwigTemplate_cae26e95f02f822cdfaa44a4fb946eea0600e206548676f137d596844745111d extends Twig_Template
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
<div class=\"container\">
\t<header class=\"intro\">

\t\t<img class=\"intro__image\" src=\"https://picsum.photos/1200/1300?random=2\" alt=\"Iceland glacier\" />
\t\t<div class=\"intro__content\">

\t\t\t<h1 class=\"intro__title\">Essential Feelings</h1>

\t\t\t<div class=\"intro__subtitle\">

\t\t\t\t<div class=\"codrops-links\">
\t\t\t\t\t<!-- links -->
\t\t\t\t</div>

\t\t\t\t<div class=\"intro__description\">
\t\t\t\t\t<!-- ... -->
\t\t\t\t</div>

\t\t\t\t<button class=\"trigger\">

\t\t\t\t\t<svg width=\"100%\" height=\"100%\" viewBox=\"0 0 60 60\" preserveAspectRatio=\"none\">
\t\t\t\t\t\t<g class=\"icon icon--grid\">
\t\t\t\t\t\t\t<rect x=\"32.5\" y=\"5.5\" width=\"22\" height=\"22\" />
\t\t\t\t\t\t\t<rect x=\"4.5\" y=\"5.5\" width=\"22\" height=\"22\" />
\t\t\t\t\t\t\t<rect x=\"32.5\" y=\"33.5\" width=\"22\" height=\"22\" />
\t\t\t\t\t\t\t<rect x=\"4.5\" y=\"33.5\" width=\"22\" height=\"22\" />
\t\t\t\t\t\t</g>
\t\t\t\t\t\t<g class=\"icon icon--cross\">
\t\t\t\t\t\t\t<line x1=\"4.5\" y1=\"55.5\" x2=\"54.953\" y2=\"5.046\" />
\t\t\t\t\t\t\t<line x1=\"54.953\" y1=\"55.5\" x2=\"4.5\" y2=\"5.047\" />
\t\t\t\t\t\t</g>
\t\t\t\t\t</svg>

\t\t\t\t\t<span>View content</span>

\t\t\t\t</button>

\t\t\t</div><!-- /intro__subtitle -->

\t\t</div><!-- /intro__content -->

\t</header><!-- /intro -->
\tThe header gets the class “intro”. The fullscreen image is the first child with the class “intro__image”. What follows
\tis the intro content that contains the main title and a subtitle with three elements: some links, a description and the
\ttrigger button. The trigger button is a vector graphic that we have created previously. It consists of two shape
\tgroups:
\ta grid and a cross. We give them suitable class names and we’ll control their appearance with a class that we’ll toggle
\tin our script.

\tNext, we need to create the markup for our grid. For that we’ll have a main container and a wrapper for the grid
\tanchors:

\t<section class=\"items-wrap\">

\t\t<a href=\"#\" class=\"item\">
\t\t\t<img class=\"item__image\" src=\"img/item01.jpg\" alt=\"item01\" />
\t\t\t<h2 class=\"item__title\">Magnificence</h2>
\t\t</a>

\t\t<a href=\"#\" class=\"item\">
\t\t\t<img class=\"item__image\" src=\"img/item02.jpg\" alt=\"item02\" />
\t\t\t<h2 class=\"item__title\">Electrifying</h2>
\t\t</a>

\t\t<!-- ... -->

\t</section><!-- /items-wrap -->

\t<section class=\"items-wrap\">

\t\t<a href=\"#\" class=\"item\">
\t\t\t<img class=\"item__image\" src=\"img/item01.jpg\" alt=\"item01\" />
\t\t\t<h2 class=\"item__title\">Magnificence</h2>
\t\t</a>

\t\t<a href=\"#\" class=\"item\">
\t\t\t<img class=\"item__image\" src=\"img/item02.jpg\" alt=\"item02\" />
\t\t\t<h2 class=\"item__title\">Electrifying</h2>
\t\t</a>

\t\t<!-- ... -->

\t</section><!-- /items-wrap -->
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october-basic/themes/Basic/partials/site/intro.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Nav -->
<!-- Header -->
<div class=\"container\">
\t<header class=\"intro\">

\t\t<img class=\"intro__image\" src=\"https://picsum.photos/1200/1300?random=2\" alt=\"Iceland glacier\" />
\t\t<div class=\"intro__content\">

\t\t\t<h1 class=\"intro__title\">Essential Feelings</h1>

\t\t\t<div class=\"intro__subtitle\">

\t\t\t\t<div class=\"codrops-links\">
\t\t\t\t\t<!-- links -->
\t\t\t\t</div>

\t\t\t\t<div class=\"intro__description\">
\t\t\t\t\t<!-- ... -->
\t\t\t\t</div>

\t\t\t\t<button class=\"trigger\">

\t\t\t\t\t<svg width=\"100%\" height=\"100%\" viewBox=\"0 0 60 60\" preserveAspectRatio=\"none\">
\t\t\t\t\t\t<g class=\"icon icon--grid\">
\t\t\t\t\t\t\t<rect x=\"32.5\" y=\"5.5\" width=\"22\" height=\"22\" />
\t\t\t\t\t\t\t<rect x=\"4.5\" y=\"5.5\" width=\"22\" height=\"22\" />
\t\t\t\t\t\t\t<rect x=\"32.5\" y=\"33.5\" width=\"22\" height=\"22\" />
\t\t\t\t\t\t\t<rect x=\"4.5\" y=\"33.5\" width=\"22\" height=\"22\" />
\t\t\t\t\t\t</g>
\t\t\t\t\t\t<g class=\"icon icon--cross\">
\t\t\t\t\t\t\t<line x1=\"4.5\" y1=\"55.5\" x2=\"54.953\" y2=\"5.046\" />
\t\t\t\t\t\t\t<line x1=\"54.953\" y1=\"55.5\" x2=\"4.5\" y2=\"5.047\" />
\t\t\t\t\t\t</g>
\t\t\t\t\t</svg>

\t\t\t\t\t<span>View content</span>

\t\t\t\t</button>

\t\t\t</div><!-- /intro__subtitle -->

\t\t</div><!-- /intro__content -->

\t</header><!-- /intro -->
\tThe header gets the class “intro”. The fullscreen image is the first child with the class “intro__image”. What follows
\tis the intro content that contains the main title and a subtitle with three elements: some links, a description and the
\ttrigger button. The trigger button is a vector graphic that we have created previously. It consists of two shape
\tgroups:
\ta grid and a cross. We give them suitable class names and we’ll control their appearance with a class that we’ll toggle
\tin our script.

\tNext, we need to create the markup for our grid. For that we’ll have a main container and a wrapper for the grid
\tanchors:

\t<section class=\"items-wrap\">

\t\t<a href=\"#\" class=\"item\">
\t\t\t<img class=\"item__image\" src=\"img/item01.jpg\" alt=\"item01\" />
\t\t\t<h2 class=\"item__title\">Magnificence</h2>
\t\t</a>

\t\t<a href=\"#\" class=\"item\">
\t\t\t<img class=\"item__image\" src=\"img/item02.jpg\" alt=\"item02\" />
\t\t\t<h2 class=\"item__title\">Electrifying</h2>
\t\t</a>

\t\t<!-- ... -->

\t</section><!-- /items-wrap -->

\t<section class=\"items-wrap\">

\t\t<a href=\"#\" class=\"item\">
\t\t\t<img class=\"item__image\" src=\"img/item01.jpg\" alt=\"item01\" />
\t\t\t<h2 class=\"item__title\">Magnificence</h2>
\t\t</a>

\t\t<a href=\"#\" class=\"item\">
\t\t\t<img class=\"item__image\" src=\"img/item02.jpg\" alt=\"item02\" />
\t\t\t<h2 class=\"item__title\">Electrifying</h2>
\t\t</a>

\t\t<!-- ... -->

\t</section><!-- /items-wrap -->
</div>", "C:\\xampp\\htdocs\\october-basic/themes/Basic/partials/site/intro.htm", "");
    }
}
