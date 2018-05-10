<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_d52496cfb35faacf2221ffe42fa51a989138f78274efe48de9029934e9b217a3 extends Twig_Template
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
        echo "<article class=\"box post post-excerpt\">
    <header>
        ";
        // line 3
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array())) {
            // line 4
            echo "            <h2>
                ";
            // line 5
            if ( !($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
                // line 6
                echo "                    <a href=\"";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "\"></a>
                ";
            }
            // line 8
            echo "                <a href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array());
            echo "\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a>
            </h2>
            ";
        } else {
            // line 11
            echo "            <h2><a href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a></h2>
        ";
        }
        // line 13
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "description", array())) {
            // line 14
            echo "        <p>";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "description", array());
            echo "</p>
        ";
        }
        // line 16
        echo "    </header>

    <div class=\"info\">
        <span class=\"date\">
            <span class=\"month\">";
        // line 20
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "M");
        echo "</span> 
            <span class=\"day\">";
        // line 21
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "d");
        echo "</span>
        </span>    
        </div>

        ";
        // line 25
        if ((isset($context["big_header"]) ? $context["big_header"] : null)) {
            // line 26
            echo "            ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "cropResize", array(0 => 1038, 1 => 437), "method"), "html", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), 1 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), 2 => "image featured"), "method");
            echo "
        ";
        } else {
            // line 28
            echo "            ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "cropZoom", array(0 => 1038, 1 => 437), "method"), "html", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), 1 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), 2 => "image featured"), "method");
            echo "
        ";
        }
        // line 30
        echo "
        ";
        // line 31
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array())) {
            // line 32
            echo "        <span class=\"list-blog-author\">
            <i class=\"fa fa-user\"></i>
            ";
            // line 34
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array());
            echo "
        </span>
        ";
        }
        // line 37
        echo "       
       ";
        // line 38
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array())) {
            // line 39
            echo "        <ul class=\"tags\">
            <i class=\"fa fa-tag\"></i>
            ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 42
                echo "            <li><a href=\"";
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "/tag";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo $context["tag"];
                echo "\">";
                echo $context["tag"];
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "        </ul>
        ";
        }
        // line 46
        echo "        
 
    ";
        // line 48
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
            // line 49
            echo "        <p>";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "</p>
        ";
            // line 50
            if ( !(isset($context["truncate"]) ? $context["truncate"] : null)) {
                // line 51
                echo "        ";
                $context["show_prev_next"] = true;
                // line 52
                echo "        ";
            }
            // line 53
            echo "    ";
        } elseif (((isset($context["truncate"]) ? $context["truncate"] : null) && ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())))) {
            // line 54
            echo "        <p>";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array());
            echo "</p>
        <p><a class=\"button\" href=\"";
            // line 55
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">Continue Reading...</a></p>
    ";
        } elseif (        // line 56
(isset($context["truncate"]) ? $context["truncate"] : null)) {
            // line 57
            echo "        <p>";
            echo \Grav\Common\Utils::truncate($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), 550);
            echo "</p>
        <p><a class=\"button\" href=\"";
            // line 58
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">Continue Reading...</a></p>
    ";
        } else {
            // line 60
            echo "        <p>";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "</p>
        ";
            // line 61
            $context["show_prev_next"] = true;
            // line 62
            echo "    ";
        }
        // line 63
        echo "
    ";
        // line 64
        if ((isset($context["show_prev_next"]) ? $context["show_prev_next"] : null)) {
            // line 65
            echo "
        <p class=\"prev-next\">
            ";
            // line 67
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isFirst", array())) {
                // line 68
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "url", array());
                echo "\"><i class=\"fa fa-chevron-left\"></i> Next Post</a>
            ";
            }
            // line 70
            echo "
            ";
            // line 71
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isLast", array())) {
                // line 72
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "url", array());
                echo "\">Previous Post <i class=\"fa fa-chevron-right\"></i></a>
            ";
            }
            // line 74
            echo "        </p>
    ";
        }
        // line 76
        echo "
