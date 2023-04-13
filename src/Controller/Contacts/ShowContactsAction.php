<?php

namespace App\Controller\Contacts;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/contacts', name: 'contacts')]
class ShowContactsAction extends AbstractController
{
    public function __invoke()
    {
        $title = 'Contacts';
        return $this->render('contacts/main.html.twig', [
            'title' => $title,
        ]);
    }
}