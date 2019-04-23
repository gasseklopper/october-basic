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
<div class=\"container_intro\">
\t<header class=\"intro\">
\t\t<div class=\"intro__overlay\">
\t\t\t<!--\t<img class=\"intro__image\" src=\"./themes/Basic/assets/images/IMG_4409.jpg\" alt=\"Iceland glacier\" />
\t\t\t<img class=\"intro__image\" src=\"./themes/Basic/assets/images/_MG_5727.jpg\" alt=\"Iceland glacier\" />
\t\t\t<img class=\"intro__image\" src=\"./themes/Basic/assets/images/_MG_6001.jpg\" alt=\"Iceland glacier\" />
\t\t\t<img class=\"intro__image\" src=\"./themes/Basic/assets/images/_MG_6167.jpg\" alt=\"Iceland glacier\" />
\t\t\t<img class=\"intro__image\" src=\"./themes/Basic/assets/images/IMG_7153.jpg\" alt=\"Iceland glacier\" />
\t\t\t<img class=\"intro__image\" src=\"./themes/Basic/assets/images/PICT6732-Edit.jpg\" alt=\"Iceland glacier\" />-->
\t\t\t<img class=\"intro__image\" name=\"canvas\" src=\"./themes/Basic/assets/images/IMG_7113.jpg\" alt=\"Iceland glacier\" />


\t\t</div>

\t\t<div class=\"intro__content\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"column large-12\">
\t\t\t\t\t<h1 class=\"intro__title\"><a href=\"demo\">Markus Morley</a></h1>

\t\t\t\t\t<div class=\"intro__subtitle\">
\t\t\t\t\t\t<h3 class=\"h2\">UX-Designer and Photographer</h3>
\t\t\t\t\t\t<div class=\"codrops-links\">

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"intro__description\">

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<button class=\"trigger\">
\t\t\t\t\t\t\t<svg width=\"100%\" height=\"100%\" viewBox=\"0 0 60 60\" preserveAspectRatio=\"none\">
\t\t\t\t\t\t\t\t<g class=\"icon icon--grid\">
\t\t\t\t\t\t\t\t\t<rect x=\"32.5\" y=\"5.5\" width=\"22\" height=\"22\" />
\t\t\t\t\t\t\t\t\t<rect x=\"4.5\" y=\"5.5\" width=\"22\" height=\"22\" />
\t\t\t\t\t\t\t\t\t<rect x=\"32.5\" y=\"33.5\" width=\"22\" height=\"22\" />
\t\t\t\t\t\t\t\t\t<rect x=\"4.5\" y=\"33.5\" width=\"22\" height=\"22\" />
\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t<g class=\"icon icon--cross\">
\t\t\t\t\t\t\t\t\t<line x1=\"4.5\" y1=\"55.5\" x2=\"54.953\" y2=\"5.046\" />
\t\t\t\t\t\t\t\t\t<line x1=\"54.953\" y1=\"55.5\" x2=\"4.5\" y2=\"5.047\" />
\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t</svg>


\t\t\t\t\t\t\t<span>View content</span>

\t\t\t\t\t\t</button>

\t\t\t\t\t</div><!-- /intro__subtitle -->
\t\t\t\t</div>
\t\t\t</div>


\t\t</div><!-- /intro__content -->

\t</header><!-- /intro -->


\t<section class=\"wrap\">
\t\t<!-- Carousel container -->
\t\t<div class=\"carousel-container\">
\t\t\t<div class=\"carousel-slide\">


\t\t\t\t<img src=\"./themes/Basic/assets/images/_MG_6001.jpg\" id=\"lastClone\">
\t\t\t\t<img src=\"./themes/Basic/assets/images/_MG_5727.jpg\">
\t\t\t\t<img src=\"./themes/Basic/assets/images/PICT6732-Edit.jpg\">
\t\t\t\t<img src=\"./themes/Basic/assets/images/IMG_7113.jpg\">
\t\t\t\t<img src=\"./themes/Basic/assets/images/_MG_6167.jpg\">
\t\t\t\t<img src=\"./themes/Basic/assets/images/_MG_6001.jpg\">
\t\t\t\t<img src=\"./themes/Basic/assets/images/_MG_5727.jpg\" id=\"firstClone\">
\t\t\t</div>
\t\t</div>
\t\t<button id=\"prevBtn\">prev</button>
\t\t<button id=\"nextBtn\">next</button>
\t</section>


\t<section class=\"wrap\">

