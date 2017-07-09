<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c4e9f54b99509d0071f95c20bf5f420bfe92a9017257f5c7926e71b57c12ed83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69bd124a65dbf48b49c33de33ab4310730a263ea4616e1ad8d24a557b581ef63 = $this->env->getExtension("native_profiler");
        $__internal_69bd124a65dbf48b49c33de33ab4310730a263ea4616e1ad8d24a557b581ef63->enter($__internal_69bd124a65dbf48b49c33de33ab4310730a263ea4616e1ad8d24a557b581ef63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69bd124a65dbf48b49c33de33ab4310730a263ea4616e1ad8d24a557b581ef63->leave($__internal_69bd124a65dbf48b49c33de33ab4310730a263ea4616e1ad8d24a557b581ef63_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_561338cae518f41416df8d0306cbd775fcfdcbc01ec7fba5957aefad6917f2bf = $this->env->getExtension("native_profiler");
        $__internal_561338cae518f41416df8d0306cbd775fcfdcbc01ec7fba5957aefad6917f2bf->enter($__internal_561338cae518f41416df8d0306cbd775fcfdcbc01ec7fba5957aefad6917f2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_561338cae518f41416df8d0306cbd775fcfdcbc01ec7fba5957aefad6917f2bf->leave($__internal_561338cae518f41416df8d0306cbd775fcfdcbc01ec7fba5957aefad6917f2bf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6d83b19b77a62a41ef72223980d271d338034af64c37a0d14e978f00bc3d2658 = $this->env->getExtension("native_profiler");
        $__internal_6d83b19b77a62a41ef72223980d271d338034af64c37a0d14e978f00bc3d2658->enter($__internal_6d83b19b77a62a41ef72223980d271d338034af64c37a0d14e978f00bc3d2658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6d83b19b77a62a41ef72223980d271d338034af64c37a0d14e978f00bc3d2658->leave($__internal_6d83b19b77a62a41ef72223980d271d338034af64c37a0d14e978f00bc3d2658_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9400b51f9ffa5b7efa528f4d10d57c582e0de66369f501eb7f735669c95796db = $this->env->getExtension("native_profiler");
        $__internal_9400b51f9ffa5b7efa528f4d10d57c582e0de66369f501eb7f735669c95796db->enter($__internal_9400b51f9ffa5b7efa528f4d10d57c582e0de66369f501eb7f735669c95796db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9400b51f9ffa5b7efa528f4d10d57c582e0de66369f501eb7f735669c95796db->leave($__internal_9400b51f9ffa5b7efa528f4d10d57c582e0de66369f501eb7f735669c95796db_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
