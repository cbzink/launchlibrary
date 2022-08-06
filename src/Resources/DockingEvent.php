<?php

namespace cbzink\LaunchLibrary\Resources;

/** DockingEventDetailed */
class DockingEvent extends Resource
{
    /**
     * ID.
     *
     * @var int
     */
    public $id;

    /**
     * Url.
     *
     * @var string
     */
    public $url;

    /**
     * Launch id.
     *
     * @var string
     */
    public $launchId;

    /**
     * Docking.
     *
     * @var string
     */
    public $docking;

    /**
     * Departure.
     *
     * @var string
     */
    public $departure;

    /**
     * Flight vehicle.
     *
     * @var SpacecraftFlight
     */
    public $flightVehicle;

    /**
     * Docking location.
     *
     * @var DockingLocation
     */
    public $dockingLocation;

    /**
     * Space station.
     *
     * @var SpaceStation
     */
    public $spaceStation;

    /**
     * Values that should be converted to resources.
     *
     * @var array
     */
    protected $fillableResources = [
        'flight_vehicle'   => SpacecraftFlight::class,
        'docking_location' => DockingLocation::class,
        'space_station'    => SpaceStation::class,
    ];

    /**
     * Values that should be converted to collections.
     *
     * @var array
     */
    protected $fillableCollections = [];
}
