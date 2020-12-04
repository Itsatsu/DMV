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

/* pages/notre-equipe.html.twig */
class __TwigTemplate_1d1ba94cf3cd17a586cc022234ad62ca3a386b7fcd3257c118c15da753b24746 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/notre-equipe.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/notre-equipe.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/notre-equipe.html.twig", 1);
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

        echo "Notre équipe";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/stylenous.css"), "html", null, true);
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
            <h1>Notre équipe</h1>
            <p>Découvre les membres de notre projet</p>
        </div>

        <section class=\"troispersonnes d-flex flex-column\">
            <div class=\"personne m-4 p-3 \">
                <div class=\"d-flex flex-md-row flex-column justify-content-between\">
                    <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nous/photopersonne.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"photopersonne m-2\">
                    <div class=\"textepersonne\">
                        <h2 class=\"m-2\">Eric Gigondan</h2>
                        <p class=\"m-2\">Je m'appelle Eric Gigondan, j'ai 21 ans. Je suis passioné par l'informatique depuis maintenant presque 10 ans.
                            Accro aux nouvelles technologies et à tout ce qui les entoures. Avec de nombreux petits projets et des formations,
                            je m'intéresse aux ordinateurs, aux serveurs et surtout à leur fonctionnement, à leur mise en réseaux et depuis 2016 au développement web.
                        </p>
                        <a href=\"https://www.eric-gigondan.fr\" target=\"_blank\">
                            Mon protfolio:
                            <img style=\"width: 40px;height: 40px;\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nous/logo-eric.svg"), "html", null, true);
        echo "\" alt=\"logolinkedin\">
                        </a>
                    </div>
                     <a class=\"iconelinkedin p-0 \" href=\"https://www.linkedin.com/in/eric-gigondan-2120a6171/\" style=\"height:40px;width: 40px;\" >
                    <img style=\"width: 40px;height: 40px;\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nous/linkedin-icon.svg"), "html", null, true);
        echo "\" alt=\"logolinkedin\">
                     </a>
                </div>


            </div>

            <div class=\"personne align-self-xl-end m-4 p-3 bleu\">
                <div class=\"d-flex flex-md-row flex-column justify-content-between\">
                    <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nous/photopersonne.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"photopersonne m-2 \">
                    <div class=\"textepersonne\">
                        <h2 class=\"m-2\">Tiphaine Imbert</h2>
                        <p class=\"m-2\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus consequatur nobis excepturi soluta quidem eos obcaecati, delectus provident voluptas dicta a deserunt repellat nostrum, eius nemo illo ipsam tempore totam praesentium est rerum aliquid nisi. Architecto beatae corporis laboriosam provident, labore pariatur distinctio deserunt hic?</p>
                    </div>
                    <a class=\"iconelinkedin p-0 \" href=\"https://www.linkedin.com/in/tiphaine-imbert-18b0b414a/\" style=\"height:40px;width: 40px;\" >
                        <img style=\"width: 40px;height: 40px;\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nous/linkedin-icon.svg"), "html", null, true);
        echo "\" alt=\"logolinkedin\">
                    </a>

                </div>


            </div>

            <div class=\"personne m-4 p-3\">
                <div class=\"d-flex flex-md-row flex-column justify-content-between\">
                    <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nous/photopersonne.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"photopersonne m-2\">
                    <div class=\"textepersonne\">
                        <h2 class=\"m-2\">Florian Miot</h2>
                        <p class=\"m-2\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus consequatur nobis excepturi soluta quidem eos obcaecati, delectus provident voluptas dicta a deserunt repellat nostrum, eius nemo illo ipsam tempore totam praesentium est rerum aliquid nisi. Architecto beatae corporis laboriosam provident, labore pariatur distinctio deserunt hic?</p>
                    </div>
                    <a class=\"iconelinkedin p-0 \" href=\"https://www.linkedin.com/in/florian-miot-073178b8/\" style=\"height:40px;width: 40px;\" >
                        <img style=\"width: 40px;height: 40px;\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nous/linkedin-icon.svg"), "html", null, true);
        echo "\" alt=\"logolinkedin\">
                    </a>
                </div>


            </div>

        </section>





    </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/notre-equipe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 64,  177 => 58,  164 => 48,  155 => 42,  143 => 33,  136 => 29,  124 => 20,  112 => 10,  102 => 9,  89 => 5,  79 => 4,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Notre équipe{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/stylenous.css') }}\">
{% endblock stylesheets %}


{% block body %}
    <main>

        <div class=\"bandeau d-flex justify-content-center flex-column align-items-center\">
            <h1>Notre équipe</h1>
            <p>Découvre les membres de notre projet</p>
        </div>

        <section class=\"troispersonnes d-flex flex-column\">
            <div class=\"personne m-4 p-3 \">
                <div class=\"d-flex flex-md-row flex-column justify-content-between\">
                    <img src=\"{{ asset('img/nous/photopersonne.jpg') }}\" alt=\"\" class=\"photopersonne m-2\">
                    <div class=\"textepersonne\">
                        <h2 class=\"m-2\">Eric Gigondan</h2>
                        <p class=\"m-2\">Je m'appelle Eric Gigondan, j'ai 21 ans. Je suis passioné par l'informatique depuis maintenant presque 10 ans.
                            Accro aux nouvelles technologies et à tout ce qui les entoures. Avec de nombreux petits projets et des formations,
                            je m'intéresse aux ordinateurs, aux serveurs et surtout à leur fonctionnement, à leur mise en réseaux et depuis 2016 au développement web.
                        </p>
                        <a href=\"https://www.eric-gigondan.fr\" target=\"_blank\">
                            Mon protfolio:
                            <img style=\"width: 40px;height: 40px;\" src=\"{{ asset('img/nous/logo-eric.svg') }}\" alt=\"logolinkedin\">
                        </a>
                    </div>
                     <a class=\"iconelinkedin p-0 \" href=\"https://www.linkedin.com/in/eric-gigondan-2120a6171/\" style=\"height:40px;width: 40px;\" >
                    <img style=\"width: 40px;height: 40px;\" src=\"{{ asset('img/nous/linkedin-icon.svg') }}\" alt=\"logolinkedin\">
                     </a>
                </div>


            </div>

            <div class=\"personne align-self-xl-end m-4 p-3 bleu\">
                <div class=\"d-flex flex-md-row flex-column justify-content-between\">
                    <img src=\"{{ asset('img/nous/photopersonne.jpg') }}\" alt=\"\" class=\"photopersonne m-2 \">
                    <div class=\"textepersonne\">
                        <h2 class=\"m-2\">Tiphaine Imbert</h2>
                        <p class=\"m-2\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus consequatur nobis excepturi soluta quidem eos obcaecati, delectus provident voluptas dicta a deserunt repellat nostrum, eius nemo illo ipsam tempore totam praesentium est rerum aliquid nisi. Architecto beatae corporis laboriosam provident, labore pariatur distinctio deserunt hic?</p>
                    </div>
                    <a class=\"iconelinkedin p-0 \" href=\"https://www.linkedin.com/in/tiphaine-imbert-18b0b414a/\" style=\"height:40px;width: 40px;\" >
                        <img style=\"width: 40px;height: 40px;\" src=\"{{ asset('img/nous/linkedin-icon.svg') }}\" alt=\"logolinkedin\">
                    </a>

                </div>


            </div>

            <div class=\"personne m-4 p-3\">
                <div class=\"d-flex flex-md-row flex-column justify-content-between\">
                    <img src=\"{{ asset('img/nous/photopersonne.jpg') }}\" alt=\"\" class=\"photopersonne m-2\">
                    <div class=\"textepersonne\">
                        <h2 class=\"m-2\">Florian Miot</h2>
                        <p class=\"m-2\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus consequatur nobis excepturi soluta quidem eos obcaecati, delectus provident voluptas dicta a deserunt repellat nostrum, eius nemo illo ipsam tempore totam praesentium est rerum aliquid nisi. Architecto beatae corporis laboriosam provident, labore pariatur distinctio deserunt hic?</p>
                    </div>
                    <a class=\"iconelinkedin p-0 \" href=\"https://www.linkedin.com/in/florian-miot-073178b8/\" style=\"height:40px;width: 40px;\" >
                        <img style=\"width: 40px;height: 40px;\" src=\"{{ asset('img/nous/linkedin-icon.svg') }}\" alt=\"logolinkedin\">
                    </a>
                </div>


            </div>

        </section>





    </main>
{% endblock body %}", "pages/notre-equipe.html.twig", "C:\\Users\\Eric perso\\Documents\\GitHub\\decouvre-ma-ville\\templates\\pages\\notre-equipe.html.twig");
    }
}
