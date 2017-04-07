<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_01ec85ed17953297405838d03e62abbd72aa36ee53c081a779bbe967a651d71d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df0298b90c17cc45e706e7570caf6b56804bc109a2fcc2252b36c9a821ce941f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df0298b90c17cc45e706e7570caf6b56804bc109a2fcc2252b36c9a821ce941f->enter($__internal_df0298b90c17cc45e706e7570caf6b56804bc109a2fcc2252b36c9a821ce941f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df0298b90c17cc45e706e7570caf6b56804bc109a2fcc2252b36c9a821ce941f->leave($__internal_df0298b90c17cc45e706e7570caf6b56804bc109a2fcc2252b36c9a821ce941f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_510da53b29a7bcd60f42a236b404c6fc4a5f8921930e4886f48cd6299f47da5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_510da53b29a7bcd60f42a236b404c6fc4a5f8921930e4886f48cd6299f47da5f->enter($__internal_510da53b29a7bcd60f42a236b404c6fc4a5f8921930e4886f48cd6299f47da5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_510da53b29a7bcd60f42a236b404c6fc4a5f8921930e4886f48cd6299f47da5f->leave($__internal_510da53b29a7bcd60f42a236b404c6fc4a5f8921930e4886f48cd6299f47da5f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f48886a241b6681833920dc672ec9e6267ad009d577ad22ff09b54c20b5f8d64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f48886a241b6681833920dc672ec9e6267ad009d577ad22ff09b54c20b5f8d64->enter($__internal_f48886a241b6681833920dc672ec9e6267ad009d577ad22ff09b54c20b5f8d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f48886a241b6681833920dc672ec9e6267ad009d577ad22ff09b54c20b5f8d64->leave($__internal_f48886a241b6681833920dc672ec9e6267ad009d577ad22ff09b54c20b5f8d64_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_225d8d4eeaee63967e84458a2025b858aaa3903f2ea9fc9eccbd3b5d1f2e1899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_225d8d4eeaee63967e84458a2025b858aaa3903f2ea9fc9eccbd3b5d1f2e1899->enter($__internal_225d8d4eeaee63967e84458a2025b858aaa3903f2ea9fc9eccbd3b5d1f2e1899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_225d8d4eeaee63967e84458a2025b858aaa3903f2ea9fc9eccbd3b5d1f2e1899->leave($__internal_225d8d4eeaee63967e84458a2025b858aaa3903f2ea9fc9eccbd3b5d1f2e1899_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/cart/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
