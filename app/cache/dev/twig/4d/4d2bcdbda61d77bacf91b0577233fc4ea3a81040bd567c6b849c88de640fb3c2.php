<?php

/* product/one.html.twig */
class __TwigTemplate_ed18520ba3557aeb4da8b567eda0f64caf001abb48b47527076dfdf74a8783c2 extends Twig_Template
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
        $__internal_6ccad07ed4bcd65accad05a1f9a51468bbafe22f446cec99afb12d8140d42216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ccad07ed4bcd65accad05a1f9a51468bbafe22f446cec99afb12d8140d42216->enter($__internal_6ccad07ed4bcd65accad05a1f9a51468bbafe22f446cec99afb12d8140d42216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ccad07ed4bcd65accad05a1f9a51468bbafe22f446cec99afb12d8140d42216->leave($__internal_6ccad07ed4bcd65accad05a1f9a51468bbafe22f446cec99afb12d8140d42216_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d6a225a836048eaff7ab217f34534d9b4359f1fc98fc4721904d2cb006a8111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d6a225a836048eaff7ab217f34534d9b4359f1fc98fc4721904d2cb006a8111->enter($__internal_1d6a225a836048eaff7ab217f34534d9b4359f1fc98fc4721904d2cb006a8111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "getName", array(), "method"), "html", null, true);
        echo "
";
        
        $__internal_1d6a225a836048eaff7ab217f34534d9b4359f1fc98fc4721904d2cb006a8111->leave($__internal_1d6a225a836048eaff7ab217f34534d9b4359f1fc98fc4721904d2cb006a8111_prof);

    }

    // line 9
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_f00782d3666887e5ee1b2cccd1457eadf73c4e9509cf11f8001c3a27b46e4fa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f00782d3666887e5ee1b2cccd1457eadf73c4e9509cf11f8001c3a27b46e4fa9->enter($__internal_f00782d3666887e5ee1b2cccd1457eadf73c4e9509cf11f8001c3a27b46e4fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

        // line 10
        echo "<li class=\"treeview active\">
";
        // line 11
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 12
            echo "     ";
            // line 13
            echo "     <br>
     <button class=\"btn btn-block btn-success btn-sm\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</button>
";
        }
        // line 16
        echo "<br><br><br>
    <form action='";
        // line 17
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
        // line 28
        echo " ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 29
            echo "      ";
            // line 30
            echo "      ";
            // line 31
            echo "      ";
            // line 32
            echo "      ";
            // line 33
            echo "
      <form action='";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\LogoutUrlExtension')->getLogoutPath("main"), "html", null, true);
            echo "'>
        <button type=\"submit\" class=\"btn btn-block btn-primary btn-sm\">Log Out</button>
      </form>
 ";
        } else {
            // line 38
            echo "    ";
            // line 39
            echo "    ";
            // line 40
            echo "    ";
            // line 41
            echo "    ";
            // line 42
            echo "    ";
            // line 43
            echo "    <form action='";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "'>
      <button type=\"submit\" class=\"btn btn-block btn-primary btn-sm\">Log In</button>
    </form>
    <br>
    ";
            // line 48
            echo "    ";
            // line 49
            echo "    ";
            // line 50
            echo "    ";
            // line 51
            echo "    <form action='";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "'>
      <button type=\"submit\" class=\"btn btn-block btn-primary btn-sm\">Register</button>
    </form>
 ";
        }
        // line 55
        echo "
