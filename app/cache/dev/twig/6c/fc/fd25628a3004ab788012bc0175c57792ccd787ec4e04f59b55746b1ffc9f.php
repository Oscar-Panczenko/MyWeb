<?php

/* MyWebSiteBundle:Page:admin.html.twig */
class __TwigTemplate_6cfcfd25628a3004ab788012bc0175c57792ccd787ec4e04f59b55746b1ffc9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MyWebSiteBundle::layout.html.twig");

        $this->blocks = array(
            'navigation' => array($this, 'block_navigation'),
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
    public function block_navigation($context, array $blocks = array())
    {
        // line 5
        echo "    <nav>
        <ul class=\"navigation\">
            <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("my_web_site_homepage");
        echo "\">Home</a></li>
            <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("my_web_site_admin");
        echo "\">Admin</a></li>
            <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a></li>
        </ul>
    </nav>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "    <section class=\"main-col\">
        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "    </section>
    <aside class=\"sidebar\">
        ";
        // line 27
        $this->displayBlock('sidebar', $context, $blocks);
        // line 28
        echo "    </aside>
";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "
            ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "email"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "body"), "html", null, true);
            echo " <br>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 21
            echo "                <h2>Aoutch ! No data !</h2>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
        ";
    }

    // line 27
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
        return array (  106 => 27,  101 => 23,  94 => 21,  84 => 19,  79 => 18,  76 => 17,  73 => 16,  68 => 28,  66 => 27,  62 => 25,  60 => 16,  57 => 15,  54 => 14,  46 => 9,  42 => 8,  38 => 7,  34 => 5,  31 => 4,);
    }
}
