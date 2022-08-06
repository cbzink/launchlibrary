<?php

namespace cbzink\LaunchLibrary\Resources;

/** ExpeditionDetail */
class Expedition extends Resource
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
     * Name.
     *
     * @var string
     */
    public $name;

    /**
     * Start.
     *
     * @var string
     */
    public $start;

    /**
     * End.
     *
     * @var string
     */
    public $end;

    /**
     * Space station.
     *
     * @var SpaceStation
     */
    public $spaceStation;

    /**
     * Crew.
     *
     * @var array
     */
    public $crew;

    /**
     * Mission patches.
     *
     * @var array
     */
    public $missionPatches;

    /**
     * Values that should be converted to resources.
     *
     * @var array
     */
    protected $fillableResources = [
        'space_station' => SpaceStation::class,
    ];

    /**
     * Values that should be converted to collections.
     *
     * @var array
     */
    protected $fillableCollections = [
        'crew'            => AstronautFlight::class,
        'mission_patches' => MissionPatch::class,
    ];
}
