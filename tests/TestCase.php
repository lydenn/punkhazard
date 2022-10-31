<?php

namespace Lydenn\Punkhazard\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Lydenn\Punkhazard\PunkhazardServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Lydenn\\Punkhazard\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            PunkhazardServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        $migration = include __DIR__.'/../database/migrations/create_countries_table.php.stub';
        $migration->up();
    }
}
