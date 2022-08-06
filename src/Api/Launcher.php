<?php

namespace cbzink\LaunchLibrary\Api;

use cbzink\LaunchLibrary\PaginatedCollection;
use cbzink\LaunchLibrary\Resources\Launcher as LauncherResource;

class Launcher extends AbstractApi
{
    /**
     * Searches for launchers.
     */
    public function search(array $params = []): PaginatedCollection
    {
        return new PaginatedCollection($this->client->get('launcher', $params), LauncherResource::class, $this->client);
    }

    /**
     * Retrieves a single launcher.
     */
    public function fetch(int $id): LauncherResource
    {
        return new LauncherResource($this->client->get("launcher/{$id}"));
    }
}
