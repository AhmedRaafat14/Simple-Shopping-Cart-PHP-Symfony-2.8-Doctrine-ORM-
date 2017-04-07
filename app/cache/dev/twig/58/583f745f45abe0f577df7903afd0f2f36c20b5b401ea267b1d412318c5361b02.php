<?php

/* product/all.html.twig */
class __TwigTemplate_9062e0cc5d541064b9fa270353da4829721449c287051b60334e13351242e0b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "product/all.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_title' => array($this, 'block_page_title'),
            'avanzu_sidebar' => array($this, 'block_avanzu_sidebar'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0419d806c56c515daf67966a6775edf32720da607f10a7f1b3f32c0eb885dc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0419d806c56c515daf67966a6775edf32720da607f10a7f1b3f32c0eb885dc5->enter($__internal_e0419d806c56c515daf67966a6775edf32720da607f10a7f1b3f32c0eb885dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0419d806c56c515daf67966a6775edf32720da607f10a7f1b3f32c0eb885dc5->leave($__internal_e0419d806c56c515daf67966a6775edf32720da607f10a7f1b3f32c0eb885dc5_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_98270488d3e67cd5a4a6a5bebb41eb0a6eadaf4d2b3bc829ed31c9aa378fc585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98270488d3e67cd5a4a6a5bebb41eb0a6eadaf4d2b3bc829ed31c9aa378fc585->enter($__internal_98270488d3e67cd5a4a6a5bebb41eb0a6eadaf4d2b3bc829ed31c9aa378fc585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Products
";
        
        $__internal_98270488d3e67cd5a4a6a5bebb41eb0a6eadaf4d2b3bc829ed31c9aa378fc585->leave($__internal_98270488d3e67cd5a4a6a5bebb41eb0a6eadaf4d2b3bc829ed31c9aa378fc585_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_d9478a60cd8889ab5ef2a98466d80245c8499be778b68619a36f3a27b5235271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9478a60cd8889ab5ef2a98466d80245c8499be778b68619a36f3a27b5235271->enter($__internal_d9478a60cd8889ab5ef2a98466d80245c8499be778b68619a36f3a27b5235271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 10
        echo "  Products
";
        
        $__internal_d9478a60cd8889ab5ef2a98466d80245c8499be778b68619a36f3a27b5235271->leave($__internal_d9478a60cd8889ab5ef2a98466d80245c8499be778b68619a36f3a27b5235271_prof);

    }

    // line 15
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_1e5c21097a17091a5389a1eb264e3610c4c86b31924782b25c947f934c76c94d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e5c21097a17091a5389a1eb264e3610c4c86b31924782b25c947f934c76c94d->enter($__internal_1e5c21097a17091a5389a1eb264e3610c4c86b31924782b25c947f934c76c94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

        // line 16
        echo "<li class=\"treeview active\">
";
        // line 17
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 18
            echo "     ";
            // line 19
            echo "     <br>
     <button class=\"btn btn-block btn-success btn-sm\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</button>
";
        }
        // line 22
        echo "<br><br><br>
    <form action='";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show products");
        echo "'>
      <button type=\"button\" class=\"btn btn-block btn-primary btn-sm\">Products</button>
    </form>
<br>
    <form action=''>
      <button type=\"submit\" class=\"btn btn-block btn-primary btn-sm\">Cart</button>
    </form>
</li>

<br>
";
        // line 34
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 35
            echo "     ";
            // line 36
            echo "     ";
            // line 37
            echo "     ";
            // line 38
            echo "     ";
            // line 39
            echo "
     <form action='";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\LogoutUrlExtension')->getLogoutPath("main"), "html", null, true);
            echo "'>
       <button type=\"submit\" class=\"btn btn-block btn-primary btn-sm\">Log Out</button>
     </form>
";
        } else {
            // line 44
            echo "   ";
            // line 45
            echo "   ";
            // line 46
            echo "   ";
            // line 47
            echo "   ";
            // line 48
            echo "   ";
            // line 49
            echo "   <form action='";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "'>
     <button type=\"submit\" class=\"btn btn-block btn-primary btn-sm\">Log In</button>
   </form>
   <br>
   ";
            // line 54
            echo "   ";
            // line 55
            echo "   ";
            // line 56
            echo "   ";
            // line 57
            echo "   <form action='";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "'>
     <button type=\"submit\" class=\"btn btn-block btn-primary btn-sm\">Register</button>
   </form>
";
        }
        // line 61
        echo "</li

";
        
        $__internal_1e5c21097a17091a5389a1eb264e3610c4c86b31924782b25c947f934c76c94d->leave($__internal_1e5c21097a17091a5389a1eb264e3610c4c86b31924782b25c947f934c76c94d_prof);

    }

    // line 66
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_c2e079a2a444cf237d27e2a9317022597f30856428353762a627e16612d45495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e079a2a444cf237d27e2a9317022597f30856428353762a627e16612d45495->enter($__internal_c2e079a2a444cf237d27e2a9317022597f30856428353762a627e16612d45495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 67
        echo "
";
        // line 69
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 70
            echo "    <div class=\"col-md-3 col-sm-6 col-xs-12\">
    <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show product", array("productId" => $this->getAttribute($context["product"], "getId", array(), "method"))), "html", null, true);
            echo "\" class=\"small-box-footer\">
            <div class=\"info-box\">
              <span class=\"info-box-icon bg-gray\">
              <img style='align:center; width: 80px; height: 50px' src='";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("bundles/uploads/" . $this->getAttribute($context["product"], "getPath", array(), "method"))), "html", null, true);
            echo "' alt='' />
            </span>
      </a>

              <div class=\"info-box-content\">
                <span class=\"info-box-text\">";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getName", array(), "method"), "html", null, true);
            echo "</span>
                <span class=\"info-box-number\">";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getPrice", array(), "method"), "html", null, true);
            echo " \$</span>
              </div>

            </div>
            <!-- /.info-box -->
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_c2e079a2a444cf237d27e2a9317022597f30856428353762a627e16612d45495->leave($__internal_c2e079a2a444cf237d27e2a9317022597f30856428353762a627e16612d45495_prof);

    }

    public function getTemplateName()
    {
        return "product/all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 80,  194 => 79,  186 => 74,  180 => 71,  177 => 70,  172 => 69,  169 => 67,  163 => 66,  154 => 61,  146 => 57,  144 => 56,  142 => 55,  140 => 54,  132 => 49,  130 => 48,  128 => 47,  126 => 46,  124 => 45,  122 => 44,  115 => 40,  112 => 39,  110 => 38,  108 => 37,  106 => 36,  104 => 35,  102 => 34,  89 => 23,  86 => 22,  81 => 20,  78 => 19,  76 => 18,  74 => 17,  71 => 16,  65 => 15,  57 => 10,  51 => 9,  43 => 5,  37 => 4,  11 => 1,);
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

{#  This page title which show on the top of nav-menu  #}
{% block title %}
  Products
{% endblock %}

{#  This block title which show on the top of nav-menu  #}
{% block page_title %}
  Products
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
      <button type=\"button\" class=\"btn btn-block btn-primary btn-sm\">Products</button>
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
</li

{% endblock %}

{#  this is the content of show product view #}
{% block page_content %}

{#  this is the for loop to view all products #}
    {% for product in products %}
    <div class=\"col-md-3 col-sm-6 col-xs-12\">
    <a href=\"{{ path('show product', {'productId': product.getId()}) }}\" class=\"small-box-footer\">
            <div class=\"info-box\">
              <span class=\"info-box-icon bg-gray\">
              <img style='align:center; width: 80px; height: 50px' src='{{  asset('bundles/uploads/' ~ product.getPath()) }}' alt='' />
            </span>
      </a>

              <div class=\"info-box-content\">
                <span class=\"info-box-text\">{{ product.getName() }}</span>
                <span class=\"info-box-number\">{{ product.getPrice() }} \$</span>
              </div>

            </div>
            <!-- /.info-box -->
    </div>
    {% endfor %}
{% endblock  %}
", "product/all.html.twig", "/var/www/cart/app/Resources/views/product/all.html.twig");
    }
}
