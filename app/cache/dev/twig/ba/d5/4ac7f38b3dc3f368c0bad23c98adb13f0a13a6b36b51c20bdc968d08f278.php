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
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
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
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 22
        $this->displayBlock('navigation', $context, $blocks);
        // line 31
        echo "                </div>
            </header>

            <section id=\"front\">
            <hgroup>
                <!--<h2>";
        // line 36
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>-->
                <h2>";
        // line 37
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
            </hgroup>
            </section>

            ";
        // line 41
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "
            <div id=\"footer\">
                ";
        // line 47
        $this->displayBlock('footer', $context, $blocks);
        // line 50
        echo "            </div>
        </section>

        ";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 54
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

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("my_web_site_homepage");
        echo "\">Home</a></li>
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
    public function block_blog_title($context, array $blocks = array())
    {
        echo "Engineer+Developer+Designer";
    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        echo "Welcome to my Demo Site.";
    }

    // line 41
    public function block_content($context, array $blocks = array())
    {
        // line 42
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "            ";
        $this->displayBlock('sidebar', $context, $blocks);
        // line 44
        echo "            ";
    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        // line 48
        echo "                   Created by Oscar Hernandez
                ";
    }

    // line 53
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
        return array (  182 => 53,  177 => 48,  174 => 47,  169 => 43,  164 => 42,  160 => 44,  157 => 43,  154 => 42,  151 => 41,  145 => 37,  139 => 36,  131 => 27,  127 => 26,  123 => 25,  119 => 23,  116 => 22,  110 => 13,  106 => 11,  103 => 10,  97 => 6,  91 => 54,  89 => 53,  84 => 50,  78 => 45,  76 => 41,  69 => 37,  65 => 36,  58 => 31,  56 => 22,  45 => 15,  43 => 10,  37 => 6,  32 => 5,  29 => 1,  82 => 47,  77 => 13,  70 => 11,  60 => 9,  55 => 8,  52 => 7,  49 => 6,  44 => 18,  42 => 17,  38 => 15,  36 => 6,  33 => 5,  30 => 4,);
    }
}
