<?php

namespace cbzink\LaunchLibrary\Api;

use cbzink\LaunchLibrary\PaginatedCollection;
use cbzink\LaunchLibrary\Resources\Location as LocationResource;

class Location extends AbstractApi
{
    /**
     * Searches for locations.
     */
    public function search(array $params = []): PaginatedCollection
    {
        return new PaginatedCollection($this->client->get('location', $params), LocationResource::class, $this->client);
    }

    /**
     * Retrieves a single location.
     */
    public function fetch(int $id): LocationResource
    {
        return new LocationResource($this->client->get("location/{$id}"));
    }
}
