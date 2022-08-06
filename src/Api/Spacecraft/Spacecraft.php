<?php

namespace cbzink\LaunchLibrary\Api\Spacecraft;

use cbzink\LaunchLibrary\Api\AbstractApi;
use cbzink\LaunchLibrary\PaginatedCollection;
use cbzink\LaunchLibrary\Exceptions\UnknownApiException;
use cbzink\LaunchLibrary\Resources\Spacecraft as SpacecraftResource;

/**
 * @method Flight flights()
 */
class Spacecraft extends AbstractApi
{
    /**
     * Calls child APIs.
     */
    public function __call(string $name, array $args): AbstractApi
    {
        switch ($name) {
            case 'flights':
                $api = new Flight($this->client);

                break;

            default:
                throw new UnknownApiException($name);
        }

        return $api;
    }

    /**
     * Searches for spacecraft.
     */
    public function search(array $params = []): PaginatedCollection
    {
        return new PaginatedCollection($this->client->get('spacecraft', $params), SpacecraftResource::class, $this->client);
    }

    /**
     * Retrieves a single spacecraft.
     */
    public function fetch(string $id): SpacecraftResource
    {
        return new SpacecraftResource($this->client->get("spacecraft/{$id}"));
    }
}
