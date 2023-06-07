<?php

namespace App\Imports;

use App\Models\excel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ExcelImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new excel([
            // return Excel
            'kodepos' => $row['kodepos'],
        ]);
    }

    public function headingRow(): int
    {
        return 1;
    }
}
