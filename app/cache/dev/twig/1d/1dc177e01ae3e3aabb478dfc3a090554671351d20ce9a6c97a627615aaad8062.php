<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_a35f18f35ab3b21883eb2cdb08b5dba5dc941db2cfd67168d6acc2378d6ae2d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_738bb8ec1e27c2f34a0561298e6718e1f327a8621b363724dbcb58b9b7104eb6 = $this->env->getExtension("native_profiler");
        $__internal_738bb8ec1e27c2f34a0561298e6718e1f327a8621b363724dbcb58b9b7104eb6->enter($__internal_738bb8ec1e27c2f34a0561298e6718e1f327a8621b363724dbcb58b9b7104eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_738bb8ec1e27c2f34a0561298e6718e1f327a8621b363724dbcb58b9b7104eb6->leave($__internal_738bb8ec1e27c2f34a0561298e6718e1f327a8621b363724dbcb58b9b7104eb6_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}*/
/* */
