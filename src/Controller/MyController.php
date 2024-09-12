<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MyController extends AbstractController
{
    #[Route('/', name: 'CoucouSymfonyG2')]
    public function index(): Response
    {
        return $this->render('my/index.html.twig', [
            'Title' => 'Coucou',
        ]);
    }
}
