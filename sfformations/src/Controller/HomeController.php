<?php

namespace App\Controller;

use App\Repository\FormationsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(FormationsRepository $formationRepository): Response
    {
        $formations = $formationRepository->findBy([], ['duree' => 'ASC']);

        return $this->render('home/index.html.twig', [
            'formations' => $formations,
        ]);

    }
}
