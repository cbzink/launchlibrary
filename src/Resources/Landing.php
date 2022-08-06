<?php

namespace cbzink\LaunchLibrary\Resources;

/** Landing */
class Landing extends Resource
{
    /**
     * ID.
     *
     * @var int
     */
    public $id;

    /**
     * Attempt.
     *
     * @var bool
     */
    public $attempt;

    /**
     * Success.
     *
     * @var bool
     */
    public $success;

    /**
     * Description.
     *
     * @var string
     */
    public $description;

    /**
     * Location.
     *
     * @var LandingLocation
     */
    public $location;

    /**
     * Type.
     *
     * @var LandingType
     */
    public $type;

    /**
     * Values that should be converted to resources.
     *
     * @var array
     */
    protected $fillableResources = [
        'location' => LandingLocation::class,
        'type'     => LandingType::class,
    ];

    /**
     * Values that should be converted to collections.
     *
     * @var array
     */
    protected $fillableCollections = [];
}
