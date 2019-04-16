<?php
/**
 * Created by PhpStorm.
 * User: Serge
 * Date: 16.04.2019
 * Time: 17:53
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Article;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Templates\ProductTemplate;
use App\Templates\ArticleTemplate;

class CalculationController extends AbstractController
{
    /**
     * @Route("/calculation", name="calculationPage")
     */
    public function controller()
    {
        return $this->render('main.html.twig');
    }
}