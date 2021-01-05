<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call('UserSeeder');
    }
}
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('users')->insert([
        // 	[
        // 		'name' =>'Nam Nguyễn',
        // 		'email' =>'namnguyen20132674@gmail.com',
        // 		'password'=>Hash::make('1'),
        //         'role' => 1,
        //         'sex' => 1,
        //         'phone' => '0848384333',
        // 	]
        	
        // 	]
        // );
        // DB::table('labs')->insert([
        //     [
        //         'name' =>'Lab 1',
        //         'type' =>1,
        //         'seat'=>100,
                
        //     ]

            
        //     ]
        // );
        for($i=0;$i<14;$i++){
            $name = 'a'.$i;
            DB::table('seats')->insert([
                
                    [
                        'name' =>$name,
                        'lab_id' =>1,
                    ]
                
                ]
            );
        }
        for($i=0;$i<14;$i++){
            DB::table('seats')->insert([
                
                    [
                        'name' =>'B'.$i,
                        'lab_id' =>1,
                    ]
                
                ]
            );
        }
        for($i=0;$i<14;$i++){
            DB::table('seats')->insert([
                
                    [
                        'name' =>'C'.$i,
                        'lab_id' =>1,
                    ]
                
                ]
            );
        }
        for($i=0;$i<14;$i++){
            DB::table('seats')->insert([
                
                    [
                        'name' =>'D'.$i,
                        'lab_id' =>1,
                    ]
                
                ]
            );
        }
    }
}