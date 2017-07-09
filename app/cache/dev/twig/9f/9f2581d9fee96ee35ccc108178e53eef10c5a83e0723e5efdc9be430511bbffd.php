<?php

/* comments/edit.html.twig */
class __TwigTemplate_5a145c8d6a804f917d5c47d7dd209923bcd5859b9971a71e6593f0713e54946f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "comments/edit.html.twig", 1);
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
        $__internal_8b3160f19840f44918e71d369e0b090c5d2533c8206b9878249d6d3825a90ad3 = $this->env->getExtension("native_profiler");
        $__internal_8b3160f19840f44918e71d369e0b090c5d2533c8206b9878249d6d3825a90ad3->enter($__internal_8b3160f19840f44918e71d369e0b090c5d2533c8206b9878249d6d3825a90ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "comments/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b3160f19840f44918e71d369e0b090c5d2533c8206b9878249d6d3825a90ad3->leave($__internal_8b3160f19840f44918e71d369e0b090c5d2533c8206b9878249d6d3825a90ad3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1e275dae666506f932bb0a5775ad68fb56be777ba4364bb036ac275f8f71486 = $this->env->getExtension("native_profiler");
        $__internal_e1e275dae666506f932bb0a5775ad68fb56be777ba4364bb036ac275f8f71486->enter($__internal_e1e275dae666506f932bb0a5775ad68fb56be777ba4364bb036ac275f8f71486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comments edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <li class=\"list-group-item\">
            <input type=\"submit\" value=\"Edit\" />
        </li>
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul class=\"list-group\">
        <li class=\"list-group-item\">
            <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("comments_index");
        echo "\">Back to the list</a>
        </li>
        <li class=\"list-group-item\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
            ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_e1e275dae666506f932bb0a5775ad68fb56be777ba4364bb036ac275f8f71486->leave($__internal_e1e275dae666506f932bb0a5775ad68fb56be777ba4364bb036ac275f8f71486_prof);

    }

    public function getTemplateName()
    {
        return "comments/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  68 => 18,  62 => 15,  55 => 11,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Comments edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <li class="list-group-item">*/
/*             <input type="submit" value="Edit" />*/
/*         </li>*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul class="list-group">*/
/*         <li class="list-group-item">*/
/*             <a href="{{ path('comments_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li class="list-group-item">*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" class="btn btn-danger" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
