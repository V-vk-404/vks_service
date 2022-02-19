<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use App\Exports\ContactExport;
use App\Exports\ServiceExport;
use App\Exports\CustomerExport;
use App\Exports\SproviderExport;
use App\Exports\ScategoriesExport;
use App\Exports\SproviderServiceExport;
use App\Exports\SproviderWorkHistoryExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportDataController extends Controller
{
    public function export() 
    {
        return Excel::download(new SproviderExport, 'Service-Provider'.time().'.csv');
    }

    public function export_customer() 
    {
        return Excel::download(new CustomerExport, 'Customer'.time().'.csv');
    }
    
    public function export_scategories() 
    {
        return Excel::download(new ScategoriesExport, 'Service-Categories'.time().'.csv');
    }
    public function export_services() 
    {
        return Excel::download(new ServiceExport, 'Services'.time().'.csv');
    }
    public function export_contact() 
    {
        return Excel::download(new ContactExport, 'Contact'.time().'.csv');
    }
    public function export_sprovider_services() 
    {
        return Excel::download(new SproviderServiceExport, 'Sprovider_Services'.time().'.csv');
    }
    public function export_work_history() 
    {
        return Excel::download(new SproviderWorkHistoryExport, 'Sprovider_Work_History'.time().'.csv');
    }
}
