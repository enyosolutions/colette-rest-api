<?php

/* common/navTop-v2.html.twig */
class __TwigTemplate_67bf4d6391e66f60bc7388ae62688b3e444c02ccff834fb514f3b67bc6554379 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'subheader' => array($this, 'block_subheader'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"navbar-wrapper\">
    ";
        // line 8
        $context["siteRootUrl"] = (((((isset($context["absoluteurls"]) ? $context["absoluteurls"] : null) || ((isset($context["type"]) ? $context["type"] : null) == "blog")) || ((isset($context["type"]) ? $context["type"] : null) == "iframe"))) ? ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "scheme", array()) . "://") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "host", array()))) : (""));
        // line 9
        echo "    ";
        if (((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : null) == "standalone")) || ((isset($context["type"]) ? $context["type"] : null) == "iframe"))) {
            // line 10
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["siteRootUrl"]) ? $context["siteRootUrl"] : null), "html", null, true);
            echo "/css/layout-v2.min.css?";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "assets.css.version", array(), "array"), "html", null, true);
            echo "\">
        <script src=\"";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["siteRootUrl"]) ? $context["siteRootUrl"] : null), "html", null, true);
            echo "/js/vendor/jquery/jquery.1.11.min.js\"></script>
        <script src=\"";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["siteRootUrl"]) ? $context["siteRootUrl"] : null), "html", null, true);
            echo "/js/vendor/bootstrap/bootstrap.min.js\"></script>
    ";
        }
        // line 14
        echo "    ";
        if ((((isset($context["type"]) ? $context["type"] : null) == "iframe") || ((isset($context["type"]) ? $context["type"] : null) == "blog"))) {
            // line 15
            echo "    <style type=\"text/css\">
        body {
            background-color: transparent !important;
        }
        .navbar-top.navbar, .navbar-top header.navbar.navbar-primary{
            background-color: transparent;
        }

        .navbar-top .navbar-extra-top .navbar-fluid {
        background-color: rgba(0, 0, 0, 0.4);
        }

    </style>
    ";
        }
        // line 29
        echo "
<header class=\"navbar navbar-primary ";
        // line 30
        if (((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : null) != "standalone")) && ((isset($context["type"]) ? $context["type"] : null) != "blog"))) {
            echo "navbar-fixed-top";
        }
        echo " navbar-top \" id=\"MainMenu\">
";
        // line 31
        $this->displayBlock('header', $context, $blocks);
        // line 302
        echo "
";
        // line 303
        $this->displayBlock('subheader', $context, $blocks);
        // line 307
        echo "</header>
