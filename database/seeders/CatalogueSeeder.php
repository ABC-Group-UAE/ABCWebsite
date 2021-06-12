<?php


use Carbon\Carbon;
use App\catalogue;
use Illuminate\Database\Seeder;
class CatalogueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        catalogue::insert([
            ['catalogue_name' => 'Laptops', 'category_ID' => 'S','PathVariable' => '0.jpg', 'pdfPath' => '1.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['catalogue_name' => 'Desktops', 'category_ID' => 'A','PathVariable' => '1.jpg', 'pdfPath' => '0.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['catalogue_name' => 'Mobile Phones', 'category_ID' => 'Z','PathVariable' => '2.jpg', 'pdfPath' => '3.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['catalogue_name' => 'Tablets', 'category_ID' => 'K','PathVariable' => '3.jpg', 'pdfPath' => '0.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['catalogue_name' => 'TVs', 'category_ID' => 'F','PathVariable' => '4.jpg', 'pdfPath' => '0.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['catalogue_name' => 'Digital Cameras', 'category_ID' => 'FC','PathVariable' => '1.jpg', 'pdfPath' => '0.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['catalogue_name' => 'Appliances', 'category_ID' => 'C','PathVariable' => '0.jpg', 'pdfPath' => '0.jpg', 'created_at' => $now, 'updated_at' => $now],
            
           
        ]);
    }
}
