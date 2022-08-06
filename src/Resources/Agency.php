<?php

namespace cbzink\LaunchLibrary\Resources;

/** AgencySerializerDetailed */
class Agency extends Resource
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
     * Featured.
     *
     * @var bool
     */
    public $featured;

    /**
     * Type.
     *
     * @var string
     */
    public $type;

    /**
     * Country code.
     *
     * @var string
     */
    public $countryCode;

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
     * Administrator.
     *
     * @var string
     */
    public $administrator;

    /**
     * Founding year.
     *
     * @var string
     */
    public $foundingYear;

    /**
     * Launchers.
     *
     * @var string
     */
    public $launchers;

    /**
     * Spacecraft.
     *
     * @var string
     */
    public $spacecraft;

    /**
     * Parent.
     *
     * @var string
     */
    public $parent;

    /**
     * Launch library url.
     *
     * @var string
     */
    public $launchLibraryUrl;

    /**
     * Total launch count.
     *
     * @var int
     */
    public $totalLaunchCount;

    /**
     * Successful launches.
     *
     * @var int
     */
    public $successfulLaunches;

    /**
     * Consecutive successful launches.
     *
     * @var int
     */
    public $consecutiveSuccessfulLaunches;

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
     * Successful landings.
     *
     * @var int
     */
    public $successfulLandings;

    /**
     * Failed landings.
     *
     * @var int
     */
    public $failedLandings;

    /**
     * Attempted landings.
     *
     * @var int
     */
    public $attemptedLandings;

    /**
     * Consecutive successful landings.
     *
     * @var int
     */
    public $consecutiveSuccessfulLandings;

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
     * Logo url.
     *
     * @var string
     */
    public $logoUrl;

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
     * Launcher list.
     *
     * @var array
     */
    public $launcherList;

    /**
     * Spacecraft list.
     *
     * @var array
     */
    public $spacecraftList;

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
        'launcher_list'   => Launcher::class,
        'spacecraft_list' => SpacecraftConfiguration::class,
    ];
}
