<?php

namespace cbzink\LaunchLibrary\Api\Spacecraft;

use cbzink\LaunchLibrary\Api\AbstractApi;
use cbzink\LaunchLibrary\PaginatedCollection;
use cbzink\LaunchLibrary\Resources\SpacecraftFlight as SpacecraftFlightResource;

class Flight extends AbstractApi
{
    /**
     * Searches for spacecraft flights.
     */
    public function search(array $params = []): PaginatedCollection
    {
        return new PaginatedCollection($this->client->get('spacecraft/flight', $params), SpacecraftFlightResource::class, $this->client);
    }

    /**
     * Retrieves a single spacecraft flight.
     */
    public function fetch(string $id): SpacecraftFlightResource
    {
        return new SpacecraftFlightResource($this->client->get("spacecraft/flight/{$id}"));
    }
}
