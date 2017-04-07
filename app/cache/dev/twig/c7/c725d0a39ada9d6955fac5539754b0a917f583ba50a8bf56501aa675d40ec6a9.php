<?php

/* product/one.html.twig */
class __TwigTemplate_bed9644d72f09edec4c8c15990f3b87d6e9fae778be5520bdd53ca4f3fa2e0c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "product/one.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'avanzu_sidebar' => array($this, 'block_avanzu_sidebar'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b49d156daef383e7c724bf24f0b94733905d774e452dc956f185d56b19bf34b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b49d156daef383e7c724bf24f0b94733905d774e452dc956f185d56b19bf34b5->enter($__internal_b49d156daef383e7c724bf24f0b94733905d774e452dc956f185d56b19bf34b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b49d156daef383e7c724bf24f0b94733905d774e452dc956f185d56b19bf34b5->leave($__internal_b49d156daef383e7c724bf24f0b94733905d774e452dc956f185d56b19bf34b5_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c1bdc98b26209a1a29bd0e405d9d50626f8325e207f03da5f0cebac68e39cd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c1bdc98b26209a1a29bd0e405d9d50626f8325e207f03da5f0cebac68e39cd2->enter($__internal_8c1bdc98b26209a1a29bd0e405d9d50626f8325e207f03da5f0cebac68e39cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "getName", array(), "method"), "html", null, true);
        echo "
";
        
        $__internal_8c1bdc98b26209a1a29bd0e405d9d50626f8325e207f03da5f0cebac68e39cd2->leave($__internal_8c1bdc98b26209a1a29bd0e405d9d50626f8325e207f03da5f0cebac68e39cd2_prof);

    }

    // line 9
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_3b75403b055424df5baa5f7f911aea59f22e1a7056cd895b25c467274a74327c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b75403b055424df5baa5f7f911aea59f22e1a7056cd895b25c467274a74327c->enter($__internal_3b75403b055424df5baa5f7f911aea59f22e1a7056cd895b25c467274a74327c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

        // line 10
        echo "<li class=\"treeview active\">
<br><br><br>
    <form action='";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show products");
        echo "'>
      <button type=\"submit\" class=\"btn btn-block btn-primary btn-sm\">Products</button>
    </form>
<br>
    <form action=''>
      <button type=\"submit\" class=\"btn btn-block btn-primary btn-sm\">Cart</button>
    </form>
 </li>

 <br>
 ";
        // line 23
        echo " ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 24
            echo "      ";
            // line 25
            echo "      ";
            // line 26
            echo "      ";
            // line 27
            echo "      ";
            // line 28
            echo "
      <form action='";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\LogoutUrlExtension')->getLogoutPath("main"), "html", null, true);
            echo "'>
        <button type=\"submit\" class=\"btn btn-block btn-primary btn-sm\">Log Out</button>
      </form>
 ";
        } else {
            // line 33
            echo "    ";
            // line 34
            echo "    ";
            // line 35
            echo "    ";
            // line 36
            echo "    ";
            // line 37
            echo "    ";
            // line 38
            echo "    <form action='";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "'>
      <button type=\"submit\" class=\"btn btn-block btn-primary btn-sm\">Log In</button>
    </form>
    <br>
    ";
            // line 43
            echo "    ";
            // line 44
            echo "    ";
            // line 45
            echo "    ";
            // line 46
            echo "    <form action='";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "'>
      <button type=\"submit\" class=\"btn btn-block btn-primary btn-sm\">Register</button>
    </form>
 ";
        }
        // line 50
        echo "
";
        
        $__internal_3b75403b055424df5baa5f7f911aea59f22e1a7056cd895b25c467274a74327c->leave($__internal_3b75403b055424df5baa5f7f911aea59f22e1a7056cd895b25c467274a74327c_prof);

    }

    // line 55
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_02d0769b7eaf71ab93385faded6ecfbfb3cc47cda0355fc5af2efc4dd2544bb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02d0769b7eaf71ab93385faded6ecfbfb3cc47cda0355fc5af2efc4dd2544bb7->enter($__internal_02d0769b7eaf71ab93385faded6ecfbfb3cc47cda0355fc5af2efc4dd2544bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 56
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "getName", array(), "method"), "html", null, true);
        echo "
  <form>
      <button type=\"submit\" class=\"btn btn-primary pull-right\">
          <i class=\"fa fa-check-square\"></i>Add To Cart
      </button>
  </form>
";
        
        $__internal_02d0769b7eaf71ab93385faded6ecfbfb3cc47cda0355fc5af2efc4dd2544bb7->leave($__internal_02d0769b7eaf71ab93385faded6ecfbfb3cc47cda0355fc5af2efc4dd2544bb7_prof);

    }

    // line 65
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_9c06b46c9bae0cc2894c0175dad61972e699a4e9f2234aedb9b0e92a0b2dee66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c06b46c9bae0cc2894c0175dad61972e699a4e9f2234aedb9b0e92a0b2dee66->enter($__internal_9c06b46c9bae0cc2894c0175dad61972e699a4e9f2234aedb9b0e92a0b2dee66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        // line 66
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "getPrice", array(), "method"), "html", null, true);
        echo " \$
