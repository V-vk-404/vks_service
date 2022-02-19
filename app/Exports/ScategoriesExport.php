<?php

namespace App\Exports;

use App\Models\ServiceCategory;
use Maatwebsite\Excel\Concerns\FromCollection;

class ScategoriesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ','
        ];
    }

    public function headings(): array
    {
        return ["Id", "Name","Featured"];     
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    { 
        return ServiceCategory::select('id','name','featured')->get();
    }
}
