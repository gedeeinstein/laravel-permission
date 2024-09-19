<?php

namespace GedeAdi\Permission\Tests\TestModels;

use GedeAdi\Permission\Traits\HasRoles;

class User extends UserWithoutHasRoles
{
    use HasRoles;
}
