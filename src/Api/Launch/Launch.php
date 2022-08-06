<?php

namespace cbzink\LaunchLibrary\Api\Launch;

use cbzink\LaunchLibrary\Api\AbstractApi;
use cbzink\LaunchLibrary\PaginatedCollection;
use cbzink\LaunchLibrary\Exceptions\UnknownApiException;
use cbzink\LaunchLibrary\Resources\Launch as LaunchResource;

/**
 * @method Previous previous()
 * @method Upcoming upcoming()
 */
class Launch extends AbstractApi
{
    /**
     * Calls child APIs.
     */
    public function __call(string $name, array $args): AbstractApi
    {
        switch ($name) {
            case 'previous':
                $api = new Previous($this->client);

                break;

            case 'upcoming':
                $api = new Upcoming($this->client);

                break;

            default:
                throw new UnknownApiException($name);
        }

        return $api;
    }

    /**
     * Searches for launches.
     */
    public function search(array $params = []): PaginatedCollection
    {
        return new PaginatedCollection($this->client->get('launch', $params), LaunchResource::class, $this->client);
    }

    /**
     * Retrieves a single launch.
     */
    public function fetch(string $id): LaunchResource
    {
        return new LaunchResource($this->client->get("launch/{$id}"));
    }
}
