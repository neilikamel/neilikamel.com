<?php

namespace Ecommerce\EcommerceBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses;
use Ecommerce\EcommerceBundle\Entity\Commandes;
use Ecommerce\EcommerceBundle\Entity\Produits;


class CommandesController extends Controller
{

public function facture()
{
$em = $this->getDoctrine()->getManager();
$generator = $this->container->get('security.secure_random');
$session = $this->getRequest()->getSession();
$panier = $session->get('panier');
$commande=array();$total= 0;$adresses = $session->get('adresse');

$facturation = $em->getRepository('EcommerceEcommerceBundle:UtilisateursAdresses')->find($adresses['facturation']);
$livraison = $em->getRepository('EcommerceEcommerceBundle:UtilisateursAdresses')->find($adresses['livraison']);

$produits = $em->getRepository('EcommerceEcommerceBundle:Produits')->findArray(array_keys($session->get('panier')));
foreach($produits as $produit)
$commande['produit'][$produit->getId()] = array('reference' => $produit->getNom(),
'qte' => $panier[$produit->getId()],'prix' => $produit->getPrix());
$total +=$produit->getPrix() * $panier[$produit->getId()];
$commande['token'] = bin2hex($generator->nextBytes(20));
$commande['livraison'] = array('prenom' => $livraison->getPrenom(),
'nom' => $livraison->getNom(),
'telephone' => $livraison->getTelephone(),
'adresse' => $livraison->getAdresse(),
'cp' => $livraison->getCp(),
'ville' => $livraison->getVille(),
'pays' => $livraison->getPays(),
'complement' => $livraison->getComplement());
$commande['facturation'] = array('prenom' => $facturation->getPrenom(),
'nom' => $facturation->getNom(),
'telephone' => $facturation->getTelephone(),
'adresse' => $facturation->getAdresse(),
'cp' => $facturation->getCp(),
'ville' => $facturation->getVille(),
'pays' => $facturation->getPays(),
'complement' => $facturation->getComplement());
return $commande;
}

    public function prepareCommandeAction()
	{         	 
         	  //var_dump($this->container->get('setNewReference')->reference());

	  $em=$this->getDoctrine()->getManager();
	  $session=$this->getRequest()->getSession();
	  if(!$session->has('commande')){
	  $commande=new Commandes();}
	  else
	  $commande=$em->getRepository('EcommerceEcommerceBundle:Commandes')->find($session->get('commande'));
	  $commande->setDate(new \DateTime());
        $commande->setReference($this->container->get('setNewReference')->reference()); //Service
      $commande->setValider(0);
      $commande->setUtilisateur($this->container->get('security.context')->getToken()->getUser());
	 $commande->setCommande($this->facture());

	  if(!$session->has('commande'))
	  {$em->persist($commande);
	  $session->set('commande',$commande);
	  
	  }
	  $em->flush();
	  return new Response($commande->getId());
	  
	}
	
}
