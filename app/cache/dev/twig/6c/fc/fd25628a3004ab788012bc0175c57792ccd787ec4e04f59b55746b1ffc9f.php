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
        // line 18
        echo "    </section>
    <aside class=\"sidebar\">
        ";
        // line 20
        $this->displayBlock('sidebar', $context, $blocks);
        // line 32
        echo "    </aside>
    <script>
        \$('#search_keywords').on('keyup change', function(e) {
            var keywords = \$('#search_keywords').val();
            if (keywords.length >= 3) {
                var form = \$('#search_form').serialize();
            } else {
                var form = undefined;
            }

            var url = \"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("my_web_site_search");
        echo "\";
            \$.post(url, form, function(data){
                \$('#data').html(data);
            });
        });

        \$(document).on('click', 'div.pagination span a', function(e){
            e.preventDefault();
            var keywords = \$('#search_keywords').val();
            if (keywords.length >= 3) {
                var form = \$('#search_form').serialize();
            } else {
                var form = undefined;
            }

            var url = \$(this).attr('href');
            \$.post(url, form, function(data){
                \$('#data').html(data);
            });
        });

        var url = \"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("my_web_site_search");
        echo "\";
        \$.post(url, {}, function(data){
            \$('#data').html(data);
        })
    </script>
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "            <section id=\"data\"></section>
        ";
    }

    // line 20
    public function block_sidebar($context, array $blocks = array())
    {
        // line 21
        echo "            <div class=\"search\">
                <h4>Search messages by Email</h4>
                <form action=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("my_web_site_admin");
        echo "\" method=\"get\" id=\"search_form\">
                    <input type=\"text\" name=\"keywords\" id=\"search_keywords\"/>
                    <input type=\"submit\" value=\"search\" />
                    <div class=\"help\">
                        Enter an email or just a part of it.
                    </div>
                </form>
            </div>
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
        return array (  125 => 23,  121 => 21,  118 => 20,  113 => 16,  110 => 15,  100 => 63,  76 => 42,  64 => 32,  62 => 20,  58 => 18,  56 => 15,  53 => 14,  50 => 13,  42 => 8,  38 => 7,  34 => 5,  31 => 4,);
    }
}
