<?php

namespace App\Controller;

use App\Form\RegisterFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShowFormsAction extends AbstractController
{
    #[Route('/', name: 'default')]
    public function __invoke(): Response
    {
        $registerForm = $this->createForm(RegisterFormType::class);

            return $this->render('login/main.html.twig',
                    [
                'registerForm'      =>   $registerForm,
                'loginActionUrl'    => $this->generateUrl('login'),
                'registerActionUrl' => $this->generateUrl('register')
        ]);
    }
}