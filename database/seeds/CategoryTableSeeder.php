<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
        	'football',
        	'basketball',
        	'tenis',
        	'box',
        ];

        foreach ($categories as $category){
        	DB::table('categories')->insert(['name' => $category,]); 
        }

    }
}
