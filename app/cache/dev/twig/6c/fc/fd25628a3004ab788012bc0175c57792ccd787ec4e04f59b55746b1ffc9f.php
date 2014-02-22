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
        // line 34
        echo "    </section>
    <aside class=\"sidebar\">
        ";
        // line 36
        $this->displayBlock('sidebar', $context, $blocks);
        // line 37
        echo "    </aside>
";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "            <section id=\"data\">
                <table border=\"1\" style=\"width:700px\">
                    <tr>
                        <th align=\"center\">Email</th>
                        <th align=\"center\">Body</th>
                    </tr>
                ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 24
            echo "                    <tr>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "email"), "html", null, true);
            echo "</td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "body"), "html", null, true);
            echo "</td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 29
            echo "                    <h2>Aoutch ! No data !</h2>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                </table>
            </section>
        ";
    }

    // line 36
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
        return array (  117 => 36,  111 => 31,  104 => 29,  96 => 26,  92 => 25,  89 => 24,  84 => 23,  76 => 17,  73 => 16,  68 => 37,  66 => 36,  62 => 34,  60 => 16,  57 => 15,  54 => 14,  46 => 9,  42 => 8,  38 => 7,  34 => 5,  31 => 4,);
    }
}
