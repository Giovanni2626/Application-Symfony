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
use Twig\TemplateWrapper;

/* admin/admin.categories.html.twig */
class __TwigTemplate_ab9714abdcee0ba5fbca190fe5b06f41 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "basefront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.categories.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.categories.html.twig"));

        $this->parent = $this->load("basefront.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "<div class=\"container mt-4\">
    <div class=\"row\">
        <div class=\"col-md-8\">
            <h2>Gestion des Catégories</h2>
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", [], "any", false, false, false, 8));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 9
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 10
                yield "                    <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ("success"));
                yield " mt-2\">
                        ";
                // line 11
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "
            <table class=\"table table-striped table-hover mt-3\">
                <thead class=\"table-dark\">
                    <tr>
                        <th scope=\"col\">Nom de la catégorie</th>
                        <th scope=\"col\" class=\"text-center\" style=\"width: 200px;\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 25
            yield "                    <tr>
                        <td class=\"align-middle\">";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
                        <td class=\"text-center\">
                            <a href=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.categorie.suppr", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            yield "\" 
                               class=\"btn btn-danger btn-sm\"
                               onclick=\"return confirm('Supprimer la catégorie ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 30), "html", null, true);
            yield " ?')\">
                               Supprimer
                            </a>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "                </tbody>
            </table>
        </div>

        <div class=\"col-md-4\">
            <div class=\"card shadow-sm mt-5\">
                <div class=\"card-header bg-primary text-white\">
                    Ajouter une catégorie
                </div>
                <div class=\"card-body\">
                    <form method=\"POST\" action=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.categories");
        yield "\">
                        <div class=\"mb-3\">
                            <label for=\"nom\" class=\"form-label\">Nom de la catégorie</label>
                            <input type=\"text\" name=\"nom\" id=\"nom\" class=\"form-control\" required placeholder=\"Ex: Java\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-success w-100\">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/admin.categories.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  163 => 46,  151 => 36,  139 => 30,  134 => 28,  129 => 26,  126 => 25,  122 => 24,  111 => 15,  105 => 14,  96 => 11,  91 => 10,  86 => 9,  82 => 8,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"basefront.html.twig\" %}

{% block body %}
<div class=\"container mt-4\">
    <div class=\"row\">
        <div class=\"col-md-8\">
            <h2>Gestion des Catégories</h2>
            {% for label, messages in app.flashes %}
                {% for message in messages %}
                    <div class=\"alert alert-{{ label == 'error' ? 'danger' : 'success' }} mt-2\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}

            <table class=\"table table-striped table-hover mt-3\">
                <thead class=\"table-dark\">
                    <tr>
                        <th scope=\"col\">Nom de la catégorie</th>
                        <th scope=\"col\" class=\"text-center\" style=\"width: 200px;\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for categorie in categories %}
                    <tr>
                        <td class=\"align-middle\">{{ categorie.name }}</td>
                        <td class=\"text-center\">
                            <a href=\"{{ path('admin.categorie.suppr', {id:categorie.id}) }}\" 
                               class=\"btn btn-danger btn-sm\"
                               onclick=\"return confirm('Supprimer la catégorie {{ categorie.name }} ?')\">
                               Supprimer
                            </a>
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>

        <div class=\"col-md-4\">
            <div class=\"card shadow-sm mt-5\">
                <div class=\"card-header bg-primary text-white\">
                    Ajouter une catégorie
                </div>
                <div class=\"card-body\">
                    <form method=\"POST\" action=\"{{ path('admin.categories') }}\">
                        <div class=\"mb-3\">
                            <label for=\"nom\" class=\"form-label\">Nom de la catégorie</label>
                            <input type=\"text\" name=\"nom\" id=\"nom\" class=\"form-control\" required placeholder=\"Ex: Java\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-success w-100\">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "admin/admin.categories.html.twig", "/home/giovanni/Téléchargements/mediatekformation/templates/admin/admin.categories.html.twig");
    }
}
