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

/* themes/custom/applight/templates/paragraph--team--default.html.twig */
class __TwigTemplate_ea6fe0da22ce0e7047da2a5c64a06963 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "
";
        // line 11
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 13
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 13), 13, $this->source))), 2 => ((        // line 14
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 14, $this->source)))) : ("")), 3 => (( !twig_get_attribute($this->env, $this->source,         // line 15
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 15)) ? ("paragraph--unpublished") : (""))];
        // line 18
        echo "
<div";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 19), 19, $this->source), "html", null, true);
        echo ">

    ";
        // line 21
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "
    </div>";
    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    ";
        // line 23
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 23) == "team")) {
            // line 24
            echo "    <section class=\"team section-padding\" data-scroll-index='3'>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"sectioner-header text-center\">
                        <h3>";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_title", [], "any", false, false, true, 29), "value", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "</h3>
                        <span class=\"line\"></span>
                        <p></p>
                    </div>
                    <div class=\"section-content text-center\">
                        <div class=\"row\">
                            ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_team_name", [], "any", false, false, true, 35));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 36
                echo "                            <div class=\"col-md-4\">
                                <div class=\"team-detail wow bounce\" data-wow-delay=\"";
                // line 37
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["key"] * 0.2), "html", null, true);
                echo "s\">
                                    <img src=\"";
                // line 38
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_team_image", [], "any", false, false, true, 38)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? null) : null), "entity", [], "any", false, false, true, 38), "fileuri", [], "any", false, false, true, 38), 38, $this->source)), "html", null, true);
                echo "\"
                                        class=\"img-fluid\" alt=\"";
                // line 39
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 39), "field_team_name", [], "any", false, false, true, 39), "value", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                echo "\" />
                                    <h4>";
                // line 40
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 40), "field_team_name", [], "any", false, false, true, 40)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["key"]] ?? null) : null), "value", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                echo "</h4>
                                    <p>";
                // line 41
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 41), "field_team_designation", [], "any", false, false, true, 41)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["key"]] ?? null) : null), "value", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                echo "</p>
                                </div>
                            </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    ";
        }
        // line 55
        echo "    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/applight/templates/paragraph--team--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 55,  121 => 45,  111 => 41,  107 => 40,  103 => 39,  99 => 38,  95 => 37,  92 => 36,  88 => 35,  79 => 29,  72 => 24,  69 => 23,  67 => 22,  63 => 21,  58 => 56,  56 => 21,  51 => 19,  48 => 18,  46 => 15,  45 => 14,  44 => 13,  43 => 11,  40 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
* @file
* Default theme implementation to display a paragraph of type \"banner\".
*
* ...
*/
#}

{%
set classes = [
'paragraph',
'paragraph--type--' ~ paragraph.bundle|clean_class,
view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
not paragraph.isPublished() ? 'paragraph--unpublished'
]
%}

<div{{ attributes.addClass(classes) }}>

    {% block content %}
    {# Check the paragraph type and render specific HTML for each type #}
    {% if paragraph.bundle == 'team' %}
    <section class=\"team section-padding\" data-scroll-index='3'>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"sectioner-header text-center\">
                        <h3>{{paragraph.field_title.value}}</h3>
                        <span class=\"line\"></span>
                        <p></p>
                    </div>
                    <div class=\"section-content text-center\">
                        <div class=\"row\">
                            {% for key, item in paragraph.field_team_name %}
                            <div class=\"col-md-4\">
                                <div class=\"team-detail wow bounce\" data-wow-delay=\"{{ key * 0.2 }}s\">
                                    <img src=\"{{ file_url(paragraph.field_team_image[key].entity.fileuri) }}\"
                                        class=\"img-fluid\" alt=\"{{ item.entity.field_team_name.value }}\" />
                                    <h4>{{ item.entity.field_team_name[key].value }}</h4>
                                    <p>{{ item.entity.field_team_designation[key].value }}</p>
                                </div>
                            </div>
                            {% endfor %}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {% endif %}
    {% endblock %}

    </div>", "themes/custom/applight/templates/paragraph--team--default.html.twig", "C:\\laragon\\www\\drupaltask\\web\\themes\\custom\\applight\\templates\\paragraph--team--default.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 11, "block" => 21, "if" => 23, "for" => 35);
        static $filters = array("clean_class" => 13, "escape" => 19);
        static $functions = array("file_url" => 38);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'for'],
                ['clean_class', 'escape'],
                ['file_url']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
