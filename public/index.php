<?php

require_once __DIR__ . '/../vendor/autoload.php';

$pokedex = new NonO\BasicPokeapi\Pokedex();
header('Content-Type: application/json');

try {
    echo json_encode($pokedex->getPokemonsById(684)->toArray());
} catch (\Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface $e) {
}