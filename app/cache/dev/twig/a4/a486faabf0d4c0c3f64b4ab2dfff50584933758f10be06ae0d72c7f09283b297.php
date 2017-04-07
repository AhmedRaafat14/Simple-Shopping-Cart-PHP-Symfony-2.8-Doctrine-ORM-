<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_fa4ec4abf97ad80abe24a540b93a7236c514cec6df5589f9395ea9834895bad7 extends Twig_Template
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
        $__internal_cf1fabbd8239947fcb8f0cc6b2a03ccf5e2f89d2367758beb049dc1fe0c49424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf1fabbd8239947fcb8f0cc6b2a03ccf5e2f89d2367758beb049dc1fe0c49424->enter($__internal_cf1fabbd8239947fcb8f0cc6b2a03ccf5e2f89d2367758beb049dc1fe0c49424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf1fabbd8239947fcb8f0cc6b2a03ccf5e2f89d2367758beb049dc1fe0c49424->leave($__internal_cf1fabbd8239947fcb8f0cc6b2a03ccf5e2f89d2367758beb049dc1fe0c49424_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d60fa7c502a46eee07f0d50549b0be6d8a980fab4d2cfaaf70c1718d2542e4c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d60fa7c502a46eee07f0d50549b0be6d8a980fab4d2cfaaf70c1718d2542e4c9->enter($__internal_d60fa7c502a46eee07f0d50549b0be6d8a980fab4d2cfaaf70c1718d2542e4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Products | Login
";
        
        $__internal_d60fa7c502a46eee07f0d50549b0be6d8a980fab4d2cfaaf70c1718d2542e4c9->leave($__internal_d60fa7c502a46eee07f0d50549b0be6d8a980fab4d2cfaaf70c1718d2542e4c9_prof);

    }

    // line 9
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_93cc0825b98d3581d576c56e15af4f24a75fa7a7d85b215f2ce37d9c1222c4de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93cc0825b98d3581d576c56e15af4f24a75fa7a7d85b215f2ce37d9c1222c4de->enter($__internal_93cc0825b98d3581d576c56e15af4f24a75fa7a7d85b215f2ce37d9c1222c4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 10
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_93cc0825b98d3581d576c56e15af4f24a75fa7a7d85b215f2ce37d9c1222c4de->leave($__internal_93cc0825b98d3581d576c56e15af4f24a75fa7a7d85b215f2ce37d9c1222c4de_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b62a0af307aa64c5a131cf4b7bbc74dc8e48eaa16e5ceeccb9737bc85ca9bfa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b62a0af307aa64c5a131cf4b7bbc74dc8e48eaa16e5ceeccb9737bc85ca9bfa6->enter($__internal_b62a0af307aa64c5a131cf4b7bbc74dc8e48eaa16e5ceeccb9737bc85ca9bfa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
                            <input id='username' name='_username' type=\"text\" class=\"form-control\" placeholder=\"Email or username\"/>
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
            </div>
        ";
        
        $__internal_b62a0af307aa64c5a131cf4b7bbc74dc8e48eaa16e5ceeccb9737bc85ca9bfa6->leave($__internal_b62a0af307aa64c5a131cf4b7bbc74dc8e48eaa16e5ceeccb9737bc85ca9bfa6_prof);

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
        return array (  115 => 37,  109 => 35,  107 => 34,  92 => 21,  86 => 19,  84 => 18,  80 => 17,  73 => 13,  69 => 11,  56 => 10,  50 => 9,  42 => 6,  36 => 5,  11 => 2,);
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
                            <input id='username' name='_username' type=\"text\" class=\"form-control\" placeholder=\"Email or username\"/>
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
            </div>
        {% endblock fos_user_content %}
{% endblock %}
", "@FOSUser/Security/login_content.html.twig", "/var/www/cart/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login_content.html.twig");
    }
}
