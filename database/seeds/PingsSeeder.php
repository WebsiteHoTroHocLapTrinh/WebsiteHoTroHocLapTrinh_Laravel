<?php

use Illuminate\Database\Seeder;

class PingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	for ($i=1; $i <= 30; $i++) { 
    		DB::table('pings')->insert([
    			'comment_id' => rand(1,100),
    			'user_id' => rand(1,10),
    			'created_at' => new DateTime(),
    			'updated_at' => new DateTime()
    		]);
    	}
    }
}
