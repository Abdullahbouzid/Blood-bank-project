<?php

use App\Http\Controllers\Visitor_Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Center_Controller;
use App\Http\Controllers\Bank_Controller;
use App\Http\Controllers\countController;
use App\Http\Controllers\Emp_Controller;
use App\Http\Controllers\Request_Controller;
use App\Http\Controllers\Donation_Controller;
use App\Http\Controllers\StorageController;
use App\Models\Visitor;
use App\Http\Controllers\FormCheck;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ################ VIEW ######################

Route::view("/", 'index');

// اختصار لعرض شاشة تسجيل الدخول الخاصة ب الموظف و الادمن 
Route::view("/login_admin", 'login_admin');

Route::view("/login_emp", 'login_employee');

Route::view("/home", 'home');

Route::view("/blood_donation", 'blood_donation');

Route::view("/Blood_Request", 'BloodRequest');

Route::get('/Blood_Center', function () {
    return view('Blood_Center');
});

Route::view("/about", 'about');

Route::get('/CreateAccount', function () {
    return view("create_visitor");
});
Route::view("/myaccount", 'myaccount');

Route::get('/dashboard', function () {
    return view('/Dashboards.dashboard');
});

Route::get('/empcontrol', function () {
    return view('/Dashboards.empcontrol');
});


Route::get('/visitcontrol', function () {
    return view('/Dashboards.visitcontrol');
});
Route::get('/bankcontrol', function () {
    return view('/Dashboards.bankcontrol');
});
Route::get('/admincontrol', function () {
    return view('/Dashboards.admincontrol');
});

Route::get('/centercontrol', function () {
    return view('/Dashboards.centercontrol');
});
Route::get('/donationcontrol', function () {
    return view('/Dashboards.donationcontrol');
});

Route::get('/requestcontrol', function () {
    return view('/Dashboards.requestcontrol');
});
Route::get('/blood_storage', function () {
    return view('/Dashboards.blood_storage');
});


// ################ POST ######################
Route::post('/CreateAccount', [Visitor_Controller::class, 'store']);

Route::post('/blood_donation', [Donation_Controller::class, 'store']);

Route::post("/Blood_Request", [Request_Controller::class, 'store']);

Route::post("/", [Visitor_Controller::class, 'loginUser']);

Route::post("/login_admin", [Emp_Controller::class, 'login']);

// ############################################


// استقبال طلبات الدم
// Route::get("/BloodRequest/create",[Request_Controllers::class,'requestPatient']);
// Route::post("/BloodRequest", [Request_Controller::class, 'requestPatient']);

// عرض مراكز التبرع
Route::get('/Blood_Center', [Center_Controller::class, 'showselect']);

Route::get('/blood_donation', [Donation_Controller::class, 'showCenters']);



// tast 

// Route::get('/tast', [Center_Controller::class, 'showselect']);
// Route::post('/tast', [Center_Controller::class, 'searchselect']);

################# Dashboard #########################


//وحدة التحكم عرض عدد جميع المتطلبات
Route::get('/dashboard', [countController::class, 'Show_count']);


##############وحدة التحكم في للموظفين ################

// وحدة التحكم عرض المصارف
Route::get('/bankcontrol', [Bank_Controller::class, 'index'])->name('bankcontrol.index');
//add new bank
Route::post('/bankcontrol', [Bank_Controller::class, 'store']);

//حذف صف في المصرف بناء على رقم المصرف
Route::delete('/bankcontrol/{bank}', [Bank_Controller::class, 'destroy'])->name('bankcontrol.destroy');
//تعديل بيانات مصرف معين
// Route::post('/bankcontrol/update', [Bank_Controller::class, 'update'])->name('bankcontrol.update');



####وحدة التحكم في للموظفين ########
// show emp
Route::get('/empcontrol', [Emp_Controller::class, 'show_Emp'])->name('empcontrol.show_Emp');
//حذف موظف
Route::delete('/empcontrol/{emp}', [Emp_Controller::class, 'destroy'])->name('empcontrol.destroy');

Route::post('/empcontrol', [Emp_Controller::class, 'store']);

// Route::get('/empcontrol/{emp}', [Emp_Controller::class, 'getWorkplaces'])->name('control.getWorkplaces');





##############وحدة التحكم في المسؤولين#############
//show the admins in dashboard
Route::get('/admincontrol', [Emp_Controller::class, 'show_Admin'])->name('show admin only');


#########وحدة التحكم في المراكز##################
//وحدة التحكم عرض مراكز التبرع
Route::get('/centercontrol', [Center_Controller::class, 'show_center_incontrol'])->name('centercontrol.index');
//حفظ بيانات مركز
Route::post('/centercontrol', [Center_Controller::class, 'store']);
//
Route::delete('/centercontrol/{Center}', [Center_Controller::class, 'destroy'])->name('centercontrol.destroy');



################وحدة التحكم في طلبات  طلب الدم################
Route::get('/requestcontrol', [Request_Controller::class, 'show_request'])->name('requestcontrol.index');

Route::delete('/requestcontrol/{req}', [Request_Controller::class, 'destroy'])->name('requestcontrol.destroy');







################وحدة التحكم في طلبات التبرع################
Route::get('/donationcontrol', [Donation_Controller::class, 'show_donation'])->name('donationcontrol.index');
Route::delete('/donationcontrol/{don}', [Donation_Controller::class, 'destroy'])->name('donationcontrol.destroy');


##### //وحدة التحكم في الزائرين #####
//وحدة التحكم عرض بيانات المستخدمين
Route::get('/visitcontrol', [Visitor_Controller::class, 'index'])->name('visitcontrol.index');
//حذف صف في المصرف بناء على رقم المصرف
Route::delete('/visitcontrol/{vitsit}', [Visitor_Controller::class, 'destroy'])->name('visitcontrol.destroy');


###########وحدة التجكم في المخزون#######
Route::get('/blood_storage', [StorageController::class, 'index'])->name('blood_storage.index');

// Route::get('/blood_storage', [countController::class, 'Show_count_ofBlood']);
