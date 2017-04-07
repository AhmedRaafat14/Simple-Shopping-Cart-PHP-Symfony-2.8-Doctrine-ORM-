<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_249e8d96345b87357f80ad5b941b4b87e9bc51ecb30d5b089009c138a896be03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:login-layout.html.twig", "@FOSUser/Security/login_content.html.twig", 2);
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
        $__internal_332338a1784f24becd02c9038efc232079d064ca8f00e32f7dc847bb326ea519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_332338a1784f24becd02c9038efc232079d064ca8f00e32f7dc847bb326ea519->enter($__internal_332338a1784f24becd02c9038efc232079d064ca8f00e32f7dc847bb326ea519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_332338a1784f24becd02c9038efc232079d064ca8f00e32f7dc847bb326ea519->leave($__internal_332338a1784f24becd02c9038efc232079d064ca8f00e32f7dc847bb326ea519_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_17718f9607daa41aa58d013500d5b7886d304df67c13c831b3a6147cf8e8100d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17718f9607daa41aa58d013500d5b7886d304df67c13c831b3a6147cf8e8100d->enter($__internal_17718f9607daa41aa58d013500d5b7886d304df67c13c831b3a6147cf8e8100d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Products | Login
";
        
        $__internal_17718f9607daa41aa58d013500d5b7886d304df67c13c831b3a6147cf8e8100d->leave($__internal_17718f9607daa41aa58d013500d5b7886d304df67c13c831b3a6147cf8e8100d_prof);

    }

    // line 9
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_470747becdb3c32bb443dceabfe5a686c8b883fa0cc8be247a2cf43b10b724a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_470747becdb3c32bb443dceabfe5a686c8b883fa0cc8be247a2cf43b10b724a8->enter($__internal_470747becdb3c32bb443dceabfe5a686c8b883fa0cc8be247a2cf43b10b724a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 13
        echo "
    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show products");
        echo "\"><b>Products</b></a>
        </div><!-- /.login-logo -->
        <div class=\"login-box-body\">
            <p class=\"login-box-msg\">Sign in to start your session</p>
            <form action=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            ";
        // line 21
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 22
            echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
            ";
        }
        // line 24
        echo "                <div class=\"form-group has-feedback\">
                    <input id='username' name='_username' type=\"text\" class=\"form-control\" placeholder=\"Email or username\"/>
                    <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                </div>
                <div class=\"form-group has-feedback\">
                    <input id='_password' name='_password' type=\"password\" class=\"form-control\" placeholder=\"Password\"/>
                    <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                </div>
                <div class=\"row\">
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
                        <button id=\"_submit\" name=\"_submit\"  type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Sign In</button>
                    </div><!-- /.col -->
                </div>
            </form>
<!--
            <a href=\"#\">I forgot my password</a><br>
            <a href=\"register.html\" class=\"text-center\">Register a new membership</a>
-->
        </div><!-- /.login-box-body -->
    </div>
";
        
        $__internal_470747becdb3c32bb443dceabfe5a686c8b883fa0cc8be247a2cf43b10b724a8->leave($__internal_470747becdb3c32bb443dceabfe5a686c8b883fa0cc8be247a2cf43b10b724a8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 24,  81 => 22,  79 => 21,  75 => 20,  68 => 16,  63 => 13,  57 => 11,  55 => 10,  49 => 9,  41 => 6,  35 => 5,  11 => 2,);
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
  Products | Login
{% endblock %}

{% block page_content %}
{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"{{ path('show products') }}\"><b>Products</b></a>
        </div><!-- /.login-logo -->
        <div class=\"login-box-body\">
            <p class=\"login-box-msg\">Sign in to start your session</p>
            <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
            {% if csrf_token %}
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
            {% endif %}
                <div class=\"form-group has-feedback\">
                    <input id='username' name='_username' type=\"text\" class=\"form-control\" placeholder=\"Email or username\"/>
                    <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                </div>
                <div class=\"form-group has-feedback\">
                    <input id='_password' name='_password' type=\"password\" class=\"form-control\" placeholder=\"Password\"/>
                    <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                </div>
                <div class=\"row\">
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
                        <button id=\"_submit\" name=\"_submit\"  type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Sign In</button>
                    </div><!-- /.col -->
                </div>
            </form>
<!--
            <a href=\"#\">I forgot my password</a><br>
            <a href=\"register.html\" class=\"text-center\">Register a new membership</a>
-->
        </div><!-- /.login-box-body -->
    </div>
{% endblock %}
", "@FOSUser/Security/login_content.html.twig", "/var/www/blog/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login_content.html.twig");
    }
}
