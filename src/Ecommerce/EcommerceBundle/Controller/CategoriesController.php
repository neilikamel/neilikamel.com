<?php

namespace Ecommerce\EcommerceBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ecommerce\EcommerceBundle\Entity\Categories;

/**
 * Categories controller.
 *
 */
class CategoriesController extends Controller
{

    /**
     * Lists all Categories entities.
     *
     */
    public function menuAction()
    {
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('EcommerceEcommerceBundle:Categories')->findAll();

        return $this->render('EcommerceEcommerceBundle:Default:menucat.html.twig', array(
            'categories' => $categories,
        ));
    }
    /**
     * Creates a new Categories entity.
     *
     */
   
}
