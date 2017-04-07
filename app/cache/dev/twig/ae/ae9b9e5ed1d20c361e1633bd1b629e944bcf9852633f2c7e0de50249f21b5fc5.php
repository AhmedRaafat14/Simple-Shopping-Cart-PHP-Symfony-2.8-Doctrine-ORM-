<?php

/* user/register.html.twig */
class __TwigTemplate_ddc2c2183ed2757db1309eed9d0e9ba391018e0f5708cec6da0808ddd327d6a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:login-layout.html.twig", "user/register.html.twig", 1);
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
        $__internal_a31403dc8f320f4b110c5767baf1453caa49e8a1158a68070590d75942cf0420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a31403dc8f320f4b110c5767baf1453caa49e8a1158a68070590d75942cf0420->enter($__internal_a31403dc8f320f4b110c5767baf1453caa49e8a1158a68070590d75942cf0420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a31403dc8f320f4b110c5767baf1453caa49e8a1158a68070590d75942cf0420->leave($__internal_a31403dc8f320f4b110c5767baf1453caa49e8a1158a68070590d75942cf0420_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7ceb7e7f7835e488df32448117984d6514dbe0defd637414ca7ed5e3df2409e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ceb7e7f7835e488df32448117984d6514dbe0defd637414ca7ed5e3df2409e->enter($__internal_a7ceb7e7f7835e488df32448117984d6514dbe0defd637414ca7ed5e3df2409e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Products | Register
";
        
        $__internal_a7ceb7e7f7835e488df32448117984d6514dbe0defd637414ca7ed5e3df2409e->leave($__internal_a7ceb7e7f7835e488df32448117984d6514dbe0defd637414ca7ed5e3df2409e_prof);

    }

    // line 8
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_10ad5ae9ee7cc73a92362a1dbb2df89015728edea36717185eaea151490a1dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ad5ae9ee7cc73a92362a1dbb2df89015728edea36717185eaea151490a1dd5->enter($__internal_10ad5ae9ee7cc73a92362a1dbb2df89015728edea36717185eaea151490a1dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 9
        echo "    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show products");
        echo "\"><b>Products</b></a>
        </div><!-- /.login-logo -->
        <div class=\"login-box-body\">
            <p class=\"login-box-msg\">Create account to start your session</p>
            <form action=\"../../index2.html\" method=\"post\">
                <div class=\"form-group has-feedback\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Username\"/>
                    <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                </div>
                <div class=\"form-group has-feedback\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Email\"/>
                    <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                </div>
                <div class=\"form-group has-feedback\">
                    <input type=\"password\" class=\"form-control\" placeholder=\"Password\"/>
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
                        <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Sign Up</button>
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
        
        $__internal_10ad5ae9ee7cc73a92362a1dbb2df89015728edea36717185eaea151490a1dd5->leave($__internal_10ad5ae9ee7cc73a92362a1dbb2df89015728edea36717185eaea151490a1dd5_prof);

    }

    public function getTemplateName()
    {
        return "user/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 11,  55 => 9,  49 => 8,  41 => 5,  35 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AvanzuAdminThemeBundle:layout:login-layout.html.twig' %}


{% block title %}
  Products | Register
{% endblock %}

{% block page_content %}
    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"{{ path('show products') }}\"><b>Products</b></a>
        </div><!-- /.login-logo -->
        <div class=\"login-box-body\">
            <p class=\"login-box-msg\">Create account to start your session</p>
            <form action=\"../../index2.html\" method=\"post\">
                <div class=\"form-group has-feedback\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Username\"/>
                    <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                </div>
                <div class=\"form-group has-feedback\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Email\"/>
                    <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                </div>
                <div class=\"form-group has-feedback\">
                    <input type=\"password\" class=\"form-control\" placeholder=\"Password\"/>
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
                        <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Sign Up</button>
                    </div><!-- /.col -->
                </div>
            </form>
<!--
            <a href=\"#\">I forgot my password</a><br>
            <a href=\"register.html\" class=\"text-center\">Register a new membership</a>
-->
        </div><!-- /.login-box-body -->
    </div>
{% endblock %}", "user/register.html.twig", "/var/www/blog/app/Resources/views/user/register.html.twig");
    }
}
