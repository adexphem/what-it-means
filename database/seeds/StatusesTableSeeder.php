<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s', strtotime('now'));

        DB::table('statuses')->insert([
            'status' => str_random(10),
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }
}
