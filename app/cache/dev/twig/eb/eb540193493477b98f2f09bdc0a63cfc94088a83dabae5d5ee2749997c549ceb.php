<?php

/* EcommerceEcommerceBundle:Default:index.html.twig */
class __TwigTemplate_10fa8ffb5cad8bdcc62e679408e9aa58aea7bfb000db4771ab77a082ee126aa2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceEcommerceBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <!-- Header Carousel -->
    <header id=\"myCarousel\" class=\"carousel slide\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\">
            <div class=\"item active\">
                <div class=\"fill\" style=\"background-image:url(";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), 0, array(), "array"), "image", array()), "AssetPath", array())), "html", null, true);
        echo ");\"></div>
                
            </div>
            <div class=\"item\">

                <div class=\"fill\" style=\"background-image:url(";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), 2, array(), "array"), "image", array()), "AssetPath", array())), "html", null, true);
        echo ");\"></div>
                <div class=\"carousel-caption\">
                </div>
            </div>
                <div class=\"item\">

                <div class=\"fill\" style=\"background-image:url(";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), 1, array(), "array"), "image", array()), "AssetPath", array())), "html", null, true);
        echo ");\"></div>
                <div class=\"carousel-caption\">
                </div>
            </div>
                </div>
                

        <!-- Controls -->
        <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
            <span class=\"icon-prev\"></span>
        </a>
        <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
            <span class=\"icon-next\"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class=\"container\">

        <!-- Marketing Icons Section -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">
Bienvenue à la commerce moderne                </h1>
            </div>
                
                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 53
            echo "
                
            <div class=\"col-md-4\" >
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h4><i class=\"fa fa-fw fa-check\"></i> ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nom", array()), "html", null, true);
            echo "    
            ";
            // line 59
            if (($this->getAttribute($context["p"], "disponible", array()) == 1)) {
                echo "<mark class=\"prixnouv\">Disponible</mark>
";
            } else {
                // line 60
                echo "<mark class=\"prixen\">  Disponible</mark>";
            }
            echo "\t\t\t
                                                <mark class=\"prixen\">";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prix", array()), "html", null, true);
            echo "DT</mark> <mark class=\"prixnouv\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prix", array()), "html", null, true);
            echo "DT</mark><br>

                            <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ecommerce_ecommerce_presentation", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Voir le produit</a>
              ";
            // line 64
            if (($this->getAttribute($context["p"], "disponible", array()) == 1)) {
                echo " <a class=\"btn btn-primary\"href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ecommerce_ecommerce_ajout_panier", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
                echo "\">Ajouter </a>";
            }
            // line 65
            echo "
\t\t\t\t\t\t\t</h4>
                    </div>

                    <div class=\"panel-body\" >
                        <img src=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["p"], "image", array()), "AssetPath", array())), "html", null, true);
            echo "\" width=\"400\" height=\"300\">
                    </div>
                    </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                
        <!-- /.row -->

        <!-- Portfolio Section -->
        
            </div>

";
    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 75,  140 => 70,  133 => 65,  127 => 64,  123 => 63,  116 => 61,  111 => 60,  106 => 59,  102 => 58,  95 => 53,  91 => 52,  62 => 26,  53 => 20,  45 => 15,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig"%}*/
/* {% block body%}*/
/*     <!-- Header Carousel -->*/
/*     <header id="myCarousel" class="carousel slide">*/
/*         <!-- Indicators -->*/
/*         <ol class="carousel-indicators">*/
/*             <li data-target="#myCarousel" data-slide-to="0" class="active"></li>*/
/*             <li data-target="#myCarousel" data-slide-to="1"></li>*/
/*             <li data-target="#myCarousel" data-slide-to="2"></li>*/
/*         </ol>*/
/* */
/*         <!-- Wrapper for slides -->*/
/*         <div class="carousel-inner">*/
/*             <div class="item active">*/
/*                 <div class="fill" style="background-image:url({{ asset(produits[0].image.AssetPath) }});"></div>*/
/*                 */
/*             </div>*/
/*             <div class="item">*/
/* */
/*                 <div class="fill" style="background-image:url({{ asset(produits[2].image.AssetPath) }});"></div>*/
/*                 <div class="carousel-caption">*/
/*                 </div>*/
/*             </div>*/
/*                 <div class="item">*/
/* */
/*                 <div class="fill" style="background-image:url({{ asset(produits[1].image.AssetPath) }});"></div>*/
/*                 <div class="carousel-caption">*/
/*                 </div>*/
/*             </div>*/
/*                 </div>*/
/*                 */
/* */
/*         <!-- Controls -->*/
/*         <a class="left carousel-control" href="#myCarousel" data-slide="prev">*/
/*             <span class="icon-prev"></span>*/
/*         </a>*/
/*         <a class="right carousel-control" href="#myCarousel" data-slide="next">*/
/*             <span class="icon-next"></span>*/
/*         </a>*/
/*     </header>*/
/* */
/*     <!-- Page Content -->*/
/*     <div class="container">*/
/* */
/*         <!-- Marketing Icons Section -->*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <h1 class="page-header">*/
/* Bienvenue à la commerce moderne                </h1>*/
/*             </div>*/
/*                 */
/*                 {%for p in produits%}*/
/* */
/*                 */
/*             <div class="col-md-4" >*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading">*/
/*                         <h4><i class="fa fa-fw fa-check"></i> {{p.nom}}    */
/*             {%if p.disponible==1%}<mark class="prixnouv">Disponible</mark>*/
/* {%else%}<mark class="prixen">  Disponible</mark>{%endif%}			*/
/*                                                 <mark class="prixen">{{p.prix }}DT</mark> <mark class="prixnouv">{{p.prix}}DT</mark><br>*/
/* */
/*                             <a href="{{path('ecommerce_ecommerce_presentation',{'id':p.id})}}" class="btn btn-primary">Voir le produit</a>*/
/*               {%if p.disponible==1%} <a class="btn btn-primary"href="{{path('ecommerce_ecommerce_ajout_panier',{'id':p.id})}}">Ajouter </a>{%endif%}*/
/* */
/* 							</h4>*/
/*                     </div>*/
/* */
/*                     <div class="panel-body" >*/
/*                         <img src="{{ asset( p.image.AssetPath) }}" width="400" height="300">*/
/*                     </div>*/
/*                     </div>*/
/*             </div>*/
/*             {%endfor%}*/
/*                 */
/*         <!-- /.row -->*/
/* */
/*         <!-- Portfolio Section -->*/
/*         */
/*             </div>*/
/* */
/* {%endblock%}*/
/* */
