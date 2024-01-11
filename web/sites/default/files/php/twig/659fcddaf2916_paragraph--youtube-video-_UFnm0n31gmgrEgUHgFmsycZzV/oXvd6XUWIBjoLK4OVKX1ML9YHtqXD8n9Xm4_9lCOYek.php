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

/* themes/custom/applight/templates/paragraph--youtube-video--default.html.twig */
class __TwigTemplate_d53afd453feb76bdcd6766cd3f74eb9d extends \Twig\Template
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
        // line 42
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
        if ((twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 23) == "youtube_video")) {
            // line 24
            echo "    <section class=\"video-section prelative text-center white\">
        <div class=\"section-padding video-overlay\">
            <div class=\"container\">
                <h3>Watch Now</h3>
                <i class=\"fa fa-play\" id=\"video-icon\" aria-hidden=\"true\"></i>
                <div class=\"video-popup\">
                    <div class=\"video-src\">
                        <div class=\"iframe-src\">

                            <iframe src=\"";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_youtube_video_link", [], "any", false, false, true, 33), 0, [], "any", false, false, true, 33), "url", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "\" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    ";
        }
        // line 41
        echo "    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/applight/templates/paragraph--youtube-video--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 41,  83 => 33,  72 => 24,  69 => 23,  67 => 22,  63 => 21,  58 => 42,  56 => 21,  51 => 19,  48 => 18,  46 => 15,  45 => 14,  44 => 13,  43 => 11,  40 => 9,);
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
    {% if paragraph.bundle == 'youtube_video' %}
    <section class=\"video-section prelative text-center white\">
        <div class=\"section-padding video-overlay\">
            <div class=\"container\">
                <h3>Watch Now</h3>
                <i class=\"fa fa-play\" id=\"video-icon\" aria-hidden=\"true\"></i>
                <div class=\"video-popup\">
                    <div class=\"video-src\">
                        <div class=\"iframe-src\">

                            <iframe src=\"{{paragraph.field_youtube_video_link.0.url}}\" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {% endif %}
    {% endblock %}

    </div>", "themes/custom/applight/templates/paragraph--youtube-video--default.html.twig", "C:\\laragon\\www\\drupaltask\\web\\themes\\custom\\applight\\templates\\paragraph--youtube-video--default.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 11, "block" => 21, "if" => 23);
        static $filters = array("clean_class" => 13, "escape" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
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
