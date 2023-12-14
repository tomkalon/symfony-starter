<?php

namespace App\Main\FrontPage\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WebFrontPageController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('Main/FrontPage/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
