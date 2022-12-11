<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudioAfController extends AbstractController
{
    /**
     * @Route("/", name="app_studio_af")
     */
    public function index(): Response
    {
        return $this->render('studio_af/index.html.twig', [
            'controller_name' => 'StudioAfController',
        ]);
    }
    
}