\t\t<!-- Slideshow container -->
\t\t<div class=\"slideshow-container js-slideshow-container\">

\t\t\t<!-- Full-width images with number and caption text -->
\t\t\t<div class=\"mySlides fade\">
\t\t\t\t<div class=\"numbertext\">1 / 3</div>
\t\t\t\t<img src=\"./themes/Basic/assets/images/_MG_5727.jpg\" style=\"width:100%\">
\t\t\t\t<div class=\"text\">Caption Text</div>
\t\t\t</div>

\t\t\t<div class=\"mySlides fade\">
\t\t\t\t<div class=\"numbertext\">2 / 3</div>
\t\t\t\t<img src=\"./themes/Basic/assets/images/PICT6732-Edit.jpg\" style=\"width:100%\">
\t\t\t\t<div class=\"text\">Caption Two</div>
\t\t\t</div>

\t\t\t<div class=\"mySlides fade\">
\t\t\t\t<div class=\"numbertext\">3 / 3</div>
\t\t\t\t<img src=\"./themes/Basic/assets/images/IMG_7113.jpg\" style=\"width:100%\">
\t\t\t\t<div class=\"text\">Caption Three</div>
\t\t\t</div>

\t\t\t<!-- Next and previous buttons -->
\t\t\t<a class=\"js-slideshow-button prev\" \">&#10094;</a>
\t<a class=\" js-slideshow-button next\" \">&#10095;</a>
\t<br>
\t<!-- The dots/circles -->
\t<div style=\" text-align:left\">
\t\t\t\t<span class=\"js-slideshow-dot dot\"></span>
\t\t\t\t<span class=\"js-slideshow-dot dot\"></span>
\t\t\t\t<span class=\"js-slideshow-dot dot\"></span>
\t\t</div>
</div>




<div class=\"inner\">
\t<div class=\"major\">
\t\t<header class=\"major__header\">
\t\t\t<h2>Arcu aliquet vel lobortis ata nisl<br>
\t\t\t\teget augue amet aliquet nisl cep donec</h2>
\t\t\t<p>Aliquam ut ex ut augue consectetur interdum. Donec amet imperdiet eleifend<br>
\t\t\t\tfringilla tincidunt. Nullam dui leo Aenean mi ligula, rhoncus ullamcorper.</p>
\t\t</header>
\t\t<ul class=\"icons major__icon\">
\t\t\t<li><span class=\"icon fa-diamond major style1\"><span class=\"label\">Lorem</span></span></li>
\t\t\t<li><span class=\"icon fa-heart-o major style2\"><span class=\"label\">Ipsum</span></span></li>
\t\t\t<li><span class=\"icon fa-code major style3\"><span class=\"label\">Dolor</span></span></li>
\t\t</ul>
\t</div>
</div>
<!-- ... -->

</section><!-- /items-wrap -->
<section class=\"items-wrap\">

\t<a href=\"#\" class=\"item\">
\t\t<img class=\"item__image\" src=\"./themes/Basic/assets/images/_MG_5727.jpg\" alt=\"item01\" />
\t\t<h2 class=\"item__title\">Magnificence</h2>
\t</a>

\t<a href=\"#\" class=\"item\">
\t\t<img class=\"item__image\" src=\"./themes/Basic/assets/images/IMG_4409.jpg\" alt=\"item02\" />
\t\t<h2 class=\"item__title\">Electrifying</h2>
\t</a>
\t<a href=\"#\" class=\"item\">
\t\t<img class=\"item__image\" src=\"./themes/Basic/assets/images/_MG_6001.jpg\" alt=\"item01\" />
\t\t<h2 class=\"item__title\">Magnificence</h2>
\t</a>
\t<!-- ... -->

</section><!-- /items-wrap -->
<section class=\"items-wrap\">

\t<a href=\"#\" class=\"item\">
\t\t<img class=\"item__image\" src=\"./themes/Basic/assets/images/_MG_5727.jpg\" alt=\"item01\" />
\t\t<h2 class=\"item__title\">Magnificence</h2>
\t</a>

\t<a href=\"#\" class=\"item\">
\t\t<img class=\"item__image\" src=\"./themes/Basic/assets/images/IMG_4409.jpg\" alt=\"item02\" />
\t\t<h2 class=\"item__title\">Electrifying</h2>
\t</a>
\t<a href=\"#\" class=\"item\">
\t\t<img class=\"item__image\" src=\"./themes/Basic/assets/images/_MG_6001.jpg\" alt=\"item01\" />
\t\t<h2 class=\"item__title\">Magnificence</h2>
\t</a>

