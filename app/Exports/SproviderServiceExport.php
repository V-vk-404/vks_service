<?php

namespace App\Exports;

use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;

class SproviderServiceExport implements FromCollection
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
        return ["Id", "Name","Slug","Price","Status","Created_At"];     
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    { 
        return Service::select('id','name','slug','price','status','created_at')->where('sprovider_id',Auth::user()->id)->get();
    }
}
