<?php

declare(strict_types=1);

namespace LeoVie\TryPsalm\Readonly;

class DataObject
{
    /** @psalm-readonly */
    public string $uuid;

    public function __construct(string $uuid)
    {
        $this->uuid = $uuid;
    }
}