<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_b6b1dcefdc4124b201e93e6fbb5b60c605925222a01d8343970eaece97cf3f8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31f755738132188ef581181d3c4498539fb05133727e5f1bbb96611dbbc8b02d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31f755738132188ef581181d3c4498539fb05133727e5f1bbb96611dbbc8b02d->enter($__internal_31f755738132188ef581181d3c4498539fb05133727e5f1bbb96611dbbc8b02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31f755738132188ef581181d3c4498539fb05133727e5f1bbb96611dbbc8b02d->leave($__internal_31f755738132188ef581181d3c4498539fb05133727e5f1bbb96611dbbc8b02d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_50f92f8d1f649b1088b3cb02e052e78f066e5dfe31b1bf0843eee96c1ec7c079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50f92f8d1f649b1088b3cb02e052e78f066e5dfe31b1bf0843eee96c1ec7c079->enter($__internal_50f92f8d1f649b1088b3cb02e052e78f066e5dfe31b1bf0843eee96c1ec7c079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_50f92f8d1f649b1088b3cb02e052e78f066e5dfe31b1bf0843eee96c1ec7c079->leave($__internal_50f92f8d1f649b1088b3cb02e052e78f066e5dfe31b1bf0843eee96c1ec7c079_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/var/www/cart/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
