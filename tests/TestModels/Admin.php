<?php

namespace GedeAdi\Permission\Tests\TestModels;

class Admin extends User
{
    protected $table = 'admins';

    protected $touches = ['roles', 'permissions'];
}
