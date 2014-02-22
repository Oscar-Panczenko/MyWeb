<?php

/* MyWebSiteBundle:Page:robotics.html.twig */
class __TwigTemplate_60d396b96c390054048e3333e6f97db76aaf03e4ba397d3e323916095a7d0b19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MyWebSiteBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyWebSiteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <header>
        <h1>robotics</h1>
    </header>
<h1>Under construction </h>
";
    }

    public function getTemplateName()
    {
        return "MyWebSiteBundle:Page:robotics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,);
    }
}
