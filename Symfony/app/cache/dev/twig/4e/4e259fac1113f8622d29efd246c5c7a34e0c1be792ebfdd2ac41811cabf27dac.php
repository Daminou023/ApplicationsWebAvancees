<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_6bfea6f6a5f252cbb7743f301bd87ac9283393d044265650063bc0633971ec32 extends Twig_Template
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
        $__internal_4807aa9985a00b4a7ef64d659f0c294e0ea28cb79ce84c8fe7ef8ff8da86e487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4807aa9985a00b4a7ef64d659f0c294e0ea28cb79ce84c8fe7ef8ff8da86e487->enter($__internal_4807aa9985a00b4a7ef64d659f0c294e0ea28cb79ce84c8fe7ef8ff8da86e487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4807aa9985a00b4a7ef64d659f0c294e0ea28cb79ce84c8fe7ef8ff8da86e487->leave($__internal_4807aa9985a00b4a7ef64d659f0c294e0ea28cb79ce84c8fe7ef8ff8da86e487_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
