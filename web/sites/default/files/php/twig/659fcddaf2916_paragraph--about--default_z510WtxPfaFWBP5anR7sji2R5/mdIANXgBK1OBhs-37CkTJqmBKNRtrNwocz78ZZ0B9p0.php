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

/* themes/custom/applight/templates/paragraph--about--default.html.twig */
class __TwigTemplate_3e073dbde95e5cd3c4eff6e99ab81396 extends \Twig\Template
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
        // line 65
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
        if ((twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 23) == "about")) {
            // line 24
            echo "

    <section class=\"about section-padding prelative\" data-scroll-index='1'>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"sectioner-header text-center\">
                        <h3>";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_about_section_title", [], "any", false, false, true, 31), "value", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "</h3>
                        <span class=\"line\"></span>
                        <p>";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_about_section_description", [], "any", false, false, true, 33), "value", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "</p>
                    </div>

                    <div class=\"section-content text-center\">
                        <div class=\"row\">

                            ";
            // line 40
            echo "
                            ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_about_section_content", [], "any", false, false, true, 41));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 42
                echo "                            <div class=\"col-md-4\">
                                <div class=\"icon-box wow fadeInUp\" data-wow-delay=\"0.2s\">
                                    <i class=\"";
                // line 44
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 44), "field_service_icon", [], "any", false, false, true, 44), "value", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                echo "\" aria-hidden=\"true\"></i>
                                    <h5>";
                // line 45
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 45), "field_service_title", [], "any", false, false, true, 45), "value", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
                echo "</h5>
                                    <p>";
                // line 46
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 46), "field_service_description", [], "any", false, false, true, 46), "value", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                echo "</p>
                                </div>
                            </div>


                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "
                        </div>



                        <a href=\"#\" class=\"about-btn\">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    ";
        }
        // line 64
        echo "    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/applight/templates/paragraph--about--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 64,  126 => 52,  114 => 46,  110 => 45,  106 => 44,  102 => 42,  98 => 41,  95 => 40,  86 => 33,  81 => 31,  72 => 24,  69 => 23,  67 => 22,  63 => 21,  58 => 65,  56 => 21,  51 => 19,  48 => 18,  46 => 15,  45 => 14,  44 => 13,  43 => 11,  40 => 9,);
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
    {% if paragraph.bundle == 'about' %}


    <section class=\"about section-padding prelative\" data-scroll-index='1'>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"sectioner-header text-center\">
                        <h3>{{paragraph.field_about_section_title.value}}</h3>
                        <span class=\"line\"></span>
                        <p>{{paragraph.field_about_section_description.value}}</p>
                    </div>

                    <div class=\"section-content text-center\">
                        <div class=\"row\">

                            {# Assuming field_about_section_content is an Entity Reference field #}

                            {% for item in paragraph.field_about_section_content %}
                            <div class=\"col-md-4\">
                                <div class=\"icon-box wow fadeInUp\" data-wow-delay=\"0.2s\">
                                    <i class=\"{{ item.entity.field_service_icon.value}}\" aria-hidden=\"true\"></i>
                                    <h5>{{ item.entity.field_service_title.value}}</h5>
                                    <p>{{ item.entity.field_service_description.value}}</p>
                                </div>
                            </div>


                            {% endfor %}

                        </div>



                        <a href=\"#\" class=\"about-btn\">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {% endif %}
    {% endblock %}

    </div>", "themes/custom/applight/templates/paragraph--about--default.html.twig", "C:\\laragon\\www\\drupaltask\\web\\themes\\custom\\applight\\templates\\paragraph--about--default.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 11, "block" => 21, "if" => 23, "for" => 41);
        static $filters = array("clean_class" => 13, "escape" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'for'],
                ['clean_class', 'escape'],
                []
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
