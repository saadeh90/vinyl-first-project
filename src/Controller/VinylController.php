<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController
{
    #[Route('/vinyl', name: 'app_vinyl_homepage')]
    public function homepage()
    {
        return new Response('Welcome to Vinyl');
    }

    #[Route('/browse/{slug}', name: 'app_vinyl_browse')]
    public function browse($slug)
    {
        $title = $slug ? u(str_replace('-', ' ', $slug))->title(true) : null;

        return

    }
}