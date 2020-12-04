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
class __TwigTemplate_db1d4744bb81c45be7976ddce4c92fbe0e5c78d16ea73a8917d0804856bba40b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/contact.html.twig", 1);
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

        echo "Contact";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/stylecontact.css"), "html", null, true);
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
            <h1>Nous contacter</h1>
            <p>Remplissez le formulaire pour nous contacter</p>

        </div>
        <div class=\"d-flex justify-content-center\">
            <div class=\"rectangleformulaire\">
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 19));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_start', ["attr" => ["class" => "row"]]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "nom", [], "any", false, false, false, 33), 'widget');
        echo "
                            <div class=\"error d-flex align-content-center\">
                            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "nom", [], "any", false, false, false, 35), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"col-xl-5 p-0 align-items-start d-flex pb-4  flex-column\">
                            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "prenom", [], "any", false, false, false, 40), 'widget');
        echo "
                            <div class=\"error d-flex align-content-center\">
                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "prenom", [], "any", false, false, false, 42), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"col-xl-5 p-0 align-items-start d-flex pb-4  flex-column\">
                            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "email", [], "any", false, false, false, 47), 'widget');
        echo "
                            <div class=\"error d-flex align-content-center\">
                                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "email", [], "any", false, false, false, 49), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"col-xl-5 p-0 align-items-start d-flex pb-4  flex-column\">
                            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "departement", [], "any", false, false, false, 54), 'widget');
        echo "
                            <div class=\"error d-flex align-content-center\">
                                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "departement", [], "any", false, false, false, 56), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"col-xl-5 p-0 align-items-start d-flex pb-4  flex-column\">
                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "ville", [], "any", false, false, false, 61), 'widget');
        echo "
                            <div class=\"error d-flex align-content-center\">
                                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "ville", [], "any", false, false, false, 63), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"col-xl-5 p-0 align-items-start d-flex pb-4  flex-column\">
                            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "code_postal", [], "any", false, false, false, 68), 'widget');
        echo "
                            <div class=\"error d-flex align-content-center\">
                                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "code_postal", [], "any", false, false, false, 70), 'errors');
        echo "
                            </div>
                        </div>


                        <div class=\"col-12 p-0 align-items-start d-flex pb-4  flex-column\">
                            ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "lien_site", [], "any", false, false, false, 76), 'widget');
        echo "
                            <div class=\"error d-flex align-content-center\">
                                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "lien_site", [], "any", false, false, false, 78), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"col-12 p-0 align-items-start d-flex pb-4  flex-column\">
                            ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "objet", [], "any", false, false, false, 83), 'widget');
        echo "
                            <div class=\"error d-flex align-content-center\">
                                ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "objet", [], "any", false, false, false, 85), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"col-12 p-0 align-items-start d-flex pb-4 flex-column\">
                            <label for=\"commentaire\"></label>
                            ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "commantaire", [], "any", false, false, false, 91), 'widget');
        echo "

                             <div class=\"error d-flex align-content-center\">
                                ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "commantaire", [], "any", false, false, false, 94), 'errors');
        echo "
                             </div>
                        </div>
                        <div class=\"col-12 p-0 align-items-start d-flex pb-4\">
                        </div>
                        <button class=\"btn btn-primary btn-block\" type=\"submit\">Envoyer</button>
                    </div>
                    ";
        // line 101
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), 'form_end');
        echo "

            </div>
        </div>

    </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  274 => 101,  264 => 94,  258 => 91,  249 => 85,  244 => 83,  236 => 78,  231 => 76,  222 => 70,  217 => 68,  209 => 63,  204 => 61,  196 => 56,  191 => 54,  183 => 49,  178 => 47,  170 => 42,  165 => 40,  157 => 35,  152 => 33,  139 => 24,  130 => 21,  127 => 20,  123 => 19,  112 => 10,  102 => 9,  89 => 5,  79 => 4,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Contact{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/stylecontact.css') }}\">
{% endblock stylesheets %}


{% block body %}
    <main>

        <div class=\"bandeau d-flex justify-content-center flex-column align-items-center\">
            <h1>Nous contacter</h1>
            <p>Remplissez le formulaire pour nous contacter</p>

        </div>
        <div class=\"d-flex justify-content-center\">
            <div class=\"rectangleformulaire\">
                {% for message in app.flashes('success') %}
                    <div class=\"alert alert-success\">
                        {{ message }}
                    </div>
                {% endfor %}
                    {{ form_start(form, {'attr': {'class': 'row'}}) }}
                    <div class=\"col-xl-6 pr-5\">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis inventore non error. Sed
                            repellendus excepturi cupiditate veniam, iusto temporibus eligendi sequi dolorum,
                            architecto, amet nostrum alias nemo enim delectus libero.</p>
                    </div>
                    <div class=\"col-xl-6 row pl-sm-4 pl-xl-0 justify-content-between \">

                        <div class=\"col-xl-5 p-0 d-flex align-items-start  pb-4 flex-column\">
                            {{ form_widget(form.nom) }}
                            <div class=\"error d-flex align-content-center\">
                            {{ form_errors(form.nom) }}
                            </div>
                        </div>

                        <div class=\"col-xl-5 p-0 align-items-start d-flex pb-4  flex-column\">
                            {{ form_widget(form.prenom) }}
                            <div class=\"error d-flex align-content-center\">
                            {{ form_errors(form.prenom) }}
                            </div>
                        </div>

                        <div class=\"col-xl-5 p-0 align-items-start d-flex pb-4  flex-column\">
                            {{ form_widget(form.email) }}
                            <div class=\"error d-flex align-content-center\">
                                {{ form_errors(form.email) }}
                            </div>
                        </div>

                        <div class=\"col-xl-5 p-0 align-items-start d-flex pb-4  flex-column\">
                            {{ form_widget(form.departement) }}
                            <div class=\"error d-flex align-content-center\">
                                {{ form_errors(form.departement) }}
                            </div>
                        </div>

                        <div class=\"col-xl-5 p-0 align-items-start d-flex pb-4  flex-column\">
                            {{ form_widget(form.ville) }}
                            <div class=\"error d-flex align-content-center\">
                                {{ form_errors(form.ville) }}
                            </div>
                        </div>

                        <div class=\"col-xl-5 p-0 align-items-start d-flex pb-4  flex-column\">
                            {{ form_widget(form.code_postal) }}
                            <div class=\"error d-flex align-content-center\">
                                {{ form_errors(form.code_postal) }}
                            </div>
                        </div>


                        <div class=\"col-12 p-0 align-items-start d-flex pb-4  flex-column\">
                            {{ form_widget(form.lien_site) }}
                            <div class=\"error d-flex align-content-center\">
                                {{ form_errors(form.lien_site) }}
                            </div>
                        </div>

                        <div class=\"col-12 p-0 align-items-start d-flex pb-4  flex-column\">
                            {{ form_widget(form.objet) }}
                            <div class=\"error d-flex align-content-center\">
                                {{ form_errors(form.objet) }}
                            </div>
                        </div>

                        <div class=\"col-12 p-0 align-items-start d-flex pb-4 flex-column\">
                            <label for=\"commentaire\"></label>
                            {{ form_widget(form.commantaire) }}

                             <div class=\"error d-flex align-content-center\">
                                {{ form_errors(form.commantaire) }}
                             </div>
                        </div>
                        <div class=\"col-12 p-0 align-items-start d-flex pb-4\">
                        </div>
                        <button class=\"btn btn-primary btn-block\" type=\"submit\">Envoyer</button>
                    </div>
                    {{ form_end(form) }}

            </div>
        </div>

    </main>
{% endblock body %}", "pages/contact.html.twig", "C:\\Users\\Eric perso\\Documents\\GitHub\\decouvre-ma-ville\\templates\\pages\\contact.html.twig");
    }
}
