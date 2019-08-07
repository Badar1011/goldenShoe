<?php

namespace ShoeBundle\Controller;

use ShoeBundle\Service\ShoeService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    private $shoeService;

    public function __construct(ShoeService $shoeService)
    {
        $this->shoeService = $shoeService;
    }


    public function indexAction()
    {
        $products = $this->shoeService->getProducts();
        return $this->render('ShoeBundle:Shoe:index.html.twig', [
            'products' => $products,
        ]);
    }

    public function productAction($id)
    {
        $product = $this->shoeService->getProduct($id);
        $sizes = $this->shoeService->getSizes($id);
        return $this->render('ShoeBundle:Shoe:product.html.twig', [
            'product' => $product,
            'sizes' => $sizes,
        ]);
    }

    public function returnItemAction()
    {
        return $this->render('ShoeBundle:Shoe:returningItem.html.twig', [
            //
        ]);
    }

    public function trackItemAction()
    {
        return $this->render('ShoeBundle:Shoe:trackItem.html.twig', [
            //
        ]);
    }
}
