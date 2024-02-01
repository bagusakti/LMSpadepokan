<?php

namespace App\Imports;

use App\Models\CATC;
use Maatwebsite\Excel\Concerns\ToModel;

class CatcImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new CATC([
            'nama' => $row[1],
            'sekolah' => $row[2]

        ]);
    }
}
