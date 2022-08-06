<?php

namespace cbzink\LaunchLibrary\Api\Event;

use cbzink\LaunchLibrary\Api\AbstractApi;
use cbzink\LaunchLibrary\PaginatedCollection;
use cbzink\LaunchLibrary\Resources\Events as EventResource;

class Upcoming extends AbstractApi
{
    /**
     * Searches for upcoming events.
     */
    public function search(array $params = []): PaginatedCollection
    {
        return new PaginatedCollection($this->client->get('event/upcoming', $params), EventResource::class, $this->client);
    }

    /**
     * Retrieves a single upcoming event.
     */
    public function fetch(string $id): EventResource
    {
        return new EventResource($this->client->get("event/upcoming/{$id}"));
    }
}
