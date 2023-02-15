<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class WelcomeController extends AbstractController
{
    /**
     * @Route("/welcome")
    */
    public function homepage() : Response
     {
        return $this->render('welcome.html.twig',[ 'day' => date('l')]);
    }
}