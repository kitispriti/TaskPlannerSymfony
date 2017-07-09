<?php

/* base.html.twig */
class __TwigTemplate_e3a189c0b4db956d6b83452e4d53d398213b60efc766dfa0c26426d320a0bfed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3cca7c53855f945a3748efd32d1f556fc30dc47cbb4fe826d312b685d4768536 = $this->env->getExtension("native_profiler");
        $__internal_3cca7c53855f945a3748efd32d1f556fc30dc47cbb4fe826d312b685d4768536->enter($__internal_3cca7c53855f945a3748efd32d1f556fc30dc47cbb4fe826d312b685d4768536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
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
        // line 24
        echo $this->env->getExtension('knp_menu')->render("AppBundle:Builder:mainMenu");
        echo "
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-8\">
            <h1>Content</h1>
            ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "        </div>
        <div class=\"col-md-4\">
            <h1>Sidebar</h1>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-4\"></div>
        <div class=\"col-md-4\"></div>
        <div class=\"col-md-4\"></div>
        <div class=\"col-md-4\"></div>
    </div>
</div>
";
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "</body>
</html>
";
        
        $__internal_3cca7c53855f945a3748efd32d1f556fc30dc47cbb4fe826d312b685d4768536->leave($__internal_3cca7c53855f945a3748efd32d1f556fc30dc47cbb4fe826d312b685d4768536_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_545acd7c181a7574786bc1ed63189e980b25c4dc199f288e6f66a0ba9a01fe57 = $this->env->getExtension("native_profiler");
        $__internal_545acd7c181a7574786bc1ed63189e980b25c4dc199f288e6f66a0ba9a01fe57->enter($__internal_545acd7c181a7574786bc1ed63189e980b25c4dc199f288e6f66a0ba9a01fe57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_545acd7c181a7574786bc1ed63189e980b25c4dc199f288e6f66a0ba9a01fe57->leave($__internal_545acd7c181a7574786bc1ed63189e980b25c4dc199f288e6f66a0ba9a01fe57_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_209ee9f785d6853428bdf299ada364a8d8ba47caa330ed99857a5fb725b9d333 = $this->env->getExtension("native_profiler");
        $__internal_209ee9f785d6853428bdf299ada364a8d8ba47caa330ed99857a5fb725b9d333->enter($__internal_209ee9f785d6853428bdf299ada364a8d8ba47caa330ed99857a5fb725b9d333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_209ee9f785d6853428bdf299ada364a8d8ba47caa330ed99857a5fb725b9d333->leave($__internal_209ee9f785d6853428bdf299ada364a8d8ba47caa330ed99857a5fb725b9d333_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_c09d765e87492bb7f1d8fe1b753330ce58eb840881becc4298c7de9b0ffc7349 = $this->env->getExtension("native_profiler");
        $__internal_c09d765e87492bb7f1d8fe1b753330ce58eb840881becc4298c7de9b0ffc7349->enter($__internal_c09d765e87492bb7f1d8fe1b753330ce58eb840881becc4298c7de9b0ffc7349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c09d765e87492bb7f1d8fe1b753330ce58eb840881becc4298c7de9b0ffc7349->leave($__internal_c09d765e87492bb7f1d8fe1b753330ce58eb840881becc4298c7de9b0ffc7349_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c57d93283548bb44fc48114d5a92b2d31efb6d2c362e47ba079fc73c985f898e = $this->env->getExtension("native_profiler");
        $__internal_c57d93283548bb44fc48114d5a92b2d31efb6d2c362e47ba079fc73c985f898e->enter($__internal_c57d93283548bb44fc48114d5a92b2d31efb6d2c362e47ba079fc73c985f898e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c57d93283548bb44fc48114d5a92b2d31efb6d2c362e47ba079fc73c985f898e->leave($__internal_c57d93283548bb44fc48114d5a92b2d31efb6d2c362e47ba079fc73c985f898e_prof);

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
        return array (  128 => 42,  117 => 29,  106 => 6,  94 => 5,  85 => 43,  83 => 42,  69 => 30,  67 => 29,  59 => 24,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8"/>*/
/*     <title>{% block title %}Welcome!{% endblock %}</title>*/
/*     {% block stylesheets %}{% endblock %}*/
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
/* </head>*/
/* <body>*/
/* */
/* {{ knp_menu_render('AppBundle:Builder:mainMenu') }}*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-md-8">*/
/*             <h1>Content</h1>*/
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/*         <div class="col-md-4">*/
/*             <h1>Sidebar</h1>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-md-4"></div>*/
/*         <div class="col-md-4"></div>*/
/*         <div class="col-md-4"></div>*/
/*         <div class="col-md-4"></div>*/
/*     </div>*/
/* </div>*/
/* {% block javascripts %}{% endblock %}*/
/* </body>*/
/* </html>*/
/* */
