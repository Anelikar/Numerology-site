<?php
/**
 * Created by PhpStorm.
 * User: Serge
 * Date: 25.01.2019
 * Time: 18:02
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Article;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Templates\ProductTemplate;

class ArticlesController extends AbstractController
{
    /**
     * @Route("/articles", name="articlesPage")
     */
    public function controller()
    {
        $products = [new ProductTemplate(),new ProductTemplate(),new ProductTemplate()];
        return $this->render('articles.html.twig', [
            'products' => $products,
        ]);
    }
}