</article>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 76,  220 => 74,  214 => 72,  212 => 71,  209 => 70,  203 => 68,  201 => 67,  197 => 65,  195 => 64,  192 => 63,  189 => 62,  187 => 61,  182 => 60,  177 => 58,  172 => 57,  170 => 56,  166 => 55,  161 => 54,  158 => 53,  155 => 52,  152 => 51,  150 => 50,  145 => 49,  143 => 48,  139 => 46,  135 => 44,  121 => 42,  117 => 41,  113 => 39,  111 => 38,  108 => 37,  102 => 34,  98 => 32,  96 => 31,  93 => 30,  87 => 28,  81 => 26,  79 => 25,  72 => 21,  68 => 20,  62 => 16,  56 => 14,  53 => 13,  45 => 11,  36 => 8,  30 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<article class=\"box post post-excerpt\">
    <header>
        {% if page.header.link %}
            <h2>
                {% if page.header.continue_link is not sameas(false) %}
                    <a href=\"{{ page.url }}\"></a>
                {% endif %}
                <a href=\"{{ page.header.link }}\">{{ page.title }}</a>
            </h2>
            {% else %}
            <h2><a href=\"{{ page.url }}\">{{ page.title }}</a></h2>
        {% endif %}
        {% if page.header.description %}
        <p>{{ page.header.description }}</p>
        {% endif %}
    </header>

    <div class=\"info\">
        <span class=\"date\">
            <span class=\"month\">{{ page.date|date(\"M\") }}</span> 
            <span class=\"day\">{{ page.date|date(\"d\") }}</span>
        </span>    
        </div>

        {% if big_header %}
            {{ page.media.images|first.cropResize(1038,437).html(page.title, page.title, 'image featured') }}
        {% else %}
            {{ page.media.images|first.cropZoom(1038,437).html(page.title, page.title, 'image featured') }}
        {% endif %}

        {% if page.header.author %}
        <span class=\"list-blog-author\">
            <i class=\"fa fa-user\"></i>
            {{ page.header.author }}
        </span>
        {% endif %}
       
       {% if page.taxonomy.tag %}
        <ul class=\"tags\">
            <i class=\"fa fa-tag\"></i>
            {% for tag in page.taxonomy.tag %}
            <li><a href=\"{{ base_url }}/tag{{ config.system.param_sep }}{{ tag }}\">{{ tag }}</a></li>
            {% endfor %}
        </ul>
        {% endif %}
        
 
    {% if page.header.continue_link is sameas(false) %}
        <p>{{ page.content }}</p>
        {% if not truncate %}
        {% set show_prev_next = true %}
        {% endif %}
    {% elseif truncate and page.summary != page.content %}
        <p>{{ page.summary }}</p>
        <p><a class=\"button\" href=\"{{ page.url }}\">Continue Reading...</a></p>
    {% elseif truncate %}
        <p>{{ page.content|truncate(550) }}</p>
        <p><a class=\"button\" href=\"{{ page.url }}\">Continue Reading...</a></p>
    {% else %}
        <p>{{ page.content }}</p>
        {% set show_prev_next = true %}
    {% endif %}

    {% if show_prev_next %}

        <p class=\"prev-next\">
            {% if not page.isFirst %}
                <a class=\"button\" href=\"{{ page.nextSibling.url }}\"><i class=\"fa fa-chevron-left\"></i> Next Post</a>
            {% endif %}

            {% if not page.isLast %}
                <a class=\"button\" href=\"{{ page.prevSibling.url }}\">Previous Post <i class=\"fa fa-chevron-right\"></i></a>
            {% endif %}
        </p>
    {% endif %}

</article>
", "partials/blog_item.html.twig", "/Users/sidshekhar/Documents/pete-archive/archive-grav/user/themes/striped/templates/partials/blog_item.html.twig");
    }
}
