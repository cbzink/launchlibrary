<?php

namespace cbzink\LaunchLibrary\Resources;

/** Mission */
class Mission extends Resource
{
    /**
     * Id.
     *
     * @var int
     */
    public $id;

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
     * Launch designator.
     *
     * @var string
     */
    public $launchDesignator;

    /**
     * Type.
     *
     * @var string
     */
    public $type;

    /**
     * Orbit.
     *
     * @var Orbit
     */
    public $orbit;

    /**
     * Values that should be converted to resources.
     *
     * @var array
     */
    protected $fillableResources = [
        'orbit' => Orbit::class,
    ];

    /**
     * Values that should be converted to collections.
     *
     * @var array
     */
    protected $fillableCollections = [];
}
