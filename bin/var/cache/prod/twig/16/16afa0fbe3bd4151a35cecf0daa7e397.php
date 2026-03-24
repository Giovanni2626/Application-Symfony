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

/* admin/admin.formation.edit.html.twig */
class __TwigTemplate_751ce06060ed76ce63f2855ea3ab3be1 extends Template
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
        yield "<div class=\"container mt-4\">
    <h2 class=\"mb-4\">
        ";
        // line 6
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["formation"] ?? null), "id", [], "any", true, true, false, 6) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["formation"] ?? null), "id", [], "any", false, false, false, 6)))) {
            // line 7
            yield "            Modifier la formation : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["formation"] ?? null), "title", [], "any", false, false, false, 7), "html", null, true);
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
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
            yield "
            
            <div class=\"row\">
                <div class=\"col-md-6 mb-3\">
                    ";
            // line 19
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, false, 19), 'row');
            yield "
                </div>
                <div class=\"col-md-6 mb-3\">
                    ";
            // line 22
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "publishedAt", [], "any", false, false, false, 22), 'row');
            yield "
                </div>
            </div>

            <div class=\"mb-3\">
                ";
            // line 27
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 27), 'row');
            yield "
            </div>

            <div class=\"row\">
                <div class=\"col-md-4 mb-3\">
                    ";
            // line 32
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "videoId", [], "any", false, false, false, 32), 'row');
            yield "
                </div>
                <div class=\"col-md-4 mb-3\">
                    ";
            // line 35
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "playlist", [], "any", false, false, false, 35), 'row');
            yield "
                </div>
                <div class=\"col-md-4 mb-3\">
                    ";
            // line 38
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "categories", [], "any", false, false, false, 38), 'row');
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
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/admin.formation.edit.html.twig";
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
        return array (  147 => 51,  143 => 49,  138 => 47,  132 => 44,  123 => 38,  117 => 35,  111 => 32,  103 => 27,  95 => 22,  89 => 19,  81 => 15,  79 => 14,  74 => 11,  70 => 9,  64 => 7,  62 => 6,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/admin.formation.edit.html.twig", "/home/giovanni/projets/mediatekformation/templates/admin/admin.formation.edit.html.twig");
    }
}
