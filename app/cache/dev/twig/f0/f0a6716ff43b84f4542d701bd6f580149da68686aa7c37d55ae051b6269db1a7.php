<?php

/* base.html.twig */
class __TwigTemplate_f3eac83c21da2c000e82cd92056e4efc6cf47e1ef09c929b76e7f740f772b79a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a00b80cbd80cde70f903db955a4ba49931b421f07f6f8e81b399d1e8148de049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a00b80cbd80cde70f903db955a4ba49931b421f07f6f8e81b399d1e8148de049->enter($__internal_a00b80cbd80cde70f903db955a4ba49931b421f07f6f8e81b399d1e8148de049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a00b80cbd80cde70f903db955a4ba49931b421f07f6f8e81b399d1e8148de049->leave($__internal_a00b80cbd80cde70f903db955a4ba49931b421f07f6f8e81b399d1e8148de049_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_05600af2152da8b5e5f30a31b7b4f3d7226e6c9a2783151c1678660cc1c2e40f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05600af2152da8b5e5f30a31b7b4f3d7226e6c9a2783151c1678660cc1c2e40f->enter($__internal_05600af2152da8b5e5f30a31b7b4f3d7226e6c9a2783151c1678660cc1c2e40f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_05600af2152da8b5e5f30a31b7b4f3d7226e6c9a2783151c1678660cc1c2e40f->leave($__internal_05600af2152da8b5e5f30a31b7b4f3d7226e6c9a2783151c1678660cc1c2e40f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_449fe1a27ab4e5bd44e5e17ebe0fd48bde6bf49a7f17df43ecac33ae1e8db5bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_449fe1a27ab4e5bd44e5e17ebe0fd48bde6bf49a7f17df43ecac33ae1e8db5bd->enter($__internal_449fe1a27ab4e5bd44e5e17ebe0fd48bde6bf49a7f17df43ecac33ae1e8db5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_449fe1a27ab4e5bd44e5e17ebe0fd48bde6bf49a7f17df43ecac33ae1e8db5bd->leave($__internal_449fe1a27ab4e5bd44e5e17ebe0fd48bde6bf49a7f17df43ecac33ae1e8db5bd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7af4de62efc92dd82db5a004802b45bd20cee9ce76cc1d49dc0c87ba26cf2699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7af4de62efc92dd82db5a004802b45bd20cee9ce76cc1d49dc0c87ba26cf2699->enter($__internal_7af4de62efc92dd82db5a004802b45bd20cee9ce76cc1d49dc0c87ba26cf2699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7af4de62efc92dd82db5a004802b45bd20cee9ce76cc1d49dc0c87ba26cf2699->leave($__internal_7af4de62efc92dd82db5a004802b45bd20cee9ce76cc1d49dc0c87ba26cf2699_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0b1c4356b9e0db1088d5a2ca9d8b4efca156d1d9a2cc333ad9b2919e6849ec13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b1c4356b9e0db1088d5a2ca9d8b4efca156d1d9a2cc333ad9b2919e6849ec13->enter($__internal_0b1c4356b9e0db1088d5a2ca9d8b4efca156d1d9a2cc333ad9b2919e6849ec13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0b1c4356b9e0db1088d5a2ca9d8b4efca156d1d9a2cc333ad9b2919e6849ec13->leave($__internal_0b1c4356b9e0db1088d5a2ca9d8b4efca156d1d9a2cc333ad9b2919e6849ec13_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/blog/app/Resources/views/base.html.twig");
    }
}
