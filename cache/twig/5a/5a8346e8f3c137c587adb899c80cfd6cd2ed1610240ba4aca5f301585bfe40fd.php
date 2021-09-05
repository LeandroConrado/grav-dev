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

/* flex-objects/types/pages/buttons/back.html.twig */
class __TwigTemplate_6eb33962f2c32f1ed09ce88fc87c077be67ccfcddc5ae49c4b1cd1ac14b88fc0 extends \Twig\Template
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
        echo "<a id=\"titlebar-button-back\" class=\"button\" href=\"";
        echo twig_escape_filter($this->env, ($context["back_url"] ?? null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
        echo "\">
    <i class=\"fa fa-reply\"></i>
</a>
";
    }

    public function getTemplateName()
    {
        return "flex-objects/types/pages/buttons/back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<a id=\"titlebar-button-back\" class=\"button\" href=\"{{ back_url }}\" title=\"{{ \"PLUGIN_ADMIN.BACK\"|tu }}\">
    <i class=\"fa fa-reply\"></i>
</a>
", "flex-objects/types/pages/buttons/back.html.twig", "/home/imagilabdev/grav/user/plugins/flex-objects/admin/templates/flex-objects/types/pages/buttons/back.html.twig");
    }
}
