<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

#[Route('/register', name: 'register')]
class RegisterAction extends AbstractController
{
    public function __invoke(Request $request)
    {
        $data = $request->request->all();
    }
}