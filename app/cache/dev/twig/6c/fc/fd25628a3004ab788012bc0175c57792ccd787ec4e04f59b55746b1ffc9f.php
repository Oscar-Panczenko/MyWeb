<?php

/* MyWebSiteBundle:Page:admin.html.twig */
class __TwigTemplate_6cfcfd25628a3004ab788012bc0175c57792ccd787ec4e04f59b55746b1ffc9f extends Twig_Template
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
        // line 15
        echo "    </section>
    <aside class=\"sidebar\">
        ";
        // line 17
        $this->displayBlock('sidebar', $context, $blocks);
        // line 18
        echo "    </aside>
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
            ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "email"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "body"), "html", null, true);
            echo " <br>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 11
            echo "                <h2>Aoutch ! No data !</h2>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
        ";
    }

    // line 17
    public function block_sidebar($context, array $blocks = array())
    {
        echo "Side Bar";
    }

    public function getTemplateName()
    {
        return "MyWebSiteBundle:Page:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 17,  77 => 13,  70 => 11,  60 => 9,  55 => 8,  52 => 7,  49 => 6,  44 => 18,  42 => 17,  38 => 15,  36 => 6,  33 => 5,  30 => 4,);
    }
}
