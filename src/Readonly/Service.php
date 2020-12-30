<?php

declare(strict_types=1);

namespace LeoVie\TryPsalm\Readonly;

class Service
{
    public function createObjectAndChangeUuid(): void
    {
        $dataObject = new DataObject('abc123');
        $dataObject->uuid = 'changed'; // DataObject::$uuid is marked readonly
    }
}