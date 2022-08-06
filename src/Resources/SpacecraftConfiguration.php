<?php

namespace cbzink\LaunchLibrary\Resources;

/** SpacecraftConfigurationDetail */
class SpacecraftConfiguration extends Resource
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
     * type.
     *
     * @var SpacecraftConfigType
     */
    public $type;

    /**
     * Agency.
     *
     * @var Agency
     */
    public $agency;

    /**
     * In use.
     *
     * @var bool
     */
    public $inUse;

    /**
     * Capability.
     *
     * @var string
     */
    public $capability;

    /**
     * History.
     *
     * @var string
     */
    public $history;

    /**
     * Details.
     *
     * @var string
     */
    public $details;

    /**
     * Maiden flight.
     *
     * @var string
     */
    public $maidenFlight;

    /**
     * Length (m).
     *
     * @var float
     */
    public $height;

    /**
     * Diameter (m).
     *
     * @var float
     */
    public $diameter;

    /**
     * Human rated.
     *
     * @var bool
     */
    public $humanRated;

    /**
     * Crew Capacity.
     *
     * @var int
     */
    public $crewCapacity;

    /**
     * Payload Capacity (kg).
     *
     * @var int
     */
    public $payloadCapacity;

    /**
     * Flight life.
     *
     * @var string
     */
    public $flightLife;

    /**
     * Image url.
     *
     * @var string
     */
    public $imageUrl;

    /**
     * Nation url.
     *
     * @var string
     */
    public $nationUrl;

    /**
     * Wiki link.
     *
     * @var string
     */
    public $wikiLink;

    /**
     * Info link.
     *
     * @var string
     */
    public $infoLink;

    /**
     * Values that should be converted to resources.
     *
     * @var array
     */
    protected $fillableResources = [
        'type'   => SpacecraftConfigType::class,
        'agency' => Agency::class,
    ];

    /**
     * Values that should be converted to collections.
     *
     * @var array
     */
    protected $fillableCollections = [];
}
