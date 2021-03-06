<?php

/* AvanzuAdminThemeBundle:layout:base-layout.html.twig */
class __TwigTemplate_168f48a7a5951b56ffe22edb31cc8dc2ec916fbbe8af8edb239cc8c2772cdaa0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts_head' => array($this, 'block_javascripts_head'),
            'avanzu_admin_header' => array($this, 'block_avanzu_admin_header'),
            'avanzu_logo' => array($this, 'block_avanzu_logo'),
            'avanzu_navbar' => array($this, 'block_avanzu_navbar'),
            'avanzu_sidebar' => array($this, 'block_avanzu_sidebar'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'avanzu_breadcrumb' => array($this, 'block_avanzu_breadcrumb'),
            'page_content' => array($this, 'block_page_content'),
            'avanzu_admin_footer' => array($this, 'block_avanzu_admin_footer'),
            'javascripts' => array($this, 'block_javascripts'),
            'javascripts_inline' => array($this, 'block_javascripts_inline'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_865c80919816059c0cc294831a72c0cd075431ee2dc65e128cc7712c4b76f6ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_865c80919816059c0cc294831a72c0cd075431ee2dc65e128cc7712c4b76f6ca->enter($__internal_865c80919816059c0cc294831a72c0cd075431ee2dc65e128cc7712c4b76f6ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:base-layout.html.twig"));

        // line 1
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "AvanzuAdminThemeBundle:layout:base-layout.html.twig", 1);
        // line 2
        echo "<!doctype html>
<!--[if lt IE 7 ]><html lang=\"en\" class=\"no-js ie6\"> <![endif]-->
<!--[if IE 7 ]><html lang=\"en\" class=\"no-js ie7\"> <![endif]-->
<!--[if IE 8 ]><html lang=\"en\" class=\"no-js ie8\"> <![endif]-->
<!--[if IE 9 ]><html lang=\"en\" class=\"no-js ie9\"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang=\"en\" class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 16
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "

    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    ";
        // line 24
        echo "    ";
        $this->displayBlock('javascripts_head', $context, $blocks);
        // line 31
        echo "
</head>
<body class=\"";
        // line 33
        echo twig_escape_filter($this->env, ((array_key_exists("admin_skin", $context)) ? (_twig_default_filter((isset($context["admin_skin"]) ? $context["admin_skin"] : $this->getContext($context, "admin_skin")), "skin-blue")) : ("skin-blue")), "html", null, true);
        echo "\">
    <div class=\"wrapper\">

    ";
        // line 36
        $this->displayBlock('avanzu_admin_header', $context, $blocks);
        // line 65
        echo "
        <!-- Left side column. contains the logo and sidebar -->
        <aside class=\"main-sidebar sidebar-offcanvas\">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class=\"sidebar\">
                ";
        // line 70
        $this->displayBlock('avanzu_sidebar', $context, $blocks);
        // line 77
        echo "            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Right side column. Contains the navbar and content of the page -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">
                <h1>
                    ";
        // line 86
        $this->displayBlock('page_title', $context, $blocks);
        // line 87
        echo "                    <small>";
        $this->displayBlock('page_subtitle', $context, $blocks);
        echo "</small>
                </h1>
                ";
        // line 89
        $this->displayBlock('avanzu_breadcrumb', $context, $blocks);
        // line 92
        echo "            </section>

            <!-- Main content -->
            <section class=\"content\">
                ";
        // line 96
        $this->displayBlock('page_content', $context, $blocks);
        // line 97
        echo "            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    ";
        // line 102
        $this->displayBlock('avanzu_admin_footer', $context, $blocks);
        // line 110
        echo "
    </div>
<!-- ./wrapper -->

";
        // line 115
        $this->displayBlock('javascripts', $context, $blocks);
        // line 120
        echo "
";
        // line 122
        $this->displayBlock('javascripts_inline', $context, $blocks);
        // line 124
        echo "</body>
</html>
";
        
        $__internal_865c80919816059c0cc294831a72c0cd075431ee2dc65e128cc7712c4b76f6ca->leave($__internal_865c80919816059c0cc294831a72c0cd075431ee2dc65e128cc7712c4b76f6ca_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_a98dd07aa5d554f57c7691de64238d6caa51191cb5f137289a182dee6ca02b1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a98dd07aa5d554f57c7691de64238d6caa51191cb5f137289a182dee6ca02b1a->enter($__internal_a98dd07aa5d554f57c7691de64238d6caa51191cb5f137289a182dee6ca02b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Avanzu Admin!";
        
        $__internal_a98dd07aa5d554f57c7691de64238d6caa51191cb5f137289a182dee6ca02b1a->leave($__internal_a98dd07aa5d554f57c7691de64238d6caa51191cb5f137289a182dee6ca02b1a_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1041148ade3a031b696bf35a96cf0320c7af306a4b7990c10aa0ff187040927c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1041148ade3a031b696bf35a96cf0320c7af306a4b7990c10aa0ff187040927c->enter($__internal_1041148ade3a031b696bf35a96cf0320c7af306a4b7990c10aa0ff187040927c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
    ";
        
        $__internal_1041148ade3a031b696bf35a96cf0320c7af306a4b7990c10aa0ff187040927c->leave($__internal_1041148ade3a031b696bf35a96cf0320c7af306a4b7990c10aa0ff187040927c_prof);

    }

    // line 24
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_ca6aede6c4930129625148fa027cc14fa9a1b8157447d1d74ec3c61d26dbb643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca6aede6c4930129625148fa027cc14fa9a1b8157447d1d74ec3c61d26dbb643->enter($__internal_ca6aede6c4930129625148fa027cc14fa9a1b8157447d1d74ec3c61d26dbb643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 25
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
        
        $__internal_ca6aede6c4930129625148fa027cc14fa9a1b8157447d1d74ec3c61d26dbb643->leave($__internal_ca6aede6c4930129625148fa027cc14fa9a1b8157447d1d74ec3c61d26dbb643_prof);

    }

    // line 36
    public function block_avanzu_admin_header($context, array $blocks = array())
    {
        $__internal_ae138767bee90547e10f1575cbd3042c7f7fb51f820835c88794f874dd6b8684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae138767bee90547e10f1575cbd3042c7f7fb51f820835c88794f874dd6b8684->enter($__internal_ae138767bee90547e10f1575cbd3042c7f7fb51f820835c88794f874dd6b8684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

        // line 37
        echo "        <header class=\"main-header\">
            ";
        // line 38
        $this->displayBlock('avanzu_logo', $context, $blocks);
        // line 44
        echo "            <!-- Header Navbar: style can be found in header.less -->
            <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                <!-- Sidebar toggle button-->
                <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                    <span class=\"sr-only\">Toggle navigation</span>
                </a>
                ";
        // line 50
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 51
            echo "                    <div class=\"navbar-custom-menu\">
                        <ul class=\"nav navbar-nav\">
                            ";
            // line 53
            $this->displayBlock('avanzu_navbar', $context, $blocks);
            // line 59
            echo "                        </ul>
                    </div>
                ";
        }
        // line 62
        echo "            </nav>
        </header>
    ";
        
        $__internal_ae138767bee90547e10f1575cbd3042c7f7fb51f820835c88794f874dd6b8684->leave($__internal_ae138767bee90547e10f1575cbd3042c7f7fb51f820835c88794f874dd6b8684_prof);

    }

    // line 38
    public function block_avanzu_logo($context, array $blocks = array())
    {
        $__internal_a5755d55f23a886c5936d00ea3f534812814be0000030071d451b43aebe0adfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5755d55f23a886c5936d00ea3f534812814be0000030071d451b43aebe0adfb->enter($__internal_a5755d55f23a886c5936d00ea3f534812814be0000030071d451b43aebe0adfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

        // line 39
        echo "                <a href=\"#\" class=\"logo\">
                    <!-- Add the class icon to your logo image or logo icon to add the margining -->
                    ";
        // line 41
        $this->displayBlock("title", $context, $blocks);
        echo "
                </a>
            ";
        
        $__internal_a5755d55f23a886c5936d00ea3f534812814be0000030071d451b43aebe0adfb->leave($__internal_a5755d55f23a886c5936d00ea3f534812814be0000030071d451b43aebe0adfb_prof);

    }

    // line 53
    public function block_avanzu_navbar($context, array $blocks = array())
    {
        $__internal_a96494e060c24ef8cf14c1c680244bc9a95aea0416bf02e0228b6f5185716dbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a96494e060c24ef8cf14c1c680244bc9a95aea0416bf02e0228b6f5185716dbf->enter($__internal_a96494e060c24ef8cf14c1c680244bc9a95aea0416bf02e0228b6f5185716dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_navbar"));

        // line 54
        echo "                                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:messages"));
        echo "
                                ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:notifications"));
        echo "
                                ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:tasks"));
        echo "
                                ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:user"));
        echo "
                            ";
        
        $__internal_a96494e060c24ef8cf14c1c680244bc9a95aea0416bf02e0228b6f5185716dbf->leave($__internal_a96494e060c24ef8cf14c1c680244bc9a95aea0416bf02e0228b6f5185716dbf_prof);

    }

    // line 70
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_df63401baa6721d425ba972ad636166773cb8b62352916bd6bea8219a3622140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df63401baa6721d425ba972ad636166773cb8b62352916bd6bea8219a3622140->enter($__internal_df63401baa6721d425ba972ad636166773cb8b62352916bd6bea8219a3622140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

        // line 71
        echo "                    ";
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 72
            echo "                        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Sidebar:userPanel"));
            echo "
                        ";
            // line 73
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Sidebar:searchForm"));
            echo "
                    ";
        }
        // line 75
        echo "                    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Sidebar:menu", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()))));
        echo "
                ";
        
        $__internal_df63401baa6721d425ba972ad636166773cb8b62352916bd6bea8219a3622140->leave($__internal_df63401baa6721d425ba972ad636166773cb8b62352916bd6bea8219a3622140_prof);

    }

    // line 86
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_a633d60bb4a178238e4cdc8cda35af0e88f5fbe5d438d3e45efa50511fa50be1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a633d60bb4a178238e4cdc8cda35af0e88f5fbe5d438d3e45efa50511fa50be1->enter($__internal_a633d60bb4a178238e4cdc8cda35af0e88f5fbe5d438d3e45efa50511fa50be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Blank page";
        
        $__internal_a633d60bb4a178238e4cdc8cda35af0e88f5fbe5d438d3e45efa50511fa50be1->leave($__internal_a633d60bb4a178238e4cdc8cda35af0e88f5fbe5d438d3e45efa50511fa50be1_prof);

    }

    // line 87
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_9eb1c28b5c2dcfb45bb1b5e5eb5255e96e51c1ba65b40ae7b2dfe8f43ad97d3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eb1c28b5c2dcfb45bb1b5e5eb5255e96e51c1ba65b40ae7b2dfe8f43ad97d3c->enter($__internal_9eb1c28b5c2dcfb45bb1b5e5eb5255e96e51c1ba65b40ae7b2dfe8f43ad97d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Browse All";
        
        $__internal_9eb1c28b5c2dcfb45bb1b5e5eb5255e96e51c1ba65b40ae7b2dfe8f43ad97d3c->leave($__internal_9eb1c28b5c2dcfb45bb1b5e5eb5255e96e51c1ba65b40ae7b2dfe8f43ad97d3c_prof);

    }

    // line 89
    public function block_avanzu_breadcrumb($context, array $blocks = array())
    {
        $__internal_b2b2d8acb52c1ff073a43e19c95ce8dd3e273d450b5749f62b40c2423ff83012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2b2d8acb52c1ff073a43e19c95ce8dd3e273d450b5749f62b40c2423ff83012->enter($__internal_b2b2d8acb52c1ff073a43e19c95ce8dd3e273d450b5749f62b40c2423ff83012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_breadcrumb"));

        // line 90
        echo "                    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Breadcrumb:breadcrumb", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "title" =>         $this->renderBlock("page_title", $context, $blocks))));
        echo "
                ";
        
        $__internal_b2b2d8acb52c1ff073a43e19c95ce8dd3e273d450b5749f62b40c2423ff83012->leave($__internal_b2b2d8acb52c1ff073a43e19c95ce8dd3e273d450b5749f62b40c2423ff83012_prof);

    }

    // line 96
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_4427cfaf7631d636535ca1fff882f4b425028aacc5b31b63d1f8c5bf046cd9b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4427cfaf7631d636535ca1fff882f4b425028aacc5b31b63d1f8c5bf046cd9b1->enter($__internal_4427cfaf7631d636535ca1fff882f4b425028aacc5b31b63d1f8c5bf046cd9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_4427cfaf7631d636535ca1fff882f4b425028aacc5b31b63d1f8c5bf046cd9b1->leave($__internal_4427cfaf7631d636535ca1fff882f4b425028aacc5b31b63d1f8c5bf046cd9b1_prof);

    }

    // line 102
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        $__internal_d217287d55879dc68464b758d5097a1c0a8382a77ca220f7c91d3563712d3ade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d217287d55879dc68464b758d5097a1c0a8382a77ca220f7c91d3563712d3ade->enter($__internal_d217287d55879dc68464b758d5097a1c0a8382a77ca220f7c91d3563712d3ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        // line 103
        echo "        <footer class=\"main-footer\">
            <div class=\"pull-right hidden-xs\">
                <b>Version</b> 2.0
            </div>
            <strong>Copyright &copy; 2014-2015 <a href=\"https://www.facebook.com/ahmedraafat1412\" target=\"_blank\">Ahmad Raafat</a>.</strong> All rights reserved.
        </footer>
    ";
        
        $__internal_d217287d55879dc68464b758d5097a1c0a8382a77ca220f7c91d3563712d3ade->leave($__internal_d217287d55879dc68464b758d5097a1c0a8382a77ca220f7c91d3563712d3ade_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8f71527d01479eb0ac32113c33898db1f7eaff29aab780adec76c1e3b9b28163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f71527d01479eb0ac32113c33898db1f7eaff29aab780adec76c1e3b9b28163->enter($__internal_8f71527d01479eb0ac32113c33898db1f7eaff29aab780adec76c1e3b9b28163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 116
        echo "
    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>

";
        
        $__internal_8f71527d01479eb0ac32113c33898db1f7eaff29aab780adec76c1e3b9b28163->leave($__internal_8f71527d01479eb0ac32113c33898db1f7eaff29aab780adec76c1e3b9b28163_prof);

    }

    // line 122
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_026d0f34ad605162c846a575efaebe438813bf5c9687f3a748b3d6f016099126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_026d0f34ad605162c846a575efaebe438813bf5c9687f3a748b3d6f016099126->enter($__internal_026d0f34ad605162c846a575efaebe438813bf5c9687f3a748b3d6f016099126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_026d0f34ad605162c846a575efaebe438813bf5c9687f3a748b3d6f016099126->leave($__internal_026d0f34ad605162c846a575efaebe438813bf5c9687f3a748b3d6f016099126_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 122,  397 => 117,  394 => 116,  388 => 115,  375 => 103,  369 => 102,  358 => 96,  348 => 90,  342 => 89,  330 => 87,  318 => 86,  308 => 75,  303 => 73,  298 => 72,  295 => 71,  289 => 70,  280 => 57,  276 => 56,  272 => 55,  267 => 54,  261 => 53,  251 => 41,  247 => 39,  241 => 38,  232 => 62,  227 => 59,  225 => 53,  221 => 51,  219 => 50,  211 => 44,  209 => 38,  206 => 37,  200 => 36,  186 => 25,  180 => 24,  170 => 17,  164 => 16,  152 => 13,  143 => 124,  141 => 122,  138 => 120,  136 => 115,  130 => 110,  128 => 102,  121 => 97,  119 => 96,  113 => 92,  111 => 89,  105 => 87,  103 => 86,  92 => 77,  90 => 70,  83 => 65,  81 => 36,  75 => 33,  71 => 31,  68 => 24,  63 => 21,  59 => 19,  56 => 16,  51 => 13,  38 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"AvanzuAdminThemeBundle:layout:macros.html.twig\" as macro %}
<!doctype html>
<!--[if lt IE 7 ]><html lang=\"en\" class=\"no-js ie6\"> <![endif]-->
<!--[if IE 7 ]><html lang=\"en\" class=\"no-js ie7\"> <![endif]-->
<!--[if IE 8 ]><html lang=\"en\" class=\"no-js ie8\"> <![endif]-->
<!--[if IE 9 ]><html lang=\"en\" class=\"no-js ie9\"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang=\"en\" class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>{% block title %}Avanzu Admin!{% endblock %}</title>

    {# -------------------------------------------------------------------------------------------------- STYLESHEETS #}
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/styles/admin-lte-all.css') }}\" />
    {% endblock %}


    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

    {# --------------------------------------------------------------------------------------------- JAVASCRIPTS_HEAD #}
    {%  block javascripts_head %}
        <script type=\"text/javascript\" src=\"{{ asset('bundles/avanzuadmintheme/static/'~app.environment~'/scripts/modernizr.js') }}\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    {% endblock %}

</head>
<body class=\"{{ admin_skin|default('skin-blue')}}\">
    <div class=\"wrapper\">

    {% block avanzu_admin_header %}
        <header class=\"main-header\">
            {% block avanzu_logo %}
                <a href=\"#\" class=\"logo\">
                    <!-- Add the class icon to your logo image or logo icon to add the margining -->
                    {{ block('title') }}
                </a>
            {% endblock %}
            <!-- Header Navbar: style can be found in header.less -->
            <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                <!-- Sidebar toggle button-->
                <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                    <span class=\"sr-only\">Toggle navigation</span>
                </a>
                {% if app.user is not null and is_granted('IS_AUTHENTICATED_FULLY') %}
                    <div class=\"navbar-custom-menu\">
                        <ul class=\"nav navbar-nav\">
                            {% block avanzu_navbar %}
                                {{ render(controller('AvanzuAdminThemeBundle:Navbar:messages')) }}
                                {{ render(controller('AvanzuAdminThemeBundle:Navbar:notifications')) }}
                                {{ render(controller('AvanzuAdminThemeBundle:Navbar:tasks')) }}
                                {{ render(controller('AvanzuAdminThemeBundle:Navbar:user')) }}
                            {% endblock %}
                        </ul>
                    </div>
                {% endif %}
            </nav>
        </header>
    {% endblock %}

        <!-- Left side column. contains the logo and sidebar -->
        <aside class=\"main-sidebar sidebar-offcanvas\">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class=\"sidebar\">
                {% block avanzu_sidebar %}
                    {% if app.user is not null and is_granted('IS_AUTHENTICATED_FULLY') %}
                        {{ render(controller('AvanzuAdminThemeBundle:Sidebar:userPanel')) }}
                        {{ render(controller('AvanzuAdminThemeBundle:Sidebar:searchForm')) }}
                    {% endif %}
                    {{ render(controller('AvanzuAdminThemeBundle:Sidebar:menu', {'request':app.request})) }}
                {% endblock %}
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Right side column. Contains the navbar and content of the page -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">
                <h1>
                    {% block page_title %}Blank page{% endblock %}
                    <small>{% block page_subtitle %}Browse All{% endblock %}</small>
                </h1>
                {% block avanzu_breadcrumb %}
                    {{ render(controller('AvanzuAdminThemeBundle:Breadcrumb:breadcrumb', {'request':app.request, 'title' : block('page_title')})) }}
                {% endblock %}
            </section>

            <!-- Main content -->
            <section class=\"content\">
                {% block page_content %}{% endblock %}
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    {% block avanzu_admin_footer %}
        <footer class=\"main-footer\">
            <div class=\"pull-right hidden-xs\">
                <b>Version</b> 2.0
            </div>
            <strong>Copyright &copy; 2014-2015 <a href=\"https://www.facebook.com/ahmedraafat1412\" target=\"_blank\">Ahmad Raafat</a>.</strong> All rights reserved.
        </footer>
    {% endblock %}

    </div>
<!-- ./wrapper -->

{# ------------------------------------------------------------------------------------------------------ JAVASCRIPTS #}
{% block javascripts %}

    <script src=\"{{ asset('bundles/avanzuadmintheme/static/'~app.environment~'/scripts/admin-lte-all.js') }}\"></script>

{% endblock %}

{# ----------------------------------------------------------------------------------------------- JAVASCRIPTS_INLINE #}
{% block javascripts_inline %}
{% endblock %}
</body>
</html>
", "AvanzuAdminThemeBundle:layout:base-layout.html.twig", "/var/www/cart/vendor/avanzu/admin-theme-bundle/Resources/views/layout/base-layout.html.twig");
    }
}
