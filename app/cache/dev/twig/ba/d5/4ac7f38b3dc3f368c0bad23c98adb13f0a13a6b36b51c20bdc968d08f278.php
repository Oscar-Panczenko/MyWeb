<?php

/* ::base.html.twig */
class __TwigTemplate_bad54ac7f38b3dc3f368c0bad23c98adb13f0a13a6b36b51c20bdc968d08f278 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'front_line' => array($this, 'block_front_line'),
            'content' => array($this, 'block_content'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - messages</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/feather.ico"), "html", null, true);
        echo "\" />
        <script src=\"http://code.jquery.com/jquery-1.11.0.min.js\"></script>
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 23
        $this->displayBlock('navigation', $context, $blocks);
        // line 31
        echo "                </div>
            </header>

            <section id=\"front\">
            <hgroup>
                ";
        // line 36
        $this->displayBlock('front_line', $context, $blocks);
        // line 37
        echo "            </hgroup>
            </section>

            ";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "
            <div id=\"footer\">
                ";
        // line 46
        $this->displayBlock('footer', $context, $blocks);
        // line 49
        echo "            </div>
        </section>

        ";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Oscar Panczenko";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 23
    public function block_navigation($context, array $blocks = array())
    {
        // line 24
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("my_web_site_admin");
        echo "\">Admin</a></li>
\t\t\t\t                <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("my_web_site_login");
        echo "\">Login</a></li>
                            </ul>
                        </nav>
                    ";
    }

    // line 36
    public function block_front_line($context, array $blocks = array())
    {
        echo "<h2><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_web_site_homepage");
        echo "\">MY DEMO SITE</a></h2>";
    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
        // line 41
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "            ";
        $this->displayBlock('sidebar', $context, $blocks);
        // line 43
        echo "            ";
    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
    }

    // line 42
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 46
    public function block_footer($context, array $blocks = array())
    {
        // line 47
        echo "                   Created by Oscar Hernandez
                ";
    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 52,  165 => 47,  162 => 46,  157 => 42,  152 => 41,  148 => 43,  145 => 42,  142 => 41,  139 => 40,  131 => 36,  123 => 27,  119 => 26,  115 => 24,  112 => 23,  106 => 13,  102 => 11,  99 => 10,  93 => 6,  85 => 52,  80 => 49,  74 => 44,  72 => 40,  65 => 36,  58 => 31,  56 => 23,  42 => 10,  35 => 6,  28 => 1,  43 => 9,  37 => 6,  87 => 53,  82 => 24,  78 => 46,  73 => 21,  67 => 37,  60 => 15,  51 => 12,  48 => 11,  44 => 15,  41 => 9,  38 => 8,  32 => 5,  29 => 4,);
    }
}
