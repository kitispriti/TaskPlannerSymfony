<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_73bb52bb92187fc68ca76d26c52185ebdece4c69a8b3ff1747fa8500bc489890 extends Twig_Template
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
        $__internal_bec372a49e46a3553243d3b90093ed3b5a70de630df8f861f16d2f22984555b7 = $this->env->getExtension("native_profiler");
        $__internal_bec372a49e46a3553243d3b90093ed3b5a70de630df8f861f16d2f22984555b7->enter($__internal_bec372a49e46a3553243d3b90093ed3b5a70de630df8f861f16d2f22984555b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bec372a49e46a3553243d3b90093ed3b5a70de630df8f861f16d2f22984555b7->leave($__internal_bec372a49e46a3553243d3b90093ed3b5a70de630df8f861f16d2f22984555b7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6a236f31a02238584565d0a00035ebe8431cdedfadd9bfb87afc83f6c81a1acb = $this->env->getExtension("native_profiler");
        $__internal_6a236f31a02238584565d0a00035ebe8431cdedfadd9bfb87afc83f6c81a1acb->enter($__internal_6a236f31a02238584565d0a00035ebe8431cdedfadd9bfb87afc83f6c81a1acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_6a236f31a02238584565d0a00035ebe8431cdedfadd9bfb87afc83f6c81a1acb->leave($__internal_6a236f31a02238584565d0a00035ebe8431cdedfadd9bfb87afc83f6c81a1acb_prof);

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
