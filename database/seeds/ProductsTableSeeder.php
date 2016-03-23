<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($c=1;$c<7;$c++)
        {
            for ($i=0;$i<5;$i++)
            {
                DB::table('products')->insert([
                    'name'=>'product name '.$i,
                    'title'=>'product title'.$i,
                    'description'=>'description '.$i,
                    'keywords'=>'keywords '.$i,
                    'mainpic'=>'mainpic '.$i,
                    'profile'=>'profile '.$i,
                    'main'=>'main '.$i,
                    'standard'=>'standard '.$i,
                    'options'=>'options '.$i,
                    'categorypic'=>'categorypic '.$i,
                    'categorypara'=>'categorypara '.$i,
                    'category_id'=>$c,
                ]);
            } 
        }
        
    }
}
