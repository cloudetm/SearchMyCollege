<?php

/* CollegeSearchCollegeBundle:HomePage:index.html.twig */
class __TwigTemplate_dcf6ce041a62f110886c4ed2627a9171e4a8c157826adef5705923b446608ef1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CollegeSearchCollegeBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CollegeSearchCollegeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        echo " 
\t<div id=\"container\">
\t\t<div id=\"title\">
\t\t\tCollege Categories
\t\t</div>
\t\t<div id=\"categoryList\">
\t\t
\t\t\t<div class=\"category\">
\t\t\t\t<div class=\"img\">
\t\t\t\t<a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("college_search_college_collegeList_showListpage", array("category" => "Junior College"));
        echo "\"><img alt=\"Junior colleges\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/junior_coll.jpg"), "html", null, true);
        echo "\" width=\"235px\" height=\"235px\"></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"img_name\">
\t\t\t\t\tJunior Colleges
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"category\">
\t\t\t\t<div class=\"img\">
\t\t\t\t<a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("college_search_college_collegeList_showListpage", array("category" => "Engineering College"));
        echo "\"><img alt=\"Engineering colleges\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/engineering_coll.jpg"), "html", null, true);
        echo "\" width=\"235px\" height=\"235px\"></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"img_name\">
\t\t\t\t\tEngineering Colleges
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"category\">
\t\t\t\t<div class=\"img\">
\t\t\t\t<a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("college_search_college_collegeList_showListpage", array("category" => "Medical College"));
        echo "\"><img alt=\"Medical colleges\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/medical_coll.jpg"), "html", null, true);
        echo "\" width=\"235px\" height=\"235px\"></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"img_name\">
\t\t\t\t\tMedical Colleges
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "CollegeSearchCollegeBundle:HomePage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 30,  54 => 22,  41 => 14,  28 => 5,);
    }
}
