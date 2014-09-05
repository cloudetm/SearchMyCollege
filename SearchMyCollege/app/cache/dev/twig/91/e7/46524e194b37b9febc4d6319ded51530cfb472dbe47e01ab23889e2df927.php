<?php

/* CollegeSearchCollegeBundle:CollegeListPage:collegeDetail.html.twig */
class __TwigTemplate_91e746524e194b37b9febc4d6319ded51530cfb472dbe47e01ab23889e2df927 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CollegeSearchCollegeBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["colDetail"]) ? $context["colDetail"] : $this->getContext($context, "colDetail")), "name"), "html", null, true);
        echo " list";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
\t<div id=\"container\">
\t\t<div id=\"img_n_add\">
\t\t\t<img class=\"largeimg\" alt=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["colDetail"]) ? $context["colDetail"] : $this->getContext($context, "colDetail")), "name"), "html", null, true);
        echo " not found\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "images/", 1 => $this->getAttribute((isset($context["colDetail"]) ? $context["colDetail"] : $this->getContext($context, "colDetail")), "photo")))), "html", null, true);
        echo "\">
\t\t\t<div class=\"add\">
\t\t\t\t<h1 class=\"title\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["colDetail"]) ? $context["colDetail"] : $this->getContext($context, "colDetail")), "name"), "html", null, true);
        echo "</h1>
\t\t\t\t<div class=\"icongrp\">
\t\t\t\t<img alt=\"phone icon\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/address.jpg"), "html", null, true);
        echo "\" class=\"icon\">
\t\t\t\t<address class=\"icontxt\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["colDetail"]) ? $context["colDetail"] : $this->getContext($context, "colDetail")), "address"), "html", null, true);
        echo "</address>
\t\t\t\t</div>
\t\t\t\t<div class=\"icongrp\">
\t\t\t\t<img alt=\"phone icon\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/phone.jpg"), "html", null, true);
        echo "\" class=\"icon\">
\t\t\t\t<p class=\"icontxt\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["colDetail"]) ? $context["colDetail"] : $this->getContext($context, "colDetail")), "phone"), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"icongrp\">
\t\t\t\t<img alt=\"email icon\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/email.png"), "html", null, true);
        echo "\" class=\"icon\">
\t\t\t\t<p class=\"icontxt\"><a href=\"#\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["colDetail"]) ? $context["colDetail"] : $this->getContext($context, "colDetail")), "email"), "html", null, true);
        echo "</a></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"icongrp\">
\t\t\t\t<img alt=\"web url\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/url.jpg"), "html", null, true);
        echo "\" class=\"icon\">
\t\t\t\t<p class=\"icontxt\"><a href=\"http://";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["colDetail"]) ? $context["colDetail"] : $this->getContext($context, "colDetail")), "url"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["colDetail"]) ? $context["colDetail"] : $this->getContext($context, "colDetail")), "url"), "html", null, true);
        echo "</a></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"about\">
\t\t\t<h3>About College:</h3>
\t\t\t<aside id=\"aside\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["colDetail"]) ? $context["colDetail"] : $this->getContext($context, "colDetail")), "info"), "html", null, true);
        echo "</aside>
\t\t\t<p id=\"readMore\"><b>Read more..</b></p>
\t\t\t<button id=\"disabled\"><img alt=\"close_button\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/Close.png"), "html", null, true);
        echo "\" height=\"20px\" width=\"20px\"></button>
\t\t</div>
\t\t<div class=\"about\">
\t\t\t<h3>Key-facts:</h3>
\t\t\t<p><b>Courses offered:</b> ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["colDetail"]) ? $context["colDetail"] : $this->getContext($context, "colDetail")), "courses"), "html", null, true);
        echo "</p>
\t\t\t<p><b>Fees:</b> Rs.";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["colDetail"]) ? $context["colDetail"] : $this->getContext($context, "colDetail")), "fees"), "html", null, true);
        echo "</p>
\t\t</div>
\t\t<div class=\"about\">
\t\t\t<h3 id=\"applyNow\">Click here to apply now</h3>
\t\t\t<div id=\"form\">
\t\t\t\t<form action=\"#\" method=\"post\" ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["applyNowform"]) ? $context["applyNowform"] : $this->getContext($context, "applyNowform")), 'enctype');
        echo " class=\"formApply\">
