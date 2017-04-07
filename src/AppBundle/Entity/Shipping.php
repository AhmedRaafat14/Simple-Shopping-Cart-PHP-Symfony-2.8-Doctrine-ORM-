<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

#use AppBundle\Entity\User;
#use AppBundle\Entity\Product;

/**
 * @ORM\Entity
 * @ORM\Table(name="shipping")
 */
class Shipping
{
    
   /**
     * @ORM\Column(type="integer")
     */
    private $quantity;

    /** 
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="cartProducts") 
     */
    protected $product;

    /** 
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="Cart", inversedBy="cartProducts") 
     */
    protected $cart;
    

    /**
     * Set product
     *
     * @param \AppBundle\Entity\Product $product
     * @return Shipping
     */
    public function setProduct(\AppBundle\Entity\Product $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \AppBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set cart
     *
     * @param \AppBundle\Entity\Cart $cart
     * @return Shipping
     */
    public function setCart(\AppBundle\Entity\Cart $cart)
    {
        $this->cart = $cart;

        return $this;
    }

    /**
     * Get cart
     *
     * @return \AppBundle\Entity\Cart 
     */
    public function getCart()
    {
        return $this->cart;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return Shipping
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
}
