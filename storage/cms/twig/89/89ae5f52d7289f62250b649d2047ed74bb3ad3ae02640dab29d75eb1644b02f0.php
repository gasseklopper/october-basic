<?php

/* C:\xampp\htdocs\october-basic/themes/Basic/partials/site/footer.htm */
class __TwigTemplate_373c75ad8cfa9774bf8c360acfae3a1dc4a11e2e132dc5ae061254f33db8f232 extends Twig_Template
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
        echo "<div class=\"footer\">

\t<div class=\"footer__links\">
\t\t<div class=\"row\">
\t\t\t<div class=\"column small-6 large-3\">
\t\t\t\t<section class=\"social\">
\t\t\t\t\t<h3>Social</h3>
\t\t\t\t\t<ul class=\"icons alt\">
\t\t\t\t\t\t<li><a href=\"#\" class=\"icon alt fa-facebook\"><span class=\"label\">Facebook</span></a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"icon alt fa-instagram\"><span class=\"label\">Instagram</span></a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"icon alt fa-github\"><span class=\"label\">GitHub</span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</section>
\t\t\t</div>
\t\t\t<div class=\"column small-6 large-3\">
\t\t\t\t<section class=\"address\">
\t\t\t\t\t<h3>Address</h3>
\t\t\t\t\t<p>Offenbach<br>
\t\t\t\t\t\tam Main</p>
\t\t\t\t</section>
\t\t\t</div>
\t\t\t<div class=\"column small-6 large-3\">
\t\t\t\t<section class=\"phone\">
\t\t\t\t\t<h3>Phone</h3>
\t\t\t\t\t<p><a href=\"#\">(0177) 3716791</a></p>
\t\t\t\t</section>
\t\t\t</div>
\t\t\t<div class=\"column small-6 large-3\">
\t\t\t\t<section class=\"email\">
\t\t\t\t\t<h3>Email</h3>
\t\t\t\t\t<p><a href=\"#\">m-morley@gmx.de</a></p>
\t\t\t\t</section>
\t\t\t</div>

\t\t</div>

\t</div>


\t<section class=\"copyright\">
\t\t<hr />
\t\t<p class=\"copyright__credit\">&copy; 2013 - ";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Alexey Bobkov &amp; Samuel Georges.</p>
\t</section>


</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october-basic/themes/Basic/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 42,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"footer\">

\t<div class=\"footer__links\">
\t\t<div class=\"row\">
\t\t\t<div class=\"column small-6 large-3\">
\t\t\t\t<section class=\"social\">
\t\t\t\t\t<h3>Social</h3>
\t\t\t\t\t<ul class=\"icons alt\">
\t\t\t\t\t\t<li><a href=\"#\" class=\"icon alt fa-facebook\"><span class=\"label\">Facebook</span></a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"icon alt fa-instagram\"><span class=\"label\">Instagram</span></a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"icon alt fa-github\"><span class=\"label\">GitHub</span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</section>
\t\t\t</div>
\t\t\t<div class=\"column small-6 large-3\">
\t\t\t\t<section class=\"address\">
\t\t\t\t\t<h3>Address</h3>
\t\t\t\t\t<p>Offenbach<br>
\t\t\t\t\t\tam Main</p>
\t\t\t\t</section>
\t\t\t</div>
\t\t\t<div class=\"column small-6 large-3\">
\t\t\t\t<section class=\"phone\">
\t\t\t\t\t<h3>Phone</h3>
\t\t\t\t\t<p><a href=\"#\">(0177) 3716791</a></p>
\t\t\t\t</section>
\t\t\t</div>
\t\t\t<div class=\"column small-6 large-3\">
\t\t\t\t<section class=\"email\">
\t\t\t\t\t<h3>Email</h3>
\t\t\t\t\t<p><a href=\"#\">m-morley@gmx.de</a></p>
\t\t\t\t</section>
\t\t\t</div>

\t\t</div>

\t</div>


\t<section class=\"copyright\">
\t\t<hr />
\t\t<p class=\"copyright__credit\">&copy; 2013 - {{ \"now\"|date(\"Y\") }} Alexey Bobkov &amp; Samuel Georges.</p>
\t</section>


</div>", "C:\\xampp\\htdocs\\october-basic/themes/Basic/partials/site/footer.htm", "");
    }
}
