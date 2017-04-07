<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9f72fe73c6bd2af6502cc6cc2a4ac8c54382d9336b18c517d6d71c86de483591 extends Twig_Template
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
        $__internal_e1b3d09e281d33b02943e5c4de1ba1d16935b6f54aeaf9c38874ad88689ccb57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1b3d09e281d33b02943e5c4de1ba1d16935b6f54aeaf9c38874ad88689ccb57->enter($__internal_e1b3d09e281d33b02943e5c4de1ba1d16935b6f54aeaf9c38874ad88689ccb57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1b3d09e281d33b02943e5c4de1ba1d16935b6f54aeaf9c38874ad88689ccb57->leave($__internal_e1b3d09e281d33b02943e5c4de1ba1d16935b6f54aeaf9c38874ad88689ccb57_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_66053be26c021dc1fa9915b37003163e250998a1277c2d81c1df1f72a7213f4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66053be26c021dc1fa9915b37003163e250998a1277c2d81c1df1f72a7213f4a->enter($__internal_66053be26c021dc1fa9915b37003163e250998a1277c2d81c1df1f72a7213f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_66053be26c021dc1fa9915b37003163e250998a1277c2d81c1df1f72a7213f4a->leave($__internal_66053be26c021dc1fa9915b37003163e250998a1277c2d81c1df1f72a7213f4a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_33b9176c3097a4c613dcfa84aea11fdf615dd9d0d6a5a2a7130bf0c46c618068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33b9176c3097a4c613dcfa84aea11fdf615dd9d0d6a5a2a7130bf0c46c618068->enter($__internal_33b9176c3097a4c613dcfa84aea11fdf615dd9d0d6a5a2a7130bf0c46c618068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_33b9176c3097a4c613dcfa84aea11fdf615dd9d0d6a5a2a7130bf0c46c618068->leave($__internal_33b9176c3097a4c613dcfa84aea11fdf615dd9d0d6a5a2a7130bf0c46c618068_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e2cc2d4b4a3dca34923eee5d7ff1f8997756cfa516ba26591f2e559ae0cabe71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2cc2d4b4a3dca34923eee5d7ff1f8997756cfa516ba26591f2e559ae0cabe71->enter($__internal_e2cc2d4b4a3dca34923eee5d7ff1f8997756cfa516ba26591f2e559ae0cabe71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e2cc2d4b4a3dca34923eee5d7ff1f8997756cfa516ba26591f2e559ae0cabe71->leave($__internal_e2cc2d4b4a3dca34923eee5d7ff1f8997756cfa516ba26591f2e559ae0cabe71_prof);

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
