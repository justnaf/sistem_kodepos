<?php

namespace App\Imports;

use App\Models\base;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class BaseImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new base([
            // return base
            'kodepos' => $row[1],
            'kelurahan' => $row[2],
            'kecamatan' => $row[3],
            'kabupaten' => $row[4],
            'provinsi' => $row[5],
        ]);
    }

    public function startRow(): int
    {
        return 2;
    }
}
