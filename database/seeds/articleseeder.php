<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class articleseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 3; $i++) {
            $title=$faker->sentence(6);
            DB::table('articles')->insert([
                'title' => $title,
                'content'=>$faker->text,
                'created_at'=>now(),
                'updated_at'=>now()


            ]);


        }
    }
}
