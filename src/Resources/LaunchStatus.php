<?php

namespace cbzink\LaunchLibrary\Resources;

/** LaunchStatus */
class LaunchStatus extends Resource
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
     * Description.
     *
     * @var string
     */
    public $description;

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
