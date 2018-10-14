<?php

/* partial/settings.html */
class __TwigTemplate_386df1337f3bc9a3889fbf2fb65cf6eabe0b069735d8875eff22db305a9a894a extends Twig_Template
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
        echo "<form class=\"ui form signup-form\">
\t<div class=\"two fields\">
\t\t<div class=\"field\">
\t\t\t<label>Email (Uneditable)</label>
\t\t\t<input type=\"text\" name=\"email\" id=\"email\" placeholder=\"Email\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "\" disabled>
\t\t\t<div class=\"ui basic red right pointing prompt label transition hide\"></div>
\t\t</div>
\t\t<div class=\"field\">
\t\t\t<label>Name</label>
\t\t\t<input type=\"text\" name=\"name\" id=\"name\" placeholder=\"Your complete name\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\">
\t\t\t<div class=\"ui basic red left pointing prompt label transition hide\"></div>
\t\t</div>
\t</div>
\t<div class=\"two fields\">
\t\t<div class=\"field\">
\t\t\t<label>Password</label>
\t\t\t<input type=\"password\" name=\"password\" id=\"password\" placeholder=\"******\">
\t\t\t<div class=\"ui basic red pointing prompt label transition hide\"></div>
\t\t</div>
\t\t<div class=\"field\">
\t\t\t<label>Confirm Password</label>
\t\t\t<input type=\"password\" name=\"confirm_password\" id=\"confirm_password\" placeholder=\"******\">
\t\t\t<div class=\"ui basic red pointing prompt label transition hide\"></div>
\t\t</div>
\t</div>
\t<div class=\"field password-strength hide\">
\t\t<div id=\"password-strength-status\" class=\"ui red progress\" data-percent=\"30\">
\t\t\t<div class=\"bar\"></div>
\t\t\t<div class=\"label\"></div>
\t\t</div>
\t</div>
\t<div class=\"field\">
\t\t<label>Country</label>
\t\t<div class=\"ui fluid search selection dropdown\">
\t\t\t<input type=\"hidden\" name=\"country\" id=\"country\">
\t\t\t<i class=\"dropdown icon\"></i>
\t\t\t<div class=\"default text\">Select Country</div>
\t\t\t<div class=\"menu\">
\t\t\t";
        // line 39
        $context["country_found_code"] = "";
        // line 40
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["country_list"] ?? null));
        foreach ($context['_seq'] as $context["country_code"] => $context["country_name"]) {
            // line 41
            echo "\t\t\t\t<div class=\"item\" data-value=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $context["country_code"]), "html", null, true);
            echo "\"><i class=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $context["country_code"]), "html", null, true);
            echo " flag\"></i>";
            echo twig_escape_filter($this->env, $context["country_name"], "html", null, true);
            echo "</div>
\t\t\t\t";
            // line 42
            if (($context["country_name"] == ($context["country"] ?? null))) {
                // line 43
                echo "\t\t\t\t\t";
                $context["country_found_code"] = twig_lower_filter($this->env, $context["country_code"]);
                // line 44
                echo "\t\t\t\t";
            }
            // line 45
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['country_code'], $context['country_name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t\t</div>
\t\t\t<div class=\"ui basic red pointing prompt label transition hide\"></div>
\t\t</div>
\t</div>
\t<div class=\"field hide\"><input type=\"hidden\" name=\"request_type\" id=\"request_type\" value=\"update_user_info\"></div>
\t<div class=\"tac mt30\">
\t\t<button class=\"ui button center m20 submit\">Save</button>
\t</div>
</form>
<div class=\"processing hide\">
\t<div class=\"ui yellow progress\" data-percent=\"30\">
\t\t<div class=\"bar\"></div>
\t\t<div class=\"label\">Updating your information in our database. Thank you for your patience.</div>
\t</div>
</div>
";
        // line 61
        if ( !twig_test_empty(($context["country_found_code"] ?? null))) {
            // line 62
            echo "<script>
\twindow.USERS_COUNTRY = '";
            // line 63
            echo twig_escape_filter($this->env, ($context["country_found_code"] ?? null), "html", null, true);
            echo "';
</script>
";
        }
        // line 66
        echo "
";
    }

    public function getTemplateName()
    {
        return "partial/settings.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 66,  121 => 63,  118 => 62,  116 => 61,  99 => 46,  93 => 45,  90 => 44,  87 => 43,  85 => 42,  76 => 41,  71 => 40,  69 => 39,  37 => 10,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partial/settings.html", "C:\\xampp\\htdocs\\FirstAide-web\\template\\partial\\settings.html");
    }
}
