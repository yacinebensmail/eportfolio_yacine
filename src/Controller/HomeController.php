<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'page_title' => 'Accueil',
        ]);
    }

    #[Route('/projects', name: 'app_projects')]
    public function projects(): Response
    {
        return $this->render('home/projects.html.twig', [
            'page_title' => 'Mes Projets',
        ]);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('home/contact.html.twig', [
            'page_title' => 'Contact',
        ]);
    }
}
