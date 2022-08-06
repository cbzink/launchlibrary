<?php

namespace cbzink\LaunchLibrary\Resources;

/** SpaceStationDetailed */
class SpaceStation extends Resource
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
     * Status.
     *
     * @var SpaceStationStatus
     */
    public $status;

    /**
     * Type.
     *
     * @var SpaceStationType
     */
    public $type;

    /**
     * Founded.
     *
     * @var string
     */
    public $founded;

    /**
     * Deorbited.
     *
     * @var string
     */
    public $deorbited;

    /**
     * Height (m).
     *
     * @var float
     */
    public $height;

    /**
     * Width (m).
     *
     * @var float
     */
    public $width;

    /**
     * Mass (T).
     *
     * @var float
     */
    public $mass;

    /**
     * Volume (m^3).
     *
     * @var int
     */
    public $volume;

    /**
     * Description.
     *
     * @var string
     */
    public $description;

    /**
     * Orbit.
     *
     * @var string
     */
    public $orbit;

    /**
     * Onboard crew.
     *
     * @var int
     */
    public $onboardCrew;

    /**
     * Owners.
     *
     * @var array
     */
    public $owners;

    /**
     * Active expeditions.
     *
     * @var array
     */
    public $activeExpeditions;

    /**
     * Docking location.
     *
     * @var array
     */
    public $dockingLocation;

    /**
     * Image url.
     *
     * @var string
     */
    public $imageUrl;

    /**
     * Values that should be converted to resources.
     *
     * @var array
     */
    protected $fillableResources = [
        'status' => SpaceStationStatus::class,
        'type'   => SpaceStationType::class,
    ];

    /**
     * Values that should be converted to collections.
     *
     * @var array
     */
    protected $fillableCollections = [
        'owners'             => Agency::class,
        'active_expeditions' => Expedition::class,
        'docking_location'   => DockingLocation::class,
    ];
}
