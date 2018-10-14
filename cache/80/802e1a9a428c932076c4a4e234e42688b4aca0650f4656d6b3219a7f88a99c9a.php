<?php

/* page/full_page_card.html */
class __TwigTemplate_8f992752d4bc453daece2a1b5a6cd8d874e3a2d66cbbe9bd1c6e1d352576e9f4 extends Twig_Template
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
  <div class=\"ui column center grid flex-align-center ";
        // line 2
        if ( !($context["bottom_button"] ?? null)) {
            echo " h100";
        } else {
            echo " h85 mb10";
        }
        echo " plr60\">
    <div class=\"sixteen wide column\">
      <div class=\"ui dividing header tac mb60\">";
        // line 4
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</div>
        <div class=\"ui raised cards\">
          <div class=\"card full-page ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["card_content"] ?? null), "class", array())) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["card_content"] ?? null), "class", array()), "html", null, true);
        }
        echo "\">
            ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["card_content"] ?? null), "twig_data", array())) {
            // line 8
            echo "              ";
            $this->loadTemplate(("partial/" . twig_get_attribute($this->env, $this->source, ($context["card_content"] ?? null), "twig", array())), "page/full_page_card.html", 8)->display(array_merge($context, twig_get_attribute($this->env, $this->source, ($context["card_content"] ?? null), "twig_data", array())));
            // line 9
            echo "            ";
        } else {
            // line 10
            echo "              ";
            $this->loadTemplate(("partial/" . twig_get_attribute($this->env, $this->source, ($context["card_content"] ?? null), "twig", array())), "page/full_page_card.html", 10)->display($context);
            // line 11
            echo "            ";
        }
        // line 12
        echo "          </div>
        </div>
      </div>
    </div>
  </div>
  ";
        // line 17
        if (($context["bottom_button"] ?? null)) {
            // line 18
            echo "  <div class=\"flex flex-justify-center plr60\">
    <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bottom_button"] ?? null), "link", array()), "html", null, true);
            echo "\" class=\"w100\">
      <div class=\"massive ui button know-more w100\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bottom_button"] ?? null), "text", array()), "html", null, true);
            echo "</div>
    </a>
  </div>
  ";
        }
        // line 24
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "page/full_page_card.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 24,  76 => 20,  72 => 19,  69 => 18,  67 => 17,  60 => 12,  57 => 11,  54 => 10,  51 => 9,  48 => 8,  46 => 7,  40 => 6,  35 => 4,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "page/full_page_card.html", "C:\\xampp\\htdocs\\FirstAide-web\\template\\page\\full_page_card.html");
    }
}
