<?php

namespace App\Exports;

use App\Models\CATC;
use Maatwebsite\Excel\Concerns\FromCollection;

class CatcExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return CATC::all();
    }
}
