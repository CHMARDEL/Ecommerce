<?php

/* EcommerceBundle:Default:produits/layout/produits.html.twig */
class __TwigTemplate_1a863a9ee09dfa52e6e95543e666e23f03da4f15ceb5d46570222fb06f35d1c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout/layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">

        <div class=\"span3\">
            ";
        // line 8
        $this->env->loadTemplate("::modulesUsed/navigation.html.twig")->display($context);
        // line 9
        echo "            ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 10
            echo "                ";
            $this->env->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig")->display($context);
            echo "   
            ";
        } else {
            // line 12
            echo "                ";
            $this->env->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig")->display($context);
            echo "   
            ";
        }
        // line 14
        echo "            ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Panier:menu"), array());
        // line 15
        echo "        </div>
        
        <div class=\"span9\">
            ";
        // line 18
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) != 0)) {
            // line 19
            echo "                <ul class=\"thumbnails\">
                ";
            // line 20
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 21
                echo "                    <li class=\"span3\">
                        <div class=\"thumbnail\">
                            <img src=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image"), "path"), "html", null, true);
                echo "\" alt=\"DevAndClick\" width=\"300\" height=\"150\">
                            <div class=\"caption\">
                                <h4>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom"), "html", null, true);
                echo "</h4>
                                <p>";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('tva_extension')->calculTva($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix"), $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "tva"), "multiplicate")), "html", null, true);
                echo " €</p>
                                <a class=\"btn btn-primary\" href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
                echo "\">Plus d'infos</a>
                                ";
                // line 28
                if ((!$this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"), array(), "array", true, true))) {
                    // line 29
                    echo "                                    <a class=\"btn btn-success\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
                    echo "\">Ajouter au panier</a>
                                ";
                }
                // line 31
                echo "                            </div>
                        </div>
                    </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                </ul>

                <div class=\"pagination\">
                    <ul>
                        <li class=\"disabled\"><span>Précédent</span></li>
                        <li class=\"disabled\"><span>1</span></li>
                        <li><a href=\"#\">2</a></li>
                        <li><a href=\"#\">3</a></li>
                        <li><a href=\"#\">4</a></li>
                        <li><a href=\"#\">5</a></li>
                        <li><a href=\"#\">Suivant</a></li>
                    </ul>
                </div>
            ";
        } else {
            // line 49
            echo "                Aucun produit
            ";
        }
        // line 51
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:produits/layout/produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 51,  125 => 49,  109 => 35,  100 => 31,  94 => 29,  92 => 28,  88 => 27,  84 => 26,  80 => 25,  75 => 23,  71 => 21,  67 => 20,  64 => 19,  62 => 18,  57 => 15,  54 => 14,  48 => 12,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,);
    }
}
