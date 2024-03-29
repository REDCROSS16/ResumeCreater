<?php declare(strict_types=1);

namespace App\Controller\Home;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ShowHomeAction extends AbstractController
{
    #[Route('/home', name: 'home', methods: ['GET'])]
    public function __invoke()
    {
        $title = 'home page';

        return $this->render('home/main.html.twig', [
            'title' => $title,
        ]);
    }
}
