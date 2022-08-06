<?php

namespace cbzink\LaunchLibrary\Resources;

/** SpaceStationType */
class SpaceStationType extends Resource
{
    /**
     * ID.
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
