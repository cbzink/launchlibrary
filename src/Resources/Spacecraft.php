<?php

namespace cbzink\LaunchLibrary\Resources;

/** SpacecraftDetailed */
class Spacecraft extends Resource
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
     * Serial number.
     *
     * @var string
     */
    public $serialNumber;

    /**
     * Status.
     *
     * @var SpacecraftStatus
     */
    public $status;

    /**
     * Description.
     *
     * @var string
     */
    public $description;

    /**
     * Spacecraft config.
     *
     * @var SpacecraftConfiguration
     */
    public $spacecraftConfig;

    /**
     * Flights.
     *
     * @var array
     */
    public $flights;

    /**
     * Values that should be converted to resources.
     *
     * @var array
     */
    protected $fillableResources = [
        'status'            => SpacecraftStatus::class,
        'spacecraft_config' => SpacecraftConfiguration::class,
    ];

    /**
     * Values that should be converted to collections.
     *
     * @var array
     */
    protected $fillableCollections = [
        'flights' => SpacecraftFlight::class,
    ];
}
