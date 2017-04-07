<?php

/* product/all.html.twig */
class __TwigTemplate_720db9e63730e5499481689406807098cb67e1b3b3fca2c120a2cbb8193566e8 extends Twig_Template
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
        $__internal_c1054c48c6a3e8807c64d6bb4e0093df7ab04c7dd3d893461271f88539501264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1054c48c6a3e8807c64d6bb4e0093df7ab04c7dd3d893461271f88539501264->enter($__internal_c1054c48c6a3e8807c64d6bb4e0093df7ab04c7dd3d893461271f88539501264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1054c48c6a3e8807c64d6bb4e0093df7ab04c7dd3d893461271f88539501264->leave($__internal_c1054c48c6a3e8807c64d6bb4e0093df7ab04c7dd3d893461271f88539501264_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_d67e5fe9c34503609a7c4c39a50c3e51314e9af1eb9199c24009f3645abc137d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d67e5fe9c34503609a7c4c39a50c3e51314e9af1eb9199c24009f3645abc137d->enter($__internal_d67e5fe9c34503609a7c4c39a50c3e51314e9af1eb9199c24009f3645abc137d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Products
";
        
        $__internal_d67e5fe9c34503609a7c4c39a50c3e51314e9af1eb9199c24009f3645abc137d->leave($__internal_d67e5fe9c34503609a7c4c39a50c3e51314e9af1eb9199c24009f3645abc137d_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_49ea1bcad672b512856dc320d75372781191ced0253d40f4fbcef9e6d5342f05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49ea1bcad672b512856dc320d75372781191ced0253d40f4fbcef9e6d5342f05->enter($__internal_49ea1bcad672b512856dc320d75372781191ced0253d40f4fbcef9e6d5342f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 10
        echo "  Products
";
        
        $__internal_49ea1bcad672b512856dc320d75372781191ced0253d40f4fbcef9e6d5342f05->leave($__internal_49ea1bcad672b512856dc320d75372781191ced0253d40f4fbcef9e6d5342f05_prof);

    }

    // line 15
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_77c4f1cb694188590b54e455452cd5ff587a338fb41ee39bf939aa6ac84b3230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77c4f1cb694188590b54e455452cd5ff587a338fb41ee39bf939aa6ac84b3230->enter($__internal_77c4f1cb694188590b54e455452cd5ff587a338fb41ee39bf939aa6ac84b3230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

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
    <form action='";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view cart");
        echo "'>
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
        
        $__internal_77c4f1cb694188590b54e455452cd5ff587a338fb41ee39bf939aa6ac84b3230->leave($__internal_77c4f1cb694188590b54e455452cd5ff587a338fb41ee39bf939aa6ac84b3230_prof);

    }

    // line 66
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_905314295f5cfc61aa4476c94d9738fd1a1eb3dd64a7943ab118237cc5654a0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_905314295f5cfc61aa4476c94d9738fd1a1eb3dd64a7943ab118237cc5654a0e->enter($__internal_905314295f5cfc61aa4476c94d9738fd1a1eb3dd64a7943ab118237cc5654a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 67
        echo "
";
        // line 69
        echo "
    ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 71
            echo "    <div class=\"col-md-3 col-sm-6 col-xs-12\">
    <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show product", array("productId" => $this->getAttribute($context["product"], "getId", array(), "method"))), "html", null, true);
            echo "\" class=\"small-box-footer\">
            <div class=\"info-box\">
              <span class=\"info-box-icon bg-gray\">
              <img style='align:center; width: 80px; height: 50px' src='";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("bundles/uploads/" . $this->getAttribute($context["product"], "getPath", array(), "method"))), "html", null, true);
            echo "' alt='' />
            </span>
      </a>

              <div class=\"info-box-content\">
                <span class=\"info-box-text\">";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getName", array(), "method"), "html", null, true);
            echo "</span>
                <span class=\"info-box-number\">";
            // line 81
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
        
        $__internal_905314295f5cfc61aa4476c94d9738fd1a1eb3dd64a7943ab118237cc5654a0e->leave($__internal_905314295f5cfc61aa4476c94d9738fd1a1eb3dd64a7943ab118237cc5654a0e_prof);

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
        return array (  203 => 81,  199 => 80,  191 => 75,  185 => 72,  182 => 71,  178 => 70,  175 => 69,  172 => 67,  166 => 66,  157 => 61,  149 => 57,  147 => 56,  145 => 55,  143 => 54,  135 => 49,  133 => 48,  131 => 47,  129 => 46,  127 => 45,  125 => 44,  118 => 40,  115 => 39,  113 => 38,  111 => 37,  109 => 36,  107 => 35,  105 => 34,  96 => 27,  89 => 23,  86 => 22,  81 => 20,  78 => 19,  76 => 18,  74 => 17,  71 => 16,  65 => 15,  57 => 10,  51 => 9,  43 => 5,  37 => 4,  11 => 1,);
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
    <form action='{{ path('view cart') }}'>
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
