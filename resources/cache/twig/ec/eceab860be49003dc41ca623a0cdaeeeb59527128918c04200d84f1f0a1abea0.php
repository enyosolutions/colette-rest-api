<?php

/* common/404.html.twig */
class __TwigTemplate_ab7ab219d3f6c47b59f81bd5fc3ba557d26841ff436ad3950f922b8ebc63af22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Layout/layout-v2.html.twig", "common/404.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Layout/layout-v2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["active"] = "homepage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
    <!-- Hero Section
    ================================================== -->


    <!-- Main Section
    ================================================== -->
    <section class=\"main\" style=\"background-image:url(/img/landing/2.jpg);background-size: cover\">
        <br/>
        <br/>
        <br/>
        <div class=\"row\">

            <h1 class=\"home-title row\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("UH OH..."), "html", null, true);
        echo "</h1>

            <div class=\"col-xs-12 col-md-10 col-lg-8 col-lg-offset-2 col-md-offset-1\">
                <article id=\"post-333\" class=\"page type-page status-publish has-post-thumbnail hentry\">
                    <div class=\"entry-content\">
                        <article id=\"page.code\" class=\"card page-body cms-page\">
                            <div class=\"page-content\">
                                <h1 class=\"home-title\" style=\"color:#ff584B;\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("UH OH..."), "html", null, true);
        echo "</h1>
                                <div class=\"modal-body\">
                                    <div class=\"home-subtext\"> ";
        // line 32
        if ((array_key_exists("extraMessage", $context) &&  !twig_test_empty((isset($context["extraMessage"]) ? $context["extraMessage"] : null)))) {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["extraMessage"]) ? $context["extraMessage"] : null)), "html", null, true);
            echo " ";
        } else {
            echo "  ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("404.wrong.page"), "html", null, true);
            echo " ";
        }
        echo " </div>
                                    <br/>
                                    <hr/>
                                    <p>

                                    <form id=\"contact-form\" class=\"form-horizontal ajaxform\" method=\"POST\" action=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("mail.send");
        echo "\">
                                        <div class=\"form-group\">
                                            <div class=\"col-sm-8 col-sm-offset-2\">
                                                <input class=\"form-control\" name=\"email\" type=\"email\" id=\"inputEmail\" placeholder=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("your.email"), "html", null, true);
        echo "\"
                                                       required>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <div class=\"col-sm-8 col-sm-offset-2\">
                                                <input class=\"form-control\" name=\"subject\" type=\"text\" id=\"inputSubject\" placeholder=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("your.subject"), "html", null, true);
        echo "\"
                                                       required>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <div class=\"col-sm-8 col-sm-offset-2\">
                                                <!--<input class=\"form-control\" name=\"message\" type=\"textarea\" id=\"input-message\" placeholder=\"Message\" required> -->
                                                <textarea class=\"form-control\" name=\"message\" id=\"inputMessage\" placeholder=\"Message...\"
                                                          rows=\"6\" required></textarea>
                                            </div>
                                        </div>
                                        <br/><br/><br/>

                                        <div class=\"form-group\">
                                            <div class=\"col-sm-8 col-sm-offset-2\">
                                                <input class=\"form-control\" name=\"sec\" type=\"sec\" id=\"inputSec\"
                                                       placeholder=\"1 + 3 + 105 = ? \" required>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <div class=\"col-sm-8 col-sm-offset-2\">
                                                <button type=\"submit\" class=\"btn btn-primary\"
                                                        style=\"float:right;\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Send"), "html", null, true);
        echo "</button>
                                            </div>
                                        </div>
                                    </form>

                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                </article>
            </div>
        </div>
    </section>

