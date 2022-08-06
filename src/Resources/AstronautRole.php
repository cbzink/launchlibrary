<?php

namespace cbzink\LaunchLibrary\Resources;

/** AstronautRole */
class AstronautRole extends Resource
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
     * @var string
     */
    public $role;

    /**
     * Priority.
     *
     * @var int
     */
    public $priority;

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
    protected $fillableCollections = [];
}
