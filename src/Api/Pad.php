<?php

namespace cbzink\LaunchLibrary\Api;

use cbzink\LaunchLibrary\PaginatedCollection;
use cbzink\LaunchLibrary\Resources\Pad as PadResource;

class Pad extends AbstractApi
{
    /**
     * Searches for pads.
     */
    public function search(array $params = []): PaginatedCollection
    {
        return new PaginatedCollection($this->client->get('pad', $params), PadResource::class, $this->client);
    }

    /**
     * Retrieves a single pad.
     */
    public function fetch(int $id): PadResource
    {
        return new PadResource($this->client->get("pad/{$id}"));
    }
}
