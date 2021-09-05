<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* forms/fields/codemirror/codemirror.html.twig */
class __TwigTemplate_1960c510add6689b7ea8f53eb1ffccb32a02ae186152a129ae399e3764daa48f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/fields/editor/editor.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["theme"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", [], "any", false, true), "admin", [], "any", false, true), "whitelabel", [], "any", false, true), "codemirror_theme", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", [], "any", false, true), "admin", [], "any", false, true), "whitelabel", [], "any", false, true), "codemirror_theme", [])))) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", [], "any", false, true), "admin", [], "any", false, true), "whitelabel", [], "any", false, true), "codemirror_theme", [])) : ("paper.css"));
        // line 3
        $context["font"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", [], "any", false, true), "admin", [], "any", false, true), "whitelabel", [], "any", false, true), "codemirror_md_font", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", [], "any", false, true), "admin", [], "any", false, true), "whitelabel", [], "any", false, true), "codemirror_md_font", [])))) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", [], "any", false, true), "admin", [], "any", false, true), "whitelabel", [], "any", false, true), "codemirror_md_font", [])) : ("sans"));
        // line 4
        $context["codemirrorOptions"] = twig_array_merge(["spellcheck" => "true", "inputStyle" => "contenteditable", "mode" => "gfm", "theme" => ($context["theme"] ?? null), "font" => ($context["font"] ?? null), "ignore" => []], (($this->getAttribute(($context["field"] ?? null), "codemirror", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "codemirror", []), [])) : ([])));
        // line 7
        if ($this->getAttribute(($context["field"] ?? null), "showPreview", [])) {
            // line 8
            $context["codemirrorOptions"] = twig_array_merge(($context["codemirrorOptions"] ?? null), ["ignore" => []]);
        }
        // line 1
        $this->parent = $this->loadTemplate("forms/fields/editor/editor.html.twig", "forms/fields/codemirror/codemirror.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "forms/fields/codemirror/codemirror.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 1,  42 => 8,  40 => 7,  38 => 4,  36 => 3,  34 => 2,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/fields/editor/editor.html.twig\" %}
{% set theme = config.plugins.admin.whitelabel.codemirror_theme ?? 'paper.css' %}
{% set font = config.plugins.admin.whitelabel.codemirror_md_font ?? 'sans' %}
{% set codemirrorOptions = {'spellcheck': 'true', 'inputStyle': 'contenteditable', 'mode': 'gfm', 'theme': theme, 'font': font, 'ignore': []}|merge(field.codemirror|default({})) %}

{# backward compatibility #}
{% if field.showPreview %}
    {% set codemirrorOptions = codemirrorOptions|merge({'ignore': []}) %}
{% endif %}
{# end backward compatibility #}
", "forms/fields/codemirror/codemirror.html.twig", "/home/imagilabdev/grav/user/plugins/admin/themes/grav/templates/forms/fields/codemirror/codemirror.html.twig");
    }
}
