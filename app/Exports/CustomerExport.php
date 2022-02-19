<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class CustomerExport implements FromCollection
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
        return ["Id", "Name","Email","Phone","Address"];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    { 
        return User::select('id','name','email','phone','address')->where('u_type','CST')->get();
    }
}
