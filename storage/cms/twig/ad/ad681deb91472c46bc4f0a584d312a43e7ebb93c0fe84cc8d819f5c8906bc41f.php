<?php

/* C:\xampp\htdocs\october-basic/themes/Basic/pages/basiccontents.htm */
class __TwigTemplate_204d81f04eeab74719bdda12756a345fd7127f67aaa76eb1bc4ad2ba43163852 extends Twig_Template
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
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", []);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", []);
        // line 3
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", []);
        // line 4
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", []);
        // line 5
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", []);
        // line 6
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", []);
        // line 7
        echo "


<section class=\"content_01\">
\t<div class=\"row\">

    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["item"], "quote", [])) {
                // line 15
                echo "            <div class=\"column ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "sameheight", [])) {
                    echo "sameHeight2";
                }
                echo " small-12 medium-4 \">
                <div class=\"content_01__box sameHeight2__content \">
                    <h4 class=\"h4 eyebrow\">";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "eyebrow", []), "html", null, true);
                echo "</h4>
                        ";
                // line 18
                if (($context["detailsPage"] ?? null)) {
                    // line 19
                    echo "                            <a href=\"";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["item"], ($context["detailsKeyColumn"] ?? null))]);
                    echo "\">
                        ";
                }
                // line 21
                echo "                    <h2 class=\"h1\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "header", []), "html", null, true);
                echo "</h2>
                        ";
                // line 22
                if (($context["detailsPage"] ?? null)) {
                    // line 23
                    echo "                            </a>
                            ";
                }
                // line 25
                echo "                            ";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "bodyshort", []);
                echo "
                            ";
                // line 26
                echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, $context["item"], "bodytext", []), 150]);
                echo "
                            ";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["item"], "quote", []);
                echo "
                            ";
                // line 28
                if (twig_get_attribute($this->env, $this->source, $context["item"], "sameheight", [])) {
                    // line 29
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "sameheight", []), "html", null, true);
                    echo "
                    ";
                }
                // line 31
                echo "                </div>
                <div class=\"sameHeight2__bottom\">
                    <button class=\"btn tooltip tooltip-right\" data-tooltip=\"Lorem ipsum dolor sit amet\">right tooltip</button>
                </div>

        \t\t</div>
         ";
            }
            // line 38
            echo "    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "        <div class=\"column\">
          <li class=\"no-data\">";
            // line 40
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
    ";
        // line 44
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", []) > 1)) {
            // line 45
            echo "       <div class=\"column\">
             <ul class=\"pagination\">
                 ";
            // line 47
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", []) > 1)) {
                // line 48
                echo "                     <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "baseFileName", []), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", []) - 1)]);
                echo "\">&larr; Prev</a></li>
                 ";
            }
            // line 50
            echo "
                 ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [])));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 52
                echo "                     <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", []) == $context["page"])) ? ("active") : (null));
                echo "\">
                         <a href=\"";
                // line 53
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "baseFileName", []), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
                     </li>
                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "
                 ";
            // line 57
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", []) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", []))) {
                // line 58
                echo "                     <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "baseFileName", []), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", []) + 1)]);
                echo "\">Next &rarr;</a></li>
                 ";
            }
            // line 60
            echo "             </ul>
       </div>
    ";
        }
        // line 63
        echo "  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october-basic/themes/Basic/pages/basiccontents.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 63,  180 => 60,  174 => 58,  172 => 57,  169 => 56,  158 => 53,  153 => 52,  149 => 51,  146 => 50,  140 => 48,  138 => 47,  134 => 45,  132 => 44,  129 => 43,  120 => 40,  117 => 39,  112 => 38,  103 => 31,  97 => 29,  95 => 28,  91 => 27,  87 => 26,  82 => 25,  78 => 23,  76 => 22,  71 => 21,  65 => 19,  63 => 18,  59 => 17,  51 => 15,  48 => 14,  43 => 13,  35 => 7,  33 => 6,  31 => 5,  29 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}



<section class=\"content_01\">
\t<div class=\"row\">

    {% for item in records %}
        {% if item.quote %}
            <div class=\"column {% if item.sameheight %}sameHeight2{% endif %} small-12 medium-4 \">
                <div class=\"content_01__box sameHeight2__content \">
                    <h4 class=\"h4 eyebrow\">{{ item.eyebrow }}</h4>
                        {% if detailsPage %}
                            <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(item, detailsKeyColumn) }) }}\">
                        {% endif %}
                    <h2 class=\"h1\"> {{ item.header }}</h2>
                        {% if detailsPage %}
                            </a>
                            {% endif %}
                            {{ item.bodyshort|raw }}
                            {{ html_limit(item.bodytext, 150)|raw }}
                            {{ item.quote|raw }}
                            {% if item.sameheight %}
                        {{ item.sameheight }}
                    {% endif %}
                </div>
                <div class=\"sameHeight2__bottom\">
                    <button class=\"btn tooltip tooltip-right\" data-tooltip=\"Lorem ipsum dolor sit amet\">right tooltip</button>
                </div>

        \t\t</div>
         {% endif %}
    {% else %}
        <div class=\"column\">
          <li class=\"no-data\">{{ noRecordsMessage }}</li>
        </div>
    {% endfor %}

    {% if records.lastPage > 1 %}
       <div class=\"column\">
             <ul class=\"pagination\">
                 {% if records.currentPage > 1 %}
                     <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr; Prev</a></li>
                 {% endif %}

                 {% for page in 1..records.lastPage %}
                     <li class=\"{{ records.currentPage == page ? 'active' : null }}\">
                         <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
                     </li>
                 {% endfor %}

                 {% if records.lastPage > records.currentPage %}
                     <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\">Next &rarr;</a></li>
                 {% endif %}
             </ul>
       </div>
    {% endif %}
  </div>
</section>", "C:\\xampp\\htdocs\\october-basic/themes/Basic/pages/basiccontents.htm", "");
    }
}
