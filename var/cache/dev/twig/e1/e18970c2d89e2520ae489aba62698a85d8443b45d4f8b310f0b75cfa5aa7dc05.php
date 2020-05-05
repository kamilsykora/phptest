<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/blog/_form.html.twig */
class __TwigTemplate_459453af1859261a6b45337dc7b8ede58bc62465161fe93a2e3f2e88e35ae7e4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/blog/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/blog/_form.html.twig"));

        // line 8
        echo "
";
        // line 9
        if ((((isset($context["show_confirmation"]) || array_key_exists("show_confirmation", $context))) ? (_twig_default_filter((isset($context["show_confirmation"]) || array_key_exists("show_confirmation", $context) ? $context["show_confirmation"] : (function () { throw new RuntimeError('Variable "show_confirmation" does not exist.', 9, $this->source); })()), false)) : (false))) {
            // line 10
            echo "    ";
            $context["attr"] = ["data-confirmation" => "true"];
            // line 11
            echo "    ";
            echo twig_include($this->env, $context, "blog/_delete_post_confirmation.html.twig");
            echo "
";
        }
        // line 13
        echo "
";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start', ["attr" => (((isset($context["attr"]) || array_key_exists("attr", $context))) ? (_twig_default_filter((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 14, $this->source); })()), [])) : ([]))]);
        echo "
    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'widget');
        echo "

    <button type=\"submit\" class=\"";
        // line 17
        echo twig_escape_filter($this->env, (((isset($context["button_css"]) || array_key_exists("button_css", $context))) ? (_twig_default_filter((isset($context["button_css"]) || array_key_exists("button_css", $context) ? $context["button_css"] : (function () { throw new RuntimeError('Variable "button_css" does not exist.', 17, $this->source); })()), "btn btn-primary")) : ("btn btn-primary")), "html", null, true);
        echo "\">
        <i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
        // line 18
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 18, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.create_post"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.create_post"))), "html", null, true);
        echo "
    </button>

    ";
        // line 21
        if ((((isset($context["include_back_to_home_link"]) || array_key_exists("include_back_to_home_link", $context))) ? (_twig_default_filter((isset($context["include_back_to_home_link"]) || array_key_exists("include_back_to_home_link", $context) ? $context["include_back_to_home_link"] : (function () { throw new RuntimeError('Variable "include_back_to_home_link" does not exist.', 21, $this->source); })()), false)) : (false))) {
            // line 22
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_post_index");
            echo "\" class=\"btn btn-link\">
            <i class=\"fa fa-list-alt\" aria-hidden=\"true\"></i> ";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.back_to_list"), "html", null, true);
            echo "
        </a>
    ";
        }
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/blog/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 26,  86 => 23,  81 => 22,  79 => 21,  73 => 18,  69 => 17,  64 => 15,  60 => 14,  57 => 13,  51 => 11,  48 => 10,  46 => 9,  43 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    By default, forms enable client-side validation. This means that you can't
    test the server-side validation errors from the browser. To temporarily
    disable this validation, add the 'novalidate' attribute:

    {{ form_start(form, {attr: {novalidate: 'novalidate'}}) }}
#}

{% if show_confirmation|default(false) %}
    {% set attr = {'data-confirmation': 'true'} %}
    {{ include('blog/_delete_post_confirmation.html.twig') }}
{% endif %}

{{ form_start(form, {attr: attr|default({})}) }}
    {{ form_widget(form) }}

    <button type=\"submit\" class=\"{{ button_css|default(\"btn btn-primary\") }}\">
        <i class=\"fa fa-save\" aria-hidden=\"true\"></i> {{ button_label|default('label.create_post'|trans) }}
    </button>

    {% if include_back_to_home_link|default(false) %}
        <a href=\"{{ path('admin_post_index') }}\" class=\"btn btn-link\">
            <i class=\"fa fa-list-alt\" aria-hidden=\"true\"></i> {{ 'action.back_to_list'|trans }}
        </a>
    {% endif %}
{{ form_end(form) }}
", "admin/blog/_form.html.twig", "C:\\Users\\toan\\workspace\\php\\symfony\\demo\\templates\\admin\\blog\\_form.html.twig");
    }
}
