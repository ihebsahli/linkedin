<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServiceController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function index(): Response
    {
        return $this->render('back/login.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }

     /**
     * @Route("/about", name="app_about")
     */
    public function about(): Response
    {
        return $this->render('temp/about.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }

    /**
     * @Route("/servicee", name="app_servicee")
     */
    public function servicee(): Response
    {
        return $this->render('temp/service.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }

      /**
     * @Route("/", name="app_service")
     */
    public function indexaysha(): Response
    {
        return $this->render('base.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }
}
