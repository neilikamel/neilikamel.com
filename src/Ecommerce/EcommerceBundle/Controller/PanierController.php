<?php
namespace Ecommerce\EcommerceBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Ecommerce\EcommerceBundle\Form\UtilisateursAdressesType;
use Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses;
use Utilisateurs\UtilisateursBundle\Entity\Utilisateurs;
use Ecommerce\EcommerceBundle\Entity\Commandes;

class PanierController extends Controller
{
    public function ajouterAction($id)
    {
        $session=$this->getRequest()->getSession();
        if(!$session->has('panier')) $session->set('panier',array());
        $panier=$session->get('panier');
        //var_dump($panier);die();
                if(array_key_exists($id,$panier))
                {
                       if($this->getRequest()->query->get('qte')!=null)

                    $panier[$id]=$this->getRequest()->query->get('qte');
                }else
                {
                    if($this->getRequest()->query->get('qte')!=null)
                       $panier[$id]=$this->getRequest()->query->get('qte');
                    else$panier[$id]=1;
                }
                $session->set('panier',$panier);
        return $this->redirect($this->generateUrl("panier"));
        
    }
    
    public function panierAction()
    {
        $session=$this->getRequest()->getSession();
        if(!$session->has('panier')) $session->set('panier',array());
        $panier=$session->get('panier');
        //var_dump($panier,$this->getRequest()->query->get('qte'));die();
       $em=$this->getDoctrine()->getManager();
        $produits=$em->getRepository('EcommerceEcommerceBundle:Produits')->findArray(array_keys($panier));
       // var_dump($panier,$produits);
        return $this->render('EcommerceEcommerceBundle:Default:panier.html.twig',array('produits'=>$produits,'panier'=>$panier));
    }
    public function supprimerAction($id)
    {
        $session=$this->getRequest()->getSession();
        $panier=$session->get('panier');
        unset($panier[$id]);
        $session->set('panier',$panier);
        return $this->redirect($this->generateUrl('panier'));
    }
    public function livraisonAction()
    {   
        $utilisateur=$this->container->get('security.context')->getToken()->getUser();
      $u=is_object($utilisateur);
        //var_dump($u);die();

        $entity=new UtilisateursAdresses();
        $entity->setUtilisateur($utilisateur);


        $form=$this->createForm(new UtilisateursAdressesType(),$entity);
        if($this->getRequest()->getMethod()=='POST')
        {
            $form->handleRequest($this->getRequest());
            if($form->isValid())
            {
                $em=$this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();
                $this->redirect($this->generateUrl('livraison'));
            }
        }
       return $this->render('EcommerceEcommerceBundle:Default:livraison.html.twig',array('form'=>$form->createView(),'user'=>$utilisateur)); 
    }
    public function supprimerAdresseAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $adr=$em->getRepository('EcommerceEcommerceBundle:UtilisateursAdresses')->find($id);
        $em->remove($adr);
        $em->flush();
        return $this->redirect($this->generateUrl('livraison'));
    }
    public function setLivraisonOnSession()
    {
        $session=$this->getRequest()->getSession();
        if(!$session->has('adresse'))
            $session->set('adresse',array());
        $adresse=$session->get('adresse');
        $adresse['livraison']=$this->getRequest()->request->get('livraison');
        $adresse['facturation']=$this->getRequest()->request->get('facturation');
                  $session->set('adresse',$adresse);

    return $this->redirect($this->generateUrl('validation'));

                  
    }
    public function validationAction()
    {     
        $session=$this->getRequest()->getSession();
        $em=$this->getDoctrine()->getManager();
        if ($this->get('request')->getMethod()=='POST')
        $this->setLivraisonOnSession();
        $prepareCommande=$this->forward('EcommerceEcommerceBundle:Commandes:prepareCommande');
        
        $commande = $em->getRepository('EcommerceEcommerceBundle:Commandes')->find($prepareCommande->getContent());

//rann ouch brigitte fourniere
        /*$panier=$session->get('panier');      
        $adresse=$session->get('adresse');

        $facturation=$em->getRepository('EcommerceEcommerceBundle:UtilisateursAdresses')->find($adresse['facturation']);
        $livraison=$em->getRepository('EcommerceEcommerceBundle:UtilisateursAdresses')->find($adresse['livraison']);
        $produits=$em->getRepository('EcommerceEcommerceBundle:Produits')->findArray(array_keys($panier));
        */
         
      return $this->render('EcommerceEcommerceBundle:Default:validation.html.twig',array('commande'=>$commande)); 

        
    }
}
?>
