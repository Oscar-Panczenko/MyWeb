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
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a></li>
        </ul>
    </nav>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "    <section class=\"main-col\">
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "    </section>
    <aside class=\"sidebar\">
        ";
        // line 35
        $this->displayBlock('sidebar', $context, $blocks);
        // line 39
        echo "    </aside>
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "            <section id=\"data\">
                <table border=\"1px\" style=\"width:700px\">
                    <tr>
                        <th align=\"center\" bgcolor=\"#CCC\">Email</th>
                        <th align=\"center\" bgcolor=\"#CCC\">Body</th>
                    </tr>
                ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            echo "                    <tr>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "email"), "html", null, true);
            echo "</td>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "body"), "html", null, true);
            echo "</td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 28
            echo "                    <h2>Aoutch ! No data !</h2>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                </table>
            </section>
        ";
    }

    // line 35
    public function block_sidebar($context, array $blocks = array())
    {
        // line 36
        echo "            <h6>Search messages by Email.</h6>
            <input type=\"search\" />
        ";
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
        return array (  116 => 36,  113 => 35,  107 => 30,  100 => 28,  92 => 25,  88 => 24,  85 => 23,  80 => 22,  72 => 16,  69 => 15,  64 => 39,  62 => 35,  58 => 33,  56 => 15,  53 => 14,  50 => 13,  42 => 8,  38 => 7,  34 => 5,  31 => 4,);
    }
}