\t<a href=\"#\" class=\"item\">
\t\t<img class=\"item__image\" src=\"./themes/Basic/assets/images/_MG_6167.jpg\" alt=\"item02\" />
\t\t<h2 class=\"item__title\">Electrifying</h2>
\t</a>
\t<a href=\"#\" class=\"item\">
\t\t<img class=\"item__image\" src=\"./themes/Basic/assets/images/_MG_5727.jpg\" alt=\"item01\" />
\t\t<h2 class=\"item__title\">Magnificence</h2>
\t</a>

\t<a href=\"#\" class=\"item\">
\t\t<img class=\"item__image\" src=\"./themes/Basic/assets/images/IMG_7113.jpg\" alt=\"item02\" />
\t\t<h2 class=\"item__title\">Electrifying</h2>
\t</a>
\t<a href=\"#\" class=\"item\">
\t\t<img class=\"item__image\" src=\"./themes/Basic/assets/images/PICT6732-Edit.jpg\" alt=\"item01\" />
\t\t<h2 class=\"item__title\">Magnificence</h2>
\t</a>

\t<a href=\"#\" class=\"item\">
\t\t<img class=\"item__image\" src=\"./themes/Basic/assets/images/IMG_7153.jpg\" alt=\"item02\" />
\t\t<h2 class=\"item__title\">Electrifying</h2>
\t</a>
\t<!-- ... -->

</section><!-- /items-wrap -->

<section class=\"items-wrap\">

\t<a href=\"#\" class=\"item\">
\t\t<img class=\"item__image\" src=\"./themes/Basic/assets/images/_MG_6001.jpg\" alt=\"item01\" />
\t\t<h2 class=\"item__title\">Magnificence</h2>
\t</a>

\t<a href=\"#\" class=\"item\">
\t\t<img class=\"item__image\" src=\"./themes/Basic/assets/images/_MG_6167.jpg\" alt=\"item02\" />
\t\t<h2 class=\"item__title\">Electrifying</h2>
\t</a>

\t<!-- ... -->

</section><!-- /items-wrap -->
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
<div class=\"container_intro\">
\t<header class=\"intro\">
\t\t<div class=\"intro__overlay\">
\t\t\t<!--\t<img class=\"intro__image\" src=\"./themes/Basic/assets/images/IMG_4409.jpg\" alt=\"Iceland glacier\" />
\t\t\t<img class=\"intro__image\" src=\"./themes/Basic/assets/images/_MG_5727.jpg\" alt=\"Iceland glacier\" />
\t\t\t<img class=\"intro__image\" src=\"./themes/Basic/assets/images/_MG_6001.jpg\" alt=\"Iceland glacier\" />
\t\t\t<img class=\"intro__image\" src=\"./themes/Basic/assets/images/_MG_6167.jpg\" alt=\"Iceland glacier\" />
\t\t\t<img class=\"intro__image\" src=\"./themes/Basic/assets/images/IMG_7153.jpg\" alt=\"Iceland glacier\" />
\t\t\t<img class=\"intro__image\" src=\"./themes/Basic/assets/images/PICT6732-Edit.jpg\" alt=\"Iceland glacier\" />-->
\t\t\t<img class=\"intro__image\" name=\"canvas\" src=\"./themes/Basic/assets/images/IMG_7113.jpg\" alt=\"Iceland glacier\" />


\t\t</div>

\t\t<div class=\"intro__content\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"column large-12\">
\t\t\t\t\t<h1 class=\"intro__title\"><a href=\"demo\">Markus Morley</a></h1>

\t\t\t\t\t<div class=\"intro__subtitle\">
\t\t\t\t\t\t<h3 class=\"h2\">UX-Designer and Photographer</h3>
\t\t\t\t\t\t<div class=\"codrops-links\">

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"intro__description\">

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<button class=\"trigger\">
\t\t\t\t\t\t\t<svg width=\"100%\" height=\"100%\" viewBox=\"0 0 60 60\" preserveAspectRatio=\"none\">
\t\t\t\t\t\t\t\t<g class=\"icon icon--grid\">
\t\t\t\t\t\t\t\t\t<rect x=\"32.5\" y=\"5.5\" width=\"22\" height=\"22\" />
\t\t\t\t\t\t\t\t\t<rect x=\"4.5\" y=\"5.5\" width=\"22\" height=\"22\" />
\t\t\t\t\t\t\t\t\t<rect x=\"32.5\" y=\"33.5\" width=\"22\" height=\"22\" />
\t\t\t\t\t\t\t\t\t<rect x=\"4.5\" y=\"33.5\" width=\"22\" height=\"22\" />
\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t<g class=\"icon icon--cross\">
\t\t\t\t\t\t\t\t\t<line x1=\"4.5\" y1=\"55.5\" x2=\"54.953\" y2=\"5.046\" />
\t\t\t\t\t\t\t\t\t<line x1=\"54.953\" y1=\"55.5\" x2=\"4.5\" y2=\"5.047\" />
\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t</svg>


