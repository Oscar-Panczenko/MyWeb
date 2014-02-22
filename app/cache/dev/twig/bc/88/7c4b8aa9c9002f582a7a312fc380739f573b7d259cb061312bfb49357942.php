<?php

/* MyWebSiteBundle:Page:login.html.twig */
class __TwigTemplate_bc887c4b8aa9c9002f582a7a312fc380739f573b7d259cb061312bfb49357942 extends Twig_Template
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
        // line 31
        echo "    </section>
    <aside class=\"sidebar\">
        ";
        // line 33
        $this->displayBlock('sidebar', $context, $blocks);
        // line 34
        echo "    </aside>
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "            ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "                <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
            ";
        }
        // line 10
        echo "
            <form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
                <label for=\"username\">Username:</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

                <label for=\"password\">Password:</label>
                <input type=\"password\" id=\"password\" name=\"_password\" />

                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

                <input type=\"hidden\" name=\"acme_security_admin\" value=\"account\" />

                ";
        // line 27
        echo "
                <button type=\"submit\">login</button>
            </form>
        ";
    }

    // line 33
    public function block_sidebar($context, array $blocks = array())
    {
        echo "Side Bar";
    }

    public function getTemplateName()
    {
        return "MyWebSiteBundle:Page:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 33,  84 => 27,  77 => 18,  69 => 13,  64 => 11,  61 => 10,  55 => 8,  52 => 7,  49 => 6,  44 => 34,  42 => 33,  38 => 31,  36 => 6,  33 => 5,  30 => 4,);
    }
}
