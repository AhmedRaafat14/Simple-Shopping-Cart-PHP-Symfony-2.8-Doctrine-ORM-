<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_6c7e2f76aaf4d47f36e06485b635a6517acfda476f6470c0c02845295ed1048d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:login-layout.html.twig", "@FOSUser/Security/login_content.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_content' => array($this, 'block_page_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:login-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_532e4702a09bcb005746ffa0612d7162d040b956a35be2083cc2cfd938cb9842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_532e4702a09bcb005746ffa0612d7162d040b956a35be2083cc2cfd938cb9842->enter($__internal_532e4702a09bcb005746ffa0612d7162d040b956a35be2083cc2cfd938cb9842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_532e4702a09bcb005746ffa0612d7162d040b956a35be2083cc2cfd938cb9842->leave($__internal_532e4702a09bcb005746ffa0612d7162d040b956a35be2083cc2cfd938cb9842_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c118bab9b439b2dfc45f3ff9d1638500b30a49549bf0d4f53c140dda95fc2a22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c118bab9b439b2dfc45f3ff9d1638500b30a49549bf0d4f53c140dda95fc2a22->enter($__internal_c118bab9b439b2dfc45f3ff9d1638500b30a49549bf0d4f53c140dda95fc2a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Products | Login
";
        
        $__internal_c118bab9b439b2dfc45f3ff9d1638500b30a49549bf0d4f53c140dda95fc2a22->leave($__internal_c118bab9b439b2dfc45f3ff9d1638500b30a49549bf0d4f53c140dda95fc2a22_prof);

    }

    // line 9
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_48ce45bd5d9b1f5fe136bd0be68dfc0672abfe681a868da2e12b1fabe00d42b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48ce45bd5d9b1f5fe136bd0be68dfc0672abfe681a868da2e12b1fabe00d42b9->enter($__internal_48ce45bd5d9b1f5fe136bd0be68dfc0672abfe681a868da2e12b1fabe00d42b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 10
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_48ce45bd5d9b1f5fe136bd0be68dfc0672abfe681a868da2e12b1fabe00d42b9->leave($__internal_48ce45bd5d9b1f5fe136bd0be68dfc0672abfe681a868da2e12b1fabe00d42b9_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d6fbd4a1d673c383d4a198a99c85806e60f347b40a11776092aae3ac552f6b1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6fbd4a1d673c383d4a198a99c85806e60f347b40a11776092aae3ac552f6b1d->enter($__internal_d6fbd4a1d673c383d4a198a99c85806e60f347b40a11776092aae3ac552f6b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 11
        echo "            <div class=\"login-box\">
                <div class=\"login-logo\">
                    <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show products");
        echo "\"><b>Products</b></a>
                </div><!-- /.login-logo -->
                <div class=\"login-box-body\">
                    <p class=\"login-box-msg\">Sign in to start your session</p>
                    <form action=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                    ";
        // line 18
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 19
            echo "                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
                    ";
        }
        // line 21
        echo "                        <div class=\"form-group has-feedback\">
                            <input id='username' name='_username' type=\"text\" class=\"form-control\" placeholder=\"Username\"/>
                            <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                        </div>
                        <div class=\"form-group has-feedback\">
                            <input id='_password' name='_password' type=\"password\" class=\"form-control\" placeholder=\"Password\"/>
                            <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-8\">
                            
                            </div><!-- /.col -->
                            <div class=\"col-xs-4\">
                            ";
        // line 34
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 35
            echo "                                <div style='color: red;'>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                            ";
        }
        // line 37
        echo "                                <button id=\"_submit\" name=\"_submit\"  type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Sign In</button>
                            </div><!-- /.col -->
                        </div>
                    </form>
                    <br>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" class=\"text-center\">Register a new membership</a>

            </div>
        ";
        
        $__internal_d6fbd4a1d673c383d4a198a99c85806e60f347b40a11776092aae3ac552f6b1d->leave($__internal_d6fbd4a1d673c383d4a198a99c85806e60f347b40a11776092aae3ac552f6b1d_prof);

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
        return array (  122 => 42,  115 => 37,  109 => 35,  107 => 34,  92 => 21,  86 => 19,  84 => 18,  80 => 17,  73 => 13,  69 => 11,  56 => 10,  50 => 9,  42 => 6,  36 => 5,  11 => 2,);
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
    {% block fos_user_content %}
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
                            <input id='username' name='_username' type=\"text\" class=\"form-control\" placeholder=\"Username\"/>
                            <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                        </div>
                        <div class=\"form-group has-feedback\">
                            <input id='_password' name='_password' type=\"password\" class=\"form-control\" placeholder=\"Password\"/>
                            <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-8\">
                            
                            </div><!-- /.col -->
                            <div class=\"col-xs-4\">
                            {% if error %}
                                <div style='color: red;'>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                            {% endif %}
                                <button id=\"_submit\" name=\"_submit\"  type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Sign In</button>
                            </div><!-- /.col -->
                        </div>
                    </form>
                    <br>
            <a href=\"{{ path('fos_user_registration_register') }}\" class=\"text-center\">Register a new membership</a>

            </div>
        {% endblock fos_user_content %}
{% endblock %}
", "@FOSUser/Security/login_content.html.twig", "/var/www/cart/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login_content.html.twig");
    }
}
