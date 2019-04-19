<?php

/* C:\xampp\htdocs\october-basic/themes/Basic/partials/calcresult.htm */
class __TwigTemplate_a5b9e302a102355c6446dbc7448b35746ae460899ead100a902b2a6a8dedba9a extends Twig_Template
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
        if (($context["result"] ?? null)) {
            // line 2
            echo "    <span class=\"lead\">
        The result is <span class=\"label label-success\">";
            // line 3
            echo twig_escape_filter($this->env, ($context["result"] ?? null), "html", null, true);
            echo "</span>
    </span>
";
        } else {
            // line 6
            echo "    <span class=\"text-muted\">
        Click the <em>Calculate</em> button to find the answer.
    </span>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october-basic/themes/Basic/partials/calcresult.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if result %}
    <span class=\"lead\">
        The result is <span class=\"label label-success\">{{ result }}</span>
    </span>
{% else %}
    <span class=\"text-muted\">
        Click the <em>Calculate</em> button to find the answer.
    </span>
{% endif %}", "C:\\xampp\\htdocs\\october-basic/themes/Basic/partials/calcresult.htm", "");
    }
}
