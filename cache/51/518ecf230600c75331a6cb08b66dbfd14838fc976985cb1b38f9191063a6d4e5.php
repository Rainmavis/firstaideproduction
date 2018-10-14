<?php

/* index.html */
class __TwigTemplate_65665c721c1647e39147c8b1e22f1b0ff718881a685786fdee05f069b137c46a extends Twig_Template
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
        echo "<div class=\"flex-align-center flex-justify-center flex-column w100 hin\">
\t<div class=\"preloader ui column stackable center page grid\">
\t\t<div class=\"three wide column\"></div>
\t\t<div class=\"ten wide column\"><img src=\"images/logo.png\" class=\"w100\"/></div>
\t</div>
\t<div class=\"content win hide\">
\t\t<div class=\"login-form-main ui column stackable center page grid\">
\t\t\t<div class=\"four wide column\"></div>
\t\t\t<div class=\"eight wide column\">
\t\t\t\t<img src=\"images/firstaide_logo.png\" class=\"w100 mb20\"/>
\t\t\t\t<div class=\"subtitle mb30 tac fs17\">A Confidentiality Safety Resource for Peace Corps Volunteers</div>
\t\t\t\t<form class=\"ui form login-form\">
\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<label>Email</label>
\t\t\t\t\t\t<input type=\"text\" name=\"email\" id=\"email\" placeholder=\"Email\">
\t\t\t\t\t\t<div class=\"ui basic red pointing prompt label transition hide\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<label>Password</label>
\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"password\" placeholder=\"******\">
\t\t\t\t\t\t<div class=\"ui basic red pointing prompt label transition hide\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tac mt30\">
\t\t\t\t\t\t<button class=\"ui button center m20 submit\">Sign in to Account</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tac mt20\">
\t\t\t\t\t\t<a href=\"#\" id=\"sign-up-link\">New? Sign up here</a>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t<div class=\"processing hide\">
\t\t\t\t\t<div class=\"ui yellow progress\" data-percent=\"30\">
\t\t\t\t\t\t<div class=\"bar\"></div>
\t\t\t\t\t\t<div class=\"label\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"signup-form-main ui column stackable center page grid hide\">
\t\t\t<div class=\"four wide column\"></div>
\t\t\t<div class=\"eight wide column\">
\t\t\t\t<img src=\"images/firstaide_logo.png\" class=\"w100 mb20\"/>
\t\t\t\t<div class=\"subtitle mb30 tac fs17\">A Confidentiality Safety Resource for Peace Corps Volunteers</div>
\t\t\t\t<form class=\"ui form signup-form\">
\t\t\t\t\t<div class=\"two fields\">
\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t<label>Email</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" id=\"email\" placeholder=\"Email\">
\t\t\t\t\t\t\t<div class=\"ui basic red right pointing prompt label transition hide\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t<label>Name</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" id=\"name\" placeholder=\"Your complete name\">
\t\t\t\t\t\t\t<div class=\"ui basic red left pointing prompt label transition hide\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"two fields\">
\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t<label>Password</label>
\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"password\" placeholder=\"******\">
\t\t\t\t\t\t\t<div class=\"ui basic red pointing prompt label transition hide\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t<label>Confirm Password</label>
\t\t\t\t\t\t\t<input type=\"password\" name=\"confirm_password\" id=\"confirm_password\" placeholder=\"******\">
\t\t\t\t\t\t\t<div class=\"ui basic red pointing prompt label transition hide\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"field password-strength hide\">
\t\t\t\t\t\t<div id=\"password-strength-status\" class=\"ui red progress\" data-percent=\"30\">
\t\t\t\t\t\t\t<div class=\"bar\"></div>
\t\t\t\t\t\t\t<div class=\"label\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<label>Country</label>
\t\t\t\t\t\t<div class=\"ui fluid search selection dropdown\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"country\" id=\"country\">
\t\t\t\t\t\t\t<i class=\"dropdown icon\"></i>
\t\t\t\t\t\t\t<div class=\"default text\">Select Country</div>
\t\t\t\t\t\t\t<div class=\"menu\">
\t\t\t\t\t\t\t";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "country_list", array()));
        foreach ($context['_seq'] as $context["country_code"] => $context["country_name"]) {
            // line 82
            echo "\t\t\t\t\t\t\t\t<div class=\"item\" data-value=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $context["country_code"]), "html", null, true);
            echo "\"><i class=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $context["country_code"]), "html", null, true);
            echo " flag\"></i>";
            echo twig_escape_filter($this->env, $context["country_name"], "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['country_code'], $context['country_name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ui basic red pointing prompt label transition hide\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tac mt30\">
\t\t\t\t\t\t<button class=\"ui button center m20 submit\">Sign Up</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tac mt20\">
\t\t\t\t\t\t<a href=\"#\" id=\"login-link\">Already Registered? Login</a>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t<div class=\"processing hide\">
\t\t\t\t\t<div class=\"ui yellow progress\" data-percent=\"30\">
\t\t\t\t\t\t<div class=\"bar\"></div>
\t\t\t\t\t\t<div class=\"label\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"ui modal\">
\t\t<div class=\"header\"></div>
\t\t<div class=\"content\"></div>
\t\t<div class=\"actions\">
\t\t\t<div class=\"ui cancel green button\">Close</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 84,  109 => 82,  105 => 81,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html", "C:\\xampp\\htdocs\\FirstAide-web\\template\\index.html");
    }
}
