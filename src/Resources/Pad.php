<?php

namespace cbzink\LaunchLibrary\Resources;

/** Pad */
class Pad extends Resource
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
     * Agency id.
     *
     * @var int
     */
    public $agencyId;

    /**
     * Name.
     *
     * @var string
     */
    public $name;

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
     * Map url.
     *
     * @var string
     */
    public $mapUrl;

    /**
     * Latitude.
     *
     * @var string
     */
    public $latitude;

    /**
     * Longitude.
     *
     * @var string
     */
    public $longitude;

    /**
     * Location.
     *
     * @var Location
     */
    public $location;

    /**
     * Map image.
     *
     * @var string
     */
    public $mapImage;

    /**
     * Total launch count.
     *
     * @var int
     */
    public $totalLaunchCount;

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
