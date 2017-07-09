<?php

/* base.html.twig */
class __TwigTemplate_1f85742e4a9ec336462771ac5685af1dd72121dcbd306daae70860da19df440e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2f7fc03097d81d74aafa933326e9599db78b36e9726fe11bb2f08c1720dc635 = $this->env->getExtension("native_profiler");
        $__internal_e2f7fc03097d81d74aafa933326e9599db78b36e9726fe11bb2f08c1720dc635->enter($__internal_e2f7fc03097d81d74aafa933326e9599db78b36e9726fe11bb2f08c1720dc635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/css.css"), "html", null, true);
        echo "\" />
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>

    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
          integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

    <!-- Optional theme -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\"
          integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

    <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"
            integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\"
            crossorigin=\"anonymous\"></script>

</head>
<body>

";
        // line 25
        if (array_key_exists("form", $context)) {
            // line 26
            echo "    ";
            $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        }
        // line 28
        echo "
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"page-header\">
                <h1> Task Planner <small>Created by Rafał</small></h1>
            </div>

            ";
        // line 36
        echo $this->env->getExtension('knp_menu')->render("AppBundle:Builder:mainMenu", array("currentClass" => "active"));
        echo "

            ";
        // line 39
        echo "
                ";
        // line 41
        echo "                ";
        // line 42
        echo "            ";
        // line 43
        echo "        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-8\">
            ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "        </div>

    </div>
    <div class=\"row\">
        ";
        // line 54
        echo "        ";
        // line 55
        echo "        ";
        // line 56
        echo "        ";
        // line 57
        echo "    </div>
</div>
";
        // line 59
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "</body>
</html>
";
        
        $__internal_e2f7fc03097d81d74aafa933326e9599db78b36e9726fe11bb2f08c1720dc635->leave($__internal_e2f7fc03097d81d74aafa933326e9599db78b36e9726fe11bb2f08c1720dc635_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_080ac02b43af8af9a304b3bb6c28f2009242fb929aaaf3e64b96bd2bd9b8cf69 = $this->env->getExtension("native_profiler");
        $__internal_080ac02b43af8af9a304b3bb6c28f2009242fb929aaaf3e64b96bd2bd9b8cf69->enter($__internal_080ac02b43af8af9a304b3bb6c28f2009242fb929aaaf3e64b96bd2bd9b8cf69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_080ac02b43af8af9a304b3bb6c28f2009242fb929aaaf3e64b96bd2bd9b8cf69->leave($__internal_080ac02b43af8af9a304b3bb6c28f2009242fb929aaaf3e64b96bd2bd9b8cf69_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a2a63371fb8ded3f8ec9ad3da7364d5a9efd87402f8516358d520b09ff59676 = $this->env->getExtension("native_profiler");
        $__internal_8a2a63371fb8ded3f8ec9ad3da7364d5a9efd87402f8516358d520b09ff59676->enter($__internal_8a2a63371fb8ded3f8ec9ad3da7364d5a9efd87402f8516358d520b09ff59676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8a2a63371fb8ded3f8ec9ad3da7364d5a9efd87402f8516358d520b09ff59676->leave($__internal_8a2a63371fb8ded3f8ec9ad3da7364d5a9efd87402f8516358d520b09ff59676_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ffdfe94e96349158a3e2e0bc8381de67737cc65ad8da53d5210c60b53ebc717a = $this->env->getExtension("native_profiler");
        $__internal_ffdfe94e96349158a3e2e0bc8381de67737cc65ad8da53d5210c60b53ebc717a->enter($__internal_ffdfe94e96349158a3e2e0bc8381de67737cc65ad8da53d5210c60b53ebc717a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ffdfe94e96349158a3e2e0bc8381de67737cc65ad8da53d5210c60b53ebc717a->leave($__internal_ffdfe94e96349158a3e2e0bc8381de67737cc65ad8da53d5210c60b53ebc717a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 59,  136 => 48,  124 => 5,  115 => 60,  113 => 59,  109 => 57,  107 => 56,  105 => 55,  103 => 54,  97 => 49,  95 => 48,  88 => 43,  86 => 42,  84 => 41,  81 => 39,  76 => 36,  66 => 28,  62 => 26,  60 => 25,  39 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8"/>*/
/*     <title>{% block title %}Welcome!{% endblock %}</title>*/
/*     <link rel="stylesheet" href="{{ asset('css/css.css') }}" />*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>*/
/* */
/*     <!-- Latest compiled and minified CSS -->*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"*/
/*           integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">*/
/* */
/*     <!-- Optional theme -->*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"*/
/*           integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">*/
/* */
/*     <!-- Latest compiled and minified JavaScript -->*/
/*     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"*/
/*             integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"*/
/*             crossorigin="anonymous"></script>*/
/* */
/* </head>*/
/* <body>*/
/* */
/* {% if form is defined %}*/
/*     {% form_theme form 'bootstrap_3_layout.html.twig' %}*/
/* {% endif %}*/
/* */
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <div class="page-header">*/
/*                 <h1> Task Planner <small>Created by Rafał</small></h1>*/
/*             </div>*/
/* */
/*             {{ knp_menu_render('AppBundle:Builder:mainMenu',  {'currentClass': 'active'}) }}*/
/* */
/*             {#{% if app.user %}#}*/
/* */
/*                 {#<script>alert('Welcome {{ app.user.username }}!')</script>#}*/
/*                 {#<br/>Welcome {{ app.user.username }}!#}*/
/*             {#{% endif %}#}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-8">*/
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/* */
/*     </div>*/
/*     <div class="row">*/
/*         {#<div class="col-md-4"></div>#}*/
/*         {#<div class="col-md-4"></div>#}*/
/*         {#<div class="col-md-4"></div>#}*/
/*         {#<div class="col-md-4"></div>#}*/
/*     </div>*/
/* </div>*/
/* {% block javascripts %}{% endblock %}*/
/* </body>*/
/* </html>*/
/* */
