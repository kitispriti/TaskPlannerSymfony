<?php

/* category/show.html.twig */
class __TwigTemplate_9376898d8a725f889edc0d9f512d5286712964d305e72701fe5cc602433b1d88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "category/show.html.twig", 1);
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
        $__internal_6804d8aa77f19473cd3dc4c6372906593ccb769aa6b876f93fe0c22bc25d9ef2 = $this->env->getExtension("native_profiler");
        $__internal_6804d8aa77f19473cd3dc4c6372906593ccb769aa6b876f93fe0c22bc25d9ef2->enter($__internal_6804d8aa77f19473cd3dc4c6372906593ccb769aa6b876f93fe0c22bc25d9ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6804d8aa77f19473cd3dc4c6372906593ccb769aa6b876f93fe0c22bc25d9ef2->leave($__internal_6804d8aa77f19473cd3dc4c6372906593ccb769aa6b876f93fe0c22bc25d9ef2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a10cd07275566f250cf0aef351d1fc836d07f71b0838e4007d2a8908af853547 = $this->env->getExtension("native_profiler");
        $__internal_a10cd07275566f250cf0aef351d1fc836d07f71b0838e4007d2a8908af853547->enter($__internal_a10cd07275566f250cf0aef351d1fc836d07f71b0838e4007d2a8908af853547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Category</h1>

    <table class=\"table table-bordered\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul class=\"list-group\">
        <li class=\"list-group-item\">
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("category_index");
        echo "\">Back to the list</a>
        </li>
        <li class=\"list-group-item\">
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_edit", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li class=\"list-group-item\">
            ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_a10cd07275566f250cf0aef351d1fc836d07f71b0838e4007d2a8908af853547->leave($__internal_a10cd07275566f250cf0aef351d1fc836d07f71b0838e4007d2a8908af853547_prof);

    }

    public function getTemplateName()
    {
        return "category/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  77 => 27,  71 => 24,  65 => 21,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Category</h1>*/
/* */
/*     <table class="table table-bordered">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ category.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ category.name }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul class="list-group">*/
/*         <li class="list-group-item">*/
/*             <a href="{{ path('category_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li class="list-group-item">*/
/*             <a href="{{ path('category_edit', { 'id': category.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li class="list-group-item">*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" class="btn btn-danger" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
