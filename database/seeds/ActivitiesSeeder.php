<?php

use Illuminate\Database\Seeder;

class ActivitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=0;$i++)
    	{
    		DB::table('activities')->insert(
    			[
    				'user_id' => rand(1,10),
    				'content' => 'Đã làm gì đó',
    				'created_at' => new DateTime(),
    				'updated_at' => new DateTime()
    			]
    		);
    	}
    }
}
