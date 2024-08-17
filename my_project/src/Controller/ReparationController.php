<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReparationController extends AbstractController
{
    #[Route('/reparations', name: 'reparation_index')]
    public function index(): Response
    {
        return $this->render('reparation/index.html.twig', [
            'reparations' => [], // Exemple de données, remplacez par votre logique
        ]);
    }
}
