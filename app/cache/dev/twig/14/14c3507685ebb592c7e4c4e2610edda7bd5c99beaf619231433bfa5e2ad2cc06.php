<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8dc7bb94bf9aa0dbdca8c326f67afbc6ed613fe7c98d17c1a01dc98c779c8a76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b428210c14087c02a7c8134d13eae13b2e7bc8b1b6b6af7da89dea945d1cda2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b428210c14087c02a7c8134d13eae13b2e7bc8b1b6b6af7da89dea945d1cda2f->enter($__internal_b428210c14087c02a7c8134d13eae13b2e7bc8b1b6b6af7da89dea945d1cda2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b428210c14087c02a7c8134d13eae13b2e7bc8b1b6b6af7da89dea945d1cda2f->leave($__internal_b428210c14087c02a7c8134d13eae13b2e7bc8b1b6b6af7da89dea945d1cda2f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3770d76403351a7945c2f32cfb65f93d8eb5d09d881af3df05f7dfafafb2b26a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3770d76403351a7945c2f32cfb65f93d8eb5d09d881af3df05f7dfafafb2b26a->enter($__internal_3770d76403351a7945c2f32cfb65f93d8eb5d09d881af3df05f7dfafafb2b26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3770d76403351a7945c2f32cfb65f93d8eb5d09d881af3df05f7dfafafb2b26a->leave($__internal_3770d76403351a7945c2f32cfb65f93d8eb5d09d881af3df05f7dfafafb2b26a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d9c0b63214f380443439635c9ca74c62a234760c865fcfd6ae11b041b79f4aa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9c0b63214f380443439635c9ca74c62a234760c865fcfd6ae11b041b79f4aa6->enter($__internal_d9c0b63214f380443439635c9ca74c62a234760c865fcfd6ae11b041b79f4aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d9c0b63214f380443439635c9ca74c62a234760c865fcfd6ae11b041b79f4aa6->leave($__internal_d9c0b63214f380443439635c9ca74c62a234760c865fcfd6ae11b041b79f4aa6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f80ac7bfea0c52fe007c5ef9600d3652d57bacc00c463fafd89bd51fcb025bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f80ac7bfea0c52fe007c5ef9600d3652d57bacc00c463fafd89bd51fcb025bc->enter($__internal_2f80ac7bfea0c52fe007c5ef9600d3652d57bacc00c463fafd89bd51fcb025bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2f80ac7bfea0c52fe007c5ef9600d3652d57bacc00c463fafd89bd51fcb025bc->leave($__internal_2f80ac7bfea0c52fe007c5ef9600d3652d57bacc00c463fafd89bd51fcb025bc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/cart/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
