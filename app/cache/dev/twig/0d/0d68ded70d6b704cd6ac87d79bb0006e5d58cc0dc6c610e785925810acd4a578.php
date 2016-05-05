<?php

/* EcommerceEcommerceBundle:Default:panier.html.twig */
class __TwigTemplate_4419e7e34bb6c348c9e10efb18c95d3b0750a0c38cc3d34e7112e909840da1b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceEcommerceBundle:Default:panier.html.twig", 1);
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
        echo "       <!-- Page Content -->
    <div class=\"container\">
   ";
        // line 5
        $context["total"] = 0;
        // line 6
        echo "       <h2>Votre parnier</h2>
                    <form>
                    <table class=\"table table-striped table-hover\">
                        <thead>
                            <tr>
                                <th>Références</th>
                                <th>Quantité</th>

                                <th>Action</th>

                                <th>Prix unitaire</th>
                                <th>Total HT</th>
                            </tr>
                            

                        </thead>
                        <tbody>                    
                            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 24
            echo "
                            <tr>
                                <th>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nom", array()), "html", null, true);
            echo "</th>
                                <th>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["p"], "id", array()), array(), "array"), "html", null, true);
            echo "</th>

                                <th><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ecommerce_ecommerce_supprimer_panier", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\">supprimer</a></th>

                                <th>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prix", array()), "html", null, true);
            echo "</th>
                                <th>";
            // line 32
            echo twig_escape_filter($this->env, ($this->getAttribute($context["p"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["p"], "id", array()), array(), "array")), "html", null, true);
            echo "</th>
\t\t\t    
                                </tr>
                                ";
            // line 35
            $context["t"] = ($this->getAttribute($context["p"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["p"], "id", array()), array(), "array"));
            // line 36
            echo "                                    ";
            $context["total"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) + (isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")));
            // line 37
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
                        </tbody>
                    </table>
                </form>
                <dl class=\"dl-horizontal pull-right\">

                    <dt>Total:";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "</dt>
                    <dd></dd>
                    
                    
    
                 
                </dl>
                <div class=\"clearfix\"></div>
                <a href=\"livraison.php\" class=\"btn btn-success pull-right\">Valider mon panier</a>
                <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("ecommerce_ecommerce_homepage");
        echo "\" class=\"btn btn-primary\">Continuer mes achats</a>
            </div>
\t\t
        <!-- /.row -->

        <hr>


";
    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Default:panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 54,  108 => 45,  100 => 39,  93 => 37,  90 => 36,  88 => 35,  82 => 32,  78 => 31,  73 => 29,  68 => 27,  64 => 26,  60 => 24,  56 => 23,  37 => 6,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig"%}*/
/* {% block body%}*/
/*        <!-- Page Content -->*/
/*     <div class="container">*/
/*    {% set total=0 %}*/
/*        <h2>Votre parnier</h2>*/
/*                     <form>*/
/*                     <table class="table table-striped table-hover">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <th>Références</th>*/
/*                                 <th>Quantité</th>*/
/* */
/*                                 <th>Action</th>*/
/* */
/*                                 <th>Prix unitaire</th>*/
/*                                 <th>Total HT</th>*/
/*                             </tr>*/
/*                             */
/* */
/*                         </thead>*/
/*                         <tbody>                    */
/*                             {% for p in produits%}*/
/* */
/*                             <tr>*/
/*                                 <th>{{p.nom}}</th>*/
/*                                 <th>{{panier[p.id]}}</th>*/
/* */
/*                                 <th><a href="{{path('ecommerce_ecommerce_supprimer_panier',{'id':p.id})}}">supprimer</a></th>*/
/* */
/*                                 <th>{{p.prix}}</th>*/
/*                                 <th>{{(p.prix)*(panier[p.id])}}</th>*/
/* 			    */
/*                                 </tr>*/
/*                                 {% set t=(p.prix)*(panier[p.id])%}*/
/*                                     {%set total=(total+t)%}*/
/* */
/*                                 {%endfor%}*/
/* */
/*                         </tbody>*/
/*                     </table>*/
/*                 </form>*/
/*                 <dl class="dl-horizontal pull-right">*/
/* */
/*                     <dt>Total:{{total}}</dt>*/
/*                     <dd></dd>*/
/*                     */
/*                     */
/*     */
/*                  */
/*                 </dl>*/
/*                 <div class="clearfix"></div>*/
/*                 <a href="livraison.php" class="btn btn-success pull-right">Valider mon panier</a>*/
/*                 <a href="{{path('ecommerce_ecommerce_homepage')}}" class="btn btn-primary">Continuer mes achats</a>*/
/*             </div>*/
/* 		*/
/*         <!-- /.row -->*/
/* */
/*         <hr>*/
/* */
/* */
/* {%endblock%}*/
/* */
