<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_9e62911e5138a873e25a447fefab2be295d0c5eb60f78052af892b34fd6c632a extends Twig_Template
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
        $__internal_d85e9040ec3a6cac5ba755b9cd919673f70adfa8a92723715bb0936062139b87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d85e9040ec3a6cac5ba755b9cd919673f70adfa8a92723715bb0936062139b87->enter($__internal_d85e9040ec3a6cac5ba755b9cd919673f70adfa8a92723715bb0936062139b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d85e9040ec3a6cac5ba755b9cd919673f70adfa8a92723715bb0936062139b87->leave($__internal_d85e9040ec3a6cac5ba755b9cd919673f70adfa8a92723715bb0936062139b87_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e17d0462df5bf2baa48ee2f1dc69a5ec6109312de6645a5cfcfdc94a4bae76cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e17d0462df5bf2baa48ee2f1dc69a5ec6109312de6645a5cfcfdc94a4bae76cc->enter($__internal_e17d0462df5bf2baa48ee2f1dc69a5ec6109312de6645a5cfcfdc94a4bae76cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_e17d0462df5bf2baa48ee2f1dc69a5ec6109312de6645a5cfcfdc94a4bae76cc->leave($__internal_e17d0462df5bf2baa48ee2f1dc69a5ec6109312de6645a5cfcfdc94a4bae76cc_prof);

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
