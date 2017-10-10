<?php

use Illuminate\Database\Seeder;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('subjects')->insert([
        	['user_id'=>rand(1,10), 'name' => 'Lập Trình', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        	['user_id'=>rand(1,10), 'name' => 'Microsoft Office', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        	['user_id'=>rand(1,10), 'name' => 'IT & Phần Mềm', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        	['user_id'=>rand(1,10), 'name' => 'Đồ Họa Hình Ảnh', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        	['user_id'=>rand(1,10), 'name' => 'Kinh Tế', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        	['user_id'=>rand(1,10), 'name' => 'Ngoại Ngữ', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        	['user_id'=>rand(1,10), 'name' => 'Kỹ Năng Mềm', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
            ['user_id'=>rand(1,10), 'name' => 'Khác', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        ]);
    }
}