";
    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
        // line 86
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        ";
        // line 87
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "debug", array())) {
            // line 88
            echo "        ";
        } else {
            // line 89
            echo "        ";
        }
        // line 90
        echo "        <script>
            \$(function () {
                if (analytics) {
                    analytics.page(\"404\",{extraMessage: extraMessage});
                }
            });

        </script>
    ";
    }

    public function getTemplateName()
    {
        return "common/404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 90,  165 => 89,  162 => 88,  160 => 87,  155 => 86,  152 => 85,  132 => 68,  107 => 46,  98 => 40,  92 => 37,  76 => 32,  71 => 30,  61 => 23,  46 => 10,  43 => 9,  36 => 6,  33 => 5,  29 => 1,  27 => 2,  11 => 1,);
    }
}
/* {% extends 'Layout/layout-v2.html.twig' %}*/
/* {% set active = 'homepage' %}*/
/* */
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     <!-- Hero Section*/
/*     ================================================== -->*/
/* */
/* */
/*     <!-- Main Section*/
/*     ================================================== -->*/
/*     <section class="main" style="background-image:url(/img/landing/2.jpg);background-size: cover">*/
/*         <br/>*/
/*         <br/>*/
/*         <br/>*/
/*         <div class="row">*/
/* */
/*             <h1 class="home-title row">{{ 'UH OH...'|trans }}</h1>*/
/* */
/*             <div class="col-xs-12 col-md-10 col-lg-8 col-lg-offset-2 col-md-offset-1">*/
/*                 <article id="post-333" class="page type-page status-publish has-post-thumbnail hentry">*/
/*                     <div class="entry-content">*/
/*                         <article id="page.code" class="card page-body cms-page">*/
/*                             <div class="page-content">*/
/*                                 <h1 class="home-title" style="color:#ff584B;">{{ 'UH OH...' | trans }}</h1>*/
/*                                 <div class="modal-body">*/
/*                                     <div class="home-subtext"> {% if extraMessage is defined and not extraMessage is empty%} {{ extraMessage | trans }} {% else %}  {{ '404.wrong.page'| trans }} {% endif %} </div>*/
/*                                     <br/>*/
/*                                     <hr/>*/
/*                                     <p>*/
/* */
/*                                     <form id="contact-form" class="form-horizontal ajaxform" method="POST" action="{{ path('mail.send') }}">*/
/*                                         <div class="form-group">*/
/*                                             <div class="col-sm-8 col-sm-offset-2">*/
/*                                                 <input class="form-control" name="email" type="email" id="inputEmail" placeholder="{{ 'your.email' |trans }}"*/
/*                                                        required>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <div class="col-sm-8 col-sm-offset-2">*/
/*                                                 <input class="form-control" name="subject" type="text" id="inputSubject" placeholder="{{ 'your.subject' |trans }}"*/
/*                                                        required>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <div class="col-sm-8 col-sm-offset-2">*/
/*                                                 <!--<input class="form-control" name="message" type="textarea" id="input-message" placeholder="Message" required> -->*/
/*                                                 <textarea class="form-control" name="message" id="inputMessage" placeholder="Message..."*/
/*                                                           rows="6" required></textarea>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <br/><br/><br/>*/
/* */
/*                                         <div class="form-group">*/
/*                                             <div class="col-sm-8 col-sm-offset-2">*/
/*                                                 <input class="form-control" name="sec" type="sec" id="inputSec"*/
/*                                                        placeholder="1 + 3 + 105 = ? " required>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <div class="col-sm-8 col-sm-offset-2">*/
/*                                                 <button type="submit" class="btn btn-primary"*/
/*                                                         style="float:right;">{{ 'Send' | trans }}</button>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </form>*/
/* */
/*                                     </p>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </article>*/
/*                     </div>*/
/*                 </article>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* */
/* {% endblock %}*/
/* */
/*     {% block javascripts %}*/
/*         {{ parent() }}*/
/*         {% if app.debug %}*/
/*         {% else %}*/
/*         {% endif %}*/
/*         <script>*/
/*             $(function () {*/
/*                 if (analytics) {*/
/*                     analytics.page("404",{extraMessage: extraMessage});*/
/*                 }*/
/*             });*/
/* */
/*         </script>*/
/*     {% endblock %}*/
