<?php

/* CollegeSearchCollegeBundle:HomePage:about.html.twig */
class __TwigTemplate_4f4036673a7de198c7510ff8cfbe8546edae2fe770e8304b05f102f5a447a4a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "About";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "\tWe started thinking about good stories – what makes them, and why they matter? Because more than ever, stories – inspiring, scary, cute – are everywhere and it’s become difficult to separate the really GOOD ones from all the noise.

So this STORY is about talking less and doing more. Because as we see it, a GOOD STORY is defined by its impact. Inspired by innovative social entrepreneurs – from Uncharted Play co-founder Jessica Matthews to Blake Mycoskie of TOMS, we’ve curated a marketplace devoted to changing the way we shop.

As for the stories? Some you’ll recognize. Others you’ll slip on (or sip on) for the first time. But whether its a pair of ROMA boots, Bombas socks, or a freshly brewed cup of TOMS ROASTING CO. coffee, each product tells a story that matters because it’s a story of people joining together to do something good – make change.


";
    }

    public function getTemplateName()
    {
        return "CollegeSearchCollegeBundle:HomePage:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  35 => 6,  29 => 4,);
    }
}
