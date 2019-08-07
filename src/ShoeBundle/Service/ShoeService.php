<?php
/**
 * Created by PhpStorm.
 * User: badar
 * Date: 06/08/19
 * Time: 22:13
 */

namespace ShoeBundle\Service;

use Doctrine\ORM\EntityManagerInterface;;
use ShoeBundle\Entity\Product as product;

class ShoeService
{
    protected $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function getProduct($id)
    {
        return $this->em->getRepository('ShoeBundle:Product')->find($id);
    }

    public function getSizes($id)
    {
        return $this->em->getRepository('ShoeBundle:Size')->findBy(['sizes' => $id]);
    }


    public function getProducts()
    {
        return $this->em->getRepository('ShoeBundle:Product')->findAll();
    }


    public function getImagesForSingleProduct($id)
    {
        return $this->em->getRepository('ShoeBundle:Image')->findBy(['images' => $id]);
    }

}