# flysystem-b2


### Introduction
Adds Backblaze B2 driver to use with Laravel filesystem


### Installation
``` bash
composer require skydiver/laravel-flysystem-b2
```


### Configuration

After installing, register the `Skydiver\LaravelFlysystemB2\B2ServiceProvider` in your `config/app.php` configuration file:
```php
'providers' => [
    // Other service providers...
    Skydiver\LaravelFlysystemB2\B2ServiceProvider::class,
],
```

You will also need to add the new driver in your `config/filesystems.php` configuration file:
```php
'b2' => [
    'driver'         => 'b2',
    'bucket'         => '<my bucket name>',
    'accountId'      => '<b2 account id>',
    'applicationKey' => '<b2 application key>'
],
```