";
        
        $__internal_9c06b46c9bae0cc2894c0175dad61972e699a4e9f2234aedb9b0e92a0b2dee66->leave($__internal_9c06b46c9bae0cc2894c0175dad61972e699a4e9f2234aedb9b0e92a0b2dee66_prof);

    }

    // line 70
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_408e2d59207b0cdcda593296c6fa463cc430f35a2b2865152dcc0a2407c03aeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_408e2d59207b0cdcda593296c6fa463cc430f35a2b2865152dcc0a2407c03aeb->enter($__internal_408e2d59207b0cdcda593296c6fa463cc430f35a2b2865152dcc0a2407c03aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 71
        echo "
 <!-- Right side column. Contains the navbar and content of the page -->
            <aside class=\"right-side\">
                <!-- Main content -->
                <section class=\"content\">
                 <img style='align:center; width: 450px; height: 250px' src='";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("bundles/uploads/" . $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "getPath", array(), "method"))), "html", null, true);
        echo "' alt='' />
              <blockquote>
              <small>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "getPrice", array(), "method"), "html", null, true);
        echo "  \$</small>
              <small style='float: right !important;'>";
        // line 79
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "getDate", array(), "method"), "Y-m-d"), "html", null, true);
        echo " </small>


              </blockquote>
              <p>";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "getDescription", array(), "method"), "html", null, true);
        echo "</p>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
";
        
        $__internal_408e2d59207b0cdcda593296c6fa463cc430f35a2b2865152dcc0a2407c03aeb->leave($__internal_408e2d59207b0cdcda593296c6fa463cc430f35a2b2865152dcc0a2407c03aeb_prof);

    }

    public function getTemplateName()
    {
        return "product/one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 83,  197 => 79,  193 => 78,  188 => 76,  181 => 71,  175 => 70,  165 => 66,  159 => 65,  144 => 56,  138 => 55,  130 => 50,  122 => 46,  120 => 45,  118 => 44,  116 => 43,  108 => 38,  106 => 37,  104 => 36,  102 => 35,  100 => 34,  98 => 33,  91 => 29,  88 => 28,  86 => 27,  84 => 26,  82 => 25,  80 => 24,  77 => 23,  64 => 12,  60 => 10,  54 => 9,  44 => 5,  38 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}

{#  This block title which show on the top of nav-menu  #}
{% block title %}
  {{ product.getName() }}
{% endblock %}

{#  This is the start of nav-menu bar which have to column ['Products ==> To browse products', 'Products ==> To browse cart data'] #}
{% block avanzu_sidebar %}
<li class=\"treeview active\">
<br><br><br>
    <form action='{{ path('show products') }}'>
      <button type=\"submit\" class=\"btn btn-block btn-primary btn-sm\">Products</button>
    </form>
<br>
    <form action=''>
      <button type=\"submit\" class=\"btn btn-block btn-primary btn-sm\">Cart</button>
    </form>
 </li>

 <br>
 {# VALIDATE IF USER LOGGED OR NOT #}
 {% if app.user %}
      {# user is logged in  #}
      {# when user click on button call logout method  #}
      {# in FOSUserBundle to make logout from the application  #}
      {# using ['logout_path('main')'] which generate its url  #}

      <form action='{{ logout_path('main') }}'>
        <button type=\"submit\" class=\"btn btn-block btn-primary btn-sm\">Log Out</button>
      </form>
 {% else %}
    {# user is not logged in  #}
    {# when user click on button call login form  #}
    {# using default login calling in FOSUSERBUNDLE   #}
    {#      ['fos_user_security_login']   #}
    {# using path() method to generate url to it   #}
    <form action='{{ path('fos_user_security_login') }}'>
      <button type=\"submit\" class=\"btn btn-block btn-primary btn-sm\">Log In</button>
    </form>
    <br>
    {# when user click on button call register form  #}
    {# using default register calling in FOSUSERBUNDLE   #}
    {#      ['fos_user_registration_register']   #}
    {# using path() method to generate url to it   #}
    <form action='{{ path('fos_user_registration_register') }}'>
      <button type=\"submit\" class=\"btn btn-block btn-primary btn-sm\">Register</button>
    </form>
 {% endif %}

{% endblock %}
{#  This end of nav-menu bar  #}

{#  this is the title of show product view #}
{% block page_title %}
  {{ product.getName() }}
  <form>
      <button type=\"submit\" class=\"btn btn-primary pull-right\">
          <i class=\"fa fa-check-square\"></i>Add To Cart
      </button>
  </form>
{% endblock %}

{#  this is the sub-title of show product view #}
{% block page_subtitle %}
    {{ product.getPrice() }} \$
{% endblock %}

{#  this is the content of show product view #}
{% block page_content %}

 <!-- Right side column. Contains the navbar and content of the page -->
            <aside class=\"right-side\">
                <!-- Main content -->
                <section class=\"content\">
                 <img style='align:center; width: 450px; height: 250px' src='{{  asset('bundles/uploads/' ~ product.getPath()) }}' alt='' />
              <blockquote>
              <small>{{ product.getPrice() }}  \$</small>
              <small style='float: right !important;'>{{ product.getDate()|date('Y-m-d') }} </small>


              </blockquote>
              <p>{{ product.getDescription() }}</p>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
{% endblock  %}
", "product/one.html.twig", "/var/www/cart/app/Resources/views/product/one.html.twig");
    }
}
