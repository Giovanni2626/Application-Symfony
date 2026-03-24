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

/* pages/playlists.html.twig */
class __TwigTemplate_b05d891a4bdbf3a3d75f67c49d49dba5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/playlists.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/playlists.html.twig"));

        $this->parent = $this->load("basefront.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        // line 3
        yield "    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th class=\"text-left align-top\" scope=\"col\">
                    playlist<br />
                    <form method=\"GET\" action=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playlists.sort", ["champ" => "name", "ordre" => "ASC"]), "html", null, true);
        yield "\" style=\"display:inline;\">
                        <button type=\"submit\" class=\"btn btn-info btn-sm active\"><</button>
                    </form>
                    <form method=\"GET\" action=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playlists.sort", ["champ" => "name", "ordre" => "DESC"]), "html", null, true);
        yield "\" style=\"display:inline;\">
                        <button type=\"submit\" class=\"btn btn-info btn-sm active\">></button>
                    </form>
                    <form class=\"form-inline mt-1\" method=\"POST\" action=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playlists.findallcontain", ["champ" => "name"]);
        yield "\">
                        <div class=\"form-group mr-1 mb-2\">
                            <input type=\"text\" class=\"sm\" name=\"recherche\" 
                                   value=\"";
        // line 17
        if ((((array_key_exists("valeur", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 17, $this->source); })()))) : ("")) &&  !((array_key_exists("table", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 17, $this->source); })()))) : ("")))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 17, $this->source); })()), "html", null, true);
        }
        yield "\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("filtre_name"), "html", null, true);
        yield "\">
                            <button type=\"submit\" class=\"btn btn-info mb-2 btn-sm\">filtrer</button>
                        </div>
                    </form>                     
                </th>
                <th class=\"text-left align-top\" scope=\"col\">
                    catégories
                    <form class=\"form-inline mt-1\" method=\"POST\" action=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playlists.findallcontain", ["champ" => "id", "table" => "categories"]), "html", null, true);
        yield "\">
                        <select class=\"form-select form-select-sm\" name=\"recherche\" id=\"recherche\" onchange=\"this.form.submit()\">
                            <option value=\"\"></option>
                            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 29
            yield "                                <option 
                                    ";
            // line 30
            if ((((array_key_exists("valeur", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 30, $this->source); })()))) : ("")) && ((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 30, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 30)))) {
                yield " 
                                        selected
                                    ";
            }
            // line 32
            yield " 
                                    value=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 33), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 33), "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "                        </select>                     
                    </form>             
                </th>
                <th class=\"text-left align-top\" scope=\"col\">
                    formations<br />
                    <form method=\"GET\" action=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playlists.sort", ["champ" => "nbFormations", "ordre" => "ASC"]), "html", null, true);
        yield "\" style=\"display:inline;\">
                        <button type=\"submit\" class=\"btn btn-info btn-sm active\"><</button>
                    </form>
                    <form method=\"GET\" action=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playlists.sort", ["champ" => "nbFormations", "ordre" => "DESC"]), "html", null, true);
        yield "\" style=\"display:inline;\">
                        <button type=\"submit\" class=\"btn btn-info btn-sm active\">></button>
                    </form>
                </th>
                <th class=\"text-center align-top\" scope=\"col\">
                    &nbsp;
                </th>\t\t\t\t
            </tr>
        </thead>
        <tbody>
            ";
        // line 54
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 54, $this->source); })())) > 0)) {
            // line 55
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 55, $this->source); })())) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                // line 56
                yield "                    <tr class=\"align-middle\">
                        <td>
                            <h5 class=\"text-info\">
                                ";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 59, $this->source); })()), $context["k"], [], "array", false, false, false, 59), "name", [], "any", false, false, false, 59), "html", null, true);
                yield "
                            </h5>
                        </td>                  
                        <td class=\"text-left\">
                            ";
                // line 63
                $context["categories"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 63, $this->source); })()), $context["k"], [], "array", false, false, false, 63), "categoriesplaylist", [], "any", false, false, false, 63);
                // line 64
                yield "                            ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 64, $this->source); })())) > 0)) {
                    // line 65
                    yield "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 65, $this->source); })())) - 1)));
                    foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                        // line 66
                        yield "                                    &nbsp;";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 66, $this->source); })()), $context["c"], [], "array", false, false, false, 66), "html", null, true);
                        yield "                                     
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 68
                    yield "                            ";
                }
                // line 69
                yield "                        </td>
                        <td class=\"text-left\">
                            ";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 71, $this->source); })()), $context["k"], [], "array", false, false, false, 71), "formations", [], "any", false, false, false, 71)), "html", null, true);
                yield "
                        </td>              \t\t\t\t\t
                        <td class=\"text-center\">
                            <a href=\"";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playlists.showone", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 74, $this->source); })()), $context["k"], [], "array", false, false, false, 74), "id", [], "any", false, false, false, 74)]), "html", null, true);
                yield "\" class=\"btn btn-secondary\">Voir détail</a>
                        </td> \t\t\t\t\t
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['k'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            yield "\t
            ";
        }
        // line 79
        yield "        </tbody>
    </table>
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
        return "pages/playlists.html.twig";
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
        return array (  241 => 79,  237 => 77,  227 => 74,  221 => 71,  217 => 69,  214 => 68,  205 => 66,  200 => 65,  197 => 64,  195 => 63,  188 => 59,  183 => 56,  178 => 55,  176 => 54,  163 => 44,  157 => 41,  150 => 36,  139 => 33,  136 => 32,  130 => 30,  127 => 29,  123 => 28,  117 => 25,  107 => 18,  101 => 17,  95 => 14,  89 => 11,  83 => 8,  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"basefront.html.twig\" %}
{% block body %}
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th class=\"text-left align-top\" scope=\"col\">
                    playlist<br />
                    <form method=\"GET\" action=\"{{ path('playlists.sort', {champ:'name', ordre:'ASC'}) }}\" style=\"display:inline;\">
                        <button type=\"submit\" class=\"btn btn-info btn-sm active\"><</button>
                    </form>
                    <form method=\"GET\" action=\"{{ path('playlists.sort', {champ:'name', ordre:'DESC'}) }}\" style=\"display:inline;\">
                        <button type=\"submit\" class=\"btn btn-info btn-sm active\">></button>
                    </form>
                    <form class=\"form-inline mt-1\" method=\"POST\" action=\"{{ path('playlists.findallcontain', {champ:'name'}) }}\">
                        <div class=\"form-group mr-1 mb-2\">
                            <input type=\"text\" class=\"sm\" name=\"recherche\" 
                                   value=\"{% if valeur|default and not table|default %}{{ valeur }}{% endif %}\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('filtre_name') }}\">
                            <button type=\"submit\" class=\"btn btn-info mb-2 btn-sm\">filtrer</button>
                        </div>
                    </form>                     
                </th>
                <th class=\"text-left align-top\" scope=\"col\">
                    catégories
                    <form class=\"form-inline mt-1\" method=\"POST\" action=\"{{ path('playlists.findallcontain', {champ:'id', table:'categories'}) }}\">
                        <select class=\"form-select form-select-sm\" name=\"recherche\" id=\"recherche\" onchange=\"this.form.submit()\">
                            <option value=\"\"></option>
                            {% for categorie in categories %}
                                <option 
                                    {% if valeur|default and valeur==categorie.id %} 
                                        selected
                                    {% endif %} 
                                    value=\"{{ categorie.id }}\">{{ categorie.name }}
                                </option>
                            {% endfor %}
                        </select>                     
                    </form>             
                </th>
                <th class=\"text-left align-top\" scope=\"col\">
                    formations<br />
                    <form method=\"GET\" action=\"{{ path('playlists.sort', {champ:'nbFormations', ordre:'ASC'}) }}\" style=\"display:inline;\">
                        <button type=\"submit\" class=\"btn btn-info btn-sm active\"><</button>
                    </form>
                    <form method=\"GET\" action=\"{{ path('playlists.sort', {champ:'nbFormations', ordre:'DESC'}) }}\" style=\"display:inline;\">
                        <button type=\"submit\" class=\"btn btn-info btn-sm active\">></button>
                    </form>
                </th>
                <th class=\"text-center align-top\" scope=\"col\">
                    &nbsp;
                </th>\t\t\t\t
            </tr>
        </thead>
        <tbody>
            {% if playlists|length > 0 %}
                {% for k in 0..playlists|length-1 %}
                    <tr class=\"align-middle\">
                        <td>
                            <h5 class=\"text-info\">
                                {{ playlists[k].name }}
                            </h5>
                        </td>                  
                        <td class=\"text-left\">
                            {% set categories = playlists[k].categoriesplaylist %}
                            {% if categories|length > 0  %}
                                {% for c in 0..categories|length-1 %}
                                    &nbsp;{{ categories[c] }}                                     
                                {% endfor %}
                            {% endif %}
                        </td>
                        <td class=\"text-left\">
                            {{ playlists[k].formations|length }}
                        </td>              \t\t\t\t\t
                        <td class=\"text-center\">
                            <a href=\"{{ path('playlists.showone', {id:playlists[k].id}) }}\" class=\"btn btn-secondary\">Voir détail</a>
                        </td> \t\t\t\t\t
                    </tr>
                {% endfor %}\t
            {% endif %}
        </tbody>
    </table>
{% endblock %}", "pages/playlists.html.twig", "/home/giovanni/Téléchargements/mediatekformation/templates/pages/playlists.html.twig");
    }
}
