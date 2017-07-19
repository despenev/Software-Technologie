<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a24b31ca662dbaff5e80e3db7c13baf2f7681a61965d81e9568fe2971934d074 extends Twig_Template
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
        $__internal_c925fc051c26b1b7d5ee838a2b4fcefcb8a0458d2be13204b7267dcae3096e32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c925fc051c26b1b7d5ee838a2b4fcefcb8a0458d2be13204b7267dcae3096e32->enter($__internal_c925fc051c26b1b7d5ee838a2b4fcefcb8a0458d2be13204b7267dcae3096e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c925fc051c26b1b7d5ee838a2b4fcefcb8a0458d2be13204b7267dcae3096e32->leave($__internal_c925fc051c26b1b7d5ee838a2b4fcefcb8a0458d2be13204b7267dcae3096e32_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_52a0f91875a5a3dc6256100dbebccf652d37448d61c2045207e08fa3681e7bfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52a0f91875a5a3dc6256100dbebccf652d37448d61c2045207e08fa3681e7bfc->enter($__internal_52a0f91875a5a3dc6256100dbebccf652d37448d61c2045207e08fa3681e7bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_52a0f91875a5a3dc6256100dbebccf652d37448d61c2045207e08fa3681e7bfc->leave($__internal_52a0f91875a5a3dc6256100dbebccf652d37448d61c2045207e08fa3681e7bfc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_04dafbda21aa1e0c2bda092e7f677b77c0cb8c249601fb22c7d9190e8b6fa8c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04dafbda21aa1e0c2bda092e7f677b77c0cb8c249601fb22c7d9190e8b6fa8c9->enter($__internal_04dafbda21aa1e0c2bda092e7f677b77c0cb8c249601fb22c7d9190e8b6fa8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_04dafbda21aa1e0c2bda092e7f677b77c0cb8c249601fb22c7d9190e8b6fa8c9->leave($__internal_04dafbda21aa1e0c2bda092e7f677b77c0cb8c249601fb22c7d9190e8b6fa8c9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8a86379e61b3dffac883ac38532aa783b0ea752ba2ed5cbfd8e5e8758484e7ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a86379e61b3dffac883ac38532aa783b0ea752ba2ed5cbfd8e5e8758484e7ac->enter($__internal_8a86379e61b3dffac883ac38532aa783b0ea752ba2ed5cbfd8e5e8758484e7ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8a86379e61b3dffac883ac38532aa783b0ea752ba2ed5cbfd8e5e8758484e7ac->leave($__internal_8a86379e61b3dffac883ac38532aa783b0ea752ba2ed5cbfd8e5e8758484e7ac_prof);

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

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
