<?php

/* layout.html.twig */
class __TwigTemplate_7ff08032d66fe6956a39c013dbdb0da8d61835ef1058568b2cb68b164a800c8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'topnav' => array($this, 'block_topnav'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale", array()), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"google-site-verification\" content=\"07K23SrHZQ4HphZjfZym0IX2BW-tqgc_iu9bMEXsT7M\"/>

    <meta name=\"twitter:card\" content=\"summary\"/>
    <meta name=\"twitter:site\" content=\"@kenweego";
        // line 10
        echo ((($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale", array()) == "fr")) ? ("FR") : ("EN"));
        echo "\"/>

    ";
        // line 12
        if ((array_key_exists("seo", $context) &&  !(null === (isset($context["seo"]) ? $context["seo"] : null)))) {
            // line 13
            echo "        <meta name=\"og:title\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seo"]) ? $context["seo"] : null), "title", array()), "html", null, true);
            echo "\"/>
        <meta name=\"twitter:title\" content=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seo"]) ? $context["seo"] : null), "title", array()), "html", null, true);
            echo "\"/>
        <meta name=\"title\" content=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seo"]) ? $context["seo"] : null), "title", array()), "html", null, true);
            echo "\"/>

        <meta name=\"og:description\" content=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seo"]) ? $context["seo"] : null), "description", array()), "html", null, true);
            echo " | can we go\"/>
        <meta name=\"twitter:description\" content=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seo"]) ? $context["seo"] : null), "description", array()), "html", null, true);
            echo "\"/>
        <meta name=\"description\" content=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seo"]) ? $context["seo"] : null), "description", array()), "html", null, true);
            echo "\"/>


        ";
            // line 22
            if ($this->getAttribute((isset($context["seo"]) ? $context["seo"] : null), "image", array(), "any", true, true)) {
                // line 23
                echo "            <meta name=\"image\" content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seo"]) ? $context["seo"] : null), "image", array()), "html", null, true);
                echo "\"/>
            <meta name=\"twitter:image\" content=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seo"]) ? $context["seo"] : null), "image", array()), "html", null, true);
                echo "\"/>
            <meta name=\"og:image\" content=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seo"]) ? $context["seo"] : null), "image", array()), "html", null, true);
                echo "\"/>
        ";
            } else {
                // line 27
                echo "            <meta name=\"image\" content=\"https://www.kenweego.com/img/logo-splash.jpg\"/>
            <meta name=\"twitter:image\" content=\"https://www.kenweego.com/img/logo-splash.jpg\"/>
            <meta name=\"og:image\" content=\"https://www.kenweego.com/img/logo-splash.jpg\"/>
        ";
            }
            // line 31
            echo "    ";
        } else {
            // line 32
            echo "        <meta name=\"title\" content=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("default.seo.title"), "html", null, true);
            echo "\"/>
        <meta name=\"description\" content=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("default.seo.description"), "html", null, true);
            echo "\"/>
        <meta name=\"image\" content=\"https://www.kenweego.com/img/logo-splash.jpg\"/>

        <meta name=\"og:title\" content=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("default.seo.title"), "html", null, true);
            echo "\"/>
        <meta name=\"og:description\" content=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("default.seo.description"), "html", null, true);
            echo "\"/>
        <meta name=\"og:image\" content=\"https://www.kenweego.com/img/logo-splash.jpg\"/>


        <meta name=\"twitter:title\" content=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("default.seo.title"), "html", null, true);
            echo "\"/>
        <meta name=\"twitter:description\" content=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("default.seo.description"), "html", null, true);
            echo "\"/>
        <meta name=\"twitter:image\" content=\"https://www.kenweego.com/img/logo-splash.jpg\"/>
    ";
        }
        // line 45
        echo "

    <meta property=\"og:type\" content=\"website\"/>


    ";
        // line 50
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale", array()) == "es")) {
            // line 51
            echo "        <meta property=\"og:locale\" content=\"es-ES\"/>
        <meta property=\"og:locale:alternate\" content=\"de-DE\"/>
        <meta property=\"og:locale:alternate\" content=\"fr-FR\"/>
        <meta property=\"og:locale:alternate\" content=\"en-GB\"/>
    ";
        } elseif (($this->getAttribute(        // line 55
(isset($context["app"]) ? $context["app"] : null), "locale", array()) == "fr")) {
            // line 56
            echo "        <meta property=\"og:locale\" content=\"fr-FR\"/>
        <meta property=\"og:locale:alternate\" content=\"en-GB\"/>
        <meta property=\"og:locale:alternate\" content=\"de-DE\"/>
        <meta property=\"og:locale:alternate\" content=\"es-ES\"/>
    ";
        } elseif (($this->getAttribute(        // line 60
(isset($context["app"]) ? $context["app"] : null), "locale", array()) == "de")) {
            // line 61
            echo "        <meta property=\"og:locale\" content=\"de-DE\"/>
        <meta property=\"og:locale:alternate\" content=\"es-ES\"/>
        <meta property=\"og:locale:alternate\" content=\"en-GB\"/>
        <meta property=\"og:locale:alternate\" content=\"fr-FR\"/>
    ";
        } else {
            // line 66
            echo "        <meta property=\"og:locale\" content=\"en-ES\"/>
        <meta property=\"og:locale:alternate\" content=\"es-ES\"/>
        <meta property=\"og:locale:alternate\" content=\"de-DE\"/>
        <meta property=\"og:locale:alternate\" content=\"fr-FR\"/>
    ";
        }
        // line 71
        echo "

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <title>Kenweego - ";
        // line 79
        echo twig_escape_filter($this->env, (((array_key_exists("seo", $context) &&  !(null === (isset($context["seo"]) ? $context["seo"] : null)))) ? ($this->getAttribute((isset($context["seo"]) ? $context["seo"] : null), "title", array())) : ($this->env->getExtension('translator')->trans("default.seo.title"))), "html", null, true);
        echo "</title>

    ";
        // line 81
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 133
        echo "
