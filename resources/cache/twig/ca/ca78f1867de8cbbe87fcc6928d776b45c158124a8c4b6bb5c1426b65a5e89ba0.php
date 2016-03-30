<?php

/* Crud/list.html.twig */
class __TwigTemplate_45ea7240e867a6967940191da4f092a628054203a518aa7097c1620001ada881 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "Crud/list.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["active"] = "admin";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"/css/bg.css?v=";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "assets.css.version", array(), "array"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"/css/AdminLTE.css?v=";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "assets.css.version", array(), "array"), "html", null, true);
        echo "\">

";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "    <div>
        <section>
            <div class=\"btn-group\" style=\"\">
                <a class=\"btn btn-app\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_crud_list", array("collectionName" => (isset($context["collectionName"]) ? $context["collectionName"] : null))), "html", null, true);
        echo "\" type=\"button\"><i
                        class=\"fa fa-reply\"></i>Back</a>

            </div>
            <div class=\"btn-group\" style=\"\">
                <a class=\"btn btn-app\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_crud_add", array("collectionName" => (isset($context["collectionName"]) ? $context["collectionName"] : null))), "html", null, true);
        echo "\" type=\"button\"><i
                        class=\"fa fa-plus\"></i>Create a collectionName</a>

            </div>
            <div class=\"btn-group pull-right\" style=\"margin-left: 10px\">
                <form action=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_crud_list", array("collectionName" => (isset($context["collectionName"]) ? $context["collectionName"] : null))), "html", null, true);
        echo "\" method=\"get\" class=\"form-inline\"
                      style=\"width:220px;\">
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"q\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["q"]) ? $context["q"] : null), "html", null, true);
        echo "\" class=\"form-control input-active\" placeholder=\"Search...\"/>
                    </div>
                    <button type='submit' name='seach' id='search-btn' class=\"form-control btn btn-default\"><i
                                class=\"fa fa-search\"></i></button>
                </form>
            </div>
            <div class=\"btn-group pull-right\">
                <form method='GET' action=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("crud_list_default");
        echo "\" class=\"form-inline\">
                    <select name=\"collectionName\" class=\"form-control\">
                        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collectionSelect"]) ? $context["collectionSelect"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 41
            echo "                        <option ";
            if (($context["value"] == (isset($context["collectionName"]) ? $context["collectionName"] : null))) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                    </select>
                    <input type='submit' class=\"btn btn-primary\" value='Change'>
                </form>
            </div>
        </section>

        <h1>
            ";
        // line 50
        if ( !twig_test_empty((isset($context["q"]) ? $context["q"] : null))) {
            // line 51
            echo "                Results for \"";
            echo twig_escape_filter($this->env, (isset($context["q"]) ? $context["q"] : null), "html", null, true);
            echo "\"
            ";
        } else {
            // line 53
            echo "                Listing ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "count", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["collectionName"]) ? $context["collectionName"] : null), "html", null, true);
            echo "
            ";
        }
        // line 55
        echo "        </h1>

        ";
        // line 57
        if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "totalItems", array()) == 1)) {
            // line 58
            echo "            <strong>1</strong> ";
            echo twig_escape_filter($this->env, (isset($context["collectionName"]) ? $context["collectionName"] : null), "html", null, true);
            echo " found.
        ";
        } else {
            // line 60
            echo "            <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "totalItems", array()), "html", null, true);
            echo "</strong> regions found.
        ";
        }
        // line 62
        echo "
        Showing <strong>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPageFirstItem", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPageLastItem", array()), "html", null, true);
        echo "</strong>.


        <hr>
        <table class=\"table table-bordered\">
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Tags</th>
                <th>Actions</th>
            </tr>
            ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 75
            echo "                <tr>
                    <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "code", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($context["element"], "tags", array()), ", "), "html", null, true);
            echo "</td>
                    <td><a class=\"btn btn-primary\" href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_crud_edit", array("collectionName" => (isset($context["collectionName"]) ? $context["collectionName"] : null), "id" => $this->getAttribute($context["element"], "_id", array()))), "html", null, true);
            echo "\">Edit</a>
                    <a class=\"btn btn-primary bg-yellow\"  href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_crud_view", array("collectionName" => (isset($context["collectionName"]) ? $context["collectionName"] : null), "id" => $this->getAttribute($context["element"], "_id", array()))), "html", null, true);
            echo "\">Show</a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "        </table>
        ";
        // line 84
        echo (isset($context["paginator"]) ? $context["paginator"] : null);
        echo "
    </div>

