<?php

namespace cbzink\LaunchLibrary\Resources;

/** Program */
class Program extends Resource
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
     * Description.
     *
     * @var string
     */
    public $description;

    /**
     * Agencies.
     *
     * @var array
     */
    public $agencies;

    /**
     * Image url.
     *
     * @var string
     */
    public $imageUrl;

    /**
     * Start date.
     *
     * @var string
     */
    public $startDate;

    /**
     * End date.
     *
     * @var string
     */
    public $endDate;

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
     * Mission patches.
     *
     * @var array
     */
    public $missionPatches;

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
        'agencies'        => Agency::class,
        'mission_patches' => MissionPatch::class,
    ];
}
