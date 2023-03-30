<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class mainController extends AbstractController
{

    #[Route('/', name: 'app_homepage')]
    public function homepage(): Response
    {
        return new Response('Test text');
    }
}
