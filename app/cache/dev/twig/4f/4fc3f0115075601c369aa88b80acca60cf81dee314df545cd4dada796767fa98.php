<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_fee3369e9ed025322992797fffaed2810f51fa77e99d748e67cfb2469c9b2627 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_145cac13e69f5d234c6468514463e156fc5ef928a945dc9efe062cc7aad9eee5 = $this->env->getExtension("native_profiler");
        $__internal_145cac13e69f5d234c6468514463e156fc5ef928a945dc9efe062cc7aad9eee5->enter($__internal_145cac13e69f5d234c6468514463e156fc5ef928a945dc9efe062cc7aad9eee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_145cac13e69f5d234c6468514463e156fc5ef928a945dc9efe062cc7aad9eee5->leave($__internal_145cac13e69f5d234c6468514463e156fc5ef928a945dc9efe062cc7aad9eee5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8ea994f6e5f0620642a9896ba341f41602c213dd7b1c17a98236023d8351835c = $this->env->getExtension("native_profiler");
        $__internal_8ea994f6e5f0620642a9896ba341f41602c213dd7b1c17a98236023d8351835c->enter($__internal_8ea994f6e5f0620642a9896ba341f41602c213dd7b1c17a98236023d8351835c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_8ea994f6e5f0620642a9896ba341f41602c213dd7b1c17a98236023d8351835c->leave($__internal_8ea994f6e5f0620642a9896ba341f41602c213dd7b1c17a98236023d8351835c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
