<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                ['name' => 'Tin Thời Sự', 'slug' => 'tin-thoi-su', 'order' => 1],
                ['name' => 'Tin Giải Trí', 'slug' => 'tin-giai-tri', 'order' => 2],
                ['name' => 'Tin Thể Thao', 'slug' => 'tin-the-thao', 'order' => 3],
                ['name' => 'Video', 'slug' => 'video', 'order' => 4]
            ]
        );
    }
}
