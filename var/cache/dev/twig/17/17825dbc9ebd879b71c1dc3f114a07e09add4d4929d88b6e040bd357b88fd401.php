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

/* blog/create.html.twig */
class __TwigTemplate_624ae08509b8372cf761896b6be3584c4ad83f770287cd150639ef37f05e2d5e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/create.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formDish"]) || array_key_exists("formDish", $context) ? $context["formDish"] : (function () { throw new RuntimeError('Variable "formDish" does not exist.', 3, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "        <h1> Modification d'un plat </h1>
    ";
        } else {
            // line 9
            echo "        <h1> Création d'un nouveau plat </h1>
    ";
        }
        // line 11
        echo "

    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDish"]) || array_key_exists("formDish", $context) ? $context["formDish"] : (function () { throw new RuntimeError('Variable "formDish" does not exist.', 13, $this->source); })()), 'form_start');
        echo "

    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formDish"]) || array_key_exists("formDish", $context) ? $context["formDish"] : (function () { throw new RuntimeError('Variable "formDish" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), 'row', ["attr" => ["placeholder" => "Nom du plat"]]);
        // line 18
        echo "
    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formDish"]) || array_key_exists("formDish", $context) ? $context["formDish"] : (function () { throw new RuntimeError('Variable "formDish" does not exist.', 19, $this->source); })()), "category", [], "any", false, false, false, 19), 'row');
        echo "
    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formDish"]) || array_key_exists("formDish", $context) ? $context["formDish"] : (function () { throw new RuntimeError('Variable "formDish" does not exist.', 20, $this->source); })()), "ingredient", [], "any", false, false, false, 20), 'row', ["attr" => ["placeholder" => "Ingrédients du plat"]]);
        // line 23
        echo "
    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formDish"]) || array_key_exists("formDish", $context) ? $context["formDish"] : (function () { throw new RuntimeError('Variable "formDish" does not exist.', 24, $this->source); })()), "image", [], "any", false, false, false, 24), 'row', ["attr" => ["placeholder" => "URL de l'image"]]);
        // line 27
        echo "
    <button type=\"submit\" class=\"btn btn-success\">
        ";
        // line 29
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 29, $this->source); })())) {
            // line 30
            echo "            Enregistrer les modifications
        ";
        } else {
            // line 32
            echo "            Ajouter le nouveau plat
        ";
        }
        // line 34
        echo "    </button>

    ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDish"]) || array_key_exists("formDish", $context) ? $context["formDish"] : (function () { throw new RuntimeError('Variable "formDish" does not exist.', 36, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 36,  121 => 34,  117 => 32,  113 => 30,  111 => 29,  107 => 27,  105 => 24,  102 => 23,  100 => 20,  96 => 19,  93 => 18,  91 => 15,  86 => 13,  82 => 11,  78 => 9,  74 => 7,  71 => 6,  61 => 5,  50 => 1,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{%  form_theme formDish 'bootstrap_4_layout.html.twig' %}

{%  block body %}
    {%  if editMode %}
        <h1> Modification d'un plat </h1>
    {% else %}
        <h1> Création d'un nouveau plat </h1>
    {% endif %}


    {{ form_start(formDish) }}

    {{ form_row(formDish.name, {
        'attr' : {
            'placeholder': \"Nom du plat\"}
    }) }}
    {{ form_row(formDish.category) }}
    {{ form_row(formDish.ingredient, {
        'attr' : {
            'placeholder': \"Ingrédients du plat\"}
    }) }}
    {{ form_row(formDish.image, {
        'attr' : {
            'placeholder': \"URL de l'image\"}
    }) }}
    <button type=\"submit\" class=\"btn btn-success\">
        {%  if editMode %}
            Enregistrer les modifications
        {% else %}
            Ajouter le nouveau plat
        {% endif %}
    </button>

    {{ form_end(formDish) }}

{%  endblock %}", "blog/create.html.twig", "/home/opake/Projet Annexe/Blog/templates/blog/create.html.twig");
    }
}
