<?php
/**
 * Created by PhpStorm.
 * User: Serge
 * Date: 16.04.2019
 * Time: 17:54
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Article;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Templates\ProductTemplate;
use App\Templates\ArticleTemplate;

class AboutController extends AbstractController
{
    /**
     * @Route("/about", name="aboutPage")
     */
    public function controller()
    {
        return $this->render('main.html.twig');
    }
}