<?php

namespace cbzink\LaunchLibrary\Resources;

/** LocationDetail */
class Location extends Resource
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
     * Country code.
     *
     * @var string
     */
    public $countryCode;

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
     * Total landing count.
     *
     * @var int
     */
    public $totalLandingCount;

    /**
     * Pads.
     *
     * @var array
     */
    public $pads;

    /**
     * Values that should be converted to resources.
     *
     * @var array
     */
    protected $fillableResources = [];

    /**
     * Values that should be converted to collections.
     *
     * @var array
     */
    protected $fillableCollections = [
        'pads' => Pad::class,
    ];
}
