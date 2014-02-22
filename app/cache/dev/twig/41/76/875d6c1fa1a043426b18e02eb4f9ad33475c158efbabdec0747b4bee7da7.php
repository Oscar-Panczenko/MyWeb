<?php

/* MyWebSiteBundle:Page:blog.html.twig */
class __TwigTemplate_4176875d6c1fa1a043426b18e02eb4f9ad33475c158efbabdec0747b4bee7da7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MyWebSiteBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
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
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <section class=\"main-col\">
        ";
        // line 6
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "    </section>
    <aside class=\"sidebar\">
        ";
        // line 14
        $this->displayBlock('sidebar', $context, $blocks);
        // line 15
        echo "    </aside>
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "        <header>
            <h1>Blog</h1>
        </header>
        <h1>Under construction. </h>
        ";
    }

    // line 14
    public function block_sidebar($context, array $blocks = array())
    {
        echo "Side Bar";
    }

    public function getTemplateName()
    {
        return "MyWebSiteBundle:Page:blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  52 => 7,  49 => 6,  44 => 15,  42 => 14,  38 => 12,  36 => 6,  33 => 5,  30 => 4,);
    }
}
