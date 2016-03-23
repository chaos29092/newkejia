<?php

use Illuminate\Database\Seeder;

class CategorysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1;$i<7;$i++)
        {
            DB::table('categorys')->insert([
                'category' => 'cate_'.$i,
            ]);
        }
        
    }
}
