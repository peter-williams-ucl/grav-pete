<?php

/* partials/sidebar.html.twig */
class __TwigTemplate_88d340ef1e0a8087529c3e534b70380f76cfb8a81670e7a00cd20ee80fdad51c extends Twig_Template
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
        echo "<div id=\"sidebar\">
<h1 id=\"logo\"><a href=\"";
        // line 2
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\">";
        echo twig_upper_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "placeholder", array()));
        echo "</a></h1>

";
        // line 4
        $this->loadTemplate("partials/navigation.html.twig", "partials/sidebar.html.twig", 4)->display($context);
        // line 5
        echo "
";
        // line 6
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "simplesearch", array()), "enabled", array())) {
            // line 7
            echo "<section class=\"box search\">
    ";
            // line 8
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/sidebar.html.twig", 8)->display($context);
            // line 9
            echo "</section>
";
        }
        // line 11
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "relatedpages", array()), "enabled", array()) && (twig_length_filter($this->env, (isset($context["related_pages"]) ? $context["related_pages"] : null)) > 0))) {
            // line 12
            echo "<section class=\"box recent-comments\">
    <header>
        <h2>Related Posts</h2>
    </header>
    ";
            // line 16
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/sidebar.html.twig", 16)->display($context);
            // line 17
            echo "</section>
";
        }
        // line 19
        echo "
";
        // line 20
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "archives", array()), "enabled", array())) {
            // line 21
            echo "    <section class=\"box recent-posts\">
        <header>
            <h2>Archives</h2>
        </header>
        ";
            // line 25
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 25)->display($context);
            // line 26
            echo "    </section>
";
        }
        // line 28
        echo "
";
        // line 29
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "taxonomylist", array()), "enabled", array())) {
            // line 30
            echo "<section class=\"box recent-comments\">
    <header>
        <h2>Popular Tags</h2>
    </header>
    ";
            // line 34
            $this->loadTemplate("partials/taxonomylist.html.twig", "partials/sidebar.html.twig", 34)->display(array_merge($context, array("taxonomy" => "tag")));
            // line 35
            echo "</section>
";
        }
        // line 37
        echo "
";
        // line 38
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "calendar", array())) {
            // line 39
            echo "<section class=\"box calendar\">
    <div class=\"inner\">
        <div id=\"datepicker\"></div>
    </div>
</section>
";
        }
        // line 45
        echo "

<ul id=\"copyright\">
    <li>&copy; ";
        // line 48
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "name", array());
        echo "</li><li>
</ul>

</div>
";
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 48,  106 => 45,  98 => 39,  96 => 38,  93 => 37,  89 => 35,  87 => 34,  81 => 30,  79 => 29,  76 => 28,  72 => 26,  70 => 25,  64 => 21,  62 => 20,  59 => 19,  55 => 17,  53 => 16,  47 => 12,  45 => 11,  41 => 9,  39 => 8,  36 => 7,  34 => 6,  31 => 5,  29 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"sidebar\">
<h1 id=\"logo\"><a href=\"{{ base_url_absolute }}\">{{ site.placeholder|upper }}</a></h1>

{% include 'partials/navigation.html.twig' %}

{% if config.plugins.simplesearch.enabled %}
<section class=\"box search\">
    {% include 'partials/simplesearch_searchbox.html.twig' %}
</section>
{% endif %}
{% if config.plugins.relatedpages.enabled and related_pages|length > 0 %}
<section class=\"box recent-comments\">
    <header>
        <h2>Related Posts</h2>
    </header>
    {% include 'partials/relatedpages.html.twig' %}
</section>
{% endif %}

{% if config.plugins.archives.enabled %}
    <section class=\"box recent-posts\">
        <header>
            <h2>Archives</h2>
        </header>
        {% include 'partials/archives.html.twig' %}
    </section>
{% endif %}

{% if config.plugins.taxonomylist.enabled %}
<section class=\"box recent-comments\">
    <header>
        <h2>Popular Tags</h2>
    </header>
    {% include 'partials/taxonomylist.html.twig' with {'taxonomy':'tag'} %}
</section>
{% endif %}

{% if site.calendar %}
<section class=\"box calendar\">
    <div class=\"inner\">
        <div id=\"datepicker\"></div>
    </div>
</section>
{% endif %}


<ul id=\"copyright\">
    <li>&copy; {{ site.author.name }}</li><li>
</ul>

</div>
", "partials/sidebar.html.twig", "/Users/sidshekhar/Documents/pete-archive/archive-grav/user/themes/striped/templates/partials/sidebar.html.twig");
    }
}
