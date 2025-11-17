<?php
// Définit l'espace de nom du fichier (son "dossier" logique)
namespace App\Controller;

// On "importe" les outils dont on a besoin
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// C'est la classe qui contient toute la logique de notre portfolio
class PortfolioController extends AbstractController
{
    /**
     * C'est la méthode pour la page d'accueil.
     * #[Route('/', ...)] est un "Attribut" PHP. Il dit à Symfony :
     * "Si quelqu'un visite l'URL '/' (la racine du site), exécute cette fonction."
     * 'name: "app_accueil"' lui donne un nom, qu'on utilise dans Twig avec {{ path('app_accueil') }}
     */
    #[Route('/', name: 'app_accueil')]
    public function accueil(): Response
    {
        /**
         * 'return $this->render(...)' est la commande pour "rendre" un template.
         * Elle prend le fichier Twig, le transforme en HTML, et l'envoie au navigateur.
         * 'portfolio/accueil.html.twig' est le chemin vers notre fichier de template.
         */
        return $this->render('portfolio/accueil.html.twig');
    }

    /**
     * Méthode pour la page "À Propos"
     * L'URL sera '/about'
     * Le nom de la route est 'app_about'
     */
    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        // On rend le template "about.html.twig"
        return $this->render('portfolio/about.html.twig');
    }

    /**
     * Méthode pour la page "CV"
     * L'URL sera '/cv'
     * Le nom de la route est 'app_cv'
     */
    #[Route('/cv', name: 'app_cv')]
    public function cv(): Response
    {
        // On rend le template "cv.html.twig"
        return $this->render('portfolio/cv.html.twig');
    }

    /**
     * Méthode pour la page "E-Portfolio"
     * L'URL sera '/portfolio'
     * Le nom de la route est 'app_portfolio'
     */
    #[Route('/portfolio', name: 'app_portfolio')]
    public function portfolio(): Response
    {
        // On rend le template "portfolio.html.twig"
        return $this->render('portfolio/portfolio.html.twig');
    }
}