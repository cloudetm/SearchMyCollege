<?php

/* CollegeSearchCollegeBundle:HomePage:contactEmail.txt.twig */
class __TwigTemplate_659caf1f2b682853c786fd7e3918464e084b85980c820593c8e070b3780079cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "A contact enquiry was made by ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "name"), "html", null, true);
        echo " at ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d H:i"), "html", null, true);
        echo ".

Subject: ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "subject"), "html", null, true);
        echo "
Body:
";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "body"), "html", null, true);
        echo "
Reply-To: ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "email"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "CollegeSearchCollegeBundle:HomePage:contactEmail.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 12,  53 => 9,  110 => 22,  70 => 36,  58 => 28,  239 => 101,  236 => 100,  226 => 93,  222 => 92,  216 => 89,  202 => 81,  197 => 79,  191 => 76,  181 => 69,  175 => 66,  146 => 52,  134 => 37,  126 => 32,  118 => 28,  114 => 38,  81 => 22,  77 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 63,  140 => 55,  132 => 51,  128 => 49,  107 => 34,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 84,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 20,  71 => 18,  67 => 17,  63 => 16,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 6,  75 => 16,  68 => 14,  56 => 10,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 21,  78 => 20,  46 => 10,  27 => 3,  44 => 10,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 60,  158 => 67,  156 => 66,  151 => 54,  142 => 51,  138 => 50,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 24,  62 => 23,  49 => 19,  24 => 4,  25 => 1,  19 => 1,  79 => 17,  72 => 15,  69 => 17,  47 => 9,  40 => 6,  37 => 9,  22 => 2,  246 => 90,  157 => 57,  145 => 46,  139 => 45,  131 => 36,  123 => 31,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 18,  96 => 31,  83 => 25,  74 => 19,  66 => 34,  55 => 16,  52 => 17,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 5,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 21,  103 => 32,  99 => 31,  95 => 23,  92 => 21,  86 => 22,  82 => 21,  80 => 19,  73 => 19,  64 => 31,  60 => 15,  57 => 13,  54 => 26,  51 => 12,  48 => 11,  45 => 15,  42 => 7,  39 => 6,  36 => 6,  33 => 4,  30 => 3,);
    }
}
