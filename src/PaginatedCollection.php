<?php

namespace cbzink\LaunchLibrary;

use cbzink\LaunchLibrary\Exceptions\PaginationException;

class PaginatedCollection
{
    /**
     * Total records.
     *
     * @var int
     */
    public $count;

    /**
     * Next page URL.
     *
     * @var null|string
     */
    public $next;

    /**
     * Previous page URL.
     *
     * @var null|string
     */
    public $previous;

    /**
     * Results.
     *
     * @var array
     */
    public $results;

    /**
     * LL2 client instance.
     *
     * @var LL2
     */
    private $client;

    /**
     * The class for the associated records.
     *
     * @var string
     */
    private $recordsClass;

    /**
     * Creates a new collection.
     */
    public function __construct(array $response, string $class, LL2 $client)
    {
        $this->recordsClass = $class;
        $this->client       = $client;

        $this->count    = $response['count'];
        $this->next     = $response['next'];
        $this->previous = $response['previous'];

        $this->results = array_map(function ($data) use ($class) {
            return new $class($data);
        }, $response['results']);
    }

    /**
     * Returns the next set of results.
     */
    public function next(): PaginatedCollection
    {
        if (empty($this->next)) {
            throw new PaginationException('No more results.');
        }

        return new PaginatedCollection($this->client->get($this->next), $this->recordsClass, $this->client);
    }

    /**
     * Returns the previous set of results.
     */
    public function previous(): PaginatedCollection
    {
        if (empty($this->previous)) {
            throw new PaginationException('No prior results.');
        }

        return new PaginatedCollection($this->client->get($this->previous), $this->recordsClass, $this->client);
    }
}
