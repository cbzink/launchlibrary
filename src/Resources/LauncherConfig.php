<?php

namespace cbzink\LaunchLibrary\Resources;

/** LauncherConfigDetail */
class LauncherConfig extends Resource
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
     * Name.
     *
     * @var string
     */
    public $name;

    /**
     * Description.
     *
     * @var string
     */
    public $description;

    /**
     * Family.
     *
     * @var string
     */
    public $family;

    /**
     * Full name.
     *
     * @var string
     */
    public $fullName;

    /**
     * Manufacturer.
     *
     * @var Agency
     */
    public $manufacturer;

    /**
     * Program.
     *
     * @var array
     */
    public $program;

    /**
     * Variant.
     *
     * @var string
     */
    public $variant;

    /**
     * Alias.
     *
     * @var string
     */
    public $alias;

    /**
     * Min stage.
     *
     * @var int
     */
    public $minStage;

    /**
     * Max stage.
     *
     * @var int
     */
    public $maxStage;

    /**
     * Length (m).
     *
     * @var float
     */
    public $length;

    /**
     * Max Diameter (m).
     *
     * @var float
     */
    public $diameter;

    /**
     * Maiden Flight Date.
     *
     * @var string
     */
    public $maidenFlight;

    /**
     * Launch Cost ($).
     *
     * @var string
     */
    public $launchCost;

    /**
     * Mass at Launch (T).
     *
     * @var int
     */
    public $launchMass;

    /**
     * LEO Capacity (kg).
     *
     * @var int
     */
    public $leoCapacity;

    /**
     * GTO Capacity (kg).
     *
     * @var int
     */
    public $gtoCapacity;

    /**
     * Thrust at Liftoff (kN).
     *
     * @var int
     */
    public $toThrust;

    /**
     * Apogee - Sub-Orbital Only (km).
     *
     * @var int
     */
    public $apogee;

    /**
     * Vehicle Range - Legacy.
     *
     * @var int
     */
    public $vehicleRange;

    /**
     * Image url.
     *
     * @var string
     */
    public $imageUrl;

    /**
     * Info url.
     *
     * @var string
     */
    public $infoUrl;

    /**
     * Wiki url.
     *
     * @var string
     */
    public $wikiUrl;

    /**
     * Total launch count.
     *
     * @var int
     */
    public $totalLaunchCount;

    /**
     * Consecutive successful launches.
     *
     * @var int
     */
    public $consecutiveSuccessfulLaunches;

    /**
     * Successful launches.
     *
     * @var int
     */
    public $successfulLaunches;

    /**
     * Failed launches.
     *
     * @var int
     */
    public $failedLaunches;

    /**
     * Pending launches.
     *
     * @var int
     */
    public $pendingLaunches;

    /**
     * Values that should be converted to resources.
     *
     * @var array
     */
    protected $fillableResources = [
        'manufacturer' => Agency::class,
    ];

    /**
     * Values that should be converted to collections.
     *
     * @var array
     */
    protected $fillableCollections = [
        'program' => Program::class,
    ];
}
