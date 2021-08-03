<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ConversationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,7) as $index) {
            DB::table('conversations')->insert([
                'user_id' => rand(1,8),
                'title' => $faker -> sentence(2),
                'body' => $faker -> paragraph(8)
            ]);
        }
    }
}