";
    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        // line 90
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "Crud/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 90,  219 => 89,  211 => 84,  208 => 83,  199 => 80,  195 => 79,  191 => 78,  187 => 77,  183 => 76,  180 => 75,  176 => 74,  160 => 63,  157 => 62,  151 => 60,  145 => 58,  143 => 57,  139 => 55,  131 => 53,  125 => 51,  123 => 50,  114 => 43,  101 => 41,  97 => 40,  92 => 38,  82 => 31,  76 => 28,  68 => 23,  60 => 18,  55 => 15,  52 => 14,  45 => 9,  41 => 8,  36 => 7,  33 => 6,  29 => 1,  27 => 2,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* {% set active = 'admin' %}*/
/* */
/* */
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="/css/bg.css?v={{ app['assets.css.version'] }}">*/
/*     <link rel="stylesheet" href="/css/AdminLTE.css?v={{ app['assets.css.version'] }}">*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block content %}*/
/*     <div>*/
/*         <section>*/
/*             <div class="btn-group" style="">*/
/*                 <a class="btn btn-app" href="{{ path('admin_crud_list',{'collectionName': collectionName}) }}" type="button"><i*/
/*                         class="fa fa-reply"></i>Back</a>*/
/* */
/*             </div>*/
/*             <div class="btn-group" style="">*/
/*                 <a class="btn btn-app" href="{{ path('admin_crud_add', {'collectionName': collectionName}) }}" type="button"><i*/
/*                         class="fa fa-plus"></i>Create a collectionName</a>*/
/* */
/*             </div>*/
/*             <div class="btn-group pull-right" style="margin-left: 10px">*/
/*                 <form action="{{ path('admin_crud_list', {'collectionName': collectionName}) }}" method="get" class="form-inline"*/
/*                       style="width:220px;">*/
/*                     <div class="form-group">*/
/*                         <input type="text" name="q" value="{{ q }}" class="form-control input-active" placeholder="Search..."/>*/
/*                     </div>*/
/*                     <button type='submit' name='seach' id='search-btn' class="form-control btn btn-default"><i*/
/*                                 class="fa fa-search"></i></button>*/
/*                 </form>*/
/*             </div>*/
/*             <div class="btn-group pull-right">*/
/*                 <form method='GET' action="{{path('crud_list_default')}}" class="form-inline">*/
/*                     <select name="collectionName" class="form-control">*/
/*                         {% for value in collectionSelect %}*/
/*                         <option {% if value == collectionName %} selected {% endif %}>{{ value }}</option>*/
/*                             {% endfor %}*/
/*                     </select>*/
/*                     <input type='submit' class="btn btn-primary" value='Change'>*/
/*                 </form>*/
/*             </div>*/
/*         </section>*/
/* */
/*         <h1>*/
/*             {% if q is not empty %}*/
/*                 Results for "{{ q }}"*/
/*             {% else %}*/
/*                 Listing {{ collection.count }} {{ collectionName }}*/
/*             {% endif %}*/
/*         </h1>*/
/* */
/*         {% if paginator.totalItems == 1 %}*/
/*             <strong>1</strong> {{ collectionName }} found.*/
/*         {% else %}*/
/*             <strong>{{ paginator.totalItems }}</strong> regions found.*/
/*         {% endif %}*/
/* */
/*         Showing <strong>{{ paginator.currentPageFirstItem }} - {{ paginator.currentPageLastItem }}</strong>.*/
/* */
/* */
/*         <hr>*/
/*         <table class="table table-bordered">*/
/*             <tr>*/
/*                 <th>Code</th>*/
/*                 <th>Name</th>*/
/*                 <th>Tags</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*             {% for element in collection %}*/
/*                 <tr>*/
/*                     <td>{{ element.code }}</td>*/
/*                     <td>{{ element.name }}</td>*/
/*                     <td>{{ element.tags | join (', ') }}</td>*/
/*                     <td><a class="btn btn-primary" href="{{ path('admin_crud_edit', {'collectionName': collectionName, id: element._id }) }}">Edit</a>*/
/*                     <a class="btn btn-primary bg-yellow"  href="{{ path('admin_crud_view', {'collectionName': collectionName, id: element._id }) }}">Show</a></td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </table>*/
/*         {{ paginator|raw }}*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
