<?php
/**
 * Created by PhpStorm.
 * User: Serge
 * Date: 05.12.2018
 * Time: 15:21
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Article;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Templates\ProductTemplate;
use App\Templates\ArticleTemplate;

class MainController extends AbstractController
{
     /**
      * @Route("/", name="mainPage")
      */
    public function controller()
    {
        $products = [new ProductTemplate(),new ProductTemplate(),new ProductTemplate(),new ProductTemplate()];
        $articles = [new ArticleTemplate(),new ArticleTemplate(),new ArticleTemplate(),new ArticleTemplate(),new ArticleTemplate(),new ArticleTemplate(),new ArticleTemplate(),new ArticleTemplate()];
        return $this->render('main.html.twig', [
            'products' => $products,
            'articles' => $articles
        ]);
    }
}