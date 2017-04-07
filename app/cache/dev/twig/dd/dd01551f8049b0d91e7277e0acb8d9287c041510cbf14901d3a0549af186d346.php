<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_196320a1a3842ec61b47e580df6a124a90ca903ebd0f301962e7c97c665f57b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:login-layout.html.twig", "@FOSUser/Registration/register_content.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:login-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f26e930350126ab085a756e2e15092402f2896d05ea7db6d743dbfb3f2b06609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f26e930350126ab085a756e2e15092402f2896d05ea7db6d743dbfb3f2b06609->enter($__internal_f26e930350126ab085a756e2e15092402f2896d05ea7db6d743dbfb3f2b06609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f26e930350126ab085a756e2e15092402f2896d05ea7db6d743dbfb3f2b06609->leave($__internal_f26e930350126ab085a756e2e15092402f2896d05ea7db6d743dbfb3f2b06609_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_3fa11a3c0c25826635d15a7f935d956f676ac8455d9e1ab10f740030a422c38d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fa11a3c0c25826635d15a7f935d956f676ac8455d9e1ab10f740030a422c38d->enter($__internal_3fa11a3c0c25826635d15a7f935d956f676ac8455d9e1ab10f740030a422c38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Products | Register
";
        
        $__internal_3fa11a3c0c25826635d15a7f935d956f676ac8455d9e1ab10f740030a422c38d->leave($__internal_3fa11a3c0c25826635d15a7f935d956f676ac8455d9e1ab10f740030a422c38d_prof);

    }

    // line 9
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_19f53d5cfeefadcb2226d88a3d97637c2fd1eba96c150bd6d44746dd791feb07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f53d5cfeefadcb2226d88a3d97637c2fd1eba96c150bd6d44746dd791feb07->enter($__internal_19f53d5cfeefadcb2226d88a3d97637c2fd1eba96c150bd6d44746dd791feb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 10
        echo "\t <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show products");
        echo "\"><b>Products</b></a>
        </div><!-- /.login-logo -->
        <div class=\"login-box-body\">
            <p class=\"login-box-msg\">Create account to start your session</p>
\t";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
\t    ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t    <div class=\"row\">
                    <div class=\"col-xs-8\">
                    <!--
                        <div class=\"checkbox\">
                            <label>
                                <input type=\"checkbox\"> Remember Me
                            </label>
                        </div>
                        -->
                    </div><!-- /.col -->
                    <div class=\"col-xs-4\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">Sign Up</button>
                    </div><!-- /.col -->
                </div>
\t    
\t";
        // line 33
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t<!--
            <a href=\"#\">I forgot my password</a><br>
            <a href=\"register.html\" class=\"text-center\">Register a new membership</a>
-->
        </div><!-- /.login-box-body -->
    </div>
";
        
        $__internal_19f53d5cfeefadcb2226d88a3d97637c2fd1eba96c150bd6d44746dd791feb07->leave($__internal_19f53d5cfeefadcb2226d88a3d97637c2fd1eba96c150bd6d44746dd791feb07_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 33,  85 => 29,  70 => 17,  66 => 16,  59 => 12,  55 => 10,  49 => 9,  41 => 5,  35 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% extends 'AvanzuAdminThemeBundle:layout:login-layout.html.twig' %}

{% block title %}
  Products | Register
{% endblock %}


{% block page_content %}
\t <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"{{ path('show products') }}\"><b>Products</b></a>
        </div><!-- /.login-logo -->
        <div class=\"login-box-body\">
            <p class=\"login-box-msg\">Create account to start your session</p>
\t{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
\t    {{ form_widget(form) }}
\t    <div class=\"row\">
                    <div class=\"col-xs-8\">
                    <!--
                        <div class=\"checkbox\">
                            <label>
                                <input type=\"checkbox\"> Remember Me
                            </label>
                        </div>
                        -->
                    </div><!-- /.col -->
                    <div class=\"col-xs-4\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\" value=\"{{ 'registration.submit'|trans }}\">Sign Up</button>
                    </div><!-- /.col -->
                </div>
\t    
\t{{ form_end(form) }}
\t<!--
            <a href=\"#\">I forgot my password</a><br>
            <a href=\"register.html\" class=\"text-center\">Register a new membership</a>
-->
        </div><!-- /.login-box-body -->
    </div>
{% endblock %}", "@FOSUser/Registration/register_content.html.twig", "/var/www/cart/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register_content.html.twig");
    }
}
