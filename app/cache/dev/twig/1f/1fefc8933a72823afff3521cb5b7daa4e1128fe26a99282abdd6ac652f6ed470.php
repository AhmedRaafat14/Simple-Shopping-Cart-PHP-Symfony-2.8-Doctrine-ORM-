<?php

/* cart/show.html.twig */
class __TwigTemplate_0fce14705c096508009e5b580f6e85b57c488e724e39c2d07d5c3b677244be0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "cart/show.html.twig", 1);
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
        $__internal_cf91f76e3b2f09f3f7cf96fdd90e57d3bf5e6818d7ce9df9a4178ea0f35ae82b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf91f76e3b2f09f3f7cf96fdd90e57d3bf5e6818d7ce9df9a4178ea0f35ae82b->enter($__internal_cf91f76e3b2f09f3f7cf96fdd90e57d3bf5e6818d7ce9df9a4178ea0f35ae82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cart/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf91f76e3b2f09f3f7cf96fdd90e57d3bf5e6818d7ce9df9a4178ea0f35ae82b->leave($__internal_cf91f76e3b2f09f3f7cf96fdd90e57d3bf5e6818d7ce9df9a4178ea0f35ae82b_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ca43678911217f4f3b22ef58f60401daf332b06d76d710fd2092b10c6d31674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ca43678911217f4f3b22ef58f60401daf332b06d76d710fd2092b10c6d31674->enter($__internal_1ca43678911217f4f3b22ef58f60401daf332b06d76d710fd2092b10c6d31674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Cart
";
        
        $__internal_1ca43678911217f4f3b22ef58f60401daf332b06d76d710fd2092b10c6d31674->leave($__internal_1ca43678911217f4f3b22ef58f60401daf332b06d76d710fd2092b10c6d31674_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_633e4cc80b5edf731fb393f0f4c42f5ba16f37cd405cebe39a9c2624c6c78607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_633e4cc80b5edf731fb393f0f4c42f5ba16f37cd405cebe39a9c2624c6c78607->enter($__internal_633e4cc80b5edf731fb393f0f4c42f5ba16f37cd405cebe39a9c2624c6c78607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 10
        echo "  Cart 
";
        
        $__internal_633e4cc80b5edf731fb393f0f4c42f5ba16f37cd405cebe39a9c2624c6c78607->leave($__internal_633e4cc80b5edf731fb393f0f4c42f5ba16f37cd405cebe39a9c2624c6c78607_prof);

    }

    // line 15
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_c5db9d5efda0ce5025abb73a54083beb25cd93af4d8e3b373f7abb5a5b73313f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5db9d5efda0ce5025abb73a54083beb25cd93af4d8e3b373f7abb5a5b73313f->enter($__internal_c5db9d5efda0ce5025abb73a54083beb25cd93af4d8e3b373f7abb5a5b73313f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

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
      <button type=\"submit\" class=\"btn btn-block btn-primary btn-sm\">Products</button>
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
        
        $__internal_c5db9d5efda0ce5025abb73a54083beb25cd93af4d8e3b373f7abb5a5b73313f->leave($__internal_c5db9d5efda0ce5025abb73a54083beb25cd93af4d8e3b373f7abb5a5b73313f_prof);

    }

    // line 66
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_e2e864b189f0ceeb1535dfe0dfe19ab814d8242ac03e0034290037727281560c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2e864b189f0ceeb1535dfe0dfe19ab814d8242ac03e0034290037727281560c->enter($__internal_e2e864b189f0ceeb1535dfe0dfe19ab814d8242ac03e0034290037727281560c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 67
        echo "
";
        // line 69
        echo "
  ";
        // line 70
        if (array_key_exists("cart_data", $context)) {
            // line 71
            echo "       <div class=\"box\">
                <!-- /.box-header -->
                <div class=\"box-body\">
                  <div id=\"example1_wrapper\" class=\"dataTables_wrapper form-inline dt-bootstrap\">
                  <div class=\"row\">
                    <div class=\"col-sm-6\">
                    <div class=\"dataTables_length\" id=\"example1_length\">
                        <label>Show 
                        <select name=\"example1_length\" aria-controls=\"example1\" class=\"form-control input-sm\">
                          <option value=\"10\">10</option>
                          <option value=\"25\">25</option>
                          <option value=\"50\">50</option>
                          <option value=\"100\">100</option>
                          </select> 
                          entries
                        </label>
                    </div>
                    </div>
                  <div class=\"col-sm-6\">
                  <div id=\"example1_filter\" class=\"dataTables_filter\">

                <form action='";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clear cart", array("cart" => $this->getAttribute((isset($context["cart_data"]) ? $context["cart_data"] : $this->getContext($context, "cart_data")), "getId", array(), "method"))), "html", null, true);
            echo "'>
                      <button type=\"submit\" class=\"btn btn-primary pull-right\">
                          <i class=\"fa fa-remove  \"></i>Clear My Cart
                      </button>
                  </form>


                  </div></div></div><div class=\"row\"><div class=\"col-sm-12\"><table id=\"example1\" class=\"table table-bordered table-striped dataTable\" role=\"grid\" aria-describedby=\"example1_info\">
                    <thead>
                      <tr role=\"row\">
                        <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 167px;\" aria-sort=\"ascending\" aria-label=\"Rendering engine: activate to sort column descending\">
                        Product Image
                        </th>
                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 213px;\" aria-label=\"Browser: activate to sort column ascending\">
                        Product Name
                        </th>
                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 181px;\" aria-label=\"Platform(s): activate to sort column ascending\">
                        Item Price)
                        </th>
                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 143px;\" aria-label=\"Engine version: activate to sort column ascending\">
                        Quantity
                        </th>
                        <th>
                          Delete Action
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 121
                echo "                      <tr role=\"row\" class=\"odd\">
                        <td class=\"sorting_1\">
                           <img style='align:center; width: 250px; height: 100px' src='";
                // line 123
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("bundles/uploads/" . $this->getAttribute($this->getAttribute($context["product"], "getProduct", array(), "method"), "getPath", array(), "method"))), "html", null, true);
                echo "' alt='' />
                        </td>
                        <td>
                          ";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "getProduct", array(), "method"), "getName", array(), "method"), "html", null, true);
                echo "
                        </td>
                        <td>
                          ";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "getProduct", array(), "method"), "getPrice", array(), "method"), "html", null, true);
                echo "
                        </td>
                        <td>
                            <form method='post' action='";
                // line 132
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit item", array("itemProduct" => $this->getAttribute($this->getAttribute($context["product"], "getProduct", array(), "method"), "getId", array(), "method"), "itemCart" => $this->getAttribute((isset($context["cart_data"]) ? $context["cart_data"] : $this->getContext($context, "cart_data")), "getId", array(), "method"))), "html", null, true);
                echo "'>
                                <input style='text-align:center; width: 50px;' type='number' name='quantity' value='";
                // line 133
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getQuantity", array(), "method"), "html", null, true);
                echo "'>
                                
                                  
                                  <button type=\"submit\" class=\"btn btn-info btn-flat\">Update</button>
                                </span>
                           </form>
                        </td>
                        <td>
                          <a href='";
                // line 141
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("remove item", array("itemProduct" => $this->getAttribute($this->getAttribute($context["product"], "getProduct", array(), "method"), "getId", array(), "method"), "itemCart" => $this->getAttribute((isset($context["cart_data"]) ? $context["cart_data"] : $this->getContext($context, "cart_data")), "getId", array(), "method"))), "html", null, true);
                echo "'' class=\"btn btn-app\">
                              <i class=\"fa fa-remove\"></i> Delete
                            </a>
                        </td>
                      </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "                    </tbody>
                    
                  </table>
                    <h1>
                      Total
                      <h4>";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart_data"]) ? $context["cart_data"] : $this->getContext($context, "cart_data")), "getTotalPrice", array(), "method"), "html", null, true);
            echo " \$</h4>
                    </h1>
                  </div>
                  </div>
                  <div class=\"row\">
                  <div class=\"col-sm-5\">
                  <div class=\"dataTables_info\" id=\"example1_info\" role=\"status\" aria-live=\"polite\">
                  
                  </div>
                  </div>
                  <div class=\"col-sm-7\">
                  <div class=\"dataTables_paginate paging_simple_numbers\" id=\"example1_paginate\">
                  <ul class=\"pagination\">
                  <li class=\"paginate_button previous disabled\" id=\"example1_previous\"><a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"0\" tabindex=\"0\">Previous</a>
                  </li>
                  <li class=\"paginate_button active\">
                  <a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"1\" tabindex=\"0\">1</a></li>
                  <li class=\"paginate_button \">
                  <a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"2\" tabindex=\"0\">2</a></li>
                  <li class=\"paginate_button \">
                  <a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"3\" tabindex=\"0\">3</a></li>
                  <li class=\"paginate_button \">
                  <a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"4\" tabindex=\"0\">4</a></li>
                  <li class=\"paginate_button \">
                  <a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"5\" tabindex=\"0\">5</a></li>
                  <li class=\"paginate_button \">
                  <a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"6\" tabindex=\"0\">6</a></li>
                  <li class=\"paginate_button next\" id=\"example1_next\">
                  <a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"7\" tabindex=\"0\">Next</a>
                  </li>
                  </ul>
                  </div>
                  </div>
                  </div>
                  </div>
                </div>
                <!-- /.box-body -->
              </div>
      ";
            // line 191
            echo "      ";
        } elseif (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == "")) {
            // line 192
            echo "          <div class=\"alert alert-danger alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                <h4><i class=\"icon fa fa-ban\"></i> Alert!</h4>
               Sorry for that.<br>
               you shoul dlogin first or create a new account.<br><br>
               Thank you.
              </div>
      ";
            // line 200
            echo "      ";
        } else {
            // line 201
            echo "          <div class=\"alert alert-warning alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                <h4><i class=\"icon fa fa-warning\"></i> Alert!</h4>
                Warning, There's no data in your cart yet.
              </div>
      ";
        }
        
        $__internal_e2e864b189f0ceeb1535dfe0dfe19ab814d8242ac03e0034290037727281560c->leave($__internal_e2e864b189f0ceeb1535dfe0dfe19ab814d8242ac03e0034290037727281560c_prof);

    }

    public function getTemplateName()
    {
        return "cart/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 201,  347 => 200,  338 => 192,  335 => 191,  294 => 152,  287 => 147,  275 => 141,  264 => 133,  260 => 132,  254 => 129,  248 => 126,  242 => 123,  238 => 121,  234 => 120,  203 => 92,  180 => 71,  178 => 70,  175 => 69,  172 => 67,  166 => 66,  157 => 61,  149 => 57,  147 => 56,  145 => 55,  143 => 54,  135 => 49,  133 => 48,  131 => 47,  129 => 46,  127 => 45,  125 => 44,  118 => 40,  115 => 39,  113 => 38,  111 => 37,  109 => 36,  107 => 35,  105 => 34,  96 => 27,  89 => 23,  86 => 22,  81 => 20,  78 => 19,  76 => 18,  74 => 17,  71 => 16,  65 => 15,  57 => 10,  51 => 9,  43 => 5,  37 => 4,  11 => 1,);
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
  Cart
{% endblock %}

{#  This block title which show on the top of nav-menu  #}
{% block page_title %}
  Cart 
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

  {% if cart_data is defined %}
       <div class=\"box\">
                <!-- /.box-header -->
                <div class=\"box-body\">
                  <div id=\"example1_wrapper\" class=\"dataTables_wrapper form-inline dt-bootstrap\">
                  <div class=\"row\">
                    <div class=\"col-sm-6\">
                    <div class=\"dataTables_length\" id=\"example1_length\">
                        <label>Show 
                        <select name=\"example1_length\" aria-controls=\"example1\" class=\"form-control input-sm\">
                          <option value=\"10\">10</option>
                          <option value=\"25\">25</option>
                          <option value=\"50\">50</option>
                          <option value=\"100\">100</option>
                          </select> 
                          entries
                        </label>
                    </div>
                    </div>
                  <div class=\"col-sm-6\">
                  <div id=\"example1_filter\" class=\"dataTables_filter\">

                <form action='{{ path('clear cart', {'cart': cart_data.getId()}) }}'>
                      <button type=\"submit\" class=\"btn btn-primary pull-right\">
                          <i class=\"fa fa-remove  \"></i>Clear My Cart
                      </button>
                  </form>


                  </div></div></div><div class=\"row\"><div class=\"col-sm-12\"><table id=\"example1\" class=\"table table-bordered table-striped dataTable\" role=\"grid\" aria-describedby=\"example1_info\">
                    <thead>
                      <tr role=\"row\">
                        <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 167px;\" aria-sort=\"ascending\" aria-label=\"Rendering engine: activate to sort column descending\">
                        Product Image
                        </th>
                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 213px;\" aria-label=\"Browser: activate to sort column ascending\">
                        Product Name
                        </th>
                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 181px;\" aria-label=\"Platform(s): activate to sort column ascending\">
                        Item Price)
                        </th>
                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 143px;\" aria-label=\"Engine version: activate to sort column ascending\">
                        Quantity
                        </th>
                        <th>
                          Delete Action
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                {% for product in products %}
                      <tr role=\"row\" class=\"odd\">
                        <td class=\"sorting_1\">
                           <img style='align:center; width: 250px; height: 100px' src='{{  asset('bundles/uploads/' ~ product.getProduct().getPath()) }}' alt='' />
                        </td>
                        <td>
                          {{ product.getProduct().getName() }}
                        </td>
                        <td>
                          {{ product.getProduct().getPrice() }}
                        </td>
                        <td>
                            <form method='post' action='{{ path('edit item', {'itemProduct': product.getProduct().getId(), 'itemCart': cart_data.getId()}) }}'>
                                <input style='text-align:center; width: 50px;' type='number' name='quantity' value='{{ product.getQuantity() }}'>
                                
                                  
                                  <button type=\"submit\" class=\"btn btn-info btn-flat\">Update</button>
                                </span>
                           </form>
                        </td>
                        <td>
                          <a href='{{ path('remove item', {'itemProduct': product.getProduct().getId(), 'itemCart': cart_data.getId()}) }}'' class=\"btn btn-app\">
                              <i class=\"fa fa-remove\"></i> Delete
                            </a>
                        </td>
                      </tr>
                {% endfor %}
                    </tbody>
                    
                  </table>
                    <h1>
                      Total
                      <h4>{{ cart_data.getTotalPrice() }} \$</h4>
                    </h1>
                  </div>
                  </div>
                  <div class=\"row\">
                  <div class=\"col-sm-5\">
                  <div class=\"dataTables_info\" id=\"example1_info\" role=\"status\" aria-live=\"polite\">
                  
                  </div>
                  </div>
                  <div class=\"col-sm-7\">
                  <div class=\"dataTables_paginate paging_simple_numbers\" id=\"example1_paginate\">
                  <ul class=\"pagination\">
                  <li class=\"paginate_button previous disabled\" id=\"example1_previous\"><a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"0\" tabindex=\"0\">Previous</a>
                  </li>
                  <li class=\"paginate_button active\">
                  <a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"1\" tabindex=\"0\">1</a></li>
                  <li class=\"paginate_button \">
                  <a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"2\" tabindex=\"0\">2</a></li>
                  <li class=\"paginate_button \">
                  <a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"3\" tabindex=\"0\">3</a></li>
                  <li class=\"paginate_button \">
                  <a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"4\" tabindex=\"0\">4</a></li>
                  <li class=\"paginate_button \">
                  <a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"5\" tabindex=\"0\">5</a></li>
                  <li class=\"paginate_button \">
                  <a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"6\" tabindex=\"0\">6</a></li>
                  <li class=\"paginate_button next\" id=\"example1_next\">
                  <a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"7\" tabindex=\"0\">Next</a>
                  </li>
                  </ul>
                  </div>
                  </div>
                  </div>
                  </div>
                </div>
                <!-- /.box-body -->
              </div>
      {# Show an error message if user not logged in #}
      {% elseif app.user == \"\" %}
          <div class=\"alert alert-danger alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                <h4><i class=\"icon fa fa-ban\"></i> Alert!</h4>
               Sorry for that.<br>
               you shoul dlogin first or create a new account.<br><br>
               Thank you.
              </div>
      {# Show an warnning message if user not have any data in cart yet #}
      {% else %}
          <div class=\"alert alert-warning alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                <h4><i class=\"icon fa fa-warning\"></i> Alert!</h4>
                Warning, There's no data in your cart yet.
              </div>
      {% endif %}
{% endblock  %}
", "cart/show.html.twig", "/var/www/cart/app/Resources/views/cart/show.html.twig");
    }
}
