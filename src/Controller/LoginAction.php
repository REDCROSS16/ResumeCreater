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
        $loginForm = $this->createForm(LoginFormType::class, $user);
        $data = $request->query->all();
        $loginForm->submit($data);

        dd($request);
        if ($loginForm->isValid() && $loginForm->isSubmitted()) {
            dd($user);
        }

        dd(1);
    }
}
