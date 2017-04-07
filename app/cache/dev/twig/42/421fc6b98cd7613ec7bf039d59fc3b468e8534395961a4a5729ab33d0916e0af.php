<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_879761e97e85bd6da85829af9d01eea0ee5445db6ff3406fc308c16be559afae extends Twig_Template
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
        $__internal_0e1a541980efdfb955556da8796ab2b0255f8a163364ea4c3a47a5a026f622b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e1a541980efdfb955556da8796ab2b0255f8a163364ea4c3a47a5a026f622b1->enter($__internal_0e1a541980efdfb955556da8796ab2b0255f8a163364ea4c3a47a5a026f622b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e1a541980efdfb955556da8796ab2b0255f8a163364ea4c3a47a5a026f622b1->leave($__internal_0e1a541980efdfb955556da8796ab2b0255f8a163364ea4c3a47a5a026f622b1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0303a927ddaec0188e9ff93f2249a9220526c58bfe2c739c100b828a9e585a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0303a927ddaec0188e9ff93f2249a9220526c58bfe2c739c100b828a9e585a60->enter($__internal_0303a927ddaec0188e9ff93f2249a9220526c58bfe2c739c100b828a9e585a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0303a927ddaec0188e9ff93f2249a9220526c58bfe2c739c100b828a9e585a60->leave($__internal_0303a927ddaec0188e9ff93f2249a9220526c58bfe2c739c100b828a9e585a60_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_502e887ce061141b7bf5995461d9330491bc434e61fddc2bf8298af1a64ce266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_502e887ce061141b7bf5995461d9330491bc434e61fddc2bf8298af1a64ce266->enter($__internal_502e887ce061141b7bf5995461d9330491bc434e61fddc2bf8298af1a64ce266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_502e887ce061141b7bf5995461d9330491bc434e61fddc2bf8298af1a64ce266->leave($__internal_502e887ce061141b7bf5995461d9330491bc434e61fddc2bf8298af1a64ce266_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_70e3e7d7bdb776d906864cf160382b46225bf64636b7c1c75890c1b2eddc61ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70e3e7d7bdb776d906864cf160382b46225bf64636b7c1c75890c1b2eddc61ee->enter($__internal_70e3e7d7bdb776d906864cf160382b46225bf64636b7c1c75890c1b2eddc61ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_70e3e7d7bdb776d906864cf160382b46225bf64636b7c1c75890c1b2eddc61ee->leave($__internal_70e3e7d7bdb776d906864cf160382b46225bf64636b7c1c75890c1b2eddc61ee_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/var/www/blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
