<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4613111f32c23f90081ea0d50df26d08a2be4694d733185bc35282b23da9d57d extends Twig_Template
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
        $__internal_d2eb8552661b98d917a377c232eb6b5a169e4e93433e78729e3e03e59d25bf6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2eb8552661b98d917a377c232eb6b5a169e4e93433e78729e3e03e59d25bf6a->enter($__internal_d2eb8552661b98d917a377c232eb6b5a169e4e93433e78729e3e03e59d25bf6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2eb8552661b98d917a377c232eb6b5a169e4e93433e78729e3e03e59d25bf6a->leave($__internal_d2eb8552661b98d917a377c232eb6b5a169e4e93433e78729e3e03e59d25bf6a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_571e1a6a37725cfd98220542aa26854d1667dfb8effcfe834373c9c564cac7ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_571e1a6a37725cfd98220542aa26854d1667dfb8effcfe834373c9c564cac7ee->enter($__internal_571e1a6a37725cfd98220542aa26854d1667dfb8effcfe834373c9c564cac7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_571e1a6a37725cfd98220542aa26854d1667dfb8effcfe834373c9c564cac7ee->leave($__internal_571e1a6a37725cfd98220542aa26854d1667dfb8effcfe834373c9c564cac7ee_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a75994291c8c51074002dc0ee0f7530f57739add2ccefe82020309024b55fa35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a75994291c8c51074002dc0ee0f7530f57739add2ccefe82020309024b55fa35->enter($__internal_a75994291c8c51074002dc0ee0f7530f57739add2ccefe82020309024b55fa35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a75994291c8c51074002dc0ee0f7530f57739add2ccefe82020309024b55fa35->leave($__internal_a75994291c8c51074002dc0ee0f7530f57739add2ccefe82020309024b55fa35_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f41aaef43ab68e817c1b23a343a4b3971420a355f28806b7e1d65d9875437ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f41aaef43ab68e817c1b23a343a4b3971420a355f28806b7e1d65d9875437ae->enter($__internal_8f41aaef43ab68e817c1b23a343a4b3971420a355f28806b7e1d65d9875437ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8f41aaef43ab68e817c1b23a343a4b3971420a355f28806b7e1d65d9875437ae->leave($__internal_8f41aaef43ab68e817c1b23a343a4b3971420a355f28806b7e1d65d9875437ae_prof);

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