\t\t\t\t\t\t\t<span>View content</span>

\t\t\t\t\t\t</button>

\t\t\t\t\t</div><!-- /intro__subtitle -->
\t\t\t\t</div>
\t\t\t</div>


\t\t</div><!-- /intro__content -->

\t</header><!-- /intro -->


\t<section class=\"wrap\">
\t\t<!-- Carousel container -->
\t\t<div class=\"carousel-container\">
\t\t\t<div class=\"carousel-slide\">


\t\t\t\t<img src=\"./themes/Basic/assets/images/_MG_6001.jpg\" id=\"lastClone\">
\t\t\t\t<img src=\"./themes/Basic/assets/images/_MG_5727.jpg\">
\t\t\t\t<img src=\"./themes/Basic/assets/images/PICT6732-Edit.jpg\">
\t\t\t\t<img src=\"./themes/Basic/assets/images/IMG_7113.jpg\">
\t\t\t\t<img src=\"./themes/Basic/assets/images/_MG_6167.jpg\">
\t\t\t\t<img src=\"./themes/Basic/assets/images/_MG_6001.jpg\">
\t\t\t\t<img src=\"./themes/Basic/assets/images/_MG_5727.jpg\" id=\"firstClone\">
\t\t\t</div>
\t\t</div>
\t\t<button id=\"prevBtn\">prev</button>
\t\t<button id=\"nextBtn\">next</button>
\t</section>


\t<section class=\"wrap\">

\t\t<!-- Slideshow container -->
\t\t<div class=\"slideshow-container js-slideshow-container\">

\t\t\t<!-- Full-width images with number and caption text -->
\t\t\t<div class=\"mySlides fade\">
\t\t\t\t<div class=\"numbertext\">1 / 3</div>
\t\t\t\t<img src=\"./themes/Basic/assets/images/_MG_5727.jpg\" style=\"width:100%\">
\t\t\t\t<div class=\"text\">Caption Text</div>
\t\t\t</div>

\t\t\t<div class=\"mySlides fade\">
\t\t\t\t<div class=\"numbertext\">2 / 3</div>
\t\t\t\t<img src=\"./themes/Basic/assets/images/PICT6732-Edit.jpg\" style=\"width:100%\">
\t\t\t\t<div class=\"text\">Caption Two</div>
\t\t\t</div>

\t\t\t<div class=\"mySlides fade\">
\t\t\t\t<div class=\"numbertext\">3 / 3</div>
\t\t\t\t<img src=\"./themes/Basic/assets/images/IMG_7113.jpg\" style=\"width:100%\">
\t\t\t\t<div class=\"text\">Caption Three</div>
\t\t\t</div>

\t\t\t<!-- Next and previous buttons -->
\t\t\t<a class=\"js-slideshow-button prev\" \">&#10094;</a>
\t<a class=\" js-slideshow-button next\" \">&#10095;</a>
\t<br>
\t<!-- The dots/circles -->
\t<div style=\" text-align:left\">
\t\t\t\t<span class=\"js-slideshow-dot dot\"></span>
\t\t\t\t<span class=\"js-slideshow-dot dot\"></span>
\t\t\t\t<span class=\"js-slideshow-dot dot\"></span>
\t\t</div>
</div>




<div class=\"inner\">
\t<div class=\"major\">
\t\t<header class=\"major__header\">
\t\t\t<h2>Arcu aliquet vel lobortis ata nisl<br>
\t\t\t\teget augue amet aliquet nisl cep donec</h2>
\t\t\t<p>Aliquam ut ex ut augue consectetur interdum. Donec amet imperdiet eleifend<br>
\t\t\t\tfringilla tincidunt. Nullam dui leo Aenean mi ligula, rhoncus ullamcorper.</p>
\t\t</header>
\t\t<ul class=\"icons major__icon\">
\t\t\t<li><span class=\"icon fa-diamond major style1\"><span class=\"label\">Lorem</span></span></li>
\t\t\t<li><span class=\"icon fa-heart-o major style2\"><span class=\"label\">Ipsum</span></span></li>
\t\t\t<li><span class=\"icon fa-code major style3\"><span class=\"label\">Dolor</span></span></li>
\t\t</ul>
\t</div>
</div>
<!-- ... -->

