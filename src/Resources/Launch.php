<?php

namespace cbzink\LaunchLibrary\Resources;

/** LaunchDetailed */
class Launch extends Resource
{
    /**
     * Id.
     *
     * @var string
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
     * Flightclub url.
     *
     * @var string
     */
    public $flightclubUrl;

    /**
     * R spacex api id.
     *
     * @var string
     */
    public $rSpacexApiId;

    /**
     * Name.
     *
     * @var string
     */
    public $name;

    /**
     * Status.
     *
     * @var LaunchStatus
     */
    public $status;

    /**
     * Last updated.
     *
     * @var string
     */
    public $lastUpdated;

    /**
     * Updaates.
     *
     * @var array
     */
    public $updates;

    /**
     * Net.
     *
     * @var string
     */
    public $net;

    /**
     * Window end.
     *
     * @var string
     */
    public $windowEnd;

    /**
     * Window start.
     *
     * @var string
     */
    public $windowStart;

    /**
     * Probability.
     *
     * @var int
     */
    public $probability;

    /**
     * Holdreason.
     *
     * @var string
     */
    public $holdreason;

    /**
     * Failreason.
     *
     * @var string
     */
    public $failreason;

    /**
     * Hashtag.
     *
     * @var string
     */
    public $hashtag;

    /**
     * Launch service provider.
     *
     * @var Agency
     */
    public $launchServiceProvider;

    /**
     * Rocket.
     *
     * @var Rocket
     */
    public $rocket;

    /**
     * Mission.
     *
     * @var Mission
     */
    public $mission;

    /**
     * Pad.
     *
     * @var Pad
     */
    public $pad;

    /**
     * Info URLs.
     *
     * @var array
     */
    public $infoURLs;

    /**
     * Vid URLs.
     *
     * @var array
     */
    public $vidURLs;

    /**
     * Webcast live.
     *
     * @var bool
     */
    public $webcastLive;

    /**
     * Image.
     *
     * @var string
     */
    public $image;

    /**
     * Infographic.
     *
     * @var string
     */
    public $infographic;

    /**
     * Program.
     *
     * @var array
     */
    public $program;

    /**
     * Orbital launch attempt count.
     *
     * @var int
     */
    public $orbitalLaunchAttemptCount;

    /**
     * Location launch attempt count.
     *
     * @var int
     */
    public $locationLaunchAttemptCount;

    /**
     * Pad launch attempt count.
     *
     * @var int
     */
    public $padLaunchAttemptCount;

    /**
     * Agency launch attempt count.
     *
     * @var int
     */
    public $agencyLaunchAttemptCount;

    /**
     * Orbital launch attempt count year.
     *
     * @var int
     */
    public $orbitalLaunchAttemptCountYear;

    /**
     * Location launch attempt count year.
     *
     * @var int
     */
    public $locationLaunchAttemptCountYear;

    /**
     * Pad launch attempt count year.
     *
     * @var int
     */
    public $padLaunchAttemptCountYear;

    /**
     * Agency launch attempt count year.
     *
     * @var int
     */
    public $agencyLaunchAttemptCountYear;

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
    protected $fillableResources = [
        'status'                  => LaunchStatus::class,
        'launch_service_provider' => Agency::class,
        'rocket'                  => Rocket::class,
        'mission'                 => Mission::class,
        'pad'                     => Pad::class,
    ];

    /**
     * Values that should be converted to collections.
     *
     * @var array
     */
    protected $fillableCollections = [
        'updates'         => Update::class,
        'infoURLs'        => InfoURL::class,
        'vidURLs'         => VidURL::class,
        'program'         => Program::class,
        'mission_patches' => MissionPatch::class,
    ];
}
