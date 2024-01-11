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

/* themes/custom/applight/templates/paragraph--contact--default.html.twig */
class __TwigTemplate_fffd6f1b24a21f859e8361ccfb47d08c extends \Twig\Template
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
        // line 102
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
        if ((twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 23) == "contact")) {
            // line 24
            echo "
    <section class=\"contact section-padding\" data-scroll-index='6'>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"sectioner-header text-center\">
                        <h3>Contact us</h3>
                        <span class=\"line\"></span>
                        <p>Sed quis nisi nisi. Proin consectetur porttitor dui sit amet viverra. Fusce sit amet lorem
                            faucibus, vestibulum ante in, pharetra ante.</p>
                    </div>
                    <div class=\"section-content\">
                        <div class=\"row\">
                            <div class=\"col-sm-12 col-md-12 col-lg-8\">



                                ";
            // line 42
            echo "
                                ";
            // line 44
            echo "
                                ";
            // line 46
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_form_block", [], "any", false, false, true, 46), "entity", [], "any", false, false, true, 46)) {
                // line 47
                echo "                                ";
                // line 48
                echo "                                ";
                $context["block_content"] = Drupal\twig_tweak\TwigTweakExtension::drupalEntity("block", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_form_block", [], "any", false, false, true, 48), "entity", [], "any", false, false, true, 48), "id", [], "any", false, false, true, 48), 48, $this->source));
                // line 49
                echo "                                ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_var_dump($this->env, $context, ...[0 => $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_form_block", [], "any", false, false, true, 49), "entity", [], "any", false, false, true, 49), "id", [], "any", false, false, true, 49), 49, $this->source)]), "html", null, true);
                echo "
                                ";
                // line 50
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_content"] ?? null), 50, $this->source), "html", null, true);
                echo "


                            </div>
                            <div class=\"col-sm-12 col-md-12 col-lg-4\">
                                <div class=\"contact-info white\">
                                    <div class=\"contact-item media\"> <i
                                            class=\"fa fa-map-marker-alt media-left media-right-margin\"></i>
                                        <div class=\"media-body\">
                                            <p class=\"text-uppercase\">Address</p>
                                            <p class=\"text-uppercase\">New Delhi, India</p>
                                        </div>
                                    </div>
                                    <div class=\"contact-item media\"> <i
                                            class=\"fa fa-mobile media-left media-right-margin\"></i>
                                        <div class=\"media-body\">
                                            <p class=\"text-uppercase\">Phone</p>
                                            <p class=\"text-uppercase\"><a class=\"text-white\"
                                                    href=\"tel:+15173977100\">009900990099</a> </p>
                                        </div>
                                    </div>
                                    <div class=\"contact-item media\"> <i
                                            class=\"fa fa-envelope media-left media-right-margin\"></i>
                                        <div class=\"media-body\">
                                            <p class=\"text-uppercase\">E-mail</p>
                                            <p class=\"text-uppercase\"><a class=\"text-white\"
                                                    href=\"mailto:abcdefg@gmail.com\">yogeshsingh.now@gmail.com</a> </p>
                                        </div>
                                    </div>
                                    <div class=\"contact-item media\"> <i
                                            class=\"fa fa-clock media-left media-right-margin\"></i>
                                        <div class=\"media-body\">
                                            <p class=\"text-uppercase\">Working Hours</p>
                                            <p class=\"text-uppercase\">Mon-Fri 9.00 AM to 5.00PM.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    ";
            }
            // line 100
            echo "    ";
        }
        // line 101
        echo "    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/applight/templates/paragraph--contact--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 101,  163 => 100,  110 => 50,  105 => 49,  102 => 48,  100 => 47,  97 => 46,  94 => 44,  91 => 42,  72 => 24,  69 => 23,  67 => 22,  63 => 21,  58 => 102,  56 => 21,  51 => 19,  48 => 18,  46 => 15,  45 => 14,  44 => 13,  43 => 11,  40 => 9,);
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
    {% if paragraph.bundle == 'contact' %}

    <section class=\"contact section-padding\" data-scroll-index='6'>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"sectioner-header text-center\">
                        <h3>Contact us</h3>
                        <span class=\"line\"></span>
                        <p>Sed quis nisi nisi. Proin consectetur porttitor dui sit amet viverra. Fusce sit amet lorem
                            faucibus, vestibulum ante in, pharetra ante.</p>
                    </div>
                    <div class=\"section-content\">
                        <div class=\"row\">
                            <div class=\"col-sm-12 col-md-12 col-lg-8\">



                                {# paragraph--contact.html.twig #}

                                {# Your existing paragraph template code here #}

                                {# Check if the paragraph has a referenced block field #}
                                {% if paragraph.field_form_block.entity %}
                                {# Load and render the referenced block #}
                                {% set block_content = drupal_entity('block', paragraph.field_form_block.entity.id) %}
                                {{dump(paragraph.field_form_block.entity.id)}}
                                {{ block_content }}


                            </div>
                            <div class=\"col-sm-12 col-md-12 col-lg-4\">
                                <div class=\"contact-info white\">
                                    <div class=\"contact-item media\"> <i
                                            class=\"fa fa-map-marker-alt media-left media-right-margin\"></i>
                                        <div class=\"media-body\">
                                            <p class=\"text-uppercase\">Address</p>
                                            <p class=\"text-uppercase\">New Delhi, India</p>
                                        </div>
                                    </div>
                                    <div class=\"contact-item media\"> <i
                                            class=\"fa fa-mobile media-left media-right-margin\"></i>
                                        <div class=\"media-body\">
                                            <p class=\"text-uppercase\">Phone</p>
                                            <p class=\"text-uppercase\"><a class=\"text-white\"
                                                    href=\"tel:+15173977100\">009900990099</a> </p>
                                        </div>
                                    </div>
                                    <div class=\"contact-item media\"> <i
                                            class=\"fa fa-envelope media-left media-right-margin\"></i>
                                        <div class=\"media-body\">
                                            <p class=\"text-uppercase\">E-mail</p>
                                            <p class=\"text-uppercase\"><a class=\"text-white\"
                                                    href=\"mailto:abcdefg@gmail.com\">yogeshsingh.now@gmail.com</a> </p>
                                        </div>
                                    </div>
                                    <div class=\"contact-item media\"> <i
                                            class=\"fa fa-clock media-left media-right-margin\"></i>
                                        <div class=\"media-body\">
                                            <p class=\"text-uppercase\">Working Hours</p>
                                            <p class=\"text-uppercase\">Mon-Fri 9.00 AM to 5.00PM.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    {% endif %}
    {% endif %}
    {% endblock %}

    </div>", "themes/custom/applight/templates/paragraph--contact--default.html.twig", "C:\\laragon\\www\\drupaltask\\web\\themes\\custom\\applight\\templates\\paragraph--contact--default.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 11, "block" => 21, "if" => 23);
        static $filters = array("clean_class" => 13, "escape" => 19);
        static $functions = array("drupal_entity" => 48, "dump" => 49);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape'],
                ['drupal_entity', 'dump']
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
