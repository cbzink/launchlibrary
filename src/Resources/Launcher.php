<?php

namespace cbzink\LaunchLibrary\Resources;

/** LauncherDetail */
class Launcher extends Resource
{
    /**
     * Id.
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
     * Flight proven.
     *
     * @var bool
     */
    public $flightProven;

    /**
     * Serial number.
     *
     * @var string
     */
    public $serialNumber;

    /**
     * Status.
     *
     * @var string
     */
    public $status;

    /**
     * Details.
     *
     * @var string
     */
    public $details;

    /**
     * Launcher config.
     *
     * @var LauncherConfig
     */
    public $launcherConfig;

    /**
     * Image url.
     *
     * @var string
     */
    public $imageUrl;

    /**
     * Successful landings.
     *
     * @var int
     */
    public $successfulLandings;

    /**
     * Attempted landings.
     *
     * @var int
     */
    public $attemptedLandings;

    /**
     * Flights.
     *
     * @var int
     */
    public $flights;

    /**
     * Last launch date.
     *
     * @var string
     */
    public $lastLaunchDate;

    /**
     * First launch date.
     *
     * @var string
     */
    public $firstLaunchDate;

    /**
     * Values that should be converted to resources.
     *
     * @var array
     */
    protected $fillableResources = [
        'launcher_config' => LauncherConfig::class,
    ];

    /**
     * Values that should be converted to collections.
     *
     * @var array
     */
    protected $fillableCollections = [];
}
