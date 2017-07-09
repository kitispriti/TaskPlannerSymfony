<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_2ce6380cb95633406279e658526fe0d6ed7d4a32d5d0afe37aa15ef1823e115e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_52bc3ab64e764c1d983f7b00a1d416870f3bbf28c562d7224cfa367da7f2a438 = $this->env->getExtension("native_profiler");
        $__internal_52bc3ab64e764c1d983f7b00a1d416870f3bbf28c562d7224cfa367da7f2a438->enter($__internal_52bc3ab64e764c1d983f7b00a1d416870f3bbf28c562d7224cfa367da7f2a438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52bc3ab64e764c1d983f7b00a1d416870f3bbf28c562d7224cfa367da7f2a438->leave($__internal_52bc3ab64e764c1d983f7b00a1d416870f3bbf28c562d7224cfa367da7f2a438_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_24094536f26d185f858e86b01a6c736c292c342d01eccb171f8f48369ec57ef9 = $this->env->getExtension("native_profiler");
        $__internal_24094536f26d185f858e86b01a6c736c292c342d01eccb171f8f48369ec57ef9->enter($__internal_24094536f26d185f858e86b01a6c736c292c342d01eccb171f8f48369ec57ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_24094536f26d185f858e86b01a6c736c292c342d01eccb171f8f48369ec57ef9->leave($__internal_24094536f26d185f858e86b01a6c736c292c342d01eccb171f8f48369ec57ef9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "@FOSUser/Registration/register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
