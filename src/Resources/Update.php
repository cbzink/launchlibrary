<?php

namespace cbzink\LaunchLibrary\Resources;

/** Update */
class Update extends Resource
{
    /**
     * Id.
     *
     * @var int
     */
    public $id;

    /**
     * Profile image.
     *
     * @var string
     */
    public $profileImage;

    /**
     * Comment.
     *
     * @var string
     */
    public $comment;

    /**
     * Info url.
     *
     * @var string
     */
    public $infoUrl;

    /**
     * Created by.
     *
     * @var string
     */
    public $createdBy;

    /**
     * Created on.
     *
     * @var string
     */
    public $createdOn;

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
