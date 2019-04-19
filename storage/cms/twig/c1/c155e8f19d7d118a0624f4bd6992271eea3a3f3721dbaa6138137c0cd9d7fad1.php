<?php

/* C:\xampp\htdocs\october-basic/themes/Basic/pages/ajax.htm */
class __TwigTemplate_524793c814507d4cdac9453f97a1e3bfd245f3bf59dc306eda15e145bae56f01 extends Twig_Template
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

                <h1>AJAX framework</h1>
                <p>This built-in JavaScript framework provides simple but powerful AJAX capabilities. Check out the calculator example below.</p>

    </div>
</div>

<div class=\"container\">

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Calculator</h3>
        </div>
        <div class=\"panel-body\">
            <form class=\"form-inline\" data-request=\"onTest\" data-request-update=\"calcresult: '#result'\">
                <input type=\"text\" class=\"form-control\" value=\"15\" name=\"value1\" style=\"width:100px\">
                <select class=\"form-control\" name=\"operation\" style=\"width: 70px\">
                    <option>+</option>
                    <option>-</option>
                    <option>*</option>
                    <option>/</option>
                </select>
                <input type=\"text\" class=\"form-control\" value=\"5\" name=\"value2\" style=\"width:100px\">
                <button type=\"submit\" class=\"btn btn btn-primary\" data-attach-loading>Calculate</button>
            </form>
        </div>
        <div class=\"panel-footer\" id=\"result\">
            ";
        // line 33
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("calcresult"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 34
        echo "        </div>
    </div>

</div>

<!-- Page Explanation -->
<div class=\"container\">";
        // line 40
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("explain/ajax.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "</div>

<br />

<div class=\"text-center\">
    <p><a href=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("plugins");
        echo "\" class=\"btn btn-lg btn-default\">Continue to Plugin components</a></p>
</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october-basic/themes/Basic/pages/ajax.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 45,  69 => 40,  61 => 34,  57 => 33,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
            <div class=\"column\">

<div class=\"jumbotron title-js\">
    <div class=\"container\">

                <h1>AJAX framework</h1>
                <p>This built-in JavaScript framework provides simple but powerful AJAX capabilities. Check out the calculator example below.</p>

    </div>
</div>

<div class=\"container\">

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Calculator</h3>
        </div>
        <div class=\"panel-body\">
            <form class=\"form-inline\" data-request=\"onTest\" data-request-update=\"calcresult: '#result'\">
                <input type=\"text\" class=\"form-control\" value=\"15\" name=\"value1\" style=\"width:100px\">
                <select class=\"form-control\" name=\"operation\" style=\"width: 70px\">
                    <option>+</option>
                    <option>-</option>
                    <option>*</option>
                    <option>/</option>
                </select>
                <input type=\"text\" class=\"form-control\" value=\"5\" name=\"value2\" style=\"width:100px\">
                <button type=\"submit\" class=\"btn btn btn-primary\" data-attach-loading>Calculate</button>
            </form>
        </div>
        <div class=\"panel-footer\" id=\"result\">
            {% partial \"calcresult\" %}
        </div>
    </div>

</div>

<!-- Page Explanation -->
<div class=\"container\">{% partial \"explain/ajax.htm\" %}</div>

<br />

<div class=\"text-center\">
    <p><a href=\"{{ 'plugins'|page }}\" class=\"btn btn-lg btn-default\">Continue to Plugin components</a></p>
</div>
</div>
</div>", "C:\\xampp\\htdocs\\october-basic/themes/Basic/pages/ajax.htm", "");
    }
}
