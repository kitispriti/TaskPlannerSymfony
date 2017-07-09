<?php

/* category/edit.html.twig */
class __TwigTemplate_99c1c50a2b4e6650c3d27a2d36127da772f43e2c618fe642ffdf956efde029d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "category/edit.html.twig", 1);
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
        $__internal_200e2f8ad5f3dec2cdfccc22ab3fa4591e0e4be6b3c4904e784cb06c040104d2 = $this->env->getExtension("native_profiler");
        $__internal_200e2f8ad5f3dec2cdfccc22ab3fa4591e0e4be6b3c4904e784cb06c040104d2->enter($__internal_200e2f8ad5f3dec2cdfccc22ab3fa4591e0e4be6b3c4904e784cb06c040104d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_200e2f8ad5f3dec2cdfccc22ab3fa4591e0e4be6b3c4904e784cb06c040104d2->leave($__internal_200e2f8ad5f3dec2cdfccc22ab3fa4591e0e4be6b3c4904e784cb06c040104d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dda7bd4d0d3506733e47fabdbff713038dd7f0ce2649ed8af6b1e877b4382b25 = $this->env->getExtension("native_profiler");
        $__internal_dda7bd4d0d3506733e47fabdbff713038dd7f0ce2649ed8af6b1e877b4382b25->enter($__internal_dda7bd4d0d3506733e47fabdbff713038dd7f0ce2649ed8af6b1e877b4382b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Category edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("category_index");
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
        
        $__internal_dda7bd4d0d3506733e47fabdbff713038dd7f0ce2649ed8af6b1e877b4382b25->leave($__internal_dda7bd4d0d3506733e47fabdbff713038dd7f0ce2649ed8af6b1e877b4382b25_prof);

    }

    public function getTemplateName()
    {
        return "category/edit.html.twig";
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
/*     <h1>Category edit</h1>*/
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
/*             <a href="{{ path('category_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li class="list-group-item">*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" class="btn btn-danger" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
