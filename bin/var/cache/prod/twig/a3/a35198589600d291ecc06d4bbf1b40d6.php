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

/* pages/formation.html.twig */
class __TwigTemplate_08bcba2df3bb452f311f7676f2e13409 extends Template
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
        yield "    <div class=\"row mt-3\">
        <div class=\"col\">
            <!-- emplacement de la vidéo -->
            ";
        // line 6
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["formation"] ?? null), "videoid", [], "any", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            yield "                <div style=\"width: 560px; height: 315px; float: none; clear: both; margin: 2px auto;\">
                  <embed
                    src=\"https://www.youtube.com/embed/";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["formation"] ?? null), "videoid", [], "any", false, false, false, 9), "html", null, true);
            yield "\" 
                    wmode=\"transparent\"
                    type=\"video/mp4\"
                    width=\"100%\" height=\"100%\"
                    allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture\"
                    allowfullscreen
                    title=\"YouTube video player\"
                  >
                </div>                                             
            ";
        }
        // line 19
        yield "        </div>
        <div class=\"col\">
            ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["formation"] ?? null), "publishedatstring", [], "any", false, false, false, 21), "html", null, true);
        yield "
            <h4 class=\"text-info mt-5\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["formation"] ?? null), "title", [], "any", false, false, false, 22), "html", null, true);
        yield "</h4>
            <strong>playlist : </strong>";
        // line 23
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["formation"] ?? null), "playlist", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["formation"] ?? null), "playlist", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23), "html", null, true)) : ("Aucune"));
        yield "<br />
            <strong>catégories : </strong>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["formation"] ?? null), "categories", [], "any", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 26
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 26), "html", null, true);
            yield "&nbsp;
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "            <br /><br />
            <strong>description :</strong><br />
                ";
        // line 30
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["formation"] ?? null), "description", [], "any", false, false, false, 30), "html", null, true));
        yield "
        </div>
    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/formation.html.twig";
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
        return array (  116 => 30,  112 => 28,  103 => 26,  99 => 25,  94 => 23,  90 => 22,  86 => 21,  82 => 19,  69 => 9,  65 => 7,  63 => 6,  58 => 3,  51 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/formation.html.twig", "/home/giovanni/projets/mediatekformation/templates/pages/formation.html.twig");
    }
}
