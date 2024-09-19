<?php

namespace GedeAdi\Permission\Commands;

use Illuminate\Console\Command;
use GedeAdi\Permission\Contracts\Permission as PermissionContract;

class CreatePermission extends Command
{
    protected $signature = 'permission:create-permission 
                {nama : The name of the permission} 
                {guard? : The name of the guard}';

    protected $description = 'Create a permission';

    public function handle()
    {
        $permissionClass = app(PermissionContract::class);

        $permission = $permissionClass::findOrCreate($this->argument('nama'), $this->argument('guard'));

        $this->info("Permission `{$permission->nama}` ".($permission->wasRecentlyCreated ? 'created' : 'already exists'));
    }
}
