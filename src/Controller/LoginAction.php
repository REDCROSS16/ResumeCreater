<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\LoginFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginAction extends AbstractController
{
    #[Route('/login', name: 'login')]
    public function __invoke(Request $request): Response
    {
        $user = new User();
        $form = $this->createForm(LoginFormType::class, $user);

        $form->handleRequest($request);
        if ($form->isValid() && $form->isSubmitted()) {
            return $this->redirect('home');
        }

        return $this->redirect('/');
    }
}
