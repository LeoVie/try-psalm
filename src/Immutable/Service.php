<?php

declare(strict_types=1);

namespace LeoVie\TryPsalm\Immutable;

class Service
{
    public function doSomething(): void
    {
        $dataObject = new DataObject('name', 'uuid');
        $dataObject->name = 'other-name'; // DataObject::$name is marked readonly
    }
}