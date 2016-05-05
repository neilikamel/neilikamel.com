<?php
namespace Ecommerce\EcommerceBundle\Services;
use Symfony\Component\Security\Core\SecurityContextInterface;
class GetReference 
{
    public function __construct($securityContext, $entityManager)
    {
        $this->securityContext = $securityContext;
        $this->em = $entityManager;
    }
    
    public function reference()
    {
        $reference = $this->em->getRepository('EcommerceEcommerceBundle:Commandes')->findOneBy(array('valider' => 0), array('id' => 'DESC'),1,1);
       // var_dump($reference);die();
        if (!$reference)
            return 1;
        else 
            return $reference->getReference() +1;
    }
}