<?php

/* C:\xampp\htdocs\october-basic/themes/Basic/pages/plugins.htm */
class __TwigTemplate_bb92cfeacab689ff63fc0bff41805389b17a1703462f2c827785fec4b41432ab extends Twig_Template
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
        echo "<div class=\"row\">
            <div class=\"column\">
<div class=\"jumbotron title-js\">
    <div class=\"container\">

                <h1>Plugin components</h1>
                <p>Plugins can provide components, simple building blocks that enrich any page or layout. Check out the todo example below.</p>
 
    </div>
</div>

<div class=\"container\">
    ";
        // line 13
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("demoTodo"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 14
        echo "</div>

<!-- Page Explanation -->
<div class=\"container\">";
        // line 17
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("explain/plugins.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "</div>

<br />

<div class=\"text-center\">
    <p><a target=\"_blank\" href=\"http://octobercms.com/docs\" class=\"btn btn-lg btn-default\">Learn more at October's Documentation</a></p>
</div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october-basic/themes/Basic/pages/plugins.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  41 => 14,  37 => 13,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
            <div class=\"column\">
<div class=\"jumbotron title-js\">
    <div class=\"container\">

                <h1>Plugin components</h1>
                <p>Plugins can provide components, simple building blocks that enrich any page or layout. Check out the todo example below.</p>
 
    </div>
</div>

<div class=\"container\">
    {% component 'demoTodo' %}
</div>

<!-- Page Explanation -->
<div class=\"container\">{% partial \"explain/plugins.htm\" %}</div>

<br />

<div class=\"text-center\">
    <p><a target=\"_blank\" href=\"http://octobercms.com/docs\" class=\"btn btn-lg btn-default\">Learn more at October's Documentation</a></p>
</div>
    </div>
</div>", "C:\\xampp\\htdocs\\october-basic/themes/Basic/pages/plugins.htm", "");
    }
}
