<?php

/* page/page.html */
class __TwigTemplate_3c185788e3625bed80396b1b585ccb03b6f93ccbb374e3d21499667de4c01856 extends Twig_Template
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
        echo "<div class=\"article\">
  <div class=\"ui column center grid flex-align-start mt20 h100 plr60\">
    <div class=\"sixteen wide column\">
    ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["card_content"] ?? null), "data", array())) {
            // line 5
            echo "      ";
            $this->loadTemplate(("partial/" . twig_get_attribute($this->env, $this->source, ($context["card_content"] ?? null), "twig", array())), "page/page.html", 5)->display(twig_get_attribute($this->env, $this->source, ($context["card_content"] ?? null), "data", array()));
            // line 6
            echo "    ";
        } else {
            // line 7
            echo "      ";
            $this->loadTemplate(("partial/" . twig_get_attribute($this->env, $this->source, ($context["card_content"] ?? null), "twig", array())), "page/page.html", 7)->display($context);
            // line 8
            echo "    ";
        }
        // line 9
        echo "    </div>
  </div>
  ";
        // line 11
        if (($context["modal"] ?? null)) {
            // line 12
            echo "  <div class=\"ui modal\">
    <div class=\"header\"></div>
    <div class=\"content\"></div>
    <div class=\"actions\">
      <div class=\"ui cancel green button\">Close</div>
    </div>
  </div>
  ";
        }
        // line 20
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "page/page.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 20,  48 => 12,  46 => 11,  42 => 9,  39 => 8,  36 => 7,  33 => 6,  30 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "page/page.html", "C:\\xampp\\htdocs\\FirstAide-web\\template\\page\\page.html");
    }
}
