<?php

namespace cbzink\LaunchLibrary;

use Exception;
use GuzzleHttp\Psr7\Response;
use cbzink\LaunchLibrary\Exceptions\NotFoundException;
use cbzink\LaunchLibrary\Exceptions\RateLimitException;
use cbzink\LaunchLibrary\Exceptions\InvalidTokenException;

trait MakesHttpRequests
{
    /**
     * Paination limit.
     */
    public $limit = 10;

    /**
     * Performs a GET request to the LL2 API.
     *
     * @param null|array $params
     *
     * @return mixed
     */
    public function get(string $uri, array $params = [])
    {
        return $this->request('GET', $uri, $params);
    }

    /**
     * Returns the pagination limit
     */
    public function getPaginationLimit(): int
    {
        return $this->limit;
    }

    /**
     * Sets the pagination limit
     */
    public function setPaginationLimit(int $limit)
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * Performs an HTTP request to the LL2 API.
     *
     * @return mixed
     */
    protected function request(string $method, string $uri, array $params = [])
    {
        $payload = [];

        $params['limit'] = $this->limit;

        $response = $this->guzzle->request($method, $uri, [
            'query' => $params,
        ]);

        $statusCode = $response->getStatusCode();

        if (stripos($statusCode, '2') !== 0) {
            return $this->handleRequestError($response);
        }

        $responseBody = (string) $response->getBody();

        return json_decode($responseBody, true) ?: $responseBody;
    }

    /**
     * Handles request errors.
     *
     * @throws Exception
     * @throws NotFoundException
     */
    protected function handleRequestError(Response $response): void
    {
        if ($response->getStatusCode() === 401) {
            throw new InvalidTokenException();
        }

        if ($response->getStatusCode() === 429) {
            $body = json_decode((string) $response->getBody(), true);

            throw new RateLimitException($body['detail']);
        }

        if ($response->getStatusCode() === 404) {
            throw new NotFoundException();
        }

        throw new Exception((string) $response->getBody());
    }
}
