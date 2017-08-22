<?php

use Illuminate\Database\Seeder;

class LangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('langs')->insert([
            'name' => 'deutsch',
            'description' => '',
            'charset' => 'utf-8',
            'iso_3166_code' => 'de',
            'rewrite_key' => 'de',
            'rewrite_mapping' => 'standard',
            'is_start' => '1',
            'created_from' => 1,
            'updated_from' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
