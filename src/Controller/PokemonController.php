<?php

namespace App\Controller;

use App\Service\CallApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PokemonController extends AbstractController
{
    /**
     * @Route("/pokemon", name="pokemon")
     */
    public function index(CallApiService $callApiService): Response
    {
        dd($callApiService->getPokemonData());
        return $this->render('pokemon/index.html.twig', [
            'controller_name' => 'PokemonController',
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home() {
        return $this->render('pokemon/home.html.twig', [
            'title' => "Welcome here",
            'age' => 31
        ]);
    }

    /**
     * @Route("/pokemon/12", name="pokemon_show")
     */
    public function show() {
        return $this->render('pokemon/show.html.twig');
    }
}
