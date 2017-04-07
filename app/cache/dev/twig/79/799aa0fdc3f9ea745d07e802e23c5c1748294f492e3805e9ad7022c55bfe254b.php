<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_b8b7e7ac946eea49ba94e5a225e015401f9dca9780c6178b009ca59ae25643ac extends Twig_Template
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
        $__internal_798587963dc36ce74924eaa38dac237d33d9c27d06557ae4f5e58fe1079c0198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_798587963dc36ce74924eaa38dac237d33d9c27d06557ae4f5e58fe1079c0198->enter($__internal_798587963dc36ce74924eaa38dac237d33d9c27d06557ae4f5e58fe1079c0198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_798587963dc36ce74924eaa38dac237d33d9c27d06557ae4f5e58fe1079c0198->leave($__internal_798587963dc36ce74924eaa38dac237d33d9c27d06557ae4f5e58fe1079c0198_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_91f36444e2ba33572b5c0ae9a05103438277b157ff9d68b147ce1f4254c8d013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91f36444e2ba33572b5c0ae9a05103438277b157ff9d68b147ce1f4254c8d013->enter($__internal_91f36444e2ba33572b5c0ae9a05103438277b157ff9d68b147ce1f4254c8d013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_91f36444e2ba33572b5c0ae9a05103438277b157ff9d68b147ce1f4254c8d013->leave($__internal_91f36444e2ba33572b5c0ae9a05103438277b157ff9d68b147ce1f4254c8d013_prof);

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
", "@FOSUser/Security/login.html.twig", "/var/www/blog/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
