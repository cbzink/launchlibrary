<?php

namespace cbzink\LaunchLibrary\Api\Launch;

use cbzink\LaunchLibrary\Api\AbstractApi;
use cbzink\LaunchLibrary\PaginatedCollection;
use cbzink\LaunchLibrary\Resources\Launch as LaunchResource;

class Previous extends AbstractApi
{
    /**
     * Searches for previous launches.
     */
    public function search(array $params = []): PaginatedCollection
    {
        return new PaginatedCollection($this->client->get('launch/previous', $params), LaunchResource::class, $this->client);
    }

    /**
     * Retrieves a single previous launch.
     */
    public function fetch(string $id): LaunchResource
    {
        return new LaunchResource($this->client->get("launch/previous/{$id}"));
    }
}
