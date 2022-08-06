<?php

namespace cbzink\LaunchLibrary\Resources;

/** AstronautFlight */
class AstronautFlight extends Resource
{
    /**
     * ID.
     *
     * @var int
     */
    public $id;

    /**
     * Role.
     *
     * @var AstronautRole
     */
    public $role;

    /**
     * Astronaut.
     *
     * @var Astronaut
     */
    public $astronaut;

    /**
     * Values that should be converted to resources.
     *
     * @var array
     */
    protected $fillableResources = [
        'role'      => AstronautRole::class,
        'astronaut' => Astronaut::class,
    ];

    /**
     * Values that should be converted to collections.
     *
     * @var array
     */
    protected $fillableCollections = [];
}
