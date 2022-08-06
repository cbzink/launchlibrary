<?php

namespace cbzink\LaunchLibrary\Api;

use cbzink\LaunchLibrary\PaginatedCollection;
use cbzink\LaunchLibrary\Resources\DockingEvent as DockingEventResource;

class DockingEvent extends AbstractApi
{
    /**
     * Searches for docking events.
     */
    public function search(array $params = []): PaginatedCollection
    {
        return new PaginatedCollection($this->client->get('docking_event', $params), DockingEventResource::class, $this->client);
    }

    /**
     * Retrieves a single docking event.
     */
    public function fetch(int $id): DockingEventResource
    {
        return new DockingEventResource($this->client->get("docking_event/{$id}"));
    }
}
