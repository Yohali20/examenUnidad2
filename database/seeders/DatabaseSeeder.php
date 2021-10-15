<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Libros;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $libro = new Libros();

        int 'id' $libro-->id ='1';
        @var string $libro-->titulo ="Guillotina";
        $libro-->autor ="Guillotina";
        $libro-->editorial="Pez";
        $libro-->id ="Guillotina";


    }
}
