<?php

/* task/index.html.twig */
class __TwigTemplate_802d057d77f358ba6cff43defb94597df82cdb158caf5984d484585cfbcbf754 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "task/index.html.twig", 1);
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
        $__internal_5252804ea1bb9cfdcc16c26a1572216fecc78b51b9364c08919dc6c6b8ebe82b = $this->env->getExtension("native_profiler");
        $__internal_5252804ea1bb9cfdcc16c26a1572216fecc78b51b9364c08919dc6c6b8ebe82b->enter($__internal_5252804ea1bb9cfdcc16c26a1572216fecc78b51b9364c08919dc6c6b8ebe82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5252804ea1bb9cfdcc16c26a1572216fecc78b51b9364c08919dc6c6b8ebe82b->leave($__internal_5252804ea1bb9cfdcc16c26a1572216fecc78b51b9364c08919dc6c6b8ebe82b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9403bac819c028314a9152760f6e739c3372412af38382f95865727b500a220b = $this->env->getExtension("native_profiler");
        $__internal_9403bac819c028314a9152760f6e739c3372412af38382f95865727b500a220b->enter($__internal_9403bac819c028314a9152760f6e739c3372412af38382f95865727b500a220b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Task list</h1>
    <table class=\"table table-bordered\">
        <tbody>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) ? $context["tasks"] : $this->getContext($context, "tasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 8
            echo "            <ul>
                <li><a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_show", array("id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "name", array()), "html", null, true);
            echo "</a></li>
            </ul>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        </tbody>
    </table>

    <ul class=\"list-group\">
        <li class=\"list-group-item\">
            <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("task_new");
        echo "\" class=\"btn btn-primary\" role=\"button\">Create a new task</a>
        </li>
    </ul>
";
        
        $__internal_9403bac819c028314a9152760f6e739c3372412af38382f95865727b500a220b->leave($__internal_9403bac819c028314a9152760f6e739c3372412af38382f95865727b500a220b_prof);

    }

    public function getTemplateName()
    {
        return "task/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 17,  63 => 12,  52 => 9,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Task list</h1>*/
/*     <table class="table table-bordered">*/
/*         <tbody>*/
/*         {% for task in tasks %}*/
/*             <ul>*/
/*                 <li><a href="{{ path('task_show', { 'id': task.id }) }}">{{ task.name }}</a></li>*/
/*             </ul>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul class="list-group">*/
/*         <li class="list-group-item">*/
/*             <a href="{{ path('task_new') }}" class="btn btn-primary" role="button">Create a new task</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
