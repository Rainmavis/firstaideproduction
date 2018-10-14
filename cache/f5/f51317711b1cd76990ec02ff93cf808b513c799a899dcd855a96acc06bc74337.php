<?php

/* partial/get_help_now.html */
class __TwigTemplate_c0653c8135590366ab28824e2c5d3b8eb816e3034109461132dc4fe793a9c416 extends Twig_Template
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
        echo "<div class=\"ui dividing header tac mb10\">";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</div>
<div class=\"ui tiny header tac mb30\">This information is for ";
        // line 2
        echo twig_escape_filter($this->env, ($context["country_name"] ?? null), "html", null, true);
        echo " (current post)</div>
<div class=\"get-help-page\">
  <div id=\"get-help-section\">
    <div class=\"ui column centered grid mh400\">
      <div class=\"fourteen wide column flex-align-center flex-justify-center flex-column scrollable\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["button_list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["bl"]) {
            // line 8
            echo "      \t  <h2 class=\"mb10\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bl"], "title", array()), "html", null, true);
            echo "</h2>
          ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["bl"], "buttons", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 10
                echo "            <button class=\"contact-button big ui button green-button w100 mb10\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "text", array()), "html", null, true);
                echo "</button>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </div>
    </div>
  </div>
  <div id=\"get-help-action-section\" class=\"hide\">
    <div class=\"mb20\"><i class=\"remove icon dark-green fs30\"></i></div>
    <div class=\"flex-align-center flex-justify-center flex-column mh400\">
      <div class=\"w50\">
        <button class=\"massive ui button green-button w100 mb20\" id=\"get-help-call\">Call Now</button>
        <button class=\"massive ui button green-button w100 mb20\" id=\"get-help-sms\">Send Message</button>
      </div>
      <div id=\"content-container\" class=\"ui raised cards w50 hide\">
        <div class=\"card mt20\">
          ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["button_list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["bl"]) {
            // line 26
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["bl"], "buttons", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 27
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, $context["b"], "content_container", array())) {
                    // line 28
                    echo "                <div id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "id", array()), "html", null, true);
                    echo "-container\" class=\"m20 hide\">";
                    echo twig_get_attribute($this->env, $this->source, $context["b"], "content_container", array());
                    echo "</div>
              ";
                }
                // line 30
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </div>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "partial/get_help_now.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 32,  106 => 31,  100 => 30,  92 => 28,  89 => 27,  84 => 26,  80 => 25,  66 => 13,  60 => 12,  49 => 10,  45 => 9,  40 => 8,  36 => 7,  28 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partial/get_help_now.html", "C:\\xampp\\htdocs\\FirstAide-web\\template\\partial\\get_help_now.html");
    }
}
