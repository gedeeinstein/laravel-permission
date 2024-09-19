<?php

namespace GedeAdi\Permission\Contracts;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property int|string $id
 * @property string $nama
 * @property string|null $guard_name
 *
 * @mixin \GedeAdi\Permission\Models\Permission
 *
 * @phpstan-require-extends \GedeAdi\Permission\Models\Permission
 */
interface Permission
{
    /**
     * A permission can be applied to roles.
     */
    public function roles(): BelongsToMany;

    /**
     * Find a permission by its name.
     *
     *
     * @throws \GedeAdi\Permission\Exceptions\PermissionDoesNotExist
     */
    public static function findByName(string $nama, ?string $guardName): self;

    /**
     * Find a permission by its id.
     *
     *
     * @throws \GedeAdi\Permission\Exceptions\PermissionDoesNotExist
     */
    public static function findById(int|string $id, ?string $guardName): self;

    /**
     * Find or Create a permission by its name and guard name.
     */
    public static function findOrCreate(string $nama, ?string $guardName): self;
}