</section><!-- /items-wrap -->
<section class=\"items-wrap\">

\t<a href=\"#\" class=\"item\">
\t\t<img class=\"item__image\" src=\"./themes/Basic/assets/images/_MG_5727.jpg\" alt=\"item01\" />
\t\t<h2 class=\"item__title\">Magnificence</h2>
\t</a>

\t<a href=\"#\" class=\"item\">
\t\t<img class=\"item__image\" src=\"./themes/Basic/assets/images/IMG_4409.jpg\" alt=\"item02\" />
\t\t<h2 class=\"item__title\">Electrifying</h2>
\t</a>
\t<a href=\"#\" class=\"item\">
\t\t<img class=\"item__image\" src=\"./themes/Basic/assets/images/_MG_6001.jpg\" alt=\"item01\" />
\t\t<h2 class=\"item__title\">Magnificence</h2>
\t</a>
\t<!-- ... -->

</section><!-- /items-wrap -->
<section class=\"items-wrap\">

\t<a href=\"#\" class=\"item\">
\t\t<img class=\"item__image\" src=\"./themes/Basic/assets/images/_MG_5727.jpg\" alt=\"item01\" />
\t\t<h2 class=\"item__title\">Magnificence</h2>
\t</a>

\t<a href=\"#\" class=\"item\">
\t\t<img class=\"item__image\" src=\"./themes/Basic/assets/images/IMG_4409.jpg\" alt=\"item02\" />
\t\t<h2 class=\"item__title\">Electrifying</h2>
\t</a>
\t<a href=\"#\" class=\"item\">
\t\t<img class=\"item__image\" src=\"./themes/Basic/assets/images/_MG_6001.jpg\" alt=\"item01\" />
\t\t<h2 class=\"item__title\">Magnificence</h2>
\t</a>

\t<a href=\"#\" class=\"item\">
\t\t<img class=\"item__image\" src=\"./themes/Basic/assets/images/_MG_6167.jpg\" alt=\"item02\" />
\t\t<h2 class=\"item__title\">Electrifying</h2>
\t</a>
\t<a href=\"#\" class=\"item\">
\t\t<img class=\"item__image\" src=\"./themes/Basic/assets/images/_MG_5727.jpg\" alt=\"item01\" />
\t\t<h2 class=\"item__title\">Magnificence</h2>
\t</a>

\t<a href=\"#\" class=\"item\">
\t\t<img class=\"item__image\" src=\"./themes/Basic/assets/images/IMG_7113.jpg\" alt=\"item02\" />
\t\t<h2 class=\"item__title\">Electrifying</h2>
\t</a>
\t<a href=\"#\" class=\"item\">
\t\t<img class=\"item__image\" src=\"./themes/Basic/assets/images/PICT6732-Edit.jpg\" alt=\"item01\" />
\t\t<h2 class=\"item__title\">Magnificence</h2>
\t</a>

\t<a href=\"#\" class=\"item\">
\t\t<img class=\"item__image\" src=\"./themes/Basic/assets/images/IMG_7153.jpg\" alt=\"item02\" />
\t\t<h2 class=\"item__title\">Electrifying</h2>
\t</a>
\t<!-- ... -->

</section><!-- /items-wrap -->

<section class=\"items-wrap\">

\t<a href=\"#\" class=\"item\">
\t\t<img class=\"item__image\" src=\"./themes/Basic/assets/images/_MG_6001.jpg\" alt=\"item01\" />
\t\t<h2 class=\"item__title\">Magnificence</h2>
\t</a>

\t<a href=\"#\" class=\"item\">
\t\t<img class=\"item__image\" src=\"./themes/Basic/assets/images/_MG_6167.jpg\" alt=\"item02\" />
\t\t<h2 class=\"item__title\">Electrifying</h2>
\t</a>

\t<!-- ... -->

</section><!-- /items-wrap -->
</div>", "C:\\xampp\\htdocs\\october-basic/themes/Basic/partials/site/intro.htm", "");
    }
}
