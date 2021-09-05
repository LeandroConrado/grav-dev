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

/* flex-objects/types/user-accounts/list.html.twig */
class __TwigTemplate_2db5f6cc365aab02bda81c372a6b007df7f242849b435d390956f7359d75656c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content_top' => [$this, 'block_content_top'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "flex-objects/types/default/list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("flex-objects/types/default/list.html.twig", "flex-objects/types/user-accounts/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_top($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        $this->loadTemplate("flex-objects/layouts/accounts/partials/top.html.twig", "flex-objects/types/user-accounts/list.html.twig", 4)->display($context);
        // line 5
        echo "
    ";
        // line 6
        $this->displayParentBlock("content_top", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "flex-objects/types/user-accounts/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 6,  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'flex-objects/types/default/list.html.twig' %}

{% block content_top %}
    {% include 'flex-objects/layouts/accounts/partials/top.html.twig' %}

    {{ parent() }}
{% endblock %}
", "flex-objects/types/user-accounts/list.html.twig", "/home/imagilabdev/grav/user/plugins/flex-objects/admin/templates/flex-objects/types/user-accounts/list.html.twig");
    }
}
