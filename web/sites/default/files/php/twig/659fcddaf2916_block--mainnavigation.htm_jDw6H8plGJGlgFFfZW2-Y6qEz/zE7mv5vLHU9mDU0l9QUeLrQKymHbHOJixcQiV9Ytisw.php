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

/* themes/custom/applight/templates/block/block--mainnavigation.html.twig */
class __TwigTemplate_a52ba3902e0ab57ca273466645a47036 extends \Twig\Template
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
        // line 36
        echo "
<nav class=\"navbar navbar-expand-lg\">
    <div class=\"container\">
        <a class=\"navbar-brand navbar-logo\" href=\"#\">
            <img src=\"";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("public://images/logo.png"), "html", null, true);
        echo "\" alt=\"logo\" class=\"logo-1\">
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
            aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"> <span
                class=\"fas fa-bars\"></span> </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav ml-auto\">
                ";
        // line 47
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "            </ul>
        </div>
    </div>
</nav>";
    }

    // line 47
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "                ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 48, $this->source), "html", null, true);
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "themes/custom/applight/templates/block/block--mainnavigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 48,  65 => 47,  58 => 50,  56 => 47,  46 => 40,  40 => 36,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
* @file
* Default theme implementation for a menu block.
*
* Available variables:
* - plugin_id: The ID of the block implementation.
* - label: The configured label of the block if visible.
* - configuration: A list of the block's configuration values.
* - label: The configured label for the block.
* - label_display: The display settings for the label.
* - provider: The module or other provider that provided this block plugin.
* - Block plugin specific settings will also be stored here.
* - content: The content of this block.
* - attributes: HTML attributes for the containing element.
* - id: A valid HTML ID and guaranteed unique.
* - title_attributes: HTML attributes for the title element.
* - content_attributes: HTML attributes for the content element.
* - title_prefix: Additional output populated by modules, intended to be
* displayed in front of the main title tag that appears in the template.
* - title_suffix: Additional output populated by modules, intended to be
* displayed after the main title tag that appears in the template.
*
* Headings should be used on navigation menus that consistently appear on
* multiple pages. When this menu block's label is configured to not be
* displayed, it is automatically made invisible using the 'visually-hidden' CSS
* class, which still keeps it visible for screen-readers and assistive
* technology. Headings allow screen-reader and keyboard only users to navigate
* to or skip the links.
* See http://juicystudio.com/article/screen-readers-display-none.php and
* http://www.w3.org/TR/WCAG-TECHS/H42.html for more information.
*
* @ingroup themeable
*/
#}

<nav class=\"navbar navbar-expand-lg\">
    <div class=\"container\">
        <a class=\"navbar-brand navbar-logo\" href=\"#\">
            <img src=\"{{ file_url('public://images/logo.png') }}\" alt=\"logo\" class=\"logo-1\">
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
            aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"> <span
                class=\"fas fa-bars\"></span> </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav ml-auto\">
                {% block content %}
                {{ content }}
                {% endblock %}
            </ul>
        </div>
    </div>
</nav>", "themes/custom/applight/templates/block/block--mainnavigation.html.twig", "C:\\laragon\\www\\drupaltask\\web\\themes\\custom\\applight\\templates\\block\\block--mainnavigation.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 47);
        static $filters = array("escape" => 40);
        static $functions = array("file_url" => 40);

        try {
            $this->sandbox->checkSecurity(
                ['block'],
                ['escape'],
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
