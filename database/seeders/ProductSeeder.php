<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            'name' => "Iphone 15",
            'description' => "Mobile Phone Apple",
            'amount' => 980
    ]);
    DB::table('products')->insert([
            'name' => "Ipad 15",
            'description' => "Table Apple",
            'amount' => 550
    ]);
    DB::table('products')->insert([
            'name' => "Playstation 5",
            'description' => "Videoconsole",
            'amount' => 950
    ]);
    }
}
