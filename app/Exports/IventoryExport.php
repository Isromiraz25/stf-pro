<?php

namespace App\Exports;

use App\Models\Iventory;
use Maatwebsite\Excel\Concerns\FromCollection;

class IventoryExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Iventory::all();
    }
}
