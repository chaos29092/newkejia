<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('CategorysTableSeeder');
        $this->call('ProductsTableSeeder');
        $this->call('ModelsTableSeeder');
        
    }
}
