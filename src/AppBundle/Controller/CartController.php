<?php

/*
    This is cart controller class to control all cart bussiness like:
    Add some product to some user car
    Remove product from cart
    Edit the cart by increment or decrement products quantity
    And Finally clear specifice user cart

    Class Doc:

    >>> Adding Methodology:
       To add a new item to cart, check if there's user logged in or not if there's user logged in so get  user and store it in [ '$user' Var ] ohterwise just redirect user to login view.

       we have two cases:  if there's cart for this user or there's one

       First Case:  [ If User doesn't have any cart ] :

             Get user then get an object from Cart --> Entity
             ans assign it to $cart --> object
             then set its owner using setUser() method
             then get a product which has the passed id to method, then put cart total price be defualt
             to selected product price then presist the $cart object and update database
             At the end create shipping object to store the created cart items to it
             and set its quantity by defualt ==> 1, product to seleted one and finally cart which created

       Second Case:  [ If User have a cart we just add new item to it and update it ]
             Just select this user cart from Cart table and update its total price by adding to it
             new item price and then the new item to shipping table

    >>> View Methodology:

        View cart data for specific user just get current user
        then get its cart id from cart table and finally go to shipping table
        and select all products and view it in table view in view cart twig

    >>> Delete Methodology:

        To remove some item from cart items by passing to [ removeAction($productId, $cartId) ]
        product and cart id to remove specific itemby going to database table and remove it from shipping table using [ AppBundle:Shipping Entity ] and doctrin to do this

    >>> Edit Methodology:

        Just edit the quantity for each item in shipping database 
        by read new quantity from user and then update it in database
        by selecting wanted item using its cart and product id and then
        edit its quantity to the new one and then add its price to the cart total price

    >>> Clear Methodology:

        This the last one and its clear all cart products and flush datbase
        by selecting all cart products and loop on them and delete them one by one

*/

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Product;
use AppBundle\Entity\Cart;
use AppBundle\Entity\Shipping;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CartController extends Controller
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

    /**
   * @Route("/cart", name="view cart")
   */
    public function showAction()
    {
        # Get object from doctrine manager
        $em = $this->getDoctrine()->getManager();
        # Get logged user then get his ['id']
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        /** Check IF user have exist cart  **/
        # select cart from database where user id equal to cureent logged user using [ findByUser() ]
        $user_cart = $this->getDoctrine()
            ->getRepository('AppBundle:Cart')
            ->findByUser($user);

       if ( $user_cart )
       {
            # Then select all user cart products to display it to user
            $user_products = $this->getDoctrine()
                ->getRepository('AppBundle:Shipping')
                ->findBy( array('cart' => $user_cart[0]->getId()) );
            # pass selected products to the twig page to show them
           return $this->render('cart/show.html.twig', array(
              'products'  => $user_products,
              'cart_data' => $user_cart[0],   
          ));
        }
       //return new Response(''. $user_products[0]->getProduct()->getPrice() );

       # pass selected products to the twig page to show them
         return $this->render('cart/show.html.twig');
    }

   /**
   * @Route("/cart/addTo/{productId}", name="add_to_cart")
   */
   public function addAction($productId)
   {

      # First of all check if user logged in or not by using FOSUSERBUNDLE
      #    authorization_checker
      # if user logged in so add the selected product to his cart and redirect user to products page
      # else redirect user to login page to login first or create a new account
      $securityContext = $this->container->get('security.authorization_checker');

      # If user logged in
      if ( $securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED') )
      {
          # Get object from doctrine manager
          $em = $this->getDoctrine()->getManager();
          # Get logged user then get his ['id']
          $user = $this->container->get('security.token_storage')->getToken()->getUser();

          # for any case wewill need to select product so select it first
          # select specific product which have passed id using ['find(passedID)']
          $product = $this->getDoctrine()
                        ->getRepository('AppBundle:Product')
                        ->find($productId);

          /** Check IF user have exist cart  **/
          # select cart from database where user id equal to cureent logged user using [ findByUser() ]
          $exsit_cart = $this->getDoctrine()
              ->getRepository('AppBundle:Cart')
              ->findByUser($user);

            # if there's no cart to this user create a new one
            if ( !$exsit_cart )
            {
                # defince cart object
                $cart = new Cart();
                # set user whose own this cart
                $cart->setUser($user);
                
                # set initail total price for cart which equal to product price
                $cart->setTotalPrice($product->getPrice());

                # persist all cart data to can use it in create shipping object
                $em->persist($cart);
                # flush it
                $em->flush();

                # create shipping object
                $ship = new Shipping();
                # set all its data quantity initail equal to 1 and passed product and cart created
                $ship->setQuantity(1);
                $ship->setProduct($product);
                $ship->setCart($cart);

                # persist it and flush doctrine to save it
                $em->persist($ship);
                $em->flush();
            }
            # if user have one so just add new item price to cart price and add it to shipping
            else
            {
                # Get cart from retrived object
                $cart = $exsit_cart[0];
                
                # set initail total price for cart which equal to product price
                $cart->setTotalPrice($cart->getTotalPrice() + $product->getPrice());

                # persist all cart data to can use it in create shipping object
                $em->persist($cart);
                # flush it
                $em->flush();

                # create shipping object
                $ship = new Shipping();
                # set all its data quantity initail equal to 1 and passed product and cart created
                $ship->setQuantity(1);
                $ship->setProduct($product);
                $ship->setCart($cart);

                # persist it and flush doctrine to save it
                $em->persist($ship);
                $em->flush();
            }

          //return new Response('user id  '.$product->getId());
          return $this->redirect($this->generateUrl('show products'));
      }
      # if user not logged in yet
      else 
      {
          # go to adding product form
          return $this->redirect($this->generateUrl('fos_user_security_login'));
      }
   }

   /**
   * @Route("/cart/remove/{itemProduct}/{itemCart}", name="remove item")
   */
   public function removeActione($itemProduct, $itemCart)
   {
      # get an object from doctrine db and get Shipping Entity to work on it
      $em = $this->getDoctrine()->getManager();
      $repository = $em->getRepository('AppBundle:Shipping');

      # select wanted item from shipping table to delete it
      $ship = $repository->findOneBy(array('product' => $itemProduct, 'cart' => $itemCart));

      # Calculate the new total price for cart by subtract deleted item price from total one
       $final_price = $ship->getCart()->getTotalPrice() - ($ship->getProduct()->getPrice() * $ship->getQuantity());

       # update the total price of cart
       $ship->getCart()->setTotalPrice($final_price); 

       # Remove item from db
      $em->remove($ship);
      $em->flush();

      return $this->redirect($this->generateUrl('view cart'));
   }

   /**
   * @Route("/cart/edit/{itemProduct}/{itemCart}", name="edit item")
   */
   public function editActione(Request $request, $itemProduct, $itemCart)
   {
      # in the start check if user edit field and click on button
      if ( $request->getMethod() === 'POST' )
      {
          # read data from quantity field
          $new_quantity =$request->request->get('quantity');

          # get oject from doctrine manager to mange operation
          $em = $this->getDoctrine()->getManager();
          $repository = $em->getRepository('AppBundle:Shipping');

          # select wanted item from shipping table to edit it
          $ship = $repository->findOneBy(array('product' => $itemProduct, 'cart' => $itemCart));

        # check if new quantity less than old one so subtract total price
          # otherwise, add to it
         if( $ship->getQuantity() < $new_quantity )
         {
            # edit selected item quantity
            $ship->setQuantity($new_quantity);

            # Calculate the new total price for cart by sum added item price to total one
            $final_price = $ship->getCart()->getTotalPrice() + $ship->getProduct()->getPrice();

            # update the total price of cart
            $ship->getCart()->setTotalPrice($final_price); 
          }
          elseif( $ship->getQuantity() > $new_quantity )
          {
            # edit selected item quantity
            $ship->setQuantity($new_quantity);

            # Calculate the new total price for cart by sum added item price to total one
            $final_price = $ship->getCart()->getTotalPrice() - $ship->getProduct()->getPrice();

            # update the total price of cart
            $ship->getCart()->setTotalPrice($final_price); 
          }

          # flush operations to update database
          $em->flush();
      }
      //return new Response(''. $new_quantity );
      return $this->redirect($this->generateUrl('view cart'));
   }

    /**
   * @Route("/cart/clear/{cart}", name="clear cart")
   */
   public function clearActione($cart)
   {
      # get an object from doctrine db and get Shipping Entity to work on it
      $em = $this->getDoctrine()->getManager();
      $repository = $em->getRepository('AppBundle:Shipping');

      # select wanted item from shipping table to delete it
      $ship = $repository->findBy(array('cart' => $cart));

      # Fetch all them using foeach loop and delete them
      foreach ($ship as $one_prod)
      {
           # Remove item from db
          $em->remove($one_prod);
          $em->flush();     
      }

      $cart_repository = $em->getRepository('AppBundle:Cart');
      $one_cart = $cart_repository->findOneById($cart);

      $em->remove($one_cart);
      $em->flush();


      return $this->redirect($this->generateUrl('view cart'));
   }


}
