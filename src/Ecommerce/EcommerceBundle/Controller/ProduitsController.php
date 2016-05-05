<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Entity\Produits;
use Ecommerce\EcommerceBundle\Form\RechercheType;
class ProduitsController extends Controller
{
    public function indexAction()
    {
        $em=$this->getDoctrine()->getManager();
        $produits=$em->getRepository('EcommerceEcommerceBundle:Produits')->findAll();
        return $this->render('EcommerceEcommerceBundle:Default:index.html.twig',array('produits'=>$produits));
    }
    /*public function produitscategorieAction($categorie)
    {
               $form=$this->createForm(new RechercheType()) ;

        $em=$this->getDoctrine()->getManager();
        //$produits=$em->getRepository('EcommerceEcommerceBundle:Produits')->findBy(array($categorie));
        //var_dump($produits);die();
        $query=$em->createQuery('select p from EcommerceEcommerceBundle:Produits p where p.categorie=:categorie ')->setParameter('categorie',$categorie);
        $produits=$query->getResult();        //var_dump($produits);die();

        return $this->render('EcommerceEcommerceBundle:Default:produitscategorie.html.twig',array('produits'=>$produits, 'form'=>$form->createView()));
                
    }*/
    
    public function presentationAction($id)
    {
        $em=$this->getDoctrine()->getEntityManager();
        $produit=$em->getRepository('EcommerceEcommerceBundle:Produits')->find($id);
        
        return $this->render('EcommerceEcommerceBundle:Default:presentation.html.twig',array('produit'=>$produit));
        
    }
}
