<?php

/* base.html.twig */
class __TwigTemplate_ed33077543885d59e651bbefb9de71f39edd83d4083c2d52643ce5fedaf2524f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5450fdb44e759614a595d5a97e96329df8d0617652fb7467e019dc6ef68b241e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5450fdb44e759614a595d5a97e96329df8d0617652fb7467e019dc6ef68b241e->enter($__internal_5450fdb44e759614a595d5a97e96329df8d0617652fb7467e019dc6ef68b241e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "
<div class=\"container body-container\">
    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "</div>


";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
</body>
</html>
";
        
        $__internal_5450fdb44e759614a595d5a97e96329df8d0617652fb7467e019dc6ef68b241e->leave($__internal_5450fdb44e759614a595d5a97e96329df8d0617652fb7467e019dc6ef68b241e_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab96b05a5a7fb1dd33063fe5ed42bf49fa4ae9d0b447673521729bcfdd720973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab96b05a5a7fb1dd33063fe5ed42bf49fa4ae9d0b447673521729bcfdd720973->enter($__internal_ab96b05a5a7fb1dd33063fe5ed42bf49fa4ae9d0b447673521729bcfdd720973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Calculator";
        
        $__internal_ab96b05a5a7fb1dd33063fe5ed42bf49fa4ae9d0b447673521729bcfdd720973->leave($__internal_ab96b05a5a7fb1dd33063fe5ed42bf49fa4ae9d0b447673521729bcfdd720973_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_02f2b8c8fd2a7b275292846d07206dbb7fd45c136a04a9dd212c4528ae34af3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02f2b8c8fd2a7b275292846d07206dbb7fd45c136a04a9dd212c4528ae34af3f->enter($__internal_02f2b8c8fd2a7b275292846d07206dbb7fd45c136a04a9dd212c4528ae34af3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_02f2b8c8fd2a7b275292846d07206dbb7fd45c136a04a9dd212c4528ae34af3f->leave($__internal_02f2b8c8fd2a7b275292846d07206dbb7fd45c136a04a9dd212c4528ae34af3f_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_180f4fb1466829b96f0d70a1b1ca53f8f2730adae43127c384c7c8246bfd294d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_180f4fb1466829b96f0d70a1b1ca53f8f2730adae43127c384c7c8246bfd294d->enter($__internal_180f4fb1466829b96f0d70a1b1ca53f8f2730adae43127c384c7c8246bfd294d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_180f4fb1466829b96f0d70a1b1ca53f8f2730adae43127c384c7c8246bfd294d->leave($__internal_180f4fb1466829b96f0d70a1b1ca53f8f2730adae43127c384c7c8246bfd294d_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_cd6645110dbc86642af2e65661db35b6d9de9702cac6f9558a5f93d3463745a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd6645110dbc86642af2e65661db35b6d9de9702cac6f9558a5f93d3463745a9->enter($__internal_cd6645110dbc86642af2e65661db35b6d9de9702cac6f9558a5f93d3463745a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
";
        
        $__internal_cd6645110dbc86642af2e65661db35b6d9de9702cac6f9558a5f93d3463745a9->leave($__internal_cd6645110dbc86642af2e65661db35b6d9de9702cac6f9558a5f93d3463745a9_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ff601a041bf52b3252b9ee344d5d54b0c58c4ebb15c8770905e071341e8f97d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ff601a041bf52b3252b9ee344d5d54b0c58c4ebb15c8770905e071341e8f97d->enter($__internal_6ff601a041bf52b3252b9ee344d5d54b0c58c4ebb15c8770905e071341e8f97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 44
        $this->displayBlock('main', $context, $blocks);
        // line 45
        echo "            </div>
        </div>
    ";
        
        $__internal_6ff601a041bf52b3252b9ee344d5d54b0c58c4ebb15c8770905e071341e8f97d->leave($__internal_6ff601a041bf52b3252b9ee344d5d54b0c58c4ebb15c8770905e071341e8f97d_prof);

    }

    // line 44
    public function block_main($context, array $blocks = array())
    {
        $__internal_5554e633ff0fd04e622594818e4bf552578535c3dad66eb62652fc7aa213339b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5554e633ff0fd04e622594818e4bf552578535c3dad66eb62652fc7aa213339b->enter($__internal_5554e633ff0fd04e622594818e4bf552578535c3dad66eb62652fc7aa213339b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_5554e633ff0fd04e622594818e4bf552578535c3dad66eb62652fc7aa213339b->leave($__internal_5554e633ff0fd04e622594818e4bf552578535c3dad66eb62652fc7aa213339b_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ddf9ccab35d1d60807312bd5631c0484c77520f1b13265108e09b2031fa7946e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf9ccab35d1d60807312bd5631c0484c77520f1b13265108e09b2031fa7946e->enter($__internal_ddf9ccab35d1d60807312bd5631c0484c77520f1b13265108e09b2031fa7946e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_ddf9ccab35d1d60807312bd5631c0484c77520f1b13265108e09b2031fa7946e->leave($__internal_ddf9ccab35d1d60807312bd5631c0484c77520f1b13265108e09b2031fa7946e_prof);

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
        return array (  205 => 55,  201 => 54,  197 => 53,  192 => 52,  186 => 51,  175 => 44,  166 => 45,  164 => 44,  160 => 42,  154 => 41,  134 => 26,  128 => 22,  122 => 21,  111 => 19,  102 => 14,  97 => 13,  91 => 12,  79 => 11,  69 => 57,  67 => 51,  62 => 48,  60 => 41,  56 => 39,  54 => 21,  49 => 19,  42 => 16,  40 => 12,  36 => 11,  29 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}Calculator{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('index') }}\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>


{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
