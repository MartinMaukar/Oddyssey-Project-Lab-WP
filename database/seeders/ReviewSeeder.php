<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'name'=>'Jason',
            'game_id'=>'1',
            'category_id'=>'1',
            'recommended'=>'1',
            'review_desc'=>'Bagus'

        ]);

        DB::table('reviews')->insert([
            'name'=>'Martin',
            'game_id'=>'1',
            'category_id'=>'1',
            'recommended'=>'0',
            'review_desc'=>'Jelek'

        ]);

        
    }
}
