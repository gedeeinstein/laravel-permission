<?php

namespace GedeAdi\Permission\Tests\TestModels;

class RuntimeRole extends \GedeAdi\Permission\Models\Role
{
    protected $visible = [
        'id',
        'name',
    ];
}
