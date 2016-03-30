<?php

/* home.html.twig */
class __TwigTemplate_25dc9957e629750e00769523979bf7c2c2fb118891407bc8219cbc053160ed8d extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"author\" content=\"vyvop\">

    <title>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.title"), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.meta.description"), "html", null, true);
        echo "\">
    <meta name=\"image\" content=\"/img/app6.jpg\">
    <meta name=\"keywords\" content=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.meta.keywords"), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.meta.title"), "html", null, true);
        echo "\">


    <meta name=\"og:description\" content=\"Vas-y Viens on Part, est une app qui te trouve des weekend pour partir avec un petit budget. Tu mets tes dispos, tes envies et ton budget, et on te trouve des offres incroyables.\">
    <meta name=\"og:image\" content=\"/img/app6.jpg\">
    <meta name=\"og:title\" content=\"Partir en weekend pour moins de 100€ - Transport + logement\">
    <meta name=\"og:keywords\" content=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.meta.keywords"), "html", null, true);
        echo "\">

    <meta name=\"twitter:description\" content=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.meta.description"), "html", null, true);
        echo "\">
    <meta name=\"twitter:image\" content=\"/img/app6.jpg\">
    <meta name=\"twitter:keywords\" content=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.meta.keywords"), "html", null, true);
        echo "\">
    <meta name=\"twitte:title\" content=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.meta.title"), "html", null, true);
        echo "\">


    <!-- Bootstrap Core CSS -->
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"css/agency.css\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->



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
                analytics.load(\"Vj0EdoR3LNedQN6CS080kdPhxFT0it5k\");
                analytics.page()
            }
        }();
    </script>
    <script src=\"//cdn.optimizely.com/js/4989151013.js\"></script>

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
                document,'script','//connect.facebook.net/en_US/fbevents.js');

        fbq('init', '703717056432293');
        fbq('track', \"PageView\");</script>
    <noscript><img height=\"1\" width=\"1\" style=\"display:none\"
                   src=\"https://www.facebook.com/tr?id=703717056432293&ev=PageView&noscript=1\"
            /></noscript>
    <!-- End Facebook Pixel Code -->

</head>

<body id=\"page-top\" class=\"index\">

<!-- Navigation -->
<nav class=\"navbar navbar-default navbar-fixed-top\">
    <div class=\"container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header page-scroll\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                    data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand page-scroll\" href=\"#page-top\">VyVoP !</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"hidden\">
                    <a href=\"#page-top\"></a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"#services\"

                    data-kwg-track-click=\"Clicked Menu\"
                    data-kwg-track-props-menu=\"kesako\"


                    >";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("nav.title.services.label"), "html", null, true);
        echo "</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"";
        // line 136
        echo $this->env->getExtension('routing')->getPath("crud_list_default");
        echo "\"

                    data-kwg-track-click=\"Clicked Menu\"
                    data-kwg-track-props-menu=\"kesako\"


                    >Admin</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"#portfolio\"
                       data-kwg-track-click=\"Clicked Menu\"
                       data-kwg-track-props-menu=\"portfolio\"


                            >";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("nav.title.portfolio.label"), "html", null, true);
        echo "</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"#about\"
                       data-kwg-track-click=\"Clicked Menu\"
                       data-kwg-track-props-menu=\"why\"

                            >";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("nav.title.about.label"), "html", null, true);
        echo "</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"#team\"
                       data-kwg-track-click=\"Clicked Menu\"
                       data-kwg-track-props-menu=\"team\"

                            >";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("nav.title.team.label"), "html", null, true);
        echo "</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"#contact\"
                       data-kwg-track-click=\"Clicked Menu\"
                       data-kwg-track-props-menu=\"contact\"

                            >";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("nav.title.contact.label"), "html", null, true);
        echo "</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header>
    <div class=\"container\">
        <div class=\"intro-text\">
            <div class=\"intro-lead-in text-shadow \">";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.valueprop.intro.label"), "html", null, true);
        echo "</div>
            <div class=\"intro-lead-in text-shadow \">";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.valueprop.intro.label"), "html", null, true);
        echo "</div>
            <div class=\"intro-heading text-shadow\"><span class=\"logo-text\" style=\"text-transform:none;\">VyVoP</span>  ";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.valueprop.main.label"), "html", null, true);
        echo "<br><span
                        class=\"text-primary\">";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.valueprop.main.part2.label"), "html", null, true);
        echo "</span></div>

            <br><br><br><br>
            <h4 class=\"service-heading text-shadow text-white\"> ";
        // line 190
        echo $this->env->getExtension('translator')->trans("site.valueprop.conditions.label");
        echo "</h4>


            <a href=\"#contactModal\" data-toggle=\"modal\"
               class=\"page-scroll btn btn-lg btn-primary text-center text-shadow\"
            data-kwg-track-click=\"Clicked SubscribeButton|Clicked CTA\"
            data-kwg-track-props-button=\"CTA\"


            ><i
                    class=\"fa fa-angle-double-right\"></i> ";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.valueprop.cta.label"), "html", null, true);
        echo "</a>
            <a href=\"#services\" class=\"page-scroll btn btn-lg btn-warning text-center\"
               data-kwg-track-click=\"Clicked MoreInfoButton\"
                                    data-kwg-track-props-button=\"moreinfo\"

            ><i class=\"fa fa-info-circle\"></i> ";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.valueprop.cta2.label"), "html", null, true);
        echo "
            </a>


            <div class=\"app-block\">
                <a href=\"#contactModal\" data-toggle=\"modal\"
                   href=\"https://play.google.com/store/apps/details?id=com.kenweego.app\"
                                                           data-kwg-track-click=\"Clicked AppButton\"
                                                           data-kwg-track-props-button=\"GooglePlayButton\"

                >
                    <img alt=\"Get it on Google Play\"
                         style=\"width:165px;height:45px;\"
                         src=\"https://play.google.com/intl/en_us/badges/images/generic/fr-play-badge.png\"/>
                </a>

                <a href=\"#contactModal\" data-toggle=\"modal\"
                   data-kwg-track-click=\"Clicked AppButton\"
                   data-kwg-track-props-button=\"PlayStoreButton\"
                        >
                    <img alt=\"Get it on Google Play\"
                         style=\"width:165px;height:45px;\"
                         src=\"https://devimages.apple.com.edgekey.net/app-store/marketing/guidelines/images/badge-download-on-the-app-store-fr.svg\"/>
                </a>
            </div>
        </div>
    </div>
</header>

<!-- Services Section -->
<section id=\"services\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <h2 class=\"section-heading\">";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.section.services.label"), "html", null, true);
        echo "</h2>

                <h3 class=\"section-subheading text-muted\">";
        // line 241
        echo $this->env->getExtension('translator')->trans("site.section.services.description");
        echo "</h3>
            </div>
        </div>
        <div class=\"row text-center\">
            <div class=\"col-md-4\">
                    <span class=\"fa-stack fa-4x\">
                        <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                        <i class=\"fa fa-shopping-cart fa-stack-1x fa-inverse\"></i>
                    </span>
                <h4 class=\"service-heading\">";
        // line 250
        echo $this->env->getExtension('translator')->trans("site.section.services.step1.title");
        echo "</h4>


                <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"3000\">

                    <div class=\"carousel-inner\" role=\"listbox\">
                        <div class=\"item active\">
                            <div class=\"media\">
                                <div class=\"media-left\">
                                    <a href=\"#\">
                                        <img src=\"img/users/user1.jpg\" width=\"65px\" class=\"img-circle\"/> :
                                    </a>
                                </div>
                                <div class=\"media-body\">
                                    <p class=\"text-muted\">";
        // line 264
        echo $this->env->getExtension('translator')->trans("site.section.services.step1.example1");
        echo "</p>
                                </div>
                            </div>

                        </div>

                        <div class=\"item\">

                            <div class=\"media\">
                                <div class=\"media-left\">
                                    <a href=\"#\">
                                        <img src=\"img/users/user2.jpg\" width=\"65px\" class=\"img-circle\"/>
                                    </a>
                                </div>
                                <div class=\"media-body\">
                                    <p class=\"text-muted\"> ";
        // line 279
        echo $this->env->getExtension('translator')->trans("site.section.services.step1.example2");
        echo "</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"item\">

                            <div class=\"media\">
                                <div class=\"media-left\">
                                    <a href=\"#\">
                                        <img src=\"img/users/user3.jpg\" width=\"65px\" class=\"img-circle\"/>
                                    </a>
                                </div>
                                <div class=\"media-body\">
                                    <p class=\"text-muted\">";
        // line 293
        echo $this->env->getExtension('translator')->trans("site.section.services.step1.example3");
        echo "</p>
                                </div>
                            </div>


                        </div>

                        <div class=\"item\">


                            <div class=\"media\">
                                <div class=\"media-left\">
                                    <a href=\"#\">
                                        <img src=\"img/users/user5.jpg\" width=\"65px\" class=\"img-circle\"/>
                                    </a>
                                </div>
                                <div class=\"media-body\">
                                    <p class=\"text-muted\">";
        // line 310
        echo $this->env->getExtension('translator')->trans("site.section.services.step1.example4");
        echo "</p>
                                </div>
                            </div>


                            <p class=\"text-muted\"></p>
                        </div>
                    </div>

                </div>
            </div>
            <div class=\"col-md-4\">
                    <span class=\"fa-stack fa-4x\">
                        <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                        <i class=\"fa fa-search fa-stack-1x fa-inverse\"></i>
                    </span>
                <h4 class=\"service-heading\">";
        // line 326
        echo $this->env->getExtension('translator')->trans("site.section.services.step2.title");
        echo "</h4>

                <p class=\"text-muted\">";
        // line 328
        echo $this->env->getExtension('translator')->trans("site.section.services.step2.description");
        echo "</p>
            </div>
            <div class=\"col-md-4\">
                    <span class=\"fa-stack fa-4x\">
                        <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                        <i class=\"fa fa-paper-plane fa-stack-1x fa-inverse\"></i>
                    </span>
                <h4 class=\"service-heading\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.section.services.step3.title"), "html", null, true);
        echo "</h4>

                <p class=\"text-muted\">";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.section.services.step3.description"), "html", null, true);
        echo "</p>

                <p class=\"text-muted \"><i class=\"fa fa-plane fa-2x text-danger\"></i> <i class=\"fa fa-home fa-2x\"></i> <i
                        class=\"fa-bicycle fa fa-2x text-danger\"></i>
                    <i class=\"fa fa-car fa-2x\"></i>
                    <i class=\"fa fa-futbol-o fa-2x text-danger\"></i>
                </p>

                <p class=\"text-muted\">";
        // line 345
        echo $this->env->getExtension('translator')->trans("site.section.services.step3.part2.description");
        echo "</p>

            </div>
        </div>
    </div>
    <br/>

    <div class=\"text-center\"><img class=\" col-xs-12 col-md-4 col-md-offset-4\" src='img/app6.jpg'/></div>
    <hr>