</div><!-- /.navbar-wrapper -->
";
    }

    // line 31
    public function block_header($context, array $blocks = array())
    {
        // line 32
        echo "    ";
        // line 33
        echo "    <div class=\"clearfix\">
    <div class=\"navbar navbar-fluid\">
    <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                    data-target=\"#bs-navbar-collapse-header\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
        <a class=\"navbar-brand\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo "\"><img
                    src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo "/img/logo_small_r.png\" alt=\"Kenweego\"
                    width=\"120\" height=\"56\"/><span class=\"subtext\">Beta</span></a>
    </div>

    <div id=\"bs-navbar-collapse-header\" class=\"navbar-top-right collapse navbar-collapse\">
        <ul class=\"nav navbar-nav navbar-right\">
            <li><a class=\"news-link\" data-kwg-track-click=\"Clicked NavMenu\" data-kwg-track-props-via=\"header\"
                   data-kwg-track-props-menu=\"home\"
                   target=\"_parent\"
                   href=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["siteRootUrl"]) ? $context["siteRootUrl"] : null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale", array()), "html", null, true);
        echo "/\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("nav.menu.label.home"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"\">
                <a data-kwg-track-click=\"Clicked SubnavMenu\"
                   data-kwg-track-props-via=\"header\"
                   data-kwg-track-props-menu=\"dashboard\"
                   target=\"_parent\"
                   href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("user_dashboard_index");
        echo "\"><i
                            class=\"fa fa-dashboard\"></i> ";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("nav.menu.label.dashboard"), "html", null, true);
        echo "</a>
            </li>
            <li><a class=\"news-link\" href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo $this->env->getExtension('routing')->getPath("flightslanding");
        echo "\"
                   data-kwg-track-click=\"Clicked NavMenu\"
                   data-kwg-track-props-via=\"header\"
                   data-kwg-track-props-menu=\"transport\"
                   target=\"_parent\"
                        >";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("nav.menu.label.flight"), "html", null, true);
        echo "</a></li>
            <li><a class=\"news-link\" data-kwg-track-click=\"Clicked NavMenu\"
                   data-kwg-track-props-via=\"header\"
                   data-kwg-track-props-menu=\"accommodation\"
                   target=\"_parent\"
                   href=\"http://hotels.kenweego.com?languageCode=";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale", array()), "html", null, true);
        echo "&currencyCode=";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "currency", array()), "code", array()), "html", null, true);
        echo "&brandId=432483&a_aid=143679\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("nav.menu.label.accommodation"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"dropdown\"><a class=\"news-link\" data-kwg-track-click=\"Clicked NavMenu\"
                                    data-kwg-track-props-menu=\"destinations\"
                                    data-kwg-track-props-via=\"header\"
                                    href=\"\"
                                    data-target=\"#\" class=\"dropdown-toggle\"
                                    target=\"_parent\"
                                    data-toggle=\"dropdown\"
                        >";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("nav.menu.label.destinations"), "html", null, true);
        echo " <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    <li><a class=\"news-link\" data-kwg-track-click=\"Clicked NavMenu\"
                           data-kwg-track-props-via=\"header\"
                           data-kwg-track-props-menu=\"destination\"
                           data-kwg-track-props-destination=\"search\"
                           href=\"";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["siteRootUrl"]) ? $context["siteRootUrl"] : null), "html", null, true);
        echo $this->env->getExtension('routing')->getPath("destinations.list");
        echo "\"><i class=\"fa fa-search\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search.label"), "html", null, true);
        echo "</a></li>
                    <li role=\"separator\" class=\"divider\"></li>

                    <li><a class=\"news-link\" data-kwg-track-click=\"Clicked NavMenu\"
                           data-kwg-track-props-via=\"header\"
                           data-kwg-track-props-menu=\"destination\"
                           data-kwg-track-props-destination=\"popular\"
                           href=\"";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["siteRootUrl"]) ? $context["siteRootUrl"] : null), "html", null, true);
        echo $this->env->getExtension('routing')->getPath("destinations.list", array("q" => "major"));
        echo "\"><i class=\"fa fa-users\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("popular.label"), "html", null, true);
        echo "</a></li>
                    <li><a class=\"news-link\" data-kwg-track-click=\"Clicked NavMenu\"
                           data-kwg-track-props-via=\"header\"
                           data-kwg-track-props-menu=\"destination\"
                           data-kwg-track-props-destination=\"all\"
                           href=\"";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["siteRootUrl"]) ? $context["siteRootUrl"] : null), "html", null, true);
        echo $this->env->getExtension('routing')->getPath("destinations.list");
        echo "\"><i class=\"fa fa-globe\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("all.destinations.label"), "html", null, true);
        echo "</a></li>
                    <li role=\"separator\" class=\"divider\"></li>

                    ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "sidebarCities"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["dest"]) {
            // line 104
            echo "                        <li>
                            <a class=\"news-link\" data-kwg-track-click=\"Clicked NavMenu\"
                               data-kwg-track-props-via=\"header\"
                               data-kwg-track-props-menu=\"destination\"
                               data-kwg-track-props-destination=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["dest"], "code", array()), "html", null, true);
            echo "\"
                               href=\"";
            // line 109
            echo twig_escape_filter($this->env, (isset($context["siteRootUrl"]) ? $context["siteRootUrl"] : null), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("destination.city", array("city" => $this->getAttribute($context["dest"], "code", array()))), "html", null, true);
            echo "
                        \">";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["dest"], "intl", array()), $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale", array()), array(), "array"), "name", array()), "html", null, true);
            echo "</a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "                </ul>
            </li>
            </li>
            ";
        // line 117
        echo "            <li class=\"dropdown\"><a class=\"contact-link\"
                                    data-kwg-track-click=\"Clicked NavMenu\"
                                    data-kwg-track-props-via=\"header\"
                                    data-kwg-track-props-menu=\"contact\"
                                    target=\"_parent\"
                                    hreflang=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale", array()), "html", null, true);
        echo "\" data-target=\"#\" class=\"dropdown-toggle\"
                                    data-toggle=\"dropdown\">";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contact"), "html", null, true);
        echo " <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    ";
        // line 128
        echo "                    <li><a class=\"news-link\" data-kwg-track-click=\"Clicked NavMenu\"
                           data-kwg-track-props-via=\"header\"
                           data-kwg-track-props-menu=\"news\"
                           target=\"_parent\"
                           href=\"http://blog.kenweego.com/";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale", array()), "html", null, true);
        echo "/\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.news"), "html", null, true);
        echo "</a>
                    <li><a class=\"contact-link\"
                           data-kwg-track-click=\"Clicked SubnavMenu\"
                           data-kwg-track-props-via=\"header\"
                           data-kwg-track-props-menu=\"about\"
                           target=\"_parent\"
                           href=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo $this->env->getExtension('routing')->getPath(("about_page_" . $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale", array())));
        echo "\"
                           hreflang=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("about.page.link"), "html", null, true);
        echo "</a></li>
                    <li><a class=\"contact-link\" data-kwg-track-click=\"Clicked SubnavMenu\"
                           data-kwg-track-props-menu=\"contact\"
                           href=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo $this->env->getExtension('routing')->getPath("page.contact");
        echo "\"
                           hreflang=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contact"), "html", null, true);
        echo "</a></li>
                </ul>
            </li>
            <li class=\"dropdown user-account-choice\">";
        // line 146
        ob_start();
        // line 147
        echo "                    ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 148
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("user_dashboard_index");
            echo "\" data-target=\"#\" class=\"dropdown-toggle\"
                           data-kwg-track-click=\"Clicked NavMenu\"
                           data-kwg-track-props-via=\"header\"
                           data-kwg-track-props-menu=\"dashboard\"
                           data-toggle=\"dropdown\"><img class='avatar' src=\"";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "avatar", array()), "html", null, true);
            echo "\" /><b
                                    class=\"caret\"></b></a>
                    ";
        } else {
            // line 155
            echo "                        <a href=\"#\" data-target=\"#\"
                           class=\"dropdown-toggle\"
                           data-kwg-track-click=\"Clicked SubNavMenu | Clicked Signin\"
                           data-kwg-track-props-via=\"header\"
                           data-kwg-track-props-menu=\"signin\"
                           target=\"_parent\"
                           data-toggle=\"dropdown\"><i class=\"fa fa-sign-in\"></i> ";
            // line 161
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("signin.button.label"), "html", null, true);
            echo "<b class=\"caret\"></b></a>
                    ";
        }
        // line 163
        echo "                ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 164
        echo "                <ul class=\"dropdown-menu\">
                    ";
        // line 165
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 166
            echo "                        <li class=\"\">
                            <a data-kwg-track-click=\"Clicked SubnavMenu\"
                               data-kwg-track-props-via=\"header\"
                               data-kwg-track-props-menu=\"dashboard\"
                               target=\"_parent\"
                               href=\"";
            // line 171
            echo $this->env->getExtension('routing')->getPath("user_dashboard_index");
            echo "\"><i
                                        class=\"fa fa-dashboard\"></i> ";
            // line 172
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("nav.menu.label.dashboard"), "html", null, true);
            echo "</a>
                        </li>
                        <li class=\"\">
                            <a data-kwg-track-click=\"Clicked SubnavMenu | Clicked Signup\"
                               data-kwg-track-props-via=\"header\"
                               data-kwg-track-props-menu=\"settings\"
                               target=\"_parent\"
                               onclick=\"javascript:App.User.views.showEditPopup()\"><i
                                        class=\"fa fa-cog\"></i> ";
            // line 180
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("nav.menu.label.settings"), "html", null, true);
            echo "</a>
                        </li>
                        <li class=\"\">
                            <a data-kwg-track-click=\"Clicked SubnavMenu\"
                               data-kwg-track-props-via=\"header\"
                               data-kwg-track-props-menu=\"logout\"
                               target=\"_parent\"
                               href=\"";
            // line 187
            echo $this->env->getExtension('routing')->getPath("user.logout");
            echo "\"><i class=\"fa fa-sign-out\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.logout"), "html", null, true);
            echo "
                            </a>
                        </li>
                    ";
        } else {
            // line 191
            echo "                        <li class=\"\">
                            <a href=\"#\"
                               data-kwg-track-click=\"Clicked SubnavMenu | Clicked Signin\"
                               data-kwg-track-props-via=\"header\"
                               data-kwg-track-props-menu=\"signin\"
                               target=\"_parent\"
                               onclick=\"javascript:App.User.views.showLoginPopup()\"><i
                                        class=\"fa fa-sign-in\"></i> ";
            // line 198
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login"), "html", null, true);
            echo "</a>
                        </li>
                        <li class=\"\">
                            <a data-kwg-track-click=\"Clicked SubnavMenu | Clicked Signup\"
                               data-kwg-track-props-via=\"header\"
                               data-kwg-track-props-menu=\"signup\"
                               target=\"_parent\"
                               onclick=\"javascript:App.User.views.showRegisterPopup()\"><i
                                        class=\"fa fa-sign-up\"></i> ";
            // line 206
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Sign in"), "html", null, true);
            echo "</a>
                        </li>
                        ";
            // line 214
            echo "                    ";
        }
        // line 215
        echo "                </ul>
            </li>
            <li class=\"menu-separator\"></li>
            <li class=\"dropdown locale-choice\">
                <a data-kwg-track-click=\"Clicked NavMenu\"
                   data-kwg-track-props-via=\"header\"
                   data-kwg-track-props-menu=\"locale\"
                   target=\"_parent\"
                   href=\"\" data-target=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                        ><img
                            src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo "/img/flags/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale", array()), "html", null, true);
        echo ".png\"
                            alt=\"[";
        // line 226
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale", array()), "html", null, true);
        echo "]\"
                            /> - <b>";
        // line 227
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "currency", array()), "code", array()), "html", null, true);
        echo "</b> <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu center\">
                    ";
        // line 232
        echo "                    <li class=\"dropdown-header\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("language"), "html", null, true);
        echo "</li>
                    ";
        // line 233
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "en", 1 => "es", 2 => "fr"));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 234
            echo "                        <li value=\"";
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "\">
                            ";
            // line 235
            $context["params"] = twig_array_merge($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => $context["locale"]));
            // line 236
            echo "                            <a data-kwg-track-click=\"Clicked SubnavMenu\"
                               data-kwg-track-props-via=\"header\"
                               data-kwg-track-props-menu=\"locale\"
                               data-kwg-track-props-lang=\"";
            // line 239
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "\"
                               target=\"_parent\"
                                    ";
            // line 241
            if (( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method")) && twig_test_iterable((isset($context["params"]) ? $context["params"] : null)))) {
                // line 242
                echo "                                        href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method"), (isset($context["params"]) ? $context["params"] : null)), "html", null, true);
                echo "\"
                                    ";
            } else {
                // line 244
                echo "                                        href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
                echo "/switch_locale/";
                echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
                echo "\"
                                    ";
            }
            // line 246
            echo "                                    ><img
                                        src=\"";
            // line 247
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
            echo "/img/flags/";
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo ".png\"
                                        alt=\"[";
            // line 248
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "]\"
                                        /> - ";
            // line 249
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(("locale_name_" . $context["locale"])), "html", null, true);
            echo "</a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 252
        echo "                    <li class=\"divider\"></li>
                    <li class=\"dropdown-header\">";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("currency"), "html", null, true);
        echo "</li>
                    ";
        // line 254
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "EUR", 1 => "GBP", 2 => "USD"));
        foreach ($context['_seq'] as $context["_key"] => $context["cur"]) {
            // line 255
            echo "                        <li value=\"";
            echo twig_escape_filter($this->env, $context["cur"], "html", null, true);
            echo "\">
                            <a data-kwg-track-click=\"Clicked SubnavMenu\"
                               data-kwg-track-props-currency=\"";
            // line 257
            echo twig_escape_filter($this->env, $context["cur"], "html", null, true);
            echo "\"
                               data-kwg-track-props-menu=\"currency\"
                               data-kwg-track-props-via=\"header\"
                               target=\"_parent\"
                               href=\"";
            // line 261
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
            echo "/switch_currency/";
            echo twig_escape_filter($this->env, $context["cur"], "html", null, true);
            echo "\"
                                    ><i class=\"fa fa-";
            // line 262
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $context["cur"]), "html", null, true);
            echo " text-darkgray\"></i> - ";
            echo twig_escape_filter($this->env, $context["cur"], "html", null, true);
            echo "</a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 265
        echo "                    ";
        // line 277
        echo "                </ul>

            </li>
            ";
        // line 280
        if ( !$this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 281
            echo "            <li class=\"social-link\"><a data-kwg-track-click=\"Clicked NavMenu\"
                                       data-kwg-track-props-via=\"header\"
                                       data-kwg-track-props-menu=\"facebook\"
                                       target=\"_parent\"
                                       href=\"http://www.facebook.com/kenweego";
            // line 285
            echo ((($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale", array()) == "fr")) ? ("voyages") : ("travels"));
            echo "\"><i
                            class=\"fa fa-facebook color-facebook\"></i></a></li>
            <li class=\"social-link\"><a data-kwg-track-click=\"Clicked NavMenu\"
                                       data-kwg-track-props-via=\"header\"
                                       data-kwg-track-props-menu=\"twitter\"
                                       target=\"_parent\"
                                       href=\"https://twitter.com/kenweego";
            // line 291
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale", array())), "html", null, true);
            echo "\"><i
                            class=\"fa fa-twitter color-twitter\"></i></a>
                </li>
            ";
        }
        // line 295
        echo "                ";
        // line 296
        echo "                <!--<li class=\"social-link\"><a data-kwg-track-click=\"Clicked InstagramNavMenu\" data-kwg-track-props-via=\"header\" data-kwg-track-props-menu=\"instagram\" href=\"http://www.instagram.com/kenweego\"><i class=\"fa fa-instagram\"></i></a></li>-->
        </ul>
    </div>
    </div>
    </div>
";
    }

    // line 303
    public function block_subheader($context, array $blocks = array())
    {
        // line 304
        echo "    ";
        $this->loadTemplate("Search/actionbar.html.twig", "common/navTop-v2.html.twig", 304)->display($context);
        // line 305
        echo "
";
    }

    public function getTemplateName()
    {
        return "common/navTop-v2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  599 => 305,  596 => 304,  593 => 303,  584 => 296,  582 => 295,  575 => 291,  566 => 285,  560 => 281,  558 => 280,  553 => 277,  551 => 265,  540 => 262,  534 => 261,  527 => 257,  521 => 255,  517 => 254,  513 => 253,  510 => 252,  501 => 249,  497 => 248,  491 => 247,  488 => 246,  480 => 244,  473 => 242,  471 => 241,  466 => 239,  461 => 236,  459 => 235,  454 => 234,  450 => 233,  445 => 232,  440 => 227,  436 => 226,  430 => 225,  418 => 215,  415 => 214,  410 => 206,  399 => 198,  390 => 191,  381 => 187,  371 => 180,  360 => 172,  356 => 171,  349 => 166,  347 => 165,  344 => 164,  341 => 163,  336 => 161,  328 => 155,  322 => 152,  314 => 148,  311 => 147,  309 => 146,  301 => 143,  296 => 142,  288 => 139,  283 => 138,  272 => 132,  266 => 128,  261 => 123,  257 => 122,  250 => 117,  245 => 113,  236 => 110,  231 => 109,  227 => 108,  221 => 104,  217 => 103,  208 => 100,  197 => 95,  184 => 88,  175 => 82,  159 => 73,  151 => 68,  142 => 63,  137 => 61,  133 => 60,  119 => 53,  107 => 44,  103 => 43,  91 => 33,  89 => 32,  86 => 31,  80 => 307,  78 => 303,  75 => 302,  73 => 31,  67 => 30,  64 => 29,  48 => 15,  45 => 14,  40 => 12,  36 => 11,  29 => 10,  26 => 9,  24 => 8,  21 => 7,);
    }
}
/* {#*/
/* types:*/
/* iframe = iframe content, so it need to have the files it needs. Also, be aware that the browser wrap a body arround the data*/
/* standalone = a bit like an iframe, but it will be embedded in a page, so no wrapping will happens.*/
/* blog = for our blog. It means absolutes urls, but no embedding.*/
/* #}*/
/* <div class="navbar-wrapper">*/
/*     {% set siteRootUrl = (absoluteurls or type == 'blog' or type == 'iframe' )? app.request.scheme ~ '://'~app.request.host : '' %}*/
/*     {% if type is defined and type == 'standalone' or type == 'iframe'%}*/
/*         <link rel="stylesheet" href="{{ siteRootUrl }}/css/layout-v2.min.css?{{ app['assets.css.version'] }}">*/
/*         <script src="{{ siteRootUrl }}/js/vendor/jquery/jquery.1.11.min.js"></script>*/
/*         <script src="{{ siteRootUrl }}/js/vendor/bootstrap/bootstrap.min.js"></script>*/
/*     {% endif %}*/
/*     {%  if type == 'iframe' or type == 'blog' %}*/
/*     <style type="text/css">*/
/*         body {*/
/*             background-color: transparent !important;*/
/*         }*/
/*         .navbar-top.navbar, .navbar-top header.navbar.navbar-primary{*/
/*             background-color: transparent;*/
/*         }*/
/* */
/*         .navbar-top .navbar-extra-top .navbar-fluid {*/
/*         background-color: rgba(0, 0, 0, 0.4);*/
/*         }*/
/* */
/*     </style>*/
/*     {% endif %}*/
/* */
/* <header class="navbar navbar-primary {% if type is defined and type != 'standalone' and type != 'blog' %}navbar-fixed-top{% endif %} navbar-top " id="MainMenu">*/
/* {% block header %}*/
/*     {# navbar-extra-top #}*/
/*     <div class="clearfix">*/
/*     <div class="navbar navbar-fluid">*/
/*     <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"*/
/*                     data-target="#bs-navbar-collapse-header">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*         <a class="navbar-brand" href="{{ app.request.getSchemeAndHttpHost() }}"><img*/
/*                     src="{{ app.request.getSchemeAndHttpHost() }}/img/logo_small_r.png" alt="Kenweego"*/
/*                     width="120" height="56"/><span class="subtext">Beta</span></a>*/
/*     </div>*/
/* */
/*     <div id="bs-navbar-collapse-header" class="navbar-top-right collapse navbar-collapse">*/
/*         <ul class="nav navbar-nav navbar-right">*/
/*             <li><a class="news-link" data-kwg-track-click="Clicked NavMenu" data-kwg-track-props-via="header"*/
/*                    data-kwg-track-props-menu="home"*/
/*                    target="_parent"*/
/*                    href="{{ siteRootUrl }}/{{ app.locale }}/">{{ 'nav.menu.label.home' | trans }}</a>*/
/*             </li>*/
/*             <li class="">*/
/*                 <a data-kwg-track-click="Clicked SubnavMenu"*/
/*                    data-kwg-track-props-via="header"*/
/*                    data-kwg-track-props-menu="dashboard"*/
/*                    target="_parent"*/
/*                    href="{{ path('user_dashboard_index') }}"><i*/
/*                             class="fa fa-dashboard"></i> {{ 'nav.menu.label.dashboard' | trans }}</a>*/
/*             </li>*/
/*             <li><a class="news-link" href="{{ app.request.getSchemeAndHttpHost() }}{{ path('flightslanding') }}"*/
/*                    data-kwg-track-click="Clicked NavMenu"*/
/*                    data-kwg-track-props-via="header"*/
/*                    data-kwg-track-props-menu="transport"*/
/*                    target="_parent"*/
/*                         >{{ 'nav.menu.label.flight' | trans }}</a></li>*/
/*             <li><a class="news-link" data-kwg-track-click="Clicked NavMenu"*/
/*                    data-kwg-track-props-via="header"*/
/*                    data-kwg-track-props-menu="accommodation"*/
/*                    target="_parent"*/
/*                    href="http://hotels.kenweego.com?languageCode={{ app.locale }}&currencyCode={{ app.currency.code }}&brandId=432483&a_aid=143679">{{ 'nav.menu.label.accommodation' | trans }}</a>*/
/*             </li>*/
/*             <li class="dropdown"><a class="news-link" data-kwg-track-click="Clicked NavMenu"*/
/*                                     data-kwg-track-props-menu="destinations"*/
/*                                     data-kwg-track-props-via="header"*/
/*                                     href=""*/
/*                                     data-target="#" class="dropdown-toggle"*/
/*                                     target="_parent"*/
/*                                     data-toggle="dropdown"*/
/*                         >{{ 'nav.menu.label.destinations' | trans }} <b class="caret"></b></a>*/
/*                 <ul class="dropdown-menu">*/
/*                     <li><a class="news-link" data-kwg-track-click="Clicked NavMenu"*/
/*                            data-kwg-track-props-via="header"*/
/*                            data-kwg-track-props-menu="destination"*/
/*                            data-kwg-track-props-destination="search"*/
/*                            href="{{ siteRootUrl }}{{ path('destinations.list') }}"><i class="fa fa-search"></i> {{ 'search.label' |trans}}</a></li>*/
/*                     <li role="separator" class="divider"></li>*/
/* */
/*                     <li><a class="news-link" data-kwg-track-click="Clicked NavMenu"*/
/*                            data-kwg-track-props-via="header"*/
/*                            data-kwg-track-props-menu="destination"*/
/*                            data-kwg-track-props-destination="popular"*/
/*                            href="{{ siteRootUrl }}{{ path('destinations.list',{q:'major'}) }}"><i class="fa fa-users"></i> {{ 'popular.label' |trans}}</a></li>*/
/*                     <li><a class="news-link" data-kwg-track-click="Clicked NavMenu"*/
/*                            data-kwg-track-props-via="header"*/
/*                            data-kwg-track-props-menu="destination"*/
/*                            data-kwg-track-props-destination="all"*/
/*                            href="{{ siteRootUrl }}{{ path('destinations.list') }}"><i class="fa fa-globe"></i> {{  'all.destinations.label' |trans}}</a></li>*/
/*                     <li role="separator" class="divider"></li>*/
/* */
/*                     {% for dest in app.session.get('sidebarCities') %}*/
/*                         <li>*/
/*                             <a class="news-link" data-kwg-track-click="Clicked NavMenu"*/
/*                                data-kwg-track-props-via="header"*/
/*                                data-kwg-track-props-menu="destination"*/
/*                                data-kwg-track-props-destination="{{ dest.code }}"*/
/*                                href="{{ siteRootUrl }}{{ path('destination.city',{city: dest.code}) }}*/
/*                         ">{{ dest.intl[app.locale].name }}</a>*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </li>*/
/*             </li>*/
/*             {#  <li><a data-toggle="modal" class="contact-link" data-target="#contact-modal" href="javascript:void(0)" hreflang="{{ app.locale }}" >Contact</a></li> #}*/
/*             <li class="dropdown"><a class="contact-link"*/
/*                                     data-kwg-track-click="Clicked NavMenu"*/
/*                                     data-kwg-track-props-via="header"*/
/*                                     data-kwg-track-props-menu="contact"*/
/*                                     target="_parent"*/
/*                                     hreflang="{{ app.locale }}" data-target="#" class="dropdown-toggle"*/
/*                                     data-toggle="dropdown">{{ 'Contact' | trans }} <b class="caret"></b></a>*/
/*                 <ul class="dropdown-menu">*/
/*                     {#<li><a class="contact-link" href="{{ app.request.getSchemeAndHttpHost() }}{{path("about_page_"~app.locale) }}"*/
/*                            hreflang="{{ app.locale }}">{{ 'about.us' | trans }}</a></li>*/
/*                            #}*/
/*                     <li><a class="news-link" data-kwg-track-click="Clicked NavMenu"*/
/*                            data-kwg-track-props-via="header"*/
/*                            data-kwg-track-props-menu="news"*/
/*                            target="_parent"*/
/*                            href="http://blog.kenweego.com/{{ app.locale }}/">{{ 'menu.news' | trans }}</a>*/
/*                     <li><a class="contact-link"*/
/*                            data-kwg-track-click="Clicked SubnavMenu"*/
/*                            data-kwg-track-props-via="header"*/
/*                            data-kwg-track-props-menu="about"*/
/*                            target="_parent"*/
/*                            href="{{ app.request.getSchemeAndHttpHost() }}{{ path('about_page_'~ app.locale) }}"*/
/*                            hreflang="{{ app.locale }}">{{ 'about.page.link' | trans }}</a></li>*/
/*                     <li><a class="contact-link" data-kwg-track-click="Clicked SubnavMenu"*/
/*                            data-kwg-track-props-menu="contact"*/
/*                            href="{{ app.request.getSchemeAndHttpHost() }}{{ path('page.contact') }}"*/
/*                            hreflang="{{ app.locale }}">{{ 'Contact' | trans }}</a></li>*/
/*                 </ul>*/
/*             </li>*/
/*             <li class="dropdown user-account-choice">{% spaceless %}*/
/*                     {% if app.user %}*/
/*                         <a href="{{ path('user_dashboard_index') }}" data-target="#" class="dropdown-toggle"*/
/*                            data-kwg-track-click="Clicked NavMenu"*/
/*                            data-kwg-track-props-via="header"*/
/*                            data-kwg-track-props-menu="dashboard"*/
/*                            data-toggle="dropdown"><img class='avatar' src="{{ app.user.avatar }}" /><b*/
/*                                     class="caret"></b></a>*/
/*                     {% else %}*/
/*                         <a href="#" data-target="#"*/
/*                            class="dropdown-toggle"*/
/*                            data-kwg-track-click="Clicked SubNavMenu | Clicked Signin"*/
/*                            data-kwg-track-props-via="header"*/
/*                            data-kwg-track-props-menu="signin"*/
/*                            target="_parent"*/
/*                            data-toggle="dropdown"><i class="fa fa-sign-in"></i> {{ 'signin.button.label' | trans }}<b class="caret"></b></a>*/
/*                     {% endif %}*/
/*                 {% endspaceless %}*/
/*                 <ul class="dropdown-menu">*/
/*                     {% if app.user %}*/
/*                         <li class="">*/
/*                             <a data-kwg-track-click="Clicked SubnavMenu"*/
/*                                data-kwg-track-props-via="header"*/
/*                                data-kwg-track-props-menu="dashboard"*/
/*                                target="_parent"*/
/*                                href="{{ path('user_dashboard_index') }}"><i*/
/*                                         class="fa fa-dashboard"></i> {{ 'nav.menu.label.dashboard' | trans }}</a>*/
/*                         </li>*/
/*                         <li class="">*/
/*                             <a data-kwg-track-click="Clicked SubnavMenu | Clicked Signup"*/
/*                                data-kwg-track-props-via="header"*/
/*                                data-kwg-track-props-menu="settings"*/
/*                                target="_parent"*/
/*                                onclick="javascript:App.User.views.showEditPopup()"><i*/
/*                                         class="fa fa-cog"></i> {{ 'nav.menu.label.settings' | trans }}</a>*/
/*                         </li>*/
/*                         <li class="">*/
/*                             <a data-kwg-track-click="Clicked SubnavMenu"*/
/*                                data-kwg-track-props-via="header"*/
/*                                data-kwg-track-props-menu="logout"*/
/*                                target="_parent"*/
/*                                href="{{ path('user.logout') }}"><i class="fa fa-sign-out"></i> {{ 'user.logout' | trans }}*/
/*                             </a>*/
/*                         </li>*/
/*                     {% else %}*/
/*                         <li class="">*/
/*                             <a href="#"*/
/*                                data-kwg-track-click="Clicked SubnavMenu | Clicked Signin"*/
/*                                data-kwg-track-props-via="header"*/
/*                                data-kwg-track-props-menu="signin"*/
/*                                target="_parent"*/
/*                                onclick="javascript:App.User.views.showLoginPopup()"><i*/
/*                                         class="fa fa-sign-in"></i> {{ 'Login' | trans }}</a>*/
/*                         </li>*/
/*                         <li class="">*/
/*                             <a data-kwg-track-click="Clicked SubnavMenu | Clicked Signup"*/
/*                                data-kwg-track-props-via="header"*/
/*                                data-kwg-track-props-menu="signup"*/
/*                                target="_parent"*/
/*                                onclick="javascript:App.User.views.showRegisterPopup()"><i*/
/*                                         class="fa fa-sign-up"></i> {{ 'Sign in' | trans }}</a>*/
/*                         </li>*/
/*                         {#*/
/*                       <li class="">*/
/*                           <a href="http://www.kenweego.com/why-sign-in"><i*/
/*                                       class="fa fa-login"></i> {{ 'Why sign in' | trans }}</a>*/
/*                       </li>*/
/*                       #}*/
/*                     {% endif %}*/
/*                 </ul>*/
/*             </li>*/
/*             <li class="menu-separator"></li>*/
/*             <li class="dropdown locale-choice">*/
/*                 <a data-kwg-track-click="Clicked NavMenu"*/
/*                    data-kwg-track-props-via="header"*/
/*                    data-kwg-track-props-menu="locale"*/
/*                    target="_parent"*/
/*                    href="" data-target="#" class="dropdown-toggle" data-toggle="dropdown"*/
/*                         ><img*/
/*                             src="{{ app.request.getSchemeAndHttpHost() }}/img/flags/{{ app.locale }}.png"*/
/*                             alt="[{{ app.locale }}]"*/
/*                             /> - <b>{{ app.currency.code }}</b> <b class="caret"></b></a>*/
/*                 <ul class="dropdown-menu center">*/
/*                     {#<li><a class="contact-link" href="{{ app.request.getSchemeAndHttpHost() }}{{path("about_page_"~app.locale) }}"*/
/*                            hreflang="{{ app.locale }}">{{ 'about.us' | trans }}</a></li>*/
/*                            #}*/
/*                     <li class="dropdown-header">{{ 'language'| trans }}</li>*/
/*                     {% for locale in ['en', 'es', 'fr'] %}*/
/*                         <li value="{{ locale }}">*/
/*                             {% set params = app.request.get('_route_params')|merge({'_locale': locale}) %}*/
/*                             <a data-kwg-track-click="Clicked SubnavMenu"*/
/*                                data-kwg-track-props-via="header"*/
/*                                data-kwg-track-props-menu="locale"*/
/*                                data-kwg-track-props-lang="{{ locale }}"*/
/*                                target="_parent"*/
/*                                     {% if not app.request.get('_route') is empty and params is iterable  %}*/
/*                                         href="{{ app.request.getSchemeAndHttpHost() }}{{ path(app.request.get('_route'), params) }}"*/
/*                                     {% else %}*/
/*                                         href="{{ app.request.getSchemeAndHttpHost() }}/switch_locale/{{ locale }}"*/
/*                                     {% endif %}*/
/*                                     ><img*/
/*                                         src="{{ app.request.getSchemeAndHttpHost() }}/img/flags/{{ locale }}.png"*/
/*                                         alt="[{{ locale }}]"*/
/*                                         /> - {{ ('locale_name_' ~ locale ) | trans }}</a>*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                     <li class="divider"></li>*/
/*                     <li class="dropdown-header">{{ 'currency'| trans }}</li>*/
/*                     {% for cur in ['EUR', 'GBP', 'USD'] %}*/
/*                         <li value="{{ cur }}">*/
/*                             <a data-kwg-track-click="Clicked SubnavMenu"*/
/*                                data-kwg-track-props-currency="{{ cur }}"*/
/*                                data-kwg-track-props-menu="currency"*/
/*                                data-kwg-track-props-via="header"*/
/*                                target="_parent"*/
/*                                href="{{ app.request.getSchemeAndHttpHost() }}/switch_currency/{{ cur }}"*/
/*                                     ><i class="fa fa-{{ cur | lower }} text-darkgray"></i> - {{ cur }}</a>*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                     {#*/
/*                         <select class=" select form-control material-input" id="currency" name="currency"*/
/*                                 placeholder="{{ 'adults' | trans }}"*/
/*                                 data-size="auto"*/
/*                                 >*/
/*                             {% for locale in ['EUR', 'GBP', 'USD'] %}*/
/*                                 <option value="{{ locale }}" {% if locale == app.currency %}selected {% endif %}>*/
/*                                     <a href="{{ app.request.getSchemeAndHttpHost() }}/switch/{{ locale }}"></a>*/
/*                                 </option>*/
/*                             {% endfor %}*/
/*                         </select>*/
/*                     #}*/
/*                 </ul>*/
/* */
/*             </li>*/
/*             {% if not app.user %}*/
/*             <li class="social-link"><a data-kwg-track-click="Clicked NavMenu"*/
/*                                        data-kwg-track-props-via="header"*/
/*                                        data-kwg-track-props-menu="facebook"*/
/*                                        target="_parent"*/
/*                                        href="http://www.facebook.com/kenweego{{ (app.locale == 'fr' ) ? "voyages" : "travels" }}"><i*/
/*                             class="fa fa-facebook color-facebook"></i></a></li>*/
/*             <li class="social-link"><a data-kwg-track-click="Clicked NavMenu"*/
/*                                        data-kwg-track-props-via="header"*/
/*                                        data-kwg-track-props-menu="twitter"*/
/*                                        target="_parent"*/
/*                                        href="https://twitter.com/kenweego{{ app.locale | upper }}"><i*/
/*                             class="fa fa-twitter color-twitter"></i></a>*/
/*                 </li>*/
/*             {% endif %}*/
/*                 {# <li><a href="http://www.facebook.com/kenweego" ><i class="fa fa-google-plus"></i></a></li> #}*/
/*                 <!--<li class="social-link"><a data-kwg-track-click="Clicked InstagramNavMenu" data-kwg-track-props-via="header" data-kwg-track-props-menu="instagram" href="http://www.instagram.com/kenweego"><i class="fa fa-instagram"></i></a></li>-->*/
/*         </ul>*/
/*     </div>*/
/*     </div>*/
/*     </div>*/
/* {% endblock header %}*/
/* */
/* {% block subheader %}*/
/*     {%  include 'Search/actionbar.html.twig' %}*/
/* */
/* {% endblock subheader %}*/
/* </header>*/
/* </div><!-- /.navbar-wrapper -->*/
/* */
