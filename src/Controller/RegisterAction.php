<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

#[Route('/register', name: 'register', methods: ['POST'])]
class RegisterAction extends AbstractController
{
    public function __invoke(Request $request)
    {
        $data = $request->request->all();
        dd($request);
        $user = new User();
        $user->setName();
    }
}