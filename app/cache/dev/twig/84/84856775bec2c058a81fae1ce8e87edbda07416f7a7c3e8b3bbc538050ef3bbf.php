<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_49ceba80b675d29ff2b30215e68cb0c4406480fbecd473e312ef8748da0f5060 extends Twig_Template
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
        $__internal_7c546959548e38d39ae294d13c0b56d1c07ce532c2ab9555f2bbae6894054df4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c546959548e38d39ae294d13c0b56d1c07ce532c2ab9555f2bbae6894054df4->enter($__internal_7c546959548e38d39ae294d13c0b56d1c07ce532c2ab9555f2bbae6894054df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c546959548e38d39ae294d13c0b56d1c07ce532c2ab9555f2bbae6894054df4->leave($__internal_7c546959548e38d39ae294d13c0b56d1c07ce532c2ab9555f2bbae6894054df4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c28d494f2fc20a64631a1eda063d1456340007665e0d7fd43ff83057b453159c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c28d494f2fc20a64631a1eda063d1456340007665e0d7fd43ff83057b453159c->enter($__internal_c28d494f2fc20a64631a1eda063d1456340007665e0d7fd43ff83057b453159c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_c28d494f2fc20a64631a1eda063d1456340007665e0d7fd43ff83057b453159c->leave($__internal_c28d494f2fc20a64631a1eda063d1456340007665e0d7fd43ff83057b453159c_prof);

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
