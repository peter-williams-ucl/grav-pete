<?php

/* partials/archives.html.twig */
class __TwigTemplate_354a6333fba1deca7bdea41cd1ff376183d978f28ee3231498f502cbb4091c31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<ul class=\"archives\">

";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["archives_data"]) ? $context["archives_data"] : null));
        foreach ($context['_seq'] as $context["month"] => $context["items"]) {
            // line 4
            echo "    <li>
    \t<a href=\"";
            // line 5
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/archives_month";
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_date_format_filter($this->env, $context["month"], "M_Y")), "url");
            echo "\">
        <span class=\"archive_date\">";
            // line 6
            echo $context["month"];
            echo "</span>
        </a>";
            // line 7
            if ((isset($context["archives_show_count"]) ? $context["archives_show_count"] : null)) {
                echo "<span class=\"label\"> ( ";
                echo twig_length_filter($this->env, $context["items"]);
                echo " )</span>
        ";
            }
            // line 9
            echo "    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['month'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "partials/archives.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  48 => 9,  41 => 7,  37 => 6,  30 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"archives\">

{% for month,items in archives_data %}
    <li>
    \t<a href=\"{{ base_url }}/archives_month{{ config.system.param_sep }}{{ month|date('M_Y')|lower|e('url') }}\">
        <span class=\"archive_date\">{{ month }}</span>
        </a>{% if archives_show_count %}<span class=\"label\"> ( {{ items|length }} )</span>
        {% endif %}
    </li>
{% endfor %}
</ul>
", "partials/archives.html.twig", "/Users/sidshekhar/Documents/pete-archive/archive-grav/user/themes/striped/templates/partials/archives.html.twig");
    }
}
