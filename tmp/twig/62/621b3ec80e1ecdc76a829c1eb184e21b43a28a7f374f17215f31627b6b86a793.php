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

/* database/qbe/sort_select_cell.twig */
class __TwigTemplate_43b9295af3a5417a65b06b94737163bdb03ae90096921ccc2db0c4714e01b56e extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<td class=\"center\">
    <select style=\"width:";
        // line 2
        echo twig_escape_filter($this->env, ($context["real_width"] ?? null), "html", null, true);
        echo "\" name=\"criteriaSort[";
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "]\" size=\"1\">
        <option value=\"\">&nbsp;</option>
        <option value=\"ASC\"";
        // line 5
        echo (((($context["selected"] ?? null) == "ASC")) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo _gettext("Ascending");
        echo "</option>
        <option value=\"DESC\"";
        // line 7
        echo (((($context["selected"] ?? null) == "DESC")) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo _gettext("Descending");
        echo "</option>
    </select>
</td>
";
    }

    public function getTemplateName()
    {
        return "database/qbe/sort_select_cell.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  47 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "database/qbe/sort_select_cell.twig", "C:\\laragon\\etc\\apps\\phpMyAdmin\\templates\\database\\qbe\\sort_select_cell.twig");
    }
}
