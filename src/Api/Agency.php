<?php

namespace cbzink\LaunchLibrary\Api;

use cbzink\LaunchLibrary\PaginatedCollection;
use cbzink\LaunchLibrary\Resources\Agency as AgencyResource;

class Agency extends AbstractApi
{
    /**
     * Searches for agencies.
     */
    public function search(array $params = []): PaginatedCollection
    {
        return new PaginatedCollection($this->client->get('agencies', $params), AgencyResource::class, $this->client);
    }

    /**
     * Retrieves a single agency.
     */
    public function fetch(int $id): AgencyResource
    {
        return new AgencyResource($this->client->get("agencies/{$id}"));
    }
}
