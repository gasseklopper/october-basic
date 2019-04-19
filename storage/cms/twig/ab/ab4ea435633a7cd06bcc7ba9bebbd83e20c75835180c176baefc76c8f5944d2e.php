<?php

/* C:\xampp\htdocs\october-basic/themes/Basic/layouts/static-layout001.htm */
class __TwigTemplate_a3f42ef6467e73d53bd674e4c7000dcf0c538b491e43c3f70335601a17305d7e extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>October CMS - ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "title", []), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "meta_description", []), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "meta_title", []), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\">
        <link href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/css/main.css");
        echo "\" rel=\"stylesheet\">
        ";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 14
        echo "    </head>
    <body>
      <div class=\"row\">
    \t\t<div class=\"column\">
        <!-- Header -->
          <header id=\"layout-header\">
              ";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "          </header>

          <!-- Content -->
          <section id=\"layout-content\">
              ";
        // line 25
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 26
        echo "          </section>

          <!-- Footer -->
          <footer id=\"layout-footer\">
              ";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "          </footer>
\t\t    </div>
\t  \t</div>

      <!-- Scripts -->
      <script src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
      <script src=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/javasscript/main.js");
        echo "\"></script>
      <script src=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/app.js");
        echo "\"></script>
      ";
        // line 39
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 40
        echo "      ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 41
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october-basic/themes/Basic/layouts/static-layout001.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 41,  119 => 40,  104 => 39,  100 => 38,  96 => 37,  92 => 36,  85 => 31,  81 => 30,  75 => 26,  73 => 25,  67 => 21,  63 => 20,  55 => 14,  52 => 13,  48 => 12,  44 => 11,  37 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>October CMS - {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\">
        <link href=\"{{ 'assets/dist/css/main.css'|theme }}\" rel=\"stylesheet\">
        {% styles %}
    </head>
    <body>
      <div class=\"row\">
    \t\t<div class=\"column\">
        <!-- Header -->
          <header id=\"layout-header\">
              {% partial 'site/header' %}
          </header>

          <!-- Content -->
          <section id=\"layout-content\">
              {% page %}
          </section>

          <!-- Footer -->
          <footer id=\"layout-footer\">
              {% partial 'site/footer' %}
          </footer>
\t\t    </div>
\t  \t</div>

      <!-- Scripts -->
      <script src=\"{{ 'assets/vendor/jquery.js'|theme }}\"></script>
      <script src=\"{{ 'assets/dist/javasscript/main.js'|theme }}\"></script>
      <script src=\"{{ 'assets/javascript/app.js'|theme }}\"></script>
      {% framework extras %}
      {% scripts %}

    </body>
</html>", "C:\\xampp\\htdocs\\october-basic/themes/Basic/layouts/static-layout001.htm", "");
    }
}
