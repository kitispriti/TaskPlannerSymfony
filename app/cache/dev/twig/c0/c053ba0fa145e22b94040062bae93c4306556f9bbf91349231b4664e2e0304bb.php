<?php

/* task/new.html.twig */
class __TwigTemplate_f0f185bc5c3677f92149db37d1004942cea7e2e02b7f27559ff49aae717a6936 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "task/new.html.twig", 1);
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
        $__internal_976da7bb22bd6f27127ed7a3f27be44dfedd0c3c8112ed8c53d1096ef96b89b6 = $this->env->getExtension("native_profiler");
        $__internal_976da7bb22bd6f27127ed7a3f27be44dfedd0c3c8112ed8c53d1096ef96b89b6->enter($__internal_976da7bb22bd6f27127ed7a3f27be44dfedd0c3c8112ed8c53d1096ef96b89b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_976da7bb22bd6f27127ed7a3f27be44dfedd0c3c8112ed8c53d1096ef96b89b6->leave($__internal_976da7bb22bd6f27127ed7a3f27be44dfedd0c3c8112ed8c53d1096ef96b89b6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_828a2da817f94253b31fd39047466b5d6741d22f0138a473e5a78e182361e82a = $this->env->getExtension("native_profiler");
        $__internal_828a2da817f94253b31fd39047466b5d6741d22f0138a473e5a78e182361e82a->enter($__internal_828a2da817f94253b31fd39047466b5d6741d22f0138a473e5a78e182361e82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Task creation</h1>

    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <li class=\"list-group-item\">
            <input type=\"submit\" class=\"btn btn-success\" value=\"Create\">
        </li>
    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul class=\"list-group\">
        <li class=\"list-group-item\">
            <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("task_index");
        echo "\" class=\"btn btn-info\" role=\"button\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_828a2da817f94253b31fd39047466b5d6741d22f0138a473e5a78e182361e82a->leave($__internal_828a2da817f94253b31fd39047466b5d6741d22f0138a473e5a78e182361e82a_prof);

    }

    public function getTemplateName()
    {
        return "task/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  55 => 13,  48 => 9,  44 => 8,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* */
/* */
/* {% block body %}*/
/*     <h1>Task creation</h1>*/
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
/*             <a href="{{ path('task_index') }}" class="btn btn-info" role="button">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
