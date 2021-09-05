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

/* partials/tools-backups-titlebar.html.twig */
class __TwigTemplate_2cddcfe59ce71ac3674d9e283e8e81ac045c227b4ab401979a4af1c74c80b90a extends \Twig\Template
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
        echo "<div class=\"button-bar\">
    <a class=\"button\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "\"><i class=\"fa fa-reply\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.BACK"), "html", null, true);
        echo "</a>
    ";
        // line 3
        $this->loadTemplate("partials/backups-button.html.twig", "partials/tools-backups-titlebar.html.twig", 3)->display($context);
        // line 4
        echo "    <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.SAVE"), "html", null, true);
        echo "</button>
</div>
<h1><i class=\"fa fa-fw fa-briefcase\"></i> ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.TOOLS"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.BACKUPS"), "html", null, true);
        echo "</h1>

";
    }

    public function getTemplateName()
    {
        return "partials/tools-backups-titlebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 6,  41 => 4,  39 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"button-bar\">
    <a class=\"button\" href=\"{{ base_url }}\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|t }}</a>
    {% include 'partials/backups-button.html.twig' %}
    <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> {{ \"PLUGIN_ADMIN.SAVE\"|t }}</button>
</div>
<h1><i class=\"fa fa-fw fa-briefcase\"></i> {{ \"PLUGIN_ADMIN.TOOLS\"|t }} - {{ \"PLUGIN_ADMIN.BACKUPS\"|t }}</h1>

", "partials/tools-backups-titlebar.html.twig", "/home/imagilabdev/grav/user/plugins/admin/themes/grav/templates/partials/tools-backups-titlebar.html.twig");
    }
}
