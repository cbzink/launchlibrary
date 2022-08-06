<?php

namespace cbzink\LaunchLibrary\Resources;

/** LandingLocation */
class LandingLocation extends Resource
{
    /**
     * Id.
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
     * Abbrev.
     *
     * @var string
     */
    public $abbrev;

    /**
     * Description.
     *
     * @var string
     */
    public $description;

    /**
     * Location.
     *
     * @var Location
     */
    public $location;

    /**
     * Successful landings.
     *
     * @var string
     */
    public $successfulLandings;

    /**
     * Values that should be converted to resources.
     *
     * @var array
     */
    protected $fillableResources = [
        'location' => Location::class,
    ];

    /**
     * Values that should be converted to collections.
     *
     * @var array
     */
    protected $fillableCollections = [];
}
