<?php

/* dashboard.html */
class __TwigTemplate_d1d0555659544054a85c1e47dc56edbaacfba81b9651801d7e08cc3fc23d7ed1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"ui bottom attached segment pushable\">
    <div class=\"pusher\">
        <div class=\"full height\">
            ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menu", array())) {
            // line 5
            echo "                ";
            $this->loadTemplate("menu.html", "dashboard.html", 5)->display(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menu", array()));
            // line 6
            echo "            ";
        }
        // line 7
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", array()), "template", array())) {
            // line 8
            echo "                ";
            $context["page_template_data"] = twig_array_merge(array("country_list" => twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "country_list", array())), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", array()), "data", array()));
            // line 9
            echo "                ";
            $this->loadTemplate(("page/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", array()), "template", array())), "dashboard.html", 9)->display(($context["page_template_data"] ?? null));
            // line 10
            echo "            ";
        } else {
            // line 11
            echo "                <div class=\"article flex flex-justify-center h100\">
                    <div class=\"ui column stackable center page grid\">
                        <div class=\"three wide column\"></div>
                        <div class=\"ten wide column flex flex-align-center flex-column flex-justify-center\">
                            <div class=\"fs17\">Welcome to</div>
                            <div><img src=\"images/firstaide_logo.png\" class=\"w100\"/></div>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 21
        echo "        </div>
    </div>
</div>
<div class=\"ui modal\">
    <div class=\"header\"></div>
    <div class=\"content\"></div>
    <div class=\"actions\">
        <div class=\"ui cancel green button\">Close</div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "dashboard.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 21,  48 => 11,  45 => 10,  42 => 9,  39 => 8,  36 => 7,  33 => 6,  30 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dashboard.html", "C:\\xampp\\htdocs\\FirstAide-web\\template\\dashboard.html");
    }
}
