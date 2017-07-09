<?php

/* category/new.html.twig */
class __TwigTemplate_c50b036d9e922f07a14c6f287415c322bb5a826bcfa659c100a39bab04eed378 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "category/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f6bbe8a447f2029b49b3eb4177097c79b04c5fb08e9463a88d3984bf69c0a0a = $this->env->getExtension("native_profiler");
        $__internal_5f6bbe8a447f2029b49b3eb4177097c79b04c5fb08e9463a88d3984bf69c0a0a->enter($__internal_5f6bbe8a447f2029b49b3eb4177097c79b04c5fb08e9463a88d3984bf69c0a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f6bbe8a447f2029b49b3eb4177097c79b04c5fb08e9463a88d3984bf69c0a0a->leave($__internal_5f6bbe8a447f2029b49b3eb4177097c79b04c5fb08e9463a88d3984bf69c0a0a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4486dc5e53b39041f87097b149f5a8a27e40c3998582ecaef3e67f93ec3e7cae = $this->env->getExtension("native_profiler");
        $__internal_4486dc5e53b39041f87097b149f5a8a27e40c3998582ecaef3e67f93ec3e7cae->enter($__internal_4486dc5e53b39041f87097b149f5a8a27e40c3998582ecaef3e67f93ec3e7cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Category creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <li class=\"list-group-item\">
            <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("category_new");
        echo "\" class=\"btn btn-success\" role=\"button\">Create</a>
        </li>
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul class=\"list-group\">
        <li class=\"list-group-item\">
            <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("category_index");
        echo "\" class=\"btn btn-info\" role=\"button\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_4486dc5e53b39041f87097b149f5a8a27e40c3998582ecaef3e67f93ec3e7cae->leave($__internal_4486dc5e53b39041f87097b149f5a8a27e40c3998582ecaef3e67f93ec3e7cae_prof);

    }

    public function getTemplateName()
    {
        return "category/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  58 => 11,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Category creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <li class="list-group-item">*/
/*             <a href="{{ path('category_new') }}" class="btn btn-success" role="button">Create</a>*/
/*         </li>*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul class="list-group">*/
/*         <li class="list-group-item">*/
/*             <a href="{{ path('category_index') }}" class="btn btn-info" role="button">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
