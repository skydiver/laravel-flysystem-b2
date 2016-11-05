# flysystem-b2


### Introduction
Adds Backblaze B2 services as Laravel filesystem


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
