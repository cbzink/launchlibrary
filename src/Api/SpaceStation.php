<?php

namespace cbzink\LaunchLibrary\Api;

use cbzink\LaunchLibrary\PaginatedCollection;
use cbzink\LaunchLibrary\Resources\SpaceStation as SpaceStationResource;

class SpaceStation extends AbstractApi
{
    /**
     * Searches for space stations.
     */
    public function search(array $params = []): PaginatedCollection
    {
        return new PaginatedCollection($this->client->get('spacestation', $params), SpaceStationResource::class, $this->client);
    }

    /**
     * Retrieves a single space station.
     */
    public function fetch(int $id): SpaceStationResource
    {
        return new SpaceStationResource($this->client->get("spacestation/{$id}"));
    }
}
