<?php

/* MyWebSiteBundle:Page:contactEmail.txt.twig */
class __TwigTemplate_e75b6545e913e6c8afa3204fa61eb9ad143e2302d3d0d7bcc968eec8092ba802 extends Twig_Template
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
        // line 2
        echo "A contact enquiry was made at ";
        echo twig_date_format_filter($this->env, "now", "Y-m-d H:i");
        echo ".
Email registered:   ";
        // line 3
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "email");
        echo "
Message:            ";
        // line 4
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "body");
        echo "
";
    }

    public function getTemplateName()
    {
        return "MyWebSiteBundle:Page:contactEmail.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  24 => 3,  19 => 2,);
    }
}
