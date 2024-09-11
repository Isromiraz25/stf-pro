<?php

namespace App\Imports;

use App\Models\Server;
use Maatwebsite\Excel\Concerns\ToModel;

class ServerImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Server([
            "ippublic" => $row[1],
            "ssh" => $row[2],
            "user" => $row[3],
            "pass" => $row[4],
            "ket" => $row[5],

        ]);
    }
}
