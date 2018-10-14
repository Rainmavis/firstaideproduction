<?php

/* menu.html */
class __TwigTemplate_877f4289392a18203ca64e07f6f7e90b0f7a1107092f4c9fa1bb6dfa7c50d0ed extends Twig_Template
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
        echo "<div class=\"ui fixed inverted main menu\">
  <div class=\"ui container\">
    <a class=\"launch icon item show-menu-button\">
      <i class=\"content icon\"></i>
    </a>
    <div class=\"item\">Firstaide</div>
  </div>
</div>
<div class=\"ui left vertical sidebar menu mustard\">
  ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 11
            echo "  \t";
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "type", array()) && (twig_get_attribute($this->env, $this->source, $context["i"], "type", array()) == "logo"))) {
                // line 12
                echo "      <a class=\"item\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "url", array()), "html", null, true);
                echo "\">
        <img src=\"";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "img_src", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "text", array()), "html", null, true);
                echo "\"/>
      </a>
  \t";
            } else {
                // line 16
                echo "  \t\t";
                if (twig_get_attribute($this->env, $this->source, $context["i"], "sub_menu", array())) {
                    // line 17
                    echo "        <div class=\"sub-menu-item\">
          <div class=\"item sub-menu-header\">";
                    // line 18
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "text", array()), "html", null, true);
                    echo "</div>
          <div class=\"menu hide\">
            ";
                    // line 20
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["i"], "sub_menu", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 21
                        echo "              <a class=\"item\" href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "url", array()), "html", null, true);
                        echo "\">
                ";
                        // line 22
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "text", array()), "html", null, true);
                        echo "
              </a>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "          </div>
        </div>
      ";
                } else {
                    // line 28
                    echo "        <a class=\"item\" ";
                    if (twig_get_attribute($this->env, $this->source, $context["i"], "elementId", array())) {
                        echo "id=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "elementId", array()), "html", null, true);
                        echo "\"";
                    }
                    echo " href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "url", array()), "html", null, true);
                    echo "\">
          ";
                    // line 29
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "text", array()), "html", null, true);
                    echo "
        </a>
      ";
                }
                // line 32
                echo "  \t";
            }
            // line 33
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "menu.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 34,  108 => 33,  105 => 32,  99 => 29,  88 => 28,  83 => 25,  74 => 22,  69 => 21,  65 => 20,  60 => 18,  57 => 17,  54 => 16,  46 => 13,  41 => 12,  38 => 11,  34 => 10,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "menu.html", "C:\\xampp\\htdocs\\FirstAide-web\\template\\menu.html");
    }
}
