<?php

namespace App\Exports;

use App\Models\Paytm;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;

class SproviderWorkHistoryExport implements FromCollection
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
        return ["Id", "User Name","Service Name","Amount","Order Id","Created_At"];     
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    { 
        return Paytm::select('id','user_name','slug_name','price','order_id','created_at')->where('sprovider_id',Auth::user()->id)->get();
    }
}
