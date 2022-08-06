<?php

namespace cbzink\LaunchLibrary\Resources;

class Resource
{
    /**
     * The resource's attributes.
     *
     * @var array
     */
    private $attributes;

    /**
     * Creates a new resource.
     */
    public function __construct(array $attributes)
    {
        $this->attributes = $attributes;

        $this->cleanAttributes();
        $this->fill();
    }

    /**
     * Cleans/sanitises data from LL2.
     */
    private function cleanAttributes()
    {
        if (isset($this->attributes['spacestation'])) {
            $this->attributes['space_station'] = $this->attributes['spacestation'];

            unset($this->attributes['spacestation']);
        }

        if (isset($this->attributes['spacestations'])) {
            $this->attributes['space_stations'] = $this->attributes['spacestations'];

            unset($this->attributes['spacestations']);
        }
    }

    /**
     * Fills the resource from the attributes.
     */
    private function fill(): void
    {
        foreach ($this->fillableResources ?? [] as $key => $class) {
            if (isset($this->attributes[$key]) && !empty($this->attributes[$key])) {
                $this->attributes[$key] = new $class($this->attributes[$key]);
            }
        }

        foreach ($this->fillableCollections ?? [] as $key => $class) {
            if (isset($this->attributes[$key]) && !empty($this->attributes[$key])) {
                $this->attributes[$key] = $this->transformCollection($this->attributes[$key], $class);
            }
        }

        foreach ($this->attributes as $key => $value) {
            $key = $this->camelCase($key);

            $this->{$key} = $value;
        }

        $this->attributes = null;
    }

    /**
     * Converts snake_case to camelCase.
     */
    private function camelCase(string $key): string
    {
        $key = str_replace(' ', '', ucwords(str_replace('_', ' ', $key)));

        $key[0] = strtolower($key[0]);

        return $key;
    }

    /**
     * Transform an array of attributes into a collection.
     */
    private function transformCollection(array $collection, string $class): array
    {
        return array_map(function ($data) use ($class) {
            return new $class($data);
        }, $collection);
    }
}
