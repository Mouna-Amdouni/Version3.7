<?php

namespace App\Controller;

use App\Repository\ActualiteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="indexx")
     */
    public function indexx(ActualiteRepository $actualiteRepository): Response
    {
        return $this->render('admin/main.html.twig', [
            'actualites'=>$actualiteRepository->findAll()
            ,
            'controller_name' => 'IndexController',
        ]);
    }
}
