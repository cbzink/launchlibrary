<?php

namespace cbzink\LaunchLibrary\Resources;

/** Events */
class Events extends Resource
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
     * Slug.
     *
     * @var string
     */
    public $slug;

    /**
     * Name.
     *
     * @var string
     */
    public $name;

    /**
     * Updates.
     *
     * @var array
     */
    public $updates;

    /**
     * Type.
     *
     * @var EventType
     */
    public $type;

    /**
     * Description.
     *
     * @var string
     */
    public $description;

    /**
     * Webcast live.
     *
     * @var bool
     */
    public $webcastLive;

    /**
     * Location.
     *
     * @var string
     */
    public $location;

    /**
     * News url.
     *
     * @var string
     */
    public $newsUrl;

    /**
     * Video url.
     *
     * @var string
     */
    public $videoUrl;

    /**
     * Feature image.
     *
     * @var string
     */
    public $featureImage;

    /**
     * Date.
     *
     * @var string
     */
    public $date;

    /**
     * Launches.
     *
     * @var array
     */
    public $launches;

    /**
     * Expeditions.
     *
     * @var array
     */
    public $expeditions;

    /**
     * Space stations.
     *
     * @var array
     */
    public $spaceStations;

    /**
     * Program.
     *
     * @var array
     */
    public $program;

    /**
     * Values that should be converted to resources.
     *
     * @var array
     */
    protected $fillableResources = [
        'type' => EventType::class,
    ];

    /**
     * Values that should be converted to collections.
     *
     * @var array
     */
    protected $fillableCollections = [
        'updates'        => Update::class,
        'launches'       => Launch::class,
        'expeditions'    => Expedition::class,
        'space_stations' => SpaceStation::class,
        'program'        => Program::class,
    ];
}
