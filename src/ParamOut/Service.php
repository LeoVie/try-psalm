<?php

declare(strict_types=1);

namespace LeoVie\TryPsalm\ParamOut;

class Service
{
    /** @psalm-param-out string $string */
    public function appendToString(?string &$string, string $appendix): void
    {
        $string ??= '';
        $string .= $appendix;
    }

    /** @psalm-param-out ?string $string */
    public function appendToStringNullable(?string &$string, string $appendix): void
    {
        if ($string === null) {
            return;
        }

        $string .= $appendix;
    }
}