<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //factory(App\Article::class, 5)->create();
        DB::table('articles')->insert([
          'name' => str_random(8),
          'description' => str_random(25),
          'provider' => str_random(8),
          'rating' => 5,
        ]);
        DB::table('articles')->insert([
          'name' => str_random(8),
          'description' => str_random(25),
          'provider' => str_random(8),
          'rating' => 4,
        ]);
    }
}
