<?php

/* EcommerceEcommerceBundle:Default:livraison.html.twig */
class __TwigTemplate_3ce7c85e8247cfbc3ec949529af2674edea0a8396c09c222d3574f50b42c06be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceEcommerceBundle:Default:livraison.html.twig", 1);
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
        <div class=\"span12\">
            <h2>Livraison</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span4\">
                        
                            
                            <h4>Adresse de livraison</h4>
<form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("validation");
        echo "\" method=\"POST\">

                            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adresses", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
            // line 16
            echo "<label class=\"radio\">
<input type=\"radio\" name=\"livraison\" value=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                echo "checked=\"checked\"";
            }
            echo ">
";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "adresse", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "cp", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "ville", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "pays", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supp_livraison_adresse", array("id" => $this->getAttribute($context["adresse"], "id", array()))), "html", null, true);
            echo "\">supp<i class=\"icon-trash\"></i></a>
<br />";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "nom", array()), "html", null, true);
            echo "
</label>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "<br /><br />
                            
                                         ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adresses", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
            // line 25
            echo "<label class=\"radio\">
<input type=\"radio\" name=\"facturation\" value=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                echo "checked=\"checked\"";
            }
            echo ">
";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "adresse", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "cp", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "ville", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "pays", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supp_livraison_adresse", array("id" => $this->getAttribute($context["adresse"], "id", array()))), "html", null, true);
            echo "\">supp<i class=\"icon-trash\"></i></a>
<br />";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "nom", array()), "html", null, true);
            echo "
</label>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "<br />
<button class=\"btn btn-primary\">Valider mes adresses</button>
</form>

                    </div>


                    <div class=\"span4 offset2\">
                        <h4>Ajouter une nouvelle adresse</h4>
                        <form method='post'action=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("livraison");
        echo "\">
                            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t  <button class=\"btn btn-primary\">Ajouter</button>
                            </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Default:livraison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 41,  181 => 40,  170 => 31,  151 => 28,  139 => 27,  131 => 26,  128 => 25,  111 => 24,  107 => 22,  88 => 19,  76 => 18,  68 => 17,  65 => 16,  48 => 15,  43 => 13,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}        */
/* {% block body %}*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="span12">*/
/*             <h2>Livraison</h2>*/
/*             <div id="collapseOne" class="accordion-body collapse in">*/
/*                 <div class="accordion-inner">*/
/*                     <div class="span4">*/
/*                         */
/*                             */
/*                             <h4>Adresse de livraison</h4>*/
/* <form action="{{ path('validation') }}" method="POST">*/
/* */
/*                             {% for adresse in user.adresses %}*/
/* <label class="radio">*/
/* <input type="radio" name="livraison" value="{{ adresse.id }}" {% if loop.index0 == 0 %}checked="checked"{% endif %}>*/
/* {{ adresse.adresse }}, {{ adresse.cp }} {{ adresse.ville }} - {{ adresse.pays }} <a href="{{path('supp_livraison_adresse',{'id':adresse.id})}}">supp<i class="icon-trash"></i></a>*/
/* <br />{{ adresse.prenom }} {{ adresse.nom }}*/
/* </label>*/
/* {% endfor %}*/
/* <br /><br />*/
/*                             */
/*                                          {% for adresse in user.adresses %}*/
/* <label class="radio">*/
/* <input type="radio" name="facturation" value="{{ adresse.id }}" {% if loop.index0 == 0 %}checked="checked"{% endif %}>*/
/* {{ adresse.adresse }}, {{ adresse.cp }} {{ adresse.ville }} - {{ adresse.pays }} <a href="{{ path('supp_livraison_adresse', { 'id' : adresse.id }) }}">supp<i class="icon-trash"></i></a>*/
/* <br />{{ adresse.prenom }} {{ adresse.nom }}*/
/* </label>*/
/* {% endfor %}*/
/* <br />*/
/* <button class="btn btn-primary">Valider mes adresses</button>*/
/* </form>*/
/* */
/*                     </div>*/
/* */
/* */
/*                     <div class="span4 offset2">*/
/*                         <h4>Ajouter une nouvelle adresse</h4>*/
/*                         <form method='post'action="{{path('livraison')}}">*/
/*                             {{form_widget(form)}}*/
/* 		  <button class="btn btn-primary">Ajouter</button>*/
/*                             </form>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
