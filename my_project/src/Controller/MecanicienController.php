<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MecanicienController extends AbstractController
{
    #[Route('/mecaniciens', name: 'mecanicien_index')]
    public function index(): Response
    {
        return $this->render('mecanicien/index.html.twig', [
            'mecaniciens' => [], // Exemple de données, remplacez par votre logique
        ]);
    }
}
