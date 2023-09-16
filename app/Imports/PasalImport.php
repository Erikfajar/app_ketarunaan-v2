<?php

namespace App\Imports;

use App\Models\pasal;
use Maatwebsite\Excel\Concerns\ToModel;

class PasalImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new pasal([
            'pasal'     => $row[0],
        ]);
    }
}
