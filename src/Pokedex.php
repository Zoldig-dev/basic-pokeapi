<?php


namespace NonO\BasicPokeapi;


use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class Pokedex
{
    private HttpClientInterface $client;

    /**
     * Pokedex constructor.
     */
    public function __construct()
    {
        $this->client = HttpClient::createForBaseUri('https://pokeapi.co/api/v2/');
    }

    /**
     * @throws TransportExceptionInterface
     */
    public function getPokemonsById(int $id): ?Pokemon
    {

        $response = $this->client->request('GET', 'pokemon/'. $id);

        if (200 !== $response->getStatusCode()) {
            throw new \RuntimeException('Error from Pokeapi.co');
        }

        try {
            $pokeInfo = $response->toArray();
            return new Pokemon(
                $pokeInfo['id'],
                $pokeInfo['name'],
                $pokeInfo['weight'],
                $pokeInfo['base_experience'],
                $pokeInfo['sprites']['front_default'],
            );
        } catch (ClientExceptionInterface |
        TransportExceptionInterface |
        RedirectionExceptionInterface |
        ServerExceptionInterface |
        DecodingExceptionInterface $e) {
            echo $e->getMessage();
            return null;
        }

    }
}