<?php

namespace cbzink\LaunchLibrary;

use cbzink\LaunchLibrary\Api\AbstractApi;
use cbzink\LaunchLibrary\Exceptions\UnknownApiException;
use GuzzleHttp\Client as HttpClient;

/**
 * @method Api\Agency                agencies()
 * @method Api\Astronaut             astronauts()
 * @method Api\Launch\Launch         launches()
 * @method Api\Event\Event           events()
 * @method Api\SpaceStation          spaceStations()
 * @method Api\Expedition            expeditions()
 * @method Api\DockingEvent          dockingEvents()
 * @method Api\Launcher              launchers()
 * @method Api\Spacecraft\Spacecraft spacecraft()
 * @method Api\Location              locations()
 * @method Api\Pad                   locations()
 */
class LL2
{
    use MakesHttpRequests;

    /**
     * Guzzle HTTP client.
     *
     * @var HttpClient
     */
    public $guzzle;

    /**
     * Launch Library 2 API token.
     *
     * @var string
     */
    protected $apiToken;

    /**
     * Launch Library 2 API endpoint.
     */
    protected $apiEndpoint;

    /**
     * Create a new LL2 instance.
     *
     * @param null|string $apiToken
     */
    public function __construct($apiToken = null, $apiEndpoint = null)
    {
        $this->apiToken      = $apiToken;
        $this->apiEndpoint   = $apiEndpoint ?: 'https://ll.thespacedevs.com/2.2.0/';

        $this->guzzle = new HttpClient([
            'base_uri'    => 'https://ll.thespacedevs.com/2.2.0/',
            'http_errors' => false,
            'headers'     => [
                'Token'        => $this->apiToken,
                'Accept'       => 'application/json',
                'Content-Type' => 'application/json',
            ],
        ]);
    }

    /**
     * Calls an API.
     */
    public function __call(string $name, array $args): AbstractApi
    {
        return $this->api($name);
    }

    /**
     * Determines the appropriate API class.
     */
    public function api(string $name): AbstractApi
    {
        switch ($name) {
            case 'agencies':
                $api = new Api\Agency($this);

                break;

            case 'astronauts':
                $api = new Api\Astronaut($this);

                break;

            case 'launches':
                $api = new Api\Launch\Launch($this);

                break;

            case 'events':
                $api = new Api\Event\Event($this);

                break;

            case 'spaceStations':
                $api = new Api\SpaceStation($this);

                break;

            case 'expeditions':
                $api = new Api\Expedition($this);

                break;

            case 'dockingEvents':
                $api = new Api\DockingEvent($this);

                break;

            case 'launchers':
                $api = new Api\Launcher($this);

                break;

            case 'spacecraft':
                $api = new Api\Spacecraft\Spacecraft($this);

                break;

            case 'locations':
                $api = new Api\Location($this);

                break;

            case 'pads':
                $api = new Api\Pad($this);

                break;

            default:
                throw new UnknownApiException($name);
        }

        return $api;
    }
}
