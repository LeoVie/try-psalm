<?php

declare(strict_types=1);

namespace LeoVie\TryPsalm\Assertions;

use UnexpectedValueException;

class Service
{
    /** @psalm-assert string[] $array */
    private function validateStringArray(array $array): void
    {
        foreach ($array as $item) {
            if (!is_string($item)) {
                throw new UnexpectedValueException('Invalid value ' . gettype($item));
            }
        }
    }

    private function takeInt(int $value): void {}
    private function takeString(string $value): void {}

    public function takeArray(array $array): void
    {
        $this->takeInt($array[0]); // Argument 1 of takeInt cannot be mixed, expecting int
        $this->validateStringArray($array);
        $this->takeInt($array[0]); // Argument 1 of takeInt expects int, string provided
        $this->takeString($array[0]); // no error
    }
}