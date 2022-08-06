<?php

namespace cbzink\LaunchLibrary\Api\Launch;

use cbzink\LaunchLibrary\Api\AbstractApi;
use cbzink\LaunchLibrary\PaginatedCollection;
use cbzink\LaunchLibrary\Resources\Launch as LaunchResource;

class Upcoming extends AbstractApi
{
    /**
     * Searches for upcoming launches.
     */
    public function search(array $params = []): PaginatedCollection
    {
        return new PaginatedCollection($this->client->get('launch/upcoming', $params), LaunchResource::class, $this->client);
    }

    /**
     * Retrieves a single upcoming launch.
     */
    public function fetch(string $id): LaunchResource
    {
        return new LaunchResource($this->client->get("launch/upcoming/{$id}"));
    }
}
