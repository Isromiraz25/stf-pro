<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Server extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('server')->insert([
            'ippublic' => '123123123',
            'ssh' => '57100',
            'user' => 'DGGDGJDGJD',
            'pass' => 'DGGDGJDGJD',
            'ket' => 'androidBox',
        ]);
    }
}
