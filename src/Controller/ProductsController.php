<?php
/**
 * Created by PhpStorm.
 * User: Serge
 * Date: 25.01.2019
 * Time: 18:03
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Article;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Templates\ProductTemplate;

class ProductsController extends AbstractController
{
    /**
     * @Route("/products", name="productsPage")
     */
    public function controller()
    {
        $products = [new ProductTemplate(),new ProductTemplate(),new ProductTemplate()];
        return $this->render('products.html.twig', [
            'products' => $products,
        ]);
    }
}