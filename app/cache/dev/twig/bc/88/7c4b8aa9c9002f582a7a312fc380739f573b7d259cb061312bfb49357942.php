<?php

/* MyWebSiteBundle:Page:login.html.twig */
class __TwigTemplate_bc887c4b8aa9c9002f582a7a312fc380739f573b7d259cb061312bfb49357942 extends Twig_Template
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
        echo "            ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "                <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
            ";
        }
        // line 8
        echo "            <section id=\"login\">
            <form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" >
                <label for=\"username\">Username:</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
                </br>
                <label for=\"password\">Password:</label>
                <input type=\"password\" id=\"password\" name=\"_password\" />

                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

                <input type=\"hidden\" name=\"acme_security_admin\" value=\"account\" />

                ";
        // line 25
        echo "                </br>
                <button type=\"submit\">login</button>
            </form>
            </section>
        ";
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
        return array (  63 => 25,  56 => 16,  48 => 11,  43 => 9,  40 => 8,  34 => 6,  31 => 5,  28 => 4,);
    }
}
