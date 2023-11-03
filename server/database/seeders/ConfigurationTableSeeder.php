<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ConfigurationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('configuration')->insert([
            array('del_flag' => false,
            'value' => 'technology university',
            'description' => 'Description about University',
            'type' => 'university', 
            'created_at' =>Carbon::now(), 
            'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag' =>false, 'value' => 'technology university', 'description' => 'Description about University', 'type' => 'university', 'created_at' =>Carbon::now(), 'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag' =>false, 'value' => 'technology university', 'description' => 'Description about University', 'type' => 'university', 'created_at' =>Carbon::now(), 'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag' =>false, 'value' => 'technology university', 'description' => 'Description about University', 'type' => 'university', 'created_at' =>Carbon::now(), 'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag' =>false, 'value' => 'technology university', 'description' => 'Description about University', 'type' => 'university', 'created_at' =>Carbon::now(), 'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag' =>false, 'value' => 'technology university', 'description' => 'Description about University', 'type' => 'university', 'created_at' =>Carbon::now(), 'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag' =>false, 'value' => 'technology university', 'description' => 'Description about University', 'type' => 'university', 'created_at' =>Carbon::now(), 'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag' =>false, 'value' => 'technology university', 'description' => 'Description about University', 'type' => 'university', 'created_at' =>Carbon::now(), 'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag' =>false, 'value' => 'technology university', 'description' => 'Description about University', 'type' => 'university', 'created_at' =>Carbon::now(), 'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag' =>false, 'value' => 'technology university', 'description' => 'Description about University', 'type' => 'university', 'created_at' =>Carbon::now(), 'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')),
        ]);
    }
}
