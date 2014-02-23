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
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 22
        $this->displayBlock('navigation', $context, $blocks);
        // line 30
        echo "                </div>
            </header>

            <section id=\"front\">
            <hgroup>
                ";
        // line 35
        $this->displayBlock('front_line', $context, $blocks);
        // line 36
        echo "            </hgroup>
            </section>

            ";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 43
        echo "
            <div id=\"footer\">
                ";
        // line 45
        $this->displayBlock('footer', $context, $blocks);
        // line 48
        echo "            </div>
        </section>

        ";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
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
        echo $this->env->getExtension('routing')->getPath("my_web_site_admin");
        echo "\">Admin</a></li>
\t\t\t\t                <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("my_web_site_login");
        echo "\">Login</a></li>
                            </ul>
                        </nav>
                    ";
    }

    // line 35
    public function block_front_line($context, array $blocks = array())
    {
        echo "<h2>MY <a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_web_site_homepage");
        echo "\">DEMO SITE.</a></h2>";
    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        // line 40
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "            ";
        $this->displayBlock('sidebar', $context, $blocks);
        // line 42
        echo "            ";
    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
    }

    // line 41
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 45
    public function block_footer($context, array $blocks = array())
    {
        // line 46
        echo "                   Created by Oscar Hernandez
                ";
    }

    // line 51
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
        return array (  169 => 51,  164 => 46,  161 => 45,  156 => 41,  151 => 40,  147 => 42,  144 => 41,  141 => 40,  138 => 39,  130 => 35,  122 => 26,  118 => 25,  114 => 23,  111 => 22,  105 => 13,  101 => 11,  98 => 10,  92 => 6,  86 => 52,  84 => 51,  79 => 48,  77 => 45,  73 => 43,  71 => 39,  66 => 36,  64 => 35,  57 => 30,  55 => 22,  44 => 15,  42 => 10,  35 => 6,  28 => 1,);
    }
}
