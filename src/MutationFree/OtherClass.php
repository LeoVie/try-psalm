<?php

namespace LeoVie\TryPsalm\MutationFree;

class OtherClass
{
    private static ?OtherClass $instance = null;

    private string $name = '';

    public static function getInstance(): OtherClass
    {
        if (static::$instance === null) {
            static::$instance = new self();
        }

        return static::$instance;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}