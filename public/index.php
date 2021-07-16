<?php

require_once __DIR__ . '/../vendor/autoload.php';

$pokedex = new NonO\BasicPokeapi\Pokedex();
header('Content-Type: application/json');

try {
    echo json_encode($pokedex->getAllPokemons());
} catch (\Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface $e) {
}