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

/* pages/departement.html.twig */
class __TwigTemplate_881e8661247966771b17b9a7234f2e398a7bc1b86add133af6e4deaf0dd2d0d5 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "pages/departement.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["departement"] ?? null), "nom", [], "any", false, false, false, 2), "html", null, true);
        echo " : Les villes ";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootsrtapcaroussel.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/stylenotreselection.css"), "html", null, true);
        echo "\">
";
    }

    // line 9
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scriptnotreselection.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    <main>
        <div class=\"bandeau d-flex justify-content-center flex-column align-items-center\">
            <h1>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["departement"] ?? null), "nom", [], "any", false, false, false, 17), "html", null, true);
        echo "</h1>
            <p>Voici les villes les plus cool du département !</p>
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
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["villes"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 35
            echo "                        ";
            if ((-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 35), 4))) {
                // line 36
                echo "                            <div class=\"col-xs-3 col-sm-3 col-md-3\">
                                <a href=\"#image";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "id", [], "any", false, false, false, 37), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "img", [], "any", false, false, false, 37), "html", null, true);
                echo "\" data-toggle=\"tooltip\" alt=\"photo ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "nom", [], "any", false, false, false, 37), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "nom", [], "any", false, false, false, 37), "html", null, true);
                echo "\" data-placement=\"top\" data-animation=\"true\"></a>
                            </div>
                        ";
            }
            // line 40
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                </div>


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

        <!--Renseignement sur les villes (Image/Descritpion/Map)-->
        <div class=\"container\">
        ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["villes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 62
            echo "
        <div class=\"slideIn fondBleu\" id=\"\">
            <a  href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_ville", ["id" => twig_get_attribute($this->env, $this->source, ($context["departement"] ?? null), "codePostal", [], "any", false, false, false, 64), "ville" => twig_get_attribute($this->env, $this->source, $context["ville"], "nom", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\">
            <div class=\"row d-flex justify-content-center\">
                <div class=\"col-xs-3 col-sm-3 col-md-3 d-flex justify-content-center\" id=\"image";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "id", [], "any", false, false, false, 66), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "img", [], "any", false, false, false, 67), "html", null, true);
            echo "\" alt=\"photo ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "nom", [], "any", false, false, false, 67), "html", null, true);
            echo "\" id=\"imgTaille\" height=\"100%\">
                </div>
                <div class=\"col-xs-6 col-sm-6 col-md-6\" id=\"textCentrer\">
                    <h2>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "nom", [], "any", false, false, false, 70), "html", null, true);
            echo "</h2>
                    <p>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "description", [], "any", false, false, false, 71), "html", null, true);
            echo "</p>
                </div>
                <div class=\"col-xs-3 col-sm-3 col-md-3\" id=\"carte\">
                    <iframe  src=\"";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "lienMaps", [], "any", false, false, false, 74), "html", null, true);
            echo "\" width=\"100%\" height=\"100%\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
                </div>
            </div>
            </a>
        </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "        </div>

        <div><a id=\"cRetour\" class=\"cInvisible\" href=\"#haut\"></a></div>
    </main>
";
    }

    public function getTemplateName()
    {
        return "pages/departement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 81,  221 => 74,  215 => 71,  211 => 70,  203 => 67,  199 => 66,  194 => 64,  190 => 62,  186 => 61,  165 => 42,  150 => 40,  138 => 37,  135 => 36,  132 => 35,  115 => 34,  95 => 17,  91 => 15,  87 => 14,  81 => 11,  76 => 10,  72 => 9,  66 => 6,  61 => 5,  57 => 4,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/departement.html.twig", "C:\\Users\\Eric perso\\Documents\\GitHub\\decouvre-ma-ville\\templates\\pages\\departement.html.twig");
    }
}
