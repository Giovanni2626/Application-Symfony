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
class __TwigTemplate_0e5a7d06b017a4f083f7588d9dfeec78 extends Template
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
        $this->parent = $this->load("basefront.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["formations"] ?? null));
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
        return array (  155 => 50,  147 => 48,  138 => 46,  134 => 45,  129 => 43,  124 => 41,  119 => 39,  115 => 37,  108 => 33,  104 => 32,  99 => 31,  97 => 30,  91 => 26,  87 => 25,  71 => 12,  65 => 9,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/accueil.html.twig", "/home/giovanni/projets/mediatekformation/templates/pages/accueil.html.twig");
    }
}
