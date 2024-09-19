<?php

namespace GedeAdi\Permission\Exceptions;

use InvalidArgumentException;

class WildcardPermissionNotImplementsContract extends InvalidArgumentException
{
    public static function create()
    {
        return new static('Wildcard permission class must implements GedeAdi\Permission\Contracts\Wildcard contract');
    }
}
