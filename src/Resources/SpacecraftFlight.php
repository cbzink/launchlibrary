<?php

namespace cbzink\LaunchLibrary\Resources;

/** SpacecraftFlightDetailed */
class SpacecraftFlight extends Resource
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
     * Mission end.
     *
     * @var string
     */
    public $missionEnd;

    /**
     * Destination.
     *
     * @var string
     */
    public $destination;

    /**
     * Launch crew.
     *
     * @var AstronautFlight
     */
    public $launchCrew;

    /**
     * Onboard crew.
     *
     * @var AstronautFlight
     */
    public $onboardCrew;

    /**
     * Landing crew.
     *
     * @var AstronautFlight
     */
    public $landingCrew;

    /**
     * Spacecraft.
     *
     * @var Spacecraft
     */
    public $spacecraft;

    /**
     * Launch.
     *
     * @var Launch
     */
    public $launch;

    /**
     * Docking events.
     *
     * @var array
     */
    public $dockingEvents;

    /**
     * Values that should be converted to resources.
     *
     * @var array
     */
    protected $fillableResources = [
        'spacecraft' => Spacecraft::class,
        'launch'     => Launch::class,
    ];

    /**
     * Values that should be converted to collections.
     *
     * @var array
     */
    protected $fillableCollections = [
        'launch_crew'    => AstronautFlight::class,
        'onboard_crew'   => AstronautFlight::class,
        'landing_crew'   => AstronautFlight::class,
        'docking_events' => DockingEvent::class,
    ];
}
