<?php

namespace juniorb2ss\EloquentUuid;

use Ramsey\Uuid\Uuid as BaseUuid;

class Uuid
{
    public static function generate()
    {
        $uuid1 = BaseUuid::uuid1();

        return $uuid1->toString();
    }
}