</section>

<!-- Portfolio Grid Section -->
<section id=\"portfolio\" class=\"bg-light-gray\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <h2 class=\"section-heading\">";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.section.portfolio.title"), "html", null, true);
        echo "</h2>

                <h3 class=\"section-subheading text-muted\">";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.section.portfolio.subtitle"), "html", null, true);
        echo "</h3>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-4 col-sm-6 portfolio-item\">
                <a href=\"#portfolioModal1\" class=\"portfolio-link\"
                        >
                    <!--
                        <div class=\"portfolio-hover\">
                            <div class=\"portfolio-hover-content\">
                                <i class=\"fa fa-plus fa-3x\"></i>
                            </div>
                        </div>
                        -->
                    <img src=\"img/destinations/bcn.jpg\" class=\"img-responsive\" alt=\"\">
                </a>

                <div class=\"portfolio-caption\">
                    <h4>";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.section.portfolio.offer1.destination"), "html", null, true);
        echo "</h4>

                    <p class=\"text-muted\">";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.section.portfolio.offer1.title"), "html", null, true);
        echo "</p>

                    <p class=\"text-muted\">";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.section.portfolio.offer1.details"), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6 portfolio-item\">
                <a href=\"#portfolioModal2\" class=\"portfolio-link\" data-toggle=\"modal\">
                    <!--
                        <div class=\"portfolio-hover\">
                            <div class=\"portfolio-hover-content\">
                                <i class=\"fa fa-plus fa-3x\"></i>
                            </div>
                        </div>
                        -->
                    <img src=\"img/destinations/krk.jpg\" class=\"img-responsive\" alt=\"\">
                </a>

                <div class=\"portfolio-caption\">
                    <h4>";
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.section.portfolio.offer2.destination"), "html", null, true);
        echo "</h4>

                    <p class=\"text-muted\">";
        // line 403
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.section.portfolio.offer2.title"), "html", null, true);
        echo "</p>

                    <p class=\"text-muted\">";
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.section.portfolio.offer2.details"), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6 portfolio-item\">
                <a href=\"#portfolioModal3\" class=\"portfolio-link\" data-toggle=\"modal\">
                    <!--
                        <div class=\"portfolio-hover\">
                            <div class=\"portfolio-hover-content\">
                                <i class=\"fa fa-plus fa-3x\"></i>
                            </div>
                        </div>
                        -->
                    <img src=\"img/destinations/svq.jpg\" class=\"img-responsive\" alt=\"\">
                </a>

                <div class=\"portfolio-caption\">
                    <h4>";
        // line 421
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.section.portfolio.offer3.destination"), "html", null, true);
        echo "</h4>

                    <p class=\"text-muted\">";
        // line 423
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.section.portfolio.offer3.title"), "html", null, true);
        echo "</p>

                    <p class=\"text-muted\">";
        // line 425
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.section.portfolio.offer3.details"), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6 portfolio-item\">
                <a href=\"#portfolioModal4\" class=\"portfolio-link\" data-toggle=\"modal\">
                    <!--
                        <div class=\"portfolio-hover\">
                            <div class=\"portfolio-hover-content\">
                                <i class=\"fa fa-plus fa-3x\"></i>
                            </div>
                        </div>
                        -->
                    <img src=\"img/destinations/psa.jpg\" class=\"img-responsive\" alt=\"\">
                </a>

                <div class=\"portfolio-caption\">
                    <h4>";
        // line 441
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.section.portfolio.offer3.destination"), "html", null, true);
        echo "</h4>

                    <p class=\"text-muted\">";
        // line 443
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.section.portfolio.offer4.title"), "html", null, true);
        echo "</p>

                    <p class=\"text-muted\">";
        // line 445
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.section.portfolio.offer4.details"), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6 portfolio-item\">
                <a href=\"#portfolioModal5\" class=\"portfolio-link\" data-toggle=\"modal\">
                    <!--
                        <div class=\"portfolio-hover\">
                            <div class=\"portfolio-hover-content\">
                                <i class=\"fa fa-plus fa-3x\"></i>
                            </div>
                        </div>
                        -->
                    <img src=\"img/destinations/bru.jpg\" class=\"img-responsive\" alt=\"\">
                </a>

                <div class=\"portfolio-caption\">
                    <h4>";
        // line 461
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.section.portfolio.offer5.destination"), "html", null, true);
        echo "</h4>

                    <p class=\"text-muted\">";
        // line 463
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.section.portfolio.offer5.title"), "html", null, true);
        echo "</p>

                    <p class=\"text-muted\">";
        // line 465
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.section.portfolio.offer5.details"), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6 portfolio-item\">
                <a href=\"#portfolioModal6\" class=\"portfolio-link\" data-toggle=\"modal\">
                    <!--
                    <div class=\"portfolio-hover\">
                        <div class=\"portfolio-hover-content\">
                            <i class=\"fa fa-plus fa-3x\"></i>
                        </div>
                    </div>
                    -->
                    <img src=\"img/destinations/cph.jpg\" class=\"img-responsive\" alt=\"\">
                </a>

                <div class=\"portfolio-caption\">
                    <h4>";
        // line 481
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.section.portfolio.offer6.destination"), "html", null, true);
        echo "</h4>

                    <p class=\"text-muted\">";
        // line 483
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.section.portfolio.offer6.title"), "html", null, true);
        echo "</p>

                    <p class=\"text-muted\">";
        // line 485
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.section.portfolio.offer6.details"), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id=\"about\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <h2 class=\"section-heading\">";
        // line 497
        echo $this->env->getExtension('translator')->trans("site.section.why.title");
        echo "</h2>

                <h3 class=\"section-subheading text-muted\">";
        // line 499
        echo $this->env->getExtension('translator')->trans("site.section.why.subtitle");
        echo "</h3>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <ul class=\"timeline\">
                    <li>
                        <div class=\"timeline-image\">
                            <img class=\"img-circle img-responsive\" src=\"img/about/1.jpg\" alt=\"\">
                        </div>
                        <div class=\"timeline-panel\">
                            ";
        // line 510
        echo $this->env->getExtension('translator')->trans("site.section.why.step1");
        echo "
                        </div>
                    </li>
                    <li class=\"timeline-inverted\">
                        <div class=\"timeline-image\">
                            <img class=\"img-circle img-responsive\" src=\"img/about/2.jpg\" alt=\"\">
                        </div>
                        <div class=\"timeline-panel\">
                            ";
        // line 518
        echo $this->env->getExtension('translator')->trans("site.section.why.step2");
        echo "
                        </div>
                    </li>
                    <li>
                        <div class=\"timeline-image\">
                            <img class=\"img-circle img-responsive\" src=\"img/about/3.jpg\" alt=\"\">
                        </div>
                        <div class=\"timeline-panel\">
                            <div class=\"timeline-heading\">
                                ";
        // line 527
        echo $this->env->getExtension('translator')->trans("site.section.why.step3");
        echo "
                            </div>
                        </div>
                    </li>
                    <li class=\"timeline-inverted\">
                        <div class=\"timeline-image\">
                            <img class=\"img-circle img-responsive\" src=\"img/about/4.jpg\" alt=\"\">
                        </div>
                        <div class=\"timeline-panel\">
                            <div class=\"timeline-heading\">
                             ";
        // line 537
        echo $this->env->getExtension('translator')->trans("site.section.why.step4");
        echo "
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section id=\"team\" class=\"bg-light-gray\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">

            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-offset-3 col-sm-6\">
                <!-- Begin MailChimp Signup Form -->


                <!--End mc_embed_signup-->
            </div>

        </div>
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                <p class=\"large text-muted\">";
        // line 566
        echo $this->env->getExtension('translator')->trans("site.section.team.label");
        echo "</p>
            </div>
        </div>
    </div>
