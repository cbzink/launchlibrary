<?php

namespace cbzink\LaunchLibrary\Api;

use cbzink\LaunchLibrary\PaginatedCollection;
use cbzink\LaunchLibrary\Resources\Astronaut as AstronautResource;

class Astronaut extends AbstractApi
{
    /**
     * Searches for astronauts.
     */
    public function search(array $params = []): PaginatedCollection
    {
        return new PaginatedCollection($this->client->get('astronaut', $params), AstronautResource::class, $this->client);
    }

    /**
     * Retrieves a single astronaut.
     */
    public function fetch(int $id): AstronautResource
    {
        return new AstronautResource($this->client->get("astronaut/{$id}"));
    }
}