\t\t\t\t
\t\t\t\t\t<div class=\"note\"><span><b><i>NOTE:</i></b></span> The information submitted through this form is directly sent to college's admission department. We are not responsible for providing admission nor is the information stored with us.</div>
    \t\t\t\t<p class=\"section-title\"><b>Personal Details:</b></p>
    \t\t\t\t\t<div class=\"form-section\">
    \t\t\t\t\t\t";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["applyNowform"]) ? $context["applyNowform"] : $this->getContext($context, "applyNowform")), "firstName"), 'row');
        echo "
    \t\t\t\t\t\t";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["applyNowform"]) ? $context["applyNowform"] : $this->getContext($context, "applyNowform")), "lastName"), 'row');
        echo "
    \t\t\t\t\t\t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["applyNowform"]) ? $context["applyNowform"] : $this->getContext($context, "applyNowform")), "addressLine1"), 'row');
        echo "
    \t\t\t\t\t\t";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["applyNowform"]) ? $context["applyNowform"] : $this->getContext($context, "applyNowform")), "addressLine2"), 'row');
        echo "
    \t\t\t\t\t\t<div class=\"large-div\">
    \t\t\t\t\t\t\t";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["applyNowform"]) ? $context["applyNowform"] : $this->getContext($context, "applyNowform")), "city"), 'row');
        echo "
    \t\t\t\t\t\t</div>
    \t\t\t\t\t\t<div class=\"small\">
    \t\t\t\t\t\t\t";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["applyNowform"]) ? $context["applyNowform"] : $this->getContext($context, "applyNowform")), "zipcode"), 'row');
        echo "
    \t\t\t\t\t\t</div>
    \t\t\t\t\t\t<div class=\"left-select\">
    \t\t\t\t\t\t\t";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["applyNowform"]) ? $context["applyNowform"] : $this->getContext($context, "applyNowform")), "dateOfBirth"), 'row');
        echo "
    \t\t\t\t\t\t</div>
    \t\t\t\t\t\t<div class=\"right-select\">
    \t\t\t\t\t\t\t";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["applyNowform"]) ? $context["applyNowform"] : $this->getContext($context, "applyNowform")), "gender"), 'row');
        echo "
    \t\t\t\t\t\t</div>
    \t\t\t\t\t\t<div class=\"large-div\">
    \t\t\t\t\t\t\t";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["applyNowform"]) ? $context["applyNowform"] : $this->getContext($context, "applyNowform")), "emailID"), 'row');
        echo "
    \t\t\t\t\t\t</div>
    \t\t\t\t\t\t<div class=\"small\">
    \t\t\t\t\t\t\t";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["applyNowform"]) ? $context["applyNowform"] : $this->getContext($context, "applyNowform")), "contactNo"), 'row');
        echo "
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t<p class=\"section-title\"><b>S.S.C Details:</b></p>
    \t\t\t\t\t<div class=\"form-section\">
    \t\t\t\t\t\t<p class=\"section-subnote\">Applicants must be able to produce all original certificates and 2 attestation copies during the time of admission.</p>
    \t\t\t\t\t\t<div class=\"large-div\">
    \t\t\t\t\t\t\t";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["applyNowform"]) ? $context["applyNowform"] : $this->getContext($context, "applyNowform")), "universityName"), 'row');
        echo "
    \t\t\t\t\t\t</div>
    \t\t\t\t\t\t
    \t\t\t\t\t\t\t";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["applyNowform"]) ? $context["applyNowform"] : $this->getContext($context, "applyNowform")), "passingYear"), 'row');
        echo "
    \t\t\t\t\t\t<div class=\"left-select\">
    \t\t\t\t\t\t\t";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["applyNowform"]) ? $context["applyNowform"] : $this->getContext($context, "applyNowform")), "classSecured"), 'row');
        echo "
    \t\t\t\t\t\t</div>
    \t\t\t\t\t\t<div class=\"smallmarks\">
    \t\t\t\t\t\t\t";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["applyNowform"]) ? $context["applyNowform"] : $this->getContext($context, "applyNowform")), "marksSecured"), 'row');
        echo "
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t<p class=\"section-title\"><b>Select Course:</b></p>
    \t\t\t\t\t<div class=\"form-section\">
    \t\t\t\t\t\t";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["applyNowform"]) ? $context["applyNowform"] : $this->getContext($context, "applyNowform")), "course"), 'row');
        echo "
    \t\t\t\t\t</div>
    \t\t\t\t<p class=\"section-subnote\">By clicking on apply button I agree that the information provided by me is correct to the best of my knowledge.</p>
    \t\t\t\t";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["applyNowform"]) ? $context["applyNowform"] : $this->getContext($context, "applyNowform")), "Apply"), 'row');
        echo "
    \t\t\t\t<img alt=\"close_button\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/Close.png"), "html", null, true);
        echo "\" height=\"20px\" width=\"20px\" id=\"formClose\">
    \t\t\t</form>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"about\">
\t\t\t<h3>Comments</h3>
\t\t\t<div class=\"previous-comments\">
\t\t\t\t";
        // line 100
        $this->env->loadTemplate("CollegeSearchCollegeBundle:Comment:index.html.twig")->display(array_merge($context, array("comments" => (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")))));
        // line 101
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t";
    }

    // line 106
    public function block_javascripts($context, array $blocks = array())
    {
        // line 107
        echo "\t\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t
\t\t<script> 
   \t\t\tjQuery(document).ready(function (\$) {
   \t\t\t\t\$('#readMore').xtendBox();
   \t\t\t\t\$('#disabled').reduceBox();
   \t\t\t\t\$('#applyNow').toggleForm();
   \t\t\t\t\$('#formClose').slideUpForm();
    \t\t});
\t\t</script>
\t";
    }

    public function getTemplateName()
    {
        return "CollegeSearchCollegeBundle:CollegeListPage:collegeDetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 107,  245 => 106,  238 => 101,  236 => 100,  226 => 93,  222 => 92,  216 => 89,  208 => 84,  202 => 81,  197 => 79,  191 => 76,  181 => 69,  175 => 66,  169 => 63,  163 => 60,  157 => 57,  151 => 54,  146 => 52,  142 => 51,  138 => 50,  134 => 49,  126 => 44,  118 => 39,  114 => 38,  107 => 34,  102 => 32,  91 => 26,  87 => 25,  81 => 22,  77 => 21,  71 => 18,  67 => 17,  61 => 14,  57 => 13,  52 => 11,  45 => 9,  40 => 6,  37 => 5,  30 => 3,);
    }
}
