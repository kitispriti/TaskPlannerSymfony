<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4789cf890a7a3e0711c4ca36664f2c01515b2ddd7bb552cc653229e05beee961 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a0e32aa1612021902e8bdd08e5d39e1c46e71ba54d5e9d0e45d769dac080e43 = $this->env->getExtension("native_profiler");
        $__internal_7a0e32aa1612021902e8bdd08e5d39e1c46e71ba54d5e9d0e45d769dac080e43->enter($__internal_7a0e32aa1612021902e8bdd08e5d39e1c46e71ba54d5e9d0e45d769dac080e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a0e32aa1612021902e8bdd08e5d39e1c46e71ba54d5e9d0e45d769dac080e43->leave($__internal_7a0e32aa1612021902e8bdd08e5d39e1c46e71ba54d5e9d0e45d769dac080e43_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_642a265223ec12eeb5c6c0864be95769c82d4800794810ef3f2d3d1eb7461342 = $this->env->getExtension("native_profiler");
        $__internal_642a265223ec12eeb5c6c0864be95769c82d4800794810ef3f2d3d1eb7461342->enter($__internal_642a265223ec12eeb5c6c0864be95769c82d4800794810ef3f2d3d1eb7461342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_642a265223ec12eeb5c6c0864be95769c82d4800794810ef3f2d3d1eb7461342->leave($__internal_642a265223ec12eeb5c6c0864be95769c82d4800794810ef3f2d3d1eb7461342_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c3792117737fac56033cad8002195916b824a68141dd28c7d9b93def9674a9d = $this->env->getExtension("native_profiler");
        $__internal_9c3792117737fac56033cad8002195916b824a68141dd28c7d9b93def9674a9d->enter($__internal_9c3792117737fac56033cad8002195916b824a68141dd28c7d9b93def9674a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9c3792117737fac56033cad8002195916b824a68141dd28c7d9b93def9674a9d->leave($__internal_9c3792117737fac56033cad8002195916b824a68141dd28c7d9b93def9674a9d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_da52d488981c08b5e59ef3195320daf3edfb37d32bc766bbee22809beb533eba = $this->env->getExtension("native_profiler");
        $__internal_da52d488981c08b5e59ef3195320daf3edfb37d32bc766bbee22809beb533eba->enter($__internal_da52d488981c08b5e59ef3195320daf3edfb37d32bc766bbee22809beb533eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_da52d488981c08b5e59ef3195320daf3edfb37d32bc766bbee22809beb533eba->leave($__internal_da52d488981c08b5e59ef3195320daf3edfb37d32bc766bbee22809beb533eba_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
