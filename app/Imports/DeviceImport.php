<?php

namespace App\Imports;

use App\Models\Device;
use Maatwebsite\Excel\Concerns\ToModel;

class DeviceImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Device([
            "ipserver" => $row[1],
            "port" => $row[2],
            "serial" => $row[3],
            "location" => $row[4],
            "detaillocation" => $row[5],
            "bank1" => $row[6],
            "bank2" => $row[7],
            "bank3" => $row[8],
            "bank4" => $row[9],
        ]);
    }
}
