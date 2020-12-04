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

/* pages/contact.html.twig */
class __TwigTemplate_748ebac12a6ae95256e8c0b0af12cd4411046997e9749ead0de51122647d030d extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "pages/contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Contact";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/stylecontact.css"), "html", null, true);
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
            <h1>Nous contacter</h1>
            <p>Remplissez le formulaire pour nous contacter</p>

        </div>
        <div class=\"d-flex justify-content-center\">
            <div class=\"rectangleformulaire\">
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "success"], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            echo "                    <div class=\"alert alert-success\">
                        ";
            // line 21
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "row"]]);
        echo "
                    <div class=\"col-xl-6 pr-5\">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis inventore non error. Sed
                            repellendus excepturi cupiditate veniam, iusto temporibus eligendi sequi dolorum,
                            architecto, amet nostrum alias nemo enim delectus libero.</p>
                    </div>
                    <div class=\"col-xl-6 row pl-sm-4 pl-xl-0 justify-content-between \">

                        <div class=\"col-xl-5 p-0 d-flex align-items-start  pb-4 flex-column\">
                            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 33), 'widget');
        echo "
                            <div class=\"error d-flex align-content-center\">
                            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 35), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"col-xl-5 p-0 align-items-start d-flex pb-4  flex-column\">
                            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 40), 'widget');
        echo "
                            <div class=\"error d-flex align-content-center\">
                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 42), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"col-xl-5 p-0 align-items-start d-flex pb-4  flex-column\">
                            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 47), 'widget');
        echo "
                            <div class=\"error d-flex align-content-center\">
                                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 49), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"col-xl-5 p-0 align-items-start d-flex pb-4  flex-column\">
                            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "departement", [], "any", false, false, false, 54), 'widget');
        echo "
                            <div class=\"error d-flex align-content-center\">
                                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "departement", [], "any", false, false, false, 56), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"col-xl-5 p-0 align-items-start d-flex pb-4  flex-column\">
                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ville", [], "any", false, false, false, 61), 'widget');
        echo "
                            <div class=\"error d-flex align-content-center\">
                                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ville", [], "any", false, false, false, 63), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"col-xl-5 p-0 align-items-start d-flex pb-4  flex-column\">
                            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code_postal", [], "any", false, false, false, 68), 'widget');
        echo "
                            <div class=\"error d-flex align-content-center\">
                                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code_postal", [], "any", false, false, false, 70), 'errors');
        echo "
                            </div>
                        </div>


                        <div class=\"col-12 p-0 align-items-start d-flex pb-4  flex-column\">
                            ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "lien_site", [], "any", false, false, false, 76), 'widget');
        echo "
                            <div class=\"error d-flex align-content-center\">
                                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "lien_site", [], "any", false, false, false, 78), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"col-12 p-0 align-items-start d-flex pb-4  flex-column\">
                            ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "objet", [], "any", false, false, false, 83), 'widget');
        echo "
                            <div class=\"error d-flex align-content-center\">
                                ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "objet", [], "any", false, false, false, 85), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"col-12 p-0 align-items-start d-flex pb-4 flex-column\">
                            <label for=\"commentaire\"></label>
                            ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "commantaire", [], "any", false, false, false, 91), 'widget');
        echo "

                             <div class=\"error d-flex align-content-center\">
                                ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "commantaire", [], "any", false, false, false, 94), 'errors');
        echo "
                             </div>
                        </div>
                        <div class=\"col-12 p-0 align-items-start d-flex pb-4\">
                        </div>
                        <button class=\"btn btn-primary btn-block\" type=\"submit\">Envoyer</button>
                    </div>
                    ";
        // line 101
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

            </div>
        </div>

    </main>
";
    }

    public function getTemplateName()
    {
        return "pages/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 101,  222 => 94,  216 => 91,  207 => 85,  202 => 83,  194 => 78,  189 => 76,  180 => 70,  175 => 68,  167 => 63,  162 => 61,  154 => 56,  149 => 54,  141 => 49,  136 => 47,  128 => 42,  123 => 40,  115 => 35,  110 => 33,  97 => 24,  88 => 21,  85 => 20,  81 => 19,  70 => 10,  66 => 9,  59 => 5,  55 => 4,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/contact.html.twig", "C:\\Users\\Eric perso\\Documents\\GitHub\\decouvre-ma-ville\\templates\\pages\\contact.html.twig");
    }
}
