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
class __TwigTemplate_c0c1ee2fdc25fb9c3ed8e56e23748bf3 extends Template
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

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        if ((((array_key_exists("valeur", $context)) ? (Twig\Extension\CoreExtension::default(($context["valeur"] ?? null))) : ("")) &&  !((array_key_exists("table", $context)) ? (Twig\Extension\CoreExtension::default(($context["table"] ?? null))) : ("")))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["valeur"] ?? null), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 29
            yield "                                <option 
                                    ";
            // line 30
            if ((((array_key_exists("valeur", $context)) ? (Twig\Extension\CoreExtension::default(($context["valeur"] ?? null))) : ("")) && (($context["valeur"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 30)))) {
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["playlists"] ?? null)) > 0)) {
            // line 55
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["playlists"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                // line 56
                yield "                    <tr class=\"align-middle\">
                        <td>
                            <h5 class=\"text-info\">
                                ";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v0 = ($context["playlists"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[$context["k"]] ?? null) : null), "name", [], "any", false, false, false, 59), "html", null, true);
                yield "
                            </h5>
                        </td>                  
                        <td class=\"text-left\">
                            ";
                // line 63
                $context["categories"] = CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["playlists"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[$context["k"]] ?? null) : null), "categoriesplaylist", [], "any", false, false, false, 63);
                // line 64
                yield "                            ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["categories"] ?? null)) > 0)) {
                    // line 65
                    yield "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["categories"] ?? null)) - 1)));
                    foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                        // line 66
                        yield "                                    &nbsp;";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = ($context["categories"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[$context["c"]] ?? null) : null), "html", null, true);
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (($_v3 = ($context["playlists"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[$context["k"]] ?? null) : null), "formations", [], "any", false, false, false, 71)), "html", null, true);
                yield "
                        </td>              \t\t\t\t\t
                        <td class=\"text-center\">
                            <a href=\"";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playlists.showone", ["id" => CoreExtension::getAttribute($this->env, $this->source, (($_v4 = ($context["playlists"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[$context["k"]] ?? null) : null), "id", [], "any", false, false, false, 74)]), "html", null, true);
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
        return array (  223 => 79,  219 => 77,  209 => 74,  203 => 71,  199 => 69,  196 => 68,  187 => 66,  182 => 65,  179 => 64,  177 => 63,  170 => 59,  165 => 56,  160 => 55,  158 => 54,  145 => 44,  139 => 41,  132 => 36,  121 => 33,  118 => 32,  112 => 30,  109 => 29,  105 => 28,  99 => 25,  89 => 18,  83 => 17,  77 => 14,  71 => 11,  65 => 8,  58 => 3,  51 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/playlists.html.twig", "/home/giovanni/projets/mediatekformation/templates/pages/playlists.html.twig");
    }
}
