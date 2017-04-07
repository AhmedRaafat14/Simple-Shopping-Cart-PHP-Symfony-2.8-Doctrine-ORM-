<?php

/* base.html.twig */
class __TwigTemplate_107794356c64fd8885b482dcec884f509dc99c3e1f1ffedfa5c6a78e0d32dffc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca68cb113e9b9e0de77e2b2e5d5be8dfce94ed075df3f3ed770a3e9f16ea05d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca68cb113e9b9e0de77e2b2e5d5be8dfce94ed075df3f3ed770a3e9f16ea05d1->enter($__internal_ca68cb113e9b9e0de77e2b2e5d5be8dfce94ed075df3f3ed770a3e9f16ea05d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ca68cb113e9b9e0de77e2b2e5d5be8dfce94ed075df3f3ed770a3e9f16ea05d1->leave($__internal_ca68cb113e9b9e0de77e2b2e5d5be8dfce94ed075df3f3ed770a3e9f16ea05d1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_33c567c58d1a5ed7bc6f073f07cdf45bef7117bb12aca73f9d88af910c5f0e8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33c567c58d1a5ed7bc6f073f07cdf45bef7117bb12aca73f9d88af910c5f0e8e->enter($__internal_33c567c58d1a5ed7bc6f073f07cdf45bef7117bb12aca73f9d88af910c5f0e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_33c567c58d1a5ed7bc6f073f07cdf45bef7117bb12aca73f9d88af910c5f0e8e->leave($__internal_33c567c58d1a5ed7bc6f073f07cdf45bef7117bb12aca73f9d88af910c5f0e8e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eaa09695402e68ab233a286d8c12482bc10700eeb954880dd4fbd0ff5985b627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaa09695402e68ab233a286d8c12482bc10700eeb954880dd4fbd0ff5985b627->enter($__internal_eaa09695402e68ab233a286d8c12482bc10700eeb954880dd4fbd0ff5985b627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_eaa09695402e68ab233a286d8c12482bc10700eeb954880dd4fbd0ff5985b627->leave($__internal_eaa09695402e68ab233a286d8c12482bc10700eeb954880dd4fbd0ff5985b627_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba66abec644d1313c1439bda25c97b83073066216d956d25dfd657f2b2aea093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba66abec644d1313c1439bda25c97b83073066216d956d25dfd657f2b2aea093->enter($__internal_ba66abec644d1313c1439bda25c97b83073066216d956d25dfd657f2b2aea093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ba66abec644d1313c1439bda25c97b83073066216d956d25dfd657f2b2aea093->leave($__internal_ba66abec644d1313c1439bda25c97b83073066216d956d25dfd657f2b2aea093_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b6ced5144ef1a458bce1a7bfc16871095e70d2948def5e6e8406feec58402609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6ced5144ef1a458bce1a7bfc16871095e70d2948def5e6e8406feec58402609->enter($__internal_b6ced5144ef1a458bce1a7bfc16871095e70d2948def5e6e8406feec58402609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b6ced5144ef1a458bce1a7bfc16871095e70d2948def5e6e8406feec58402609->leave($__internal_b6ced5144ef1a458bce1a7bfc16871095e70d2948def5e6e8406feec58402609_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/cart/app/Resources/views/base.html.twig");
    }
}
