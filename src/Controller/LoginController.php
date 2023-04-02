<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\LoginFormType;
use App\Form\RegisterFormType;
use Symfony\Component\HttpFoundation\Request
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function index(Request $request): Response
    {
        $user = new User();
        // login form
        $loginForm = $this->createForm(LoginFormType::class, $user);

        // register form
        $registerForm = $this->createForm(RegisterFormType::class, $user);

        return $this->render('login/main.html.twig');
    }
}
