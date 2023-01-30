<?php

namespace App\Exports;

use App\Models\Pembangunan;
use Maatwebsite\Excel\Concerns\FromCollection;

class PembangunanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pembangunan::all();
    }
}
