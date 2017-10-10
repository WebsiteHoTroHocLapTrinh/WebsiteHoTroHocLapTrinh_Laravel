<?php

use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 10; $i++)
        {
        	DB::table('questions')->insert(
	        	[
	        		'user_id' => rand(1,10),
	        		'title' => 'Question '.$i.' là gì',
	        		'title_url' => 'Question-'.$i.'-la-gi',
	        		'content' => 'Nội Dung Question '.$i.' là gì',
	            	'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
	        	]
        	);
        }
    }
}
