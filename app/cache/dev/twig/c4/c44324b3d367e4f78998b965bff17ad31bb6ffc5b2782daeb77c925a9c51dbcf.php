<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_9fc62d58648378befd6666f09b3bb91f4fb14e39e7b79dd7a39f8be137d35857 extends Twig_Template
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
        $__internal_03cf4d1ff759e831a8bf9a632f1cd09e1d331f9e009edff1d526b97a94f9b370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03cf4d1ff759e831a8bf9a632f1cd09e1d331f9e009edff1d526b97a94f9b370->enter($__internal_03cf4d1ff759e831a8bf9a632f1cd09e1d331f9e009edff1d526b97a94f9b370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03cf4d1ff759e831a8bf9a632f1cd09e1d331f9e009edff1d526b97a94f9b370->leave($__internal_03cf4d1ff759e831a8bf9a632f1cd09e1d331f9e009edff1d526b97a94f9b370_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a25f4b82b6d754fdd041047873bb213a32ebcca6330e804de3f593c913e4f63b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a25f4b82b6d754fdd041047873bb213a32ebcca6330e804de3f593c913e4f63b->enter($__internal_a25f4b82b6d754fdd041047873bb213a32ebcca6330e804de3f593c913e4f63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_a25f4b82b6d754fdd041047873bb213a32ebcca6330e804de3f593c913e4f63b->leave($__internal_a25f4b82b6d754fdd041047873bb213a32ebcca6330e804de3f593c913e4f63b_prof);

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
", "@FOSUser/Registration/register.html.twig", "/var/www/blog/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
