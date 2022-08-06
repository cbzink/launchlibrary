<?php

namespace cbzink\LaunchLibrary\Resources;

/** FirstStage */
class FirstStage extends Resource
{
    /**
     * ID.
     *
     * @var int
     */
    public $id;

    /**
     * Type.
     *
     * @var string
     */
    public $type;

    /**
     * Reused.
     *
     * @var bool
     */
    public $reused;

    /**
     * Launcher flight number.
     *
     * @var int
     */
    public $launcherFlightNumber;

    /**
     * Launcher.
     *
     * @var Launcher
     */
    public $launcher;

    /**
     * Landing.
     *
     * @var Landing
     */
    public $landing;

    /**
     * Previous flight date.
     *
     * @var string
     */
    public $previousFlightDate;

    /**
     * Turn around time days.
     *
     * @var int
     */
    public $turnAroundTimeDays;

    /**
     * Launch.
     *
     * @var Launch
     */
    public $previousFlight;

    /**
     * Values that should be converted to resources.
     *
     * @var array
     */
    protected $fillableResources = [
        'launcher'        => Launcher::class,
        'landing'         => Landing::class,
        'previous_flight' => Launch::class,
    ];

    /**
     * Values that should be converted to collections.
     *
     * @var array
     */
    protected $fillableCollections = [];
}
