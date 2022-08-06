<?php

namespace cbzink\LaunchLibrary\Api;

use cbzink\LaunchLibrary\PaginatedCollection;
use cbzink\LaunchLibrary\Resources\Expedition as ExpeditionResource;

class Expedition extends AbstractApi
{
    /**
     * Searches for expeditions.
     */
    public function search(array $params = []): PaginatedCollection
    {
        return new PaginatedCollection($this->client->get('expedition', $params), ExpeditionResource::class, $this->client);
    }

    /**
     * Retrieves a single expedition.
     */
    public function fetch(int $id): ExpeditionResource
    {
        return new ExpeditionResource($this->client->get("expedition/{$id}"));
    }
}
