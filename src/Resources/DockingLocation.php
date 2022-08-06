<?php

namespace cbzink\LaunchLibrary\Resources;

/** DockingLocation */
class DockingLocation extends Resource
{
    /**
     * ID.
     *
     * @var int
     */
    public $id;

    /**
     * Name.
     *
     * @var string
     */
    public $name;

    /**
     * Space station.
     *
     * @var SpaceStation
     */
    public $spaceStation;

    /**
     * Docked.
     *
     * @var DockingEvent
     */
    public $docked;

    /**
     * Values that should be converted to resources.
     *
     * @var array
     */
    protected $fillableResources = [
        'space_station' => SpaceStation::class,
        'docked'        => DockingEvent::class,
    ];

    /**
     * Values that should be converted to collections.
     *
     * @var array
     */
    protected $fillableCollections = [];
}
