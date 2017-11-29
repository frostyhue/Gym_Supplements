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
          'name' => 'Ami N.O.',
          'description' => 'BCAA for enhanced working out',
          'provider' => 'Optimum Nutrition',
          'rating' => 4.2,
        ]);
        DB::table('articles')->insert([
          'name' => 'Quadra Lean',
          'description' => 'Weight management ',
          'provider' => 'RSP Nutrition',
          'rating' => 4.6,
        ]);
        DB::table('articles')->insert([
            'name' => 'Combat Whey',
            'description' => 'Whey Protein for muscle building',
            'provider' => 'MusclePharm',
            'rating' => 4.3,
        ]);
        DB::table('articles')->insert([
            'name' => 'Amino Lean',
            'description' => 'Weight management ',
            'provider' => 'RSP Nutrition',
            'rating' => 4.6,
        ]);
    }
}
