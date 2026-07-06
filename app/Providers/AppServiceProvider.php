<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        \Illuminate\Database\Connection::resolverFor('sqlsrv', function ($connection, $database, $prefix, $config) {
            $conn = new \Illuminate\Database\SqlServerConnection($connection, $database, $prefix, $config);
            $conn->setQueryGrammar(new \App\Database\SqlServer2008Grammar($conn));
            return $conn;
        });
    }
}
