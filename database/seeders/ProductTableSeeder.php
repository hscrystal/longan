<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert(
            array(
                [
                    'code' => 'P001',
                    'name' => 'เสือหมอบ JAVA',
                    'category_id' => 1,
                    'price' => 11900,
                    'stock_qty' => 2
                ],
                [
                    'code' => 'P002',
                    'name' => 'เสือหมอบวินเทจ Cannello Silvia',
                    'category_id' => 1,
                    'price' => 5000,
                    'stock_qty' => 4
                ],
                [
                    'code' => 'P003',
                    'name' => 'เสือหมอบ Panther March',
                    'category_id' => 1,
                    'price' => 6500,
                    'stock_qty' => 2
                ],
                [
                    'code' => 'P004',
                    'name' => 'Shimano รุ่น XC3',
                    'category_id' => 2,
                    'price' => 2490,
                    'stock_qty' => 5
                ],
                [
                    'code' => 'P005',
                    'name' => 'Landing Gear (Third Wheel)',
                    'category_id' => 5,
                    'price' => 1100,
                    'stock_qty' => 2
                ],[
                    'code' => 'P006',
                    'name' => 'หมวกจักรยานเด็ก Cratoni รุ่น Maxster',
                    'category_id' => 5,
                    'price' => 1300,
                    'stock_qty' => 10
                ],[
                    'code' => 'P007',
                    'name' => 'Trainer จักรยาน Trainer Elite รุ่น Suito',
                    'category_id' => 6,
                    'price' => 27000,
                    'stock_qty' => 2
                ],
                [
                    'code' => 'P008',
                    'name' => 'ไมล์จักรยาน Wahoo ELEMNT ROAM',
                    'category_id' => 6,
                    'price' => 14000,
                    'stock_qty' => 2
                ],
                [
                    'code' => 'P009',
                    'name' => 'แว่น Goggle 100% รุ่น ฺBARSTOW Goggle',
                    'category_id' => 4,
                    'price' => 8000,
                    'stock_qty' => 5
                ],
                [
                    'code' => 'P010',
                    'name' => 'เสื้อ ZOOT MEN LTD TRI RACESUIT',
                    'category_id' => 2,
                    'price' => 6500,
                    'stock_qty' => 6
                ],
            )
        );
    }
}
