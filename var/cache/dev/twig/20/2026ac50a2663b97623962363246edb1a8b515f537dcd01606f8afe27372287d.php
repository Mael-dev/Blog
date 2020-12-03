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

/* blog/show.html.twig */
class __TwigTemplate_7914ab39055dfc3eefa292e955a320974e5d9bba5e116e9d389944ae7c44080a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <button type=\"button\" class=\"btn btn-info\">
            <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["dish"]) || array_key_exists("dish", $context) ? $context["dish"] : (function () { throw new RuntimeError('Variable "dish" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5)]), "html", null, true);
        echo "\"> Modifier un plat</a>
    </button>
    <article>
        <h2> ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dish"]) || array_key_exists("dish", $context) ? $context["dish"] : (function () { throw new RuntimeError('Variable "dish" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true);
        echo " </h2>
        <div class=\"metadata\"> Ecrit le ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dish"]) || array_key_exists("dish", $context) ? $context["dish"] : (function () { throw new RuntimeError('Variable "dish" does not exist.', 9, $this->source); })()), "createdAt", [], "any", false, false, false, 9), "d/m/Y"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dish"]) || array_key_exists("dish", $context) ? $context["dish"] : (function () { throw new RuntimeError('Variable "dish" does not exist.', 9, $this->source); })()), "createdAt", [], "any", false, false, false, 9), "H:i"), "html", null, true);
        echo "
        dans la catégorie ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dish"]) || array_key_exists("dish", $context) ? $context["dish"] : (function () { throw new RuntimeError('Variable "dish" does not exist.', 10, $this->source); })()), "category", [], "any", false, false, false, 10), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</div>
        <div class=\"content\">
            <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dish"]) || array_key_exists("dish", $context) ? $context["dish"] : (function () { throw new RuntimeError('Variable "dish" does not exist.', 12, $this->source); })()), "image", [], "any", false, false, false, 12), "html", null, true);
        echo "\" alt=\"\">
            ";
        // line 13
        echo twig_get_attribute($this->env, $this->source, (isset($context["dish"]) || array_key_exists("dish", $context) ? $context["dish"] : (function () { throw new RuntimeError('Variable "dish" does not exist.', 13, $this->source); })()), "ingredient", [], "any", false, false, false, 13);
        echo "
        </div>
    </article>

    <section id=\"comments\">

        <h1> ";
        // line 19
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dish"]) || array_key_exists("dish", $context) ? $context["dish"] : (function () { throw new RuntimeError('Variable "dish" does not exist.', 19, $this->source); })()), "comments", [], "any", false, false, false, 19)), "html", null, true);
        echo " Commentaires :</h1>

        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["dish"]) || array_key_exists("dish", $context) ? $context["dish"] : (function () { throw new RuntimeError('Variable "dish" does not exist.', 21, $this->source); })()), "comments", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 22
            echo "            <div class=\"comment\">
                <div class=\"row\">
                    <div class=\"col-3\">
                        ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 25), "html", null, true);
            echo " (<small> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 25), "d/m/Y à H:i"), "html", null, true);
            echo " </small>)
                    </div>
                    <div class=\"col\">
                        ";
            // line 28
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 28);
            echo "
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
        ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 34, $this->source); })()), 'form_start');
        echo "
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 35, $this->source); })()), "author", [], "any", false, false, false, 35), 'row', ["attr" => ["placeholder" => "Votre nom"]]);
        // line 39
        echo "
        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 40, $this->source); })()), "content", [], "any", false, false, false, 40), 'row', ["attr" => ["placeholder" => "Votre commentaire"]]);
        // line 44
        echo "
\t
\t";
        // line 46
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46)) {
            // line 47
            echo "        <button type=\"submit\" class=\"btn btn-success\"> Publier un commentaire</button>
\t";
        } else {
            // line 49
            echo "\t<p> Vous ne pouvez pas laisser de commentaires si vous n'êtes pas connecter ! </p>
\t";
        }
        // line 51
        echo "
        ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 52, $this->source); })()), 'form_end');
        echo "
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 52,  166 => 51,  162 => 49,  158 => 47,  156 => 46,  152 => 44,  150 => 40,  147 => 39,  145 => 35,  141 => 34,  138 => 33,  127 => 28,  119 => 25,  114 => 22,  110 => 21,  105 => 19,  96 => 13,  92 => 12,  87 => 10,  81 => 9,  77 => 8,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <button type=\"button\" class=\"btn btn-info\">
            <a href=\"{{ path('blog_edit', { 'id' : dish.id }) }}\"> Modifier un plat</a>
    </button>
    <article>
        <h2> {{ dish.name }} </h2>
        <div class=\"metadata\"> Ecrit le {{ dish.createdAt | date('d/m/Y')}} à {{ dish.createdAt | date('H:i') }}
        dans la catégorie {{ dish.category.title }}</div>
        <div class=\"content\">
            <img src=\"{{ dish.image }}\" alt=\"\">
            {{ dish.ingredient | raw }}
        </div>
    </article>

    <section id=\"comments\">

        <h1> {{ dish.comments | length }} Commentaires :</h1>

        {% for comment in dish.comments %}
            <div class=\"comment\">
                <div class=\"row\">
                    <div class=\"col-3\">
                        {{ comment.author }} (<small> {{ comment.createdAt| date ('d/m/Y à H:i') }} </small>)
                    </div>
                    <div class=\"col\">
                        {{ comment.content | raw }}
                    </div>
                </div>
            </div>
        {% endfor %}

        {{ form_start(commentForm) }}
        {{ form_row(commentForm.author, {
            'attr' : {
                'placeholder' :  \"Votre nom\"
            }
        }) }}
        {{ form_row(commentForm.content, {
            'attr' : {
                'placeholder' :  \"Votre commentaire\"
            }
        }) }}
\t
\t{% if  app.user %}
        <button type=\"submit\" class=\"btn btn-success\"> Publier un commentaire</button>
\t{% else %}
\t<p> Vous ne pouvez pas laisser de commentaires si vous n'êtes pas connecter ! </p>
\t{% endif %}

        {{ form_end(commentForm) }}
    </section>
{% endblock %}
", "blog/show.html.twig", "/home/opake/Projet Annexe/Blog/templates/blog/show.html.twig");
    }
}
