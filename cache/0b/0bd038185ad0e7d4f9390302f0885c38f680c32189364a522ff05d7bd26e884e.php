<?php

/* page/circle_of_trust.html */
class __TwigTemplate_13f59c64513b828aec3fbe81e6e0f1f122e01c8ccf43550496dec1e4a53b5f4a extends Twig_Template
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
  <div class=\"ui column center grid flex-align-start mt20 ";
        // line 2
        if ( !($context["bottom_button"] ?? null)) {
            echo " h100";
        } else {
            echo " h85 mb10";
        }
        echo " plr60\">
    <div class=\"sixteen wide column\">
      <div class=\"ui dividing header tac mb30\">";
        // line 4
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</div>
      <div class=\"circle-of-trust-page\">
        <div class=\"circle-of-trust hide\">
          <div><i class=\"edit icon dark-green fs27\"></i></div>
          <div class=\"circle\">
            <ul>
              <li><img class=\"get-help-button\" src=\"images/help.png\" width=\"64px\"></li>
              <li><img src=\"images/comrade.png\" width=\"64px\"></li>
              <li><img src=\"images/comrade.png\" width=\"64px\"></li>
              <li><img src=\"images/comrade.png\" width=\"64px\"></li>
              <li><img src=\"images/comrade.png\" width=\"64px\"></li>
              <li><img src=\"images/comrade.png\" width=\"64px\"></li>
              <li><img src=\"images/comrade.png\" width=\"64px\"></li>
            </ul>
          </div>
        </div>
        <div class=\"edit-comrades-section hide\">
          <div><i class=\"angle left icon dark-green fs30\"></i></div>
          <div class=\"ui column centered grid\">
            <div class=\"eight wide column\">
              <form class=\"ui form comrade-form\">
                ";
        // line 25
        $context["count"] = 1;
        // line 26
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comrades"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 27
            echo "                  <div class=\"field\">
                    <label>Comrade ";
            // line 28
            echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
            echo "</label>
                    <input class=\"comrade-data\" type=\"text\" name=\"comrade_";
            // line 29
            echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
            echo "\" id=\"comrade_";
            echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
            echo "\" placeholder=\"Contact details of comrade ";
            echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
            echo "\" ";
            if ($context["c"]) {
                echo " value=\"";
                echo twig_escape_filter($this->env, $context["c"], "html", null, true);
                echo "\"";
            }
            echo ">
                    <div class=\"ui basic red pointing prompt label transition hide\"></div>
                  </div>
                  ";
            // line 32
            $context["count"] = (($context["count"] ?? null) + 1);
            // line 33
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                <div class=\"tac mt30\">
                  <button class=\"ui button green-button center m20 submit\" disabled>Save</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class=\"comrade-action-section hide\">
          <div class=\"mb20\"><i class=\"angle left icon dark-green fs30\"></i></div>
          <div class=\"ui column centered grid mh400\">
            <div class=\"fourteen wide column flex-align-center flex-justify-center flex-column\">
                <button class=\"comrade-action-button massive ui button green-button w100 mb20\" id=\"come_get_me\">Come Get Me</button>
                <button class=\"comrade-action-button massive ui button green-button w100 mb20\" id=\"need_interruption\">Call I need an interruption</button>
                <button class=\"comrade-action-button massive ui button green-button w100 mb20\" id=\"need_to_talk\">I need to talk</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "page/circle_of_trust.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 34,  91 => 33,  89 => 32,  73 => 29,  69 => 28,  66 => 27,  61 => 26,  59 => 25,  35 => 4,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "page/circle_of_trust.html", "C:\\xampp\\htdocs\\FirstAide-web\\template\\page\\circle_of_trust.html");
    }
}
