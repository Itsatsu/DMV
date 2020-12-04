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
class __TwigTemplate_a5ebd30ebe644b8564a6a241eae86d4625165fd10f41235b6812fce3b46eef7d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/lieu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/lieu.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/lieu.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lieuEntier"]) || array_key_exists("lieuEntier", $context) ? $context["lieuEntier"] : (function () { throw new RuntimeError('Variable "lieuEntier" does not exist.', 2, $this->source); })()), "nom", [], "any", false, false, false, 2), "html", null, true);
        echo " : Les infos ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/stylelieu.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <main>

        <div class=\"bandeau d-flex justify-content-center flex-column align-items-center\">
            <h1 class=\"text-center\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lieuEntier"]) || array_key_exists("lieuEntier", $context) ? $context["lieuEntier"] : (function () { throw new RuntimeError('Variable "lieuEntier" does not exist.', 13, $this->source); })()), "nom", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>
            <p>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lieuEntier"]) || array_key_exists("lieuEntier", $context) ? $context["lieuEntier"] : (function () { throw new RuntimeError('Variable "lieuEntier" does not exist.', 14, $this->source); })()), "type", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
        </div>

        <div class=\"contenu\">

            <div class=\"row d-flex justify-content-center\">

                <div class=\"col-xl-5 blue bulleimages d-flex justify-content-center ml-0\">
                    <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lieuEntier"]) || array_key_exists("lieuEntier", $context) ? $context["lieuEntier"] : (function () { throw new RuntimeError('Variable "lieuEntier" does not exist.', 22, $this->source); })()), "photo", [], "any", false, false, false, 22), "html", null, true);
        echo "\" alt=\"photo ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lieuEntier"]) || array_key_exists("lieuEntier", $context) ? $context["lieuEntier"] : (function () { throw new RuntimeError('Variable "lieuEntier" does not exist.', 22, $this->source); })()), "nom", [], "any", false, false, false, 22), "html", null, true);
        echo "\" width=\"500px\" class=\"img-fluid\">
                </div>
                <div class=\"col-xl-1\"></div>
                <div class=\"col-xl-5 blue bulle mr-0\">
                    <h2>Description</h2>
                    <p>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lieuEntier"]) || array_key_exists("lieuEntier", $context) ? $context["lieuEntier"] : (function () { throw new RuntimeError('Variable "lieuEntier" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27), "html", null, true);
        echo "</p>
                </div>

            </div>

            <div class=\"row  d-flex justify-content-center\">

                <div class=\"col-xl-5 d-flex flex-wrap justify-content-between m-0 p-0\">
                    <div class=\" col-lg-3 col-md-5 col-sm-5 col-12 bulle white w-25 ml-0\">
                        <h3>tarifs</h3>
                        <p>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lieuEntier"]) || array_key_exists("lieuEntier", $context) ? $context["lieuEntier"] : (function () { throw new RuntimeError('Variable "lieuEntier" does not exist.', 37, $this->source); })()), "prix", [], "any", false, false, false, 37), "html", null, true);
        echo "</p>
                    </div>

                    <div class=\" col-lg-4 col-md-5 col-sm-5 col-12 bulle blue w-25\">
                        <h3>Horaires</h3>
                        <p>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lieuEntier"]) || array_key_exists("lieuEntier", $context) ? $context["lieuEntier"] : (function () { throw new RuntimeError('Variable "lieuEntier" does not exist.', 42, $this->source); })()), "horaires", [], "any", false, false, false, 42), "html", null, true);
        echo "</p>
                    </div>


                    <div class=\" col-lg-3 col-md-5 col-sm-5 col-12 bulle white w-25\">
                        <h3>Adresse</h3>
                        <p>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lieuEntier"]) || array_key_exists("lieuEntier", $context) ? $context["lieuEntier"] : (function () { throw new RuntimeError('Variable "lieuEntier" does not exist.', 48, $this->source); })()), "adresse", [], "any", false, false, false, 48), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"  col-lg-3 col-md-5 col-sm-5 col-12 bulle blue w-25 ml-0\">
                        <h3>Transports </h3>
                        <p>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lieuEntier"]) || array_key_exists("lieuEntier", $context) ? $context["lieuEntier"] : (function () { throw new RuntimeError('Variable "lieuEntier" does not exist.', 52, $this->source); })()), "transport", [], "any", false, false, false, 52), "html", null, true);
        echo "</p>
                    </div>


                    <div class=\" col-lg-4 col-md-5 col-sm-5 col-12 bulle white w-25\">
                        <h3>Evenements</h3>
                        <p>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lieuEntier"]) || array_key_exists("lieuEntier", $context) ? $context["lieuEntier"] : (function () { throw new RuntimeError('Variable "lieuEntier" does not exist.', 58, $this->source); })()), "evenement", [], "any", false, false, false, 58), "html", null, true);
        echo "</p>
                    </div>

                    <div class=\" col-lg-3 col-md-5 col-sm-5 col-12 bulle blue w-25\">
                        <h3>Site internet</h3>
                        <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lieuEntier"]) || array_key_exists("lieuEntier", $context) ? $context["lieuEntier"] : (function () { throw new RuntimeError('Variable "lieuEntier" does not exist.', 63, $this->source); })()), "SiteInternet", [], "any", false, false, false, 63), "html", null, true);
        echo "\" target=\"_blank\">Accéder au site</a>
                    </div>
                </div>

                <div class=\"col-xl-1\"></div>
                <div class=\"col-xl-5 bulleimages blue d-flex justify-content-center mr-0\">
                    <iframe src=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lieuEntier"]) || array_key_exists("lieuEntier", $context) ? $context["lieuEntier"] : (function () { throw new RuntimeError('Variable "lieuEntier" does not exist.', 69, $this->source); })()), "LienMaps", [], "any", false, false, false, 69), "html", null, true);
        echo "\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
                </div>

            </div>

        </div>





    </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  207 => 69,  198 => 63,  190 => 58,  181 => 52,  174 => 48,  165 => 42,  157 => 37,  144 => 27,  134 => 22,  123 => 14,  119 => 13,  114 => 10,  104 => 9,  91 => 5,  81 => 4,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %} {{ lieuEntier.nom}} : Les infos {% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/stylelieu.css') }}\">
{% endblock stylesheets %}


{% block body %}
    <main>

        <div class=\"bandeau d-flex justify-content-center flex-column align-items-center\">
            <h1 class=\"text-center\">{{ lieuEntier.nom}}</h1>
            <p>{{ lieuEntier.type}}</p>
        </div>

        <div class=\"contenu\">

            <div class=\"row d-flex justify-content-center\">

                <div class=\"col-xl-5 blue bulleimages d-flex justify-content-center ml-0\">
                    <img src=\"{{ lieuEntier.photo}}\" alt=\"photo {{lieuEntier.nom}}\" width=\"500px\" class=\"img-fluid\">
                </div>
                <div class=\"col-xl-1\"></div>
                <div class=\"col-xl-5 blue bulle mr-0\">
                    <h2>Description</h2>
                    <p>{{ lieuEntier.description}}</p>
                </div>

            </div>

            <div class=\"row  d-flex justify-content-center\">

                <div class=\"col-xl-5 d-flex flex-wrap justify-content-between m-0 p-0\">
                    <div class=\" col-lg-3 col-md-5 col-sm-5 col-12 bulle white w-25 ml-0\">
                        <h3>tarifs</h3>
                        <p>{{ lieuEntier.prix}}</p>
                    </div>

                    <div class=\" col-lg-4 col-md-5 col-sm-5 col-12 bulle blue w-25\">
                        <h3>Horaires</h3>
                        <p>{{ lieuEntier.horaires}}</p>
                    </div>


                    <div class=\" col-lg-3 col-md-5 col-sm-5 col-12 bulle white w-25\">
                        <h3>Adresse</h3>
                        <p>{{ lieuEntier.adresse}}</p>
                    </div>
                    <div class=\"  col-lg-3 col-md-5 col-sm-5 col-12 bulle blue w-25 ml-0\">
                        <h3>Transports </h3>
                        <p>{{ lieuEntier.transport}}</p>
                    </div>


                    <div class=\" col-lg-4 col-md-5 col-sm-5 col-12 bulle white w-25\">
                        <h3>Evenements</h3>
                        <p>{{ lieuEntier.evenement}}</p>
                    </div>

                    <div class=\" col-lg-3 col-md-5 col-sm-5 col-12 bulle blue w-25\">
                        <h3>Site internet</h3>
                        <a href=\"{{ lieuEntier.SiteInternet}}\" target=\"_blank\">Accéder au site</a>
                    </div>
                </div>

                <div class=\"col-xl-1\"></div>
                <div class=\"col-xl-5 bulleimages blue d-flex justify-content-center mr-0\">
                    <iframe src=\"{{ lieuEntier.LienMaps }}\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
                </div>

            </div>

        </div>





    </main>
{% endblock body %}", "pages/lieu.html.twig", "C:\\Users\\Eric perso\\Documents\\GitHub\\decouvre-ma-ville\\templates\\pages\\lieu.html.twig");
    }
}
