<?php

/* task/show.html.twig */
class __TwigTemplate_4ddd022757ba4c305e96c4a356aa249b6f07aa5ee9bc542fbaa50e23b5cc1f25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "task/show.html.twig", 1);
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
        $__internal_7e5af2063c47661e52d909aa3f56703c76947e9445679fc8a2d659045938d03e = $this->env->getExtension("native_profiler");
        $__internal_7e5af2063c47661e52d909aa3f56703c76947e9445679fc8a2d659045938d03e->enter($__internal_7e5af2063c47661e52d909aa3f56703c76947e9445679fc8a2d659045938d03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e5af2063c47661e52d909aa3f56703c76947e9445679fc8a2d659045938d03e->leave($__internal_7e5af2063c47661e52d909aa3f56703c76947e9445679fc8a2d659045938d03e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5747dfd66614e639a298feb303396d849969f5ab3a4318e877ab5a9c5a00db98 = $this->env->getExtension("native_profiler");
        $__internal_5747dfd66614e639a298feb303396d849969f5ab3a4318e877ab5a9c5a00db98->enter($__internal_5747dfd66614e639a298feb303396d849969f5ab3a4318e877ab5a9c5a00db98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Task</h1>

    <table class=\"table table-bordered\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Priority</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "priority", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Deadline</th>
                <td>";
        // line 26
        if ($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "deadline", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "deadline", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Category</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "category", array()), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            ";
        // line 33
        echo "                ";
        // line 34
        echo "                ";
        // line 35
        echo "            ";
        // line 36
        echo "        </tbody>
    </table>

    <ul class=\"list-group\">
        <li class=\"list-group-item\">
            <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("task_index");
        echo "\" class=\"btn btn-info\" role=\"button\">Back to the list</a>
        </li>
        <li class=\"list-group-item\">
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_edit", array("id" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-success\" role=\"button\">Edit</a>
        </li>
        <li class=\"list-group-item\">
            ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
            ";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_5747dfd66614e639a298feb303396d849969f5ab3a4318e877ab5a9c5a00db98->leave($__internal_5747dfd66614e639a298feb303396d849969f5ab3a4318e877ab5a9c5a00db98_prof);

    }

    public function getTemplateName()
    {
        return "task/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 49,  115 => 47,  109 => 44,  103 => 41,  96 => 36,  94 => 35,  92 => 34,  90 => 33,  85 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Task</h1>*/
/* */
/*     <table class="table table-bordered">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ task.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ task.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Description</th>*/
/*                 <td>{{ task.description }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Priority</th>*/
/*                 <td>{{ task.priority }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Deadline</th>*/
/*                 <td>{% if task.deadline %}{{ task.deadline|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Category</th>*/
/*                 <td>{{ task.category.name }}</td>*/
/*             </tr>*/
/*             {#<tr>#}*/
/*                 {#<th>Comments</th>#}*/
/*                 {#<td>{{ task.comments.content }}</td>#}*/
/*             {#</tr>#}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul class="list-group">*/
/*         <li class="list-group-item">*/
/*             <a href="{{ path('task_index') }}" class="btn btn-info" role="button">Back to the list</a>*/
/*         </li>*/
/*         <li class="list-group-item">*/
/*             <a href="{{ path('task_edit', { 'id': task.id }) }}" class="btn btn-success" role="button">Edit</a>*/
/*         </li>*/
/*         <li class="list-group-item">*/
/*             {{ form_start(delete_form) }}*/
/*             <input type="submit" class="btn btn-danger" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
