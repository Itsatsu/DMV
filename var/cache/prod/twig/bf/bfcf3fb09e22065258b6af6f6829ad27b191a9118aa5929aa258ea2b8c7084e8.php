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

/* pages/lieu.html.twig */
class __TwigTemplate_8ecdf361bf2e75a25d337908b56471023a99363d575d06e135502c5cdff68f58 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "pages/lieu.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lieuEntier"] ?? null), "nom", [], "any", false, false, false, 2), "html", null, true);
        echo " : Les infos ";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/stylelieu.css"), "html", null, true);
        echo "\">
";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <main>

        <div class=\"bandeau d-flex justify-content-center flex-column align-items-center\">
            <h1>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lieuEntier"] ?? null), "nom", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>
            <p>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lieuEntier"] ?? null), "type", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
        </div>

        <div class=\"contenu\">

            <div class=\"row\">

                <div class=\"col blue bulleimages d-flex justify-content-center ml-0\">
                    <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lieuEntier"] ?? null), "photo", [], "any", false, false, false, 22), "html", null, true);
        echo "\" alt=\"photo ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lieuEntier"] ?? null), "nom", [], "any", false, false, false, 22), "html", null, true);
        echo "\" width=\"500px\" class=\"img-fluid\">
                </div>

                <div class=\"col blue bulle mr-0\">
                    <h2>Description</h2>
                    <p>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lieuEntier"] ?? null), "description", [], "any", false, false, false, 27), "html", null, true);
        echo "</p>
                </div>

            </div>

            <div class=\"row\">

                <div class=\"col d-flex flex-wrap justify-content-between m-0 p-0\">
                    <div class=\"bulle white w-25 ml-0\">
                        <h3>tarifs</h3>
                        <p>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lieuEntier"] ?? null), "prix", [], "any", false, false, false, 37), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"bulle blue w-25\">
                        <h3>Horaires</h3>
                        <p>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lieuEntier"] ?? null), "horaires", [], "any", false, false, false, 41), "html", null, true);
        echo "</p>
                    </div>


                    <div class=\"bulle white w-25\">
                        <h3>Adresse</h3>
                        <p>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lieuEntier"] ?? null), "adresse", [], "any", false, false, false, 47), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"bulle blue w-25 ml-0\">
                        <h3>Transports à proximité</h3>
                        <p>";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lieuEntier"] ?? null), "transport", [], "any", false, false, false, 51), "html", null, true);
        echo "</p>
                    </div>



                    <div class=\"bulle white w-25\">
                        <h3>Evenements</h3>
                        <p>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lieuEntier"] ?? null), "evenement", [], "any", false, false, false, 58), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"bulle blue w-25\">
                        <h3>Site internet</h3>
                        <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lieuEntier"] ?? null), "SiteInternet", [], "any", false, false, false, 62), "html", null, true);
        echo "\" target=\"_blank\">Accéder au site</a>
                    </div>
                </div>


                <div class=\"col bulleimages blue d-flex justify-content-center mr-0\">
                    <iframe src=\"";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lieuEntier"] ?? null), "LienMaps", [], "any", false, false, false, 68), "html", null, true);
        echo "\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
                </div>

            </div>

        </div>





    </main>
";
    }

    public function getTemplateName()
    {
        return "pages/lieu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 68,  155 => 62,  148 => 58,  138 => 51,  131 => 47,  122 => 41,  115 => 37,  102 => 27,  92 => 22,  81 => 14,  77 => 13,  72 => 10,  68 => 9,  61 => 5,  57 => 4,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/lieu.html.twig", "C:\\Users\\Eric perso\\Documents\\GitHub\\decouvre-ma-ville\\templates\\pages\\lieu.html.twig");
    }
}
