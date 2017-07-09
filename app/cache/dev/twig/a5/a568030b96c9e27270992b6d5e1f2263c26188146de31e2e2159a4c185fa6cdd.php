<?php

/* category/index.html.twig */
class __TwigTemplate_ec6fc52c8d7ce048f878d4a0f775e9ec62d23f7b571432581ce369fe890251e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "category/index.html.twig", 1);
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
        $__internal_f666f1d3ea5098a41ecedfdd51fafdb47121cd4dd762d1c98b62e3926f708d68 = $this->env->getExtension("native_profiler");
        $__internal_f666f1d3ea5098a41ecedfdd51fafdb47121cd4dd762d1c98b62e3926f708d68->enter($__internal_f666f1d3ea5098a41ecedfdd51fafdb47121cd4dd762d1c98b62e3926f708d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f666f1d3ea5098a41ecedfdd51fafdb47121cd4dd762d1c98b62e3926f708d68->leave($__internal_f666f1d3ea5098a41ecedfdd51fafdb47121cd4dd762d1c98b62e3926f708d68_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_858d222b8e48d9833fa17af9a2369d2e307356b765d29459f7fd75ac3df2d2d1 = $this->env->getExtension("native_profiler");
        $__internal_858d222b8e48d9833fa17af9a2369d2e307356b765d29459f7fd75ac3df2d2d1->enter($__internal_858d222b8e48d9833fa17af9a2369d2e307356b765d29459f7fd75ac3df2d2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Category list</h1>

    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 15
            echo "            <tr>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "</td>
                <td> <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_show", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </tbody>
    </table>

    <ul class=\"list-group\">
        <li class=\"list-group-item\">
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("category_new");
        echo "\" class=\"btn btn-primary\" role=\"button\">Create a new category</a>
        </li>
    </ul>
";
        
        $__internal_858d222b8e48d9833fa17af9a2369d2e307356b765d29459f7fd75ac3df2d2d1->leave($__internal_858d222b8e48d9833fa17af9a2369d2e307356b765d29459f7fd75ac3df2d2d1_prof);

    }

    public function getTemplateName()
    {
        return "category/index.html.twig";
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
/*     <h1>Category list</h1>*/
/* */
/*     <table class="table table-bordered">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Name</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for category in categories %}*/
/*             <tr>*/
/*                 <td>{{ category.id }}</td>*/
/*                 <td> <a href="{{ path('category_show', { 'id': category.id }) }}">{{ category.name }}</a></td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul class="list-group">*/
/*         <li class="list-group-item">*/
/*             <a href="{{ path('category_new') }}" class="btn btn-primary" role="button">Create a new category</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
