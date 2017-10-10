<?php

use Illuminate\Database\Seeder;

class DocumentationsSeeder extends Seeder
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
        	DB::table('documentations')->insert(
	        	[
	        		'user_id' => rand(1,10),
                    'subject_id' => rand(1,7),
	        		'title' => 'Documentation '.$i.' là gì',
	        		'title_url' => 'Documentation-'.$i.'-la-gi',
	        		'content' => 'Nội Dung Documentation '.$i.' là gì',
	        		'link' => 'google.com',
	            	'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
	        	]
        	);
        }
    }
}
