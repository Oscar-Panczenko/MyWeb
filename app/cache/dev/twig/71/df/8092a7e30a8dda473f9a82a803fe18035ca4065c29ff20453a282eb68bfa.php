<?php

/* MyWebSiteBundle:Page:webdev.html.twig */
class __TwigTemplate_71df8092a7e30a8dda473f9a82a803fe18035ca4065c29ff20453a282eb68bfa extends Twig_Template
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
        <h1>Web Development</h1>
    </header>
<h1>Under construction </h>
";
    }

    public function getTemplateName()
    {
        return "MyWebSiteBundle:Page:webdev.html.twig";
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
