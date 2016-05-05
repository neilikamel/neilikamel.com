<?php

/* EcommerceEcommerceBundle:Default:validation.html.twig */
class __TwigTemplate_78c8c61696a2808db8244e3f9d9884e05401a9730d595b2ac66e1da94d32a71f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceEcommerceBundle:Default:validation.html.twig", 1);
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
        echo "<div class=\"container\">
<div class=\"row\">

<div class=\"span9\">
<h2>Valider mon panier</h2>
<table class=\"table table-striped table-hover\">
<thead>
<tr>
<th>Références</th>
<th>Quantité</th>
<th>Prix unitaire</th>
<th>Total HT</th>
</tr>
</thead>
<tbody>
";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "produit", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 19
            echo "<tr>
<td>
";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "qte", array()), "html", null, true);
            echo "
</td>
<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo " €</td>
<td>";
            // line 24
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute($context["produit"], "qte", array())), "html", null, true);
            echo " €</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</tbody>
</table>

            
            <div class=\"span3 pull-left\">
                <dl class=\"pull-left\">
                    <dt><h4>Adresse de facturation</h4></dt>
                    <dt>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "nom", array()), "html", null, true);
        echo "</dt>
                    <dt>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "adresse", array()), "html", null, true);
        echo "</dt>
                    <dt>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "cp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "ville", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "pays", array()), "html", null, true);
        echo "</dt>
                </dl>
            </div>

";
    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Default:validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 36,  89 => 35,  83 => 34,  74 => 27,  65 => 24,  61 => 23,  56 => 21,  52 => 19,  48 => 18,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block body %}*/
/* <div class="container">*/
/* <div class="row">*/
/* */
/* <div class="span9">*/
/* <h2>Valider mon panier</h2>*/
/* <table class="table table-striped table-hover">*/
/* <thead>*/
/* <tr>*/
/* <th>Références</th>*/
/* <th>Quantité</th>*/
/* <th>Prix unitaire</th>*/
/* <th>Total HT</th>*/
/* </tr>*/
/* </thead>*/
/* <tbody>*/
/* {% for produit in commande.commande.produit %}*/
/* <tr>*/
/* <td>*/
/* {{ produit.qte }}*/
/* </td>*/
/* <td>{{ produit.prix }} €</td>*/
/* <td>{{ produit.prix * produit.qte }} €</td>*/
/* </tr>*/
/* {% endfor %}*/
/* </tbody>*/
/* </table>*/
/* */
/*             */
/*             <div class="span3 pull-left">*/
/*                 <dl class="pull-left">*/
/*                     <dt><h4>Adresse de facturation</h4></dt>*/
/*                     <dt>{{ commande.commande.facturation.prenom }} {{ commande.commande.facturation.nom }}</dt>*/
/*                     <dt>{{ commande.commande.facturation.adresse }}</dt>*/
/*                     <dt>{{ commande.commande.facturation.cp }} {{ commande.commande.facturation.ville }} - {{ commande.commande.facturation.pays }}</dt>*/
/*                 </dl>*/
/*             </div>*/
/* */
/* {% endblock %}*/
/* */
