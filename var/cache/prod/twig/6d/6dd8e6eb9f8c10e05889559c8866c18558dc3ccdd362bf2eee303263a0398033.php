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

/* pages/notre-selection.html.twig */
class __TwigTemplate_0edf74020a8e59f34cf058b546296588a39eb10a27a3898e60e03dd4e0ba6211 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "pages/notre-selection.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Notre séléction";
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
            <h1>Notre sélection</h1>
            <p>On séléctionne des lieux rien que pour toi !</p>
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
        $context['_seq'] = twig_ensure_traversable(($context["lieux"] ?? null));
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
            // line 35
            echo "                        ";
            if ((-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 35), 4))) {
                // line 36
                echo "                            <div class=\"col-xs-3 col-sm-3 col-md-3\">
                                <a href=\"#image";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "id", [], "any", false, false, false, 37), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "photo", [], "any", false, false, false, 37), "html", null, true);
                echo "\" data-toggle=\"tooltip\" alt=\" photo";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "nom", [], "any", false, false, false, 37), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "nom", [], "any", false, false, false, 37), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lieu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                </div>

                <div class=\"carousel-item\">
                    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lieux"] ?? null));
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
            // line 46
            echo "                        ";
            if (((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 46), 3)) && (-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 46), 8)))) {
                // line 47
                echo "                            <div class=\"col-xs-3 col-sm-3 col-md-3\">
                                <a href=\"#image";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "id", [], "any", false, false, false, 48), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "photo", [], "any", false, false, false, 48), "html", null, true);
                echo "\" data-toggle=\"tooltip\" alt=\"photo ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "nom", [], "any", false, false, false, 48), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "nom", [], "any", false, false, false, 48), "html", null, true);
                echo "\" data-placement=\"top\" data-animation=\"true\"></a>
                            </div>
                        ";
            }
            // line 51
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
        // line 52
        echo "
                </div>
                <div class=\"carousel-item\">
                    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lieux"] ?? null));
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
            // line 56
            echo "                        ";
            if (((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 56), 7)) && (-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 56), 12)))) {
                // line 57
                echo "                            <div class=\"col-xs-3 col-sm-3 col-md-3\">
                                <a href=\"#image";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "id", [], "any", false, false, false, 58), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "photo", [], "any", false, false, false, 58), "html", null, true);
                echo "\" data-toggle=\"tooltip\" alt=\"photo ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "nom", [], "any", false, false, false, 58), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "nom", [], "any", false, false, false, 58), "html", null, true);
                echo "\" data-placement=\"top\" data-animation=\"true\"></a>
                            </div>
                        ";
            }
            // line 61
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
        // line 62
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

        <!--Ligne de separation-->s
        <div id=\"ligneSeparation\"></div>

        <!--Renseignement sur les villes (Image/Descritpion/Map)-->
        <div class=\"container\">
        ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lieux"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
            // line 82
            echo "

                    <div  class=\"slideIn fondBleu\" id=\"\">
                        <a  href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_lieu", ["id" => twig_get_attribute($this->env, $this->source, $context["lieu"], "codePostal", [], "any", false, false, false, 85), "ville" => twig_get_attribute($this->env, $this->source, $context["lieu"], "villeReferente", [], "any", false, false, false, 85), "lieu" => twig_get_attribute($this->env, $this->source, $context["lieu"], "nom", [], "any", false, false, false, 85)]), "html", null, true);
            echo "\">
                    <div class=\"row d-flex justify-content-center\">
                        <div class=\"col-xs-3 col-sm-3 col-md-3 d-flex justify-content-center\" id=\"image";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "id", [], "any", false, false, false, 87), "html", null, true);
            echo "\">
                            <img src=\"";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "photo", [], "any", false, false, false, 88), "html", null, true);
            echo "\" alt=\"photo ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "nom", [], "any", false, false, false, 88), "html", null, true);
            echo "\" id=\"imgTaille\" height=\"100%\">
                        </div>
                        <div class=\"col-xs-6 col-sm-6 col-md-6\" id=\"textCentrer\">
                            <h2>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "nom", [], "any", false, false, false, 91), "html", null, true);
            echo "</h2>
                            <p>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "description", [], "any", false, false, false, 92), "html", null, true);
            echo "</p>

                        </div>
                        <div class=\"col-xs-3 col-sm-3 col-md-3\" id=\"carte\">
                            <iframe  src=\"";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "lienMaps", [], "any", false, false, false, 96), "html", null, true);
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
        // line 104
        echo "        </div>
        <div><a id=\"cRetour\" class=\"cInvisible\" href=\"#haut\"></a></div>
    </main>
";
    }

    public function getTemplateName()
    {
        return "pages/notre-selection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 104,  327 => 96,  320 => 92,  316 => 91,  308 => 88,  304 => 87,  299 => 85,  294 => 82,  290 => 81,  269 => 62,  255 => 61,  243 => 58,  240 => 57,  237 => 56,  220 => 55,  215 => 52,  201 => 51,  189 => 48,  186 => 47,  183 => 46,  166 => 45,  161 => 42,  146 => 40,  134 => 37,  131 => 36,  128 => 35,  111 => 34,  90 => 15,  86 => 14,  80 => 11,  75 => 10,  71 => 9,  65 => 6,  60 => 5,  56 => 4,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/notre-selection.html.twig", "C:\\Users\\Eric perso\\Documents\\GitHub\\decouvre-ma-ville\\templates\\pages\\notre-selection.html.twig");
    }
}
