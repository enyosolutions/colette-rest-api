<?php

/* common/notifications.html.twig */
class __TwigTemplate_d69afa3fcbeb8959a650d4edf89333cae7b1f4269d828a4f898a7a813b34c8cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class='notifications top-left'></div>
<div class='notifications top-right'></div>
<div class='notifications bottom-left'></div>
<div class='notifications bottom-right'></div>

<div class=\"notifications-block\">
    ";
        // line 7
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "has", array(0 => "alert"), "method")) {
            // line 8
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "alert"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 9
                echo "            <div class=\"alert alert-info\">";
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "    ";
        }
        // line 14
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "has", array(0 => "info"), "method")) {
            // line 15
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 16
                echo "            <div class=\"alert alert-info\">";
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "    ";
        }
        // line 21
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "has", array(0 => "error"), "method")) {
            // line 22
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 23
                echo "            <div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "    ";
        }
        // line 28
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "has", array(0 => "warning"), "method")) {
            // line 29
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 30
                echo "            <div class=\"alert alert-warning\">";
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "    ";
        }
        // line 35
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "has", array(0 => "danger"), "method")) {
            // line 36
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "danger"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 37
                echo "            <div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "    ";
        }
        // line 42
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "has", array(0 => "success"), "method")) {
            // line 43
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 44
                echo "            <div class=\"alert alert-success\">";
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "    ";
        }
        // line 49
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "common/notifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 49,  155 => 48,  144 => 44,  139 => 43,  136 => 42,  133 => 41,  122 => 37,  117 => 36,  114 => 35,  111 => 34,  100 => 30,  95 => 29,  92 => 28,  89 => 27,  78 => 23,  73 => 22,  70 => 21,  67 => 20,  56 => 16,  51 => 15,  48 => 14,  45 => 13,  34 => 9,  29 => 8,  27 => 7,  19 => 1,);
    }
}
/* <div class='notifications top-left'></div>*/
/* <div class='notifications top-right'></div>*/
/* <div class='notifications bottom-left'></div>*/
/* <div class='notifications bottom-right'></div>*/
/* */
/* <div class="notifications-block">*/
/*     {% if app.session.flashbag.has('alert') %}*/
/*         {% for flashMessage in app.session.flashbag.get('alert') %}*/
/*             <div class="alert alert-info">{{ flashMessage }}*/
/*                 <button type="button" class="close" data-dismiss="alert">×</button>*/
/*             </div>*/
/*         {% endfor %}*/
/*     {% endif %}*/
/*     {% if app.session.flashbag.has('info') %}*/
/*         {% for flashMessage in app.session.flashbag.get('info') %}*/
/*             <div class="alert alert-info">{{ flashMessage }}*/
/*                 <button type="button" class="close" data-dismiss="alert">×</button>*/
/*             </div>*/
/*         {% endfor %}*/
/*     {% endif %}*/
/*     {% if app.session.flashbag.has('error') %}*/
/*         {% for flashMessage in app.session.flashbag.get('error') %}*/
/*             <div class="alert alert-danger">{{ flashMessage }}*/
/*                 <button type="button" class="close" data-dismiss="alert">×</button>*/
/*             </div>*/
/*         {% endfor %}*/
/*     {% endif %}*/
/*     {% if app.session.flashbag.has('warning') %}*/
/*         {% for flashMessage in app.session.flashbag.get('warning') %}*/
/*             <div class="alert alert-warning">{{ flashMessage }}*/
/*                 <button type="button" class="close" data-dismiss="alert">×</button>*/
/*             </div>*/
/*         {% endfor %}*/
/*     {% endif %}*/
/*     {% if app.session.flashbag.has('danger') %}*/
/*         {% for flashMessage in app.session.flashbag.get('danger') %}*/
/*             <div class="alert alert-danger">{{ flashMessage }}*/
/*                 <button type="button" class="close" data-dismiss="alert">×</button>*/
/*             </div>*/
/*         {% endfor %}*/
/*     {% endif %}*/
/*     {% if app.session.flashbag.has('success') %}*/
/*         {% for flashMessage in app.session.flashbag.get('success') %}*/
/*             <div class="alert alert-success">{{ flashMessage }}*/
/*                 <button type="button" class="close" data-dismiss="alert">×</button>*/
/*             </div>*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* </div>*/
