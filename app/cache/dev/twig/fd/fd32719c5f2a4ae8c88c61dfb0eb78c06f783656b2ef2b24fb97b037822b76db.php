<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_6f51d89611d6a0f7b38a6b498eb7ddfd5d397f33cddb7475f6b564ecd1cf0ca9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_125172df63c1a1e769bedf5c8a025899f88855da3690164cfc8fe99273f5881c = $this->env->getExtension("native_profiler");
        $__internal_125172df63c1a1e769bedf5c8a025899f88855da3690164cfc8fe99273f5881c->enter($__internal_125172df63c1a1e769bedf5c8a025899f88855da3690164cfc8fe99273f5881c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_125172df63c1a1e769bedf5c8a025899f88855da3690164cfc8fe99273f5881c->leave($__internal_125172df63c1a1e769bedf5c8a025899f88855da3690164cfc8fe99273f5881c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e9b4636d5085caa4f855bdce4fd6d3284e81eaec9d8fcbe8a6932f1d4c07fde4 = $this->env->getExtension("native_profiler");
        $__internal_e9b4636d5085caa4f855bdce4fd6d3284e81eaec9d8fcbe8a6932f1d4c07fde4->enter($__internal_e9b4636d5085caa4f855bdce4fd6d3284e81eaec9d8fcbe8a6932f1d4c07fde4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_e9b4636d5085caa4f855bdce4fd6d3284e81eaec9d8fcbe8a6932f1d4c07fde4->leave($__internal_e9b4636d5085caa4f855bdce4fd6d3284e81eaec9d8fcbe8a6932f1d4c07fde4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     {{ include('@FOSUser/Security/login_content.html.twig') }}*/
/* {% endblock fos_user_content %}*/
/* */
