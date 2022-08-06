<?php

namespace cbzink\LaunchLibrary\Resources;

/** Orbit */
class Orbit extends Resource
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
     * Abbrev.
     *
     * @var string
     */
    public $abbrev;

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
