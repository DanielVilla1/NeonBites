<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

/**
 * Master seeder orchestrator.
 * @method void call(string $class) Provided by Seeder base (added for static analysis happiness)
 */

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('App\\Database\\Seeds\\ClearDatabaseSeeder');

        // Seed products (UserNeon acts as Product seeder).
        // Using manual instantiation to avoid static analysis false positive on call().
        $productSeeder = new \App\Database\Seeds\UserNeon();
        $productSeeder->run();
    }
}
