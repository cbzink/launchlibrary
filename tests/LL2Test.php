<?php

namespace cbzink\Tests\LaunchLibrary;

use Mockery;
use Exception;
use cbzink\LaunchLibrary\LL2;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use cbzink\LaunchLibrary\Api\Pad;
use cbzink\LaunchLibrary\Api\Agency;
use GuzzleHttp\Client as HttpClient;
use cbzink\LaunchLibrary\Api\Launcher;
use cbzink\LaunchLibrary\Api\Location;
use cbzink\LaunchLibrary\Api\Astronaut;
use cbzink\LaunchLibrary\Api\Expedition;
use cbzink\LaunchLibrary\Api\Event\Event;
use cbzink\LaunchLibrary\Api\DockingEvent;
use cbzink\LaunchLibrary\Api\SpaceStation;
use cbzink\LaunchLibrary\Api\Launch\Launch;
use cbzink\LaunchLibrary\Api\Spacecraft\Spacecraft;
use cbzink\LaunchLibrary\Exceptions\NotFoundException;
use cbzink\LaunchLibrary\Exceptions\RateLimitException;
use cbzink\LaunchLibrary\Exceptions\UnknownApiException;

class LL2Test extends TestCase
{
    use MockeryHelper;

    public function testCallingAnApi()
    {
        $client = new LL2();

        $this->assertInstanceOf(Agency::class, $client->agencies());
        $this->assertInstanceOf(Astronaut::class, $client->astronauts());
        $this->assertInstanceOf(DockingEvent::class, $client->dockingEvents());
        $this->assertInstanceOf(Event::class, $client->events());
        $this->assertInstanceOf(Expedition::class, $client->expeditions());
        $this->assertInstanceOf(Launch::class, $client->launches());
        $this->assertInstanceOf(Launcher::class, $client->launchers());
        $this->assertInstanceOf(Location::class, $client->locations());
        $this->assertInstanceOf(Pad::class, $client->pads());
        $this->assertInstanceOf(Spacecraft::class, $client->spacecraft());
        $this->assertInstanceOf(SpaceStation::class, $client->spaceStations());
    }

    public function testCallingAnInvalidApi()
    {
        $this->expectException(UnknownApiException::class);

        $client = new LL2();

        $client->foobar();
    }

    public function testSettingPaginationLimit()
    {
        $client = new LL2();

        $client->setPaginationLimit(123);

        $this->assertEquals(123, $client->getPaginationLimit());
    }

    public function testMakesGetRequests()
    {
        $guzzle = Mockery::mock(HttpClient::class);
        $client = new LL2(null, null, $guzzle);

        $guzzle->shouldReceive('request')->once()->with('GET', 'agencies/123', [
            'query' => ['limit' => $client->getPaginationLimit()],
        ])->andReturn(
            new Response(200, [], '{"id":123,"name":"Test"}')
        );

        $this->assertEquals($client->get('agencies/123'), [
            'id'   => 123,
            'name' => 'Test',
        ]);
    }

    public function testHandlesRateLimitErrors()
    {
        $this->expectException(RateLimitException::class);

        $guzzle = Mockery::mock(HttpClient::class);
        $client = new LL2(null, null, $guzzle);

        $guzzle->shouldReceive('request')->once()->with('GET', 'agencies', [
            'query' => ['limit' => $client->getPaginationLimit()],
        ])->andReturn(
            new Response(429, [], '{"detail": "Test"}')
        );

        $client->get('agencies');
    }

    public function testHandlesNotFoundErrors()
    {
        $this->expectException(NotFoundException::class);

        $guzzle = Mockery::mock(HttpClient::class);
        $client = new LL2(null, null, $guzzle);

        $guzzle->shouldReceive('request')->once()->with('GET', 'agencies', [
            'query' => ['limit' => $client->getPaginationLimit()],
        ])->andReturn(
            new Response(404, [], '{}')
        );

        $client->get('agencies');
    }

    public function testHandlesUnknownExceptions()
    {
        $this->expectException(Exception::class);

        $guzzle = Mockery::mock(HttpClient::class);
        $client = new LL2(null, null, $guzzle);

        $guzzle->shouldReceive('request')->once()->with('GET', 'agencies', [
            'query' => ['limit' => $client->getPaginationLimit()],
        ])->andReturn(
            new Response(500, [], '{}')
        );

        $client->get('agencies');
    }
}
