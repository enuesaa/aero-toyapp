<?php

declare(strict_types=1);

namespace App\Services\Nasa;

/**
 * Asteroids - NeoWs を見ようかな
 * たぶん日単位でデータが変わるので、面白そう？
 *
 * @see https://api.nasa.gov/neo/rest/v1/feed?api_key=DEMO_KEY
 */
class Nasa
{
    protected ApiClient $client;

    public function __construct(ApiClient $client)
    {
        $this->client = $client;
    }

    public function getAstronomyPictureOfTheDay(): array
    {
        $res = $this->client->get('/planetary/apod');
        $resbody = json_decode($res->getBody()->getContents(), associative: true);

        return $resbody;
    }
}
