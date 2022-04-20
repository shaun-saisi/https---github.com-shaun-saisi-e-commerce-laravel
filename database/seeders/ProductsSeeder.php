<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'name'=>'Samsung mobile',
            'price'=>"$200",
            "description"=>" 4gb RAM , 64gb Storage",
            "category"=>"mobile phone",
            "gallery"=>"https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.gsmarena.com%2Fsamsung_galaxy_s10-pictures-9536.php&psig=AOvVaw3X1iCd0quNOh4pJGyeFIRH&ust=1648281479345000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCNjKvZLl4PYCFQAAAAAdAAAAABAD"
        ]);
    }
}
