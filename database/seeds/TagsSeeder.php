<?php

use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
        	['user_id'=>rand(1,10), 'name'=>'PHP', 'description'=>'PHP iz da bezt', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        	['user_id'=>rand(1,10), 'name'=>'C#', 'description'=>'C# iz da bezt', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        	['user_id'=>rand(1,10), 'name'=>'AngularJS', 'description'=>'AngularJS iz da bezt', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        	['user_id'=>rand(1,10), 'name'=>'Android', 'description'=>'Android iz da bezt', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        	['user_id'=>rand(1,10), 'name'=>'Java', 'description'=>'Java iz da bezt', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        	['user_id'=>rand(1,10), 'name'=>'C++', 'description'=>'C++ iz da bezt', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        	['user_id'=>rand(1,10), 'name'=>'Python', 'description'=>'Python iz da bezt', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        	['user_id'=>rand(1,10), 'name'=>'MongoDB', 'description'=>'MongoDB iz da bezt', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        	['user_id'=>rand(1,10), 'name'=>'SQL', 'description'=>'SQL iz da bezt', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        	['user_id'=>rand(1,10), 'name'=>'MySQL', 'description'=>'MySQL iz da bezt', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        	['user_id'=>rand(1,10), 'name'=>'Laravel', 'description'=>'Laravel iz da bezt', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        	['user_id'=>rand(1,10), 'name'=>'NodeJS', 'description'=>'NodeJS iz da bezt', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        	['user_id'=>rand(1,10), 'name'=>'Reactive', 'description'=>'Reactive iz da bezt', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        	['user_id'=>rand(1,10), 'name'=>'ExpressJS', 'description'=>'ExpressJS iz da bezt', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        	['user_id'=>rand(1,10), 'name'=>'iOS', 'description'=>'iOS iz da bezt', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        	['user_id'=>rand(1,10), 'name'=>'CSS', 'description'=>'CSS iz da bezt', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        	['user_id'=>rand(1,10), 'name'=>'JavaScript', 'description'=>'JavaScript iz da bezt', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        	['user_id'=>rand(1,10), 'name'=>'ASP.NET', 'description'=>'ASP.NET iz da bezt', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        	['user_id'=>rand(1,10), 'name'=>'R', 'description'=>'R iz da bezt', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        	['user_id'=>rand(1,10), 'name'=>'HTML', 'description'=>'HTML iz da bezt', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        	]);
    }
}
