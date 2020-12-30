<?php

declare(strict_types=1);

namespace LeoVie\TryPsalm\Immutable;

/** @psalm-immutable */
class DataObject
{
    public function __construct(
        public string $name,
        public string $uuid,
    ) {}
}