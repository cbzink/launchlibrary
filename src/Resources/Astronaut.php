<?php

namespace cbzink\LaunchLibrary\Resources;

/** AstronautDetailed */
class Astronaut extends Resource
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
     * @var AstronautStatus
     */
    public $status;

    /**
     * Type.
     *
     * @var AstronautType
     */
    public $type;

    /**
     * Agency.
     *
     * @var Agency
     */
    public $agency;

    /**
     * Date of birth.
     *
     * @var string
     */
    public $dateOfBirth;

    /**
     * Date of death.
     *
     * @var string
     */
    public $dateOfDeath;

    /**
     * Nationality.
     *
     * @var string
     */
    public $nationality;

    /**
     * Twitter.
     *
     * @var string
     */
    public $twitter;

    /**
     * Instagram.
     *
     * @var string
     */
    public $instagram;

    /**
     * Bio.
     *
     * @var string
     */
    public $bio;

    /**
     * Profile image.
     *
     * @var string
     */
    public $profileImage;

    /**
     * Profile image thumbnail.
     *
     * @var string
     */
    public $profileImageThumbnail;

    /**
     * Wiki.
     *
     * @var string
     */
    public $wiki;

    /**
     * Flights.
     *
     * @var array
     */
    public $flights;

    /**
     * Landings.
     *
     * @var array
     */
    public $landings;

    /**
     * Last flight.
     *
     * @var string
     */
    public $lastFlight;

    /**
     * First flight.
     *
     * @var string
     */
    public $firstFlight;

    /**
     * Values that should be converted to resources.
     *
     * @var array
     */
    protected $fillableResources = [
        'status' => AstronautStatus::class,
        'type'   => AstronautType::class,
        'agency' => Agency::class,
    ];

    /**
     * Values that should be converted to collections.
     *
     * @var array
     */
    protected $fillableCollections = [
        'flights'  => Launch::class,
        'landings' => SpacecraftFlight::class,
    ];
}
