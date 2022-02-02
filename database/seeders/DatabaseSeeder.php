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

        \App\Models\User::factory(40)->create();
        \App\Models\Hotele::factory(40)->create();
        \App\Models\Habitacione::factory(40)->create();
        \App\Models\Calificacione::factory(40)->create();
        \App\Models\Role::factory(2)->create();
        \App\Models\Perfile::factory(40)->create();




        // \App\Models\User::factory(10)->create();
    }
}
