<?php

/*
/ This { [ ProductController ] }  which used to manipulate all products data
/   View all products using ['/products  ROUTE'] and ['productAction() METHOD']
/  View just one product using ['/product/{productId}  ROUTE'] passing an id with it and ['showAction() METHOD']
*/

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Product;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class ProductController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));
    }

    /*
    / This is a product method which select all products from database ['Product -- Entity']
    /   and then sent them in array to ['all.html.twig'] which view all fetched products 
    /   and print them to user
    */
    /**
     * @Route("/products", name="show products")
     */
     public function productAction()
     {
         # select all products from ['Product'] using ['findAll()'] method which fetch
         #   them all.
         $products = $this->getDoctrine()
                       ->getRepository('AppBundle:Product')
                       ->findAll();


         # if there's no selected products print an exception
         if ( !$products )
         {
             throw $this->createNotFoundException(
                 'No product found '
             );
         }

         # pass selected products to the twig page to show them
         return $this->render('product/all.html.twig', array(
            'products' => $products,
        ));
     }
    

    /*
    / This is a method to show just one slected product depend on selected one ['id']
    /     which sent to this method in ['productId'] VAR and then go to ['Product'] table
    /      and select the whole product data whose have this recived id then sent 
    /       selected data to ['one.html.twig'] to show it.
    */
   /**
    * @Route("/product/{productId}", name="show product")
    */
    public function showAction($productId)
    {
        # select specific product which have passed id using ['find(passedID)']
        $product = $this->getDoctrine()
                      ->getRepository('AppBundle:Product')
                      ->find($productId);


        # if there's no product with passed id
        if ( !$product )
        {
            throw $this->createNotFoundException(
                'No product found for id '.$productId
            );
        }

        # pass it to show one product view to view it
        return $this->render('product/one.html.twig', array(
           'product' => $product,
       ));
    }

}
