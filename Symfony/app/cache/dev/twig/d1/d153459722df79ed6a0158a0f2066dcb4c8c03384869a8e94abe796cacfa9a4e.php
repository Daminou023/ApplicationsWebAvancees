<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_f6d635a170483df986e22c047d95f3e7e4bfb0806944e4199b80ba526be00e43 extends Twig_Template
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
        $__internal_23f41459077ae748d82530b4b899b0a96cc2bb96056883b1e95df056d25638b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23f41459077ae748d82530b4b899b0a96cc2bb96056883b1e95df056d25638b2->enter($__internal_23f41459077ae748d82530b4b899b0a96cc2bb96056883b1e95df056d25638b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_23f41459077ae748d82530b4b899b0a96cc2bb96056883b1e95df056d25638b2->leave($__internal_23f41459077ae748d82530b4b899b0a96cc2bb96056883b1e95df056d25638b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
