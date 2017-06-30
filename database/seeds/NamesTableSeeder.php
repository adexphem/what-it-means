<?php

use Illuminate\Database\Seeder;

class NamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $commonNames = ['Adaramola','Adebankole','Majekodunmi'];
        array_map(function($name){
            $now = date('Y-m-d H:i:s', strtotime('now'));
            $meaningToName = str_random(60);

            DB::table('names')->insert([
                'name' => $name,
                'meaning' => $meaningToName,
                'user_id' => 1,
                'status_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }, $commonNames);
    }
}
