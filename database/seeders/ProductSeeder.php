<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
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
            [
                'name'=>'Oppo Reno4',
                'price'=>'$300',
                'description'=>'8gb RAM 128gb Storage',
                'category'=>'Mobile phone',
                'gallery'=>'https://fdn2.gsmarena.com/vv/pics/oppo/oppo-reno4-2.jpg'
            ],
            [
                'name'=>'Samsung S12',
                'price'=>'$500',
                'description'=>'12gb RAM 128gb Storage',
                'category'=>'Mobile phone',
                'gallery'=>'https://mymobilesnews.com/wp-content/uploads/2021/09/Samsung-Galaxy-S12-Plus.jpg'
            ],
            [
                'name'=>'itel pop4',
                'price'=>'$100',
                'description'=>'2gb RAM 16gb Storage',
                'category'=>'Mobile phone',
                'gallery'=>'https://fdn2.gsmarena.com/vv/pics/tecno/tecno-pop4-1.jpg'
            ],
            [
                'name'=>'I phone 13pro',
                'price'=>'$600',
                'description'=>'12gb RAM 128gb Storage',
                'category'=>'Mobile phone',
                'gallery'=>'https://fdn2.gsmarena.com/vv/pics/apple/apple-iphone-13-pro-max-1.jpg'
            ],
            [
                'name'=>'Huawei y6p',
                'price'=>'$250',
                'description'=>'3gb RAM 64gb Storage',
                'category'=>'Mobile phone',
                'gallery'=>'https://www.gizbot.com/images/2020-06/oppo-reno4-pro-5g_1591609311170.jpg'
            ]
           
        ]);
    }
}
