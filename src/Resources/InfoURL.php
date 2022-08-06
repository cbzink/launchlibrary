<?php

namespace cbzink\LaunchLibrary\Resources;

/** InfoURL */
class InfoURL extends Resource
{
    /**
     * Priority.
     *
     * @var int
     */
    public $priority;

    /**
     * Title.
     *
     * @var string
     */
    public $title;

    /**
     * Description.
     *
     * @var string
     */
    public $description;

    /**
     * Feature image.
     *
     * @var string
     */
    public $featureImage;

    /**
     * Url.
     *
     * @var string
     */
    public $url;

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
