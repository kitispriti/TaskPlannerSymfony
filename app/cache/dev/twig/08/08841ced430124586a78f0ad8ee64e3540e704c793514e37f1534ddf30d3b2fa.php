<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2550c026a446337df5273b63b2bea0873c15999a274bc6c0a2adee236fcd5c57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e38d2285195974d60d9dce57edb74c9a8e2b2c800f9b327bd1f4476f4cb4a6be = $this->env->getExtension("native_profiler");
        $__internal_e38d2285195974d60d9dce57edb74c9a8e2b2c800f9b327bd1f4476f4cb4a6be->enter($__internal_e38d2285195974d60d9dce57edb74c9a8e2b2c800f9b327bd1f4476f4cb4a6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e38d2285195974d60d9dce57edb74c9a8e2b2c800f9b327bd1f4476f4cb4a6be->leave($__internal_e38d2285195974d60d9dce57edb74c9a8e2b2c800f9b327bd1f4476f4cb4a6be_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bf82e2ced54feb5244ef4f9fd2a97cff7368fa05ed12fb65ec726cad2f0d3d21 = $this->env->getExtension("native_profiler");
        $__internal_bf82e2ced54feb5244ef4f9fd2a97cff7368fa05ed12fb65ec726cad2f0d3d21->enter($__internal_bf82e2ced54feb5244ef4f9fd2a97cff7368fa05ed12fb65ec726cad2f0d3d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bf82e2ced54feb5244ef4f9fd2a97cff7368fa05ed12fb65ec726cad2f0d3d21->leave($__internal_bf82e2ced54feb5244ef4f9fd2a97cff7368fa05ed12fb65ec726cad2f0d3d21_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ec97ac6fed283607c217762d1d0fc649ab2a3f7df445c0ebd89845dd0dec6f92 = $this->env->getExtension("native_profiler");
        $__internal_ec97ac6fed283607c217762d1d0fc649ab2a3f7df445c0ebd89845dd0dec6f92->enter($__internal_ec97ac6fed283607c217762d1d0fc649ab2a3f7df445c0ebd89845dd0dec6f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ec97ac6fed283607c217762d1d0fc649ab2a3f7df445c0ebd89845dd0dec6f92->leave($__internal_ec97ac6fed283607c217762d1d0fc649ab2a3f7df445c0ebd89845dd0dec6f92_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_39341d1075f4254c20e66ebce4efd9b936085dc3c3788e42ef1348353b2fdc4c = $this->env->getExtension("native_profiler");
        $__internal_39341d1075f4254c20e66ebce4efd9b936085dc3c3788e42ef1348353b2fdc4c->enter($__internal_39341d1075f4254c20e66ebce4efd9b936085dc3c3788e42ef1348353b2fdc4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_39341d1075f4254c20e66ebce4efd9b936085dc3c3788e42ef1348353b2fdc4c->leave($__internal_39341d1075f4254c20e66ebce4efd9b936085dc3c3788e42ef1348353b2fdc4c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
