<?php

use Illuminate\Database\Seeder;

class NavigationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navigations')->insert([
            'name' => 'Bordspellen',
            'url' => 'bordspellen',
            'admin' => 0,
        ]);
        
        DB::table('navigations')->insert([
            'name' => 'Puzzels',
            'url' => 'puzzels',
            'admin' => 0,
        ]);
        
        DB::table('navigations')->insert([
            'name' => 'About',
            'url' => 'about',
            'admin' => 0,
        ]);
        
        DB::table('navigations')->insert([
            'name' => 'Beheer producten',
            'url' => 'admin/products',
            'admin' => 1,
        ]);
        
        DB::table('navigations')->insert([
            'name' => 'Beheer categories',
            'url' => 'admin/categories',
            'admin' => 1,
        ]);
        
        DB::table('navigations')->insert([
            'name' => 'Beheer Orders',
            'url' => 'admin/orders',
            'admin' => 1,
        ]);
    }
}
