<?php

use Illuminate\Database\Seeder;

class MainDatabaseSeeder extends Seeder{
    public function run(){
              
        DB::table('programs')->insert([
            ['name'=>'program1', 'user_id'=>1,'level'=> 0, 'content'=>'program1', 'images'=>'abc.jpg'],
            ['name'=>'program2', 'user_id'=>1,'level'=> 0, 'content'=>'program2', 'images'=>'abc.jpg'],
            ['name'=>'program3', 'user_id'=>1,'level'=> 0, 'content'=>'program3', 'images'=>'abc.jpg'],
            ['name'=>'program4', 'user_id'=>1,'level'=> 0, 'content'=>'program4', 'images'=>'abc.jpg'],
            ['name'=>'program5', 'user_id'=>1,'level'=> 0, 'content'=>'program5', 'images'=>'abc.jpg']
            ]);
        
        DB::table('schedules')->insert([
            ['program_id'=>1,'name'=>'ngay thu 1'],
            ['program_id'=>1,'name'=>'ngay thu 2'],
            ['program_id'=>1,'name'=>'ngay thu 3'],
            ['program_id'=>1,'name'=>'ngay thu 4'],
            ['program_id'=>1,'name'=>'ngay thu 5'],
            ['program_id'=>1,'name'=>'ngay thu 6']
        ]);
        
        DB::table('actions')->insert([
            ['name'=>'run','schedule_id'=>1,'time'=>'7:00','during_time'=>'15 minutes'],
            ['name'=>'swim','schedule_id'=>1,'time'=>'10:00','during_time'=>'15 minutes'],
            ['name'=>'jump','schedule_id'=>1,'time'=>'17:00','during_time'=>'15 minutes']
        ]);
        
    }
}
