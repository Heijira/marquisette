<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_9870c9e9b20d34ec30608da0877ba120234d5be5b942d4899b0f35e90635cf3b extends Twig_Template
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
        $__internal_6fa2a88b5c2849673e91002cebf9717159677eef332c017614fcd18af526fcd7 = $this->env->getExtension("native_profiler");
        $__internal_6fa2a88b5c2849673e91002cebf9717159677eef332c017614fcd18af526fcd7->enter($__internal_6fa2a88b5c2849673e91002cebf9717159677eef332c017614fcd18af526fcd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_6fa2a88b5c2849673e91002cebf9717159677eef332c017614fcd18af526fcd7->leave($__internal_6fa2a88b5c2849673e91002cebf9717159677eef332c017614fcd18af526fcd7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
