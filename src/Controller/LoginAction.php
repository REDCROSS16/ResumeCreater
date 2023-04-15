<?php declare(strict_types=1);

namespace App\Controller;

use App\Entity\User;
use App\Form\LoginFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/login', name: 'login', methods: ['POST', 'GET'])]
class LoginAction extends AbstractController
{
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
