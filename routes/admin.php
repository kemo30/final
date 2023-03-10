<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DashboardUsers;
use App\Http\Controllers\DelmaController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::group([

    'prefix' => '/dashboard',
    // 'namespace' => 'Dashboard',
    'middleware' => ['auth'],

],function(){

    Route::get('/', function () {
        return view('back.home');
    })->name('dashboard');
    
    Route::resource('services',ServiceController::class,[
       
        'index' => 'services.index',
        'store' => 'services.store',
        'create' => 'services.create',
        'show' => 'services.show',
        'edit' => 'services.edit',
        'update' => 'services.update',
        'destroy' => 'services.destroy',
      
    ]);

    Route::resource('doctors',DoctorsController::class,[
       
        'index' => 'doctors.index',
        'store' => 'doctors.store',
        'create' => 'doctors.create',
        'show' => 'doctors.show',
        'edit' => 'doctors.edit',
        'update' => 'doctors.update',
        'destroy' => 'doctors.destroy',
      
    ]);
    Route::resource('about',AboutController::class,[
       
        'index' => 'about',
        'store' => 'about.store',
        'create' => 'about.create',
        'show' => 'about.show',
        'edit' => 'about.edit',
        'update' => 'about.update',
        'destroy' => 'about.destroy',
      
    ]);
    Route::resource('news',NewsController::class,[
       
        'index' => 'news.index',
        'store' => 'news.store',
        'create' => 'news.create',
        'show' => 'news.show',
        'edit' => 'news.edit',
        'update' => 'news.update',
        'destroy' => 'news.destroy',
    ]);

    Route::resource('events',EventController::class,[
        'index' => 'events.index',
        'store' => 'events.store',
        'create' => 'events.create',
        'show' => 'events.show',
        'edit' => 'events.edit',
        'update' => 'events.update',
        'destroy' => 'events.destroy',
    ]);
    Route::resource('delma',DelmaController::class,[
        'index' => 'delma',
        'store' => 'delma.store',
        'create' => 'delma.create',
        'show' => 'delma.show',
        'edit' => 'delma.edit',
        'update' => 'delma.update',
        'destroy' => 'delma.destroy',
    ]);

  

    Route::resource('appointment',AppointmentController::class,[
        'index' => 'appointment.index',
        'store' => 'appointment.store',
        'create' => 'appointment.create',
        'show' => 'appointment.show',
        'edit' => 'appointment.edit',
        'update' => 'appointment.update',
        'destroy' => 'appointment.destroy',
    ]);

Route::get('appontement/today',[AppointmentController::class,'today'])->name('app.today');
Route::post('appontement/search',[AppointmentController::class,'search'])->name('app.search');

Route::resource('user',DashboardUsers::class,[
    'index' => 'user.index',
    'store' => 'user.store',
    'create' => 'user.create',
    'show' => 'user.show',
    'edit' => 'user.edit',
    'update' => 'user.update',
    'destroy' => 'user.destroy',
]);




  
});



