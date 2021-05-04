<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->insert([
            'name' => 'Porsche Carrera',

            'price' => '$300.000.000',


        ]);
        \DB::table('products')->insert([
            'name' => 'Bugatti Veyron',

            'price' => '$700.500.000',


        ]);
        \DB::table('products')->insert([
            'name' => 'Chevrolet Corvette',

            'price' => '$330.450.000',


        ]);
        \DB::table('products')->insert([
            'name' => 'Dodge Viper',

            'price' => '$220.400.000',


        ]);
        \DB::table('products')->insert([
            'name' => 'Shelby Cobra',

            'price' => '$550.230.000',


        ]);
        \DB::table('products')->insert([
            'name' => 'Ferrari Testarrosa',

            'price' => '$100.900.000',


        ]);
        \DB::table('products')->insert([
            'name' => 'Ford Mustang',

            'price' => '$600.000.000',


        ]);
        \DB::table('products')->insert([
            'name' => 'BMW E30',

            'price' => '$999.000.000',


        ]);

    }
}
