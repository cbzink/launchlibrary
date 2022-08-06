# Launch Library 2 SDK for PHP

A simple SDK for interacting with the [Launch Library 2 API](https://thespacedevs.com/llapi).

## Table of Contents

<details>
  <summary>View the table of contents.</summary>

  <br />

  - [Launch Library 2 SDK for PHP](#launch-library-2-sdk-for-php)
    * [Requirements](#requirements)
    * [Installation](#installation)
    * [Usage](#usage)
        + [Setup](#setup)
            - [Pagination limits](#pagination-limits)
        + [Resources](#resources)
        + [Searching for resources](#searching-for-resources)
            - [Pagination](#pagination)
        + [Retrieving resources](#retrieving-resources)
        + [Special cases](#special-cases)
            - [Events and Launches](#events-and-launches)
        + [Spacecraft](#spacecraft)
  * [Acknowledgements](#acknowledgements)
  * [License](#license)
</details>

## Requirements

* PHP >= 7.2
* A LL2 API token _(Optional)_

## Installation

Install this library via [Composer](https://getcomposer.org/).

```
composer require cbzink/launchlibrary
```

## Usage

### Setup

Instantiate an instance of the LL2 class

```php
use cbzink\LaunchLibrary\LL2

$client = new LL2($apiToken, $apiEndpoint);
```

| Parameter | Required? | Description |
|--|--|--|
| `$apiToken` | No | Provide your own API token for increased rate limits. Default none.|
| `$apiEndpoint` | No | Provide an alternate API endpoint for switching between prod and dev environments. Default production.

#### Pagination limits

You can change the pagination limit (default `10`) using `setPaginationLimit`.

```php
$client->setPaginationLimit(30);

$client->getPaginationLimit() // (int) 30
```

### Resources

Currently available resources Agencies, Astronauts, Docking Events, Events, Expeditions, Launchers, Launches, Locations, Pads, Space Stations, and Spacecraft.

### Searching for resources

You can search for resources using the parameters specified in the [LL2 API docs](https://ll.thespacedevs.com/2.2.0/swagger/).

```php
$results = $client->agencies()->search([
    'country_code' => 'US',
]);
```

#### Pagination

Searches are often paginated. An array of resources is available under the `results` property, and `next()` and `previous()` methods are available for moving through pagination.

```php
$agencies = $client->agencies()->search();

// Array of Agency resources.
$resources = $agencies->results;

// Fetch the next page of results
$agencies = $agencies->next();
```

### Retrieving resources

You can retrieve detailed resources by their ID.

```php
$results = $client->agencies()->fetch(123);
```

### Special cases

#### Events and Launches

Events and Launches have additional Previous and Upcoming endpoints you can access using the SDK. `search()` and `fetch()` are available on both.

```php
// Previous
$results = $client->events()->previous()->search();

// Upcoming
$results = $client->launches()->upcoming()->search();
```

### Spacecraft

Spacecraft have an additional Flights endpoint you can access using the SDK. `search()` and `fetch()` are available on both.

```php
$results = $client->spacecraft()->flights()->search();
```

## Acknowledgements

Inspiration for the design of this SDK was taken from [laravel/forge-sdk](https://github.com/laravel/forge-sdk) and [KnpLabs/php-github-api](https://github.com/KnpLabs/php-github-api).

## License

Launch Library 2 SDK for PHP is open source software licensed under the [MIT license](LICENSE.md).
