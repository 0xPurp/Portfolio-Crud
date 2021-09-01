<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            About::class,
            Contact::class,
            Fact::class,
            Portfolio::class,
            Service::class,
            Skill::class,

        ]);
    }
}
