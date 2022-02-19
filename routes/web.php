<?php

use App\Http\Livewire\HomeComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ContactComponenet;
use App\Http\Controllers\PaytmController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ExportDataController;
use App\Http\Livewire\ServiceDetailsComponent;
use App\Http\Controllers\admin\ChartController;
use App\Http\Livewire\Admin\AdminUsersComponent;
use App\Http\Livewire\Admin\AdminServiceProvider;
use App\Http\Livewire\ServiceCategoriesComponent;

use App\Http\Livewire\Admin\AdminContactComponent;
use App\Http\Livewire\Admin\AdminProfileComponent;
use App\Http\Livewire\ServicesByCategoryComponent;
use App\Http\Livewire\Admin\AdminServicesComponent;
use App\Http\Livewire\Admin\AdminAddServiceProvider;
use App\Http\Livewire\Admin\AdminDashboardComponent;

use App\Http\Livewire\Admin\AdminAddServiceComponent;
use App\Http\Livewire\Admin\AdminEditServiceComponent;
use App\Http\Livewire\Customer\CustomerChangePassword;
use App\Http\Livewire\Admin\AdminUpdateProfileComponent;
use App\Http\Livewire\Customer\CustomerProfileComponent;
use App\Http\Livewire\Sprovider\SproviderChangePassword;
use App\Http\Livewire\Admin\AdminChangePasswordComponent;
use App\Http\Livewire\Customer\CustomerFeedbackComponent;
use App\Http\Livewire\Admin\AdminServiceCategoryComponent;
use App\Http\Livewire\Customer\CustomerDashboardComponent;
use App\Http\Livewire\Sprovider\SproviderProfileComponent;
use App\Http\Livewire\Sprovider\SproviderServicesComponent;
use App\Http\Livewire\Customer\EditCustomerProfileComponent;
use App\Http\Livewire\Sprovider\SproviderDashboardComponent;
use App\Http\Livewire\Admin\AdminAddServiceCategoryComponent;
use App\Http\Livewire\Admin\AdminServicesByCategoryComponent;
use App\Http\Livewire\Admin\AdminEditServiceCategoryComponent;
use App\Http\Livewire\Sprovider\EditSproviderProfileComponent;
use App\Http\Livewire\Sprovider\SproviderAddServicesComponent;
use App\Http\Livewire\Sprovider\SproviderEditServicesComponent;

Route::get('/', HomeComponent::class)->name('home'); //->middleware('verified');
Route::get('/service-categories', ServiceCategoriesComponent::class)->name('home.service_categories');

Route::get('/{category_slug}/services',ServicesByCategoryComponent::class)->name('home.services_by_category');

Route::get('/{category_slug}/services', ServicesByCategoryComponent::class)->name('home.services_by_category');

Route::get('/autocomplete', [SearchController::class, 'autocomplete'])->name('autocomplete');
Route::post('/search', [SearchController::class, 'searchService'])->name('searchService');

Route::get('/contact-us', ContactComponenet::class)->name('home.contact');


//paytm
Route::get('/payment',[PaytmController::class,'index'])->name('payment');
Route::post('/paytm-store',[PaytmController::class,'store'])->name('paytm-store');
Route::post('/paytm-callback',[PaytmController::class,'paytmCallback'])->name('paytm-callback');
//paytm End
// Excel 
Route::get('/admin/service-provider/export-csv', [ExportDataController::class,'export'])->name('admin.export_service_provider');
Route::get('/admin/user/export-csv', [ExportDataController::class,'export_customer'])->name('admin.export_customer');
Route::get('/admin/service-categories/export-csv', [ExportDataController::class,'export_scategories'])->name('admin.export_service_categories');
Route::get('/admin/all-services/export-csv', [ExportDataController::class,'export_services'])->name('admin.export_all_services');
Route::get('/admin/contacts/export-csv', [ExportDataController::class,'export_contact'])->name('admin.export_contacts');
Route::get('/sprovider/all-services/export-csv', [ExportDataController::class,'export_sprovider_services'])->name('sprovicer.export_all_services');
Route::get('/sprovider/dashboard/export-csv', [ExportDataController::class,'export_work_history'])->name('sprovicer.export_work_history');
// Excel End

//customer
Route::middleware(['auth:sanctum','verified'])->group(function () {
    Route::get('/service/{service_slug}', ServiceDetailsComponent::class)->name('home.service_details');
    Route::get('/customer/dashboard', CustomerDashboardComponent::class)->name('customer.dashboard');
    Route::get('/customer/feedback', CustomerFeedbackComponent::class)->name('customer.feedback');
    Route::get('/customer/profile', CustomerProfileComponent::class)->name('customer.profile');
    Route::get('/customer/profile/edit', EditCustomerProfileComponent::class)->name('customer.edit_profile');
    Route::get('/customer/ChangePassword', CustomerChangePassword::class)->name('customer.changepassword');
});

//For S Provider
Route::middleware(['auth:sanctum', 'authsprovider'])->group(function () {
    Route::get('/sprovider/dashboard', SproviderDashboardComponent::class)->name('sprovider.dashboard');
    Route::get('/sprovider/profile', SproviderProfileComponent::class)->name('sprovider.profile');
    Route::get('/sprovider/profile/edit', EditSproviderProfileComponent::class)->name('sprovider.edit_profile');
    Route::get('/sprovider/ChangePassword', SproviderChangePassword::class)->name('sprovider.changepassword');
    Route::get('/sprovider/all-services', SproviderServicesComponent::class)->name('sprovider.all_services');
    Route::get('/sprovider/service/add',SproviderAddServicesComponent::class)->name('sprovider.add_service');
    Route::get('/sprovider/service/edit/{service_slug}',SproviderEditServicesComponent::class)->name('sprovider.edit_service');
});

// For Admin
Route::middleware(['auth:sanctum', 'authadmin'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/admin_Profile', AdminProfileComponent::class)->name('admin.profile');
    Route::get('/admin/Update_Profile', AdminUpdateProfileComponent::class)->name('admin.update_profile');
    Route::get('/admin/contacts', AdminContactComponent::class)->name('admin.contacts');
    Route::get('/admin/service-categories', AdminServiceCategoryComponent::class)->name('admin.service_categories');
    Route::get('/admin/service-categories/add', AdminAddServiceCategoryComponent::class)->name('admin.add_service_categories');
    Route::get('/admin/service-categories/edit/{category_id}', AdminEditServiceCategoryComponent::class)->name('admin.edit_service_categories');
    Route::get('/admin/service-provider/add', AdminAddServiceProvider::class)->name('admin.add_service_provider');
    Route::post('/admin/service-provider/add', AdminAddServiceProvider::class)->name('admin.add_service_provider');
    Route::get('/admin/all-services', AdminServicesComponent::class)->name('admin.all_services');
    Route::get('/admin/service/add',AdminAddServiceComponent::class)->name('admin.add_service');
    Route::get('/admin/service/edit/{service_slug}',AdminEditServiceComponent::class)->name('admin.edit_service');
    Route::get('/admin/{category_slug}/services', AdminServicesByCategoryComponent::class)->name('admin.services_by_category');
    Route::get('/admin/service-provider', AdminServiceProvider::class)->name('admin.service_provider');
    Route::get('/admin/Users', AdminUsersComponent::class)->name('admin.users');
    Route::get('/admin/ChangePassword', AdminChangePasswordComponent::class)->name('admin.changepassword');
});


Route::get('/chart',[ChartController::class,'barchart'])->name('admin.chart');