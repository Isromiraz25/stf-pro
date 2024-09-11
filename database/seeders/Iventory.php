<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Iventory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('iventory')->insert([
            'namabarang' => '123123123',
            'stockin' => '57100',
            'stockout' => 'DGGDGJDGJD',
            'stock' => 'DGGDGJDGJD', 
        ]);
    }
}