</head>
";
        // line 135
        $context["isDevice"] = ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "mobile_detect", array(), "array"), "isMobile", array(), "method") || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "mobile_detect", array(), "array"), "isTablet", array(), "method"));
        // line 136
        echo "<body class=\"layout-v1 ";
        echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method"), array("." => "-")), "html", null, true);
        echo " ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "class", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "class", array()), "html", null, true);
            echo " ";
        }
        // line 137
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "mobile_detect", array(), "array"), "isMobile", array(), "method")) {
            // line 138
            echo "mobile
";
        } elseif ($this->getAttribute($this->getAttribute(        // line 139
(isset($context["app"]) ? $context["app"] : null), "mobile_detect", array(), "array"), "isTablet", array(), "method")) {
            // line 140
            echo "tablet
";
        }
        // line 142
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "mobile_detect", array(), "array"), "isiOS", array(), "method")) {
            // line 143
            echo "ios
";
        } elseif ($this->getAttribute($this->getAttribute(        // line 144
(isset($context["app"]) ? $context["app"] : null), "mobile_detect", array(), "array"), "isAndroidOS", array(), "method")) {
            // line 145
            echo "android
";
        }
        // line 147
        echo "
\">

";
        // line 150
        if ( !$this->getAttribute((isset($context["app"]) ? $context["app"] : null), "debug", array())) {
            // line 151
            echo "
    ";
            // line 152
            if ((( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "cookies", array()), "has", array(0 => "kwg_tracking_donottrack"), "method") &&  !$this->getAttribute($this->getAttribute($this->getAttribute(            // line 153
(isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "has", array(0 => "kwg_tracking_donottrack"), "method")) &&  !$this->getAttribute($this->getAttribute($this->getAttribute(            // line 154
(isset($context["app"]) ? $context["app"] : null), "request", array()), "headers", array()), "has", array(0 => "X-Kwg-Notrack"), "method"))) {
                // line 155
                echo "        ";
                if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "host", array()) == "kenweego.com") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "host", array()) == "www.kenweego.com"))) {
                    // line 156
                    echo "            <script type=\"text/javascript\">
                !function () {
                    var analytics = window.analytics = window.analytics || [];
                    if (!analytics.initialize)if (analytics.invoked)window.console && console.error && console.error(\"Segment snippet included twice.\"); else {
                        analytics.invoked = !0;
                        analytics.methods = [\"trackSubmit\", \"trackClick\", \"trackLink\", \"trackForm\", \"pageview\", \"identify\", \"reset\", \"group\", \"track\", \"ready\", \"alias\", \"page\", \"once\", \"off\", \"on\"];
                        analytics.factory = function (t) {
                            return function () {
                                var e = Array.prototype.slice.call(arguments);
                                e.unshift(t);
                                analytics.push(e);
                                return analytics
                            }
                        };
                        for (var t = 0; t < analytics.methods.length; t++) {
                            var e = analytics.methods[t];
                            analytics[e] = analytics.factory(e)
                        }
                        analytics.load = function (t) {
                            var e = document.createElement(\"script\");
                            e.type = \"text/javascript\";
                            e.async = !0;
                            e.src = (\"https:\" === document.location.protocol ? \"https://\" : \"http://\") + \"cdn.segment.com/analytics.js/v1/\" + t + \"/analytics.min.js\";
                            var n = document.getElementsByTagName(\"script\")[0];
                            n.parentNode.insertBefore(e, n)
                        };
                        analytics.SNIPPET_VERSION = \"3.1.0\";
                        analytics.load(\"HBNOpK7J1K5pi17X8QIqBj6bwhNaREYP\");
                        analytics.page()
                    }
                }();
            </script>

            ";
                } elseif ((is_string($__internal_f0b1e38091ec08d433b1f809d78c70f5d044e154dd9b94ce56c1c718ef1948ee = $this->getAttribute($this->getAttribute(                // line 189
(isset($context["app"]) ? $context["app"] : null), "request", array()), "host", array())) && is_string($__internal_1b2561d9b025bd8642638dc3436adf79fe060e8e11275e60d979cfc1baf15178 = "devops.kenweego.com") && ('' === $__internal_1b2561d9b025bd8642638dc3436adf79fe060e8e11275e60d979cfc1baf15178 || $__internal_1b2561d9b025bd8642638dc3436adf79fe060e8e11275e60d979cfc1baf15178 === substr($__internal_f0b1e38091ec08d433b1f809d78c70f5d044e154dd9b94ce56c1c718ef1948ee, -strlen($__internal_1b2561d9b025bd8642638dc3436adf79fe060e8e11275e60d979cfc1baf15178))))) {
                    // line 190
                    echo "
            <script type=\"text/javascript\">
                !function () {
                    var analytics = window.analytics = window.analytics || [];
                    if (!analytics.initialize)if (analytics.invoked)window.console && console.error && console.error(\"Segment snippet included twice.\"); else {
                        analytics.invoked = !0;
                        analytics.methods = [\"trackSubmit\", \"trackClick\", \"trackLink\", \"trackForm\", \"pageview\", \"identify\", \"reset\", \"group\", \"track\", \"ready\", \"alias\", \"page\", \"once\", \"off\", \"on\"];
                        analytics.factory = function (t) {
                            return function () {
                                var e = Array.prototype.slice.call(arguments);
                                e.unshift(t);
                                analytics.push(e);
                                return analytics
                            }
                        };
                        for (var t = 0; t < analytics.methods.length; t++) {
                            var e = analytics.methods[t];
                            analytics[e] = analytics.factory(e)
                        }
                        analytics.load = function (t) {
                            var e = document.createElement(\"script\");
                            e.type = \"text/javascript\";
                            e.async = !0;
                            e.src = (\"https:\" === document.location.protocol ? \"https://\" : \"http://\") + \"cdn.segment.com/analytics.js/v1/\" + t + \"/analytics.min.js\";
                            var n = document.getElementsByTagName(\"script\")[0];
                            n.parentNode.insertBefore(e, n)
                        };
                        analytics.SNIPPET_VERSION = \"3.1.0\";
                        analytics.load(\"Kd7TKJAeJCXzHMy0SWJH9ieF8105rfqX\");
                        analytics.page()
                    }
                }();
            </script>
            <script type=\"text/javascript\">
                window.heap = window.heap || [], heap.load = function (e, t) {
                    window.heap.appid = e, window.heap.config = t = t || {};
                    var n = t.forceSSL || \"https:\" === document.location.protocol, a = document.createElement(\"script\");
                    a.type = \"text/javascript\", a.async = !0, a.src = (n ? \"https:\" : \"http:\") + \"//cdn.heapanalytics.com/js/heap-\" + e + \".js\";
                    var o = document.getElementsByTagName(\"script\")[0];
                    o.parentNode.insertBefore(a, o);
                    for (var r = function (e) {
                        return function () {
                            heap.push([e].concat(Array.prototype.slice.call(arguments, 0)))
                        }
                    }, p = [\"clearEventProperties\", \"identify\", \"setEventProperties\", \"track\", \"unsetEventProperty\"], c = 0; c < p.length; c++)heap[p[c]] = r(p[c])
                };
                heap.load(\"461466288\");
            </script>
        ";
                }
                // line 239
                echo "    ";
            }
            // line 240
            echo "
";
        }
        // line 242
        echo "

<div id=\"hello-bar\" class=\"alert alert-default fade text-darkgray\" role=\"alert\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">x &nbsp;</button>
    ";
        // line 247
        echo "
    <p class=\"text\">
        ";
        // line 249
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "mobile_detect", array(), "array"), "isAndroidOS", array(), "method")) {
            // line 250
            echo "            ";
            echo $this->env->getExtension('translator')->trans("hellobar.getapp.text");
            echo "
            <a href=\"https://play.google.com/store/apps/details?id=com.kenweego.app\"><img alt=\"Get it on Google Play\"
                                                                                          data-kwg-track-click=\"Clicked GooglePlayButton\"
                                                                                          data-kwg-track-props-location=\"NavTopMenu\"
                                                                                          src=\"https://developer.android.com/images/brand/";
            // line 254
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale", array()), "html", null, true);
            echo "_generic_rgb_wo_45.png\"/></a>
        ";
        } elseif ($this->getAttribute($this->getAttribute(        // line 255
(isset($context["app"]) ? $context["app"] : null), "mobile_detect", array(), "array"), "isIOS", array(), "method")) {
            // line 256
            echo "            ";
            echo $this->env->getExtension('translator')->trans("hellobar.getapp.text");
            echo "
            <a href=\"https://geo.itunes.apple.com/";
            // line 257
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale", array()), "html", null, true);
            echo "/app/kenweego/id1012318676?mt=8\"
               style=\"display:inline-block;overflow:hidden;background:url(https://linkmaker.itunes.apple.com/images/badges/en-us/badge_appstore-lrg.svg) no-repeat;width:165px;height:40px;\"></a>

        ";
        } else {
            // line 261
            echo "            ";
            echo $this->env->getExtension('translator')->trans("hellobar.cookies.disclaimer.text");
            echo "
        ";
        }
        // line 263
        echo "    </p>
</div>

";
        // line 266
        $this->displayBlock('topnav', $context, $blocks);
        // line 268
        echo "


";
        // line 271
        $this->loadTemplate("common/notifications.html.twig", "layout.html.twig", 271)->display($context);
        // line 272
        echo "

";
        // line 274
        $this->displayBlock('content', $context, $blocks);
        // line 277
        echo "


";
        // line 280
        $this->displayBlock('javascripts', $context, $blocks);
        // line 318
        echo "</body>
</html>
";
    }

    // line 81
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 82
        echo "        ";
        $context["loc"] = ("/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale", array()));
        // line 83
        echo "        <link rel=\"search\" type=\"application/opensearchdescription+xml\" href=\"http://kenweego.com/opensearch-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale", array()), "html", null, true);
        echo ".xml\" title=\"MySite Search\" />
        <link rel=\"dns-prefetch\" href=\"//fonts.googleapis.com\">
        <link rel=\"dns-prefetch\" href=\"https://www.google-analytics.com\">
        <link rel=\"dns-prefetch\" href=\"https://cdn.mxpnl.com\">
        <link rel=\"dns-prefetch\" href=\"https://www.googletagservices.com\">

        ";
        // line 89
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "requestUri", array()) == "/")) {
            // line 90
            echo "            <link rel=\"alternate\" href=\"/en\" hreflang=\"en\"/>
            <link rel=\"alternate\" href=\"/fr\" hreflang=\"fr\"/>
            <link rel=\"alternate\" href=\"/de\" hreflang=\"de\"/>
            <link rel=\"alternate\" href=\"/es\" hreflang=\"es\"/>
        ";
        } else {
            // line 95
            echo "            <link rel=\"alternate\"
                  href=\"";
            // line 96
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "requestUri", array()), array((isset($context["loc"]) ? $context["loc"] : null) => "/fr")), "html", null, true);
            echo "\"
                  hreflang=\"fr\"/>
            <link rel=\"alternate\"
                  href=\"";
            // line 99
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "requestUri", array()), array((isset($context["loc"]) ? $context["loc"] : null) => "/en")), "html", null, true);
            echo "\"
                  hreflang=\"en\"/>
            <link rel=\"alternate\"
                  href=\"";
            // line 102
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "requestUri", array()), array((isset($context["loc"]) ? $context["loc"] : null) => "/de")), "html", null, true);
            echo "\"
                  hreflang=\"de\"/>
            <link rel=\"alternate\"
                  href=\"";
            // line 105
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "requestUri", array()), array((isset($context["loc"]) ? $context["loc"] : null) => "/es")), "html", null, true);
            echo "\"
                  hreflang=\"es\"/>

        ";
        }
        // line 109
        echo "


        <link href=\"https://fonts.googleapis.com/css?family=Cookie:500,400,300,100\" rel=\"stylesheet\" type=\"text/css\">
        <link href='https://fonts.googleapis.com/css?family=Lato:500,400,300,100' rel='stylesheet' type='text/css'>
        <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
        ";
        // line 115
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "debug", array())) {
            // line 116
            echo "
            <link rel=\"stylesheet\" href=\"/css/material-kenweego.css\">
            <link rel=\"stylesheet\" href=\"/css/vendor/datepicker/datepicker.min.css\">
            <link rel=\"stylesheet\" href=\"/css/font-awesome.min.css\">
            <link rel=\"stylesheet\" href=\"/css/fontello.css\">
            <link rel=\"stylesheet\" href=\"/css/select2/select2.css\"/>
            <link rel=\"stylesheet\" href=\"/css/vendor/selectize/selectize.bootstrap3.css\">
            <link rel=\"stylesheet\" href=\"/css/vendor/bootstrap/notify.css\">
            <link rel=\"stylesheet\" href=\"/css/styles.css\">
            <link rel=\"stylesheet\" href=\"/css/common/auto-tooltip.css\">
            <link rel=\"stylesheet\" href=\"/css/common/colors.css\">
            <link rel=\"stylesheet\" href=\"/css/search/actionbar.css\">
        ";
        } else {
            // line 129
            echo "            <link rel=\"stylesheet\" href=\"/css/layout.min.css?";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "assets.css.version", array(), "array"), "html", null, true);
            echo "\">
        ";
        }
        // line 131
        echo "
    ";
    }

    // line 266
    public function block_topnav($context, array $blocks = array())
    {
    }

    // line 274
    public function block_content($context, array $blocks = array())
    {
        // line 275
        echo "
";
    }

    // line 280
    public function block_javascripts($context, array $blocks = array())
    {
        // line 281
        echo "    <script>
        /**
         * Site parameters */

//@todo move to a file that will be twig generated

        var analytics = window.analytics;
        var Site = {
            State: undefined,
            abTests: ";
        // line 290
        echo (isset($context["ab_running"]) ? $context["ab_running"] : null);
        echo ",
            locale: \"";
        // line 291
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale", array()), "html", null, true);
        echo "\",
            params: {
                currency: ";
        // line 293
        echo twig_jsonencode_filter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "currency", array()));
        echo ",
                locale: \"";
        // line 294
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale", array()), "html", null, true);
        echo "\",
                country: 'FR',
                datesep: '/',
                cache: {
                    dictionary: ";
        // line 298
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "debug", array())) {
            echo "false";
        } else {
            echo "true";
        }
        echo ",
                    currencies: false
                }
            }
        };
    </script>

    <script src=\"/js/common/sherlog.js\"
            data-environment=\"";
        // line 306
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "debug", array())) {
            echo "development";
        } else {
            echo "production";
        }
        echo "\"></script>
    <script src=\"/js/vendor/jquery.js\"></script>
    <script src=\"/js/vendor/backbone/underscore.min.js\"></script>

    <script>
        \$(function () {
            if (analytics) {
                analytics.identify(";
        // line 313
        echo (isset($context["ab_running"]) ? $context["ab_running"] : null);
        echo ");
            }
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  576 => 313,  562 => 306,  547 => 298,  540 => 294,  536 => 293,  531 => 291,  527 => 290,  516 => 281,  513 => 280,  508 => 275,  505 => 274,  500 => 266,  495 => 131,  489 => 129,  474 => 116,  472 => 115,  464 => 109,  457 => 105,  451 => 102,  445 => 99,  439 => 96,  436 => 95,  429 => 90,  427 => 89,  417 => 83,  414 => 82,  411 => 81,  405 => 318,  403 => 280,  398 => 277,  396 => 274,  392 => 272,  390 => 271,  385 => 268,  383 => 266,  378 => 263,  372 => 261,  365 => 257,  360 => 256,  358 => 255,  354 => 254,  346 => 250,  344 => 249,  340 => 247,  334 => 242,  330 => 240,  327 => 239,  276 => 190,  274 => 189,  239 => 156,  236 => 155,  234 => 154,  233 => 153,  232 => 152,  229 => 151,  227 => 150,  222 => 147,  218 => 145,  216 => 144,  213 => 143,  211 => 142,  207 => 140,  205 => 139,  202 => 138,  200 => 137,  191 => 136,  189 => 135,  185 => 133,  183 => 81,  178 => 79,  168 => 71,  161 => 66,  154 => 61,  152 => 60,  146 => 56,  144 => 55,  138 => 51,  136 => 50,  129 => 45,  123 => 42,  119 => 41,  112 => 37,  108 => 36,  102 => 33,  97 => 32,  94 => 31,  88 => 27,  83 => 25,  79 => 24,  74 => 23,  72 => 22,  66 => 19,  62 => 18,  58 => 17,  53 => 15,  49 => 14,  44 => 13,  42 => 12,  37 => 10,  26 => 2,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="{{ app.locale }}">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="google-site-verification" content="07K23SrHZQ4HphZjfZym0IX2BW-tqgc_iu9bMEXsT7M"/>*/
/* */
/*     <meta name="twitter:card" content="summary"/>*/
/*     <meta name="twitter:site" content="@kenweego{{ app.locale == 'fr' ? 'FR' : 'EN' }}"/>*/
/* */
/*     {% if seo is defined and seo is not null %}*/
/*         <meta name="og:title" content="{{ seo.title }}"/>*/
/*         <meta name="twitter:title" content="{{ seo.title }}"/>*/
/*         <meta name="title" content="{{ seo.title }}"/>*/
/* */
/*         <meta name="og:description" content="{{ seo.description }} | can we go"/>*/
/*         <meta name="twitter:description" content="{{ seo.description }}"/>*/
/*         <meta name="description" content="{{ seo.description }}"/>*/
/* */
/* */
/*         {% if seo.image is defined %}*/
/*             <meta name="image" content="{{ seo.image }}"/>*/
/*             <meta name="twitter:image" content="{{ seo.image }}"/>*/
/*             <meta name="og:image" content="{{ seo.image }}"/>*/
/*         {% else %}*/
/*             <meta name="image" content="https://www.kenweego.com/img/logo-splash.jpg"/>*/
/*             <meta name="twitter:image" content="https://www.kenweego.com/img/logo-splash.jpg"/>*/
/*             <meta name="og:image" content="https://www.kenweego.com/img/logo-splash.jpg"/>*/
/*         {% endif %}*/
/*     {% else %}*/
/*         <meta name="title" content="{{ 'default.seo.title' | trans }}"/>*/
/*         <meta name="description" content="{{ 'default.seo.description' | trans }}"/>*/
/*         <meta name="image" content="https://www.kenweego.com/img/logo-splash.jpg"/>*/
/* */
/*         <meta name="og:title" content="{{ 'default.seo.title' | trans }}"/>*/
/*         <meta name="og:description" content="{{ 'default.seo.description' | trans }}"/>*/
/*         <meta name="og:image" content="https://www.kenweego.com/img/logo-splash.jpg"/>*/
/* */
/* */
/*         <meta name="twitter:title" content="{{ 'default.seo.title' | trans }}"/>*/
/*         <meta name="twitter:description" content="{{ 'default.seo.description' | trans }}"/>*/
/*         <meta name="twitter:image" content="https://www.kenweego.com/img/logo-splash.jpg"/>*/
/*     {% endif %}*/
/* */
/* */
/*     <meta property="og:type" content="website"/>*/
/* */
/* */
/*     {% if app.locale == 'es' %}*/
/*         <meta property="og:locale" content="es-ES"/>*/
/*         <meta property="og:locale:alternate" content="de-DE"/>*/
/*         <meta property="og:locale:alternate" content="fr-FR"/>*/
/*         <meta property="og:locale:alternate" content="en-GB"/>*/
/*     {% elseif app.locale == 'fr' %}*/
/*         <meta property="og:locale" content="fr-FR"/>*/
/*         <meta property="og:locale:alternate" content="en-GB"/>*/
/*         <meta property="og:locale:alternate" content="de-DE"/>*/
/*         <meta property="og:locale:alternate" content="es-ES"/>*/
/*     {% elseif app.locale == 'de' %}*/
/*         <meta property="og:locale" content="de-DE"/>*/
/*         <meta property="og:locale:alternate" content="es-ES"/>*/
/*         <meta property="og:locale:alternate" content="en-GB"/>*/
/*         <meta property="og:locale:alternate" content="fr-FR"/>*/
/*     {% else %}*/
/*         <meta property="og:locale" content="en-ES"/>*/
/*         <meta property="og:locale:alternate" content="es-ES"/>*/
/*         <meta property="og:locale:alternate" content="de-DE"/>*/
/*         <meta property="og:locale:alternate" content="fr-FR"/>*/
/*     {% endif %}*/
/* */
/* */
/*     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* */
/*     <title>Kenweego - {{ seo is defined and seo is not null  ? seo.title : ('default.seo.title' | trans) }}</title>*/
/* */
/*     {% block stylesheets %}*/
/*         {% set loc = '/' ~  app.locale %}*/
/*         <link rel="search" type="application/opensearchdescription+xml" href="http://kenweego.com/opensearch-{{ app.locale }}.xml" title="MySite Search" />*/
/*         <link rel="dns-prefetch" href="//fonts.googleapis.com">*/
/*         <link rel="dns-prefetch" href="https://www.google-analytics.com">*/
/*         <link rel="dns-prefetch" href="https://cdn.mxpnl.com">*/
/*         <link rel="dns-prefetch" href="https://www.googletagservices.com">*/
/* */
/*         {% if app.request.requestUri == "/" %}*/
/*             <link rel="alternate" href="/en" hreflang="en"/>*/
/*             <link rel="alternate" href="/fr" hreflang="fr"/>*/
/*             <link rel="alternate" href="/de" hreflang="de"/>*/
/*             <link rel="alternate" href="/es" hreflang="es"/>*/
/*         {% else %}*/
/*             <link rel="alternate"*/
/*                   href="{{ app.request.requestUri | replace({(loc): '/fr'}) }}"*/
/*                   hreflang="fr"/>*/
/*             <link rel="alternate"*/
/*                   href="{{ app.request.requestUri | replace({(loc): '/en'}) }}"*/
/*                   hreflang="en"/>*/
/*             <link rel="alternate"*/
/*                   href="{{ app.request.requestUri | replace({(loc): '/de'}) }}"*/
/*                   hreflang="de"/>*/
/*             <link rel="alternate"*/
/*                   href="{{ app.request.requestUri | replace({(loc): '/es'}) }}"*/
/*                   hreflang="es"/>*/
/* */
/*         {% endif %}*/
/* */
/* */
/* */
/*         <link href="https://fonts.googleapis.com/css?family=Cookie:500,400,300,100" rel="stylesheet" type="text/css">*/
/*         <link href='https://fonts.googleapis.com/css?family=Lato:500,400,300,100' rel='stylesheet' type='text/css'>*/
/*         <link rel="stylesheet" href="/css/bootstrap.min.css">*/
/*         {% if app.debug %}*/
/* */
/*             <link rel="stylesheet" href="/css/material-kenweego.css">*/
/*             <link rel="stylesheet" href="/css/vendor/datepicker/datepicker.min.css">*/
/*             <link rel="stylesheet" href="/css/font-awesome.min.css">*/
/*             <link rel="stylesheet" href="/css/fontello.css">*/
/*             <link rel="stylesheet" href="/css/select2/select2.css"/>*/
/*             <link rel="stylesheet" href="/css/vendor/selectize/selectize.bootstrap3.css">*/
/*             <link rel="stylesheet" href="/css/vendor/bootstrap/notify.css">*/
/*             <link rel="stylesheet" href="/css/styles.css">*/
/*             <link rel="stylesheet" href="/css/common/auto-tooltip.css">*/
/*             <link rel="stylesheet" href="/css/common/colors.css">*/
/*             <link rel="stylesheet" href="/css/search/actionbar.css">*/
/*         {% else %}*/
/*             <link rel="stylesheet" href="/css/layout.min.css?{{ app['assets.css.version'] }}">*/
/*         {% endif %}*/
/* */
/*     {% endblock %}*/
/* */
/* </head>*/
/* {% set isDevice =  app["mobile_detect"].isMobile() or app["mobile_detect"].isTablet() %}*/
/* <body class="layout-v1 {{ app.request.get('_route') | replace({'.':'-'}) }} {% if page.class  is defined %} {{ page.class }} {% endif %}*/
/* {% if app["mobile_detect"].isMobile() %}*/
/* mobile*/
/* {% elseif app["mobile_detect"].isTablet() %}*/
/* tablet*/
/* {% endif %}*/
/* {% if app["mobile_detect"].isiOS() %}*/
/* ios*/
/* {% elseif app["mobile_detect"].isAndroidOS() %}*/
/* android*/
/* {% endif %}*/
/* */
/* ">*/
/* */
/* {% if not app.debug %}*/
/* */
/*     {% if not app.request.cookies.has('kwg_tracking_donottrack')*/
/*     and not app.request.query.has('kwg_tracking_donottrack')*/
/*     and not app.request.headers.has('X-Kwg-Notrack') %}*/
/*         {% if app.request.host == 'kenweego.com' or app.request.host == 'www.kenweego.com' %}*/
/*             <script type="text/javascript">*/
/*                 !function () {*/
/*                     var analytics = window.analytics = window.analytics || [];*/
/*                     if (!analytics.initialize)if (analytics.invoked)window.console && console.error && console.error("Segment snippet included twice."); else {*/
/*                         analytics.invoked = !0;*/
/*                         analytics.methods = ["trackSubmit", "trackClick", "trackLink", "trackForm", "pageview", "identify", "reset", "group", "track", "ready", "alias", "page", "once", "off", "on"];*/
/*                         analytics.factory = function (t) {*/
/*                             return function () {*/
/*                                 var e = Array.prototype.slice.call(arguments);*/
/*                                 e.unshift(t);*/
/*                                 analytics.push(e);*/
/*                                 return analytics*/
/*                             }*/
/*                         };*/
/*                         for (var t = 0; t < analytics.methods.length; t++) {*/
/*                             var e = analytics.methods[t];*/
/*                             analytics[e] = analytics.factory(e)*/
/*                         }*/
/*                         analytics.load = function (t) {*/
/*                             var e = document.createElement("script");*/
/*                             e.type = "text/javascript";*/
/*                             e.async = !0;*/
/*                             e.src = ("https:" === document.location.protocol ? "https://" : "http://") + "cdn.segment.com/analytics.js/v1/" + t + "/analytics.min.js";*/
/*                             var n = document.getElementsByTagName("script")[0];*/
/*                             n.parentNode.insertBefore(e, n)*/
/*                         };*/
/*                         analytics.SNIPPET_VERSION = "3.1.0";*/
/*                         analytics.load("HBNOpK7J1K5pi17X8QIqBj6bwhNaREYP");*/
/*                         analytics.page()*/
/*                     }*/
/*                 }();*/
/*             </script>*/
/* */
/*             {% elseif app.request.host ends with 'devops.kenweego.com' %}*/
/* */
/*             <script type="text/javascript">*/
/*                 !function () {*/
/*                     var analytics = window.analytics = window.analytics || [];*/
/*                     if (!analytics.initialize)if (analytics.invoked)window.console && console.error && console.error("Segment snippet included twice."); else {*/
/*                         analytics.invoked = !0;*/
/*                         analytics.methods = ["trackSubmit", "trackClick", "trackLink", "trackForm", "pageview", "identify", "reset", "group", "track", "ready", "alias", "page", "once", "off", "on"];*/
/*                         analytics.factory = function (t) {*/
/*                             return function () {*/
/*                                 var e = Array.prototype.slice.call(arguments);*/
/*                                 e.unshift(t);*/
/*                                 analytics.push(e);*/
/*                                 return analytics*/
/*                             }*/
/*                         };*/
/*                         for (var t = 0; t < analytics.methods.length; t++) {*/
/*                             var e = analytics.methods[t];*/
/*                             analytics[e] = analytics.factory(e)*/
/*                         }*/
/*                         analytics.load = function (t) {*/
/*                             var e = document.createElement("script");*/
/*                             e.type = "text/javascript";*/
/*                             e.async = !0;*/
/*                             e.src = ("https:" === document.location.protocol ? "https://" : "http://") + "cdn.segment.com/analytics.js/v1/" + t + "/analytics.min.js";*/
/*                             var n = document.getElementsByTagName("script")[0];*/
/*                             n.parentNode.insertBefore(e, n)*/
/*                         };*/
/*                         analytics.SNIPPET_VERSION = "3.1.0";*/
/*                         analytics.load("Kd7TKJAeJCXzHMy0SWJH9ieF8105rfqX");*/
/*                         analytics.page()*/
/*                     }*/
/*                 }();*/
/*             </script>*/
/*             <script type="text/javascript">*/
/*                 window.heap = window.heap || [], heap.load = function (e, t) {*/
/*                     window.heap.appid = e, window.heap.config = t = t || {};*/
/*                     var n = t.forceSSL || "https:" === document.location.protocol, a = document.createElement("script");*/
/*                     a.type = "text/javascript", a.async = !0, a.src = (n ? "https:" : "http:") + "//cdn.heapanalytics.com/js/heap-" + e + ".js";*/
/*                     var o = document.getElementsByTagName("script")[0];*/
/*                     o.parentNode.insertBefore(a, o);*/
/*                     for (var r = function (e) {*/
/*                         return function () {*/
/*                             heap.push([e].concat(Array.prototype.slice.call(arguments, 0)))*/
/*                         }*/
/*                     }, p = ["clearEventProperties", "identify", "setEventProperties", "track", "unsetEventProperty"], c = 0; c < p.length; c++)heap[p[c]] = r(p[c])*/
/*                 };*/
/*                 heap.load("461466288");*/
/*             </script>*/
/*         {% endif %}*/
/*     {% endif %}*/
/* */
/* {% endif %}*/
/* */
/* */
/* <div id="hello-bar" class="alert alert-default fade text-darkgray" role="alert">*/
/*     <button type="button" class="close" data-dismiss="alert">x &nbsp;</button>*/
/*     {# <img src="/img/partners/startinparis.png" style="margin-right:30px;height:50px;"/> #}*/
/* */
/*     <p class="text">*/
/*         {% if app["mobile_detect"].isAndroidOS() %}*/
/*             {{ 'hellobar.getapp.text' | trans | raw }}*/
/*             <a href="https://play.google.com/store/apps/details?id=com.kenweego.app"><img alt="Get it on Google Play"*/
/*                                                                                           data-kwg-track-click="Clicked GooglePlayButton"*/
/*                                                                                           data-kwg-track-props-location="NavTopMenu"*/
/*                                                                                           src="https://developer.android.com/images/brand/{{ app.locale }}_generic_rgb_wo_45.png"/></a>*/
/*         {% elseif app["mobile_detect"].isIOS() %}*/
/*             {{ 'hellobar.getapp.text' | trans | raw }}*/
/*             <a href="https://geo.itunes.apple.com/{{ app.locale }}/app/kenweego/id1012318676?mt=8"*/
/*                style="display:inline-block;overflow:hidden;background:url(https://linkmaker.itunes.apple.com/images/badges/en-us/badge_appstore-lrg.svg) no-repeat;width:165px;height:40px;"></a>*/
/* */
/*         {% else %}*/
/*             {{ 'hellobar.cookies.disclaimer.text' | trans | raw }}*/
/*         {% endif %}*/
/*     </p>*/
/* </div>*/
/* */
/* {% block topnav %}*/
/* {% endblock %}*/
/* */
/* */
/* */
/* {% include 'common/notifications.html.twig' %}*/
/* */
/* */
/* {% block content %}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block javascripts %}*/
/*     <script>*/
/*         /***/
/*          * Site parameters *//* */
/* */
/* //@todo move to a file that will be twig generated*/
/* */
/*         var analytics = window.analytics;*/
/*         var Site = {*/
/*             State: undefined,*/
/*             abTests: {{ ab_running | raw }},*/
/*             locale: "{{app.locale}}",*/
/*             params: {*/
/*                 currency: {{ app.currency | json_encode | raw }},*/
/*                 locale: "{{app.locale }}",*/
/*                 country: 'FR',*/
/*                 datesep: '/',*/
/*                 cache: {*/
/*                     dictionary: {% if app.debug %}false{% else %}true{% endif %},*/
/*                     currencies: false*/
/*                 }*/
/*             }*/
/*         };*/
/*     </script>*/
/* */
/*     <script src="/js/common/sherlog.js"*/
/*             data-environment="{% if app.debug %}development{% else %}production{% endif %}"></script>*/
/*     <script src="/js/vendor/jquery.js"></script>*/
/*     <script src="/js/vendor/backbone/underscore.min.js"></script>*/
/* */
/*     <script>*/
/*         $(function () {*/
/*             if (analytics) {*/
/*                 analytics.identify({{ ab_running | raw }});*/
/*             }*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
