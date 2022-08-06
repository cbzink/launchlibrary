<?php

namespace cbzink\LaunchLibrary\Api\Event;

use cbzink\LaunchLibrary\Api\AbstractApi;
use cbzink\LaunchLibrary\Api\Launch\Previous;
use cbzink\LaunchLibrary\Api\Launch\Upcoming;
use cbzink\LaunchLibrary\PaginatedCollection;
use cbzink\LaunchLibrary\Exceptions\UnknownApiException;
use cbzink\LaunchLibrary\Resources\Events as EventResource;

/**
 * @method Previous previous()
 * @method Upcoming upcoming()
 */
class Event extends AbstractApi
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
     * Searches for events.
     */
    public function search(array $params = []): PaginatedCollection
    {
        return new PaginatedCollection($this->client->get('event', $params), EventResource::class, $this->client);
    }

    /**
     * Retrieves a single event.
     *
     * @param mixed $id
     */
    public function fetch($id): EventResource
    {
        return new EventResource($this->client->get("event/{$id}"));
    }
}
