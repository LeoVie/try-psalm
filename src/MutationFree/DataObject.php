<?php

declare(strict_types=1);

namespace LeoVie\TryPsalm\MutationFree;

class DataObject
{
    public function __construct(private string $name) {}

    /** @psalm-mutation-free */
    public function getShortName(): string
    {
        return substr($this->name, 0, 5);
    }

    /** @psalm-mutation-free */
    public function getShortNameMutating(): string
    {
        $this->name = substr($this->name, 0, 5); // Cannot assign to a property from a mutation-free context

        return $this->name;
    }

    /** @psalm-external-mutation-free */
    public function getShorterName(): string
    {
        return substr($this->name, 0, 4);
    }

    /** @psalm-external-mutation-free */
    public function getShorterNameMutatingInternal(): string
    {
        $this->name = substr($this->name, 0, 4);

        return $this->name;
    }

    /** @psalm-external-mutation-free */
    public function getShorterNameMutatingExternal(): string
    {
        $otherClass = OtherClass::getInstance();
        $otherClass->setName(substr($this->name, 0, 4)); // Cannot call a possibly-mutation method OtherClass::setName from a mutation-free context

        return substr($this->name, 0, 4);
    }
}