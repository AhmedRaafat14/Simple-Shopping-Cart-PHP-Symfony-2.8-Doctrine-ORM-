<?php

/* product/all.html.twig */
class __TwigTemplate_e87540ccdeba325db44fc349699ca48a24c29836576f574423b805171fa4d9b9 extends Twig_Template
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
        $__internal_93f3f6fc05a4127aef6f72c32ddba7d889a51ee3d0470e775a71bafa3c9a7a8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93f3f6fc05a4127aef6f72c32ddba7d889a51ee3d0470e775a71bafa3c9a7a8c->enter($__internal_93f3f6fc05a4127aef6f72c32ddba7d889a51ee3d0470e775a71bafa3c9a7a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93f3f6fc05a4127aef6f72c32ddba7d889a51ee3d0470e775a71bafa3c9a7a8c->leave($__internal_93f3f6fc05a4127aef6f72c32ddba7d889a51ee3d0470e775a71bafa3c9a7a8c_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_365eafbaf8925b4de42c28088e9d58c5024e0539a085bfbeb3f3720da8ceda28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_365eafbaf8925b4de42c28088e9d58c5024e0539a085bfbeb3f3720da8ceda28->enter($__internal_365eafbaf8925b4de42c28088e9d58c5024e0539a085bfbeb3f3720da8ceda28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Products
";
        
        $__internal_365eafbaf8925b4de42c28088e9d58c5024e0539a085bfbeb3f3720da8ceda28->leave($__internal_365eafbaf8925b4de42c28088e9d58c5024e0539a085bfbeb3f3720da8ceda28_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_529876ef1bc2a110641eaa978014700c93c08b2b60cb344db70ca2210bd89a90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_529876ef1bc2a110641eaa978014700c93c08b2b60cb344db70ca2210bd89a90->enter($__internal_529876ef1bc2a110641eaa978014700c93c08b2b60cb344db70ca2210bd89a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 10
        echo "  Products
";
        
        $__internal_529876ef1bc2a110641eaa978014700c93c08b2b60cb344db70ca2210bd89a90->leave($__internal_529876ef1bc2a110641eaa978014700c93c08b2b60cb344db70ca2210bd89a90_prof);

    }

    // line 15
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_6ca3ac4f0fb611cc7683edb944b0d4443597283fed0358dbc9e80af83c2c57fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ca3ac4f0fb611cc7683edb944b0d4443597283fed0358dbc9e80af83c2c57fd->enter($__internal_6ca3ac4f0fb611cc7683edb944b0d4443597283fed0358dbc9e80af83c2c57fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

        // line 16
        echo "<li class=\"treeview active\">
<br><br><br>
    <form action='";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show products");
        echo "'>
      <button type=\"button\" class=\"btn btn-block btn-primary btn-sm\">Products</button>
    </form>
<br>
    <form action=''>
      <button type=\"submit\" class=\"btn btn-block btn-primary btn-sm\">Cart</button>
    </form>
</li>

";
        
        $__internal_6ca3ac4f0fb611cc7683edb944b0d4443597283fed0358dbc9e80af83c2c57fd->leave($__internal_6ca3ac4f0fb611cc7683edb944b0d4443597283fed0358dbc9e80af83c2c57fd_prof);

    }

    // line 30
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_12bddc0558fe06070dfafa9775b80d0bb4a69522c3c2990f1c9222da391b0401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12bddc0558fe06070dfafa9775b80d0bb4a69522c3c2990f1c9222da391b0401->enter($__internal_12bddc0558fe06070dfafa9775b80d0bb4a69522c3c2990f1c9222da391b0401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 31
        echo "
";
        // line 33
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 34
            echo "    <div class=\"col-md-3 col-sm-6 col-xs-12\">
    <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show product", array("productId" => $this->getAttribute($context["product"], "getId", array(), "method"))), "html", null, true);
            echo "\" class=\"small-box-footer\">
            <div class=\"info-box\">
              <span class=\"info-box-icon bg-gray\">
              <img style='align:center; width: 80px; height: 50px' src='";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("bundles/uploads/" . $this->getAttribute($context["product"], "getPath", array(), "method"))), "html", null, true);
            echo "' alt='' />
            </span>
      </a>

              <div class=\"info-box-content\">
                <span class=\"info-box-text\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getName", array(), "method"), "html", null, true);
            echo "</span>
                <span class=\"info-box-number\">";
            // line 44
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
        
        $__internal_12bddc0558fe06070dfafa9775b80d0bb4a69522c3c2990f1c9222da391b0401->leave($__internal_12bddc0558fe06070dfafa9775b80d0bb4a69522c3c2990f1c9222da391b0401_prof);

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
        return array (  127 => 44,  123 => 43,  115 => 38,  109 => 35,  106 => 34,  101 => 33,  98 => 31,  92 => 30,  75 => 18,  71 => 16,  65 => 15,  57 => 10,  51 => 9,  43 => 5,  37 => 4,  11 => 1,);
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
<br><br><br>
    <form action='{{ path('show products') }}'>
      <button type=\"button\" class=\"btn btn-block btn-primary btn-sm\">Products</button>
    </form>
<br>
    <form action=''>
      <button type=\"submit\" class=\"btn btn-block btn-primary btn-sm\">Cart</button>
    </form>
</li>

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
", "product/all.html.twig", "/var/www/blog/app/Resources/views/product/all.html.twig");
    }
}
