<?php

/* comments/index.html.twig */
class __TwigTemplate_123304173703e0a98b53773368b93e721a1f5076baada0e7113cf827ce0749fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "comments/index.html.twig", 1);
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
        $__internal_b80c756542b0e3917c31876ffe29291c724b19f24d2b2ee60f2af641e6738a1c = $this->env->getExtension("native_profiler");
        $__internal_b80c756542b0e3917c31876ffe29291c724b19f24d2b2ee60f2af641e6738a1c->enter($__internal_b80c756542b0e3917c31876ffe29291c724b19f24d2b2ee60f2af641e6738a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "comments/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b80c756542b0e3917c31876ffe29291c724b19f24d2b2ee60f2af641e6738a1c->leave($__internal_b80c756542b0e3917c31876ffe29291c724b19f24d2b2ee60f2af641e6738a1c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_937126be448901241a7b38bef61391c7a4295fb86d135b6680b1625b863e21f5 = $this->env->getExtension("native_profiler");
        $__internal_937126be448901241a7b38bef61391c7a4295fb86d135b6680b1625b863e21f5->enter($__internal_937126be448901241a7b38bef61391c7a4295fb86d135b6680b1625b863e21f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comments list</h1>

    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Content</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 15
            echo "            <tr>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
            echo "</a></td>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comments_show", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array()), "html", null, true);
            echo "</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </tbody>
    </table>

    <ul class=\"list-group\">
        <li class=\"list-group-item\">
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("comments_new");
        echo "\" class=\"btn btn-primary\" role=\"button\">Create a new comment</a>
        </li>
    </ul>
";
        
        $__internal_937126be448901241a7b38bef61391c7a4295fb86d135b6680b1625b863e21f5->leave($__internal_937126be448901241a7b38bef61391c7a4295fb86d135b6680b1625b863e21f5_prof);

    }

    public function getTemplateName()
    {
        return "comments/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 25,  74 => 20,  63 => 17,  59 => 16,  56 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Comments list</h1>*/
/* */
/*     <table class="table table-bordered">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Content</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for comment in comments %}*/
/*             <tr>*/
/*                 <td>{{ comment.id }}</a></td>*/
/*                 <td><a href="{{ path('comments_show', { 'id': comment.id }) }}">{{ comment.content }}</a></td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul class="list-group">*/
/*         <li class="list-group-item">*/
/*             <a href="{{ path('comments_new') }}" class="btn btn-primary" role="button">Create a new comment</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
