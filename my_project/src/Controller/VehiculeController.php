<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VehiculeController extends AbstractController
{
    #[Route('/vehicules', name: 'vehicule_index')]
    public function index(): Response
    {
        return $this->render('vehicule/index.html.twig', [
            'vehicules' => [], // Exemple de données, remplacez par votre logique
        ]);
    }
}