";
        
        $__internal_f00782d3666887e5ee1b2cccd1457eadf73c4e9509cf11f8001c3a27b46e4fa9->leave($__internal_f00782d3666887e5ee1b2cccd1457eadf73c4e9509cf11f8001c3a27b46e4fa9_prof);

    }

    // line 60
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_11a38aff134ee20a957fc8e9ceafe6773193fd7883505ed455924b1c7051f0c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11a38aff134ee20a957fc8e9ceafe6773193fd7883505ed455924b1c7051f0c7->enter($__internal_11a38aff134ee20a957fc8e9ceafe6773193fd7883505ed455924b1c7051f0c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 61
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "getName", array(), "method"), "html", null, true);
        echo "
  <form action='";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_to_cart", array("productId" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "getId", array(), "method"))), "html", null, true);
        echo "'>
      <button type=\"submit\" class=\"btn btn-primary pull-right\">
          <i class=\"fa fa-check-square\"></i>Add To Cart
      </button>
  </form>
";
        
        $__internal_11a38aff134ee20a957fc8e9ceafe6773193fd7883505ed455924b1c7051f0c7->leave($__internal_11a38aff134ee20a957fc8e9ceafe6773193fd7883505ed455924b1c7051f0c7_prof);

    }

    // line 70
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_f9db810409a6a7ced914acc3386d18aca82e0bce22ff604b7238af57853600ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9db810409a6a7ced914acc3386d18aca82e0bce22ff604b7238af57853600ba->enter($__internal_f9db810409a6a7ced914acc3386d18aca82e0bce22ff604b7238af57853600ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        // line 71
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "getPrice", array(), "method"), "html", null, true);
        echo " \$
";
        
        $__internal_f9db810409a6a7ced914acc3386d18aca82e0bce22ff604b7238af57853600ba->leave($__internal_f9db810409a6a7ced914acc3386d18aca82e0bce22ff604b7238af57853600ba_prof);

    }

    // line 75
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_c0ce6c37c895cd1551cfc91bb70f6dda8b97336e8d7b86645b4b4d278a4e85ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0ce6c37c895cd1551cfc91bb70f6dda8b97336e8d7b86645b4b4d278a4e85ca->enter($__internal_c0ce6c37c895cd1551cfc91bb70f6dda8b97336e8d7b86645b4b4d278a4e85ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 76
        echo "
 <!-- Right side column. Contains the navbar and content of the page -->
            <aside class=\"right-side\">
                <!-- Main content -->
                <section class=\"content\">
                 <img style='align:center; width: 450px; height: 250px' src='";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("bundles/uploads/" . $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "getPath", array(), "method"))), "html", null, true);
        echo "' alt='' />
              <blockquote>
              <small>";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "getPrice", array(), "method"), "html", null, true);
        echo "  \$</small>
              <small style='float: right !important;'>";
        // line 84
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "getDate", array(), "method"), "Y-m-d"), "html", null, true);
        echo " </small>


              </blockquote>
              <p>";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "getDescription", array(), "method"), "html", null, true);
        echo "</p>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
";
        
        $__internal_c0ce6c37c895cd1551cfc91bb70f6dda8b97336e8d7b86645b4b4d278a4e85ca->leave($__internal_c0ce6c37c895cd1551cfc91bb70f6dda8b97336e8d7b86645b4b4d278a4e85ca_prof);

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
        return array (  221 => 88,  214 => 84,  210 => 83,  205 => 81,  198 => 76,  192 => 75,  182 => 71,  176 => 70,  163 => 62,  158 => 61,  152 => 60,  144 => 55,  136 => 51,  134 => 50,  132 => 49,  130 => 48,  122 => 43,  120 => 42,  118 => 41,  116 => 40,  114 => 39,  112 => 38,  105 => 34,  102 => 33,  100 => 32,  98 => 31,  96 => 30,  94 => 29,  91 => 28,  78 => 17,  75 => 16,  70 => 14,  67 => 13,  65 => 12,  63 => 11,  60 => 10,  54 => 9,  44 => 5,  38 => 4,  11 => 1,);
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
{% if app.user %}
     {# show logged username #}
     <br>
     <button class=\"btn btn-block btn-success btn-sm\">{{ app.user.username }}</button>
{% endif %}
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
  <form action='{{ path('add_to_cart', {'productId': product.getId()}) }}'>
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
