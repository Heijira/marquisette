<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_242d43e271928f98638f481c27e61156f89602d2d9e8fcf46b0e27281d0ef159 extends Twig_Template
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
        $__internal_1a20fe45f4cdddf5e5fa1570b84a33b2fa877702bd93461c7a4960ed4552dcca = $this->env->getExtension("native_profiler");
        $__internal_1a20fe45f4cdddf5e5fa1570b84a33b2fa877702bd93461c7a4960ed4552dcca->enter($__internal_1a20fe45f4cdddf5e5fa1570b84a33b2fa877702bd93461c7a4960ed4552dcca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_1a20fe45f4cdddf5e5fa1570b84a33b2fa877702bd93461c7a4960ed4552dcca->leave($__internal_1a20fe45f4cdddf5e5fa1570b84a33b2fa877702bd93461c7a4960ed4552dcca_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
