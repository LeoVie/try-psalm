<?php

declare(strict_types=1);

namespace LeoVie\TryPsalm\Pure;

class Service
{
    private int $last = 0;

    /** @psalm-pure */
    public function add(int $x, int $y): int
    {
        return $x + $y;
    }

    /** @psalm-pure */
    public function addCumulative(int $x): int
    {
        $this->last += $x; // Cannot assign to a property rom a mutation-free context

        return $this->last; // Cannot reference $this in a pure context | Cannot access a proeprty on a mutable object from a pure context
    }
}