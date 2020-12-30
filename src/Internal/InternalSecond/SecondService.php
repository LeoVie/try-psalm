<?php

declare(strict_types=1);

namespace LeoVie\TryPsalm\Internal\InternalSecond;

use LeoVie\TryPsalm\Internal\InternalFirst\FirstService;

class SecondService
{
    public function doSomething(): void
    {
        $firstService = new FirstService(); // FirstService is internal to ... but called from ...
    }
}