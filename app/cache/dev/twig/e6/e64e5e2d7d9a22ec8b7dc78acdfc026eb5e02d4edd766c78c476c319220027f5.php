<?php

/* base.html.twig */
class __TwigTemplate_1598c27c7ad9289a84eee3a72f93813b9ffeaab260abe91f9e000a1b3a00fc7c extends Twig_Template
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
        $__internal_df8b75d3704e76d2d8546fa04109c5e4a8e67f74821b52c5973f3c4f331c5ed8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df8b75d3704e76d2d8546fa04109c5e4a8e67f74821b52c5973f3c4f331c5ed8->enter($__internal_df8b75d3704e76d2d8546fa04109c5e4a8e67f74821b52c5973f3c4f331c5ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_df8b75d3704e76d2d8546fa04109c5e4a8e67f74821b52c5973f3c4f331c5ed8->leave($__internal_df8b75d3704e76d2d8546fa04109c5e4a8e67f74821b52c5973f3c4f331c5ed8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a0055aaae4a790822cbb7bb758d47b9c150e9cd0437bd30a2a9ee6c2e00d21d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a0055aaae4a790822cbb7bb758d47b9c150e9cd0437bd30a2a9ee6c2e00d21d->enter($__internal_7a0055aaae4a790822cbb7bb758d47b9c150e9cd0437bd30a2a9ee6c2e00d21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7a0055aaae4a790822cbb7bb758d47b9c150e9cd0437bd30a2a9ee6c2e00d21d->leave($__internal_7a0055aaae4a790822cbb7bb758d47b9c150e9cd0437bd30a2a9ee6c2e00d21d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_43b356eba0f09bcc8b780abf9ebf1b48ccb7cebe43b5f176e56ce2c56ead92eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43b356eba0f09bcc8b780abf9ebf1b48ccb7cebe43b5f176e56ce2c56ead92eb->enter($__internal_43b356eba0f09bcc8b780abf9ebf1b48ccb7cebe43b5f176e56ce2c56ead92eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_43b356eba0f09bcc8b780abf9ebf1b48ccb7cebe43b5f176e56ce2c56ead92eb->leave($__internal_43b356eba0f09bcc8b780abf9ebf1b48ccb7cebe43b5f176e56ce2c56ead92eb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5912b6cf0c36fdbf75ec975f418df066f9ca03b6a3a60e281bce5f66cd029325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5912b6cf0c36fdbf75ec975f418df066f9ca03b6a3a60e281bce5f66cd029325->enter($__internal_5912b6cf0c36fdbf75ec975f418df066f9ca03b6a3a60e281bce5f66cd029325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5912b6cf0c36fdbf75ec975f418df066f9ca03b6a3a60e281bce5f66cd029325->leave($__internal_5912b6cf0c36fdbf75ec975f418df066f9ca03b6a3a60e281bce5f66cd029325_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b331e4a4890bf970c4214c44f1fbe359e23baf9f665597574a1a61b12f99a42d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b331e4a4890bf970c4214c44f1fbe359e23baf9f665597574a1a61b12f99a42d->enter($__internal_b331e4a4890bf970c4214c44f1fbe359e23baf9f665597574a1a61b12f99a42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b331e4a4890bf970c4214c44f1fbe359e23baf9f665597574a1a61b12f99a42d->leave($__internal_b331e4a4890bf970c4214c44f1fbe359e23baf9f665597574a1a61b12f99a42d_prof);

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
", "base.html.twig", "/var/www/cart/app/Resources/views/base.html.twig");
    }
}
