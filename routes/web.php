<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\CareerController;

use App\Http\Controllers\MemberController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\InsectAndDiseaseController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* User route start */

Route::get('/',  [UserController::class, 'home'])->name('home');

Route::get('/events', [UserController::class, 'events'])->name('events');

Route::get('/notice', [UserController::class, 'notice'])->name('notice');
Route::get('/noticeDetails/{id}', [UserController::class, 'noticeDetails'])->name('noticeDetails');


Route::get('/admission', [UserController::class, 'admission'])->name('admission');




Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');

Route::get('/memberRegistration', [UserController::class, 'memberRegistration'])->name('memberRegistration');
Route::post('/memberRegistration', [MemberController::class, 'store'])->name('memberRegistration.store'); 

Route::get('/treatment', [UserController::class, 'treatment'])->name('treatment');

Route::get('/fertilizer', [UserController::class, 'fertilizer'])->name('fertilizer');
Route::get('/foliarSpray', [UserController::class, 'foliarSpray'])->name('foliarSpray');
Route::get('/dolomite', [UserController::class, 'dolomite'])->name('dolomite');

Route::get('/shadeTree', [UserController::class, 'shadeTree'])->name('shadeTree');
Route::get('/gardenPruning', [UserController::class, 'gardenPruning'])->name('gardenPruning');
Route::get('/matureGardenPruning', [UserController::class, 'matureGardenPruning'])->name('matureGardenPruning');
Route::get('/afterPruning', [UserController::class, 'afterPruning'])->name('afterPruning');

Route::get('/blog', [UserController::class, 'blog'])->name('blog');
// Route::get('/treatment/{type}/{id}', [UserController::class, 'treatment'])->name('treatment.details');

// Route::get('/phpinfo', function() {
//     return phpinfo();
// });

/* User route end */


/* Admin route start */
Auth::routes();
/* Logout route start */
    // Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
/* Logout route end */
Route::group(['middleware'=>'auth'], function () {

    // dashboard
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    //--Member [start]--//
    Route::get('/MemberList', [MemberController::class, 'showMemberList'])->name('MemberList');
    Route::get('/pendingMemberList', [MemberController::class, 'showPendingMember'])->name('pendingMemberList');
    Route::get('/viewMember/{id}', [MemberController::class, 'viewMember'])->name('viewMember');
    Route::post('/approveMember', [MemberController::class, 'approveMember'])->name('approveMember');
    Route::post('/updateMember', [MemberController::class, 'updateMember'])->name('updateMember');
    Route::get('/deleteMember/{id}', [MemberController::class, 'deleteMember'])->name('deleteMember');
    //--Member [end]--//

    //--event [start]--//
    Route::get('/eventList', [EventController::class, 'eventList'])->name('eventList');
    Route::post('/eventAdd', [EventController::class, 'eventAdd'])->name('eventAdd');
    Route::get('/eventDelete/{id}', [EventController::class, 'eventDelete'])->name('eventDelete');
    Route::get('/eventEdit/{id}', [EventController::class, 'eventEdit'])->name('eventEdit');
    Route::post('/eventUpdate', [EventController::class, 'eventUpdate'])->name('eventUpdate');
    //--event [end]--//

    //--notice [start]--//
    Route::get('/noticeList', [NoticeController::class, 'noticeList'])->name('noticeList');
    Route::post('/noticeAdd', [NoticeController::class, 'noticeAdd'])->name('noticeAdd');
    Route::get('/noticeDelete/{id}', [NoticeController::class, 'noticeDelete'])->name('noticeDelete');
    Route::get('/noticeEdit/{id}', [NoticeController::class, 'noticeEdit'])->name('noticeEdit');
    Route::post('/noticeUpdate', [NoticeController::class, 'noticeUpdate'])->name('noticeUpdate');
    //--notice [end]--//

    //--InsectAndDisease [start]--//
    Route::get('/insectAndDiseaseList', [InsectAndDiseaseController::class, 'insectAndDiseaseList'])->name('insectAndDiseaseList');
    Route::post('/insectAndDiseaseAdd', [InsectAndDiseaseController::class, 'insectAndDiseaseAdd'])->name('insectAndDiseaseAdd');
    Route::get('/insectAndDiseaseEdit/{id}', [InsectAndDiseaseController::class, 'insectAndDiseaseEdit'])->name('insectAndDiseaseEdit');
    Route::post('/insectAndDiseaseUpdate', [InsectAndDiseaseController::class, 'insectAndDiseaseUpdate'])->name('insectAndDiseaseUpdate');
    //--InsectAndDisease [end]--//
    
    // Route::get('/test', 'SalesController@test')->name('test');
    // pendingMemberList
    
});
/* Admin route end */
