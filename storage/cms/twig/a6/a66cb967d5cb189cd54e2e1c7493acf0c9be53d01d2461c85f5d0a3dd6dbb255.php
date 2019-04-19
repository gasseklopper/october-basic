<?php

/* C:\xampp\htdocs\october-basic/themes/Basic/partials/site/header2.htm */
class __TwigTemplate_a004c700a1cc322237b0c5882470b86adeb16a5916dd0c0fd78e20c195941a5e extends Twig_Template
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
<header class=\"intro\">

\t<img class=\"intro__image\" src=\"img/header.jpg\" alt=\"Iceland glacier\" />

\t<div class=\"intro__content\">

\t\t<h1 class=\"intro__title\">Essential Feelings</h1>

\t\t<div class=\"intro__subtitle\">

\t\t\t<div class=\"codrops-links\">
\t\t\t\t<!-- links -->
\t\t\t</div>

\t\t\t<div class=\"intro__description\">
\t\t\t\t<!-- ... -->
\t\t\t</div>

\t\t\t<button class=\"trigger\">

\t\t\t\t<svg width=\"100%\" height=\"100%\" viewBox=\"0 0 60 60\" preserveAspectRatio=\"none\">
\t\t\t\t\t<g class=\"icon icon--grid\">
\t\t\t\t\t\t<rect x=\"32.5\" y=\"5.5\" width=\"22\" height=\"22\" />
\t\t\t\t\t\t<rect x=\"4.5\" y=\"5.5\" width=\"22\" height=\"22\" />
\t\t\t\t\t\t<rect x=\"32.5\" y=\"33.5\" width=\"22\" height=\"22\" />
\t\t\t\t\t\t<rect x=\"4.5\" y=\"33.5\" width=\"22\" height=\"22\" />
\t\t\t\t\t</g>
\t\t\t\t\t<g class=\"icon icon--cross\">
\t\t\t\t\t\t<line x1=\"4.5\" y1=\"55.5\" x2=\"54.953\" y2=\"5.046\" />
\t\t\t\t\t\t<line x1=\"54.953\" y1=\"55.5\" x2=\"4.5\" y2=\"5.047\" />
\t\t\t\t\t</g>
\t\t\t\t</svg>

\t\t\t\t<span>View content</span>

\t\t\t</button>

\t\t</div><!-- /intro__subtitle -->

\t</div><!-- /intro__content -->

</header><!-- /intro -->
The header gets the class “intro”. The fullscreen image is the first child with the class “intro__image”. What follows
is the intro content that contains the main title and a subtitle with three elements: some links, a description and the
trigger button. The trigger button is a vector graphic that we have created previously. It consists of two shape groups:
a grid and a cross. We give them suitable class names and we’ll control their appearance with a class that we’ll toggle
in our script.

Next, we need to create the markup for our grid. For that we’ll have a main container and a wrapper for the grid
anchors:

<section class=\"items-wrap\">

\t<a href=\"#\" class=\"item\">
\t\t<img class=\"item__image\" src=\"img/item01.jpg\" alt=\"item01\" />
\t\t<h2 class=\"item__title\">Magnificence</h2>
\t</a>

\t<a href=\"#\" class=\"item\">
\t\t<img class=\"item__image\" src=\"img/item02.jpg\" alt=\"item02\" />
\t\t<h2 class=\"item__title\">Electrifying</h2>
\t</a>

\t<!-- ... -->

</section><!-- /items-wrap -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october-basic/themes/Basic/partials/site/header2.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Nav -->
<!-- Header -->
<header class=\"intro\">

\t<img class=\"intro__image\" src=\"img/header.jpg\" alt=\"Iceland glacier\" />

\t<div class=\"intro__content\">

\t\t<h1 class=\"intro__title\">Essential Feelings</h1>

\t\t<div class=\"intro__subtitle\">

\t\t\t<div class=\"codrops-links\">
\t\t\t\t<!-- links -->
\t\t\t</div>

\t\t\t<div class=\"intro__description\">
\t\t\t\t<!-- ... -->
\t\t\t</div>

\t\t\t<button class=\"trigger\">

\t\t\t\t<svg width=\"100%\" height=\"100%\" viewBox=\"0 0 60 60\" preserveAspectRatio=\"none\">
\t\t\t\t\t<g class=\"icon icon--grid\">
\t\t\t\t\t\t<rect x=\"32.5\" y=\"5.5\" width=\"22\" height=\"22\" />
\t\t\t\t\t\t<rect x=\"4.5\" y=\"5.5\" width=\"22\" height=\"22\" />
\t\t\t\t\t\t<rect x=\"32.5\" y=\"33.5\" width=\"22\" height=\"22\" />
\t\t\t\t\t\t<rect x=\"4.5\" y=\"33.5\" width=\"22\" height=\"22\" />
\t\t\t\t\t</g>
\t\t\t\t\t<g class=\"icon icon--cross\">
\t\t\t\t\t\t<line x1=\"4.5\" y1=\"55.5\" x2=\"54.953\" y2=\"5.046\" />
\t\t\t\t\t\t<line x1=\"54.953\" y1=\"55.5\" x2=\"4.5\" y2=\"5.047\" />
\t\t\t\t\t</g>
\t\t\t\t</svg>

\t\t\t\t<span>View content</span>

\t\t\t</button>

\t\t</div><!-- /intro__subtitle -->

\t</div><!-- /intro__content -->

</header><!-- /intro -->
The header gets the class “intro”. The fullscreen image is the first child with the class “intro__image”. What follows
is the intro content that contains the main title and a subtitle with three elements: some links, a description and the
trigger button. The trigger button is a vector graphic that we have created previously. It consists of two shape groups:
a grid and a cross. We give them suitable class names and we’ll control their appearance with a class that we’ll toggle
in our script.

Next, we need to create the markup for our grid. For that we’ll have a main container and a wrapper for the grid
anchors:

<section class=\"items-wrap\">

\t<a href=\"#\" class=\"item\">
\t\t<img class=\"item__image\" src=\"img/item01.jpg\" alt=\"item01\" />
\t\t<h2 class=\"item__title\">Magnificence</h2>
\t</a>

\t<a href=\"#\" class=\"item\">
\t\t<img class=\"item__image\" src=\"img/item02.jpg\" alt=\"item02\" />
\t\t<h2 class=\"item__title\">Electrifying</h2>
\t</a>

\t<!-- ... -->

</section><!-- /items-wrap -->", "C:\\xampp\\htdocs\\october-basic/themes/Basic/partials/site/header2.htm", "");
    }
}
