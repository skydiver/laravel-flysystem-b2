<?php

    namespace Skydiver\LaravelFlysystemB2;

    use Storage;
    use League\Flysystem\Filesystem;
    use Illuminate\Support\ServiceProvider;
    use ChrisWhite\B2\Client as B2Client;
    use Mhetreramesh\Flysystem\BackblazeAdapter;


    class B2ServiceProvider extends ServiceProvider {

        public function boot() {
            Storage::extend('b2', function($app, $config) {
                $client = new B2Client($config['accountId'], $config['applicationKey']);
                return new Filesystem(new BackblazeAdapter($client, $config['bucket']));
            });
        }

        public function register() {

        }

    }

?>