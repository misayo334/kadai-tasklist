<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        for($i = 1; $i <= 100; $i++) {
            DB::table('tasks')->insert([
                'title' => 'test title ' . $i,
                'details' => 'test details ' . $i,
                'status' => 'test status comment ' . $i,
                'status_short' => 'open',
                'content' => 'test content ' . $i,
                'user_id' => "2"
            ]);
        }
    }
}
