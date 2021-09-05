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

/* flex-objects/types/pages/buttons/nav-child.html.twig */
class __TwigTemplate_3245c76944ebedeff1adca95efabc0bb2c35d1e47df53fbf4209dde24462f7a0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if (($context["child_url"] ?? null)) {
            // line 2
            echo "<a id=\"titlebar-button-nav-child\" class=\"button\" href=\"";
            echo twig_escape_filter($this->env, ($context["child_url"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\">
    <i class=\"fa fa-chevron-down\"></i>
</a>
";
        } else {
            // line 6
            echo "<span class=\"button disabled\">
    <i class=\"fa fa-chevron-down\"></i>
</span>
";
        }
    }

    public function getTemplateName()
    {
        return "flex-objects/types/pages/buttons/nav-child.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if child_url %}
<a id=\"titlebar-button-nav-child\" class=\"button\" href=\"{{ child_url }}\" title=\"{{ title }}\">
    <i class=\"fa fa-chevron-down\"></i>
</a>
{% else %}
<span class=\"button disabled\">
    <i class=\"fa fa-chevron-down\"></i>
</span>
{% endif %}
", "flex-objects/types/pages/buttons/nav-child.html.twig", "/home/imagilabdev/grav/user/plugins/flex-objects/admin/templates/flex-objects/types/pages/buttons/nav-child.html.twig");
    }
}
