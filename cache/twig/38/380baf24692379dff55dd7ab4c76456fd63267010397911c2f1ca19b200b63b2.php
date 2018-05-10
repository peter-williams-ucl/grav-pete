<?php

/* @Var:{{ grav.uri.path }} */
class __TwigTemplate_ec14cf9e4b23346093721bc086d76b2d051ac47cc39e0e345d1985cd61ce62a0 extends Twig_Template
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
        return "@Var:{{ grav.uri.path }}";
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
        return new Twig_Source("{{ grav.uri.path }}", "@Var:{{ grav.uri.path }}", "");
    }
}
