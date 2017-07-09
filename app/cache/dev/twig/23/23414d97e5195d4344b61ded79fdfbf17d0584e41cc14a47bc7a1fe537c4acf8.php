<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_deb1e147bc56cb919c14d7ca2a1dc4c24e35078763447061bc5d2a93f350e068 extends Twig_Template
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
        $__internal_42ee08c24b9c22d8e6307632db514acd7c5e8503fa5bd4025e549b1e161c34de = $this->env->getExtension("native_profiler");
        $__internal_42ee08c24b9c22d8e6307632db514acd7c5e8503fa5bd4025e549b1e161c34de->enter($__internal_42ee08c24b9c22d8e6307632db514acd7c5e8503fa5bd4025e549b1e161c34de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_42ee08c24b9c22d8e6307632db514acd7c5e8503fa5bd4025e549b1e161c34de->leave($__internal_42ee08c24b9c22d8e6307632db514acd7c5e8503fa5bd4025e549b1e161c34de_prof);

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
