<?php

namespace App;

class Container
{

    public static Container $instance;

    private array $objects;

    private function __construct(array $objects)
    {
        $this->objects = $objects;
    }

    public static function init(array $services): void
    {
        self::$instance = new self($services);
    }
    public static function get(string $key)
    {
        return self::$instance->objects[$key]();
    }
}