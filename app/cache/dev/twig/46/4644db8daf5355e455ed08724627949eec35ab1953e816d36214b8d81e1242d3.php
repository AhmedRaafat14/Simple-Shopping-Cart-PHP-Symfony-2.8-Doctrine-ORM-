<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_842da3a36e4b0d09b9499436549d210644e1dd8e6b64e266f996dfdd1993621a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_d910fd8f6a958ba0da4aecec9dd836ba60a9d74c4409dd26fa4a982e50479ab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d910fd8f6a958ba0da4aecec9dd836ba60a9d74c4409dd26fa4a982e50479ab1->enter($__internal_d910fd8f6a958ba0da4aecec9dd836ba60a9d74c4409dd26fa4a982e50479ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d910fd8f6a958ba0da4aecec9dd836ba60a9d74c4409dd26fa4a982e50479ab1->leave($__internal_d910fd8f6a958ba0da4aecec9dd836ba60a9d74c4409dd26fa4a982e50479ab1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bd6721a55093c3399651b42da6bee189ca6cb218b85c90d0a1f69cfbfee6f5c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd6721a55093c3399651b42da6bee189ca6cb218b85c90d0a1f69cfbfee6f5c3->enter($__internal_bd6721a55093c3399651b42da6bee189ca6cb218b85c90d0a1f69cfbfee6f5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_bd6721a55093c3399651b42da6bee189ca6cb218b85c90d0a1f69cfbfee6f5c3->leave($__internal_bd6721a55093c3399651b42da6bee189ca6cb218b85c90d0a1f69cfbfee6f5c3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/var/www/cart/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
