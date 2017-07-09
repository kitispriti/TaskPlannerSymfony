<?php

/* task/edit.html.twig */
class __TwigTemplate_3ef4489744f020fb6ea2129594d4d1fa1b94240013876ada337fa9ad5a6fac14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "task/edit.html.twig", 1);
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
        $__internal_7503c579874c81b7664c3d5ff634cba4f9d49fd9e5a9cc8658f144e56efb3b2d = $this->env->getExtension("native_profiler");
        $__internal_7503c579874c81b7664c3d5ff634cba4f9d49fd9e5a9cc8658f144e56efb3b2d->enter($__internal_7503c579874c81b7664c3d5ff634cba4f9d49fd9e5a9cc8658f144e56efb3b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7503c579874c81b7664c3d5ff634cba4f9d49fd9e5a9cc8658f144e56efb3b2d->leave($__internal_7503c579874c81b7664c3d5ff634cba4f9d49fd9e5a9cc8658f144e56efb3b2d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_494a7e74ec9fbb837c93c7f54b9a43ad0ff651306c584f92a339415b903ea1af = $this->env->getExtension("native_profiler");
        $__internal_494a7e74ec9fbb837c93c7f54b9a43ad0ff651306c584f92a339415b903ea1af->enter($__internal_494a7e74ec9fbb837c93c7f54b9a43ad0ff651306c584f92a339415b903ea1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Task edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
    ";
        // line 9
        echo "
    <label class=\"checkbox-inline\"><input type=\"checkbox\" value=\"task.done\">Done</label>
    ";
        // line 12
        echo "    <li class=\"list-group-item\">
        <input type=\"submit\" class=\"btn btn-success\" value=\"Edit\">
    </li>
    ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul class=\"list-group\">
        <li class=\"list-group-item\">
            <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("task_index");
        echo "\" class=\"btn btn-info\" role=\"button\">Back to the list</a>
        </li>
        <li class=\"list-group-item\">
            ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
            ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_494a7e74ec9fbb837c93c7f54b9a43ad0ff651306c584f92a339415b903ea1af->leave($__internal_494a7e74ec9fbb837c93c7f54b9a43ad0ff651306c584f92a339415b903ea1af_prof);

    }

    public function getTemplateName()
    {
        return "task/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 24,  74 => 22,  68 => 19,  61 => 15,  56 => 12,  52 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Task edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*     {#{% if task.done %} class="line-through" {% endif%}#}*/
/* */
/*     <label class="checkbox-inline"><input type="checkbox" value="task.done">Done</label>*/
/*     {#{% if task.done %}Yes{% else %}No{% endif %}#}*/
/*     <li class="list-group-item">*/
/*         <input type="submit" class="btn btn-success" value="Edit">*/
/*     </li>*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul class="list-group">*/
/*         <li class="list-group-item">*/
/*             <a href="{{ path('task_index') }}" class="btn btn-info" role="button">Back to the list</a>*/
/*         </li>*/
/*         <li class="list-group-item">*/
/*             {{ form_start(delete_form) }}*/
/*             <input type="submit" class="btn btn-danger" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
