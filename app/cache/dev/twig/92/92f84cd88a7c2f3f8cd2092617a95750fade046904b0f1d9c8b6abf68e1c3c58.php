<?php

/* comments/new.html.twig */
class __TwigTemplate_0890c06059c40818bd6ca4c9da62ef68e7846e9bcd9768dfeae466fc7fcd35c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "comments/new.html.twig", 1);
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
        $__internal_dfeec2bae79c5985e269ed23da744bc855abfdeebb22db462689e02a556544c9 = $this->env->getExtension("native_profiler");
        $__internal_dfeec2bae79c5985e269ed23da744bc855abfdeebb22db462689e02a556544c9->enter($__internal_dfeec2bae79c5985e269ed23da744bc855abfdeebb22db462689e02a556544c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "comments/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfeec2bae79c5985e269ed23da744bc855abfdeebb22db462689e02a556544c9->leave($__internal_dfeec2bae79c5985e269ed23da744bc855abfdeebb22db462689e02a556544c9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_094eea380f263a41c6435c5b7ed3d50e49673a8d43ee0bc2af801e4c217c897d = $this->env->getExtension("native_profiler");
        $__internal_094eea380f263a41c6435c5b7ed3d50e49673a8d43ee0bc2af801e4c217c897d->enter($__internal_094eea380f263a41c6435c5b7ed3d50e49673a8d43ee0bc2af801e4c217c897d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comments creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <li class=\"list-group-item\">
            <input type=\"submit\" class=\"btn btn-success\" value=\"Create\">
        </li>
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul class=\"list-group\">
        <li class=\"list-group-item\">
            <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("comments_index");
        echo "\" class=\"btn btn-info\" role=\"button\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_094eea380f263a41c6435c5b7ed3d50e49673a8d43ee0bc2af801e4c217c897d->leave($__internal_094eea380f263a41c6435c5b7ed3d50e49673a8d43ee0bc2af801e4c217c897d_prof);

    }

    public function getTemplateName()
    {
        return "comments/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 15,  55 => 11,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Comments creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <li class="list-group-item">*/
/*             <input type="submit" class="btn btn-success" value="Create">*/
/*         </li>*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul class="list-group">*/
/*         <li class="list-group-item">*/
/*             <a href="{{ path('comments_index') }}" class="btn btn-info" role="button">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
