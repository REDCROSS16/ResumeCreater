<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShowFormsAction extends AbstractController
{
    #[Route('/', name: 'default')]
    public function __invoke(): Response
    {
            return $this->render('login/main.html.twig', [
                'loginActionUrl'    => $this->generateUrl('login'),
                'registerActionUrl' => $this->generateUrl('register')
        ]);
    }
}