</section>


<!-- Clients Aside -->
<aside class=\"clients\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-6\">
                <a href=\"#\">
                    <img src=\"img/partners/skyscanner.png\" class=\"img-responsive img-centered\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <a href=\"#\">
                    <img src=\"img/partners/hotelscombined.png\" class=\"img-responsive img-centered\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <a href=\"#\">
                    <img src=\"img/partners/dojogroup.png\" style='height:58px;' class=\"img-responsive img-centered\"
                         alt=\"\">
                </a>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <a href=\"#\">
                    <img src=\"img/partners/bizsparklogo-2.jpg\" class=\"img-responsive img-centered\" alt=\"\">
                </a>
            </div>
        </div>
    </div>
</aside>

<!-- Contact Section -->
<section id=\"contact\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <h2 class=\"section-heading\">";
        // line 607
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.section.contact.title"), "html", null, true);
        echo "</h2>

                <h3 class=\"section-subheading text-white\">";
        // line 609
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.section.contact.subtitle"), "html", null, true);
        echo "</h3>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <form action=\"\" method=\"post\" id=\"contactForm\" name=\"mc-embedded-subscribe-form\" class=\"validate\"
                      target=\"_blank\" novalidate>
                    <div class=\"row\">
                        <div class=\"col-md-3 col-md-offset-1\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 619
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("input.firstname.label"), "html", null, true);
        echo "\" id=\"contact-firstname\"
                                       required data-validation-required-message=\"";
        // line 620
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("required"), "html", null, true);
        echo ".\">

                                <p class=\"help-block text-danger\"></p>
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 625
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("input.lastname.label"), "html", null, true);
        echo "\" id=\"contact-lastname\"
                                       required data-validation-required-message=\"";
        // line 626
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("required"), "html", null, true);
        echo ".\">

                                <p class=\"help-block text-danger\"></p>
                            </div>
                            <div class=\"form-group\">
                                <input type=\"email\" class=\"form-control\" placeholder=\"";
        // line 631
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("input.email.label"), "html", null, true);
        echo "\" id=\"contact-email\"
                                       required data-validation-required-message=\"";
        // line 632
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("required"), "html", null, true);
        echo "\">

                                <p class=\"help-block text-danger\"></p>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <textarea class=\"form-control\" placeholder=\"Ton Message *\" id=\"message\" required
                                          data-validation-required-message=\".\">
                                </textarea>
                            </div>
                        </div>
                        <div class=\"clearfix\"></div>
                        <div class=\"col-md-offset-5 \">
                            <div id=\"contact-success\"></div>
                            <input type=\"submit\" class=\"btn btn-xl\"

                                    >";
        // line 649
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Envoyer"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <span class=\"copyright\">Copyright &copy; VyVoP 2016</span>
            </div>
            <!--
            <div class=\"col-md-4\">
                <ul class=\"list-inline social-buttons\">
                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                    </li>
                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                    </li>
                    <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                    </li>
                </ul>
            </div>
            <div class=\"col-md-4\">
                <ul class=\"list-inline quicklinks\">
                    <li><a href=\"#\">Privacy Policy</a>
                    </li>
                    <li><a href=\"#\">Terms of Use</a>
                    </li>
                </ul>
            </div>
            -->
        </div>
    </div>
