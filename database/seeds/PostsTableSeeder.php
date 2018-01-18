<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
        	'title' => 'Leo Messi score a hattrick',
        	'category_id' => 1,
            'image' => '1513082035.jpg',
        	'description' => 'Leo Messi score a hattrickLeo Messi score a hattrickLeo Messi score a hattrickLeo Messi score a hattrickLeo Messi score a hattrick :D :D',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s.u'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s.u')

        ]);

        DB::table('posts')->insert([
        	'title' => 'Chelsea vs Barcelona',
        	'category_id' => 1,
            'image' => '1513082035.jpg',
        	'description' => 'UEFA Champions league 16 rounds :D :D',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s.u'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s.u')

        ]);

        DB::table('posts')->insert([
        	'title' => 'Lebron score a 100points',
        	'category_id' => 2,
            'image' => '1513082035.jpg',
        	'description' => 'Lebron score a 100pointsLebron score a 100pointsLebron score a 100pointsLebron score a 100pointsLebron score a 100pointsLebron score a 100points :D :D',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s.u'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s.u')

        ]);

        DB::table('posts')->insert([
        	'title' => 'Grishooo Machkaii ',
        	'category_id' => 3,
            'image' => '1513082035.jpg',
        	'description' => 'Grishooo MachkaiiGrishooo MachkaiiGrishooo MachkaiiGrishooo MachkaiiGrishooo MachkaiiGrishooo MachkaiiGrishooo Machkaii :D :D',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s.u'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s.u')

        ]);

        DB::table('posts')->insert([
        	'title' => 'Grigor Dimitrov top 3 in world rank list ',
        	'category_id' => 3,
            'image' => '1513082035.jpg',
        	'description' => 'Grishooo MachkaiiGrishooo MachkaiiGrishooo MachkaiiGrishooo MachkaiiGrishooo MachkaiiGrishooo MachkaiiGrishooo Machkaii :D :D',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s.u'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s.u')

        ]);

        DB::table('posts')->insert([
        	'title' => 'Leo Messi score a 91 gools',
        	'category_id' => 1,
            'image' => '1513082035.jpg',
        	'description' => 'Leo Messi score a hattrickLeo Messi score a hattrickLeo Messi score a hattrickLeo Messi score a hattrickLeo Messi score a hattrick :D :D',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s.u'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s.u')

        ]);

        DB::table('posts')->insert([
        	'title' => 'Real vs PSG',
        	'category_id' => 1,
            'image' => '1513082035.jpg',
        	'description' => 'UEFA Champions league 16 rounds :D :D',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s.u'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s.u')

        ]);

        DB::table('posts')->insert([
        	'title' => 'Lebron score a 200points',
        	'category_id' => 2,
            'image' => '1513082035.jpg',
        	'description' => 'Lebron score a 100pointsLebron score a 100pointsLebron score a 100pointsLebron score a 100pointsLebron score a 100pointsLebron score a 100points :D :D',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s.u'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s.u')

        ]);

        DB::table('posts')->insert([
        	'title' => 'Klichkoo ',
        	'category_id' => 4,
            'image' => '1513082035.jpg',
        	'description' => 'KlichkooKlichkooKlichkooKlichkooi :D :D',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s.u'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s.u')

        ]);

        DB::table('posts')->insert([
        	'title' => 'Kobrata ',
        	'category_id' => 4,
            'image' => '1513082035.jpg',
        	'description' => 'KobrataKobrataKobrataKobrataKobrataKobrata',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s.u'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s.u')

        ]);
    }
}
