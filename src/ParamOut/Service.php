<?php

declare(strict_types=1);

namespace LeoVie\TryPsalm\ParamOut;

class Service
{
    /** @psalm-param-out string $text */
    public function appendToString(?string &$text, string $appendix): void
    {
        if ($text === null) {
            $text = '';
        }

        $text .= $appendix;
    }

    /** @psalm-param-out ?string $text */
    public function appendToStringNullable(?string &$text, string $appendix): void
    {
        if ($text === null) {
            return;
        }

        $text .= $appendix;
    }
}