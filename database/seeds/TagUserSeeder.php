<?php

use Illuminate\Database\Seeder;

class TagUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	for ($i=1; $i <= 10; $i++) { 
            $n = rand(3,5);
            for ($j=1; $j <= $n; $j++) { 
                DB::table('tag_user')->insert([
                    'user_id' => $i,
                    'tag_id' => rand(1,20),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ]);
            }
        }
    }
}
