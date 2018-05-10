<?php

/* {{ grav.uri.path }} */
class __TwigTemplate_b90e4043574b2b952467aed36bf75ad91967fbd3e2b05a410442dcde5709f0fa extends Twig_Template
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
        echo $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "uri", array()), "path", array());
    }

    public function getTemplateName()
    {
        return "{{ grav.uri.path }}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ grav.uri.path }}", "{{ grav.uri.path }}", "");
    }
}
