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

/* pages/accueil.html.twig */
class __TwigTemplate_7244779ecbad96901ecf7b038cc6af6e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/accueil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/accueil.html.twig"));

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
        yield "    <p class=\"mt-3\">
        <h3>Bienvenue sur le site de MediaTek86 consacré aux formations en ligne</h3>
    </p>
    <p class=\"mt-3\">
        Vous allez pouvoir vous former à différents outils numériques gratuitement et directement en ligne.<br />
        Dans la partie <strong><a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations");
        yield "\" class=\"link-info\">Formations</a></strong>, vous trouverez la liste des formations proposées.
        Vous pourrez faire des recherches et des tris. 
        En cliquant sur la capture, vous accèderez à la présentation plus détaillée de la formation ainsi que la vidéo correspondante.<BR />
        Vous pouvez aussi retrouver les vidéos regroupées dans des playlists, dans la partie <strong><a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playlists");
        yield "\" class=\"link-info\">Playlists</a></strong>.
    </p>
    <p>
        Voici les <strong>deux dernières formations</strong> ajoutées au catalogue :
        <table class=\"table\">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Détails</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 26
            yield "                    <td>
                        <div class=\"row\">
                            <div class=\"col\">
                                <!-- emplacement photo -->
                                ";
            // line 30
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "picture", [], "any", false, false, false, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 31
                yield "                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations.showone", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                yield "\">
                                    <img src=\"";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "picture", [], "any", false, false, false, 32), "html", null, true);
                yield "\" 
                                         alt=\"";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "title", [], "any", false, false, false, 33), "html", null, true);
                yield "\"
                                         class=\"card-img-top\" style=\"width:100%;height:auto;\">
                                    </a>    
                                ";
            }
            // line 37
            yield "                            </div>
                            <div class=\"col\">
                                <p>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "publishedatstring", [], "any", false, false, false, 39), "html", null, true);
            yield "</p>
                                <h5 class=\"text-info mt-1\">
                                    ";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "title", [], "any", false, false, false, 41), "html", null, true);
            yield "
                                </h5>
                                <strong>playlist : </strong>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "playlist", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43), "html", null, true);
            yield "<br />
                                <strong>catégories : </strong> 
                                ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "categories", [], "any", false, false, false, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 46
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 46), "html", null, true);
                yield "&nbsp;
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            yield "                            </div>    
                        </div>                    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['formation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "    
            </tr>

        </table>        
    </p>
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
        return "pages/accueil.html.twig";
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
        return array (  173 => 50,  165 => 48,  156 => 46,  152 => 45,  147 => 43,  142 => 41,  137 => 39,  133 => 37,  126 => 33,  122 => 32,  117 => 31,  115 => 30,  109 => 26,  105 => 25,  89 => 12,  83 => 9,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"basefront.html.twig\" %}

{% block body %}
    <p class=\"mt-3\">
        <h3>Bienvenue sur le site de MediaTek86 consacré aux formations en ligne</h3>
    </p>
    <p class=\"mt-3\">
        Vous allez pouvoir vous former à différents outils numériques gratuitement et directement en ligne.<br />
        Dans la partie <strong><a href=\"{{ path('formations') }}\" class=\"link-info\">Formations</a></strong>, vous trouverez la liste des formations proposées.
        Vous pourrez faire des recherches et des tris. 
        En cliquant sur la capture, vous accèderez à la présentation plus détaillée de la formation ainsi que la vidéo correspondante.<BR />
        Vous pouvez aussi retrouver les vidéos regroupées dans des playlists, dans la partie <strong><a href=\"{{ path('playlists') }}\" class=\"link-info\">Playlists</a></strong>.
    </p>
    <p>
        Voici les <strong>deux dernières formations</strong> ajoutées au catalogue :
        <table class=\"table\">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Détails</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                {% for formation in formations %}
                    <td>
                        <div class=\"row\">
                            <div class=\"col\">
                                <!-- emplacement photo -->
                                {% if formation.picture %}
                                    <a href=\"{{ path('formations.showone', {id:formation.id}) }}\">
                                    <img src=\"{{ formation.picture }}\" 
                                         alt=\"{{ formation.title }}\"
                                         class=\"card-img-top\" style=\"width:100%;height:auto;\">
                                    </a>    
                                {% endif %}
                            </div>
                            <div class=\"col\">
                                <p>{{ formation.publishedatstring }}</p>
                                <h5 class=\"text-info mt-1\">
                                    {{ formation.title }}
                                </h5>
                                <strong>playlist : </strong>{{ formation.playlist.name }}<br />
                                <strong>catégories : </strong> 
                                {% for categorie in formation.categories %}
                                    {{ categorie.name }}&nbsp;
                                {% endfor %}
                            </div>    
                        </div>                    
                {% endfor %}    
            </tr>

        </table>        
    </p>
{% endblock %}


", "pages/accueil.html.twig", "/home/giovanni/Téléchargements/mediatekformation/templates/pages/accueil.html.twig");
    }
}
