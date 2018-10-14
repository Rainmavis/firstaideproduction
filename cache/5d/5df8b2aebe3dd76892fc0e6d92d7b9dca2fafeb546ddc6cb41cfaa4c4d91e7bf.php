<?php

/* page/multi_cards_page.html */
class __TwigTemplate_c90d8e35754ca3365490d405b199931eb2f8b061895c33e65e6a019c73891a6b extends Twig_Template
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
        echo "<div class=\"article relative\">
  <div class=\"previous-button hide\"><i class=\"angle left icon\"></i></div>
  <div class=\"ui column center grid flex-align-center h100 plr60\">
    <div class=\"sixteen wide column\">
      <div class=\"ui dividing header tac mb60\">";
        // line 5
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</div>
        <div class=\"multi-card\">
            ";
        // line 7
        $context["count"] = 0;
        // line 8
        echo "            ";
        $context["section_count"] = twig_round((twig_length_filter($this->env, ($context["cards_content"] ?? null)) / ($context["show_card_count"] ?? null)));
        // line 9
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (($context["section_count"] ?? null) - 1)));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo " 
              <div class=\"ui raised multi cards";
            // line 10
            if (($context["count"] ?? null)) {
                echo " hide";
            }
            echo "\">
                ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (($context["show_card_count"] ?? null) - 1)));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 12
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["cards_content"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[((2 * $context["i"]) + $context["j"])] ?? null) : null), "twig", array())) {
                    // line 13
                    echo "                    ";
                    if ( !($context["class"] ?? null)) {
                        // line 14
                        echo "                      ";
                        $context["class"] = "p20";
                        // line 15
                        echo "                    ";
                    }
                    // line 16
                    echo "                    <div class=\"multi card custom ";
                    echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                    echo "\">
                      ";
                    // line 17
                    $this->loadTemplate(("partial/" . twig_get_attribute($this->env, $this->source, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["cards_content"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[((($context["show_card_count"] ?? null) * $context["i"]) + $context["j"])] ?? null) : null), "twig", array())), "page/multi_cards_page.html", 17)->display($context);
                    // line 18
                    echo "                    </div>
                  ";
                }
                // line 20
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "              </div>
              ";
            // line 22
            $context["count"] = (($context["count"] ?? null) + 1);
            // line 23
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </div>
    </div>
  </div>
  ";
        // line 27
        if ((twig_length_filter($this->env, ($context["cards_content"] ?? null)) > ($context["show_card_count"] ?? null))) {
            // line 28
            echo "  <div class=\"next-button\"><i class=\"angle right icon\"></i></div>
  ";
        }
        // line 30
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "page/multi_cards_page.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 30,  145 => 28,  143 => 27,  138 => 24,  124 => 23,  122 => 22,  119 => 21,  105 => 20,  101 => 18,  99 => 17,  94 => 16,  91 => 15,  88 => 14,  85 => 13,  82 => 12,  65 => 11,  59 => 10,  39 => 9,  36 => 8,  34 => 7,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "page/multi_cards_page.html", "C:\\xampp\\htdocs\\FirstAide-web\\template\\page\\multi_cards_page.html");
    }
}
