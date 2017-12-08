<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class IndexController
 *
 * @package App\Controller
 */
class IndexController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('index.html.twig');
    }
}
