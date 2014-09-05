<?php

/* ::base.html.twig */
class __TwigTemplate_a9f2546b030e91fbebcbfd93f99f0798a12afd1419c94d9bff7f750b4c49ba72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "-SrchMyCollege</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        
        
    </head>
    <body>
    \t<div id=\"site-header\">
    \t<div id=\"site-logo\">
    \t<a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("college_search_college_homepage");
        echo "\" title=\"Srch My College Homepage\"><img alt=\"SrchMyCollege logo\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/SrchMyCollege_logo.jpg"), "html", null, true);
        echo "\" width=\"110\" height=\"58\"></a>
    \t</div>
    \t\t";
        // line 17
        $this->displayBlock('navigation', $context, $blocks);
        // line 26
        echo "    \t</div>
    \t<section id=\"site-body\">
    \t\t";
        // line 28
        $this->displayBlock('body', $context, $blocks);
        echo "\t
    \t</section>
    \t<div id=\"site-footer\">
    \t\t";
        // line 31
        $this->displayBlock('footer', $context, $blocks);
        // line 34
        echo "    \t</div>
    \t
        ";
        // line 36
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "        
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Home";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        \t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/baseTemplate.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 17
    public function block_navigation($context, array $blocks = array())
    {
        // line 18
        echo "    \t\t\t<nav>
    \t\t\t\t<ul class=\"navigation\">
    \t\t\t\t\t<li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("college_search_college_homepage");
        echo "\">Home</a></li>
    \t\t\t\t\t<li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("college_search_college_aboutpage");
        echo "\">About us</a></li>
    \t\t\t\t\t<li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("college_search_college_contactpage");
        echo "\">Contact</a></li>
    \t\t\t\t</ul>
    \t\t\t</nav>
    \t\t";
    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
    }

    // line 31
    public function block_footer($context, array $blocks = array())
    {
        // line 32
        echo "    \t\t\tAll Rights Reserved. Powered by <a href=\"#\"><b>Sailee Nachankar</b></a>.
    \t\t";
    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        // line 37
        echo "        \t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js\"></script>
        ";
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
        return array (  134 => 37,  131 => 36,  126 => 32,  123 => 31,  118 => 28,  110 => 22,  106 => 21,  102 => 20,  98 => 18,  95 => 17,  88 => 7,  85 => 6,  79 => 5,  72 => 39,  70 => 36,  66 => 34,  64 => 31,  58 => 28,  45 => 15,  35 => 6,  31 => 5,  25 => 1,  60 => 20,  55 => 16,  52 => 17,  46 => 10,  42 => 9,  37 => 9,  32 => 5,  29 => 4,  67 => 30,  54 => 26,  41 => 14,  28 => 5,);
    }
}
