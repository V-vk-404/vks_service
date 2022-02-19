<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class SproviderExport implements FromCollection{
    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ','
        ];
    }

    public function headings(): array
    {
        return ["Id", "Name","Phone","Address"];     
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    { 
        return User::select('id','name','phone','address')->where('u_type','SPV')->get();
    }
}
