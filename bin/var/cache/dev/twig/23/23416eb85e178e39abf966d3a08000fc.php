<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/admin.formation.edit.html.twig */
class __TwigTemplate_edf30e413f580f5fe56a45d393f535b6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "basefront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.formation.edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.formation.edit.html.twig"));

        $this->parent = $this->loadTemplate("basefront.html.twig", "admin/admin.formation.edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "<div class=\"container mt-4\">
    <h2 class=\"mb-4\">
        ";
        // line 6
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["formation"] ?? null), "id", [], "any", true, true, false, 6) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6)))) {
            // line 7
            yield "            Modifier la formation : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7), "html", null, true);
            yield "
        ";
        } else {
            // line 9
            yield "            Ajouter une nouvelle formation
        ";
        }
        // line 11
        yield "    </h2>

    <div class=\"card p-4 shadow-sm\">
        ";
        // line 14
        if (array_key_exists("form", $context)) {
            // line 15
            yield "            ";
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start');
            yield "
            
            <div class=\"row\">
                <div class=\"col-md-6 mb-3\">
                    ";
            // line 19
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "title", [], "any", false, false, false, 19), 'row');
            yield "
                </div>
                <div class=\"col-md-6 mb-3\">
                    ";
            // line 22
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "publishedAt", [], "any", false, false, false, 22), 'row');
            yield "
                </div>
            </div>

            <div class=\"mb-3\">
                ";
            // line 27
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27), 'row');
            yield "
            </div>

            <div class=\"row\">
                <div class=\"col-md-4 mb-3\">
                    ";
            // line 32
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "videoId", [], "any", false, false, false, 32), 'row');
            yield "
                </div>
                <div class=\"col-md-4 mb-3\">
                    ";
            // line 35
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "playlist", [], "any", false, false, false, 35), 'row');
            yield "
                </div>
                <div class=\"col-md-4 mb-3\">
                    ";
            // line 38
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "categories", [], "any", false, false, false, 38), 'row');
            yield "
                </div>
            </div>

            <div class=\"mt-4\">
                <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
                <a href=\"";
            // line 44
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formations");
            yield "\" class=\"btn btn-secondary\">Annuler</a>
            </div>

            ";
            // line 47
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'form_end');
            yield "
        ";
        } else {
            // line 49
            yield "            <div class=\"alert alert-danger\">Erreur : Le formulaire n'a pas pu être chargé.</div>
        ";
        }
        // line 51
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/admin.formation.edit.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  158 => 51,  154 => 49,  149 => 47,  143 => 44,  134 => 38,  128 => 35,  122 => 32,  114 => 27,  106 => 22,  100 => 19,  92 => 15,  90 => 14,  85 => 11,  81 => 9,  75 => 7,  73 => 6,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"basefront.html.twig\" %}

{% block body %}
<div class=\"container mt-4\">
    <h2 class=\"mb-4\">
        {% if formation.id is defined and formation.id is not null %}
            Modifier la formation : {{ formation.title }}
        {% else %}
            Ajouter une nouvelle formation
        {% endif %}
    </h2>

    <div class=\"card p-4 shadow-sm\">
        {% if form is defined %}
            {{ form_start(form) }}
            
            <div class=\"row\">
                <div class=\"col-md-6 mb-3\">
                    {{ form_row(form.title) }}
                </div>
                <div class=\"col-md-6 mb-3\">
                    {{ form_row(form.publishedAt) }}
                </div>
            </div>

            <div class=\"mb-3\">
                {{ form_row(form.description) }}
            </div>

            <div class=\"row\">
                <div class=\"col-md-4 mb-3\">
                    {{ form_row(form.videoId) }}
                </div>
                <div class=\"col-md-4 mb-3\">
                    {{ form_row(form.playlist) }}
                </div>
                <div class=\"col-md-4 mb-3\">
                    {{ form_row(form.categories) }}
                </div>
            </div>

            <div class=\"mt-4\">
                <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
                <a href=\"{{ path('admin.formations') }}\" class=\"btn btn-secondary\">Annuler</a>
            </div>

            {{ form_end(form) }}
        {% else %}
            <div class=\"alert alert-danger\">Erreur : Le formulaire n'a pas pu être chargé.</div>
        {% endif %}
    </div>
</div>
{% endblock %}", "admin/admin.formation.edit.html.twig", "/home/giovanni/Téléchargements/mediatekformation/templates/admin/admin.formation.edit.html.twig");
    }
}