</footer>

<!-- Portfolio Modals -->
<!-- Use the modals below to showcase details about your portfolio projects! -->

<!-- Portfolio Modal 1 -->

<div class=\"portfolio-modal modal fade\" id=\"contactModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-content\">
        <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
                <div class=\"rl\">
                </div>
            </div>
        </div>
        <div class=\"container\">
            <section id=\"contact\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 text-center\">
                            <h2 class=\"section-heading\">";
        // line 706
        echo $this->env->getExtension('translator')->trans("site.section.register.title");
        echo "</h2>

                            <h3 class=\"section-subheading text-white\">";
        // line 708
        echo $this->env->getExtension('translator')->trans("site.section.register.subtitle");
        echo "</h3>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <form action=\"\" method=\"post\" id=\"mc-embedded-subscribe-form\"
                                  name=\"mc-embedded-subscribe-form\" class=\"validate\" target=\"_blank\" novalidate>
                                <div class=\"row\">
                                    <div class=\"col-md-6 col-md-offset-3\">
                                        <div class=\"form-group\">
                                            <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 718
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("input.firstname.label"), "html", null, true);
        echo "\"
                                                   id=\"firstname\" required
                                                   data-validation-required-message=\"";
        // line 720
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("required"), "html", null, true);
        echo "\">

                                            <p class=\"help-block text-danger\"></p>
                                        </div>
                                        <div class=\"form-group\">
                                            <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 725
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("input.lastname.label"), "html", null, true);
        echo "\"
                                                   id=\"lastname\" required
                                                   data-validation-required-message=\"";
        // line 727
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("required"), "html", null, true);
        echo "\">

                                            <p class=\"help-block text-danger\"></p>
                                        </div>
                                        <div class=\"form-group\">
                                            <input type=\"email\" class=\"form-control\" placeholder=\"";
        // line 732
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("input.email.label"), "html", null, true);
        echo "\"
                                                   id=\"email\" required
                                                   data-validation-required-message=\"";
        // line 734
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("required"), "html", null, true);
        echo "\">

                                            <p class=\"help-block text-danger\"></p>
                                        </div>
                                    </div>
                                    <div class=\"clearfix\"></div>
                                    <div class=\"col-lg-12 text-center\">
                                        <div id=\"success\"></div>
                                        <button type=\"submit\" class=\"btn btn-xl\">";
        // line 742
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("register"), "html", null, true);
        echo "</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
<!-- jQuery -->
<script src=\"js/jquery.js\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"js/bootstrap.min.js\"></script>

<!-- Plugin JavaScript -->
<script src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script>
<script src=\"js/classie.js\"></script>
<script src=\"js/cbpAnimatedHeader.js\"></script>

<!-- Contact Form JavaScript -->
<script src=\"js/jqBootstrapValidation.js\"></script>
<script src=\"js/contact_me.js\"></script>
<script src=\"js/main.js\"></script>
<script src=\"js/analytics.js\"></script>

<!-- Custom Theme JavaScript -->
<script src=\"js/agency.js\"></script>


