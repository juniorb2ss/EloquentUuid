<?php
namespace juniorb2ss\EloquentUuid\Tests;

use Faker\Factory;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    /**
     * Setup the test environment.
     */
    public function setUp()
    {
        parent::setUp();

        $this->loadLaravelMigrations(['--database' => 'testing']);
        $this->loadMigrationsFrom([
            '--database' => 'testing',
            '--path' => '../../../../tests/migrations'
        ]);
        $this->faker = Factory::create();
        $this->user = User::create([
            'name'       => $this->faker->name,
            'email'      => $this->faker->email,
            'password'   => $this->faker->password,
        ]);
    }

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'testing');
    }
}
