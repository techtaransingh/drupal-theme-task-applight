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

/* themes/custom/applight/templates/menu/menu--main.html.twig */
class __TwigTemplate_658bcd7aa6426d52e37c08612ae65d3f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 24
        echo "
";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 29, $context, $this->getSourceContext()));
        echo "

";
    }

    // line 31
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 32
            $macros["menus"] = $this;
            // line 33
            if (($context["items"] ?? null)) {
                // line 34
                echo "<div class=\"navbar-nav mr-auto py-0\">

  ";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 37
                    echo "  ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 37)) {
                        // line 38
                        echo "  <div class=\"nav-item dropdown\">
    ";
                        // line 40
                        echo "    <a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                        echo "\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                        echo "</a>
    <div class=\"dropdown-menu rounded-0 m-0\">
      ";
                        // line 42
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 42));
                        foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                            // line 43
                            echo "      ";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["subitem"], "title", [], "any", false, false, true, 43), 43, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["subitem"], "url", [], "any", false, false, true, 43), 43, $this->source), ["class" => [0 => "dropdown-item"]]), "html", null, true);
                            echo "
      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 45
                        echo "    </div>
  </div>
  ";
                    } else {
                        // line 48
                        echo "  ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 48), 48, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 48), 48, $this->source), ["class" => [0 => "nav-item", 1 => "nav-link"]]), "html", null, true);
                        echo "
  ";
                    }
                    // line 50
                    echo "  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "</div>
";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/applight/templates/menu/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 51,  116 => 50,  110 => 48,  105 => 45,  96 => 43,  92 => 42,  84 => 40,  81 => 38,  78 => 37,  74 => 36,  70 => 34,  68 => 33,  66 => 32,  51 => 31,  44 => 29,  41 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
* @file
* Default theme implementation to display a menu.
*
* Available variables:
* - menu_name: The machine name of the menu.
* - items: A nested list of menu items. Each menu item contains:
* - attributes: HTML attributes for the menu item.
* - below: The menu item child items.
* - title: The menu link title.
* - url: The menu link url, instance of \\Drupal\\Core\\Url
* - localized_options: Menu link localized options.
* - is_expanded: TRUE if the link has visible children within the current
* menu tree.
* - is_collapsed: TRUE if the link has children within the current menu tree
* that are not currently visible.
* - in_active_trail: TRUE if the link is in the active trail.
*
* @ingroup themeable
*/
#}
{% import _self as menus %}

{#
We call a macro which calls itself to render the full tree.
@see https://twig.symfony.com/doc/1.x/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0) }}

{% macro menu_links(items, attributes, menu_level) %}
{% import _self as menus %}
{% if items %}
<div class=\"navbar-nav mr-auto py-0\">

  {% for item in items %}
  {% if item.below %}
  <div class=\"nav-item dropdown\">
    {# {{ link(item.title, item.url, {\"class\": [\"nav-link dropdown-toggle\", data-toggle=\"dropdown\"]}) }}#}
    <a href=\"{{ item.url }}\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">{{ item.title }}</a>
    <div class=\"dropdown-menu rounded-0 m-0\">
      {% for subitem in item.below %}
      {{ link(subitem.title, subitem.url, {\"class\": ['dropdown-item']}) }}
      {% endfor %}
    </div>
  </div>
  {% else %}
  {{ link(item.title, item.url, {\"class\": ['nav-item', 'nav-link']}) }}
  {% endif %}
  {% endfor %}
</div>
{% endif %}
{% endmacro %}", "themes/custom/applight/templates/menu/menu--main.html.twig", "C:\\laragon\\www\\drupaltask\\web\\themes\\custom\\applight\\templates\\menu\\menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 23, "macro" => 31, "if" => 33, "for" => 36);
        static $filters = array("escape" => 40);
        static $functions = array("link" => 43);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for'],
                ['escape'],
                ['link']
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
