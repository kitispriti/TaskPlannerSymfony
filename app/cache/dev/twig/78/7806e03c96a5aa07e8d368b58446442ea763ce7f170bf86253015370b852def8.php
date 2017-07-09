<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_38079ae93551a8096aef0f26d973736a272f8e59c24cee9575c1d92df9ed5ba7 extends Twig_Template
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
        $__internal_22d6b74de9ebf652720f6ae6a5dd853e9d54d9c1820668b863a9fe53e1da227f = $this->env->getExtension("native_profiler");
        $__internal_22d6b74de9ebf652720f6ae6a5dd853e9d54d9c1820668b863a9fe53e1da227f->enter($__internal_22d6b74de9ebf652720f6ae6a5dd853e9d54d9c1820668b863a9fe53e1da227f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22d6b74de9ebf652720f6ae6a5dd853e9d54d9c1820668b863a9fe53e1da227f->leave($__internal_22d6b74de9ebf652720f6ae6a5dd853e9d54d9c1820668b863a9fe53e1da227f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a3c3132f5e81cdcae4943e941fabc8e29c841125976e15f3c18010a08a9a3413 = $this->env->getExtension("native_profiler");
        $__internal_a3c3132f5e81cdcae4943e941fabc8e29c841125976e15f3c18010a08a9a3413->enter($__internal_a3c3132f5e81cdcae4943e941fabc8e29c841125976e15f3c18010a08a9a3413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_a3c3132f5e81cdcae4943e941fabc8e29c841125976e15f3c18010a08a9a3413->leave($__internal_a3c3132f5e81cdcae4943e941fabc8e29c841125976e15f3c18010a08a9a3413_prof);

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
