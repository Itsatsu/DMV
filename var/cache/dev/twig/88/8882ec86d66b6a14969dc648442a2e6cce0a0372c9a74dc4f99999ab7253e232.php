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

/* pages/ville.html.twig */
class __TwigTemplate_308922810b6bdefe089b746b6afeffff0ff428c5b6aea5e969ae6763563ea4b2 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/ville.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/ville.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/ville.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["villeHome"]) || array_key_exists("villeHome", $context) ? $context["villeHome"] : (function () { throw new RuntimeError('Variable "villeHome" does not exist.', 2, $this->source); })()), "nom", [], "any", false, false, false, 2), "html", null, true);
        echo " : Les lieux";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootsrtapcaroussel.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/stylenotreselection.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scriptnotreselection.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    <main>
        <div class=\"bandeau d-flex justify-content-center flex-column align-items-center\">
            <h1>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["villeHome"]) || array_key_exists("villeHome", $context) ? $context["villeHome"] : (function () { throw new RuntimeError('Variable "villeHome" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), "html", null, true);
        echo "</h1>
            <p>Voici les lieux les plus cool de cette ville!</p>
        </div>
        <div id=\"demo\" class=\"carousel slide\" data-ride=\"carousel\">

            <!-- Indicators -->
            <ul class=\"carousel-indicators\">
                <li data-target=\"#demo\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#demo\" data-slide-to=\"1\"></li>
                <li data-target=\"#demo\" data-slide-to=\"2\"></li>
            </ul>

            <!-- The slideshow -->
            <div class=\"container carousel-inner no-padding\">

                <div class=\"carousel-item active\">

                    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lieux"]) || array_key_exists("lieux", $context) ? $context["lieux"] : (function () { throw new RuntimeError('Variable "lieux" does not exist.', 35, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
            // line 36
            echo "                        ";
            if (((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 36), 2)) && (-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 36), 7)))) {
                // line 37
                echo "                            <div class=\"col-xs-3 col-sm-3 col-md-3\">
                                <a href=\"#image";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "id", [], "any", false, false, false, 38), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "photo", [], "any", false, false, false, 38), "html", null, true);
                echo "\" data-toggle=\"tooltip\" alt=\"photo ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "nom", [], "any", false, false, false, 38), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "nom", [], "any", false, false, false, 38), "html", null, true);
                echo "\" data-placement=\"top\" data-animation=\"true\"></a>
                            </div>
                        ";
            }
            // line 41
            echo "
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lieu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                </div>

                <div class=\"carousel-item\">
                    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lieux"]) || array_key_exists("lieux", $context) ? $context["lieux"] : (function () { throw new RuntimeError('Variable "lieux" does not exist.', 46, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
            // line 47
            echo "                        ";
            if (((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 47), 6)) && (-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 47), 11)))) {
                // line 48
                echo "                            <div class=\"col-xs-3 col-sm-3 col-md-3\">
                                <a href=\"#image";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "id", [], "any", false, false, false, 49), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "photo", [], "any", false, false, false, 49), "html", null, true);
                echo "\" data-toggle=\"tooltip\" alt=\"photo ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "nom", [], "any", false, false, false, 49), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "nom", [], "any", false, false, false, 49), "html", null, true);
                echo "\" data-placement=\"top\" data-animation=\"true\"></a>
                            </div>
                        ";
            }
            // line 52
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lieu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
                </div>
                <div class=\"carousel-item\">
                    ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lieux"]) || array_key_exists("lieux", $context) ? $context["lieux"] : (function () { throw new RuntimeError('Variable "lieux" does not exist.', 56, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
            // line 57
            echo "                        ";
            if (((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 57), 10)) && (-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 57), 15)))) {
                // line 58
                echo "                            <div class=\"col-xs-3 col-sm-3 col-md-3\">
                                <a href=\"#image";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "id", [], "any", false, false, false, 59), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "photo", [], "any", false, false, false, 59), "html", null, true);
                echo "\" data-toggle=\"tooltip\" alt=\"photo ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "nom", [], "any", false, false, false, 59), "html", null, true);
                echo " \"title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "nom", [], "any", false, false, false, 59), "html", null, true);
                echo "\" data-placement=\"top\" data-animation=\"true\"></a>
                            </div>
                        ";
            }
            // line 62
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lieu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
                </div>

            </div>

            <!-- Left and right controls -->
            <a class=\"carousel-control-prev\" href=\"#demo\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\"></span>
            </a>
            <a class=\"carousel-control-next\" href=\"#demo\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\"></span>
            </a>
        </div>

        <!--Ligne de separation-->
        <div id=\"ligneSeparation\"></div>
        <div class=\" container\">
        <h2> Recherches par type :</h2>
        </div>
        <div class=\" container d-flex flex-row justify-content-between flex-wrap\">
            <div class=\"d-flex flex-column \">


                <div>
                    <label for=\"checkMusee\">Musées : </label>
                     <input type=\"checkbox\" id=\"checkMusee\"  onclick=\"checkMusee()\" checked>
                </div>
                <div>
            <label for=\"checkPatrimoine\">Patrimoine : </label>
            <input type=\"checkbox\" id=\"checkPatrimoine\" onclick=\"checkPatrimoine()\" checked>
                </div>
            </div>


            <div>
                <div >
            <label for=\"checkCulture\">Culture : </label>
            <input type=\"checkbox\" id=\"checkCulture\" onclick=\"checkCulture()\" checked>
                </div>
                <div>
            <label for=\"checkShopping\">Shopping : </label>
            <input type=\"checkbox\" id=\"checkShopping\"  onclick=\"checkShopping()\" checked>
                </div>
            </div>


            <div>
                <div>
            <label for=\"checkParcs\">Parcs : </label>
            <input type=\"checkbox\" id=\"checkParcs\" onclick=\"checkParcs()\" checked>
                </div>
                <div>
            <label for=\"checkLoisirs\">Loisirs : </label>
            <input type=\"checkbox\" id=\"checkLoisirs\" onclick=\"checkLoisirs()\" checked>
                </div>
            </div>


            <div>
                <div>
            <label for=\"checkSite-naturel\">Sites naturel : </label>
            <input type=\"checkbox\" id=\"checkSite-naturel\" onclick=\"checkSiteNaturel()\" checked>
                </div>
                <div>
            <label for=\"checkGastronomie\">Gastronomie : </label>
            <input type=\"checkbox\" id=\"checkGastronomie\" onclick=\"checkGastronomie()\" checked>
                </div>
            </div>
        </div>


        <!--Renseignement sur les villes (Image/Descritpion/Map)-->
        <div class=\"container\">
            ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lieux"]) || array_key_exists("lieux", $context) ? $context["lieux"] : (function () { throw new RuntimeError('Variable "lieux" does not exist.', 136, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
            // line 137
            echo "
                <div  class=\" ";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "type", [], "any", false, false, false, 138), "html", null, true);
            echo " slideIn fondBleu\" id=\"\">
                    <a  href=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_lieu", ["id" => twig_get_attribute($this->env, $this->source, $context["lieu"], "codePostal", [], "any", false, false, false, 139), "ville" => twig_get_attribute($this->env, $this->source, $context["lieu"], "villeReferente", [], "any", false, false, false, 139), "lieu" => twig_get_attribute($this->env, $this->source, $context["lieu"], "nom", [], "any", false, false, false, 139)]), "html", null, true);
            echo "\">
                        <div class=\"row d-flex justify-content-center\">
                            <div class=\"col-xs-3 col-sm-3 col-md-3 d-flex justify-content-center\" id=\"image";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "id", [], "any", false, false, false, 141), "html", null, true);
            echo "\">
                                <img src=\"";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "photo", [], "any", false, false, false, 142), "html", null, true);
            echo "\" alt=\"photo ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "nom", [], "any", false, false, false, 142), "html", null, true);
            echo "\" id=\"imgTaille\" height=\"100%\">
                            </div>
                            <div class=\"col-xs-6 col-sm-6 col-md-6\" id=\"textCentrer\">
                                <h2>";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "nom", [], "any", false, false, false, 145), "html", null, true);
            echo "</h2>
                                <p>";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "description", [], "any", false, false, false, 146), "html", null, true);
            echo "</p>
                            </div>
                            <div class=\"col-xs-3 col-sm-3 col-md-3\" id=\"carte\">
                                <iframe  src=\"";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "lienMaps", [], "any", false, false, false, 149), "html", null, true);
            echo "\" width=\"100%\" height=\"100%\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
                            </div>
                        </div>

                    </a>
                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lieu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "        </div>
        <div><a id=\"cRetour\" class=\"cInvisible\" href=\"#haut\"></a></div>
    </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/ville.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  458 => 157,  444 => 149,  438 => 146,  434 => 145,  426 => 142,  422 => 141,  417 => 139,  413 => 138,  410 => 137,  406 => 136,  331 => 63,  317 => 62,  305 => 59,  302 => 58,  299 => 57,  282 => 56,  277 => 53,  263 => 52,  251 => 49,  248 => 48,  245 => 47,  228 => 46,  223 => 43,  208 => 41,  196 => 38,  193 => 37,  190 => 36,  173 => 35,  153 => 18,  149 => 16,  139 => 15,  127 => 12,  123 => 11,  118 => 10,  108 => 9,  96 => 6,  91 => 5,  81 => 4,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}{{ villeHome.nom}} : Les lieux{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootsrtapcaroussel.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/stylenotreselection.css') }}\">
{% endblock stylesheets %}

{% block javascripts %}
    <script src=\"{{ asset('js/popper.min.js') }}\"></script>
    <script src=\"{{ asset('js/scriptnotreselection.js') }}\"></script>
    <script src=\"{{ asset('js/jquery.js') }}\"></script>
{% endblock javascripts %}

{% block body %}
    <main>
        <div class=\"bandeau d-flex justify-content-center flex-column align-items-center\">
            <h1>{{villeHome.nom}}</h1>
            <p>Voici les lieux les plus cool de cette ville!</p>
        </div>
        <div id=\"demo\" class=\"carousel slide\" data-ride=\"carousel\">

            <!-- Indicators -->
            <ul class=\"carousel-indicators\">
                <li data-target=\"#demo\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#demo\" data-slide-to=\"1\"></li>
                <li data-target=\"#demo\" data-slide-to=\"2\"></li>
            </ul>

            <!-- The slideshow -->
            <div class=\"container carousel-inner no-padding\">

                <div class=\"carousel-item active\">

                    {% for lieu in lieux %}
                        {% if loop.index0 > 2 and  loop.index0 <7 %}
                            <div class=\"col-xs-3 col-sm-3 col-md-3\">
                                <a href=\"#image{{ lieu.id }}\"><img src=\"{{ lieu.photo }}\" data-toggle=\"tooltip\" alt=\"photo {{ lieu.nom }}\" title=\"{{ lieu.nom }}\" data-placement=\"top\" data-animation=\"true\"></a>
                            </div>
                        {% endif %}

                    {% endfor %}
                </div>

                <div class=\"carousel-item\">
                    {% for lieu in lieux %}
                        {% if loop.index0 > 6 and  loop.index0 <11%}
                            <div class=\"col-xs-3 col-sm-3 col-md-3\">
                                <a href=\"#image{{ lieu.id }}\"><img src=\"{{ lieu.photo }}\" data-toggle=\"tooltip\" alt=\"photo {{ lieu.nom }}\" title=\"{{ lieu.nom }}\" data-placement=\"top\" data-animation=\"true\"></a>
                            </div>
                        {% endif %}
                    {% endfor %}

                </div>
                <div class=\"carousel-item\">
                    {% for lieu in lieux %}
                        {% if loop.index0 > 10 and  loop.index0 <15 %}
                            <div class=\"col-xs-3 col-sm-3 col-md-3\">
                                <a href=\"#image{{ lieu.id }}\"><img src=\"{{ lieu.photo }}\" data-toggle=\"tooltip\" alt=\"photo {{ lieu.nom }} \"title=\"{{ lieu.nom }}\" data-placement=\"top\" data-animation=\"true\"></a>
                            </div>
                        {% endif %}
                    {% endfor %}

                </div>

            </div>

            <!-- Left and right controls -->
            <a class=\"carousel-control-prev\" href=\"#demo\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\"></span>
            </a>
            <a class=\"carousel-control-next\" href=\"#demo\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\"></span>
            </a>
        </div>

        <!--Ligne de separation-->
        <div id=\"ligneSeparation\"></div>
        <div class=\" container\">
        <h2> Recherches par type :</h2>
        </div>
        <div class=\" container d-flex flex-row justify-content-between flex-wrap\">
            <div class=\"d-flex flex-column \">


                <div>
                    <label for=\"checkMusee\">Musées : </label>
                     <input type=\"checkbox\" id=\"checkMusee\"  onclick=\"checkMusee()\" checked>
                </div>
                <div>
            <label for=\"checkPatrimoine\">Patrimoine : </label>
            <input type=\"checkbox\" id=\"checkPatrimoine\" onclick=\"checkPatrimoine()\" checked>
                </div>
            </div>


            <div>
                <div >
            <label for=\"checkCulture\">Culture : </label>
            <input type=\"checkbox\" id=\"checkCulture\" onclick=\"checkCulture()\" checked>
                </div>
                <div>
            <label for=\"checkShopping\">Shopping : </label>
            <input type=\"checkbox\" id=\"checkShopping\"  onclick=\"checkShopping()\" checked>
                </div>
            </div>


            <div>
                <div>
            <label for=\"checkParcs\">Parcs : </label>
            <input type=\"checkbox\" id=\"checkParcs\" onclick=\"checkParcs()\" checked>
                </div>
                <div>
            <label for=\"checkLoisirs\">Loisirs : </label>
            <input type=\"checkbox\" id=\"checkLoisirs\" onclick=\"checkLoisirs()\" checked>
                </div>
            </div>


            <div>
                <div>
            <label for=\"checkSite-naturel\">Sites naturel : </label>
            <input type=\"checkbox\" id=\"checkSite-naturel\" onclick=\"checkSiteNaturel()\" checked>
                </div>
                <div>
            <label for=\"checkGastronomie\">Gastronomie : </label>
            <input type=\"checkbox\" id=\"checkGastronomie\" onclick=\"checkGastronomie()\" checked>
                </div>
            </div>
        </div>


        <!--Renseignement sur les villes (Image/Descritpion/Map)-->
        <div class=\"container\">
            {% for lieu in lieux %}

                <div  class=\" {{ lieu.type }} slideIn fondBleu\" id=\"\">
                    <a  href=\"{{path('app_home_lieu',{ id: lieu.codePostal ,ville: lieu.villeReferente, lieu: lieu.nom }) }}\">
                        <div class=\"row d-flex justify-content-center\">
                            <div class=\"col-xs-3 col-sm-3 col-md-3 d-flex justify-content-center\" id=\"image{{lieu.id}}\">
                                <img src=\"{{lieu.photo}}\" alt=\"photo {{ lieu.nom }}\" id=\"imgTaille\" height=\"100%\">
                            </div>
                            <div class=\"col-xs-6 col-sm-6 col-md-6\" id=\"textCentrer\">
                                <h2>{{lieu.nom}}</h2>
                                <p>{{ lieu.description }}</p>
                            </div>
                            <div class=\"col-xs-3 col-sm-3 col-md-3\" id=\"carte\">
                                <iframe  src=\"{{ lieu.lienMaps }}\" width=\"100%\" height=\"100%\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
                            </div>
                        </div>

                    </a>
                </div>

            {% endfor %}
        </div>
        <div><a id=\"cRetour\" class=\"cInvisible\" href=\"#haut\"></a></div>
    </main>
{% endblock body %}", "pages/ville.html.twig", "C:\\Users\\Eric perso\\Documents\\GitHub\\decouvre-ma-ville\\templates\\pages\\ville.html.twig");
    }
}
