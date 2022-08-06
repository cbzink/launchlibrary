<?php

namespace cbzink\Tests\LaunchLibrary;

use cbzink\LaunchLibrary\Exceptions\PaginationException;
use Mockery;
use cbzink\LaunchLibrary\LL2;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client as HttpClient;
use cbzink\LaunchLibrary\PaginatedCollection;
use cbzink\LaunchLibrary\Resources\Agency as AgencyResource;

class PaginatedCollectionTest extends TestCase
{
    use MockeryHelper;

    private $guzzleMock;

    private $client;

    private $agencyFixture;

    protected function setUp(): void
    {
        $this->guzzleMock = Mockery::mock(HttpClient::class);
        $this->client     = new LL2(null, null, $this->guzzleMock);

        $this->agencyFixture = [
            'count'    => 2,
            'next'     => 'https://example.com/next',
            'previous' => 'https://example.com/previous',
            'results'  => [
                ['id' => 123, 'name' => 'Foo'],
                ['id' => 456, 'name' => 'Bar'],
            ],
        ];

        parent::setUp();
    }

    public function testCreatesResources()
    {
        $paginatedCollection = new PaginatedCollection(
            $this->agencyFixture,
            AgencyResource::class,
            $this->client,
        );

        $this->assertCount(2, $paginatedCollection->results);

        $this->assertInstanceOf(AgencyResource::class, $paginatedCollection->results[0]);
        $this->assertEquals(123, $paginatedCollection->results[0]->id);

        $this->assertInstanceOf(AgencyResource::class, $paginatedCollection->results[1]);
        $this->assertEquals(456, $paginatedCollection->results[1]->id);
    }

    public function testHandlesForwardPagination()
    {
        $paginatedCollection = new PaginatedCollection(
            $this->agencyFixture,
            AgencyResource::class,
            $this->client,
        );

        $this->guzzleMock->shouldReceive('request')->once()->with('GET', $this->agencyFixture['next'], [
            'query' => ['limit' => $this->client->getPaginationLimit()],
        ])->andReturn(
            new Response(200, [], json_encode($this->agencyFixture))
        );

        $paginatedCollection->next();
    }

    public function testHandlesBackwardPagination()
    {
        $paginatedCollection = new PaginatedCollection(
            $this->agencyFixture,
            AgencyResource::class,
            $this->client,
        );

        $this->guzzleMock->shouldReceive('request')->once()->with('GET', $this->agencyFixture['previous'], [
            'query' => ['limit' => $this->client->getPaginationLimit()],
        ])->andReturn(
            new Response(200, [], json_encode($this->agencyFixture))
        );

        $paginatedCollection->previous();
    }

    public function testHandlesEmptyForwardPagination()
    {
        $this->expectException(PaginationException::class);

        $this->agencyFixture['next'] = null;

        $paginatedCollection = new PaginatedCollection(
            $this->agencyFixture,
            AgencyResource::class,
            $this->client,
        );

        $paginatedCollection->next();
    }

    public function testHandlesEmptyBackwardPagination()
    {
        $this->expectException(PaginationException::class);

        $this->agencyFixture['previous'] = null;

        $paginatedCollection = new PaginatedCollection(
            $this->agencyFixture,
            AgencyResource::class,
            $this->client,
        );

        $paginatedCollection->previous();
    }
}
