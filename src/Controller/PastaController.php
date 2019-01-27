<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PastaController extends AbstractController
{
    /**
     * @Route("/", name="pasta")
     */
    public function index()
    {
        return $this->render('pasta/index.html.twig', [
            'user' => "UserName",
        ]);
    }
}
