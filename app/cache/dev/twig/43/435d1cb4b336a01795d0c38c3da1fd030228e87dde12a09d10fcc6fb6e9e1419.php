<?php

/* comments/show.html.twig */
class __TwigTemplate_7a44171f8c9777a475333909ef032c4f4c89dffd53e0403b756c1271a8a66993 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "comments/show.html.twig", 1);
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
        $__internal_f5290b62cdf1550b10a585efa01632823386c1c7f0bb3abaee718d1ee5dff4f4 = $this->env->getExtension("native_profiler");
        $__internal_f5290b62cdf1550b10a585efa01632823386c1c7f0bb3abaee718d1ee5dff4f4->enter($__internal_f5290b62cdf1550b10a585efa01632823386c1c7f0bb3abaee718d1ee5dff4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "comments/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5290b62cdf1550b10a585efa01632823386c1c7f0bb3abaee718d1ee5dff4f4->leave($__internal_f5290b62cdf1550b10a585efa01632823386c1c7f0bb3abaee718d1ee5dff4f4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f18bf390d728df662cef8f032bcdd382019d025afe54b6672f9df3c81cbe1dfb = $this->env->getExtension("native_profiler");
        $__internal_f18bf390d728df662cef8f032bcdd382019d025afe54b6672f9df3c81cbe1dfb->enter($__internal_f18bf390d728df662cef8f032bcdd382019d025afe54b6672f9df3c81cbe1dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comments</h1>

    <table class=\"table table-bordered\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "content", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul class=\"list-group\">
        <li class=\"list-group-item\">
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("comments_index");
        echo "\">Back to the list</a>
        </li>
        <li class=\"list-group-item\">
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comments_edit", array("id" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()))), "html", null, true);
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
        
        $__internal_f18bf390d728df662cef8f032bcdd382019d025afe54b6672f9df3c81cbe1dfb->leave($__internal_f18bf390d728df662cef8f032bcdd382019d025afe54b6672f9df3c81cbe1dfb_prof);

    }

    public function getTemplateName()
    {
        return "comments/show.html.twig";
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
/*     <h1>Comments</h1>*/
/* */
/*     <table class="table table-bordered">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ comment.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Content</th>*/
/*                 <td>{{ comment.content }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul class="list-group">*/
/*         <li class="list-group-item">*/
/*             <a href="{{ path('comments_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li class="list-group-item">*/
/*             <a href="{{ path('comments_edit', { 'id': comment.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li class="list-group-item">*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" class="btn btn-danger" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
