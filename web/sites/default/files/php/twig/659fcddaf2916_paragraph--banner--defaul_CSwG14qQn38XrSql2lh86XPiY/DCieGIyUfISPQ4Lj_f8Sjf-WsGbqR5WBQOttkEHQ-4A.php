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

/* themes/custom/applight/templates/paragraph--banner--default.html.twig */
class __TwigTemplate_086109ed8bdc7803b4ffccaba313e93a extends \Twig\Template
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
        // line 52
        echo "
  </div>";
    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "  ";
        // line 23
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 23) == "banner")) {
            // line 24
            echo "  <section class=\"banner\" data-scroll-index='0'>
    <div class=\"banner-overlay\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-8 col-sm-12\">
            <div class=\"banner-text\">
              <h2 class=\"white\">";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_banner_title", [], "any", false, false, true, 30), "value", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "</h2>
              <h6 class=\"white\">";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_banner_caption", [], "any", false, false, true, 31), "value", [], "any", false, false, true, 31), 31, $this->source));
            echo "</h6>
              <p class=\"banner-text white\">";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_banner_description", [], "any", false, false, true, 32), "value", [], "any", false, false, true, 32), 32, $this->source));
            echo "</p>
              <ul>
                <li><a href=\"#\"><img src=\"";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_banner_app_store_icon", [], "any", false, false, true, 34), "entity", [], "any", false, false, true, 34), "fileuri", [], "any", false, false, true, 34), 34, $this->source)), "html", null, true);
            echo "\"
                      class=\"wow fadeInUp\" data-wow-delay=\"0.4s\" /></a></li>
                <li><a href=\"#\"><img src=\"";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_banner_google_play_icon", [], "any", false, false, true, 36), "entity", [], "any", false, false, true, 36), "fileuri", [], "any", false, false, true, 36), 36, $this->source)), "html", null, true);
            echo "\"
                      class=\"wow fadeInUp\" data-wow-delay=\"0.7s\" /></a></li>
              </ul>
            </div>
          </div>
          <div class=\"col-md-4 col-sm-12\">
            <img src=\"";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_banner_image", [], "any", false, false, true, 42), "entity", [], "any", false, false, true, 42), "fileuri", [], "any", false, false, true, 42), 42, $this->source)), "html", null, true);
            echo "\" class=\"img-fluid wow fadeInUp\" />
          </div>
        </div>
      </div>
    </div>
    <span class=\"svg-wave\"><img class=\"svg-hero\"
        src=\"";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_banner_background", [], "any", false, false, true, 48), "entity", [], "any", false, false, true, 48), "fileuri", [], "any", false, false, true, 48), 48, $this->source)), "html", null, true);
            echo "\"></span>
  </section>
  ";
        }
        // line 51
        echo "  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/applight/templates/paragraph--banner--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 51,  116 => 48,  107 => 42,  98 => 36,  93 => 34,  88 => 32,  84 => 31,  80 => 30,  72 => 24,  69 => 23,  67 => 22,  63 => 21,  58 => 52,  56 => 21,  51 => 19,  48 => 18,  46 => 15,  45 => 14,  44 => 13,  43 => 11,  40 => 9,);
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
  {% if paragraph.bundle == 'banner' %}
  <section class=\"banner\" data-scroll-index='0'>
    <div class=\"banner-overlay\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-8 col-sm-12\">
            <div class=\"banner-text\">
              <h2 class=\"white\">{{ paragraph.field_banner_title.value }}</h2>
              <h6 class=\"white\">{{ paragraph.field_banner_caption.value|raw }}</h6>
              <p class=\"banner-text white\">{{ paragraph.field_banner_description.value|raw }}</p>
              <ul>
                <li><a href=\"#\"><img src=\"{{ file_url(paragraph.field_banner_app_store_icon.entity.fileuri) }}\"
                      class=\"wow fadeInUp\" data-wow-delay=\"0.4s\" /></a></li>
                <li><a href=\"#\"><img src=\"{{ file_url(paragraph.field_banner_google_play_icon.entity.fileuri) }}\"
                      class=\"wow fadeInUp\" data-wow-delay=\"0.7s\" /></a></li>
              </ul>
            </div>
          </div>
          <div class=\"col-md-4 col-sm-12\">
            <img src=\"{{ file_url(paragraph.field_banner_image.entity.fileuri) }}\" class=\"img-fluid wow fadeInUp\" />
          </div>
        </div>
      </div>
    </div>
    <span class=\"svg-wave\"><img class=\"svg-hero\"
        src=\"{{ file_url(paragraph.field_banner_background.entity.fileuri) }}\"></span>
  </section>
  {% endif %}
  {% endblock %}

  </div>", "themes/custom/applight/templates/paragraph--banner--default.html.twig", "C:\\laragon\\www\\drupaltask\\web\\themes\\custom\\applight\\templates\\paragraph--banner--default.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 11, "block" => 21, "if" => 23);
        static $filters = array("clean_class" => 13, "escape" => 19, "raw" => 31);
        static $functions = array("file_url" => 34);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape', 'raw'],
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
