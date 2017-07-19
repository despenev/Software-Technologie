<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1d528a0f06139e2201b623d6a63e07bbbb75bbdab8f5b60ed8a65290fec4aedf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24e7749315a79904205adbc26ad37e95219620affb1631dc824951d43639d95a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24e7749315a79904205adbc26ad37e95219620affb1631dc824951d43639d95a->enter($__internal_24e7749315a79904205adbc26ad37e95219620affb1631dc824951d43639d95a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24e7749315a79904205adbc26ad37e95219620affb1631dc824951d43639d95a->leave($__internal_24e7749315a79904205adbc26ad37e95219620affb1631dc824951d43639d95a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d80a4655d5d335c995ae5c452feaf44fb5657c467285735a8bedf28ac6f31683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d80a4655d5d335c995ae5c452feaf44fb5657c467285735a8bedf28ac6f31683->enter($__internal_d80a4655d5d335c995ae5c452feaf44fb5657c467285735a8bedf28ac6f31683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d80a4655d5d335c995ae5c452feaf44fb5657c467285735a8bedf28ac6f31683->leave($__internal_d80a4655d5d335c995ae5c452feaf44fb5657c467285735a8bedf28ac6f31683_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_092095ffccae3580f22af87df9e8e0866d3d396c4f4108275903c1733a673eb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_092095ffccae3580f22af87df9e8e0866d3d396c4f4108275903c1733a673eb2->enter($__internal_092095ffccae3580f22af87df9e8e0866d3d396c4f4108275903c1733a673eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_092095ffccae3580f22af87df9e8e0866d3d396c4f4108275903c1733a673eb2->leave($__internal_092095ffccae3580f22af87df9e8e0866d3d396c4f4108275903c1733a673eb2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_31e84a42dc3c19d2f888106618339ed72240b129f3e2fb8881ee0e9aed3b25fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e84a42dc3c19d2f888106618339ed72240b129f3e2fb8881ee0e9aed3b25fb->enter($__internal_31e84a42dc3c19d2f888106618339ed72240b129f3e2fb8881ee0e9aed3b25fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_31e84a42dc3c19d2f888106618339ed72240b129f3e2fb8881ee0e9aed3b25fb->leave($__internal_31e84a42dc3c19d2f888106618339ed72240b129f3e2fb8881ee0e9aed3b25fb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
