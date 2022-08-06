<?php

namespace cbzink\LaunchLibrary\Resources;

/** MissionPatch */
class MissionPatch extends Resource
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
     * Priority.
     *
     * @var int
     */
    public $priority;

    /**
     * Image url.
     *
     * @var string
     */
    public $imageUrl;

    /**
     * Agency.
     *
     * @var Agency
     */
    public $agency;

    /**
     * Values that should be converted to resources.
     *
     * @var array
     */
    protected $fillableResources = [
        'agency' => Agency::class,
    ];

    /**
     * Values that should be converted to collections.
     *
     * @var array
     */
    protected $fillableCollections = [];
}
