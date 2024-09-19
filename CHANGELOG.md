

php artisan vendor:publish --provider="GedeAdi\Permission\PermissionServiceProvider"




Optional: The service provider will automatically get registered. Or you may manually add the service provider in your config/app.php file:

'providers' => [
    // ...
    GedeAdi\Permission\PermissionServiceProvider::class,
];
