<?php

namespace cbzink\LaunchLibrary\Resources;

/** RocketDetailed */
class Rocket extends Resource
{
    /**
     * ID.
     *
     * @var int
     */
    public $id;

    /**
     * Configuration.
     *
     * @var LauncherConfig
     */
    public $configuration;

    /**
     * Launcher stage.
     *
     * @var array
     */
    public $launcherStage;

    /**
     * Spacecraft stage.
     *
     * @var SpacecraftFlight
     */
    public $spacecraftStage;

    /**
     * Values that should be converted to resources.
     *
     * @var array
     */
    protected $fillableResources = [
        'configuration'    => LauncherConfig::class,
        'spacecraft_stage' => SpacecraftFlight::class,
    ];

    /**
     * Values that should be converted to collections.
     *
     * @var array
     */
    protected $fillableCollections = [
        'launcher_stage' => FirstStage::class,
    ];
}
