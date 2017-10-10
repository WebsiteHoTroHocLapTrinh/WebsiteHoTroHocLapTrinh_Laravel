<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $job = array(
            'Học sinh',
            'Sinh viên',
            'Lập trình viên',
            'Nhân viên văn phòng',
            'Giám đốc'
        );
        for($i = 1; $i <= 10; $i++)
        {
        	DB::table('users')->insert(
	        	[
	        		'permission_id' => rand(1,2),
	        		'name' => 'User_'.$i,
	        		'about' => 'Hi, I am User_'.$i,
                    'location' => 'TP.HCM',
                    'age' => rand(18,30),
                    'job' => $job[rand(0,4)],
	        		'avatar' => 'k17.jpg',
	            	'email' => 'user_'.$i.'@gmail.com',
	            	'password' => bcrypt('123456'),
                    'last_online' => new DateTime(),
	            	'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
	        	]
        	);
        }
    }
}