<script type=\"text/javascript\">
    \$(function () {
        if (window.analytics) {
            analytics.page(\"VyvopHome\");
        }
    });
    window.locale = '";
        // line 781
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale", array()), "html", null, true);
        echo "';
</script>
</body>

</html>

";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1035 => 781,  993 => 742,  982 => 734,  977 => 732,  969 => 727,  964 => 725,  956 => 720,  951 => 718,  938 => 708,  933 => 706,  873 => 649,  853 => 632,  849 => 631,  841 => 626,  837 => 625,  829 => 620,  825 => 619,  812 => 609,  807 => 607,  763 => 566,  731 => 537,  718 => 527,  706 => 518,  695 => 510,  681 => 499,  676 => 497,  661 => 485,  656 => 483,  651 => 481,  632 => 465,  627 => 463,  622 => 461,  603 => 445,  598 => 443,  593 => 441,  574 => 425,  569 => 423,  564 => 421,  545 => 405,  540 => 403,  535 => 401,  516 => 385,  511 => 383,  506 => 381,  485 => 363,  480 => 361,  461 => 345,  450 => 337,  445 => 335,  435 => 328,  430 => 326,  411 => 310,  391 => 293,  374 => 279,  356 => 264,  339 => 250,  327 => 241,  322 => 239,  285 => 205,  277 => 200,  264 => 190,  258 => 187,  254 => 186,  250 => 185,  246 => 184,  230 => 171,  220 => 164,  210 => 157,  200 => 150,  183 => 136,  177 => 133,  67 => 26,  63 => 25,  58 => 23,  53 => 21,  44 => 15,  40 => 14,  35 => 12,  31 => 11,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/* */
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="author" content="vyvop">*/
/* */
/*     <title>{{ 'site.title'  | trans }}</title>*/
/*     <meta name="description" content="{{ 'site.meta.description'  |trans }}">*/
/*     <meta name="image" content="/img/app6.jpg">*/
/*     <meta name="keywords" content="{{ 'site.meta.keywords'  |trans }}">*/
/*     <meta name="title" content="{{ 'site.meta.title'  | trans}}">*/
/* */
/* */
/*     <meta name="og:description" content="Vas-y Viens on Part, est une app qui te trouve des weekend pour partir avec un petit budget. Tu mets tes dispos, tes envies et ton budget, et on te trouve des offres incroyables.">*/
/*     <meta name="og:image" content="/img/app6.jpg">*/
/*     <meta name="og:title" content="Partir en weekend pour moins de 100€ - Transport + logement">*/
/*     <meta name="og:keywords" content="{{ 'site.meta.keywords'  |trans }}">*/
/* */
/*     <meta name="twitter:description" content="{{ 'site.meta.description'  |trans }}">*/
/*     <meta name="twitter:image" content="/img/app6.jpg">*/
/*     <meta name="twitter:keywords" content="{{ 'site.meta.keywords'  |trans }}">*/
/*     <meta name="twitte:title" content="{{ 'site.meta.title'  |trans }}">*/
/* */
/* */
/*     <!-- Bootstrap Core CSS -->*/
/*     <link href="css/bootstrap.min.css" rel="stylesheet">*/
/* */
/*     <!-- Custom CSS -->*/
/*     <link href="css/agency.css" rel="stylesheet">*/
/* */
/*     <!-- Custom Fonts -->*/
/*     <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">*/
/*     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">*/
/*     <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>*/
/*     <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'*/
/*           type='text/css'>*/
/*     <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>*/
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* */
/* */
/* */
/*     <script type="text/javascript">*/
/*         !function () {*/
/*             var analytics = window.analytics = window.analytics || [];*/
/*             if (!analytics.initialize)if (analytics.invoked)window.console && console.error && console.error("Segment snippet included twice."); else {*/
/*                 analytics.invoked = !0;*/
/*                 analytics.methods = ["trackSubmit", "trackClick", "trackLink", "trackForm", "pageview", "identify", "reset", "group", "track", "ready", "alias", "page", "once", "off", "on"];*/
/*                 analytics.factory = function (t) {*/
/*                     return function () {*/
/*                         var e = Array.prototype.slice.call(arguments);*/
/*                         e.unshift(t);*/
/*                         analytics.push(e);*/
/*                         return analytics*/
/*                     }*/
/*                 };*/
/*                 for (var t = 0; t < analytics.methods.length; t++) {*/
/*                     var e = analytics.methods[t];*/
/*                     analytics[e] = analytics.factory(e)*/
/*                 }*/
/*                 analytics.load = function (t) {*/
/*                     var e = document.createElement("script");*/
/*                     e.type = "text/javascript";*/
/*                     e.async = !0;*/
/*                     e.src = ("https:" === document.location.protocol ? "https://" : "http://") + "cdn.segment.com/analytics.js/v1/" + t + "/analytics.min.js";*/
/*                     var n = document.getElementsByTagName("script")[0];*/
/*                     n.parentNode.insertBefore(e, n)*/
/*                 };*/
/*                 analytics.SNIPPET_VERSION = "3.1.0";*/
/*                 analytics.load("Vj0EdoR3LNedQN6CS080kdPhxFT0it5k");*/
/*                 analytics.page()*/
/*             }*/
/*         }();*/
/*     </script>*/
/*     <script src="//cdn.optimizely.com/js/4989151013.js"></script>*/
/* */
/*     <!-- Facebook Pixel Code -->*/
/*     <script>*/
/*         !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?*/
/*                 n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;*/
/*             n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;*/
/*             t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,*/
/*                 document,'script','//connect.facebook.net/en_US/fbevents.js');*/
/* */
/*         fbq('init', '703717056432293');*/
/*         fbq('track', "PageView");</script>*/
/*     <noscript><img height="1" width="1" style="display:none"*/
/*                    src="https://www.facebook.com/tr?id=703717056432293&ev=PageView&noscript=1"*/
/*             /></noscript>*/
/*     <!-- End Facebook Pixel Code -->*/
/* */
/* </head>*/
/* */
/* <body id="page-top" class="index">*/
/* */
/* <!-- Navigation -->*/
/* <nav class="navbar navbar-default navbar-fixed-top">*/
/*     <div class="container">*/
/*         <!-- Brand and toggle get grouped for better mobile display -->*/
/*         <div class="navbar-header page-scroll">*/
/*             <button type="button" class="navbar-toggle" data-toggle="collapse"*/
/*                     data-target="#bs-example-navbar-collapse-1">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand page-scroll" href="#page-top">VyVoP !</a>*/
/*         </div>*/
/* */
/*         <!-- Collect the nav links, forms, and other content for toggling -->*/
/*         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*             <ul class="nav navbar-nav navbar-right">*/
/*                 <li class="hidden">*/
/*                     <a href="#page-top"></a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a class="page-scroll" href="#services"*/
/* */
/*                     data-kwg-track-click="Clicked Menu"*/
/*                     data-kwg-track-props-menu="kesako"*/
/* */
/* */
/*                     >{{ 'nav.title.services.label' | trans }}</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a class="page-scroll" href="{{ path('crud_list_default') }}"*/
/* */
/*                     data-kwg-track-click="Clicked Menu"*/
/*                     data-kwg-track-props-menu="kesako"*/
/* */
/* */
/*                     >Admin</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a class="page-scroll" href="#portfolio"*/
/*                        data-kwg-track-click="Clicked Menu"*/
/*                        data-kwg-track-props-menu="portfolio"*/
/* */
/* */
/*                             >{{ 'nav.title.portfolio.label' | trans }}</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a class="page-scroll" href="#about"*/
/*                        data-kwg-track-click="Clicked Menu"*/
/*                        data-kwg-track-props-menu="why"*/
/* */
/*                             >{{ 'nav.title.about.label' | trans }}</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a class="page-scroll" href="#team"*/
/*                        data-kwg-track-click="Clicked Menu"*/
/*                        data-kwg-track-props-menu="team"*/
/* */
/*                             >{{ 'nav.title.team.label' | trans }}</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a class="page-scroll" href="#contact"*/
/*                        data-kwg-track-click="Clicked Menu"*/
/*                        data-kwg-track-props-menu="contact"*/
/* */
/*                             >{{ 'nav.title.contact.label' | trans }}</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*         <!-- /.navbar-collapse -->*/
/*     </div>*/
/*     <!-- /.container-fluid -->*/
/* </nav>*/
/* */
/* <!-- Header -->*/
/* <header>*/
/*     <div class="container">*/
/*         <div class="intro-text">*/
/*             <div class="intro-lead-in text-shadow ">{{ 'site.valueprop.intro.label' | trans }}</div>*/
/*             <div class="intro-lead-in text-shadow ">{{ 'site.valueprop.intro.label' | trans }}</div>*/
/*             <div class="intro-heading text-shadow"><span class="logo-text" style="text-transform:none;">VyVoP</span>  {{ 'site.valueprop.main.label' |trans }}<br><span*/
/*                         class="text-primary">{{ 'site.valueprop.main.part2.label' | trans }}</span></div>*/
/* */
/*             <br><br><br><br>*/
/*             <h4 class="service-heading text-shadow text-white"> {{ 'site.valueprop.conditions.label' |trans | raw }}</h4>*/
/* */
/* */
/*             <a href="#contactModal" data-toggle="modal"*/
/*                class="page-scroll btn btn-lg btn-primary text-center text-shadow"*/
/*             data-kwg-track-click="Clicked SubscribeButton|Clicked CTA"*/
/*             data-kwg-track-props-button="CTA"*/
/* */
/* */
/*             ><i*/
/*                     class="fa fa-angle-double-right"></i> {{ 'site.valueprop.cta.label' | trans }}</a>*/
/*             <a href="#services" class="page-scroll btn btn-lg btn-warning text-center"*/
/*                data-kwg-track-click="Clicked MoreInfoButton"*/
/*                                     data-kwg-track-props-button="moreinfo"*/
/* */
/*             ><i class="fa fa-info-circle"></i> {{ 'site.valueprop.cta2.label' | trans }}*/
/*             </a>*/
/* */
/* */
/*             <div class="app-block">*/
/*                 <a href="#contactModal" data-toggle="modal"*/
/*                    href="https://play.google.com/store/apps/details?id=com.kenweego.app"*/
/*                                                            data-kwg-track-click="Clicked AppButton"*/
/*                                                            data-kwg-track-props-button="GooglePlayButton"*/
/* */
/*                 >*/
/*                     <img alt="Get it on Google Play"*/
/*                          style="width:165px;height:45px;"*/
/*                          src="https://play.google.com/intl/en_us/badges/images/generic/fr-play-badge.png"/>*/
/*                 </a>*/
/* */
/*                 <a href="#contactModal" data-toggle="modal"*/
/*                    data-kwg-track-click="Clicked AppButton"*/
/*                    data-kwg-track-props-button="PlayStoreButton"*/
/*                         >*/
/*                     <img alt="Get it on Google Play"*/
/*                          style="width:165px;height:45px;"*/
/*                          src="https://devimages.apple.com.edgekey.net/app-store/marketing/guidelines/images/badge-download-on-the-app-store-fr.svg"/>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </header>*/
/* */
/* <!-- Services Section -->*/
/* <section id="services">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-12 text-center">*/
/*                 <h2 class="section-heading">{{ 'site.section.services.label'| trans}}</h2>*/
/* */
/*                 <h3 class="section-subheading text-muted">{{ 'site.section.services.description' | trans |raw }}</h3>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row text-center">*/
/*             <div class="col-md-4">*/
/*                     <span class="fa-stack fa-4x">*/
/*                         <i class="fa fa-circle fa-stack-2x text-primary"></i>*/
/*                         <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>*/
/*                     </span>*/
/*                 <h4 class="service-heading">{{ 'site.section.services.step1.title'  |trans |raw }}</h4>*/
/* */
/* */
/*                 <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">*/
/* */
/*                     <div class="carousel-inner" role="listbox">*/
/*                         <div class="item active">*/
/*                             <div class="media">*/
/*                                 <div class="media-left">*/
/*                                     <a href="#">*/
/*                                         <img src="img/users/user1.jpg" width="65px" class="img-circle"/> :*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="media-body">*/
/*                                     <p class="text-muted">{{ 'site.section.services.step1.example1' | trans |raw }}</p>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </div>*/
/* */
/*                         <div class="item">*/
/* */
/*                             <div class="media">*/
/*                                 <div class="media-left">*/
/*                                     <a href="#">*/
/*                                         <img src="img/users/user2.jpg" width="65px" class="img-circle"/>*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="media-body">*/
/*                                     <p class="text-muted"> {{ 'site.section.services.step1.example2' | trans |raw }}</p>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="item">*/
/* */
/*                             <div class="media">*/
/*                                 <div class="media-left">*/
/*                                     <a href="#">*/
/*                                         <img src="img/users/user3.jpg" width="65px" class="img-circle"/>*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="media-body">*/
/*                                     <p class="text-muted">{{ 'site.section.services.step1.example3' | trans |raw }}</p>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/* */
/*                         </div>*/
/* */
/*                         <div class="item">*/
/* */
/* */
/*                             <div class="media">*/
/*                                 <div class="media-left">*/
/*                                     <a href="#">*/
/*                                         <img src="img/users/user5.jpg" width="65px" class="img-circle"/>*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="media-body">*/
/*                                     <p class="text-muted">{{ 'site.section.services.step1.example4' | trans |raw }}</p>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/* */
/*                             <p class="text-muted"></p>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-4">*/
/*                     <span class="fa-stack fa-4x">*/
/*                         <i class="fa fa-circle fa-stack-2x text-primary"></i>*/
/*                         <i class="fa fa-search fa-stack-1x fa-inverse"></i>*/
/*                     </span>*/
/*                 <h4 class="service-heading">{{ 'site.section.services.step2.title'  | trans | raw }}</h4>*/
/* */
/*                 <p class="text-muted">{{ 'site.section.services.step2.description'  | trans | raw }}</p>*/
/*             </div>*/
/*             <div class="col-md-4">*/
/*                     <span class="fa-stack fa-4x">*/
/*                         <i class="fa fa-circle fa-stack-2x text-primary"></i>*/
/*                         <i class="fa fa-paper-plane fa-stack-1x fa-inverse"></i>*/
/*                     </span>*/
/*                 <h4 class="service-heading"{{ 'site.section.services.step3.title' |trans }}</h4>*/
/* */
/*                 <p class="text-muted">{{ 'site.section.services.step3.description' |trans }}</p>*/
/* */
/*                 <p class="text-muted "><i class="fa fa-plane fa-2x text-danger"></i> <i class="fa fa-home fa-2x"></i> <i*/
/*                         class="fa-bicycle fa fa-2x text-danger"></i>*/
/*                     <i class="fa fa-car fa-2x"></i>*/
/*                     <i class="fa fa-futbol-o fa-2x text-danger"></i>*/
/*                 </p>*/
/* */
/*                 <p class="text-muted">{{ 'site.section.services.step3.part2.description' |trans | raw }}</p>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <br/>*/
/* */
/*     <div class="text-center"><img class=" col-xs-12 col-md-4 col-md-offset-4" src='img/app6.jpg'/></div>*/
/*     <hr>*/
/* </section>*/
/* */
/* <!-- Portfolio Grid Section -->*/
/* <section id="portfolio" class="bg-light-gray">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-12 text-center">*/
/*                 <h2 class="section-heading">{{ 'site.section.portfolio.title' | trans}}</h2>*/
/* */
/*                 <h3 class="section-subheading text-muted">{{ 'site.section.portfolio.subtitle' | trans}}</h3>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-md-4 col-sm-6 portfolio-item">*/
/*                 <a href="#portfolioModal1" class="portfolio-link"*/
/*                         >*/
/*                     <!--*/
/*                         <div class="portfolio-hover">*/
/*                             <div class="portfolio-hover-content">*/
/*                                 <i class="fa fa-plus fa-3x"></i>*/
/*                             </div>*/
/*                         </div>*/
/*                         -->*/
/*                     <img src="img/destinations/bcn.jpg" class="img-responsive" alt="">*/
/*                 </a>*/
/* */
/*                 <div class="portfolio-caption">*/
/*                     <h4>{{ 'site.section.portfolio.offer1.destination' |trans }}</h4>*/
/* */
/*                     <p class="text-muted">{{ 'site.section.portfolio.offer1.title' |trans }}</p>*/
/* */
/*                     <p class="text-muted">{{ 'site.section.portfolio.offer1.details' | trans }}</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-4 col-sm-6 portfolio-item">*/
/*                 <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">*/
/*                     <!--*/
/*                         <div class="portfolio-hover">*/
/*                             <div class="portfolio-hover-content">*/
/*                                 <i class="fa fa-plus fa-3x"></i>*/
/*                             </div>*/
/*                         </div>*/
/*                         -->*/
/*                     <img src="img/destinations/krk.jpg" class="img-responsive" alt="">*/
/*                 </a>*/
/* */
/*                 <div class="portfolio-caption">*/
/*                     <h4>{{ 'site.section.portfolio.offer2.destination' | trans }}</h4>*/
/* */
/*                     <p class="text-muted">{{ 'site.section.portfolio.offer2.title' | trans }}</p>*/
/* */
/*                     <p class="text-muted">{{ 'site.section.portfolio.offer2.details' | trans }}</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-4 col-sm-6 portfolio-item">*/
/*                 <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">*/
/*                     <!--*/
/*                         <div class="portfolio-hover">*/
/*                             <div class="portfolio-hover-content">*/
/*                                 <i class="fa fa-plus fa-3x"></i>*/
/*                             </div>*/
/*                         </div>*/
/*                         -->*/
/*                     <img src="img/destinations/svq.jpg" class="img-responsive" alt="">*/
/*                 </a>*/
/* */
/*                 <div class="portfolio-caption">*/
/*                     <h4>{{ 'site.section.portfolio.offer3.destination' | trans }}</h4>*/
/* */
/*                     <p class="text-muted">{{ 'site.section.portfolio.offer3.title' |trans }}</p>*/
/* */
/*                     <p class="text-muted">{{ 'site.section.portfolio.offer3.details' |trans }}</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-4 col-sm-6 portfolio-item">*/
/*                 <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">*/
/*                     <!--*/
/*                         <div class="portfolio-hover">*/
/*                             <div class="portfolio-hover-content">*/
/*                                 <i class="fa fa-plus fa-3x"></i>*/
/*                             </div>*/
/*                         </div>*/
/*                         -->*/
/*                     <img src="img/destinations/psa.jpg" class="img-responsive" alt="">*/
/*                 </a>*/
/* */
/*                 <div class="portfolio-caption">*/
/*                     <h4>{{ 'site.section.portfolio.offer3.destination' | trans }}</h4>*/
/* */
/*                     <p class="text-muted">{{ 'site.section.portfolio.offer4.title' |trans }}</p>*/
/* */
/*                     <p class="text-muted">{{ 'site.section.portfolio.offer4.details' |trans }}</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-4 col-sm-6 portfolio-item">*/
/*                 <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">*/
/*                     <!--*/
/*                         <div class="portfolio-hover">*/
/*                             <div class="portfolio-hover-content">*/
/*                                 <i class="fa fa-plus fa-3x"></i>*/
/*                             </div>*/
/*                         </div>*/
/*                         -->*/
/*                     <img src="img/destinations/bru.jpg" class="img-responsive" alt="">*/
/*                 </a>*/
/* */
/*                 <div class="portfolio-caption">*/
/*                     <h4>{{ 'site.section.portfolio.offer5.destination' | trans }}</h4>*/
/* */
/*                     <p class="text-muted">{{ 'site.section.portfolio.offer5.title' |trans }}</p>*/
/* */
/*                     <p class="text-muted">{{ 'site.section.portfolio.offer5.details' |trans }}</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-4 col-sm-6 portfolio-item">*/
/*                 <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">*/
/*                     <!--*/
/*                     <div class="portfolio-hover">*/
/*                         <div class="portfolio-hover-content">*/
/*                             <i class="fa fa-plus fa-3x"></i>*/
/*                         </div>*/
/*                     </div>*/
/*                     -->*/
/*                     <img src="img/destinations/cph.jpg" class="img-responsive" alt="">*/
/*                 </a>*/
/* */
/*                 <div class="portfolio-caption">*/
/*                     <h4>{{ 'site.section.portfolio.offer6.destination' | trans }}</h4>*/
/* */
/*                     <p class="text-muted">{{ 'site.section.portfolio.offer6.title' |trans }}</p>*/
/* */
/*                     <p class="text-muted">{{ 'site.section.portfolio.offer6.details' |trans }}</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
/* <!-- About Section -->*/
/* <section id="about">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-12 text-center">*/
/*                 <h2 class="section-heading">{{ 'site.section.why.title' | trans | raw }}</h2>*/
/* */
/*                 <h3 class="section-subheading text-muted">{{ 'site.section.why.subtitle' | trans | raw }}</h3>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <ul class="timeline">*/
/*                     <li>*/
/*                         <div class="timeline-image">*/
/*                             <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">*/
/*                         </div>*/
/*                         <div class="timeline-panel">*/
/*                             {{ 'site.section.why.step1' | trans | raw }}*/
/*                         </div>*/
/*                     </li>*/
/*                     <li class="timeline-inverted">*/
/*                         <div class="timeline-image">*/
/*                             <img class="img-circle img-responsive" src="img/about/2.jpg" alt="">*/
/*                         </div>*/
/*                         <div class="timeline-panel">*/
/*                             {{ 'site.section.why.step2' | trans | raw }}*/
/*                         </div>*/
/*                     </li>*/
/*                     <li>*/
/*                         <div class="timeline-image">*/
/*                             <img class="img-circle img-responsive" src="img/about/3.jpg" alt="">*/
/*                         </div>*/
/*                         <div class="timeline-panel">*/
/*                             <div class="timeline-heading">*/
/*                                 {{ 'site.section.why.step3' | trans | raw }}*/
/*                             </div>*/
/*                         </div>*/
/*                     </li>*/
/*                     <li class="timeline-inverted">*/
/*                         <div class="timeline-image">*/
/*                             <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">*/
/*                         </div>*/
/*                         <div class="timeline-panel">*/
/*                             <div class="timeline-heading">*/
/*                              {{ 'site.section.why.step4' | trans | raw }}*/
/*                             </div>*/
/*                         </div>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
/* <!-- Team Section -->*/
/* <section id="team" class="bg-light-gray">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-12 text-center">*/
/* */
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-offset-3 col-sm-6">*/
/*                 <!-- Begin MailChimp Signup Form -->*/
/* */
/* */
/*                 <!--End mc_embed_signup-->*/
/*             </div>*/
/* */
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-lg-8 col-lg-offset-2 text-center">*/
/*                 <p class="large text-muted">{{ 'site.section.team.label' | trans | raw}}</p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
/* */
/* <!-- Clients Aside -->*/
/* <aside class="clients">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-3 col-sm-6">*/
/*                 <a href="#">*/
/*                     <img src="img/partners/skyscanner.png" class="img-responsive img-centered" alt="">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-md-3 col-sm-6">*/
/*                 <a href="#">*/
/*                     <img src="img/partners/hotelscombined.png" class="img-responsive img-centered" alt="">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-md-3 col-sm-6">*/
/*                 <a href="#">*/
/*                     <img src="img/partners/dojogroup.png" style='height:58px;' class="img-responsive img-centered"*/
/*                          alt="">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-md-3 col-sm-6">*/
/*                 <a href="#">*/
/*                     <img src="img/partners/bizsparklogo-2.jpg" class="img-responsive img-centered" alt="">*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </aside>*/
/* */
/* <!-- Contact Section -->*/
/* <section id="contact">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-12 text-center">*/
/*                 <h2 class="section-heading">{{ 'site.section.contact.title' | trans }}</h2>*/
/* */
/*                 <h3 class="section-subheading text-white">{{ 'site.section.contact.subtitle' | trans }}</h3>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <form action="" method="post" id="contactForm" name="mc-embedded-subscribe-form" class="validate"*/
/*                       target="_blank" novalidate>*/
/*                     <div class="row">*/
/*                         <div class="col-md-3 col-md-offset-1">*/
/*                             <div class="form-group">*/
/*                                 <input type="text" class="form-control" placeholder="{{ 'input.firstname.label' |trans  }}" id="contact-firstname"*/
/*                                        required data-validation-required-message="{{ 'required' | trans }}.">*/
/* */
/*                                 <p class="help-block text-danger"></p>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <input type="text" class="form-control" placeholder="{{ 'input.lastname.label' |trans  }}" id="contact-lastname"*/
/*                                        required data-validation-required-message="{{ 'required' | trans }}.">*/
/* */
/*                                 <p class="help-block text-danger"></p>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <input type="email" class="form-control" placeholder="{{ 'input.email.label' |trans  }}" id="contact-email"*/
/*                                        required data-validation-required-message="{{ 'required' | trans }}">*/
/* */
/*                                 <p class="help-block text-danger"></p>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-md-6">*/
/*                             <div class="form-group">*/
/*                                 <textarea class="form-control" placeholder="Ton Message *" id="message" required*/
/*                                           data-validation-required-message=".">*/
/*                                 </textarea>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="clearfix"></div>*/
/*                         <div class="col-md-offset-5 ">*/
/*                             <div id="contact-success"></div>*/
/*                             <input type="submit" class="btn btn-xl"*/
/* */
/*                                     >{{ 'Envoyer'|trans }}</button>*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
/* <footer>*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-4">*/
/*                 <span class="copyright">Copyright &copy; VyVoP 2016</span>*/
/*             </div>*/
/*             <!--*/
/*             <div class="col-md-4">*/
/*                 <ul class="list-inline social-buttons">*/
/*                     <li><a href="#"><i class="fa fa-twitter"></i></a>*/
/*                     </li>*/
/*                     <li><a href="#"><i class="fa fa-facebook"></i></a>*/
/*                     </li>*/
/*                     <li><a href="#"><i class="fa fa-linkedin"></i></a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*             <div class="col-md-4">*/
/*                 <ul class="list-inline quicklinks">*/
/*                     <li><a href="#">Privacy Policy</a>*/
/*                     </li>*/
/*                     <li><a href="#">Terms of Use</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*             -->*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
/* */
/* <!-- Portfolio Modals -->*/
/* <!-- Use the modals below to showcase details about your portfolio projects! -->*/
/* */
/* <!-- Portfolio Modal 1 -->*/
/* */
/* <div class="portfolio-modal modal fade" id="contactModal" tabindex="-1" role="dialog" aria-hidden="true">*/
/*     <div class="modal-content">*/
/*         <div class="close-modal" data-dismiss="modal">*/
/*             <div class="lr">*/
/*                 <div class="rl">*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="container">*/
/*             <section id="contact">*/
/*                 <div class="container">*/
/*                     <div class="row">*/
/*                         <div class="col-lg-12 text-center">*/
/*                             <h2 class="section-heading">{{ 'site.section.register.title' | trans | raw }}</h2>*/
/* */
/*                             <h3 class="section-subheading text-white">{{ 'site.section.register.subtitle' | trans | raw }}</h3>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="row">*/
/*                         <div class="col-lg-12">*/
/*                             <form action="" method="post" id="mc-embedded-subscribe-form"*/
/*                                   name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>*/
/*                                 <div class="row">*/
/*                                     <div class="col-md-6 col-md-offset-3">*/
/*                                         <div class="form-group">*/
/*                                             <input type="text" class="form-control" placeholder="{{ 'input.firstname.label' | trans }}"*/
/*                                                    id="firstname" required*/
/*                                                    data-validation-required-message="{{ 'required' | trans }}">*/
/* */
/*                                             <p class="help-block text-danger"></p>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <input type="text" class="form-control" placeholder="{{ 'input.lastname.label' | trans }}"*/
/*                                                    id="lastname" required*/
/*                                                    data-validation-required-message="{{ 'required' | trans }}">*/
/* */
/*                                             <p class="help-block text-danger"></p>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <input type="email" class="form-control" placeholder="{{ 'input.email.label' | trans }}"*/
/*                                                    id="email" required*/
/*                                                    data-validation-required-message="{{ 'required' | trans }}">*/
/* */
/*                                             <p class="help-block text-danger"></p>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="clearfix"></div>*/
/*                                     <div class="col-lg-12 text-center">*/
/*                                         <div id="success"></div>*/
/*                                         <button type="submit" class="btn btn-xl">{{ 'register' |trans }}</button>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </form>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </section>*/
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <!-- jQuery -->*/
/* <script src="js/jquery.js"></script>*/
/* */
/* <!-- Bootstrap Core JavaScript -->*/
/* <script src="js/bootstrap.min.js"></script>*/
/* */
/* <!-- Plugin JavaScript -->*/
/* <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>*/
/* <script src="js/classie.js"></script>*/
/* <script src="js/cbpAnimatedHeader.js"></script>*/
/* */
/* <!-- Contact Form JavaScript -->*/
/* <script src="js/jqBootstrapValidation.js"></script>*/
/* <script src="js/contact_me.js"></script>*/
/* <script src="js/main.js"></script>*/
/* <script src="js/analytics.js"></script>*/
/* */
/* <!-- Custom Theme JavaScript -->*/
/* <script src="js/agency.js"></script>*/
/* */
/* */
/* <script type="text/javascript">*/
/*     $(function () {*/
/*         if (window.analytics) {*/
/*             analytics.page("VyvopHome");*/
/*         }*/
/*     });*/
/*     window.locale = '{{ app.locale }}';*/
/* </script>*/
/* </body>*/
/* */
/* </html>*/
/* */
/* */
