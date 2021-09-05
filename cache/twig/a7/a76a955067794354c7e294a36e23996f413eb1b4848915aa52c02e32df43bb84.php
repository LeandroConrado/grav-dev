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

/* partials/tools-scheduler.html.twig */
class __TwigTemplate_1dcde46e0b62a4dfd4b364a4e45219485175cc9a9de7728264648c3daa07eb86 extends \Twig\Template
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
        echo "<div class=\"scheduler-content\">

    ";
        // line 3
        $context["data"] = $this->getAttribute(($context["admin"] ?? null), "data", [0 => "config/scheduler"], "method");
        // line 4
        echo "    ";
        $context["cron_status"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "scheduler", []), "isCrontabSetup", [], "method");
        // line 5
        echo "    ";
        $context["user"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "scheduler", []), "whoami", [], "method");
        // line 6
        echo "
    ";
        // line 7
        if ((($context["cron_status"] ?? null) == 1)) {
            // line 8
            echo "        <div class=\"alert notice secondary-accent\">
            <div id=\"show-instructions\" class=\"button button-small\"><i class=\"fa fa-clock-o\"></i> ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.SCHEDULER_INSTALL_INSTRUCTIONS"), "html", null, true);
            echo "</div>
            <i class=\"fa fa-check\"></i> ";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.SCHEDULER_INSTALLED_READY"), "html", null, true);
            echo "
        </div>
    ";
        } elseif ((        // line 12
($context["cron_status"] ?? null) == 2)) {
            // line 13
            echo "        <div class=\"alert warning\"> ";
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.SCHEDULER_CRON_NA", ($context["user"] ?? null));
            echo "</div>
    ";
        } else {
            // line 15
            echo "        <div class=\"alert warning\"> ";
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.SCHEDULER_NOT_ENABLED", ($context["user"] ?? null));
            echo "</div>
    ";
        }
        // line 17
        echo "
    <div class=\"alert notice\"><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.SCHEDULER_WARNING", ($context["user"] ?? null)), "html", null, true);
        echo "</div>

    <div id=\"cron-install\" class=\"form-border overlay ";
        // line 20
        echo (((($context["cron_status"] ?? null) == 1)) ? ("hide") : (""));
        echo "\">
        <pre><code>";
        // line 21
        echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "scheduler", []), "getCronCommand", [], "method")), "html", null, true);
        echo "</code></pre>

        <p>";
        // line 23
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.SCHEDULER_POST_INSTRUCTIONS", ($context["user"] ?? null));
        echo "</p>
    </div>

    ";
        // line 26
        $this->loadTemplate("partials/blueprints.html.twig", "partials/tools-scheduler.html.twig", 26)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute(($context["data"] ?? null), "blueprints", []), "data" => ($context["data"] ?? null)]));
        // line 27
        echo "
    ";
        // line 28
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "partials/tools-scheduler.html.twig", 28)->display($context);
        // line 29
        echo "
    <script>
        \$('#show-instructions').click(function() {
            \$('#cron-install').toggleClass( \"hide\" );
        });
    </script>

</div>
";
    }

    public function getTemplateName()
    {
        return "partials/tools-scheduler.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 29,  101 => 28,  98 => 27,  96 => 26,  90 => 23,  85 => 21,  81 => 20,  76 => 18,  73 => 17,  67 => 15,  61 => 13,  59 => 12,  54 => 10,  50 => 9,  47 => 8,  45 => 7,  42 => 6,  39 => 5,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"scheduler-content\">

    {% set data = admin.data('config/scheduler') %}
    {% set cron_status = grav.scheduler.isCrontabSetup() %}
    {% set user = grav.scheduler.whoami() %}

    {% if cron_status == 1 %}
        <div class=\"alert notice secondary-accent\">
            <div id=\"show-instructions\" class=\"button button-small\"><i class=\"fa fa-clock-o\"></i> {{ \"PLUGIN_ADMIN.SCHEDULER_INSTALL_INSTRUCTIONS\"|t }}</div>
            <i class=\"fa fa-check\"></i> {{ \"PLUGIN_ADMIN.SCHEDULER_INSTALLED_READY\"|t }}
        </div>
    {% elseif cron_status == 2 %}
        <div class=\"alert warning\"> {{ \"PLUGIN_ADMIN.SCHEDULER_CRON_NA\"|t(user)|raw }}</div>
    {% else %}
        <div class=\"alert warning\"> {{ \"PLUGIN_ADMIN.SCHEDULER_NOT_ENABLED\"|t(user)|raw }}</div>
    {% endif %}

    <div class=\"alert notice\"><i class=\"fa fa-exclamation-circle\"></i> {{ \"PLUGIN_ADMIN.SCHEDULER_WARNING\"|t(user) }}</div>

    <div id=\"cron-install\" class=\"form-border overlay {{ cron_status == 1 ? 'hide' : ''}}\">
        <pre><code>{{- grav.scheduler.getCronCommand()|trim -}}</code></pre>

        <p>{{ \"PLUGIN_ADMIN.SCHEDULER_POST_INSTRUCTIONS\"|t(user)|raw }}</p>
    </div>

    {% include 'partials/blueprints.html.twig' with { blueprints: data.blueprints, data: data } %}

    {% include 'partials/modal-changes-detected.html.twig' %}

    <script>
        \$('#show-instructions').click(function() {
            \$('#cron-install').toggleClass( \"hide\" );
        });
    </script>

</div>
", "partials/tools-scheduler.html.twig", "/home/imagilabdev/grav/user/plugins/admin/themes/grav/templates/partials/tools-scheduler.html.twig");
    }
}
