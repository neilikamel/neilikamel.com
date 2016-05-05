<?php

/* ::base.html.twig */
class __TwigTemplate_c300944a4b56801f8101a5df3f21101f16ed9af617fb220c3f07afa46b299877 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!DOCTYPE html>
<html>

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Eboutique</title>
 
    <!-- Bootstrap Core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap2.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/modern-business.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>


    <!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\">Eboutique</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    
                    <li>
                        <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("ecommerce_ecommerce_homepage");
        echo "\">Accueil</a>
                    </li>
                    <li>
                        <a href=\"#\">Services</a>
                    </li>
                    <li>
                        <a href=\"#\">Contact</a>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Produits<b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">

    ";
        // line 70
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceEcommerceBundle:Categories:menu"), array());
        // line 71
        echo "
                            
                            
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Mon compte<b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            
                            
                           

                    
                            
                            
                            
                            
                        </ul>
                    </li>
                        <ul>
                              
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>









        ";
        // line 109
        $this->displayBlock('body', $context, $blocks);
        // line 110
        echo "    
            <!-- Footer -->
        <footer>
            
            <div class=\"row\">
                <div class=\"col-lg-12\">

                    <p>Copyright &copy; neili kamel 2015</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
            <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pagespages/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    \$('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
   <script>
var timeout;

\$('#cart').on({
  mouseenter: function() {
    \$('#cart-dropdown').show();
  },
  mouseleave: function() {
    timeout = setTimeout(function() {
      \$('#cart-dropdown').hide();
    }, 200);
  }
})

// laisse le contenu ouvert à son survol
// le cache quand la souris sort
\$('#cart-dropdown').on({
  mouseenter: function() {
    clearTimeout(timeout);
  },
  mouseleave: function() {
    \$('#cart-dropdown').hide();
  }
});

</script>

        ";
        // line 166
        $this->displayBlock('javascripts', $context, $blocks);
        // line 167
        echo "    </body>
</html>
";
    }

    // line 109
    public function block_body($context, array $blocks = array())
    {
    }

    // line 166
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 166,  235 => 109,  229 => 167,  227 => 166,  189 => 131,  183 => 128,  178 => 126,  160 => 110,  158 => 109,  118 => 71,  116 => 70,  101 => 58,  66 => 26,  60 => 23,  54 => 20,  50 => 19,  46 => 18,  42 => 17,  38 => 16,  21 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!DOCTYPE html>*/
/* <html>*/
/* */
/* <head>*/
/* */
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/*     <title>Eboutique</title>*/
/*  */
/*     <!-- Bootstrap Core CSS -->*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap2.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap-responsive.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/style.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" />*/
/*     <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">*/
/* */
/*     <!-- Custom CSS -->*/
/*     <link href="{{asset('css/modern-business.css')}}" rel="stylesheet">*/
/* */
/*     <!-- Custom Fonts -->*/
/*     <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">*/
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* */
/* </head>*/
/* */
/* <body>*/
/* */
/* */
/*     <!-- Navigation -->*/
/*     <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*         <div class="container">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="index.html">Eboutique</a>*/
/*             </div>*/
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                 <ul class="nav navbar-nav navbar-right">*/
/*                     */
/*                     <li>*/
/*                         <a href="{{path('ecommerce_ecommerce_homepage')}}">Accueil</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">Services</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">Contact</a>*/
/*                     </li>*/
/*                     <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Produits<b class="caret"></b></a>*/
/*                         <ul class="dropdown-menu">*/
/* */
/*     {% render(controller('EcommerceEcommerceBundle:Categories:menu'))%}*/
/* */
/*                             */
/*                             */
/*                         </ul>*/
/*                     </li>*/
/*                     <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mon compte<b class="caret"></b></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             */
/*                             */
/*                            */
/* */
/*                     */
/*                             */
/*                             */
/*                             */
/*                             */
/*                         </ul>*/
/*                     </li>*/
/*                         <ul>*/
/*                               */
/*                         </ul>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*             <!-- /.navbar-collapse -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*     </nav>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*         {% block body %}{% endblock %}*/
/*     */
/*             <!-- Footer -->*/
/*         <footer>*/
/*             */
/*             <div class="row">*/
/*                 <div class="col-lg-12">*/
/* */
/*                     <p>Copyright &copy; neili kamel 2015</p>*/
/*                 </div>*/
/*             </div>*/
/*         </footer>*/
/* */
/*     </div>*/
/*     <!-- /.container -->*/
/* */
/*     <!-- jQuery -->*/
/*             <script src="{{ asset('bundles/pagespages/ckeditor/ckeditor.js') }}"></script>*/
/* */
/*     <script src="{{asset('js/jquery.js')}}"></script>*/
/* */
/*     <!-- Bootstrap Core JavaScript -->*/
/*     <script src="{{asset('js/bootstrap.min.js')}}"></script>*/
/* */
/*     <!-- Script to Activate the Carousel -->*/
/*     <script>*/
/*     $('.carousel').carousel({*/
/*         interval: 5000 //changes the speed*/
/*     })*/
/*     </script>*/
/*    <script>*/
/* var timeout;*/
/* */
/* $('#cart').on({*/
/*   mouseenter: function() {*/
/*     $('#cart-dropdown').show();*/
/*   },*/
/*   mouseleave: function() {*/
/*     timeout = setTimeout(function() {*/
/*       $('#cart-dropdown').hide();*/
/*     }, 200);*/
/*   }*/
/* })*/
/* */
/* // laisse le contenu ouvert à son survol*/
/* // le cache quand la souris sort*/
/* $('#cart-dropdown').on({*/
/*   mouseenter: function() {*/
/*     clearTimeout(timeout);*/
/*   },*/
/*   mouseleave: function() {*/
/*     $('#cart-dropdown').hide();*/
/*   }*/
/* });*/
/* */
/* </script>*/
/* */
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
