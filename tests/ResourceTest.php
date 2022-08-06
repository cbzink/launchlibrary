<?php

namespace cbzink\Tests\LaunchLibrary;

use cbzink\LaunchLibrary\Resources\Resource;
use PHPUnit\Framework\TestCase;

class ResourceTest extends TestCase
{
    public function testCleansSpaceStationAttributes()
    {
        $resource = new Resource([
            'foo'           => 'bar',
            'spacestation'  => 'baz',
            'spacestations' => 'bat',
        ]);

        $this->assertObjectNotHasAttribute('spacestation', $resource);
        $this->assertObjectNotHasAttribute('spacestations', $resource);

        $this->assertObjectHasAttribute('spaceStation', $resource);
        $this->assertObjectHasAttribute('spaceStations', $resource);

        $this->assertEquals('bar', $resource->foo);
        $this->assertEquals('baz', $resource->spaceStation);
        $this->assertEquals('bat', $resource->spaceStations);
    }
}
