<?php

namespace App\Imports;

use App\Models\DPA;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DPAImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DPA([
            'dpa_provin' => $row['dpa_provin'],
            'dpa_despro'=> $row['dpa_despro'],
            'dpa_canton' => $row['dpa_canton'],
            'dpa_descan' => $row['dpa_descan'],
            'dpa_parroq' => $row['dpa_parroq'],
            'dpa_despar' => $row['dpa_despar'],
            'dpa_parurb' => $row['dpa_parurb'],
            'dpa_desparurb' => $row['dpa_desparurb'],
        ]);
    }
}
