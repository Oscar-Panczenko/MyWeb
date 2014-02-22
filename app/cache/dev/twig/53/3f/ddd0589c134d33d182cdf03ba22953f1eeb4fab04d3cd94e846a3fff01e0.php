<?php

/* MyWebSiteBundle::layout.html.twig */
class __TwigTemplate_533fddd0589c134d33d182cdf03ba22953f1eeb4fab04d3cd94e846a3fff01e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mywebsite/css/contact.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "MyWebSiteBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  37 => 6,  32 => 5,  29 => 4,  82 => 17,  77 => 13,  70 => 11,  60 => 9,  55 => 8,  52 => 7,  49 => 6,  44 => 18,  42 => 17,  38 => 15,  36 => 6,  33 => 5,  30 => 4,);
    }
}
