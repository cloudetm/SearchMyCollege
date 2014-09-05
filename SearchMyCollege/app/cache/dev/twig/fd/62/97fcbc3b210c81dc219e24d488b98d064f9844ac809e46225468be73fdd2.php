<?php

/* CollegeSearchCollegeBundle:CollegeListPage:show.html.twig */
class __TwigTemplate_fd6297fcbc3b210c81dc219e24d488b98d064f9844ac809e46225468be73fdd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CollegeSearchCollegeBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "html", null, true);
        echo " list";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t<div id=\"container\">
\t<div id=\"flow\"><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("college_search_college_homepage");
        echo "\">Home</a>->";
        echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "html", null, true);
        echo " List</div>
\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "\t<article class=\"article\">
\t<a title=\"View site\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("college_search_college_collegeList_collegeDetailpage", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"), "category" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "category"))), "html", null, true);
            echo "\"><img alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "images/", 1 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "photo")))), "html", null, true);
            echo "\"></a>
\t\t\t
\t\t\t<h1><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("college_search_college_collegeList_collegeDetailpage", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"), "category" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "category"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
            echo "</a></h1>
\t\t\t
\t\t\t";
            // line 15
            echo "\t\t\t<div class=\"courses-tag\">
\t\t\t\t<p><b>City:</b> ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "city"), "html", null, true);
            echo "</p>
\t\t\t\t<p><b>Courses:</b> ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "courses"), "html", null, true);
            echo "</p>
\t\t\t</div>
\t</article>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 21
            echo "\t\t<p>Sorry, there are no college details available at the moment.</p>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t</div>
\t
";
    }

    public function getTemplateName()
    {
        return "CollegeSearchCollegeBundle:CollegeListPage:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 23,  88 => 21,  79 => 17,  75 => 16,  72 => 15,  65 => 12,  56 => 10,  53 => 9,  48 => 8,  42 => 7,  39 => 6,  36 => 5,  29 => 3,);
    }
}
