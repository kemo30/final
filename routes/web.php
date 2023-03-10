<?php

use App\Http\Controllers\front\aboutController;
use App\Http\Controllers\front\appointmentController;
use App\Http\Controllers\front\careerController;
use App\Http\Controllers\front\contactController;
use App\Http\Controllers\front\delmaController;
use App\Http\Controllers\front\doctorsController;
use App\Http\Controllers\front\galeryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\managementController;
use App\Http\Controllers\front\News_EventsController;
use App\Http\Controllers\front\servicesController;
use App\Models\appointment;
use Illuminate\Routing\Route as RoutingRoute;


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
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
Route::get('/', [HomeController::class,'index'])->name('home');


Route::get('/news_events',[News_EventsController::class,'index'])->name('news_events');
Route::get('/detals/{news}',[News_EventsController::class,'show_news'])->name('news_show');
Route::get('/event/detals/{event}',[News_EventsController::class,'show_event'])->name('event_show');

Route::get('/doctorss',[doctorsController::class,'index'])->name('doctors');
Route::get('/doctors/{doctor}',[doctorsController::class,'show'])->name('doctors_show');

Route::get('/aboute',[aboutController::class,'index'])->name('front.about');

Route::get('/servicess',[servicesController::class,'index'])->name('front.services');
Route::get('/servicess/{service}',[servicesController::class,'show'])->name('services_show');

Route::get('/gallery',[galeryController::class,'index'])->name('front.gallery');
Route::get('/management',[managementController::class,'index'])->name('front.management');



Route::get('/contact',[contactController::class,'index'])->name('front.contact');
Route::get('/careers',[careerController::class,'index'])->name('front.careers');
Route::get('/appointment',[appointmentController::class,'index'])->name('front.appointment');
Route::post('/appointment',[appointmentController::class,'store'])->name('front.appointment_make');



require __DIR__.'/auth.php';



});



